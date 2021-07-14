<?php
    session_start();
    require_once 'include/koneksi.php';
    if ($_POST) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass' ";
        $mysql = $db -> query($sql);

        if ( $mysql ->num_rows > 0) {
            $ambil = $mysql -> fetch_assoc();
            $status = $ambil['status'];
            $_SESSION['status'] = $status;

            if ($status == "admin") {
                echo "
                    <script>
                        window.location.href='index.php'
                    </script>
                ";
            }

        } else {
            echo "
                <script>
                    alert('Silahkan coba lagi!!');
                    window.location.href='index.php&err=1'
                </script>
            ";
        }
    }
?>