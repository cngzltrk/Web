var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var fs = require("fs");
app.get('/', function(req, res){
    //var contents = fs.readFileSync("jsoncontent.json");
    // Define to JSON type
     //var jsonContent = JSON.parse(contents);
     var data = fs.readFileSync("msj.txt", "utf-8");
            res.write(data);
            res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
    socket.on('chat message', function(msg){
       fs.appendFile("./msj.txt", ('\n'+msg), function (ex) {
           if (ex) {
               console.log(ex);
           }
       });
        io.emit('chat message', msg);
    });
  });
http.listen(3000, function(){
  console.log('listening on *:3000');
});