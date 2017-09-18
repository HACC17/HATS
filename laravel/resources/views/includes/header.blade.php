<!DOCTYPE html>
<!-- 
Land Use Commission header file
This file contains a standardized responsive navigation bar accross all pages.
-->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/app.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}
/* Style for the nav bar */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(248,248,248);
    position: fixed;
    z-index: 1;
    width: 100%;
    top: 0;
}

ul.topnav li {float: left;}
/* Style for list a tags */
ul.topnav li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* Style for list b tags */
ul.topnav li b {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Styles for hover over */
ul.topnav li a:hover:not(.active) {background-color: #f4f4f4;}
/* Styles for active */
ul.topnav li a.active {background-color: #e1dfdf;}
/*Shifts text the right class to right of nav bar */
ul.topnav li.right {float: right;}

/*Responds to type of device is viewing */
@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
*********************************************************************
.container {
    overflow: hidden;
    background-color: #fcfcfc;
    font-family: CheapProFonts Serif Pro;
}
.container a {
    float: center;
    color: white;
    text-align: center;
    text-decoration: none;
}
.dropdown {
    float: left;
    overflow: hidden;
}
.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    text-decoration: none;
    font-family: Serif;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fcfcfc	;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    position: fixed;
}
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;	

}
.dropdown-content a:hover {
    background-color: #ddd;
}
.dropdown:hover .dropdown-content {
    display: block;
}
************************************************************************
.textcontainer {
   width: 80%;
   margin-right: auto;
   margin-left: auto;
   margin-top: 5%;
   background-color: rgba(248,248,248,0.9);
   padding-left: 20px;
   padding-right: 20px;
   padding-bottom: 20px;
   padding-top: 20px;
   box-shadow: 0px 0px 20px 1px #888888;
}
.textcontainer a {
    float: center;
    color: black;
    text-align: center;
    text-decoration: none;
}
</style>
</head>
<body>

<!------Navigation Bar links------>
<ul class="topnav">
<!------Contact------>
  <li class="right"><a href="/contact">CONTACT</a></li>
<!------LUC Maps------>
  <li class="right"><a href="/lucmaps">LUC MAPS</a></li>
<!------Procedures-------->
<li class="right">
    <div class="container">
      <div class="dropdown">
		<a href="procedures">PROCEDURES</a>
        <div class="dropdown-content">
		  <a href="procedures#ahp">Affordable Housing Projects</a>
		  <a href="procedures#dmc">Decision-making Criteria</a>
		  <a href="procedures#dbap">District Boundary Amendment Procedures</a>
		  <a href="procedures#far">Fifteen Acre Rule</a>
		  <a href="procedures#qjp">Quasi-judicial Proceedings</a>
		  <a href="procedures#supp">Special Use Permit Procedures</a>
        </div>
      </div>
    </div>
</li>
<!------Self Service------>
  <li class="right">
    <div class="container">
      <div class="dropdown">
        <a href="selfservice">SELF-SERVICE</a>
        <div class="dropdown-content">
        <a href="faq">FAQ</a>
        <a href="first_time">First Time</a>
        </div>
      </div>
    </div>
  </li>

<!------Dockets------>
  <li class="right">
    <div class="container">
      <div class="dropdown">
        <a href="dockets">DOCKETS</a>
        <div class="dropdown-content">
        <a href="pending">Pending Dockets</a>
        <a href="completed">Completed Dockets</a>
        <a href="search">Search A Docket</a>
        </div>
      </div>
    </div>
  </li>
<!------About------>
<li class="right">
    <div class="container">
      <div class="dropdown">
		<a href="about">ABOUT</a>
        <div class="dropdown-content">
		  <a href="history">History</a>
		  <a href="members">Members & Staff</a>
		  <a href="state_land_use_districts">State Land Use Districts</a>
        </div>
      </div>
    </div>
</li>
<!------Home------>
  <li class="right"><a href="/">HOME</a></li>
  <li><b>LAND USE COMMISSION</b></li>
</ul>


</body>
</html>
