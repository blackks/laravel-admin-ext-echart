<div id="scatter" style="width: 100%;height:400px;"></div>
<script>
    $(function () {
        var myChart = echarts.init(document.getElementById('scatter'));

        // 指定图表的配置项和数据
        var option = {
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'scatter',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
