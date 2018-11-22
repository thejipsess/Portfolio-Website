var loopRun;

function turntable(path, loop){
	var image = $('.turntableImg');
	var imageFullscreen = $('.turntableImgFullscreen');
	var progressBar = $('.progressBar');
	var progressBarMaxWidth = progressBar.parent().width();
	var lastFrame = 59;
	var framesLoaded = 0;
	var frames = [];
	var fps = 10;
	var slider = document.getElementById("turntableSlider");
	var sliderFader = $('#turntableSlider');

	
	progressBar.parent().fadeIn(200);

	function setPath(frame){
		// set the path to the next image to be cached
		return path + '/turntable (' + (frame + 1) + ').png';
	}

	(function tableRun(caching){
		if (caching) {
			// cache all the images before playing the turnTable
			if (framesLoaded <= lastFrame) {
				frames[framesLoaded] = new Image();
				frames[framesLoaded].src = setPath(framesLoaded);
				//console.log('width: ' + progressBar.width());
				frames[framesLoaded].onload = function(){
					// animate progress bar
					var progressBarWidth = (framesLoaded/lastFrame) * progressBarMaxWidth;
					progressBar.width(progressBarWidth);
					framesLoaded ++;
					tableRun(true);
				}
			} else {
				progressBar.parent().fadeOut(200);
				tableRun(false);
			}
		} else if(loop == true){
			// loop the turntable
			sliderFader.parent().fadeOut(200);
			if (typeof loopRun !== 'undefined') {
				clearInterval(loopRun);
			}
			looper(path, 'initiate');
		}else {
			// activate the turnTable
			sliderFader.parent().fadeIn(200);
			if (typeof loopRun !== 'undefined') {
				clearInterval(loopRun);
			}
			$('.turntableImg').attr('src', path + '/turntable (12).png');
			$('.turntableSlider').attr('value', 12);
			slider.oninput = function(){
				image.attr('src', setPath(parseInt(this.value)));
				imageFullscreen.attr('src', setPath(parseInt(this.value)));
			}

		}

	}(true)); // here tableRun is encapsulated and set to true such that it is automaticcaly invoked.
}

function looper(path, status){
	var image = $('.turntableImg');
	var imageFullscreen = $('.turntableImgFullscreen');
	var fps = 10;
	var lastFrame = 59;


	if (status == 'initiate') {
		var frameCounter = 0;
		loopRun = setInterval(function(){
			image.attr('src', setPath(frameCounter));
			imageFullscreen.attr('src', setPath(frameCounter));
			if(frameCounter < lastFrame){
				frameCounter++;
			} else {
				frameCounter = 0;
			}
		}, 1000 / fps)
	}

	function setPath(frame){
		// set the path to the next image to be cached
		return path + '/turntable (' + (frame + 1) + ').png';
	}
}