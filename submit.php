<?php
    $company = $_POST['company'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $size = $_POST['size'];
    $all = $_POST['all'];
    $center_a = $_POST['center_a'];
    $center_b = $_POST['center_b'];
    $center_c = $_POST['center_c'];
    $south_c = $_POST['south_c'];
    $south_e = $_POST['south_e'];
    $north_d = $_POST['north_d'];
    $north_e = $_POST['north_e'];
    $east_b = $_POST['east_b'];
    $east_e = $_POST['east_e'];

    $sum_a = $center_a;
    $sum_b = $center_b + $east_b;
    $sum_c = $center_c + $south_c;
    $sum_d = $north_d;
    $sum_e = $south_e + $north_e + $east_e;
        
    try {
        $pdo = new PDO('mysql:dbname=dsc_db; charset=utf8; host=localhost','root','');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare(
        "INSERT INTO dsc_request(id, company ,name, email, date, size, sum_a, sum_b, sum_c, sum_d, sum_e, request_date)
        VALUES (NULL, :company :name, :email, :date, :size, :sum_a, :sum_b, :sum_c, :sum_d, :sum_e, sysdate()); ");


    $stmt->bindValue(':company', $company, PDO::PARAM_STR);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $stmt->bindValue(':size', $size, PDO::PARAM_STR);
    $stmt->bindValue(':sum_a', $sum_a, PDO::PARAM_INT);
    $stmt->bindValue(':sum_b', $sum_b, PDO::PARAM_INT);
    $stmt->bindValue('sum_c', $sum_c, PDO::PARAM_INT);
    $stmt->bindValue(':sum_d', $sum_d, PDO::PARAM_INT);
    $stmt->bindValue(':sum_e', $sum_e, PDO::PARAM_INT);

    $status = $stmt->execute();

    if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
    }else{

    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title>登録完了</title>
</head>
<body>
    <div class="balloon-013">
        <div class="balloon-013__img-wrap">
            <img class="balloon-013__img" src="./img/020020.png" alt="" width="250" height="250"
                loading="lazy" decoding="async"/>
            <img class="balloon-013__img" src="./img/020002.png" alt="" width="250" height="250"
                loading="lazy" decoding="async"/>
        </div>
        <p class="balloon-013__text">ご依頼いただきありがとうございます。</p>
        <p class="balloon-013__text">平日9:30〜17:30が営業時間となります。</p>

    </div>
</body>
</html>