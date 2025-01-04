<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout responsif</title>


    <!--style semantic-->

    <style type="text/css">

    .container{

    }
         body{ background color : #faf0e6;
               font-family : arial, sans-serif;
               margin : 0;
               padding : 0;}

         header,footer{
            background-color :rgb(181, 82, 16);
            font-family : arial, sans-serif;
            text-align: center;
            padding :10px;

         }
         nav {
            background-color:rgb(152, 169, 169) ;
            color: white;
            padding: 10px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
         main{
            background-color : #faf0e6;
            margin :20px;
            padding :20px;
            display : flex;
            justify-content :space-between;
            
         }
         article{
            background-color : white;
            padding : 20px;
            margin :20px;
            border-radius : 10px
            width : 40 %;
            text-align :justify;
         }



    
    </style>
    <!--end style semantic-->


</head>
<body>
    <!--header-->
    <header>
    <h1>Nama & logo aplikasi</h1>
      </header>
    

     <!--/end header--->


     <!--navbar--->
    <nav>
    <ul>
      <li><a href="#">home</a></li>
      <li><a href="#">tentang kami</a></li>
      <li><a href="#">contact</a></li>
    </ul>
    </nav>
 
    <!---end nav--->

    <!--main-->
   <main>
    <section> <!--section--->
        <article><!--artikel1-->
   <h2>content1</h2>
<p><img width="300" height="200" src="#" ><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nam, 
<br>ipsum necessitatibus nesciunt sequi libero nemo, 
<br>sint amet neque ex illum quos obcaecati officia numquam voluptate sunt at enim perferendis.</p>
</article>

<article><!--artikel2-->
   <h2>content2</h2>
   <p><img width="300" height="200" src="#" ><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nam, 
   <br>ipsum necessitatibus nesciunt sequi libero nemo, 
   <br>sint amet neque ex illum quos obcaecati officia numquam voluptate sunt at enim perferendis.</p>
</article>
</section> 
<article><!--artikel2-->
   <h3>content3</h3>
   <p>deskripsi singkat</p>
   <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nam, 
   <br>ipsum necessitatibus nesciunt sequi libero nemo, 
   <br>sint amet neque ex illum quos obcaecati officia numquam voluptate sunt at enim perferendis.</p>
</article>
 </main>
 <!---end main-->


<!--footer-->
   <footer>
   <p>&copy;2024|by salma</p>
   </footer>
<!---end footer--->
</body>
</html>