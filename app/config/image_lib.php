<?php
    //Preferences
    //Preference	Default Value	Options	Description
    $config['image_library'] = 'gd2';
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = TRUE;
    //$config['library_path'] = './imagemagick';
    //source_image	None	None	Sets the source image name/path. The path must be a relative or absolute server path, not a URL.	 
    //dynamic_output	FALSE	TRUE/FALSE (boolean)	Determines whether the new image file should be written to disk or generated dynamically. Note: If you choose the dynamic setting, only one image can be shown at a time, and it can’t be positioned on the page. It simply outputs the raw image dynamically to your browser, along with image headers.	R, C, X, W
    $config['dynamic_output'] = FALSE;
    //file_permissions	0644	(integer)	File system permissions to apply on the resulting image file, writing it to the disk. WARNING: Use octal integer notation!	R, C, X, W
    //quality	90%	1 - 100%	Sets the quality of the image. The higher the quality the larger the file size.	R, C, X, W
    //new_image	None	None	Sets the destination image name/path. You’ll use this preference when creating an image copy. The path must be a relative or absolute server path, not a URL.	R, C, X, W
    //width	None	None	Sets the width you would like the image set to.	R, C
    //height	None	None	Sets the height you would like the image set to.	R, C
    $config['thumb_marker'] = '_sm';
    //master_dim	auto	auto, width, height	Specifies what to use as the master axis when resizing or creating thumbs. For example, let’s say you want to resize an image to 100 X 75 pixels. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. “auto” sets the axis automatically based on whether the image is taller than wider, or vice versa.	R
    //rotation_angle	None	90, 180, 270, vrt, hor	Specifies the angle of rotation when rotating images. Note that PHP rotates counter-clockwise, so a 90 degree rotation to the right must be specified as 270.	X
    //x_axis	None	None	Sets the X coordinate in pixels for image cropping. For example, a setting of 30 will crop an image 30 pixels from the left.	C
    //y_axis	None	None	Sets the Y coordinate in pixels for image cropping. For example, a setting of 30 will crop an image 30 pixels from the top.	

    //Watermarking Preferences
    //This table shows the preferences that are available for both types of watermarking (text or overlay)
    //Preference	Default Value	Options	Description
    //wm_type	text	text, overlay	Sets the type of watermarking that should be used.
    //source_image	None	None	Sets the source image name/path. The path must be a relative or absolute server path, not a URL.
    //dynamic_output	FALSE	TRUE/FALSE (boolean)	Determines whether the new image file should be written to disk or generated dynamically. Note: If you choose the dynamic setting, only one image can be shown at a time, and it can’t be positioned on the page. It simply outputs the raw image dynamically to your browser, along with image headers.
    //quality	90%	1 - 100%	Sets the quality of the image. The higher the quality the larger the file size.
    //wm_padding	None	A number	The amount of padding, set in pixels, that will be applied to the watermark to set it away from the edge of your images.
    //wm_vrt_alignment	bottom	top, middle, bottom	Sets the vertical alignment for the watermark image.
    //wm_hor_alignment	center	left, center, right	Sets the horizontal alignment for the watermark image.
    //wm_hor_offset	None	None	You may specify a horizontal offset (in pixels) to apply to the watermark position. The offset normally moves the watermark to the right, except if you have your alignment set to “right” then your offset value will move the watermark toward the left of the image.
    //wm_vrt_offset	None	None	You may specify a vertical offset (in pixels) to apply to the watermark position. The offset normally moves the watermark down, except if you have your alignment set to “bottom” then your offset value will move the watermark toward the top of the image.

    //Text Preferences
    //This table shows the preferences that are available for the text type of watermarking.

    //Preference	Default Value	Options	Description
    //wm_text	None	None	The text you would like shown as the watermark. Typically this will be a copyright notice.
    //wm_font_path	None	None	The server path to the True Type Font you would like to use. If you do not use this option, the native GD font will be used.
    //wm_font_size	16	None	The size of the text. Note: If you are not using the True Type option above, the number is set using a range of 1 - 5. Otherwise, you can use any valid pixel size for the font you’re using.
    //wm_font_color	ffffff	None	The font color, specified in hex. Both the full 6-length (ie, 993300) and the short three character abbreviated version (ie, fff) are supported.
    //wm_shadow_color	None	None	The color of the drop shadow, specified in hex. If you leave this blank a drop shadow will not be used. Both the full 6-length (ie, 993300) and the short three character abbreviated version (ie, fff) are supported.
    //wm_shadow_distance	3	None	The distance (in pixels) from the font that the drop shadow should appear.

    //Overlay Preferences
    //This table shows the preferences that are available for the overlay type of watermarking.

    //Preference	Default Value	Options	Description
    //wm_overlay_path	None	None	The server path to the image you wish to use as your watermark. Required only if you are using the overlay method.
    //wm_opacity	50	1 - 100	Image opacity. You may specify the opacity (i.e. transparency) of your watermark image. This allows the watermark to be faint and not completely obscure the details from the original image behind it. A 50% opacity is typical.
    //wm_x_transp	4	A number	If your watermark image is a PNG or GIF image, you may specify a color on the image to be “transparent”. This setting (along with the next) will allow you to specify that color. This works by specifying the “X” and “Y” coordinate pixel (measured from the upper left) within the image that corresponds to a pixel representative of the color you want to be transparent.
    //wm_y_transp	4	A number	Along with the previous setting, this allows you to specify the coordinate to a pixel representative of the color you want to be transparent.