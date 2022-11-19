@extends('admin.layouts.template')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Liste des Flash Infos</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Flash Info</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des Flash Infos</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            @if (session('deleteFlashInfoMessage'))
                                <div class="alert alert-success py-3">
                                    <span>{{ session('deleteFlashInfoMessage') }}</span>
                                </div>
                            @endif

                            @if (session('editFlashMessage'))
                                <div class="alert alert-success py-3">
                                    <span>{{ session('editFlashMessage') }}</span>
                                </div>
                            @endif
                            @if (session('changeStatutMessage'))
                                <div class="alert alert-success py-3">
                                    <span>{{ session('changeStatutMessage') }}</span>
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Liste des flash infos </h4>
                                    <a href="{{ route('flashInfos.create') }}" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        Ajouter un nouveau</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>


                                                    <th>N°</th>
                                                    <th>Date debut</th>
                                                    <th>Date fin</th>
                                                    <th>Statut</th>
                                                    <th>Contenu</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if (sizeof($flashInfos) > 0)
                                                    @foreach ($flashInfos as $flashInfo)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $flashInfo->date_debut }}</td>
                                                            <td>{{ $flashInfo->date_fin }}</td>
                                                            <td>{{ $flashInfo->etat }}</td>
                                                            <td>{{ $flashInfo->info }}</td>

                                                            <td class="d-flex align-items-center justify-content-center">

                                                                <a href="" title="{{$flashInfo->etat == "active"? "Désactiver le flash info":"Activer le flash info"}}"
                                                                    class="text-primary fw-bold btn btn-sm status-article"
                                                                    data-toggle="modal"
                                                                    data-target="{{ '#statusModalFlash' . $flashInfo->id }}">

                                                                        @if ($flashInfo->etat == "inactive")
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                                                    fill="blue" class="bi bi-check2-circle"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                                                                    <path
                                                                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                                                        </svg>

                                                                        @else
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                                            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                                                            <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                                                          </svg>
                                                                        @endif

                                                                </a>

                                                                <a href="{{ route('flashInfos.edit', $flashInfo) }}" title="Editer"
                                                                    class="btn btn-sm text-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" fill="green" class="bi bi-pen-fill"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                                                    </svg>
                                                                </a>


                                                                <a href="" title="Supprimer"
                                                                    class="btn btn-sm text-danger" data-toggle="modal"
                                                                    data-target="{{ '#deleteModalFlash' . $flashInfo->id }}">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="30" fill="red" class="bi bi-x"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </a>


                                                                <!-- Modal Confirm suppresion -->
                                                                <div class="modal fade"
                                                                    id="{{ 'deleteModalFlash' . $flashInfo->id }}"
                                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title fw-bold">Confirmer la
                                                                                    suppresion</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Voulez-vous vraiment supprimer ce flash info

                                                                               ?
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <form method="POST"
                                                                                    action="{{ route('flashInfos.destroy', $flashInfo) }}">
                                                                                    <input type="hidden" name="_method"
                                                                                        value="DELETE">
                                                                                    <input type="hidden" name="_token"
                                                                                        value="{{ csrf_token() }}">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Annuler</button>
                                                                                    <input type="submit"
                                                                                        class="btn btn-danger"
                                                                                        value="Confirmer">
                                                                                </form>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- end show resultat confirm modal --}}

                                                                  <!-- Modal Confirm status -->
                                <div class="modal fade" id="{{ 'statusModalFlash' . $flashInfo->id }}"
                                    tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bold">{{$flashInfo->etat == "active"? "Confirmer la désactivation du flash info":"Confirmer l'activation du flash info"}}</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{$flashInfo->etat == "active"? "Voulez-vous vraiment désactiver le flash info:":"Voulez-vous vraiment activer le flash info:"}}<br>
                                                <p class="text-danger">
                                                    {{ substr($flashInfo->info, 0, 100) . '...' }} ?</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Annuler</button>

                                                <a title="Consulter l'article"
                                                href="{{ route('flashInfos.show', ['flashInfo' => $flashInfo->id]) }}"
                                                class="btn btn-sm btn-primary">Confirmer</i></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
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
