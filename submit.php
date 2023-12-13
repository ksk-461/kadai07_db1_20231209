<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];

    #TODO データベースの名前項目精査
    try {
        $pdo = new PDO('mysql:dbname= ****; charset=utf8; host=localhost','root','');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare("
    INSERT INTO
        gs_lec_table(id, name, mail, date)
    VALUES (NULL, :name, :email, :date, sysdate()); ");

    #TODO 日付のバインド変数？
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue('content', $content, PDO::PARAM_STR);

    $status = $stmt->execute();

    if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
    }else{

    // echo 'test';
    // header('Location: index.php');
    }
?>


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    登録完了
</body>
</html>