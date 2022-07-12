<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row row-cols-5 pt-5">
                <div class="col" v-for="(disc, i) in discList" :key='i'>
                    <div class="my-card-song d-flex flex-column align-items-center p-4 my-2">
                        <div class="song-cover">
                            <img class="w-100" :src="disc.poster" alt="">
                        </div>
                        <h5 class="text-uppercase text-white text-center pt-3"><strong>{{disc.title}}</strong></h5>
                        <div class="info-song mt-auto">
                            <div class="artist text-secondary text-center">{{disc.author}}</div>
                            <div class="year text-secondary text-center">{{disc.year}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>