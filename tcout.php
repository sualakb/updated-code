<style>
.button {
    background-color: #009bff;
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>


<?php
$id=$_POST["id"];
$dob=$_POST["dob"]; 

                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'brinstitute');
                        
                            $id = $_POST['id'];
                            $dob = $_POST['dob'];

                            $query = "SELECT * FROM `br_student` WHERE ID='$id' AND DOB='$dob' ";
                            $query_run = mysqli_query($connection,$query)   or die("Error: ".mysqli_error($connection));
                            
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                <html>
                                <div style="border:5px solid black" width="200" height="200" >


<center><img src="BRAIT.png"></center>
<H2>
<CENTER>THIS IS TO CERTIFY THAT </H2></CENTER><CENTER> <H1><?php echo $row['Name']; ?> </h1>SON/DAUGHTER OF<h1> <?php echo $row['Father Name']; ?></h1>
<H4>HAS BEEN DULY ADMITTED IN </H4><H4>IN THIS UNIVERSITY<BR><BR>
HE/SHE HAS BEEN DECLARED TO PASSED ALL THE EXAMINATIONS<H4>HELD IN PASSING YEAR 2020</H4>

<H2>UNDER THE GIVEN UNIVERSITY</H2></CENTER>
<img src="signp.jpeg">                           &nbsp;&nbsp;&nbsp;&nbsp;       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <img src="signc.png">


</div> 
<br>
<center><button class="button" onclick="mywholepage()">PRINT OR SAVE THIS PAGE</button></center>

<script type="text/javascript">
    function  mywholepage()
{
window.print();
}
</script>
<?php } ?>

		
                     </html>
                     