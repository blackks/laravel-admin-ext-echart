<div id="tree" style="width: 100%;height:400px;"></div>
<script>
    $(function () {
        var myChart = echarts.init(document.getElementById('tree'));
        var data = {
            "name": "某某公司",
            "children": [
                {
                    "name": "市场部",
                    "children": [
                        {
                            "name": "一组",
                            "children": [
                                {"name": "李某某"},
                                {"name": "刘某某"},
                                {"name": "张某某"},
                                {"name": "波某某"}
                            ]
                        },
                        {
                            "name": "二组",
                            "children": [
                                {"name": "齐某某"},
                                {"name": "平某某"},
                                {"name": "伟某某"}
                            ]
                        },
                        {
                            "name": "新手营",
                            "children": [
                                {"name": "钢蛋"}
                            ]
                        }
                    ]
                },
                {
                    "name": "产品中心",
                    "children": [
                        {"name": "教学组"},
                        {"name": "教研组"},
                        {"name": "教务组"},
                        {"name": "运营组"}
                    ]
                },
                {
                    "name": "技术部",
                },
                {
                    "name": "职能部",
                    "children": [
                        {"name": "招聘"},
                        {"name": "会计"},
                        {"name": "人力"}
                    ]
                }
            ]
        };
        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                triggerOn: 'mousemove'
            },
            series:[
                {
                    type: 'tree',
                    data: [data],
                    symbol: 'emptyCircle',
                    orient: 'vertical',
                    expandAndCollapse: true,
                    label: {
                        normal: {
                            position: 'top',
                            rotate: 0,
                            verticalAlign: 'middle',
                            fontSize: 14
                        }
                    },
                    leaves: {
                        label: {
                            normal: {
                                position: 'bottom',
                                rotate: -90,
                                verticalAlign: 'middle',
                                align: 'bottom'
                            }
                        }
                    },
                    animationDurationUpdate: 1250
                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
