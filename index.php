<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="./img/logo_resized_resized_resized.png" type="image/x-icon">
    <script src="/slide.js" defer></script>
    <title>HOME</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="/portal/teste.html"><div class="logo"><img src="/logo_resized_resized.png"></div></a>
            <div class="menu">
                <nav>
                    <a href="./index.php">HOME</a>
                    <a href="/sobre.html">SOBRE</a>
                    <a href="/contatos.html">CONTATOS</a>
                    <a href="/ofertas.html">OFERTAS</a>
                    <a href="/php/login.php">LOGIN</a>
                </nav>
            </div>
            </div>
        </div>
    </header>  <!--FIM DA BARRA SUPERIOR-->
    
        <section class="slider">
            <div class="slider-content">
                
                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">
                <input type="radio" name="btn-radio" id="radio4">
    
                <div class="slide-box primeiro">
                    <a href="/ofertas.html"><img class="img-desktop" src="/bmw.jpg" alt="slide 1"></a>
                    <img class="img-mobile" src="/bmw.jpg" alt="slide 1">
                </div>
    
                <div class="slide-box">
                    <a href="/ofertas.html"><img class="img-desktop" src="/carros.jpg" alt="slide 3"></a>
                    <img class="img-mobile" src="/carros.jpg" alt="slide 1">
                </div>
    
                <div class="slide-box">
                    <a href="/ofertas.html"><img class="img-desktop" src="/moto2.jpg" alt="slide 3"></a>
                    <img class="img-mobile" src="/moto2.jpg" alt="slide 3">
                </div>
                <div class="slide-box">
                    <a href="/ofertas.html"><img class="img-desktop" src="/moto.jpg" alt="slide 3"></a>
                    <img class="img-mobile" src="/moto.jpg" alt="slide 3">
                </div>
    
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
    
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
    
            </div>
        </section> <!--FIM DO CARROSSEL-->

       <center>
        <section class="text-ab">
            <details>
                <summary>NOSSA HISTORIA</summary>
                <p><a href="/sobre.html">VENHA SABER NOSSA HISTORIA</a></p>
            </details>
            <details>
                <summary>MEIOS DE CONTATOS</summary>
                <p><a href="/contatos.html">SUPORTE</a></p>
            </details>
            <details>
                <summary>NOSSAS OFERTAS</summary>
                <p><a href="/ofertas.html">VENHA SABER NOSSA HISTORIA</a></p>
            </details>
        </section>
       </center> <!--Fim da lista dropdrown-->

       <main>

       </main>
       <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <a href="/portal/teste.html"><div class="logo"><img src="/img/logo_resized_resized.png"></div></a>
                <p>Aqui você sai dirigindo seus sonhos </p>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Inicio</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Sobre Nós</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Suporte</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Carros</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Motos</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Outros</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>INFORME</h3>

                <p>
                    Envie seu feedback para nós e <br>
                    informe sua experiência com nossos carros, motos e outros!!
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </footer>

</body>
</html>