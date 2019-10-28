<?php echo "
* {
  box-sizing: border-box;
}
a{
    font-size: 10vw;
    color:  ;
}
/* header */

.header {
  background-color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  position: fixed;
  width: 99%;
  float: left;
  z-index: 3;
  border-radius: 50px;
  border: 3px solid #CE5937;
  
  
  
  
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
  border-radius: 50px;
}

.header li a {
  display: block;
  padding: 10px 20px;
  border-bottom: 0.5px solid #CE5937;
    border-left: 0.5px solid #fff;
    border-right: 0.5px solid #fff;
  border-radius: 50px;
  text-decoration: none;
  font-size: 1.2em;
  font-family: 'Manjari', sans-serif;
}

.header li a:hover,
.header .menu-btn:hover {
 background-color: rgba(254,203,34,0.22);
 border-radius: 50px;
font-size: 1.8em;
}

.header .logo {
  display: block;
  float: left;
  font-size: 2vw;
  font-family: 'Manjari', sans-serif;
  padding: 10px 20px;
  text-decoration: none;
  color: #CE5937;
  border-radius: 50px;
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
  padding: 20px 10px;
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
  max-height: 100%;
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
@media (max-device-width: 48em){
     .header li a {
    font-size: 7vw;
    }
}
@media (max-device-width: 48em){
     .header .logo {
    font-size: 8vw;
    }
}
@media (max-device-width:48em ){
     .menu-btn {
    font-size: 8vw;
    }
}
@media (min-width: 48em){
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
@media (min-device-width: 1500px){
    .header li {
        float: left;
        font-size: 1vw;
    }
}
@media (min-device-width: 1500px){
    a {
        float: left;
        font-size: 1vw;
    }
}
.social{
    width: 20%;
    float:left;
}
";
    


?>

