<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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

    <main class="w-100">
        <div class="movies container w-100 h-100">
            <div class="row mt-5 justify-content-center">
                <?php for ($i = 1; $i < 12; $i++) : ?>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-10  m-4 p-0" style="height: fit-content; cursor: pointer;">
                        <a href="./single-movie.php" class="text-decoration-none">
                            <img src="https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="" class="w-100 h-75 rounded-3 shadow">
                            <h4 class="text-light mt-2 mb-1 fs-5">Movie name</h4>
                            <p class="text-light m-0 fs-6 fw-light">Nesto | Nesto</p>
                            <p class="text-light fs-6 fw-light">Adventure, Comedy, Romance, SCI-FI</p>
                        </a>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </main>

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