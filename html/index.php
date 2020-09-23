 <?php
$name="rendi saputra";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <title>TeamTreeHouse <?php echo $name; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-secondary">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" src="image/Les-Privat-Bandung-Juara-Kelas.png"logo" width="90px">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>


            <div class="content col-lg-8 border vh-100">
                <div class="d-flex flex-column border">
                    <p class="h2 pt-4 pl-5">My first page PHP</p>

                    <section class="pl-5">
                        <p class="h2">unit</p>
                        <?php include "inc/unit.php";?>
                        <p class="lead"><?php echo celciusTofarenhait(80) ?></p>
                    </section>
                    <section class="pl-5">
                        <p class="h2">string</p>
                        <?php include "inc/string.php";?>
                        <p class="lead"><?php echo askname("rendi saputra"); ?></p>
                    </section>
                </div>

                <div class="d-flex flex-column border">
                    <p class="h2">Body Element</p>
                </div>

                <div class="d-flex position-absolute fixed-bottom">
                    <p class="font-eight-normal mx-auto p-3">&copy; <?php echo $name;echo "last-modified"
                    .date("F d Y H:i:s",getlastmod());?>
                    </p>
                </div> 
            </div>
        </div>
    </div>

    <script src="asset/js/jquery-3.5.1.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</body>
</html>