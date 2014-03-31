(function() {
    $(document).ready(function() {
        var $container, calendar, d, date, m, y;
        $(".navbar").mouseover(function() {
            $(".navbar").removeClass("closed");
            return setTimeout((function() {
                return $(".navbar").css({overflow: "visible"});
            }), 350);
        });
        $(function() {
            var delta, lastScrollTop;
            lastScrollTop = 0;
            delta = 50;
            $(window).scroll(function(event) {
                var st;
                st = $(this).scrollTop();
                if (Math.abs(lastScrollTop - st) <= delta) {
                    return;
                }
                if (st > lastScrollTop) {
                    $('.navbar').addClass("closed");
                    $(".navbar").css({overflow: "hidden"});
                } else {
                    $('.navbar').removeClass("closed");
                    setTimeout((function() {
                        return $(".navbar").css({overflow: "visible"});
                    }), 350);
                }
                return lastScrollTop = st;
            });
            $('.navbar-toggle').click(function() {
                $('body, .navbar').toggleClass("nav-open");
                return $('.container-fluid.main-nav').toggleClass("open");
            });
        });

        $("#dataTable1").dataTable({"sPaginationType": "full_numbers", aoColumnDefs: [{bSortable: false, aTargets: [0, -1]}]});

        $("#myTab a:last").tab("show");

        $("#popover").popover();

        $("#popover-left").popover({placement: "left"});

        $("#popover-top").popover({placement: "top"});

        $("#popover-right").popover({placement: "right"});

        $("#popover-bottom").popover({placement: "bottom"});

        $("#tooltip").tooltip();

        $("#tooltip-left").tooltip({placement: "left"});

        $("#tooltip-top").tooltip({placement: "top"});

        $("#tooltip-right").tooltip({placement: "right"});

        $("#tooltip-bottom").tooltip({placement: "bottom"});

//        $("#vmap").vectorMap({map: "world_en", backgroundColor: null, color: "#fff", hoverOpacity: 0.2, selectedColor: "#fff", enableZoom: true, showTooltip: true, values: sample_data, scaleColors: ["#59cdfe", "#0079fe"], normalizeFunction: "polynomial"});

        date = new Date();
        d = date.getDate();
        m = date.getMonth();
        y = date.getFullYear();

        calendar = $("#calendar").fullCalendar({header: {left: "prev,next today", center: "title", right: "month,agendaWeek,agendaDay"}, selectable: true, selectHelper: true, select: function(start, end, allDay) {
                var title;
                title = prompt("Event Title:");
                if (title) {
                    calendar.fullCalendar("renderEvent", {title: title, start: start, end: end, allDay: allDay}, true);
                }
                return calendar.fullCalendar("unselect");
            }, editable: true, events: [{title: "All Day Event", start: new Date(y, m, 1)}, {title: "Long Event", start: new Date(y, m, d - 5), end: new Date(y, m, d - 2)}, {id: 999, title: "Repeating Event", start: new Date(y, m, d - 3, 16, 0), allDay: false}, {id: 999, title: "Repeating Event", start: new Date(y, m, d + 4, 16, 0), allDay: false}, {title: "Meeting", start: new Date(y, m, d, 10, 30), allDay: false}, {title: "Lunch", start: new Date(y, m, d, 14, 0), end: new Date(y, m, d, 16, 0), allDay: false}, {title: "Birthday Party", start: new Date(y, m, d + 1, 19, 0), end: new Date(y, m, d + 1, 22, 30), allDay: false}, {title: "Click for Google", start: new Date(y, m, 28), end: new Date(y, m, 29), url: "http://google.com/"}]});

        $container = $(".gallery-container");

        $container.isotope({});

        $(".gallery-filters a").click(function() {
            var selector;
            selector = $(this).attr("data-filter");
            $(".gallery-filters a.selected").removeClass("selected");
            $(this).addClass("selected");
            $container.isotope({filter: selector});
            return false;
        });

        $('.scrollbar').ClassyScroll({sliderOpacity: 1, wheelSpeed: 2, onscroll: function() {
                return $(this).prev().addClass("shadow");
            }});

        $('#popover').popover();

        $(".fancybox").fancybox({maxWidth: 700, height: 'auto', fitToView: false, autoSize: true, padding: 15, nextEffect: 'fade', prevEffect: 'fade', helpers: {title: {type: "outside"}}});

        $('.select2able').select2();

        $('.datepicker').datetimepicker({
            format: 'yyyy-mm-dd',
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    });
}).call(this);