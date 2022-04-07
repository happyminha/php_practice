<?php
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('~http://\w+\.\w+ ~', $subject, $match);
print_r($match);
?>