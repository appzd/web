<template lang="html">

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
      <div class="row row-sm">
        <div class="col-lg-4">
          <div class="card">
            <div id="rs1" class="wd-100p ht-200"></div>
            <div class="overlay-body pd-x-20 pd-t-20">
              <div class="d-flex justify-content-between">
                <div>
                  <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Empresas suscritas</h6>
                  <p class="tx-12">Noviembre 23, 2018</p>
                </div>
                <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
              </div><!-- d-flex -->
              <h2 class="mg-b-5 tx-inverse tx-lato">12</h2>
              <p class="tx-12 mg-b-0">Descripcion...</p>
            </div>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
          <div class="card">
            <div id="rs2" class="wd-100p ht-200"></div>
            <div class="overlay-body pd-x-20 pd-t-20">
              <div class="d-flex justify-content-between">
                <div>
                  <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Empleados</h6>
                  <p class="tx-12">Noviembre 23, 2018</p>
                </div>
                <a href="/empleados" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
              </div><!-- d-flex -->
              <h2 class="mg-b-5 tx-inverse tx-lato">28,746</h2>
              <p class="tx-12 mg-b-0">Descripcion...</p>
            </div>
          </div><!-- card -->
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
          <div class="card">
            <div id="rs3" class="wd-100p ht-200"></div>
            <div class="overlay-body pd-x-20 pd-t-20">
              <div class="d-flex justify-content-between">
                <div>
                  <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Otro Informe</h6>
                  <p class="tx-12">Noviembre 23, 2018</p>
                </div>
                <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
              </div><!-- d-flex -->
              <h2 class="mg-b-5 tx-inverse tx-lato">0</h2>
              <p class="tx-12 mg-b-0">Descripcion...</p>
            </div>
          </div><!-- card -->
        </div><!-- col-4 -->
      </div><!-- row -->

      <div class="row row-sm mg-t-15 mg-sm-t-20">
        <div class="col-md-6">
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Informe General</h6>
            <p class="mg-b-20 mg-sm-b-30">Representación análisis general</p>
            <div id="f2" class="ht-200 ht-sm-300"></div>
          </div><!-- card -->
        </div><!-- col-6 -->
        <div class="col-md-6 mg-t-15 mg-sm-t-20 mg-md-t-0">
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Progreso</h6>
            <p class="mg-b-20 mg-sm-b-30">Descripcion...</p>
            <div id="f1" class="ht-200 ht-sm-300"></div>
          </div><!-- card -->
        </div><!-- col-6 -->
      </div><!-- row -->
    </div><!-- am-pagebody -->
    <div class="am-footer">
      <span>Copyright &copy;. </span>
      <span></span>
    </div><!-- am-footer -->
  </div><!-- am-mainpanel -->
</template>

<script>


export default {
}
</script>

<style lang="css">




</style>
