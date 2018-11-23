@extends('layouts.admin')
@section('styles')
<link href="../lib/highlightjs/github.css" rel="stylesheet">
<link href="../lib/morris.js/morris.css" rel="stylesheet">
@stop
@section('content')
<div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="row row-sm">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Codigos de Comportamiento</h6>
              <p>Descripcion...</p>
              <div id="morrisBarm" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->

        </div><!-- row -->





      </div><!-- am-pagebody -->
      <div class="am-footer">
        <!-- <span>Copyright &copy;. All Rights Reserved. Amanda Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span> -->
      </div><!-- am-footer -->
    </div><!-- am-mainpanel -->

@section('scripts')
<script src="{{ asset('/lib/raphael/raphael.min.js')}}"></script>
    <script src=" {{ asset('/lib/morris.js/morris.js')}}"></script>
    <script src="{{ asset('/js/chart.morris.js')}}"></script>
    <script src="{{ asset('/js/amanda.js')}}" ></script>
    <script type="text/javascript">
    new Morris.Bar({
element: 'morrisBarm',
data: [
{ y: 'Reformador',  a: 2, count:7  },
{ y: 'Ayudador', a: 4,count:7 },
{ y: 'Eficiente', a: 4,count:7 },
{ y: 'Individualista', a: 3,count:7 },
{ y: 'Analizador', a: 2,count:7},
{ y: 'Leal', a: 9,count:9},
{ y: 'Inspirador', a: 5,count:7},
{ y: 'Desafiador', a: 2,count:7},
{ y: 'Pacificador', a: 2,count:7},
],
xkey: 'y',
ykeys: ['a'],
labels: ['Series A'],
barColors: ['#5058AB'],
gridTextSize: 11,
hideHover: 'auto',
barRatio: 0.2

});

    </script>
@stop
@endsection
