

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Npdn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="icon" href="../imagens/logo.png" type="image/x-icon" />
</head>
<body>
            
<script type="text/javascript">
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow"); });
</script>

    <h1>Cadastrar novo usuário</h1>

<style type="text/css">
    
h1 {
    text-align: center;
    margin-top: 50px;
    font-size: 20pt;
}
 
 .link_volt{
		margin-left:47.3%; 
		padding:5px 5px 5px 5px;
		font-family: 'Noto Sans HK', sans-serif;
        font-weight: 800;
        outline: 0;
        background: #7ED957;
        width: 50%;
        border: 0;
        padding: 10px;
        margin-top:5%;
        color: black;
        font-size: 14px;
        -webkit-transition: all 0.5 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        text-decoration:none;
        
	   }
    
 @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  padding-top: 3%;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #F0F8FF; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #F0F8FF, #F8F8FF);
  background: -moz-linear-gradient(right, #F0F8FF, #F8F8FF);
  background: -o-linear-gradient(right, #F0F8FF, #F8F8FF);
  background: linear-gradient(to left, #F0F8FF, #F8F8FF);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}   

input[type="text"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="text"]:focus {
  border-color: lightgreen;
  box-shadow: 0 0 8px 0 lightgreen;
}

.inputWithIcon input[type="text"] {
  padding-left: 40px;
}

input[type="password"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="password"]:focus {
  border-color: lightgreen;
  box-shadow: 0 0 8px 0 lightgreen;
}

input[type="email"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="email"]:focus {
  border-color: lightgreen;
  box-shadow: 0 0 8px 0 lightgreen;
}


.inputWithIcon input[type="password"] {
  padding-left: 40px;
}

.inputWithIcon {
  position: relative;
}

.inputWithIcon i {
  position: absolute;
  left: 0;
  top: 8px;
  padding: 9px 8px;
  color: black;
  transition: 0.3s;
}

.inputWithIcon input[type="text"]:focus + i {
  color: lightgreen;
    
}
    
.selecao {
    width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}
    
</style>
    <?php 
    require 'cadastro_conf.php';
    ?>
    
        <div class="login-page">
            <div class="form">
            
            <form class="login-form" action="?act=save" method="POST" name="form1" >
                <hr>
                <div class="inputWithIcon">
                <input type="hidden" name="Id" 
                <?php
                // Preenche o Id no campo Id com um valor "value"
                if (isset($Id) && $Id != null || $Id != "") {
                    echo "value=\"{$Id}\"";
                }
                ?> />
                </div>
                

				 <div class="inputWithIcon">
                Email:
                <input type="email" name="Email" 
                <?php

                if (isset($Email) && $Email != null || $Email != "") {
                   echo "value=\"{$Email}\""; 
                }
                ?> /><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <div class="inputWithIcon">
                Senha:
                <input type="password" name="Senha"  <?php
   
                if (isset($Senha) && $Senha != null || $Senha != "") {
                   echo "value=\"{$Senha}\""; 
                }
                ?> /><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                </div>
			   
			

                <button>Salvar</button>
                <hr>
            </form>
            </div>
        </div>

           <a class="link_volt" href="http://localhost/tcc_project/login/gerenciamento.php">Voltar</a>
        </body>
    </html>