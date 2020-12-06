<html>
<head><title>Login</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<body>

<form class="login-form" action="actionlogin.php" method="POST">
<h1>會員登入 Login</h1>
<div class="form-input-material">
	<label for="username">會員帳號：</label>
	<input type="text" name="MEMBER_ID" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
</div>
<div class="form-input-material">
<label for="password">登入密碼：</label>
    <input type="password" name="MEMBER_PASSWD" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
</div>
<button type="submit" name="submit" class="btn btn-primary btn-ghost" value="Login">登入</button>
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
</form>
</body>
</html>
