
(function($) {
    $.extend($.fn, {
        ///<summary>
        /// apply a slider UI
        ///</summary>
        jTreeList: function(setting) {
            var uiModelType = "uiTreeList";
            var ps = $.extend({
                uiModelName  : "fff",

                renderTo: $(document.body),
                treeData: [{'name':'node1', 'nodes':[{'name':'sub1','link':'firefoxuser','linktype':'html'},
                									 {'name':'sub1','link':'firefoxuser','linktype':'formtag'}]},
                		   {'name':'node2', 'nodes':[{'name':'sub1','link':'firefoxuser','linktype':'formtag'},
                									 {'name':'sub1','link':'#firefoxuser','linktype':'formtag'}]}
                		  ],
                treeIcon: ['xerp/ui/widget/togglemenu/images/left_ico_info.png','xerp/ui/widget/togglemenu/images/left_ico_info.png'],
				
                size: { listWidth: 200, listHeight: 100},
                onMenuClick: function() { }
            }, setting);
            
            ps.renderTo = (typeof ps.renderTo == 'string' ? $(ps.renderTo) : ps.renderTo);

           if(getUIModelUrl())
            {
                ps.treeData = getUIModel(getUIModelUrl(), uiModelType, ps.uiModelName);
            }

          var treeTemplate = [
          '<div class="treelst" style="display:none;">',
          '<% for(var i = 0; i < list.length; i++) { %>  ',
          	'<dl class="category">',
          		'<dt><a><span><img src=<%=listIcon[i]%>> <%=list[i].name%></span></a></dt>',
          		'<% for(var j = 0; j < list[i].nodes.length; j++) { %>',
          			' <dd> ',
          				'<span class="thespan" iconImg="images/firefox.png"  dataType="<%=list[i].nodes[j].linktype%>" dataLink="<%=list[i].nodes[j].link%>">',
          					'<%=list[i].nodes[j].name%></span>',
          				'</dd>',
          		'<% } %>',
          	'</dl>',
          '<% } %>',
          '</div>'].join('');
          
          var html = _.template(treeTemplate, { 'list': ps.treeData,  'listIcon':ps.treeIcon});
          ps.renderTo.html('');
          ps.renderTo.html(html);
          $('.treelst').fadeIn(); 

          $('.thespan').click(function() {ps.onMenuClick.apply(this,{});});
          

          $('dl.category:first-child').find('dt').addClass('Current');
          var bodyheight = $('body').height()-50;
          var lastheight=bodyheight-$('dl.category:first-child').parent().find('.category').length * 35+35-2;
          $('dl.category:first-child').height(lastheight);


          $('dl.category:not(:first-child)').find('dd').hide();
          $('dl.category dd').find('ul').hide();
 
          $('dl.category dt').click(function(e){
           $(this).find('a').blur();                           
           $(this).toggleClass('Current').parent().find('dd').slideToggle();

           var bodyheight = $('body').height()-50;
           var lastheight=bodyheight-$(this).toggleClass('Current').parent().parent().find('.category').length * 35 +35-2;
           $(this).toggleClass('Current').parent().height(lastheight);
           $(this).parent().siblings().height(35);

           $(this).parent().siblings('dl').find('dt').removeClass('Current').end().find('dd').hide();
           return e.stopPropagation();
         });

          return;
        }
        ///<summary>
        /// set slider value
        ///</summary>
        ///<param name="v">percentage, must be a Float variable between 0 and 1</param>
       

    });
})(jQuery);