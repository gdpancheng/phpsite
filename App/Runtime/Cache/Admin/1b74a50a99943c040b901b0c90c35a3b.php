<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>站长统计设置</title><link href="<?php echo ($Css); ?>style.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/jquery-1.7.2.min.js"></script><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/jquery.form.js"></script><link href="<?php echo ($WebPublic); ?>jquery/artDialog/skins/green.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/artDialog/jquery.artDialog.min.js"></script><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/artDialog/artDialog.plugins.min.js"></script><script type="text/javascript" src="<?php echo ($Js); ?>common.js"></script></head><body id="main_page"><div id="nav" style="display:none;"><dl><dt>当前位置：</dt><dd class="link">系统设置</dd><!--导航--><dd class="link">站长统计设置</dd><!--导航--></dl></div><script type="text/javascript">	if ($.browser.msie) {
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
			if (data.status==1){
				SucceedBox(data.info);
				location.href = "<?php echo ($Url); ?>Stat";
            }else if(data.status==0){
				ErrorBox(data.info);
			}
		};
		
		 $('#frmConfig').submit(function(){  // 提交表单
	     	return false;
	     });
	});
</script><div class="wrap"><div class="container"><div id="main"><div class="con box-green"><form enctype="multipart/form-data" id="frmConfig" method="post" action="<?php echo ($Action); ?>"><div class="box-header" id="c1"><h4>站长统计设置</h4></div><div class="box-content"><table class="table-font"><tr><th>帐号</th><td><input type="text" class="textinput" style="width:200px;"  name="STAT_USERNAME" value="<?php echo ($StatUserName); ?>" /><span class='Caution'>请填写注册的帐号，仅用于备忘，可不填写！还没有帐号？点击注册
        <a target="_blank" title="点击注册" href="http://tongji.baidu.com/web/register">百度统计注册</a>&nbsp;
        <a target="_blank"  title="点击注册" href="http://new.cnzz.com/user/reg.php">CNZZ统计注册</a></span>&nbsp;
        <a target="_blank"  title="点击注册" href="http://www.51.la/reg.asp">我要啦统计注册</a></span>&nbsp;
        <a target="_blank"  title="点击注册" href="http://www.linezing.com/register.php">量子恒道统计注册</a></span></td></tr><tr><th>密码</th><td><input type="text" class="textinput" style="width:200px;" name="STAT_USERPWD" value="<?php echo ($StatUserPwd); ?>" /><span class='Caution'>请填写注册的密码！仅用于备忘，可不填写！</span></td></tr><tr><th>统计脚本</th><td><textarea style="width:100%;height:200px" name="STAT_CODE"><?php echo ($StatCode); ?></textarea><span class='Caution'>请登录统计提供商后台，将统计脚本粘贴到文本框！</span></td></tr><tr><th>统计图标预览</th><td><?php echo ($StatCode); ?><span class='Caution'>点击图标登录，可查看网站流量统计情况！</span></td></tr><tr><th>是否启用</th><td><label><input type="radio" name="STAT_ENABLE" value="1" <?php if(($StatEnable) == "1"): ?>checked="checked"<?php endif; ?> />启用</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="STAT_ENABLE" value="0" <?php if(($StatEnable) == "0"): ?>checked="checked"<?php endif; ?> />禁用</label></td></tr></table></div><div class="box-footer"><div class="box-footer-inner"><input id="btnSubmit" type="submit" value="保存设置" /></div></div></form></div><!--/ con--></div></div><!--/ container--></div><!--/ wrap--></body></html>