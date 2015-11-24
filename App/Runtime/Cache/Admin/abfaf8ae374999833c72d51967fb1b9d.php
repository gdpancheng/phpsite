<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title><link href="<?php echo ($Css); ?>style.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo ($WebPublic); ?>jquery/jquery-1.7.2.min.js"></script><script type="text/javascript" src="<?php echo ($Js); ?>common.js"></script><script>function Upgrade(){
    var url = "<?php echo ($Url); ?>upgrade";
	showtip("升级中，请稍后...", true); 
	$.get(url, {}, Complete, "json");
	return true;
}

function Complete(data, textStatus){
	if (data.status == 1){
		$("#CurrentVersion").html("<?php echo ($LastestVersion); ?>");
		$("#LastestDate").html("<?php echo ($LastestDate); ?>");
		showtip("恭喜您，升级成功！", false);
	}else if(data.status == 2){
		showtip("已经是最新版本，无需升级！", false);	
	}else{
		showtip("<b style='color:red'>抱歉，升级失败！</b>", false);
	}
}

function showtip(str, isanimation){
	html = "";
	if( isanimation ){
		html = "<img src='<?php echo ($WebPublic); ?>Images/loading/21.gif' border='0' align='absmiddle'/>";
	}
	html += str;
	$("#upgradetip").html(html);		
}

function GetTotalSize(){
    var url = "<?php echo ($Url); ?>getWebTotalSize";
	sizetip("计算中，请稍后...", true); 
	$.get(url, {}, TotalComplete, "json");
	return true;
}

function TotalComplete(data, textStatus){
	if (data.status == 1){
		$("#WebTotalSize").html(data.data);
	}else{
		sizetip("系统超时，请重试！", false);	
	}
}

function sizetip(str, isanimation){
	html = "";
	if( isanimation ){
		html = "<img src='<?php echo ($WebPublic); ?>Images/loading/21.gif' border='0' align='absmiddle'/>";
	}
	html += str;
	$("#WebTotalSize").html(html);		
}

</script><script>$(document).ready(function(){   
	$("#AuthorizeText").css("visibility","hidden"); 
	$("#AuthorizeText").css("display","none"); 
});
</script><style>#upgradetip{
	color:green;
	font-weight:bold;	
}

.ImageYes{
	font-size: 14px;
	color: #339900;
	font-weight:bold;
	font-family:Verdana;
} 
.ImageNo{
	font-size:14px;
	color:red;
	font-weight:bold;
	font-family:Verdana;
}
</style></head><body id="main_page"><div id="nav" style="display:none;"><dl><dt>当前位置：</dt><dd class="link">后台主页</dd></dl></div><script type="text/javascript">	if ($.browser.msie) {
		document.execCommand("BackgroundImageCache", false, true);
	}
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;
</script><div class="wrap"><div class="container"><div id="main"><div class="con"><div class="table"><h2 class="th" id="c5">登录成功</h2><table><tr><td width="33%">您好!&nbsp;&nbsp;<span class="redTip"><?php echo ($AdminName); ?></span>&nbsp;&nbsp;您已成功登录系统!</td><td width="33%">登录IP:<span class="redTip"><?php echo ($LastLoginIP); ?></span>&nbsp;&nbsp;</td><td  width="33%">登录时间:<span class="redTip"><?php echo ($LastLoginTime); ?></span></td></tr></table></div><div class="table"><h2 class="th" id="c3">服务器基本信息 <span class="head">&nbsp;&nbsp;当前服务器时间:<?php echo ($Server["Time"]); ?></span></h2><table><tr><td width="50%" colspan="2">操作系统:&nbsp;&nbsp;<b><?php echo ($Server["OS"]); ?></b></td><td width="25%">服务器IP:&nbsp;&nbsp;<span class="redTip"><?php echo ($Server["IP"]); ?></span></td><td width="25%">服务器CPU个数:&nbsp;&nbsp;<span class="redTip"><?php echo ($Server["CPUNumber"]); ?></span></td></tr><tr><td width="25%">PHP运行模式:&nbsp;&nbsp;<b><?php echo ($Server["PHPSAPI"]); ?></b></td><td width="25%">PHP版本:&nbsp;&nbsp;<span class="redTip"><?php echo ($Server["PHPVersion"]); ?></span></td><td width="25%">PHP安全模式:&nbsp;&nbsp;<?php echo ($Server["PHPSafe"]); ?></td><td width="25%">POST最大字节数&nbsp;post_max_size: &nbsp;&nbsp;<span class="redTip"><?php echo ($Server["MaxPostSize"]); ?></span></td></tr><tr><td>Session:&nbsp;&nbsp;<?php echo ($Server["Session"]); ?></td><td>Cookie:&nbsp;&nbsp;<?php echo ($Server["Cookie"]); ?></td><td>脚本最长执行时间: &nbsp;&nbsp;<span class="redTip"><?php echo ($Server["MaxExecutionTime"]); ?></span>秒</td><td>最大上传大小:&nbsp;&nbsp;<span class="redTip"><?php echo ($Server["UploadMaxFileSize"]); ?></span></td></tr><tr><td>服务器操作系统文字编码:&nbsp;&nbsp;<b><?php echo ($Server["AcceptLanguage"]); ?></b></td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td></tr></table></div><div class="table"><h2 class="th" id="c4">组件支持情况&nbsp;&nbsp;
                    <a href="<?php echo ($Group); ?>/Public/phpinfo" target="_self">[查看更多...]</a></h2><table><tr><td width="25%">Curl:&nbsp;&nbsp;<?php echo ($Server["CurlInit"]); ?></td><td width="25%">iconv编码:&nbsp;&nbsp;<?php echo ($Server["Iconv"]); ?></td><td width="25%">图形处理 GD Library:&nbsp;&nbsp;<?php echo ($Server["GD"]); ?></td><td width="25%">ZendOptmizer:<?php echo ($Server["ZendOptimizer"]); ?></td></tr><tr><td>自定义全局变量&nbsp;register_globals:<?php echo ($Server["RegisterGlobals"]); ?></td><td>程序最多允许使用内存量&nbsp;memory_limit:<span class="redTip"><?php echo ($Server["MemoryLimit"]); ?></span></td><td>拼写检查 ASpell Library:&nbsp;&nbsp;<?php echo ($Server["ASpell"]); ?></td><td>高精度数学运算 BCMath:&nbsp;&nbsp;<?php echo ($Server["BCMath"]); ?></td></tr><tr><td>历法运算 Calendar:&nbsp;&nbsp;<?php echo ($Server["Calendar"]); ?></td><td>类/对象支持:&nbsp;&nbsp;<?php echo ($Server["Class"]); ?></td><td>字串类型检测:&nbsp;&nbsp;<?php echo ($Server["CType"]); ?></td><td>MCrypt加密:&nbsp;&nbsp;<?php echo ($Server["MCrypt"]); ?></td></tr><tr><td>哈稀计算 MHash:&nbsp;&nbsp;<?php echo ($Server["MHash"]); ?></td><td>OpenSSL:&nbsp;&nbsp;<?php echo ($Server["OpenSSL"]); ?></td><td>流媒体支持:&nbsp;&nbsp;<?php echo ($Server["StreamMedia"]); ?></td><td>Tokenizer:&nbsp;&nbsp;<?php echo ($Server["Tokenizer"]); ?></td></tr><tr><td>文件压缩 Zlib:&nbsp;&nbsp;<?php echo ($Server["Zlib"]); ?></td><td>XML解析:&nbsp;&nbsp;<?php echo ($Server["XML"]); ?></td><td>目录存取协议 LDAP:&nbsp;&nbsp;<?php echo ($Server["LDAP"]); ?></td><td>Yellow Page系统:&nbsp;&nbsp;<?php echo ($Server["YellowPage"]); ?></td></tr><tr><td>PDF:&nbsp;&nbsp;<?php echo ($Server["PDF"]); ?></td><td>magic_quotes_gpc:&nbsp;&nbsp;<?php echo ($Server["MagicQuotes"]); ?></td><td>多字节字符串MbString:&nbsp;&nbsp;<?php echo ($Server["MbString"]); ?></td><td>&nbsp;</td></tr></table></div><div class="table"><h2 class="th" id="c5">网站空间和数据库</h2><table><tr><td colspan="4">                    网站总大小：<b id="WebTotalSize" style="color:red"></b>&nbsp;&nbsp;<a onclick="GetTotalSize()">点击查询</a></td></tr><tr><td width="25%">MySql版本:&nbsp;&nbsp;<b><?php echo ($Server["MySqlVersion"]); ?></b></td><td width="25%">数据库服务器:&nbsp;&nbsp;<b><?php echo (C("DB_HOST")); ?></b></td><td width="25%">数据库名称:&nbsp;&nbsp;<b><?php echo (C("DB_NAME")); ?></b></td><td width="25%">数据库大小:&nbsp;&nbsp;<span class="redTip"><?php echo ($Server["DbSize"]); ?></span></td></tr></table></div></div><!--/ con--></div></div><!--/ container--></div><!--/ wrap--></body></html>