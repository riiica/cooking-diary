<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <li><a href="">Side Dish</a></li>
      <li><a href="">Sweets</a></li>
     </ul>
    </nav>

   </header>


<div id="foods_contents">
<section id="new">
<?php
foreach ($recipes as $recipe) {
    echo $recipe->recipe_name;
}
?>
<h2>Side Dish</h2>
<table>
<th>ほうれん草と人参の中華風炒め</th>
<th>ピーマンとしらすの醤油炒め</th>
<th>トマトとしらすのサラダ</th>
<th>豆腐と鶏ひき肉の生姜あんかけ</th>
<th>水菜の煮びたし</th>
<th>お手製唐揚げ</th>
<tr>
<td><img src="{{ asset('/img/chinese_style_stir.jpg') }}"></td>
<td><img src="{{ asset('/img/green_pepper_stir_fry.jpg') }}"></td>
<td><img src="{{ asset('/img/sirasu_tomato_salad.jpg') }}"></td>
<td><img src="{{ asset('/img/tofu_ginger_sauce.jpg') }}"></td>
<td><img src="{{ asset('/img/boiled_potherb _mustard.jpg') }}"></td>
<td><img src="{{ asset('/img/fried_checkin.jpg') }}"></td>
</tr>
</table>
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
