<?php
include("header.php");
?>
    <body>
    <main>
        <section id="about-us" style="padding: 10px">
            <div class="container">
                <h1>About us</h1>
                <img class="img-responsive img-principal" src="../img/6.jpg"/>
                <div class="row">
                    <div class="col-xs-12 col-lg-6" style="float:left;">
                        <div class="collapse-itens">
                            <h3 data-toggle="collapse" data-target="#collapseOne">
                                <button class="btn-collapse">Since 2021</button>
                            </h3>
                            <p id="collapseOne" class="collapse in">Descrição do projeto - aplicativo</p>
                            <div>
                                <h3 data-toggle="collapse" data-target="#collapseTwo">
                                    <button class="btn-collapse">Services</button>
                                </h3>
                                <p id="collapseTwo" class="collapse">Descrição do projeto - aplicativo</p>
                            </div>
                            <div>
                                <h3 data-toggle="collapse" data-target="#collapseThree">
                                    <button class="btn-collapse">History</button>
                                </h3>
                                <p id="collapseThree" class="collapse">Descrição do projeto - aplicativo</p>
                            </div>
                        </div>
                    </div>
                    <div id="contact-us" class="col-xs-12 col-lg-6" style="float:left;">
                        <h3>Contact Us</h3>
                        <p>We will answer your question shortly.</p>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-group">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Choose...</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Options</option>
                                                    <option value="1">Questions and answers</option>
                                                    <option value="2">Complaint</option>
                                                    <option value="3">Comments</option>
                                                    <option value="4">Other...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 form-checkbox">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Anonymous?</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-name">Name:</label>
                                        <input id="form-name" type="text" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-cel">Telephone:</label>
                                        <input id="form-cel" type="text" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-email">Email:</label>
                                        <input id="form-email" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">Describe your message:</label>
                                        <input id="form-message" required type="text"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="accordion">
            <div class="container-fluid" style="margin:20px 0px;padding: 0px 0px;">
                <div class="text-center p-4" style="background: #E0E0E0;">
                    <h2 class="display-6" style="margin-bottom:10px;">Description Subtitle</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                </div>
            </div>
        </section>
        <section id="projects" style="padding: 10px">
            <div class="container">
                <h2>Projects</h2>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <figure class="thumbnail">
                            <img class="img-proj" src="../img/cute-sphynx-cat2.png"/>
                            <figcaption class="caption">
                                <p>Bathing crowd 1</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <figure class="thumbnail">
                            <img class="img-proj" src="../img/gold2.jpg"/>
                            <figcaption class="caption">
                                <p>Bathing crowd 1</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section id="depos">
            <h3 class="titulo-dep text-center">Together</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-sm-3 col-lg-6">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/1-1.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/1-0.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/1-2.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/1-3.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/1-4.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/1-5.png" class="d-block" alt="...">
                                    <div class="carousel-caption">
                                        <h5>Person ...</h5>
                                        <p>Description .......</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
    </main>
    </body>
<?php
include ("footer.php");
?>