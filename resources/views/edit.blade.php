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
                            <h4 class="card-title">Modifier membre</h4>
                            <p class="card-description">
                                Basic form elements
                            </p>
                            <form class="forms-sample" action="/membres/{{ $membre->id }}" method="post">
                                @method('patch')
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName1">Nom</label>
                                    <input type="text" name="nom" class="form-control" id="exampleInputName1" value="{{ $membre->nom }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Prénom</label>
                                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail3" value="{{ $membre->prenom }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword4" value="{{ $membre->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">Date naissance</label>
                                    <input type="text" name="dateNaissance" class="form-control" id="exampleInputCity1" value="{{ $membre->dateNaissance }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Téléphone</label>
                                    <input type="text" name="telephone" class="form-control" id="exampleInputCity1" value="{{ $membre->telephone }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">C.I.N</label>
                                    <input type="text" name="cin" class="form-control" id="exampleInputCity1" value="{{ $membre->cin }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Adresse</label>
                                    <input type="text" name="adresse" class="form-control" id="exampleInputCity1" value="{{ $membre->adresse }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Date d'entée</label>
                                    <input type="text" name="dateEntree" class="form-control" id="exampleInputCity1" value="{{ $membre->dateEntree }}">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                                <button type="reset" class="btn btn-light">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
