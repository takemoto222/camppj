<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/user.like.list.css') }}">
    <title>相手ユーザーから貰ったいいね一覧</title>
  </head>

  <body>
    <div class="inner_box_wrapper">
      <header class="header_list">
        <h1 class="h1_ttl">貰ったいいねリスト</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
      </header>
      <!--メイン-->

      <articre class="item_list_articre">
        <div class="item_img_left">
          <a href="/item"><img src="{{ asset('camp.html.css/img/camp_2.jpg') }}" class="item_img_size"></a>
        </div>
        <div class="item_ttl_right">
          <p class="item_ttl"><a class="item_ttl_a" href="/item">マグカップ</a></p>
          <p class="item_list_date">2021/10/16</p>
        </div>
      </articre>
      <!--複製-->
      <articre class="item_list_articre">
        <div class="item_img_left">
          <img src="img/camp_3.jpg" class="item_img_size">
        </div>
        <div class="item_ttl_right">
          <p class="item_ttl"><a class="item_ttl_a" href="">焚き火台</a></p>
          <p class="item_list_date">2021/9/30</p>
        </div>
      </articre>
      <articre class="item_list_articre">
        <div class="item_img_left">
          <img src="img/camp_5.jpg" class="item_img_size">
        </div>
        <div class="item_ttl_right">
          <p class="item_ttl"><a class="item_ttl_a" href="">マグカップ</a></p>
          <p class="item_list_date">2021/09/11</p>
        </div>
      </articre>
      <articre class="item_list_articre">
        <div class="item_img_left">
          <img src="img/camp_6.jpg" class="item_img_size">
        </div>
        <div class="item_ttl_right">
          <p class="item_ttl"><a class="item_ttl_a" href="">ノルディスク タープ</a></p>
          <p class="item_list_date">2021/09/11</p>
        </div>
      </articre>
      <articre class="item_list_articre">
        <div class="item_img_left">
          <img src="img/camp_7.jpg" class="item_img_size">
        </div>
        <div class="item_ttl_right">
          <p class="item_ttl"><a class="item_ttl_a" href="">スノーピーク　マグカップ</a></p>
          <p class="item_list_date">2021/09/11</p>
        </div>
      </articre>
    </div>




  </body>