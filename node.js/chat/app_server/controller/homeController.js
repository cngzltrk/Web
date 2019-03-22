var path =require("path");
var kullanici=require('../model/kullanici');
module.exports.indexGet=function(req,res){
        res.render('index');
};
module.exports.indexPost=function(req,res){
        var yeniKullanici=req.body.username;
        console.log(yeniKullanici);
        res.redirect('/mesaj',{
            yeni:yeniKullanici
        });
};