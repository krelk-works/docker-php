<h2>Edit user</h2>
<form action="?controller=UsersController&action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <input type="text" name="username" placeholder="Username" value="<?php echo $user['username']; ?>">
    <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
    <input type="password" name="password" placeholder="Password" value="<?php echo $user['password']; ?>">
    <input type="submit" value="Update">
</form>