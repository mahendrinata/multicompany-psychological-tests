/*
 *  Document   : app.js
 *  Author     : pixelcave
 */
var App = function () {
	var e = $("#page-container"),
		t = $("header"),
		a = $("#sidebar-toggle-sm"),
		i = $("#sidebar-toggle-lg"),
		s = $(".sidebar-scroll"),
		o = function () {
			l("init"), n(), c(), h();
			var e = $("#year-copy"),
				a = new Date;
			2014 === a.getFullYear() ? e.html("2014") : e.html("2014-" + a.getFullYear().toString().substr(2, 2)), $("#page-content").css("min-height", $(window).height() - (t.outerHeight() + $("footer").outerHeight()) + "px"), $(window).resize(function () {
				$("#page-content").css("min-height", $(window).height() - (t.outerHeight() + $("footer").outerHeight()) + "px")
			}), $('[data-toggle="tabs"] a, .enable-tabs a').click(function (e) {
				e.preventDefault(), $(this).tab("show")
			}), $('[data-toggle="tooltip"], .enable-tooltip').tooltip({
				container: "body",
				animation: !1
			}), $('[data-toggle="popover"], .enable-popover').popover({
				container: "body",
				animation: !0
			}), $('[data-toggle="lightbox-image"]').magnificPopup({
				type: "image",
				image: {
					titleSrc: "title"
				}
			}), $('[data-toggle="lightbox-gallery"]').magnificPopup({
				delegate: "a.gallery-link",
				type: "image",
				gallery: {
					enabled: !0,
					navigateByImgClick: !0,
					arrowMarkup: '<button type="button" class="mfp-arrow mfp-arrow-%dir%" title="%title%"></button>',
					tPrev: "Previous",
					tNext: "Next",
					tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
				},
				image: {
					titleSrc: "title"
				}
			}), $(".textarea-editor").wysihtml5(), $(".select-chosen").chosen({
				width: "100%"
			}), $(".input-slider").slider(), $(".input-tags").tagsInput({
				width: "auto",
				height: "auto"
			}), $(".input-datepicker, .input-daterange").datepicker({
				weekStart: 1,
                format: "yyyy-mm-dd"
			}), $(".input-datepicker-close").datepicker({
				weekStart: 1
			}).on("changeDate", function () {
				$(this).datepicker("hide")
			}), $(".input-timepicker").timepicker({
				minuteStep: 1,
				showSeconds: !0,
				showMeridian: !0
			}), $(".input-timepicker24").timepicker({
				minuteStep: 1,
				showSeconds: !0,
				showMeridian: !1
			}), $(".pie-chart").easyPieChart({
				barColor: $(this).data("bar-color") ? $(this).data("bar-color") : "#777777",
				trackColor: $(this).data("track-color") ? $(this).data("track-color") : "#eeeeee",
				lineWidth: $(this).data("line-width") ? $(this).data("line-width") : 3,
				size: $(this).data("size") ? $(this).data("size") : "80",
				animate: 800,
				scaleColor: !1
			}), $("input, textarea").placeholder()
		},
		n = function () {
			var e = 250,
				t = 250,
				a = ($(".sidebar-nav a"), $(".sidebar-nav-menu")),
				i = $(".sidebar-nav-submenu");
			a.click(function () {
				var a = $(this);
				return a.parent().hasClass("active") !== !0 && (a.hasClass("open") ? a.removeClass("open").next().slideUp(e) : ($(".sidebar-nav-menu.open").removeClass("open").next().slideUp(e), a.addClass("open").next().slideDown(t))), !1
			}), i.click(function () {
				var a = $(this);
				return a.parent().hasClass("active") !== !0 && (a.hasClass("open") ? a.removeClass("open").next().slideUp(e) : (a.closest("ul").find(".sidebar-nav-submenu.open").removeClass("open").next().slideUp(e), a.addClass("open").next().slideDown(t))), !1
			})
		},
		l = function (o) {
			"init" === o ? ((t.hasClass("navbar-fixed-top") || t.hasClass("navbar-fixed-bottom")) && l("init-scroll"), a.click(function () {
				l("toggle-sm")
			}), i.click(function () {
				l("toggle-lg")
			})) : "toggle-lg" === o ? e.toggleClass("sidebar-full") : "toggle-sm" === o ? e.toggleClass("sidebar-open") : "open-sm" === o ? e.addClass("sidebar-open") : "close-sm" === o ? e.removeClass("sidebar-open") : "open-lg" === o ? e.addClass("sidebar-full") : "close-lg" === o ? e.removeClass("sidebar-full") : "init-scroll" == o ? s.length && !s.parent(".slimScrollDiv").length && (s.slimScroll({
				height: $(window).height(),
				color: "#fff",
				size: "3px",
				touchScrollStep: 100
			}), $(window).resize(r), $(window).bind("orientationchange", d)) : "destroy-scroll" == o && s.parent(".slimScrollDiv").length && (s.parent().replaceWith(function () {
				return $(this).contents()
			}), s = $(".sidebar-scroll"), s.removeAttr("style"), $(window).off("resize", r), $(window).unbind("orientationchange", d))
		},
		r = function () {
			s.css("height", $(window).height())
		},
		d = function () {
			setTimeout(s.css("height", $(window).height()), 500)
		},
		c = function () {
			var e = $("#to-top");
			$(window).scroll(function () {
				$(this).scrollTop() > 150 ? e.fadeIn(100) : e.fadeOut(100)
			}), e.click(function () {
				return $("html, body").animate({
					scrollTop: 0
				}, 400), !1
			})
		},
		h = function () {
			var a, i = $(".sidebar-themes"),
				s = $("#theme-link");
			s.length && (a = s.attr("href"), $("li", i).removeClass("active"), $('a[data-theme="' + a + '"]', i).parent("li").addClass("active")), $("a", i).click(function () {
				a = $(this).data("theme"), $("li", i).removeClass("active"), $(this).parent("li").addClass("active"), "default" === a ? s.length && (s.remove(), s = $("#theme-link")) : s.length ? s.attr("href", a) : ($('link[href="css/themes.css"]').before('<link id="theme-link" rel="stylesheet" href="' + a + '">'), s = $("#theme-link"))
			}), $(".dropdown-options a").click(function (e) {
				e.stopPropagation()
			});
			var o = $("#options-main-style"),
				n = $("#options-main-style-alt");
			e.hasClass("style-alt") ? n.addClass("active") : o.addClass("active"), o.click(function () {
				e.removeClass("style-alt"), $(this).addClass("active"), n.removeClass("active")
			}), n.click(function () {
				e.addClass("style-alt"), $(this).addClass("active"), o.removeClass("active")
			});
			var r = $("#options-header-default"),
				d = $("#options-header-inverse"),
				c = $("#options-header-top"),
				h = $("#options-header-bottom");
			t.hasClass("navbar-default") ? r.addClass("active") : d.addClass("active"), t.hasClass("navbar-fixed-top") ? c.addClass("active") : t.hasClass("navbar-fixed-bottom") && h.addClass("active"), r.click(function () {
				t.removeClass("navbar-inverse").addClass("navbar-default"), $(this).addClass("active"), d.removeClass("active")
			}), d.click(function () {
				t.removeClass("navbar-default").addClass("navbar-inverse"), $(this).addClass("active"), r.removeClass("active")
			}), c.click(function () {
				e.removeClass("header-fixed-bottom").addClass("header-fixed-top"), t.removeClass("navbar-fixed-bottom").addClass("navbar-fixed-top"), $(this).addClass("active"), h.removeClass("active"), l("init-scroll")
			}), h.click(function () {
				e.removeClass("header-fixed-top").addClass("header-fixed-bottom"), t.removeClass("navbar-fixed-top").addClass("navbar-fixed-bottom"), $(this).addClass("active"), c.removeClass("active"), l("init-scroll")
			})
		},
		p = function () {
			$.extend(!0, $.fn.dataTable.defaults, {
				sDom: "<'row'<'col-sm-6 col-xs-5'l><'col-sm-6 col-xs-7'f>r>t<'row'<'col-sm-5 hidden-xs'i><'col-sm-7 col-xs-12 clearfix'p>>",
				sPaginationType: "bootstrap",
				oLanguage: {
					sLengthMenu: "_MENU_",
					sSearch: '<div class="input-group">_INPUT_<span class="input-group-addon"><i class="fa fa-search"></i></span></div>',
					sInfo: "<strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
					oPaginate: {
						sPrevious: "",
						sNext: ""
					}
				}
			})
		};
	return {
		init: function () {
			o()
		},
		sidebar: function (e) {
			l(e)
		},
		datatables: function () {
			p()
		}
	}
}();
$(function () {
	App.init()
});