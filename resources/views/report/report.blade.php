@extends('layouts.plantilla')
@section('title', 'Reportes')
@section('content')

<?php
$d = [];
foreach ($v as $value) {
    array_push($d, [$value->age_patient, $value->c_vacunados]);
}

?>

<hr>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--En este container se muestran los gráficos-->
<div class="text-center">
    <div class="btb-group" role="group" aria-label="">
        <!-- <button id="btnColumnas" type="button" class="btn btn-secondary">Columnas</button>
        <button id="btnLineas" type="button" class="btn btn-secondary">Lineas</button>
        <button id="btnArea" type="button" class="btn btn-secondary">Area</button>
        <button id="btnTorta" type="button" class="btn btn-secondary">Torta</button> -->
        <button id="btnBD" type="button" class="btn btn-secondary">Grafico prueba</button>
    </div>
</div>

<!--En este container se muestran los gráficos-->
<div id="contenedor" style="min-width: 320px; height: 400px; margin: 0 auto"></div>

<!--Modal para gráficos-->
<div id="modal-1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--En este container se muestran los gráficos-->
                <div id="contenedor-modal" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</div>
{{-- jQuery, Popper.js, Bootstrap JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 {{-- Highcharts JS  --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/exporting.src.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
var vacunas = {{json_encode($d,JSON_)}};
var chart1, options;
    $("#btnBD").click(function() {
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Gráfico desde BD");
        $("#modal-1").modal("show");



        // options.series[0].data = vacunas;
        // chart1 = new Highcharts.Chart(options);
        // console.log(vacunas);

        datos();
    });

    function datos() {
        var v_modal = $("#modal_1").modal({
            show: false
        });
        options = {
            chart: {
                renderTo: 'contenedor-modal',
                type: 'column'
            },
            title: {
                text: 'Catidad de personas vacunadas por edad'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: ' Cantidad vacunados'
                }
            },
            plotOptions: {
                series: {
                    borderWidth: 1,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.0f}'
                    }
                }
            },
            tooltip: {
                headerFormat: "<span style='font-size:11px'> {series.name}</span><br>",
                pointFormat: "<span style='color:{point.color}'>{point.name}</span>: <b>{point.y:.0f}</b>"
            },
            series: [{
                name: "Edades",
                colorByPoint: true,
                data: vacunas
            }]
        }
        v_modal.on("shown", function() {});
        v_modal.modal("show");
    }
</script>
@endsection
