<?php
    include "functions.php";
    topHTML("Available Photo Days", "landing page.css");
    selectAllDirectories("images");
    echo '
            <script src="createHeader.js"></script>
            <script src="previousPhotos.js"></script>
        ';
    bottomHTML();
