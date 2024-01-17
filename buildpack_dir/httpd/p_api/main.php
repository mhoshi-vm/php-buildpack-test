<?php
// Include the HTML file
include 'header.html';
?>
    <h1>Welcome to my website!</h1>

    <script src="script.js"></script>

<?php

// Include the inc.php file
include '../../src/p/inc/greet.inc';

// Use the greet function to output a greeting
greet('John');

// Use the farewell function to output a farewell
farewell('John');

?>

<?php
$dbconn = pg_pconnect("dbname=mary");
// "mary"という名前のデータベースに接続

$dbconn2 = pg_pconnect("host=localhost port=5432 dbname=mary");
// "localhost"のポート"5432"にて"mary"という名前のデータベースに接続

$dbconn3 = pg_pconnect("host=sheep port=5432 dbname=mary user=lamb password=foo");
// ユーザー名とパスワードを指定してホスト"sheep"上の"mary"という名前のデータベースに接続

$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
$dbconn4 = pg_pconnect($conn_string);
// ユーザー名とパスワードを指定してホスト"sheep"上の"test"という名前のデータベースへ接続
?>
