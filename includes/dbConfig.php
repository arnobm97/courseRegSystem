<?php
$mysqli = new mysqli('localhost', 'root', '', 'coursereg') or die($mysqli->connect_error);
$students = 'students';
$accounts = 'accounts';
$advisor = 'advisor';
$register = 'register';
$courses = 'courses';
$confirmCourses = 'confirmcourses';
$pendingReq = 'pendingreq';