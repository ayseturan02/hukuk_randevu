<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .form {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: white;
            padding: 2.5em;
            border-radius: 25px;
            transition: .4s ease-in-out;
            box-shadow: #fe9347 1px 2px 2px;
            margin: 100px auto;
            max-width: 500px;
        }


        .hr {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e67e22;
            z-index: -1;
        }

        .form:hover {
            transform: translateX(-0.5em) translateY(-0.5em);
            border: 1px solid #f78536;
            box-shadow: 10px 10px 0px #fe9347;
        }

        .heading {
            color: #fe9347;
            padding-bottom: 2em;
            text-align: center;
            font-weight: bold;
            font-family:Tahoma, Verdana, sans-serif;
            font-size: 20px;
        }

        .input {
            border-radius: 5px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            outline: none;
            padding: 0.7em;
            transition: .4s ease-in-out;
            font-family:Tahoma, Verdana, sans-serif;

        }

        .input:hover {
            box-shadow: 6px 6px 0px #fe9347,
            -3px -3px 10px #ffffff;
        }

        .input:focus {
            background: #ffffff;
            box-shadow: inset 2px 5px 10px #fe9347;
        }

        .form .btn {
            margin-top: 2em;
            align-self: center;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: #057aff;
            transition: .4s ease-in-out;
            box-shadow: #fe9347 1px 1px 1px;
            font-size: 15px;
            font-family:Tahoma, Verdana, sans-serif;
            width: 10em;
        }

        .form .btn:hover {
            box-shadow: 6px 6px 0px #fe9347,
            -3px -3px 10px #ffffff;
            transform: translateX(-0.5em) translateY(-0.5em);

        }

        .form .btn:active {
            transition: .2s;
            transform: translateX(0em) translateY(0em);
            box-shadow: none;
        }

        h1 {
            font-family: fantasy;
            position: fixed;
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body style="background-color: #e3e3e3;">
<form class="form">
    <p class="heading">Giriş Yap</p>
    <input class="input" placeholder="E-posta" type="email" name="E-posta" required>
    <input class="input" placeholder="Şifre" type="password" name="Şifre" required>
    <div class="row mb-0">
    <button class="btn" href="home">Giriş Yap</button>
    <button class="btn" href="onay">Yönetici Girişi</button>
                
    
</form>


<div class="hr"></div>
<div class="hr" style="bottom: 0;"></div>
<h1> MAS HUKUK BÜROSU</h1>
</body>
</html>