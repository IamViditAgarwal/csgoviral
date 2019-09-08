// bots/main.js

const SteamUser = require('steam-user');
const SteamCommunity = require('steamcommunity');
const TradeOfferManager = require('steam-tradeoffer-manager');
const mysql = require('mysql');
const Winston = require('winston'); // For logging

const logger = new (Winston.Logger)({
        transports: [
           
            new (Winston.transports.File)({
                level: 'debug', 
                timestamp: true, 
                filename: '/home/vidit/botDump.log', 
                json: false
            })
        ] ,
        exceptionHandlers: [
    		new (Winston.transports.File)({ 
    			filename: '/home/vidit/exceptions.log' 
    		})
  		] ,

		exitOnError: false

});


const con = mysql.createConnection({
	 host : "",
     user : "",
     password : "",
     database: "csgoviral",
     connectTimeout : 43200,
     
     port:3306
});


class SteamBot 
{

	constructor(logOnOptions , sharedSecret , idSecret) 
	{
		this.client = new SteamUser();
		this.community = new SteamCommunity();
		this.manager = new TradeOfferManager({
		  steam: this.client,
		  community: this.community,
		  language: 'en' ,
		  pollInterval : 10000 ,
		  cancelTime : 120000
		});

		this.logOn(logOnOptions , sharedSecret , idSecret);
	}

	logOn(logOnOptions, sharedSecret , idSecret) {
		this.client.logOn(logOnOptions);

		this.client.on('loggedOn', () => {
			logger.debug("[/New/] Logged into Steam as " + this.client.steamID);

			this.client.setPersona(SteamUser.Steam.EPersonaState.Online);
			this.client.gamesPlayed(730);
		});

		this.client.on('webSession', (sessionid, cookies) => {
			logger.debug("[/New/] got web session "+ sessionid) ;
			this.manager.setCookies(cookies);
			this.community.setCookies(cookies);
			this.community.startConfirmationChecker(10000, idSecret);
		});
	}

	sendItemToBot(prtnr , turl /*, itemArr , extraItem , caseItemImage , odd, rarity , weaponName , skinName , exterior */, callback) 
	{  
		  
		 // const n = itemArr.length;
		 // const tem = itemArr;
		  var ourId =0;
		  let sure=0;
		  let botq ="" ;
		  const offer = this.manager.createOffer(turl);

		  console.log(turl) ;

		 this.manager.getInventoryContents(730 , 2 , true , (err , myInv)=> {

			  	if(err)
			  	{
			  		logger.debug("[/New/] Error in getting Bot Inventory Contnts " + err);
			  		callback(new Error('err') , false) ;
			  	}
			  	else 
			  	{
			  		//const myItem = myInv.find(item => item.market_hash_name == "Gamma Case" ) ;
			  		//botq = botq + "Gamma Case sending;" ;
			  	    //offer.addMyItem(myItem) ;
			  	    console.log("reached here") ;
			  		this.manager.getUserInventoryContents(this_partner, 730 , 2 , true, (err, inv) => {
				      if (err) 
				      {
				      	logger.debug("[/New/] Error in getting User Inventory Skins " + "User : " + this_partner + "Error : " + err);
				       	callback(new Error('err') , false) ;
				       
				      } 
				      else 
						{
							console.log("reached here here") ;
							console.log("tu :" , this_tradeURl) ;
					       
						}
	      			});
			  	}
			  }) ;
	}

	sendWithdrawTrade(turl , itemBackArr , uniqCid , prtnr) 
	{
		// credits ,assetid, callback
	  	const this_partner = prtnr ;
	  	const tradeURl =  turl;
		const m = itemBackArr.length;
	  	const skin = itemBackArr;
	  	let botq ="" ;
	  	let chk =0 ;
	  	let SendId =0;

		const offer = this.manager.createOffer(tradeURl);

		this.manager.getInventoryContents(730, 2, true, (err, inv) => {
			if (err) {
				logger.debug("[/New/] Error occured in getting Bot inv contents " + err );
			} else {
				//const item = inv.find((item) => item.market_hash_name == "Gamma Case" );

				for(var i=0; i<m; i++){
		      		try
		      		{
		      			
		      			const myItem = inv.find(item => item.market_hash_name == skin[i] ) ;
		      			botq=botq + skin[i] + ";" ;
			      		offer.addMyItem(myItem);

			      		chk =1;
		      		}
		      		catch (error)
		      		{
		      			chk=0;
		      			logger.debug("[/New/] Item not found in Bot Inventory error : " + error);

		      		}
		      		if(chk==0)
		      				break;

		      	}


				if (chk) 
				{

					//offer.addMyItem(item);
					offer.setMessage('Withdraw item from the Bot!');
					offer.send((err, status) => {

						if(err)
						{
							logger.debug("[/New/] Error in offer sending at SendWithdrawTrade from Bot to User : "+ this_partner + "Error : " + err);
						}
						else
						{
							SendId = offer.id ;
							logger.debug("[/New/] Trade Offer send " + offer.id + "to " + this_partner);

						}
					});
				} 
				
			}
		});

		this.manager.on('sentOfferChanged', function(offer, oldState) 
        {
        	
            if (offer.id ==SendId && offer.state == TradeOfferManager.ETradeOfferState.Accepted) 
            {
            	const sql="DELETE FROM holdItem.holdItem_user_"+this_partner+" WHERE cid = "+uniqCid+"" ;

                con.query(sql, function (err, result) 
                {

                    if (err) 
                        logger.debug("[/New/] Error in deleting at sendWithdrawTrade " + err);
                    
                    else 
                    {
                    	//insert into the bot db
                    	con.query("INSERT INTO botdb.botdata (offerid , botid , userid , data) VALUES ('"+offer.id+"' , 'bot1' , '"+this_partner+"' , '"+botq+"')", function (err, result) 
		                {

		                    if (err) 
		                        logger.debug("[/New/] Error in Inserting at BotDb at sendWithdrawTrade " + err);
		                    
		    
		                });


                    }
                });
            }
        });
	}

}

module.exports = SteamBot;