<?php if (!defined('THINK_PATH')) exit();?><form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo U('shield');?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong>安全设置</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label>出错信息</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['SHOW_ERROR_MSG']){ ?>
                            <label class="button active"><input name="SHOW_ERROR_MSG" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="SHOW_ERROR_MSG" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['SHOW_ERROR_MSG']){ ?>
                            <label class="button active"><input name="SHOW_ERROR_MSG" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="SHOW_ERROR_MSG" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">网站上线后建议关闭</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>日志记录</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['LOG_RECORD']){ ?>
                            <label class="button active"><input name="LOG_RECORD" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="LOG_RECORD" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['LOG_RECORD']){ ?>
                            <label class="button active"><input name="LOG_RECORD" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="LOG_RECORD" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">记录网站出错日志</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>SQL执行日志</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['DB_SQL_LOG']){ ?>
                            <label class="button active"><input name="DB_SQL_LOG" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DB_SQL_LOG" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['DB_SQL_LOG']){ ?>
                            <label class="button active"><input name="DB_SQL_LOG" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DB_SQL_LOG" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">用于性能调试与安全记录，一般不建议开启</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>加密KEY</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="SAFE_KEY" name="SAFE_KEY" size="60" datatype="s" value="<?php echo $info["SAFE_KEY"];?>">
                    <div class="input-note">用户外部通讯的加密基准</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>COOKIE前缀</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="SAFE_KEY" name="COOKIE_PREFIX" size="60" datatype="s" value="<?php echo $info["COOKIE_PREFIX"];?>">
                    <div class="input-note">避免多个站点冲突</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxForm();
    });
</script>