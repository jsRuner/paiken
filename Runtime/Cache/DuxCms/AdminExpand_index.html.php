<?php if (!defined('THINK_PATH')) exit();?><form method="post">
    <div class="panel dux-box">
        <div class="table-responsive">
            <table id="table" class="table table-hover ">
                <tbody>
                    <tr>
                        <th width="100">编号</th>
                        <th width="*">名称</th>
                        <th width="*">表名</th>
                        <th width="*">状态</th>
                        <th width="130">操作</th>
                    </tr>
                    <?php foreach ($list as $vo) {?>
                    <tr>
                        <td><?php echo $vo["fieldset_id"];?></td>
                        <td><?php echo $vo["name"];?></td>
                        <td><?php echo $vo["table"];?></td>
                        <td>
                            <?php if ($vo['status']){ ?>
                            <span class="tag bg-green">正常</span>
                            <?php }else{ ?>
                            <span class="tag bg-red">禁用</span>
                            <?php } ?>
                        </td>
                        <td>
                            <a class="button bg-blue button-small icon-th" href="<?php echo U('AdminExpandField/index',array('fieldset_id'=>$vo['fieldset_id']));?>" title="管理"></a>
                            <a class="button bg-blue button-small icon-pencil" href="<?php echo U('edit',array('fieldset_id'=>$vo['fieldset_id']));?>" title="修改"></a>
                            <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" data="<?php echo $vo["fieldset_id"];?>" title="删除"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#table').duxTable({
            deleteUrl: "<?php echo U('del');?>"
        });
    });
</script>