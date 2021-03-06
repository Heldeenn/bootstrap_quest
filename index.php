<!DOCTYPE html>
<html lang="en">
<head>
    <title>FindThePrecious</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>

<?php
include 'header.php';
?>

    <section class="carousel-section">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x200.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Dangerous fellowship try to destroy the ring</h5>
                            <p>Orcs, Goblins, Balrogs, protect yout master Sauron !</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x200.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x200.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="fellows">
        <div class="title-section-fellows">
            <h1>Fellows wanted dead</h1>
            <p>(or alive if you want to eat them)</p>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-xs-1">
                    <div class="card card-hover">
                        <figure class="reward">
                            <img src="https://via.placeholder.com/305x180.png" class="card-img-top" alt="...">
                            <figcaption class="text-light bg-secondary">Reward 1000 gold coins</figcaption>
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title">The wizard</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-1">
                    <div class="card">
                        <figure class="dead">
                            <img src="https://via.placeholder.com/305x180.png" class="card-img-top" alt="...">
                            <figcaption class="text-dark">Dead</figcaption>
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title">Hobbit #3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-1">
                    <div class="card">
                        <figure class="reward">
                            <img src="https://via.placeholder.com/305x180.png" class="card-img-top" alt="...">
                            <figcaption class="text-light bg-secondary">Reward 250 gold coins</figcaption>
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title">Yummy Dwarf</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br/>
    <hr>
    <br/>

    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form action="index.html" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="@">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Mordor">
                        </div>
                        <div class="form-group">
                            <label for="choose">What is your request?</label>
                            <select id="choose" class="form-control">
                                <option selected>I've seen one of them</option>
                                <option>I want my reward</option>
                                <option>I've caught one of them</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="5" cols="50" class="form-control" id="message" placeholder="Hi! I'm your Master Sauron :)"></textarea>
                        </div>
                        <div class="button-flex">
                            <button type="submit" class="btn btn-secondary mb-3">Send !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>