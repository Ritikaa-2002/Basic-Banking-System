<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Banking</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .btn{
        border: 1px solid white;
        }

        .btn:hover{
        background-color:white;

        }

        .bg-dark{
                background-color: #343a40!important;

                }
        
        body {
                background:url('img/bg1.jpg') center center/cover  ;
                height:100vh;
            }
        
        .section_heading {
            text-align: center;
            margin-top: 19px;
            /* padding-top: 24px; */
            color: black;
            /* font-family: emoji; */
            }
        
        /* .section_heading span:nth-child(2) {
            display: block;
            margin: 6px auto;
            width: 163px;
            height: 4px;
            border-radius: 10px;
            background: rgb(8 255 232 / 64%);
        }
         */
        /* .heading {
            text-align: center;
            color: white;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        } */
        
        .table {
            width: 79%;
            /* margin: 0px auto; */
            margin-top: -28px;
            position: absolute;
            font-size: 17px;
            border: 2px solid black;
            left: 9.8%;
            top: 25%;
            box-shadow: 0px 0px 20px grey;
            border-collapse: collapse;
}
        
        #head {
            text-align: center;
            opacity: 0.9;
            background-color:white;
            color:black;
        }
        
        td {
            background-color: white;
            font-weight: bold;
            border: 1px;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-weight: 500;

           
        }
        
        tr {
            background-color: white;
            opacity: 0.6;
        }
        
        tr:hover {
            background-color:black;
            color: white;
            opacity: 0.5;
            cursor:pointer;
        }
        
        button {
            background: #9695b9;
            border-radius: 2px solid black;
            font-size: 90%;
            transition-duration: 0.4s;
            cursor: pointer;

        }

        
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM transfer_history";
    $result = mysqli_query($conn,$sql);
?>
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
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit"> <a href="customer.php"> Our Customers </a></button>
                    <button class="btn btn-outline-success" type="submit"> <a href="transfer_history.php">View History </a> </button>
                </form>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>


        <section>
        <h2 class="section_heading">
                    <span>Transaction History</span>
                    <span></span>
                </h2>
            <div class="table-responsive-sm">
                <table class="table">
                    <thead class="theading">
                        <tr id="head">
                            <th>Transferred From</th>
                            <th>Transferred to</th>
                            <th>Amount Transferred(in Rs.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td class="py-2">
                                    <?php echo $rows['sender'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['receiver']?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['amount']?>
                                </td>
                            </tr>
                            <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
</body>

</html>