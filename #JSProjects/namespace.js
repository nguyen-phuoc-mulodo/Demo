// global namespace\

var MYAPP = MYAPP || {};

// sub namespace
MYAPP.event = {};


/*** EXAMPLE ***/

MYAPP = {
	myMethod : func1tion(name) {
		console.log(name);
	}
}
MYAPP.event = {
	addListener : function (el, type, fn) {
		// do stuff
		alert('OK');
	},
	removeListener : function(e1, type, fn) {
		// do stuff
	},
	getEvent : function(e) {
		// do stuff
	}
}

// Syntax for using addListener commonMethod
MYAPP.event.addListener("yourel", "type", function() {} );
MYAPP.myMethod('Nguyen Huu Phuoc');