<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title><link href="<?php echo ($Css); ?>style.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/jquery-1.7.2.min.js"></script><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/jquery.form.js"></script><link href="<?php echo ($WebPublic); ?>jquery/artDialog/skins/green.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/artDialog/jquery.artDialog.min.js"></script><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/artDialog/artDialog.plugins.min.js"></script><script type="text/javascript" src="<?php echo ($Js); ?>common.js"></script></head><body id="main_page"><div id="nav" style="display:none;"><dl><dt>当前位置：</dt><dd class="link">管理首页</dd><dd class="link">系统设置</dd><dd class="link">数据库设置</dd></dl></div><script type="text/javascript">	if ($.browser.msie) {
		document.execCommand("BackgroundImageCache", false, true);
	}
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;
</script><script type="text/javascript">	$(document).ready(function(){
		$('#frmConfig').ajaxForm({
			success: complete,
			dataType: 'json'
		});
		
		function complete(data){
			CloseLoadBox();
			if (data.status==1){
				SucceedBox(data.info);
				//url = "__GROUP__/public/clearcache/Action/clearcache";
				//$.get(url, {}, DelCacheComplete, "json");
            }else if(data.status==0){
				ErrorBox(data.info);
			}
		};
		
		 $('#frmConfig').submit(function(){
			 LoadBox("正在连接数据库，请稍后...");
	     	return false;
	     });
		 
		function DelCacheComplete(data, textStatus){
			if (data.status == 1){
				SucceedBox("配置数据库成功!");
			}else{ //删除缓存失败
				ErrorBox(data.info);
			}
		}
	});
</script><div class="wrap"><div class="container"><div id="main"><div class="con box-green"><form enctype="multipart/form-data" id="frmConfig" method="post" action="<?php echo ($Action); ?>"><div class="box-header"  id="c2"><h4>数据库设置</h4></div><div class="box-content"><table class="table-font"><tr><th>数据库服务器</th><td><input type="text" class="textinput w360" name="DB_HOST" value="<?php echo ($DbHost); ?>" /><span class='Caution'>本机请填localhost</span></td></tr><tr><th>端口号</th><td><input type="text" class="textinput w360" name="DB_PORT" value="<?php echo ($DbPort); ?>" /><span class='Caution'>默认端口为3306</span></td></tr><tr><th>数据库名称</th><td><input type="text" class="textinput w360" name="DB_NAME"  value="<?php echo ($DbName); ?>" /></td></tr><tr><th>用户名</th><td><input type="text" class="textinput w360" name="DB_USER" value="<?php echo ($DbUser); ?>"  /></td></tr><tr><th>密码</th><td><input type="password" class="textinput w360" name="DB_PWD" /></td></tr></table></div><div class="box-footer"><div class="box-footer-inner"><input id="btnSubmit" name="configdb"  type="submit" value="配置数据库" />&nbsp;&nbsp;
                        <input id="btnSubmit" name="testdb"  type="submit" value="测试连接" /></div></div></form></div><!--/ con--></div></div><!--/ container--></div><!--/ wrap--></body></html>