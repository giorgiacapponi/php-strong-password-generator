<?php 
session_start();
 $characters_password=[
    "letters" => "abcdefghijklmnopqrstuvwyz",
    "numbers" => "123456789",
    "symbols" => "!$%&?#",
 ];

?>
<?php 
if(isset ($_GET['password-length']));{
    $password_length= $_GET['password-length'];
    
};
if(isset ($_GET['password-type']));{
    $type = $_GET['password-type'];
   
   
};


?>
<?php include_once __DIR__ . "/partials/functions.php";
$lnsL=password_type($type);
$new_password=rnd_password($lnsL,$password_length,$characters_password);

$_SESSION['password']=$new_password;

if(!empty($new_password)){
    redirect();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>


<body>
    <div class="wrapper">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="container">
            <form action="index.php" method="GET">
                <label for="password-length">Lunghezza password:</label>
                <input type="text" id="password-length" name="password-length">

                <div class="preference">
                    <div class="left-side">
                        Consenti ripetioni di uno o più caratteri:
                    </div>
                    <div>
                        <div >
                            <input type="radio" id="repeat">
                            <label for="repeat">SI</label>
                        </div>
                        <div>
                            <input type="radio" id="no-repeat">
                            <label for="no-repeat">NO</label>
                        </div>
                        <div>
                            <input type="checkbox" id="letters" name="password-type" value="lettere">
                            <label for="letters">lettere</label>
                        </div>
                        <div>
                            <input type="checkbox" id="numbers" name="password-type" value="numeri">
                            <label for="numbers">numeri</label>
                        </div>
                        <div>
                            <input type="checkbox" id="symbols" name="password-type" value="simboli">
                            <label for="symbols">simboli</label>
                        </div>
                    </div>


                </div>
                <div>
                    <button type="submit">invia</button>
                    <button type="reset">annulla</button>
                </div>
            </form>

            
        </div>
    </div>
</body>

</html>