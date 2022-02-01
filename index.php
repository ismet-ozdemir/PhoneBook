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

$Mind->route('contents', 'app/views/backend/resources/contents'); // ---> verilerin listelendiği sayfa
$Mind->route('edit/content:id', 'app/views/backend/resources/edit-content'); // ---> verilerin düzenlendiği sayfa
$Mind->route('new/content', 'app/views/backend/resources/new-content'); // ---> verilerin eklendiği sayfa
$Mind->route('delete/content:id', 'app/views/backend/resources/delete-content'); // ---> verilerin silindiği sayfa