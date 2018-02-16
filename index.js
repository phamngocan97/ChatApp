var express = require("express");
var app = express();
app.listen(process.env.PORT || 3000);
app.get("/demo",function(req,res){
	res.send("cc");
});