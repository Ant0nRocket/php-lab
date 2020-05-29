<?php
require_once "./api/config/database.php";



$isHeroku = getenv('JAWSDB_MARIA_URL');
if($isHeroku) {
    echo "Ok! We got a Heroku env var! :)";
}else{
    echo "Local development";
}
