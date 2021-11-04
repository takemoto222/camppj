<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/login.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <title>ログイン</title>
  </head>

  <body>
    <!--全体-->
  <div class="form-wrapper">
      <!--全体-->
        <!--上の部分-->
    <h1 class="login_ttl">アプリタイトル</h1>
    <!--うえの画面インナー-->
              
    <!--うえの画面インナーのインナー-->
                <div class="login_up_area_inner">
                  <p class="login_p">アカウントをお持ちでない方</p>
                  <button class="new_member_button"><a href="new.register.html" class="login_a">新規会員登録</a></button>
              
              </div>
      
       <!--したの画面インナー-->
   <div class="form_inner">
     <p class="login_p">ログインはこちらから</p>
      <!--ログイン画面-->
     <form>
      <div class="form-item">
          <label for="email"></label>
          <input type="email" name="email" required="required" placeholder="Email Address">
      </div>
      <div class="form-item">
          <label for="password"></label>
          <input type="password" name="password" required="required" placeholder="Password">
      </div>
      <div class="button-panel">
         <input type="submit" class="button" title="Sign In" value="ログイン">
      </div>
     </form>
     <!--フッター-->
    <div class="form-footer">
      <p><a href="#">Create an account</a></p>
      <p><a href="#">Forgot password?</a></p>
    </div>
   </div>
</div>
  </body>