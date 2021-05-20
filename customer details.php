<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fotterstyle.css.css">
  <link rel="icon" href="card.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  table {
    margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  width: 60%;
}

th, td {
  text-align: center;
  padding: 8px;
}


tr:nth-child(even) {background-color: #f2f2f2;}
</style>
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
              <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </ul>
    <title>Customer Details</title>
</nav>



<center><table class="center">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email id</th>
<th>Balance</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","banking_system");
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);


if($result-> num_rows>0){
  while($row = $result-> fetch_assoc()){
    $emaail=$row["Email id"];
    $email=explode("@", $emaail);
    echo "<tr><td id='".$email[0]."Id'>".$row["ID"]."</td><td id='".$email[0]."Name'>".$row["Name"]."</td><td id='".$email[0]."Email'>".$row["Email id"]."</td><td id='".$email[0]."BankBalance'>".$row["Balance"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "0 Results";
}
$conn-> close();
?>
</table></center>
<div class="my-info text-center">

                <button class="btn btn-info" data-toggle="modal" data-target="#sendMoney">Send Money</button>
                <a class="btn btn-info" href="tranaction history.php" >See All Transactions</a>
            </div>
             <!-- Modal send money -->
<div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="text" id="enterSName" class="form-control" placeholder="Sender's username" aria-label="Sender's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@email.com</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" id="enterName" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@email.com</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rs</span>
                                    </div>
                                    <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount" aria-label="Amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">Send Money</button>
                        </div>
                    </div>
                </div>
            </div>


 

</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
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
