<?php
//View
?>
<!doctype html>
<html lang = "fa">
    <head>
        <title>پیام ها</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
        <link href = "assets/css/style.css" rel = "stylesheet">
    </head>
    <body class = "container">
        <header>
			<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/icon.png" alt="لوگو" width="45" height="48" class="d-inline-block align-top"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ورود/ثبت نام
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="register.html">ثبت نام</a></li>
                                    <li><a class="dropdown-item" href="#">ورود</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">خانه</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    کتاب ها
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">کتاب های نو</a></li>
                                    <li><a class="dropdown-item" href="#">کتاب های دست دوم</a></li>
                                    <li><a class="dropdown-item" href="#">کتاب های صوتی</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.html" >تماس با ما</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="مثال: تاریخچه زمان" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">بگرد</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
		</header>
        <main class = 'container'>
            <?php
				if( isset($alert) )
					echo $alert;
			?>
			<section class = 'row'>
			<?php
			
				foreach($table as $row)
				{
					include 'templates/userCard.php';
				}
            ?>
			</section>
        </main>
        <aside></aside>
        <footer></footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>