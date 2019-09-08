var http = require('http');
var fs = require('fs');

http.createServer(function(req, res){
	




  	fs.readFile('inventory.json',function (err, data){
        res.writeHead(200, {'Content-Type': 'application/json'});
        
        //the data is JSON object , no need to parse it
        var json_string = JSON.parse(data);
        res.write(json_string.type)
		// Get Value from JSON
		/*res.write("Following data is fetched from the module : \n");
		res.write("Name :"+jsonContent.type+"\n");
		res.write("Asset Id:"+jsonContent.assetid+"\n");
		res.write("Image URL :"+jsonContent.image+"\n");*/

		//res.write(JSON.stringify(data)) ;
        res.end();
   
	});

  
}).listen(8000);


