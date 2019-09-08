//bots/app.js

const SteamTotp = require('steam-totp');
const SteamBot = require('../bots/main.js');
const config = require('../bots/config_1.json');


const http = require('http') ;
const url = require('url') ;

const bot = new SteamBot({
	accountName: config.username,
	password: config.password,
	twoFactorCode: SteamTotp.generateAuthCode(config.sharedSecret)
} , config.sharedSecret , config.idSecret);
 


 http.createServer(function (req, res) 
 {
  console.log("server started") ;
  res.writeHead(200, {'Content-Type': 'text/html'});

  const q = url.parse(req.url , true);
  
  
  const q_request = q.query; //returns an object
  
  //console.log(q_request) ;
  

  //deposit skin to bot
  if(q_request.req === "bot" && q_request.mode === "send")  ///check for the bot code 
  {   
      console.log('function called') ;
      const partner = q_request.partner;

      const tradeURL =  q_request.tradeUrl ;
      
      const f_t = tradeURL +"&token="+q_request.token ;
      
      const caseName =  q_request.caseName ;

      const caseType =  q_request.caseType ;

      const caseColor = q_request.caseColor ;

      const casePrice = q_request.casePrice ;

      console.log(tradeURL);
      console.log(f_t);
        bot.sendItemToBot(partner , f_t /*, itemArr , extraItem , caseItemImage , odd , rarity , weaponName , skinName , exterior ,*/, function (error , success){
          if(error)
          {
            res.write(error);
             res.end() ;
          }
          else
          {
            res.write(success);
            res.end() ;
          }
         
         
      }) ;
  }


//withdraw skins of deleted case
 if(q_request.req === "bot" && q_request.mode === "withdrawDelCase" )
 {

    console.log('function called') ;
    const DelId = q_request.DelId ;
    const tradeURL =  q_request.tradeUrl ;
    const prtnr = q_request.partner ;
    const f_t = tradeURL +"&token="+q_request.token ;

    const itemBackArr = new Array() ;
     
    if(q_request.Itm1)
    {
      itemBackArr.push(q_request.Itm1) ;
    }
     if(q_request.Itm2)
    {
      itemBackArr.push(q_request.Itm2) ;
    }
     if(q_request.Itm3)
    {
      itemBackArr.push(q_request.Itm3) ;
    }
     if(q_request.Itm4)
    {
      itemBackArr.push(q_request.Itm4) ;
    }
     if(q_request.Itm5)
    {
      itemBackArr.push(q_request.Itm5) ;
    }
     if(q_request.Itm6)
    {
      itemBackArr.push(q_request.Itm6) ;
    }
     if(q_request.Itm7)
    {
      itemBackArr.push(q_request.Itm7) ;
    }
     if(q_request.Itm8)
    {
      itemBackArr.push(q_request.Itm8) ;
    }
     if(q_request.Itm9)
    {
      itemBackArr.push(q_request.Itm9) ;
    }
     if(q_request.Itm10)
    {
      itemBackArr.push(q_request.Itm10) ;
    }
    
    console.log(itemBackArr) ;



  bot.sendWithdrawTrade(f_t , itemBackArr , DelId , prtnr) ;
}
 

//withdraw winning skin from bot
if(q_request.req==="bot" && q_request.mode ==="withdrawSkin")
{
    console.log('function called') ;
    const tradeURL =  q_request.tradeUrl ;
    const Id = q_request.Id ;
    const prtnr = q_request.partner ;
    const f_t = tradeURL +"&token="+q_request.token ;

    const oneSkinArr = new Array() ;
     
    if(q_request.Skin)
    {
      oneSkinArr.push(q_request.Skin) ;
    }


    console.log(oneSkinArr) ;
     bot.sendWithdrawTrade(f_t , oneSkinArr , Id , prtnr) ;



}

//withdraw skins of left case 
 if(q_request.req === "bot" && q_request.mode === "withdrawLeftCase" )
 {

    console.log('function called') ;
    const tradeURL =  q_request.tradeUrl ;
    const CaseId = q_request.CaseId ;
    const prtnr = q_request.partner ;
    const f_t = tradeURL +"&token="+q_request.token ;

    const itemLeftArr = new Array() ;
     
    if(q_request.Itm1)
    {
      itemLeftArr.push(q_request.Itm1) ;
    }
     if(q_request.Itm2)
    {
      itemLeftArr.push(q_request.Itm2) ;
    }
     if(q_request.Itm3)
    {
      itemLeftArr.push(q_request.Itm3) ;
    }
     if(q_request.Itm4)
    {
      itemLeftArr.push(q_request.Itm4) ;
    }
     if(q_request.Itm5)
    {
      itemLeftArr.push(q_request.Itm5) ;
    }
     if(q_request.Itm6)
    {
      itemLeftArr.push(q_request.Itm6) ;
    }
     if(q_request.Itm7)
    {
      itemLeftArr.push(q_request.Itm7) ;
    }
     if(q_request.Itm8)
    {
      itemLeftArr.push(q_request.Itm8) ;
    }
     if(q_request.Itm9)
    {
      itemLeftArr.push(q_request.Itm9) ;
    }
     if(q_request.Itm10)
    {
      itemLeftArr.push(q_request.Itm10) ;
    }
    
    console.log(itemLeftArr) ;



  bot.sendWithdrawTrade(f_t , itemLeftArr , CaseId  , prtnr) ;
}

}).listen(8000 , '127.0.0.1');

console.log("Listening at localhost:8000") ;      
