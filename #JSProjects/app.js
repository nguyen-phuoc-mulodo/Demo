(function() {
	var app = angular.module('store', []);
	app.controller('StoreController', function() {
		this.products = gem;
	});

	var gem = [
		{
			name: 'Dodecahedron',
			price: 2.95,
			description: '. . .',
			canPurchase: true,
			//soldOut: true
		},
		{
			name: 'Potential Gem',
			price: 5.95,
			description: '. . .',
			canPurchase: true,
			//soldOut: true			
		}
	]
})();