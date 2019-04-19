<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Laravel Vue Js">
    <meta name="author" content="Muhammad Faizal Ansyori">
    <meta name="keyword" content="Laravel Vue JS">
    <title>Lara App</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="{{asset('storage/img_app/logo.svg')}}" width="89" height="25" alt="CoreUI Logo">
            <img class="navbar-brand-minimized" src="{{asset('storage/img_app/sygnet.svg')}}" width="30" height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <div class="dropdown-header text-center">
                        <strong>You have 9 notifications</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="icon-chart text-info"></i> Sales report is ready</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-avatar" src="{{asset('storage/img_app/me.jpg')}}" alt="{{Auth::user()->email}}"> {{Auth::user()->email}}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>OPSI</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i> Profil
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-wrench"></i> Pengaturan
                    </a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <div class="sidebar-header"><img class="img-avatar" src="{{asset('storage/img_app/me.jpg')}}" alt="Avatar">
                <div><strong>{{Auth::user()->name}}</strong></div>
                <div class="text-muted"><small>Founder &amp; CEO</small></div>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-link" type="button"><i class="icon-settings"></i></button>
                    <div class="btn-group" role="group">
                        <button class="btn btn-link" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="icon-user"></i></button>
                        <div class="dropdown-menu">
                            <div class="dropdown-header text-center">
                                <strong>OPSI</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user"></i> Profil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-wrench"></i> Pengaturan
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-lock"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Dashboard</li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.html">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon icon-cursor"></i> Buttons
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="buttons/buttons.html">
                                    <i class="nav-icon icon-cursor"></i> Buttons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="buttons/brand-buttons.html">
                                    <i class="nav-icon icon-cursor"></i> Brand Buttons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="buttons/button-group.html">
                                    <i class="nav-icon icon-cursor"></i> Buttons Group
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">

            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a class="btn" href="#">
                            <i class="icon-speech"></i>
                        </a>
                        <a class="btn" href="./">
                            <i class="icon-graph"></i> Dashboard
                        </a>
                        <a class="btn" href="#">
                            <i class="icon-settings"></i> Settings
                        </a>
                    </div>
                </li>
            </ol>
            <div class="container-fluid">
                <div id="ui-view"></div>
            </div>
        </main>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://milenialdigital.com/"> Milenial Digital</a>
                <span> &copy; 2019 All Right Reserved.</span>
        </div>
    </footer>
    <script src="/js/app.js"></script>
</body>
</html>
