<?php
    include "functions.php";
    topHTML("images/test3", "landing page.css");
    selectAllPictures("images/test3");
    echo '
        <div id="enlargePhoto"></div>
        <script src="createHeader.js"></script>
        <script src="selectPhotosAlign.js"></script>
    ';
    bottomHTML();