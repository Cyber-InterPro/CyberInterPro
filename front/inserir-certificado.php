<?php
    include('verificar-login.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">    
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Assinatura </title>
    <script src="https://unpkg.com/pdf-lib@1.4.0"></script>
    <script src="https://unpkg.com/downloadjs@1.4.7"></script>
</head>
<body>
    <?php
        include "menu.php";
        ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as mt-3">
                <div class="col-md-12 col-sm-12 align-self-center" id="titulo">
                    <h1 class="titulo">Assinatura de Arquivos</h1>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="etapas">
                    <?php
                        include "ProgressBarAssina.html";
                        ?>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="esc-arquivo">
                    <form action="certificado-applyer.php" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control mb-3 pdf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" accept=".pfx" name="userfile">
                        <h5 class="pdf_text ms-2"> Escolha somente arquivos com extensão .pfx </h5>
                        <input type="submit" value="Assinar Documento" name="submit" class="but_pdf btn btn-primary"> 
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                    </form>
                </div>
            </div>
        </section>
        <?php   
        include "footer.html";
        ?>
<script src="js/assinaturaImg.js"></script>
</body>
</html>