<?php
$less = new lessc;
$root = c::get('root');
$less->checkedCompile($root ."/assets/less/style.less", $root ."/assets/css/style.css");

echo css('assets/css/style.css') 
?>
