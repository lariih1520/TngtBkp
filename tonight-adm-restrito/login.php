<?php

    if(isset($_GET['search'])){
        if($_GET['search'] == 'rblss'){

?>
    <html>
        <head>
            <title> Login RESTRITO </title>
            <link rel="icon" type="icone/png" href="../imagens/logo.png">
            <link rel="stylesheet" type="text/css" href="css/estilo_padrao.css" />
        </head>
        <body>
            
            <div id="content_rest">
                <form action="router.php" method="post">
                    
                    <center><span class="titulo">RESTRITO</span></center>
                    
                    <p><label> Login: </label></p>
                    <img src="icones/user.png" class="icone">
                    <input type="text" name="txtLogin">
                    
                    <p><label> Senha: </label></p>
                    <img src="icones/security.png" class="icone">
                    <input type="password" name="txtSenha">
                    
                    <p> <input type="submit" value="Logar" name="btnLogin" class="botao"> </p>
                    
                </form>
            </div>
            
        </body>
    </html>
    
<?php
            
        }else{
            header("Location:../index.php");
        }
        
    }else{
        header("Location:../login.php");
    }

?>