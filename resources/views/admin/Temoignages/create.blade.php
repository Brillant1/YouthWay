@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Ajout témoignages</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Témoignage</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout témoignage</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajout témoignage  </h4>
                            <a href="{{ route('temoignages.index') }}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Liste témoignages</a>
                        </div>

                        @if(session('addedTemoignageMessage'))
                        <div class="alert alert-success">
                            <span>{{ session('addedTemoignageMessage') }}</span>
                        </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('temoignages.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nom">Nom <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="nom" id="nom" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="prenom">Prénom <span class="text-danger fw-bold">*</span></label>
                                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email <span class="text-danger fw-bold">*</span></label>
                                            <input type="email" class="form-control" name="email" name="email" required>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" >
                                            <label class="form-label">Photo</label>
                                            <input class="form-control" type="file" accepted="png, jpg, jpeg"
                                                id="photo" name="photo" required >
                                        </div>
                                    </div>
                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label for="editor" class="form-label" >Message <span class="text-danger fw-bold">*</span></label>
                                            <textarea class="form-control" cols="30" rows="10"  id="editor" name="message"> </textarea>
                                        </div>
                                        <p><span class="text-danger fw-bold">* </span>Champ obligatoire</p>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
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

            ClassicEditor
                .create(document.querySelector('#editor'))

                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endsection