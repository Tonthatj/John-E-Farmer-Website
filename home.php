<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>John E. Farmer & Son's</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <script language="javascript">

    function toggle1() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'visible';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'hidden';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'hidden';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'hidden';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'hidden';    
    }
    function toggle2() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'hidden';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'visible';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'hidden';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'hidden';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'hidden';    
    }
    function toggle3() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'hidden';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'hidden';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'visible';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'hidden';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'hidden';    
    }
    function toggle4() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'hidden';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'hidden';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'hidden';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'visible';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'hidden';    
    }
    function toggle5() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'hidden';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'hidden';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'hidden';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'hidden';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'visible';    
    }
    function toggle6() 
    {
      var elem = document.getElementById('about');
      elem.style.visibility = 'hidden';
      var elem1 = document.getElementById('portfolio');
      elem1.style.visibility = 'hidden';
      var elem2 = document.getElementById('contact');
      elem2.style.visibility = 'hidden';
      var elem3 = document.getElementById('services');
      elem3.style.visibility = 'hidden';
      var elem4 = document.getElementById('pricing');
      elem4.style.visibility = 'hidden';    
    }
</script>

    <style>
        body {
            height: 100%;
        }

        body {
            overflow: hidden;
        }
        .box {
            position: relative;
            height: 95vh;
            min-height: 300px;
        }
        .carousel-item {
            height: 95vh;
            min-height: 300px;
            background: no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            z-index: 0;
            top:0px;
            
        }
        #about {
            position: absolute;
            z-index: 2;
            visibility: hidden;
            left: 5px;
            top:90px;
            text-align:justify;

        }
        #portfolio {
            position: absolute;
            z-index: 2;
            visibility: hidden;
            right: 5px;
            top:80px;
            text-align:justify;
                                  
        }
        #services {
            position: absolute;
            z-index: 2;
            visibility: hidden;
            left: 5px;
            top:80px;
            text-align:justify;
            
        }
        #contact {
            position: absolute;
            z-index: 2;
            visibility: hidden;
            right: 10px;
            top:90px;
            font-size:15px;
           
        }
        #pricing {
            position: absolute;
            z-index: 2;
            visibility: hidden;
            left: 5px;
            top:85px;
            
        }
        .row {
          width: 800px;
        }
        .row1 {
          width: 800px;
        }
        .footer{
          height: 10vh;

        }
        .tab { margin-left: 70px; }
        .tabl { margin-right: 35px; }
        .carousel-caption {
          bottom:0px;
          width: 400px;
          height: 60px;
          margin-left: auto;
          margin-right: auto;
        }
        .carousel-indicators li { visibility: hidden; }
        .p1{font-size: 12px;}

        
        
        
    </style>

  </head>

  <body style="background-color:#263238">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-danger">
      <div class="container">
        <a class="navbar-brand text-danger" href="javascript:toggle6();"><h2><strong>John E. Farmer & Son's Construction</strong></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link text-danger" href="javascript:toggle1();">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="javascript:toggle2();">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="javascript:toggle4();">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger bg-warning" href="javascript:toggle3();">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    
    <div id="box">
    
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000" data-wrap="true" data-pause="false">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url(8.jpg)">
            <div class="carousel-caption d-none d-md-block text-danger bg-dark border border-warning rounded-circle">
              <p>Providing the services you need since 1974!</p>
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(mining.jpg)">
            <div class="carousel-caption d-none d-md-block text-danger bg-dark border border-warning rounded-circle">
              <p>Over 60 years of experience in our field!</p>
              
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(crawler.jpg)">
            <div class="carousel-caption d-none d-md-block text-danger bg-dark border border-warning rounded-circle">
              <p>Fully Bonded and Insured!</p>
              
            </div>
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
      </div>
    



        <div id="about" class="col-sm-3 bg-secondary rounded border border-warning text-white">
          <center> <h2 class='text-danger'><b>What We Do</b></h2> </center>
          <p1> John Farmer & Sons is a fully licensed and insured contractor with over 60 years experience in the 
              construction industry. John E Farmer & Sons is a small firm that specializes in one on one interactions with 
              clients to accomplish their goals through out all phases of a project. Our projects range from indiviual house 
              sites to large commercial projects and subdivisions. John Farmer & Sons is located in Billerica MA, and services 
              the local area as well as southern New Hampshire. The company is run by John Farmer Sr., John Farmer Jr., and Mark Farmer.
          </p1>
          <p> </p>
          <p> </p>
          <p> </p>
        </div>









    <div id="contact" class="col-sm-3 bg-warning rounded border border-dark">
      <center> <h2 class='text-danger'>Contact Us</h2> </center>
      <p>Office: 19 Ansley Circle, Billerica, MA 01821A <br> Garage: Lexington Rd, Billerica, MA 01821A</p>
      <div class="row">
        <div class="col-sm-2">
        <p class="tab">Office: <br> Cell: <br> Fax:</p>
        </div>
        <div class="col-sm-3">
        <p class="tabl"> 978-667-8184<br> 978-804-3792 <br> 978-670-9881</p>
        </div>

      </div>
    </div>    









    <div class="col-sm-3 bg-secondary rounded text-white border border-warning" id="pricing">
      <center><h2 class='text-danger'>Pricing</h2></center>
      <p><strong> Materials: </strong></p>
      <div class="row">
        <div class="col-sm-2">
        <p>Loam: <br> Gravel: <br> "3/4" Stone:</p>
        </div>
        <div class="col-sm-3">
        <p class="tabl"> $18 per yard<br> $15 per ton <br> $20 per ton</p>
        </div>

      </div>
    </div>











    <div class="bg-secondary rounded text-white border border-warning p-3" id="services">
  <center><h2 class='text-danger'>Services</h2></center>
  <div class="row">
    <div  class="col-sm-10">
      <h4>Site Development</h4>
      <p1>John E. Farmer & Son’s Site Development services include site and utility demolition,
       land clearing and grubbing, erosion controls, site cuts and fills, building foundation excavation and 
       backfill, water, sewer and drainage, and retaining wall installation.
      </p1>
    </div>
    <div class="col-sm-2">
        <img src="past2.jpeg" alt="Flowers in Chania" style="width:100px;height:100px;">
    </div>
    </div>

    <div class="row">
    <div id="" class="col-sm-10">

      <h4 >Utility Construction</h4>
      <p1> John E. Farmer & Son's  Utility Construction & Installation services include sanitary sewer work
       such as piping, holding tanks, grease traps and pumping stations. JEF’s drainage services includes piping,
        detention tanks, infiltration systems and water quality units.  JEF also performs the installation
        of water distribution piping.
      </p1>

    </div>
    <div class="col-sm-2">
        <img src="past1.jpeg" alt="Flowers in Chania" style="width:100px;height:100px;">
    </div>

    </div>
    
    <div class="row">
    <div id="" class="col-sm-10">

      <h4 >Other</h4>
      <p1> John E. Farmer & Son's  has performed a variety of services that include golf course construction and sport fields. 
      John E. Farmer & Son's  has performed a variety of services that include golf course construction and sport fields. 
      </p1>

    </div>
    <div class="col-sm-2">
        <img src="past1.jpeg" alt="Flowers in Chania" style="width:100px;height:100px;">
    </div>

    </div>

    <div class="row">
    <div id="" class="col-sm-10">

      <h4 >Loam, Gravel, and Stone</h4>
      <p1> John E. Farmer & Sons sells loam, gravel, and stone. Pricing may vary depending on distance required to haul the material.
      </p1>

    </div>
    <div class="col-sm-2">
        <img src="past1.jpeg" alt="Flowers in Chania" style="width:100px;height:100px;">
    </div>

    </div>
  
  </div>
    </div>

  










  <div id="portfolio" class='bg-secondary text-white rounded border border-warning p-3'>
  <center> <h2 class='text-danger'>Past Projects</h2> </center>
  <div class="row">
      <div class="col-sm-2">
        <img src="smollack.jpg" alt="Meeting House Commons" style="width:100px;height:100px;">
      </div>
     <div class="col-sm-10">
      <p> <strong> Meeting House Commons </strong> is a 30-acre 88-unit complex in North Andover. The project 
      was developed under the Massachusetts' Affordable Housing Zoning Law. John E. Farmer & Sons Inc. installed erosion controls, carved out
      roads, erected retaining walls, and installed the underground utilites including water, sewer, and drainage. 
      </p>
    </div>
  </div>
  
  <div class="row">
      <div class="col-sm-2">
        <img src="past2.jpeg" alt="Burlington Heights" style="width:100px;height:100px;">
      </div>
     <div class="col-sm-10">
      <p> <strong> Burlington Heights </strong>, a 37-unit garden style condo project, is located at 235-245 Cambridge Street, Burlington MA. 
      John Farmer & Sons Inc. installed an extensive retaining wall system prior to carving out the hillside due to the 
      challenging site conditions and the proximinty of the proposed buildings to Cambridge St. John E. Farmer & Sons also 
      installed the water, sewer, drainage systems, excavated and backfilled the foundation and prepared the site for the bitumunious
      concrete.     
      </p>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      <img src="braemor.jpg" alt="Braemor Woods" style="width:100px;height:100px;">
    </div>
   <div class="col-sm-10">
    <p> <strong> Braemoor Woods </strong> is a 55 and over adult community located in Salem NH. John Farmer & Sons erected retaining walls,
    and installed the underground utilites including water, sewer, and drainage. John Farmer & Sons also excavated and 
    backfilled the foundation for both apartments.
    </p>
  </div>
</div>

<p> </p>



  

</div>
  
  </div>
</div>

</div>
    </section>

    
    <footer class="py-2 bg-dark text-danger">
      <div class="container">
        <p class="m-0 ">2018 Copyright &copy; JohnEFarmer.com </p>
      </div>
      
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
