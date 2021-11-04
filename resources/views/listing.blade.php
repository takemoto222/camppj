<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/listing.css')  }}">
    <link rel="stylesheet" href="css/listing.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <meta name="viewport" co00ntent="width=device-width, initial-scale=1.0" />
    <title>出品画面</title>
  </head>

  <body>
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


  <main>
                <div class="box">
                    <ul class="listing_image">
                      <li>
                        <article>
                          <div class="listing_img_box">
                            <img src="" class="listing_img">
                          </div>
                        </article>
                      </li>
                      <li>
                        <article>
                          <div class="listing_img_box">
                            <img src="" class="listing_img">
                          </div>
                        </article>
                      </li>
                      <li>
                        <article>
                          <div class="listing_img_box">
                            <img src="" class="listing_img">
                          </div>
                        </article>
                      </li>
                      <li>
                        <article>
                          <div class="listing_img_box">
                            <img src="" class="listing_img">
                          </div>
                        </article>
                      </li>
                      <li>
                        <article>
                          <div class="listing_img_box">
                            <img src="" class="listing_img">
                          </div>
                        </article>
                      </li>
                      </ul>
                      </div>

                      <!--記入欄-->
                      <div class="input_box">
                        <article class="input_list">
                          <div class="category_left">
                            <p><span class="font_color">商品説明</span></p>
                          </div>
                          <div class="input_zone_right">
                            <p></p>
                          </div>
                        </article>
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
                            <p>商品の詳細</p>
                          </div>
                          <div class="input_zone_right">
                            <p></p>
                          </div>
                        </article>
                        <article class="input_list">
                          <div class="category_left">
                            <p>商品名(40字まで)</p>
                          </div>
                          <div class="input_zone_right">
                            <p></p>
                          </div>
                        </article>
                        <article class="input_list_dis">
                          <div class="itm_discription">
                            <p>説明(1000字まで)</p>
                          </div>
                            <div class="item_discription">
                              <p class="item_discription_p">商品説明</p>
                            </div>
                        </article>
                        <div class="form_listing">
                                    <form action="" method="" >
                                    <textarea name="discription" rows="20" cols="100%" class="discription_form"></textarea>
                                </form>
                                </div>
                        <!--ボタン-->
                        </div>
                        <div class="buttons">
                          <div class="button">
                            <p><a href="/listing_comp" class="listing_button">出品する</a></p>
                            </div>
                            <div class="button">
                            <p><a href="" class="keep_button">下書き保存</a></p>
                            </div>
                        </div>

  </main>
</div>

  </body>
</thml>