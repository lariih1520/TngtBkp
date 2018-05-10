<?php
    require_once('view/extencao.php');
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Tonight - Contratar um acompanhante </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1" />
		<meta name="author" content="Larissa AP" />
		<meta name="description" content="Precisa de um ampanhante? Nós temos o que você precisa, basta se cadastrar" />
		<meta name="keywords" content="Acompanhante, Acompanhantes, companhias para festas, cadastre-se" />
        <link rel="icon" type="icone/png" href="imagens/logo.png">
		<link rel="stylesheet" type="text/css" href="css/estilo_padrao.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo_filiado_dados.css" />
        <style>
            
            #conteudo{
                padding-top: 50px;
                min-height: 300px;
            }
            
            .titulo_maior{
                margin-top: 40px;
            }
            #cetralizar_divs{
                width: 960px;
            }
        </style>
	</head>
	<body>
		<div id="principal">
            
            <!-- Cabecalho -->
            <?php include_once('view/header.php'); ?>
            
            <div id="cetralizar_divs">

                <!-- conteudo -->
                <section id="conteudo">

                    <?php
                        include_once('pagseguro-master/PagSeguro.php');

                        include_once('controller/filiado_controller.php');

                        include_once('view/pagar_mensalidade_view.php');
                    ?>

                </section>
            
            </div>
            <div style="clear:both;border:solid 1px transparent;"></div>
        
            <!-- rodape -->
            <?php include_once('view/footer.html'); ?>
		</div>
	</body>
</html>