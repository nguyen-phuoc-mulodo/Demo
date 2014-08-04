// Create an array: 

// The old way
var a = new array();
a[0] = "dog";
a[1] = "cat";
a[2] = "hen";
a.length;

// The modern way

var a = ["dog", "cat", "hen"]; // Notice: don't leave a comma at the end of an array
a.lenght;


// Old for loop

for (var i = 0; i < a.lenght; i++) {
	//core here
}

//Nice idiom for loop

for (var i =0, len = a.lenght; i < len; i++) {
	// core here with a[i]
}



/*
 * Here we are setting up two variables. The assignment in the middle part of the for loop is also tested for truthfulness — if it succeeds, the loop continues. Since i is incremented each time, items from the array will be assigned to item in sequential order. The loop stops when a "falsy" item is found (such as undefined).
 * Note that this trick should only be used for arrays which you know do not contain "falsy" values (arrays of objects or DOM nodes for example). If you are iterating over numeric data that might include a 0 or string data that might include the empty string you should use the i, len idiom instead.
 */
for (var i = 0, item; item = a[i++]) {
	//core here with item
}


/*
Some functions of an array

Method name	Description
a.toString()	 
a.toLocaleString()	 
a.concat(item[, itemN])				Returns a new array with the items added on to it.
a.join(sep)							Converts the array to a string - values delimited by the passed param
a.pop()								Removes and returns the last item.
a.push(item[, itemN])				Push adds one or more items to the end.
a.reverse()							Reverse the array.
a.shift()							Removes and returns the first item.
a.slice(start, end)					Returns a sub-array.
a.sort([cmpfn])						Takes an optional comparison function.
a.splice(start, delcount[, itemN])	Lets you modify an array by deleting a section and replacing it with more items.
a.unshift([item])					Prepends items to the start of the array.

*/


// Append new element to an array

var a = [];
a.push('newItem'); // vs PHP: a[] = 'newItem';

