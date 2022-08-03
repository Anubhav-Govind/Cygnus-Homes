<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = test_input($_POST["ID_BUY"]);

    if ($id == "11") {
        $_SESSION["flat_name"] = "Jamuna Apartment, Flat No. 409, Delhi";
    } elseif ($id == "12") {
        $_SESSION["flat_name"] = "Riverview Apartment, Flat No. 503, Noida";
    } elseif ($id == "13") {
        $_SESSION["flat_name"] = "Laxmi Apartment, Flat No. 105, Gurugram";
    } elseif ($id == "14") {
        $_SESSION["flat_name"] = "Christ Apartment, Flat No. 601, Faridabad";
    } elseif ($id == "21") {
        $_SESSION["flat_name"] = "Mangalam Apartment, Flat No. 409, Delhi";
    } elseif ($id == "22") {
        $_SESSION["flat_name"] = "Oceanview Apartment, Flat No. 503, Noida";
    } elseif ($id == "23") {
        $_SESSION["flat_name"] = "Saraswati Apartment, Flat No. 105, Gurugram";
    } elseif ($id == "24") {
        $_SESSION["flat_name"] = "Jesus Apartment, Flat No. 601, Faridabad";
    } elseif ($id == "31") {
        $_SESSION["flat_name"] = "Brahmputra Apartment, Flat No. 409, Delhi";
    } elseif ($id == "32") {
        $_SESSION["flat_name"] = "Lakeview Apartment, Flat No. 503, Noida";
    } elseif ($id == "33") {
        $_SESSION["flat_name"] = "Sugandha Apartment, Flat No. 105, Gurugram";
    } elseif ($id == "34") {
        $_SESSION["flat_name"] = "Mary Apartment, Flat No. 601, Faridabad";
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .drop-custom:hover {
            color: black !important
        }

        button.svg {
            position: relative;

            height: 50px;

            margin: 10px 7px;
            padding: 5px 12px;
            font-weight: 500;
            font-size: 26px;

            color: #d6f1e2;
            border: 2px transparent;
            border-radius: 4px;

            outline: 0;
            overflow: hidden;
            background: none;
            z-index: 1;
            cursor: pointer;
            transition: 0.08s ease-in;
            -o-transition: 0.08s ease-in;
            -ms-transition: 0.08s ease-in;
            -moz-transition: 0.08s ease-in;
            -webkit-transition: 0.08s ease-in;
        }

        .svg {
            -webkit-transition: all 250ms cubic-bezier(0.445, 0.050, 0.550, 0.950);
        }

        .svg:before {
            position: absolute;
            content: "";
            background: url(https://f.cl.ly/items/3H3A0D1N281a2T280F3o/heist.svg) no-repeat center center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0;
            -webkit-transition: all 350ms cubic-bezier(0.230, 1.000, 0.320, 1.000);
        }

        .svg:after {
            content: "";
            position: absolute;
            background: #00a043;
            bottom: 0;
            left: 0;
            right: 0;
            top: 100%;
            z-index: -2;
            -webkit-transition: all 350ms cubic-bezier(0.230, 1.000, 0.320, 1.000);
        }

        .svg:hover {
            color: white;
            border: 0px #00a043 solid;
        }

        .svg:hover:before {
            opacity: .8;
        }

        .svg:hover:after {
            top: 0;
        }
    </style>

    <title>Confirm Buy</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background: linear-gradient(to right, #078d5a , #2ea2aa, #065392 ); color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand " href="#" style="font-size: 80px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Cygnus
                Homes</a>
            <div class="mr-auto d-flex">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <button class="   svg" aria-current="page" onclick="location.href='home.html'">Home</button>
                    </li>

                    <li class="nav-item ">
                        <button class=" svg" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</button>
                    </li>

                    <li class="nav-item dropdown">
                        <button class="   svg" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                            Homes
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end bg-success" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white  fs-5 drop-custom" href="1-bhk _new.html">1 BHK</a>
                            </li>
                            <li><a class="dropdown-item text-white  fs-5 drop-custom" href="2-bhk _new.html">2 BHK</a>
                            </li>
                            <li><a class="dropdown-item text-white  fs-5 drop-custom" href="3-bhk _new.html">3 BHK</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <button class="   svg" aria-current="page" onclick="location.href='contact.html'">Contact</button>
                    </li>
                    <li class="nav-item">
                        <button class="   svg" aria-current="page" onclick="location.href='about.html'">About</button>
                    </li>
                </ul>


            </div>
    </nav>

    <!-- Vertically centered modal -->
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold mb-0">Log In</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                        
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Background image --
            <div class="bg-image" style="
                   background-image: linear-gradient(rgba(0, 0, 0, 0.274),rgba(0, 0, 0, 0.5)),url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.webp');
                   height: 100vh;"
                   ></div>
             Background image -->

    <!--Making Form -->
    <main>
        <form class="row g-3" method="post" action="Receipt(buy).php">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="Name">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="Email">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
            </div>
            <div class="col-12">
                <?php
                $x = $_SESSION["flat_name"];
                echo "<h4>$x</h4>";
                ?>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="City">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Job Profile</label>
                <select id="inputState" class="form-select" name="Job">
                    <option selected>Government</option>
                    <option>Private</option>
                    <option>Self Employed</option>
                    <option>Military</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Buy</button>
            </div>
        </form>
    </main>

    <!-- Below is the footer -->

    <div class="container bg-dark text-white" style="max-width: 100%;">
        <footer class="py-5">
            <div class="row">
                <div class="col-4">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>


                <div class="col-6 offset-1">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2021 Cygnus Homes, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>