@extends('layouts.cork')
@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

          <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                  <h2 class="display-4 mb-5  mt-4">Selamat Datang, Admin!</h2>
                  <p class="lead mt-3 mb-4">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                  <hr class="my-4">
                  <p class="mb-5">It uses utility classes for typography and spacing to space content out within the larger container.</p>
                  <p class="lead">
                    <a class="btn btn-warning" href="javscript:void(0);" role="button">Learn more</a>
                  </p>
                </div>
            </div>
          </div>

        </div>

    </div>
    @include('temp.footer')
</div>

@endsection
