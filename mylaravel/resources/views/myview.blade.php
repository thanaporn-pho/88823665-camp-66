
<!DOCTYPE html>
<langhg="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
       body{
            font-family: cursive;
            background-color: #e7ddd5;
        }
        .content{
            border-radius: 40px;
            background-color: #fff;
        }
        button{
            color: whitesmoke;
        }
        .btn-success {
            background-color:  #592c08;
        }
        .btn-success:hover{
            background-color: #b38c6d;
        }
        .btn-success:active{
            background-color: #8a5a2c !important;
        }
    </style>
        </body>
            <div class="container mt-5">
        <h1>ตารางแม่สูตรคูณ</h1>
        <form action="{{url('/mycontroller')}}"  method="post">
        @csrf
            <div class="mb-3">
            <input type="text" name="myinput">

            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit" >สร้างตารางสูตรคูณ</button>
            </div>
        </form>
        <div class="mt-4">
            <?php

                if (isset($_POST['myinput']) != null) {
                    $myvar = (int)$_POST['myinput'];
                    echo "<h3>ตารางสูตรคูณแม่ $myvar</h3>";
                    echo "<ul class='list-group'>";

                    //ตาราง
                    for ($i = 1; $i <= 12; $i++) {
                        $ans = $myvar * $i;
                        echo "<li class='list-group-item'>$myvar x $i = $ans</li>";
                    }
                    echo "</ul>";
                }
            ?>
        </div>
    </div>
        </body>
    </head>
</html>
