var routeHome=require('./homeRouter.js');
var routeKisi=require('./kisiRouter.js');

module.exports=function(app){
    app.use("/mesaj",routeKisi);    
    app.use("/",routeHome);
    
}
