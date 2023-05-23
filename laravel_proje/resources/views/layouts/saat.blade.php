<!DOCTYPE html>
<html>
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

        button#ileri, button#geri  {
            display: flex;
            align-items: center;
            justify-content: center;
            outline: none;
            cursor: pointer;
            width: 150px;
            height: 50px;
            background-image: linear-gradient(to top, #D8D9DB 0%, #fbf7f7 80%, #ebe7e7 100%);
            border-radius: 30px;
            border: 1px solid #8F9092;
            transition: all 0.2s ease;
            font-family: "Source Sans Pro", sans-serif;
            font-size: 14px;
            font-weight: 600;
            color: #606060;
            text-shadow: 0 1px #fff;
            max-width: 500px;
        }



        button#geri:hover {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 3px 3px #CECFD1;
        }

        button#geri:active {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
        }

        button#geri:focus {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
        }
        button#ileri:hover {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 3px 3px #CECFD1;
        }

        button#ileri:active {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
        }

        button#ileri:focus {
            box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
        }

        .tab{
            font-size: 15px;
        }

        nav{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-52.5%, -50%);
        }

        button.randevu {
            background: transparent;
            color: #4f07ea;
            font-size: 17px;
            text-transform: uppercase;
            font-weight: 600;
            border: none;
            padding: 15px 30px;
            perspective: 30rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.308);
        }

        button.randevu ::before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border-radius: 10px;
            background: linear-gradient(320deg, rgba(4, 74, 132, 0.686), rgba(77, 2, 77, 0.308));
            z-index: 1;
            transition: background 3s;
        }

        button.randevu :hover::before {
            animation: rotate 1s;
            transition: all .5s;
        }

        @keyframes rotate {
            0% {
                transform: rotateY(180deg);
            }

            100% {
                transform: rotateY(360deg);
            }
        }

        section {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;

        }
        .column {
            margin: 20px;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 0;
            border-radius: 20px;
            box-shadow:  3px 2px 15px #31308b;
        }
        .columnm{
            margin: 20px;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 0;
            border-radius: 20px;
            box-shadow:  5px 10px 50px #03073d;
        }

        html, body {
            height: 100%;
            box-sizing: border-box;
        }

        h1{
            color: #0D6EFD;
            font-family:Tahoma, Verdana, sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .columnm{
            padding: 10px 0px;
            height: 100px;
            background-color: #ffffff;
            text-align: center;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }
        .column {
            padding: 10px 0px;
            height: 100px;
            background-color: #ffffff;
            text-align: center;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }

    </style>
</head>
<body style="background-color:#D9D9D9;" >
<header><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container">
        <header class="d-flex justify-content-center py-3" sty>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" >Anasayfa</a></li>
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Randevu</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Hizmetlerimiz</a></li>
                <li class="nav-item"><a href="#" class="nav-link">İletişim</a></li>
            </ul>
        </header>
    </div></header>
<nav>
    <div class="container">
        <div class="tabs" >
            <input type="radio" id="radio-1" name="tabs" >
            <label class="tab" for="radio-1">Kadro</label>
            <input type="radio" id="radio-2" name="tabs"  >
            <label class="tab" for="radio-2">Hizmet</label>
            <input type="radio" id="radio-3" name="tabs">
            <label class="tab" for="radio-3">Takvim</label>
            <input type="radio" id="radio-4" name="tabs" checked="">
            <label class="tab" for="radio-4">Saat</label>
            <input type="radio" id="radio-5" name="tabs">
            <label class="tab" for="radio-5">Onay</label>
            <span class="glider"></span>
        </div>
    </div>
</nav>


<button id="ileri" style="position: absolute; top:12%; left:75%;" >
    İleri
</button>
<button id="geri" style="position: absolute; top: 12%; left: 15%;">
    Geri
</button>
<br>
<br>
<br>
<a href="{{route("randevu.onay")}}">
<section>
    <div class="column"><h1>9:00 AM</h1><br></div>
    <div class="column"><h1>10:00 AM</h1><br></div>
    <div class="column"><h1>10:30 AM</h1><br></div>
    <div class="column"><h1>11:00 AM</h1><br></div>
</section>
<section>
    <div class="columnm"><h1>11:30 AM</h1><br></div>
    <div class="column"><h1>12:00 PM</h1><br></div>
    <div class="column"><h1>12:30 PM</h1><br></div>
    <div class="column"><h1>1:00 PM</h1><br></div>
</section>
<section>

    <div class="column"><h1>2:00 PM</h1><br></div>
    <div class="column"><h1>3:00 PM</h1><br></div>
    <div class="column"><h1>4:00 PM</h1><br></div>
    <div class="column"><h1>5:00 PM</h1><br></div>
</section>
<section>
</section>
</a>


</body>
</html>
