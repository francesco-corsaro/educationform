<?php echo "
input[type=text], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #CE5937;;
  border-radius: 25px;
   -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  resize: vertical;
  font-size: 6vw;
  font-family: 'Manjari', sans-serif;
  background-color: rgba(255,145,0,0.37);
}

input[type=text]:focus {
  border: 3px solid #CE5937;
}
textarea:focus {
  border: 3px solid #CE5937;;
}
input[type=submit] {
  background-color: #CE5937;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  float: right;
  font-family: 'Manjari', sans-serif;
  font-size: 6vw;

}

input[type=submit]:hover {
  background-color: #8E3D26;
  border-radius: 30px;
}
.container{
background-color: rgba(206,200,197,0.17);
    }
 @media screen and (min-device-width: 780px){
 input[type=text], textarea {
   font-size:1.5vw;
    }    
}
@media screen and (min-device-width: 1500px){
 input[type=text], textarea {
    font-size:1.5vw;
    } 
}
@media screen and (min-device-width: 780px){
 input[type=submit] {
   font-size:1.5vw;
    }    
}
@media screen and (min-device-width: 1500px){
 input[type=submit], textarea {
    font-size:1.5vw;
    } 
}";
?>
    








