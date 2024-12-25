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
      .mt-4{
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
      }
      .content{
        background-color: white;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      }
      .btn {
        width: 100px;
      }
      .btn-success {
        background-color:  #f6c667;
      }
      
    </style>


        <div class="container mt-5">
            
            <h1>จำนวนคู่คี่ 1-100</h1>
            <div class="content">
                
                <br>
                <?php
                    for($i = 1;$i<=100;$i++){
                ?>
                    <div class="row">
                        <div class="col h4 text-end">
                            <?php echo "เลข ".$i." เป็น " ?>
                        </div>
                        <div class="col h4 text-start">
                            <?php 
                                if($i%2==0){
                                    echo "จำนวนคู่";
                                }else{
                                    echo "จำนวนคี่";
                                }; 
                            ?>
                        </div>
                    </div>  
                <?php
                    }
                    echo "<br>";            
                ?>
                
            </div>

        </div>
    </body>

</html>