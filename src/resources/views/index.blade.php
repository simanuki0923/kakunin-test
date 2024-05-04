<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
          <a class="header__logo" href="/">
            <h2>FashionablyLate</h2>
          </a>
       
        </div>
    </header>
    <main>
      <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="center" action="/contacts/confirm" method="post">
            @csrf
          <table>
              <tr>
                  <th><label for="form__label--item">お名前※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <input type="text" id="gray1" name="last_name" placeholder="例:山田">
                       <input type="text" id="gray1" name="first_name" placeholder="例:太郎">
                       <div class="form__error">
                           @error('name')
                       {{ $message }}
                       @enderror
                       </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">性別※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <input type="radio" name="gender1" value="男性">男性
                       <input type="radio" name="gender2" value="女性">女性
                       <input type="radio" name="gender3" value="その他">その他 
                       <div class="form__error">
                          @error('gender')
                       {{ $message }}
                       @enderror
                       </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">メールアドレス※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <input type="email" id="gray2" name="email" placeholdder="test@example.com" />
                     <div class="form__error">
                        @error('email')
                       {{ $message }}
                       @enderror
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">電話番号※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <input type="tel" id="gray3" name="tel_first"    placeholder="080">
                       <a>-</a>
		                   <input type="tel" id="gray3" name="tel_second" placeholder="1234">
                       <a>-</a>
		                   <input type="tel" id="gray3" name="tel_third" placeholder="5678">
                     <div class="form__error">
                      @error('tel_first')
                      {{ $message }}
                      @enderror
                      @error('tel_second')
                      {{ $message }}
                      @enderror
                      @error('tel_third')
                      {{ $message }}
                      @enderror
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">住所※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <input type="text" id="gray4" name="street-address" placeholdder="例:東京都渋谷区千駄ヶ谷1-2-3" /> 
                     <div class="form__error">
                        @error('street-address')
                       {{ $message }}
                       @enderror
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">建物名</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <input type="text" id="gray4"  name="street-address2" placeholdder="例:東京都渋谷区千駄ヶ谷1-2-3" /> 
                     <div class="form__error">
                      
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">お問い合わせの種類※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <select name="form__input--select">
                         <option name="content" placeholder="1">選択してください  
                         <option name="content" placeholder="1">1
                         <option name="content" placeholder="2">2
                         <option name="content" placeholder="3">3
                         
                       </select>
                     <div class="form__error">
                        @error('content')
                       {{ $message }}
                       @enderror
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">お問い合わせ内容※</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <textarea name="textarea" cols="120"rows="5"placeholder="お問い合わせ内容をご記載ください"></textarea> 
                     <div class="form__error">
                        @error('textarea')
                       {{ $message }}
                       @enderror
                     </div>
                  </td>
              </tr>
          </table>
          <div class="form__button">
                 <button class="form__button-submit" type="submit">確認画面</button>
               </div> 
         </form>       
    </main>
</body>
</html>