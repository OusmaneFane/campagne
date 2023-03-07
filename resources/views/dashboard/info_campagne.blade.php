@extends('base.master')

@section('title')

<h3>Liste des campagnes</h3>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des Campagnes</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Noms Campagne</th>
          <th>Type Campagne</th>
          <th>Nom de l'organisation</th>
          <th>Date début</th>
          <th>Date fin</th>
          <th>Actions</th>



        </tr>
        </thead>
        <tbody>
        @foreach($campagnes as $campagne)
        <tr>
            <td>{{ $campagne->nom_campagne}}</td>
            <td>{{ $campagne->type_campagne}}</td>
            <td>{{ $campagne->nom_organe}}</td>

            <td>{{ $campagne->date_debut}}</td>
            <td>{{ $campagne->date_fin}}</td>
            {{-- button to edit and delete --}}

            <td>
              <a href="/campagne/{{ $campagne->id }}/edit" class="btn btn-info"> 
                <i class="bi bi-eye-fill"></i>
              </a>
              <form action="/campagne/{{ $campagne->id }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                </button>
              </form>


        </tr>
        @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
