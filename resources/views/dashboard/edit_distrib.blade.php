@extends("base.master")
@section('title')
<h3>Edit distributeur</h3>
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
    <form method="POST" action="{{ route('update_distrib', $distrib->id) }}" >
        @csrf
        @method('PUT')

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header bg-primary">
              <h3 class="card-title">Informations Distributeur</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group ">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom_distrib" placeholder="nom du distributeur" value="{{ $distrib->nom_distrib }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="type_distrib" placeholder="type distributeur" value="{{ $distrib->type_distrib }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contacts</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="tel_distrib" placeholder="téléphone" value="{{ $distrib->tel_distrib }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="email_distrib" placeholder="Email du distributeur" value="{{ $distrib->email_distrib }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="addresse_distrib" placeholder="Adresse de la zone"value="{{ $distrib->addresse_distrib }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zone concernée</label>
                    <div class="col-sm-10">
                        <select name="nom_zone" id="nom_zone" class="form-control">
                            <option value="{{ $distrib->nom_zone }}">Sélectionnez une zone</option>
                            @foreach ($zones as $zone)
                            <option value="{{ $zone->nom_zone }}">{{ $zone->nom_zone }}</option>
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
            <button class="btn btn-success" type="submit">Modifier</button>
          </div>

      </div>
      <!-- /.row -->
    </form>
    </div><!-- /.container-fluid -->



  </section>
  <!-- /.content -->

@endsection
