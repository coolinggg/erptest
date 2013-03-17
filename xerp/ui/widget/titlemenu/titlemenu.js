(function($) {
    $.extend($.fn, {

        jTitleMenu: function(setting) {
          var uiModelType = "uiTitleMenu";
            var ps = $.extend({
                uiModelName  : "fff",
                renderTo: $(document.body),
                Data: [{"name":"xxx1", "link":"xxx2"}, {"name":"xxx2", "link":"xxx2"}, {"name":"xxx3", "link":"xxx3"}],
                Icon: ['images/left_ico_money.png','images/left_ico_money.png','images/left_ico_money.png'],
                onMenuClick: function() { }
            }, setting);
            
            ps.renderTo = (typeof ps.renderTo == 'string' ? $(ps.renderTo) : ps.renderTo);

            if(getUIModelUrl())
            {
                ps.Data = getUIModel(getUIModelUrl(), uiModelType, ps.uiModelName);
            }
            var menuTemplate = [
          '<div class="title-menu">',
          '<% for(var i = 0; i < Data.length; i++) { %>  ',
            '<li class="title-menu-item">',
                '<a href="<%=Data[i].link%>" >',
                    '<span class="title-menu-text" ><img src="<%=Icon[i]%>" class="icon">',
                    '<%=Data[i].name%></span>',
                '</a>',
            '</li>',
          '<% } %>',
          '</div>'].join('');

    	    var html = _.template(menuTemplate, { 'Data': ps.Data,  'Icon':ps.Icon});
		      ps.renderTo.html(html);

          //$('.title-menu a').click(function() { $(this).parent().siblings("li").removeClass("current"); $(this).parent().addClass("current"); });

          return $(".title-menu");
        },

        setActive: function(index) {
          //alert(index);
          $(this).find("li").removeClass("current");
          $(this).find("li a[href='#" + index + "']").parent().addClass("current");
        }
    });
})(jQuery);