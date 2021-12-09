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
    <?php include("conexao.php"); ?>
    
    <header>
        <img src="public/img/eng.png" alt="">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="allTerms.php" onclick="onOff()">All Terms</a></li>
            </ul>
        </nav>
    </header>

    <section class="search-container">
        <div class="content-search">
            <h1>Procure pelo Termo desejado</h1>
            <form action="" method="GET">
                <input type="search" name="search" id="search" placeholder="Procurar...">
            </form>
        </div>
    </section>

    <section class="content">
        
            <h1>Veja aqui todos os Termos</h1>
            <p>Termos Cadastrados</p>
        
            <div class="cards">

                <?php 

                    try{

                        if(isset($_GET['search'])) {
                            $name = $_GET['search'];
                            $stmt = $pdo->prepare("select * from terms where name like '%$name%'");
                        }
                        else {
                            $stmt = $pdo -> prepare("select * from terms");  
                        }

                        $stmt -> execute();

                        $row = "";

                        while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                            echo '<div class="card">';
                                echo '<div class="card-content-title">';
                                    echo '<div class="card-opacity">';
                                        echo "<h1>$row[name]</h1>";
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="card-content">';
                                    echo "<h2 id='title'>$row[name]</h2>";
                                    echo "<p>$row[description]</p>";
                                echo '</div>';
                            echo '</div>';
                        }
                    } catch(PDOException $e){
                        echo "Error:" . $e->getMessage();
                    }
      
                ?>
            </div>
            
    </section>

    <footer>
        <p>Todos os direitos reservados &copy; 2021</p>
        <p>By <strong>Rikellme</strong></p>
    </footer>

</body>
</html>
