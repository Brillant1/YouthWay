@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit domaine</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Domaine</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit domaine</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Edit domaine     </h5>
                        </div>

                      

                        <div class="card-body">
                            <form action="{{ route('domaines.update', $domaine) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nom">Intitulé du domaine <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="nom" id="nom" required value="{{ $domaine->nom }}">
                                        </div>
                                    </div>





                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label for="editor" class="form-label" >Une description du domaine <span class="text-danger fw-bold">*</span></label>
                                            <textarea class="form-control"  rows="3" id="editor" name="description"> {{ $domaine->description }} </textarea>
                                        </div>
                                        <p><span class="text-danger fw-bold">* </span>Champ obligatoire</p>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Enregister les modifications</button>
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
