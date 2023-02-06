@extends("base.master")
@section('titre')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Distributeur</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
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
      <span class="brand-text font-weight-light">MaliCreances</span>
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
            <a href="/campagne" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Campagnes
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/zone" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Zones
                <span class="right badge badge-danger">3</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/distrib" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Distributeurs
                <span class="right badge badge-danger">4</span>
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
    <form method="POST" action="/add_distrib" >
        @csrf

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Informations Zone</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group ">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom_distrib" placeholder="nom du distributeur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="type_distrib" placeholder="type distributeur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contacts</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="tel_distrib" placeholder="téléphone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="email_distrib" placeholder="Email du distributeur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" name="addresse_distrib" placeholder="Adresse de la zone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zone concernée</label>
                    <div class="col-sm-10">
                        <select name="nom_zone" id="nom_zone" class="form-control">
                            <option value="">Sélectionnez une zone</option>
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
            <button class="btn btn-success" type="submit">Ajouter</button>
          </div>

      </div>
      <!-- /.row -->
    </form>
    </div><!-- /.container-fluid -->


    <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nom distribution</th>
              <th>Type de la distribution</th>
              <th>Contacts</th>
              <th>Adresse</th>
              <th>Zones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($distribs as $distrib)
            <tr>
                <td>{{ $distrib->nom_distrib}}</td>
                <td>{{ $distrib->type_distrib}}</td>
                <td>{{ $distrib->tel_distrib}}</td>
                <td>{{ $distrib->addresse_distrib}}</td>
                <td>{{ $distrib->nom_zone}}</td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    
  </section>
  <!-- /.content -->
 
@endsection
