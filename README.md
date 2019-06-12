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


