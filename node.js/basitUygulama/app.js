var express=require("express");
var app=express();
var path =require("path");
var ejsLayouts=require('express-ejs-layouts');
var bodyParser=require('body-parser');
var db=require('./app_server/models/db');
app.set('view engine','ejs');
app.set('views',path.join(__dirname,'/app_server/views'))
app.use(ejsLayouts);

app.use('/public',express.static(__dirname+'/public'));

app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());


require('./app_server/router/routeManager')(app);
app.listen(3000);
