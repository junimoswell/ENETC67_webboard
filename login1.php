<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <form action="verify1.php" method="post">
    <table style="border: 2px solid black; width: 40%;" align="center">
        

        <tr><td colspan="2" style="background-color: #6cd2fe; text-align: center;">เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td>
            <td><input type="text" name="login"  size="50" required></td>
        </tr>
        <tr><td>Password</td>
            <td><input type="password" name="pwd" size="50" required></td>
        </tr>
        
             <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        
       
    </table>
  </form>
    <br>
    <div style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register1.php">กรุณาสมัครสมาชิก</a></div>
    
</body>
</html>