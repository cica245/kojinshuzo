/**
 * @author Paul Chan / KF Software House
 * http://www.kfsoft.info
 *
 * Version 0.5
 * Copyright (c) 2010 KF Software House
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 *
 */

(function($) {

    var _options = new Array();

	jQuery.fn.MyThumbnail = function(options) {
		_options[_options.length] = $.extend({}, $.fn.MyThumbnail.defaults, options);


		return this.each(function()
		{
			$(this).removeAttr("width").removeAttr("height");
			var img = this;
			var src = $(this).attr("src");
			var width = $(this).width();
			var height = $(this).height();

			$(this).hide();
			if (width==0 || height==0)
			{
				var optIndex = _options.length-1;
				$("<img/>")
				.attr("src", $(this).attr("src"))
				.load(function() {

					width = this.width;
					height = this.height;

					addImage(img, width, height, optIndex);
				});
			}
			else
			{
				var optIndex = _options.length-1;
				addImage(img, width, height, optIndex);
			}
		});

		function addImage(img, width, height, optIndex)
		{
			var src = $(img).attr("src");

			var opt = _options[optIndex];

			var imageSizeWidthRatio = opt.thumbWidth/width;
			var imageSizeWidth = null;
			var imageSizeHeight = null;

			imageSizeWidth = opt.thumbWidth;
			imageSizeHeight = height * imageSizeWidthRatio;


			if (imageSizeHeight < opt.thumbHeight)
			{
				var resizeFactor = opt.thumbHeight/imageSizeHeight;

				//fix
				imageSizeHeight = opt.thumbHeight;
				imageSizeWidth = resizeFactor*imageSizeWidth;
			}

			var appendHtml = null;
			if (!opt.bShowPointerCursor)
			{
				appendHtml = "<DIV class='myThumbDivAutoAdd "+ opt.imageDivClass +"' style='display:none;float:left;width:"+ opt.thumbWidth +"px;height:" + opt.thumbHeight + "px;overflow:hidden;background:url("+src +") no-repeat "+opt.backgroundColor+";";
				appendHtml += "background-position:center;background-size:"+ imageSizeWidth + "px " + imageSizeHeight  +"px;'></DIV>";
			}
			else
			{
				appendHtml = "<DIV class='myThumbDivAutoAdd "+ opt.imageDivClass +"' style='cursor:pointer;display:none;float:left;width:"+ opt.thumbWidth +"px;height:" + opt.thumbHeight + "px;overflow:hidden;background:url("+src +") no-repeat "+opt.backgroundColor+";";
				appendHtml += "background-position:center;background-size:"+ imageSizeWidth + "px " + imageSizeHeight  +"px;'></DIV>";
			}

			$(img).after(appendHtml)
			$(".myThumbDivAutoAdd").fadeIn();
		}
	}

	//default values
	jQuery.fn.MyThumbnail.defaults = {
		thumbWidth:130,
		thumbHeight:100,
		backgroundColor:"#ccc",
		imageDivClass:"myPic",
		bShowPointerCursor:false
	};
})(jQuery);
