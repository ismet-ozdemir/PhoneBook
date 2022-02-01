<?php

$this->dbCreate('phonebook');

$scheme = array(
    'id:increments',
    'username:small',
    'phone:small'
);
$this->tableCreate('contents', $scheme);


$values = array(
    array(
        'username'        => 'İsmet Özdemir',
        'phone'       => '05555555555',
    ),
    array(
        'username'        => 'Ali Yılmaz',
        'phone'       => '05555555555'
    ),
);

$this->insert('contents', $values);