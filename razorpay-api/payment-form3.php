<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
<style>
        body{
            background:rgb(4, 6, 33);
            align-items: center;
        }
        form{
            padding:20px;
   border-radius: 10px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   width: 450px;
   height: 350px;
    margin-top: 150px;
    margin-left: 500px;
    
        }
    form input{
        width: 90%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: rgb(212, 211, 211);
   border-radius: 5px;
   align-items: center;

    }
    form .btn{
        background:rgb(86, 65, 250);
   color:rgb(12, 6, 54);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   transition: 0.5s ;
   margin-left: 20px;

    }
    form .btn:hover{
        background: rgb(4, 12, 75);
   color:#fff;
    }
    </style>

    <form action="pay.php" method="post">
    <p  style="font-size:20px; color:rgb(4, 6, 33); font-weight:600px;" >Pay: ₹1000</p><input type="hidden" name="price" value="1000"><br>
        <input type="text" name="name" required placeholder="Enter Name"><br>
        <input type="email" name="email" required placeholder="Enter Email"><br>
        <input type="text" name="phone" required placeholder="Enter Contacts"><br>
        <input type="submit" name="submit" value="Proceed To Pay" class="btn">
</form>
</body>
</html>