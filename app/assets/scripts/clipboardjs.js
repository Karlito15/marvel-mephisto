// ClipboardJS
const Clipboard = function () {
    return {
        // main function to initiate the module
        init: function () {
            let paste_text;
            $('button.mt-clipboard').each(function () {
                let clipboard = new ClipboardJS(this);
                clipboard.on('success', function (e) {
                    paste_text = e.text;
                    console.info('Action:', e.action);
                    console.info('Text:', e.text);
                    console.info('Trigger:', e.trigger);
                    e.clearSelection();
                });
                clipboard.on('error', function (e) {
                    console.error('Action:', e.action);
                    console.error('Trigger:', e.trigger);
                });
            });
        }
    }
}();

jQuery(document).ready(function() {
    Clipboard.init();
});
