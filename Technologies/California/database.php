<!DOCTYPE html>
<html>
<head>
<title>Hilix &middot; Database</title>
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
#main_texts:hover{color:#b3b3b3;}

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
    color: #9d9d9d;
    cursor: pointer;
}

a.one:hover{color:lightgrey;text-decoration: none;}

table.style2 {
    color:grey;
    width:100%;
    font-family: 'Avenir', 'light';
    font-size: 13px;
    border-collapse: separate;
    border-spacing: 18px;
    background: #f8f8f8;
    text-align: center;
    padding-left: 20px
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
a.three {text-decoration: none;color: grey;}
a.three:hover{color: grey}
a.five{color: white !important; margin-left:-10px} /* dropdown_menu */
a.five:hover{background: transparent !important; color: #C9D9D7 !important}
a.county{color:white;}
a.county:hover{color:#aaa; text-decoration: none}


.btn-default:hover{
  box-shadow: 0 0 0 white;
  border: 1px solid none;
  transition: background .1s, border .1s;
}
.btn-default{border-radius: 0%; background: none; border: none; color:white;}
.btn-frame{color:grey;}

.thumbnail{
  background: linear-gradient(to bottom right, lightgrey, #f2f2f2);
  border: none;
  opacity: .9;
  border-radius: 0%;
  height: 300px;
  text-align: left;
  box-shadow: 2px 2px 2px lightgrey;
  overflow: auto;
}
.thumbnail:hover{background: linear-gradient(to bottom right, lightgrey, #fafafa); opacity: 1; transition: background .1s}
.caption{font-family:'Avenir', 'light'; color: white !important; margin-top:0px;}

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
          <ul class="dropdown-menu" style="width:1070.9%; background: silver; opacity: .9; border: 1px solid silver; border-right:none; margin-top:-8px; border-radius:0%">
            <li>
              <div class="jumbotron" style="background: silver; opacity: .9; color:white">
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
                    <li><a class="five" style="cursor:default">Hilix Database</a></li>
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
        <h2 style="font-family:'Open Sans', 'sans-serif'; float:left; padding-left:10px; color:lightgrey; margin-left:65px; padding-bottom:2px; cursor:default; color:#BBD0DD">
          <i class="fa fa-database" aria-hidden="true"></i> hilix <span style="color:#9d9d9d; font-size:15px">DATABASE</span>
        <h2>
      </p>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
          <a class="one" style="margin-left:10px; margin-right:10px">Federal</a>
          <a class="one" style="margin-left:10px; margin-right:30px">State</a>
          <span class="glyphicon glyphicon-triangle-left" style="color:#9d9d9d"></span>
          <a class="one" href="http://localhost:8888/Hilix/HD/alabama.php" style="margin-left:10px">Alabama</a>
          <a class="one" style="margin-left:10px">Alaska</a>
          <a class="one" style="margin-left:10px">Arizona</a>
          <a class="one" style="margin-left:10px">Arkansas</a>
          <a class="one" href="http://localhost:8888/Hilix/HD/california.php" style="margin-left:10px">California</a>
          <a class="one" style="margin-left:10px">Colorado</a>
          <a class="one" style="margin-left:10px">Connecticut</a>
          <a class="one" style="margin-left:10px"><span class="glyphicon glyphicon-triangle-right"></span></a>
          <a class="one" style="margin-left:30px">County</a>
          <a class="one" style="margin-left:10px">Local</a>
          <a class="one" style="margin-left:10px;">Public Policy</a>
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
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Alabama</a></h5>
              <a class="county" href="#">Autauga</a> 
              <br> <a class="county" href="#">Baldwin</a> 
              <br> <a class="county" href="#">Barbour</a> 
              <br> <a class="county" href="#">Bibb</a> 
              <br> <a class="county" href="#">Blount</a> 
              <br> <a class="county" href="#">Bullock</a>
              <br> <a class="county" href="#">Butler</a> 
              <br> <a class="county" href="#">Calhoun</a> 
              <br> <a class="county" href="#">Chambers</a> 
              <br> <a class="county" href="#">Cherokee</a> 
              <br> <a class="county" href="#">Chilton</a> 
              <br> <a class="county" href="#">Choctaw</a> 
              <br> <a class="county" href="#">Clarke</a>
              <br>
              <br> <a class="county" href="#">Clay</a> 
              <br> <a class="county" href="#">Cleburne</a> 
              <br> <a class="county" href="#">Coffee</a> 
              <br> <a class="county" href="#">Colbert</a> 
              <br> <a class="county" href="#">Conecuh</a> 
              <br> <a class="county" href="#">Coosa</a> 
              <br> <a class="county" href="#">Covington</a> 
              <br> <a class="county" href="#">Crenshaw</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Dale</a> 
              <br> <a class="county" href="#">Dallas</a> 
              <br> <a class="county" href="#">Dekalb</a> 
              <br> <a class="county" href="#">Elmore</a> 
              <br> <a class="county" href="#">Escambia</a> 
              <br> <a class="county" href="#">Etowah</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Franklin</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Greene</a> 
              <br> <a class="county" href="#">Hale</a> 
              <br> <a class="county" href="#">Henry</a> 
              <br> <a class="county" href="#">Houston</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Jefferson</a> 
              <br> <a class="county" href="#">Lamar</a> 
              <br> <a class="county" href="#">Lauderdale</a> 
              <br> <a class="county" href="#">Lawrence</a> 
              <br> <a class="county" href="#">Lee</a> 
              <br> <a class="county" href="#">Limestone</a> 
              <br> <a class="county" href="#">Lowndes</a> 
              <br> <a class="county" href="#">Macon</a> 
              <br> <a class="county" href="#">Madison</a>
              <br> <a class="county" href="#">Marengo</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Marshall</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroe</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Morgan</a> 
              <br> <a class="county" href="#">Perry</a> 
              <br> <a class="county" href="#">Pickens</a>
              <br> <a class="county" href="#">Pike</a> 
              <br> <a class="county" href="#">Randalph</a> 
              <br> <a class="county" href="#">Russell</a> 
              <br> <a class="county" href="#">St. Clair</a> 
              <br> <a class="county" href="#">Shelby</a> 
              <br> <a class="county" href="#">Sumter</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Tallapoosa</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Walker</a> 
              <br> <a class="county" href="#">Washington</a> 
              <br> <a class="county" href="#">Wilcox</a> 
              <br> <a class="county" href="#">Winston</a>
            </td>
            <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Pratville</a> 
              <br> <a class="county" href="#">Bay Minette</a> 
              <br> <a class="county" href="#">Clayton</a> 
              <br> <a class="county" href="#">Centreville</a> 
              <br> <a class="county" href="#">Oneonta</a> 
              <br> <a class="county" href="#">Union Springs</a> 
              <br> <a class="county" href="#">Butler</a> 
              <br> <a class="county" href="#">Anniston</a> 
              <br> <a class="county" href="#">LaFayette</a> 
              <br> <a class="county" href="#">Centre</a> 
              <br> <a class="county" href="#">Clanton</a> 
              <br> <a class="county" href="#">Butler</a> 
              <br> <a class="county" href="#">Grove Hill</a>
              <br>
              <br> <a class="county" href="#">Ashland</a> 
              <br> <a class="county" href="#">Heflin</a> 
              <br> <a class="county" href="#">Elba</a> 
              <br> <a class="county" href="#">Tuscumbia</a> 
              <br> <a class="county" href="#">Evergreene</a> 
              <br> <a class="county" href="#">Rockford</a> 
              <br> <a class="county" href="#">Anadalusia</a> 
              <br> <a class="county" href="#">Luverne</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Ozark</a> 
              <br> <a class="county" href="#">Selma</a> 
              <br> <a class="county" href="#">Fort Payne</a> 
              <br> <a class="county" href="#">Wetumka</a> 
              <br> <a class="county" href="#">Brewton</a> 
              <br> <a class="county" href="#">Gadson</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Russellville</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Eutaw</a> 
              <br> <a class="county" href="#">Greensborow</a> 
              <br> <a class="county" href="#">Abbeville</a> 
              <br> <a class="county" href="#">Dothan</a> 
              <br> <a class="county" href="#">Scottsboro</a> 
              <br> <a class="county" href="#">Birmingham</a> 
              <br> <a class="county" href="#">Vernon</a> 
              <br> <a class="county" href="#">Florence</a> 
              <br> <a class="county" href="#">Moulton</a> 
              <br> <a class="county" href="#">Opelika</a> 
              <br> <a class="county" href="#">Athens</a> 
              <br> <a class="county" href="#">Heyneville</a> 
              <br> <a class="county" href="#">Tuscegee</a> 
              <br> <a class="county" href="#">Huntsville</a> 
              <br> <a class="county" href="#">Linden</a> 
              <br> <a class="county" href="#">Hamilton</a> 
              <br> <a class="county" href="#">Guntersville</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroeville</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Decatur</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Carrollton</a>
              <br> <a class="county" href="#">Troy</a> 
              <br> <a class="county" href="#">Wedowee</a> 
              <br> <a class="county" href="#">Phenix City</a> 
              <br> <a class="county" href="#">Ashville</a> 
              <br> <a class="county" href="#">Columbiana</a> 
              <br> <a class="county" href="#">Livingston</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Dadeville</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Jasper</a> 
              <br> <a class="county" href="#">Chatom</a> 
              <br> <a class="county" href="#">Camdon</a>
              <br> <a class="county" href="#">Double Springs</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Alaska</a></h5>
              <a class="county" href="#">Aleutians E</a> 
              <br> <a class="county" href="#">Aleutians W</a> 
              <br> <a class="county" href="#">Anchorage</a> 
              <br> <a class="county" href="#">Bethel</a> 
              <br> <a class="county" href="#">Bristol Bay</a> 
              <br> <a class="county" href="#">Denali</a> 
              <br> <a class="county" href="#">Dillingham</a> 
              <br> <a class="county" href="#">Fairbanks NS</a> 
              <br> <a class="county" href="#">Haines</a> 
              <br> <a class="county" href="#">Hoonah&ndash;Angoon</a> 
              <br> <a class="county" href="#">Juneau</a> 
              <br> <a class="county" href="#">Kenai Peninsula</a> 
              <br> <a class="county" href="#">Ketchikan Gateway</a>
              <br> 
              <br> <a class="county" href="#">Kodiak Island</a> 
              <br> <a class="county" href="#">Kusilvak</a> 
              <br> <a class="county" href="#">Lake/Peninsula</a> 
              <br> <a class="county" href="#">Matanuska&ndash;S.</a> 
              <br> <a class="county" href="#">Nome</a> 
              <br> <a class="county" href="#">North Slope</a> 
              <br> <a class="county" href="#">NW Arctic</a> 
              <br> <a class="county" href="#">Petersburg</a> 
              <br> <a class="county" href="#">PWI &ndash; Hyder</a> 
              <br> <a class="county" href="#">Sitka</a> 
              <br> <a class="county" href="#">SE Fairbanks</a> 
              <br> <a class="county" href="#">Skagway</a> 
              <br> <a class="county" href="#">Valdez&ndash;Cordova</a> 
              <br> <a class="county" href="#">Wrangell</a> 
              <br> <a class="county" href="#">Yakutat</a> 
              <br> <a class="county" href="#">Yukon&ndash;Koyukuk</a>
            </td>
            <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Sand Point</a> 
              <br> <a class="county" href="#">Unalaska</a> 
              <br> <a class="county" href="#">Anchorage</a> 
              <br> <a class="county" href="#">Bethel</a> 
              <br> <a class="county" href="#">Naknek</a> 
              <br> <a class="county" href="#">Healy</a> 
              <br> <a class="county" href="#">Dillingham</a> 
              <br> <a class="county" href="#">Fairbanks</a>
              <br> <a class="county" href="#">Haines</a> 
              <br> <a class="county" href="#">Hoonah</a> 
              <br> <a class="county" href="#">Juneau</a> 
              <br> <a class="county" href="#">Soldotna</a> 
              <br> <a class="county" href="#">Ketchikan</a>
              <br>
              <br> <a class="county" href="#">Kodiak</a> 
              <br> <a class="county" href="#">Hooper Bay</a> 
              <br> <a class="county" href="#">King Salmon</a>
              <br> <a class="county" href="#">Palmer</a> 
              <br> <a class="county" href="#">Nome</a> 
              <br> <a class="county" href="#">Barrow</a> 
              <br> <a class="county" href="#">Kotzebue</a> 
              <br> <a class="county" href="#">Petersburg</a> 
              <br> <a class="county" href="#">Craig</a> 
              <br> <a class="county" href="#">Sitka</a> 
              <br> <a class="county" href="#">Deltana</a> 
              <br> <a class="county" href="#">Skagway</a> 
              <br> <a class="county" href="#">Valdez</a> 
              <br> <a class="county" href="#">Wrangell</a> 
              <br> <a class="county" href="#">Yakutat</a> 
              <br> <a class="county" href="#">Fort Yukon</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Arizona</a></h5>
              <a class="county" href="#">Apache</a> 
              <br> <a class="county" href="#">Cochise</a> 
              <br> <a class="county" href="#">Coconino</a> 
              <br> <a class="county" href="#">Gila</a> 
              <br> <a class="county" href="#">Graham</a> 
              <br> <a class="county" href="#">Greenlee</a>
              <br> <a class="county" href="#">La Paz</a> 
              <br> <a class="county" href="#">Maricopa</a> 
              <br> <a class="county" href="#">Mohave</a> 
              <br> <a class="county" href="#">Navajo</a> 
              <br> <a class="county" href="#">Chilton</a> 
              <br> <a class="county" href="#">Choctaw</a> 
              <br> <a class="county" href="#">Clarke</a>
              <br> 
              <br> <a class="county" href="#">Clay</a> 
              <br> <a class="county" href="#">Cleburne</a> 
              <br> <a class="county" href="#">Coffee</a> 
              <br> <a class="county" href="#">Colbert</a> 
              <br> <a class="county" href="#">Conecuh</a> 
              <br> <a class="county" href="#">Coosa</a> 
              <br> <a class="county" href="#">Covington</a> 
              <br> <a class="county" href="#">Crenshaw</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Dale</a> 
              <br> <a class="county" href="#">Dallas</a> 
              <br> <a class="county" href="#">Dekalb</a> 
              <br> <a class="county" href="#">Elmore</a> 
              <br> <a class="county" href="#">Escambia</a> 
              <br> <a class="county" href="#">Etowah</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Franklin</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Greene</a> 
              <br> <a class="county" href="#">Hale</a> 
              <br> <a class="county" href="#">Henry</a> 
              <br> <a class="county" href="#">Houston</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Jefferson</a> 
              <br> <a class="county" href="#">Lamar</a> 
              <br> <a class="county" href="#">Lauderdale</a> 
              <br> <a class="county" href="#">Lawrence</a> 
              <br> <a class="county" href="#">Lee</a> 
              <br> <a class="county" href="#">Limestone</a> 
              <br> <a class="county" href="#">Lowndes</a> 
              <br> <a class="county" href="#">Macon</a> 
              <br> <a class="county" href="#">Madison</a>
              <br> <a class="county" href="#">Marengo</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Marshall</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroe</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Morgan</a> 
              <br> <a class="county" href="#">Perry</a> 
              <br> <a class="county" href="#">Pickens</a> 
              <br> <a class="county" href="#">Pike</a> 
              <br> <a class="county" href="#">Randalph</a> 
              <br> <a class="county" href="#">Russell</a> 
              <br> <a class="county" href="#">St. Clair</a> 
              <br> <a class="county" href="#">Shelby</a> 
              <br> <a class="county" href="#">Sumter</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Tallapoosa</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Walker</a> 
              <br> <a class="county" href="#">Washington</a> 
              <br> <a class="county" href="#">Wilcox</a> 
              <br> <a class="county" href="#">Winston</a>
            </td>
            <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">St. Johns</a> 
              <br> <a class="county" href="#">Bisbee</a> 
              <br> <a class="county" href="#">Flagstaff</a> 
              <br> <a class="county" href="#">Globe</a> 
              <br> <a class="county" href="#">Safford</a> 
              <br> <a class="county" href="#">Clifton</a> 
              <br> <a class="county" href="#">Parker</a> 
              <br> <a class="county" href="#">Phoenix</a> 
              <br> <a class="county" href="#">Kingman</a> 
              <br> <a class="county" href="#">Holbrook</a> 
              <br> <a class="county" href="#">Clanton</a> 
              <br> <a class="county" href="#">Butler</a> 
              <br> <a class="county" href="#">Grove Hill</a>
              <br>
              <br> <a class="county" href="#">Ashland</a> 
              <br> <a class="county" href="#">Heflin</a> 
              <br> <a class="county" href="#">Elba</a> 
              <br> <a class="county" href="#">Tuscumbia</a> 
              <br> <a class="county" href="#">Evergreene</a> 
              <br> <a class="county" href="#">Rockford</a>
              <br> <a class="county" href="#">Anadalusia</a> 
              <br> <a class="county" href="#">Luverne</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Ozark</a> 
              <br> <a class="county" href="#">Selma</a> 
              <br> <a class="county" href="#">Fort Payne</a> 
              <br> <a class="county" href="#">Wetumka</a> 
              <br> <a class="county" href="#">Brewton</a> 
              <br> <a class="county" href="#">Gadson</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Russellville</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Eutaw</a> 
              <br> <a class="county" href="#">Greensborow</a> 
              <br> <a class="county" href="#">Abbeville</a> 
              <br> <a class="county" href="#">Dothan</a> 
              <br> <a class="county" href="#">Scottsboro</a> 
              <br> <a class="county" href="#">Birmingham</a> 
              <br> <a class="county" href="#">Vernon</a> 
              <br> <a class="county" href="#">Florence</a> 
              <br> <a class="county" href="#">Moulton</a> 
              <br> <a class="county" href="#">Opelika</a> 
              <br> <a class="county" href="#">Athens</a> 
              <br> <a class="county" href="#">Heyneville</a> 
              <br> <a class="county" href="#">Tuscegee</a> 
              <br> <a class="county" href="#">Huntsville</a> 
              <br> <a class="county" href="#">Linden</a> 
              <br> <a class="county" href="#">Hamilton</a> 
              <br> <a class="county" href="#">Guntersville</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroeville</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Decatur</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Carrollton</a> 
              <br> <a class="county" href="#">Troy</a> 
              <br> <a class="county" href="#">Wedowee</a> 
              <br> <a class="county" href="#">Phenix City</a> 
              <br> <a class="county" href="#">Ashville</a> 
              <br> <a class="county" href="#">Columbiana</a> 
              <br> <a class="county" href="#">Livingston</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Dadeville</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Jasper</a> 
              <br> <a class="county" href="#">Chatom</a> 
              <br> <a class="county" href="#">Camdon</a>
              <br> <a class="county" href="#">Double Springs</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:35px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Arkansas</a></h5>
              <a class="county" href="#">Arkansas</a> 
              <br> <a class="county" href="#">Ashley</a> 
              <br> <a class="county" href="#">Baxter</a> 
              <br> <a class="county" href="#">Benton</a>  
              <br> <a class="county" href="#">Boone</a> 
              <br> <a class="county" href="#">Bradley</a>
              <br> <a class="county" href="#">Calhoun</a> 
              <br> <a class="county" href="#">Carroll</a> 
              <br> <a class="county" href="#">Chicot</a>
              <br> <a class="county" href="#">Chilton</a>
              <br> <a class="county" href="#">Choctaw</a> 
              <br> <a class="county" href="#">Clark</a> 
              <br> <a class="county" href="#">Clarke</a>
              <br> 
              <br> <a class="county" href="#">Clay</a> 
              <br> <a class="county" href="#">Cleburne</a> 
              <br> <a class="county" href="#">Coffee</a> 
              <br> <a class="county" href="#">Colbert</a> 
              <br> <a class="county" href="#">Conecuh</a> 
              <br> <a class="county" href="#">Coosa</a> 
              <br> <a class="county" href="#">Covington</a> 
              <br> <a class="county" href="#">Crenshaw</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Dale</a> 
              <br> <a class="county" href="#">Dallas</a> 
              <br> <a class="county" href="#">Dekalb</a> 
              <br> <a class="county" href="#">Elmore</a> 
              <br> <a class="county" href="#">Escambia</a> 
              <br> <a class="county" href="#">Etowah</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Franklin</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Greene</a> 
              <br> <a class="county" href="#">Hale</a> 
              <br> <a class="county" href="#">Henry</a> 
              <br> <a class="county" href="#">Houston</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Jefferson</a> 
              <br> <a class="county" href="#">Lamar</a> 
              <br> <a class="county" href="#">Lauderdale</a> 
              <br> <a class="county" href="#">Lawrence</a> 
              <br> <a class="county" href="#">Lee</a> 
              <br> <a class="county" href="#">Limestone</a> 
              <br> <a class="county" href="#">Lowndes</a> 
              <br> <a class="county" href="#">Macon</a> 
              <br> <a class="county" href="#">Madison</a>
              <br> <a class="county" href="#">Marengo</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Marshall</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroe</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Morgan</a> 
              <br> <a class="county" href="#">Perry</a> 
              <br> <a class="county" href="#">Pickens</a> 
              <br> <a class="county" href="#">Pike</a> 
              <br> <a class="county" href="#">Randalph</a> 
              <br> <a class="county" href="#">Russell</a> 
              <br> <a class="county" href="#">St. Clair</a> 
              <br> <a class="county" href="#">Shelby</a> 
              <br> <a class="county" href="#">Sumter</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Tallapoosa</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Walker</a> 
              <br> <a class="county" href="#">Washington</a> 
              <br> <a class="county" href="#">Wilcox</a> 
              <br> <a class="county" href="#">Winston</a>
            </td>
            <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Stuttgart</a> 
              <br> <a class="county" href="#">Hamburg</a> 
              <br> <a class="county" href="#">Moountain Home</a> 
              <br> <a class="county" href="#">Bentonville</a> 
              <br> <a class="county" href="#">Harrison</a> 
              <br> <a class="county" href="#">Warren</a> 
              <br> <a class="county" href="#">Hampton</a> 
              <br> <a class="county" href="#">Berryville</a> 
              <br> <a class="county" href="#">Lake Village</a> 
              <br> <a class="county" href="#">Arkadelphia</a> 
              <br> <a class="county" href="#">Clanton</a> 
              <br> <a class="county" href="#">Butler</a> 
              <br> <a class="county" href="#">Grove Hill</a>
              <br>
              <br> <a class="county" href="#">Ashland</a> 
              <br> <a class="county" href="#">Heflin</a> 
              <br> <a class="county" href="#">Elba</a> 
              <br> <a class="county" href="#">Tuscumbia</a> 
              <br> <a class="county" href="#">Evergreene</a> 
              <br> <a class="county" href="#">Rockford</a>
              <br> <a class="county" href="#">Anadalusia</a> 
              <br> <a class="county" href="#">Luverne</a> 
              <br> <a class="county" href="#">Cullman</a> 
              <br> <a class="county" href="#">Ozark</a> 
              <br> <a class="county" href="#">Selma</a> 
              <br> <a class="county" href="#">Fort Payne</a> 
              <br> <a class="county" href="#">Wetumka</a> 
              <br> <a class="county" href="#">Brewton</a> 
              <br> <a class="county" href="#">Gadson</a> 
              <br> <a class="county" href="#">Fayette</a> 
              <br> <a class="county" href="#">Russellville</a> 
              <br> <a class="county" href="#">Geneva</a> 
              <br> <a class="county" href="#">Eutaw</a> 
              <br> <a class="county" href="#">Greensborow</a> 
              <br> <a class="county" href="#">Abbeville</a> 
              <br> <a class="county" href="#">Dothan</a> 
              <br> <a class="county" href="#">Scottsboro</a> 
              <br> <a class="county" href="#">Birmingham</a> 
              <br> <a class="county" href="#">Vernon</a> 
              <br> <a class="county" href="#">Florence</a> 
              <br> <a class="county" href="#">Moulton</a> 
              <br> <a class="county" href="#">Opelika</a> 
              <br> <a class="county" href="#">Athens</a> 
              <br> <a class="county" href="#">Heyneville</a> 
              <br> <a class="county" href="#">Tuscegee</a> 
              <br> <a class="county" href="#">Huntsville</a> 
              <br> <a class="county" href="#">Linden</a> 
              <br> <a class="county" href="#">Hamilton</a> 
              <br> <a class="county" href="#">Guntersville</a> 
              <br> <a class="county" href="#">Mobile</a> 
              <br> <a class="county" href="#">Monroeville</a> 
              <br> <a class="county" href="#">Montgomery</a> 
              <br> <a class="county" href="#">Decatur</a> 
              <br> <a class="county" href="#">Marion</a> 
              <br> <a class="county" href="#">Carrollton</a> 
              <br> <a class="county" href="#">Troy</a> 
              <br> <a class="county" href="#">Wedowee</a> 
              <br> <a class="county" href="#">Phenix City</a> 
              <br> <a class="county" href="#">Ashville</a> 
              <br> <a class="county" href="#">Columbiana</a> 
              <br> <a class="county" href="#">Livingston</a> 
              <br> <a class="county" href="#">Talladega</a> 
              <br> <a class="county" href="#">Dadeville</a> 
              <br> <a class="county" href="#">Tuscaloosa</a> 
              <br> <a class="county" href="#">Jasper</a> 
              <br> <a class="county" href="#">Chatom</a> 
              <br> <a class="county" href="#">Camdon</a>
              <br> <a class="county" href="#">Double Springs</a>
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


<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <a href="">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/california.php">California</a></h5>
              <a class="county" href="#">Alemeda</a>
              <br> <a class="county" href="#">Alpine</a>
              <br> <a class="county" href="#">Amador</a>
              <br> <a class="county" href="#">Butte</a>
              <br> <a class="county" href="#">Calaveras</a>
              <br> <a class="county" href="#">Colusa</a>
              <br> <a class="county" href="#">Contra</a>
              <br> <a class="county" href="#">Del Norte</a>
              <br> <a class="county" href="#">El Dorado</a>
              <br> <a class="county" href="#">Fresno</a>
              <br> <a class="county" href="#">Glenn</a>
              <br> <a class="county" href="#">Humboldt</a>
              <br> <a class="county" href="#">Imperial</a>
              <br>
              <br> <a class="county" href="#">Inyo</a>
              <br> <a class="county" href="#">Kern</a>
              <br> <a class="county" href="#">Kings</a>
              <br> <a class="county" href="#">Lake</a>
              <br> <a class="county" href="#">Lassen</a>
              <br> <a class="county" href="#">Los Angeles</a>
              <br> <a class="county" href="#">Madera</a>
              <br> <a class="county" href="#">Marin</a> 
              <br> <a class="county" href="#">Mariposa</a>
              <br> <a class="county" href="#">Mendocino</a>
              <br> <a class="county" href="#">Merced</a>
              <br> <a class="county" href="#">Modoc</a>
              <br> <a class="county" href="#">Mono</a>
              <br> <a class="county" href="#">Monterey</a>
              <br> <a class="county" href="#">Napa</a>
              <br> <a class="county" href="#">Nevada</a> 
              <br> <a class="county" href="#">Orange</a>
              <br> <a class="county" href="#">Plancer</a>
              <br> <a class="county" href="#">Plumas</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">San Benito</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">San Juaquin</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">San Mateo</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">Santa Clara</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Shasta</a>
              <br> <a class="county" href="#">Sierra</a>
              <br> <a class="county" href="#">Siskiyou</a>
              <br> <a class="county" href="#">Solano</a>
              <br> <a class="county" href="#">Sonoma</a>
              <br> <a class="county" href="#">Stanislaus</a>
              <br> <a class="county" href="#">Sutter</a>
              <br> <a class="county" href="#">Tehama</a>
              <br> <a class="county" href="#">Trinity</a>
              <br> <a class="county" href="#">Tulare</a>
              <br> <a class="county" href="#">Tuolumne</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Yolo</a>
              <br> <a class="county" href="#">Yuba</a>
            </td>
             <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Oakland</a> 
              <br> <a class="county" href="#">Markleeville</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Oroville</a> 
              <br> <a class="county" href="#">San Andreas</a> 
              <br> <a class="county" href="#">Colusa</a> 
              <br> <a class="county" href="#">Martinez</a> 
              <br> <a class="county" href="#">Crescent City</a>
              <br> <a class="county" href="#">Placerville</a> 
              <br> <a class="county" href="#">Fresno</a> 
              <br> <a class="county" href="#">Willows</a> 
              <br> <a class="county" href="#">Eureka</a> 
              <br> <a class="county" href="#">El Centro</a>
              <br>
              <br> <a class="county" href="#">Independence</a> 
              <br> <a class="county" href="#">Bakers Field</a> 
              <br> <a class="county" href="#">Hanford/a>
              <br> <a class="county" href="#">Lakeport</a> 
              <br> <a class="county" href="#">Susanville</a> 
              <br> <a class="county" href="#">Los Angeles</a> 
              <br> <a class="county" href="#">Madera</a> 
              <br> <a class="county" href="#">San Rafael</a> 
              <br> <a class="county" href="#">Mariposa</a> 
              <br> <a class="county" href="#">Ukiah</a> 
              <br> <a class="county" href="#">Merced</a> 
              <br> <a class="county" href="#">Alturas</a> 
              <br> <a class="county" href="#">Bridgeport</a> 
              <br> <a class="county" href="#">Salinas</a> 
              <br> <a class="county" href="#">Napa</a> 
              <br> <a class="county" href="#">Nevada City</a>
              <br> <a class="county" href="#">Santa Ana</a>
              <br> <a class="county" href="#">Auburn</a>
              <br> <a class="county" href="#">Quicny</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">Hollister</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">Stockton</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">Redwood City</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">San Jose</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Redding</a>
              <br> <a class="county" href="#">Downieville</a>
              <br> <a class="county" href="#">Yreka</a>
              <br> <a class="county" href="#">Fairfield</a>
              <br> <a class="county" href="#">Santa Rosa</a>
              <br> <a class="county" href="#">Medesto</a>
              <br> <a class="county" href="#">Yuba City</a>
              <br> <a class="county" href="#">Red Bluff</a>
              <br> <a class="county" href="#">Weaverville</a>
              <br> <a class="county" href="#">Visalia</a>
              <br> <a class="county" href="#">Sonora</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Woodland</a>
              <br> <a class="county" href="#">Marysville</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/california.php">Colorado</a></h5>
              <a class="county" href="#">Alemeda</a>
              <br> <a class="county" href="#">Alpine</a>
              <br> <a class="county" href="#">Amador</a>
              <br> <a class="county" href="#">Butte</a>
              <br> <a class="county" href="#">Calaveras</a>
              <br> <a class="county" href="#">Colusa</a>
              <br> <a class="county" href="#">Contra</a>
              <br> <a class="county" href="#">Del Norte</a>
              <br> <a class="county" href="#">El Dorado</a>
              <br> <a class="county" href="#">Fresno</a>
              <br> <a class="county" href="#">Glenn</a>
              <br> <a class="county" href="#">Humboldt</a>
              <br> <a class="county" href="#">Imperial</a>
              <br>
              <br> <a class="county" href="#">Inyo</a>
              <br> <a class="county" href="#">Kern</a>
              <br> <a class="county" href="#">Kings</a>
              <br> <a class="county" href="#">Lake</a>
              <br> <a class="county" href="#">Lassen</a>
              <br> <a class="county" href="#">Los Angeles</a>
              <br> <a class="county" href="#">Madera</a>
              <br> <a class="county" href="#">Marin</a> 
              <br> <a class="county" href="#">Mariposa</a>
              <br> <a class="county" href="#">Mendocino</a>
              <br> <a class="county" href="#">Merced</a>
              <br> <a class="county" href="#">Modoc</a>
              <br> <a class="county" href="#">Mono</a>
              <br> <a class="county" href="#">Monterey</a>
              <br> <a class="county" href="#">Napa</a>
              <br> <a class="county" href="#">Nevada</a> 
              <br> <a class="county" href="#">Orange</a>
              <br> <a class="county" href="#">Plancer</a>
              <br> <a class="county" href="#">Plumas</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">San Benito</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">San Juaquin</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">San Mateo</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">Santa Clara</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Shasta</a>
              <br> <a class="county" href="#">Sierra</a>
              <br> <a class="county" href="#">Siskiyou</a>
              <br> <a class="county" href="#">Solano</a>
              <br> <a class="county" href="#">Sonoma</a>
              <br> <a class="county" href="#">Stanislaus</a>
              <br> <a class="county" href="#">Sutter</a>
              <br> <a class="county" href="#">Tehama</a>
              <br> <a class="county" href="#">Trinity</a>
              <br> <a class="county" href="#">Tulare</a>
              <br> <a class="county" href="#">Tuolumne</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Yolo</a>
              <br> <a class="county" href="#">Yuba</a>
            </td>
             <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Oakland</a> 
              <br> <a class="county" href="#">Markleeville</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Oroville</a> 
              <br> <a class="county" href="#">San Andreas</a> 
              <br> <a class="county" href="#">Colusa</a> 
              <br> <a class="county" href="#">Martinez</a> 
              <br> <a class="county" href="#">Crescent City</a>
              <br> <a class="county" href="#">Placerville</a> 
              <br> <a class="county" href="#">Fresno</a> 
              <br> <a class="county" href="#">Willows</a> 
              <br> <a class="county" href="#">Eureka</a> 
              <br> <a class="county" href="#">El Centro</a>
              <br> 
              <br> <a class="county" href="#">Independence</a> 
              <br> <a class="county" href="#">Bakers Field</a> 
              <br> <a class="county" href="#">Hanford/a>
              <br> <a class="county" href="#">Lakeport</a> 
              <br> <a class="county" href="#">Susanville</a> 
              <br> <a class="county" href="#">Los Angeles</a> 
              <br> <a class="county" href="#">Madera</a> 
              <br> <a class="county" href="#">San Rafael</a> 
              <br> <a class="county" href="#">Mariposa</a> 
              <br> <a class="county" href="#">Ukiah</a> 
              <br> <a class="county" href="#">Merced</a> 
              <br> <a class="county" href="#">Alturas</a> 
              <br> <a class="county" href="#">Bridgeport</a> 
              <br> <a class="county" href="#">Salinas</a> 
              <br> <a class="county" href="#">Napa</a> 
              <br> <a class="county" href="#">Nevada City</a>
              <br> <a class="county" href="#">Santa Ana</a>
              <br> <a class="county" href="#">Auburn</a>
              <br> <a class="county" href="#">Quicny</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">Hollister</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">Stockton</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">Redwood City</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">San Jose</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Redding</a>
              <br> <a class="county" href="#">Downieville</a>
              <br> <a class="county" href="#">Yreka</a>
              <br> <a class="county" href="#">Fairfield</a>
              <br> <a class="county" href="#">Santa Rosa</a>
              <br> <a class="county" href="#">Medesto</a>
              <br> <a class="county" href="#">Yuba City</a>
              <br> <a class="county" href="#">Red Bluff</a>
              <br> <a class="county" href="#">Weaverville</a>
              <br> <a class="county" href="#">Visalia</a>
              <br> <a class="county" href="#">Sonora</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Woodland</a>
              <br> <a class="county" href="#">Marysville</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/california.php">Connecticut</a></h5>
              <a class="county" href="#">Alemeda</a>
              <br> <a class="county" href="#">Alpine</a>
              <br> <a class="county" href="#">Amador</a>
              <br> <a class="county" href="#">Butte</a>
              <br> <a class="county" href="#">Calaveras</a>
              <br> <a class="county" href="#">Colusa</a>
              <br> <a class="county" href="#">Contra</a>
              <br> <a class="county" href="#">Del Norte</a>
              <br> <a class="county" href="#">El Dorado</a>
              <br> <a class="county" href="#">Fresno</a>
              <br> <a class="county" href="#">Glenn</a>
              <br> <a class="county" href="#">Humboldt</a>
              <br> <a class="county" href="#">Imperial</a>
              <br>
              <br> <a class="county" href="#">Inyo</a>
              <br> <a class="county" href="#">Kern</a>
              <br> <a class="county" href="#">Kings</a>
              <br> <a class="county" href="#">Lake</a>
              <br> <a class="county" href="#">Lassen</a>
              <br> <a class="county" href="#">Los Angeles</a>
              <br> <a class="county" href="#">Madera</a>
              <br> <a class="county" href="#">Marin</a> 
              <br> <a class="county" href="#">Mariposa</a>
              <br> <a class="county" href="#">Mendocino</a>
              <br> <a class="county" href="#">Merced</a>
              <br> <a class="county" href="#">Modoc</a>
              <br> <a class="county" href="#">Mono</a>
              <br> <a class="county" href="#">Monterey</a>
              <br> <a class="county" href="#">Napa</a>
              <br> <a class="county" href="#">Nevada</a> 
              <br> <a class="county" href="#">Orange</a>
              <br> <a class="county" href="#">Plancer</a>
              <br> <a class="county" href="#">Plumas</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">San Benito</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">San Juaquin</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">San Mateo</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">Santa Clara</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Shasta</a>
              <br> <a class="county" href="#">Sierra</a>
              <br> <a class="county" href="#">Siskiyou</a>
              <br> <a class="county" href="#">Solano</a>
              <br> <a class="county" href="#">Sonoma</a>
              <br> <a class="county" href="#">Stanislaus</a>
              <br> <a class="county" href="#">Sutter</a>
              <br> <a class="county" href="#">Tehama</a>
              <br> <a class="county" href="#">Trinity</a>
              <br> <a class="county" href="#">Tulare</a>
              <br> <a class="county" href="#">Tuolumne</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Yolo</a>
              <br> <a class="county" href="#">Yuba</a>
            </td>
             <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Oakland</a> 
              <br> <a class="county" href="#">Markleeville</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Oroville</a> 
              <br> <a class="county" href="#">San Andreas</a> 
              <br> <a class="county" href="#">Colusa</a> 
              <br> <a class="county" href="#">Martinez</a> 
              <br> <a class="county" href="#">Crescent City</a>
              <br> <a class="county" href="#">Placerville</a> 
              <br> <a class="county" href="#">Fresno</a> 
              <br> <a class="county" href="#">Willows</a> 
              <br> <a class="county" href="#">Eureka</a> 
              <br> <a class="county" href="#">El Centro</a>
              <br> 
              <br> <a class="county" href="#">Independence</a> 
              <br> <a class="county" href="#">Bakers Field</a> 
              <br> <a class="county" href="#">Hanford/a>
              <br> <a class="county" href="#">Lakeport</a> 
              <br> <a class="county" href="#">Susanville</a> 
              <br> <a class="county" href="#">Los Angeles</a> 
              <br> <a class="county" href="#">Madera</a> 
              <br> <a class="county" href="#">San Rafael</a> 
              <br> <a class="county" href="#">Mariposa</a> 
              <br> <a class="county" href="#">Ukiah</a> 
              <br> <a class="county" href="#">Merced</a> 
              <br> <a class="county" href="#">Alturas</a> 
              <br> <a class="county" href="#">Bridgeport</a> 
              <br> <a class="county" href="#">Salinas</a> 
              <br> <a class="county" href="#">Napa</a> 
              <br> <a class="county" href="#">Nevada City</a>
              <br> <a class="county" href="#">Santa Ana</a>
              <br> <a class="county" href="#">Auburn</a>
              <br> <a class="county" href="#">Quicny</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">Hollister</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">Stockton</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">Redwood City</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">San Jose</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Redding</a>
              <br> <a class="county" href="#">Downieville</a>
              <br> <a class="county" href="#">Yreka</a>
              <br> <a class="county" href="#">Fairfield</a>
              <br> <a class="county" href="#">Santa Rosa</a>
              <br> <a class="county" href="#">Medesto</a>
              <br> <a class="county" href="#">Yuba City</a>
              <br> <a class="county" href="#">Red Bluff</a>
              <br> <a class="county" href="#">Weaverville</a>
              <br> <a class="county" href="#">Visalia</a>
              <br> <a class="county" href="#">Sonora</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Woodland</a>
              <br> <a class="county" href="#">Marysville</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <div class="caption" style="font-size:13px; margin-left:30px">
        <table style="width:100%">
          <tr>
            <td style="vertical-align:top">
              <h5><a href="http://localhost:8888/Hilix/HD/california.php">Deleware</a></h5>
              <a class="county" href="#">Alemeda</a>
              <br> <a class="county" href="#">Alpine</a>
              <br> <a class="county" href="#">Amador</a>
              <br> <a class="county" href="#">Butte</a>
              <br> <a class="county" href="#">Calaveras</a>
              <br> <a class="county" href="#">Colusa</a>
              <br> <a class="county" href="#">Contra</a>
              <br> <a class="county" href="#">Del Norte</a>
              <br> <a class="county" href="#">El Dorado</a>
              <br> <a class="county" href="#">Fresno</a>
              <br> <a class="county" href="#">Glenn</a>
              <br> <a class="county" href="#">Humboldt</a>
              <br> <a class="county" href="#">Imperial</a>
              <br>
              <br> <a class="county" href="#">Inyo</a>
              <br> <a class="county" href="#">Kern</a>
              <br> <a class="county" href="#">Kings</a>
              <br> <a class="county" href="#">Lake</a>
              <br> <a class="county" href="#">Lassen</a>
              <br> <a class="county" href="#">Los Angeles</a>
              <br> <a class="county" href="#">Madera</a>
              <br> <a class="county" href="#">Marin</a> 
              <br> <a class="county" href="#">Mariposa</a>
              <br> <a class="county" href="#">Mendocino</a>
              <br> <a class="county" href="#">Merced</a>
              <br> <a class="county" href="#">Modoc</a>
              <br> <a class="county" href="#">Mono</a>
              <br> <a class="county" href="#">Monterey</a>
              <br> <a class="county" href="#">Napa</a>
              <br> <a class="county" href="#">Nevada</a> 
              <br> <a class="county" href="#">Orange</a>
              <br> <a class="county" href="#">Plancer</a>
              <br> <a class="county" href="#">Plumas</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">San Benito</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">San Juaquin</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">San Mateo</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">Santa Clara</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Shasta</a>
              <br> <a class="county" href="#">Sierra</a>
              <br> <a class="county" href="#">Siskiyou</a>
              <br> <a class="county" href="#">Solano</a>
              <br> <a class="county" href="#">Sonoma</a>
              <br> <a class="county" href="#">Stanislaus</a>
              <br> <a class="county" href="#">Sutter</a>
              <br> <a class="county" href="#">Tehama</a>
              <br> <a class="county" href="#">Trinity</a>
              <br> <a class="county" href="#">Tulare</a>
              <br> <a class="county" href="#">Tuolumne</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Yolo</a>
              <br> <a class="county" href="#">Yuba</a>
            </td>
             <td style="vertical-align:top">
              <h5>&#160</h5>
              <a class="county" href="#">Oakland</a> 
              <br> <a class="county" href="#">Markleeville</a> 
              <br> <a class="county" href="#">Jackson</a> 
              <br> <a class="county" href="#">Oroville</a> 
              <br> <a class="county" href="#">San Andreas</a> 
              <br> <a class="county" href="#">Colusa</a> 
              <br> <a class="county" href="#">Martinez</a> 
              <br> <a class="county" href="#">Crescent City</a>
              <br> <a class="county" href="#">Placerville</a> 
              <br> <a class="county" href="#">Fresno</a> 
              <br> <a class="county" href="#">Willows</a> 
              <br> <a class="county" href="#">Eureka</a> 
              <br> <a class="county" href="#">El Centro</a>
              <br>
              <br> <a class="county" href="#">Independence</a> 
              <br> <a class="county" href="#">Bakers Field</a> 
              <br> <a class="county" href="#">Hanford/a>
              <br> <a class="county" href="#">Lakeport</a> 
              <br> <a class="county" href="#">Susanville</a> 
              <br> <a class="county" href="#">Los Angeles</a> 
              <br> <a class="county" href="#">Madera</a> 
              <br> <a class="county" href="#">San Rafael</a> 
              <br> <a class="county" href="#">Mariposa</a> 
              <br> <a class="county" href="#">Ukiah</a> 
              <br> <a class="county" href="#">Merced</a> 
              <br> <a class="county" href="#">Alturas</a> 
              <br> <a class="county" href="#">Bridgeport</a> 
              <br> <a class="county" href="#">Salinas</a> 
              <br> <a class="county" href="#">Napa</a> 
              <br> <a class="county" href="#">Nevada City</a>
              <br> <a class="county" href="#">Santa Ana</a>
              <br> <a class="county" href="#">Auburn</a>
              <br> <a class="county" href="#">Quicny</a>
              <br> <a class="county" href="#">Riverside</a>
              <br> <a class="county" href="#">Sacramento</a>
              <br> <a class="county" href="#">Hollister</a>
              <br> <a class="county" href="#">San Bernardino</a>
              <br> <a class="county" href="#">San Diego</a>
              <br> <a class="county" href="#">San Francisco</a>
              <br> <a class="county" href="#">Stockton</a>
              <br> <a class="county" href="#">San Luis Obispo</a>
              <br> <a class="county" href="#">Redwood City</a>
              <br> <a class="county" href="#">Santa Barbara</a>
              <br> <a class="county" href="#">San Jose</a>
              <br> <a class="county" href="#">Santa Cruz</a>
              <br> <a class="county" href="#">Redding</a>
              <br> <a class="county" href="#">Downieville</a>
              <br> <a class="county" href="#">Yreka</a>
              <br> <a class="county" href="#">Fairfield</a>
              <br> <a class="county" href="#">Santa Rosa</a>
              <br> <a class="county" href="#">Medesto</a>
              <br> <a class="county" href="#">Yuba City</a>
              <br> <a class="county" href="#">Red Bluff</a>
              <br> <a class="county" href="#">Weaverville</a>
              <br> <a class="county" href="#">Visalia</a>
              <br> <a class="county" href="#">Sonora</a>
              <br> <a class="county" href="#">Ventura</a>
              <br> <a class="county" href="#">Woodland</a>
              <br> <a class="county" href="#">Marysville</a>
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

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>District of Columbia</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Florida</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Georgia</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Hawaii</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Idaho</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Illenois</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Indiana</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Iowa</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Kansas</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Kentucky</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Louisiana</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Maine</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Maryland</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Massachusetts</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Michigan</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Minnesota</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Mississipi</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Missouri</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Montana</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Nebraska</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Nevada</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>New Hampshire</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>New Jersey</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>New Mexico</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>New York</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>North Carolina</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>North Dekota</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Ohio</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Oklahoma</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Oregon</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Pennsylvania</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Puerto Rico</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Rhode Island</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>South Carolina</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>South Dekota</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Tennesee</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<div style="background:#f8f8f8; padding:20px"></div> 

<table style="width:100%; border-bottom:50px solid #f8f8f8"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:50px">
        <h5>Texas</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Utah</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:55px">
        <h5>Vermont</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:60px">
        <h5>Verginia</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>

<!-- ____________________________________________________________________ Footer ____________________________________________________________ -->

<footer>
    <div class="navbar navbar-inverse navbar-bottom" style="border:none; padding-top:40px; padding-bottom:40px">
        <table style="width:100%;"> <!-- border-top:solid 1px lightgrey; -->
<tr>
    <td height="300" 
        style=  "background-image:url(1.jpg); background-repeat: no-repeat"> <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
    
    <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:40px">
         <h5>Washington</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail"> 
      <br>
      <div class="caption" style="font-size:13px; margin-left:24px">
        <h5>West Veriginia</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:40px">
        <h5>Wisconsin</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="thumbnail">
      <br>
      <div class="caption" style="font-size:13px; margin-left:21px">
        <h5>Wyoming</h5>
        Civil engineering <br> Software engineering <br> Electrical engineering<br>
        Chemical engineering <br> mechanical engineering 
      </div>
    </div>
  </div>

</div>

    </td>
</tr>
</table>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>