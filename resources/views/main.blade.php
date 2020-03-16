<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
     
      body {font-family: Arial, Helvetica, sans-serif; background-image: url({{ asset('image/bk4.jpg') }});
      }
      * {box-sizing: border-box;}
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      
      /* Add a background color when the inputs get focus */
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      /* Set a style for all buttons */
      button {
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
      
      button:hover {
        opacity:1;
      }
      
      /* Extra styles for the cancel button */
      .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
      }
      
      /* Float cancel and signup buttons and add an equal width */
      .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
      }
      
      /* Add padding to container elements */
      .container {
        padding: 16px;
      }
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
      }
      
      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }
      
      /* Style the horizontal ruler */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
       
      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
      }
      
      .close:hover,
      .close:focus {
        color: #f44336;
        cursor: pointer;
      }
      
      /* Clear floats */
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
      
      /* Change styles for cancel button and signup button on extra small screens */
      @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }

      }</style>
    <title>Hello, world!</title>
  </head>
  <body>
     
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <img src="image/1.png" class="img-fuild rounded-circle" alt=""style="width: 50px;">
                <a class="navbar-brand" href="#"></a>&nbsp;
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('main') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('viewlist') }}">Menu</a>
                      </li>
                    
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact-us') }}" >Contact us</a>
                          </li>
                  </ul>
                 
                  <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }} ">
            {{ csrf_field() }}
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
                </div>
              </nav>

                  
        <div class="container-fluid">
        <div class="col-md-8" style="float:left" >
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="image/bnr3.jpg" class="d-block w-200 h-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="image/bnr5.jpg"class="d-block w-200 h-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="image/bnr6.jpg"class="d-block w-200 h-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                      </div>
        </div>
        
        </div>
        <div class="col-md-4" style="float:left;z" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">      
        <div class="container-fluid" >
            <div class="w3-animate-zoom">
            <div class="" style="padding:1px">
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="image/fried chicken.jpg" class="img-fuild" width="250" height="200" alt=""></button></form></div>
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="image/hfnnc1.jpg" class="img-fuild" width="250" height="200" alt=""></button></form></div>
                <div class="col-md-4" style="text-align: center"><form action="menu.html"><button style="float: right;"class="btn btn-white btn-xs"><img src="image/bnr4.jpg" class="img-fuild" width="250" height="200" alt=""></button></form></div>
            </div>
            </div>
            <div id="id01" class="modal">
             <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
         </div>
         </div>
         </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

             <div class="row" style="left:0;bottom: 0;">
                <div class="col-md-12 bg-warning">
                Korean Food 
                            <div style="float: right;">
                              <img src="image/logo.png" alt="" width="145px">
                            </div>
                            <div class=""style="margin-top: 10px;float: right;">
               
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1832290874067!2d103.62226601484014!3d1.640389198803813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da79efd691636d%3A0xe27fabf2aa6743dd!2sNSIT+Academy!5e0!3m2!1szh-CN!2smy!4v1564543529462!5m2!1szh-CN!2smy" width="250" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div> 
                          <br>
                            16, Jalan Seri Putra 1, 
                            Bandar Putra, 
                            81000 Kulai, Johor.<br>
                            07-660 0628<br>
                            www.nsit.com.my
                </div>
              </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>