<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Background</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" />
    <link rel="stylesheet" href="resources\css\nav.css" />
    <link rel="stylesheet" href="resources\css\sidebar.css" />
    <link rel="stylesheet" href="resources\css\virtual.css" />
</head>
<body>
     <!-- navbar -->
     @include('layouts.header');
     <!-- sidebar -->
    @include('layouts.sidebar');

        <!-- home -->
    <div class="container">
        <div class="row justify-content-center mt-5 ms-5 ps-lg-0 ps-4">
            <p id="go"><i class="bi bi-arrow-left me-3"></i>Go Back</p>
            <form action="">
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="name" class="form-label ">Title</label>
                        <input type="text" class="form-control mt-3" value="Praveen" id="name">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-lg-0 mt-md-0 mt-3">
                        <label for="card" class="form-label ">Assign to card</label>
                        <div class="input-group mt-3">
                            <select class="form-select form-control" id="card" >
                              <option selected>Choose...</option>
                              <option value="1">Personal</option>
                              <option value="2">Business</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6 mt-5">
                <img src="public/image/Rectangle.png" alt="virtual" id="vt-img">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-5 text-center">
                <button id="download" class="mt-lg-5 mt-md-5 mt-sm-2">Download</button>
                <p id="button-text" class="mt-3">Your custom background will save as 1920*1080px</p>
            </div>
        </div>
        <!-- carousel 1-->
        <div class=" text-center my-3 mt-5 ms-5 ps-lg-0 ps-4">
            <p id="card-head"> Abstract</p>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/abstract/258521_transparent.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/abs.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/abstract-flower.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/black.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/block.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/blue.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/blueblock.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/image.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/images.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/lik.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/pgeometric-shape.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/pink.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/Rectangle2074.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/Rectangle2072.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/Rectangle-2076.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/Rectangle-2077.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/Rectangle2075.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/violet.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-3 mx-md-3 mx-0">
                                <img src="public/image/abstract/yblock.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- carousel 2 -->
        <div class=" text-center my-3 mt-5 ms-5 ps-lg-0 ps-4">
            <p id="card-head"> Nature</p>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipe" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/blue.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/col.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/cyc.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/g.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/leaf.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/light.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/moon.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/nat.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/pea.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/pink.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/Rectangle-2074.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/Rectangle-2075.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/Rectangle-2076.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/Rectangle-2077.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/Rectangle-2099.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/snow.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/nature/stone.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipe" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipe" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- carousel 3 -->
        <div class=" text-center my-3 mt-5 ms-5 ps-lg-0 ps-4">
            <p id="card-head"> City</p>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="city" class="carousel  slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/blue.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/build.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/bus.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/doll.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/pink.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/Rectangle-2074.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/Rectangle-2075.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/Rectangle-2076.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col">
                                <img src="public/image/city/Rectangle-2077.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/Rectangle-2099.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/round.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/snow.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/street.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/sun.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/tower.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/violet.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/city/wave.png" alt="abstract" id="card-img">
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#city" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#city" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- carousel 4 -->
        <div class=" text-center my-3 mt-5 ms-5 ps-lg-0 ps-4">
            <p id="card-head"> Iconic</p>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="iconic" class="carousel  slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/2074.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/2075.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/2076.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/2077.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/2099.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/bird.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/green.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/lan.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/math.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/phone.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/science.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/screen.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/star.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/stone.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/temple.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/tower.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/iconic/watch.png" alt="abstract" id="card-img">
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#iconic" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#iconic" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

         <!-- carousel 5 -->
         <div class="text-center my-3 mt-5 ms-5 ps-lg-0 ps-4">
            <p id="card-head"> Indoor</p>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="indoor" class="carousel  slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/animi.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/black.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/blue.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/brown.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/circle.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/door.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/fan.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/pot.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/Rectangle-2074.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/Rectangle-2075.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/Rectangle-2076.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/Rectangle-2077.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/Rectangle-2099.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/sofa.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/space.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/tree.png" alt="abstract" id="card-img">
                            </div>
                        </div>
                        <div class="carousel-item" style="transition: none;">
                            <div class="col mx-lg-0 mx-md-3 mx-0">
                                <img src="public/image/indoor/yellow.png" alt="abstract" id="card-img">
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#indoor" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#indoor" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

    </div>





    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4;
            let next = el.nextElementSibling;
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0];
                  }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        })
    </script>
    <script>
        let sidebar = document.querySelector(".sidebar");
         let closeBtn = document.querySelector("#btn");
         let searchBtn = document.querySelector(".bx-search");

         closeBtn.addEventListener("click", () => {
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         searchBtn.addEventListener("click", () => {
           // Sidebar open when you click on the search iocn
           sidebar.classList.toggle("open");
           menuBtnChange(); //calling the function(optional)
         });

         // following are the code to change sidebar button(optional)
         function menuBtnChange() {
           if (sidebar.classList.contains("open")) {
             closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
           } else {
             closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
           }
         }

   </script>
</body>
</html>
