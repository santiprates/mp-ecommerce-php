(function($) {

    var url_base = 'http://192.168.0.191:81';

    $(document).ready(function() {

        var aplixer_location = $(location).attr('pathname');
        aplixer_location = aplixer_location.replace('/', '');
        aplixer_location = aplixer_location.split('.')[0];

        if (aplixer_location == 'failure' || aplixer_location == 'pending' || aplixer_location == 'success' || aplixer_location == 'processing') {
            $('#link_ref').attr('href', url_base);
        }




        var url = window.location.href;
        var vars = url.split("#");
        var id = vars[1];

        if (id == 'modal-checkout') {
            console.log($('#aplixer-modal-checkout'));
            $('#aplixer-modal-checkout').click();

        }

    })


})(jQuery);