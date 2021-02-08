<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet"/>
<script type="text/javascript" src="ajax.js" > </script>
<link rel="icon" href="imagens/logo.png" type="image/x-icon" />
</head>
<body>

<style>
html{
    scroll-behavior:smooth;
    overflow-x: hidden; 
    width:100%;
height:auto;
}

body {
     width:100%;
height:auto;

} 

#header{
	width: auto;
	min-width:100%;
	margin-top:-1%;
	height: 25rem;
	background-image: url('imagens/header_email.png');
	background-size: 100% 100%;
	margin-left:-0.5rem;
}
   #title_pesq {
    font-family: 'Noto Sans HK', sans-serif;
    align-text:center;
    color:#7ED957;
}
   
h1 {
        text-align: center;
        color: black;
        font-size: 2rem;
        margin-top: 1rem;

    }


.login-page {
  width: 360px;
  padding: 8% 0 0;
  padding-top: 1%;
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
    
  

input[type="text"],input[type="email"]  {
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

input[type="email"]:focus {
  border-color: lightgreen;
  box-shadow: 0 0 8px 0 lightgreen;
}
.inputWithIcon input[type="text"],input[type="email"]  {
  padding-left: 40px;
   width:85%;
   float:left;
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

.inputWithIcon input[type="text"] :focus + i {
  color: lightgreen;
}
.inputWithIcon input[type="email"] :focus + i {
  color: lightgreen;
}

#input_img{
	margin-top:4%;
	width:12%;
	margin-right:3%;
	float:left;
	
}

#title {
    font-family: 'Noto Sans HK', sans-serif;
    align-text:center;
}

@media screen and (max-height: 350px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}

@media screen and (max-width: 350px) {

html{
    scroll-behavior:smooth;
    overflow-x: hidden; 
    width:110%;
	height:auto;
}
}

@media screen and (max-width: 300px) {

html{
    scroll-behavior:smooth;
    overflow-x: hidden; 
    width:170%;
	height:auto;
}
}




</style>


<div id="header"></div>
<div class="email">
    <h1 id="title">Entre em contato</h1>
    
    <div class="login-page">
  <div class="form" method="post" action="email.php">
    <form class="login-form">
      <div class="inputWithIcon">
      	<img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIDAgNDQ4IDQ0OCIgd2lkdGg9IjQ0OHB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMTQuMzc1IDE0NGgtMTgwLjc1bDkwLjM3NSA3Ny40NjQ4NDR6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgMjQwYy0xLjkxMDE1NiAwLTMuNzU3ODEyLS42ODM1OTQtNS4yMDcwMzEtMS45Mjk2ODhsLTk4Ljc5Mjk2OS04NC42Nzk2ODd2MTUwLjYwOTM3NWgyMDh2LTE1MC42MDkzNzVsLTk4Ljc5Mjk2OSA4NC42Nzk2ODdjLTEuNDQ5MjE5IDEuMjQ2MDk0LTMuMjk2ODc1IDEuOTI5Njg4LTUuMjA3MDMxIDEuOTI5Njg4em0wIDAiLz48cGF0aCBkPSJtMjI0IDBjLTEyMy43MTA5MzggMC0yMjQgMTAwLjI4OTA2Mi0yMjQgMjI0czEwMC4yODkwNjIgMjI0IDIyNCAyMjQgMjI0LTEwMC4yODkwNjIgMjI0LTIyNGMtLjE0MDYyNS0xMjMuNjUyMzQ0LTEwMC4zNDc2NTYtMjIzLjg1OTM3NS0yMjQtMjI0em0xMjAgMzEyYzAgNC40MTc5NjktMy41ODIwMzEgOC04IDhoLTIyNGMtNC40MTc5NjkgMC04LTMuNTgyMDMxLTgtOHYtMTc2YzAtNC40MTc5NjkgMy41ODIwMzEtOCA4LThoMjI0YzQuNDE3OTY5IDAgOCAzLjU4MjAzMSA4IDh6bTAgMCIvPjwvc3ZnPg==" id="input_img">
        <input id="name" required name="email" type="email" value=""'/>
      </div>
      <div class="inputWithIcon">
      	<img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIDAgNDQ4IDQ0OCIgd2lkdGg9IjQ0OHB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMjQgMGMtMTIzLjcxMDkzOCAwLTIyNCAxMDAuMjg5MDYyLTIyNCAyMjRzMTAwLjI4OTA2MiAyMjQgMjI0IDIyNCAyMjQtMTAwLjI4OTA2MiAyMjQtMjI0Yy0uMTQwNjI1LTEyMy42NTIzNDQtMTAwLjM0NzY1Ni0yMjMuODU5Mzc1LTIyNC0yMjR6bTExNS45MjE4NzUgMzAxLjE5MTQwNmMtMjcuMDU4NTk0IDM2Ljk2MDkzOC03MC4xMTcxODcgNTguODA0Njg4LTExNS45MjE4NzUgNTguODA0Njg4cy04OC44NjMyODEtMjEuODQzNzUtMTE1LjkyMTg3NS01OC44MDQ2ODhjLTEuMzQ3NjU2LTEuODM5ODQ0LTEuODQ3NjU2LTQuMTY3OTY4LTEuMzc1LTYuMzk4NDM3IDkuMjk2ODc1LTQyLjQxMDE1NyA0MC42ODM1OTQtNzYuNTQyOTY5IDgyLjE2Nzk2OS04OS4zNTE1NjMtMjMuNjQ0NTMyLTE1LjUyNzM0NC0zNC4yOTI5NjktNDQuNzMwNDY4LTI2LjE4NzUtNzEuODMyMDMxIDguMTAxNTYyLTI3LjA5NzY1NiAzMy4wMzEyNS00NS42Njc5NjkgNjEuMzE2NDA2LTQ1LjY2Nzk2OXM1My4yMTQ4NDQgMTguNTcwMzEzIDYxLjMxNjQwNiA0NS42Njc5NjljOC4xMDU0NjkgMjcuMTAxNTYzLTIuNTQyOTY4IDU2LjMwNDY4Ny0yNi4xODc1IDcxLjgzMjAzMSA0MS40NzY1NjMgMTIuODA4NTk0IDcyLjg2MzI4MiA0Ni45Mjk2ODggODIuMTY3OTY5IDg5LjMzNTkzOC40ODA0NjkgMi4yMzQzNzUtLjAyMzQzNyA0LjU3MDMxMi0xLjM3NSA2LjQxNDA2MnptMCAwIi8+PHBhdGggZD0ibTI3MiAxNTJjMCAyNi41MDc4MTItMjEuNDkyMTg4IDQ4LTQ4IDQ4cy00OC0yMS40OTIxODgtNDgtNDggMjEuNDkyMTg4LTQ4IDQ4LTQ4IDQ4IDIxLjQ5MjE4OCA0OCA0OHptMCAwIi8+PHBhdGggZD0ibTIyNCAyMTZjLTQ3LjU3ODEyNS4xOTkyMTktODkuMDE1NjI1IDMyLjUxOTUzMS0xMDAuODAwNzgxIDc4LjYxNzE4OCAyNC4xNzU3ODEgMzEuMTUyMzQzIDYxLjM5ODQzNyA0OS4zODI4MTIgMTAwLjgzMjAzMSA0OS4zODI4MTIgMzkuNDM3NSAwIDc2LjY1NjI1LTE4LjIzMDQ2OSAxMDAuODMyMDMxLTQ5LjM4MjgxMi0xMS43ODkwNjItNDYuMTIxMDk0LTUzLjI2MTcxOS03OC40NDUzMTMtMTAwLjg2MzI4MS03OC42MTcxODh6bTAgMCIvPjwvc3ZnPg==" id="input_img">
        <input name="nome" required type="text" placeholder="Name"/>
      </div>
      <div class="inputWithIcon">
      	<img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIDAgNDQ4IDQ0OCIgd2lkdGg9IjQ0OHB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xMjIuMTYwMTU2IDIwNy4xNjAxNTYgODMuNTExNzE5IDIzLjg1NTQ2OSA4My41MTk1MzEtODMuNTE5NTMxem0wIDAiLz48cGF0aCBkPSJtMjQwLjgzOTg0NCAzMjUuODM5ODQ0IDU5LjY2NDA2Mi0xNjcuMDMxMjUtODMuNTE5NTMxIDgzLjUxOTUzMXptMCAwIi8+PHBhdGggZD0ibTIyNCAwYy0xMjMuNzEwOTM4IDAtMjI0IDEwMC4yODkwNjItMjI0IDIyNHMxMDAuMjg5MDYyIDIyNCAyMjQgMjI0IDIyNC0xMDAuMjg5MDYyIDIyNC0yMjRjLS4xNDA2MjUtMTIzLjY1MjM0NC0xMDAuMzQ3NjU2LTIyMy44NTkzNzUtMjI0LTIyNHptMTAzLjUyNzM0NCAxMzAuNjg3NS04MCAyMjRjLTEuMTM2NzE5IDMuMTgzNTk0LTQuMTQ4NDM4IDUuMzA4NTk0LTcuNTI3MzQ0IDUuMzEyNWgtLjI1NzgxMmMtMy40NzY1NjMtLjEwOTM3NS02LjQ4NDM3Ni0yLjQ1MzEyNS03LjQzNzUtNS44MDA3ODFsLTIwLjU3ODEyNi03Mi4wMzkwNjMtNTYuOTEwMTU2IDIxLjM0Mzc1Yy0uOTAyMzQ0LjMyODEyNS0xLjg1NTQ2OC40OTYwOTQtMi44MTY0MDYuNDk2MDk0LTIuNjI1LjAwMzkwNi01LjA4NTkzOC0xLjI4NTE1Ni02LjU4MjAzMS0zLjQ0MTQwNi0xLjQ5NjA5NC0yLjE2MDE1Ni0xLjgzOTg0NC00LjkxNzk2OS0uOTE0MDYzLTcuMzc1bDIxLjM0Mzc1LTU2LjkxMDE1Ni03Mi4wMzkwNjItMjAuNTc4MTI2Yy0zLjMyNDIxOS0uOTY0ODQzLTUuNjQ4NDM4LTMuOTYwOTM3LTUuNzYxNzE5LTcuNDE3OTY4LS4xMDkzNzUtMy40NjA5MzggMi4wMTE3MTktNi41OTc2NTYgNS4yNjU2MjUtNy43ODEyNWwyMjQtODBjMi45MDYyNS0xLjAzMTI1IDYuMTUyMzQ0LS4zMDA3ODIgOC4zMzIwMzEgMS44ODI4MTIgMi4xODM1OTQgMi4xNzk2ODggMi45MTc5NjkgNS40MjU3ODIgMS44ODI4MTMgOC4zMzIwMzJ6bTAgMCIvPjxwYXRoIGQ9Im0xODEuMjg5MDYyIDI0MC42ODc1LTE1LjYxNzE4NyA0MS42NDA2MjUgNDEuNjQwNjI1LTE1LjYxNzE4Ny01Ljc4NTE1Ni0yMC4yMzgyODJ6bTAgMCIvPjwvc3ZnPg==" id="input_img">
        <input name="message" required type="text" placeholder="Message"/>
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>
</div> 

		
</div>




</body>
</html>
