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


//function delete_users
function delete_users_form($conn)
{
    print "<form class='w-25 m-auto border border-dark p-3' method='post'>
<input class='d-block mx-auto mb-3' name='id' type='text' placeholder='user id'>
<button class='d-block  mx-auto ' name='delete' type='submit'>Delete</button>
</form>";
    if (isset($_POST['delete'])) {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM `users` WHERE `id`=$id";
            print "Useris istrintas ($id)";
            return $conn->query($sql);
        } else {
            print "klaidingai ivesti duomenys";
        }
    }
}

//function inert user form
function insert_user_form($conn)
{
    print "<form class='w-25 mx-auto mb-5 border border-dark p-3' method='post'>
<input class='d-block mx-auto mb-3' name='name' type='text' placeholder='name'>
<input class='d-block mx-auto mb-3' name='email' type='email' placeholder='email'>
<input class='d-block mx-auto mb-3' name='password' type='password' placeholder='password'>
<button class='d-block mx-auto' name='sent' type='submit'>Insert</button>
</form>";
    if (isset($_POST['sent'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            print "Tavo vardas yra: " . $_POST['name'] . " Tavo emailas: " . $_POST['email'] . " Tavo psw: " . $_POST['password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $psw = $_POST['password'];
            $sql = "INSERT INTO `users`( `name`, `email`, `password`) VALUES (\"$name\", \"$email\", \"$psw\")";
            print "<br>duomenys irasytos";
            return $conn->query($sql);
        } else {
            print "klaidingai ivesti duomenys";
        }
    }
}

//function edit user form

function edit_user_form($conn)
{
    $userId = '';
    $userName = '';
    $userEmail = '';
    $userPsw = '';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    if (isset($_POST['getUserData'])) {
        if (isset($_POST['id'])) {
            $sql = "SELECT `id`, `name`, `email`, `password` FROM `users` WHERE `id`= $id";
            $result = get($conn, $sql);
            var_dump($result);
            $userId = $result[0]['id'];
            $userName = $result[0]['name'];
            $userEmail = $result[0]['email'];
            $userPsw = $result[0]['password'];
        } else {
            print "klaidingai ivesti duomenys GET";
        }
    }

    print "<form method='post' class='w-25 m-auto border border-dark p-3 text-center'>
<input class='d-block mx-auto mb-3' type='text' name='id' placeholder='id' value='$userId'>
<input class='d-block mx-auto mb-3' type='text' name='name' placeholder='name' value='$userName'>
<input class='d-block mx-auto mb-3' type='email' name='email' placeholder='email' value='$userEmail'>
<input class='d-block mx-auto mb-3' type='password' name='password' placeholder='password' value='$userPsw'>
<button type='submit' name='getUserData'>Get info</button>
<button type='submit' name='sentUserData'>Update</button></form>";

    if (isset($_POST['sentUserData'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            print "Tavo vardas yra: " . $_POST['name'] . " Tavo emailas: " . $_POST['email'] . " Tavo psw: " . $_POST['password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $psw = $_POST['password'];
            $sql = "UPDATE `users` SET `name`= $name,`email`= $email,`password`= $psw WHERE `id`= $id";
            print "<br>duomenys irasytos";
            return $conn->query($sql);
        } else {
            print "klaidingai ivesti duomenys SENT";
        }
    }

}

$sql = "SELECT * FROM `users` WHERE 1";
/*$sql2 = "SELECT `name`, `email`, `pet_id`, `pet_name`, `pet_type` FROM `pets`, `users` WHERE `id` = `user_id`";*/

var_dump(get($conn, $sql));
$data = get($conn, $sql);
/*$data2 = get($conn, $sql2);*/



