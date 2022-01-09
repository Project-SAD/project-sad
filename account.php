<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidepanel {
            position: absolute;
            height: 80%;
            line-height: 3;
            border-radius: 10px;
            padding: 10px;
            margin: 15px;
            background-color: white;
            padding-bottom: 21px;
            width: 15%;
            /* z-index: 1; */

        }


        .main {
            position: absolute;
            height: 80%;
            /* line-height: 3; */
            border-radius: 10px;
            padding: 16px;
            margin: 15px;
            background-color: #3A4D8F;
            right: 50%;
            width: 76%;
            left: 19%;
        }

        a:link {
            text-decoration: none;
            color: #3A4D8F;
            padding: 0;
        }

        a:visited {
            text-decoration: none;
            color: #3A4D8F;
        }

        a:active {
            text-decoration: none;
            color: #3A4D8F;
            background-color: #3A4D8F;
            background-size: 100%;


        }

        a:hover {
            text-decoration: none;
            color: #DEDEDE;
            background-color: #3A4D8F;
            padding: 16px;
            margin: 0;
            width: 18%;
        }

        a {
            font-weight: 700;
        }

        .cont {
            background-color: #DEDEDE;
            border-radius: 10px;
            padding: 16px;
            height: 30%;

        }.expense {
            background-color: #DEDEDE;
            border-radius: 10px;
            padding: 16px;
            height: 50%;
            width: 45%;
            display: flex;
            flex-direction: row;
            position: absolute;
            margin: 15px;
            margin-left: 0;

        }.gains {
            background-color: #DEDEDE;
            border-radius: 10px;
            padding: 16px;
            height: 50%;
            display: flex;
            width: 45%;
            position: absolute;
            right: 1.5%;
            margin: 15px;
            margin-right: 0;

        }

        .expense h2{
            height: min-content;
        }.gains h2{
            height: min-content;
        }


        body {
            display: flex;
            background-color: #DEDEDE;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
    </style>
</head>

<body>
    <?php?>
    <div class="sidepanel">
        <a href="profile.php">Profile</a><br>
        <a href="overview.php">Overview</a><br>
        <a href="account.php">Account</a><br>
        <a href="transaction.php">Transactions</a><br>
    </div>
    <div class="main">
        <div class="cont">
            <h2>PROTO ACCOUNT</h2>
            <p>Account Type</p>
            
        </div>
        <div class="expense">
            <h2>MONTHLY EXPENSE</h2>
        </div>
        <div class="gains">
            <h2>MONTHLY GAINS</h2>
        </div>
    </div>
</body>

</html>