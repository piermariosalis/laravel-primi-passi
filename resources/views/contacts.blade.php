<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }

        .container {
            width: 1170px;
            margin: auto;
        }

        header {
            width: 100%;
            background-color: aqua;
            padding: 0 0 80px 0;
            display: flex;
            flex-direction: column;
        }

        nav {
            padding: 20px 0;
            background-color: rgba(25, 0, 255, 0.397);
        }

        nav ul {
            width: 100%;
            display: flex
        }

        nav ul li {
            padding: 0 20px;
        }


        header div {
            padding: 60px 0;
            text-align: center;
        }

        main {
            width: 100%;
            padding: 300px 0;
            background-color: rgba(43, 92, 92, 0.733);
            text-align: center;

        }



        footer {
            width: 100%;
            padding: 80px 0;
            background-color: rgba(16, 24, 94, 0.815);
            text-align: center;

        }


        /* contact_page */


        .box_contact {
            width: 100%;
            background-color: gray;
            text-align: center;
        }

        .box_contact textarea {
            width: 90%;
            padding: 120px 0;
            font-size: 40px;
            margin: auto;
        }

        button {
            width: 180px;
            padding: 20px 0;
            font-size: 30px;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="./welcome.blade.php">Home</a></li>
                    <li><a href="">Link</a></li>
                    <li><a href="">Link</a</li> 
                    <li><a href="">Link</a</li> <li><a href="">Contatti</a></li>

                </ul>

            </nav>
            <div>
                <h1>Contact Us</h1>
            </div>

        </header>

        <div class="box_contact">
            <textarea name="" id="" cols="30" rows="10" placeholder="Type a message for getting support..."></textarea>

            <button>Send Request</button>
        </div>

        <footer>
            <h1>FOOTER SITE</h1>
        </footer>
    </div>
</body>

</html>