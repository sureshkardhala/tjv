<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Navbar with Search Box | CodingNepal</title>
      <link rel="stylesheet" href="nav.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <nav>
        
         <div class="logo">
                        <img src="admin/banner/logo.png" alt="logo">
                        <span><a>Telengana Jan Vedika</a></span>
         </div>
         <div class="nav-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
         </div>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
      </nav>
      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
         }
      </script>
   </body>
</html>