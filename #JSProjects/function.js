
function add(x, y) {
	var r = x + y;
	return r;
}

//using arguments

function add() {
	var sum = 0;
	for (var i = 0, j = arguments.length; i < j; i++) {
		sum += arguments[i];
	}
	return sum;
}

var a = add(2, 3, 4 ,5);
console.log(a);

//avg function

function avg() {
	var avg = 0;
	for (var i=0, j= arguments.length; i < j; i++) {
		sum += arguments[i];
	}
	return sum / arguments.length;
}

//Create anonymous function

var avg = function() {
	var sum = 0;
	for (var i = 0, j = arguments.length; i < j; i++) {
		sum += arguments[i]; 
	}
	return sum / arguments; 
}