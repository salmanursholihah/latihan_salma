<!DOCTYPE html>
<html>
<head>
<title>layout responsive</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 60px;
  text-align: center;
  background:rgb(159, 85, 11);
  color: white;
}

.navbar {
  display: flex;
  background-color: rgb(114, 124, 124) ;
}

.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.row {  
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {
  flex: 70%;
  background-color: #faf0e6;
  padding: 20px;
}

.fakeimg {
  background-color:rgb(198, 198, 198);
  width: 100%;
  padding: 20px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>nama & logo web</h1>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">home</a>
  <a href="#">about</a>
  <a href="#">contact</a>
  <a href ="#" >nav....</a>

</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>galeri saya</h5>
    <div class="fakeimg" style="height:200px;">Image1</div>
    <p>deskripsi foto saya di atas.......</p>
    <p>img lain</p>
    <div class="fakeimg" style="height:60px;">Image2</div><br>
    <div class="fakeimg" style="height:60px;">Image3</div><br>
    <div class="fakeimg" style="height:60px;">Image4</div>
  </div>
  <div class="main">
    <h2>judul artikel1</h2>
    <h5>03-01-2025</h5>
    <div class="fakeimg" style="height:200px;">Image5</div>
   <p>deskripsi singkat</p>
   <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nam, 
   <br>ipsum necessitatibus nesciunt sequi libero nemo, 
   <br>sint amet neque ex illum quos obcaecati officia numquam voluptate sunt at enim perferendis.</p>
    <br>
    <h2>judul artikel2</h2>
    <h5>04-01-2025</h5>
    <div class="fakeimg" style="height:200px;">Image6</div>
   <p>deskripsi singkat</p>
   <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nam, 
   <br>ipsum necessitatibus nesciunt sequi libero nemo, 
   <br>sint amet neque ex illum quos obcaecati officia numquam voluptate sunt at enim perferendis.</p>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>