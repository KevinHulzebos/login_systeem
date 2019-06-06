CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CSS
button.infoButton{
    border: 1px solid orange;
    margin-bottom: 20px;
}

HTML
<div class="row">
    <button class="infoButton col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
        <h2>Productinformatie</h2></br>
        <a href="#">Klik hier</a>
    </button>
    <button class="infoButton col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
        <h2>Procesinformatie</h2></br>
        <a href="#">Klik hier</a>
    </button>
</div>

PHP
if(empty(trim($_POST["password"]))){
    $password_err = "Vul een wachtwoord in.";
} elseif(strlen(trim($_POST["password"])) < 8){
    $password_err = "Wachtwoord moet minimaal 8 karakters bevatten.";
} elseif(!preg_match("#[0-9]+#",(trim($_POST["password"])))) {
    $password_err = "Wachtwoord moet minimaal 1 nummer bevatten";
} else{
    $password = trim($_POST["password"]);
}


