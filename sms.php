<? php
if(isset($_POST['btn'])){
$number=$_POST['number'];
$msg=$_POST['msg'];
$ur=http://181.65.122.245:8080/sendsms?username=syit-test&password=12345&type=0&dlr=1&destination=$number&source=DEMO&message=$msg"
$c = curl_init(); curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); curl_setopt($c, CURLOPT_URL, $url); $contents = curl_exec($c); curl_close($c); 
        
        echo 'SMS Sent, thank you';
}


?>
<html>
    <head>
        <title>SMS Gateway API</title>
        <body>
            <form action="sms.php" method="POST">
                <label>Numero</label>
                <input type="text" name="number"><br>
                <label>Messages</label>
                <textarea name="msg"> </textarea>
                <input type="submit" name="btn" value="SUBMIT">
            </form>
        </body>
    </head>
</html>