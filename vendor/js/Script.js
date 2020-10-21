/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){

	// preparing canvas variables
	var $canvas = $('#canvas'),
		context = $canvas.get(0).getContext('2d');

	// waiting for a file to be selected
	$('#img_file').on('change',function(){
		
		if (this.files && this.files[0]) {
			// checking if a file is selected

			if ( this.files[0].type.match(/^image\//) ) {
				// valid image file is selected
				// process image
				// process the image
				var reader = new FileReader();

				reader.onload = function(e){					
					var img = new Image();
					img.onload = function() {						
						context.canvas.width = img.width;
						context.canvas.height = img.height;
						context.drawImage(img, 0, 0);

						// instantiate cropper
						var cropper = $canvas.cropper({
							aspectRatio: 16 / 9
						});
					};
					img.src = e.target.result;
				};

				$('#crop').click(function(){
					var croppedImage = $canvas.cropper('getCroppedCanvas').toDataURL('image/jpg');
					$('#result').append($('<img>').attr('src', croppedImage));
					console.log(croppedImage);
				});

				// reading the selected file
				reader.readAsDataURL(this.files[0]);


			} else {
				alert('Invalid file type');
			}
		} else {
			alert('Please select a file.');
		}
	});

});