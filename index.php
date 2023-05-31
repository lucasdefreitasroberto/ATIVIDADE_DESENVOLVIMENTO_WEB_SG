<!DOCTYPE html>
<html>
<head>
    <title>Produtos Infantis</title>
    <style>
        body {
            font-family: Arial, sans-serif;       

        }

        h1 {
            color: #333;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        p{
            
            margin-top: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

        }

        form {
            margin-top: 20px;           
            /* flex-direction: row; */
                      
        }

        input[type="checkbox"] {
            margin-bottom: 10px;
          
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .container {
	        max-width: 360px;
	        margin: 0 auto;
	        display: flex;
        }
        .column-nowrap {
	        flex-flow: column nowrap;
        }  
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer img {
            display: inline-block;
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 5px;
        }
        
    </style>
</head>
<body>
    <h1>Bem-vindo(a) à loja de produtos infantis!</h1>
    <p>Escolha os produtos que deseja comprar:</p>
    <section class="container column-nowrap">
    <form method="post" action="carrinho.php" >
        <input type="checkbox" name="produtos[]" value="Boneca: R$ 120,00">Boneca: R$ 120,00<br>
        <input type="checkbox" name="produtos[]" value="Carrinho hotwheels: R$ 50,00">Carrinho hotwheels: R$ 50,00<br>
        <input type="checkbox" name="produtos[]" value="jogo de Blocos: R$38,00">Jogo de Blocos: R$38,00<br>
        <input type="checkbox" name="produtos[]" value="Bola Futebol: R$45,00">Bola Futebol: R$45,00<br>
        <input type="checkbox" name="produtos[]" value="Cadeirinha: R$145,00">Cadeirinha: R$145,00<br>
        <input type="checkbox" name="produtos[]" value="Copinho: R$14,00">Cadeirinha: R$14,00<br>
        <input type="checkbox" name="produtos[]" value="Dinossauro: R$78,00">Dinossauro: R$78,00<br>
        <input type="submit" value="Adicionar ao Carrinho">
    </form>
    </section>  
    
    <footer>
        <img src="https://cdn.icon-icons.com/icons2/373/PNG/256/Whatsapp_37229.png" alt="Ícone">
        <span>  &nbsp;PROPRIEDADE E COPYRIGHTS CPET - CENTRO DE PROFISSIONALIZAÇÃO E EDUCAÇÃO TÉCNICA &nbsp;&nbsp;</span>
        <img src="https://cdn.icon-icons.com/icons2/642/PNG/512/facebook_icon-icons.com_59205.png" alt="Ícone">       
        <img src="https://cdn.icon-icons.com/icons2/1211/PNG/512/1491580635-yumminkysocialmedia26_83102.png" alt="Ícone">
        <img src="https://cdn.icon-icons.com/icons2/832/PNG/512/linked_icon-icons.com_66685.png" alt="Ícone">
        <p>capacite-se Desenvolvido por Lucas De Freitas Roberto</p>
    </footer>
</body>
</html>
