<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <img src="public/img/eng.png" alt="">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="allTerms.php" onclick="onOff()">All Terms</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <section class="informations">
                <h2>Welcome to Quazar</h2>
                <p>Welcome to Quazar, here you will learn all kinds of technical terms</p>
                <button><a href="allTerms.php">Get Started</a></button>
            </section>
            <section class="image">
                <img src="public/img/heroes.png" alt="">
            </section>
        </div>
    </main>

    <footer>
        <p>Todos os direitos reservados &copy; 2021</p>
        <p>By <strong>Rikellme</strong></p>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>
