<div id="funnel" style="width: 100%;height:400px;"></div>
<script>
    $(function () {
        var myChart = echarts.init(document.getElementById('funnel'));

        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c}%"
            },
            legend: {
                data: ['展现','点击','访问','咨询','订单']
            },
            series: [
                {
                    name:'漏斗图',
                    type:'funnel',
                    left: '10%',
                    width: '80%',
                    min: 0,
                    max: 100,
                    minSize: '0%',
                    maxSize: '100%',
                    sort: 'descending',
                    label: {
                        show: true,
                        position: 'inside'
                    },
                    emphasis: {
                        label: {
                            fontSize: 20
                        }
                    },
                    data: [
                        {value: 60, name: '访问'},
                        {value: 40, name: '咨询'},
                        {value: 20, name: '订单'},
                        {value: 80, name: '点击'},
                        {value: 100, name: '展现'}
                    ]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
