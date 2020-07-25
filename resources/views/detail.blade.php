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

<h2>ほうれん草と人参の中華風炒め</h2>
<h3>材料</h3>
<table>
<img src="{{ asset('/img/'. $recipe->recipe_photo ) }}">
<th></th>
<th></th>
<th></th>
<?php
foreach ($ingredients as $ingredient) {
?>
<tr>
<td><?= $ingredient->ingredient_name ?></td>
<td>・・・</td>
<td><?= $ingredient->ingredient_detail ?></td>
</tr>

<?php
};
?>
</table>
<br>
<h3>手順</h3>
<ol>
<?php
foreach ($steps as $step) {
?>
    <li><?= $step->step_detail ?></li>
<?php
};
?>
</ol>
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
