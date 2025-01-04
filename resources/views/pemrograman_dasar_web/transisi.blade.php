<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trasnsisi</title>
    <style>
body{
    margin :0;
    padding : 0;
}
        .kotak{
            width :100px;
            height :100px;
            background : rgb(0, 217, 255);
            text-align :center;
            line-height : 100px;
            margin : 5px;
        }
        .kotak{
            transition: all 3s ease;}
        .kotak{
            transition: all 3s ease-in;}
        .kotak{
            transition: all 3s ease-out;}
        .kotak{
            transition: all 3s ease-in-out;}
        .kotak{
            transition: all 3s linear;}
        .kotak{
            transition: all 3s cubic-bezier(0,0,0,0);}
            
        .container:hover .kotak{
                transform : rotate(720deg);
                margin-left: 800px;
                background-color: pink;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="kotak">esae</div>
    <div class="kotak">esae in</div>
    <div class="kotak">esae out</div>
    <div class="kotak">esae in out</div>
    <div class="kotak">linear</div>
    <div class="kotak">cubic-bezier</div>
    </div>
</body>
</html>