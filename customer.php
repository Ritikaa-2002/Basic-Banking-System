
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" href="css/home.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet"
        href="css/A.animate.css+flaticon.css+tiny-slider.css+glightbox.min.css+aos.css+datepicker.min.css+style.css,Mcc.z2wXGN8Aor.css.pagespeed.cf.rkzq6iDOYd.css"> -->
        <title>Banking</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
}




#body{
    background:url('img/bg1.jpg') center center/cover no-repeat ;
    height:100vh;
    
}
.heading {
    
    color: white;
    margin-left: 645px;
    margin-top: -7px;
    margin-bottom: -6px;
    
    /* font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif'; */
}
.table {
    width: 76%;
    /* height: 265px; */
    margin: 2px 30px;
    position: absolute;
    font-size: 17px;
    border: 2px solid #000000;
    left: 9.8%;
    box-shadow: 0px 0px 20px grey;
    border-collapse: collapse;
}
.bg-dark{
    background-color: #343a40!important;
}

td {
    background-color: white;
    
    border: 1px;
    padding: 10px;
    border-bottom: 1px solid #ddd;
    font-weight: 550;
    text-align:center;
}
tr{
    background-color: white;
    opacity: 0.7;
}
tr:hover {
    background-color:black;
    color: white;
    opacity: 0.6;
    font-weight:600;
    /* cursor:pointer; */
    
}

#head {
    text-align: center;
    opacity: 0.9;
    background-color:white;
    color:black;
    /* background-color: #eaeaea; */
}

button {
    /* border: none; */
    background: #9695b9;
    border-radius: 2px solid black;
    /* border-bottom: 22px; */
    border-radius-top: 2px;
    /* border-radius: 8px; */
    /* width: 161px; */
    font-size: 90%;
    transition-duration: 0.4s;
    cursor: pointer;

}

button:hover {
    border-radius: 20px solid black;

}

.btn{
    border: 1px solid white;
}

.btn:hover{
    background-color:white;

}

/* 
button {
    border: none;
    background: #00FFFF; */
  
    /* border-radius: 15px; */
    /* width: 150px;
    font-size: 90%;
    transition-duration: 0.4s;
    cursor: pointer;
} */
    </style>
</head>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>
<body id="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarr">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="img/img12.jpeg" alt="" width="40" height="40" class="d-inline-block align-text-top">
                <h6 class="title">BANK OF DREAMS</h6>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cardss">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#converter">Currency Converter </a>
                    </li>

                </ul>
                <form class="d-flex" >
                    <button class="btn btn-outline-success" type="submit" > <a href="customer.php" > Our Customers </a></button>
                    <button class="btn btn-outline-success" type="submit"> <a href="transfer_history.php">View History </a> </button>
                </form>
            </div>
        </div>
    </nav>

    
    
<section>
        <h2 class="heading">Customer Details</h2>
    <div class="table-responsive-sm">
        <table class="table">
                    <thead class="theading">
                    <tr id="head">
                        <th >Id</th>
                        <th >Account No.</th>
                        <th >Customer Name</th>
                        <th>Phone Number</th>
                        <th>Balance(in Rs.)</th>
                        <th>Transfer Money</th>
                        </tr>
                    </thead>
            <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                 <tr>
                    <td class="py-2"><?php echo $rows['Id'] ?></td>
                    <td class="py-2"><?php echo $rows['AccountNo']?></td>
                    <td class="py-2"><?php echo $rows['Name']?></td>
                    <td class="py-2"><?php echo $rows['PhoneNo']?></td>
                    <td class="py-2"><?php echo $rows['Balance']?></td>
                    <td class="text-center"><a href="transfer.php?AccountNo= <?php echo $rows['AccountNo'] ;?>"> <button type="button" class="button">Transfer</button></a></td> 
                </tr>
            <?php
                }
            ?>
            </table>
    </div>
    </section>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
        integrity=" sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
        crossorigin=" anonymous "></script>
</body>

</html>