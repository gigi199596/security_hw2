<html>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="theme.css">
        <script src="animation.js"></script>
        <head>
        </head>
        <body>
                <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password);


                        function verify($arg_login, $arg_psw,$conn){
                                mysqli_select_db($conn,'website');
                                $sql = 'SELECT * FROM users WHERE login="'.$arg_login.'"AND mail="'.$arg_psw.'"';
                                //echo $sql;
                                $result = mysqli_query($conn, $sql);
                                        //"SELECT * FROM users WHERE login='$arg_login' AND mail='$arg_psw' LIMIT 1");

                                //echo $result;
                                if(empty(mysqli_fetch_array($result)))
                                        return False;
                                return True;
                        }
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }else{
                            echo "Connected successfully to mysql database <br>";
                            if($_GET){
                                    if(null != $_GET['login']){
                                            $return = verify($_GET['login'], $_GET['psw'],$conn);
                                            if ($return == False){
                                                    echo "login failed! Please retry... <br>";
                                                    include 'login.php';
                                            }else{
                                                    echo "successfull";
                                                    include 'search.php';
                                                    include 'homepage.php';
                                                    //header("HTTP/1.1 200 OK");
                                                    //header ("Location: homepage.php");
                                            }
                                    }
                            }else{
                                    include 'login.php';
                            }
                        }
                        ?>
        </body>
</html>
