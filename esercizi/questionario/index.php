<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
      font-family: 'Poppins', sans-serif;
    }

    .form-container {
      width: 420px;
      background: transparent;
      color: white;
      border-radius: 10px;
      padding: 30px 40px;
      border: 2px solid rgba(255, 255, 255, .2);
      backdrop-filter: blur(20px);
      box-shadow: 0 0 10px rgba(0, 0, 0, .5);
    }
    .form-control {
      border: 2px solid rgba(255, 255, 255, 0.5);
      background-color: rgba(255, 255, 255, 0.1);
      color: white; 
      border-radius: 5px; /* Bordo arrotondato */
      margin-bottom: 15px; /* Spazio tra gli input */
    }

    .form-control:focus {
      outline: none; /* Rimuove l'outline al focus */
      border-color: rgba(255, 255, 255, 0.7); /* Cambia il colore del bordo al focus */
    }

    .form-container h1 {
      margin-bottom: 30px;
      text-align: center;
    }
    .btn
{ 
    width: 100%;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin-top: 20px;
}
  </style>
</head>

<body>
  <div class="container form-container">

    <h1>REGISTER</h1>




    <form action="./action-register.php">
      <div class="form-group">
        <label for="nome">First name:</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>

      <div class="form-group">
        <label for="cognome">Last name:</label>
        <input type="text" class="form-control" id="cognome" name="cognome">
      </div>

      <div class="form-group">
        <label for="sport">Favorite sport:</label>
        <input type="text" class="form-control" id="sport" name="sport">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="date" class="form-control" id="age" name="age">
      </div>

      <div class="form-group">
        <label for="bg-color">Background Color:</label>
        <input type="color" class="form-control" id="bg-color" name="bg-color">  
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

</body>

</html>



