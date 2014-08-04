$(function () { 
	
	//*** Create an instance when the DOM is ready
	//$.jstree.defaults.core.themes.variant = "large";
	$('#jstree').jstree({
		"core": {
			"themes": {
				"variant": "large"
			},
		    'data' : [
		       'Simple root node',
		       {
					'text' : 'Root node 2',
					'state' : {
					'opened' : false,
					},
					'children' : [
						{ 'text' : 'Child 1' },
						'Child 2'
					],
					"li_attr": {'data-value': 'mx/inc'} 
		      }
		    ]			
			
		},

	}); 

	//*** Bind to events triggered on the tree
	$('#jstree').on("changed.jstree", function (e, data) {
   		var $li = $(this).find('li#'+ data.selected); //data.selected: ID of element li
   		//console.log($li);
	});

	//*** Interact with the tree - either way is OK
    $('button').on('click', function () {
      //$('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      //$.jstree.reference('#jstree').select_node('child_node_1');
    });	

});