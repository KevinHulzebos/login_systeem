CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);






if(isset($_SESSION['attempts']))
                            {
                                if ($_SESSION['attempts'] > 2){
                                    echo "Go away!";

                                    $ip = $_SERVER['REMOTE_ADDR'];

                                    $sql = "INSERT INTO blocked (ip) VALUES ('$ip')";

                                    if ($link->query($sql) === TRUE) {
                                        echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $link->error;
                                    }


                                } else {
                                    $_SESSION['attempts']=$_SESSION['attempts']+1;
                                    echo $_SESSION['attempts'];
                                }
                            }
                            else
                            {
                                $_SESSION['attempts']=0;
                            }
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            $blocked_ip = '';

$sql = "SELECT ip FROM blocked";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $blocked_ip = $row["ip"];
    }
}

$ip = $_SERVER['REMOTE_ADDR'];

if ($blocked_ip == $ip){
    echo 'U bent geblokkeerd';
    die();
}


