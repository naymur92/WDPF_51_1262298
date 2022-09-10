<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script>
    $(document).ready(function() {
      $("button").click(function() {
        $(".box1").fadeIn();
        $(".box2").fadeIn("slow");
        $(".box3").fadeIn(2000);
      });
    });
  </script>
  <style>
    .box1 {
      width: 200px;
      height: 200px;
      display: none;
      background-color: red;
    }

    .box2 {
      width: 200px;
      height: 200px;
      display: none;
      background-color: lightgreen;
    }

    .box3 {
      width: 200px;
      height: 200px;
      display: none;
      background-color: green;
    }
  </style>
</head>

<body>
  <button>Click Here</button>
  <div class="box1"></div><br>
  <div class="box2"></div><br>
  <div class="box3"></div><br>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>