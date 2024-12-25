<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
    <style>
      body {
        font-family: "Mali", cursive;
        background-color: antiquewhite;
      }
      .container {
        max-width: 700px;
        background-color: #bfdbbd;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        margin-top: 50px;
      }
      h1 {
        text-align: center;
        font-size: 60px;
        color: #f6c667;
        text-shadow: 0px 4px 10px rgba(82, 71, 47, 0.637);

        
      }
      label {
        font-size: 18px;
      }
      .form-control, .form-check-input, .form-select, .form-check-label {
        font-size: 16px;
      }
      .mt-4{
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
      }
      .content{
        padding-left: 40%;
      }
      .btn {
        width: 100px;
      }
      .btn-success {
        background-color:  #f6c667;
      }
      
    </style>
        <div class="container mt-5">
            
            <h1>ตารางแม่สูตรคูณ</h1>
            <form action="php.03.php" method="POST">
                <div class="mb-3">
                    <label for="number" class="form-label">
                        เลขแม่สูตรคูณ
                    </label>
                    <input type="input" class="form-control" id="num" name="num" placeholder="กรอกตัวเลขที่ต้องการ" require>
                </div>
                <div class="mb-4">
                    <button class="btn btn-success" type="submit"> สร้างตารางสูตรคูณ </button>
                </div>
                
            </form>
            <div class="mt-4">
                <?php
                    if(isset($_POST['num'])){
                        $number = (int) $_POST['num'];
                        echo "ตารางสูตรคูณแม่ ".$number."<br>";
                        ?>
                        <div class="content">
                            <?php
                            for($i = 1;$i<=12;$i++){
                                $result = $number*$i;
                                echo $number." x ".$i."&nbsp;&nbsp; = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result;
                                echo "<br>";
                            }
                            ?>
                        </div>
                        <?php
                    }
                    
                ?>       
            </div>

        </div>
    </body>

</html>