$(document).ready(function() {
    function format(state) {
        if (!state.id) return state.text; // optgroup
        return '<img class="flag" src="' + url.base + url.res + '/backend/img/flags/' + state.id.toLowerCase() + '.png"/>&nbsp;&nbsp;' + state.text;
    }

    $('#code').select2({
        allowClear: true,
        formatResult: format,
        formatSelection: format,
        escapeMarkup: function (m) {
            return m;
        }
    });

    $('#encoding').select2({
        placeholder: 'Select an encoding',
        allowClear: true
    });

    $('#status').select2({
        placeholder: 'Add status',
        allowClear: true
    });
});