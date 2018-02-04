<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h3>Sobre mim</h3>
                    <p>Desenvolvedor web, apaixonado por tecnologia. Com experiência de mais de 8 anos como desenvolvedor, participei de vários projetos importantes e desafiadores.
                    </p>
                    {{--<a href="about.html">Read full about me</a>--}}
                    <address>
                        E-mail: oscar@alencar.in <br>
                        Belém, PA - Brasil
                    </address>
                </div>
                <div class="col-md-4">
                    <h3>Novidades no @email!</h3>
                    <p>Receba notificações do meu futuro blog e também grandes novidades! Prometo que você não receberá spams!</p>
                    <form action="{{ route('site.mailing.cadastrar') }}" method="post" id="mailingForm">
                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="email" name="email_mailing" id="email_mailing" placeholder="Insira seu melhor email">
                        <input type="submit" value="INSCREVA-SE AGORA!">
                    </form>
                    <div class="socials text-center">
                        <a href="https://twitter.com/OscarAlencar" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/oscar-alencar/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-4 instagram-photos">
                    <h3>Siga @OscarAlencar</h3>
                    <a class="twitter-timeline" data-height="200" data-theme="dark" href="https://twitter.com/OscarAlencar?ref_src=twsrc%5Etfw">Tweets by OscarAlencar</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <a href="#home"><i class="fa fa-arrow-up"></i></a>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; {{ date("Y") }} — Site desenvolvido com <a href="http://laravel.com" target="_blank">Laravel</a></p>
                </div>
                <div class="col-md-6 footer-menu text-right">
                    <ul class="list-inline">
                        <li><a href="/">Home</a></li>
                        <li><a href="/curriculo">Currículo</a></li>
                        <li><a href="/portfolio">Meus trabalhos</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- script tags
============================================================= -->
<script src="assets/js/jquery-2.1.1.js"></script>
<script src="assets/js/jquery.mixitup.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>