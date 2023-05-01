<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "iste240t53";
$password = "7kC87@tvYadk";
$dbname = "iste240t53";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$tables = ["GettingStarted","Beginner","DirectoryFileMngmt", "Permissions", "pipingfilter","txtedit"];
$flashcards = [];

foreach ($tables as $table) {
    $sql = "SELECT command, descriptions FROM `$table`";
    $result = $conn->query($sql);

    if (!$result) {
        die(json_encode(["error" => "Failed to fetch flashcards from table '$table': " . $conn->error]));
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $flashcards[] = [
                'table' => $table,
                'question' => $row["command"],
                'answer' => $row["descriptions"],
            ];
        }
    }
}


if (empty($flashcards)) {
    echo json_encode(["error" => "No flashcards found"]);
    exit();
}

echo json_encode($flashcards);
$conn->close();
