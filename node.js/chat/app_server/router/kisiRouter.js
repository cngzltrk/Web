var express=require("express");
var router=express.Router();
var controller=require("./../controller/kisiController");
router.get("/",controller.indexGet);
router.post("/",controller.indexPost);

module.exports=router;