<!DOCTYPE html>
<html>
<?php include("public/topmenu.php"); ?>
  <head>
    <meta charset="utf-8">
    <title>註冊</title>
    <link rel="stylesheet" href="css/sign_up.css" />
  </head>
  <body>
    	<form class="sign-body" action="add.php" method="post">
    	<h1>會員註冊 sign up</h1>
           <div class="input-group">
              <label for="userid">會員帳號：</label>
              <input type="text" name="memberid" value="" placeholder="輸入註冊信箱">
           </div>
           <div class="input-group">
              <label for="userpswd">會員密碼：</label>
              <input type="password" name="password" value=""panel placeholder="輸入密碼">
           </div>
           <div class="input-group">
              <label for="userpswd">確認密碼：</label>
              <input type="password" name="pwdchk" value=""panel placeholder="再次輸入密碼">
           </div>
           <div class="input-group">
              <label for="username">會員姓名：</label>
              <input type="text" name="name" value="" placeholder="輸入姓名">
           </div>
           <div class="input-group">
           <label for="usersex">會員性別：</label>
            	<select name="sex">
    				<option value="">請選擇你的性別</option>
   					<option value="1">男</option>
    				<option value="2">女</option>
    				<option value="3">其他</option>
				</select>
			</div>
            <div class="input-group">
              <label for="usermail">會員信箱：</label>
              <input type="mail" name="mail" value="" placeholder="輸入註冊信箱">
            </div>
            <div class="input-group">
              <label for="useraddr">通訊地址：</label>
              <input type="text" name="addr" value="" placeholder="輸入地址">
            </div>
            <div class="input-group">
              <label for="userphone">連絡電話：</label>
              <input type="text" name="phone" value=""placeholder="輸入電話">
            </div>
             <button type="submit" class = "btn btn-primary " name="button" >註冊</button>
          </form>
     </body>
<?php include("public/footer.php"); ?>	
</html>