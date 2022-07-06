<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Четыре правила вёрстки</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require "db.php"?>
  <header class="header">
    <div class="overlay">
      <h1 class="header-title">Уютный Кофе!</h1>
    </div>
  </header>
  <br>
  <a class="card-title" align="center" href="registration.php">Вход/Регистрация</a>
  <section class="content">
  <?php
    $singles=get_Menu();
    foreach ($singles as $single):?>
    <?php $category=get_Menu_by_id($single["category"])?>
        <div class="card">
          <img src="<?php echo $single["img"];?>" class="card-image">
          <h3 class="card-title" ><?php echo $category["title"]?></h3>
        <h3 class="card-title" ><?php echo $single["title"]?> <?php echo $single["size"]?></h3>
          <p class="card-text"><?php echo $single["description"]?></p>
          <h3 class="card-title">Цена: <?php echo $single["cost"]?>руб.</h3>
          <button type="submit" name="button">Click</button>
        </div>
    <?php endforeach;?>
            </section>
  <footer class="footer"><h4 class="footer-author">Ипатий заебафся</h4></footer>
</body>
</html>
