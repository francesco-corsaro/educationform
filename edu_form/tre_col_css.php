<?php 
function somma1($i) {for ($i = 1; $i < 13; $i++)
    echo "col-$i, "  ;
}
$var=somma1($i);

echo"
[class*=\"col-\"] {
  float: left;
  padding: 15px;
  
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}


}
@media screen and (max-device-width: 1000px){
    $var {
        width: 100%;
        margin-top: 0;
        font-size:5vw;
        background-size: contain;
}
}";
?>