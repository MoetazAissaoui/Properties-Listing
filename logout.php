<?php

session_start();

// Finalement, on détruit la session.
session_destroy();

header('Location: index.php');

?>