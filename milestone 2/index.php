<?php 
    require "../db/api.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>snake 2</title>
</head>

<body>
    <div id="app">
        <header>
            <div class="logo-contain p-3">
                <img class="h-100" src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="">
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-5 pt-5">
                    <div class="col" v-for="(disc, i) in listSong" :key='i'>
                        <div class="my-card-song d-flex flex-column align-items-center p-4 my-2">
                            <div class="song-cover">
                                <img class="w-100" :src="disc.poster" alt="">
                            </div>
                            <h5 class="text-uppercase text-white text-center pt-3"><strong>{{disc.title}}</strong></h5>
                            <div class="info-song">
                                <div class="artist text-secondary text-center">{{disc.author}}</div>
                                <div class="year text-secondary text-center">{{disc.year}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="main.js"></script>
</body>
</html>