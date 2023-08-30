<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pinterest</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./assets/css/flexmasonry.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
</head>
<body>
    <header class="shadow-sm">
        <div class="row container-fluid py-3 first">
            <div class="col-md">
                <ul class="navbar-nav gap-1 d-flex flex-row">
                    <li class="nav-item dropdown">
                        <button class="btn btn-light rounded-5 py-2 dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg style="filter: invert(11%) sepia(96%) saturate(4367%) hue-rotate(343deg) brightness(104%) contrast(113%);"
                                height="24" width="24" viewBox="0 0 24 24" aria-label="Pinterest" role="img">
                                <path d="M0 12c0 5.123 3.211 9.497 7.73 11.218-.11-.937-.227-2.482.025-3.566.217-.932 1.401-5.938 1.401-5.938s-.357-.715-.357-1.774c0-1.66.962-2.9 2.161-2.9 1.02 0 1.512.765 1.512 1.682 0 1.025-.653 2.557-.99 3.978-.281 1.189.597 2.159 1.769 2.159 2.123 0 3.756-2.239 3.756-5.471 0-2.861-2.056-4.86-4.991-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.027.395 2.127.889 2.726a.36.36 0 0 1 .083.343c-.091.378-.293 1.189-.332 1.355-.053.218-.173.265-.4.159-1.492-.694-2.424-2.875-2.424-4.627 0-3.769 2.737-7.229 7.892-7.229 4.144 0 7.365 2.953 7.365 6.899 0 4.117-2.595 7.431-6.199 7.431-1.211 0-2.348-.63-2.738-1.373 0 0-.599 2.282-.744 2.84-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12"></path>
                            </svg>
                            <label class="px-2 fw-semibold">Bussiness</label>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light rounded-4 p-2 shadow">
                            <li><a class="dropdown-item rounded" href="#">Business hub</a></li>
                            <li><a class="dropdown-item rounded" href="#">Home feed</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-light rounded-5 py-2 px-3 dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <label class="px-2 fw-semibold fw-semibold">Create</label>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light rounded-4 p-2 shadow">
                            <li><a class="dropdown-item rounded" href="#">Create Idea Pin</a></li>
                            <li><a class="dropdown-item rounded" href="#">Create Pin</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-light rounded-5 py-2 px-3 dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <label class="px-2 fw-semibold fw-semibold">Analytics</label>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light rounded-4 p-2 shadow">
                            <li><a class="dropdown-item rounded" href="#">Overview</a></li>
                            <li><a class="dropdown-item rounded" href="#">Audience Insights</a></li>
                            <li><a class="dropdown-item rounded" href="#">Trends</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md d-flex justify-content-end gap-2">
                <button class="btn btn-light d-flex align-items-center p-2" style="border-radius: 50%;">
                    <svg style="filter: invert(40%) sepia(3%) saturate(5%) hue-rotate(330deg) brightness(90%) contrast(91%);" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img"><path d="M10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6m13.12 2.88-4.26-4.26A9.842 9.842 0 0 0 20 10c0-5.52-4.48-10-10-10S0 4.48 0 10s4.48 10 10 10c1.67 0 3.24-.41 4.62-1.14l4.26 4.26a3 3 0 0 0 4.24 0 3 3 0 0 0 0-4.24"></path></svg>
                </button>
                <button class="btn btn-light d-flex align-items-center p-2" style="border-radius: 50%;">
                    <svg style="filter: invert(40%) sepia(3%) saturate(5%) hue-rotate(330deg) brightness(90%) contrast(91%);" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img"><path d="M12 24c-1.66 0-3-1.34-3-3h6c0 1.66-1.34 3-3 3zm7-10.83c1.58 1.52 2.67 3.55 3 5.83H2c.33-2.28 1.42-4.31 3-5.83V7c0-3.87 3.13-7 7-7s7 3.13 7 7v6.17z"></path></svg>
                </button>
                <button class="btn btn-light d-flex align-items-center p-2" style="border-radius: 50%;">
                    <svg style="filter: invert(40%) sepia(3%) saturate(5%) hue-rotate(330deg) brightness(90%) contrast(91%);" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img"><path d="M18 12.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18 12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12 12.5m-6 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 6 12.5M12 0C5.925 0 1 4.925 1 11c0 2.653.94 5.086 2.504 6.986L2 24l5.336-3.049A10.93 10.93 0 0 0 12 22c6.075 0 11-4.925 11-11S18.075 0 12 0"></path></svg>
                </button>
                <button class="btn btn-light d-flex align-items-center p-2" style="border-radius: 50%;">
                    <img alt="Charlzk" style="height: 24px; width: 24px; border-radius: 50%;" fetchpriority="auto" loading="auto" src="https://i.pinimg.com/75x75_RS/81/fc/cb/81fccb5c0eca285d2477e143378feecc.jpg">
                </button>
            </div>
        </div>
        <div class="second d-flex justify-content-center">
            <p class="custom-p">For you</p>
        </div>
    </header>
    <main>
        <div class="grid-container">
            <div class="grid">
                <?php

                $dir = "./assets/imgs";
                $files = scandir($dir, SCANDIR_SORT_DESCENDING);

                foreach ($files as $file) {
                    echo "<div class='grid-item'><img src='./assets/imgs/$file'></div>";
                }

                ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./assets/js/flexmasonry.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>