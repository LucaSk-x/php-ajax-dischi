<?php 
    require "../db/api.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo-contain p-3">
            <img class="h-100" src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-5 pt-3">
                <?php foreach($dati as $song) {  ?>
                <div class="col">
                    <div class="my-card-song d-flex flex-column align-items-center p-4 m-2">
                        <div class="song-cover">
                            <img class="w-100" src=<?php echo $song["poster"] ?> alt="">
                        </div>
                        <h5 class="text-uppercase text-white text-center pt-3"><strong><?php echo $song["title"] ?></strong></h5>
                        <div class="info-song mt-auto">
                            <div class="artist text-secondary text-center"><?php echo $song["author"] ?></div>
                            <div class="year text-secondary text-center"><?php echo $song["year"] ?></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>