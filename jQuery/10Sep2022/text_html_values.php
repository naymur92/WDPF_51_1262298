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
  </head>
  <body>
      <script>
        $(document).ready(function(){
            $(".btn1").click(function(){
              var x = $("h1").text();
              $("h2").text("Content from h1: " + x);
            });
            $(".btn2").click(function(){
              var y = $("#div1").html();
              $("#div2").html(y);
            });
        });
      </script>
      
      <button class="btn1">Button 1</button>
      <button class="btn2">Button 2</button>
      <h1>My Heading</h1>
      <h2></h2>
      <div id="div1">
        Lorem ipsum dolor <b>sit amet consectetur adipisicing elit</b> . Unde vel ea ipsam suscipit quaerat iste placeat dicta possimus voluptas, enim inventore eveniet fugit esse ipsum dolores voluptate, commodi sit odit.
      </div>
      <div id="div2" style="background-color: aqua;"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>