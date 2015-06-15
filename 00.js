jQuery(document).ready(function($) {
    
    function gfc_change_select_value(element, value) {
        element.find("option").each(function() {
            
            if($(this).text().toLowerCase() == $.trim(value))
                $(this).attr('selected', 'selected');
            else
                $(this).removeAttr('selected');
        });
    }
    
    function gfc_add_settings() {
        $('#gfc-sidebar .widget').each(function() {
            var widgetContent = $(this).find('.widget-content').first();

            if(widgetContent.length > 0 ) {

                if(widgetContent.find('.gfc-settings').length == 0) {
                    widgetContent.append('<div class="gfc-settings"><h4>Dashboard Widget Sidebar - Settings:</h4><label>Context: <select class="gfc-setting gfc-context"><option selected="selected">Normal</option><option>Side</option></select></label><label>Priority: <select class="gfc-setting gfc-priority"><option>High</option><option>Core</option><option selected="selected">Default</option><option>Low</option></select></label></div>');
                    var widgetID = widgetContent.parent().find('.widget-id').val();
                    
                    if(gfcWidgetSettings[widgetID] != undefined) {
                        //Priority
                        gfc_change_select_value(widgetContent.find('.gfc-setting.gfc-priority'), gfcWidgetSettings[widgetID][0]);
                        //Context
                        gfc_change_select_value(widgetContent.find('.gfc-setting.gfc-context'), gfcWidgetSettings[widgetID][1]);
                    }
                }
                
            }            
        });
    }
    
    setInterval(function(){gfc_add_settings()},1000);
    
    //
    $('.gfc-setting').live('change', function() {
        var widgetForm = $(this).parent().parent().parent().parent();
        var widgetID = widgetForm.find('.widget-id').val();
        
        var data = {
            action: 'gfc_ajax_update',
            widget_id: widgetID,
            priority: widgetForm.find('.gfc-setting.gfc-priority').val(),
            context: widgetForm.find('.gfc-setting.gfc-context').val()
        };
        
        // Change settings in local array
        if(gfcWidgetSettings[widgetID] == undefined) {
            gfcWidgetSettings[widgetID] = new Array();
        }
        
        //Priority
        gfcWidgetSettings[widgetID][0] = widgetForm.find('.gfc-setting.gfc-priority').val().toLowerCase();
        //Context
        gfcWidgetSettings[widgetID][1] = widgetForm.find('.gfc-setting.gfc-context').val().toLowerCase();

        //Save settings
        $.post(ajaxurl, data, function(response) {
            if(response != '1')
                alert('Error: Something went wrong.');
        });
    });
});