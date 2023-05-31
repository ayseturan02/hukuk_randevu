<<<<<<< HEAD
@extends("layouts.app2")
@section("content")
        
         <button id="ileri" style="position: absolute; top:12%; left:75%;" >
=======


<!DOCTYPE html>
<html>
<head>
<style>

section {
  max-width: 1200px;
  margin: auto;
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
  box-shadow:  3px 2px 15px #dd932c;
  margin: 10px 10px 10px 10px auto;
}

.columnm {
  margin: 20px;
  margin-top: 100px;
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: 0;
  border-radius: 20px;
  box-shadow:  3px 2px 15px #dd932c;
  margin: 10px 10px 10px 10px auto;
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

.column {
  padding: 25px ;
  height: 150px;
  background-color: #ffffff;
  text-align: right;
  margin-top: 10px;
  
  border: 1px solid transparentize(white, 0.25);
  background-color: transparentize(white, 0.8);
  color: transparentize(white, 0.1);
}
.columnm {
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
  img{
    float: left;
    width: 70px;
    padding-bottom: 20px;
    
    
  }
</style>
</head>
<body style="background-color:#E3E3E3;">
    <header>


          <button id="ileri" style="position: absolute; top:12%; left:75%;" >
            İleri
          </button>
          <button id="geri" style="position: absolute; top: 12%; left: 15%;">
            Geri
          </button>
          <section>
            <div class="columnm">
              <h1><pre>Av. Gizem Kaya      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 1" >
              
            </div>
            <div class="columnm">
              <h1><pre>Av. Mustafa Er      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 2">
            </div>
          </section>
          <section>
            <div class="column">
              <h1><pre>Av. Fatma Kınay      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 3">
            </div>
            <div class="column">
              <h1><pre>Av. Ahmet Örnek      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 4">
            </div>
          </section>
          <section>
            <div class="column">
              <h1><pre>Av. Ali Demir      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 5">
            </div>
            <div class="column">
              <h1><pre>Av. Aslı Yüce      </pre></h1>
              <button class="randevu">
                <a><pre>                      Seç</pre></a>
              </button>
              <img src="kişi.png" alt="Resim 6">
            </div>
          </section>
</body>
@endsection