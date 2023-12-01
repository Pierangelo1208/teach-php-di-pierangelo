<?php
$password = "info2023"; 

if (isset($_GET['password']) && $_GET['password'] === $password) {   
    if (isset($_GET['bg-color'])) {
        $sfondo = $_GET['bg-color'];
    } 
?>
<?php
        $welcomeMessage = isset($_GET['nome']) ? "Benvenuto " . htmlspecialchars($_GET['nome']) : "Benvenuto";
        
?>
<h1><?php echo $welcomeMessage; ?></h1>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        .table,
    .table tbody tr td,
    .table th {
        color: white;
    }
    </style>
</head>

<body>
    <div class="container">
        <table class="table">
            <tbody>
                <?php
                foreach ($_GET as $k => $v) {
                    echo "<tr> <td>" . htmlspecialchars($k) . "</td> <td>" . htmlspecialchars($v) . "</td> </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
        }

        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .error-message {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #dc3545;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-message">
            <h4>Password errata</h4>
        </div>
    </div>
</body>

</html>

<?php
}
?>