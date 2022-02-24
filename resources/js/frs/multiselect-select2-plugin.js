$(document).ready(function() {
    $('.staff_partisipa').select2({
        // matcher: matchCustom,
        placeholder:'Select Partisipa Staff',
        multiple:true,
        tags: true,
        tokenSeparators: [',', ' ']
    });
    $("[data-widget='collapse']").click()
});