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
            height: 120%;
            line-height: 3;
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

        .main p {
            padding-top: 16px;
            line-height: 1em;
            margin-top: 0;
            position: absolute;
            font-weight: 600;
            color: #000000;

        }

        .textright {
            float: right;
            position: absolute;
            right: 10%;
        }

        address {
            font-style: normal;
            background-color: #091747;
            width: 11%;
            border-radius: 10px;
            color: #DEDEDE;
            font-weight: 600;
            text-align: center;
        }

        

        .ms {
            float: right;
            right: 2%;
            background-color: #DEDEDE;
            width: 15%;
            border-radius: 5px;
            padding: 16px;
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
        <address>
            Today
        </address>
        <br>
        <section>
            <p style="background-color:#DEDEDE; width:70%; border-radius: 5px; padding: 16px;">Company name</p>
            <p class="ms">
                Money paid
            </p>
        </section>
    </div>
</body>

</html>