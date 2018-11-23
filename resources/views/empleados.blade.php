@extends('layouts.admin')
@section('styles')
<link href=" {{ asset('lib/highlightjs/github.css')}}" rel="stylesheet">
<link href="{{ asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
<link href="{{ asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
@stop
@section('content')
<div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Empleados</h6>
          <p class="mg-b-20 mg-sm-b-30">Description...</p>

          <div class="table-wrapper">
            <table id="datatable1" style="width:100%;" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Nombres</th>
                  <th class="wd-15p">Apellidos</th>
                  <th class="wd-20p">Profesión</th>
                  <th class="wd-15p">Correo</th>
                  <th class="wd-10p">Telefono</th>
                  <th class="wd-10p">Detalle</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Juan jose</td>
                  <td>Torres montes</td>
                  <td>Ingeniero</td>
                  <td>juan@hotmail.com</td>
                  <td>312313223</td>
                  <td>
                    <a href="detalle">
                    <button type="button" class="btn btn-success" name="button">Ver</button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Margarita</td>
                  <td>gomez</td>
                  <td>Ingeniero</td>
                  <td>margarita@hotmail.com</td>
                  <td>312323233</td>
                  <td>
                    <button type="button" class="btn btn-success" name="button">Ver</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- am-pagebody -->
      <div class="am-footer">
        <!-- <span>Copyright &copy;. </span>
        <span>Created by:.</span> -->
      </div><!-- am-footer -->
    </div><!-- am-mainpanel -->
@section('scripts')
<script src=" {{ asset('/lib/highlightjs/highlight.pack.js')}}"></script>
<script src="{{ asset('/lib/datatables/jquery.dataTables.js')}}" ></script>
<script src="{{ asset('/lib/datatables-responsive/dataTables.responsive.js')}}" ></script>
<script src="{{ asset('/lib/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('/js/amanda.js')}}" ></script>
<script src="/js/myjs.js"></script>


@stop
@endsetion
