<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style>
        p {
        <?php
        $array = parse_ini_file ("config.ini");
      foreach($array as $key => $value)
      {
        echo("$key" .  ": " . "$value" . ";");
      }
      ?>
        }
    </style>
</head>
<body>
<p>Здравствуй, мир!</p>
</body>
</html>

