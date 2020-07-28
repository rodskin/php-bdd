<?php
if (!is_file('archive.zip')) {
    echo 'Archive.zip missing';
} else {
    exec('unzip archive.zip');
}
