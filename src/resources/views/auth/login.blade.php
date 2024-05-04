<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
 <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
  <header class="header">
  <div class="header__inner">
    <a class="header__logo" href="/">
      <h2>FashionablyLate</h2>
    </a>
    <nav class="header__nav">
       <ul class="header__nav-list"> 
          <li class="header__nav-item">
             <a href="/register" class="register__link">Register</a>
          </li>
       </ul>
     </nav>   
  </div>
</header>
<main>
  <div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Login</h2>
    </div>
  </div>
</main>
    <form class="form" action="/login" method="post">
        @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com" />
          </div>
          <div class="form__error">
            @error('email')
           <span>{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">パスワード</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" placeholder="例:coachtech1106" />
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
  </div>
</body>

</html>