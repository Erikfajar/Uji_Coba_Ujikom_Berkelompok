<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('Login') }}/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body> 
    <div class="main">

      <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="" action="">
          <h2 class="form_title title">Create Account</h2>
          <div class="form__icons">
              <img decoding="async" class="form__icon" src="images/facebook.svg" alt="facebook">
              <img decoding="async" class="form__icon" src="images/linkedin.svg" alt="linkedin">
              <img decoding="async" class="form__icon" src="images/twitter.svg" alt="twitter">
          </div>
          <span class="form__span">or use email for registration</span>
          <input class="form__input" type="text" placeholder="Name">
          <input class="form__input" type="text" placeholder="Email">
          <input class="form__input" type="password" placeholder="Password">
          <button class="form__button button submit">SIGN UP</button>
        </form>
      </div>

      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="post" action="{{ route('auth') }}">
          @csrf
          <h2 class="form_title title">Sign in</h2>
          <div class="form__icons">
              <img decoding="async" class="form__icon" src="images/facebook.svg" alt="facebook">
              <img decoding="async" class="form__icon" src="images/linkedin.svg" alt="linkedin">
              <img decoding="async" class="form__icon" src="images/twitter.svg" alt="twitter">
          </div>
          <span class="form__span">or use your email account</span>
          <input class="form__input" type="text" placeholder="Username" name="username">
          <input class="form__input" type="password" name="password" placeholder="Password"><a class="form__link">Forgot your password?</a>
          <button class="form__button button ">SIGN IN</button>
        </form>
      </div>

      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>

        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">
            Untuk tetap terhubung dengan kami, silahkan login dengan informasi pribadi Anda
          </p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>

        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello, Teman !</h2>
          <p class="switch__description description">
            Daftarkan diri anda dan mulai gunakan layanan kami segera
          </p>
          <button class="switch__button button switch-btn">SIGN UP</button>
        </div>

      </div>

    </div>



    <script src="{{ asset('Login') }}/main.js"></script>
  </body>
</html>

