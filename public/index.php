<?php
    include('../src/preload.php');
    include('header.php');
?>
<body>
<?php
include('menu.php');
?>

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
        $result = $mysql->query("SELECT * FROM User");
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

<?php
include('footer.php');
?>

</body>
</html>
