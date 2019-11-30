<?php 
    session_start();

    $user = 'root';
    $pass = '';
    $db = 'hardware_store';

    $link = mysql_connect('localhost', $user, $pass);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    $dbstatus = mysql_select_db($db);

    $flag = 1;
    if (isset($_GET['login_user'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];

        if (empty($username)) {
            print("\n Username is required");
            $flag=0;
        }
        if (empty($password)) {
            print("\n Password is required");
            $flag=0;
        }

        if ($flag == 1) {
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            //$query = "SELECT * FROM users WHERE username='' or ''='' AND password='' or ''=''";
            $results = mysql_query($query);
            $rows = mysql_fetch_array($results);

            if ($rows) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: loginSuccess.php');
            }else {
                print("Wrong username/password combination");
            }
        }
    }
?>