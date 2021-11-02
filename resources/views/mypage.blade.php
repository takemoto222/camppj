
<style>
.mypage_main {
  width: 700px;
  background: #fff;
  margin: auto;
  margin-top: 10%;
}

.profile {
  display: flex;
  position: relative;
}

.my_img {
  left: 40%;
  border: 1px solid #696969;
  border-radius: 50%;
  height: 100px;
  width: 100px;
  margin: auto;
  margin-left: 5%;
}

.my_page_img {
  border: 1px solid #696969;
  border-radius: 50%;
  height: 100px;
  width: 100px;
}

.my_name_ev {
  right: 60%;
  margin-left: 30px;
  flex: auto;
  min-width: 10px; /*メインは横いっぱいに広がって欲しい*/
  /*余白*/
}

.my_name {
  font-size: 25px;
  margin-top: 40px;
}

.my_ev {
  font-size: 15px;
}

.mypage_edit_button {
  text-decoration: none;
  color: #696969;
  position: absolute;
  right: 10px;
  bottom: 0;
}
/*上ここまで*/
/*下*/
.mypage_menu {
}

.mypage_ul {
  margin-top: 30px;
}

.mypage_li {
  list-style: none;
  border: 1px solid #918d8d;
  padding: 15px 10px;
  margin-bottom: 1px;
}

.mypage_a {
  text-decoration: none;
  color: #696969;
}

.mypage_a:hover {
  color: #a6a6a6;
}
/*ボタン*/
.buttons {
  margin-top: 50px;
  margin-bottom: 50px;
  display: flex;
  justify-content: center;
}

.top_button {
}

.top_button_a {
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  background: rgb(36, 76, 252);
  color: #fff;
  overflow: hidden;
  border: 1px solid rgb(36, 76, 252);
  border-radius: 50%;
  height: 70px;
  width: 70px;
  text-align: center;
  padding: 25px 22px;
}

.top_button:hover {
  color: #fff;
  border-radius: 50%;
}

.listing_button {
}

.listing_button_a {
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  background: rgb(255, 44, 44);
  color: #fff;
  overflow: hidden;
  border: 1px solid rgb(255, 44, 44);
  border-radius: 50%;
  height: 70px;
  width: 70px;
  margin-left: 90px;
  text-align: center;
  padding: 25px 22px;
}

.listing_button:hover {
  color: #fff;
}

/*ボタンおわり*/

  </style>


<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>お問い合わせ</title>
  </head>

<body>
  <header>
    <h1 class="app_title_logo">アプリタイトル</h1>
  </header>
  <main class="mypage_main">
    <div class="profile">
      <div class="my_img">
        <img src="img/camp_6.jpg" class="my_page_img">
      </div>
      <div class="my_name_ev">
        <h2 class="my_name">ユーザー名</h2>
        <p class="my_ev">評価</p>
        <p>★ ★ ★ ★ ★</p>
      </div>
      <div class="mypage_edit">
        <a href="mypage.edit.html" class="mypage_edit_button">マイページ編集</a>
      </div>
    </div>
    <!--メイン-->
    <div class="mypage_menu">
      <ul class="mypage_ul">
        <li class="mypage_li"><a href="history.html" class="mypage_a">取引履歴</a></li>
        <li class="mypage_li"><a href="like.html" class="mypage_a">いいね！閲覧</a></li>
      </ul>
            <ul class="mypage_ul">
              <li class="mypage_li"><a href="user.like.list.html" class="mypage_a">いいねされた商品</a></li>
              <li class="mypage_li"><a href="listing.item.list.html" class="mypage_a">出品した商品</a></li>
              <li class="mypage_li"><a href="" class="mypage_a">下書き保存　未</a></li>
              <li class="mypage_li"><a href="transaction.list.html" class="mypage_a">取引中・チャット</a></li>
              <li class="mypage_li"><a href="contact.html" class="mypage_a">お問い合わせ</a></li>
            </ul>
    </div>

  <!--ボタン-->
                        <div class="buttons">
                          <div class="top_button">
                          <p><a href="index.html" class="top_button_a">TOP</a></p>
                          </div><div class="listing_button">
                          <p><a href="listing.html" class="listing_button_a">出品</a></p>
                          </div>
                        </div>

  <footer class="mypage_footer"></footer>
</body>