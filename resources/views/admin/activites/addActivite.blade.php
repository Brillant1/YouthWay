@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Ajout activité</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Activité</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout activité</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajout activité  </h4>
                            <a href="{{ route('activites.index') }}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Liste Activités</a>
                        </div>

                        @if(session('addActiviteMessage'))
                            <div class="alert alert-success">
                                <span>{{ session('addActiviteMessage') }}</span>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('activites.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="titre">Titre de l'activité <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="titre" id="titre" required>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nom">Domaine de l'activité <span class="text-danger fw-bold">*</span> </label>
                                            <select class=" form-control " name="domaine_id">
                                                @if (sizeof($domaines)>0)
                                                    @foreach ($domaines as $domaine)
                                                        <option value="{{ $domaine->id }}" >{{ $domaine->nom }}</option>
                                                    @endforeach
                                                @endif
                                              </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_debut">Date de début <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_debut" id="date_debut" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-16 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_fin">Date de fin <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_fin" id="date_fin" required>
                                        </div>
                                    </div>

                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label for="editor" class="form-label" >Une description du domaine <span class="text-danger fw-bold">*</span></label>
                                            <textarea class="form-control" cols="30" rows="10"  id="editor" name="description" required> </textarea>
                                        </div>

                                    </div>



                                    {{-- Multiple file upload form --}}

                                    <div class="input-group control-group increment">
                                        <input type="file" name="photo" class="form-control" required>
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

                                    {{-- <div class="col-lg-16 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="photo">Charger une ou des images(s) illustrative(s) <span class="text-danger fw-bold">*</span> </label>
                                            <input type="file" class="form-control" name="photo" id="photo" required>
                                        </div>
                                        <p class="mt-5"><span class="text-danger fw-bold"> * </span>Champ obligatoire</p>
                                    </div> --}}

                                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Envoyer</button> &nbsp;
                                        <button type="reset" class="btn btn-light">Annuler</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('document').ready(function() {


            $(".btn-add").click(function() {
                var html = $(".block2").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").hide();
            });


            ClassicEditor
                .create(document.querySelector('#editor'))

                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endsection
