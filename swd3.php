<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
	
	function playAudio() { 
	var x = document.getElementById("myAudio"); 
	if(x.paused)
	{
		x.play();
	}
	else
	{
		x.pause();
	}
} 

	</script>

<style>
.btn{background-color:#00CC00;}
.arw {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.r {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.l {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
.disc::-webkit-scrollbar {
    width: 12px;
}

.disc::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);   
}

.disc::-webkit-scrollbar-thumb {
      border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
* {
  box-sizing: border-box;
}
[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
	background-color:#1E88E5;
	color:white;
	position:absolute;
		left:-1px;
		top:-1px;
		width:100%;
		height:70px;
}
.back{
		position:fixed;
		left:-8px;
		width:100%;
		height:100%;
		z-index:-2;
	}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 320px) {
  
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 10%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
  .con{position:relative;
  top:25px;
  left:-80px;
  width:300px;
  height:625px;
}
	.disc{
		position:absolute;
		left:-17px;
		width:337px;
		height:170px;
	}
	.bbtn{
		position:absolute;
		bottom:0px;
		left:115px;
		padding:8px 20px;
  	}
	.btn{padding:8px 20px;}
	.audio{
		position:absolute;
		top:520px;
		left:130px;
	}
	.b1{position: absolute;left:-20px;bottom:0;}
	.b2{position: absolute;right:-20px;bottom:0;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
 
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
  .header {width:100%;height: auto;	}
	.overlay{height:auto;width:auto;}
	.con{position:relative;
  top:30px;
  left:40px;
  width:520px;
  height:585px;}
  .disc{
	  height:150px;width:400px;
  }
  .btn{
	  padding: 6px 30px;
  }
  .audio{
	  position:absolute;
		top:500px;
		left:240px;
	 
  }
  .bbtn{
	 	position:absolute;
		bottom:0px;
		left:210px;
		padding: 6px 30px;
  	}
}
.overlay {
		opacity: 0.5;
  		width:70px;
 		height:55px;
	}
	
	.bbtn,.b{
		background-color: #00CC00;
		border: none;
		color: white;
		border-radius:20px;
  		text-decoration: none;
  		font-size: 16px;
  		margin: 4px 2px;
  		cursor: pointer;
	}
	.audio,.btn{
		background-color: white;
		border: none;
		color: white;
		border-radius:20px;
  		text-decoration: none;
  		font-size: 16px;
  		margin: 4px 2px;
  		cursor: pointer;
	}
</style>
</head>
<body ">

<div class="header">
   
  <div style="font-family: Moderne Sans, sans-serif;letter-spacing: .3rem;margin:5px; text-align: center; " ><img src="front.png" class="overlay"><b style="font-size:40px;">&nbsp;A</b>hmednagar Museum &nbsp;&nbsp;&nbsp;&nbsp;</div>
	
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
  <img src="p4.png" class="back">
  </div>

  <div class="col-6 col-s-9">
  
	<div class="con" >
		<center>
		<h1 style="font-family: Moderne Sans, sans-serif;color:#00CC00;position:relative;top:8px;font-size:30px;">Sword Section </h1>
		<img src="t3.jpg" style="width:333px;height:200px;box-shadow:0px 0px 3px 0px;position:relative;top:8px;left:-15px;"/>
		<hr width="80%" style="position:relative;top:15px;"/>
			<h2 style="position:relative;top:8px;color:#1E88E5;opacity:0.9">&nbsp;Bhavani Sword </h2>
			<div class="disc" style="border: 1px solid black;overflow-y:scroll;text-align: left;background-color:white; ">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet interdum dolor. 
			Sed a viverra orci, id ullamcorper nulla. Proin porta ex vel odio ullamcorper tristique. 
			Nulla ultrices turpis velit, id faucibus nibh maximus nec. Etiam at sagittis mi. In sed nisi 
			scelerisque, tincidunt risus et, cursus tellus. Suspendisse vitae nulla maximus leo commodo elementum.
			Phasellus a ornare augue, quis placerat est. Phasellus commodo urna sem, blandit hendrerit sapien convallis id. 
			Etiam ligula ex, mattis eget ex et, pharetra bibendum lacus. Donec commodo, felis sit amet eleifend venenatis, 
			nunc mauris cursus ante, id rhoncus sem ipsum vitae risus.
			Pellentesque at arcu et eros feugiat rutrum quis nec velit. Sed rhoncus dictum libero vitae hendrer
			it. Nulla pharetra iaculis sem ac dictum. Vestibulum ligula quam, tincidunt nec dignissim vitae, pharetra a velit.
			</div>
			<button class="audio" onclick="playAudio()" type="button"><img src="s2.png" style="height:30px;width:30px;"></button>
			<br><br>
			<button  class="btn b1"  style="background-color:#00CC00;"  onclick="document.location.href = 'swd2.php';"><i class="arw l" ></i></button>
			<button class="bbtn"  id="bck"  />Back</button>
			<button class="btn b2"   style="background-color:#00CC00;" onclick="document.location.href = 'ScanQR.html';"><i class="arw r"></i></button>
			
		</center>
	</div>
      </div>
<audio id="myAudio">
  
  <source src="1.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>


</body>
</html>
