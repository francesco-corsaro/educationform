<?php echo "
.container {
    position:sticky;
    top: 0;
     z-index: -2;
    
}

.center {
    position: absolute;
    top: 25%;
    left: 75%;
    transform: translate(-50%, -50%);
    font-size: 1.4em;
    font-family: 'Chilanka', cursive;
    color: white;
}
img{
    width:100%;
    height:auto;
    display: block;
    position:sticky;
}
@media screen and (max-device-width: 1000px){
   .container, .grid-container, .leftcolumn, .card, .center, header, input, .menu-btn  {
        width: 100%;
        margin-top: 0;
        font-size:5vw;
        background-size: contain;
}    
}";

?>