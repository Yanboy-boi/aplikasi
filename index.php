<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Aplikasi Bimbingan Dosen Mahasiswa </title>
        <style>
 .body {
    height: 800px ;
    width: 1340px ;
    background: linear-gradient(to right, #83C034, #FBEF12);
    z-index: -10;
}
.head {
    text-align: right;
    position: absolute;
    top: 40px;
    left: 490px;
    font-size: 42px;
    color: white;
}
.menu {
    position: absolute;
    top: 280px;
    left: 130px;
    background-color: white;
    border-radius: 80px;
    width: 1100px;
    height: 135px;
    -moz-box-shadow: 0 0 5px 5px #888;
    -webkit-box-shadow: 0 0 5px 5px #888;
    box-shadow: 0 0 20px #6FB03A;
}
.menu:hover {
    position: absolute;
    top: 280px;
    left: 130px;
    background-color: white;
    border-radius: 80px;
    width: 1100px;
    height: 135px;
    -moz-box-shadow: 0 0 5px 5px #888;
    -webkit-box-shadow: 0 0 5px 5px #888;
    box-shadow: 0 0 20px  #6666ff;
}
.menu a {
    text-decoration:  none;
    color: black;
    margin: 35px;
    margin-bottom: 10px;
    position: absolute;
    top:  5px;
}
table {
    padding: 30px;
    padding-top: 10px;
    color: green;
}

#dosen {
    background-color: white;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    position: absolute;
    top : 450px;
    left: 120px;
    width: 1120px;
    height: 350px;
}
#mahasiswa {
    background-color: white;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    position: absolute;
    top : 450px;
    left: 120px;
    width: 1120px;
    height: 350px;
}


td {
     list-style: none;
     margin-left: 10px;
}
tr {
    width: 10px;
}

.icon1{
    position: absolute;
    top : 8px;
    left: 16px;
    z-index: 20;
    margin-left: 0px;
    
}
.icon1 a {
    font-size: 25px;
    font-family: sans-serif,arial;
    font-weight: bold;
}
.icon2 {
    position: absolute;
    top : 8px;
    left: 16px;
    z-index: 20;
    margin-left: 365px;
}
.icon2 a {
    font-size: 25px;
    font-family: sans-serif,arial;
    font-weight: bold;
}
.icon3 {
    position: absolute;
    top : 8px;
    left: 16px;
    z-index: 20;
    margin-left: 734px;
}
.icon3 a {
    font-size: 25px;
    font-family: sans-serif,arial;
    font-weight: bold;
}
footer {
    text-align: center;
}
.Home {
    position: absolute;
    top: 450px;
    left:10px;
font-size: 40px;    
}
#home {
    position: absolute;
    top: 3;
    left: 3;
    z-index: 9;
}

            
        </style>
    </head>
    <body>
        <div id="home">
            <a href="index.php">   <img src="img/home.png" height="54"/> </a>
        </div>
        <div class="body">
            <img src="img/header.jpg" height="325"/>
        </div>
        <div class="head">
            <h3> APLIKASI BIMBINGAN </br> DOSEN MAHASISWA </h3>
        </div>
        <div class="menu">
            <div class="icon1"> 
            <img src="img/dosen.png" height="115" width="115" /> <a href="dosen.php" value="dosen"> DOSEN </a>
            </div>
            <div class="icon2">
            <img src="img/bimbing.png" height="115"/> <a href="bimbingan.php"> BIMBINGAN </a>
            </div>
            <div class="icon3">    
                <img src="img/mahasiswa.png" height="115"/>  <a href="Mahasiswa.php"> MAHASISWA </a>
            </div>
        </div>
        <div class="Home">
            <marquee> SELAMAT DATANG DI SISTEM APLIKASI BIMBINGAN DOSEN DAN MAHASISWA </marquee>  
        </div>
    </body>
</html>
