<?php
if (file_exists('config.php')) {
    require_once('config.php');
    if (isset($_GET['ddsbdd']) && $_GET['ddsbdd'] == $config['get_string_to_allow']) {
            exec('/usr/bin/mysql -h ' . $config['host'] . ' -u ' . $config['user'] . ' -p\'' . $config['pass'] . '\' -B ' . $config['bdd'] . ' < ' . $config['dump_file'], $output);
    } else {
        die('not allowed');
    }
} else {
    die('config.php not set');
}
