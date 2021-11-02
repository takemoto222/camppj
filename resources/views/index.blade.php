<style>

/*ヘッダーハンバーガー*/
header {
  height: 60px;
  background: #a6a6a6;
  display: flex;
}

.nav_hum {
  position: absolute;
  height: 100vh;
  width: 16%;
  left: -16%;
  background: #eee;
  transition: 0.7s;
}
.nav_hum .list_nav_sidebar {
  padding-top: 80px;
}

.menu {
  display: inline-block;
  width: 36px;
  height: 32px;
  cursor: pointer;
  position: relative;
  left: 20px;
  top: 20px;
}
.menu__line--top,
.menu__line--middle,
.menu__line--bottom {
  display: inline-block;
  width: 100%;
  height: 2px;
  background-color: #000;
  position: absolute;
  transition: 0.5s;
}
.menu__line--top {
  top: 4px;
}
.menu__line--middle {
  top: 14px;
}
.menu__line--bottom {
  bottom: 4px;
}
.menu.open span:nth-of-type(1) {
  top: 14px;
  transform: rotate(45deg);
}
.menu.open span:nth-of-type(2) {
  opacity: 0;
}
.menu.open span:nth-of-type(3) {
  top: 14px;
  transform: rotate(-45deg);
}
.in {
  transform: translateX(100%);
}

/*ここまで*/

/*ヘッダー*/

.container {
  display: flex; /*ヘッダーのコンテナーを横並び*/
  height: 70px;
  display: flex;
}

/*ハンバーガー*/

/*ロゴ*/
.app_logo {
  border: 1px solid #fff;
  background: rgb(252, 85, 85);
  border-radius: 2px;
  width: 150px;
  height: 50px;
  font-weight: bold;
  font-size: 15px;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
}

.area_logo_header {
  margin: 20px 80px;
}

.area_logo_header .logo {
  display: block;
  width: 80px;
  height: 30px;
  background: #696969;
  color: #f9f9f9;
  text-align: center;
}

/*検索スペース*/
.form_header {
  margin: auto;
}

.wrap_input {
}

.seach_space {
  width: 400px;
  height: 35px;
}

.seach_button {
  font-size: 14px;
  height: 38px;
  align-items: center;
  display: inline-flex;
  text-decoration: none;
  border: 1px solid #ccc;
  color: #696969;
  border-radius: 5px;
  padding: 0 15px;
}

/*ナビバー*/
.nav_header {
}
.list_nav_header {
  display: flex;
  align-items: center;
}

.list_nav_header > li + li {
  margin: 0 0 0 15px;
}

li {
  list-style: none;
}

/*ログインボタン*/

.btn_login {
  font-size: 14px;
  height: 38px;
  align-items: center;
  display: inline-flex;
  text-decoration: none;
  border: 1px solid #ccc;
  color: #696969;
  border-radius: 2px;
  padding: 0 15px;
  margin-right: 40px;
  margin-left: 40px;
  background: #fff;
  margin-bottom: 10px;
}

.btn_login:hover {
  color: #696969;
  background: #eee;
}

.btn_login:before {
  content: "";
  display: block;
  width: 25px;
  height: 25px;
  background: #696969;
  border-radius: 50%;
  margin-right: 10px;
}

/*会員登録ボタン*/
.btn_new_register {
  font-size: 14px;
  height: 38px;
  align-items: center;
  display: inline-flex;
  text-decoration: none;
  border: 1px solid #ccc;
  color: #696969;
  border-radius: 2px;
  padding: 0 15px;
  margin-right: 40px;
  margin-left: 40px;
  background: #fff;
  margin-top: 20px;
}

.btn_new_register:hover {
  color: #696969;
  background: #eee;
}

.btn_new_register:before {
  content: "";
  display: block;
  width: 25px;
  height: 25px;
  background: #696969;
  border-radius: 50%;
  margin-right: 10px;
}
/*サイドバー */
.sidebar {
  flex: 0 0 240px; /*サイドバー の横幅*/
}

.category {
  margin-top: 100px;
}

.sidebar_p {
  margin-top: 100px;
  font-weight: bold;
  line-height: 30px;
  padding: 0 10px;
}
/*サイドバーナビリスト*/

.list_nav_sidebar a {
  display: flex;
  align-items: center;
  height: 38px;
}

.list_nav_sidebar .sidebar_a:before {
  content: "";
  display: block;
  width: 25px;
  height: 25px;
  background: #696969;
  border-radius: 50%;
  margin-right: 10px;
}

.sidebar_list {
  list-style: none;
  padding: 12px 0;
  border-top: 1px solid #ccc;
}

.sidebar_list:hover {
  color: #696969;
  background: #eee;
}

.sidebar_a {
  text-decoration: none;
  color: #696969;
}
/**/
/**/
/**/
/**/
/**/
/**/
/*メイン*/
.main {
  background: #f9f9f9;
  flex: auto;
  min-width: 10px; /*メインは横いっぱいに広がって欲しい*/
  padding: 30px; /*余白*/
}

/*お気に入り　新着　などの区切り*/
.item_top_ttl {
  display: flex;
  color: #696969;
  border-top: 2px solid #ccc;
  padding: 15px 0;
  margin: 25px 0px;
}
/*トップ　お気に入り部分*/
.top_ttl_h2 {
  font-size: 25px;
}

.favo_list_p {
  margin-left: auto;
}

.favo_list_a {
  text-decoration: none;
}

.favo_list_a:hover {
  color: rgb(233, 54, 54);
}

/*メインボックス*/
.main .box {
  padding: 30px 0;
}
.main .box + .box {
  border-top: 3px solid #ccc;
}

/*お気に入り*/

.list_favo_image {
  display: flex;
  margin: -10px;
}

/*widthで横に表示される画像の数がきまる*/
.list_favo_image > li {
  width: 18%;
  height: 180px;
  margin: 50px 10px;
  border: 1px solid #000;
}

.list_favo_image .thum {
  width: 100%;
  background: #817d7c;
}

.list_favo_image .thum:before {
  content: "";
  display: block;
  width: 100%;
  padding-top: 56.25%;
}

/*新着*/
.list_image {
  display: flex;
  flex-wrap: wrap;
  margin: -10px;
}

/*widthで横に表示される画像の数がきまる*/
.list_image > li {
  width: 18%;
  height: 180px;
  margin: 50px 10px;
  border: 1px solid #000;
}

.img_top_item {
  width: 100%;
  height: 100%;
}

/*サムネイル　投稿画像*/
.list_image .thum {
  width: 100%;
  background: #817d7c;
}

.list_image .thum:before {
  content: "";
  display: block;
  width: 100%;
  padding-top: 56.25%;
}

.layout_page {
  display: flex;
}

.layout {
  display: flex;
}

/*出品ボタン*/
.listing_top {
  position: fixed;
  right: 5%;
  bottom: 10%;
  cursor: pointer;
}

.listing_top_a {
  color: #fff;
  text-decoration: none;
  background-color: rgb(255, 21, 21);
  opacity: 0.8;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  border: none;
  font-weight: bold;
  color: #fff;
  padding: 20px 17px;
}

.scroll-top {
  position: fixed;
  right: 2%;
  bottom: 5%;
  background-color: #999;
  opacity: 0.8;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: none;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  font-size: 20px;
}

/*ここまで*/


</style>
<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/reset.css">
        <!--横スライド-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jsハンバーガーメニュー対応</title>
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
                  <a href="login.html" class="btn_login">ログイン</a>
                </li>
              </ul>
            </nav>
            </header>




            <div class="layout_page">






              <!--サイドバー -->

              <aside class="sidebar">
                        <div class="box">
                          <ul class="list_nav_sidebar">
                            <li class="sidebar_list"><a href="mypage.blade.php" class="sidebar_a">マイページ</a></li>
                            <li class="sidebar_list"><a href="history.html" class="sidebar_a">取引履歴</a></li>
                            <li class="sidebar_list"><a href="" class="sidebar_a">空白</a></li>
                          </ul>
                        </div>
                        <div class="area_register_sidebar">
                          <p class="sidebar_p">いいね、コメント、取引を行うにはログイン又は会員登録してください。</p>
                          <a href="login.html" class="btn_login">ログイン</a>
                          <a href="new.register.html" class="btn_new_register">会員登録</a>
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
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
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
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
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
                            <a href="item.html"><img src="img/camp_6.jpg" alt="" class="img_top_item"></a>
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
                          <img src="img/camp_3.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます
                            ここにタイトルが記載されます
                          </p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <img src="img/camp_2.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <img src="img/camp_5.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <img src="img/camp_7.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <img src="img/camp_6.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記
                            載されます</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <div class="img">
                          <img src="img/camp_6.jpg" alt="" class="img_top_item">
                        </div>
                        <div class="thum_text">
                          <p class="thum_p">ここにタイトルが記載されます</p>
                        </div>
                      </article>
                    </li>


                  </ul>

                </div>


<!--スクロール　＋　出品ボタン-->
                <div class="listing_top"><a href="listing.html" class="listing_top_a">出品</a></div>
<button class="scroll-top" id="button">↑</button>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/item.js"></script>
              </main>
            </div>
            </body>
            </thml>
