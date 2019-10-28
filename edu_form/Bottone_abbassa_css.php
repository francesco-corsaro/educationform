<?php echo "
.button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 8vw;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #CE5937;
    border: none;
    border-radius: 25px;
    box-shadow: 0 9px #999;
}

.button:hover {background-color: #8E3D26}

.button:active {
    background-color: #8E3D26;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}
@media screen and (min-device-width: 780px){
 .button {
    font-size:2vw;
    background-size: contain;
}    
}
@media screen and (min-device-width: 1500px){
.button {
    font-size:1.5vw;
    background-size: contain;
}    
}";
?>