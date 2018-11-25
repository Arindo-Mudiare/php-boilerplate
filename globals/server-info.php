<?php 
// $_SERVER SUPERGLOBAL

// Create Server Array
$server = [
  'Host Server Name' => $_SERVER['SERVER_NAME'],
  'Host Header' => $_SERVER['HTTP_HOST'],
  'Server Software' => $_SERVER['SERVER_SOFTWARE'],
  'Document Root' => $_SERVER['DOCUMENT_ROOT'],
  'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];


// print_r($server);
// foreach ($server as $key => $value) {
//   echo $key.' depicts :'.$value.'<br>';
// }
// Create Server Array
$client = [
  'Client System info' => $_SERVER['HTTP_USER_AGENT'],
  'Client IP' => $_SERVER['REMOTE_ADDR'],
  'Remote Port' => $_SERVER['REMOTE_PORT'],
];


// print_r($server);
// foreach ($client as $key => $value) {
//   echo $key.' shows :'.$value.'<br>';
// }

?>