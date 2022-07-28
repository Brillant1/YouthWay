@extends('admin.layouts.template')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Liste des domaines</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Domaines</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des domaines</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">




                    @if (session('deletePartenaireMessage'))
                        <div class="alert alert-success py-3">
                            <span>{{ session('deletePartenaireMessage') }}</span>
                        </div>
                    @endif
                    @if (session('updatePartenaireMessage'))
                        <div class="alert alert-success py-3">
                            <span>{{ session('updatePartenaireMessage') }}</span>
                        </div>
                    @endif

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des doamines d'action  </h4>
                                <a href="{{ route('partenaires.create') }}" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                    Ajouter un nouveau</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>


                                                <th>Photo</th>
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Site</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (sizeof($partenaires)>0)
                                                @foreach ($partenaires as $partenaire)
                                                    <tr>
                                                        <td><img src="{{ 'storage/'. $partenaire->photo }}" alt="" width="60" height="60"></td>
                                                        <td>{{ $partenaire->nom }}</td>
                                                        <td>{{ $partenaire->contact }}</td>
                                                        <td>{{ $partenaire->email }}</td>
                                                        <td>{{ $partenaire->lien }}</td>
                                                        <td class="text-justify">{!! Str::substr($partenaire->description, 0, 100).'....' !!}</td>
                                                        <td class="d-flex align-items-center justify-content-center">

                                                            {{-- <a href="{{ route('partenaires.show', ['partenaire',$partenaire]) }}" class="btn btn-sm text-primary ms-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                </svg>
                                                            </a> --}}

                                                            <a href="{{ route('partenaires.edit', $partenaire) }}"  class="btn btn-sm text-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                                </svg>
                                                            </a>


                                                            <a href="" title="Supprimer le partenaire"
                                                            class="btn btn-sm text-danger"
                                                            data-toggle="modal"
                                                            data-target="{{ '#deleteModalPartenaire' . $partenaire->id }}">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-x" viewBox="0 0 16 16">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </a>


                                                             <!-- Modal Confirm suppresion -->
                                            <div class="modal fade" id="{{ 'deleteModalPartenaire' . $partenaire->id }}"
                                                tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title fw-bold">Confirmer la suppresion</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment supprimer le partenaire du :
                                                            <span class="text-danger"> {{ $partenaire->nom }}

                                                                ?</span>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <form method="POST"
                                                                action="{{ route('partenaires.destroy', ['partenaire' => $partenaire->id]) }}">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Annuler</button>
                                                                <input type="submit" class="btn btn-danger"
                                                                    value="Confirmer">
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end show resultat confirm modal --}}

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
