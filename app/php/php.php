<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testine", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
function get($conn, $sql)
{
    $stmt = $conn->query($sql);
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$sql = "SELECT * FROM `users` WHERE 1";
$sql2 = "SELECT `name`, `email`, `pet_id`, `pet_name`, `pet_type` FROM `pets`, `users` WHERE `id` = `user_id`";

var_dump(get($conn, $sql));
$data = get($conn, $sql);
$data2 = get($conn, $sql2);

function table ($data){
    print "<table class='text-center m-auto'>";
    foreach( array_keys($data[0]) as $value){
        print '<th class="border border-dark p-3">' . $value . '</th>';
    }
    foreach ( $data as $users){
        print '<tr class="border border-dark p-3">';
        foreach ($users as $user){
            print '<td class="border border-dark p-3">' . $user . '</td>';
        }
        print '</tr>';
    }
    print "</table>";
}


function forma()
{
    print "<form method='post'><label class='d-block'>Vardas</label><input class='d-block' name='name' type='text'><label class='d-block'>Emailas</label>
<input class='d-block' name='email' type='email'><button class='d-block mt-3' name='button' type='submit'>Submit</button>";
    var_dump($_POST);
    if (isset($_POST['button'])) {
        if (!empty($_POST['email']) && !empty($_POST['name'])) {
            print "Tavo el.pastas yra: " . $_POST['email'] . "<br>" . "Tavo vardas yra: " . $_POST['name'] . "<br>";
        } else {
            print "klaidingai ivesti duomenys";
        }
    }
}