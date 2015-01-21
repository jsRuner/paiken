<?php if (!defined('THINK_PATH')) exit();?><!--[if lte IE 8]>
<script src="/Public/js/chart/excanvas.compiled.js"></script>
<![endif]-->
<div class="panel dux-box">
    <div class="panel-head">7天网站访问概况</div>
    <div class="panel-body">
        <div style="height:200px;">
            <canvas id="chart7"></canvas>
        </div>
    </div>
</div>
<br>
<div class="panel dux-box">
    <div class="panel-head">30天网站访问概况</div>
    <div class="panel-body">
        <div style="height:200px;">
            <canvas id="chart30"></canvas>
        </div>
    </div>
</div>
<br>
<div class="panel dux-box">
    <div class="panel-head">12个月网站访问概况</div>
    <div class="panel-body">
        <div style="height:200px;">
            <canvas id="chart12"></canvas>
        </div>
    </div>
</div>

<script>
    Do.ready('base', function () {
        var data = <?php echo $jsonArray1;?>;
        $("#chart7").duxChart({
            data: data
        });
        var data = <?php echo $jsonArray2;?>;
        $("#chart30").duxChart({
            data: data
        });
        var data = <?php echo $jsonArray3;?>;
        $("#chart12").duxChart({
            data: data
        });
    });
</script>