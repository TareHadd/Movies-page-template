<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg-dark">
<nav class="nav-nav d-flex justify-content-between container align-items-center p-4 py-5" style="height: 50px;">
        <div class="left">
            <a class="text-light" style="margin-right: 50px; text-decoration: none;" href="#">MovieApp</a>
            <a class="text-light mx-2 text-decoration-none" href="#">Movies</a>
            <a class="text-light mx-2 text-decoration-none" href="#">TV Shows</a>
            <a class="text-light mx-2 text-decoration-none" href="#">Actors</a>
        </div>
        <div class="search px-2 py-1" style="background: rgba(255, 255, 255, 0.2); border-radius: 20px;">
            <svg style=" color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            <input type="text" placeholder="Search" class="px-1" style="background: transparent;
            outline: none;
            border: none;
            color: white;">

        </div>
        <div class="button" id="button" onclick="openClose()">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
    </nav>
    <hr class="bg-light m-0">

    <!--  -->

    <div id="toggle" class="side-nav close d-flex flex-column" style="overflow: hidden;">
        <div class="w-100 bg-dark toggle-btn" id="toggle-child">
            <div class="button" id="button" onclick="openClose()">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </div>
        </div>
        <div id="menu" class="menu">
            <ul>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">Actors</a></li>
            </ul>
        </div>
    </div>

    <!--    -->


    <hr class="bg-light m-0" style="opacity: 0.1;">

    <main class="w-100 h-100">
        <div class="movies container w-100 h-100">
            <div class="row mt-5 justify-content-between">

                <!--  -->
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-5 col-8" style="height: fit-content;  height:500px;">
                    <img src="https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="" class=" shadow img-main img-fluid">
                </div>

                <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6 col-12 bg-scondary d-flex flex-column align-items-start">
                    <h2 class="text-light">Avengers: Battle of cattle</h2>
                    <p class="text-light d-flex align-items-center fw-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-star-fill text-warning mx-1" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        65% | Dec 18, 2019. | Action, Fantasy, Idiotism
                    </p>
                    <p class="mt-4 text-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta, sed. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, provident!
                    </p>
                    <br>
                    <p class="text-light fw-bold">Featured Crew</p>
                    <div class=" d-flex">
                        <div class="d-flex flex-column text-light ">
                            <p class="m-0">George Lucas</p>
                            <p class="fw-light fs-6">Characters</p>
                        </div>
                        <div class="d-flex flex-column text-light mx-5">
                            <p class="m-0">John Wiliams</p>
                            <p class="fw-light fs-6">Sound and stuff</p>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-warning d-flex align-items-center mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                        </svg>
                        <p class="m-0 px-2">Play trailer</p>
                    </button>
                </div>

            </div>
        </div>
    </main>



    <!-- SECTION ACTORS  -->
    <hr class="bg-light m-0 mt-5 mb-5 fw-lighter" style="opacity: 0.1;">
    <section class="cast container">
        <div class="row my-5">
            <div class="col-12">
                <h4 class="text-light fs-1 fw-normal">Cast</h4>
            </div>
        </div>
        <div class="row w-100 d-flex justify-content-between m-0">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="col-lg-2 col-md-3 col-sm-5 col-6" style="cursor: pointer;">
                    <img src="https://www.californiamuseum.org/sites/main/files/imagecache/lightbox/main-images/robertdowneyjr_cahalloffameinductee.png" alt="" class="img-fluid shadow-sm">
                    <div class="d-flex flex-column my-3">
                        <p class="text-light m-0">Robert Downey Jr.</p>
                        <p class="text-light fw-light">Tony Stark</p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
    <!--  -->

    <hr class="bg-light m-0 mt-5 mb-5 fw-lighter " style="opacity: 0.1;">
    <!-- SECTION IMAGES -->
    <section class="images container  mt-5">
        <div class="row my-5">
            <div class="col-12">
                <h4 class="text-light fs-1 fw-normal">Images</h4>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="col-lg-3 col-md-5 mb-4" style="cursor: pointer;">
                    <img src="https://img.mensxp.com/media/content/2020/Sep/header-credit-Marvel-Studios_5f741da26f175_1200x900.jpeg" alt="" class="img-fluid  shadow">
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- FOOTER  -->
    <footer style="height: 400px;">
        <div class="d-flex justify-content-center align-items-baseline text-light h-100">
            <p class="mt-auto">Made by Aslan PTS</p>
        </div>
    </footer>


    <script>
        function openClose() {

            document.getElementById("toggle").classList.toggle("open");
        }
    </script>

</body>

</html>