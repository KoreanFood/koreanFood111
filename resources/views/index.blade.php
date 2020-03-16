<!doctype html>
<html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Loading Page</title>
     <style>
     body{
                background-image: url({{ asset('image/bk0.jpg') }});
                background-size: cover;
            }
            .img {border-radius:50%;}
     </style>
      </head>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body onload="move()">
        <div class="w3-container w3-center w3-animate-zoom">
                <h1 class="w3-text" style="text-shadow:2px 2px 0 #444">
                <b>Welcome</b></h1>
        </div>
        <div id="myBar" class="w3-black w3-center w3-padding-large" style="width: 20%;padding-top: 0%;">0%</div>
            <script>
                function move() {
                  var elem = document.getElementById("myBar");   
                  var width = 20;
                  var id = setInterval(frame, 60);
                  function frame() {
                    if (width >= 100) {
                      clearInterval(id);
                      window.location.replace("/main")
                    } else {
                      width++; 
                      elem.style.width = width + '%'; 
                      elem.innerHTML = width * 1  + '%';
                    }
                  }
                }
                </script>
                
        </div>
    </body>
</html>