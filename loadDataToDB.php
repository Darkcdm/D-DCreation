<?php
include_once "dbTool.php";

$db = new dbTool();

$firstname =  $_POST["firstname"];
$nickname =  $_POST["nickname"];
$surname =  $_POST["surname"];
$sex =  $_POST["sex"];
$quirks =  $_POST["quirks"];
$description =  $_POST["description"];
$placeOfBirth =  $_POST["placeOfBirth"];
$race =  $_POST["race"];
$favouriteColour =  $_POST["favouriteColour"];

$file = $_POST["profilePic"];

$NewName = count(glob("upload/" . "*")) + 1;

rename("upload/" . $file, "upload/" . $NewName . ".png");
//unlink("upload/" . $file);
$file = $NewName;

$userEmail = $_POST["email"];

$sql = "SELECT UserID FROM `D&DCreation`.Users WHERE Email = '" . $userEmail . "';";
$userID = $db->getData($sql);

$sql = "INSERT INTO `D&DCreation`.`Data` 
(`UserID`, `FirstName`, `NickName`, `SurName`, `Sex`, `Quirks`, `Description`, `PlaceOfBirth`, `Race`, `FavoriteColour`, `CharacterPicture`) 
VALUES (" . $userID["UserID"] . ", '" . $firstname . "', '" . $nickname . "', '" . $surname . "', '" . $sex . "', '" . $quirks . "', '" . $description . "', '" . $placeOfBirth . "', '" . $race . "', '" . $favouriteColour . "', '" . $file . "');";

$db->SetData($sql);
