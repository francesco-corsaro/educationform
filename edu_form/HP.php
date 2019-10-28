<html>
<head>
<style type="text/css">
body {
  margin: 0;
  font-family: Helvetica, sans-serif;
  background-color: #f4f4f4;
}
p {
    color: #000000;
 }
a {
  color: #CE5937;
}

/* header */

.header {
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: fixed;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f4;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
}

.header .logo {
  display: block;
  float: left;
  font-size: 2em;
  padding: 10px 20px;
  text-decoration: none;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }
}
/* Left column */
.centcolumn {   
  float: left;
  width: 100%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
<title>Edu Form</title>
</head>
<body>
<header class="header">
  <a href="" class="logo">EduForm</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="#work">Home</a></li>
    <li><a href="#about">Corsi</a></li>
    <li><a href="#careers">News</a></li>
    <li><a href="#contact">Contatti</a></li>
  </ul>
</header>
<div class="row">
  <div class="lefttcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
<?php



?>


</body>
</html>




