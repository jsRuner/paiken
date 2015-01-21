<?php if (!defined('THINK_PATH')) exit();?><form method="post">
    <div class="panel dux-box">
       <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
                <tr>
                    <th width="*">备份文件</th>
                    <th width="120">操作</th>
                </tr>
                <?php foreach ($list as $vo) {?>
                <tr>
                  <td><?php echo $vo["name"];?></td>
                  <td> <a class="button bg-blue button-small icon-share-square-o js-action" url="<?php echo U('import');?>" href="javascript:;" data="<?php echo $vo["time"];?>"  title="还原"></a>
                       <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" data="<?php echo $vo["id"];?>" title="删除"></a></td>
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
		deleteUrl: "<?php echo U('del');?>"
	});
});
</script>