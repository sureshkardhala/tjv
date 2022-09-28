<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.footer-container{
  width:100%;
  height:fit-content;
  font-family: Noto Sans,sans-serif;
  color: #e7e7e7;
}
.footer-top{
  width:100%;
  height:fit-content;
  display:flex;
  flex-wrap:wrap;
  justify-content:space-around;
  padding:10px;
  background:linear-gradient(5deg, #021A44, #4984b9);
}
.footer-about{
  width:30%;
  height:fit-content;
  margin-top:20px;
}
.footer-location{
  width:30%;
  height:fit-content;
  margin-top:20px;
}
.footer-form{
  width:30%;
  height:fit-content;
  margin-top:20px;
  transform:uppercase;
}
.footer-bottom{
  width:100%;
  height:50px;
  padding:10px;
  text-align:center;
  background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.4)),#183b78;
  font-family: 'Playfair Display SC', serif;

  
}
.footer-bottom a{
  color: #e7e7e7;
  font-family: Noto Sans,sans-serif;
  

}
.title{
  font-family: 'Playfair Display SC', serif;
  font-weight:600;
  font-size:18px;
}
.description{
  margin:20px 0;
}
.line{
  width:100%;
  height:2px;
  border:.5px solid #DEF2F0;
  margin:10px 0;
}
.footer-location .address, .footer-location .phone, .footer-location .mail{
  margin:25px 0;
}
.footer-location .address i, .footer-location .phone i, .footer-location .mail i{
  font-size:22px;
}
.footer-form form #email{
  width:100%;
  height:45px;
  border-radius:5px;
  margin-top:20px;
  font-size:16px;
  padding:5px;
  background:#F2ECFF;
  border:1px solid #eee;
  font-family: 'Playfair Display SC', serif;
}
.footer-form form #text{
  width:100%;
  height:150px;
  border-radius:5px;
  margin-top:20px ;
  font-size:16px;
  border:1px solid #eee;
  padding:5px;
  background:#F2ECFF;
  font-family: 'Playfair Display SC', serif;
}
#button{
  margin-top:10px;
  height:40px;
  width:100px;
  border:1px solid #F1F1E6;
  text-align:center;
  padding:5px;
  border-radius:7px;
  font-size:18px;
  transform:uppercase;
}
.icons{
  width:100%;
  margin-top:25px;

}
.icons a i{
  font-size:30px;
  margin-left:10px;
  color: #e7e7e7;

}
.btn1 {
  border:1px solid #eee;
  width:100px;
  height:30px;
  border-radius:5px;
  text-transform:uppercase;
  background:#518071;
  font-family: Noto Sans,sans-serif;

}
@media screen and (max-width: 992px){
  .footer-about{
  width:100%;

}
.footer-location{
  width:100%;
  margin-top:10px;
}
.footer-form{
  width:100%;
  margin-top:10px;
}
.footer-bottom{
  height:70px;
}

}
</style>
<div class="footer-container">
  <div class="footer-top">
    <div class="footer-about">
      <h2 class="title">About TJV</h2>
      <p class="line"></p>
      <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis rem, explicabo molestias placeat eos tenetur architecto tempora dolor et odit, nulla incidunt tempore distinctio maiores minus dolorem nesciunt veritatis impedit?</p>
      <div class="icons">
        <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp-square"></i></a>
        <a href="#"><i class="fa-brands fa-telegram"></i></a>
      </div>
    </div>
    <div class="footer-location">
      <h2 class="title">Address</h2>
      <p class="line"></p>
      <p class="address"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;5-91 Vetlapalem</p>
      <p class="phone"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp; 9948227622</p>
      <p class="mail"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp; TJV@gmail.com</p>
    </div>
    <div class="footer-form">
      <h2 class="title">Contact</h2>
      <p class="line"></p>
      <form action="contactcontroller.php" method="post">
        <input type="email" name="email" id="email" placeholder="Email" required>
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Message" required></textarea> 
        <input type="submit" value="submit"  class="btn1" />
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    <p>Created By <a href="#">Suresh</a> |&copy;  2020 All rights reserved.</p>
  </div>
</div>