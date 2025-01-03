<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // بيانات افتراضية للتجربة
    $validCredentials = [
        'Manager' => ['username' => 'admin', 'password' => '1234'],
        'IT Engineer' => ['username' => 'engineer', 'password' => '5678'],
    ];

    // التحقق من صحة البيانات
    if (isset($validCredentials[$role]) &&
        $username === $validCredentials[$role]['username'] &&
        $password === $validCredentials[$role]['password']) {
        echo "Welcome, $role!";
        
    } else {
        echo "Invalid credentials for $role.";
    }
} else {
    echo "Invalid request.";
}
?>
