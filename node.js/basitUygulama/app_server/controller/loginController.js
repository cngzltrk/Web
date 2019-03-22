var kullanici=require('../models/kullanici');

module.exports.index=function(req,res){
    res.render('login');
};
module.exports.indexPost=function(req,res){
    var yeniKullanici=new kullanici({
        kullaniciAdi: req.body.username,
        sifre: req.body.password
    });
    yeniKullanici.save(function(err){});
    console.log(yeniKullanici);
    res.redirect('/');
}