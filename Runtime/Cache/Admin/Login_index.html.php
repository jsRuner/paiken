<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>DuxAdmin</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="/Public/common/css/pintuer.css"/>
<link rel="stylesheet" href="/Public/admin/css/login.css"/>
<!--[if lt IE 8]>
<script type="text/javascript">
    alert('请您升级到IE8或以上版本!');
    window.open("http://www.baidu.com/search/theie6countdown.html","_self");
</script>
<![endif]-->
</head>
<body>
<div class="dux-login">
            <div class="media media-y">
                <a href="http://www.duxcms.com" target="_blank"><img src="/Public/admin/images/login.png" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form action="<?php echo U();?>" method="post">
                   <div class="input-block">
                    <input type="text" class="input" id="username" name="username" size="20" maxlength="30" placeholder="用户名" />
                    <input type="password" class="input" id="password" name="password" size="20" maxlength="30" placeholder="密码" />
                  </div>
                  <br>
                  <div class="form-group">
                        <button class="button button-block bg-main text-big">登录</button>
                    </div>
                   
            </form>
</div>
</body>
</html>