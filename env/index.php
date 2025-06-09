<?php
// подкючение к mysql
$host = "localhost";
$dbname = "test";
$username = "root";
$password = "MyPass123!";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// сообщения об ошибках
$name = $email = $phone = $password1 = $password2 = $checkbox = "";
$nameErr = $emailErr = $phoneErr = $password1Err = $password2Err = $checkboxErr = "";

// очистка данных из форм
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Проверка была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "заполните имя";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Разрешены только буквы и пробелы";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "заполните email";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "неверный формат email";
        }
    }
    if (empty($_POST["phone"])) {
        $phoneErr = "заполните телефон";
    } else {
        if (!preg_match("/^[0-9]*$/",$_POST["phone"])) {
            $phoneErr = "неверный формат, только цифры";
        }
    }
    if (empty($_POST["password"])) {
        $password1Err = "заполните пароль";
    } else {
        if (strlen($_POST["password"]) < 10) {
            $password1Err = "пароль должене содержать не менее 10-ти символов";
        }
    }
    if (empty($_POST["password2"])) {
        $password2Err = "повторите пароль";
    } else {
        if ($_POST["password"] != $_POST["password2"]) {
            $password2Err = "пароли не совпадают, попробуйте еще";
        }
    }
    if (empty($_POST["checkbox"])) {
        $checkboxErr = "нажмите на галочку если согласны";
    } else {
        if ($_POST["checkbox"] == "on") {
            $checkbox = "пропуск дальше";
        }
    }
    // отправление формы
    if(empty($name) && empty($email) && empty($phone) && empty($password1) && empty($password2) && empty($checkbox)) {
    }
    try {
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $password1]);
        $lastId = $conn->lastInsertId();
        echo "<div class='success'>Форма отправлена. Ваш ID: " . $lastId . "</div>";
    } catch (PDOException $e) {
        echo "<div class='error'>Ошибка базы данных: " . $e->getMessage() . "</div>";
    }
}

?>