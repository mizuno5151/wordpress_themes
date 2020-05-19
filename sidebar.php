<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>ウェブストエイト</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <?php wp_enqueue_script("jquery"); ?>
 <?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>  
 <?php wp_head(); ?>
 <script>
   $(function(){
     alert("hello")
   })
 </script>
</head>
<body>
 <header>
 <nav class="navbar navbar-default" style="margin-bottom:0;">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
       <span class="sr-only">メニュー</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
   <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
     <ul class="nav navbar-nav">
       <li><a href="#">HOME</a></li>
       <li><a href="#">PROFILE</a></li>
 <li><a href="#">BLOG</a></li>
       <li><a href="#">CONTACT</a></li>
     </ul>
   </div>
 </nav>
 <div id="top-vg">
 <img src="<?php echo get_template_directory_uri(); ?>/images/0.jpg" alt="トップページ画像" >
 </div>
 </header>
 <section id="content">
 <div id="content-wrap" class="container">
 <div id="main" class="col-md-9">
 <h1 class="text-center">公務員合格問題集</h1>
 <p>
   公務員に合格したいあなたに贈る問題集
 <br><br>
 すべて無料でご利用いただけます
 </p>
 <div class="row">
 <div class="col-md-6">
 <p><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="6ヶ月コース画像"></p>
 <h2 class="text-center">しっかり6ヶ月コース</h2>
 <p>ホームページ作成からWeb集客まで一通り習得して売上拡大したい方向けのコース</p>

 </div>
 <div class="col-md-6">
 <p><img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="1ヶ月コース画像"></p>
 <h2 class="text-center">お試し1ヶ月コース</h2>
 <p>特定範囲のみ習いたい・まずは試しに受講してみたい方向けのコース</p>
 </div>
 </div>
 <p class="text-center">
 <br>
 公務員問題は<a href="http://mizunomutsugi.work">こちらから</a>
 <br><br>
 </p>
 </div>
 <div id="sidebar" class="col-md-3">
 <h1 class="text-center">セミナー情報</h1>
 <section id="wordpress-seminar">
 <h2>WordPress入門セミナー</h2>
 <p>
 <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="ワードプレスセミナー画像">
 </p>
 </section>
 <section id="seo-seminar">
 <h2>SEO入門セミナー</h2>
 <p>
 <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="SEOセミナー画像">
 </p>
 </section>
 </div>
 </div>
 </section>
 <footer>
 <div class="container">
 <p class="text-center">Copyright © MizunoMutsugi All Rights Reserved.</p>
 </div>
 </footer>
 <?php wp_footer(); ?>
</body>
</html>
