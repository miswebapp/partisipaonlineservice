$(document).ready(function(){
    $(".frs-report-submission").validate({
        rules: {
            report_date: {
                required: true
            },
            municipal_id : {
                required: true
            },
            program_id: {
                required: true
            },
            activity_id: {
                required: true
            },
            "categories[]": { 
                required:true 
            },
            observation: {
                required:true
            },
            recommendation:{
                required:true
            }
        },
        // messages: {
        //     report_date: {
        //         required: "Select Report date"
        //     },
        //     municipal_id : {
        //         required: "Select Municipal"
        //     },
        //     program_id: {
        //         required: "Select Program"
        //     }
        // },

        errorPlacement: function(error, element) {
            // if (element.hasClass('category_items')) {
            //     error.append(element.previous('.input-group'));
            // } 
            // var placement = $(element).name;
            // if(placement == "municipal_id"){
            //     placement.addClass('is-invalid');
            // }
            // var placement = $(element).data('error');
            // if (placement) {
            //   $(placement).append(error)
            // } else {
            //   error.insertAfter(element);
            // }
        }
    });
});