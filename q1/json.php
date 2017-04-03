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
    $temp = json_decode($argv[1]);    //if first argument set then load it JSON
    if (json_last_error_msg() == 'No error')  // Check whether provided string is a valid JSON or not
      $json = $argv[1];
    else
      echo "Invalid JSON string provided \n",die();   // if not a valid JSON exit
  }
  if (isset($argv[2]))
    $search = $argv[2];   // set the search sting provided via CLI

  if (isset($argv[3]))
    $replace = $argv[3];  // set the replacement sting provided via CLI

  echo "Input json = $json \n";
  $value = preg_replace('/'.$search.'/', $replace, $json);    // do the replacement 
  echo "Output json = $value\n";
