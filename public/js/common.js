$(function(){
	$("select[name='area_id']").change(function(){
		//get value
		var v = $(this).val();
		var school = $("select[name='school_id']");
		$.getJSON("/index/school?city_id="+v,function(json){
			//create option append to school select
			school.empty();
			school.append('<option value="0">不限</option>');
			$.each(json,function(i,j){
				var option = "<option value='"+j.school_id+"' >"+j.school_name+"</option>";
				school.append(option);
			});
			
		});
	});
	
	//初始化生成
	var area_id = $("select[name='area_id']").val();
	if(area_id && area_id != 0 ){
		var school = $("select[name='school_id']");
		$.getJSON("/index/school?city_id="+area_id,function(json){
			//create option append to school select
			school.empty();
			school.append('<option value="0">不限</option>');
			var school_id = $("#param").attr("school_id") ;
			$.each(json,function(i,j){
				var selected = j.school_id == school_id ? "selected":'';
				var option 	 = "<option value='"+j.school_id+"' "+selected+"  >"+j.school_name+"</option>";
				school.append(option);
			});
			
		});
	}
	
	
	//字数限制
	
	$("input[type='text']").maxlength({maxCharacters: 30,status: false});
	

	$("textarea").maxlength({maxCharacters: 500,status: false});
	
	
	$('#memo').maxlength({maxCharacters: 60,status: false});
	
	
});


function show(o){
	var timenow = new Date().getTime();
	o.src="/index/code?d="+timenow;
}
function getVerify() {
	$.getJSON("/user/getverify",function(json){
		document.getElementById("ajaxrand").value=json.verify;
		document.getElementById("emailspan").innerHTML="<span class=tis_b>&nbsp;</span>";
	});
}

wait = function(timeout) {
	$("#msgshow").fadeOut(timeout);
}

var friendlyShow = function(msg,timeout){
	$("#msgshow").remove();
	$("body").append('<div id="msgshow"><div id="msgshow_img">'+msg+'</div></div>');
	$("#msgshow").show();
	setTimeout("wait("+timeout+")", timeout);
}
