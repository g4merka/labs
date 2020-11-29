<html>
  <head>
    <title>Дьяконов Юрий</title>
  </head>
  <body>
 <p> Вариант 9 </p>
 <?php
 
  $a = rand (-20, 20);
  $c = rand (-20, 20);
  $d = rand (-20, 20);

  $r = ((25 / $c) - $d + 2) / ($d + ($a * $a) - 1);
 
  print ('Ответ: ' . $r . '<br>');

  print (25 . '<br>' . ' —  - ' . '(' . $d . ')' . ' + ' . ' 2 ' . '<br>' . $c);
  print ('<br>' . ' —————— ' . ' = ' . $r);
  print ('<br>' . $d . ' + ' . '(' . $a . ')' . '²' . ' - ' . 1);

  echo '<br>';
  echo '<br>';

  echo 'Вариант 12';
  echo '<br>';
  echo '<br>';
  $re = ((4 * $c) - ($d / 2)) / (($a * $a) - 1);
  echo 'Ответ: ' . $re;
  echo '<br>';
  echo '<br>';

  echo 4 . ' * ' . '(' . $c . ')' . ' - ' . '(' . $d . '/' . 2 . ')';
  echo '<br>';
  echo (' ——————— ' . ' = ' . $re);
  echo '<br>';
  echo '(' . $a . '²' . ')' . ' - ' . 1;
  ?>
  </body>
</html>