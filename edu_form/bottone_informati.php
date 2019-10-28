<?php echo"
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 3vw;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
     font-family: 'Manjari', sans-serif;
}
.button3 {
    background-color: white;
    color: black;
    border: 2px solid  #CE5937;
    border-radius: 50px;
    font-size: 2vw;
    font-family: 'Manjari', sans-serif;
    color: #656565; 
}

.button3:hover {
    background-color: #CE5937;
    color: white;

}
@media screen and (max-device-width: 1000px){
.button, .button3 {
width: 100%;
        margin-top: 0;
        font-size:5vw;
        background-size: contain;
}    
}";
?>