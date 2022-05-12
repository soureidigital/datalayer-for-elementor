jQuery(document).ready(function($) {
    $("form").on('submit_success', function(event, response){
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event':'formSubmitDLFSE',
            'form':response.data.form,
            'fields':response.data.fields,
            'meta':response.data.meta,
        });            

    });
});
