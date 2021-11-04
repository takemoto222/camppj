<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/item.css') }}">
    <link rel="stylesheet" href="css/item.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <!--横スライド-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>商品画面</title>
  </head>

  <body>
    <!--全体の箱-->
    <div class="inner_box_wrapper">

<header class="header_list">
  <h1 class="h1_ttl">商品</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
</header>
      <!--投稿された画像-->
            <!--横スライド-->
              <!--画像-->
            <div class="slider">
              <div class="slide">
                <ul>
                  <li><img src="{{ asset('camp.html.css/img/camp_2.jpg') }}" alt="" /></li>
                  <li><img src="{{ asset('camp.html.css/img/camp_3.jpg') }}" alt="" /></li>
                  <li><img src="{{ asset('camp.html.css/img/camp_4.jpg') }}" alt="" /></li>
                  <li><img src="{{ asset('camp.html.css/img/camp_5.jpg') }}" alt="" /></li>
                  <li><img src="{{ asset('camp.html.css/img/camp_6.jpg') }}" alt="" /></li>
                  <li><img src="{{ asset('camp.html.css/img/camp_7.jpg') }}" alt="" /></li>
                </ul>
              </div>
              <div class="controller">
                <div class="prev-btn btns">
                  <i class="fas fa-angle-left fa-3x"></i>
                </div>
                <div class="indicator">
                  <!--spanを増やすと画像選択の丸が増える-->
                  <span id="active"></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>

                </div>
                <div class="next-btn btns">
                  <i class="fas fa-angle-right fa-3x"></i>
                </div>
              </div>
            </div>
            <!--横スライド-->
                <!--商品名-->
              <div class="item_name">
                <form class="item_name_form" action="" method="">
                  <p class="item_name_p">スノーピーク　マグカップ</p>
                </form>
              </div>
          <!--いいね-->
<div class="like_box">
  <form class="like_button_number" action="" method="">
    <p class="like_button">いいね</p>
  </form>
</div>
<!--メイン　商品説明から-->
<main class="item_main">
  <div class="item_discription">
    <p class="item_discription_p">商品説明</p>
    <form action="" method="" class="discription_form">
      <textarea name="discription" rows="20" cols="80%" placeholder="商品説明を入力してください" class="textarea"></textarea>
    </form>
  </div>
  <!--詳細　listing.htmlからここに情報が送られる-->
                      <!--記入欄-->
                      <div class="input_box">
                        <!--以下複製-->
                        <article class="input_list">
                          <div class="category_left">
                            <p>カテゴリー</p>
                          </div>
                          <div class="input_zone_right">
                            <p>必須</p>
                          </div>
                        </article>
                        <article class="input_list">
                          <div class="category_left">
                            <p>ブランド</p>
                          </div>
                          <div class="input_zone_right">
                            <p>任意</p>
                          </div>
                        </article>
                        <article class="input_list">
                          <div class="category_left">
                            <p>商品の状態</p>
                          </div>
                          <div class="input_zone_right">
                            <p>必須</p>
                          </div>
                        </article>
                        <article class="input_list">
                          <div class="category_left">
                            <p>発送方法</p>
                          </div>
                          <div class="input_zone_right">
                            <p></p>
                          </div>
                        </article>
                        <article class="input_list">
                          <div class="category_left">
                            <p>発送地域</p>
                          </div>
                          <div class="input_zone_right">
                            <p></p>
                          </div>
                        </article>
                        </div>
          <!--出品者-->
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


          <!--いいねしたユーザーリスト-->
          <div class="like_box">
              <p class="like_list">いいね一覧</p>
              <!--いいねをくれたユーザー-->
            <article class="like_user_list">
              <div class="like_user_left">
                <a href="partner.item.list.html"><img src="img/camp_3.jpg" class="like_user_img"></a>
              </div>
              <div class="user_like_right">
                <p class="like_user_name">さん</p>
              </div>
            </article>
            <!--以下複製-->

          </div>

          <!---->
          <!--ここにチャットスペース入れる-->
          <!---->
          <!--取引開始ボタン-->
          <div class="send_button">
            <button type="submit" class="btn btn-primary"><a href="/transaction" class="send_button_a">取引開始</a></button>
          </div>
<!--savascript-->
<script src="{{ asset('camp.html.css/js/item.js') }}"></script>

</main>



</div>
  </body>
</thml>