// JavaScript Document
function form(frm)
{
	var ad=frm.Ad.value;
	var soyad=frm.soyad.value;
    var email = frm.email.value;
    var kAd = frm.kAd.value;
    var psw = frm.psw.value;
	var psw2 = frm.pswT.value;

    if ( ad==null || ad==""  )
    {
        alert("Adınızı boş bırakmayın");
        return false;
    }
	if ( soyad==null || soyad==""  )
    {
        alert("Soyadınızı boş bırakmayın");
        return false;
    }
	if ( email==null || email==""  )
    {
        alert("emailinizi boş bırakmayın");
        return false;
    }
	if ( kAd==null || kAd==""  )
    {
        alert("Kullanıcı adı boş bırakmayın");
        return false;
    }
    if ( psw == null || psw == "" || psw2 == null || psw2 == "")
    {
        alert("Şifreyi boş bırakmayın");
        return false;
    }
    if ( !(psw == psw2) )
    {
        alert("Şifreler eşleşmiyor");
        return false;
    }
        
    return true;
}
// JavaScript Document
function giris(frm)
{
    var kAd = frm.kAd.value;
    var psw = frm.psw.value;
    if ( kAd==null || kAd==""  )
    {
        alert("Kullanıcı adı boş bırakmayın");
        return false;
    }
    if ( psw == null || psw == "")
    {
        alert("Şifreyi boş bırakmayın");
        return false;
    }


    return true;
}
function pro(frm)
{
    var baslik = frm.baslik.value;
    var yapilisi = frm.yapilisi.value;
    var kod = frm.kod.value;

    if ( baslik==null || baslik==""  )
    {
        alert("Başlığı boş bırakmayın");
        return false;
    }
    if ( yapilisi == null || yapilisi == "")
    {
        alert("Yapılışını boş bırakmayın");
        return false;
    }
    if ( kod == null || kod == "")
    {
        alert("Kod Bloğunu boş bırakmayın");
        return false;
    }


    return true;
}