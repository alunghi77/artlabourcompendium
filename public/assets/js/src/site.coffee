
$ ->
	# ----------------------------------
	# Form Carousel
	# ----------------------------------

	num_videos = $(".video-list .video-item").length

	if num_videos > 5

		$(".next, .prev").show()

	$(".next").on "click", () -> 

		$(".video-list .video-scroller").animate { "left" : "-=960px" }, 600

		false
	
	$(".prev").on "click", () -> 

		$(".video-list .video-scroller").animate { "left" : "+=960px" }, 600

		false

	if $(".video-list").length > 0 

		$(document).bgStretcher({
				images: ['/assets/img/bg-video-1.jpg'],
				imageWidth: 1024, imageHeight: 768
			});


	$(".video-item a").on "click", () ->

		rel = $(@).attr("rel")

		$(".bgs-current img").attr("src", "/assets/img/bg-video-#{rel}.jpg")

		false