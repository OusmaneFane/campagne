@extends('base.master')
@section('title')
<h3>Tous les distributeurs</h3>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des distributeurs</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Noms distributeurs</th>
          <th>Type distributeur</th>
          <th>Contatcs distributeur</th>
          <th>Zones concernées</th>
          <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($distribs as $distrib)
        <tr>
            <td>{{ $distrib->nom_distrib}}</td>
            <td>{{ $distrib->type_distrib}}</td>
            <td>{{ $distrib->tel_distrib}}</td>
            <td>{{ $distrib->nom_zone}}</td>
            <td>
                <a href="/distrib/{{ $distrib->id }}/edit" class="btn btn-info"> 
                    <i class="bi bi-eye-fill"></i>
                </a>
                <form action="/distrib/{{ $distrib->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                </form>
            </td>



        </tr>
        @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
