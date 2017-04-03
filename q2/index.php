<?hh
  // set defaults
  // prbels as array
  $Pebbles = array(
    array(8, 11, 7, 9, 3),
    array(22, 13, 5, 8, 11),
    array(9, 15, 23, 4, 7),
    array(11, 1, 4, 25, 17),
  );

  // caliberating m & n as counting start from 0
  $m = 4-1;
  $n = 5-1;

  $max = 0;

  Move(0,0,0);

  echo "\nMax = $max \n";

  // steps needed to go from 1,1 to m,n position
  function Move($i, $j, $cost)
  {
    $pebbles = $GLOBALS['Pebbles'];
    $cost = $cost + $pebbles[$i][$j];
    $m = $GLOBALS['m'];
    $n = $GLOBALS['n'];
    // check for last cell
    if($i == $m && $j == $n)
    {
      if ($cost > $GLOBALS['max'])
        $GLOBALS['max'] = $cost;
    }
    else if ($i < $m && $j < $n) // it in some other cell
    {
      Move($i, $j+1, $cost);  // move right
      Move($i+1,$j,$cost);    // move down
    }
    else if ($i == $m && $j < $n) // can't move down
      Move($i, $j+1 ,$cost);
    else if ($i < $m && $j == $n) // can't move right
      Move($i+1, $j, $cost);
  }
