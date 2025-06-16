<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = intval($_POST['phone']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);
    $checkbox = trim($_POST['checkbox']);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Имя обязательно для заполнения.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Имя может содержать только буквы и пробелы.";
    }

    if (empty($email)) {
        $errors[] = "Электронная почта обязательна для заполнения.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Неверный формат электронной почты.";
    }

    if (empty($phone)) {
        $errors[] = "Должно быть заполнено";
    } elseif (!preg_match("/^[0-9]*$/", $phone)) {
        $errors[] = "Должно быть борльше 10-ти символов";
    }

    if (empty($password)) {
        $errors[] = "Пароль обязан к заполнению";
    } elseif (strlen($_POST["password"]) < 5) {
        $errors[] = "Разрешены только буквы малго и большого образца";
    }

    if (empty($password2)) {
        $errors[] = "повторите пароль";
    } else {
        if ($password2 != $password2) {
            $errors[] = "пароли не совпадают, попробуйте еще";
        }
    }

    if (empty($checkbox)) {
        $errors[] = "нажмите чтобы продолжить";
    }

    // отправление формы
    if(empty($name) && empty($email) && empty($phone) && empty($password) && empty($password2) && empty($checkbox)) {
    }
    try {
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $password]);
        $lastId = $conn->lastInsertId();
        echo "<div class='success'>Форма отправлена. Ваш ID: " . $lastId . "</div>";
    } catch (PDOException $e) {
        echo "<div class='error'>Ошибка базы данных: " . $e->getMessage() . "</div>";
    }

}
?>
