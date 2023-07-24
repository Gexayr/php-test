<?php

include_once('config.php');
class EmailSender {
    function send($data) {
        echo "<br>send email<br>";

        mail(MY_EMAIL, "Data Submission", $data);
    }
}