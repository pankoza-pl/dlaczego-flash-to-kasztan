<?php

include_once "Parsedown.php";
$Parser = new Parsedown();
$data = $Parser->text(file_get_contents("README.md"));

require_once "index.view.php";