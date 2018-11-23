@extends('layouts.admin')
@section('styles')
<link href="{{asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/highlightjs/github.css')}}" rel="stylesheet">
<link href="{{asset('lib/jquery.steps/jquery.steps.css')}}" rel="stylesheet">
@endsetion
@section('content')
<div class="am-mainpanel">
  <div class="am-pagetitle">
    <h5 class="am-title">Dashboard</h5>
    <form id="searchBar" class="search-bar" action="index.html">
      <div class="form-control-wrapper">
        <input type="search" class="form-control bd-0" placeholder="Buscar...">
      </div><!-- form-control-wrapper -->
      <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
    </form><!-- search-bar -->
  </div><!-- am-pagetitle -->

  <div class="am-pagebody">

    <test-component></test-component>

  </div><!-- am-pagebody -->
  <div class="am-footer">
    <span>Copyright &copy;. </span>
    <span></span>
  </div><!-- am-footer -->
</div><!-- am-mainpanel -->
@section('scripts')
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/jquery.steps/jquery.steps.js"></script>
    <script src="lib/parsleyjs/parsley.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        'use strict';

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            return true;
          }
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width'
        });


      });

    </script>
@endsection
@endsection
