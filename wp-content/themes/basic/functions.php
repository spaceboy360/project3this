<?php

function is_active($page){
	if(is_page($page)){
		echo 'active';
	}
}