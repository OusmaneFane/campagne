<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campagne | Malicreances</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body >


    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">

                <div class="sidebar-header text-center">
                    <div class="d-flex justify-content-between">
                        <div class="auth-logo d-flex align-items-center">
                            <img  src="/images/mlc3.jpg" alt="">
                            {{-- <h2 class="auth-title m-2">  CampaiGn</h2> --}}
                        </div>

                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"  >
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- <li class="sidebar-item  {{ request()->routeIs('campagne') ? 'active' : '' }}">
                            <a href="/campagne" class='sidebar-link'>
                                <i class="bi bi-megaphone-fill"></i>
                                <span>Campagne</span>
                            </a>
                        </li> --}}

                        <li class="sidebar-item  has-sub  {{ request()->routeIs('campagne', 'info_campagne', 'edit_campagne') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-megaphone-fill "></i>
                                <span>Campagnes</span>
                            </a>
                            <ul class="submenu  {{ request()->routeIs('campagne', 'info_campagne', 'edit_campagne') ? 'active' : '' }}">
                                <li class="submenu-item  {{ request()->routeIs('campagne') ? 'active' : '' }}">
                                    <a href="/campagne">Ajouter</a>
                                </li>
                                <li class="submenu-item  {{ request()->routeIs('info_campagne', 'edit_campagne') ? 'active' : '' }}">
                                    <a href="/info_campagne">Modifier</a>
                                </li>

                            </ul>
                        </li>



                        <li class="sidebar-item  has-sub  {{ request()->routeIs('organe', 'info_organe') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-buildings-fill"></i>
                                <span>Organisations</span>
                            </a>
                            <ul class="submenu  {{ request()->routeIs('organe', 'info_organe') ? 'active' : '' }}">
                                <li class="submenu-item  {{ request()->routeIs('organe') ? 'active' : '' }}">
                                    <a href="/organe">Ajouter</a>
                                </li>
                                <li class="submenu-item  {{ request()->routeIs('info_organe') ? 'active' : '' }}">
                                    <a href="/info_organe">Modifier</a>
                                </li>

                            </ul>
                        </li>



                        <li class="sidebar-item  has-sub  {{ request()->routeIs('distrib', 'info_distrib', 'edit_distrib') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-arrows-fullscreen"></i>
                                <span>Distributeurs</span>
                            </a>
                            <ul class="submenu   {{ request()->routeIs('distrib', 'info_distrib', 'edit_distrib') ? 'active' : '' }}">
                                <li class="submenu-item   {{ request()->routeIs('distrib') ? 'active' : '' }}">
                                    <a href="/distrib">Ajouter</a>
                                </li>
                                <li class="submenu-item   {{ request()->routeIs('info_distrib', 'edit_distrib') ? 'active' : '' }}">
                                    <a href="/info_distrib">Modifier</a>
                                </li>

                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub  {{ request()->routeIs('zone', 'info_zone') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-geo-fill"></i>
                                <span>Zones</span>
                            </a>
                            <ul class="submenu   {{ request()->routeIs('zone', 'info_zone') ? 'active' : '' }}">
                                <li class="submenu-item   {{ request()->routeIs('zone') ? 'active' : '' }}">
                                    <a href="/zone">Ajouter</a>
                                </li>
                                <li class="submenu-item   {{ request()->routeIs('info_zone', 'edit_zone') ? 'active' : '' }}">
                                    <a href="/info_zone">Modifier</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  {{ request()->routeIs('benef') ? 'active' : '' }}">
                            <a href="/benef" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Beneficiares</span>
                            </a>
                        </li>



                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div >

            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <div class="container-fluid">
                  <!-- Logo or site name -->
                  <a class="navbar-brand mx-auto" href="#">CampaiGn</a>

                  <!-- Search bar -->
                  <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  </form>

                  <!-- Notification icons -->
                  <ul class="navbar-nav ms-3">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </nav>

        </div>
        <div id="main">


            <div class="page-heading">

                @yield('title')
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            @yield("content")
                        </div>


                    </div>
                    {{-- <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="/assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="/assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="/assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="/assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div> --}}
                </section>
            </div>

            {{-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="/assets/js/main.js"></script>

</body>

</html>
