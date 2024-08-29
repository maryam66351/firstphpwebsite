<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maryam-Portfolio</title>
    <!-- style sheet link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link for google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include'header.php'; ?>
    <main>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2ViJTIwZGV2ZWxvcGVyfGVufDB8fDB8fHww" alt="" class="d-block" style="width:100%; height:800px;object-fit:cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2024/02/22/03/05/information-8589033_640.png" alt="" class="d-block" style="width:100% ; height:800px;object-fit:cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://www.herzing.edu/sites/default/files/styles/fp_640_288/public/images/blog/web_developer.jpg.webp?itok=QABkWNY0" alt="" class="d-block" style="width:100%;height:800px;object-fit:cover;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">About Me </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 py-2">
                        <img src="https://i0.wp.com/moss51.com/wp-content/uploads/2023/09/Picture1.png?fit=602%2C401&ssl=1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 py-2">
                        <h2 class="display-4">ABOUT ME </h2>
                        <P class="py-5 d-flex  justify-content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis autem, dolorum a quod doloremque, eligendi cumque amet unde beatae vitae dignissimos at repellendus, consequatur doloribus molestiae expedita! Ratione, deleniti perspiciatis
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis autem, dolorum a quod doloremque, eligendi cumque amet unde beatae vitae dignissimos at repellendus, consequatur doloribus molestiae expedita! Ratione, deleniti perspiciatis!
                        </P>
                        <a href="about.php" class="btn btn-success">Wana know me </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Services</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnSOmfGKgdD6lQY1XbdZuNWSRDH6ujtT9VXA&s" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="https://www.uagc.edu/sites/default/files/styles/paid_hero_header_899x600/public/2020-11/what-is-information-technology-1280x560-1194430803.jpg.webp?itok=VB2eu0NQ" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="https://blog.tuf.edu.pk/wp-content/uploads/2021/06/Our-efforts-in-Information-technology.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Portfolio</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://www.techstore.pk/wp-content/uploads/2022/08/isometric-it-people-concept_1284-23188-600x600.webp" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">Explore More</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://media.licdn.com/dms/image/D5612AQGln5pcINcWHw/article-cover_image-shrink_720_1280/0/1675822319133?e=2147483647&v=beta&t=Vd4sSymR6ZDfnUvspPXvtCe9gGEacmMTjuVDm0yD6PE" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">Explore More</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://assets.datamation.com/uploads/2021/02/storage-696x364.png" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">Explore More</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://media.licdn.com/dms/image/D4D12AQFpF2u9iHNpLA/article-cover_image-shrink_600_2000/0/1661809239234?e=2147483647&v=beta&t=i_GJ6-Pl_oA4hr9nWMEM4nSCQ_QSpjSnfZuiMz-N5wc" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">Explore More</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://qph.cf2.quoracdn.net/main-qimg-be3154cecf407e702f020d1adad22223" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">2Explore More</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 pb-3">
                        <div class="imagecontainer">
                            <img src="https://www.appnovation.com/sites/default/files/2020-01/Blog-Hero-1440x600_2.png" alt="Avatar" class="image" style= "height: 250px; object-fit:cover;">
                            <div class="overlay">
                                <div class="text">Explore More</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Contact Me </h2>
            </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php " method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Comment</label>
                        <textarea class="form-control" name="comment"></textarea>
                    </div>
                    <button type="submit" class = "btn btn-primary my-5"> Submit</button>
                </form>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>
