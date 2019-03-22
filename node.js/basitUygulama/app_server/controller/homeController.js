var path =require("path");
var kullanici=require('../models/kullanici');
module.exports.index=function(req,res){
    kullanici.find(function(err,data){
        res.render('index',{
            kullanicilar:data
        });
    })
    
    //res.sendFile(path.join(__dirname,'../views/index.html'));
};
module.exports.iletisim=function(req,res){
    res.render('iletisim');
};