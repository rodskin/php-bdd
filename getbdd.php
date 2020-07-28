<?php
if (file_exists('config.php')) {
    require_once('config.php');
    if (isset($_GET['ddsbdd']) && $_GET['ddsbdd'] == $config['get_string_to_allow']) {
        if (isset($_GET['get_empty']) && $_GET['get_empty'] == true) {
            exec('/usr/bin/mysqldump --opt --no-data --no-create-db -h ' . $config['host'] . ' -u ' . $config['user'] . ' -p\'' . $config['pass'] . '\' -B ' . $config['bdd'] . ' > empty_' . $config['dump_file'], $output);
        }
        exec('/usr/bin/mysqldump -h ' . $config['host'] . ' -u ' . $config['user'] . ' -p\'' . $config['pass'] . '\' -B ' . $config['bdd'] . ' > ' . $config['dump_file'], $output);
    } else {
        die('not allowed');
    }
} else {
    die('config.php not set');
}
