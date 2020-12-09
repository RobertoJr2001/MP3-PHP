<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>MP3 PHP</title>
</head>
<body>
    <div class="container">
        <?php 
            
            if (!isset($_GET['page'])) {
            
                if (file_exists("pages/{$_GET[page]}.php")) {

                    include_once "pages/{$_GET[page]}.php";
                
                } else {
                
                    include_once 'pages/notFound.php';
                
                }
                
            } else {
                
                include_once 'pages/albums.php';
            }

        ?>
    </div>
</body>
</html>