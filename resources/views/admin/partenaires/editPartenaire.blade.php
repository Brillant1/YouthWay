@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit partenaire</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Partenaire</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit partenaire</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit partenaire  </h4>
                            <a href="{{ URL::previous() }}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Retour</a>
                        </div>

                        @if(session('addedPartenaireMessage'))
                        <div class="alert alert-success">
                            <span>{{ session('addedPartenaireMessage') }}</span>
                        </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('partenaires.update',  $partenaire) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nom">Nom du partenaire <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="nom" id="nom" required value="{{ $partenaire->nom }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="contact">Contact du partenaire <span class="text-danger fw-bold">*</span></label>
                                            <input type="number" class="form-control" name="contact" id="contact" required value="{{ $partenaire->contact }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email du partenaire <span class="text-danger fw-bold">*</span></label>
                                            <input type="email" class="form-control" name="email" required value="{{ $partenaire->email }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" >
                                            <label class="form-label" for="lien">Lien de site internet</label>
                                            <input class="form-control" type="text"
                                                id="lien" name="lien" value="{{ $partenaire->lien }}">
                                        </div>
                                    </div>

                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label class="form-label">Logo du partenaire (Fichier d'au plus <span class="fw-bold">2Mo</span> )</label>
                                            <input class="form-control" type="file"
                                                id="photo" name="photo">
                                        </div>

                                        <img src="{{ asset('storage/'. $partenaire->photo) }}" alt="" width="100" height="100">
                                    </div>
                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label for="editor" class="form-label" >Une brève description sur le partenaire <span class="text-danger fw-bold">*</span></label>
                                            <textarea class="form-control"  rows="3" id="editor" name="description">{{ $partenaire->description }}</textarea>
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
