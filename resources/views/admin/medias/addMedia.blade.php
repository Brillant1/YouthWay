@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Ajout Média</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Média</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout média</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">

                    @if (session('addMediaMessage'))
                        <div class="alert alert-success my-3">
                            <span>{{ session('addMediaMessage') }}</span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajout média  </h4>
                            <a href="{{ route('medias.index') }}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Liste médias</a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('medias.store') }}" enctype="multipart/form-data" style="z-index: -100">
                                @csrf
                                <select class=" form-select form-control-lg form-control  mb-3 " id="media_id" name="type_media" required>
                                    @foreach ($medias as $media)
                                        <option value="{{ $media }}">{{ $media }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group control-group increment">
                                    <input type="file" name="photo[]" class="form-control" required>
                                    <div class="input-group-btn">
                                        <button class="btn btn-add" type="button" style="background: #178B01;"><i
                                                class="glyphicon glyphicon-plus">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block2 hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="photo[]" class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i
                                                    class="glyphicon glyphicon-remove">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                      </svg>
                                                </i> </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12  my-4 text-center m-auto form-group">
                                    <input type="reset" value="ANNULER"
                                        class="btn btn-danger col-md-2 p-2 my-4 me-5  text-white font-weight-bold border-0"
                                        name="reset" id="addMedia">
                                    <input type="submit" value="AJOUTER MEDIA(S)" style="background: #178B01;"
                                        class="btn col-md-2 p-2 my-4  text-white font-weight-bold border-0" name="addMedia"
                                        id="addMedia">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $(".btn-add").click(function() {
                var html = $(".block2").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").hide();
            });

        });
    </script>
@endsection
