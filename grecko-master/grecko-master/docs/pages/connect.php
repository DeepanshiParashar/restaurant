<?php
    $Name = filter_input(INPUT_POST, 'Name');
    $Email = filter_input(INPUT_POST, 'Email');
    $Date = filter_input(INPUT_POST, 'Date');
    $Number = filter_input(INPUT_POST, 'Number');
    $Phone = filter_input(INPUT_POST, 'Phone');
    $Message = filter_input(INPUT_POST, 'Message');

    if(!empty($Name)) {
        if(!empty($Email)) {
            if(!empty($Date)) {
                if(!empty($Number)) {
                    if(!empty($Phone)) {
                        $host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "bookings";
                        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                        if(mysqli_connect_error()){
                            die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error());
                        }else{
                            $sql = "INSERT INTO book_table (Name, Email, Date, Number, Phone, Message) values ('$Name', '$Email', '$Date', '$Number',$Phone', '$Message')" ;
                            if($conn->query($sql)) {
                                echo "TABLE BOOKED SUCCESSFULLY";
                            } else{
                                echo "ERROR : " . $sql . "<br>". $conn->error; 
                            }
                            $conn->close();
                        }
                    }else{
                        echo "PHONE NUMBER SHOULD NOT BE EMPTY";
                    }
                }else{
                    echo "NUMBER of PARTY SHOULD NOT BE EMPTY";
                }
            }else{
                echo "DATE SHOULD NOT BE EMPTY";
            }
        }else{
            echo "EMAIL SHOULD NOT BE EMPTY";
        }
    }else{
        echo "NAME SHOULD NOT BE EMPTY";
    }
?>