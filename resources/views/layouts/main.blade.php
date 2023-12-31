<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>@yield('title')</title>
  </head>
  
  <header>  
    <div class="aviso-container">
      <div class="aviso">
       <h1 >ESTAMOS ABERTOS TODOS OS DIAS 08:00 – 19:00</h1>
    </div>
    </div>
    
    <div class="header">
        <div class="logo">
            <img  class="img-logo" src="/img/logo/logo.png" alt="">
        </div>
        <div class="menu">
            <div class="menu-toggle ">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li><a  href="/servico">Serviços</a> </li>
                    <li><a href="/contats">Contato</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/equipe">Equipe</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </div>
  </header> 
  <body>

    @yield('content')

    <footer>
      oi
    </footer>
  </body>

  <script src="/js/scripts.js"></script>
 

</html>