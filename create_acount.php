<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta charset="UTF-8">
   <meta name="description" content="Hazze Template">
   <meta name="keywords" content="Hazze, unica, creative, html">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/login.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/font-awesone.min.css">
</head>
<body>

  <div class="box_login">
    <div class="cover">
      
    </div>
    <h1>Faça seu Login</h1>

    <form method="POST" action="controller/create_acount.controller.php">
      <input type="text" id="nome" name="nome" placeholder="Nome">
      <input type="email" id="mail" name="mail" placeholder="Email">
      <input type="text" id="user" name="user" placeholder="User">
      <input type="password" id="password" name="password" placeholder="Senha">

      <button type="submit" class="btn-login">ENTRAR</button>
      <span class="msg_error"><i class="fa fa-exclamation-triangle" style="font-size: 16px; color: #ff6d6d; padding-right: : 5px;"></i><a href="login.php"> Login</a></span>

    </form>
    
  </div>

</body>
</html>