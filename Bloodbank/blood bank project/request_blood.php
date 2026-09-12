
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request For Blood</title>
    <style>
    .container{
    text-align: center;
    width: 360px;
    background: pink;
    }
    .container h3{
    font-size: 24px;
    padding-top: 5px;
    color:black;
    font-style:bold;
    
    }
    .wrapper{
   
    line-height: 1.5;
    font-size: 18px;
    min-height: 320px;
    }
    .form-group{
    padding: 5px;
    float: left;
    width: 90%;
    
    }
    .form-group label{
    float: left;
    }
    .form-group input, .form-group select{
    float: right;
    }
    .submit input[type=submit]{
        width:65px;
        height:30px;
        color:#fff;
        background:#B33771;
        cursor: pointer;
    }
    .submit input[type=submit]:hover{
        background:#6D214F;
    }


    </style>

</head>
<body>
    <div class="container">

<?php

    require_once "config.php";

    function test_input($data) {

        $data = trim($data);
      
        $data = stripslashes($data);
      
        $data = htmlspecialchars($data);
      
        return $data;
      
      }

    $request_for = $email = $request_by = $gender = $requried_date =$contact_no = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $request_by = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $request_for = test_input($_POST["bg"]);
        $gender = test_input($_POST["gender"]);
        $requried_date = test_input($_POST["required_date"]);
        $contact_no = test_input($_POST["contact_no"]);

        $sql = "INSERT INTO `requests`(`request_by`, `gender`, `email`, `request_for`, `requried_date`, `contact_no`) VALUES (?,?,?,?,?,?)";
        if($stmt = $mysqli->prepare($sql)){

       
            $stmt->bind_param("ssssss", $param_request_by, $param_gender, $param_email, $param_request_for, $param_requried_date, $param_contact_no);

            
             
            $param_request_by = $request_by;
            $param_gender = $gender;
            $param_email = $email;
            $param_request_for = $request_for;
            $param_requried_date = $requried_date;
            $param_contact_no = $contact_no;


            if($stmt->execute()){
                header("location: ./mmm.php");

            }
            else{
                echo "Something went wrong. Please try again later.";
            }
            
            $stmt->close();
        }
     
    }

?>
         
        <h3>Request for Blood:</h3>
        <div class="wrapper">
        <h4>Please Input the required information</h4>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="name">Name: </label>
                <input name="name" type="text">
            </div>
            <div class="form-group">
                <label for="gender">Gender: </label>
                <select name="gender" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>
           
            <div class="form-group">
                <label for="email">Email: </label>
                <input name="email" type="email">
            </div>
            <div class="form-group">
                <label for="contact_no">Contact No.: </label>
                <input name="contact_no" type="tel">
            </div>

            <div class="form-group">
                <label for="bg">Blood Group: </label>
                <select name="bg" class="form-control">

                    <option value="A+">A(+ve)</option>

                    <option value="A-">A(-ve)</option>
                    <option value="B+">B(+ve)</option>
                    <option value="B-">B(-ve)</option>
                    <option value="O+">O(+ve)</option>
                    <option value="O-">O(-ve)</option>
                    <option value="AB+">AB(+ve)</option>
                    <option value="AB-">AB(-ve)</option>
    
                </select>
    
            </div>

            <div class="form-group">
                <label for="required_date">Request Date For:</label>
                <input name="required_date" type="date">
            </div>

            <div class="form-group submit">
                <input type="submit" value="Submit">
            </div>
                
        </form>
        <div style="float:right; background: teal;">
            <a href="index.php">← Back</a>
        </div>
        </div>
    </div>
</body>
</html>