<?hh
  // set defaults
  $json = '{ "a": [ { "foo": "foo" }] }';
  $search = 'foo';
  $replace = 'bar';
  //$json = '{"data":[{"id":1,"val":"test1"},{"id":2,"val":"test2"}]';
  //$search = array('id','val');
  //$replace = array('identity','value');

  // checking the CLI variables passes
  if (isset($argv[1]))
  {
    $temp = json_decode($argv[1]);
    if (json_last_error_msg() == 'No error')
      $json = $argv[1];
    else
      echo "Invalid JSON string provided";
  }
  if (isset($argv[2]))
    $search = $argv[2];

  if (isset($argv[3]))
    $replace = $argv[3];

  echo "Input json = $json \n";
  $value = preg_replace('/'.$search.'/', $replace, $json);
  echo "Output json = $value\n";
