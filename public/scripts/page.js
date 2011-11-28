(function($) {
	
	App = {
		
	    loader: function() {
            $("#ajax-loader").ajaxStart(function(){
                $(this).show();
            }).ajaxStop(function() {
                $(this).hide();
            });		
	    }
	};
	
	
	$(function() {
	    $('#fileupload').fileupload();
	})
	
}) (jQuery);