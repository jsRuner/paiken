<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DuxCms安装向导</title>
<link href="/Public/install/css/base.css" rel="stylesheet" type="text/css" />
<link href="/Public/install/css/style.css" rel="stylesheet" type="text/css" />
<script src="/Public/install/js/install.js"></script>
</head>
<body>
<div class="g-install">
  <div class="m-head">
    <h1>DuxCms安装配置</h1>
  </div>
  <form action="<?php echo U('setup3');?>" method="post">
  <div class="m-body">
    <div class="tt"></div>
    <div class="m-form">
      
        <div class="formitm">
          <label class="lab">数据库地址：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_HOST" id="DB_HOST" value="localhost" />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">数据库端口：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_PORT" id="DB_PORT" value="3306" />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">数据库名称：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_NAME" id="DB_NAME" value="duxcms"  />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">数据库用户名：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_USER" id="DB_USER" value="root"  />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">数据库密码：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_PWD" id="DB_PWD" value="" />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">数据表前缀：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="DB_PREFIX"  value="dux_" id="DB_PREFIX" />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">安全加密码：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="SAFE_KEY" value="<?php echo $safe_key;?>" id="SAFE_KEY" />
          </div>
        </div>
        <div class="formitm">
          <label class="lab">COOKIE前缀：</label>
          <div class="ipt">
            <input type="text" class="u-element" name="COOKIE_PREFIX" value="<?php echo $cookie;?>" id="COOKIE_PREFIX" />
          </div>
        </div>
      
    </div>
  </div>
  <div class="m-foot"> 
  	<a href="<?php echo U('setup1');?>">上一步</a>
    <button type="submit" class="submit">安装</button>
  </div>
  </form>
</div>
</body>
</html>