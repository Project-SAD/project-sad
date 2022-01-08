<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        } 
        .container p{
            padding: 0.7rem;
            right: 0rem;
        }
        .container h2{
            padding: 0.7rem;
            right: 0rem;
        }
        .container a:link{
            color: #3A4D8F;
            text-decoration: none;
        }
        .container a:visited{
            color: #091747;
            text-decoration: none;
        }
        .container a:hover{
            color: #091747;
            text-decoration: underline;
        }
        .container a:active{
            color: #091747;
            text-decoration: none;
        }
        .container{
            margin-top: 16px;
            /* border: 5px solid gold; */
            width: 50%;
            /* height: 50%; */
            position: absolute;
            left: 25%;
            top: 10%;
            border-radius: 10px;
            background-color: gainsboro;
            
        }
        button[type=submit]{
            border-radius: 3px;
            width: 45%;
            text-align: center;
            border: 0.5px solid;
            position: absolute;
            left: 27%;
            padding: 0.5rem 0.7rem;
            border: 2px solid cadetblue;
            outline: 0;
            border-color: cadetblue;
            line-height: 1.5;
        }
        input{
            border-radius: 3px;
            width: 58%;
            text-align: center;
            border: 0.5px solid;
            position: absolute;
            left: 20%;
            padding: 0.5rem 0.7rem;
            border: 2px solid cadetblue;
            outline: 0;
            border-color: cadetblue;
            line-height: 1.5;
        }
        select{
            border-radius: 3px;
            width: 58%;
            text-align: center;
            border: 0.5px solid;
            position: absolute;
            left: 20%;
            padding: 0.5rem 0.7rem;
            border: 2px solid cadetblue;
            outline: 0;
            border-color: cadetblue;
            line-height: 1.5;
        }
        
       
        
    </style>
</head>
<body>
    <?php?>
    <div class="container">
        <form action="" method="post">
            <br>
                <h2>Log In</h2>
            <br>
            <input type="text" name="" id="name" placeholder="Name">
            <br><br>
            <input type="email" name="" placeholder="Email" id="email">
            <br><br>
            <input type="password" name="" id="password" placeholder="Password">
            <br><br>
            <input type="tel" name="" id="number" placeholder="Phone Number">
            <br><br>
            <select id="accountType" name="Account Type">
                <option value="">Choose account type</option>
                <option value="savings">Savings</option>
                <option value="current">Current</option>
                <option value="deposit">Deposit</option>
            </select>
            <br><br><br>
            <button type="submit"><a href="overview.php">Log in</a></button>
            <br><br>
            <p style="text-align: center;">
                Already have an account with us? 
                <a href="overview.php">Just Login</a>
            </p>
        </form>
        
    </div>
   
    
</body>
</html>