var express=require("express");
var router=express.Router();
var controller=require("./../controller/homeController");
router.get("/",controller.index);
router.get("/iletisim",controller.iletisim);
module.exports=router;