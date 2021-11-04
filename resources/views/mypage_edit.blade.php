
<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('camp.html.css/css/mypage.edit.css')  }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mypage.edit.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>マイページ編集</title>
  </head>

  <body>
<main class="inner_box_wrapper">
<header class="header_list">
<h1 class="h1_ttl">編集</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
</header>
<!--編集画面　画像　名前-->
<div class="my_img_name_box">
  <div class="my_img_edit">
    <div class="my_img_box">
    <img src="" class="my_img">
  </div>
  </div>
  <div class="my_name_edit">
    <input type="text" name="name" placeholder="お名前" >
  </div>
</div>

<!--自己紹介 テキストエリア-->
<div class="pro_textarea_box">
  <form class="pro_textarea" action="" method="">
    <textarea name="profile" rows="20" clos="100%" class="profile_area"></textarea>
    <!--メール　住所　編集ホーム-->
    <div class="edit_text">
      <label class="label"></label>
      <input type="text" placeholder="住所">
    </div>
    <!--複製-->
    <div class="edit_text">
      <label class="label"></label>
      <input type="text" placeholder="メールアドレス">
    </div>
    <!--送信-->
          <div class="btn">
            <button type="submit" class="btn btn-primary"><a href="/mypage_comp" class="send_button_a">登録</a></button>
          </div>
  </form>
</div>
</main>
  </body>
</thml>