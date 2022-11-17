<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style">
    <title>membuat form registrasi</title>
    <style>
.login-page {
    width: 360px;
    padding: 10% 10% 15%;
    margin: auto;
 }  
 .form {
    position: relative;
    z-index: 1;
    background: #9ACD32;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 50px 45px 65px;
    text-align: center;
    border-radius: 10px;
    height: 250px;
 }  
 .form input {
    font-family: sans-serif;
    outline: 2;
    background: #F5F5F5;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 15px;
    color: rgb(84, 84, 88);
    border-radius: 5px;
 }
 .form button {
    font-family: sans-serif;
    text-transform: lowercase;
    outline: 0;
    background: #0000CD;
    width: 40%;
    border: 0;
    padding: 7px;
    color: #ffffff;
    cursor: pointer;
    border-radius: 4px;
 }
 .form button:hover,
 .form button:active {
    background: #7B68EE;
 }
    </style>
</head>

<div class="login-page">
   <div class="form">
    <h2 class="title">Registrasi</h2>
     <form class="register-form">
        <input type="text" placeholder="Nama">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Password">
        <button>Submit</button>
     </form>
 </div>
</div>
</body>
</html>
