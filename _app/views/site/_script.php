/**
 * 
 * @param elemId 
 * @param dataPie 
 * @param dataColors 
 */
function __createChartPie(elemId, dataPie, dataColors) {
    am5.ready(function () {

        var rootPie = am5.Root.new(elemId);

        class MyTheme extends am5.Theme {
            setupDefaultRules() {
                var colors = dataColors;

                if (colors.length > 1) {
                    let _colors = [];
                    $.each(colors, function (i, color) {
                        _colors[i] = am5.color(color);
                    });
                    colors = _colors;
                } else {
                    colors = [
                        am5.color(0xF44336),
                        am5.color(0x673AB7),
                        am5.color(0x03A9F4),
                        am5.color(0x009688),
                        am5.color(0x8BC34A),
                        am5.color(0xFF9800),
                        am5.color(0x795548),
                        am5.color(0xE91E63),
                        am5.color(0x9C27B0),
                        am5.color(0x3F51B5),
                        am5.color(0x2196F3),
                        am5.color(0x00BCD4),
                        am5.color(0x4CAF50),
                        am5.color(0xCDDC39),
                        am5.color(0xFFC107),
                        am5.color(0xFF5722),
                        am5.color(0x9E9E9E),
                        am5.color(0x607D8B),
                    ];
                }

                this.rule("ColorSet").setAll({
                    colors: colors,
                    reuse: false,
                    passOptions: {
                        lightness: 0.1,
                        hue: 0.05,
                        saturation: 0
                    }
                });
            }
        }

        // Set themes
        rootPie.setThemes([
            am5themes_Animated.new(rootPie),
            MyTheme.new(rootPie)
        ]);

        // Create chart
        var chartPie = rootPie.container.children.push(am5percent.PieChart.new(rootPie, {
            panX: false,
            panY: false,
            wheelX: "panX",
            wheelY: "zoomX",
            layout: rootPie.verticalLayout
        }));

        // Add legend
        var legendPie = chartPie.children.push(
            am5.Legend.new(rootPie, {
                centerX: am5.p50,
                x: am5.p50,
                marginTop: 20,
                paddingBottom: 25
            })
        );


        var seriesPie = chartPie.series.push(am5percent.PieSeries.new(rootPie, {
            valueField: 'value',
            categoryField: "label"
        }));

        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        seriesPie.data.setAll(dataPie);

        legendPie.data.setAll(seriesPie.dataItems);

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        seriesPie.appear();

        /**
         * Exporting
         */
        var exportingPie = am5plugins_exporting.Exporting.new(rootPie, {
            menu: am5plugins_exporting.ExportingMenu.new(rootPie, {}),
            filePrefix: "Pie - {$title}" + ("{$tagline}" == "" ? "" : "{$tagline}"),
            printOptions: {
                disabled: true,
            },
        });

        // Make stuff animate on load
        chartPie.appear(1000, 100);

    });
}