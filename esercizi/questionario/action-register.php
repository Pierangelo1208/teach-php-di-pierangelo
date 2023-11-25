<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Risposte del Form</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            font-family: Arial, sans-serif;
    
        }

        .container {
            width: 720px; /* Aumento della larghezza del container */
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 10px;
            padding: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .table {
            background-color: transparent;
            border-radius: 8px;
            margin-top: 20px;
            border: none;
            font-size: 18px; /* Aumento della dimensione del testo della tabella */
        }

        tbody tr {
            border: none;
        }

        tbody td {
            padding: 12px;
            border: none; 
        }
        h2
        {
            color: white;
            text-align: center;
            
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
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: calc(100% - 1200px); /* Larghezza del 100% - 60px (30px a sinistra e 30px a destra) */
    margin: 0;
}



            
   
    </style>
</head>

<body>
    <h1>WELCOME</h1>
    <div class="container">
    <h2> YOUR INFORMATION: </h2>
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
