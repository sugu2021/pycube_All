<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unsubscribe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style type="text/css">
    .main_bg{
      background: #e0e0e0;
      margin: 0;
      height: 100vh;
    }
    .pad20_0{
      padding: 20px 0px;
    }
    .unsubscribe_box{
      background: #fff;
      padding: 15px;
      border-radius: 5px;
      max-width: 600px;
      margin: 0px auto;
    }
  </style>
</head>
<body>

 <div class="main_bg">
  <div class="container pad20_0">
   <div class="unsubscribe_box">
     <h2>Unsubscribe</h2>
	 <?php
            $email_id = '';
            if(isset($_GET['email'])){
                $email_id = $_GET['email'];
            }
            
            
            ?>
     <p class="">Please enter your email address you want to unsubscribe.You will no longer receive emails.</p>
     <form action='https://crm.zoho.com/crm/Unsubscribe?encoding=UTF-8' method='POST' name='unsubForm' onSubmit='return emailValidate()' >   
                <input type='hidden' name='xnQsjsdp' value='c83240ad14318263be98f0f75255f91ab2652a31779d5a369ff09db9e1788450'/>  
                <input type='hidden' name='actionType' value='dW5zdWJzY3JpYmU='/>  
                <input type='hidden' name='returnURL' value='https://www.pycube.com/unsubscribed.php' />
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name='email' id="email" value="<?php echo $email_id; ?>" />
      </div>
      <button type="submit" class="btn btn-primary mb-1" value='Unsubscribe'>Unsubscribe</button>
	  <script>function emailValidate() {
          var email = document.forms['unsubForm']['email'].value;
          var atpos = email.indexOf('@');
          var dotpos = email.lastIndexOf('.');
          if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
              alert('Please enter a valid email address.');
              return false;
          }
      }</script>
    </form>
  </div>
</div>
</div>

</body>
</html>
