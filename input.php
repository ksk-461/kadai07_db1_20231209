<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お見積もり依頼</title>
</head>
<body>
   <!-- <div class="select">
        <img src="./img/hok_00.png" alt="">
        <img src="./img/hok_01.png" alt="">
        <img src="./img/hok_02.png" alt="">
        <img src="./img/hok_03.png" alt="">
        <img src="./img/hok_04.png" alt="">
   </div>  -->
   <div>
        <form method="post" action="./submit.php">
            <div class="user_info">
                <label>
                    <span class="text_label">お名前</span>
                    <input type="text" class="text_box" name="name" placeholder="名前を入力してください"/>
                </label>
                <label>
                    <span class="text_label">メール</span>
                    <input type="email" class="text_box" name="mail" placeholder="example@mail.com"/>
                </label>
                <label>
                    <span class="text_label">折込日／デリバリー開始日</span>
                    <input type="date" id="del_day" class="text_box" name="date" placeholder="テキストボックスの例"/>
                </label>
            </div>
            
            <div class="tab_menu">
                <label class="district_tab">
                    <input type="radio" name="tab-menu" checked>
                    道央
                </label>
                <div class="district_content">
                    <label>
                        <span class="text_label">〇〇市 折込枚数</span>
                        <input type="number" class="text_box" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">備考</span>
                        <textarea class="text_box" placeholder="その他連絡事項など"></textarea>
                    </label>
                </div>

                <label class="district_tab">
                    <input type="radio" name="tab-menu">
                    道南
                </label>
                <div>道南あれこれ</div>

                <label class="district_tab">
                    <input type="radio" name="tab-menu">
                    道北
                </label>
                <div>道北あれこれ</div>

                <label class="district_tab">
                    <input type="radio" name="tab-menu">
                    道東
                </label>
                <div>道東あれこれ</div>

                <input type="submit" class="confirm" value="確認">
            </div>
            
        </form>
   </div>
   <script src="./input.js"></script>
</body>
</html>