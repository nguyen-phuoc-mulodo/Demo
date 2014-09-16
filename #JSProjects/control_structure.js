
//If else
var name = "kittens";
if (name == "puppies") {
	name += "!";
} else if (name == "kittens") {
	name += "!!";
} else {
	name = "!" + name;
}

// >name == "kittens!!";


/**********************************/
/*
 * While loop
 */

// While
 while (true) {
 	//code here
 }

 var input;


// Do while
 do {
 	//code here
 } while (true)



/* 
 * For
 */
for (var i = 0; i < 5; i++) {
	//Will execute 5 times
}


//Nice idiom for loop
for (var i =0, len = a.lenght; i < len; i++) {
	// core here with a[i]
}


// For in

for (var i in a) {
	// code here with a[i];
}


/*
 * Here we are setting up two variables. The assignment in the middle part of the for loop is also tested for truthfulness — if it succeeds, the loop continues. Since i is incremented each time, items from the array will be assigned to item in sequential order. The loop stops when a "falsy" item is found (such as undefined).
 * Note that this trick should only be used for arrays which you know do not contain "falsy" values (arrays of objects or DOM nodes for example). If you are iterating over numeric data that might include a 0 or string data that might include the empty string you should use the i, len idiom instead.
 */
for (var i = 0, item; item = a[i++]) {
	//core here with item
}


/*********************************/

var allowed = (age > 18) ? "Yes" : "No"; // same as PHP

//Switch case statement

//same as PHP
switch (action) {
	case 'draw':
		//code here
		break;
	case 'eat':
		//code here;
		break;
	default:
		//code here
}

