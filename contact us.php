<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="fotterstyle.css.css">
  <link rel="icon" href="card.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us </title>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Welcome To Federal Bank </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer details.php">Customer Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tranaction history.php">Transaction History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact us.php">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>   


      <div class="container">
        <form id="contactus" action="" method="post">
            <h3>Contact Us form</h3>
            <fieldset> <input placeholder="Name" type="text" tabindex="1" required autofocus> </fieldset>
            <fieldset> <input placeholder="Email Address" type="email" tabindex="2" required > </fieldset>
            <fieldset> <input placeholder="Phone Number" type="tel" tabindex="3" required> </fieldset>
            <fieldset> <textarea placeholder="Type your message here..." tabindex="5" required></textarea> </fieldset>
            <fieldset> <button name="submit" type="submit" id="contactus-submit" data-submit="...Sending">Send Now</button> </fieldset>
        </form>
    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <footer>
    <div class="footer-content">
        <h3>About Us</h3>
        <p>Banking Made Easy!</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/shaheed.pathan.756/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://github.com/ShaheedPathan"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/shaheed-pathan-14342720a/"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="https://www.instagram.com/pathan__shaheed/"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; 2021 Federal Bank. designed and developed by Shaheed Pathan <span></span></p>
    </div>
</footer>
</body>
</html>