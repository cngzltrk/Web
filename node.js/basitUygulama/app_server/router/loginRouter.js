var express=require("express");
var router=express.Router();
var controller=require("../controller/loginController");
router.get('/',controller.index);
router.post('/',controller.indexPost);
module.exports=router;