@extends('base.master')
@section('title')
<h3>Toutes les Organisations</h3>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des organisations</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
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
