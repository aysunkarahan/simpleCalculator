<!DOCTYPE html>
<html>
<head>
	<title>Basit Hesap Makinesi</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style type="text/css">
	.makine{
		width:410px;
		height: 550px;
		background-position: absolute;
		background-color:#e4e5ec;
		border-style: solid;
		border-color: black;
	}
	 .row{
	 	padding-top: 10px;
	 	margin-left: 15px;
	 	font-size: 30px;
	 	height: 70px;
	 	width: 360px;
	 }
	 .input{
	 	font-size: 30px;
	 	height: 66px;
	 	width: 360px;
	 }
	 .tus,.x0,.x1,.x2,.x3,.x4,.x5,.x6,.x7,.x8,.x9,.fact{
	 	background-color: white;
	 	border-style: solid;
	 	border-color: rgb(93, 93, 173);
	 	font-size: 30px;
	 	width: 115px;
	 	height: 50px;
	 }
	 .topla,.cikar,.carp,.bol{
	 	background-color: white;
	 	border-style: solid;
	 	border-color: rgb(93, 93, 173);
	 	font-size: 30px;
	 	width: 82px;
	 	height: 50px;
	 }
	 .spann{
		position: relative;
	 	width: 100%;
	 	text-align: right;
	 	font-size: 100%;
	 	text-transform: none;
	 }
</style>
<script>

	$(document).ready(function(){

		
		$.sif =  {

			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x0").attr("value"));
				
			
				
			}
		}
		$.bir =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x1").attr("value"));
				
			}
		}
		$.iki =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x2").attr("value"));
				
			}
		}
		$.uc =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x3").attr("value"));
				
			}
		}
		$.dort =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x4").attr("value"));
				
			}
		}
		$.bes =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x5").attr("value"));
				
			}
		}
		$.alti =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x6").attr("value"));
				
			}
		}
		$.yedi =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x7").attr("value"));
								
			}
		}
		$.sek =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x8").attr("value"));
						
			}
		}
		$.dok =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".x9").attr("value"));
								
			}
		}
		$.topla =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".topla").attr("value"));
				//To disable 
  				$('.topla').attr('disabled', 'disabled');
				//To disable 
  				$('.cikar').attr('disabled', 'disabled');
 				 //To disable 
  				$('.carp').attr('disabled', 'disabled');
 				 //To disable 
  				$('.bol').attr('disabled', 'disabled');
  				//To disable 
  				$('.fact').attr('disabled', 'disabled');
				
			}
		}
		$.cikar =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".cikar").attr("value"));
				//To disable 
  				$('.cikar').attr('disabled', 'disabled');
				//To disable 
  				$('.topla').attr('disabled', 'disabled');
 				 //To disable 
  				$('.carp').attr('disabled', 'disabled');
 				 //To disable 
  				$('.bol').attr('disabled', 'disabled');
  				//To disable 
  				$('.fact').attr('disabled', 'disabled');
				
			}
		}
		$.carp =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".carp").attr("value"));
				//To disable 
  				$('.carp').attr('disabled', 'disabled');
				//To disable 
  				$('.topla').attr('disabled', 'disabled');
 				 //To disable 
  				$('.cikar').attr('disabled', 'disabled');
 				 //To disable 
  				$('.bol').attr('disabled', 'disabled');
  				//To disable 
  				$('.fact').attr('disabled', 'disabled');
				
			}
		}
		$.bol =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".bol").attr("value"));
				//To disable 
  				$('.bol').attr('disabled', 'disabled');
				//To disable 
  				$('.topla').attr('disabled', 'disabled');
 				 //To disable 
  				$('.carp').attr('disabled', 'disabled');
 				 //To disable 
  				$('.cikar').attr('disabled', 'disabled');
  				//To disable 
  				$('.fact').attr('disabled', 'disabled');
				
			}
		}
		$.fact =  {
			fncJquery : function (e){
				$(".input").attr("value", $(".input").attr("value") + $(".fact").attr("value"));
				//To disable 
  				$('.bol').attr('disabled', 'disabled');
				//To disable 
  				$('.topla').attr('disabled', 'disabled');
 				 //To disable 
  				$('.carp').attr('disabled', 'disabled');
 				 //To disable 
  				$('.cikar').attr('disabled', 'disabled');
  				//To disable 
  				$('.fact').attr('disabled', 'disabled');
				
				
			}
		}

	})
</script>

</head>
<body>
<div class="makine">
<div class="row"><span class="spann">
	<?php
@$im = new Makine();
@$hesap = $im->elemanlar($_POST["display"]);?></span>
</div>
<form action="hesapMakinesi.php" method="post">
<div class="row">
<input class="input" type="text" name="display" value=""/></div>

<div class="row">
<input id="id" class="x1" type="button" onclick="$.bir.fncJquery(this)" value="1"/>
<input class="x2" type="button" onclick="$.iki.fncJquery(this)" value="2"/>
<input class="x3" type="button" onclick="$.uc.fncJquery(this)" value="3"/>
</div>
<div class="row">
<input class="x4" type="button" onclick="$.dort.fncJquery(this)" value="4"/>
<input class="x5" type="button" onclick="$.bes.fncJquery(this)" value="5"/>
<input class="x6" type="button" onclick="$.alti.fncJquery(this)" value="6"/>
</div>
<div class="row">
<input class="x7" type="button" onclick="$.yedi.fncJquery(this)" value="7"/>
<input class="x8" type="button" onclick="$.sek.fncJquery(this)" value="8"/>
<input class="x9" type="button" onclick="$.dok.fncJquery(this)" value="9"/>
</div>
<div class="row"><input class="x0" type="button" onclick="$.sif.fncJquery(this)" value="0"/>
<input class="fact" type="button" onclick="$.fact.fncJquery(this)" value="!"/>
<input  style="background-color: #6dc570;"  class="tus" type="submit" name="gonder" value="="/>
</div>
<div class="row">
<input class="cikar" type="button" onclick="$.cikar.fncJquery(this)" value="-"/>
<input class="carp" type="button" onclick="$.carp.fncJquery(this)" value="*"/>
<input class="bol"  type="button" onclick="$.bol.fncJquery(this)" value="/"/>
<input class="topla" type="button" onclick="$.topla.fncJquery(this)" value="+"/>

</div>
</div>
</form>
</body>
</html>

<?php 

class Makine{ 
  
  
   function elemanlar($sayi){

   	$pattern ='/[+\!\-\*\/\(\)\.]/';
   	preg_match_all($pattern, $sayi, $results);
   	$sonuc = explode($results[0][0], $sayi);

            switch ($results[0][0]) {
        	case '+':
        		$islem = $sonuc[0]+$sonuc[1];
        		echo "$sonuc[0] + $sonuc[1] = ".$islem;
        		break;        	
        	case '-':
        		$islem = $sonuc[0]-$sonuc[1];
        		echo "$sonuc[0] - $sonuc[1] = ".$islem;
        		break;       	
        	
        	case '*':
        		$islem = $sonuc[0]*$sonuc[1];
        		echo "$sonuc[0] x $sonuc[1] =".$islem;
        		break;       	
        	
        	case '/':
        		$islem = $sonuc[0]/$sonuc[1];
        		echo "$sonuc[0] / $sonuc[1] =".$islem;
        		break; 
        	case '!':
        	$islem = Makine::factorial($sonuc[0]);
        	echo "$sonuc[0]!  =".$islem;
        		break;
        	default:
        		echo "";
        		break;
        }

   }

   function factorial($operand){
   			$islem = 1;
        	for ($j=1; $j <=$operand ; $j++) { 
        		 $islem = $islem*$j;
        	}        		
        		return $islem;
   }

}


?>
