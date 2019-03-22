var mongoose=require('mongoose');

mongoose.Promise=require('bluebird');
var mongoDB='mongodb://localhost/NodeProje';
mongoose.connect(mongoDB,function(err,data){
    if(err){
        console.log("hata war : "+err);
    }
    else{
        console.log("sıkıntı yok : "+mongoDB);
    }
});