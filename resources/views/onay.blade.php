@extends('layouts.app3')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
section {
  max-width: 1300px;
  margin: 0 auto;
  display: flex;
  
}
.column {
  margin:200px;
  margin-top: 100px;
  
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: 0;
  border-radius: 20px;
  box-shadow:  3px 2px 15px #31308b;
}

.column {
  padding: 100px 100px;
  height: 300px;
  background-color: #f2eeee;
  text-align:justify;
  font-size: large;
  font-family:Tahoma, Verdana, sans-serif;
  color: #000000;
  border: 1px solid transparentize(white, 0.25);
  background-color: transparentize(white, 0.8);
  color: transparentize(white, 0.1);
}
h1{
    color: #f78536;
}
.custom-btn {
            width: 200px;
            height: 80px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: absolute;
            top: 35%;
            left: 65%;
            transform: translate(-50%, -50%);
            box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
                7px 7px 20px 0px rgba(0,0,0,.1),
                4px 4px 5px 0px rgba(0,0,0,.1);
            outline: none;
            
}



.btn-1 {
 background: rgb(41, 99, 245);
 background: linear-gradient(0deg, rgb(41, 99, 245)) 0%, rgb(41, 99, 245) 100%;
 border: none;
}

.btn-1:before {
 height: 0%;
 width: 2px;
}

.btn-1:hover {
 box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}
textarea{
  background-color: #ffffff;
  
}
    </style>
</head>
<body style="background-color: #d7d7d7">
  
    <section>
        <div class="column">
            <h1>GİZEM KAYA</h1>
            <br>İcra Hukuku
            <br>15 Ocak 2023 Cuma 
            <br>11:30 AM
            <br><br><br>
            Notlar:
            <button class="custom-btn btn-1">Onayla</button>
            <textarea rows="5" cols="90">
              </textarea>
        </div>
    </section>
   
   
</body>
</html>
@endsection