<!DOCTYPE html>
<html>
<head>
    <title>Produtos no Carrinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;             
        }

        h1 {
            color: #333;
            justify-content: center;
            align-items: center;
            display: flex;  
        }

        ul {
            list-style-type: none;
            padding: 0;  
        }

        li {
            margin-bottom: 10px;
            justify-content: center;
            align-items: center;
            display: flex
        }

        p {
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            display: flex   
        }
        input[type="submit"] {
            
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        section{
            justify-content: center;
            align-items: center;
            display: flex;  
        }
    </style>
</head>
<body>
    <h1>Produtos no Carrinho:</h1>

    <?php
    if(isset($_POST['produtos'])) {
        $produtosSelecionados = $_POST['produtos'];

        if(count($produtosSelecionados) > 0) {
            echo "<ul>";
            foreach ($produtosSelecionados as $produto) {
                echo "<li>$produto</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum produto selecionado.</p>";
        }
    } else {
        echo "<p>Nenhum produto selecionado.</p>";
    }
    ?>
    <section> 
    <form action="index.php" > 
        <input type="submit" value="Voltar a loja">
    </form>
    </section>

   
    <p>Continue comprando ou finalize sua compra!</p>
</body>
</html>
