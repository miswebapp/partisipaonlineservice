$(document).ready(function(){
    $('#project-activity-field').hide();
    $('#monitoring-tools-field').hide();
    $('#activity').change(function(e){
        e.preventDefault();
        var category = $(this).find(':selected').attr('category');
        console.log(category);
        if(category == 1){
            $('#project-activity-field').hide();
            $('#monitoring-tools-field').show();
        }else if(category == 2){
            $('#project-activity-field').show();
            $('#monitoring-tools-field').show();
        }else {
            $('#project-activity-field').hide();
            $('#monitoring-tools-field').hide();
        }
        
    });
    $('.dynamic').change(function(e){
        e.preventDefault();
        if($(this).val() != ''){
            var value = $(this).val();
            var field = $(this).attr('id');
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            // if(field == 'municipal'){
            //     $('#posto').empty();
            //     $('#suco').empty();
            // }
            $.ajax({
                url:"/modules/frs/helpers/fetc",
                method:"POST",
                data:{
                    value:value,
                    name:name,
                    dependent:dependent,
                    _token:_token,
                },
                success:function(responseData){
                    $('#'+dependent).empty();
                    $('#'+dependent).append(responseData);
                }
            })
        }
    });
    $('#report_date').datepicker();

    
});