function setupFormVisibility(formConfig){
    $.each(formConfig, function(index, section){
        $.each(section, function(index2, config) {
            setupFormFieldVisibility(config);
        });
    });
}

function setupFormFieldVisibility(config){
    if (!config.visible) return;
    showOrHideFormVisibility(config, false);
    $("#"+config.visible[0]).change(function(event){
        showOrHideFormVisibility(config, true);
    })
}

function showOrHideFormVisibility(config, animated){
    var animationSpeed = animated ? 'fast' : 0;
    if ($("#"+config.visible[0]).val() == config.visible[1]) {
        $("#"+config.field).parent().show(animationSpeed);
        $("#"+config.field).parent().prev().show(animationSpeed);
    }
    else{
        $("#"+config.field).parent().hide(animationSpeed);
        $("#"+config.field).parent().prev().hide(animationSpeed);
    }
}

