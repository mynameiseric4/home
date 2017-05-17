<!DOCTYPE html>
<html>
<head>
<title>Hilix &middot; Algebra</title>
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
    padding-top: 1px;
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
a.dropdown-toggle{text-decoration: none}
a.dropdown-toggle:hover{color: lightgrey}
a.title{color:#BBD0DD; text-decoration: none}


.btn-default:hover{
  box-shadow: 0 0 0 white;
  border: 1px solid none;
  transition: background .1s, border .1s;
}
.btn-default{border-radius: 0%; background: none; border: none; color:white;}
.btn-frame{color:grey;}

.thumbnail{
  font-size:13px;
  background: linear-gradient(to bottom right, lightgrey, #F2F3F4);
  border: none;
  border-radius: 0%;
  height: 300px;
  text-align: left;
  box-shadow: 2px 2px 2px lightgrey;
  overflow: auto;
  padding: 20px 0 0 30px;
}
.caption{font-family:'Avenir', 'light'; color: white !important; margin-top:0px;}

</style>
</head>

<!-- ________________________________________________________________________________________________________________________________________________
         
                                                                                 Body

_________________________________________________________________________________________________________________________________________________ -->

<body>

<!-- Navbar One -->
<nav class="navbar navbar-one" style="font-family: 'Avenir', 'light'; font-size:13px; padding:0px; margin-top:-10px; margin-bottom:-7px">
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
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <div style="margin: 19px 15px 0 15px">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course Tracks <span class="caret"></span></a>
          <ul class="dropdown-menu" style="width:1070.9%; background: #BBD0DD; opacity: .9; border: 1px solid #BBD0DD; margin-top:6px; border-radius:0%">
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
                    Operatings Systems
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
        </div>
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
                    style="margin-top:2px; font-size:13px; border-radius:0%; background:linear-gradient(lightgrey, grey); margin-right:-15px;
                    border: none; padding:25px">
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
        <h2 style="font-family:'Open Sans', 'sans-serif'; float:left; padding-left:10px; color:lightgrey; margin-left:65px; padding-bottom:2px; cursor:default">
          <a class="title" href="http://localhost:8888/Hilix/HD/database.php"> <i class="fa fa-database" aria-hidden="true"></i> hilix</a> 
          <span style="color:#9d9d9d; font-size:15px">ALGEBRA</span>
        <h2>
      </p>

    </div>

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
          <a class="one" style="margin-right: 10px">Mathematics</a>
          <a class="one" style="margin-right:10px">Applied mathematics</a>
          <a class="one" style="margin-right:30px">Statistics</a>
          <span class="glyphicon glyphicon-triangle-left" style="color:#9d9d9d"></span>
          <a class="one" href="http://localhost:8888/Hilix/HD/algebra.php" style="margin-left:10px">Foundations</a>
          <a class="one" style="margin-left:10px">Linear algebra</a>
          <a class="one" style="margin-left:10px">Abstract algebra</a>
          <a class="one" href="http://localhost:8888/Hilix/HD/california.php" style="margin-left:10px">Universal algebra</a>
          <a class="one" style="margin-left:10px">Computer algebra</a>
          <a class="one" style="margin-left:10px"><span class="glyphicon glyphicon-triangle-right"></span></a>
          <a class="one" style="margin-left:30px">Physics</a>
          <a class="one" style="margin-left:10px">Computer science</a>
          <a class="one" style="margin-left:10px">Linguistic theory</a>
        </td>
    </tr>
</table>

<!-- Mathematics -->
<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
    <!-- Src: <a href="http://www.freepik.com/free-vector/polygonal-abstract-background-design_719712.htm">Designed by Freepik</a> -->
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/algebra.php">Foundations</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic number theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Linear algebra</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Calculus</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Real analysis</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Measure theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Complex analysis</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Harmonic analysis</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Numerical analysis</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Functional analysis</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Calculus of variations</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential equations</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Multivariable calculus</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Abstract algebra</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Objects</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Functors</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Categories</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Morphisms</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Limits and colimits</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Equivalent categories</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal constructions</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Natural transformations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Applications of categories</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Higher&ndash;dimensional categories</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Universal algebra</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Order theory</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Graph theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Design theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Matroid theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Partition theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Finite geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Analytic combinatorics</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Infinitary combinatorics</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic combinatorics</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Enumerative combinatorics</a>
                    <br>
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


<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Computer algebra</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Stability</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">OL/CL control</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Control strategies</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">System interfacing</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Analysis techniques</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Control specification</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear control theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Classical control theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Nonlinear control theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Controlability / observability</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Algebraic topology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Cryptanalysis</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Cryptosystems</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Steganography</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Integer factorization</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Cryptographic primitives</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Public&ndash;key cryptography</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Quantom Cryptography</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Multivariate cryptography</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Symmetric&ndash;key cryptography</a> 
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Differential Algebra</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Local dynamics</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Ergodic systems</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Bifurcation theory</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Complex dynamics</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Behavioral Modeling</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear dynamical systems</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Discrete dnamical systems</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract dynamical systems</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Multidimensional generalization</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Algebraic Geomotry</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Geometry</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Graph theory</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical biology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical chemistry</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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


<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical economics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical finance</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical optimization</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical statistics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Number theory</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Probability theory</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Topology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<div style="background:#f8f8f8; padding:0 0 20px 20px; font-family:'Avenir', 'light'; color: #aaa">Physics</div>

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Astrophysics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Atomic physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Classical mechanics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Condensed matter physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Geophysics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">High energy physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Molecular physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Optical physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Particle physics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Quantum theory</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Relativity theory</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Statistical machanics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<div style="background:#f8f8f8; padding:0 0 20px 20px; font-family:'Avenir', 'light'; color: #aaa">Computer science</div>

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Artificial Intelligence</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Biocomputation</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Computational chemistry</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Computational economics</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Computational physics</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Information technology</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Programming language theory</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php"></a>Sensory computation</h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Software engineering</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Symbolic computation systems</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Systems architecture</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Theoretical computer science</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
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

<div style="background:#f8f8f8; padding:0 0 20px 20px; font-family:'Avenir', 'light'; color: #aaa">Linguistics</div>

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Computational linguistics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Corpus linguistics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Mathematical linguistics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Morphology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
        </div>
      </div>
    </td>
  </tr>
</table>

<table style="width:100%; border-bottom:50px solid #f8f8f8">
  <tr>
    <td height="300" style=  "background: radial-gradient(white, #f2f2f2, lightgrey)"> 
      <div class="row" style="width:100%; padding-left:32px; padding-top:20px">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Phonology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Semantics</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Syntax</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="thumbnail">
            <div class="caption">
              <h5><a href="http://localhost:8888/Hilix/HD/alabama.php">Typology</a></h5>
              <table style="width:100%; border-left: 1px solid white">
                <tr>
                  <td style="vertical-align:top">
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Foundations</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Linear Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Abstract Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Universal Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Computer Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Topology</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Differential Algebra</a> 
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Geometry</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Combinatorial Algebra</a>
                    <br>
                    &mdash;<i class="fa fa-database" aria-hidden="true"></i> <a class="county" href="#">Algebraic Number Theory</a>
                    <br>
                  </td>
                </tr>
              </table>
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