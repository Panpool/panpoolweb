<?php

//What does PHP receive?

var_dump($_FILES);

//Moves uploaded Files tä a nice directory

foreach ($_FILES[ "myFiles"]["tmp_name"] as Skey => $value

{ StargetPath = "uploads/". basename ($_FILES["myFiles']["name"][ Skey1);

move uploaded file($value, $targetPath):

}
