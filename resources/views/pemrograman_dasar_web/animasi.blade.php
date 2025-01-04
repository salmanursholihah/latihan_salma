<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animasi</title>
    <style>
    body{
        padding : 0;
        margin: 0;
    }
    .kotak{
        width:200px;
        height: 100px;
        animation: 2s animasikotak all ease;
        background: pink ;
    
        
    }

    @kayframe animasikotak{
        0% {
            width : 200px;
        }
        50% {
            width :500px;
            height : 200px
        }
        100% {
            width:500px;
            height:500px;
        }
    }
    </style>
</head>
<body>
    <div class="kotak"></div>
</body>
</html>