<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            display: flex;
            justify-content: center;
        }
        .form{
            height:60vh;
            width: 45vw;
            border:2px solid black;
              text-align: center;
            justify-content: centar;
            margin-top: 30px;
            box-shadow: 5px 5px 5px ;

        } 
        input{ 
            height: 2.5rem;
            width: 60%;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php include './nav.php';?>
    <div class="main">
       
        <div class="form">
            <form action="./controller/api_v1.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" name ="name" id='name'><br>
                <label for="Email">Email</label><br>
                <input type="email" name ="Email" id= 'Email'><br>
                <label for="address">Address</label><br>
                <input type="text" name ="Address" id= 'Address'><br>
                <label for="number">Mobile number</label><br>
                <input type="number" name ="Mobile_number" id= "number"><br>
                <label for="grp">Select your blood group</label><br>
                <select name="Blood_Grp" id="grp">
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="ab+">AB+</option>
                    <option value="ab-">AB-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>

                </select><br>
                <input type="submit" id ="submit" name="addform">
            </form>
        </div>
    
    </div>
    <?php  include './footer.php'; ?>
</body>
</html>