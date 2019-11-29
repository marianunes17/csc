<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">

        <div class="col-md-12">
          <h1 class="h2"> @yield('title') </h1>
        </div>

          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item">
                <a href="{{route('csc.index')}}" class="text-decoration-none">Início</a>
            </li>

            <li class="breadcrumb-item active"> @yield('title') </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
<br>
