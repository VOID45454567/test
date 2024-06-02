<?php
require 'connect.php';
session_start();
function Test($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function SelectAll($tableName)
{
    global $pdo;

    $sql = "SELECT * FROM $tableName";
    $query = $pdo->prepare($sql);
    $query->execute();
    $errinfo = $query->errorInfo();
    if ($errinfo[0] !== PDO::ERR_NONE) {
        echo $errinfo[2];
        exit();
    }
    return $query->fetchAll();
}
//Test(SelectAll("users"));
function SelectOne($tableName, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $tableName";

    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'". $value ."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE  $key=$value";
            }
            else{
                $sql = $sql . " AND  $key=$value";
            }
            $i++;
        }
    }
    $sql .= " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetch();

}

//Test(selectOne("users", $param));
//exit();
function createUser($tableName, $userData=[])
{
    global $pdo;

    if (!isset($userData['admin'], $userData['username'], $userData['email'], $userData['password'])) {
        die('Не все данные предоставлены.');
    }


    $sql = "INSERT INTO $tableName (admin, username, email, password) VALUES (:admin, :username, :email, :password)";


    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':admin', $userData['admin']);
    $stmt->bindParam(':username', $userData['username']);
    $stmt->bindParam(':email', $userData['email']);
    $stmt->bindParam(':password', $userData['password']);


    if ($stmt->execute()) {
        echo "Пользователь успешно создан.";
    } else {
        echo "Ошибка при создании пользователя.";
    }
    return $pdo->lastInsertId();

}

//$userData = [
//    'admin' => '0',
//    'username' => 'admin',
//    'email' => 'admin@gmail.com',
//    'password' => 'admin',
//   'dateOfcreate' => "2016-01-01 00:00:00"
//];
//createUser('users', $userData);

function updateUser($tableName, $userId, $userData) {
    global $pdo;

    // Удаляем ключ 'id' из массива данных, если он существует
    $fieldsToUpdate = array_diff_key($userData, ['id']);

    // Создаем строку с полями для обновления
    $fieldString = [];
    foreach ($fieldsToUpdate as $field => $value) {
        $fieldString[] = "$field = :$field";
    }
    $fieldString = implode(', ', $fieldString);

    // Формируем SQL запрос
    $sql = "UPDATE $tableName SET $fieldString WHERE id = :userId";

    // Готовим запрос
    $stmt = $pdo->prepare($sql);

    // Связываем параметры с запросом
    foreach ($fieldsToUpdate as $field => $value) {
        $stmt->bindValue(":$field", $value);
    }
    $stmt->bindValue(':userId', $userId);

    // Выполняем запрос
    if ($stmt->execute()) {
        echo "Данные пользователя успешно обновлены.";
    } else {
        echo "Ошибка при обновлении данных пользователя.";
    }
}
$userData = [
    'admin' => '1',
    'username' => 'neadmin'
        
];
//updateUser('users', 178, $userData);
function deleteUser($tableName, $userId){
    global $pdo;
    
    $sql = "DELETE FROM $tableName WHERE id = :userId";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':userId', $userId);
    
    if ($stmt->execute()) {
        echo "Пользователь успешно удален.";
    } else {
        echo "Ошибка при удалении пользователя.";
    }
}
//deleteUser('users', 180);

