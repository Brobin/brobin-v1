<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    
    @yield('title')

    {{ HTML::style('css/admin.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/dashboard">Brobin Admin</a>
            </div>

            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    @if(strpos(Request::path(), 'dashboard') !== FALSE) 
                        <li class="active">
                    @else
                        <li>
                    @endif    
                            <a href="/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                    @if(strpos(Request::path(), 'posts') !== FALSE) 
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="/admin/posts"><i class="fa fa-fw fa-edit"></i> Posts</a>
                        </li>
                    @if(strpos(Request::path(), 'pages') !== FALSE)
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="/admin/pages"><i class="fa fa-fw fa-edit"></i> Pages</a>
                        </li>
                    <li>
                        <a href="/admin/logout"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">

                        	@yield('header')

                        </h1>
                    </div>
                </div>

                @yield('content')

            </div>

        </div>

    </div>

</body>

</html>
