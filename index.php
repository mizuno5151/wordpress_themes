<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<!-- <img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/4a.jpg"> -->
<body class="drawer drawer--left">
  <header role="banner">
    <!-- ハンバーガーボタン -->
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <!-- ナビゲーションの中身 -->
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li><a class="drawer-brand" href="#">Brand</a></li>
        <li><a class="drawer-menu-item" href="#">Nav1</a></li>
        <li class="drawer-dropdown"><a class="drawer-menu-item" href="#" data-toggle="dropdown">人文科学<span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
            <li><a class="drawer-dropdown-menu-item" href="#">英語</a></li>
            <li><a class="drawer-dropdown-menu-item" href="#">科学</a></li>
            <li class="drawer-dropdown"><a class="drawer-menu-item" href="#" data-toggle="dropdown">bbb<span class="drawer-caret"></span></a>
              <ul>
                <li><a class="drawer-dropdown-menu-item" href="#">核分裂反応及び核分子結合ああああああああ</a></li>
                <li><a class="drawer-dropdown-menu-item" href="#">hhhh</a></li>
                <li><a class="drawer-dropdown-menu-item" href="#">kkkk</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <main role="main">
    <!-- Page content -->
  </main>

  <!-- ドロワーメニューの利用宣言 -->
  <script>
    $(document).ready(function() {
    $('.drawer').drawer();
  });
  </script>
</body>

</html>
