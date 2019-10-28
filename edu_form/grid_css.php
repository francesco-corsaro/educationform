<?php echo "
.grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 10px;
    background-color: rgba(254,203,34,0.44);
    padding: 10px;
}

.grid-container > div {
    background-color: #FFFFFF;
    text-align: center;
    padding: 20px 0;
    font-size: 30px;
}

@media only screen and (max-width: 300px) {
    .item1 { grid-area: 1 / span 3 / 2 / 4; }
    .item2 { grid-area: 3 / 3 / 4 / 4; }
    .item3 { grid-area: 2 / 1 / 3 / 2; }
    .item4 { grid-area: 2 / 2 / span 2 / 3; }
    .item5 { grid-area: 3 / 1 / 4 / 2; }
    .item6 { grid-area: 2 / 3 / 3 / 4; }
}";
?>