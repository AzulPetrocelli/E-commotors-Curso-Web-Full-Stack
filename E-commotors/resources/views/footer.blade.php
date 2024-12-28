<footer>
    <div class="footer-content">
        <div class="container-image">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo">
        </div>

        <div class="container-info">
            <div>
                <h4 class="jaro">Atencion al cliente</h4>
                <ul>
                    <li><a href="{{route('message')}}">¿Como ayudarte?</a></li>
                    <li><a href="#">Privacidad y Cookies</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="{{ route('descargarPDF')}}">Devoluciones</a></li>
                </ul>
            </div>

            <div>
                <h4 class="jaro">Desarrolladores</h4>
                <ul>
                    <li>Azul Petrocelli</li>
                    <li>Agustin Montaini</li>
                    <li>Federico Migliavacca</li>
                    <li>Thiago Mathus</li>
                </ul>
            </div>

            <div>
                <h4 class="jaro">Sobre E-commotors</h4>
                <ul>
                    <li><a href="{{route('terminosYcondiciones')}}">Terminos y condiciones</a></li>
                    <li><a href="{{route('politicas')}}">Politicas de envio</a></li>
                    <li><a href="{{route('locales')}}">Locales</a></li>
                    <li>
                        <h4 class="jaro">mail</h4>
                        <a href="#">e-comotors@gmail.com</a>
                    </li>
                    <li>
                        <h4 class="jaro">Redes</h4>
                        <div class="icons-redes">
                            <a href="https://www.facebook.com/"><i class="lab la-facebook"></i></a>
                            <a href="https://www.instagram.com/"><i class="lab la-instagram"></i></a>
                            <a href="https://x.com/"><i class="lab la-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="lab la-youtube"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-autor">© e-comotors 2024 Todos los derechos reservados</div>
</footer>


<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
