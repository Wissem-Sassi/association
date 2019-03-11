
@extends('index')
@section('content')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-7 d-flex align-items-stretch grid-margin">
                    <div class="row flex-grow">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Liste des membres</h4>
                                    <table class="table">
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>cin</th>
                                        <th> </th>
                                        @foreach($membres as $membre)
                                            <tr>
                                                <td>{{ $membre->nom }}</td>
                                                <td>{{ $membre->prenom }}</td>
                                                <td>{{ $membre->cin }}</td>
                                                <td>
                                                    <form action="/membres/{{ $membre->id }}" method="post" class="membreDelete">
                                                        @method('delete')
                                                        @csrf

                                                        <button type="submit" class="btn btn-danger" style="width: 20px">
                                                            <i class="fa fa-trash-o" style="margin: 0px"></i>
                                                        </button>
                                                    </form>
                                                    <a  href="/membres/{{ $membre->id }}/edit"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailMembre" style="width: 30px">
                                                    <i class="fa fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Nouveau membre</h4>
                            <p class="card-description">
                                Basic form elements
                            </p>
                            <form class="forms-sample" action="/membres" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName1">Nom</label>
                                    <input type="text" name="nom" class="form-control" id="exampleInputName1" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Prénom</label>
                                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail3" placeholder="Prénom">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword4" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">Date naissance</label>
                                    <input type="text" name="dateNaissance" class="form-control" id="exampleInputCity1" placeholder="dd/mm/yyy">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Téléphone</label>
                                    <input type="text" name="telephone" class="form-control" id="exampleInputCity1" placeholder="Téléphone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">C.I.N</label>
                                    <input type="text" name="cin" class="form-control" id="exampleInputCity1" placeholder="C.I.N">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Adresse</label>
                                    <input type="text" name="adresse" class="form-control" id="exampleInputCity1" placeholder="Adresse">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Date d'entée</label>
                                    <input type="text" name="dateEntree" class="form-control" id="exampleInputCity1" placeholder="Date d'entrée">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Ajouter</button>
                                <button type="reset" class="btn btn-light">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- The Modal -->
        <div class="modal fade" id="detailMembre">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Détail</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <ul>
                            <li>
                                <strong>Nom :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->nom }}</span>
                            </li>
                            <li>
                                <strong>Prénom :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->prenom }}</span>
                            </li>
                            <li>
                                <strong>E-mail :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->email }}</span>
                            </li>
                            <li>
                                <strong>Date Naissance :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->dateNaissance }}</span>
                            </li>
                            <li>
                                <strong>Téléphone :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->telephone }}</span>
                            </li>
                            <li>
                                <strong>C.I.N :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->cin }}</span>
                            </li>
                            <li>
                                <strong>Adresse :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->adresse }}</span>
                            </li>
                            <li>
                                <strong>Date d'entrée :</strong>
                                <span style="float: right;width: 50%;text-align: left;">{{ $membre->dateEntree }}</span>
                            </li>

                        </ul>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                    </div>

                </div>
            </div>
        </div>

@endsection
