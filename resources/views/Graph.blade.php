<div id="graph" style="width: 100%;height:400px;"></div>
<script>
    $(function () {
        var myChart = echarts.init(document.getElementById('graph'));

        // 指定图表的配置项和数据
        var option = {
            legend: {
                x: "center",
                show: false,
                data: ["夫妻", "战友", '亲戚']
            },
            series: [
                {
                    type: 'graph',
                    layout: 'force',
                    symbolSize: 40,
                    focusNodeAdjacency: true,
                    roam: true,
                    categories: [{
                        name: '夫妻',
                        itemStyle: {
                            normal: {
                                color: "#009800",
                            }
                        }
                    }, {
                        name: '战友',
                        itemStyle: {
                            normal: {
                                color: "#4592FF",
                            }
                        }
                    }, {
                        name: '亲戚',
                        itemStyle: {
                            normal: {
                                color: "#3592F",
                            }
                        }
                    }],
                    label: {
                        normal: {
                            show: true,
                            textStyle: {
                                fontSize: 12
                            },
                        }
                    },
                    force: {
                        repulsion: 400
                    },
                    edgeSymbolSize: [4, 50],
                    edgeLabel: {
                        normal: {
                            show: true,
                            textStyle: {
                                fontSize: 10
                            },
                            formatter: "{c}"
                        }
                    },
                    data: [{
                        name: '刘某',
                        draggable: true,
                    }, {
                        name: '陈某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '邓某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '李某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '郑某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '赵某某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '王某某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '冯某某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '邹某某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '赵某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '陈某某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '陶某',
                        category: 1,
                        draggable: true,
                    }, {
                        name: '王某',
                        category: 1,
                        draggable: true,
                    }],
                    links: [{
                        source: 0,
                        target: 1,
                        category: 0,
                        value: '夫妻'
                    }, {
                        source: 0,
                        target: 2,
                        value: '子女'
                    }, {
                        source: 0,
                        target: 3,
                        value: '夫妻'
                    }, {
                        source: 0,
                        target: 4,
                        value: '父母'
                    }, {
                        source: 1,
                        target: 2,
                        value: '表亲'
                    }, {
                        source: 0,
                        target: 5,
                        value: '朋友'
                    }, {
                        source: 4,
                        target: 5,
                        value: '朋友'
                    }, {
                        source: 2,
                        target: 8,
                        value: '叔叔'
                    }, {
                        source: 0,
                        target: 12,
                        value: '朋友'
                    }, {
                        source: 6,
                        target: 11,
                        value: '爱人'
                    }, {
                        source: 6,
                        target: 3,
                        value: '朋友'
                    }, {
                        source: 7,
                        target: 5,
                        value: '朋友'
                    }, {
                        source: 9,
                        target: 10,
                        value: '朋友'
                    }, {
                        source: 3,
                        target: 10,
                        value: '朋友'
                    }, {
                        source: 2,
                        target: 11,
                        value: '同学'
                    }],
                    lineStyle: {
                        normal: {
                            opacity: 0.9,
                            width: 1,
                            curveness: 0
                        }
                    }
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
