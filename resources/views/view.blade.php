<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
/*===== VARIABLES CSS =====*/
:root {
  --header-height: 3rem;
  --font-semi: 600;
  /*===== Colores =====*/
  /*Purple 260 - Red 355 - Blue 224 - Pink 340*/
  /* HSL color mode */
  --hue-color: 224;
  --first-color: hsl(var(--hue-color), 70%, 60%);
  --second-color: hsl(var(--hue-color), 56%, 12%);
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --big-font-size: 1rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: .938rem;
  --smaller-font-size: .75rem;
  /*===== Margenes =====*/
  --mb-2: 1rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;
  /*===== z index =====*/
  --z-back: -10;
  --z-fixed: 100;
}

@media screen and (min-width: 968px) {
  :root {
    --big-font-size: 3rem;
    --h2-font-size: 2rem;
    --normal-font-size: 1rem;
    --smaller-font-size: .875rem;
  }
}

/*===== BASE =====*/
*, ::before, ::after {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: var(--header-height) 0 20px 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  color: var(--second-color);
}

h1, h2, p {
  margin: 0;
  
}
img {
  max-width: 100%;
  height: auto;
  display: block;
}

/*===== CLASS CSS ===== */
.section {
  padding-top: 3rem;
  padding-bottom: 5rem;
}

/*===== LAYOUT =====*/
.bd-grid {
  max-width: 1024px;
  display: grid;
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}

.l-header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color:rgb(158, 160, 221);
  box-shadow: 0 1px 4px rgba(146, 161, 176, 0.15);
}


/* ===== Portofolio Project =====*/
.title h2{
	color: black;
	font-size: 75px;
	width: 1130px;
	margin: 30px auto;
	text-align: justify;
}
.box{
	display: flex;
	justify-content: center;
	align-items: justify;
	min-height: 600px;
}
.card{
	height: 600px;
	width: 800px;
	padding: 100px 25px;
  padding-top: 5px;
	background: #f0ecec;
	border-radius: 20px;
	margin: 20px;
	position: relative;
	overflow: hidden;
	text-align: justify;
  margin-right: 10px;
}
.card i{
	font-size: 50px;
	display: block;
	text-align: center;
	margin: 25px 0px;
	color: #1b35b4;

}
h5{
	color: black;
	font-size: 23px;
	margin-bottom: 15px;
	margin-top: 15px;
}
.pra img{
  box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
  border-radius: .5rem;
  overflow: hidden;
  width: 100%;
  align-content: center;
}
.pra p{
	color: grey;
	font-size: 16px;
	line-height: 27px;
	margin-bottom: 25px;
}
.card .button:hover{
	background-color: transparent;
	border: 2px solid rgb(92, 55, 241);
	cursor: pointer;
}

@media screen and (min-width: 576px) {
  
  .Portofolio__container {
    grid-template-columns: .7fr;
    justify-content: center;
    column-gap: 1rem;
  }
}

@media screen and (min-width: 768px) {
  body {
    margin: 0;
  }
  .section {
    padding-top: 4rem;
    padding-bottom: 5rem;
  }
  .section-title {
    margin-bottom: var(--mb-6);
  }
  .section-title::after {
    width: 80px;
    top: 3rem;
  }
  
  .Portofolio__container {
    grid-template-columns: repeat(2, 1fr);
    column-gap: 5rem;
    align-items: justify;
    text-align: initial;
  }
 
}




  </style>
    <title>Document</title>
</head>
<body style="background-color:powderblue;">

<section class="about section " id="about">
<center><h2 class="Portofolio__subtitle">VERIFIKASI TANDA TANGAN </h2></center>
                <div class="box">
                    <div class="card">
                    <table align="justify">
              <tr>
                    <td><img src="{{asset('template')}}/dist/img/Stm.png" width="90" height="60"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: .8"></td></div>
                                <div class="card-body p-0 ">

                <td><center>
                    <font size="5"><b>STMIK BANDUNG</font><BR> &nbsp  &nbsp &nbsp</b>
                    <font size="4">SEKOLAH TINGGI MANAJEMAN INFORMATIKA DAN KOMPUTER BANDUNG</font> <br>
                    <font size="2">Jl. Cikutra No.113, Kota Bandung, Jawa Barat 40124</i></font></center>
                </td>
                </tr>
                <tr>
                    <td colspan="2"><hr> </td>
                </tr>
            </table>
            <br>
            <table align="justify">
            <tr>
                <th>Tanggal</th>
                        <th width>{{ $verifikasi->tanggal}}</th>
                    </tr>
                    <tr>
                        <th>Nim</th>
                        <td width>{{ $verifikasi->nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td width>{{ $verifikasi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Angkatan</th>
                        <td width>{{ $verifikasi->angkatan }}</td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td width>{{ $verifikasi->program_studi }}</td>
                    </tr>
                    <tr>
                        <th>No Surat</th>
                        <td width>{{ $verifikasi->no_surat }}</td>
                    </tr>
                    <tr>
                        <th>Keperluan</th>
                        <td width>{{ $verifikasi->keperluan }}</td>
                    </tr>
                    <tr>
                        <th>Yang Menandatangani</th>
                        <td width>{{ $verifikasi->penandatangan }}</td>
                    </tr>
            </table>
            <br>
            <p style="color:red;"><b>Verifikasi ini Valid.</b><p>
            <br>
            <br>
            </div>         
                    </div>                                   
                </div>
                        </div>
                    </div>
                
            </section>


<!-- <div class="col-xs-1" align="center">
    <section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10"> -->
 <!-- <section class="p-5">
   <center><div class="content">
        <div class="container-fluid mt-5 mx-5"> 
                <div class="row">
        <div class="col-lg-6"> -->
           
</div>
                </div>
            </border>
</section>
                
</body>
</html>