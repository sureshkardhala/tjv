  
    <!DOCTYPE html>
    <html lang="en">
      <head>    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/nav.css">
    
      </head>
      <body>
        <div class="theHeader">
        <nav class="thisNav">
          <!-- <div class="logo"><h4><a href="">ResumeInator</a></h4></div> -->
          <div class="logo"><h4><button class="theMainButton" onclick="clickEvent()">Telangana Jana Vedika</button></h4></div>
    
          <input type="checkbox" id="click">
          <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
          </label>
          <p>
             <a class="active" href="user_controller/edit_user.php">Edit User</a>
             <a class="active" href="logout.php">Logout</a> 

          </p>
        </nav>
        </div>
        
    
      </body>
    </html>
    
    
    <script>
      function clickEvent(){
        window.location = "index.php";
      }
    </script>
