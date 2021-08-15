<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=MonteCarlo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- contactus/footer -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <title>Banking</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarr">
        <div class="container-fluid">
            <a class="navbar-brand" href="#navbarr">
                <img src="img/img12.jpeg" alt="" width="40" height="40" class="d-inline-block align-text-top">
                <h6 class="title">BANK OF DREAMS</h6>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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


    <!-- slider -->

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img73.png" class="d-block w-100" alt="..." height="560px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Getting Started?</h5>
                    <p>New here? No worries. Just create an account with easy steps and get your own bank account.</p>

                </div>
            </div>


            <div class="carousel-item">
                <img src="img/img71.png" class="d-block w-100" alt="..." height="560px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Saftey First</h5>
                    <p>Let it be you Pin or your health, both need a complete security. Here we provide that to you.</p>

                </div>
            </div>


            <div class="carousel-item">
                <img src="img/img69.png" class="d-block w-100" alt="..." height="560px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Smart Investments</h5>
                    <p>Get direct consulting with our experts and play the card of smart investment.</p>

                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <!-- card -->

    <div class=" sectioncard bg" id="cardss">

        <h1 class="heading" data-aos="fade-up" data-delay="50">What we offer you</h1>
        <div class="boxesContainer d-flex justify-content-sm-evenly">
            <div class="cardBox" data-aos="fade-right" data-delay="150" >
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body" >
                                <h6 class="loans">PERSONAL LOAN</h6>
                                <h6 class="loans">₹8,000 - ₹80,000</h6>
                            </div>
                            <img src="img/img45.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>

                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Apply Now</a>
                    </div>

                </div>
            </div>

            <div class="cardBox" data-aos="fade-right" data-delay="1500" >
                <div class="card">
                    <div class="front">
                        <div class="cardclass " style="width: 18rem; " >

                            <div class="card-body ">
                                <h6 class="loans">CAR LOAN</h6>
                                <h6 class="loans">₹5,000 - ₹1,80,000</h6>
                            </div>
                            <img src="img/img48.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>
                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Apply Now</a>
                    </div>

                </div>
            </div>

            <div class="cardBox" data-aos="fade-left" data-delay="1500" >
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body">
                                <h6 class="loans">EDUCATION LOAN</h6>
                                <h6 class="loans">₹2,000 - ₹4,80,000</h6>
                            </div>
                            <img src="img/img43.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>
                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Apply Now</a>
                    </div>

                </div>

            </div>
            <div class="cardBox" data-aos="fade-left" data-delay="1500" >
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body">
                                <h6 class="loans">HOME LOAN</h6>
                                <h6 class="loans">₹80,000 - ₹10,80,000</h6>
                            </div>
                            <img src="img/img46.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>

                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Learn More</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- card2 -->


    <div class="bg sectioncard">


        <div class="boxesContainer d-flex justify-content-sm-evenly ">
            <div class="cardBox" data-aos="fade-right" data-delay="3000" >
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body" >
                                <h6 class="loans">INTERNET BANKING</h6>
                            </div>
                            <img src="img/img49.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>
                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Learn More</a>
                    </div>

                </div>
            </div>

            <div class="cardBox" data-aos="fade-bottom" data-delay="3000">
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body">
                                <h6 class="loans">MOBILE BANKING</h6>
                            </div>
                            <img src="img/img42.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>
                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Learn More</a>
                    </div>

                </div>
            </div>

            <div class="cardBox" data-aos="fade-left" data-delay="3000">
                <div class="card">
                    <div class="front">
                        <div class="cardclass" style="width: 18rem; ">

                            <div class="card-body">
                                <h6 class="loans">ATM</h6>
                            </div>
                            <img src="img/img47.png" class="card-img-top align-items-center" alt="..." height="150px"
                                width="10px" id="image">
                        </div>
                    </div>
                    <div class="back">
                        <div class="list">
                            <ul class="liststyle">
                                <li>Borrow - $350 over 3 months</li>
                                <li>Interest rate - 292% pa fixed</li>
                                <li>Total amount - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                        </div>
                        <a class="button" href="#">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Services -->

    <h1 class="services" >Our Services</h1>

    <section class="cardd d-flex justify-content-evenly " data-aos="fade-left" data-delay="150">

        <div class="cardclass" style="width: 18rem;">
            <img src="img/img24.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage">
            <div class="card-body">
                <h5>Business Consulting</h5>
                <p>Our Business Consulting Services are structured to address a company’s end-to-end business needs. We
                    provide comprehensive services to support your business by guiding you professionally.</p>
            </div>
        </div>

        <div class="cardclass" style="width: 18rem;">

            <img src="img/img25.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage">
            <div class="card-body">
                <h5>Income Monitoring</h5>
                <p>The primary purpose when monitoring expenditure against income is to ensure that expenditure does not
                    exceed the available income.The departmental administrators spot disturbance.</p>
            </div>
        </div>

        <div class="cardclass" style="width: 18rem;">
            <img src="img/img26.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage">
            <div class="card-body">
                <h5>Credit Card</h5>
                <p>To ensure you are always on top of Credit Card bills, there are multiple options to seamlessly and
                    swiftly clear credit dues via online or offline channels at zero cost efforlessly and easily..</p>
            </div>
        </div>

    </section>

    <br><br><br>

    <section class="cardd d-flex justify-content-evenly " data-aos="fade-right" data-delay="150">
        <div class="cardclass" style="width: 18rem;">
            <img src="img/img23.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage">
            <div class="card-body">
                <h5>Insurance Consulting</h5>
                <p>An established insurance broking and risk management company works closely with clients and spends
                    considerable time in understanding the business and the risks associated with it.</p>
            </div>
        </div>

        <div class="cardclass" style="width: 18rem;">
            <img src="img/img28.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage1">
            <div class="card-body">
                <h5>Financial Investment</h5>
                <p>We will guide you through the potential outcomes of a variety of traditional options, to help you
                    align your risk tolerance with your desired investment performance. Be safe with us.</p>
            </div>
        </div>

        <div class="cardclass" style="width: 18rem;">
            <img src="img/img29.png" class="card-img-top" alt="..." height="150px" width="10px" id="tryimage">
            <div class="card-body">
                <h5>Financial Management</h5>
                <p>Our team helps a client to define the role of finance in driving the strategic business imperatives.
                    We'll help you to clearly articulate its Finance vision and strategy that is fit for purpose.</p>
            </div>
        </div>
    </section>


    <!-- CURRECNY CONVERTER -->


    <link rel="stylesheet" href="css/home.css" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <div class="currency-row-outer" id="converter">
        <div class="currency-converter">
            <h2>Currency Converter</h2>

            <div class="field grid-50-50">
                <div class="colmun col-left">
                    <input type="number" class="form-input" id="number" placeholder="00000">
                </div>
                <div class="colmun col-right">
                    <div class="select">
                        <select name="currency" class="currency" onchange="updatevalue()"></select>
                    </div>
                </div>
            </div>

            <div class="field grid-50-50">
                <div class="colmun col-left">
                    <input type="text" class="form-input" id="output" placeholder="00000" disabled>
                </div>
                <div class="colmun col-right">
                    <div class="select">
                        <select name="currency" class="currency" onchange="updatevalue()"></select>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        const select = document.querySelectorAll('.currency');
        const number = document.getElementById("number");
        const output = document.getElementById("output");


        fetch('https://api.frankfurter.app/currencies').then((data) => data.json())
            .then((data) => {
                display(data);
            });


        function display(data) {
            const entries = Object.entries(data);
            for (var i = 0; i < entries.length; i++) {
                select[0].innerHTML += `<option value="${entries[i][0]}">${entries[i][0]} : ${entries[i][1]}</option>`;
                select[1].innerHTML += `<option value="${entries[i][0]}">${entries[i][0]} : ${entries[i][1]}</option>`;
            }
        }



        function updatevalue() {
            let currency1 = select[0].value;
            let currency2 = select[1].value;

            let value = number.value;


            if (currency1 != currency2) {
                convert(currency1, currency2, value);
            } else {
                alert("Choose Diffrent Currency");
            }
        }


        function convert(currency1, currency2, value) {
            const host = "api.frankfurter.app";

            fetch(`https://${host}/latest?amount=${value}&from=${currency1}&to=${currency2}`)
                .then((val) => val.json())
                .then((val) => {
                    console.log(Object.values(val.rates)[0]);
                    output.value = Object.values(val.rates)[0];
                });

        }
    </script>


    <!-- Contact us  -->



    <section id="contact">
        <div class="container">
            <div class="well well-sm">
                <br><br>
                <h3><strong class="contactclass">CONTACT US</strong></h3>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230"
                        width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-md-5">
                    <h4><strong>Get in Touch</strong></h4>
                    <p>We are here assist you.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-default" type="submit" name="button">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Get a call back
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>







    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">




    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col" id="footertry4">
                    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                    <p class="mb10" id="footertry3">We are committed to serving our millions of retail, business, wealth
                        management, payment, commercial and corporate, and investment services customers across the
                        country</p>
                    <p><i class="fa fa-location-arrow"></i>Mumbai</p>
                    <p><i class="fa fa-phone"></i> +91-9899878398 </p>
                    <p><i class="fa fa fa-envelope"></i> info@bankofdreams.com </p>


                </div>
                
                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <ul class="footer_ul_amrc" id="footertry">
                        <li><a href="http://webenlance.com">Credit Card</a></li>
                        <li><a href="http://webenlance.com">Deposits</a></li>
                        <li><a href="http://webenlance.com">Loans Forms</a></li>
                        <li><a href="http://webenlance.com">Re-KYC Form</a></li>
                        <li><a href="http://webenlance.com">Dispute Form</a></li>

                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Insurance</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc" id="footertry1">
                        <li><a href="http://webenlance.com"> Life Insurance</a></li>
                        <li><a href="http://webenlance.com"> Health Insurance</a></li>
                        <li><a href="http://webenlance.com"> Vechicle Insurance</a></li>
                        <li><a href="http://webenlance.com">Home Insurance</a></li>
                        <li><a href="http://webenlance.com">Travel Insurance</a></li>

                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2" id="footertry6">Follow us</h5>


                    <ul class="footer_ul2_amrc align-items-center justify-content-md-center" id="footertry5">
                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                            <p><a href="https://twitter.com/?lang=en" target="_blank">https://twitter.com/?lang=en</a>
                            </p>
                        </li>
                        <li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
                            <p><a href="https://www.instagram.com/" target="_blank">https://www.instagram.com/</a></p>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin fleft padding-right"></i> </a>
                            <p><a href="https://www.linkedin.com/feed/"
                                    target="_blank">https://www.linkedin.com/feed/</a></p>
                        </li>
                        <li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>
                            <p><a href="https://www.facebook.com/" target="_blank">https://www.facebook.com//</a></p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="container">
            <ul class="foote_bottom_ul_amrc">
                <li><a href="http://webenlance.com">Home</a></li>
                <!-- <li><a href="http://webenlance.com">About</a></li> -->
                <li><a href="http://webenlance.com">Services</a></li>
                <li><a href="http://webenlance.com">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2021 | Designed by <a href="#navbarr"></a>ritikajain <br> Bank of
                Dreams</p>

            <ul class="social_footer_ul">
                <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>




        <script>
            AOS.init({
                delay: 100,
                duration: 1000,
                easing: 'ease-in-out',
                once: true
            });
        </script>
        <script src="js/about.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" defer></script>  

</body>


</html>