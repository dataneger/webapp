<?php
    include('../src/preload.php');
    include('header.php');
?>
<body>
<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Tietjes</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Wietjes</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Liedjes</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Gehaktballen</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
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

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">golf skills</th>
            <th scope="col">last login</th>            
        </tr>
        </thead>
        <tbody>
        <?php 
        $result = $mysql->query("SELECT * FROM new");
        foreach($result as $user){   
            echo '<tr>';
            echo '<td>'.$user['id'].'</td>';
            echo '<td>'.$user['name'].'</td>';
            echo '<td>'.$user['email'].'</td>';
            echo '<td>'.$user['golf_skills'].'</td>';
            echo '<td>'.$user['last_login'].'</td>';  
            echo '</tr>';                  
        }
        ?>    
        </tbody>
    </table>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://i2-prod.dailystar.co.uk/incoming/article19560973.ece/ALTERNATES/s1227b/0_httpscdnimagesdailystarcoukdynamic122photos359000900x738931359" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</div>


<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Icon grid</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
            <div>
                <h4 class="fw-bold mb-0">Featured title</h4>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's user and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
