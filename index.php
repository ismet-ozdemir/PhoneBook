<?php

require './Mind.php';


$conf = array(
    'db'=>[
        'drive'     =>  'mysql', // mysql, sqlite
        'host'      =>  'localhost',
        'dbname'    =>  'phonebook', // mydb, app/migration/mydb.sqlite
        'username'  =>  'root',
        'password'  =>  'root',
        'charset'   =>  'utf8mb4'
    ]
);

$Mind = new Mind($conf);

// $Mind->route('/','app/request/install'); ---> veritabanı, tablo ve default veri oluşturmaya yarayan sayfa

$Mind->route('/', 'app/views/backend/resources/contents');
$Mind->route('edit/content:id', 'app/views/backend/resources/edit-content');
$Mind->route('new/content', 'app/views/backend/resources/new-content');
$Mind->route('delete/content:id', 'app/request/resources/delete-content');