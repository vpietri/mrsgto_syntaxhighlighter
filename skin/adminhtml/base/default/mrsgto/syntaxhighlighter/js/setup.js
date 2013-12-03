/** 
 * How to overwritte tinymce settings 
 * 
 * @url: http://alanstorm.com/magento_html5_tinymce
 */

if(window.tinyMceWysiwygSetup)
{
    tinyMceWysiwygSetup.prototype.originalGetSettings = tinyMceWysiwygSetup.prototype.getSettings;
    tinyMceWysiwygSetup.prototype.getSettings = function(mode)
    {
        var settings = this.originalGetSettings(mode);
        
        //plugins = settings.plugins + ',codehighlighting';
        //theme_advanced_buttons1= settings.theme_advanced_buttons1 + ',codehighlighting';
        
        /** 
         * Patch tinymce to work with  syntaxhighlighter
         * @url: http://blog.daemon.com.au/blog-post/getting-tinymce-to-play-nice-with-dp-syntaxhighlighter
         */
//        settings.extended_valid_elements = 'textarea[name|class|cols|rows]'; 
        
        
        settings.remove_linebreaks = false;
        
//        settings.force_p_newlines = false;
//        settings.force_br_newlines = false;
        settings.convert_newlines_to_brs = false;
//        settings.remove_linebreaks = true; 

        //add any extra settings you'd like below
        //makes "placeholder" a valid element for inputs
        //settings.extended_valid_elements = 'input[placeholder|accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value]';
        return settings;
    }       
}