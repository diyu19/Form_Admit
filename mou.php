<?php

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed!!".
    mysqli_connect_error());

}
//echo "successfu  $sql ="INSERT INTO dstrip.form( `uname`,`word`) VALUES ('$uname', '$word');";;
$fparty=$_POST['fparty'];
$line=$_POST['line'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$dealer=$_POST['dealer'];

$sql="INSERT INTO mou.mouform(`fparty`, `line`, `sdate`, `edate`, `dealer`)VALUES('$fparty','$line','$sdate','$edate','$dealer');";
//echo $sql;




if($con->query($sql)==true){
   // echo "successfully inserted";
}
else{
    echo "ERROR: $sql<br> $con->error";
}
$con->close();

?>



<!-- MOU ->
//INSERT INTO `mouform` (`fparty`, `line`, `sdate`, `edate`, `dealer`) VALUES ('4578123', 'hello', '2021-10-13 22:49:57.000000', '2021-10-28 22:49:57.000000', 'hello am divya from hdfc');

create form
mou number
mous between party 1, party2, party3,main party
start date end date
authority
->departmental incharge
create pdf
store in data base
listing format or grid view
ending mou email goes before 15 days
goes email to party about that
after 15 days it could be delete -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOU</title>
    <link rel="stylesheet" href="tab.css ">
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font-size: 18px;">
    <table>
        <tr>
            <td
                style="background-color: rgba(84, 84, 143, 0.171);padding-right: 300px;padding-left: 20px;padding-bottom: 200px;">

                <form action="mou.php" method="post">
                    <h3>MOU FORM</h3><br>
                    First Party Information<br><br>
                    Enter the name MOU number<br><br>

                    Enter name of First Party:<br>
                    <input type="number" name="fparty" id="fparty"
                        style="width: 600px;border-style: inset;border-top: none;border-left:none;border-right:none;font-size: 20px;"><br><br>
                    Address of Registered Office<br>

                    Line 1 (Flat no, Wing, Building name)<br>
                    <input type="text" name="line" id="line"
                        style="width: 600px;border-style: inset;border-top: none;border-left:none;border-right:none;font-size: 20px;"><br><br>
                    Start Date:<br>
                    <input type="date" name="sdate" id="sdate"
                        style="width: 600px;border-style: inset;border-top: none;border-left:none;border-right:none;font-size: 20px;"><br><br>
                    End Date:<br>
                    <input type="date" name="edate" id="edate"
                        style="width: 600px;border-style: inset;border-top: none;border-left:none;border-right:none;font-size: 20px;"><br><br>
                    Name of the Authorised Representative or Local Dealer<br>
                    <input type="text" name="dealer" id="dealer
                    "
                        style="width: 600px;border-style: inset;border-top: none;border-left:none;border-right:none;font-size: 20px;"><br><br>

                    <button
                        style="border-radius: 3px;margin-left:350px;padding: 7px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;font-size: 20PX;border-radius: 8px ;cursor: pointer;"
                        class="btn">Save</button>




                </form>
            </td>
        </tr>
    </table>

</body>

</html>