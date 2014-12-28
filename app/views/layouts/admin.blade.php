<!DOCTYPE html>
@if (Request::is('login'))
<html lang="fr" class="login">
@else
<html lang="fr">
@endif
<head>
    <meta charset="UTF-8">
    <title>Matt's guitars</title>
    <!-- <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
@if (Request::is('login'))
    <body class="login">
@else
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('adminHome') }}" class="{{ Request::is( 'admin') ? 'active' : '' }}">Page d'acceuil</a></li>
                    <li><a href="{{ route('manageGuitars') }}" class="{{ (Request::is( 'admin/guitars') || Request::is( 'admin/add-guitar')) ? 'active' : '' }}">Pages Guitares</a></li>
                    <li><a href="{{ route('manageArticles') }}" class="{{ (Request::is( 'admin/articles') || Request::is( 'admin/add-article' )) ? 'active' : '' }}">Pages Articles</a></li>
                    <li><a href="#">Partenaires</a></li>
                    <li><a href="#">Témoignages</a></li>
                </ul>
            </nav>
        </header>
@endif
    @yield('content')
</body>
</html>