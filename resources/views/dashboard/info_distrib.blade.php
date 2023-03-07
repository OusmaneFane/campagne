@extends('base.master')
@section('title')
<h3>Tous les distributeurs</h3>
@endsection

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des distributeurs</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table1" class="table table-bordered table-striped">
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
