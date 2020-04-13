 <?php
                if($_POST)
                {
                    $link=mysqli_connect('localhost','root','','percentage_cal');
                    if (mysqli_connect_errno()) {
                      printf("Connect failed: %s\n", mysqli_connect_error());
                      exit();
                    }
                    $sum=$_POST["c++"]+$_POST["python"]+$_POST["java"]+$_POST["OS"];
                    $cpp=$_POST["c++"];
                    $REG=$_POST["REG"];
                    $python=$_POST["python"];
                    $java=$_POST["java"];
                    $OS=$_POST["OS"];
                    $percentage=$sum/4;
                    $query="INSERT INTO `per_data`(`REG`,`cpp`,`python`,`java`,`OS`,`percentage`) values('$REG','$cpp','$python','$java','$OS','$percentage')";
                    if(($result=(mysqli_query($link,$query))))
                    {
                        echo "<div class='alert alert-success' role='alert'>Your Percentage = $percentage</div>";
                    }
                    else
                    {
                        echo "<div class='alert alert-danger' role='alert'>Failed to submit,Please Try Again after sometime</div>";
                    }
                }
            
            ?>