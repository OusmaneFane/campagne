@extends('base.master')
@section('title')
<h3>Toutes les zones</h3>
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des zones</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Noms des zones</th>
          <th>Localités</th>

        </tr>
        </thead>
        <tbody>
        @foreach($zones as $zone)
        <tr>
            <td>{{ $zone->nom_zone}}</td>
            <td>{{ $zone->addresse_zone}}</td>

        </tr>
        @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
