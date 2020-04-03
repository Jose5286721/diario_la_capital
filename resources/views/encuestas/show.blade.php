@extends('layouts.app')


@section('styles')
<link rel="stylesheet" href="{{asset('css/summernote-bs4.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">Noticias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">Noticias</li>
              <li class="breadcrumb-item active">{{$url}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                        Encuesta Nº {{$encuesta->id}}
                    </h3>
                    <!-- tools box -->
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                              title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                              title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body pad">
                    <div class="form-group">
                        <label>Contenido: </label>
                        <textarea class="form-control" disabled="true">{{$encuesta->contenido}}</textarea>
                    </div>   
                    <!--<apexchart type="pie" width="380" :options="chartOptions" :series="series"></apexchart>-->
                    <div width="380px" class="align-center" style="max-height:650px;" id="grafica"></div>                   
                </div>
              </div>
              <!-- /.col-->
            </div>
        </div>
    </div>
  </section>
</div>
@endsection

@section('scriptbody')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  var datas = {!!collect($encuesta->opciones["botones"])!!};
  var arrays = [];
  datas.forEach(element => {
    arrays.push((((element[0]).replace("<br>","")).replace("&nbsp;","")));
  });
  var options = {
  series: {{$cantidad}},
  labels: arrays,
  chart: {
    width: 380,
    type: 'pie'
  }
};
var chart = new ApexCharts(document.querySelector("#grafica"), options);
chart.render();
</script>
@endsection