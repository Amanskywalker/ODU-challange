<?hh
  // set defaults
  $Pebels = array(
    //array(8,22,9,11),
    //array(11,13,15,1),
    //array(7,5,23,4),
    //array(9,8,4,25),
    //array(3,11,7,17),
    array(8, 11, 7, 9, 3),
    array(22, 13, 5, 8, 11),
    array(9, 15, 23, 4, 7),
    array(11, 1, 4, 25, 17),
  );

  $m = 4-1;
  $n = 5-1;
  // checking the CLI variables passes
  if (isset($argv[1]))
    $Pebels = $argv[1];

  if (isset($argv[2]))
    $m = $argv[2];

  if (isset($argv[3]))
    $n = $argv[3];

  $max = 0;
  //$currentstack = array();
  //$maxstack = array();
  //var_dump($Pebels); die();
  //echo "before max = $max \n";
  Move(0,0,0);
  echo "\nMax = $max \n";
  // steps needed to go from 1,1 to m,n position
  function Move($i, $j, $cost)
  {
    $pebles = $GLOBALS['Pebels'];
    $cost = $cost + $pebles[$i][$j];
    //echo "\n i = $i \t j = $j \t Pebels = ".$pebles[$i][$j];
    //array_push($currentstack, array('i' => $i, 'j'=> $j ));
    $m = $GLOBALS['m'];
    $n = $GLOBALS['n'];
    // check for last cell
    if($i == $m && $j == $n)
    {
      if ($cost > $GLOBALS['max'])
      {
        $GLOBALS['max'] = $cost;
      }
    }
    else if ($i < $m && $j < $n) // it in some other cell
    {
      Move($i, $j+1, $cost);  // move right
      Move($i+1,$j,$cost);    // move down
    }
    else if ($i == $m && $j < $n) // can't move down
    {
      Move($i, $j+1 ,$cost);
    }
    else if ($i < $m && $j == $n) // can't move right
    {
      Move($i+1, $j, $cost);
    }
  }
