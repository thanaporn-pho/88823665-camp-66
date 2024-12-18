<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1>
                <?php 
                    if(isset($_REQUEST['email'])){
                        echo $_REQUEST['email'];
                    } 
                ?>
            </h1>
            <h1>
                <?php 
                    if(isset($_REQUEST['email'])){
                        echo $_REQUEST['detail']:"";
                    } 
                ?>
            </h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput" class="formLabel">Email address</label>

                </div>
            </form>
        </div>
    </body>

</html>