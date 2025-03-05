/*--------------------
    XZoom Initialize
---------------------*/
$(".xzoom, .xzoom-gallery").xzoom();

$('.xzoom:first').bind('click', function () {
    var xzoom = $(this).data('xzoom');
    xzoom.closezoom();
    var gallery = xzoom.gallery().cgallery;
    var i, images = new Array();
    for (i in gallery) {
        images[i] = {
            src: gallery[i]
        };
    }
    $.magnificPopup.open({
        items: images,
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    event.preventDefault();
});