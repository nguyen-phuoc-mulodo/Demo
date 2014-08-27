//*** Some Terminology about the OOP in JS

// Create a namespace ???
// global namespace
var MYAPP = {};

// Create a subnamepsace ???
MYAPP.event = {};

// Create an class
function Person() {};

//or

var Person = function() {};

// Create an instance
var person1 = new Person();
var person2 = new Person();

function Person() {
	alert ('Person initialized');
}