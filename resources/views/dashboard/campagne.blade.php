@extends("base.master")
@section('titre')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Campagne</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
@section("sidebar")
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="/organe" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Organisations
                <span class="right badge badge-danger">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/campagne" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Campagnes
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/zone" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Zones
                <span class="right badge badge-danger">3</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/distrib" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Distributeurs
                <span class="right badge badge-danger">3</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/benef" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bénéficiaires
                <span class="right badge badge-danger">3</span>
              </p>
            </a>
          </li>

          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
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
            <form action="/add_campagne" method="POST">
              @csrf
            <div class="row">

              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->

                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Campagne</h3>
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
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Date Début</label>
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
                  <div class="card-header">
                    <h3 class="card-title">Autres</h3>
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
                            <option value="">Sélectionnez un distributeur</option>
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
                            <option value="">Sélectionnez une organisation</option>
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
                <button class="btn btn-danger" type="submit">Créer</button>
              </div>
            </div><br>
            <!-- /.row -->
          </form>
          <div class="card">
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
          </div>
          </div><!-- /.container-fluid -->

</div>


</section>

  <!-- /.content -->
@endsection
