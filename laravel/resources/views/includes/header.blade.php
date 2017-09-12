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
    background-color: #fcfcfc;
    opacity: 0.8;
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
</style>
</head>
<body>

<!-- Navigation Bar links -->
<ul class="topnav">
  <li class="right"><a href="/contact">CONTACT</a></li>
  <li class="right"><a href="/lucmaps">LUC MAPS</a></li>
  <li class="right"><a href="/selfservice">SELF-SERVICE</a></li>
  <li class="right"><a href="/dockets">DOCKETS</a></li>
  <li class="right"><a href="/about">ABOUT</a></li>
  <li class="right"><a href="/">HOME</a></li>
  <li><b>LAND USE COMMISSION</b></li>
</ul>

</body>
</html>
