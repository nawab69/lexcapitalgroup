<?php

$targetFolder = '/var/www/ita/data/www/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';

symlink($targetFolder,$linkFolder);
echo 'Symlink completed';