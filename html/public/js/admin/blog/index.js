(function ($) {

    'use strict';

    $(function () {
        $('#listBlog').DataTable({
            deferRender: true,
            paging: false,
            info: false,
            columnDefs: [
                { 'targets': 3, 'searchable': false, 'orderable': false, 'visible': true },
            ],
            order: [
                [2, 'desc']
            ]
        });
    });

})(jQuery);
