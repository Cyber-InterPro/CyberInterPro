<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/assinatura.js"></script>
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Assinatura </title>
</head>
<body>
    <?php
        include "menu.html";
    ?>
    <section>
        <div class="mt-5">
            <h1 class="titulo">Assinatura Digital</h1>
            <?php
                include "ProgressBarAssina.html";

            ?>
        </div>
        <div class="container  mt-1" >
            <div class="row">
                <div class="col-md-12 col-sm-12 align-self-center" id="esc-arquivo">
                    <form action="test.php" method="post" enctype="multipart/form-data">
                        <input id="form_arquivo" type="file" class="form-control mb-3 pdf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" accept=".pdf" name="pdf">
                        <h5 class="pdf_text ms-2"> Escolha somente arquivos com extensão .pdf </h5>
                        <input onclick = "ValidaArquivo()" value="teste" > 
                        <input type="submit" value="Validar PDF" name="submit" class="but_pdf btn btn-primary mt-3"> 
                    </form>
                </div>
                <p id="teste"></p>
                <div class="col-md-12 col-sm-12 align-self-center mt-2 mb-5">
                    <iframe src="pdf/Array" width="100%" height="700" class="pdf_viewer">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <?php   
        include "footer.html";
    ?>
</body>
</html>