var path =require("path");
var kullanici=require('../model/kullanici');
module.exports.indexGet=function(req,res){
        res.render('mesaj');
};
module.exports.indexPost=function(req,res){
        var yeniKullanici=new kullanici({
            kullaniciAdi: req.body.username,
            mesaj:'merhaba',
            tarih: Date.now()
        });
        //yeniKullanici.save(function(err){});
        console.log(yeniKullanici);
        res.render('mesaj');
};