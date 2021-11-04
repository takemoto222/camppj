
<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/transaction.css') }}">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>取引画面</title>
  </head>

  <body>
    <!--全体の箱-->
    <div class="inner_box_wrapper">
      <!--投稿された画像-->
      <header class="header_list">
        <h1 class="h1_ttl">取引画面</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
      </header>
      <div class="announce_space">
        <p class="announce_p">メールを送信して取引を行って下さい。
        </p>
    </div>
    <!--取引相手-->
              <div class="user_box">
                <article class="input_list">
                  <div class="user_img_left">
                    <a href="mypage.html"><img src="img/icon_1.png" class="user_img"></a>
                  </div>
                  <div class="user_name_right">
                    <p class="item_ev">評価</p>
                    <p>★ ★ ★ ★ ★</p>
                  </div>
                </article>
              </div>
              <div class="transaction_space">
                <p class="transaction_p">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  ○○様のメールアドレス
                </p>
                <br>
                <p class="user_email">
                  trade@yahoo.com
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                </p>
              </div>
              <div class="form">
                      <form action="" method="" class="discription_form">
                        <textarea name="discription" rows="7" cols="80%" placeholder="取引が終わったら評価をして下さい。" class="textarea"></textarea>
                        <div class="ev">
                          <input type="radio" class="ev_button">良い
                          <input type="radio" class="ev_button">悪い
                        </div>
                        <div class="button">
                        <input type="submit" action="送信" class="send_button">
                        </div>
                      </form>
              </div>
    </div>
  </body>
</thml>