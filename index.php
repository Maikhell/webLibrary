<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="./design/mains.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="myNavbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Re: Libraries</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner bg-dark text-white">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-between">
                        <div class="info-section p-3">
                            <h1>Top Book 1 </h1>
                            <h5>Author Name </h5>
                            <p>Date Published </p>
                            <span class="badge bg-light text-dark">Classic </span>
                            <span class="badge bg-light text-dark">Drama </span>
                            <span class="badge bg-light text-dark">Crime </span>
                            <span class="badge bg-light text-dark">Anthology</span>

                            <p class="info-carousel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi facilis accusamus assumenda pariatur, quis quasi, tempore ea expedita ducimus omnis sapiente illum perspiciatis rerum fugiat fuga aliquid quisquam delectus vero.
                            </p>

                            <p>Language Available</p>
                            <span class="badge bg-info text-dark">En</span>
                            <span class="badge bg-warning text-dark">Es</span>
                            <span class="badge bg-success text-dark">Fr</span>
                            <span class="badge bg-danger text-dark">Jp</span>
                        </div>
                        <img src="./images/FOREST-NIGHT 8k.png" class=" d-block w-50" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-between">
                        <div class="info-section p-3">
                            <h3>Top Book 2 </h3>
                            <p>Info about the book</p>
                        </div>
                        <img src="./images/FOREST-NIGHT 8k.png" class=" d-block w-50" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-between">
                        <div class="info-section p-3">
                            <h3>Top Book 3 </h3>
                            <p>Info about the book</p>
                        </div>
                        <img src="./images/FOREST-NIGHT 8k.png" class=" d-block w-50" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    </div>
    </div>

    <div class="container" id="card-layout">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 14rem;">
                    <img src="./images/bleach.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title">Book 1 </h5>
                        <span class="badge bg-info text-dark">En</span>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="./jquery/jquery-3.7.1.min.js"></script>

</html>