<?php
class Object { 
	function method($greatWho, $greatWhat) { 
		echo "$greatWho are Great $greatWhat!";
	}
}
$callableArray = array(new Object, 'method');
if(is_callable($callableArray)) {
    call_user_func($callableArray, "You", "Success");
    call_user_func_array($callableArray, array("You", "Success"));
}


/* Call a function*/
function test($pa1) {
    echo "Awsome, {$pa1}";
}

if (is_callable('test')) {
    call_user_func('test', 'Phuoc');
}