<?php 
	/**
		 * 
		 */
		class View
		{
			
			// function __construct(argument)
			// {
			// 	# code...
			// }

			function render($filename){
				include("view/".$filename.".php");
			}
		}	


?>