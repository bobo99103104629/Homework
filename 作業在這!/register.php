<?php
session_start();
    
    if (isset($_POST["button"]))
    {
        $sUserName = $_POST["txtUserName"];
        if (trim($sUserName) != "")
        {
            $_SESSION["userName"] = $sUserName;
               header("Location: index.php");
            exit();
        }
        
    }

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="update" name="update" method="post" action="">
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
        <tr>
            <div class="content">
                <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#000000">會員資料</font></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">帳號</td>
            <td valign="baseline">
                <input type="text" name="txtUserName" id="txtUserName" value=""></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">密碼</td>
            <td valign="baseline">
                <input type="text" name="password" id="password" value="" 
                pattern="^([a-zA-Z]+\d+|\d+[a-zA-Z]+)[a-zA-Z0-9]*$" required placeholder="請填入8-12位英文與數字"></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">名字</td>
            <td valign="baseline">
                <input type="name" name="name" id="name" value=""></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">電話</td>
            <td valign="baseline">
                <input type="phone" name="phone" id="phone"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
                <input type="hidden" name="action" value="store">
                <input type="submit" name="button" id="button" value="註冊"></td>

        </tr>
    </table>
</form>
</body>
</html>