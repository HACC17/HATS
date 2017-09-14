<!DOCTYPE html>
<!-- 
Land Use Commission header file
This file contains a standardized responsive navigation bar accross all pages.
-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}
/* Style for the nav bar */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
<<<<<<< HEAD
    background-color: rgba(248,248,248,0.7);
    opacity: 0.8;
=======
    background-color: #5F6A6A;

    z-index: 500;


>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
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
<<<<<<< HEAD
}
=======
    position: fixed;
}

>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
.container a {
    float: center;
    font-size: 16px;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
<<<<<<< HEAD
.dropdown {
    float: left;
    overflow: hidden;
}
=======

.dropdown {
    float: left;
    overflow: hidden;

}

>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    text-decoration: none;
    font-family: Serif;
<<<<<<< HEAD
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fcfcfc	;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
=======
		
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #5F6A6A	;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)

}

>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;	
<<<<<<< HEAD
}
.dropdown-content a:hover {
    background-color: #ddd;
}
.dropdown:hover .dropdown-content {
    display: block;
=======
 
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
    
>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
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
<<<<<<< HEAD

<!------Procedures-------->
=======
>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
  <li class="right">
    <div class="container">
      <div class="dropdown">
        <button class="dropbtn">PROCEDURES</button>
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
<<<<<<< HEAD
</li>'

<!------Self Service------>
  <li class="right">
  <div class="container">
      <div class="dropdown">
        <a href="/selfservice">SELF-SERVICE</a>
        <div class="dropdown-content">
        <a href="/faq">FAQ</a>
        <a href="/first_time">First Time</a>
        <a href="/returning">Returning</a>
        </div>
      </div>
    </div>
</li>

<!------Dockets------>
=======
  </li>
  <li class="right"><a href="/selfservice">SELF-SERVICE</a></li>
>>>>>>> b98c733d01df3aa9b7cda0c4244f1aff31928d4e
  <li class="right"><a href="/dockets">DOCKETS</a></li>
<!------About------>
  <li class="right"><a href="/about">ABOUT</a></li>
<!------Home------>
  <li class="right"><a href="/">HOME</a></li>
  <li><b>LAND USE COMMISSION</b></li>
</ul>


</body>
</html>
