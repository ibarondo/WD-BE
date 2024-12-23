<?php 
$islandID = $_GET['id'];
$contents = array();

if (isset($_GET['id'])) {
    $contentQuery = "SELECT *, islandsofpersonality.image AS islandImage, islandsofpersonality.color AS islandColor, islandcontents.image AS contentImage FROM islandcontents JOIN islandsofpersonality ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID WHERE islandcontents.islandOfPersonalityID = '$islandID'";
    $contentResult = executeQuery($contentQuery);

    if (mysqli_num_rows($contentResult) > 0) {
        while ($contentRow = mysqli_fetch_assoc($contentResult)) {
            $content = new islandContent(
                $islandID,
                $contentRow["name"],
                $contentRow["islandImage"],
                $contentRow["islandColor"],
                $contentRow["contentImage"],
                $contentRow["content"],
                $contentRow["longDescription"]
            );

            array_push($contents, $content);
        }
    } else {
        header("Location: ./");
    }
} else {
    header('Location: ./');
}
?>