
<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('camp.html.css/css/style.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
        <!--横スライド-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>トップページ</title>
  </head>

  <body>


          <!--ハンバーガー -->
          <header>
          <nav class="nav_hum" id="nav">
  <!--ここにハンバーがーメニューの中身をいれる-->
                </nav>
                <div class="menu" id="menu">
                  <span class="menu__line--top"></span>
                  <span class="menu__line--middle"></span>
                  <span class="menu__line--bottom"></span>
                </div>
<!--ハンバーガー-->

            <!--ロゴ-->
            <div class="area_logo_header">
            <a href="index.html" class="app_logo">Camp Swap</a>
            </div>
            <!--フォーム　検索-->
            <form class="form_header" action="">
              <div class="wrap_input">
                <input class="seach_space" type="search">
                <a href="" class="seach_button">検索</a>
              </div>
            </form>

            <!--ナビバー-->
            <nav class="nav_header">
              <ul class="list_nav_header">
                <li class="login">
                  <a href="/login" class="btn_login">ログイン</a>
                </li>
              </ul>
            </nav>
            </header>




            <div class="layout_page">






              <!--サイドバー -->

              <aside class="sidebar">
                        <div class="box">
                          <ul class="list_nav_sidebar">
                            <li class="sidebar_list"><a href="/mypage" class="sidebar_a">マイページ</a></li>
                            <li class="sidebar_list"><a href="/history" class="sidebar_a">取引履歴</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">空白</a></li>
                          </ul>
                        </div>
                        <div class="area_register_sidebar">
                          <p class="sidebar_p">いいね、コメント、取引を行うにはログイン又は会員登録してください。</p>
                          <a href="/login" class="btn_login">ログイン</a>
                          <a href="/new_register" class="btn_new_register">会員登録</a>
                        </div>
                        <div class="category"><a href="" class="sidebar_a">カテゴリー</a></div>
                        <div class="box">
                          <ul class="list_nav_sidebar">
                            <li class="sidebar_list"><a href="" class="sidebar_a">テント・タープ</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">寝袋</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">椅子・机</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">調理関連</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">ランタン</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">衣類</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">バッグ</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">靴</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">その他</a></li>
                          </ul>
                        </div>
</aside>





              <main class="main">
                <!--トップ画面のお気に入り画像-->
                <div class="item_top_ttl">
                <h2 class="top_ttl_h2">お気に入り</h2>
              <p class="favo_list_p"><a href="like.html" class="favo_list_a">すべて見る</a></p>
                </div>
                <!--jsとリンク  横スクロール-->


<!--お気に入り-->
              <div class="box">
                <ul class="list_favo_image">
                    <li>
                      <article>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_6.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
            <!--複製-->
                    <li>
                      <article>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_1.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_3.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_4.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_5.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_6.jpg') }}" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>

                  </ul>
                  </div>

                  <!--メイン下部分-->
                <!--新着-->
                <div class="item_top_ttl">
                  <h2 class="top_ttl_h2">新着</h2>
                  <p class="favo_list_p"><a href="" class="favo_list_a">すべて見る</a></p>
                
                </div>
                <div class="box">
                  <ul class="list_image">
                    <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_3.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <!--複製-->
                    <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_3.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_6.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_8.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_3.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>

                                        <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_1.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                                        <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_7.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                                        <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_5.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                                        <li>
                      <article>
                          <div class="img">
                            <a href="/item"><img src="{{ asset('camp.html.css/img/camp_2.jpg') }}" alt="" class="img_top_item"></a>
                          </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>


                  </ul>

                </div>


<!--スクロール　＋　出品ボタン-->
                <div class="listing_top"><a href="/listing" class="listing_top_a">出品</a></div>
<button class="scroll-top" id="button">↑</button>
<script src="{{ asset('camp.html.css/js/main.js') }}"></script>
              </main>
            </div>
            </body>
            </thml>
