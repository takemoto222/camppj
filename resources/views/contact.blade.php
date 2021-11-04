<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('camp.html.css/css/contact.css')  }}">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="{{ ('camp.html.css/css/reset.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>商品画面</title>
  </head>

  <body>
<div class="box_con">
  <!--ヘッダー-->
  <header class="header_list">
    <h1 class="h1_ttl">お問い合わせ</h1>
    <nav class="header_nav">
      <ul class="nav_list">
        <li class="li"><a href="/index" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_112120_256.png') }}" class="img_icon"></a>
        </li>
        <li class="li"><a href="/mypage" class="nav_list_a"><img src="{{ asset('camp.html.css/img/icon_150030_256.png') }}"class="img_icon"></a>
        </li>
      </ul>
    </nav>
  </header>
  <!--お問い合わせフォーム-->
  <form method="post" action="mail.php">
    <table class="formTable">
      <tr>
        <th>ご用件</th>
        <td><select name="ご用件">
            <option value="">選択してください</option>
            <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
            <option value="リンクについて">取引中の商品について</option>
            <option value="リンクについて">商品について(商品IDを添えて下さい。)</option>
            <option value="リンクについて">出品禁止物・禁止行為について</option>
            <option value="リンクについて">キャンセルのついて</option>
            <option value="リンクについて">アプリの使い方やその他</option>
          </select></td>
      </tr>
      
      <tr>
        <th>お名前<span>必須</span></th>
        <td><input size="20" type="text" name="お名前" /></td>
      </tr>
      <tr>
        <th>電話番号（半角）</th>
        <td><input size="30" type="text" name="電話番号" /></td>
      </tr>
      <tr>
        <th>Mail（半角）<span>必須</span></th>
        <td><input size="30" type="text" name="Email" /></td>
      </tr>
      <tr>
        <th>お問い合わせ内容<br /></th>
        <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
      </tr>
    </table>
    <div class="con_pri">
      <div class="box_pri">
        <div class="box_tori">
          <h4>プライバシー</h4>
          <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
        </div>
        <div class="box_num">
          <h4>プライバシー</h4>
          <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
        </div>
        <div class="box_num">
          <h4>プライバシー</h4>
          <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
        </div>
        <div class="box_num">
          <h4>プライバシー</h4>
          <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
        </div>
      </div>
    </div>
    <div class="box_check">
      <label>
        <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span
          class="check">プライバシーポリシーに同意する</span>
      </label>
    </div>
    <p class="btn">
      <span><a href="/contact.send"><input type="submit" value=" 送信 " /></a></span>
    </p>
  </form>
</div>

  </body>
</thml>