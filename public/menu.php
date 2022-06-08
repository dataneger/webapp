<?php
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
?>
<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Tietjes</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Wietjes</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Liedjes</a></li>
            <li class="nav-item"><a href="/golfboek.php" class="nav-link link-dark px-2">GolfBoek</a></li>
        </ul>
        <ul class="nav">
            <?php
            if( isset($user) ) { ?>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$user['name'];?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/api.php?logout=true&user=<?=$user['id'];?>">Logout</a>
                        </div>
                    </div>
                </li>
            <?php }else{ ?>
                <li class="nav-item"><a data-bs-toggle="modal" data-bs-target="#loginModal" href="#" class="nav-link link-dark px-2">Login</a></li>
            <?php } ?>
            <li class="nav-item"><a data-bs-toggle="modal" data-bs-target="#signUpModal" href="#" class="nav-link link-dark px-2">Sign up</a></li>
        </ul>
    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Waldys World</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div>
</header>