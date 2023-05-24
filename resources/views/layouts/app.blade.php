
<!DOCTYPE html>
<html lang="en">

<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

        section {
            max-width: 1200px;
            margin:  auto;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .column {
            margin: 20px;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 0;
            border-radius: 20px;
            box-shadow:  3px 2px 15px #31308b;
            margin: 10px 10px 10px 10px auto;


        }
        .columnm {
            margin: 20px;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 0;
            border-radius: 20px;
            box-shadow:  3px 2px 15px #31308b;
            margin-top: 110px


        }

        html, body {
            height: 100%;
            box-sizing: border-box;
        }

        h1{
            color: #0D6EFD;
            margin-top: 20px;
            margin-bottom: -10px;
            font-family:Tahoma, Verdana, sans-serif;
            font-size: 25px;
            font-weight: bold;
        }
        .column {

            padding: 10px 0px;
            height: 150px;
            background-color: #ffffff;
            text-align: center;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }
        .columnm {

            padding: 10px 0px;
            height: 150px;
            background-color: #ffffff;
            text-align: center;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }


        .tabs {
            display: flex;
            width: 30%;
            margin: 10px 450px 510px ;

            justify-content: center;
            position: relative;
            background-color: #fff;
            box-shadow: 0 0 1px 0 rgba(24, 94, 224, 0.15), 0 6px 12px 0 rgba(24, 94, 224, 0.15);
            padding: 1rem;
            border-radius: 99px;
        }

        .tabs * {
            z-index: 2;

        }

        .container input[type="radio"] {
            display: none;

        }

        .tab {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30px;
            width: 50px;
            font-size: .8rem;
            color: black;
            font-weight: 500;
            border-radius: 99px;
            cursor: pointer;
            transition: color 0.15s ease-in;
            margin: 2px;
        }

        .notification {
            display: flex;
            align-items: center;
            justify-content: center;
            width: .8rem;
            height: .8rem;
            position: absolute;
            top: 10px;
            left: 30%;
            font-size: 10px;
            margin-left: 0.75rem;
            border-radius: 50%;
            margin: 0px;
            background-color: #e6eef9;
            transition: 0.15s ease-in;

        }

        .container input[type="radio"]:checked + label {
            color: #185ee0;

        }

        .container input[type="radio"]:checked + label > .notification {
            background-color: #185ee0;
            color: #fff;
            margin: 0px;

        }

        .container input[id="radio-1"]:checked ~ .glider {
            transform: translateX(-220%);
        }

        .container input[id="radio-2"]:checked ~ .glider {
            transform: translateX(-120%);
        }

        .container input[id="radio-3"]:checked ~ .glider {
            transform: translateX(-20);
        }
        .container input[id="radio-4"]:checked ~ .glider {
            transform: translateX(110%);
        }
        .container input[id="radio-5"]:checked ~ .glider {
            transform: translateX(210%);
        }

        .glider {
            position: absolute;
            display: flex;
            height: 30px;
            width: 50px;
            background-color: #e6eef9;
            z-index: 1;
            border-radius: 99px;
            transition: 0.25s ease-out;
        }

        @media (max-width: 700px) {

            .tabs {
                transform: scale(0.6);
            }
        }

        header{
            background-color: #fff;
            box-shadow: rgb(179, 176, 176) 0px 2px 0px 0px;
        }

    </style>


</head>
<body style="background-color:#D9D9D9;">
<header><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container">
        <header class="d-flex justify-content-center py-3" sty>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/home"class="nav-link active" aria-current="page">Anasayfa</a></li>
                <li class="nav-item"><a href="/randevu" class="nav-link">Randevu</a></li>
                <li class="nav-item"><a href="hizmetlerimiz" class="nav-link">Hizmetlerimiz</a></li>
                <li class="nav-item"><a href="iletisim" class="nav-link">İletişim</a></li>

            </ul>

            <div class="col-md-3 text-end">
                <a href="{{(route("giris"))}}"> <button type="button" class="btn btn-outline-primary me-2"><font style="vertical-align: inherit;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg>
                            <font style="vertical-align: inherit;"> Giriş yapmak</font></font></button></a>
                <a href="{{(route("kayıt"))}}"> <button type="button" class="btn btn-outline-primary me-2"><font style="vertical-align: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                        </svg><font style="vertical-align: inherit;">Kayıt olmak</font></font></button> </a>
            </div>

        </header>
    </div>


</header>

</body>
</html>
