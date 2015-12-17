<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">CVWO Assignment 1</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        {{Auth::user()->name}}
                    </a>
                </li>
                @endif
                <li>
                    <a href="/">Home</a>
                </li>
                @if(Auth::check())
                    <li>
                        <a href="{!! action('PostController@create') !!}">Write New Post</a>
                    </li>
                    <li>
                        <a href="{!! action('Auth\AuthController@getLogout') !!}">Logout</a>
                    </li>
                @else
                    <li>
                        <a href="{!! action('Auth\AuthController@getRegister') !!}">Register</a>
                    </li>
                    <li>
                        <a href="{!! action('Auth\AuthController@getLogin') !!}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>