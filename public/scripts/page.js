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
	        /*
	        var img = $('<img/>', {src: $(this).find('img').attr('src')});
	        //console.log('width:'+img.get(0).width+'px');
	        $('<div/>').append(img).dialog();
	        
	        $('.ui-dialog').css('width', img.get(0).width + 30);
	        */
	    }); 
	    
	    
	    if ($('#background_colorpicker').length) $('#background_colorpicker').farbtastic('#background_color');
	    
	    if ($('#font_colorpicker').length) $('#font_colorpicker').farbtastic('#font_color');
	    
	    if ($('#link_colorpicker').length) $('#link_colorpicker').farbtastic('#link_color');

	    if ($('#about_colorpicker').length) $('#about_colorpicker').farbtastic('#about_background_color');

	    if ($('#reviews_colorpicker').length) $('#reviews_colorpicker').farbtastic('#reviews_background_color');
	        
	    if ($('#stores_colorpicker').length) $('#stores_colorpicker').farbtastic('#stores_background_color');
	    
	    if ($('#section_title_colorpicker').length) $('#section_title_colorpicker').farbtastic('#section_title_color');
	    
	    $('body').delegate('.edit-video', 'click', function() {
	        
	        var self = $(this), form = $('#edit-video-form'), item = self.parents('.item:first');
	        //console.log(form, item);
	        form.find('[name=title]').val(item.find('.title').html());
	        form.find('[name=video]').val(item.find('.video').html());
	        form.append($('<input />', {type: 'hidden', name: 'id', value: self.attr('data-id')}));
	        
	        $.scrollTo($('.container'));
	        
	        return false;
	    });

        $('#loading-global')
           .ajaxStart(function() {
                
        		$(this).show();
           })
           .ajaxStop(function() {
        		var self = $(this);
                self.html('Done!');
                
                setTimeout(function() {
                    self.html('Working...');
                    self.hide();
                }, 1500)
            });
	    
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
	    
	    $('.separator, .separator label').css('cursor', 'pointer');
	    $('.section-content').hide();
	    $('.section-content:first').show();
	    $('body').delegate('.separator', 'click', function() {
	        //$('.section-content').hide();
	        $(this).next('.section-content:first').toggle();
	    });
	    
			
        $('.separator').find('strong').wrap('<a href="javascript:;"></a>');
        $('.separator').find('strong').append('<span  style = " margin-left:2px;font-family:verdana;">»</span>');	    
	    
        $('.datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            changeYear: true,
            changeMonth: true,
            showMonthAfterYear:true,
            yearRange: '1980:+5'
        });	  
        
        $( "#image-sortable" ).sortable({
            //placeholder: "ui-state-highlight",
            stop: function(event, ui) {
                //console.log(event, ui);
                //console.log($('#sortable').sortable('toArray'));
                var name = $('.sortable-wrapper').find('[type=hidden]').attr('name'),
                    value = $('.sortable-wrapper').find('[type=hidden]').attr('value');
                
                var data = {};
                data['order'] = $('#image-sortable').sortable('toArray');
                data[name] = value;
                
                $.post(App.URL+"image/update_order", data, function() {});
            }
        });
		$( "#image-sortable" ).disableSelection();          

        $( "#store-sortable" ).sortable({
            //placeholder: "ui-state-highlight",
            stop: function(event, ui) {
                //console.log(event, ui);
                //console.log($('#sortable').sortable('toArray'));
                var name = $('.sortable-wrapper').find('[type=hidden]').attr('name'),
                    value = $('.sortable-wrapper').find('[type=hidden]').attr('value');
                
                var data = {};
                data['order'] = $('#store-sortable').sortable('toArray');
                data[name] = value;
                //console
                $.post(App.URL+"store/update_order", data, function() {});
            }
        });
		$( "#store-sortable" ).disableSelection();    


        $( "#video-sortable" ).sortable({
            //placeholder: "ui-state-highlight",
            stop: function(event, ui) {
                //console.log(event, ui);
                //console.log($('#sortable').sortable('toArray'));
                var name = $('.sortable-wrapper').find('[type=hidden]').attr('name'),
                    value = $('.sortable-wrapper').find('[type=hidden]').attr('value');
                
                var data = {};
                data['order'] = $('#video-sortable').sortable('toArray');
                data[name] = value;
                //console
                $.post(App.URL+"video/update_order", data, function() {});
            }
        });
		$( "#video-sortable" ).disableSelection();  
		
        $( "#review-sortable" ).sortable({
            //placeholder: "ui-state-highlight",
            stop: function(event, ui) {
                //console.log(event, ui);
                //console.log($('#sortable').sortable('toArray'));
                var name = $('.sortable-wrapper').find('[type=hidden]').attr('name'),
                    value = $('.sortable-wrapper').find('[type=hidden]').attr('value');
                
                var data = {};
                data['order'] = $('#review-sortable').sortable('toArray');
                data[name] = value;
                //console
                $.post(App.URL+"review/update_order", data, function() {});
            }
        });
		$( "#review-sortable" ).disableSelection(); 		     
	})
	
}) (jQuery);