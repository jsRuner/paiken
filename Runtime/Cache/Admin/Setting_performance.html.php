<?php if (!defined('THINK_PATH')) exit();?><form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo U('performance');?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong>性能设置</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label for="sitename">模板缓存</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['TMPL_CACHE_ON']){ ?>
                            <label class="button active"><input name="TMPL_CACHE_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="TMPL_CACHE_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['TMPL_CACHE_ON']){ ?>
                            <label class="button active"><input name="TMPL_CACHE_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="TMPL_CACHE_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                    
                <div class="input-note">网站上线后建议开启</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">静态缓存</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['HTML_CACHE_ON']){ ?>
                            <label class="button active"><input name="HTML_CACHE_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="HTML_CACHE_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['HTML_CACHE_ON']){ ?>
                            <label class="button active"><input name="HTML_CACHE_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="HTML_CACHE_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                    
                <div class="input-note">网站上线后建议开启</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">SQL查询缓存</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['DB_SQL_BUILD_CACHE']){ ?>
                            <label class="button active"><input name="DB_SQL_BUILD_CACHE" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DB_SQL_BUILD_CACHE" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['DB_SQL_BUILD_CACHE']){ ?>
                            <label class="button active"><input name="DB_SQL_BUILD_CACHE" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DB_SQL_BUILD_CACHE" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                    
                <div class="input-note">网站上线后建议开启</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">URL访问模式</label>
                </div>
                <div class="field">
                    <select class="input" name="URL_MODEL" id="URL_MODEL">
                            <?php if ($info['URL_MODEL'] == 0){ ?>
                            <option value="0" selected>
                            <?php }else{ ?>
                            <option value="0">
                            <?php } ?>
                            普通模式</option>
                            <?php if ($info['URL_MODEL'] == 1){ ?>
                            <option value="1" selected>
                            <?php }else{ ?>
                            <option value="1">
                            <?php } ?>
                            PATHINFO模式</option>
                            <?php if ($info['URL_MODEL'] == 2){ ?>
                            <option value="2" selected>
                            <?php }else{ ?>
                            <option value="2">
                            <?php } ?>
                            伪静态模式</option>
                            <?php if ($info['URL_MODEL'] == 3){ ?>
                            <option value="3" selected>
                            <?php }else{ ?>
                            <option value="3">
                            <?php } ?>
                            兼容模式</option>
                          </select>
                
                <div class="input-note">请确认已放置伪静态规则</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">URL路由</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['URL_ROUTER_ON']){ ?>
                            <label class="button active"><input name="URL_ROUTER_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="URL_ROUTER_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['URL_ROUTER_ON']){ ?>
                            <label class="button active"><input name="URL_ROUTER_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="URL_ROUTER_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                    <div class="input-note">根据URL设置规则进行URL优化</div>
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