@extends('base.master')
@section('title')
<h3>Toutes les zones</h3>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des zones</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
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
