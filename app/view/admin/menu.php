<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel='stylesheet' type='text/css' href='/public/css/style.css' />
            <style>
                html{overflow-x : hidden;}
				a{outline:none; blr:expression(this.onFocus=this.blur());}
            </style>
            <base target="main" />
    </head>

    <body style="background-color:#333;" >
        <div id="menu" class="menu">
            <table class="list shadow" cellpadding=0 cellspacing=0 >
                <tr>
                    <td height='3' colspan=1 class="topTd" ></td>
                </tr>
                <tr class="row group" >
                	<th class="space">
                    	<img src="/public/images/home.gif" width="9" height="9" BORDER="0" ALT="" align="absmiddle" /> 
                    	<a id="" href="javascript:;">后台管理</a>
                    </th>
                </tr>
                    <tr class="row menu" >
                    	<td>
                        	<div class="left_menu" style="margin:0px 5px">
                            	<img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                            	<a href="/admin/user/" id="0">用户管理</a>
                        	</div>
                        </td>
                     </tr>
                     <tr class="row menu" >
                            <td>
                                <div class="left_menu" style="margin:0px 5px">
                                    <img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                                    <a href="/admin/ambassador" id="0">校园大使</a>
                                </div>
                            </td>
                      </tr>
                      <tr class="row menu" >
                            <td>
                                <div class="left_menu" style="margin:0px 5px">
                                    <img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                                    <a href="/admin/jingcaishunjian" id="0">精彩瞬间</a>
                                </div>
                            </td>
                        </tr>
                     <tr class="row menu" >
                    	<td>
                        	<div class="left_menu" style="margin:0px 5px">
                            	<img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                            	<a href="/admin/plan/" id="0">方案管理</a>
                        	</div>
                        </td>
                     </tr>
                     <tr class="row menu" >
                    	<td>
                        	<div class="left_menu" style="margin:0px 5px">
                            	<img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                            	<a href="/admin/scheme/" id="0">赞助留言</a>
                        	</div>
                        </td>
                     </tr>
            
                        <tr class="row group" >
                        <th class="space">
                            <img src="/public/images/home.gif" width="9" height="9" BORDER="0" ALT="" align="absmiddle" /> 
                            <a id="" href="javascript:;">其它管理</a>
                        </th>
	                    </tr>
	        
	                    <tr class="row menu" >
                            <td>
                                <div class="left_menu" style="margin:0px 5px">
                                    <img src="/public/images/comment.gif" width="9" height="9" BORDER="0" align="absmiddle" ALT="" />
                                    <a href="/admin/db" id="0">数据库(备份/还原)</a>
                                </div>
                            </td>
                        </tr>
		                <tr>
		                    <td height='3' colspan=1 class="bottomTd"></td>
		                </tr>
            </table>
        </div>

		<script language="JavaScript">
			function refreshMainFrame(url)
			{
				parent.main.document.location = url;
			}

			if (document.getElementsByTagName("a")[0].href)
			{
				refreshMainFrame(document.getElementsByTagName("a")[0].href);		
			}
		//-->
		</script>
		
		<script type="text/javascript" src="/public/js/jquery-1.9.1.min.js"></script>
		<script language="JavaScript">
			$(function(){
				$(".left_menu").click(function(){
					$(".left_menu").children("a").css("color","#333333");
					$(".row td").css("background-color","#FFFFFF");
					$(this).children("a").css("color","#CC0000");
					$(this).parents("td").css("background-color","#DDDDDD");
				});
                                $(".group").click(function(){
                                    var visible = $(this).nextUntil(".group").first().is(":visible");
                                    if(visible){
                                        $(this).nextUntil(".group").hide();
                                    }else{
                                        $(this).nextUntil(".group").show();
                                    }
                                })
			});
		//-->
		</script>

    </body>
</html>