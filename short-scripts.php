<?php 

// echo password_hash('password', PASSWORD_DEFAULT);

// include 'conn.php';

// $password = 'password';

// $stmt = $pdo->query("SELECT pass FROM users WHERE username = 'kramsuiluj'");

// if (password_verify($password, $stmt->fetch()['pass'])) {

//     echo 'Password correct';

// } else {

//     echo 'Password incorrect';

// }

$password = 'password';

$start = microtime(true);

echo password_hash($password, PASSWORD_DEFAULT, ['cost' => 10   ]);

$end = microtime(true);

echo '<br>';

echo round($end - $start, 2) . 'seconds';

?>