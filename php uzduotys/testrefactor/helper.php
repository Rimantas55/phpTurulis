<?php

				// show require msg
function showRequire(){
	if (isset($_POST['submit'])) {
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['jobTitle'])) {
			return "Require";
		} 
	}
} 