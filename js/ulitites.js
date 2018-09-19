$(document).ready(function () {
    window.onload = function () {
        setProjectProgressBar();
        setStatisticChart();
    };
    $(window).resize(function() {
        setStatisticChart();
    });
    $(".fa-close").click(function (event) {
        if ($(event.target).parent().parent().hasClass("minimize")) {
            $(event.target).parent().parent().removeClass("minimize")
        } else {
            $(event.target).parent().parent().addClass("minimize");
        }
        $(event.target).toggleClass("fa-close fa-circle");
    })
    $("#expand").click(function (event) {
        $("#page").toggleClass("expand compress");
        $("#expand").toggleClass("fa-expand fa-compress");
    })
})

function setProjectProgressBar() {
    Highcharts.setOptions({
        colors: ['#ef4949', 'transparent']
    });

    $('#project-progress').highcharts({
        chart: {
            type: 'pie',
            backgroundColor: "transparent"
        },
        plotOptions: {
            pie: {
                innerSize: '82%',
                borderWidth: 0
            }
        },
        title: {
            verticalAlign: 'middle',
            floating: true,
            text: "80%",
            y: 0,
            style: {
                color: '#fff',
                fontWeight: 'bold',
                width: 10,
                fontSize: "40px"
            }
        },
        subtitle:{
            verticalAlign: 'middle',
            floating: true,
            y: 20,
            text: "COMPLETED",
            style: {
                color: '#6c6f80',
                fontWeight: 'bold',
                width: 10,
                marginBottom: 10
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            data: [
                ['Progress',   80],
                ['Lost',       20]
            ],
            dataLabels: {
                enabled: false
            }
        }]
    });
}

function setStatisticChart() {
    $("#main").css("width", "100%")

    $('#statistic').highcharts({
        chart: {
            type: 'area',
            backgroundColor: {
                linearGradient: [0, 270, 0, 0],
                stops: [
                    [0, 'rgb(34, 36, 49)'],
                    [0.1, 'rgb(42, 44, 59)'],
                    [0.4, 'rgb(246, 246, 246)'],
                    [1, 'rgb(246, 246, 246)']
                ]
            },
            spacingLeft: 0,
            spacingRight:0
        },
        title: {
            text: ""
        },
        xAxis: {
            categories: [
                "",
                "27<br><span class=\"statistic-month\">JUN</span>",
                "29<br><span class=\"statistic-month\">JUL</span>",
                "12<br><span class=\"statistic-month\">SEP</span>",
                "05<br><span class=\"statistic-month\">AUG</span>",
                "26<br><span class=\"statistic-month\">DEC</span>",
                "30<br><span class=\"statistic-month\">MAY</span>",
                "08<br><span class=\"statistic-month\">OCT</span>",
                ""
            ],
            labels: {
                style: {
                    color: '#9c9d9f',
                    fontSize: '16px',
                    fontWeight: 'bold'
                },
                y: 33
            },
            gridLineColor: '#f6f6f6',
            gridLineWidth: 1,
            gridZIndex: 10,
            tickInterval:1,
            tickmarkPlacement: 'on',
            min: 1,
            max: 7.5,
            lineWidth: 3,
            lineColor: "#2695a8",
            tickLength: 0
        },
        yAxis: {
            gridLineWidth: 0,
            max:100,
            labels: {
                enabled: false
            },
            title: {
                text: null
            }
        },
        plotOptions: {
            area: {
                marker: {
                    enabled: false
                },
                states: {
                    hover: {
                        enabled: false
                    }
                }
            },
            series: {
                pointPadding: 0,
                groupPadding: 0
            }
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        tooltip: {
            backgroundColor: "transparent",
            borderWidth: 0,
            shadow: false,
            useHTML: true,
            style: {
                color: "#fff",
                fontWeight: "bold",
                padding: 0
            }
        },
        series: [{
            index: 11,
            name: "Points",
            data: [19, 25, 39, 40, 31, 41, null, null, null],
            marker: {
                enabled: true,
                radius: 5,
                fillColor: "#fff"
            },
            fillOpacity: 0,
            lineWidth: 0
        },{
            index: 5,
            data: [19, 25, 39, 40, 31, 41, null, null, null],
            color: "#38abbe",
            lineColor: "#38abbe",
            fillOpacity: 1
        },{
            index: 5,
            data: [null, null, null, null, null, 41, 25, 34, 43],
            color: "#8297a8",
            lineColor: "#8297a8",
            fillOpacity: 1
        },{
            index: 4,
            label: "2",
            data: [31, 30, 50, 45, 58, 51, null, null, null],
            color: "#3eb6c6",
            lineColor: "#3eb6c6",
            fillOpacity: 1
        },{
            index: 4,
            label: "2",
            data: [null, null, null, null, null, 51, 50, 43, 47],
            color: "#9fc2c4",
            lineColor: "#9fc2c4",
            fillOpacity: 1
        },{
            index: 3,
            label: "3",
            data: [45, 35, 62, 53, 65, 60, null, null, null],
            color: "#53bfc9",
            lineColor: "#53bfc9",
            fillOpacity: 1
        },{
            index: 3,
            label: "3",
            data: [null, null, null, null, null, 60, 58, 63, 56],
            color: "#facdae",
            lineColor: "#facdae",
            fillOpacity: 1
        },{
            index: 2,
            label: "4",
            data: [60, 43, 76, 64, 70, 73, null, null, null],
            color: "#55b9c9",
            lineColor: "#55b9c9",
            fillOpacity: 1
        },{
            index: 2,
            label: "4",
            data: [null, null, null, null, null, 73, 64, 75, 68],
            color: "#fc9d9b",
            lineColor: "#fc9d9b",
            fillOpacity: 1
        },{
            index: 1,
            label: "5",
            data: [80, 75, 86, 76, 82, 89, null, null, null],
            color: "#56b3c5",
            lineColor: "#56b3c5",
            fillOpacity: 1
        },{
            index: 1,
            label: "5",
            data: [null, null, null, null, null, 89, 74, 83, 74],
            color: "#ef4949",
            lineColor: "#ef4949",
            fillOpacity: 1
        }]
    });
}



