<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>

    <header>
        <div class="gen">
            <nav>
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </div>
                <div class="navList">
                    <div class="listContainer"><a href="#">CHARACTERS</a></div>
                    <div class="listContainer"><a href="#">COMICS</a></div>
                    <div class="listContainer"><a href="#">MOVIES</a></div>
                    <div class="listContainer"><a href="#">TV</a></div>
                    <div class="listContainer"><a href="#">GAMES</a></div>
                    <div class="listContainer"><a href="#">COLLECTIBLES</a></div>
                    <div class="listContainer"><a href="#">VIDEOS</a></div>
                    <div class="listContainer"><a href="#">FANS</a></div>
                    <div class="listContainer"><a href="#">NEWS</a></div>
                    <div class="listContainer"><a href="#">SHOP</a></div>
                </div>
            </nav>
        </div>
    </header>

    <style>
        .gen {
            background-color: white;
            width: 100%;
        }



        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin: auto;

        }

        .navList {
            display: flex;




        }

        .listContainer {
            margin: 0 10px;
            height: 100px;
            display: flex;
            align-items: center;
        }


        a {
            text-decoration: none;
            color: black;


        }

        .listContainer:hover {

            border-bottom: 4px solid blue;
        }

        a {
            color: blue;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }
    </style>


</body>

</html>
