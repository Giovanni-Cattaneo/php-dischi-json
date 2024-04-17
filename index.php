<?php
include 'api.php';

//var_dump($discs);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div id="app">
        <header>
            <img src="./assets/img/spotify.png" alt="">
        </header>


        <main>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-4" v-for="disc in discs">
                        <div class="card w-75 mb-3">
                            <img class="card-img-top" :src="disc.poster" alt="Poster" />
                            <div class="card-body">
                                <h4 class="card-title">{{ disc.title }}</h4>
                                <p class="card-text">{{ disc.author }}</p>
                                <p class="card-text">{{ disc.genre }}</p>
                                <p class="card-text">{{ disc.year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>


<script src='./assets/js/app.js'></script>

</html>