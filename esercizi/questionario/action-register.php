<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>YOUR INFORMATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('https://i.pinimg.com/originals/22/2f/fc/222ffcd7bd1dde07e2734093b24af380.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 720px;
            background: transparent;
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        }

        .table {
            margin-top: 20px;
            font-size: 18px;
            width: 100%;
            max-width: 600px;
            border-collapse: collapse;
        }

        tbody tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        tbody td {
            padding: 12px;
            border: none;
            text-transform: none;
        }

        th {
            padding: 12px;
            border: none;
            text-transform: uppercase;
            font-weight: bold;
        }

        h2 {
            color: white;
            text-align: center;
            font-size: 30px;
        }

        h1 {
            color: white;
            text-align: center;
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: calc(100% - 1200px);
            margin: 0; 
        }
    </style>
</head>

<body>
    <?php
        $welcomeMessage = isset($_GET['first name']) ? "Benvenuto " . htmlspecialchars($_GET['first name']) : "Benvenuto";
    ?>

    <h1><?php echo $welcomeMessage; ?></h1>

    <div class="container">
        <h2>YOUR INFORMATION:</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tbody>
                    <?php
                    foreach ($_GET as $k => $v) {
                        echo "<tr><td>$k</td><td>$v</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
