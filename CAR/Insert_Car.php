<!DOCTYPE html>
<html>
    <head>
    <title>Insert Car</title>
    <link rel="stylesheet" href="CSS\avisoagregado.css">
    </head>
      <body >
      <header > 
            <A href='../index.html'><img src="../images/LOGO.png"  ></A>
            <div class="Center"><h1>ENJOY THE TRIP <H1 style="color: rgb(243, 181, 152);">IN OUR CARS</H1></h1></div>
            <div id="contact">CONTACT US:    tiquitos_cars@gmail.com<br><br><br>PHONE:    449-123-45-67</div>
            
        </header>


            <?php
                $servername = "localhost:3306";
                $username = "root";
                $password = "";

                $conn = new mysqli($servername,$username,$password);

                if($conn->connect_error){
                    die("Connection Failed: ".$conn->connect_error);
                }
                //echo "Connected Successfully";

                $insert_user = "INSERT INTO car_system.cars VALUES (null,'".$_POST['MODEL']."','".$_POST['MOTOR']."','".$_POST['TRANSMITION']."','".$_POST['COLOR']."','".$_POST['PRICE']."')";

                echo "<div class='box'>";
                if ($conn->query($insert_user) === TRUE) {
                 header("Location: View_Car.php");
                } else {
                echo "Error: " . $insert_user . "<br>" . $conn->error;
                }
                echo "</div>";

                //echo "Hola muchachos!!";
                //echo "<p> Este es el email que pusiste anteriormente: ".$_POST["email"]."</p>";
            ?>
             </body>
</html>


