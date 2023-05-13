<div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
      <div class="row pt-sm-2 pt-lg-0">
        <!-- Sidebar (offcanvas on sreens < 992px)-->

        @include('layouts.around.sidebar')
        <!-- Page content-->

        <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
          <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h2 mb-4 mb-sm-0 me-4">Bens </h1>
            <div class="d-flex ms-auto">


            </div>
          </div>
          <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body">
              <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="{{ route('goods.create') }}"><i class="ai-square-plus me-2 ms-n1"></i> Bens</a></h2>
              </div>
              <!-- Stats-->

              <div class="table-responsive">

                <table class="table">
                  <thead>

                  </thead>
                  <tbody>
                    @forelse($data as $d)

                    <tr>
                      <td class="border-0 py-1 px-0 ">
                        <div class="d-flex align-items-center mt-3">
                         
                            <img class="rounded-1"  width='75' height='75' src="{{ asset('image')}}/{{$d->image}}" width="110" alt="Product">
                          <div class="ps-3 ps-sm-4">
                            <h4 class="h6 mb-2"><a href="{{ route('goods.edit', $d->id) }}">{{$d->title}}</a></h4>
                            <div class="text-muted fs-sm me-3">{{$d->intention}} <span class='text-dark fw-medium'>{{$d->description}}</span></div>
                          </div>
                        </div>
                      </td>

                      <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                        <div class="fs-sm text-muted mb-2">
                          <form action="{{ route('goods.destroy', $d->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2" type="submit" data-bs-toggle="tooltip" title="Apagar"><i class="ai-trash"></i></button>
                      </td>
                    </tr>

                    @empty
                    <p class="text-warning">Nenhum bem cadastrado</p>
                    @endforelse

                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>