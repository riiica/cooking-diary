<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Bootstrap本体 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script src="{{ asset('/js/hoge.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

   <header>
    <br>
    <h1 id="logo">お料理日記</h1>
    <br>

    <img src="{{ asset('/img/header.jpg') }}">
    <nav id="menubar">
     <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Main Dish</a></li>
      <li><a href="/side_dish">Side Dish</a></li>
      <li><a href="">Sweets</a></li>
     </ul>
    </nav>

   </header>


<div id="contents">
<section id="new">
<h2>更新情報・お知らせ</h2>
<dl>
<dt>2020/04/29</dt>
<dd>普段の料理記録用サイトを作成してみました！<br>
今後も更新するので是非献立作成のお役に立てればと思います。</dd>
</dl>
<div id="recipes_img" class="carousel slide carousel-fade" data-ride="carousel" style="width:400px" data-interval="3000">
  <ol class="carousel-indicators">
    <?php 
      $imgCount = 0;
      foreach ($recipes as $recipe) { 
    ?>
      @if ($imgCount === 0)
      <li data-target="#recipes_img" data-slide-to="{{ $imgCount }}" class="active"></li>
      @else
      <li data-target="#recipes_img" data-slide-to="{{ $imgCount }}"></li>
      @endif
    <?php
        $imgCount++;
      };
    ?>
  </ol>
  <div class="carousel-inner">
    <?php 
      $imgCount = 0;
      foreach ($recipes as $recipe) { 
    ?>
      @if ($imgCount === 0)
      <div class="carousel-item active">
      @else
      <div class="carousel-item">
      @endif
        <img src="{{ asset('/img/'. $recipe->recipe_photo ) }}">
        <div class="carousel-caption" style="bottom:50px">
          <h2 style="font-size:150%"><b>{{ $recipe->recipe_name }}</b></h2>
        </div>
        <div class="carousel-caption text-right" style="top:-20px;right:40px;">
          <a href="/detail/{{ $recipe->recipe_id }}" style="color:white;">レシピを見る</h1></a>
        </div>
      </div>
    <?php
        $imgCount++;
      };
    ?>
    <a class="carousel-control-prev" href="#recipes_img" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#recipes_img" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</nav>

</section>

<section>
<h2>お問い合わせ</h2>
<h3>下記フォームよりご連絡ください。</h3>
<p><span class="color1">■<strong>サイトに対するご要望や追加でしてほしい機能などございましたら、下記のフォームにご記入ください。</strong></span><br>
<p>お問い合わせフォームは<a href="https://docs.google.com/forms/d/e/1FAIpQLSdPP0tnSy3wLgwzkU6_LlgiJbKWhRLfIUBvcCE4rM-231C2XQ/viewform">こちら</a></p>
</section>
</div>
<!--/contents-->
<footer>
<small></small>
</footer>
</div>
<!--/container-->

</body>
</html>
