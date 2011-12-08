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
	    
	    $('body').delegate('.dialog-image', 'click', function() {
	        var img = $('<img/>', {src: $(this).find('img').attr('src')});
	        console.log('width:'+img.get(0).width+'px');
	        $('<div/>').append(img).dialog();
	        
	        $('.ui-dialog').css('width', img.get(0).width + 30);
	    }); 
	    
	    
	    if ($('#background_colorpicker').length) $('#background_colorpicker').farbtastic('#background_color');
	    
	    if ($('#font_colorpicker').length) $('#font_colorpicker').farbtastic('#font_color');
	    
	    if ($('#link_colorpicker').length) $('#link_colorpicker').farbtastic('#link_color');

	    if ($('#about_colorpicker').length) $('#about_colorpicker').farbtastic('#about_background_color');

	    if ($('#reviews_colorpicker').length) $('#reviews_colorpicker').farbtastic('#reviews_background_color');
	        
	    if ($('#stores_colorpicker').length) $('#stores_colorpicker').farbtastic('#stores_background_color');
	    
	    
	    $('body').delegate('.edit-video', 'click', function() {
	        
	        var self = $(this), form = $('#edit-video-form'), item = self.parents('.item:first');
	        //console.log(form, item);
	        form.find('[name=title]').val(item.find('.title').html());
	        form.find('[name=video]').val(item.find('.video').html());
	        form.append($('<input />', {type: 'hidden', name: 'id', value: self.attr('data-id')}));
	        
	        $.scrollTo($('.container'));
	        
	        return false;
	    });
	    /*
	    $('body').delegate('.edit-review', 'click', function() {
	        
	        var self = $(this), form = $('#edit-review-form'), item = self.parents('.item:first');
	        //console.log(form, item);
	        form.find('[name=title]').val(item.find('.title').find('a').html());
	        form.find('[name=description]').val(item.find('.description').html());
	        form.find('[name=url]').val(item.find('.title').find('a').attr('href'));
	        form.append($('<input />', {type: 'hidden', name: 'id', value: self.attr('data-id')}));
	        
    	    $('#rate-star').raty('start', item.find('.star').attr('data-rate'))
	        
	        $.scrollTo($('.container'));
	        
	        return false;
	    });	
	    */
	    
	    $('#rate-star').each(function(i, v) {
	        var self = $(v);
	        
	        self.raty({
	            path: App.URL + 'scripts/plugins/raty/img/',
	            start: self.attr('data-rate'),
	            scoreName: 'rate', 
            });
	    });
	    
	    $('.star').each(function(i, v) {
	        var self = $(v);
	        
	        self.raty({
	            path: App.URL + 'scripts/plugins/raty/img/',
	            start: self.attr('data-rate'), 
	            readOnly:true
            });
	    });
    
	})
	
}) (jQuery);