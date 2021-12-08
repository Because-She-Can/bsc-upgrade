"use strict";
var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {
        var table = "";
        table = $('#table').DataTable({
            drawCallback: function (row, data, start, end, display) {
            $('[data-toggle="tooltip"]').tooltip();
        },
            "order"         : [ [ 0, 'asc' ] ]
        });
    },
};
window.addEventListener('load', function () {
    app.main();
});