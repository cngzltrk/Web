var express=require("express");
var router=express.Router();
var controller=require("./../controller/homeController");
router.get("/",controller.indexGet);
router.post("/",controller.indexPost);

module.exports=router;