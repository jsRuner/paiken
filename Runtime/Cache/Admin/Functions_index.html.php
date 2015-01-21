<?php if (!defined('THINK_PATH')) exit();?><form method="post">
    <div class="panel dux-box">
       <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
                <tr>
                    <th width="*">名称</th>
                    <th width="*">路径</th>
                    <th width="*">状态</th>
                    <th width="*">级别</th>
                    <th width="100">操作</th>
                </tr>
                <?php foreach ($list as $vo) {?>
                <tr>
                    <td><?php echo $vo["APP_NAME"];?>(<?php echo $vo["APP"];?>)</td>
                    <td><?php echo $vo["APP_DIR"];?></td>
                    <td>
                       <?php if ($vo['APP_STATE']){ ?>
                       <a class="tag bg-green  js-action" href="javascript:;" title="禁用" url="<?php echo U('state',array('app'=>$vo['APP']));?>" data="false" success=" window.location.reload();"  >正常</a>
                       <?php }else{ ?>
                       <a class="tag bg-red  js-action" href="javascript:;" title="启用" url="<?php echo U('state',array('app'=>$vo['APP']));?>" data="true" success=" window.location.reload();" >禁用</a>
                       <?php } ?>
                    </td>
                    <td>
                       <?php if ($vo['APP_SYSTEM']){ ?>
                       <span class="tag bg-red">系统</span>
                       <?php }else{ ?>
                       <span class="tag bg-green">普通</span>
                       <?php } ?>
                    </td>
                    <td>
                       <?php if ($vo['APP_SETTING']){ ?>
                       <a class="button bg-blue button-small icon-cog" href="<?php echo U($vo['APP_SETTING']);?>" title="设置"></a>
                       <?php } ?>
                       <?php if ($vo['APP_INSTALL']){ ?>
                       <a class="button bg-red button-small icon-trash-o js-action" url="<?php echo U('uninstall');?>" href="javascript:;" data="<?php echo $vo["APP"];?>" success=" window.location.reload();" title="卸载"></a>
                       <?php }else{ ?>
                       <a class="button bg-green button-small icon-download js-action" url="<?php echo U('install');?>" href="javascript:;" data="<?php echo $vo["APP"];?>" success=" window.location.reload();" title="安装"></a>
                       <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</form>
<script>
Do.ready('base',function() {
	$('#table').duxTable({
		deleteUrl: "<?php echo U();?>"
	});
});
</script>