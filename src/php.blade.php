<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
                  <th><label for="form__label--item">お名前</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <input type="text" id="gray1" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                       <input type="text" id="gray1" name="first_name" value="{{ $contact['first_name'] }}"readonly>
                       <div class="form__error">
                          <!--バリデーション機能を実装したら記述します。-->
                       </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">性別</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                    
                       {{ isset($contact['gender1']) ? $contact['gender1'] : '' }}
                       {{ isset($contact['gender2']) ? $contact['gender2'] : '' }}
                       {{ isset($contact['gender3']) ? $contact['gender3'] : '' }}
                       <div class="form__error">
                         <!--バリデーション機能を実装したら記述します。-->
                       </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">メールアドレス</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                       <input type="email" id="gray2" name="email" value="{{ $contact['email'] }}"readonly/>
                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">電話番号</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <input type="tel" id="gray3" name="tel_first tel_second tel_third" value="{{ isset($contact['tel_first']) ? $contact['tel_first'] : '' }} {{ isset($contact['tel_second']) ? $contact['tel_second'] : '' }} {{ isset($contact['tel_third']) ? $contact['tel_third'] : '' }}" readonly>
		                  
                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">住所</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <input type="text" id="gray4" name="street-address" value="{{ $contact['street-address'] }}"readonly/> 
                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
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
                      <input type="text" id="gray4"  name="street-address2" value="{{ $contact['street-address2'] }}"readonly/> 
                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">お問い合わせの種類</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <?php
                        if (isset($_POST['form__input--select'])) {
                        $selectedOption = $_POST['form__input--select'];
                        echo ''. $selectedOption;
                      }
                      ?>
                      
                      <select name="form__input--select">
                       <option value="content1"></option>
                       <option value="content2"></option>
                       <option value="content3"></option>
                      </select> 

                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
                     </div>
                  </td>
              </tr>

              <tr>
                  <th><label for="form__label--item">お問い合わせ内容</label></th>
                  <div class="form__group">
                  <div class="form__group-title">
                  <div class="form__group-content">
                  <div class="form__input--text">
                  <td>
                      <textarea name="textarea" cols="120" rows="5" readonly>{{ isset($contact['textarea']) ? $contact['textarea'] : '' }}</textarea> 
                     <div class="form__error">
                       <!--バリデーション機能を実装したら記述します。-->
                     </div>
                  </td>
              </tr>
          </table>
          <div class="form__button">
                 <button class="form__button-submit" type="submit">送信</button>
                 <button class="form__button-submit" type="submit">修正</button>
               </div> 
         </form>       
    </main>
</body>
</html>