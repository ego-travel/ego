$(document).ready(function() {
// begin first table
    // $('#language').dataTable({
    //     "aLengthMenu": [
    //         [5, 15, 20, -1],
    //         [5, 15, 20, "All"] // change per page values here
    //     ],
    //     // set the initial value
    //     "iDisplayLength": 5,
    //     "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
    //     "sPaginationType": "bootstrap",
    //     "oLanguage": {
    //         "sLengthMenu": "_MENU_ records per page",
    //         "oPaginate": {
    //             "sPrevious": "Prev",
    //             "sNext": "Next"
    //         }
    //     },
    //     "aoColumnDefs": [{
    //             'bSortable': false,
    //             'aTargets': [0]
    //         }
    //     ]
    // });

    $('#language .group-checkable').change(function () {
        var set = $(this).attr('data-set');
        var checked = $(this).is(':checked');
        $(set).each(function () {
            if (checked) {
                $(this).attr('checked', true);
            } else {
                $(this).attr('checked', false);
            }
        });
        $.uniform.update(set);
    });

    // $('#language_wrapper .dataTables_filter input').addClass("m-wrap medium"); // modify table search input
    // $('#language_wrapper .dataTables_length select').addClass("m-wrap xsmall"); // modify table per page dropdown

});
