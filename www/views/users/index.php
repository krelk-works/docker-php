<?php
// echo var_dump($users);

echo "<h2>Users</h2>";
for ($i = 0; $i < count($users); $i++) {
    echo $users[$i]['username'] . " <a href='?controller=UsersController&action=edit&id=" . $users[$i]['id'] . "'>Edit</a> <a href='?controller=UsersController&action=delete&id=" . $users[$i]['id'] . "'>Delete</a>" ."<br>";
}

if (count($users) == 0) {
    echo "No users found";
}

echo "<br><br><a href='?controller=UsersController&action=create'>Create user</a>";

echo "<br><br><form action='?controller=UsersController&action=search' method='POST'><input type='text' name='username' placeholder='Username'><input type='submit' value='Search'></form>";

echo "<br><br><a href='?controller=LoginController&action=logout'>Logout</a>";