<?php

/**
 * common.php
 */

/**
 * connect_db
 * @return \PDO
 */
function connect_db(){
    $dsn = 'mysql:dbname=tb221199db;host=localhost';
    $username = 'tb-221199';
    $password = '447xm5hEX2';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    return new PDO($dsn, $username, $password, $options);
}

/**
 * insert
 * @param string $sql
 * @param array $arr
 * @return int lastInsertId
 */
function insert($sql, $arr = []){
    $pdo = connect_db();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arr);
    return $pdo->lastInsertId();
}

/**
 * select
 * @param string $sql
 * @param array $arr
 * @return array $rows
 */
function select($sql, $arr = []){
    $pdo = connect_db();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arr);
    return $stmt->fetchAll();
}

/**
 * htmlspecialchars
 * @param string $string
 * @return $string
 */
function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}