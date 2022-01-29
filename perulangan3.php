<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
    <body>
        <center>
            <br><br><br>
        <form action="" method="POST">
            <label for="">Masukan inputan:</label>
        <input type="number" name="inputan">
        <input type="submit" name="kirim" value="kirim">
    </form>
</center>
</body>
</html>

 <?php
 
if(isset($_POST['kirim'])){
    $nama =$_POST['inputan'];
    for ($i = $nama; $i >= 1; $i--){
        for($k = $nama; $k >= $i; $k--){
            echo"$k";
        }
        echo"<br>";
    }
}

?>