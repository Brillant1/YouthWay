@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit flash Info</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Flash Info</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit flash Info</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit flash Info  </h4>
                            <a href="{{ URL::previous()}}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Retour</a>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('flashInfos.update', $flash_info) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_debut">Date du debut <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_debut" id="date_debut" required value="{{ $flash_info->date_debut }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-16 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_fin">Date de fin <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_fin" id="date_fin" required value="{{ $flash_info->date_fin }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="info">Contenu du flash info <span class="text-danger fw-bold">*</span> </label>
                                            <textarea name="info" class="form-control" id="info" cols="30" rows="5" required > {{ $flash_info->info }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Enrégistrer les modifications</button> &nbsp;
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


@endsection
