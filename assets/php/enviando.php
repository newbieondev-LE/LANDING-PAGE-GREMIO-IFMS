<?php
  include_once("conectar.php");

  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];

  $sql = "INSERT INTO Usuarios (first_name, last_name, email, mensagem) VALUES ('$first_name', '$last_name', '$email', $mensagem)";

  $resultado = mysqli_query($strcon, $sql);
  mysqli_close($strcon);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grêmio Estudantil 2022</title>
  <link rel="shortcut icon" href="/assets/img/ddd.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/variables.css">
  <link rel="stylesheet" href="/assets/css/elements.css">
  <link rel="stylesheet" href="/assets/css/classes.css">
  <link rel="stylesheet" href="/assets/css/menu.css">
  <link rel="stylesheet" href="/assets/css/table.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <input id="close-menu" class="close-menu" type="checkbox" aria-label="Close menu" role="button">
  <label class="close-menu-label" for="close-menu" title="close-menu"></label>

  <aside class="menu white-bg">
    <div class="main-content-menu menu-content">

      <h1 onclick="getElementById('close-menu').checked = false;">
        <a href="/index.html">
          <img class="img-logo" src="/assets/img/ddd_black.svg" alt="Logo do Grêmio Gênesis com um sinal de infinito">
        </a>

        <a href="/index.html">
          <h1>
            Grêmio Estudantil 2022
          </h1>
        </a>
      </h1>


      <nav>
        <ul onclick="getElementById('close-menu').checked = false;">
          <li><a href="/assets/screens/inicio.html">Início</a></li>
          <li><a href="/assets/screens/jornal.html">Jornal Rebello Mendes</a></li>
          <li><a href="/assets/screens/projetos.html">Projetos Estudantis</a></li>
          <li><a href="/assets/screens/capsula.html">Cápsula do Tempo</a></li>
          <li><a href="#intro">Questionários</a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="space white-bg"></div>

  <section id="contact" class="section main-bg">
    <div class="main-content intro-content">
      <div class="intro-text-content">
        <h2>contact us</h2>
        <p>To wrap up January, we are proud to bring you the release of Firefox 85. In this version we are bringing you
          support for the :focus-visible pseudo-class in CSS and associated devtools, and the complete removal of Flash
          support from Firefox.</p>
      </div>
      <div class="intro-img">
        <img src="/assets/img/undraw_contact_us_re_4qqt.svg" alt="Logo para contato">
      </div>

      <div class="contact-form">
        <form action="" method="post">
          <fieldset class="form-grid">
            <legend>Contact me</legend>

            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="text" name="first-name" id="first-name" placeholder="Your first name">
            </div>

            <div class="form-group">
              <label for="last-name">Last Name</label>
              <input type="text" name="last-name" id="last-name" placeholder="Your last name">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" placeholder="Your email">
            </div>

            <div class="form-group full-width">
              <label for="message">Message</label>
              <textarea name="mensagem" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
            </div>

            <div class="form-group full-width">
              <button type="submit">Send message</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </section>

  <!-- <footer id="footer" class="footer main-bg">
    <p><a rel="nofollow" target="_blank" href="https://github.com/xXzKayXX/LANDING-PAGE-CURSOJS"style="color:white"> Feito com <span
          class="heart">❤</span> por Lucas Macedo</a></p>
  </footer> -->

  <!-- Footer -->
  <footer id="footer" class="main-bg">
    <div class="footer-content">
      <div class="socials">
        <a href="https://www.instagram.com/genesis_estudantil2"><i class="fab fa-instagram"></i></a>
        <a href="https://www.twitter.com/gremio_genesis"><i class="fab fa-twitter"></i></a>
        <a href="https://www.wa.me/+556791084533"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>

    <div id="footer" class="footer main-bg">
      <a rel="nofollow" target="_blank" href="https://github.com/xXzKayXX/LANDING-PAGE-CURSOJS" style="color:white">
        Feito com <span class="heart">❤</span> por Lucas Macedo</a>
    </div>

    <div class="footer-info">
      <ul class="footer-info-items">
        <li class="footer-info-item">Legal</li>
        <li class="footer-info-item">Centro de Privacidade</li>
        <li class="footer-info-item">Política de Privacidade</li>
        <li class="footer-info-item">Cookies</li>
        <li class="footer-info-item">Sobre Anúncios</li>
      </ul>
    </div>


  </footer>

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/1427d1eda2.js" crossorigin="anonymous"></script>

  <a class="back-to-top" role="button" aria-label="Back to top" title="Back to top" href="#"></a>
</body>

</html>