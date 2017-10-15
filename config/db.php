<?php
$subdomains=explode(".", $_SERVER['HTTP_HOST']);
if(isset($subdomains['1'])) {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=LH_48_biofox',
        'username' => 'LH_48_biofox',
        'password' => 'csxafgT4O1',
        'charset' => 'utf8',
    ];
}
else{
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2basic',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ];
}

