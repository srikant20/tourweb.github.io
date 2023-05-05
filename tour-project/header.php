<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Your Tour</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!--bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#menu-btn").click(function () {
                $("ul").toggleClass("show");
            });
        });
    </script>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row px-3 px-sm-0">
                <div class="col p-0">
                    <nav class="navbar navbar-expand-lg px-0">
                        <div class="navbar-brand p-0">
                            <a href="">Chalo<span class="brand">Ghumne</span></a>
                        </div>
                        <ul class="nav ml-auto h-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link px-3 px-md-3 h-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link px-3 px-md-3 h-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="package.php" class="nav-link px-3 px-md-3 h-link">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a href="book.php" class="nav-link px-3 px-md-3 h-link">Book</a>
                            </li>
                        </ul>
                        <div id="menu-btn" class="menu bi bi-list"></div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>

</html>