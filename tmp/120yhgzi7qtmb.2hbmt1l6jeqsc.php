<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User logged in as <?= $username ?> using <?= $password ?></p>
      <h3>Temperatures</h3>
      <p>Fahrenheit: <?= $temp ?> degrees</p>
      <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
      <p>Temp Total: <?= $temp + $temp2 ?></p>
      <p>I like <?= $color ?></p>
      <p>Circumference: <?= $radius * 2 * 3.1415 ?></p>
      
      
      <!-- looping over arrays -->
      <h3>Bookmarks</h3>
      <p>My first bookmark is <?= $bookmarks[0] ?></p>
      
      I will make Kevin some banana cake because he likes bananas. B-a-na-na-s! This beat is bananas!
       <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
       <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li> <?php endforeach; ?>    </ul>
      
      <!-- Associative array -->
      <h3>Addresses</h3>
      <ul>
      <?php foreach (($addresses?:[]) as $key=>$value): ?>
        <li><?= $key ?> = <?= $value ?></li>
      <?php endforeach; ?>
      </ul>
      
      
      <h3><b>Dessert Options</b></h3>
      <?php foreach (($desserts?:[]) as $key=>$value): ?>
        <input type="checkbox" name="<?= $value ?>" value = "<?= $key ?>"> <?= $value ?><br>
      <?php endforeach; ?>
      
    </body>
</html>