$('.topslider').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	autoplay:true,
	items: 1
});
$('.eventSlider').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	responsive:{
		0:{
				items:1
		},
		600:{
				items:2
		},
		1000:{
				items:3
		}
	}
});
$('.categories').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: false,
	responsive:{
		0:{
				items:1
		},
		600:{
				items:2
		},
		1000:{
				items:3
		}
	}
});
$('.referencies').owlCarousel({
	loop: true,
	margin: 25,
	nav: false,
	dots: false,
	responsive:{
		0:{
				items:2
		},
		600:{
				items:4
		},
		1000:{
				items:6
		}
	}
});
$('.profile-photo').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	dots: false,
	autoplay:true,
	items: 1,
	navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
});

$('[data-toggle="tooltip"]').tooltip();

$(".display").on("click", function(){
	$('.display').removeClass('active-filter');
	$(this).addClass('active-filter');
})

$(".two-in-line").on("click", function(){
	$('.line').addClass('col-md-6');
})

$(".one-in-line").on("click", function(){
	$('.line').removeClass('col-md-6');
	$('.blog-image, .text').addClass('one-line');
})

if ($(window).width() > 500) {
	$('select.country').select2();
	$('select.filter').select2();
}

$('#show').click(function(){
	$('#filter2').slideDown();
})

$('#hide').click(function(){
	$('#filter2').slideUp();
})

$('.show-pop').popover({
	container: 'body',
	trigger: 'focus',
	html: true,
	template:'<div class="popover" role="tooltip"><div class="popup"><div class="popover-body"></div></div></div>'
}).on('show.bs.popover', function(){
	$('.overlay').show();
	const selector = $(this).data("highlight");
	$(selector).addClass('highlighted');
	$(this).addClass('btn-active');
}).on('hide.bs.popover', function(){
	$('.overlay').hide();
	const selector = $(this).data("highlight");
	$(selector).removeClass('highlighted');
	$('.show-pop').removeClass('btn-active');
})

$('#find, .show-all-link').click(function(){
	$('.unfiltered').hide();
	$('.filtered').slideDown();
})

$('#find-second').click(function(){
	$('.unfiltered').hide();
	$('.filtered').slideDown();
	$('#filter2').slideUp();
})

$('.filter-btn').click(function(){
	$('.filter-btn').addClass('btn-outline-dark');
	$('.filter-btn').removeClass('btn-dark');
	$(this).addClass('btn-dark');
})

$('.join, #agency-send').click(function(event){
	event.preventDefault();
	$('.modal').fadeIn();
})

$('.close-me, .send').click(function(){
	$('.modal, .log-in, .message, .map-modal').fadeOut();
})

$('.show-mob-filter').click(function(){
	$('.filter-container').slideDown();
	$(this).hide();
	$('.mob-links').hide();
})

$('.aniview').AniView();

$('[data-showmore]').click(function(event){
	event.preventDefault();
	const show = $(this).data("showmore");
	$(show).slideDown();
})

$('[data-changetype]').click(function(event){
	const type = $(this).data("changetype");
	$('[data-changetype]').removeClass('btn-active');
	$(this).addClass('btn-active');
	event.preventDefault();
	$('.tabs').hide();
	$('.main-image').hide();
	$('.' + type).show();
})

$('.login').click(function(event){
	event.preventDefault();
	$('.log-in').fadeIn();
})

$('#findCasting').click(function(event){
	event.preventDefault();
	$('.map-modal').fadeIn();
})

$('.send-message').click(function(event){
	event.preventDefault();
	$('.message').fadeIn();
	$('.tooltip').remove();
})

$('.date').daterangepicker({
	autoUpdateInput: false,
	"locale": {
		"format": "DD/MM/YYYY",
		"separator": " - ",
		"applyLabel": "Uložiť",
		"cancelLabel": "Zrušiť",
		"fromLabel": "OD",
		"toLabel": "DO",
		"customRangeLabel": "Vlastný",
		"weekLabel": "",
		"daysOfWeek": [
			"Ne",
			"Po",
			"Ut",
			"St",
			"Št",
			"Pi",
			"So"
		],
		"monthNames": [
			"Január",
			"Február",
			"Marec",
			"Apríl",
			"Máj",
			"Jún",
			"Júl",
			"August",
			"September",
			"Október",
			"November",
			"December"
		],
		"firstDay": 1
	},
}).on('apply.daterangepicker', function(ev, picker) {
	$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});;


function modalCrop() {
	var $modal = $('.modal-crop'),
		$overlay = $('.overlay-crop'),
		$showModal = $('.show-modal'),
		$close = $('.close');
		$img = $('#crop');

	$overlay.css({
		'display' : 'flex'
	});

	$close.on('click', function(){
		$overlay.hide();
	});

	$overlay.on('click', function(e) {
		if (e.target !== this) return;
	});
}

const croppedImages = {main:{}, photos:{}, photobooks:{}, polaroids:{}};
const imageCropper = new Cropper($('#crop')[0], {
	aspectRatio: 16 / 9,
	multiple: true,
	viewMode: 2,
	rrotatable: true,
	checkOrientation: true,
	scalable: false,
});

$('.disabled').off('click').on('click', function() {
	alert('Najprv vyberte hlavné fotografie!');
});

$("[data-cropimageid][data-aspectratio]").on('change', function() {
	const el = $(this).data('cropimageid');
	const ratio = $(this).data('aspectratio');
	const unlock = $(this).data('unlock');
	const section = $(this).data('section');
	console.log($(this).data());
	const target = $('#' + el);

	readURL(target, el)
		.then(imgUrl => {
			imageCropper.setAspectRatio(ratio);
			imageCropper.replace(imgUrl);
			setCroppedImage(section, el);
			serializeCroppedImages();
			bindCropButton(section, el);
			modalCrop();
			changeOverlay(this);
			unlockInput(unlock);
		});
}).on('click', function(event) {
	const el = $(this).data('cropimageid');
	const edit = $(this).data('edit');
	const section = $(this).data('section');

	deleteImage(this, event, el, edit, section);
});

function deleteImage(input, e, element, editable, section) {
	const isEmptyOrEditable = $(input).get(0).files.length !== 0 || editable == true;
	if (isEmptyOrEditable && hasOverlayDelete(input)) {
		e.preventDefault();
		$(input).val('');
		changeOverlay(input);
		replaceImage(element);
		deleteCroppedImage(section, element);
		serializeCroppedImages();
	}
}

function changeOverlay(el) {
	const overlay = findOverlay(el);

	(!hasOverlayDelete(el)) ? overlay.addClass('delete') : overlay.removeClass('delete');
}

function findOverlay(el) {
	return $(el).closest('.cropped-image').find('.cropped-image-overlay');
}

function hasOverlayDelete(el) {
	const overlay = findOverlay(el);

	if (overlay.hasClass('delete'))
		return true;
}

function replaceImage(imageId) {
	$('#cropped_' + imageId).attr('src', 'images/540x540.jpg');
}

function readURL(input, name) {
	return new Promise((resolve, reject) => {
		if (!input[0].files.length)
			return reject();

		const reader = new FileReader();
		reader.onloadend = function () {
			resolve(reader.result);
		};
		reader.readAsDataURL(input[0].files[0]);
	});
}

function bindCropButton(section, element) {
	$('#crop_button').off('click').on('click', function() {
		const imgUrl = imageCropper.getCroppedCanvas().toDataURL();
		setCroppedImage(section, element);
		serializeCroppedImages();
		$('#cropped_' + element).attr('src', imgUrl);
		$('.overlay-crop').hide();
	});
}

function setCroppedImage(section, imgName) {
	const {left, top, width, height} = imageCropper.getCropBoxData();
	const canvas = imageCropper.getCanvasData();
	croppedImages[section][imgName] = {
		name: imgName,
		x1: Math.floor((left - canvas.left) / canvas.width * canvas.naturalWidth),
		y1: Math.floor((top - canvas.top) / canvas.height * canvas.naturalHeight),
		x2: Math.floor((left - canvas.left + width) / canvas.width * canvas.naturalWidth),
		y2: Math.floor((top - canvas.top + height) / canvas.height * canvas.naturalHeight),
	};
}

function deleteCroppedImage(section, imgName) {
	croppedImages[section][imgName] = {name: imgName, deleted: true};
}

function serializeCroppedImages() {
	$('#croppedImages').val(JSON.stringify({
		main: Object.values(croppedImages.main),
		photos: Object.values(croppedImages.photos),
		photobooks: Object.values(croppedImages.photobooks),
		polaroids: Object.values(croppedImages.polaroids),
	}));
}

function unlockInput(id){
	$("." + id + " input").each(function() {
		$(this).prop('disabled', false);
		$(this).closest('.disabled').unbind('click').removeClass('disabled');
	});
}

$(".cs-input-type-mf").on('change', function() {
	multipleFileOnChange(this);
});

$('.cs-input-type-f-erase').on('click', function (){
	nullFileInput(this);
});

function multipleFileOnChange(sender) {
	var frame = sender.parentElement;
	var closebutton = frame.getElementsByTagName("div")[0];

	var URL = window.URL || window.webkitURL;

	if (sender.files) {
		for (i = 0; i < sender.files.length; i++) {
			var file = sender.files[i];
			var src = URL.createObjectURL(file);

			frame.insertAdjacentHTML(
				"beforeend","<img alt='' src=\"" + src + "\" class=\"cs-input-type-mf-img\">"
			);
		}

		closebutton.style.display = "block";
		sender.style.display = "none";
	}
}

function nullFileInput(sender) {
	var frame = sender.parentElement;
	var input = frame.getElementsByTagName("input")[0];
	var imgs = frame.getElementsByTagName("img");

	input.value = "";
	input.style.display = "block";

	sender.style.display = "none";

	while (frame.getElementsByTagName("img").length > 0) {
		imgs = frame.getElementsByTagName("img");

		for (var i = 0; i < imgs.length; i++) {
			imgs[i].parentNode.removeChild(imgs[i]);
		}
	}
}

/*$('#ttt').val(JSON.stringify([{a:2}, {b:4}]));
console.log($('#ttt').val());
Object.values({x:{a:2}, y:{b:4}})*/

$('#findCastingForm').on('submit', function(e) {
	e.preventDefault();
	const form = $(this);
	
	$.ajax({
		type: "POST",
		url: "castings.php",
		data: form.serialize(),
		success: function() {
			location.reload();
		}
	});

})
