// Actionscript, now defunct 
// (https://www.adobe.com/devnet/actionscript/articles/actionscript3_overview.html)
_root.createTextField("message", 0, 5, 5, 300, 50);
var tf:TextFormat = new TextFormat(); 
tf.color = 0xFF0000;
tf.size = 32;
tf.bold = true;
message.setTextFormat(tf);
message.text = "Hello World!"; 
