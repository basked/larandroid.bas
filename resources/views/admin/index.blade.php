<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BasAdmin | Dashboard</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">BasAdmin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbar" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href={{url("admin")}}>Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url("users")}}>Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url("pages")}}>Pages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{url("posts")}}>Posts</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="#">Welocome, basked</a></li>
            <li class="nav-item"><a class="nav-link" href={{url("login")}}>Logout</a></li>
        </ul>
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    <small>Manage You Site</small>
                </h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create Content
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Add page</button>
                        <button class="dropdown-item" type="button">Add post</button>
                        <button class="dropdown-item" type="button">Add user</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--breadcrumb-->
<section id="breacrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>
{{--left main--}}
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <a href="{{url("admin")}}" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</a>
                    <a href="{{url("pages")}}" class="list-group-item">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
                    <a href="{{url("posts")}}" class="list-group-item">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span
                                class="badge">33</span></a>
                    <a href="{{url("users")}}" class="list-group-item">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span
                                class="badge">203</span></a>
                </ul>

                <div class="well">
                    <h4>Spase Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">25%
                        </div>
                    </div>
                    <h4>Brandwidth Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">75%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!--Website overview-->
                <div class="card">
                    <div class="card-header main-color-bg">
                        Website Overview
                    </div>
                    <div class="card-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                                <h4>Users</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                                <h4>Pages</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 23</h2>
                                <h4>Posts</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12.334</h2>
                                <h4>Visitors</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Latest Users-->
                <div class="card">
                    <div class="card-header main-color-bg">
                        Latest Users
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>                            <tr>
                                <th scope="row">4</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>                            <tr>
                                <th scope="row">5</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<main role="main" class="container">


</main>

<script src="/js/app.js"></script>
</body>
</html>
