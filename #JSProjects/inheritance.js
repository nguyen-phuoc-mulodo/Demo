
//In the example below, we define the class Student as a child class of Person. Then we redefine the sayHello() method and add the sayGoodBye() method.

// Define the Person constructor

function Person(firstName) {
	this.firstname = firstName;
}

// Add a couple of methods to Person.prototype

Person.prototype.walk = fucntion() {
	alert('I am walking');
}

Person.prototype.sayHello = function() {
	alert("Hello, I'm " + this.firstName );
}

// Define the Student constructor

function Student(firstName, subject) {
	// Call the parent constructor, making sure (using Function#call) that "this" is
	// set correctly during the call
	Person.call(this, firstName);

	// Initialize our Student-spicific propertiese
	this.subject = subject;
}

Student.prototype = Object.create(Person.prototype); // See note below

// Set the "constructor" property refer to Student
Student.prototype.constructor = Student;

//Replace the "sayHello" method
Student.prototype.sayHello = function() {
	alert("Hello, I'm " + this.firstName + ". I'm studying " + this.subject + ".");
}

//Add a "sayGoodBye" method
Student.prototype.sayGoodBye = function() {
	alert('Goodbye');
}

// Ex usage

var student1 = new Student("Janet", "Applied Physics");

student1.sayHello();
student1.walk();
student1.sayGoodBye;

// Check that the instanceof works correctly
alert(student1 instanceof Person); //true
alert(student1 instanceof Student); //true