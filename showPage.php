<?php
include_once "dbTool.php";

$db = new dbTool();

$userEmail = $_POST["email"];

$sql = "SELECT UserID FROM `D&DCreation`.Users WHERE Email = '" . $userEmail . "';";

$userID = $db->GetData($sql)["UserID"];

$sql = "SELECT * FROM `D&DCreation`.Data WHERE UserID=" . $userID . ";";

$dataPool = $db->GetPureData($sql);

while ($row = $dataPool->fetch_assoc()) {
    echo "<table>";
    echo "<tr>";
    echo "<th>";
    echo "Firstname";
    echo "</th>";
    echo "<td>";
    echo $row["FirstName"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "NickName";
    echo "</th>";
    echo "<td>";
    echo $row["NickName"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "SurName";
    echo "</th>";
    echo "<td>";
    echo $row["SurName"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "Sex";
    echo "</th>";
    echo "<td>";
    echo $row["Sex"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "Quirks";
    echo "</th>";
    echo "<td>";
    echo $row["Quirks"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "Description";
    echo "</th>";
    echo "<td>";
    echo $row["Description"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "PlaceOfBirth";
    echo "</th>";
    echo "<td>";
    echo $row["PlaceOfBirth"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "Race";
    echo "</th>";
    echo "<td>";
    echo $row["Race"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "FavoriteColour";
    echo "</th>";
    echo "<td>";
    echo $row["FavoriteColour"];
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>";
    echo "CharacterPicture";
    echo "</th>";
    echo "<td>";
    echo '<img src=upload/"' . $row["CharacterPicture"] . '.png" width="50" height="50">';
    echo "</td>";
    echo "</tr>";

    echo "</table>";
}
