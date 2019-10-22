<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feedreader</title>
</head>
<body>
  <h1>Lector RSS</h1>
  <?php
  $newsfeed = "https://www.reforma.com/rss/negocios.xml";
  $show = "";
  if ($rss = @simplexml_load_file($newsfeed)) {
    foreach($rss->channel->item as $item) {
      $show .= "<h3>{$item->title}</h3>";
      $show .= "<p>{$item->description}</p>";
      $show .= "<div><a href='{$item->link}'>leer todo</a></div><hr>";
    }
    echo utf8_decode($show);
  } else {
    echo "<div>Error, no se pudo leer el archivo</div>";
  }
  ?>
</body>
</html>