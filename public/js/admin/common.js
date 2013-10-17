(function($){
	
})(jQuery);

function  out(event)   {   
	  var   oObj   =   event.srcElement ? event.srcElement : event.target;   
	  if(oObj.tagName.toLowerCase()   ==   "td")   
	  {   
	  var   oTr   =   oObj.parentNode;   
	  if(!oTr.tag)   
	  oTr.className   =   "out";   
	  }   
	}   
	    
	function  over(event)   {   
	      
	  var   oObj   =  event.srcElement ? event.srcElement : event.target;   
	  if(oObj.tagName.toLowerCase()   ==   "td")   {   
	  var   oTr   =   oObj.parentNode;   
	  if(!oTr.tag)   
	  oTr.className   =   "over";   
	  }   
}   