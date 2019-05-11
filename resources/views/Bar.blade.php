<div id="bar" style="width: 100%;height:400px;"></div>
<script>
    $(function () {
        var myChart = echarts.init(document.getElementById('bar'));

        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    crossStyle: {
                        color: '#999'
                    }
                }
            },
            legend: {
                data:['男的','女的','未知']
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
                    axisPointer: {
                        type: 'shadow'
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '人数',
                    min: 0,
                    max: 100,
                    interval: 10,
                    axisLabel: {
                        formatter: '{value}个'
                    }
                }
            ],
            series: [
                {
                    name:'男的',
                    type:'bar',
                    data:[40, 20, 10, 22, 54, 74, 85, 95, 24, 48, 85, 54]
                },
                {
                    name:'女的',
                    type:'bar',
                    data:[41, 41, 85,54, 28, 57, 85, 24, 28, 84, 54, 24]
                },
                {
                    name:'未知',
                    type:'bar',
                    data:[10, 15, 52, 51, 25, 41, 25, 65, 52, 30,74, 65]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
