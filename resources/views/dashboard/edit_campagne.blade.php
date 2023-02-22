@extends("base.master")
@section('title')
<h3>Campagne N°{{ $campagne->id }}</h3>
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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

        </tr>
        </thead>
        <tbody>
        @foreach($benefs as $beneficiaire)
        <tr>
            <td>{{ $beneficiaire->nom_beneficiaire}}</td>
            <td>{{ $beneficiaire->prenom_beneficiaire}}</td>
            <td>{{ $beneficiaire->adresse_beneficiaire}}</td>
            <td>{{ $beneficiaire->tel_beneficiaire}}</td>

        </tr>
        @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
</div>
 </section>


 @endsection
