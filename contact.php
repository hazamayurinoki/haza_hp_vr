<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" conten="noindex,nofollow">
  <meta name="description" content="これはHTMLCSSの課題作品です。"><!-- 被検索対象外 -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--ヴューポート-->
  <meta name="description" content="online clamschool"><!--ディスクリプション-->
  <title>DTO school</title>
  <!--↓フォント変更予定↓-->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css_php/phpstyle.css"> <!-- php側のcssシート -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
  <?php
    require_once("lib/util.php");
    // 文字エンコードの検証
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding;
      // エラーメッセージを出して、以下のコードをすべてキャンセルする
      exit($err);
    }
    // HTMLエスケープ（XSS対策）
    $_POST = es($_POST);
    ?> <!-- コンタクトフォームなのでphpで記述するのか？ -->
  <!--グローバルメニュー-->
  <div class="openbtn"><div class="openbtn-area"><span></span><span></span><span></span></div></div>
  <nav id="g-nav">
    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
      <ul>
        <li id="global-hovering"><a href="index.html">home</a></li>
        <li id="global-hovering"><a href="info.html">info</a></li>
        <li id="global-hovering"><a href="topic.html">topic</a></li>
        <li id="global-hovering"><a href="plan.html">plan</a></li>
        <li id="global-hovering"><a href="contact.html">contact</a></li>
        <li id="global-hovering"><a href="app.html">apps</a></li>
        <li id="global-hovering"><a href="avater.html">avater</a></li>
        <li id="global-hovering"><a href="meta.html">metaverse</a></li>
        <li id="global-hovering"><a href="elearning.html">learning</a></li>
      </ul>
    </div>
  </nav>

  <nav id="sub-nav">
    <ul class="main-nav gnavi">
      <li><a href="info.html">Info</a></li>
      <li><a href="topic.html">Topic</a></li>
      <li><a href="plan.html">Plan</a></li>
    </ul>
  </nav>

  <div id="menu" class="big-bg">
    <header class="bar-header wrapper">
      <div class="menu-content wrapper">
        <h2 class="page-title">Contact</h2>
        <p>
          お申込み・お問い合わせのフォームです
        </p>
      </div><!--/.menu-content -->
  </div>
  </header>

  <div class="info-contact wrapper">


    <div class="wrapper">


      <div id="totop">
        <a href="#">▲
        </a>
      </div>

      <div class="content">
        <h2 class="page-title2">お申込みフォーム</h1>
          <form action="sendmail.php" method="post">
            <dl class="form-area">
              <dt><label for="name">名前</label><span>必須</span></dt>
              <dd>
                <input type="text" id="name" name="your-name">
                <p id="name-error" class="error-text"></p>
              </dd>

              <dt><label for="tel1">電話番号</label><span>必須</span></dt>
              <dd>
                <input type="text" id="tel1" name="your-tel1">
                <input type="text" id="tel2" name="your-tel2">
                <p id="tel-error" class="error-text"></p>
              </dd>
              <dt><label for="email">メールアドレス</label><span>必須</span></dt>
              <dd><input type="email" id="email" name="mail"></dd>

              <dt><label for="reservation">ご都合のよい時間帯</label><span>必須</span></dt>
              <dd>
                <input type="text" id="reservation" name="reserv"> <br>
                ex）10時 ～ 12時, 17時 ～ 19時
                <p id="reservation-error" class="error-text"></p>
              </dd>

              <dt>利用可能端末(複数選択可)<span>必須</span></dt>
              <dd>
                <input type="checkbox" id="venue" class="lesson" name="device" value="desktop">
                <label for="desktop">デスクトップPC</label>
                <input type="checkbox" id="online" class="lesson" name="device" value="smartphone" checked>
                <label for="smartphone">スマートフォン</label><br>
                <input type="checkbox" id="venue" class="lesson" name="device" value="tablet">
                <label for="tablet">タブレット</label>
                <input type="checkbox" id="venue" class="lesson" name="device" value="laptop">
                <label for="laptop">ノートPC</label>
                <p id="lesson-error" class="error-text"></p>
              </dd>
              <dt><label for="message">お問い合わせメッセージ</label></dt>
              <dd><textarea id="message" name="your-message"></textarea></dd>
            </dl>

            <div class="note-online">
              <p>
                ご受講にあたり、端末とネットワーク環境が必要になりますのでご準備をお願いいたします。<br>
                お手数ですが、お電話の前にお使いのパソコンの回線速度を下記からご確認ください。<br></p>
            </div> <!-- classのline_velのセンター揃えのCSSコード効いてない stylecss参照-->
            <h3><span class="line_vel"><a href="https://fast.com/ja/">【回線速度計測】</a></span></h3><br>
            <div class="button-area">
              <button id="submit-button" type="submit" value="送信" >上記の内容で申し込む</button>
            </div>
          </form>
            <div class="note-location">
              <p>
                【会場情報】<br>
                社名：DXonline<br>
                屋号：デクサスオンライン塾<br>
                住所：〒〇〇〇―〇〇〇〇 〇〇〇〇〇〇〇〇<br>
                電話番号：00-0000-0000
                ※この情報はダミ－です
              </p>
            </div>

            <div class="location-map">
              <iframe src="https://www.google.com/maps/d/embed?mid=1701aWraOmI5ahMTOvbGkQSaU81DbGF0&ehbc=2E312F"
                width="640" height="480"></iframe>
            </div>
            <p>このマップはダミーです。</p>
            
          <div class="tohome">
            <h3>
              <p>
                <a href="index.html">―　homeへ戻る　―</a>
              </p>
            </h3>
          </div>

      </div>


      <footer>
        <div class="wrapper">
          <p><small>&copy; 2023 online digital</small></p>
        </div>
      </footer>

      <!--JQueryなど-->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

      <script src="JS/script2.js"></script>
</body><!-- /#home -->
<script>

  $(function () {
    $("label,input[type=checkbox]").click(function () {
      $("label").css("background", "");
      // $(":checked").each(function () {
      // $("label[for='" + $(this).attr("id") + "']").css("background", "#CCC");
      //同じ操作をすぐ次の要素をとってくるメソッドnext()で書き換え
      $(":checked").each(function (index, item) {  //checkedが入っているinput要素をとってくる。eachはforeachのこと
        $(item).next().css("background", "#CCC");	//取得したinputの次（next）の要素のCSSを編集している
        console.log('');
        // $(this).next().css("background", "#CCC");
      });
    });
  });

  // 素のJSの場合は→ 配列(のようなデータ).forEach(function(item,index)){};
  // item と index が逆になることに注意！！

</script>

</html>