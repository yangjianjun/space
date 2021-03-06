//#####################@ jq表单验证插件 20120328 koyshe @#####################//
(function($){
//定制常用正则
var rule_phone = /^((1[0-9]{10})|(0[1-9]{2,4}-[0-9]{6,10})|(0[1-9]{2,4}[0-9]{6,10})|([1-9]{6,10}))$/;
var rule_qq = /^[0-9]{6,10}$/;
var rule_email = /^[-_.A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[a-z]{2,3}$/;
var rule_zh = /^[\u4e00-\u9fa5]+$/;
var rule_noempty = /^[\u4e00-\u9fa5\w\s]{2,1000}$/;
var rule_idcard = /^([1-9][0-9]{14})|([1-9][0-9]{17})$/;
//姓名
var rule_tname=/^[\u4e00-\u9fa5\w\s]{2,10}$/;
//公司名
var rule_com=/^[\u4e00-\u9fa5\w\s]{2,20}$/;

function _success(_this, show_id, show_text) {
	_this.attr("pe_result", "true");
	_this.css("background-color","");
	if(show_id == 'checkboxspan' || show_id == 'emailp' || show_id == 'pwdp'  || show_id=='newuserPassspan2'){
		$("#" + show_id).html("&nbsp;");
	}else {
		$("#" + show_id).html('&nbsp;&nbsp;<img src="/public/images/tishi_yes.gif" />');
	}
}
function _error(_this, show_id, show_text) {
	_this.attr("pe_result", "false");
	_this.css("background-color","")
	if(show_id == 'emailp' || show_id == 'pwdp'){
		$("#" + show_id).html(show_text);
	}else{
		$("#" + show_id).html('<span class="tis_a">'+show_text+'</span>');
	}
	
}
//比较数字大小或比较字符串长短（内部调用）
function _maxmin (_config, _val, type) {
	var _this = $(":input[name='"+_config.name+"']");
	var _limit = _config.arg.split('|');
	if (type == 'num') {
		var numtype = !isNaN(_val);
	}
	else {
		var numtype = true;		
	}
	if (_limit[0] && _limit[1] === '') {
		if ((numtype && _val >= parseFloat(_limit[0])) || (_val == '' && _config.must == false)) {
			_success(_this, _config.show_id);
		}
		else {
			_error(_this, _config.show_id, _config.show_error);
		}
	}
	else if (_limit[1] && _limit[0] === '') {
		if ((numtype && _val <= parseFloat(_limit[1])) || (_val == '' && _config.must == false)) {
			_success(_this, _config.show_id);
		}
		else {
			_error(_this, _config.show_id, _config.show_error);
		}
	}
	else if (_limit[0] && _limit[1]) {
		if ((numtype && _val >= parseFloat(_limit[0]) && _val <= parseFloat(_limit[1])) || (_val == '' && _config.must == false)) {
			_success(_this, _config.show_id);
		}
		else {
			_error(_this, _config.show_id, _config.show_error);
		}
	}
	else {
		if ((_val && _config.must == true) || (_val == '' && _config.must == false)) {
			_success(_this, _config.show_id);
		}
		else {
			_error(_this, _config.show_id, _config.show_error);
		}
	}
}
//验证核心操作（内部调用）
function _core (my_config) {
	var pe_config = {
		name : '',
		mod : '',
		act : 'blur',
		arg : '',
		show_id : '',
		show_error : 'error',
		must : true
	};
	var _config = $.extend(pe_config, my_config);
	var _this = $(":input[name='"+_config.name+"']");
	var _val = _this.val();
	if (_this.attr('pe_result') == 'false') return;
	switch (_config.mod) {
		case 'match':
			if (_config.arg == 'email' || _config.arg == 'phone' || _config.arg == 'qq' || _config.arg == 'idcard' || _config.arg == 'zh' || _config.arg == 'tname' || _config.arg == 'com'  || _config.arg == 'noempty') {
				var _rule = eval('rule_'+_config.arg);
			}
			else {
				var _rule = config.arg;
			}
			if (_rule.test(_val) || (_val == '' && _config.must == false)) {
				_success(_this, _config.show_id);
			}
			else {
				_error(_this, _config.show_id, _config.show_error);
			}
		break;
		case 'str':
			_maxmin(_config, _val.length, 'str');
		break;
		case 'num':
			_maxmin(_config, _val, 'num');
		break;
		case 'equal':
			if (typeof(_config.arg) == 'object') _config.arg = _config.arg.val();
			
//			alert("_val= " +_val +" _config.arg= " +_config.arg);
			if (_val == _config.arg || (_val == '' && _config.must == false)) {
				_success(_this, _config.show_id);
			}
			else {
				_error(_this, _config.show_id, _config.show_error);
			}
		break;
		case 'notequal':
			if (typeof(_config.arg) == 'object') _config.arg = _config.arg.val();
			if (_val == _config.arg  || (_val == '' && _config.must == false)) {
				_error(_this, _config.show_id, _config.show_error);
			}
			else {
				_success(_this, _config.show_id);
			}
		break;
		case 'ajax':
			$.ajaxSettings.async = false;
			/*$.ajaxSetup({async: false}); // 使用同步方式执行AJAX*/
			var _ajax_data = _config.arg();
			$.getJSON(_ajax_data.url, _ajax_data.data, function(json){
			  	if (json.result) {
					_success(_this, _config.show_id);
				}
				else {
					_error(_this, _config.show_id, _config.show_error);
				}
			});
		break;
		case 'fun':

		break;
	}
}
$.fn.pe_submit = function(my_config, form_id) {
	
	//alert('777');
	
	//绑定提交按钮验证
	this.bind('click', function(){
		var submit_result = true;
		var k;
		for (k in my_config) {
			$(":input[name='"+my_config[k].name+"']").removeAttr('pe_result');
		}
		for (k in my_config) {
			_core(my_config[k]);
			if ($(":input[name='"+my_config[k].name+"']").attr('pe_result') == 'false') {
				submit_result = false;
			}
		}
		if (submit_result == true) {
			$("#"+form_id).submit();
		}
	})
	//绑定每个表单验证
	var k;
	for (k in my_config) {
		var _config = my_config[k];
		$(":input[name='"+_config.name+"']").bind('change', function() {
			$(this).removeAttr('pe_result');
		});
		$(":input[name='"+_config.name+"']").bind(_config.act, {'_config':_config}, function(event) {

			_core(event.data._config);
		})
	}
}
})(jQuery);