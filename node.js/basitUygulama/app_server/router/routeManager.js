var routeHome=require('./homeRouter.js');
var routeLogin=require('./loginRouter.js');
module.exports=function(app){
    app.use("/",routeHome);
    app.use("/login",routeLogin);
}
