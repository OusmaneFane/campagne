@extends("base.master")
@section('title')
<h3>Ajout Campagne</h3>

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
            <form action="/add_campagne" method="POST">
              @csrf
            <div class="row">

              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->

                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header bg-info">
                    <h3 class="card-title text-white">Campagne</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="form-horizontal">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nom_campagne" placeholder="Nom de la campagne">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="type_campagne" placeholder="Type de la campagne">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Date D??but</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="date_debut" placeholder="Type de la campagne">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Date fin</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="date_fin" placeholder="Type de la campagne">
                        </div>
                      </div>


                    </div>

                  </div>
                </div>
                <!-- /.card -->

              </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
                <!-- Form Element sizes -->
                <div class="card card-success">
                  <div class="card-header bg-info">
                    <h3 class="card-title text-white">Autres</h3>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Nom de la zone</label>
                      <div class="col-sm-7">
                        {{-- <input type="text" class="form-control" name="nom_zone" placeholder="Les zones"> --}}

                            @foreach($zones as $zone)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $zone->id }}" value="{{ $zone->nom_zone }}" name="nom_zone[]">
                                    <label class="form-check-label" for="inlineCheckbox1">{{ $zone->nom_zone }}</label>
                                </div>
                            @endforeach
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Nom du distributeur</label>
                        <div class="col-sm-7">
                          {{-- <input type="text" class="form-control" name="nom_distrib" placeholder="Nom distributeur"> --}}
                          <select name="nom_distrib" id="nom_distrib" class="form-control">
                            <option value="">S??lectionnez un distributeur</option>
                            @foreach ($distribs as $dist)
                            <option value="{{ $dist->nom_distrib }}">{{ $dist->nom_distrib }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Nom de l'organisatiuon</label>
                        <div class="col-sm-7">
                          {{-- <input type="text" class="form-control" name="nom_organe" placeholder="Nom Organisation"> --}}
                          <select name="nom_organe" id="nom_organe" class="form-control">
                            <option value="">S??lectionnez une organisation</option>
                            @foreach ($organes as $organe)
                            <option value="{{ $organe->nom_organe }}">{{ $organe->nom_organe }}</option>
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
              <!--/.col (right) -->
              <div class="text-center mt-1 ">
                <button class="btn btn-primary" type="submit">Cr??er</button>
              </div>
            </div><br>
            <!-- /.row -->
          </form>
          {{-- <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des campagnes en cours</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom Campagne</th>
                  <th>Type de la campagne</th>
                  <th>Nom du distributeur</th>
                  <th>Zones</th>
                  <th>date_debut</th>
                  <th>date_fin</th>
                </tr>
                </thead>
                <tbody>
                @foreach($campagnes as $campagne)
                <tr>

                    <td><a href="/campagne/{{ $campagne->id }}/edit">{{ $campagne->nom_campagne}}</a></td>
                    <td>{{ $campagne->type_campagne}}</td>
                    <td>{{ $campagne->nom_distrib}}</td>
                    <td>{{ $campagne->nom_zone}}</td>
                    <td>{{ $campagne->date_debut}}</td>
                    <td>{{ $campagne->date_fin}}</td>

                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div> --}}
          </div><!-- /.container-fluid -->

</div>


</section>

  <!-- /.content -->
@endsection
