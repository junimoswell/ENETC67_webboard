<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h1 style="text-align: center;">Webboard</h1>
    <hr>
    <div style="text-align: center;">
    ต้องการดูกระทู้หมายเลข <?php echo $_GET['id'];?><br>
    <?php 
    $p = $_GET['id'];
    if(($p % 2) == 0){
        echo"เป็นกระทู้หมายเลขคู่"; }
    else{
        echo"เป็นกระทู้หมายเลขคี่";
    }
    ?>
    <br><br>
    
    <table style="border: 2px solid black; width: 40%;" align="center">
    <tr><td style="background-color: #6fc2fe; text-align: left;"> แสดงความคิดเห็น</td></tr>


    <tr><td align="center"><textarea name="" id="" cols="30" rows="10"></textarea></td></tr>
    <tr><td  align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table><br>
    <a href="index1.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>