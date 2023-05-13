<main class="page-wrapper mt-4">
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->


    <!-- Page content-->
    <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">



            <!-- Page content-->
            <div class="col-lg-12 pt-4 pb-2 pb-sm-4">


                <!-- Basic info-->
                <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <h2 class="h4 mb-0"> <a class="btn btn-secondary me-3 me-sm-4" type="button" href="{{route('goods.index')}}"><i class="ai-undo me-2 ms-n1"></i> Bens</a></h2>
                        </div>
                        <div class="d-flex align-items-center">

                        </div>

                        <form action="{{ route('goods.update', $good->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="mb-3 container">
                                <label class="form-label" for="titulo">Título</label>
                                <input class="form-control" type="text" name="title" id="title" value="{{$good->title}}">

                                <label class="form-label" for="titulo">Descrição</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$good->description}}</textarea>

                                <label class="form-label" for="Imagem">Imagem</label>
                                <input class="form-control" type="file" name="image" id="image">
                               

                                <label class="form-label" for="titulo">Intenção</label>
                                <select class="form-control" name="intention" id="intention">
                                    <option value="coletar">Coletar</option>
                                    <option value="descartar">Descartar</option>
                                </select>
                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-primary ms-3" type="submit"><i class="ai-check me-2 ms-n1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
            </section>
        </div>
    </div>
    </div>
</main>