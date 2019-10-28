<?php
echo "
* topnav */
    
.topnav {
    background-color: #CE5937;
    box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
    position: fixed;
    width: 100%;
    z-index: 3;
}
    
.topnav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    overflow: hidden;
    background-color: #fff;
}
    
.topnav li a {
    display: block;
    padding: 20px 20px;
    border-right: 1px solid #f4f4f4;
    text-decoration: none;
}
    
.topnav li a:hover,
.topnav .menu-btn:hover {
    background-color: 'tomato';
}
    
.topnav .logo {
    display: block;
    float: left;
    font-size: 2em;
    padding: 10px 20px;
    text-decoration: none;
}
    
/* menu */
    
.topnav .menu {
    clear: both;
    max-height: 0;
    transition: max-height .2s ease-out;
}
    
/* menu icon */
    
.topnav .menu-icon {
    cursor: pointer;
    display: inline-block;
    float: right;
    padding: 28px 20px;
    position: relative;
    user-select: none;
}
    
.topnav .menu-icon .navicon {
    background: #BECE2C;
    display: block;
    height: 2px;
    position: relative;
    transition: background .2s ease-out;
    width: 18px;
}
    
.topnav .menu-icon .navicon:before,
.topnav .menu-icon .navicon:after {
    background: #BECE2C;
    content: '';
    display: block;
    height: 100%;
    position: absolute;
    transition: all .2s ease-out;
    width: 100%;
}
    
.topnav .menu-icon .navicon:before {
    top: 5px;
}
    
.topnav .menu-icon .navicon:after {
    top: -5px;
}
    
/* menu btn */
    
.topnav .menu-btn {
    display: none;
}
    
.topnav .menu-btn:checked ~ .menu {
    max-height: 240px;
}
    
.topnav .menu-btn:checked ~ .menu-icon .navicon {
    background: transparent;
}
    
.topnav .menu-btn:checked ~ .menu-icon .navicon:before {
    transform: rotate(-45deg);
}
    
.topnav .menu-btn:checked ~ .menu-icon .navicon:after {
    transform: rotate(45deg);
}
    
.topnav .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.topnav .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
    top: 0;
}
    
/* 48em = 768px */
    
@media (min-width: 48em) {
    .topnav li {
        float: left;
    }
    .topnav li a {
        padding: 20px 30px;
    }
    .topnav .menu {
        clear: none;
        float: right;
        max-height: none;
    }
    .topnav .menu-icon {
        display: none;
    }
}";
?>