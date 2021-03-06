jQuery(document).ready(function($) {
   // Code for landing page list view
	var cats = jQuery("#landing_page_category option").length;
	if ( cats === 0 ){
		jQuery("#landing_page_category").hide();
	}

    jQuery('.lp-letter').each(function(){
        var draft = jQuery(this).text();
         if ( draft === "" ){
      jQuery(this).parent().parent().hide();
      }
    });

    /* List tour */
    var tourbutton = '<a class="" id="lp-tour" style="font-size:13px;">Need help? Take the tour</a>';
    jQuery(tourbutton).appendTo(".wrap h1");
    jQuery("body").on('click', '#lp-tour', function () {
        jQuery(this).hide();
        var tour = jQuery("#lp-tour-style").length;
         if ( tour === 0 ) {
            jQuery('head').append("<link rel='stylesheet' id='lp-tour-style' href='/wp-content/plugins/landing-pages/assets/css/admin-tour.css' type='text/css' /><script type='text/javascript' src='/wp-content/plugins/landing-pages/assets/js/admin/tour/tour.post-list.js'></script><script type='text/javascript' src='/wp-content/plugins/landing-pages/assets/js/admin/intro.js'></script>");
          }
        setTimeout(function() {
                introJs().start(); // start tour
        }, 300);

    });
	/*jQuery(".lp-varation-stat-ul").each(function(){
    var length = jQuery(this).find("li").length;
     if ( length < 3 ){
      jQuery(this).find("li").first().css("padding-top", "18px");
      }
    });
*/
jQuery("body").on('mouseenter', 'tr.type-landing-page', function () {
    jQuery(this).find(".no-stats-yet").show();
    });
jQuery("body").on('mouseleave', 'tr.type-landing-page', function () {
    jQuery(this).find(".no-stats-yet").hide();
    });
      jQuery(".variation-winner-is").each(function(){
    var target = jQuery(this).text();
      jQuery("." + target).addClass("winner-lp").attr("data-lp", "Current Winner");
    });

    var hidestats = "<span id='hide-stats'>(Hide Stats)</span><span class='show-stats show-stats-top'>Show Stats</span>";
    jQuery("#stats").append(hidestats);

    jQuery("body").on('click', '#hide-stats', function () {
      jQuery(".lp-varation-stat-ul").each(function(){
        jQuery(this).hide();
    });
      jQuery(".show-stats").show();
      jQuery("#hide-stats").hide();
    });

    jQuery("body").on('click', '.show-stats-top', function () {
      jQuery(".lp-varation-stat-ul").each(function(){
        jQuery(this).show();
    });
      jQuery(".show-stats").hide();
      jQuery("#hide-stats").show();
    });

    jQuery("body").on('click', '.show-stats', function () {
      jQuery(this).hide();
      jQuery(this).parent().find(".lp-varation-stat-ul").show();
    });

	jQuery("body").on("click", ".lp-pop-close", function(event) {
		jQuery(this).parent().parent().parent().hide();
	});

	jQuery("body").on("click", ".lp-pop-preview a", function(event) {
		jQuery(this).parent().parent().parent().parent().hide();
	});

	 // Fix Thickbox width/hieght
    jQuery(function($) {
        tb_position = function() {
            var tbWindow = $('#TB_window');
            var width = $(window).width();
            var H = $(window).height();
            var W = ( 1720 < width ) ? 1720 : width;

            if ( tbWindow.size() ) {
                tbWindow.width( W - 50 ).height( H - 45 );
                $('#TB_iframeContent').width( W - 50 ).height( H - 75 );
                tbWindow.css({'margin-left': '-' + parseInt((( W - 50 ) / 2),10) + 'px'});
                if ( typeof document.body.style.maxWidth != 'undefined' )
                    tbWindow.css({'top':'40px','margin-top':'0'});
                //$('#TB_title').css({'background-color':'#fff','color':'#cfcfcf'});
            };

            return $('a.thickbox').each( function() {
                var href = $(this).attr('href');
                if ( ! href ) return;
                href = href.replace(/&width=[0-9]+/g, '');
                href = href.replace(/&height=[0-9]+/g, '');
                $(this).attr( 'href', href + '&width=' + ( W - 80 ) + '&height=' + ( H - 85 ) );
            });

        };

        jQuery('a.thickbox').click(function(){
            if ( typeof tinyMCE != 'undefined' &&  tinyMCE.activeEditor ) {
                tinyMCE.get('content').focus();
                tinyMCE.activeEditor.windowManager.bookmark = tinyMCE.activeEditor.selection.getBookmark('simple');
            }

        });

        $(window).resize( function() { tb_position() } );
    });

 });