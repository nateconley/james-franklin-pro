jQuery(document).ready(function($) {
	// Hammer-time.js
	!function(){var a=window.MutationObserver||window.WebKitMutationObserver,b="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,c=void 0!==document.documentElement.style["touch-action"]||document.documentElement.style["-ms-touch-action"];if(!c&&b&&a){window.Hammer=window.Hammer||{};var d=/touch-action[:][\s]*(none)[^;'"]*/,e=/touch-action[:][\s]*(manipulation)[^;'"]*/,f=/touch-action/,g=navigator.userAgent.match(/(iPad|iPhone|iPod)/g)?!0:!1,h=function(){try{var a=document.createElement("canvas");return!(!window.WebGLRenderingContext||!a.getContext("webgl")&&!a.getContext("experimental-webgl"))}catch(b){return!1}}(),i=h&&g;window.Hammer.time={getTouchAction:function(a){return this.checkStyleString(a.getAttribute("style"))},checkStyleString:function(a){return f.test(a)?d.test(a)?"none":e.test(a)?"manipulation":!0:void 0},shouldHammer:function(a){var b=this.hasParent(a.target);return b&&(!i||Date.now()-a.target.lastStart<125)?b:!1},touchHandler:function(a){var b=a.target.getBoundingClientRect(),c=b.top!==this.pos.top||b.left!==this.pos.left,d=this.shouldHammer(a);("none"===d||c===!1&&"manipulation"===d)&&("touchend"===a.type&&(a.target.focus(),setTimeout(function(){a.target.click()},0)),a.preventDefault()),this.scrolled=!1,delete a.target.lastStart},touchStart:function(a){this.pos=a.target.getBoundingClientRect(),i&&this.hasParent(a.target)&&(a.target.lastStart=Date.now())},styleWatcher:function(a){a.forEach(this.styleUpdater,this)},styleUpdater:function(a){if(a.target.updateNext)return void(a.target.updateNext=!1);var b=this.getTouchAction(a.target);return b?void("none"!==b&&(a.target.hadTouchNone=!1)):void(!b&&(a.oldValue&&this.checkStyleString(a.oldValue)||a.target.hadTouchNone)&&(a.target.hadTouchNone=!0,a.target.updateNext=!1,a.target.setAttribute("style",a.target.getAttribute("style")+" touch-action: none;")))},hasParent:function(a){for(var b,c=a;c&&c.parentNode;c=c.parentNode)if(b=this.getTouchAction(c))return b;return!1},installStartEvents:function(){document.addEventListener("touchstart",this.touchStart.bind(this)),document.addEventListener("mousedown",this.touchStart.bind(this))},installEndEvents:function(){document.addEventListener("touchend",this.touchHandler.bind(this),!0),document.addEventListener("mouseup",this.touchHandler.bind(this),!0)},installObserver:function(){this.observer=new a(this.styleWatcher.bind(this)).observe(document,{subtree:!0,attributes:!0,attributeOldValue:!0,attributeFilter:["style"]})},install:function(){this.installEndEvents(),this.installStartEvents(),this.installObserver()}},window.Hammer.time.install()}}();

	// Toggle Nav Classes
	$('.main-nav-button').click(function(){
		$('.main-nav ul').toggleClass('show');
		$('.main-nav .main-nav-button').toggleClass('out');
	});

	// BEGIN RESPONSIVE VIDEOS
	// Find all YouTube videos
	var $allVideos = $("iframe"),

	    // The element that is fluid width
	    $fluidEl = $('.iframe-wrapper');

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

	  $(this)
	    .data('aspectRatio', this.height / this.width)

	    // and remove the hard coded width/height
	    .removeAttr('height')
	    .removeAttr('width');

	});

	// When the window is resized
	$(window).resize(function() {

	  var newWidth = $fluidEl.width();

	  // Resize all videos according to their own aspect ratio
	  $allVideos.each(function() {

	    var $el = $(this);
	    $el
	      .width(newWidth)
	      .height(newWidth * $el.data('aspectRatio'));

	  });

	// Kick off one resize to fix all videos on page load
	}).resize();
	// END RESPONSIVE VIDEOS

	// Make videos pretty!
	$allVideos.each(function() {
		var videoSrc = $(this).attr('src');
		$(this).attr('src', function() {
			return videoSrc + "?showinfo=0&autohide=1";
		});
	});

	// Contact modal toggle
	$('.call-to-action').click(function(){
		$('.contact-modal').addClass('open');
	});

	$('.close-contact').click(function(){
		$('.contact-modal').removeClass('open');
	});

});