<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> control panel </title>
  <style media="screen">
  .contaier{

    margin-left: 500px;
    margin-top: 80px;
  }

</style>
 </head>

<body>
<div class="contaier">
    <form action="" method="post">
         <table style="width:40%">
           <tr>
           </tr>
                <tr><td></td>
<td>  <input type="submit"  value="forward" name = "forward" style="color:gray ; font-size: 20px; border-radius: 20px;">    </td>
               <td>   </td>
                 </tr>

                 <br>

               <tr>
 <td>  <input type="submit"  value="left" name = "left" style="color:gray ; font-size: 20px; border-radius: 20px;">   </td>
 <td>  <input type="submit"  value="stop" name = "stop" style="color:gray ; font-size: 20px; border-radius: 20px;">   </td>
 <td>  <input type="submit"  value="right" name = "right" style="color:gray ; font-size: 20px; border-radius: 20px;">  </td>
              </tr>

                 <br>

                 <tr>
                 <td></td>
<td><input type="submit"  value="backward" name = "backward" style="color:gray ; font-size: 20px; border-radius: 20px;">
                 <td>
                </td>
                </tr>

              </table>
              </form>
              </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$left = $_POST["left"];
$right = $_POST["right"];
$forward = $_POST["forward"];
$backward = $_POST["backward"];
$stop = $_POST["stop"];
}

$servername = "localhost";
$username = "root";
$password = "";
$database ="control_panel";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$database);

if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

if(isset($_POST['left'])){

          echo "<br>";

          $Qu = "";
          $Qu = "select * from direction WHERE 1 ";
          $result = mysqli_query($connection, $Qu);

          $Qu = "INSERT INTO direction (L)
          VALUES ('left')";
          $result = mysqli_query($connection, $Qu);

} else if(isset($_POST['right'])){

                echo "<br>";

          $Qu = "";
          $Qu = "select * from direction WHERE 1 ";
          $result = mysqli_query($connection, $Qu);

          $Qu = "INSERT INTO direction (R)
          VALUES ('right')";
          $result = mysqli_query($connection, $Qu);


}else if(isset($_POST['forward'])){

                     echo "<br>";

           $Qu = "";
           $Qu = "select * from direction WHERE 1 ";
           $result = mysqli_query($connection, $Qu);

           $Qu = "INSERT INTO direction (forward)
           VALUES ('forward')";
           $result = mysqli_query($connection, $Qu);

} else if(isset($_POST['backward'])){

                          echo "<br>";

            $Qu = "";
            $Qu = "select * from direction WHERE 1 ";
            $result = mysqli_query($connection, $Qu);

            $Qu = "INSERT INTO direction (backward)
            VALUES ('backward')";
            $result = mysqli_query($connection, $Qu);

  }else if(isset($_POST['stop'])){

                               echo "<br>";

             $Qu = "";
             $Qu = "select * from direction WHERE 1 ";
             $result = mysqli_query($connection, $Qu);

            $Qu = "INSERT INTO direction (stop)
             VALUES ('stop')";
             $result = mysqli_query($connection, $Qu);

                           }
    ?>

    <script>
      window.watsonAssistantChatOptions = {
          integrationID: "9ac423de-459f-47e4-8b3a-97b9d68d04ab", // The ID of this integration.
          region: "eu-de", // The region your integration is hosted in.
          serviceInstanceID: "8920590a-dc58-41bb-9d7b-47308e3a6cb2", // The ID of your service instance.
          onLoad: function(instance) { instance.render(); }
        };
      setTimeout(function(){
        const t=document.createElement('script');
        t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
        document.head.appendChild(t);
      });
    </script>

   </body>
</html>
