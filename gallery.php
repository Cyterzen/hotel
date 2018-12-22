 <?php require "php/header.php";?>
  <?php require "php/footer.php";?>
		<style>
	body{background-image:url(images/hotel4.jpg)}</style> 
	<!-- <Увеличение картинок> -->  
<link rel="stylesheet" type="text/css" href="https://webdizainstudio.by/web/ecsport/svadbaorg/galerey/RealFotoZoom/plugins/colorbox/example5/colorbox.css">
<script src="https://webdizainstudio.by/web/ecsport/svadbaorg/galerey/RealFotoZoom/plugins/jquery.min.js"></script>
<script type="text/javascript" src="https://webdizainstudio.by/web/ecsport/svadbaorg/galerey/RealFotoZoom/plugins/jquery.lazyload.mini.js"></script>
<script type="text/javascript" src="https://webdizainstudio.by/web/ecsport/svadbaorg/galerey/RealFotoZoom/plugins/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript">
     $(document).ready(function () {
     $("img").lazyload({effect:"fadeIn"});
     $("a[rel='colorbox']").colorbox({current:"Фото {current} из {total}"});
     });
</script>	

	
<div class="container">
    <section id="photo">
	   <ul>
	     <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside1.jpg" >
               <img src="images/inside1.jpg" width="410" height="318" />
           </a>  
		 </li>
		   <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside2.jpg" >
               <img src="images/inside2.jpg" width="410" height="318" />
           </a>  
		 </li>
		   <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside3.jpg" >
               <img src="images/inside3.jpg" width="410" height="318" />
           </a>  
		 </li>
		   <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside4.jpg" >
               <img src="images/inside4.jpg" width="410" height="318" />
           </a>  
		 </li>
		   <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside5.jpg" >
               <img src="images/inside5.jpg" width="410" height="318" />
           </a>  
		 </li>
		   <li>
		   <a class="cboxElement" rel="colorbox" href="images/inside6.jpg" >
               <img src="images/inside6.jpg" width="410" height="318" />
           </a>  
		 </li>
	   </ul>
	
	 </div>
	
