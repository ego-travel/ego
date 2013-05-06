$(document).ready(function() {
    $('#category_type').select2({
        placeholder: "Select a category type",
        allowClear: true
    });

    // $('#nestable_list_1').nestable({
    //     group: 1
    // }).on('change', updateOutput);

    $('.sortable').nestedSortable({
        handle: 'div',
        items: 'li',
        tabSize: 30,
        toleranceElement: '> div',

        update: function () {
            // order = $('.sortable').nestedSortable('serialize');
            // console.log(order);
        }
    });
});