<?php

if($_POST){
    $sub1= $_POST['subject1'];
    $sub2= $_POST['subject2'];
    $sub3= $_POST['subject3'];
    $sub4= $_POST['subject4'];
    $sub5= $_POST['subject5'];
    $result= $sub1+$sub2+$sub3+$sub4+$sub5;
    $percentage1= $result/250;
    $percentage= $percentage1*100;
    if($percentage>=90){
        $message= 'Grade A';
    }elseif($percentage>=80&&$percentage<90){
        $message= 'Grade B';
    }elseif($percentage>=70&&$percentage<80){
        $message= 'Grade C' ;
    }elseif($percentage>=60&&$percentage<70){
        $message= 'Grade D' ;
    }elseif($percentage>=40&&$percentage<60){
        $message= 'Grade E' ;
    }elseif($percentage>=0&&$percentage<40){
        $message= 'Grade F' ;
    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <title>subjects grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="contianer">
        <div class="row mt-5">
           <div class="col-12 mt-2">
                <h1 class="text-dark text-center h1"> Enter Your Grades </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="subject1" id="id" class="form-control mt-2" placeholder="Physics" aria-describedby="helpId">
                        <input type="number" name="subject2" id="id" class="form-control mt-2" placeholder="Chemistry" aria-describedby="helpId">
                        <input type="number" name="subject3" id="id" class="form-control mt-2" placeholder="Biology" aria-describedby="helpId">
                        <input type="number" name="subject4" id="id" class="form-control mt-2" placeholder="Mathematics" aria-describedby="helpId">
                        <input type="number" name="subject5" id="id" class="form-control mt-2" placeholder="Computer" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded"> calculate </button>
                    </div>
                </form>
                <?php 
                if(isset($message)){
                    echo "<div class='alert alert-primary'> $result/250 percentage:$percentage%  $message  </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>