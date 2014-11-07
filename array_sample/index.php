<?php

$colors = array("red","green","blue");

foreach ($colors as $c) {
    echo $c,",";
}

$colors = array();
$colors[-2] = 'red';
$colors[] = 'blue';
$colors[] = 'green';
var_dump($colors);


$colors = array();
for($i = 0; $i < 100000; $i++){
  $colors[] = 'red';
  $colors[] = 'bule';
  $colors[] = 'green';
}

$time_start = microtime(true);
for($i = 0; $i < 300000; $i++){
  if(array_key_exists($i, $colors)){
    $result = $colors[$i];
  }
}
echo "\n\n";
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "array_key_exists 実行時間:${time}";

$time_start = microtime(true);
for($i = 0; $i < 300000; $i++){
  if(isset($colors[$i])){
    $result = $colors[$i];
  }
}
echo "\n";
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "isset 実行時間:${time}";

echo "\n";
$test_isset = array('test' => 'test','null' => null,'aa' => 'ahaha');
echo "-----------isset test-----------\n";
var_dump(isset($test_isset['test']));
var_dump(isset($test_isset['null']));
var_dump(isset($test_isset['aaaaaaa']));

echo "-----------array_key_exists test-----------\n";
var_dump(array_key_exists('test',$test_isset));
var_dump(array_key_exists('null',$test_isset));
var_dump(array_key_exists('aaaaaaa',$test_isset));


