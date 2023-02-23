@extends("base.master")
@section('title')
<h3>Campagne N°{{ $campagne->id }}</h3>
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Main content -->
 <section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des bénéficiaires de la campagne {{ $campagne->nom_campagne }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom Des beneficiaires</th>
          <th>Prenoms des beneficiares</th>
          <th>Adresses</th>
          <th>Contacts</th>
          <th>Statut</th>
          <th>Voir</th>

        </tr>
        </thead>
        <tbody>
            @foreach($benefs as $beneficiaire)
    <tr>
        <td>{{ $beneficiaire->nom_beneficiaire}}</td>
        <td>{{ $beneficiaire->prenom_beneficiaire}}</td>
        <td>{{ $beneficiaire->adresse_beneficiaire}}</td>
        <td>{{ $beneficiaire->tel_beneficiaire}}</td>
        <td>
            <button class="btn {{ $beneficiaire->statut == 0 ? 'btn-danger' : 'btn-success' }}" data-toggle="modal" data-target="#modal_{{ $beneficiaire->id }}">
                {{ $beneficiaire->statut == 0 ? 'En attente' : 'Validé' }}
            </button>

            @if($beneficiaire->statut == 0)
                <!-- Modal -->
                <div class="modal fade" id="modal_{{ $beneficiaire->id }}" tabindex="-1" role="dialog" aria-labelledby="modal_{{ $beneficiaire->id }}_label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_{{ $beneficiaire->id }}_label">Ajouter un montant et des pièces jointes pour {{ $beneficiaire->nom_beneficiaire }} {{ $beneficiaire->prenom_beneficiaire }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('beneficiaires.update', $beneficiaire->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="somARecevoir">Montant à recevoir :</label>
                                        <input type="number" class="form-control" id="somARecevoir" name="somARecevoir">
                                    </div>
                                    <div class="form-group">
                                        <label for="pieces_jointes">Pièces jointes :</label>
                                        <input type="file" class="form-control" id="pieces_jointes" name="pieces_jointes[]" multiple>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </td>
        <td> 
            @foreach ($beneficiaire->piecesJointes as $pj)
            <a href="#" data-toggle="modal" data-target="#myModal{{ $pj->id }}"> <i class="bi bi-eye-fill"></i></a>
            <div class="modal fade" id="myModal{{ $pj->id }}" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{ $pj->nom }}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if (Storage::exists($pj->url))
                                <img src="{{ asset($pj->url) }}" alt="{{ $pj->nom }}">
                            @else
                                <p>Fichier non trouvé</p>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </tr>
@endforeach




        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
</div>
 </section>


 @endsection
