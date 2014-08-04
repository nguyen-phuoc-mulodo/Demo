// There are two way in assigning Object in JS

var obj = new Object();

//and: literal syntax
var obj = {};

//and
function Person(name, age) {
	this.name = name;
	this.name = age;
}
// Add method to this class

Person.prototype.myMethod = function() {};

var You = new Person("You", 24); // We are creating a new person names "you" (that was the first parameter, and the age..)


// We can acess aboject properties in one of two way

obj.name = "Simon"; // Notice Reserverd word when use this method
var name = obj.name;

//and
obj['name'] = "Simon";
var name = obj["name"];




//Object literal syntax can be used to initialise an object in its entirety:

var obj = {
	name : "Carrot",
	"for" : "Max",
	details: {
		color: "orange",
		size : 12
	}
}

//Access atribute
obj.details.color;
//or
obj['details']['size'];
