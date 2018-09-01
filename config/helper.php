<?php 
		
		define("URL","http://localhost/adi/");


		function rupiah($nilai){

			$rp= "Rp ".number_format($nilai);
			return $rp;
		}
?>