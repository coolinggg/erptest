(function($) {
    $.extend($.fn, {

        jLightTab: function(setting) {
            var uiModelType = "lightTab";
            var ps = $.extend({
                renderTo: $(document.body)
            }, setting);
            
            ps.renderTo = (typeof ps.renderTo == 'string' ? $(ps.renderTo) : ps.renderTo);
            
            var menuTemplate = [
            '<div id="tabs2">',
            '<ul>',
                '<li class="ui-state-hover"><a href="#tabs-1">Nunc tincidunt</a></li>',
            '</ul>',
            '<div id="tabs-1">',
                '<p>Proin elit arc.</p>',
            '</div>',
            '</div>'].join('');

    	    var html = _.template(menuTemplate, {});
		      ps.renderTo.html(html);
          var tabs = $( "#tabs2" ).tabs();
          tabs.tabTemplate = "<li ><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close'>Remove Tab</span></li>",
          tabs.tabCounter = 2;

          $( "#tabs2" ).on( "click",'span.ui-icon-close', function() {
            var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
            $( "#" + panelId ).remove();
            tabs.tabs( "refresh" );
          });

          return tabs;
        },

        addTab: function(tabTitle, tabtype, tabContent) {

        var label = tabTitle || "Tab " + this.tabCounter,
            id = "tabs-" + this.tabCounter,
            li = $( this.tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
            tabContentHtml = tabContent || "Tab " + this.tabCounter + " content.";

        this.find( ".ui-tabs-nav" ).append( li );
        this.append( "<div id='" + id + "' style='display:none;'></div>" );
        loadContent(tabtype, tabContent);
        this.tabs( "refresh" );
        this.tabs({ active: this.tabCounter-1 }); 

        this.tabCounter++;

        function loadContent(tabtype, content) {
            switch (tabtype) {
                    case 'widget':
                        content.renderTo = "#"+id;
                        $.fn.jModelCrud(content);
                    break;
                    case 'html':
                    break;
                    case 'text':
                        $("#"+id).append("<p>" + content + "</p>");
                    break;                    
                  }
           }
        }
    });
})(jQuery);