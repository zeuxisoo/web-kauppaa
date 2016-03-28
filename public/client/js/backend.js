(function($) {

    $("input[name=delete], input[name=tick]").click(function() {
        var self = this;
        $(':checkbox').each(function() {
            this.checked = self.checked;
        });
    });

    $('.editor-control').ckeditor({
        language    : 'en',
        extraPlugins: 'button,panelbutton,panel,floatpanel,font,colorbutton'
    });

})(jQuery);
