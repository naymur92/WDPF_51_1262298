<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="winOpen()">Click</button>
    <script>
        let myWin;
        function winOpen(){
            myWin = window.open("", "", "width=200,height=200,left=400,top=300");
        }
    </script>
</body>
</html>