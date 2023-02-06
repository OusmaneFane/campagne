@extends('base.master')
@section('titre')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Toutes les zones</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Zones</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('sidebar')
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
            <a href="/zone" class="nav-link active">
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