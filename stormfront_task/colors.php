<?php

	Require 'colors.class.php' ;
	$color=new colors;
	//Insert a new color ‘Green’ into the database
	$color->insertColor('Green');
	//Update the table by changing the color ‘Red’ to ‘Pink’
	$color->updateColor('Red','Pink');
	//Delete the color ‘Orange’
	$color->deleteColor('Orange');
?>