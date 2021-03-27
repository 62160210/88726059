
<?php
        header("Access-Control-Allow-Origin: *");
        header("content-type: application/json");
        $authors = '[
            { "authorID": 1111, "author": "wittawas", "penname": "witty100" },
            { "authorID": 1112, "author": "jakkarin", "penname": "พ่อบ้านใจกล้า" },
            { "authorID": 1113, "author": "worawit", "penname": "obob" }
            ]';
        echo $authors;
?>


