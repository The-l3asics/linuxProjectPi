<?php
    include "functions.php";
    topHTML("Current Environment", "landing page.css");
    selectAllPictures("images");
    echo '
        <script src="landingPageCurrentPhoto.js"></script>
        <script src="createHeader.js"></script>
    ';
    bottomHTML();


