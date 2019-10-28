<?php echo"
.leftcolumn {
    float: left;
    width: 100%;
    
}

/* Right column */
.rightcolumn {
    float: right;
    width: 100%;
   /* background-color: #f1f1f1;*/
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
    background-color: #FFFFFF;
    padding: 20px;
    margin-top: 20px;
    border: 0.8px solid #CE5937;
  border-radius: 15px;
    -webkit-animation: mymove 5s ; /* Safari 4.0 - 8.0 */
  animation: mymove 5s ;
    box-shadow: 0px 0px 8px 15px #888888;
    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
  0%   {top: 200px;}
  
  100% {top: 0px;}
}

/* Standard syntax */
@keyframes mymove {
  0%   {top: 100px;}
  
  100% {top: 0px;}
}

/* Clear floats after the columns */
.row:after {
    content: \"\";
    display: table;
    clear: none;
    overflow: auto;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 60%;
    padding: 0;
    margin-left:25%
  }
}";
?>