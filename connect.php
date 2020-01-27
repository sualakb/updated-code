<html>
    <head>
        <title>Transfer Certificate</title>
        <style>
            body{
                background-color: white;
            }
            table,th,td{
                border: 2px solid black;
                width: 1100px;
                background-color: yellow;
            }

            .btn{
                width:10%;
                height:5%;
                font-size: 22px;
                padding: 0px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Generate your Transfer Certificate</h1>

            <div class="container">
                <form action="" method="POST">
                    <input type="text" name="id" class="btn" placeholder="Enter your ID" />
                    <input type="submit" name="search" class="btn" value="Search by ID">
                </form>
                <table>
                       <br> 
                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'brinstitute');
                        if(isset($_POST['search'])){
                            $id = $_POST['id'];

                            $query = "SELECT * FROM `br_student` WHERE ID='$id' ";
                            $query_run = mysqli_query($connection,$query)   or die("Error: ".mysqli_error($connection));
                            

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                                
                                <div style="border:5px solid black" >


<center><img src="BRAIT.png"></center>
<H2>
<CENTER>THIS IS TO CERTIFY THAT </H2></CENTER><CENTER> <H1><?php echo $row['Name']; ?> </h1>SON/DAUGHTER OF<h1> <?php echo $row['Father Name']; ?></h1>
<H4>HAS BEEN DULY ADMITTED IN </H4><H4>IN THIS UNIVERSITY<BR><BR>
HE/SHE HAS BEEN DECLARED TO PASSED ALL THE EXAMINATIONS<H4>HELD IN PASSING YEAR 2020</H4>

<H2>UNDER THE GIVEN UNIVERSITY</H2></CENTER>
<img src="signp.jpeg">                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <img src="signc.png">
                     </div>


                                <?php
                            }
                        }   
                        ?>
                </table>
            </div>
        </center>
    </body>
</html> 