@extends("base.master")
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@section('title')
<h3>Ajout beneficiaire</h3>

@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <!-- Main content -->
 <section class="content">
    <div class="results">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
    </div>
    <div class="container-fluid">
    <form method="POST" action="/store_benef" >
        @csrf

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Informations Beneficiaire</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group ">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom_beneficiaire" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="prenom_beneficiaire" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="adresse_beneficiaire" placeholder="Adresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Téléphone</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="tel_beneficiaire" placeholder="Contacts">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zone du beneficiaire</label>
                    <div class="col-sm-10">
                        <select name="zone_id" id="zone_id" class="form-control">
                            <option value="">Sélectionnez une zone</option>
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}">{{ $zone->nom_zone }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>


              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
        <div class="text-center mt-4 ">
            <button class="btn btn-success" type="submit">Ajouter</button>
          </div>

      </div>
      <!-- /.row -->
    </form>
    <br>

    <form action="/import_file" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formFileLg" class="form-label">Importer un fichier</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="file">

        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>

    </form>

    </div><!-- /.container-fluid -->

  </section>
  <!-- /.content -->
@endsection
