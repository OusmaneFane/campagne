<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/dashboard"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

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

                        <li class="sidebar-item  has-sub  {{ request()->routeIs('campagne', 'info_campagne') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-megaphone-fill "></i>
                                <span>Campagnes</span>
                            </a>
                            <ul class="submenu  {{ request()->routeIs('campagne', 'info_campagne') ? 'active' : '' }}">
                                <li class="submenu-item  {{ request()->routeIs('campagne') ? 'active' : '' }}">
                                    <a href="/campagne">Créer</a>
                                </li>
                                <li class="submenu-item  {{ request()->routeIs('info_campagne') ? 'active' : '' }}">
                                    <a href="/info_campagne">Liste</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  {{ request()->routeIs('organe') ? 'active' : '' }}">
                            <a href="/organe" class='sidebar-link'>
                                <i class="bi bi-buildings-fill"></i>
                                <span>Organisation</span>
                            </a>
                        </li>



                        <li class="sidebar-item  has-sub  {{ request()->routeIs('distrib', 'info_distrib', 'edit_distrib') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link '>
                                <i class="bi bi-arrows-fullscreen"></i>
                                <span>Distributeurs</span>
                            </a>
                            <ul class="submenu   {{ request()->routeIs('distrib', 'info_distrib', 'edit_distrib') ? 'active' : '' }}">
                                <li class="submenu-item   {{ request()->routeIs('distrib') ? 'active' : '' }}">
                                    <a href="/distrib">Créer</a>
                                </li>
                                <li class="submenu-item   {{ request()->routeIs('info_distrib', 'edit_distrib') ? 'active' : '' }}">
                                    <a href="/info_distrib">Liste</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  {{ request()->routeIs('zone') ? 'active' : '' }}">
                            <a href="/zone" class='sidebar-link'>
                                <i class="bi bi-geo-fill"></i>
                                <span>Zones</span>
                            </a>
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
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

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

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="/assets/js/main.js"></script>
</body>

</html>
