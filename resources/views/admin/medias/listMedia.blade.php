@extends('admin.layouts.template')
@section('content')
    <style>
        /* .delete-button {
                display: none;
            }

            .gallery:hover .delete-button {
                display: block;
            } */

        /* .gallery img {
                transition: 0.5s;
                filter: grayscale(100%);
            }

            .gallery img:hover {
                filter: grayscale(0);
                transform: scale(1.1);
            } */

            .mfp-arrow-left{
                margin-left: 300px;
            }
            .mfp-arrow-right{
                margin-right: 300px;
            }

    </style>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Liste des médias</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Médias</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des médias</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Liste des médias </h4>
                                    <a href="{{ route('medias.create') }}" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        Ajouter un nouveau</a>
                                </div>

                                <div class="card-body">
                                    <div class="row gallerys">
                                        @foreach ($medias as $media)
                                            <div class="col-lg-3 col-md-4 mb-4  gallery" style="height: 300px">
                                                <a href="{{ asset('storage/' . $media->url) }}"
                                                    class=" shadow-1-strong rounded mb-4" alt="image galerrie"
                                                    style="height: 300px">
                                                    <img src="{{ asset('storage/' . $media->url) }}" alt=""
                                                        style="height: 300px; width:100%;">
                                                </a>
                                            </div>
{{--
                                            <a href="" title="Supprimer le média "
                                                class=" btn-danger btn btn-sm delete-button" style="right : 15px;"
                                                data-toggle="modal" data-target="{{ '#deleteModalMedia' . $media->id }}">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </a> --}}
                                            {{-- Modal to confirm delete media --}}

                                            {{-- <div class="modal fade" id="{{ 'deleteModalMedia' . $media->id }}"
                                                tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title fw-bold">Confirmer la suppresion</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Voulez-vous vraiment supprimer ce média ?

                                                        </div>

                                                        <div class="modal-footer">
                                                            <form method="POST"
                                                                action="{{ route('medias.destroy', ['media' => $media->id]) }}">
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
                                            </div> --}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('document').ready(function() {
                    $('.gallerys').magnificPopup({
                        type: 'image',
                        delegate: 'a',
                        gallery: {
                            enabled: true,
                        },
                        removalDelay: 300,
                        zoom: {
                            enabled: true,
                            duration: 650,
                            easing: 'ease-in-out',
                        },
                        tCounter: '%curr% of %total%'
                    })
                })
            </script>
        @endsection
