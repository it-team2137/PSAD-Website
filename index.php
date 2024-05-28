<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav.css">
</head>
<body>
<?php include_once 'navbar.php' ?>
<section>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
</section>
<section>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
    <div class="galeria"></div>
</section>
<script src="./dist/dom-i18n.js"></script>
<script>
  var i18n = window.domI18n({
  selector: '[data-translatable]',
  separator: ' // ',
  languages: ['en', 'gr'],
  defaultLanguage: 'en',
});
</script>
</body>
</html>