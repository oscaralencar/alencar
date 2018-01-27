<div class="banner" id="home"></div>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 no-padding">
                <div class="col-md-12 text-center user">
                    <img src="img/user.jpg" alt="Me" class="img-circle">
                    <h1>Oscar Alencar</h1>
                    <h4>Desenvolvedor Web e Mobile</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <!-- nav starts here -->
                <div class="col-md-12">
                    <div class="main-nav">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a class="active" href="{{ route('site.index') }}">home</a></li>
                                        <li><a href="{{ route('site.sobre') }}">sobre mim</a></li>
                                        <li><a href="{{ route('site.curriculo') }}">meu currículo</a></li>
                                        <li><a href="{{ route('site.portfolio') }}">meu portfólio</a></li>
                                        <li><a href="{{ route('site.contato') }}">contato</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- end of header section -->
