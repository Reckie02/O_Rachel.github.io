<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" href="index.js"></script>

  <title> O_Rachel</title>


  <!-- css  -->
  <link rel="stylesheet" type="text/css" href="style.css">


<!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <!-- Animate on Scoll -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 
</head>

<body>
<?php
  if( !empty($_POST["send"])){
     $userName = $_POST["userName"]
     $userEmail = $_POST["userEmail"]
     $userPhone = $_POST["userPhone"]
     $message = $_POST["message"]
     $toEmail = $_POST["oluochrachel384@gmail.com"]

     $mailHeaders ="Name: " . $userName . 
     "\r\n Email: " . $userEmail .
     "\r\n Phone: " . $userPhone .
     "\r\n message: " . $message . "\r\n";
     if(mail($toEmail, $userName, $mailHeaders)){
      $message = " sent"
     }
  }
  ?>
    <div class="form-container">
    <form method="post" name="emailContact">
    
           <h2>Contact <br><br></h2>

           <div class="input-row">
          <input type="text" name="userName" placeholder="Name:" required>
        </div>
<br>

      <div class="input-row">  
          <input type="telephone" name="userPhone" placeholder="Phone No:" required></div>
<br>

      <div class="input-row">
            <input type="email" name="userEmail" id="contact-email" placeholder="E-mail:" pattern="[^ @]*@[^ @]*" required>
      </div>
 <br>
        
        <div class="input-row">
             <textarea rows=8 cols=60 id="message" placeholder="Message:" name="contact-message" placeholder="Your Message"></textarea>
      </div>
   

      <div class="input-row">
         <button type="submit" class="ctn rounded">Send</button>
         <?php if (!empty(message)){?>
         <div class="sent">
           <strong><php echo $message;?></strong>
         </div>
         <?php }?> 
      </div>
    </div>
    </form>
</body>
</html>
