jQuery(function ($) {
    /////////////////////////////////////
    $(document).one('ajaxloadstart.page', function (e) {
        $tooltip.remove();
    });
    var placeholder = $('#piechart-placeholder').css({ 'width': '90%', 'min-height': '150px' });
    var data = [
        { label: "Sản phẩm", data: 38.7, color: "#68BC31" },
        { label: "Dịch vụ khám chữa", data: 24.5, color: "#2091CF" },
        { label: "Dịch vụ Spa", data: 8.2, color: "#AF4E96" }
    ]
    function drawPieChart(placeholder, data, position) {
        $.plot(placeholder, data, {
            series: {
                pie: {
                    show: true,
                    tilt: 0.8,
                    highlight: {
                        opacity: 0.25
                    },
                    stroke: {
                        color: '#fff',
                        width: 2
                    },
                    startAngle: 2
                }
            },
            legend: {
                show: true,
                position: position || "ne",
                labelBoxBorderColor: null,
                margin: [-30, 15]
            }
            ,
            grid: {
                hoverable: true,
                clickable: true
            }
        })
    }
    drawPieChart(placeholder, data);
    placeholder.data('chart', data);
    placeholder.data('draw', drawPieChart);
    var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
    var previousPoint = null;

    placeholder.on('plothover', function (event, pos, item) {
        if (item) {
            if (previousPoint != item.seriesIndex) {
                previousPoint = item.seriesIndex;
                var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                $tooltip.show().children(0).text(tip);
            }
            $tooltip.css({ top: pos.pageY + 10, left: pos.pageX + 10 });
        } else {
            $tooltip.hide();
            previousPoint = null;
        }

    });
});