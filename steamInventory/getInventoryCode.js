const li = require("steam-inventory");
var http = require('http');
var fs = require('fs');
var url = require('url') ;



http.createServer(function(req, res){
	
  var sid = url.parse(req.url, true);

  var sid_req = sid.query; //returns an object

	li("76561198447852807"/*sid_req.steamid*/, 730, 2, (items, error) => {
    if(error) {

        res.writeHead(200, {'Content-Type': 'text/plain'} );
        res.write("Error");
        res.end();       
        
    } 
    else {
      //console.log(JSON.stringify(items)) ;
      res.writeHead(200, {'Content-Type': 'application/json'} );
        res.write(JSON.stringify(items));
        res.end();
    }
  });

  
}).listen(8888 , '127.0.0.1');