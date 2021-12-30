(function ($) {

    'use strict';

    $(function () {
        $('#listSurvey').DataTable({
            deferRender: true,
            paging: false,
            info: false,
            order: [
                [1, 'desc']
            ]
        });
    });

})(jQuery);
