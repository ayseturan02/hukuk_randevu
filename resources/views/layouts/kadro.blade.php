<!DOCTYPE html>
<html>
<head>
    <style>

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
            box-shadow:  3px 2px 15px #dd932c;
        }
        .columnm{
            margin: 20px;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 0;
            border-radius: 20px;
            box-shadow:  5px 10px 50px #e58508;
        }

        html, body {
            height: 100%;
            box-sizing: border-box;
        }

        h1{
            color: #0D6EFD;
            font-family:Tahoma, Verdana, sans-serif;
            font-size: 30px;
            font-weight: bold;
        }
        .columnm{
            padding: 20px ;
            height: 150px;
            background-color: #ffffff;
            text-align: right;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }
        .column {
            padding: 25px ;
            height: 150px;
            background-color: #ffffff;
            text-align: right;

            border: 1px solid transparentize(white, 0.25);
            background-color: transparentize(white, 0.8);
            color: transparentize(white, 0.1);
        }
        pre{
            font-family:Tahoma, Verdana, sans-serif ;
        }

    </style>
</head>
<body style="background-color:#E3E3E3;">

<section>

    <div class="columnm"><h1><pre>Av. Gizem Kaya      </pre></h1><br></div>
    <div class="column"><h1><pre>Av. Mustafa Er      </pre></h1><br></div>

</section>

<section>

    <div class="column"><h1><pre>Av. Fatma Kınay      </pre></h1><br></div>
    <div class="column"><h1><pre>Av. Ahmet Örnek      </pre></h1><br></div>

</section>

<section>

    <div class="column"><h1><pre>Av. Ali Demir      </pre></h1><br></div>
    <div class="column"><h1><pre>Av. Aslı Yüce      </pre></h1><br></div>

</section>
</body>

</html>
