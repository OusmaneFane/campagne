@extends('base.master')

@section('title')
<h3>Toutes les Organisations</h3>
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des organisations</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom Organisation</th>
          <th>Type Organisation</th>
          <th>Contatcs Organisation</th>
          <th>Adresse </th>
       

        </tr>
        </thead>
        <tbody>
        @foreach($organes as $organe)
        <tr>
            <td>{{ $organe->nom_organe}}</td>
            <td>{{ $organe->type_organe}}</td>
            <td>{{ $organe->tel_responsable}}</td>
            <td>{{ $organe->adresse_organe}}</td>
           



        </tr>
        @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
