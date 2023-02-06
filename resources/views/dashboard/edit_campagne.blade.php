@extends("base.master")
@section('titre')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Campagne N°{{ $campagne->id }}</h1>
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
    <a href="/dashboard" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MaliCreances</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block">{{ Auth::user()->name }}</a>
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
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des bénéficiaires de la campagne {{ $campagne->nom_campagne }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom Des beneficiaires</th>
          <th>Prenoms des beneficiares</th>
          <th>Adresses</th>
          <th>Contacts</th>
         
        </tr>
        </thead>
        <tbody>
        @foreach($benefs as $beneficiaire)
        <tr>
            <td>{{ $beneficiaire->nom_beneficiaire}}</td>
            <td>{{ $beneficiaire->prenom_beneficiaire}}</td>
            <td>{{ $beneficiaire->adresse_beneficiaire}}</td>
            <td>{{ $beneficiaire->tel_beneficiaire}}</td>
           
        </tr>
        @endforeach
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
</div>
 </section>


 @endsection
