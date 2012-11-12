var packageNameUrl = 'index.php/pmaechler.workflow/';

jQuery(document).ready(function(){

});

jQuery('.showHistory').live('click', function() {
	var path = jQuery('base').attr('href') + packageNameUrl + 'Customer/getCustomerHistory';
	var parameter = 'customer=' + jQuery(this).find('.customerIdentity').val();

	jQuery.ajax({
		type: 'POST',
		url: path,
		data: parameter,
		async: true,
		success: function(result) {
			// before appending any new data of a job remove old content (if there is old content)
			jQuery('.lightBox').remove();
			// append the new lightbox content of the job to the body
			jQuery('body').append(result);

			// open the modal with the previous appended data
			jQuery('.lightBox').dialog({
				modal: true,
				draggable: false,
				resizable: false,
				width: 500
			});
			jQuery('.ui-icon-closethick').remove();
			jQuery('.ui-dialog-titlebar-close').append('<span class="closeLightbox">&nbsp;</span>');
		}
	});
});