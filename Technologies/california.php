<!DOCTYPE html>
<html>
<head>
<title>Hilix &middot; California</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<script src="https://use.fontawesome.com/5a20d27639.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!-- Module Tabs -->


<style type="text/css">

/************************************************************************
 Navbar-menue
************************************************************************/

/*.jumbotron{color: grey;}*/

.navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
    border-radius: 2px;
    border: 1px solid white;
  }

input[type = text] {
        position: relative;
        top: 1px;
        width: 85%;
        box-sizing: border-box;
        border: .5px solid lightgrey;
        font-size: 13px;
        font-family: "Avenir", "Light";
        background-color: white;
        padding: 3px 2.5px 3px 25px;
        margin-top: 5px;
        -webkit-transition: width 0.4s ease-in-out; border:.5px;
        transition: width 0.4s ease-in-out; border:.5px;
        color: grey
    }

input[type=text]:focus {
        width: 150%;
        outline: 2px solid #00ace6;
        border: 2px solid lightgrey !important;
        margin-top: 3px;
        margin-left: -2px;
    }

input[type=text]:hover {
        outline: 2px solid #00ace6;
        background: white;
        -webkit-transition: width 0.4s ease-in-out; border:.5px;
        transition: width 0.4s ease-in-out; border:.5px;
    }

.dropdown-toggle:hover{background: transparent !important}
.dropdown-toggle:active, .open .dropdown-toggle {background:none !important; color:#cccccc !important;}

/*  Brand-text Color  */
#main_texts{color:#999999;}
/*#main_texts:hover{color:#b3b3b3;}*/

/************************************************************************
 Font Colors
************************************************************************/

.navbar-one{background: linear-gradient(lightgrey, grey);}

.navbar-one .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
color: lightgrey;  /*Sets the text hover color on navbar*/
}
/*.navbar-default {
    color: white;
}*/
.navbar-one .navbar-nav > li > a {
   color: white; /*Change active text color here*/
}
.navbar-one .navbar-brand {
    color: white;
}
.navbar-one .navbar-brand:hover {
    color: lightgrey;
}

/************************************************************************
 Glyph Icons
************************************************************************/

.glyphicon-envelope {
    background: none;
    margin-left: 5px;
    cursor: pointer;
} 

.glyphicon-envelope:hover {color:grey;}

.glyphicon-leaf {
    background: none;
    margin-left: 5px;
    cursor: pointer;
} 

.glyphicon-leaf:hover {color:grey;}

.glyphicon-font {
    background: none;
    margin-left: 5px;
    cursor: pointer;
} 

.glyphicon-font:hover {color:grey;}


/************************************************************************
 Third / Fourth Navbar-Menues
************************************************************************/

table.style1 {
    
    width:100%;
    font-family: 'Avenir', 'light';
    font-size: 13px;
    border-collapse: separate;
    border-spacing: 18px;
    background: #f8f8f8;
    text-align: right;
    word-spacing: 10px;
    border-bottom: 1px solid #e7e7e7;
}
a.one {
    text-decoration: none;
    color: #9d9d9d;
    cursor: pointer;
}

a.one:hover{color:lightgrey; text-decoration: none}

table.style2 {
    
    width:100%;
    font-family: 'Avenir', 'light';
    font-size: 13px;
    border-collapse: separate;
    border-spacing: 18px;
    background: #f8f8f8;
    text-align: center;
}


/************************************************************************
Bio-Hover Effect
************************************************************************/

div.shortbio {
    background-color: none;
    opacity: .5;
    width: 306px;
    padding: 102px 0 102px 0;
    position: fixed;
    top:53px;
    left: 150px;
}
div.shortbio:hover {
    background: #f2f2f2; 
    border-right: 1px solid lightgrey}



/************************************************************************
 Achievement Layout
************************************************************************/
.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
    font-family: 'Avenir', 'light';
    font-size: 14px;
    color: grey;
    background: #f9f9f9
}

header.x {
  background: #dadada;
  color:white; 
  margin-top: 50px;
  text-align: left;
  font-family: 'Avenir', 'light';
}
footer.x {
  background: #dadada;
  color:white;
  text-align: left;
  font-family: 'Avenir', 'light';
}
.nav-x {
  background:#eee;
  text-align: left;
  margin-left: -30px;
  padding-right: 0px;
}

.nav-x ul {
  list-style-type: none;
  margin-right: -100px;
  font-family: 'Avenir', 'light';
}
   
.nav-x ul a {
 text-decoration: none;
 color: grey;
}

@media all and (min-width: 768px) {
    .nav-x {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer.x {-webkit-order:3;order:3;}
}

.badge{font-size: 11px}
.list-group-item{
  color:grey;
  text-align:left; 
  background: #f2f2f2; 
  border: 1px solid #f2f2f2;
  border-radius:0% !important;
  font-family:'Avenir', 'light';
}

a {color: white;}
a:hover{color: white; text-decoration: underline;}
a.two{color: white}
a.two:hover{color:lightgrey; text-decoration: none}
a.three {text-decoration: none;color: #BBD0DD}
a.five{color: white !important; margin-left:-10px} /* dropdown_menu */
a.five:hover{background: transparent !important; color: #C9D9D7 !important; text-decoration: none!important}
a.six{color:white;}
a.six:hover{color:#aaa; text-decoration: none}


.btn-default:hover{
  box-shadow: 0 0 0 white;
  border: 1px solid none;
  transition: background .1s, border .1s;
}
.btn-default{border-radius: 0%; background: none; border: none; color:white;}
.btn-frame{color:grey;}

.thumbnail{
  background: linear-gradient(to bottom right, lightgrey, #f2f2f2);
  border:none;
  opacity: .9; 
  border-radius: 0%; 
  height: 300px; 
  text-align: left;
  box-shadow: 2px 2px 2px lightgrey;
  overflow: auto;
}
.thumbnail:hover{
  background: linear-gradient(to bottom right, lightgrey, #fafafa);
  opacity: 1;
  transition: border .1s
}
.caption{font-family:'Avenir', 'light'; color: white !important}

</style>
</head>

<!-- ________________________________________________________________________________________________________________________________________________
         
                                                                                 Body

_________________________________________________________________________________________________________________________________________________ -->

<body>

<!-- Navbar One -->
<nav class="navbar navbar-one" style="font-family: 'Avenir', 'light'; font-size:13px; padding:0px; margin-top:-10px; margin-bottom:-10px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <a class="navbar-brand" href="http://localhost:8888/Hilix/Home/hilix.html">hilix</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left" style="margin-top:1px">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course Tracks <span class="caret"></span></a>
          <ul class="dropdown-menu" style="width:1070.9%; background: #BBD0DD; opacity: .9; border: 1px solid #BBD0DD; border-right:none; margin-top:-8px; border-radius:0%">
            <li>
              <div class="jumbotron" style="background: #BBD0DD; opacity: .9; color:white; font-size:13px">
                <div class="row" style="padding-left:20px">
                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Pure Mathematics</h5>
                    Introduction to analysis
                    <br>
                    Differential equations
                    <br>
                    Linear algebra
                    <br>
                    Multvariable calculus
                    <br>
                    Abstract algebra
                    <br>
                    Elementary topology
                    <br>
                    Real analysis
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Applied Mathematics</h5>
                    Calculus
                    <br>
                    Differential equations
                    <br>
                    Linear algebra
                    <br>
                    Multvariable calculus
                    <br>
                    Abstract algebra
                    <br>
                    Mathematical statistics
                    <br>
                    Numerical analysis
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Bioinformatics</h5>
                    Calculus
                    <br>
                    CS probability
                    <br>
                    Structure and reactivity
                    <br>
                    Genetics
                    <br>
                    Foundations of computing
                    <br>
                    Mechanics
                    <br>
                    Programming methodology
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12" style="margin-bottom:20px">
                    <h5>Computer Engineering</h5>
                    Calculus
                    <br>
                    Foundations of computing
                    <br>
                    CS probability
                    <br>
                    Mechanics
                    <br>
                    Electricity and magnetism
                    <br>
                    Programming languages 
                    <br>
                    Operating systems
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Computational Theory</h5>
                    Calculus
                    <br>
                    Foundations of computing
                    <br>
                    Operating systems
                    <br>
                    Mechanics
                    <br>
                    Electricity and magnetism
                    <br>
                    PL Theory and applications
                    <br>
                    Algorithms and data structures.
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Master of Science in Mathematics</h5>
                    Calculus
                    <br>
                    Foundations of computing
                    <br>
                    OperatingsSystems
                    <br>
                    Mechanics
                    <br>
                    Electricity and magnetism
                    <br>
                    PL Theory and applications
                    <br>
                    Algorithms and data structures.
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Master of Science in Computer Science</h5>
                    Calculus
                    <br>
                    Foundations of computing
                    <br>
                    Operating systems
                    <br>
                    Mechanics
                    <br>
                    Electricity and magnetism
                    <br>
                    PL theory and applications
                    <br>
                    Algorithms and data structures.
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 colxs-12">
                    <h5>Master of Science in Computer Science</h5>
                    Calculus
                    <br>
                    Foundations of computing
                    <br>
                    Operating systems
                    <br>
                    Mechanics
                    <br>
                    Electricity and magnetism
                    <br>
                    PL theory and applications
                    <br>
                    Algorithms and data structures.
                  </div>

                  </div>
                </div>
            </li>
            <!-- <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
      <!-- Search_bar -->
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="search" placeholder="Search..." style="border-radius:0%; background:#f2f2f2; background-image: url('search.png'); background-repeat: no-repeat;">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <i class="fa fa-bar-chart" aria-hidden="true" style="padding-top:20px; font-size:14px; color:white"></i>
        </li>
        
        <li class="dropdown" style="margin-top:1px">
          <div style="padding-top:17px">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
              role="button" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons" aria-hidden="true" style="margin-top:-1px; font-size:19px; padding-left:10px; padding-right:5px">apps</i>
            </a>
          <ul class="dropdown-menu" 
                    style="margin-top:2px; font-size:13px; border-radius:0%; background:silver; opacity:.9; margin-right:-15px;
                    border: 1px solid silver; padding:25px">
                    <div align="center"><img src="profile_pic1.png" style="padding-left:15px"> 
                        <br> 
                        <h5 style="color:white; padding-left:15px">Luqman Malik</h5>
                        <a class="five" href="" style="font-size:14px; padding-left:24px">@luqmalik</a> 
                        <span style="color:white; padding-left:0px"></span> <a class="five" href="" style="font-size:12px; padding-left:15px; color:#C9D9D7 !important">SIGNOUT</a>
                    </div>
                    <br>
                    <li role="separator" class="divider"></li>
                    <br>
                    <li><a class="five" href="http://localhost:8888/Hilix/Dashboard/dashboard.html">Hilix Admin</a></li>
                    <li><a class="five" href="http://localhost:8888/Hilix/Profile/luqmanmalik.html">My Portfolio</a></li>
                    <li><a class="five" href="http://localhost:8888/Hilix/HD/database.php">Hilix Database</a></li>
                    <li><a class="five" href="#">Account settings</a></li>
                    <br>
                    <li role="separator" class="divider"></li>
                    <br>
                    <li><a class="five" href="#">Manage storage space</a></li>
                    <br>
                </ul>
            </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div><!-- /.container-fluid -->
</nav>



<!-- Navbar two -->
<nav class="navbar navbar-inverse" style="font-family: 'Avenir', 'light'; font-size:13px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
       <p>
        <h2 style="font-family:'Open Sans', 'sans-serif'; float:left; padding-left:10px; color:lightgrey; margin-left:56px; padding-bottom:2px; cursor:default">
          <a class="three" href="http://localhost:8888/Hilix/HD/database.php">
            <i class="fa fa-database" aria-hidden="true"></i> hilix
          </a> 
            <span style="color:#9d9d9d; font-size:15px">CALIFORNIA</span>
        <h2>
      </p>
    </div>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
            <!-- <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Navbar Three -->
<table class="style2">
    <tr>
        <td>
          <a class="one" style="margin-left:0px">Elections</a>
          <a class="one" style="margin-left:10px;">Federal</a>
          <a class="one" style="margin-left:10px; margin-right:30px">State</a>
          
          <a href="#" class="one"><span class="glyphicon glyphicon-triangle-left"></span></a>
          <a class="one" style="margin-left:10px">California</a>
          <a href="http://localhost:8888/Hilix/Profile/puremathematics.html" class="one" style="margin-left:10px">Colorado</a>
          <a class="one" style="margin-left:10px">Connecticut</a>
          <a class="one" style="margin-left:10px; cursor:default">Deleware</a>
          <a class="one" style="margin:0 10px 0 10px"><span class="glyphicon glyphicon-triangle-right"></span></a>

          <a class="one" style="margin-right:10px; cursor:default"><span class="glyphicon glyphicon-triangle-left"></span></a>
          <a href="http://localhost:8888/Hilix/HD/California/alameda.php" class="one">Alameda</a>
          <a class="one" style="margin-left:10px">Alpine</a>
          <a class="one" style="margin-left:10px">Amador</a>
          <a class="one" style="margin-left:10px">Butte</a>
          <a class="one" style="margin-left:10px">Cala..</a>
          <a class="one" style="margin-left:10px"><span class="glyphicon glyphicon-triangle-right"></span></a>
          <a class="one" style="margin-left:30px">County</a>
          <a class="one" style="margin-left:10px">Local</a>
          <a class="one" style="margin-left:10px">Public Policy</a>
        </td>
    </tr>
</table>

<!-- Navbar four / Bio Frame -->
<table style="width:100%; border-top:solid 1px lightgrey; border-bottom:50px solid #f8f8f8">
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <a href="#">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:20px">
        <h5><a href="http://localhost:8888/Hilix/HD/California/alameda.php">Alameda County</a></h5>
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <a class="six" href="#">Alameda</a>
              <br> 
              <a class="six" href="#">Albany</a>
              <br> 
              <a class="six" href="#">Albrae</a>
              <br>
              <a class="six" href="#">Altamont</a>
              <br>
              <a class="six" href="#">Asco</a>
              <br>
              <a class="six" href="#">Ashland</a>
              <br>
              <a class="six" href="#">Baumberg</a>
              <br>
              <a class="six" href="#">Berkeley</a>
              <br>
              <a class="six" href="#">Brightside</a>
              <br>
              <a class="six" href="#">Brookshire</a>
              <br>
              <a class="six" href="#">Carpenter</a>
              <br>
              <a class="six" href="#">Castro Valley</a>
              <br>
              <a class="six" href="#">Cherryland</a>
              <br>
              <br>
              <a class="six" href="#">Dougherty</a>
              <br>
              <a class="six" href="#">Dresser</a>
              <br>
              <a class="six" href="#">Dublin</a>
              <br>
              <a class="six" href="#">East Pleasanton</a>
              <br> 
              <a class="six" href="#">Emeryville</a>
              <br>
              <a class="six" href="#">Fairview</a>
              <br>
              <a class="six" href="#">Farwell</a>
              <br> 
              <a class="six" href="#">Fremont</a>
              <br>
              <a class="six" href="#">Hall Station</a>
              <br>
              <a class="six" href="#">Halvern</a>
            </td> 
            <td style="vertical-align:top">
              <a class="six" href="#">Hayward</a>
              <br>
              <a class="six" href="#">Kilkare Woods</a>
              <br>
              <a class="six" href="#">Komandorski &ndash; Village</a>
              <br>
              <a class="six" href="#">Livermore</a>
              <br>
              <a class="six" href="#">Lorenzzo Station</a>
              <br>
              <a class="six" href="#">Mattos</a>
              <br>
              <a class="six" href="#">Mendenhall &ndash; Springs</a>
              <br>
              <a class="six" href="#">Midway</a>
              <br>
              <a class="six" href="#">Mountain House</a>
              <br>
              <a class="six" href="#">Mowry Landing</a>
              <br> 
              <a class="six" href="#">Newark</a>
              <br>
              <a class="six" href="#">Oakland (CS)</a>
              <br>
              <a class="six" href="#">Piedmont</a>
              <br>
              <br> 
              <a class="six" href="#">Pleasanton</a>
              <br>
              <a class="six" href="#">Radum</a>
              <br>
              <a class="six" href="#">San Leandro</a>
              <br>
              <a class="six" href="#">San Lorenzo</a>
              <br>
              <a class="six" href="#">San Ramon Village</a>
              <br>
              <a class="six" href="#">Scotts Corner</a>
              <br>
              <a class="six" href="#">Sorenson</a>
              <br>
              <a class="six" href="#">Sunol</a>
              <br>
              <a class="six" href="#">Union City</a>
              <br>
              <a class="six" href="#">Verona</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Alpine County</a></h5>
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <a class="six" href="#">Alpine Village</a>
              <br>
              <a class="six" href="#">Bear Valley</a>
              <br>
              <a class="six" href="#">Cape Horn</a>
              <br>
              <a class="six" href="#">Fredericksburg</a>
              <br>
              <a class="six" href="#">Kirkwood</a>
              <br>
              <a class="six" href="#">Lake Alpine</a>
              <br>
              <a class="six" href="#">Loope</a>
              <br>
              <a class="six" href="#">Markleeville</a>
              <br>
              <a class="six" href="#">Mesa Vista</a>
              <br>
              <a class="six" href="#">Paynesville</a>
              <br>
              <a class="six" href="#">Peacefull Pines</a>
              <br>
              <a class="six" href="#">Shay Creek</a>
              <br>
              <a class="six" href="#">Sorensons</a>
              <br>
              <br>
              <a class="six" href="#">Woodford</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Amador County</a></h5>
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <a class="six" href="#">Amador</a>
              <br>
              <a class="six" href="#">Allen</a>
              <br>
              <a class="six" href="#">Barton</a>
              <br>
              <a class="six" href="#">Bonnefoy</a>
              <br>
              <a class="six" href="#">Buckhorn</a>
              <br>
              <a class="six" href="#">Buena Vista</a>
              <br>
              <a class="six" href="#">Bunker Hill</a>
              <br>
              <a class="six" href="#">Camache NS</a>
              <br>
              <a class="six" href="#">Camanche Village</a>
              <br>
              <a class="six" href="#">Carbondale</a>
              <br>
              <a class="six" href="#">Dagon</a>
              <br>
              <a class="six" href="#">Drytown</a>
              <br>
              <a class="six" href="#">Edwin</a>
              <br>
              <br>
              <a class="six" href="#">Electra</a>
              <br>
              <a class="six" href="#">Enterprise</a>
              <br>
              <a class="six" href="#">Fiddletown</a>
              <br>
              <a class="six" href="#">Ione</a>
            </td>
            <td style="vertical-align:top">
              <a class="six" href="#">Jackson</a>
              <br>
              <a class="six" href="#">Kirkwood</a>
              <br>
              <a class="six" href="#">Kit Carson</a>
              <br>
              <a class="six" href="#">Martell</a>
              <br>
              <a class="six" href="#">Pine Acres</a>
              <br>
              <a class="six" href="#">Pine Grove</a>
              <br>
              <a class="six" href="#">Pioneer</a>
              <br>
              <a class="six" href="#">Plasse</a>
              <br>
              <a class="six" href="#">Plymouth</a>
              <br>
              <a class="six" href="#">Red Corral</a>
              <br>
              <a class="six" href="#">River Pines CP</a>
              <br>
              <a class="six" href="#">River Pines UC</a>
              <br>
              <a class="six" href="#">Roaring Camp</a>
              <br>
              <br>
              <a class="six" href="#">Scottsville</a>
              <br>
              <a class="six" href="#">Sunnybrook</a>
              <br>
              <a class="six" href="#">Sutter Creek</a>
              <br>
              <a class="six" href="#">Sutter Hill</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Butte County</a></h5>
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <a class="six" href="#">Amador</a>
              <br>
              <a class="six" href="#">Allen</a>
              <br>
              <a class="six" href="#">Barton</a>
              <br>
              <a class="six" href="#">Bonnefoy</a>
              <br>
              <a class="six" href="#">Buckhorn</a>
              <br>
              <a class="six" href="#">Buena Vista</a>
              <br>
              <a class="six" href="#">Bunker Hill</a>
              <br>
              <a class="six" href="#">Camache NS</a>
              <br>
              <a class="six" href="#">Camanche Village</a>
              <br>
              <a class="six" href="#">Carbondale</a>
              <br>
              <a class="six" href="#">Dagon</a>
              <br>
              <a class="six" href="#">Drytown</a>
              <br>
              <a class="six" href="#">Edwin</a>
              <br>
              <br>
              <a class="six" href="#">Electra</a>
              <br>
              <a class="six" href="#">Enterprise</a>
              <br>
              <a class="six" href="#">Fiddletown</a>
              <br>
              <a class="six" href="#">Ione</a>
            </td>
            <td style="vertical-align:top">
              <a class="six" href="#">Jackson</a>
              <br>
              <a class="six" href="#">Kirkwood</a>
              <br>
              <a class="six" href="#">Kit Carson</a>
              <br>
              <a class="six" href="#">Martell</a>
              <br>
              <a class="six" href="#">Pine Acres</a>
              <br>
              <a class="six" href="#">Pine Grove</a>
              <br>
              <a class="six" href="#">Pioneer</a>
              <br>
              <a class="six" href="#">Plasse</a>
              <br>
              <a class="six" href="#">Plymouth</a>
              <br>
              <a class="six" href="#">Red Corral</a>
              <br>
              <a class="six" href="#">River Pines</a>
              <br>
              <a class="six" href="#">River Pines</a>
              <br>
              <a class="six" href="#">Roaring Camp</a>
              <br>
              <br>
              <a class="six" href="#">Scottsville</a>
              <br>
              <a class="six" href="#">Sunnybrook</a>
              <br>
              <a class="six" href="#">Sutter Creek</a>
              <br>
              <a class="six" href="#">Sutter Hill</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<!-- <div align="center">
<button class="btn-frame" style="border:none; background:#f8f8f8">
  <span style="color: #3333; padding-left:10px; padding-right:10px">
    <i class="material-icons" style="padding-top:8px">dashboard</i>
  </span>
</button>
</div> -->


<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8">
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <a href="#">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Calaveras County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Colusa County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Contra Costa County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Del Norte County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<!-- <div align="center">
<button class="btn-frame" style="border:none; background:#f8f8f8">
  <span style="color: #3333; padding-left:10px; padding-right:10px">
    <i class="material-icons" style="padding-top:8px">dashboard</i>
  </span>
</button>
</div> -->


<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8">
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <a href="#">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Eldorado County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Fresno County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Glenn County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Humboldt County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>


<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8">
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <a href="#">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Imperial County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Inyo County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Kern County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:30px">
        <h5><a href="http://localhost:8888/Hilix/Profile/puremathematics.html">Kings County</a></h5>
        <table style="width:100%">
          <tr>
            <td>
              Cities:
              <a class="six" href="#">Millbrook</a>
              <br> 
              <a class="six" href="#">Prattville</a>
            </td> 
            <td style="vertical-align:top">
              Towns:
              <br>
              <a class="six" href="#">Autaugaville</a>
              <br>
              <a class="six" href="#">Billingsley</a>
            </td>
          </tr>
          <tr>
            <td>&#160</td>
          </tr>
          <tr>
          <td style="vertical-align:top">
              CD Places:
              <br>
              <a class="six" href="#">Marbury</a>
              <br>
              <a class="six" href="#">Pine Level</a>
              <br>
              <br>
              Ghost Towns:
              <br>
              <a class="six" href="#">Washington</a>
            </td>
            <td style="vertical-align:top">
              UIC Communities:
              <a class="six" href="#">Booth</a>
              <br>
              <a class="six" href="#">Evergreen</a>
              <br>
              <a class="six" href="#">Jones</a>
              <br>
              <a class="six" href="#">Kingston</a>
            </td>
          </tr>
        </table>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>