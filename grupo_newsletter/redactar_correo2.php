<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Envío de Correos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!-- TinyMCE -->

    <script src="https://cdn.tiny.cloud/1/lcyu0ef2kol1nmmx1yix6t3upsknh9p86upuvkgox9krjiar/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

<?php 
    include "header.php"
?>

 <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
<h1 class="text-center mt-4">Redactá acá el correo electrónico</h1>
<div class="container mt-5 d-flex justify-content-center">

        <form action="enviar_correos.php" method="post" enctype="multipart/form-data" class="col-md-9">
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto:</label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Se acercan fechas importantes... recordatorio para la inscripcion de finales...">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Queridos estudiantes, les acercamos la siguiente informacion..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <div id="passwordHelpBlock" class="form-text">
 Cuando hagas click en "Enviar" se enviará el coreo electrónico a todas las personas que aparecen en la base de datos.
</div>
        </form>
    </div>
    <?php 
    include "footer.php"
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

