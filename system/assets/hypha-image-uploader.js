$(function() {
	$('[data-image-uploader]').each(function () {
		// get input
		var $input = $(this);
		console.log($input.data('image-uploader-src'));

		var src = $input.data('image-uploader-src');

		// Add preview
		var $preview;

		$input.on('change', function () {
			createPreviewImage(window.URL.createObjectURL(this.files[0]));
			toggleInputAndDelete();
		});
		var createPreviewImage = function (src) {
			if (src) {
				$preview = $('<img class="preview_uploaded_image" src="' + src + '">').insertAfter($input);
				$('<a href="#"><img src="https://image.flaticon.com/icons/svg/261/261935.svg" style="width:40px;height:40px;" accept="image/png,image/jpeg,image/jpg,image/gif,image/bmp"></a>')
					.on('click', function (e) {
						e.preventDefault();
						// call delete function
						if ($input.prop('defaultValue') == $preview.attr('src')) {
							$.post('delete_uploaded_image', {src: $preview.attr('src')});
						}

						// remove delete button
						$(this).remove();

						// set image src to null
						$preview.attr('src', null);

						// remove image
						$preview.remove();

						$input.attr('value', null);

						// toggle input
						toggleInputAndDelete();
					})
					.insertAfter($preview);
			}
		};
		createPreviewImage(src);

		var toggleInputAndDelete = function () {
			if ($preview && $preview.attr('src')) {
				$input.hide();
			} else {
				$input.show();
			}
		};
		toggleInputAndDelete();
	});
});
