<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/new.register.css') }}">
    <title>ユーザー登録画面</title>
  </head>

  <body>
    <div class="inner_box_wrapper">
    <div class="container">
<header class="header_list">
  <h1 class="h1_ttl">新規会員登録</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
</header>
    </div>

    <hr>

    <div class="container">
      <form action="＃" method="get" class="row">
        <!--基本入力欄-->
        <div class="col-sm-8 col-sm-offset-2">
          <div class="form-group">
            <label for="name"><span class="label-danger">必須</span> お名前</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="例：山田　太郎" autofocus required>
          </div>
          <div class="form-group">
            <label for="email"><span class="label-danger">必須</span> メールアドレス</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="例：raffaello@jungleocean.com"
              required>
          </div>
          <div class="form-group">
            <label for="tel"><span class="label-danger">必須</span> 電話番号</label>
            <input type="tel" id="tel" name="tel" class="form-control" placeholder="例：080-1234-5678" required>
          </div>
          <div class="form-group">
            <label for="address"><span class="label-danger">必須</span>住所</label>
            <input type="address" id="address" name="" class="form-control" placeholder="例 : 東京都豊島区西池袋1-12-2 ○○マンション○○号室" required>
          </div>
          <div class="form-group">
            <!--ラジオボタン-->
            <div class="radio-button">
            <label><span class="label label-danger">必須</span> 性別</label>
            <div>

            <label for="input1" class="label-radio">男性</label>
            <input id="input1" name="radio" type="radio"   />
            <label for="input2" class="label-radio">女性</label>
            <input id="input2" name="radio" type="radio"   />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="job"><span class="label label-success">任意</span> 選択項目</label>
            <select id="job" name="job" class="form-control">
              <option value="">選択してください</option>
              <option value="Webデザイナー">Webデザイナー</option>
              <option value="Webディレクター">Webディレクター</option>
              <option value="フロントエンドエンジニア">フロントエンドエンジニア</option>
              <option value="バックエンドエンジニア">バックエンドエンジニア</option>
              <option value="ゴリラ">ゴリラ</option>
              <option value="その他">その他</option>
            </select>
          </div>
          <div class="send_button">
         <a href="/register_comp" class="send_button_a"> 登録</a>
          </div>
        </div>
      </form>
    </div>

    <hr>

    <div class="container">
      <footer>
        <p>&copy; Camp Swap.</p>
      </footer>
    </div>
    </div>
  </body>