// JavaScript Document
function HTMLEncode(text){
	text = text.replace(/&/g, "&amp;") ;
	text = text.replace(/"/g, "&quot;") ;
	//text = text.replace(/</g, "&lt;") ;
	//text = text.replace(/>/g, "&gt;") ;
	text = text.replace(/'/g, "’") ;
	text = text.replace(/\ /g,"&nbsp;");
	text = text.replace(/\n/g,"<br/>");
	//text = text.replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;");
	return text;
}

function HTMLEncode3(text){
	
	//text = text.replace(/&/g, "&amp;") ;
	text = text.replace(/"/g, "”") ;
	//text = text.replace(/</g, "&lt;") ;
	//text = text.replace(/>/g, "&gt;") ;
	text = text.replace(/'/g, "’") ;
	text = text.replace(/\ /g,"　");
	text = text.replace(/\n/g,"<br/>");
	//text = text.replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;");
	return text;
}
function HTMLEncode_msg(text){

	text = text.replace(/'/g, "’") ;
	
	return text;
}

function ReplaceAll(str, sptr, sptr1)
{
while (str.indexOf(sptr) >= 0)
{
   str = str.replace(sptr, sptr1);
}
return str;
}

 function show(o){
var timenow = new Date().getTime();
o.src="image.jsp?d="+timenow;
 }

function HTMLEncode2(text){

	text = text.replace( "&lt;","<") ;
	text = text.replace("&gt;", ">") ;
	//text = text.replace(/'/g, "’") ;
	//text = text.replace(/\ /g,"&nbsp;");
	//text = text.replace(/\n/g,"<br/>");
	//text = text.replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;");
	return text;
}




String.prototype.Trim = function(){ return Trim(this);} 
String.prototype.LTrim = function(){return LTrim(this);} 
String.prototype.RTrim = function(){return RTrim(this);} 

//此处为独立函数 
function LTrim(str) 
{ 
var i; 
for(i=0;i<str.length;i++) 
{ 
if(str.charAt(i)!=" "&&str.charAt(i)!=" ")break; 
} 
str=str.substring(i,str.length); 
return str; 
} 
function RTrim(str) 
{ 
var i; 
for(i=str.length-1;i>=0;i--) 
{ 
if(str.charAt(i)!=" "&&str.charAt(i)!=" ")break; 
} 
str=str.substring(0,i+1); 
return str; 
} 
function Trim(str) 
{ 
return LTrim(RTrim(str)); 
}

function toText(str){ 
    
    str = str.replace(/\>/g, "]");  
    str = str.replace(/\</g, "[");  
      
   str = str.replace(/\'/g, "’");  
  
   return str;
}
