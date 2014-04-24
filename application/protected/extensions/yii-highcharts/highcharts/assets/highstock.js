/*
 Highstock JS v1.3.10 (2014-03-10)
 
 (c) 2009-2014 Torstein Honsi
 
 License: www.highcharts.com/license
 */
(function() {
    function u(a, b) {
        var c;
        a || (a = {});
        for (c in b)
            a[c] = b[c];
        return a
    }
    function w() {
        var a, b = arguments, c, d = {}, e = function(a, b) {
            var c, d;
            typeof a !== "object" && (a = {});
            for (d in b)
                b.hasOwnProperty(d) && (c = b[d], a[d] = c && typeof c === "object" && Object.prototype.toString.call(c) !== "[object Array]" && d !== "renderTo" && typeof c.nodeType !== "number" ? e(a[d] || {}, c) : b[d]);
            return a
        };
        b[0] === !0 && (d = b[1], b = Array.prototype.slice.call(b, 2));
        c = b.length;
        for (a = 0; a < c; a++)
            d = e(d, b[a]);
        return d
    }
    function Jb() {
        for (var a = 0, b = arguments,
                c = b.length, d = {}; a < c; a++)
            d[b[a++]] = b[a];
        return d
    }
    function y(a, b) {
        return parseInt(a, b || 10)
    }
    function ka(a) {
        return typeof a === "string"
    }
    function ba(a) {
        return typeof a === "object"
    }
    function Qa(a) {
        return Object.prototype.toString.call(a) === "[object Array]"
    }
    function za(a) {
        return typeof a === "number"
    }
    function Ga(a) {
        return W.log(a) / W.LN10
    }
    function la(a) {
        return W.pow(10, a)
    }
    function ma(a, b) {
        for (var c = a.length; c--; )
            if (a[c] === b) {
                a.splice(c, 1);
                break
            }
    }
    function r(a) {
        return a !== s && a !== null
    }
    function I(a, b, c) {
        var d, e;
        if (ka(b))
            r(c) ?
                    a.setAttribute(b, c) : a && a.getAttribute && (e = a.getAttribute(b));
        else if (r(b) && ba(b))
            for (d in b)
                a.setAttribute(d, b[d]);
        return e
    }
    function ia(a) {
        return Qa(a) ? a : [a]
    }
    function n() {
        var a = arguments, b, c, d = a.length;
        for (b = 0; b < d; b++)
            if (c = a[b], typeof c !== "undefined" && c !== null)
                return c
    }
    function J(a, b) {
        if (Ha && !$ && b && b.opacity !== s)
            b.filter = "alpha(opacity=" + b.opacity * 100 + ")";
        u(a.style, b)
    }
    function Y(a, b, c, d, e) {
        a = C.createElement(a);
        b && u(a, b);
        e && J(a, {padding: 0, border: X, margin: 0});
        c && J(a, c);
        d && d.appendChild(a);
        return a
    }
    function ca(a, b) {
        var c = function() {
        };
        c.prototype = new a;
        u(c.prototype, b);
        return c
    }
    function Ia(a, b, c, d) {
        var e = G.lang, a = +a || 0, f = b === -1 ? (a.toString().split(".")[1] || "").length : isNaN(b = O(b)) ? 2 : b, b = c === void 0 ? e.decimalPoint : c, d = d === void 0 ? e.thousandsSep : d, e = a < 0 ? "-" : "", c = String(y(a = O(a).toFixed(f))), g = c.length > 3 ? c.length % 3 : 0;
        return e + (g ? c.substr(0, g) + d : "") + c.substr(g).replace(/(\d{3})(?=\d)/g, "$1" + d) + (f ? b + O(a - c).toFixed(f).slice(2) : "")
    }
    function Ra(a, b) {
        return Array((b || 2) + 1 - String(a).length).join(0) + a
    }
    function R(a,
            b, c) {
        var d = a[b];
        a[b] = function() {
            var a = Array.prototype.slice.call(arguments);
            a.unshift(d);
            return c.apply(this, a)
        }
    }
    function Ja(a, b) {
        for (var c = "{", d = !1, e, f, g, h, i, k = []; (c = a.indexOf(c)) !== -1; ) {
            e = a.slice(0, c);
            if (d) {
                f = e.split(":");
                g = f.shift().split(".");
                i = g.length;
                e = b;
                for (h = 0; h < i; h++)
                    e = e[g[h]];
                if (f.length)
                    f = f.join(":"), g = /\.([0-9])/, h = G.lang, i = void 0, /f$/.test(f) ? (i = (i = f.match(g)) ? i[1] : -1, e = Ia(e, i, h.decimalPoint, f.indexOf(",") > -1 ? h.thousandsSep : "")) : e = ra(f, e)
            }
            k.push(e);
            a = a.slice(c + 1);
            c = (d = !d) ? "}" : "{"
        }
        k.push(a);
        return k.join("")
    }
    function rb(a) {
        return W.pow(10, T(W.log(a) / W.LN10))
    }
    function sb(a, b, c, d) {
        var e, c = n(c, 1);
        e = a / c;
        b || (b = [1, 2, 2.5, 5, 10], d && d.allowDecimals === !1 && (c === 1 ? b = [1, 2, 5, 10] : c <= 0.1 && (b = [1 / c])));
        for (d = 0; d < b.length; d++)
            if (a = b[d], e <= (b[d] + (b[d + 1] || b[d])) / 2)
                break;
        a *= c;
        return a
    }
    function Kb() {
        this.symbol = this.color = 0
    }
    function tb(a, b) {
        var c = a.length, d, e;
        for (e = 0; e < c; e++)
            a[e].ss_i = e;
        a.sort(function(a, c) {
            d = b(a, c);
            return d === 0 ? a.ss_i - c.ss_i : d
        });
        for (e = 0; e < c; e++)
            delete a[e].ss_i
    }
    function Sa(a) {
        for (var b = a.length,
                c = a[0]; b--; )
            a[b] < c && (c = a[b]);
        return c
    }
    function Aa(a) {
        for (var b = a.length, c = a[0]; b--; )
            a[b] > c && (c = a[b]);
        return c
    }
    function Ka(a, b) {
        for (var c in a)
            a[c] && a[c] !== b && a[c].destroy && a[c].destroy(), delete a[c]
    }
    function Ta(a) {
        hb || (hb = Y(Ua));
        a && hb.appendChild(a);
        hb.innerHTML = ""
    }
    function na(a, b) {
        var c = "Highcharts error #" + a + ": www.highcharts.com/errors/" + a;
        if (b)
            throw c;
        else
            U.console && console.log(c)
    }
    function ea(a) {
        return parseFloat(a.toPrecision(14))
    }
    function Za(a, b) {
        Ba = n(a, b.animation)
    }
    function Lb() {
        var a = G.global.useUTC,
                b = a ? "getUTC" : "get", c = a ? "setUTC" : "set";
        La = (a && G.global.timezoneOffset || 0) * 6E4;
        ib = a ? Date.UTC : function(a, b, c, g, h, i) {
            return(new Date(a, b, n(c, 1), n(g, 0), n(h, 0), n(i, 0))).getTime()
        };
        ub = b + "Minutes";
        vb = b + "Hours";
        wb = b + "Day";
        Va = b + "Date";
        jb = b + "Month";
        kb = b + "FullYear";
        Mb = c + "Minutes";
        Nb = c + "Hours";
        xb = c + "Date";
        Ob = c + "Month";
        Pb = c + "FullYear"
    }
    function Ca() {
    }
    function $a(a, b, c, d) {
        this.axis = a;
        this.pos = b;
        this.type = c || "";
        this.isNew = !0;
        !c && !d && this.addLabel()
    }
    function N() {
        this.init.apply(this, arguments)
    }
    function sa() {
        this.init.apply(this,
                arguments)
    }
    function Qb(a, b, c, d, e, f) {
        var g = a.chart.inverted;
        this.axis = a;
        this.isNegative = c;
        this.options = b;
        this.x = d;
        this.total = null;
        this.points = {};
        this.stack = e;
        this.percent = f === "percent";
        this.alignOptions = {align: b.align || (g ? c ? "left" : "right" : "center"), verticalAlign: b.verticalAlign || (g ? "middle" : c ? "bottom" : "top"), y: n(b.y, g ? 4 : c ? 14 : -6), x: n(b.x, g ? c ? -6 : 6 : 0)};
        this.textAlign = b.textAlign || (g ? c ? "right" : "left" : "center")
    }
    function yb(a) {
        var b = a.options, c = b.navigator, d = c.enabled, b = b.scrollbar, e = b.enabled, f = d ? c.height :
                0, g = e ? b.height : 0;
        this.handles = [];
        this.scrollbarButtons = [];
        this.elementsToDestroy = [];
        this.chart = a;
        this.setBaseSeries();
        this.height = f;
        this.scrollbarHeight = g;
        this.scrollbarEnabled = e;
        this.navigatorEnabled = d;
        this.navigatorOptions = c;
        this.scrollbarOptions = b;
        this.outlineHeight = f + g;
        this.init()
    }
    function zb(a) {
        this.init(a)
    }
    var s, C = document, U = window, W = Math, t = W.round, T = W.floor, Wa = W.ceil, v = W.max, x = W.min, O = W.abs, aa = W.cos, fa = W.sin, oa = W.PI, Ma = oa * 2 / 360, Da = navigator.userAgent, Rb = U.opera, Ha = /msie/i.test(Da) && !Rb, lb =
            C.documentMode === 8, mb = /AppleWebKit/.test(Da), ab = /Firefox/.test(Da), db = /(Mobile|Android|Windows Phone)/.test(Da), Na = "http://www.w3.org/2000/svg", $ = !!C.createElementNS && !!C.createElementNS(Na, "svg").createSVGRect, Yb = ab && parseInt(Da.split("Firefox/")[1], 10) < 4, ga = !$ && !Ha && !!C.createElement("canvas").getContext, Xa, bb, Sb = {}, Ab = 0, hb, G, ra, Ba, Bb, A, ta = function() {
    }, da = [], Ua = "div", X = "none", Zb = /^[0-9]+$/, Tb = "stroke-width", ib, La, ub, vb, wb, Va, jb, kb, Mb, Nb, xb, Ob, Pb, H = {}, Q = U.Highcharts = U.Highcharts ? na(16, !0) : {};
    ra =
            function(a, b, c) {
                if (!r(b) || isNaN(b))
                    return"Invalid date";
                var a = n(a, "%Y-%m-%d %H:%M:%S"), d = new Date(b - La), e, f = d[vb](), g = d[wb](), h = d[Va](), i = d[jb](), k = d[kb](), j = G.lang, l = j.weekdays, d = u({a: l[g].substr(0, 3), A: l[g], d: Ra(h), e: h, b: j.shortMonths[i], B: j.months[i], m: Ra(i + 1), y: k.toString().substr(2, 2), Y: k, H: Ra(f), I: Ra(f % 12 || 12), l: f % 12 || 12, M: Ra(d[ub]()), p: f < 12 ? "AM" : "PM", P: f < 12 ? "am" : "pm", S: Ra(d.getSeconds()), L: Ra(t(b % 1E3), 3)}, Q.dateFormats);
                for (e in d)
                    for (; a.indexOf("%" + e) !== - 1; )
                        a = a.replace("%" + e, typeof d[e] ===
                                "function" ? d[e](b) : d[e]);
                return c ? a.substr(0, 1).toUpperCase() + a.substr(1) : a
            };
    Kb.prototype = {wrapColor: function(a) {
            if (this.color >= a)
                this.color = 0
        }, wrapSymbol: function(a) {
            if (this.symbol >= a)
                this.symbol = 0
        }};
    A = Jb("millisecond", 1, "second", 1E3, "minute", 6E4, "hour", 36E5, "day", 864E5, "week", 6048E5, "month", 26784E5, "year", 31556952E3);
    Bb = {init: function(a, b, c) {
            var b = b || "", d = a.shift, e = b.indexOf("C") > -1, f = e ? 7 : 3, g, b = b.split(" "), c = [].concat(c), h, i, k = function(a) {
                for (g = a.length; g--; )
                    a[g] === "M" && a.splice(g + 1, 0, a[g + 1], a[g +
                            2], a[g + 1], a[g + 2])
            };
            e && (k(b), k(c));
            a.isArea && (h = b.splice(b.length - 6, 6), i = c.splice(c.length - 6, 6));
            if (d <= c.length / f && b.length === c.length)
                for (; d--; )
                    c = [].concat(c).splice(0, f).concat(c);
            a.shift = 0;
            if (b.length)
                for (a = c.length; b.length < a; )
                    d = [].concat(b).splice(b.length - f, f), e && (d[f - 6] = d[f - 2], d[f - 5] = d[f - 1]), b = b.concat(d);
            h && (b = b.concat(h), c = c.concat(i));
            return[b, c]
        }, step: function(a, b, c, d) {
            var e = [], f = a.length;
            if (c === 1)
                e = d;
            else if (f === b.length && c < 1)
                for (; f--; )
                    d = parseFloat(a[f]), e[f] = isNaN(d) ? a[f] : c * parseFloat(b[f] -
                            d) + d;
            else
                e = b;
            return e
        }};
    (function(a) {
        U.HighchartsAdapter = U.HighchartsAdapter || a && {init: function(b) {
                var c = a.fx, d = c.step, e, f = a.Tween, g = f && f.propHooks;
                e = a.cssHooks.opacity;
                a.extend(a.easing, {easeOutQuad: function(a, b, c, d, e) {
                        return-d * (b /= e) * (b - 2) + c
                    }});
                a.each(["cur", "_default", "width", "height", "opacity"], function(a, b) {
                    var e = d, j;
                    b === "cur" ? e = c.prototype : b === "_default" && f && (e = g[b], b = "set");
                    (j = e[b]) && (e[b] = function(c) {
                        var d, c = a ? c : this;
                        if (c.prop !== "align")
                            return d = c.elem, d.attr ? d.attr(c.prop, b === "cur" ? s : c.now) :
                                    j.apply(this, arguments)
                    })
                });
                R(e, "get", function(a, b, c) {
                    return b.attr ? b.opacity || 0 : a.call(this, b, c)
                });
                e = function(a) {
                    var c = a.elem, d;
                    if (!a.started)
                        d = b.init(c, c.d, c.toD), a.start = d[0], a.end = d[1], a.started = !0;
                    c.attr("d", b.step(a.start, a.end, a.pos, c.toD))
                };
                f ? g.d = {set: e} : d.d = e;
                this.each = Array.prototype.forEach ? function(a, b) {
                    return Array.prototype.forEach.call(a, b)
                } : function(a, b) {
                    for (var c = 0, d = a.length; c < d; c++)
                        if (b.call(a[c], a[c], c, a) === !1)
                            return c
                };
                a.fn.highcharts = function() {
                    var a = "Chart", b = arguments, c, d;
                    ka(b[0]) && (a = b[0], b = Array.prototype.slice.call(b, 1));
                    c = b[0];
                    if (c !== s)
                        c.chart = c.chart || {}, c.chart.renderTo = this[0], new Q[a](c, b[1]), d = this;
                    c === s && (d = da[I(this[0], "data-highcharts-chart")]);
                    return d
                }
            }, getScript: a.getScript, inArray: a.inArray, adapterRun: function(b, c) {
                return a(b)[c]()
            }, grep: a.grep, map: function(a, c) {
                for (var d = [], e = 0, f = a.length; e < f; e++)
                    d[e] = c.call(a[e], a[e], e, a);
                return d
            }, offset: function(b) {
                return a(b).offset()
            }, addEvent: function(b, c, d) {
                a(b).bind(c, d)
            }, removeEvent: function(b, c, d) {
                var e =
                        C.removeEventListener ? "removeEventListener" : "detachEvent";
                C[e] && b && !b[e] && (b[e] = function() {
                });
                a(b).unbind(c, d)
            }, fireEvent: function(b, c, d, e) {
                var f = a.Event(c), g = "detached" + c, h;
                !Ha && d && (delete d.layerX, delete d.layerY);
                u(f, d);
                b[c] && (b[g] = b[c], b[c] = null);
                a.each(["preventDefault", "stopPropagation"], function(a, b) {
                    var c = f[b];
                    f[b] = function() {
                        try {
                            c.call(f)
                        } catch (a) {
                            b === "preventDefault" && (h = !0)
                        }
                    }
                });
                a(b).trigger(f);
                b[g] && (b[c] = b[g], b[g] = null);
                e && !f.isDefaultPrevented() && !h && e(f)
            }, washMouseEvent: function(a) {
                var c =
                        a.originalEvent || a;
                if (c.pageX === s)
                    c.pageX = a.pageX, c.pageY = a.pageY;
                return c
            }, animate: function(b, c, d) {
                var e = a(b);
                if (!b.style)
                    b.style = {};
                if (c.d)
                    b.toD = c.d, c.d = 1;
                e.stop();
                c.opacity !== s && b.attr && (c.opacity += "px");
                e.animate(c, d)
            }, stop: function(b) {
                a(b).stop()
            }}
    })(U.jQuery);
    var L = U.HighchartsAdapter, F = L || {};
    L && L.init.call(L, Bb);
    var nb = F.adapterRun, $b = F.getScript, ua = F.inArray, q = F.each, Cb = F.grep, ac = F.offset, va = F.map, D = F.addEvent, S = F.removeEvent, P = F.fireEvent, bc = F.washMouseEvent, ob = F.animate, eb = F.stop, F = {enabled: !0,
        x: 0, y: 15, style: {color: "#666", cursor: "default", fontSize: "11px"}};
    G = {colors: "#2f7ed8,#0d233a,#8bbc21,#910000,#1aadce,#492970,#f28f43,#77a1e5,#c42525,#a6c96a".split(","), symbols: ["circle", "diamond", "square", "triangle", "triangle-down"], lang: {loading: "Loading...", months: "January,February,March,April,May,June,July,August,September,October,November,December".split(","), shortMonths: "Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec".split(","), weekdays: "Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday".split(","),
            decimalPoint: ".", numericSymbols: "k,M,G,T,P,E".split(","), resetZoom: "Reset zoom", resetZoomTitle: "Reset zoom level 1:1", thousandsSep: ","}, global: {useUTC: !0, canvasToolsURL: "http://code.highcharts.com/stock/1.3.10/modules/canvas-tools.js", VMLRadialGradientURL: "http://code.highcharts.com/stock/1.3.10/gfx/vml-radial-gradient.png"}, chart: {borderColor: "#4572A7", borderRadius: 5, defaultSeriesType: "line", ignoreHiddenSeries: !0, spacing: [10, 10, 15, 10], backgroundColor: "#FFFFFF", plotBorderColor: "#C0C0C0", resetZoomButton: {theme: {zIndex: 20},
                position: {align: "right", x: -10, y: 10}}}, title: {text: "Chart title", align: "center", margin: 15, style: {color: "#274b6d", fontSize: "16px"}}, subtitle: {text: "", align: "center", style: {color: "#4d759e"}}, plotOptions: {line: {allowPointSelect: !1, showCheckbox: !1, animation: {duration: 1E3}, events: {}, lineWidth: 2, marker: {enabled: !0, lineWidth: 0, radius: 4, lineColor: "#FFFFFF", states: {hover: {enabled: !0}, select: {fillColor: "#FFFFFF", lineColor: "#000000", lineWidth: 2}}}, point: {events: {}}, dataLabels: w(F, {align: "center", enabled: !1, formatter: function() {
                        return this.y ===
                                null ? "" : Ia(this.y, -1)
                    }, verticalAlign: "bottom", y: 0}), cropThreshold: 300, pointRange: 0, states: {hover: {marker: {}}, select: {marker: {}}}, stickyTracking: !0, turboThreshold: 1E3}}, labels: {style: {position: "absolute", color: "#3E576F"}}, legend: {enabled: !0, align: "center", layout: "horizontal", labelFormatter: function() {
                return this.name
            }, borderWidth: 1, borderColor: "#909090", borderRadius: 5, navigation: {activeColor: "#274b6d", inactiveColor: "#CCC"}, shadow: !1, itemStyle: {color: "#274b6d", fontSize: "12px"}, itemHoverStyle: {color: "#000"},
            itemHiddenStyle: {color: "#CCC"}, itemCheckboxStyle: {position: "absolute", width: "13px", height: "13px"}, symbolPadding: 5, verticalAlign: "bottom", x: 0, y: 0, title: {style: {fontWeight: "bold"}}}, loading: {labelStyle: {fontWeight: "bold", position: "relative", top: "1em"}, style: {position: "absolute", backgroundColor: "white", opacity: 0.5, textAlign: "center"}}, tooltip: {enabled: !0, animation: $, backgroundColor: "rgba(255, 255, 255, .85)", borderWidth: 1, borderRadius: 3, dateTimeLabelFormats: {millisecond: "%A, %b %e, %H:%M:%S.%L", second: "%A, %b %e, %H:%M:%S",
                minute: "%A, %b %e, %H:%M", hour: "%A, %b %e, %H:%M", day: "%A, %b %e, %Y", week: "Week from %A, %b %e, %Y", month: "%B %Y", year: "%Y"}, headerFormat: '<span style="font-size: 10px">{point.key}</span><br/>', pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>', shadow: !0, snap: db ? 25 : 10, style: {color: "#333333", cursor: "default", fontSize: "12px", padding: "8px", whiteSpace: "nowrap"}}, credits: {enabled: !0, text: "Highcharts.com", href: "http://www.highcharts.com", position: {align: "right",
                x: -10, verticalAlign: "bottom", y: -5}, style: {cursor: "pointer", color: "#909090", fontSize: "9px"}}};
    var V = G.plotOptions, L = V.line;
    Lb();
    var cc = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]?(?:\.[0-9]+)?)\s*\)/, dc = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/, ec = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/, Ea = function(a) {
        var b = [], c, d;
        (function(a) {
            a && a.stops ? d = va(a.stops, function(a) {
                return Ea(a[1])
            }) : (c = cc.exec(a)) ? b = [y(c[1]), y(c[2]), y(c[3]), parseFloat(c[4],
                        10)] : (c = dc.exec(a)) ? b = [y(c[1], 16), y(c[2], 16), y(c[3], 16), 1] : (c = ec.exec(a)) && (b = [y(c[1]), y(c[2]), y(c[3]), 1])
        })(a);
        return{get: function(c) {
                var f;
                d ? (f = w(a), f.stops = [].concat(f.stops), q(d, function(a, b) {
                    f.stops[b] = [f.stops[b][0], a.get(c)]
                })) : f = b && !isNaN(b[0]) ? c === "rgb" ? "rgb(" + b[0] + "," + b[1] + "," + b[2] + ")" : c === "a" ? b[3] : "rgba(" + b.join(",") + ")" : a;
                return f
            }, brighten: function(a) {
                if (d)
                    q(d, function(b) {
                        b.brighten(a)
                    });
                else if (za(a) && a !== 0) {
                    var c;
                    for (c = 0; c < 3; c++)
                        b[c] += y(a * 255), b[c] < 0 && (b[c] = 0), b[c] > 255 && (b[c] = 255)
                }
                return this
            },
            rgba: b, setOpacity: function(a) {
                b[3] = a;
                return this
            }}
    };
    Ca.prototype = {init: function(a, b) {
            this.element = b === "span" ? Y(b) : C.createElementNS(Na, b);
            this.renderer = a;
            this.attrSetters = {}
        }, opacity: 1, animate: function(a, b, c) {
            b = n(b, Ba, !0);
            eb(this);
            if (b) {
                b = w(b, {});
                if (c)
                    b.complete = c;
                ob(this, a, b)
            } else
                this.attr(a), c && c()
        }, attr: function(a, b) {
            var c, d, e, f, g = this.element, h = g.nodeName.toLowerCase(), i = this.renderer, k, j = this.attrSetters, l = this.shadows, m, o, p = this;
            ka(a) && r(b) && (c = a, a = {}, a[c] = b);
            if (ka(a))
                c = a, h === "circle" ? c = {x: "cx",
                    y: "cy"}[c] || c : c === "strokeWidth" && (c = "stroke-width"), p = I(g, c) || this[c] || 0, c !== "d" && c !== "visibility" && c !== "fill" && (p = parseFloat(p));
            else {
                for (c in a)
                    if (k = !1, d = a[c], e = j[c] && j[c].call(this, d, c), e !== !1) {
                        e !== s && (d = e);
                        if (c === "d")
                            d && d.join && (d = d.join(" ")), /(NaN| {2}|^$)/.test(d) && (d = "M 0 0");
                        else if (c === "x" && h === "text")
                            for (e = 0; e < g.childNodes.length; e++)
                                f = g.childNodes[e], I(f, "x") === I(g, "x") && I(f, "x", d);
                        else if (this.rotation && (c === "x" || c === "y"))
                            o = !0;
                        else if (c === "fill")
                            d = i.color(d, g, c);
                        else if (h === "circle" &&
                                (c === "x" || c === "y"))
                            c = {x: "cx", y: "cy"}[c] || c;
                        else if (h === "rect" && c === "r")
                            I(g, {rx: d, ry: d}), k = !0;
                        else if (c === "translateX" || c === "translateY" || c === "rotation" || c === "verticalAlign" || c === "scaleX" || c === "scaleY")
                            k = o = !0;
                        else if (c === "stroke")
                            d = i.color(d, g, c);
                        else if (c === "dashstyle")
                            if (c = "stroke-dasharray", d = d && d.toLowerCase(), d === "solid")
                                d = X;
                            else {
                                if (d) {
                                    d = d.replace("shortdashdotdot", "3,1,1,1,1,1,").replace("shortdashdot", "3,1,1,1").replace("shortdot", "1,1,").replace("shortdash", "3,1,").replace("longdash", "8,3,").replace(/dot/g,
                                            "1,3,").replace("dash", "4,3,").replace(/,$/, "").split(",");
                                    for (e = d.length; e--; )
                                        d[e] = y(d[e]) * n(a["stroke-width"], this["stroke-width"]);
                                    d = d.join(",")
                                }
                            }
                        else if (c === "width")
                            d = y(d);
                        else if (c === "align")
                            c = "text-anchor", d = {left: "start", center: "middle", right: "end"}[d];
                        else if (c === "title")
                            e = g.getElementsByTagName("title")[0], e || (e = C.createElementNS(Na, "title"), g.appendChild(e)), e.textContent = d;
                        c === "strokeWidth" && (c = "stroke-width");
                        if (c === "stroke-width" || c === "stroke") {
                            this[c] = d;
                            if (this.stroke && this["stroke-width"])
                                I(g,
                                        "stroke", this.stroke), I(g, "stroke-width", this["stroke-width"]), this.hasStroke = !0;
                            else if (c === "stroke-width" && d === 0 && this.hasStroke)
                                g.removeAttribute("stroke"), this.hasStroke = !1;
                            k = !0
                        }
                        this.symbolName && /^(x|y|width|height|r|start|end|innerR|anchorX|anchorY)/.test(c) && (m || (this.symbolAttr(a), m = !0), k = !0);
                        if (l && /^(width|height|visibility|x|y|d|transform|cx|cy|r)$/.test(c))
                            for (e = l.length; e--; )
                                I(l[e], c, c === "height" ? v(d - (l[e].cutHeight || 0), 0) : d);
                        if ((c === "width" || c === "height") && h === "rect" && d < 0)
                            d = 0;
                        this[c] =
                                d;
                        if (c === "text") {
                            if (d !== this.textStr)
                                delete this.bBox, this.textStr = d, this.added && i.buildText(this)
                        } else
                            k || d !== void 0 && g.setAttribute(c, d)
                    }
                o && this.updateTransform()
            }
            return p
        }, addClass: function(a) {
            var b = this.element, c = I(b, "class") || "";
            c.indexOf(a) === -1 && I(b, "class", c + " " + a);
            return this
        }, symbolAttr: function(a) {
            var b = this;
            q("x,y,r,start,end,width,height,innerR,anchorX,anchorY".split(","), function(c) {
                b[c] = n(a[c], b[c])
            });
            b.attr({d: b.renderer.symbols[b.symbolName](b.x, b.y, b.width, b.height, b)})
        }, clip: function(a) {
            return this.attr("clip-path",
                    a ? "url(" + this.renderer.url + "#" + a.id + ")" : X)
        }, crisp: function(a) {
            var b, c = {}, d, e = a.strokeWidth || this.strokeWidth || this.attr && this.attr("stroke-width") || 0;
            d = t(e) % 2 / 2;
            a.x = T(a.x || this.x || 0) + d;
            a.y = T(a.y || this.y || 0) + d;
            a.width = T((a.width || this.width || 0) - 2 * d);
            a.height = T((a.height || this.height || 0) - 2 * d);
            a.strokeWidth = e;
            for (b in a)
                this[b] !== a[b] && (this[b] = c[b] = a[b]);
            return c
        }, css: function(a) {
            var b = this.styles, c = {}, d = this.element, e, f, g = "";
            e = !b;
            if (a && a.color)
                a.fill = a.color;
            if (b)
                for (f in a)
                    a[f] !== b[f] && (c[f] = a[f],
                            e = !0);
            if (e) {
                e = this.textWidth = a && a.width && d.nodeName.toLowerCase() === "text" && y(a.width);
                b && (a = u(b, c));
                this.styles = a;
                e && (ga || !$ && this.renderer.forExport) && delete a.width;
                if (Ha && !$)
                    J(this.element, a);
                else {
                    b = function(a, b) {
                        return"-" + b.toLowerCase()
                    };
                    for (f in a)
                        g += f.replace(/([A-Z])/g, b) + ":" + a[f] + ";";
                    I(d, "style", g)
                }
                e && this.added && this.renderer.buildText(this)
            }
            return this
        }, on: function(a, b) {
            var c = this, d = c.element;
            bb && a === "click" ? (d.ontouchstart = function(a) {
                c.touchEventFired = Date.now();
                a.preventDefault();
                b.call(d,
                        a)
            }, d.onclick = function(a) {
                (Da.indexOf("Android") === -1 || Date.now() - (c.touchEventFired || 0) > 1100) && b.call(d, a)
            }) : d["on" + a] = b;
            return this
        }, setRadialReference: function(a) {
            this.element.radialReference = a;
            return this
        }, translate: function(a, b) {
            return this.attr({translateX: a, translateY: b})
        }, invert: function() {
            this.inverted = !0;
            this.updateTransform();
            return this
        }, updateTransform: function() {
            var a = this.translateX || 0, b = this.translateY || 0, c = this.scaleX, d = this.scaleY, e = this.inverted, f = this.rotation;
            e && (a += this.attr("width"),
                    b += this.attr("height"));
            a = ["translate(" + a + "," + b + ")"];
            e ? a.push("rotate(90) scale(-1,1)") : f && a.push("rotate(" + f + " " + (this.x || 0) + " " + (this.y || 0) + ")");
            (r(c) || r(d)) && a.push("scale(" + n(c, 1) + " " + n(d, 1) + ")");
            a.length && I(this.element, "transform", a.join(" "))
        }, toFront: function() {
            var a = this.element;
            a.parentNode.appendChild(a);
            return this
        }, align: function(a, b, c) {
            var d, e, f, g, h = {};
            e = this.renderer;
            f = e.alignedObjects;
            if (a) {
                if (this.alignOptions = a, this.alignByTranslate = b, !c || ka(c))
                    this.alignTo = d = c || "renderer", ma(f,
                            this), f.push(this), c = null
            } else
                a = this.alignOptions, b = this.alignByTranslate, d = this.alignTo;
            c = n(c, e[d], e);
            d = a.align;
            e = a.verticalAlign;
            f = (c.x || 0) + (a.x || 0);
            g = (c.y || 0) + (a.y || 0);
            if (d === "right" || d === "center")
                f += (c.width - (a.width || 0)) / {right: 1, center: 2}[d];
            h[b ? "translateX" : "x"] = t(f);
            if (e === "bottom" || e === "middle")
                g += (c.height - (a.height || 0)) / ({bottom: 1, middle: 2}[e] || 1);
            h[b ? "translateY" : "y"] = t(g);
            this[this.placed ? "animate" : "attr"](h);
            this.placed = !0;
            this.alignAttr = h;
            return this
        }, getBBox: function() {
            var a = this.bBox,
                    b = this.renderer, c, d, e = this.rotation;
            c = this.element;
            var f = this.styles, g = e * Ma;
            d = this.textStr;
            var h;
            if (d === "" || Zb.test(d))
                h = d.toString().length + (f ? "|" + f.fontSize + "|" + f.fontFamily : ""), a = b.cache[h];
            if (!a) {
                if (c.namespaceURI === Na || b.forExport) {
                    try {
                        a = c.getBBox ? u({}, c.getBBox()) : {width: c.offsetWidth, height: c.offsetHeight}
                    } catch (i) {
                    }
                    if (!a || a.width < 0)
                        a = {width: 0, height: 0}
                } else
                    a = this.htmlGetBBox();
                if (b.isSVG) {
                    c = a.width;
                    d = a.height;
                    if (Ha && f && f.fontSize === "11px" && d.toPrecision(3) === "16.9")
                        a.height = d = 14;
                    if (e)
                        a.width =
                                O(d * fa(g)) + O(c * aa(g)), a.height = O(d * aa(g)) + O(c * fa(g))
                }
                this.bBox = a;
                h && (b.cache[h] = a)
            }
            return a
        }, show: function(a) {
            return this.attr({visibility: a ? "inherit" : "visible"})
        }, hide: function() {
            return this.attr({visibility: "hidden"})
        }, fadeOut: function(a) {
            var b = this;
            b.animate({opacity: 0}, {duration: a || 150, complete: function() {
                    b.hide()
                }})
        }, add: function(a) {
            var b = this.renderer, c = a || b, d = c.element || b.box, e = this.element, f = this.zIndex, g, h;
            if (a)
                this.parentGroup = a;
            this.parentInverted = a && a.inverted;
            this.textStr !== void 0 && b.buildText(this);
            if (f)
                c.handleZ = !0, f = y(f);
            if (c.handleZ) {
                a = d.childNodes;
                for (g = 0; g < a.length; g++)
                    if (b = a[g], c = I(b, "zIndex"), b !== e && (y(c) > f || !r(f) && r(c))) {
                        d.insertBefore(e, b);
                        h = !0;
                        break
                    }
            }
            h || d.appendChild(e);
            this.added = !0;
            if (this.onAdd)
                this.onAdd();
            return this
        }, safeRemoveChild: function(a) {
            var b = a.parentNode;
            b && b.removeChild(a)
        }, destroy: function() {
            var a = this, b = a.element || {}, c = a.shadows, d = a.renderer.isSVG && b.nodeName === "SPAN" && a.parentGroup, e, f;
            b.onclick = b.onmouseout = b.onmouseover = b.onmousemove = b.point = null;
            eb(a);
            if (a.clipPath)
                a.clipPath =
                        a.clipPath.destroy();
            if (a.stops) {
                for (f = 0; f < a.stops.length; f++)
                    a.stops[f] = a.stops[f].destroy();
                a.stops = null
            }
            a.safeRemoveChild(b);
            for (c && q(c, function(b) {
                a.safeRemoveChild(b)
            }); d && d.div.childNodes.length === 0; )
                b = d.parentGroup, a.safeRemoveChild(d.div), delete d.div, d = b;
            a.alignTo && ma(a.renderer.alignedObjects, a);
            for (e in a)
                delete a[e];
            return null
        }, shadow: function(a, b, c) {
            var d = [], e, f, g = this.element, h, i, k, j;
            if (a) {
                i = n(a.width, 3);
                k = (a.opacity || 0.15) / i;
                j = this.parentInverted ? "(-1,-1)" : "(" + n(a.offsetX, 1) + ", " +
                        n(a.offsetY, 1) + ")";
                for (e = 1; e <= i; e++) {
                    f = g.cloneNode(0);
                    h = i * 2 + 1 - 2 * e;
                    I(f, {isShadow: "true", stroke: a.color || "black", "stroke-opacity": k * e, "stroke-width": h, transform: "translate" + j, fill: X});
                    if (c)
                        I(f, "height", v(I(f, "height") - h, 0)), f.cutHeight = h;
                    b ? b.element.appendChild(f) : g.parentNode.insertBefore(f, g);
                    d.push(f)
                }
                this.shadows = d
            }
            return this
        }};
    var ha = function() {
        this.init.apply(this, arguments)
    };
    ha.prototype = {Element: Ca, init: function(a, b, c, d, e) {
            var f = location, g, d = this.createElement("svg").attr({version: "1.1"}).css(this.getStyle(d));
            g = d.element;
            a.appendChild(g);
            a.innerHTML.indexOf("xmlns") === -1 && I(g, "xmlns", Na);
            this.isSVG = !0;
            this.box = g;
            this.boxWrapper = d;
            this.alignedObjects = [];
            this.url = (ab || mb) && C.getElementsByTagName("base").length ? f.href.replace(/#.*?$/, "").replace(/([\('\)])/g, "\\$1").replace(/ /g, "%20") : "";
            this.createElement("desc").add().element.appendChild(C.createTextNode("Created with Highstock 1.3.10"));
            this.defs = this.createElement("defs").add();
            this.forExport = e;
            this.gradients = {};
            this.cache = {};
            this.setSize(b, c, !1);
            var h;
            if (ab && a.getBoundingClientRect)
                this.subPixelFix = b = function() {
                    J(a, {left: 0, top: 0});
                    h = a.getBoundingClientRect();
                    J(a, {left: Wa(h.left) - h.left + "px", top: Wa(h.top) - h.top + "px"})
                }, b(), D(U, "resize", b)
        }, getStyle: function(a) {
            return this.style = u({fontFamily: '"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif', fontSize: "12px"}, a)
        }, isHidden: function() {
            return!this.boxWrapper.getBBox().width
        }, destroy: function() {
            var a = this.defs;
            this.box = null;
            this.boxWrapper = this.boxWrapper.destroy();
            Ka(this.gradients ||
                    {});
            this.gradients = null;
            if (a)
                this.defs = a.destroy();
            this.subPixelFix && S(U, "resize", this.subPixelFix);
            return this.alignedObjects = null
        }, createElement: function(a) {
            var b = new this.Element;
            b.init(this, a);
            return b
        }, draw: function() {
        }, buildText: function(a) {
            for (var b = a.element, c = this, d = c.forExport, e = n(a.textStr, "").toString().replace(/<(b|strong)>/g, '<span style="font-weight:bold">').replace(/<(i|em)>/g, '<span style="font-style:italic">').replace(/<a/g, "<span").replace(/<\/(b|strong|i|em|a)>/g, "</span>").split(/<br.*?>/g),
                    f = b.childNodes, g = /<.*style="([^"]+)".*>/, h = /<.*href="(http[^"]+)".*>/, i = I(b, "x"), k = a.styles, j = a.textWidth, l = k && k.lineHeight, m = f.length, o = function(a) {
                return l ? y(l) : c.fontMetrics(/(px|em)$/.test(a && a.style.fontSize) ? a.style.fontSize : k.fontSize || 11).h
            }; m--; )
                b.removeChild(f[m]);
            j && !a.added && this.box.appendChild(b);
            e[e.length - 1] === "" && e.pop();
            q(e, function(e, f) {
                var l, m = 0, e = e.replace(/<span/g, "|||<span").replace(/<\/span>/g, "</span>|||");
                l = e.split("|||");
                q(l, function(e) {
                    if (e !== "" || l.length === 1) {
                        var p = {},
                                n = C.createElementNS(Na, "tspan"), q;
                        g.test(e) && (q = e.match(g)[1].replace(/(;| |^)color([ :])/, "$1fill$2"), I(n, "style", q));
                        h.test(e) && !d && (I(n, "onclick", 'location.href="' + e.match(h)[1] + '"'), J(n, {cursor: "pointer"}));
                        e = (e.replace(/<(.|\n)*?>/g, "") || " ").replace(/&lt;/g, "<").replace(/&gt;/g, ">");
                        if (e !== " " && (n.appendChild(C.createTextNode(e)), m ? p.dx = 0 : p.x = i, I(n, p), !m && f && (!$ && d && J(n, {display: "block"}), I(n, "dy", o(n), mb && n.offsetHeight)), b.appendChild(n), m++, j))
                            for (var e = e.replace(/([^\^])-/g, "$1- ").split(" "),
                                    p = e.length > 1 && k.whiteSpace !== "nowrap", s, r, t = a._clipHeight, E = [], v = o(), u = 1; p && (e.length || E.length); )
                                delete a.bBox, s = a.getBBox(), r = s.width, !$ && c.forExport && (r = c.measureSpanWidth(n.firstChild.data, a.styles)), s = r > j, !s || e.length === 1 ? (e = E, E = [], e.length && (u++, t && u * v > t ? (e = ["..."], a.attr("title", a.textStr)) : (n = C.createElementNS(Na, "tspan"), I(n, {dy: v, x: i}), q && I(n, "style", q), b.appendChild(n), r > j && (j = r)))) : (n.removeChild(n.firstChild), E.unshift(e.pop())), e.length && n.appendChild(C.createTextNode(e.join(" ").replace(/- /g,
                                        "-")))
                    }
                })
            })
        }, button: function(a, b, c, d, e, f, g, h, i) {
            var k = this.label(a, b, c, i, null, null, null, null, "button"), j = 0, l, m, o, p, B, n, a = {x1: 0, y1: 0, x2: 0, y2: 1}, e = w({"stroke-width": 1, stroke: "#CCCCCC", fill: {linearGradient: a, stops: [[0, "#FEFEFE"], [1, "#F6F6F6"]]}, r: 2, padding: 5, style: {color: "black"}}, e);
            o = e.style;
            delete e.style;
            f = w(e, {stroke: "#68A", fill: {linearGradient: a, stops: [[0, "#FFF"], [1, "#ACF"]]}}, f);
            p = f.style;
            delete f.style;
            g = w(e, {stroke: "#68A", fill: {linearGradient: a, stops: [[0, "#9BD"], [1, "#CDF"]]}}, g);
            B = g.style;
            delete g.style;
            h = w(e, {style: {color: "#CCC"}}, h);
            n = h.style;
            delete h.style;
            D(k.element, Ha ? "mouseover" : "mouseenter", function() {
                j !== 3 && k.attr(f).css(p)
            });
            D(k.element, Ha ? "mouseout" : "mouseleave", function() {
                j !== 3 && (l = [e, f, g][j], m = [o, p, B][j], k.attr(l).css(m))
            });
            k.setState = function(a) {
                (k.state = j = a) ? a === 2 ? k.attr(g).css(B) : a === 3 && k.attr(h).css(n) : k.attr(e).css(o)
            };
            return k.on("click", function() {
                j !== 3 && d.call(k)
            }).attr(e).css(u({cursor: "default"}, o))
        }, crispLine: function(a, b) {
            a[1] === a[4] && (a[1] = a[4] = t(a[1]) - b % 2 / 2);
            a[2] === a[5] &&
                    (a[2] = a[5] = t(a[2]) + b % 2 / 2);
            return a
        }, path: function(a) {
            var b = {fill: X};
            Qa(a) ? b.d = a : ba(a) && u(b, a);
            return this.createElement("path").attr(b)
        }, circle: function(a, b, c) {
            a = ba(a) ? a : {x: a, y: b, r: c};
            return this.createElement("circle").attr(a)
        }, arc: function(a, b, c, d, e, f) {
            if (ba(a))
                b = a.y, c = a.r, d = a.innerR, e = a.start, f = a.end, a = a.x;
            a = this.symbol("arc", a || 0, b || 0, c || 0, c || 0, {innerR: d || 0, start: e || 0, end: f || 0});
            a.r = c;
            return a
        }, rect: function(a, b, c, d, e, f) {
            var e = ba(a) ? a.r : e, g = this.createElement("rect"), a = ba(a) ? a : a === s ? {} : {x: a, y: b,
                width: v(c, 0), height: v(d, 0)};
            if (f !== s)
                a.strokeWidth = f, a = g.crisp(a);
            if (e)
                a.r = e;
            return g.attr(a)
        }, setSize: function(a, b, c) {
            var d = this.alignedObjects, e = d.length;
            this.width = a;
            this.height = b;
            for (this.boxWrapper[n(c, !0)?"animate":"attr"]({width:a, height:b}); e--; )
                d[e].align()
        }, g: function(a) {
            var b = this.createElement("g");
            return r(a) ? b.attr({"class": "highcharts-" + a}) : b
        }, image: function(a, b, c, d, e) {
            var f = {preserveAspectRatio: X};
            arguments.length > 1 && u(f, {x: b, y: c, width: d, height: e});
            f = this.createElement("image").attr(f);
            f.element.setAttributeNS ? f.element.setAttributeNS("http://www.w3.org/1999/xlink", "href", a) : f.element.setAttribute("hc-svg-href", a);
            return f
        }, symbol: function(a, b, c, d, e, f) {
            var g, h = this.symbols[a], h = h && h(t(b), t(c), d, e, f), i = /^url\((.*?)\)$/, k, j;
            if (h)
                g = this.path(h), u(g, {symbolName: a, x: b, y: c, width: d, height: e}), f && u(g, f);
            else if (i.test(a))
                j = function(a, b) {
                    a.element && (a.attr({width: b[0], height: b[1]}), a.alignByTranslate || a.translate(t((d - b[0]) / 2), t((e - b[1]) / 2)))
                }, k = a.match(i)[1], a = Sb[k], g = this.image(k).attr({x: b,
                    y: c}), g.isImg = !0, a ? j(g, a) : (g.attr({width: 0, height: 0}), Y("img", {onload: function() {
                        j(g, Sb[k] = [this.width, this.height])
                    }, src: k}));
            return g
        }, symbols: {circle: function(a, b, c, d) {
                var e = 0.166 * c;
                return["M", a + c / 2, b, "C", a + c + e, b, a + c + e, b + d, a + c / 2, b + d, "C", a - e, b + d, a - e, b, a + c / 2, b, "Z"]
            }, square: function(a, b, c, d) {
                return["M", a, b, "L", a + c, b, a + c, b + d, a, b + d, "Z"]
            }, triangle: function(a, b, c, d) {
                return["M", a + c / 2, b, "L", a + c, b + d, a, b + d, "Z"]
            }, "triangle-down": function(a, b, c, d) {
                return["M", a, b, "L", a + c, b, a + c / 2, b + d, "Z"]
            }, diamond: function(a,
                    b, c, d) {
                return["M", a + c / 2, b, "L", a + c, b + d / 2, a + c / 2, b + d, a, b + d / 2, "Z"]
            }, arc: function(a, b, c, d, e) {
                var f = e.start, c = e.r || c || d, g = e.end - 0.001, d = e.innerR, h = e.open, i = aa(f), k = fa(f), j = aa(g), g = fa(g), e = e.end - f < oa ? 0 : 1;
                return["M", a + c * i, b + c * k, "A", c, c, 0, e, 1, a + c * j, b + c * g, h ? "M" : "L", a + d * j, b + d * g, "A", d, d, 0, e, 0, a + d * i, b + d * k, h ? "" : "Z"]
            }}, clipRect: function(a, b, c, d) {
            var e = "highcharts-" + Ab++, f = this.createElement("clipPath").attr({id: e}).add(this.defs), a = this.rect(a, b, c, d, 0).add(f);
            a.id = e;
            a.clipPath = f;
            return a
        }, color: function(a, b, c) {
            var d =
                    this, e, f = /^rgba/, g, h, i, k, j, l, m, o = [];
            a && a.linearGradient ? g = "linearGradient" : a && a.radialGradient && (g = "radialGradient");
            if (g) {
                c = a[g];
                h = d.gradients;
                k = a.stops;
                b = b.radialReference;
                Qa(c) && (a[g] = c = {x1: c[0], y1: c[1], x2: c[2], y2: c[3], gradientUnits: "userSpaceOnUse"});
                g === "radialGradient" && b && !r(c.gradientUnits) && (c = w(c, {cx: b[0] - b[2] / 2 + c.cx * b[2], cy: b[1] - b[2] / 2 + c.cy * b[2], r: c.r * b[2], gradientUnits: "userSpaceOnUse"}));
                for (m in c)
                    m !== "id" && o.push(m, c[m]);
                for (m in k)
                    o.push(k[m]);
                o = o.join(",");
                h[o] ? a = h[o].id : (c.id = a =
                        "highcharts-" + Ab++, h[o] = i = d.createElement(g).attr(c).add(d.defs), i.stops = [], q(k, function(a) {
                    f.test(a[1]) ? (e = Ea(a[1]), j = e.get("rgb"), l = e.get("a")) : (j = a[1], l = 1);
                    a = d.createElement("stop").attr({offset: a[0], "stop-color": j, "stop-opacity": l}).add(i);
                    i.stops.push(a)
                }));
                return"url(" + d.url + "#" + a + ")"
            } else
                return f.test(a) ? (e = Ea(a), I(b, c + "-opacity", e.get("a")), e.get("rgb")) : (b.removeAttribute(c + "-opacity"), a)
        }, text: function(a, b, c, d) {
            var e = ga || !$ && this.forExport;
            if (d && !this.forExport)
                return this.html(a, b, c);
            b = t(n(b, 0));
            c = t(n(c, 0));
            a = this.createElement("text").attr({x: b, y: c, text: a});
            e && a.css({position: "absolute"});
            a.x = b;
            a.y = c;
            return a
        }, fontMetrics: function(a) {
            var a = a || this.style.fontSize, a = /px/.test(a) ? y(a) : /em/.test(a) ? parseFloat(a) * 12 : 12, a = a < 24 ? a + 4 : t(a * 1.2), b = t(a * 0.8);
            return{h: a, b: b}
        }, label: function(a, b, c, d, e, f, g, h, i) {
            function k() {
                var a, b;
                a = p.element.style;
                n = (cb === void 0 || Db === void 0 || o.styles.textAlign) && p.textStr && p.getBBox();
                o.width = (cb || n.width || 0) + 2 * K + v;
                o.height = (Db || n.height || 0) + 2 * K;
                Fa = K + m.fontMetrics(a &&
                        a.fontSize).b;
                if (x) {
                    if (!B)
                        a = t(-z * K), b = h ? -Fa : 0, o.box = B = d ? m.symbol(d, a, b, o.width, o.height, E) : m.rect(a, b, o.width, o.height, 0, E[Tb]), B.attr("fill", X).add(o);
                    B.isImg || B.attr(w({width: o.width, height: o.height}, E));
                    E = null
                }
            }
            function j() {
                var a = o.styles, a = a && a.textAlign, b = v + K * (1 - z), c;
                c = h ? 0 : Fa;
                if (r(cb) && n && (a === "center" || a === "right"))
                    b += {center: 0.5, right: 1}[a] * (cb - n.width);
                (b !== p.x || c !== p.y) && p.attr({x: b, y: c});
                p.x = b;
                p.y = c
            }
            function l(a, b) {
                B ? B.attr(a, b) : E[a] = b
            }
            var m = this, o = m.g(i), p = m.text("", 0, 0, g).attr({zIndex: 1}),
                    B, n, z = 0, K = 3, v = 0, cb, Db, Eb, Fb, Ub = 0, E = {}, Fa, g = o.attrSetters, x;
            o.onAdd = function() {
                p.add(o);
                o.attr({text: a, x: b, y: c});
                B && r(e) && o.attr({anchorX: e, anchorY: f})
            };
            g.width = function(a) {
                cb = a;
                return!1
            };
            g.height = function(a) {
                Db = a;
                return!1
            };
            g.padding = function(a) {
                r(a) && a !== K && (K = a, j());
                return!1
            };
            g.paddingLeft = function(a) {
                r(a) && a !== v && (v = a, j());
                return!1
            };
            g.align = function(a) {
                z = {left: 0, center: 0.5, right: 1}[a];
                return!1
            };
            g.text = function(a, b) {
                p.attr(b, a);
                k();
                j();
                return!1
            };
            g[Tb] = function(a, b) {
                a && (x = !0);
                Ub = a % 2 / 2;
                l(b, a);
                return!1
            };
            g.stroke = g.fill = g.r = function(a, b) {
                b === "fill" && a && (x = !0);
                l(b, a);
                return!1
            };
            g.anchorX = function(a, b) {
                e = a;
                l(b, a + Ub - Eb);
                return!1
            };
            g.anchorY = function(a, b) {
                f = a;
                l(b, a - Fb);
                return!1
            };
            g.x = function(a) {
                o.x = a;
                a -= z * ((cb || n.width) + K);
                Eb = t(a);
                o.attr("translateX", Eb);
                return!1
            };
            g.y = function(a) {
                Fb = o.y = t(a);
                o.attr("translateY", Fb);
                return!1
            };
            var y = o.css;
            return u(o, {css: function(a) {
                    if (a) {
                        var b = {}, a = w(a);
                        q("fontSize,fontWeight,fontFamily,color,lineHeight,width,textDecoration,textShadow".split(","), function(c) {
                            a[c] !== s && (b[c] =
                                    a[c], delete a[c])
                        });
                        p.css(b)
                    }
                    return y.call(o, a)
                }, getBBox: function() {
                    return{width: n.width + 2 * K, height: n.height + 2 * K, x: n.x - K, y: n.y - K}
                }, shadow: function(a) {
                    B && B.shadow(a);
                    return o
                }, destroy: function() {
                    S(o.element, "mouseenter");
                    S(o.element, "mouseleave");
                    p && (p = p.destroy());
                    B && (B = B.destroy());
                    Ca.prototype.destroy.call(o);
                    o = m = k = j = l = null
                }})
        }};
    Xa = ha;
    u(Ca.prototype, {htmlCss: function(a) {
            var b = this.element;
            if (b = a && b.tagName === "SPAN" && a.width)
                delete a.width, this.textWidth = b, this.updateTransform();
            this.styles = u(this.styles,
                    a);
            J(this.element, a);
            return this
        }, htmlGetBBox: function() {
            var a = this.element, b = this.bBox;
            if (!b) {
                if (a.nodeName === "text")
                    a.style.position = "absolute";
                b = this.bBox = {x: a.offsetLeft, y: a.offsetTop, width: a.offsetWidth, height: a.offsetHeight}
            }
            return b
        }, htmlUpdateTransform: function() {
            if (this.added) {
                var a = this.renderer, b = this.element, c = this.translateX || 0, d = this.translateY || 0, e = this.x || 0, f = this.y || 0, g = this.textAlign || "left", h = {left: 0, center: 0.5, right: 1}[g], i = this.shadows;
                J(b, {marginLeft: c, marginTop: d});
                i && q(i, function(a) {
                    J(a,
                            {marginLeft: c + 1, marginTop: d + 1})
                });
                this.inverted && q(b.childNodes, function(c) {
                    a.invertChild(c, b)
                });
                if (b.tagName === "SPAN") {
                    var k = this.rotation, j, l = y(this.textWidth), m = [k, g, b.innerHTML, this.textWidth].join(",");
                    if (m !== this.cTT) {
                        j = a.fontMetrics(b.style.fontSize).b;
                        r(k) && this.setSpanRotation(k, h, j);
                        i = n(this.elemWidth, b.offsetWidth);
                        if (i > l && /[ \-]/.test(b.textContent || b.innerText))
                            J(b, {width: l + "px", display: "block", whiteSpace: "normal"}), i = l;
                        this.getSpanCorrection(i, j, h, k, g)
                    }
                    J(b, {left: e + (this.xCorr || 0) + "px",
                        top: f + (this.yCorr || 0) + "px"});
                    if (mb)
                        j = b.offsetHeight;
                    this.cTT = m
                }
            } else
                this.alignOnAdd = !0
        }, setSpanRotation: function(a, b, c) {
            var d = {}, e = Ha ? "-ms-transform" : mb ? "-webkit-transform" : ab ? "MozTransform" : Rb ? "-o-transform" : "";
            d[e] = d.transform = "rotate(" + a + "deg)";
            d[e + (ab ? "Origin" : "-origin")] = d.transformOrigin = b * 100 + "% " + c + "px";
            J(this.element, d)
        }, getSpanCorrection: function(a, b, c) {
            this.xCorr = -a * c;
            this.yCorr = -b
        }});
    u(ha.prototype, {html: function(a, b, c) {
            var d = this.createElement("span"), e = d.attrSetters, f = d.element, g = d.renderer;
            e.text = function(a) {
                a !== f.innerHTML && delete this.bBox;
                f.innerHTML = this.textStr = a;
                return!1
            };
            e.x = e.y = e.align = e.rotation = function(a, b) {
                b === "align" && (b = "textAlign");
                d[b] = a;
                d.htmlUpdateTransform();
                return!1
            };
            d.attr({text: a, x: t(b), y: t(c)}).css({position: "absolute", whiteSpace: "nowrap", fontFamily: this.style.fontFamily, fontSize: this.style.fontSize});
            d.css = d.htmlCss;
            if (g.isSVG)
                d.add = function(a) {
                    var b, c = g.box.parentNode, e = [];
                    if (this.parentGroup = a) {
                        if (b = a.div, !b) {
                            for (; a; )
                                e.push(a), a = a.parentGroup;
                            q(e.reverse(),
                                    function(a) {
                                        var d;
                                        b = a.div = a.div || Y(Ua, {className: I(a.element, "class")}, {position: "absolute", left: (a.translateX || 0) + "px", top: (a.translateY || 0) + "px"}, b || c);
                                        d = b.style;
                                        u(a.attrSetters, {translateX: function(a) {
                                                d.left = a + "px"
                                            }, translateY: function(a) {
                                                d.top = a + "px"
                                            }, visibility: function(a, b) {
                                                d[b] = a
                                            }})
                                    })
                        }
                    } else
                        b = c;
                    b.appendChild(f);
                    d.added = !0;
                    d.alignOnAdd && d.htmlUpdateTransform();
                    return d
                };
            return d
        }});
    var fb, pa;
    if (!$ && !ga)
        Q.VMLElement = pa = {init: function(a, b) {
                var c = ["<", b, ' filled="f" stroked="f"'], d = ["position: ",
                    "absolute", ";"], e = b === Ua;
                (b === "shape" || e) && d.push("left:0;top:0;width:1px;height:1px;");
                d.push("visibility: ", e ? "hidden" : "visible");
                c.push(' style="', d.join(""), '"/>');
                if (b)
                    c = e || b === "span" || b === "img" ? c.join("") : a.prepVML(c), this.element = Y(c);
                this.renderer = a;
                this.attrSetters = {}
            }, add: function(a) {
                var b = this.renderer, c = this.element, d = b.box, d = a ? a.element || a : d;
                a && a.inverted && b.invertChild(c, d);
                d.appendChild(c);
                this.added = !0;
                this.alignOnAdd && !this.deferUpdateTransform && this.updateTransform();
                if (this.onAdd)
                    this.onAdd();
                return this
            }, updateTransform: Ca.prototype.htmlUpdateTransform, setSpanRotation: function() {
                var a = this.rotation, b = aa(a * Ma), c = fa(a * Ma);
                J(this.element, {filter: a ? ["progid:DXImageTransform.Microsoft.Matrix(M11=", b, ", M12=", -c, ", M21=", c, ", M22=", b, ", sizingMethod='auto expand')"].join("") : X})
            }, getSpanCorrection: function(a, b, c, d, e) {
                var f = d ? aa(d * Ma) : 1, g = d ? fa(d * Ma) : 0, h = n(this.elemHeight, this.element.offsetHeight), i;
                this.xCorr = f < 0 && -a;
                this.yCorr = g < 0 && -h;
                i = f * g < 0;
                this.xCorr += g * b * (i ? 1 - c : c);
                this.yCorr -= f * b * (d ? i ?
                        c : 1 - c : 1);
                e && e !== "left" && (this.xCorr -= a * c * (f < 0 ? -1 : 1), d && (this.yCorr -= h * c * (g < 0 ? -1 : 1)), J(this.element, {textAlign: e}))
            }, pathToVML: function(a) {
                for (var b = a.length, c = []; b--; )
                    if (za(a[b]))
                        c[b] = t(a[b] * 10) - 5;
                    else if (a[b] === "Z")
                        c[b] = "x";
                    else if (c[b] = a[b], a.isArc && (a[b] === "wa" || a[b] === "at"))
                        c[b + 5] === c[b + 7] && (c[b + 7] += a[b + 7] > a[b + 5] ? 1 : -1), c[b + 6] === c[b + 8] && (c[b + 8] += a[b + 8] > a[b + 6] ? 1 : -1);
                return c.join(" ") || "x"
            }, attr: function(a, b) {
                var c, d, e, f = this.element || {}, g = f.style, h = f.nodeName, i = this.renderer, k = this.symbolName,
                        j, l = this.shadows, m, o = this.attrSetters, p = this;
                ka(a) && r(b) && (c = a, a = {}, a[c] = b);
                if (ka(a))
                    c = a, p = c === "strokeWidth" || c === "stroke-width" ? this.strokeweight : this[c];
                else
                    for (c in a)
                        if (d = a[c], m = !1, e = o[c] && o[c].call(this, d, c), e !== !1 && d !== null) {
                            e !== s && (d = e);
                            if (k && /^(x|y|r|start|end|width|height|innerR|anchorX|anchorY)/.test(c))
                                j || (this.symbolAttr(a), j = !0), m = !0;
                            else if (c === "d") {
                                d = d || [];
                                this.d = d.join(" ");
                                f.path = d = this.pathToVML(d);
                                if (l)
                                    for (e = l.length; e--; )
                                        l[e].path = l[e].cutOff ? this.cutOffPath(d, l[e].cutOff) : d;
                                m = !0
                            } else if (c === "visibility") {
                                d === "inherit" && (d = "visible");
                                if (l)
                                    for (e = l.length; e--; )
                                        l[e].style[c] = d;
                                h === "DIV" && (d = d === "hidden" ? "-999em" : 0, lb || (g[c] = d ? "visible" : "hidden"), c = "top");
                                g[c] = d;
                                m = !0
                            } else if (c === "zIndex")
                                d && (g[c] = d), m = !0;
                            else if (ua(c, ["x", "y", "width", "height"]) !== -1)
                                this[c] = d, c === "x" || c === "y" ? c = {x: "left", y: "top"}[c] : d = v(0, d), this.updateClipping ? (this[c] = d, this.updateClipping()) : g[c] = d, m = !0;
                            else if (c === "class" && h === "DIV")
                                f.className = d;
                            else if (c === "stroke")
                                d = i.color(d, f, c), c = "strokecolor";
                            else if (c === "stroke-width" || c === "strokeWidth")
                                f.stroked = d ? !0 : !1, c = "strokeweight", this[c] = d, za(d) && (d += "px");
                            else if (c === "dashstyle")
                                (f.getElementsByTagName("stroke")[0] || Y(i.prepVML(["<stroke/>"]), null, null, f))[c] = d || "solid", this.dashstyle = d, m = !0;
                            else if (c === "fill")
                                if (h === "SPAN")
                                    g.color = d;
                                else {
                                    if (h !== "IMG")
                                        f.filled = d !== X ? !0 : !1, d = i.color(d, f, c, this), c = "fillcolor"
                                }
                            else if (c === "opacity")
                                m = !0;
                            else if (h === "shape" && c === "rotation")
                                this[c] = f.style[c] = d, f.style.left = -t(fa(d * Ma) + 1) + "px", f.style.top = t(aa(d *
                                        Ma)) + "px";
                            else if (c === "translateX" || c === "translateY" || c === "rotation")
                                this[c] = d, this.updateTransform(), m = !0;
                            m || (lb ? f[c] = d : I(f, c, d))
                        }
                return p
            }, clip: function(a) {
                var b = this, c;
                a ? (c = a.members, ma(c, b), c.push(b), b.destroyClip = function() {
                    ma(c, b)
                }, a = a.getCSS(b)) : (b.destroyClip && b.destroyClip(), a = {clip: lb ? "inherit" : "rect(auto)"});
                return b.css(a)
            }, css: Ca.prototype.htmlCss, safeRemoveChild: function(a) {
                a.parentNode && Ta(a)
            }, destroy: function() {
                this.destroyClip && this.destroyClip();
                return Ca.prototype.destroy.apply(this)
            },
            on: function(a, b) {
                this.element["on" + a] = function() {
                    var a = U.event;
                    a.target = a.srcElement;
                    b(a)
                };
                return this
            }, cutOffPath: function(a, b) {
                var c, a = a.split(/[ ,]/);
                c = a.length;
                if (c === 9 || c === 11)
                    a[c - 4] = a[c - 2] = y(a[c - 2]) - 10 * b;
                return a.join(" ")
            }, shadow: function(a, b, c) {
                var d = [], e, f = this.element, g = this.renderer, h, i = f.style, k, j = f.path, l, m, o, p;
                j && typeof j.value !== "string" && (j = "x");
                m = j;
                if (a) {
                    o = n(a.width, 3);
                    p = (a.opacity || 0.15) / o;
                    for (e = 1; e <= 3; e++) {
                        l = o * 2 + 1 - 2 * e;
                        c && (m = this.cutOffPath(j.value, l + 0.5));
                        k = ['<shape isShadow="true" strokeweight="',
                            l, '" filled="false" path="', m, '" coordsize="10 10" style="', f.style.cssText, '" />'];
                        h = Y(g.prepVML(k), null, {left: y(i.left) + n(a.offsetX, 1), top: y(i.top) + n(a.offsetY, 1)});
                        if (c)
                            h.cutOff = l + 1;
                        k = ['<stroke color="', a.color || "black", '" opacity="', p * e, '"/>'];
                        Y(g.prepVML(k), null, null, h);
                        b ? b.element.appendChild(h) : f.parentNode.insertBefore(h, f);
                        d.push(h)
                    }
                    this.shadows = d
                }
                return this
            }}, pa = ca(Ca, pa), pa = {Element: pa, isIE8: Da.indexOf("MSIE 8.0") > -1, init: function(a, b, c, d) {
                var e;
                this.alignedObjects = [];
                d = this.createElement(Ua).css(u(this.getStyle(d),
                        {position: "relative"}));
                e = d.element;
                a.appendChild(d.element);
                this.isVML = !0;
                this.box = e;
                this.boxWrapper = d;
                this.cache = {};
                this.setSize(b, c, !1);
                if (!C.namespaces.hcv) {
                    C.namespaces.add("hcv", "urn:schemas-microsoft-com:vml");
                    try {
                        C.createStyleSheet().cssText = "hcv\\:fill, hcv\\:path, hcv\\:shape, hcv\\:stroke{ behavior:url(#default#VML); display: inline-block; } "
                    } catch (f) {
                        C.styleSheets[0].cssText += "hcv\\:fill, hcv\\:path, hcv\\:shape, hcv\\:stroke{ behavior:url(#default#VML); display: inline-block; } "
                    }
                }
            },
            isHidden: function() {
                return!this.box.offsetWidth
            }, clipRect: function(a, b, c, d) {
                var e = this.createElement(), f = ba(a);
                return u(e, {members: [], left: (f ? a.x : a) + 1, top: (f ? a.y : b) + 1, width: (f ? a.width : c) - 1, height: (f ? a.height : d) - 1, getCSS: function(a) {
                        var b = a.element, c = b.nodeName, a = a.inverted, d = this.top - (c === "shape" ? b.offsetTop : 0), e = this.left, b = e + this.width, f = d + this.height, d = {clip: "rect(" + t(a ? e : d) + "px," + t(a ? f : b) + "px," + t(a ? b : f) + "px," + t(a ? d : e) + "px)"};
                        !a && lb && c === "DIV" && u(d, {width: b + "px", height: f + "px"});
                        return d
                    }, updateClipping: function() {
                        q(e.members,
                                function(a) {
                                    a.css(e.getCSS(a))
                                })
                    }})
            }, color: function(a, b, c, d) {
                var e = this, f, g = /^rgba/, h, i, k = X;
                a && a.linearGradient ? i = "gradient" : a && a.radialGradient && (i = "pattern");
                if (i) {
                    var j, l, m = a.linearGradient || a.radialGradient, o, p, B, n, z, K = "", a = a.stops, s, r = [], t = function() {
                        h = ['<fill colors="' + r.join(",") + '" opacity="', B, '" o:opacity2="', p, '" type="', i, '" ', K, 'focus="100%" method="any" />'];
                        Y(e.prepVML(h), null, null, b)
                    };
                    o = a[0];
                    s = a[a.length - 1];
                    o[0] > 0 && a.unshift([0, o[1]]);
                    s[0] < 1 && a.push([1, s[1]]);
                    q(a, function(a, b) {
                        g.test(a[1]) ?
                                (f = Ea(a[1]), j = f.get("rgb"), l = f.get("a")) : (j = a[1], l = 1);
                        r.push(a[0] * 100 + "% " + j);
                        b ? (B = l, n = j) : (p = l, z = j)
                    });
                    if (c === "fill")
                        if (i === "gradient")
                            c = m.x1 || m[0] || 0, a = m.y1 || m[1] || 0, o = m.x2 || m[2] || 0, m = m.y2 || m[3] || 0, K = 'angle="' + (90 - W.atan((m - a) / (o - c)) * 180 / oa) + '"', t();
                        else {
                            var k = m.r, v = k * 2, u = k * 2, w = m.cx, E = m.cy, Fa = b.radialReference, x, k = function() {
                                Fa && (x = d.getBBox(), w += (Fa[0] - x.x) / x.width - 0.5, E += (Fa[1] - x.y) / x.height - 0.5, v *= Fa[2] / x.width, u *= Fa[2] / x.height);
                                K = 'src="' + G.global.VMLRadialGradientURL + '" size="' + v + "," + u + '" origin="0.5,0.5" position="' +
                                        w + "," + E + '" color2="' + z + '" ';
                                t()
                            };
                            d.added ? k() : d.onAdd = k;
                            k = n
                        }
                    else
                        k = j
                } else if (g.test(a) && b.tagName !== "IMG")
                    f = Ea(a), h = ["<", c, ' opacity="', f.get("a"), '"/>'], Y(this.prepVML(h), null, null, b), k = f.get("rgb");
                else {
                    k = b.getElementsByTagName(c);
                    if (k.length)
                        k[0].opacity = 1, k[0].type = "solid";
                    k = a
                }
                return k
            }, prepVML: function(a) {
                var b = this.isIE8, a = a.join("");
                b ? (a = a.replace("/>", ' xmlns="urn:schemas-microsoft-com:vml" />'), a = a.indexOf('style="') === -1 ? a.replace("/>", ' style="display:inline-block;behavior:url(#default#VML);" />') :
                        a.replace('style="', 'style="display:inline-block;behavior:url(#default#VML);')) : a = a.replace("<", "<hcv:");
                return a
            }, text: ha.prototype.html, path: function(a) {
                var b = {coordsize: "10 10"};
                Qa(a) ? b.d = a : ba(a) && u(b, a);
                return this.createElement("shape").attr(b)
            }, circle: function(a, b, c) {
                var d = this.symbol("circle");
                if (ba(a))
                    c = a.r, b = a.y, a = a.x;
                d.isCircle = !0;
                d.r = c;
                return d.attr({x: a, y: b})
            }, g: function(a) {
                var b;
                a && (b = {className: "highcharts-" + a, "class": "highcharts-" + a});
                return this.createElement(Ua).attr(b)
            }, image: function(a,
                    b, c, d, e) {
                var f = this.createElement("img").attr({src: a});
                arguments.length > 1 && f.attr({x: b, y: c, width: d, height: e});
                return f
            }, createElement: function(a) {
                return a === "rect" ? this.symbol(a) : ha.prototype.createElement.call(this, a)
            }, invertChild: function(a, b) {
                var c = this, d = b.style, e = a.tagName === "IMG" && a.style;
                J(a, {flip: "x", left: y(d.width) - (e ? y(e.top) : 1), top: y(d.height) - (e ? y(e.left) : 1), rotation: -90});
                q(a.childNodes, function(b) {
                    c.invertChild(b, a)
                })
            }, symbols: {arc: function(a, b, c, d, e) {
                    var f = e.start, g = e.end, h = e.r || c ||
                            d, c = e.innerR, d = aa(f), i = fa(f), k = aa(g), j = fa(g);
                    if (g - f === 0)
                        return["x"];
                    f = ["wa", a - h, b - h, a + h, b + h, a + h * d, b + h * i, a + h * k, b + h * j];
                    e.open && !c && f.push("e", "M", a, b);
                    f.push("at", a - c, b - c, a + c, b + c, a + c * k, b + c * j, a + c * d, b + c * i, "x", "e");
                    f.isArc = !0;
                    return f
                }, circle: function(a, b, c, d, e) {
                    e && (c = d = 2 * e.r);
                    e && e.isCircle && (a -= c / 2, b -= d / 2);
                    return["wa", a, b, a + c, b + d, a + c, b + d / 2, a + c, b + d / 2, "e"]
                }, rect: function(a, b, c, d, e) {
                    var f = a + c, g = b + d, h;
                    !r(e) || !e.r ? f = ha.prototype.symbols.square.apply(0, arguments) : (h = x(e.r, c, d), f = ["M", a + h, b, "L", f - h, b, "wa", f -
                                2 * h, b, f, b + 2 * h, f - h, b, f, b + h, "L", f, g - h, "wa", f - 2 * h, g - 2 * h, f, g, f, g - h, f - h, g, "L", a + h, g, "wa", a, g - 2 * h, a + 2 * h, g, a + h, g, a, g - h, "L", a, b + h, "wa", a, b, a + 2 * h, b + 2 * h, a, b + h, a + h, b, "x", "e"]);
                    return f
                }}}, Q.VMLRenderer = fb = function() {
            this.init.apply(this, arguments)
        }, fb.prototype = w(ha.prototype, pa), Xa = fb;
    ha.prototype.measureSpanWidth = function(a, b) {
        var c = C.createElement("span"), d;
        d = C.createTextNode(a);
        c.appendChild(d);
        J(c, b);
        this.box.appendChild(c);
        d = c.offsetWidth;
        Ta(c);
        return d
    };
    var Vb;
    if (ga)
        Q.CanVGRenderer = pa = function() {
            Na = "http://www.w3.org/1999/xhtml"
        },
                pa.prototype.symbols = {}, Vb = function() {
            function a() {
                var a = b.length, d;
                for (d = 0; d < a; d++)
                    b[d]();
                b = []
            }
            var b = [];
            return{push: function(c, d) {
                    b.length === 0 && $b(d, a);
                    b.push(c)
                }}
        }(), Xa = pa;
    $a.prototype = {addLabel: function() {
            var a = this.axis, b = a.options, c = a.chart, d = a.horiz, e = a.categories, f = a.names, g = this.pos, h = b.labels, i = a.tickPositions, d = d && e && !h.step && !h.staggerLines && !h.rotation && c.plotWidth / i.length || !d && (c.margin[3] || c.chartWidth * 0.33), k = g === i[0], j = g === i[i.length - 1], l, f = e ? n(e[g], f[g], g) : g, e = this.label, m = i.info;
            a.isDatetimeAxis && m && (l = b.dateTimeLabelFormats[m.higherRanks[g] || m.unitName]);
            this.isFirst = k;
            this.isLast = j;
            b = a.labelFormatter.call({axis: a, chart: c, isFirst: k, isLast: j, dateTimeLabelFormat: l, value: a.isLog ? ea(la(f)) : f});
            g = d && {width: v(1, t(d - 2 * (h.padding || 10))) + "px"};
            g = u(g, h.style);
            if (r(e))
                e && e.attr({text: b}).css(g);
            else {
                l = {align: a.labelAlign};
                if (za(h.rotation))
                    l.rotation = h.rotation;
                if (d && h.ellipsis)
                    l._clipHeight = a.len / i.length;
                this.label = r(b) && h.enabled ? c.renderer.text(b, 0, 0, h.useHTML).attr(l).css(g).add(a.labelGroup) :
                        null
            }
        }, getLabelSize: function() {
            var a = this.label, b = this.axis;
            return a ? a.getBBox()[b.horiz ? "height" : "width"] : 0
        }, getLabelSides: function() {
            var a = this.label.getBBox(), b = this.axis, c = b.horiz, d = b.options.labels, a = c ? a.width : a.height, b = c ? d.x - a * {left: 0, center: 0.5, right: 1}[b.labelAlign] : 0;
            return[b, c ? a + b : a]
        }, handleOverflow: function(a, b) {
            var c = !0, d = this.axis, e = this.isFirst, f = this.isLast, g = d.horiz ? b.x : b.y, h = d.reversed, i = d.tickPositions, k = this.getLabelSides(), j = k[0], k = k[1], l, m, o, p = this.label.line || 0;
            l = d.labelEdge;
            m = d.justifyLabels && (e || f);
            l[p] === s || g + j > l[p] ? l[p] = g + k : m || (c = !1);
            if (m) {
                l = (m = d.justifyToPlot) ? d.pos : 0;
                m = m ? l + d.len : d.chart.chartWidth;
                do
                    a += e ? 1 : -1, o = d.ticks[i[a]];
                while (i[a] && (!o || o.label.line !== p));
                d = o && o.label.xy && o.label.xy.x + o.getLabelSides()[e ? 0 : 1];
                e && !h || f && h ? g + j < l && (g = l - j, o && g + k > d && (c = !1)) : g + k > m && (g = m - k, o && g + j < d && (c = !1));
                b.x = g
            }
            return c
        }, getPosition: function(a, b, c, d) {
            var e = this.axis, f = e.chart, g = d && f.oldChartHeight || f.chartHeight;
            return{x: a ? e.translate(b + c, null, null, d) + e.transB : e.left + e.offset +
                        (e.opposite ? (d && f.oldChartWidth || f.chartWidth) - e.right - e.left : 0), y: a ? g - e.bottom + e.offset - (e.opposite ? e.height : 0) : g - e.translate(b + c, null, null, d) - e.transB}
        }, getLabelPosition: function(a, b, c, d, e, f, g, h) {
            var i = this.axis, k = i.transA, j = i.reversed, l = i.staggerLines, m = i.chart.renderer.fontMetrics(e.style.fontSize).b, o = e.rotation, a = a + e.x - (f && d ? f * k * (j ? -1 : 1) : 0), b = b + e.y - (f && !d ? f * k * (j ? 1 : -1) : 0);
            o && i.side === 2 && (b -= m - m * aa(o * Ma));
            !r(e.y) && !o && (b += m - c.getBBox().height / 2);
            if (l)
                c.line = g / (h || 1) % l, b += c.line * (i.labelOffset /
                        l);
            return{x: a, y: b}
        }, getMarkPath: function(a, b, c, d, e, f) {
            return f.crispLine(["M", a, b, "L", a + (e ? 0 : -c), b + (e ? c : 0)], d)
        }, render: function(a, b, c) {
            var d = this.axis, e = d.options, f = d.chart.renderer, g = d.horiz, h = this.type, i = this.label, k = this.pos, j = e.labels, l = this.gridLine, m = h ? h + "Grid" : "grid", o = h ? h + "Tick" : "tick", p = e[m + "LineWidth"], B = e[m + "LineColor"], q = e[m + "LineDashStyle"], z = e[o + "Length"], m = e[o + "Width"] || 0, K = e[o + "Color"], r = e[o + "Position"], o = this.mark, t = j.step, v = !0, u = d.tickmarkOffset, w = this.getPosition(g, k, u, b), x = w.x,
                    w = w.y, E = g && x === d.pos + d.len || !g && w === d.pos ? -1 : 1;
            this.isActive = !0;
            if (p) {
                k = d.getPlotLinePath(k + u, p * E, b, !0);
                if (l === s) {
                    l = {stroke: B, "stroke-width": p};
                    if (q)
                        l.dashstyle = q;
                    if (!h)
                        l.zIndex = 1;
                    if (b)
                        l.opacity = 0;
                    this.gridLine = l = p ? f.path(k).attr(l).add(d.gridGroup) : null
                }
                if (!b && l && k)
                    l[this.isNew ? "attr" : "animate"]({d: k, opacity: c})
            }
            if (m && z)
                r === "inside" && (z = -z), d.opposite && (z = -z), h = this.getMarkPath(x, w, z, m * E, g, f), o ? o.animate({d: h, opacity: c}) : this.mark = f.path(h).attr({stroke: K, "stroke-width": m, opacity: c}).add(d.axisGroup);
            if (i && !isNaN(x))
                i.xy = w = this.getLabelPosition(x, w, i, g, j, u, a, t), this.isFirst && !this.isLast && !n(e.showFirstLabel, 1) || this.isLast && !this.isFirst && !n(e.showLastLabel, 1) ? v = !1 : !d.isRadial && !j.step && !j.rotation && !b && c !== 0 && (v = this.handleOverflow(a, w)), t && a % t && (v = !1), v && !isNaN(w.y) ? (w.opacity = c, i[this.isNew ? "attr" : "animate"](w), this.isNew = !1) : i.attr("y", -9999)
        }, destroy: function() {
            Ka(this, this.axis)
        }};
    Q.PlotLineOrBand = function(a, b) {
        this.axis = a;
        if (b)
            this.options = b, this.id = b.id
    };
    Q.PlotLineOrBand.prototype = {render: function() {
            var a =
                    this, b = a.axis, c = b.horiz, d = (b.pointRange || 0) / 2, e = a.options, f = e.label, g = a.label, h = e.width, i = e.to, k = e.from, j = r(k) && r(i), l = e.value, m = e.dashStyle, o = a.svgElem, p = [], B, q = e.color, z = e.zIndex, K = e.events, s = b.chart.renderer;
            b.isLog && (k = Ga(k), i = Ga(i), l = Ga(l));
            if (h) {
                if (p = b.getPlotLinePath(l, h), d = {stroke: q, "stroke-width": h}, m)
                    d.dashstyle = m
            } else if (j) {
                if (k = v(k, b.min - d), i = x(i, b.max + d), p = b.getPlotBandPath(k, i, e), d = {fill: q}, e.borderWidth)
                    d.stroke = e.borderColor, d["stroke-width"] = e.borderWidth
            } else
                return;
            if (r(z))
                d.zIndex =
                        z;
            if (o)
                if (p)
                    o.animate({d: p}, null, o.onGetPath);
                else {
                    if (o.hide(), o.onGetPath = function() {
                        o.show()
                    }, g)
                        a.label = g = g.destroy()
                }
            else if (p && p.length && (a.svgElem = o = s.path(p).attr(d).add(), K))
                for (B in e = function(b) {
                    o.on(b, function(c) {
                        K[b].apply(a, [c])
                    })
                }, K)
                    e(B);
            if (f && r(f.text) && p && p.length && b.width > 0 && b.height > 0) {
                f = w({align: c && j && "center", x: c ? !j && 4 : 10, verticalAlign: !c && j && "middle", y: c ? j ? 16 : 10 : j ? 6 : -4, rotation: c && !j && 90}, f);
                if (!g)
                    a.label = g = s.text(f.text, 0, 0, f.useHTML).attr({align: f.textAlign || f.align, rotation: f.rotation,
                        zIndex: z}).css(f.style).add();
                b = [p[1], p[4], n(p[6], p[1])];
                p = [p[2], p[5], n(p[7], p[2])];
                c = Sa(b);
                j = Sa(p);
                g.align(f, !1, {x: c, y: j, width: Aa(b) - c, height: Aa(p) - j});
                g.show()
            } else
                g && g.hide();
            return a
        }, destroy: function() {
            ma(this.axis.plotLinesAndBands, this);
            delete this.axis;
            Ka(this)
        }};
    N.prototype = {defaultOptions: {dateTimeLabelFormats: {millisecond: "%H:%M:%S.%L", second: "%H:%M:%S", minute: "%H:%M", hour: "%H:%M", day: "%e. %b", week: "%e. %b", month: "%b '%y", year: "%Y"}, endOnTick: !1, gridLineColor: "#C0C0C0", labels: F, lineColor: "#C0D0E0",
            lineWidth: 1, minPadding: 0.01, maxPadding: 0.01, minorGridLineColor: "#E0E0E0", minorGridLineWidth: 1, minorTickColor: "#A0A0A0", minorTickLength: 2, minorTickPosition: "outside", startOfWeek: 1, startOnTick: !1, tickColor: "#C0D0E0", tickLength: 5, tickmarkPlacement: "between", tickPixelInterval: 100, tickPosition: "outside", tickWidth: 1, title: {align: "middle", style: {color: "#4d759e", fontWeight: "bold"}}, type: "linear"}, defaultYAxisOptions: {endOnTick: !0, gridLineWidth: 1, tickPixelInterval: 72, showLastLabel: !0, labels: {x: -8, y: 3}, lineWidth: 0,
            maxPadding: 0.05, minPadding: 0.05, startOnTick: !0, tickWidth: 0, title: {rotation: 270, text: "Values"}, stackLabels: {enabled: !1, formatter: function() {
                    return Ia(this.total, -1)
                }, style: F.style}}, defaultLeftAxisOptions: {labels: {x: -8, y: null}, title: {rotation: 270}}, defaultRightAxisOptions: {labels: {x: 8, y: null}, title: {rotation: 90}}, defaultBottomAxisOptions: {labels: {x: 0, y: 14}, title: {rotation: 0}}, defaultTopAxisOptions: {labels: {x: 0, y: -5}, title: {rotation: 0}}, init: function(a, b) {
            var c = b.isX;
            this.horiz = a.inverted ? !c : c;
            this.coll =
                    (this.isXAxis = c) ? "xAxis" : "yAxis";
            this.opposite = b.opposite;
            this.side = b.side || (this.horiz ? this.opposite ? 0 : 2 : this.opposite ? 1 : 3);
            this.setOptions(b);
            var d = this.options, e = d.type;
            this.labelFormatter = d.labels.formatter || this.defaultLabelFormatter;
            this.userOptions = b;
            this.minPixelPadding = 0;
            this.chart = a;
            this.reversed = d.reversed;
            this.zoomEnabled = d.zoomEnabled !== !1;
            this.categories = d.categories || e === "category";
            this.names = [];
            this.isLog = e === "logarithmic";
            this.isDatetimeAxis = e === "datetime";
            this.isLinked = r(d.linkedTo);
            this.tickmarkOffset = this.categories && d.tickmarkPlacement === "between" ? 0.5 : 0;
            this.ticks = {};
            this.labelEdge = [];
            this.minorTicks = {};
            this.plotLinesAndBands = [];
            this.alternateBands = {};
            this.len = 0;
            this.minRange = this.userMinRange = d.minRange || d.maxZoom;
            this.range = d.range;
            this.offset = d.offset || 0;
            this.stacks = {};
            this.oldStacks = {};
            this.min = this.max = null;
            this.crosshair = n(d.crosshair, ia(a.options.tooltip.crosshairs)[c ? 0 : 1], !1);
            var f, d = this.options.events;
            ua(this, a.axes) === -1 && (c && !this.isColorAxis ? a.axes.splice(a.xAxis.length,
                    0, this) : a.axes.push(this), a[this.coll].push(this));
            this.series = this.series || [];
            if (a.inverted && c && this.reversed === s)
                this.reversed = !0;
            this.removePlotLine = this.removePlotBand = this.removePlotBandOrLine;
            for (f in d)
                D(this, f, d[f]);
            if (this.isLog)
                this.val2lin = Ga, this.lin2val = la
        }, setOptions: function(a) {
            this.options = w(this.defaultOptions, this.isXAxis ? {} : this.defaultYAxisOptions, [this.defaultTopAxisOptions, this.defaultRightAxisOptions, this.defaultBottomAxisOptions, this.defaultLeftAxisOptions][this.side], w(G[this.coll],
                    a))
        }, defaultLabelFormatter: function() {
            var a = this.axis, b = this.value, c = a.categories, d = this.dateTimeLabelFormat, e = G.lang.numericSymbols, f = e && e.length, g, h = a.options.labels.format, a = a.isLog ? b : a.tickInterval;
            if (h)
                g = Ja(h, this);
            else if (c)
                g = b;
            else if (d)
                g = ra(d, b);
            else if (f && a >= 1E3)
                for (; f-- && g === s; )
                    c = Math.pow(1E3, f + 1), a >= c && e[f] !== null && (g = Ia(b / c, -1) + e[f]);
            g === s && (g = b >= 1E4 ? Ia(b, 0) : Ia(b, -1, s, ""));
            return g
        }, getSeriesExtremes: function() {
            var a = this, b = a.chart;
            a.hasVisibleSeries = !1;
            a.dataMin = a.dataMax = null;
            a.buildStacks &&
                    a.buildStacks();
            q(a.series, function(c) {
                if (c.visible || !b.options.chart.ignoreHiddenSeries) {
                    var d;
                    d = c.options.threshold;
                    var e;
                    a.hasVisibleSeries = !0;
                    a.isLog && d <= 0 && (d = null);
                    if (a.isXAxis) {
                        if (d = c.xData, d.length)
                            a.dataMin = x(n(a.dataMin, d[0]), Sa(d)), a.dataMax = v(n(a.dataMax, d[0]), Aa(d))
                    } else {
                        c.getExtremes();
                        e = c.dataMax;
                        c = c.dataMin;
                        if (r(c) && r(e))
                            a.dataMin = x(n(a.dataMin, c), c), a.dataMax = v(n(a.dataMax, e), e);
                        if (r(d))
                            if (a.dataMin >= d)
                                a.dataMin = d, a.ignoreMinPadding = !0;
                            else if (a.dataMax < d)
                                a.dataMax = d, a.ignoreMaxPadding =
                                        !0
                    }
                }
            })
        }, translate: function(a, b, c, d, e, f) {
            var g = 1, h = 0, i = d ? this.oldTransA : this.transA, d = d ? this.oldMin : this.min, k = this.minPixelPadding, e = (this.options.ordinal || this.isLog && e) && this.lin2val;
            if (!i)
                i = this.transA;
            if (c)
                g *= -1, h = this.len;
            this.reversed && (g *= -1, h -= g * (this.sector || this.len));
            b ? (a = a * g + h, a -= k, a = a / i + d, e && (a = this.lin2val(a))) : (e && (a = this.val2lin(a)), f === "between" && (f = 0.5), a = g * (a - d) * i + h + g * k + (za(f) ? i * f * this.pointRange : 0));
            return a
        }, toPixels: function(a, b) {
            return this.translate(a, !1, !this.horiz, null, !0) +
                    (b ? 0 : this.pos)
        }, toValue: function(a, b) {
            return this.translate(a - (b ? 0 : this.pos), !0, !this.horiz, null, !0)
        }, getPlotLinePath: function(a, b, c, d, e) {
            var f = this.chart, g = this.left, h = this.top, i, k, j = c && f.oldChartHeight || f.chartHeight, l = c && f.oldChartWidth || f.chartWidth, m;
            i = this.transB;
            e = n(e, this.translate(a, null, null, c));
            a = c = t(e + i);
            i = k = t(j - e - i);
            if (isNaN(e))
                m = !0;
            else if (this.horiz) {
                if (i = h, k = j - this.bottom, a < g || a > g + this.width)
                    m = !0
            } else if (a = g, c = l - this.right, i < h || i > h + this.height)
                m = !0;
            return m && !d ? null : f.renderer.crispLine(["M",
                a, i, "L", c, k], b || 1)
        }, getLinearTickPositions: function(a, b, c) {
            for (var d, b = ea(T(b / a) * a), c = ea(Wa(c / a) * a), e = []; b <= c; ) {
                e.push(b);
                b = ea(b + a);
                if (b === d)
                    break;
                d = b
            }
            return e
        }, getMinorTickPositions: function() {
            var a = this.options, b = this.tickPositions, c = this.minorTickInterval, d = [], e;
            if (this.isLog) {
                e = b.length;
                for (a = 1; a < e; a++)
                    d = d.concat(this.getLogTickPositions(c, b[a - 1], b[a], !0))
            } else if (this.isDatetimeAxis && a.minorTickInterval === "auto")
                d = d.concat(this.getTimeTicks(this.normalizeTimeTickInterval(c), this.min, this.max,
                        a.startOfWeek)), d[0] < this.min && d.shift();
            else
                for (b = this.min + (b[0] - this.min) % c; b <= this.max; b += c)
                    d.push(b);
            return d
        }, adjustForMinRange: function() {
            var a = this.options, b = this.min, c = this.max, d, e = this.dataMax - this.dataMin >= this.minRange, f, g, h, i, k;
            if (this.isXAxis && this.minRange === s && !this.isLog)
                r(a.min) || r(a.max) ? this.minRange = null : (q(this.series, function(a) {
                    i = a.xData;
                    for (g = k = a.xIncrement?1:i.length - 1; g > 0; g--)
                        if (h = i[g] - i[g - 1], f === s || h < f)
                            f = h
                }), this.minRange = x(f * 5, this.dataMax - this.dataMin));
            if (c - b < this.minRange) {
                var j =
                        this.minRange;
                d = (j - c + b) / 2;
                d = [b - d, n(a.min, b - d)];
                if (e)
                    d[2] = this.dataMin;
                b = Aa(d);
                c = [b + j, n(a.max, b + j)];
                if (e)
                    c[2] = this.dataMax;
                c = Sa(c);
                c - b < j && (d[0] = c - j, d[1] = n(a.min, c - j), b = Aa(d))
            }
            this.min = b;
            this.max = c
        }, setAxisTranslation: function(a) {
            var b = this, c = b.max - b.min, d = b.axisPointRange || 0, e, f = 0, g = 0, h = b.linkedParent, i = !!b.categories, k = b.transA;
            if (b.isXAxis || i || d)
                h ? (f = h.minPointOffset, g = h.pointRangePadding) : q(b.series, function(a) {
                    var h = v(b.isXAxis ? a.pointRange : b.axisPointRange || 0, +i), k = a.options.pointPlacement, o =
                            a.closestPointRange;
                    h > c && (h = 0);
                    d = v(d, h);
                    f = v(f, ka(k) ? 0 : h / 2);
                    g = v(g, k === "on" ? 0 : h);
                    !a.noSharedTooltip && r(o) && (e = r(e) ? x(e, o) : o)
                }), h = b.ordinalSlope && e ? b.ordinalSlope / e : 1, b.minPointOffset = f *= h, b.pointRangePadding = g *= h, b.pointRange = x(d, c), b.closestPointRange = e;
            if (a)
                b.oldTransA = k;
            b.translationSlope = b.transA = k = b.len / (c + g || 1);
            b.transB = b.horiz ? b.left : b.bottom;
            b.minPixelPadding = k * f
        }, setTickPositions: function(a) {
            var b = this, c = b.chart, d = b.options, e = b.isLog, f = b.isDatetimeAxis, g = b.isXAxis, h = b.isLinked, i = b.options.tickPositioner,
                    k = d.maxPadding, j = d.minPadding, l = d.tickInterval, m = d.minTickInterval, o = d.tickPixelInterval, p, B = b.categories;
            h ? (b.linkedParent = c[b.coll][d.linkedTo], c = b.linkedParent.getExtremes(), b.min = n(c.min, c.dataMin), b.max = n(c.max, c.dataMax), d.type !== b.linkedParent.options.type && na(11, 1)) : (b.min = n(b.userMin, d.min, b.dataMin), b.max = n(b.userMax, d.max, b.dataMax));
            if (e)
                !a && x(b.min, n(b.dataMin, b.min)) <= 0 && na(10, 1), b.min = ea(Ga(b.min)), b.max = ea(Ga(b.max));
            if (b.range && r(b.max))
                b.userMin = b.min = v(b.min, b.max - b.range), b.userMax =
                        b.max, b.range = null;
            b.beforePadding && b.beforePadding();
            b.adjustForMinRange();
            if (!B && !b.axisPointRange && !b.usePercentage && !h && r(b.min) && r(b.max) && (c = b.max - b.min)) {
                if (!r(d.min) && !r(b.userMin) && j && (b.dataMin < 0 || !b.ignoreMinPadding))
                    b.min -= c * j;
                if (!r(d.max) && !r(b.userMax) && k && (b.dataMax > 0 || !b.ignoreMaxPadding))
                    b.max += c * k
            }
            b.min === b.max || b.min === void 0 || b.max === void 0 ? b.tickInterval = 1 : h && !l && o === b.linkedParent.options.tickPixelInterval ? b.tickInterval = b.linkedParent.tickInterval : (b.tickInterval = n(l, B ? 1 : (b.max -
                    b.min) * o / v(b.len, o)), !r(l) && b.len < o && !this.isRadial && !this.isLog && !B && d.startOnTick && d.endOnTick && (p = !0, b.tickInterval /= 4));
            g && !a && q(b.series, function(a) {
                a.processData(b.min !== b.oldMin || b.max !== b.oldMax)
            });
            b.setAxisTranslation(!0);
            b.beforeSetTickPositions && b.beforeSetTickPositions();
            if (b.postProcessTickInterval)
                b.tickInterval = b.postProcessTickInterval(b.tickInterval);
            if (b.pointRange)
                b.tickInterval = v(b.pointRange, b.tickInterval);
            if (!l && b.tickInterval < m)
                b.tickInterval = m;
            if (!f && !e && !l)
                b.tickInterval =
                        sb(b.tickInterval, null, rb(b.tickInterval), d);
            b.minorTickInterval = d.minorTickInterval === "auto" && b.tickInterval ? b.tickInterval / 5 : d.minorTickInterval;
            b.tickPositions = a = d.tickPositions ? [].concat(d.tickPositions) : i && i.apply(b, [b.min, b.max]);
            if (!a)
                !b.ordinalPositions && (b.max - b.min) / b.tickInterval > v(2 * b.len, 200) && na(19, !0), a = f ? b.getTimeTicks(b.normalizeTimeTickInterval(b.tickInterval, d.units), b.min, b.max, d.startOfWeek, b.ordinalPositions, b.closestPointRange, !0) : e ? b.getLogTickPositions(b.tickInterval, b.min,
                        b.max) : b.getLinearTickPositions(b.tickInterval, b.min, b.max), p && a.splice(1, a.length - 2), b.tickPositions = a;
            if (!h)
                e = a[0], f = a[a.length - 1], h = b.minPointOffset || 0, d.startOnTick ? b.min = e : b.min - h > e && a.shift(), d.endOnTick ? b.max = f : b.max + h < f && a.pop(), a.length === 1 && (d = O(b.max || 1) * 0.001, b.min -= d, b.max += d)
        }, setMaxTicks: function() {
            var a = this.chart, b = a.maxTicks || {}, c = this.tickPositions, d = this._maxTicksKey = [this.coll, this.pos, this.len].join("-");
            if (!this.isLinked && !this.isDatetimeAxis && c && c.length > (b[d] || 0) && this.options.alignTicks !==
                    !1)
                b[d] = c.length;
            a.maxTicks = b
        }, adjustTickAmount: function() {
            var a = this._maxTicksKey, b = this.tickPositions, c = this.chart.maxTicks;
            if (c && c[a] && !this.isDatetimeAxis && !this.categories && !this.isLinked && this.options.alignTicks !== !1 && this.min !== s) {
                var d = this.tickAmount, e = b.length;
                this.tickAmount = a = c[a];
                if (e < a) {
                    for (; b.length < a; )
                        b.push(ea(b[b.length - 1] + this.tickInterval));
                    this.transA *= (e - 1) / (a - 1);
                    this.max = b[b.length - 1]
                }
                if (r(d) && a !== d)
                    this.isDirty = !0
            }
        }, setScale: function() {
            var a = this.stacks, b, c, d, e;
            this.oldMin =
                    this.min;
            this.oldMax = this.max;
            this.oldAxisLength = this.len;
            this.setAxisSize();
            e = this.len !== this.oldAxisLength;
            q(this.series, function(a) {
                if (a.isDirtyData || a.isDirty || a.xAxis.isDirty)
                    d = !0
            });
            if (e || d || this.isLinked || this.forceRedraw || this.userMin !== this.oldUserMin || this.userMax !== this.oldUserMax) {
                if (!this.isXAxis)
                    for (b in a)
                        for (c in a[b])
                            a[b][c].total = null, a[b][c].cum = 0;
                this.forceRedraw = !1;
                this.getSeriesExtremes();
                this.setTickPositions();
                this.oldUserMin = this.userMin;
                this.oldUserMax = this.userMax;
                if (!this.isDirty)
                    this.isDirty =
                            e || this.min !== this.oldMin || this.max !== this.oldMax
            } else if (!this.isXAxis) {
                if (this.oldStacks)
                    a = this.stacks = this.oldStacks;
                for (b in a)
                    for (c in a[b])
                        a[b][c].cum = a[b][c].total
            }
            this.setMaxTicks()
        }, setExtremes: function(a, b, c, d, e) {
            var f = this, g = f.chart, c = n(c, !0), e = u(e, {min: a, max: b});
            P(f, "setExtremes", e, function() {
                f.userMin = a;
                f.userMax = b;
                f.eventArgs = e;
                f.isDirtyExtremes = !0;
                c && g.redraw(d)
            })
        }, zoom: function(a, b) {
            var c = this.dataMin, d = this.dataMax, e = this.options;
            this.allowZoomOutside || (r(c) && a <= x(c, n(e.min, c)) &&
                    (a = s), r(d) && b >= v(d, n(e.max, d)) && (b = s));
            this.displayBtn = a !== s || b !== s;
            this.setExtremes(a, b, !1, s, {trigger: "zoom"});
            return!0
        }, setAxisSize: function() {
            var a = this.chart, b = this.options, c = b.offsetLeft || 0, d = b.offsetRight || 0, e = this.horiz, f, g;
            this.left = g = n(b.left, a.plotLeft + c);
            this.top = f = n(b.top, a.plotTop);
            this.width = c = n(b.width, a.plotWidth - c + d);
            this.height = b = n(b.height, a.plotHeight);
            this.bottom = a.chartHeight - b - f;
            this.right = a.chartWidth - c - g;
            this.len = v(e ? c : b, 0);
            this.pos = e ? g : f
        }, getExtremes: function() {
            var a = this.isLog;
            return{min: a ? ea(la(this.min)) : this.min, max: a ? ea(la(this.max)) : this.max, dataMin: this.dataMin, dataMax: this.dataMax, userMin: this.userMin, userMax: this.userMax}
        }, getThreshold: function(a) {
            var b = this.isLog, c = b ? la(this.min) : this.min, b = b ? la(this.max) : this.max;
            c > a || a === null ? a = c : b < a && (a = b);
            return this.translate(a, 0, 1, 0, 1)
        }, autoLabelAlign: function(a) {
            a = (n(a, 0) - this.side * 90 + 720) % 360;
            return a > 15 && a < 165 ? "right" : a > 195 && a < 345 ? "left" : "center"
        }, getOffset: function() {
            var a = this, b = a.chart, c = b.renderer, d = a.options, e = a.tickPositions,
                    f = a.ticks, g = a.horiz, h = a.side, i = b.inverted ? [1, 0, 3, 2][h] : h, k, j = 0, l, m = 0, o = d.title, p = d.labels, B = 0, Oa = b.axisOffset, z = b.clipOffset, K = [-1, 1, 1, -1][h], t, u = 1, w = n(p.maxStaggerLines, 5), x, y, D, E;
            a.hasData = k = a.hasVisibleSeries || r(a.min) && r(a.max) && !!e;
            a.showAxis = b = k || n(d.showEmpty, !0);
            a.staggerLines = a.horiz && p.staggerLines;
            if (!a.axisGroup)
                a.gridGroup = c.g("grid").attr({zIndex: d.gridZIndex || 1}).add(), a.axisGroup = c.g("axis").attr({zIndex: d.zIndex || 2}).add(), a.labelGroup = c.g("axis-labels").attr({zIndex: p.zIndex || 7}).addClass("highcharts-" +
                        a.coll.toLowerCase() + "-labels").add();
            if (k || a.isLinked) {
                a.labelAlign = n(p.align || a.autoLabelAlign(p.rotation));
                q(e, function(b) {
                    f[b] ? f[b].addLabel() : f[b] = new $a(a, b)
                });
                if (a.horiz && !a.staggerLines && w && !p.rotation) {
                    for (t = a.reversed ? [].concat(e).reverse() : e; u < w; ) {
                        k = [];
                        x = !1;
                        for (p = 0; p < t.length; p++)
                            y = t[p], D = (D = f[y].label && f[y].label.getBBox()) ? D.width : 0, E = p % u, D && (y = a.translate(y), k[E] !== s && y < k[E] && (x = !0), k[E] = y + D);
                        if (x)
                            u++;
                        else
                            break
                    }
                    if (u > 1)
                        a.staggerLines = u
                }
                q(e, function(b) {
                    if (h === 0 || h === 2 || {1: "left", 3: "right"}[h] ===
                            a.labelAlign)
                        B = v(f[b].getLabelSize(), B)
                });
                if (a.staggerLines)
                    B *= a.staggerLines, a.labelOffset = B
            } else
                for (t in f)
                    f[t].destroy(), delete f[t];
            if (o && o.text && o.enabled !== !1) {
                if (!a.axisTitle)
                    a.axisTitle = c.text(o.text, 0, 0, o.useHTML).attr({zIndex: 7, rotation: o.rotation || 0, align: o.textAlign || {low: "left", middle: "center", high: "right"}[o.align]}).addClass("highcharts-" + this.coll.toLowerCase() + "-title").css(o.style).add(a.axisGroup), a.axisTitle.isNew = !0;
                if (b)
                    j = a.axisTitle.getBBox()[g ? "height" : "width"], m = n(o.margin,
                            g ? 5 : 10), l = o.offset;
                a.axisTitle[b ? "show" : "hide"]()
            }
            a.offset = K * n(d.offset, Oa[h]);
            a.axisTitleMargin = n(l, B + m + (h !== 2 && B && K * d.labels[g ? "y" : "x"]));
            Oa[h] = v(Oa[h], a.axisTitleMargin + j + K * a.offset);
            z[i] = v(z[i], T(d.lineWidth / 2) * 2)
        }, getLinePath: function(a) {
            var b = this.chart, c = this.opposite, d = this.offset, e = this.horiz, f = this.left + (c ? this.width : 0) + d, d = b.chartHeight - this.bottom - (c ? this.height : 0) + d;
            c && (a *= -1);
            return b.renderer.crispLine(["M", e ? this.left : f, e ? d : this.top, "L", e ? b.chartWidth - this.right : f, e ? d : b.chartHeight -
                        this.bottom], a)
        }, getTitlePosition: function() {
            var a = this.horiz, b = this.left, c = this.top, d = this.len, e = this.options.title, f = a ? b : c, g = this.opposite, h = this.offset, i = y(e.style.fontSize || 12), d = {low: f + (a ? 0 : d), middle: f + d / 2, high: f + (a ? d : 0)}[e.align], b = (a ? c + this.height : b) + (a ? 1 : -1) * (g ? -1 : 1) * this.axisTitleMargin + (this.side === 2 ? i : 0);
            return{x: a ? d : b + (g ? this.width : 0) + h + (e.x || 0), y: a ? b - (g ? this.height : 0) + h : d + (e.y || 0)}
        }, render: function() {
            var a = this, b = a.horiz, c = a.reversed, d = a.chart, e = d.renderer, f = a.options, g = a.isLog, h = a.isLinked,
                    i = a.tickPositions, k, j = a.axisTitle, l = a.ticks, m = a.minorTicks, o = a.alternateBands, p = f.stackLabels, B = f.alternateGridColor, n = a.tickmarkOffset, z = f.lineWidth, K = d.hasRendered && r(a.oldMin) && !isNaN(a.oldMin), t = a.hasData, v = a.showAxis, u, w = f.labels.overflow, x = a.justifyLabels = b && w !== !1, y;
            a.labelEdge.length = 0;
            a.justifyToPlot = w === "justify";
            q([l, m, o], function(a) {
                for (var b in a)
                    a[b].isActive = !1
            });
            if (t || h)
                if (a.minorTickInterval && !a.categories && q(a.getMinorTickPositions(), function(b) {
                    m[b] || (m[b] = new $a(a, b, "minor"));
                    K && m[b].isNew && m[b].render(null, !0);
                    m[b].render(null, !1, 1)
                }), i.length && (k = i.slice(), (b && c || !b && !c) && k.reverse(), x && (k = k.slice(1).concat([k[0]])), q(k, function(b, c) {
                    x && (c = c === k.length - 1 ? 0 : c + 1);
                    if (!h || b >= a.min && b <= a.max)
                        l[b] || (l[b] = new $a(a, b)), K && l[b].isNew && l[b].render(c, !0, 0.1), l[b].render(c, !1, 1)
                }), n && a.min === 0 && (l[-1] || (l[-1] = new $a(a, -1, null, !0)), l[-1].render(-1))), B && q(i, function(b, c) {
                    if (c % 2 === 0 && b < a.max)
                        o[b] || (o[b] = new Q.PlotLineOrBand(a)), u = b + n, y = i[c + 1] !== s ? i[c + 1] + n : a.max, o[b].options = {from: g ?
                                    la(u) : u, to: g ? la(y) : y, color: B}, o[b].render(), o[b].isActive = !0
                }), !a._addedPlotLB)
                    q((f.plotLines || []).concat(f.plotBands || []), function(b) {
                        a.addPlotBandOrLine(b)
                    }), a._addedPlotLB = !0;
            q([l, m, o], function(a) {
                var b, c, e = [], f = Ba ? Ba.duration || 500 : 0, g = function() {
                    for (c = e.length; c--; )
                        a[e[c]] && !a[e[c]].isActive && (a[e[c]].destroy(), delete a[e[c]])
                };
                for (b in a)
                    if (!a[b].isActive)
                        a[b].render(b, !1, 0), a[b].isActive = !1, e.push(b);
                a === o || !d.hasRendered || !f ? g() : f && setTimeout(g, f)
            });
            if (z)
                b = a.getLinePath(z), a.axisLine ? a.axisLine.animate({d: b}) :
                        a.axisLine = e.path(b).attr({stroke: f.lineColor, "stroke-width": z, zIndex: 7}).add(a.axisGroup), a.axisLine[v ? "show" : "hide"]();
            if (j && v)
                j[j.isNew ? "attr" : "animate"](a.getTitlePosition()), j.isNew = !1;
            p && p.enabled && a.renderStackTotals();
            a.isDirty = !1
        }, redraw: function() {
            var a = this.chart.pointer;
            a && a.reset(!0);
            this.render();
            q(this.plotLinesAndBands, function(a) {
                a.render()
            });
            q(this.series, function(a) {
                a.isDirty = !0
            })
        }, destroy: function(a) {
            var b = this, c = b.stacks, d, e = b.plotLinesAndBands;
            a || S(b);
            for (d in c)
                Ka(c[d]), c[d] =
                        null;
            q([b.ticks, b.minorTicks, b.alternateBands], function(a) {
                Ka(a)
            });
            for (a = e.length; a--; )
                e[a].destroy();
            q("stackTotalGroup,axisLine,axisTitle,axisGroup,cross,gridGroup,labelGroup".split(","), function(a) {
                b[a] && (b[a] = b[a].destroy())
            });
            this.cross && this.cross.destroy()
        }, drawCrosshair: function(a, b) {
            if (this.crosshair)
                if ((r(b) || !n(this.crosshair.snap, !0)) === !1)
                    this.hideCrosshair();
                else {
                    var c, d = this.crosshair, e = d.animation;
                    n(d.snap, !0) ? r(b) && (c = this.chart.inverted != this.horiz ? b.plotX : this.len - b.plotY) : c = this.horiz ?
                            a.chartX - this.pos : this.len - a.chartY + this.pos;
                    c = this.isRadial ? this.getPlotLinePath(this.isXAxis ? b.x : n(b.stackY, b.y)) : this.getPlotLinePath(null, null, null, null, c);
                    if (c === null)
                        this.hideCrosshair();
                    else if (this.cross)
                        this.cross.attr({visibility: "visible"})[e ? "animate" : "attr"]({d: c}, e);
                    else {
                        e = {"stroke-width": d.width || 1, stroke: d.color || "#C0C0C0", zIndex: d.zIndex || 2};
                        if (d.dashStyle)
                            e.dashstyle = d.dashStyle;
                        this.cross = this.chart.renderer.path(c).attr(e).add()
                    }
                }
        }, hideCrosshair: function() {
            this.cross && this.cross.hide()
        }};
    u(N.prototype, {getPlotBandPath: function(a, b) {
            var c = this.getPlotLinePath(b), d = this.getPlotLinePath(a);
            d && c ? d.push(c[4], c[5], c[1], c[2]) : d = null;
            return d
        }, addPlotBand: function(a) {
            this.addPlotBandOrLine(a, "plotBands")
        }, addPlotLine: function(a) {
            this.addPlotBandOrLine(a, "plotLines")
        }, addPlotBandOrLine: function(a, b) {
            var c = (new Q.PlotLineOrBand(this, a)).render(), d = this.userOptions;
            c && (b && (d[b] = d[b] || [], d[b].push(a)), this.plotLinesAndBands.push(c));
            return c
        }, removePlotBandOrLine: function(a) {
            for (var b = this.plotLinesAndBands,
                    c = this.options, d = this.userOptions, e = b.length; e--; )
                b[e].id === a && b[e].destroy();
            q([c.plotLines || [], d.plotLines || [], c.plotBands || [], d.plotBands || []], function(b) {
                for (e = b.length; e--; )
                    b[e].id === a && ma(b, b[e])
            })
        }});
    N.prototype.getTimeTicks = function(a, b, c, d) {
        var e = [], f = {}, g = G.global.useUTC, h, i = new Date(b - La), k = a.unitRange, j = a.count;
        if (r(b)) {
            k >= A.second && (i.setMilliseconds(0), i.setSeconds(k >= A.minute ? 0 : j * T(i.getSeconds() / j)));
            if (k >= A.minute)
                i[Mb](k >= A.hour ? 0 : j * T(i[ub]() / j));
            if (k >= A.hour)
                i[Nb](k >= A.day ? 0 : j *
                        T(i[vb]() / j));
            if (k >= A.day)
                i[xb](k >= A.month ? 1 : j * T(i[Va]() / j));
            k >= A.month && (i[Ob](k >= A.year ? 0 : j * T(i[jb]() / j)), h = i[kb]());
            k >= A.year && (h -= h % j, i[Pb](h));
            if (k === A.week)
                i[xb](i[Va]() - i[wb]() + n(d, 1));
            b = 1;
            La && (i = new Date(i.getTime() + La));
            h = i[kb]();
            for (var d = i.getTime(), l = i[jb](), m = i[Va](), o = g ? La : (864E5 + i.getTimezoneOffset() * 6E4) % 864E5; d < c; )
                e.push(d), k === A.year ? d = ib(h + b * j, 0) : k === A.month ? d = ib(h, l + b * j) : !g && (k === A.day || k === A.week) ? d = ib(h, l, m + b * j * (k === A.day ? 1 : 7)) : d += k * j, b++;
            e.push(d);
            q(Cb(e, function(a) {
                return k <=
                        A.hour && a % A.day === o
            }), function(a) {
                f[a] = "day"
            })
        }
        e.info = u(a, {higherRanks: f, totalRange: k * j});
        return e
    };
    N.prototype.normalizeTimeTickInterval = function(a, b) {
        var c = b || [["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]], ["second", [1, 2, 5, 10, 15, 30]], ["minute", [1, 2, 5, 10, 15, 30]], ["hour", [1, 2, 3, 4, 6, 8, 12]], ["day", [1, 2]], ["week", [1, 2]], ["month", [1, 2, 3, 4, 6]], ["year", null]], d = c[c.length - 1], e = A[d[0]], f = d[1], g;
        for (g = 0; g < c.length; g++)
            if (d = c[g], e = A[d[0]], f = d[1], c[g + 1] && a <= (e * f[f.length - 1] + A[c[g + 1][0]]) / 2)
                break;
        e === A.year &&
                a < 5 * e && (f = [1, 2, 5]);
        c = sb(a / e, f, d[0] === "year" ? v(rb(a / e), 1) : 1);
        return{unitRange: e, count: c, unitName: d[0]}
    };
    N.prototype.getLogTickPositions = function(a, b, c, d) {
        var e = this.options, f = this.len, g = [];
        if (!d)
            this._minorAutoInterval = null;
        if (a >= 0.5)
            a = t(a), g = this.getLinearTickPositions(a, b, c);
        else if (a >= 0.08)
            for (var f = T(b), h, i, k, j, l, e = a > 0.3 ? [1, 2, 4] : a > 0.15 ? [1, 2, 4, 6, 8] : [1, 2, 3, 4, 5, 6, 7, 8, 9]; f < c + 1 && !l; f++) {
                i = e.length;
                for (h = 0; h < i && !l; h++)
                    k = Ga(la(f) * e[h]), k > b && (!d || j <= c) && g.push(j), j > c && (l = !0), j = k
            }
        else if (b = la(b), c = la(c),
                a = e[d ? "minorTickInterval" : "tickInterval"], a = n(a === "auto" ? null : a, this._minorAutoInterval, (c - b) * (e.tickPixelInterval / (d ? 5 : 1)) / ((d ? f / this.tickPositions.length : f) || 1)), a = sb(a, null, rb(a)), g = va(this.getLinearTickPositions(a, b, c), Ga), !d)
            this._minorAutoInterval = a / 5;
        if (!d)
            this.tickInterval = a;
        return g
    };
    var Gb = Q.Tooltip = function() {
        this.init.apply(this, arguments)
    };
    Gb.prototype = {init: function(a, b) {
            var c = b.borderWidth, d = b.style, e = y(d.padding);
            this.chart = a;
            this.options = b;
            this.crosshairs = [];
            this.now = {x: 0, y: 0};
            this.isHidden =
                    !0;
            this.label = a.renderer.label("", 0, 0, b.shape, null, null, b.useHTML, null, "tooltip").attr({padding: e, fill: b.backgroundColor, "stroke-width": c, r: b.borderRadius, zIndex: 8}).css(d).css({padding: 0}).add().attr({y: -9999});
            ga || this.label.shadow(b.shadow);
            this.shared = b.shared
        }, destroy: function() {
            if (this.label)
                this.label = this.label.destroy();
            clearTimeout(this.hideTimer);
            clearTimeout(this.tooltipTimeout)
        }, move: function(a, b, c, d) {
            var e = this, f = e.now, g = e.options.animation !== !1 && !e.isHidden;
            u(f, {x: g ? (2 * f.x + a) / 3 : a, y: g ?
                        (f.y + b) / 2 : b, anchorX: g ? (2 * f.anchorX + c) / 3 : c, anchorY: g ? (f.anchorY + d) / 2 : d});
            e.label.attr(f);
            if (g && (O(a - f.x) > 1 || O(b - f.y) > 1))
                clearTimeout(this.tooltipTimeout), this.tooltipTimeout = setTimeout(function() {
                    e && e.move(a, b, c, d)
                }, 32)
        }, hide: function() {
            var a = this, b;
            clearTimeout(this.hideTimer);
            if (!this.isHidden)
                b = this.chart.hoverPoints, this.hideTimer = setTimeout(function() {
                    a.label.fadeOut();
                    a.isHidden = !0
                }, n(this.options.hideDelay, 500)), b && q(b, function(a) {
                    a.setState()
                }), this.chart.hoverPoints = null
        }, getAnchor: function(a,
                b) {
            var c, d = this.chart, e = d.inverted, f = d.plotTop, g = 0, h = 0, i, a = ia(a);
            c = a[0].tooltipPos;
            this.followPointer && b && (b.chartX === s && (b = d.pointer.normalize(b)), c = [b.chartX - d.plotLeft, b.chartY - f]);
            c || (q(a, function(a) {
                i = a.series.yAxis;
                g += a.plotX;
                h += (a.plotLow ? (a.plotLow + a.plotHigh) / 2 : a.plotY) + (!e && i ? i.top - f : 0)
            }), g /= a.length, h /= a.length, c = [e ? d.plotWidth - h : g, this.shared && !e && a.length > 1 && b ? b.chartY - f : e ? d.plotHeight - g : h]);
            return va(c, t)
        }, getPosition: function(a, b, c) {
            var d = this.chart, e = d.plotLeft, f = d.plotTop, g = d.plotWidth,
                    h = d.plotHeight, i = n(this.options.distance, 12), k = isNaN(c.plotX) ? 0 : c.plotX, c = c.plotY, d = k + e + (d.inverted ? i : -a - i), j = c - b + f + 15, l;
            d < 7 && (d = e + v(k, 0) + i);
            d + a > e + g && (d -= d + a - (e + g), j = c - b + f - i, l = !0);
            j < f + 5 && (j = f + 5, l && c >= j && c <= j + b && (j = c + f + i));
            j + b > f + h && (j = v(f, f + h - b - i));
            return{x: d, y: j}
        }, defaultFormatter: function(a) {
            var b = this.points || ia(this), c = b[0].series, d;
            d = [a.tooltipHeaderFormatter(b[0])];
            q(b, function(a) {
                c = a.series;
                d.push(c.tooltipFormatter && c.tooltipFormatter(a) || a.point.tooltipFormatter(c.tooltipOptions.pointFormat))
            });
            d.push(a.options.footerFormat || "");
            return d.join("")
        }, refresh: function(a, b) {
            var c = this.chart, d = this.label, e = this.options, f, g, h = {}, i, k = [];
            i = e.formatter || this.defaultFormatter;
            var h = c.hoverPoints, j, l = this.shared;
            clearTimeout(this.hideTimer);
            this.followPointer = ia(a)[0].series.tooltipOptions.followPointer;
            g = this.getAnchor(a, b);
            f = g[0];
            g = g[1];
            l && (!a.series || !a.series.noSharedTooltip) ? (c.hoverPoints = a, h && q(h, function(a) {
                a.setState()
            }), q(a, function(a) {
                a.setState("hover");
                k.push(a.getLabelConfig())
            }), h = {x: a[0].category,
                y: a[0].y}, h.points = k, a = a[0]) : h = a.getLabelConfig();
            i = i.call(h, this);
            h = a.series;
            i === !1 ? this.hide() : (this.isHidden && (eb(d), d.attr("opacity", 1).show()), d.attr({text: i}), j = e.borderColor || a.color || h.color || "#606060", d.attr({stroke: j}), this.updatePosition({plotX: f, plotY: g}), this.isHidden = !1);
            P(c, "tooltipRefresh", {text: i, x: f + c.plotLeft, y: g + c.plotTop, borderColor: j})
        }, updatePosition: function(a) {
            var b = this.chart, c = this.label, c = (this.options.positioner || this.getPosition).call(this, c.width, c.height, a);
            this.move(t(c.x),
                    t(c.y), a.plotX + b.plotLeft, a.plotY + b.plotTop)
        }, tooltipHeaderFormatter: function(a) {
            var b = a.series, c = b.tooltipOptions, d = c.dateTimeLabelFormats, e = c.xDateFormat, f = b.xAxis, g = f && f.options.type === "datetime" && za(a.key), c = c.headerFormat, f = f && f.closestPointRange, h;
            if (g && !e) {
                if (f)
                    for (h in A) {
                        if (A[h] >= f || A[h] <= A.day && a.key % A[h] > 0) {
                            e = d[h];
                            break
                        }
                    }
                else
                    e = d.day;
                e = e || d.year
            }
            g && e && (c = c.replace("{point.key}", "{point.key:" + e + "}"));
            return Ja(c, {point: a, series: b})
        }};
    var ja;
    bb = C.documentElement.ontouchstart !== s;
    var Ya = Q.Pointer =
            function(a, b) {
                this.init(a, b)
            };
    Ya.prototype = {init: function(a, b) {
            var c = b.chart, d = c.events, e = ga ? "" : c.zoomType, c = a.inverted, f;
            this.options = b;
            this.chart = a;
            this.zoomX = f = /x/.test(e);
            this.zoomY = e = /y/.test(e);
            this.zoomHor = f && !c || e && c;
            this.zoomVert = e && !c || f && c;
            this.runChartClick = d && !!d.click;
            this.pinchDown = [];
            this.lastValidTouch = {};
            if (Q.Tooltip && b.tooltip.enabled)
                a.tooltip = new Gb(a, b.tooltip);
            this.setDOMEvents()
        }, normalize: function(a, b) {
            var c, d, a = a || U.event, a = bc(a);
            if (!a.target)
                a.target = a.srcElement;
            d = a.touches ?
                    a.touches.item(0) : a;
            if (!b)
                this.chartPosition = b = ac(this.chart.container);
            d.pageX === s ? (c = v(a.x, a.clientX - b.left), d = a.y) : (c = d.pageX - b.left, d = d.pageY - b.top);
            return u(a, {chartX: t(c), chartY: t(d)})
        }, getCoordinates: function(a) {
            var b = {xAxis: [], yAxis: []};
            q(this.chart.axes, function(c) {
                b[c.isXAxis ? "xAxis" : "yAxis"].push({axis: c, value: c.toValue(a[c.horiz ? "chartX" : "chartY"])})
            });
            return b
        }, getIndex: function(a) {
            var b = this.chart;
            return b.inverted ? b.plotHeight + b.plotTop - a.chartY : a.chartX - b.plotLeft
        }, runPointActions: function(a) {
            var b =
                    this.chart, c = b.series, d = b.tooltip, e, f, g = b.hoverPoint, h = b.hoverSeries, i, k, j = b.chartWidth, l = this.getIndex(a);
            if (d && this.options.tooltip.shared && (!h || !h.noSharedTooltip)) {
                f = [];
                i = c.length;
                for (k = 0; k < i; k++)
                    if (c[k].visible && c[k].options.enableMouseTracking !== !1 && !c[k].noSharedTooltip && c[k].singularTooltips !== !0 && c[k].tooltipPoints.length && (e = c[k].tooltipPoints[l]) && e.series)
                        e._dist = O(l - e.clientX), j = x(j, e._dist), f.push(e);
                for (i = f.length; i--; )
                    f[i]._dist > j && f.splice(i, 1);
                if (f.length && f[0].clientX !== this.hoverX)
                    d.refresh(f,
                            a), this.hoverX = f[0].clientX
            }
            if (h && h.tracker && (!d || !d.followPointer)) {
                if ((e = h.tooltipPoints[l]) && e !== g)
                    e.onMouseOver(a)
            } else
                d && d.followPointer && !d.isHidden && (c = d.getAnchor([{}], a), d.updatePosition({plotX: c[0], plotY: c[1]}));
            if (d && !this._onDocumentMouseMove)
                this._onDocumentMouseMove = function(a) {
                    if (r(ja))
                        da[ja].pointer.onDocumentMouseMove(a)
                }, D(C, "mousemove", this._onDocumentMouseMove);
            q(b.axes, function(b) {
                b.drawCrosshair(a, n(e, g))
            })
        }, reset: function(a) {
            var b = this.chart, c = b.hoverSeries, d = b.hoverPoint,
                    e = b.tooltip, f = e && e.shared ? b.hoverPoints : d;
            (a = a && e && f) && ia(f)[0].plotX === s && (a = !1);
            if (a)
                e.refresh(f), d && d.setState(d.state, !0);
            else {
                if (d)
                    d.onMouseOut();
                if (c)
                    c.onMouseOut();
                e && e.hide();
                if (this._onDocumentMouseMove)
                    S(C, "mousemove", this._onDocumentMouseMove), this._onDocumentMouseMove = null;
                q(b.axes, function(a) {
                    a.hideCrosshair()
                });
                this.hoverX = null
            }
        }, scaleGroups: function(a, b) {
            var c = this.chart, d;
            q(c.series, function(e) {
                d = a || e.getPlotBox();
                e.xAxis && e.xAxis.zoomEnabled && (e.group.attr(d), e.markerGroup && (e.markerGroup.attr(d),
                        e.markerGroup.clip(b ? c.clipRect : null)), e.dataLabelsGroup && e.dataLabelsGroup.attr(d))
            });
            c.clipRect.attr(b || c.clipBox)
        }, dragStart: function(a) {
            var b = this.chart;
            b.mouseIsDown = a.type;
            b.cancelClick = !1;
            b.mouseDownX = this.mouseDownX = a.chartX;
            b.mouseDownY = this.mouseDownY = a.chartY
        }, drag: function(a) {
            var b = this.chart, c = b.options.chart, d = a.chartX, e = a.chartY, f = this.zoomHor, g = this.zoomVert, h = b.plotLeft, i = b.plotTop, k = b.plotWidth, j = b.plotHeight, l, m = this.mouseDownX, o = this.mouseDownY;
            d < h ? d = h : d > h + k && (d = h + k);
            e < i ? e = i : e >
                    i + j && (e = i + j);
            this.hasDragged = Math.sqrt(Math.pow(m - d, 2) + Math.pow(o - e, 2));
            if (this.hasDragged > 10) {
                l = b.isInsidePlot(m - h, o - i);
                if (b.hasCartesianSeries && (this.zoomX || this.zoomY) && l && !this.selectionMarker)
                    this.selectionMarker = b.renderer.rect(h, i, f ? 1 : k, g ? 1 : j, 0).attr({fill: c.selectionMarkerFill || "rgba(69,114,167,0.25)", zIndex: 7}).add();
                this.selectionMarker && f && (d -= m, this.selectionMarker.attr({width: O(d), x: (d > 0 ? 0 : d) + m}));
                this.selectionMarker && g && (d = e - o, this.selectionMarker.attr({height: O(d), y: (d > 0 ? 0 : d) + o}));
                l && !this.selectionMarker && c.panning && b.pan(a, c.panning)
            }
        }, drop: function(a) {
            var b = this.chart, c = this.hasPinched;
            if (this.selectionMarker) {
                var d = {xAxis: [], yAxis: [], originalEvent: a.originalEvent || a}, e = this.selectionMarker, f = e.x, g = e.y, h;
                if (this.hasDragged || c)
                    q(b.axes, function(a) {
                        if (a.zoomEnabled) {
                            var b = a.horiz, c = a.toValue(b ? f : g), b = a.toValue(b ? f + e.width : g + e.height);
                            !isNaN(c) && !isNaN(b) && (d[a.coll].push({axis: a, min: x(c, b), max: v(c, b)}), h = !0)
                        }
                    }), h && P(b, "selection", d, function(a) {
                        b.zoom(u(a, c ? {animation: !1} :
                                null))
                    });
                this.selectionMarker = this.selectionMarker.destroy();
                c && this.scaleGroups()
            }
            if (b)
                J(b.container, {cursor: b._cursor}), b.cancelClick = this.hasDragged > 10, b.mouseIsDown = this.hasDragged = this.hasPinched = !1, this.pinchDown = []
        }, onContainerMouseDown: function(a) {
            a = this.normalize(a);
            a.preventDefault && a.preventDefault();
            this.dragStart(a)
        }, onDocumentMouseUp: function(a) {
            r(ja) && da[ja].pointer.drop(a)
        }, onDocumentMouseMove: function(a) {
            var b = this.chart, c = this.chartPosition, d = b.hoverSeries, a = this.normalize(a, c);
            c && d && !this.inClass(a.target, "highcharts-tracker") && !b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop) && this.reset()
        }, onContainerMouseLeave: function() {
            var a = da[ja];
            if (a)
                a.pointer.reset(), a.pointer.chartPosition = null;
            ja = null
        }, onContainerMouseMove: function(a) {
            var b = this.chart;
            ja = b.index;
            a = this.normalize(a);
            b.mouseIsDown === "mousedown" && this.drag(a);
            (this.inClass(a.target, "highcharts-tracker") || b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop)) && !b.openMenu && this.runPointActions(a)
        }, inClass: function(a,
                b) {
            for (var c; a; ) {
                if (c = I(a, "class"))
                    if (c.indexOf(b) !== -1)
                        return!0;
                    else if (c.indexOf("highcharts-container") !== -1)
                        return!1;
                a = a.parentNode
            }
        }, onTrackerMouseOut: function(a) {
            var b = this.chart.hoverSeries, c = (a = a.relatedTarget || a.toElement) && a.point && a.point.series;
            if (b && !b.options.stickyTracking && !this.inClass(a, "highcharts-tooltip") && c !== b)
                b.onMouseOut()
        }, onContainerClick: function(a) {
            var b = this.chart, c = b.hoverPoint, d = b.plotLeft, e = b.plotTop, f = b.inverted, g, h, i, a = this.normalize(a);
            a.cancelBubble = !0;
            if (!b.cancelClick)
                c &&
                        this.inClass(a.target, "highcharts-tracker") ? (g = this.chartPosition, h = c.plotX, i = c.plotY, u(c, {pageX: g.left + d + (f ? b.plotWidth - i : h), pageY: g.top + e + (f ? b.plotHeight - h : i)}), P(c.series, "click", u(a, {point: c})), b.hoverPoint && c.firePointEvent("click", a)) : (u(a, this.getCoordinates(a)), b.isInsidePlot(a.chartX - d, a.chartY - e) && P(b, "click", a))
        }, setDOMEvents: function() {
            var a = this, b = a.chart.container;
            b.onmousedown = function(b) {
                a.onContainerMouseDown(b)
            };
            b.onmousemove = function(b) {
                a.onContainerMouseMove(b)
            };
            b.onclick = function(b) {
                a.onContainerClick(b)
            };
            D(b, "mouseleave", a.onContainerMouseLeave);
            D(C, "mouseup", a.onDocumentMouseUp);
            if (bb)
                b.ontouchstart = function(b) {
                    a.onContainerTouchStart(b)
                }, b.ontouchmove = function(b) {
                    a.onContainerTouchMove(b)
                }, D(C, "touchend", a.onDocumentTouchEnd)
        }, destroy: function() {
            var a;
            S(this.chart.container, "mouseleave", this.onContainerMouseLeave);
            S(C, "mouseup", this.onDocumentMouseUp);
            S(C, "touchend", this.onDocumentTouchEnd);
            clearInterval(this.tooltipTimeout);
            for (a in this)
                this[a] = null
        }};
    u(Q.Pointer.prototype, {pinchTranslate: function(a,
                b, c, d, e, f, g, h) {
            a && this.pinchTranslateDirection(!0, c, d, e, f, g, h);
            b && this.pinchTranslateDirection(!1, c, d, e, f, g, h)
        }, pinchTranslateDirection: function(a, b, c, d, e, f, g, h) {
            var i = this.chart, k = a ? "x" : "y", j = a ? "X" : "Y", l = "chart" + j, m = a ? "width" : "height", o = i["plot" + (a ? "Left" : "Top")], p, n, q = h || 1, z = i.inverted, K = i.bounds[a ? "h" : "v"], s = b.length === 1, t = b[0][l], r = c[0][l], v = !s && b[1][l], u = !s && c[1][l], w, c = function() {
                !s && O(t - v) > 20 && (q = h || O(r - u) / O(t - v));
                n = (o - r) / q + t;
                p = i["plot" + (a ? "Width" : "Height")] / q
            };
            c();
            b = n;
            b < K.min ? (b = K.min, w = !0) :
                    b + p > K.max && (b = K.max - p, w = !0);
            w ? (r -= 0.8 * (r - g[k][0]), s || (u -= 0.8 * (u - g[k][1])), c()) : g[k] = [r, u];
            z || (f[k] = n - o, f[m] = p);
            f = z ? 1 / q : q;
            e[m] = p;
            e[k] = b;
            d[z ? a ? "scaleY" : "scaleX" : "scale" + j] = q;
            d["translate" + j] = f * o + (r - f * t)
        }, pinch: function(a) {
            var b = this, c = b.chart, d = b.pinchDown, e = c.tooltip && c.tooltip.options.followTouchMove, f = a.touches, g = f.length, h = b.lastValidTouch, i = b.zoomHor || b.pinchHor, k = b.zoomVert || b.pinchVert, j = i || k, l = b.selectionMarker, m = {}, o = g === 1 && (b.inClass(a.target, "highcharts-tracker") && c.runTrackerClick || c.runChartClick),
                    p = {};
            (j || e) && !o && a.preventDefault();
            va(f, function(a) {
                return b.normalize(a)
            });
            if (a.type === "touchstart")
                q(f, function(a, b) {
                    d[b] = {chartX: a.chartX, chartY: a.chartY}
                }), h.x = [d[0].chartX, d[1] && d[1].chartX], h.y = [d[0].chartY, d[1] && d[1].chartY], q(c.axes, function(a) {
                    if (a.zoomEnabled) {
                        var b = c.bounds[a.horiz ? "h" : "v"], d = a.minPixelPadding, e = a.toPixels(a.dataMin), f = a.toPixels(a.dataMax), g = x(e, f), e = v(e, f);
                        b.min = x(a.pos, g - d);
                        b.max = v(a.pos + a.len, e + d)
                    }
                });
            else if (d.length) {
                if (!l)
                    b.selectionMarker = l = u({destroy: ta}, c.plotBox);
                b.pinchTranslate(i, k, d, f, m, l, p, h);
                b.hasPinched = j;
                b.scaleGroups(m, p);
                !j && e && g === 1 && this.runPointActions(b.normalize(a))
            }
        }, onContainerTouchStart: function(a) {
            var b = this.chart;
            ja = b.index;
            a.touches.length === 1 ? (a = this.normalize(a), b.isInsidePlot(a.chartX - b.plotLeft, a.chartY - b.plotTop) ? (this.runPointActions(a), this.pinch(a)) : this.reset()) : a.touches.length === 2 && this.pinch(a)
        }, onContainerTouchMove: function(a) {
            (a.touches.length === 1 || a.touches.length === 2) && this.pinch(a)
        }, onDocumentTouchEnd: function(a) {
            r(ja) &&
                    da[ja].pointer.drop(a)
        }});
    if (U.PointerEvent || U.MSPointerEvent) {
        var wa = {}, Hb = !!U.PointerEvent, fc = function() {
            var a, b = [];
            b.item = function(a) {
                return this[a]
            };
            for (a in wa)
                wa.hasOwnProperty(a) && b.push({pageX: wa[a].pageX, pageY: wa[a].pageY, target: wa[a].target});
            return b
        }, Ib = function(a, b, c, d) {
            a = a.originalEvent || a;
            if ((a.pointerType === "touch" || a.pointerType === a.MSPOINTER_TYPE_TOUCH) && da[ja])
                d(a), d = da[ja].pointer, d[b]({type: c, target: a.currentTarget, preventDefault: ta, touches: fc()})
        };
        u(Ya.prototype, {onContainerPointerDown: function(a) {
                Ib(a,
                        "onContainerTouchStart", "touchstart", function(a) {
                            wa[a.pointerId] = {pageX: a.pageX, pageY: a.pageY, target: a.currentTarget}
                        })
            }, onContainerPointerMove: function(a) {
                Ib(a, "onContainerTouchMove", "touchmove", function(a) {
                    wa[a.pointerId] = {pageX: a.pageX, pageY: a.pageY};
                    if (!wa[a.pointerId].target)
                        wa[a.pointerId].target = a.currentTarget
                })
            }, onDocumentPointerUp: function(a) {
                Ib(a, "onContainerTouchEnd", "touchend", function(a) {
                    delete wa[a.pointerId]
                })
            }, batchMSEvents: function(a) {
                a(this.chart.container, Hb ? "pointerdown" : "MSPointerDown",
                        this.onContainerPointerDown);
                a(this.chart.container, Hb ? "pointermove" : "MSPointerMove", this.onContainerPointerMove);
                a(C, Hb ? "pointerup" : "MSPointerUp", this.onDocumentPointerUp)
            }});
        R(Ya.prototype, "init", function(a, b, c) {
            J(b.container, {"-ms-touch-action": X, "touch-action": X});
            a.call(this, b, c)
        });
        R(Ya.prototype, "setDOMEvents", function(a) {
            a.apply(this);
            this.batchMSEvents(D)
        });
        R(Ya.prototype, "destroy", function(a) {
            this.batchMSEvents(S);
            a.call(this)
        })
    }
    var pb = Q.Legend = function(a, b) {
        this.init(a, b)
    };
    pb.prototype =
            {init: function(a, b) {
                    var c = this, d = b.itemStyle, e = n(b.padding, 8), f = b.itemMarginTop || 0;
                    this.options = b;
                    if (b.enabled)
                        c.baseline = y(d.fontSize) + 3 + f, c.itemStyle = d, c.itemHiddenStyle = w(d, b.itemHiddenStyle), c.itemMarginTop = f, c.padding = e, c.initialItemX = e, c.initialItemY = e - 5, c.maxItemWidth = 0, c.chart = a, c.itemHeight = 0, c.lastLineHeight = 0, c.symbolWidth = n(b.symbolWidth, 16), c.pages = [], c.render(), D(c.chart, "endResize", function() {
                            c.positionCheckboxes()
                        })
                }, colorizeItem: function(a, b) {
                    var c = this.options, d = a.legendItem, e = a.legendLine,
                            f = a.legendSymbol, g = this.itemHiddenStyle.color, c = b ? c.itemStyle.color : g, h = b ? a.legendColor || a.color || "#CCC" : g, g = a.options && a.options.marker, i = {stroke: h, fill: h}, k;
                    d && d.css({fill: c, color: c});
                    e && e.attr({stroke: h});
                    if (f) {
                        if (g && f.isMarker)
                            for (k in g = a.convertAttribs(g), g)
                                d = g[k], d !== s && (i[k] = d);
                        f.attr(i)
                    }
                }, positionItem: function(a) {
                    var b = this.options, c = b.symbolPadding, b = !b.rtl, d = a._legendItemPos, e = d[0], d = d[1], f = a.checkbox;
                    a.legendGroup && a.legendGroup.translate(b ? e : this.legendWidth - e - 2 * c - 4, d);
                    if (f)
                        f.x = e, f.y =
                                d
                }, destroyItem: function(a) {
                    var b = a.checkbox;
                    q(["legendItem", "legendLine", "legendSymbol", "legendGroup"], function(b) {
                        a[b] && (a[b] = a[b].destroy())
                    });
                    b && Ta(a.checkbox)
                }, destroy: function() {
                    var a = this.group, b = this.box;
                    if (b)
                        this.box = b.destroy();
                    if (a)
                        this.group = a.destroy()
                }, positionCheckboxes: function(a) {
                    var b = this.group.alignAttr, c, d = this.clipHeight || this.legendHeight;
                    if (b)
                        c = b.translateY, q(this.allItems, function(e) {
                            var f = e.checkbox, g;
                            f && (g = c + f.y + (a || 0) + 3, J(f, {left: b.translateX + e.legendItemWidth + f.x - 20 + "px",
                                top: g + "px", display: g > c - 6 && g < c + d - 6 ? "" : X}))
                        })
                }, renderTitle: function() {
                    var a = this.padding, b = this.options.title, c = 0;
                    if (b.text) {
                        if (!this.title)
                            this.title = this.chart.renderer.label(b.text, a - 3, a - 4, null, null, null, null, null, "legend-title").attr({zIndex: 1}).css(b.style).add(this.group);
                        a = this.title.getBBox();
                        c = a.height;
                        this.offsetWidth = a.width;
                        this.contentGroup.attr({translateY: c})
                    }
                    this.titleHeight = c
                }, renderItem: function(a) {
                    var b = this.chart, c = b.renderer, d = this.options, e = d.layout === "horizontal", f = this.symbolWidth,
                            g = d.symbolPadding, h = this.itemStyle, i = this.itemHiddenStyle, k = this.padding, j = e ? n(d.itemDistance, 8) : 0, l = !d.rtl, m = d.width, o = d.itemMarginBottom || 0, p = this.itemMarginTop, B = this.initialItemX, q = a.legendItem, z = a.series && a.series.drawLegendSymbol ? a.series : a, s = z.options, s = this.createCheckboxForItem && s && s.showCheckbox, r = d.useHTML;
                    if (!q)
                        a.legendGroup = c.g("legend-item").attr({zIndex: 1}).add(this.scrollGroup), z.drawLegendSymbol(this, a), a.legendItem = q = c.text(d.labelFormat ? Ja(d.labelFormat, a) : d.labelFormatter.call(a),
                                l ? f + g : -g, this.baseline, r).css(w(a.visible ? h : i)).attr({align: l ? "left" : "right", zIndex: 2}).add(a.legendGroup), this.setItemEvents && this.setItemEvents(a, q, r, h, i), this.colorizeItem(a, a.visible), s && this.createCheckboxForItem(a);
                    c = q.getBBox();
                    f = a.legendItemWidth = d.itemWidth || a.legendItemWidth || f + g + c.width + j + (s ? 20 : 0);
                    this.itemHeight = g = t(a.legendItemHeight || c.height);
                    if (e && this.itemX - B + f > (m || b.chartWidth - 2 * k - B - d.x))
                        this.itemX = B, this.itemY += p + this.lastLineHeight + o, this.lastLineHeight = 0;
                    this.maxItemWidth = v(this.maxItemWidth,
                            f);
                    this.lastItemY = p + this.itemY + o;
                    this.lastLineHeight = v(g, this.lastLineHeight);
                    a._legendItemPos = [this.itemX, this.itemY];
                    e ? this.itemX += f : (this.itemY += p + g + o, this.lastLineHeight = g);
                    this.offsetWidth = m || v((e ? this.itemX - B - j : f) + k, this.offsetWidth)
                }, getAllItems: function() {
                    var a = [];
                    q(this.chart.series, function(b) {
                        var c = b.options;
                        if (n(c.showInLegend, !r(c.linkedTo) ? s : !1, !0))
                            a = a.concat(b.legendItems || (c.legendType === "point" ? b.data : b))
                    });
                    return a
                }, render: function() {
                    var a = this, b = a.chart, c = b.renderer, d = a.group, e,
                            f, g, h, i = a.box, k = a.options, j = a.padding, l = k.borderWidth, m = k.backgroundColor;
                    a.itemX = a.initialItemX;
                    a.itemY = a.initialItemY;
                    a.offsetWidth = 0;
                    a.lastItemY = 0;
                    if (!d)
                        a.group = d = c.g("legend").attr({zIndex: 7}).add(), a.contentGroup = c.g().attr({zIndex: 1}).add(d), a.scrollGroup = c.g().add(a.contentGroup);
                    a.renderTitle();
                    e = a.getAllItems();
                    tb(e, function(a, b) {
                        return(a.options && a.options.legendIndex || 0) - (b.options && b.options.legendIndex || 0)
                    });
                    k.reversed && e.reverse();
                    a.allItems = e;
                    a.display = f = !!e.length;
                    q(e, function(b) {
                        a.renderItem(b)
                    });
                    g = k.width || a.offsetWidth;
                    h = a.lastItemY + a.lastLineHeight + a.titleHeight;
                    h = a.handleOverflow(h);
                    if (l || m) {
                        g += j;
                        h += j;
                        if (i) {
                            if (g > 0 && h > 0)
                                i[i.isNew ? "attr" : "animate"](i.crisp({width: g, height: h})), i.isNew = !1
                        } else
                            a.box = i = c.rect(0, 0, g, h, k.borderRadius, l || 0).attr({stroke: k.borderColor, "stroke-width": l || 0, fill: m || X}).add(d).shadow(k.shadow), i.isNew = !0;
                        i[f ? "show" : "hide"]()
                    }
                    a.legendWidth = g;
                    a.legendHeight = h;
                    q(e, function(b) {
                        a.positionItem(b)
                    });
                    f && d.align(u({width: g, height: h}, k), !0, "spacingBox");
                    b.isResizing || this.positionCheckboxes()
                },
                handleOverflow: function(a) {
                    var b = this, c = this.chart, d = c.renderer, e = this.options, f = e.y, f = c.spacingBox.height + (e.verticalAlign === "top" ? -f : f) - this.padding, g = e.maxHeight, h, i = this.clipRect, k = e.navigation, j = n(k.animation, !0), l = k.arrowSize || 12, m = this.nav, o = this.pages, p, B = this.allItems;
                    e.layout === "horizontal" && (f /= 2);
                    g && (f = x(f, g));
                    o.length = 0;
                    if (a > f && !e.useHTML) {
                        this.clipHeight = h = f - 20 - this.titleHeight - this.padding;
                        this.currentPage = n(this.currentPage, 1);
                        this.fullHeight = a;
                        q(B, function(a, b) {
                            var c = a._legendItemPos[1],
                                    d = t(a.legendItem.getBBox().height), e = o.length;
                            if (!e || c - o[e - 1] > h && (p || c) !== o[e - 1])
                                o.push(p || c), e++;
                            b === B.length - 1 && c + d - o[e - 1] > h && o.push(c);
                            c !== p && (p = c)
                        });
                        if (!i)
                            i = b.clipRect = d.clipRect(0, this.padding, 9999, 0), b.contentGroup.clip(i);
                        i.attr({height: h});
                        if (!m)
                            this.nav = m = d.g().attr({zIndex: 1}).add(this.group), this.up = d.symbol("triangle", 0, 0, l, l).on("click", function() {
                                b.scroll(-1, j)
                            }).add(m), this.pager = d.text("", 15, 10).css(k.style).add(m), this.down = d.symbol("triangle-down", 0, 0, l, l).on("click", function() {
                                b.scroll(1,
                                        j)
                            }).add(m);
                        b.scroll(0);
                        a = f
                    } else if (m)
                        i.attr({height: c.chartHeight}), m.hide(), this.scrollGroup.attr({translateY: 1}), this.clipHeight = 0;
                    return a
                }, scroll: function(a, b) {
                    var c = this.pages, d = c.length, e = this.currentPage + a, f = this.clipHeight, g = this.options.navigation, h = g.activeColor, g = g.inactiveColor, i = this.pager, k = this.padding;
                    e > d && (e = d);
                    if (e > 0)
                        b !== s && Za(b, this.chart), this.nav.attr({translateX: k, translateY: f + this.padding + 7 + this.titleHeight, visibility: "visible"}), this.up.attr({fill: e === 1 ? g : h}).css({cursor: e ===
                                    1 ? "default" : "pointer"}), i.attr({text: e + "/" + d}), this.down.attr({x: 18 + this.pager.getBBox().width, fill: e === d ? g : h}).css({cursor: e === d ? "default" : "pointer"}), c = -c[e - 1] + this.initialItemY, this.scrollGroup.animate({translateY: c}), this.currentPage = e, this.positionCheckboxes(c)
                }};
    F = Q.LegendSymbolMixin = {drawRectangle: function(a, b) {
            var c = a.options.symbolHeight || 12;
            b.legendSymbol = this.chart.renderer.rect(0, a.baseline - 5 - c / 2, a.symbolWidth, c, n(a.options.symbolRadius, 2)).attr({zIndex: 3}).add(b.legendGroup)
        }, drawLineMarker: function(a) {
            var b =
                    this.options, c = b.marker, d;
            d = a.symbolWidth;
            var e = this.chart.renderer, f = this.legendGroup, a = a.baseline - t(e.fontMetrics(a.options.itemStyle.fontSize).b * 0.3), g;
            if (b.lineWidth) {
                g = {"stroke-width": b.lineWidth};
                if (b.dashStyle)
                    g.dashstyle = b.dashStyle;
                this.legendLine = e.path(["M", 0, a, "L", d, a]).attr(g).add(f)
            }
            if (c && c.enabled)
                b = c.radius, this.legendSymbol = d = e.symbol(this.symbol, d / 2 - b, a - b, 2 * b, 2 * b).add(f), d.isMarker = !0
        }};
    (/Trident\/7\.0/.test(Da) || ab) && R(pb.prototype, "positionItem", function(a, b) {
        var c = this, d = function() {
            b._legendItemPos &&
                    a.call(c, b)
        };
        c.chart.renderer.forExport ? d() : setTimeout(d)
    });
    sa.prototype = {init: function(a, b) {
            var c, d = a.series;
            a.series = null;
            c = w(G, a);
            c.series = a.series = d;
            this.userOptions = a;
            d = c.chart;
            this.margin = this.splashArray("margin", d);
            this.spacing = this.splashArray("spacing", d);
            var e = d.events;
            this.bounds = {h: {}, v: {}};
            this.callback = b;
            this.isResizing = 0;
            this.options = c;
            this.axes = [];
            this.series = [];
            this.hasCartesianSeries = d.showAxes;
            var f = this, g;
            f.index = da.length;
            da.push(f);
            d.reflow !== !1 && D(f, "load", function() {
                f.initReflow()
            });
            if (e)
                for (g in e)
                    D(f, g, e[g]);
            f.xAxis = [];
            f.yAxis = [];
            f.animation = ga ? !1 : n(d.animation, !0);
            f.pointCount = 0;
            f.counters = new Kb;
            f.firstRender()
        }, initSeries: function(a) {
            var b = this.options.chart;
            (b = H[a.type || b.type || b.defaultSeriesType]) || na(17, !0);
            b = new b;
            b.init(this, a);
            return b
        }, isInsidePlot: function(a, b, c) {
            var d = c ? b : a, a = c ? a : b;
            return d >= 0 && d <= this.plotWidth && a >= 0 && a <= this.plotHeight
        }, adjustTickAmounts: function() {
            this.options.chart.alignTicks !== !1 && q(this.axes, function(a) {
                a.adjustTickAmount()
            });
            this.maxTicks =
                    null
        }, redraw: function(a) {
            var b = this.axes, c = this.series, d = this.pointer, e = this.legend, f = this.isDirtyLegend, g, h, i = this.isDirtyBox, k = c.length, j = k, l = this.renderer, m = l.isHidden(), o = [];
            Za(a, this);
            m && this.cloneRenderTo();
            for (this.layOutTitles(); j--; )
                if (a = c[j], a.options.stacking && (g = !0, a.isDirty)) {
                    h = !0;
                    break
                }
            if (h)
                for (j = k; j--; )
                    if (a = c[j], a.options.stacking)
                        a.isDirty = !0;
            q(c, function(a) {
                a.isDirty && a.options.legendType === "point" && (f = !0)
            });
            if (f && e.options.enabled)
                e.render(), this.isDirtyLegend = !1;
            g && this.getStacks();
            if (this.hasCartesianSeries) {
                if (!this.isResizing)
                    this.maxTicks = null, q(b, function(a) {
                        a.setScale()
                    });
                this.adjustTickAmounts();
                this.getMargins();
                q(b, function(a) {
                    a.isDirty && (i = !0)
                });
                q(b, function(a) {
                    if (a.isDirtyExtremes)
                        a.isDirtyExtremes = !1, o.push(function() {
                            P(a, "afterSetExtremes", u(a.eventArgs, a.getExtremes()));
                            delete a.eventArgs
                        });
                    (i || g) && a.redraw()
                })
            }
            i && this.drawChartBox();
            q(c, function(a) {
                a.isDirty && a.visible && (!a.isCartesian || a.xAxis) && a.redraw()
            });
            d && d.reset(!0);
            l.draw();
            P(this, "redraw");
            m && this.cloneRenderTo(!0);
            q(o, function(a) {
                a.call()
            })
        }, get: function(a) {
            var b = this.axes, c = this.series, d, e;
            for (d = 0; d < b.length; d++)
                if (b[d].options.id === a)
                    return b[d];
            for (d = 0; d < c.length; d++)
                if (c[d].options.id === a)
                    return c[d];
            for (d = 0; d < c.length; d++) {
                e = c[d].points || [];
                for (b = 0; b < e.length; b++)
                    if (e[b].id === a)
                        return e[b]
            }
            return null
        }, getAxes: function() {
            var a = this, b = this.options, c = b.xAxis = ia(b.xAxis || {}), b = b.yAxis = ia(b.yAxis || {});
            q(c, function(a, b) {
                a.index = b;
                a.isX = !0
            });
            q(b, function(a, b) {
                a.index = b
            });
            c = c.concat(b);
            q(c, function(b) {
                new N(a,
                        b)
            });
            a.adjustTickAmounts()
        }, getSelectedPoints: function() {
            var a = [];
            q(this.series, function(b) {
                a = a.concat(Cb(b.points || [], function(a) {
                    return a.selected
                }))
            });
            return a
        }, getSelectedSeries: function() {
            return Cb(this.series, function(a) {
                return a.selected
            })
        }, getStacks: function() {
            var a = this;
            q(a.yAxis, function(a) {
                if (a.stacks && a.hasVisibleSeries)
                    a.oldStacks = a.stacks
            });
            q(a.series, function(b) {
                if (b.options.stacking && (b.visible === !0 || a.options.chart.ignoreHiddenSeries === !1))
                    b.stackKey = b.type + n(b.options.stack, "")
            })
        },
        setTitle: function(a, b, c) {
            var g;
            var d = this, e = d.options, f;
            f = e.title = w(e.title, a);
            g = e.subtitle = w(e.subtitle, b), e = g;
            q([["title", a, f], ["subtitle", b, e]], function(a) {
                var b = a[0], c = d[b], e = a[1], a = a[2];
                c && e && (d[b] = c = c.destroy());
                a && a.text && !c && (d[b] = d.renderer.text(a.text, 0, 0, a.useHTML).attr({align: a.align, "class": "highcharts-" + b, zIndex: a.zIndex || 4}).css(a.style).add())
            });
            d.layOutTitles(c)
        }, layOutTitles: function(a) {
            var b = 0, c = this.title, d = this.subtitle, e = this.options, f = e.title, e = e.subtitle, g = this.spacingBox.width -
                    44;
            if (c && (c.css({width: (f.width || g) + "px"}).align(u({y: 15}, f), !1, "spacingBox"), !f.floating && !f.verticalAlign))
                b = c.getBBox().height, b >= 18 && b <= 25 && (b = 15);
            d && (d.css({width: (e.width || g) + "px"}).align(u({y: b + f.margin}, e), !1, "spacingBox"), !e.floating && !e.verticalAlign && (b = Wa(b + d.getBBox().height)));
            c = this.titleOffset !== b;
            this.titleOffset = b;
            if (!this.isDirtyBox && c)
                this.isDirtyBox = c, this.hasRendered && n(a, !0) && this.isDirtyBox && this.redraw()
        }, getChartSize: function() {
            var a = this.options.chart, b = a.width, a = a.height,
                    c = this.renderToClone || this.renderTo;
            if (!r(b))
                this.containerWidth = nb(c, "width");
            if (!r(a))
                this.containerHeight = nb(c, "height");
            this.chartWidth = v(0, b || this.containerWidth || 600);
            this.chartHeight = v(0, n(a, this.containerHeight > 19 ? this.containerHeight : 400))
        }, cloneRenderTo: function(a) {
            var b = this.renderToClone, c = this.container;
            a ? b && (this.renderTo.appendChild(c), Ta(b), delete this.renderToClone) : (c && c.parentNode === this.renderTo && this.renderTo.removeChild(c), this.renderToClone = b = this.renderTo.cloneNode(0), J(b,
                    {position: "absolute", top: "-9999px", display: "block"}), b.style.setProperty && b.style.setProperty("display", "block", "important"), C.body.appendChild(b), c && b.appendChild(c))
        }, getContainer: function() {
            var a, b = this.options.chart, c, d, e;
            this.renderTo = a = b.renderTo;
            e = "highcharts-" + Ab++;
            if (ka(a))
                this.renderTo = a = C.getElementById(a);
            a || na(13, !0);
            c = y(I(a, "data-highcharts-chart"));
            !isNaN(c) && da[c] && da[c].hasRendered && da[c].destroy();
            I(a, "data-highcharts-chart", this.index);
            a.innerHTML = "";
            !b.skipClone && !a.offsetWidth &&
                    this.cloneRenderTo();
            this.getChartSize();
            c = this.chartWidth;
            d = this.chartHeight;
            this.container = a = Y(Ua, {className: "highcharts-container" + (b.className ? " " + b.className : ""), id: e}, u({position: "relative", overflow: "hidden", width: c + "px", height: d + "px", textAlign: "left", lineHeight: "normal", zIndex: 0, "-webkit-tap-highlight-color": "rgba(0,0,0,0)"}, b.style), this.renderToClone || a);
            this._cursor = a.style.cursor;
            this.renderer = b.forExport ? new ha(a, c, d, b.style, !0) : new Xa(a, c, d, b.style);
            ga && this.renderer.create(this, a, c,
                    d)
        }, getMargins: function() {
            var a = this.spacing, b, c = this.legend, d = this.margin, e = this.options.legend, f = n(e.margin, 10), g = e.x, h = e.y, i = e.align, k = e.verticalAlign, j = this.titleOffset;
            this.resetMargins();
            b = this.axisOffset;
            if (j && !r(d[0]))
                this.plotTop = v(this.plotTop, j + this.options.title.margin + a[0]);
            if (c.display && !e.floating)
                if (i === "right") {
                    if (!r(d[1]))
                        this.marginRight = v(this.marginRight, c.legendWidth - g + f + a[1])
                } else if (i === "left") {
                    if (!r(d[3]))
                        this.plotLeft = v(this.plotLeft, c.legendWidth + g + f + a[3])
                } else if (k === "top") {
                    if (!r(d[0]))
                        this.plotTop =
                                v(this.plotTop, c.legendHeight + h + f + a[0])
                } else if (k === "bottom" && !r(d[2]))
                    this.marginBottom = v(this.marginBottom, c.legendHeight - h + f + a[2]);
            this.extraBottomMargin && (this.marginBottom += this.extraBottomMargin);
            this.extraTopMargin && (this.plotTop += this.extraTopMargin);
            this.hasCartesianSeries && q(this.axes, function(a) {
                a.getOffset()
            });
            r(d[3]) || (this.plotLeft += b[3]);
            r(d[0]) || (this.plotTop += b[0]);
            r(d[2]) || (this.marginBottom += b[2]);
            r(d[1]) || (this.marginRight += b[1]);
            this.setChartSize()
        }, reflow: function(a) {
            var b = this,
                    c = b.options.chart, d = b.renderTo, e = c.width || nb(d, "width"), f = c.height || nb(d, "height"), c = a ? a.target : U, d = function() {
                if (b.container)
                    b.setSize(e, f, !1), b.hasUserSize = null
            };
            if (!b.hasUserSize && e && f && (c === U || c === C)) {
                if (e !== b.containerWidth || f !== b.containerHeight)
                    clearTimeout(b.reflowTimeout), a ? b.reflowTimeout = setTimeout(d, 100) : d();
                b.containerWidth = e;
                b.containerHeight = f
            }
        }, initReflow: function() {
            var a = this, b = function(b) {
                a.reflow(b)
            };
            D(U, "resize", b);
            D(a, "destroy", function() {
                S(U, "resize", b)
            })
        }, setSize: function(a,
                b, c) {
            var d = this, e, f, g;
            d.isResizing += 1;
            g = function() {
                d && P(d, "endResize", null, function() {
                    d.isResizing -= 1
                })
            };
            Za(c, d);
            d.oldChartHeight = d.chartHeight;
            d.oldChartWidth = d.chartWidth;
            if (r(a))
                d.chartWidth = e = v(0, t(a)), d.hasUserSize = !!e;
            if (r(b))
                d.chartHeight = f = v(0, t(b));
            (Ba ? ob : J)(d.container, {width: e + "px", height: f + "px"}, Ba);
            d.setChartSize(!0);
            d.renderer.setSize(e, f, c);
            d.maxTicks = null;
            q(d.axes, function(a) {
                a.isDirty = !0;
                a.setScale()
            });
            q(d.series, function(a) {
                a.isDirty = !0
            });
            d.isDirtyLegend = !0;
            d.isDirtyBox = !0;
            d.getMargins();
            d.redraw(c);
            d.oldChartHeight = null;
            P(d, "resize");
            Ba === !1 ? g() : setTimeout(g, Ba && Ba.duration || 500)
        }, setChartSize: function(a) {
            var b = this.inverted, c = this.renderer, d = this.chartWidth, e = this.chartHeight, f = this.options.chart, g = this.spacing, h = this.clipOffset, i, k, j, l;
            this.plotLeft = i = t(this.plotLeft);
            this.plotTop = k = t(this.plotTop);
            this.plotWidth = j = v(0, t(d - i - this.marginRight));
            this.plotHeight = l = v(0, t(e - k - this.marginBottom));
            this.plotSizeX = b ? l : j;
            this.plotSizeY = b ? j : l;
            this.plotBorderWidth = f.plotBorderWidth || 0;
            this.spacingBox =
                    c.spacingBox = {x: g[3], y: g[0], width: d - g[3] - g[1], height: e - g[0] - g[2]};
            this.plotBox = c.plotBox = {x: i, y: k, width: j, height: l};
            d = 2 * T(this.plotBorderWidth / 2);
            b = Wa(v(d, h[3]) / 2);
            c = Wa(v(d, h[0]) / 2);
            this.clipBox = {x: b, y: c, width: T(this.plotSizeX - v(d, h[1]) / 2 - b), height: T(this.plotSizeY - v(d, h[2]) / 2 - c)};
            a || q(this.axes, function(a) {
                a.setAxisSize();
                a.setAxisTranslation()
            })
        }, resetMargins: function() {
            var a = this.spacing, b = this.margin;
            this.plotTop = n(b[0], a[0]);
            this.marginRight = n(b[1], a[1]);
            this.marginBottom = n(b[2], a[2]);
            this.plotLeft =
                    n(b[3], a[3]);
            this.axisOffset = [0, 0, 0, 0];
            this.clipOffset = [0, 0, 0, 0]
        }, drawChartBox: function() {
            var a = this.options.chart, b = this.renderer, c = this.chartWidth, d = this.chartHeight, e = this.chartBackground, f = this.plotBackground, g = this.plotBorder, h = this.plotBGImage, i = a.borderWidth || 0, k = a.backgroundColor, j = a.plotBackgroundColor, l = a.plotBackgroundImage, m = a.plotBorderWidth || 0, o, p = this.plotLeft, n = this.plotTop, q = this.plotWidth, z = this.plotHeight, s = this.plotBox, r = this.clipRect, t = this.clipBox;
            o = i + (a.shadow ? 8 : 0);
            if (i || k)
                if (e)
                    e.animate(e.crisp({width: c -
                                o, height: d - o}));
                else {
                    e = {fill: k || X};
                    if (i)
                        e.stroke = a.borderColor, e["stroke-width"] = i;
                    this.chartBackground = b.rect(o / 2, o / 2, c - o, d - o, a.borderRadius, i).attr(e).addClass("highcharts-background").add().shadow(a.shadow)
                }
            if (j)
                f ? f.animate(s) : this.plotBackground = b.rect(p, n, q, z, 0).attr({fill: j}).add().shadow(a.plotShadow);
            if (l)
                h ? h.animate(s) : this.plotBGImage = b.image(l, p, n, q, z).add();
            r ? r.animate({width: t.width, height: t.height}) : this.clipRect = b.clipRect(t);
            if (m)
                g ? g.animate(g.crisp({x: p, y: n, width: q, height: z})) : this.plotBorder =
                        b.rect(p, n, q, z, 0, -m).attr({stroke: a.plotBorderColor, "stroke-width": m, fill: X, zIndex: 1}).add();
            this.isDirtyBox = !1
        }, propFromSeries: function() {
            var a = this, b = a.options.chart, c, d = a.options.series, e, f;
            q(["inverted", "angular", "polar"], function(g) {
                c = H[b.type || b.defaultSeriesType];
                f = a[g] || b[g] || c && c.prototype[g];
                for (e = d && d.length; !f && e--; )
                    (c = H[d[e].type]) && c.prototype[g] && (f = !0);
                a[g] = f
            })
        }, linkSeries: function() {
            var a = this, b = a.series;
            q(b, function(a) {
                a.linkedSeries.length = 0
            });
            q(b, function(b) {
                var d = b.options.linkedTo;
                if (ka(d) && (d = d === ":previous" ? a.series[b.index - 1] : a.get(d)))
                    d.linkedSeries.push(b), b.linkedParent = d
            })
        }, renderSeries: function() {
            q(this.series, function(a) {
                a.translate();
                a.setTooltipPoints && a.setTooltipPoints();
                a.render()
            })
        }, render: function() {
            var a = this, b = a.axes, c = a.renderer, d = a.options, e = d.labels, f = d.credits, g;
            a.setTitle();
            a.legend = new pb(a, d.legend);
            a.getStacks();
            q(b, function(a) {
                a.setScale()
            });
            a.getMargins();
            a.maxTicks = null;
            q(b, function(a) {
                a.setTickPositions(!0);
                a.setMaxTicks()
            });
            a.adjustTickAmounts();
            a.getMargins();
            a.drawChartBox();
            a.hasCartesianSeries && q(b, function(a) {
                a.render()
            });
            if (!a.seriesGroup)
                a.seriesGroup = c.g("series-group").attr({zIndex: 3}).add();
            a.renderSeries();
            e.items && q(e.items, function(b) {
                var d = u(e.style, b.style), f = y(d.left) + a.plotLeft, g = y(d.top) + a.plotTop + 12;
                delete d.left;
                delete d.top;
                c.text(b.html, f, g).attr({zIndex: 2}).css(d).add()
            });
            if (f.enabled && !a.credits)
                g = f.href, a.credits = c.text(f.text, 0, 0).on("click", function() {
                    if (g)
                        location.href = g
                }).attr({align: f.position.align, zIndex: 8}).css(f.style).add().align(f.position);
            a.hasRendered = !0
        }, destroy: function() {
            var a = this, b = a.axes, c = a.series, d = a.container, e, f = d && d.parentNode;
            P(a, "destroy");
            da[a.index] = s;
            a.renderTo.removeAttribute("data-highcharts-chart");
            S(a);
            for (e = b.length; e--; )
                b[e] = b[e].destroy();
            for (e = c.length; e--; )
                c[e] = c[e].destroy();
            q("title,subtitle,chartBackground,plotBackground,plotBGImage,plotBorder,seriesGroup,clipRect,credits,pointer,scroller,rangeSelector,legend,resetZoomButton,tooltip,renderer".split(","), function(b) {
                var c = a[b];
                c && c.destroy && (a[b] = c.destroy())
            });
            if (d)
                d.innerHTML = "", S(d), f && Ta(d);
            for (e in a)
                delete a[e]
        }, isReadyToRender: function() {
            var a = this;
            return!$ && U == U.top && C.readyState !== "complete" || ga && !U.canvg ? (ga ? Vb.push(function() {
                a.firstRender()
            }, a.options.global.canvasToolsURL) : C.attachEvent("onreadystatechange", function() {
                C.detachEvent("onreadystatechange", a.firstRender);
                C.readyState === "complete" && a.firstRender()
            }), !1) : !0
        }, firstRender: function() {
            var a = this, b = a.options, c = a.callback;
            if (a.isReadyToRender()) {
                a.getContainer();
                P(a, "init");
                a.resetMargins();
                a.setChartSize();
                a.propFromSeries();
                a.getAxes();
                q(b.series || [], function(b) {
                    a.initSeries(b)
                });
                a.linkSeries();
                P(a, "beforeRender");
                if (Q.Pointer)
                    a.pointer = new Ya(a, b);
                a.render();
                a.renderer.draw();
                c && c.apply(a, [a]);
                q(a.callbacks, function(b) {
                    b.apply(a, [a])
                });
                a.cloneRenderTo(!0);
                P(a, "load")
            }
        }, splashArray: function(a, b) {
            var c = b[a], c = ba(c) ? c : [c, c, c, c];
            return[n(b[a + "Top"], c[0]), n(b[a + "Right"], c[1]), n(b[a + "Bottom"], c[2]), n(b[a + "Left"], c[3])]
        }};
    sa.prototype.callbacks = [];
    pa = Q.CenteredSeriesMixin = {getCenter: function() {
            var a =
                    this.options, b = this.chart, c = 2 * (a.slicedOffset || 0), d, e = b.plotWidth - 2 * c, f = b.plotHeight - 2 * c, b = a.center, a = [n(b[0], "50%"), n(b[1], "50%"), a.size || "100%", a.innerSize || 0], g = x(e, f), h;
            return va(a, function(a, b) {
                h = /%$/.test(a);
                d = b < 2 || b === 2 && h;
                return(h ? [e, f, g, g][b] * y(a) / 100 : a) + (d ? c : 0)
            })
        }};
    var xa = function() {
    };
    xa.prototype = {init: function(a, b, c) {
            this.series = a;
            this.applyOptions(b, c);
            this.pointAttr = {};
            if (a.options.colorByPoint && (b = a.options.colors || a.chart.options.colors, this.color = this.color || b[a.colorCounter++], a.colorCounter ===
                    b.length))
                a.colorCounter = 0;
            a.chart.pointCount++;
            return this
        }, applyOptions: function(a, b) {
            var c = this.series, d = c.pointValKey, a = xa.prototype.optionsToObject.call(this, a);
            u(this, a);
            this.options = this.options ? u(this.options, a) : a;
            if (d)
                this.y = this[d];
            if (this.x === s && c)
                this.x = b === s ? c.autoIncrement() : b;
            return this
        }, optionsToObject: function(a) {
            var b = {}, c = this.series, d = c.pointArrayMap || ["y"], e = d.length, f = 0, g = 0;
            if (typeof a === "number" || a === null)
                b[d[0]] = a;
            else if (Qa(a)) {
                if (a.length > e) {
                    c = typeof a[0];
                    if (c === "string")
                        b.name =
                                a[0];
                    else if (c === "number")
                        b.x = a[0];
                    f++
                }
                for (; g < e; )
                    b[d[g++]] = a[f++]
            } else if (typeof a === "object") {
                b = a;
                if (a.dataLabels)
                    c._hasPointLabels = !0;
                if (a.marker)
                    c._hasPointMarkers = !0
            }
            return b
        }, destroy: function() {
            var a = this.series.chart, b = a.hoverPoints, c;
            a.pointCount--;
            if (b && (this.setState(), ma(b, this), !b.length))
                a.hoverPoints = null;
            if (this === a.hoverPoint)
                this.onMouseOut();
            if (this.graphic || this.dataLabel)
                S(this), this.destroyElements();
            this.legendItem && a.legend.destroyItem(this);
            for (c in this)
                this[c] = null
        }, destroyElements: function() {
            for (var a =
                    "graphic,dataLabel,dataLabelUpper,group,connector,shadowGroup".split(","), b, c = 6; c--; )
                b = a[c], this[b] && (this[b] = this[b].destroy())
        }, getLabelConfig: function() {
            return{x: this.category, y: this.y, key: this.name || this.category, series: this.series, point: this, percentage: this.percentage, total: this.total || this.stackTotal}
        }, tooltipFormatter: function(a) {
            var b = this.series, c = b.tooltipOptions, d = n(c.valueDecimals, ""), e = c.valuePrefix || "", f = c.valueSuffix || "";
            q(b.pointArrayMap || ["y"], function(b) {
                b = "{point." + b;
                if (e || f)
                    a =
                            a.replace(b + "}", e + b + "}" + f);
                a = a.replace(b + "}", b + ":,." + d + "f}")
            });
            return Ja(a, {point: this, series: this.series})
        }};
    var M = function() {
    };
    M.prototype = {isCartesian: !0, type: "line", pointClass: xa, sorted: !0, requireSorting: !0, pointAttrToOptions: {stroke: "lineColor", "stroke-width": "lineWidth", fill: "fillColor", r: "radius"}, axisTypes: ["xAxis", "yAxis"], colorCounter: 0, parallelArrays: ["x", "y"], init: function(a, b) {
            var c = this, d, e, f = a.series, g = function(a, b) {
                return n(a.options.index, a._i) - n(b.options.index, b._i)
            };
            c.chart = a;
            c.options = b = c.setOptions(b);
            c.linkedSeries = [];
            c.bindAxes();
            u(c, {name: b.name, state: "", pointAttr: {}, visible: b.visible !== !1, selected: b.selected === !0});
            if (ga)
                b.animation = !1;
            e = b.events;
            for (d in e)
                D(c, d, e[d]);
            if (e && e.click || b.point && b.point.events && b.point.events.click || b.allowPointSelect)
                a.runTrackerClick = !0;
            c.getColor();
            c.getSymbol();
            q(c.parallelArrays, function(a) {
                c[a + "Data"] = []
            });
            c.setData(b.data, !1);
            if (c.isCartesian)
                a.hasCartesianSeries = !0;
            f.push(c);
            c._i = f.length - 1;
            tb(f, g);
            this.yAxis && tb(this.yAxis.series,
                    g);
            q(f, function(a, b) {
                a.index = b;
                a.name = a.name || "Series " + (b + 1)
            })
        }, bindAxes: function() {
            var a = this, b = a.options, c = a.chart, d;
            q(a.axisTypes || [], function(e) {
                q(c[e], function(c) {
                    d = c.options;
                    if (b[e] === d.index || b[e] !== s && b[e] === d.id || b[e] === s && d.index === 0)
                        c.series.push(a), a[e] = c, c.isDirty = !0
                });
                !a[e] && a.optionalAxis !== e && na(18, !0)
            })
        }, updateParallelArrays: function(a, b) {
            var c = a.series, d = arguments;
            q(c.parallelArrays, typeof b === "number" ? function(d) {
                var f = d === "y" && c.toYData ? c.toYData(a) : a[d];
                c[d + "Data"][b] = f
            } : function(a) {
                Array.prototype[b].apply(c[a +
                        "Data"], Array.prototype.slice.call(d, 2))
            })
        }, autoIncrement: function() {
            var a = this.options, b = this.xIncrement, b = n(b, a.pointStart, 0);
            this.pointInterval = n(this.pointInterval, a.pointInterval, 1);
            this.xIncrement = b + this.pointInterval;
            return b
        }, getSegments: function() {
            var a = -1, b = [], c, d = this.points, e = d.length;
            if (e)
                if (this.options.connectNulls) {
                    for (c = e; c--; )
                        d[c].y === null && d.splice(c, 1);
                    d.length && (b = [d])
                } else
                    q(d, function(c, g) {
                        c.y === null ? (g > a + 1 && b.push(d.slice(a + 1, g)), a = g) : g === e - 1 && b.push(d.slice(a + 1, g + 1))
                    });
            this.segments =
                    b
        }, setOptions: function(a) {
            var b = this.chart, c = b.options.plotOptions, b = b.userOptions || {}, d = b.plotOptions || {}, e = c[this.type];
            this.userOptions = a;
            c = w(e, c.series, a);
            this.tooltipOptions = w(G.tooltip, G.plotOptions[this.type].tooltip, b.tooltip, d.series && d.series.tooltip, d[this.type] && d[this.type].tooltip, a.tooltip);
            e.marker === null && delete c.marker;
            return c
        }, getColor: function() {
            var a = this.options, b = this.userOptions, c = this.chart.options.colors, d = this.chart.counters, e;
            e = a.color || V[this.type].color;
            if (!e && !a.colorByPoint)
                r(b._colorIndex) ?
                        a = b._colorIndex : (b._colorIndex = d.color, a = d.color++), e = c[a];
            this.color = e;
            d.wrapColor(c.length)
        }, getSymbol: function() {
            var a = this.userOptions, b = this.options.marker, c = this.chart, d = c.options.symbols, c = c.counters;
            this.symbol = b.symbol;
            if (!this.symbol)
                r(a._symbolIndex) ? a = a._symbolIndex : (a._symbolIndex = c.symbol, a = c.symbol++), this.symbol = d[a];
            if (/^url/.test(this.symbol))
                b.radius = 0;
            c.wrapSymbol(d.length)
        }, drawLegendSymbol: F.drawLineMarker, setData: function(a, b, c, d) {
            var e = this, f = e.points, g = f && f.length || 0, h, i =
                    e.options, k = e.chart, j = null, l = e.xAxis, m = l && !!l.categories, o = e.tooltipPoints, p = i.turboThreshold, B = this.xData, Oa = this.yData, z = (h = e.pointArrayMap) && h.length, a = a || [];
            h = a.length;
            b = n(b, !0);
            if (d !== !1 && h && g === h && !e.cropped && !e.hasGroupedData)
                q(a, function(a, b) {
                    f[b].update(a, !1)
                });
            else {
                e.xIncrement = null;
                e.pointRange = m ? 1 : i.pointRange;
                e.colorCounter = 0;
                q(this.parallelArrays, function(a) {
                    e[a + "Data"].length = 0
                });
                if (p && h > p) {
                    for (c = 0; j === null && c < h; )
                        j = a[c], c++;
                    if (za(j)) {
                        m = n(i.pointStart, 0);
                        i = n(i.pointInterval, 1);
                        for (c =
                                0; c < h; c++)
                            B[c] = m, Oa[c] = a[c], m += i;
                        e.xIncrement = m
                    } else if (Qa(j))
                        if (z)
                            for (c = 0; c < h; c++)
                                i = a[c], B[c] = i[0], Oa[c] = i.slice(1, z + 1);
                        else
                            for (c = 0; c < h; c++)
                                i = a[c], B[c] = i[0], Oa[c] = i[1];
                    else
                        na(12)
                } else
                    for (c = 0; c < h; c++)
                        if (a[c] !== s && (i = {series: e}, e.pointClass.prototype.applyOptions.apply(i, [a[c]]), e.updateParallelArrays(i, c), m && i.name))
                            l.names[i.x] = i.name;
                ka(Oa[0]) && na(14, !0);
                e.data = [];
                e.options.data = a;
                for (c = g; c--; )
                    f[c] && f[c].destroy && f[c].destroy();
                if (o)
                    o.length = 0;
                if (l)
                    l.minRange = l.userMinRange;
                e.isDirty = e.isDirtyData =
                        k.isDirtyBox = !0;
                c = !1
            }
            b && k.redraw(c)
        }, processData: function(a) {
            var b = this.xData, c = this.yData, d = b.length, e;
            e = 0;
            var f, g, h = this.xAxis, i = this.options, k = i.cropThreshold, j = this.isCartesian;
            if (j && !this.isDirty && !h.isDirty && !this.yAxis.isDirty && !a)
                return!1;
            if (j && this.sorted && (!k || d > k || this.forceCrop))
                if (a = h.min, h = h.max, b[d - 1] < a || b[0] > h)
                    b = [], c = [];
                else if (b[0] < a || b[d - 1] > h)
                    e = this.cropData(this.xData, this.yData, a, h), b = e.xData, c = e.yData, e = e.start, f = !0;
            for (h = b.length - 1; h >= 0; h--)
                d = b[h] - b[h - 1], d > 0 && (g === s || d < g) ? g =
                        d : d < 0 && this.requireSorting && na(15);
            this.cropped = f;
            this.cropStart = e;
            this.processedXData = b;
            this.processedYData = c;
            if (i.pointRange === null)
                this.pointRange = g || 1;
            this.closestPointRange = g
        }, cropData: function(a, b, c, d) {
            var e = a.length, f = 0, g = e, h = n(this.cropShoulder, 1), i;
            for (i = 0; i < e; i++)
                if (a[i] >= c) {
                    f = v(0, i - h);
                    break
                }
            for (; i < e; i++)
                if (a[i] > d) {
                    g = i + h;
                    break
                }
            return{xData: a.slice(f, g), yData: b.slice(f, g), start: f, end: g}
        }, generatePoints: function() {
            var a = this.options.data, b = this.data, c, d = this.processedXData, e = this.processedYData,
                    f = this.pointClass, g = d.length, h = this.cropStart || 0, i, k = this.hasGroupedData, j, l = [], m;
            if (!b && !k)
                b = [], b.length = a.length, b = this.data = b;
            for (m = 0; m < g; m++)
                i = h + m, k ? l[m] = (new f).init(this, [d[m]].concat(ia(e[m]))) : (b[i] ? j = b[i] : a[i] !== s && (b[i] = j = (new f).init(this, a[i], d[m])), l[m] = j);
            if (b && (g !== (c = b.length) || k))
                for (m = 0; m < c; m++)
                    if (m === h && !k && (m += g), b[m])
                        b[m].destroyElements(), b[m].plotX = s;
            this.data = b;
            this.points = l
        }, getExtremes: function(a) {
            var b = this.yAxis, c = this.processedXData, d, e = [], f = 0;
            d = this.xAxis.getExtremes();
            var g = d.min, h = d.max, i, k, j, l, a = a || this.stackedYData || this.processedYData;
            d = a.length;
            for (l = 0; l < d; l++)
                if (k = c[l], j = a[l], i = j !== null && j !== s && (!b.isLog || j.length || j > 0), k = this.getExtremesFromAll || this.cropped || (c[l + 1] || k) >= g && (c[l - 1] || k) <= h, i && k)
                    if (i = j.length)
                        for (; i--; )
                            j[i] !== null && (e[f++] = j[i]);
                    else
                        e[f++] = j;
            this.dataMin = n(void 0, Sa(e));
            this.dataMax = n(void 0, Aa(e))
        }, translate: function() {
            this.processedXData || this.processData();
            this.generatePoints();
            for (var a = this.options, b = a.stacking, c = this.xAxis, d = c.categories,
                    e = this.yAxis, f = this.points, g = f.length, h = !!this.modifyValue, i = a.pointPlacement, k = i === "between" || za(i), j = a.threshold, a = 0; a < g; a++) {
                var l = f[a], m = l.x, o = l.y, p = l.low, q = b && e.stacks[(this.negStacks && o < j ? "-" : "") + this.stackKey];
                if (e.isLog && o <= 0)
                    l.y = o = null;
                l.plotX = c.translate(m, 0, 0, 0, 1, i, this.type === "flags");
                if (b && this.visible && q && q[m])
                    q = q[m], o = q.points[this.index], p = o[0], o = o[1], p === 0 && (p = n(j, e.min)), e.isLog && p <= 0 && (p = null), l.total = l.stackTotal = q.total, l.percentage = q.total && l.y / q.total * 100, l.stackY = o, q.setOffset(this.pointXOffset ||
                            0, this.barW || 0);
                l.yBottom = r(p) ? e.translate(p, 0, 1, 0, 1) : null;
                h && (o = this.modifyValue(o, l));
                l.plotY = typeof o === "number" && o !== Infinity ? e.translate(o, 0, 1, 0, 1) : s;
                l.clientX = k ? c.translate(m, 0, 0, 0, 1) : l.plotX;
                l.negative = l.y < (j || 0);
                l.category = d && d[l.x] !== s ? d[l.x] : l.x
            }
            this.getSegments()
        }, animate: function(a) {
            var b = this, c = b.chart, d = c.renderer, e;
            e = b.options.animation;
            var f = c.clipBox, g = c.inverted, h;
            if (e && !ba(e))
                e = V[b.type].animation;
            h = "_sharedClip" + e.duration + e.easing;
            if (a)
                a = c[h], e = c[h + "m"], a || (c[h] = a = d.clipRect(u(f,
                        {width: 0})), c[h + "m"] = e = d.clipRect(-99, g ? -c.plotLeft : -c.plotTop, 99, g ? c.chartWidth : c.chartHeight)), b.group.clip(a), b.markerGroup.clip(e), b.sharedClipKey = h;
            else {
                if (a = c[h])
                    a.animate({width: c.plotSizeX}, e), c[h + "m"].animate({width: c.plotSizeX + 99}, e);
                b.animate = null;
                b.animationTimeout = setTimeout(function() {
                    b.afterAnimate()
                }, e.duration)
            }
        }, afterAnimate: function() {
            var a = this.chart, b = this.sharedClipKey, c = this.group;
            c && this.options.clip !== !1 && (c.clip(a.clipRect), this.markerGroup.clip());
            setTimeout(function() {
                b &&
                        a[b] && (a[b] = a[b].destroy(), a[b + "m"] = a[b + "m"].destroy())
            }, 100)
        }, drawPoints: function() {
            var a, b = this.points, c = this.chart, d, e, f, g, h, i, k, j, l = this.options.marker, m = this.pointAttr[""], o, p = this.markerGroup;
            if (l.enabled || this._hasPointMarkers)
                for (f = b.length; f--; )
                    if (g = b[f], d = T(g.plotX), e = g.plotY, j = g.graphic, i = g.marker || {}, a = l.enabled && i.enabled === s || i.enabled, o = c.isInsidePlot(t(d), e, c.inverted), a && e !== s && !isNaN(e) && g.y !== null)
                        if (a = g.pointAttr[g.selected ? "select" : ""] || m, h = a.r, i = n(i.symbol, this.symbol), k = i.indexOf("url") ===
                                0, j)
                            j.attr({visibility: o ? "inherit" : "hidden"}).animate(u({x: d - h, y: e - h}, j.symbolName ? {width: 2 * h, height: 2 * h} : {}));
                        else {
                            if (o && (h > 0 || k))
                                g.graphic = c.renderer.symbol(i, d - h, e - h, 2 * h, 2 * h).attr(a).add(p)
                        }
                    else if (j)
                        g.graphic = j.destroy()
        }, convertAttribs: function(a, b, c, d) {
            var e = this.pointAttrToOptions, f, g, h = {}, a = a || {}, b = b || {}, c = c || {}, d = d || {};
            for (f in e)
                g = e[f], h[f] = n(a[g], b[f], c[f], d[f]);
            return h
        }, getAttribs: function() {
            var a = this, b = a.options, c = V[a.type].marker ? b.marker : b, d = c.states, e = d.hover, f, g = a.color;
            f = {stroke: g,
                fill: g};
            var h = a.points || [], i, k = [], j, l = a.pointAttrToOptions;
            j = a.hasPointSpecificOptions;
            var m = b.negativeColor, o = c.lineColor, p = c.fillColor;
            i = b.turboThreshold;
            var n;
            b.marker ? (e.radius = e.radius || c.radius + 2, e.lineWidth = e.lineWidth || c.lineWidth + 1) : e.color = e.color || Ea(e.color || g).brighten(e.brightness).get();
            k[""] = a.convertAttribs(c, f);
            q(["hover", "select"], function(b) {
                k[b] = a.convertAttribs(d[b], k[""])
            });
            a.pointAttr = k;
            g = h.length;
            if (!i || g < i || j)
                for (; g--; ) {
                    i = h[g];
                    if ((c = i.options && i.options.marker || i.options) &&
                            c.enabled === !1)
                        c.radius = 0;
                    if (i.negative && m)
                        i.color = i.fillColor = m;
                    j = b.colorByPoint || i.color;
                    if (i.options)
                        for (n in l)
                            r(c[l[n]]) && (j = !0);
                    if (j) {
                        c = c || {};
                        j = [];
                        d = c.states || {};
                        f = d.hover = d.hover || {};
                        if (!b.marker)
                            f.color = f.color || !i.options.color && e.color || Ea(i.color).brighten(f.brightness || e.brightness).get();
                        f = {color: i.color};
                        if (!p)
                            f.fillColor = i.color;
                        if (!o)
                            f.lineColor = i.color;
                        j[""] = a.convertAttribs(u(f, c), k[""]);
                        j.hover = a.convertAttribs(d.hover, k.hover, j[""]);
                        j.select = a.convertAttribs(d.select, k.select,
                                j[""])
                    } else
                        j = k;
                    i.pointAttr = j
                }
        }, destroy: function() {
            var a = this, b = a.chart, c = /AppleWebKit\/533/.test(Da), d, e, f = a.data || [], g, h, i;
            P(a, "destroy");
            S(a);
            q(a.axisTypes || [], function(b) {
                if (i = a[b])
                    ma(i.series, a), i.isDirty = i.forceRedraw = !0
            });
            a.legendItem && a.chart.legend.destroyItem(a);
            for (e = f.length; e--; )
                (g = f[e]) && g.destroy && g.destroy();
            a.points = null;
            clearTimeout(a.animationTimeout);
            q("area,graph,dataLabelsGroup,group,markerGroup,tracker,graphNeg,areaNeg,posClip,negClip".split(","), function(b) {
                a[b] && (d = c && b ===
                        "group" ? "hide" : "destroy", a[b][d]())
            });
            if (b.hoverSeries === a)
                b.hoverSeries = null;
            ma(b.series, a);
            for (h in a)
                delete a[h]
        }, getSegmentPath: function(a) {
            var b = this, c = [], d = b.options.step;
            q(a, function(e, f) {
                var g = e.plotX, h = e.plotY, i;
                b.getPointSpline ? c.push.apply(c, b.getPointSpline(a, e, f)) : (c.push(f ? "L" : "M"), d && f && (i = a[f - 1], d === "right" ? c.push(i.plotX, h) : d === "center" ? c.push((i.plotX + g) / 2, i.plotY, (i.plotX + g) / 2, h) : c.push(g, i.plotY)), c.push(e.plotX, e.plotY))
            });
            return c
        }, getGraphPath: function() {
            var a = this, b = [], c, d =
                    [];
            q(a.segments, function(e) {
                c = a.getSegmentPath(e);
                e.length > 1 ? b = b.concat(c) : d.push(e[0])
            });
            a.singlePoints = d;
            return a.graphPath = b
        }, drawGraph: function() {
            var a = this, b = this.options, c = [["graph", b.lineColor || this.color]], d = b.lineWidth, e = b.dashStyle, f = b.linecap !== "square", g = this.getGraphPath(), h = b.negativeColor;
            h && c.push(["graphNeg", h]);
            q(c, function(c, h) {
                var j = c[0], l = a[j];
                if (l)
                    eb(l), l.animate({d: g});
                else if (d && g.length)
                    l = {stroke: c[1], "stroke-width": d, fill: X, zIndex: 1}, e ? l.dashstyle = e : f && (l["stroke-linecap"] =
                            l["stroke-linejoin"] = "round"), a[j] = a.chart.renderer.path(g).attr(l).add(a.group).shadow(!h && b.shadow)
            })
        }, clipNeg: function() {
            var a = this.options, b = this.chart, c = b.renderer, d = a.negativeColor || a.negativeFillColor, e, f = this.graph, g = this.area, h = this.posClip, i = this.negClip;
            e = b.chartWidth;
            var k = b.chartHeight, j = v(e, k), l = this.yAxis;
            if (d && (f || g)) {
                d = t(l.toPixels(a.threshold || 0, !0));
                d < 0 && (j -= d);
                a = {x: 0, y: 0, width: j, height: d};
                j = {x: 0, y: d, width: j, height: j};
                if (b.inverted)
                    a.height = j.y = b.plotWidth - d, c.isVML && (a = {x: b.plotWidth -
                                d - b.plotLeft, y: 0, width: e, height: k}, j = {x: d + b.plotLeft - e, y: 0, width: b.plotLeft + d, height: e});
                l.reversed ? (b = j, e = a) : (b = a, e = j);
                h ? (h.animate(b), i.animate(e)) : (this.posClip = h = c.clipRect(b), this.negClip = i = c.clipRect(e), f && this.graphNeg && (f.clip(h), this.graphNeg.clip(i)), g && (g.clip(h), this.areaNeg.clip(i)))
            }
        }, invertGroups: function() {
            function a() {
                var a = {width: b.yAxis.len, height: b.xAxis.len};
                q(["group", "markerGroup"], function(c) {
                    b[c] && b[c].attr(a).invert()
                })
            }
            var b = this, c = b.chart;
            if (b.xAxis)
                D(c, "resize", a), D(b,
                        "destroy", function() {
                            S(c, "resize", a)
                        }), a(), b.invertGroups = a
        }, plotGroup: function(a, b, c, d, e) {
            var f = this[a], g = !f;
            g && (this[a] = f = this.chart.renderer.g(b).attr({visibility: c, zIndex: d || 0.1}).add(e));
            f[g ? "attr" : "animate"](this.getPlotBox());
            return f
        }, getPlotBox: function() {
            return{translateX: this.xAxis ? this.xAxis.left : this.chart.plotLeft, translateY: this.yAxis ? this.yAxis.top : this.chart.plotTop, scaleX: 1, scaleY: 1}
        }, render: function() {
            var a = this.chart, b, c = this.options, d = c.animation && !!this.animate && a.renderer.isSVG,
                    e = this.visible ? "visible" : "hidden", f = c.zIndex, g = this.hasRendered, h = a.seriesGroup;
            b = this.plotGroup("group", "series", e, f, h);
            this.markerGroup = this.plotGroup("markerGroup", "markers", e, f, h);
            d && this.animate(!0);
            this.getAttribs();
            b.inverted = this.isCartesian ? a.inverted : !1;
            this.drawGraph && (this.drawGraph(), this.clipNeg());
            this.drawDataLabels && this.drawDataLabels();
            this.visible && this.drawPoints();
            this.drawTracker && this.options.enableMouseTracking !== !1 && this.drawTracker();
            a.inverted && this.invertGroups();
            c.clip !==
                    !1 && !this.sharedClipKey && !g && b.clip(a.clipRect);
            d ? this.animate() : g || this.afterAnimate();
            this.isDirty = this.isDirtyData = !1;
            this.hasRendered = !0
        }, redraw: function() {
            var a = this.chart, b = this.isDirtyData, c = this.group, d = this.xAxis, e = this.yAxis;
            c && (a.inverted && c.attr({width: a.plotWidth, height: a.plotHeight}), c.animate({translateX: n(d && d.left, a.plotLeft), translateY: n(e && e.top, a.plotTop)}));
            this.translate();
            this.setTooltipPoints(!0);
            this.render();
            b && P(this, "updatedData")
        }};
    Qb.prototype = {destroy: function() {
            Ka(this,
                    this.axis)
        }, render: function(a) {
            var b = this.options, c = b.format, c = c ? Ja(c, this) : b.formatter.call(this);
            this.label ? this.label.attr({text: c, visibility: "hidden"}) : this.label = this.axis.chart.renderer.text(c, 0, 0, b.useHTML).css(b.style).attr({align: this.textAlign, rotation: b.rotation, visibility: "hidden"}).add(a)
        }, setOffset: function(a, b) {
            var c = this.axis, d = c.chart, e = d.inverted, f = this.isNegative, g = c.translate(this.percent ? 100 : this.total, 0, 0, 0, 1), c = c.translate(0), c = O(g - c), h = d.xAxis[0].translate(this.x) + a, i = d.plotHeight,
                    f = {x: e ? f ? g : g - c : h, y: e ? i - h - b : f ? i - g - c : i - g, width: e ? c : b, height: e ? b : c};
            if (e = this.label)
                e.align(this.alignOptions, null, f), f = e.alignAttr, e[this.options.crop === !1 || d.isInsidePlot(f.x, f.y) ? "show" : "hide"](!0)
        }};
    N.prototype.buildStacks = function() {
        var a = this.series, b = n(this.options.reversedStacks, !0), c = a.length;
        if (!this.isXAxis) {
            for (this.usePercentage = !1; c--; )
                a[b ? c : a.length - c - 1].setStackedPoints();
            if (this.usePercentage)
                for (c = 0; c < a.length; c++)
                    a[c].setPercentStacks()
        }
    };
    N.prototype.renderStackTotals = function() {
        var a =
                this.chart, b = a.renderer, c = this.stacks, d, e, f = this.stackTotalGroup;
        if (!f)
            this.stackTotalGroup = f = b.g("stack-labels").attr({visibility: "visible", zIndex: 6}).add();
        f.translate(a.plotLeft, a.plotTop);
        for (d in c)
            for (e in a = c[d], a)
                a[e].render(f)
    };
    M.prototype.setStackedPoints = function() {
        if (this.options.stacking && !(this.visible !== !0 && this.chart.options.chart.ignoreHiddenSeries !== !1)) {
            var a = this.processedXData, b = this.processedYData, c = [], d = b.length, e = this.options, f = e.threshold, g = e.stack, e = e.stacking, h = this.stackKey,
                    i = "-" + h, k = this.negStacks, j = this.yAxis, l = j.stacks, m = j.oldStacks, o, p, n, q, z;
            for (n = 0; n < d; n++) {
                q = a[n];
                z = b[n];
                p = (o = k && z < f) ? i : h;
                l[p] || (l[p] = {});
                if (!l[p][q])
                    m[p] && m[p][q] ? (l[p][q] = m[p][q], l[p][q].total = null) : l[p][q] = new Qb(j, j.options.stackLabels, o, q, g, e);
                p = l[p][q];
                p.points[this.index] = [p.cum || 0];
                e === "percent" ? (o = o ? h : i, k && l[o] && l[o][q] ? (o = l[o][q], p.total = o.total = v(o.total, p.total) + O(z) || 0) : p.total = ea(p.total + (O(z) || 0))) : p.total = ea(p.total + (z || 0));
                p.cum = (p.cum || 0) + (z || 0);
                p.points[this.index].push(p.cum);
                c[n] =
                        p.cum
            }
            if (e === "percent")
                j.usePercentage = !0;
            this.stackedYData = c;
            j.oldStacks = {}
        }
    };
    M.prototype.setPercentStacks = function() {
        var a = this, b = a.stackKey, c = a.yAxis.stacks, d = a.processedXData;
        q([b, "-" + b], function(b) {
            var e;
            for (var f = d.length, g, h; f--; )
                if (g = d[f], e = (h = c[b] && c[b][g]) && h.points[a.index], g = e)
                    h = h.total ? 100 / h.total : 0, g[0] = ea(g[0] * h), g[1] = ea(g[1] * h), a.stackedYData[f] = g[1]
        })
    };
    u(sa.prototype, {addSeries: function(a, b, c) {
            var d, e = this;
            a && (b = n(b, !0), P(e, "addSeries", {options: a}, function() {
                d = e.initSeries(a);
                e.isDirtyLegend =
                        !0;
                e.linkSeries();
                b && e.redraw(c)
            }));
            return d
        }, addAxis: function(a, b, c, d) {
            var e = b ? "xAxis" : "yAxis", f = this.options;
            new N(this, w(a, {index: this[e].length, isX: b}));
            f[e] = ia(f[e] || {});
            f[e].push(a);
            n(c, !0) && this.redraw(d)
        }, showLoading: function(a) {
            var b = this.options, c = this.loadingDiv, d = b.loading;
            if (!c)
                this.loadingDiv = c = Y(Ua, {className: "highcharts-loading"}, u(d.style, {zIndex: 10, display: X}), this.container), this.loadingSpan = Y("span", null, d.labelStyle, c);
            this.loadingSpan.innerHTML = a || b.lang.loading;
            if (!this.loadingShown)
                J(c,
                        {opacity: 0, display: "", left: this.plotLeft + "px", top: this.plotTop + "px", width: this.plotWidth + "px", height: this.plotHeight + "px"}), ob(c, {opacity: d.style.opacity}, {duration: d.showDuration || 0}), this.loadingShown = !0
        }, hideLoading: function() {
            var a = this.options, b = this.loadingDiv;
            b && ob(b, {opacity: 0}, {duration: a.loading.hideDuration || 100, complete: function() {
                    J(b, {display: X})
                }});
            this.loadingShown = !1
        }});
    u(xa.prototype, {update: function(a, b, c) {
            var d = this, e = d.series, f = d.graphic, g, h = e.data, i = e.chart, k = e.options, b = n(b,
                    !0);
            d.firePointEvent("update", {options: a}, function() {
                d.applyOptions(a);
                if (ba(a)) {
                    e.getAttribs();
                    if (f)
                        a && a.marker && a.marker.symbol ? d.graphic = f.destroy() : f.attr(d.pointAttr[d.state || ""]);
                    if (a && a.dataLabels && d.dataLabel)
                        d.dataLabel = d.dataLabel.destroy()
                }
                g = ua(d, h);
                e.updateParallelArrays(d, g);
                k.data[g] = d.options;
                e.isDirty = e.isDirtyData = !0;
                if (!e.fixedBox && e.hasCartesianSeries)
                    i.isDirtyBox = !0;
                k.legendType === "point" && i.legend.destroyItem(d);
                b && i.redraw(c)
            })
        }, remove: function(a, b) {
            var c = this, d = c.series, e = d.points,
                    f = d.chart, g, h = d.data;
            Za(b, f);
            a = n(a, !0);
            c.firePointEvent("remove", null, function() {
                g = ua(c, h);
                h.length === e.length && e.splice(g, 1);
                h.splice(g, 1);
                d.options.data.splice(g, 1);
                d.updateParallelArrays(c, "splice", g, 1);
                c.destroy();
                d.isDirty = !0;
                d.isDirtyData = !0;
                a && f.redraw()
            })
        }});
    u(M.prototype, {addPoint: function(a, b, c, d) {
            var e = this.options, f = this.data, g = this.graph, h = this.area, i = this.chart, k = this.xAxis && this.xAxis.names, j = g && g.shift || 0, l = e.data, m, o = this.xData;
            Za(d, i);
            c && q([g, h, this.graphNeg, this.areaNeg], function(a) {
                if (a)
                    a.shift =
                            j + 1
            });
            if (h)
                h.isArea = !0;
            b = n(b, !0);
            d = {series: this};
            this.pointClass.prototype.applyOptions.apply(d, [a]);
            g = d.x;
            h = o.length;
            if (this.requireSorting && g < o[h - 1])
                for (m = !0; h && o[h - 1] > g; )
                    h--;
            this.updateParallelArrays(d, "splice", h, 0, 0);
            this.updateParallelArrays(d, h);
            if (k)
                k[g] = d.name;
            l.splice(h, 0, a);
            m && (this.data.splice(h, 0, null), this.processData());
            e.legendType === "point" && this.generatePoints();
            c && (f[0] && f[0].remove ? f[0].remove(!1) : (f.shift(), this.updateParallelArrays(d, "shift"), l.shift()));
            this.isDirtyData = this.isDirty =
                    !0;
            b && (this.getAttribs(), i.redraw())
        }, remove: function(a, b) {
            var c = this, d = c.chart, a = n(a, !0);
            if (!c.isRemoving)
                c.isRemoving = !0, P(c, "remove", null, function() {
                    c.destroy();
                    d.isDirtyLegend = d.isDirtyBox = !0;
                    d.linkSeries();
                    a && d.redraw(b)
                });
            c.isRemoving = !1
        }, update: function(a, b) {
            var c = this.chart, d = this.type, e = H[d].prototype, f, a = w(this.userOptions, {animation: !1, index: this.index, pointStart: this.xData[0]}, {data: this.options.data}, a);
            this.remove(!1);
            for (f in e)
                e.hasOwnProperty(f) && (this[f] = s);
            u(this, H[a.type || d].prototype);
            this.init(c, a);
            n(b, !0) && c.redraw(!1)
        }});
    u(N.prototype, {update: function(a, b) {
            var c = this.chart, a = c.options[this.coll][this.options.index] = w(this.userOptions, a);
            this.destroy(!0);
            this._addedPlotLB = this.userMin = this.userMax = s;
            this.init(c, u(a, {events: s}));
            c.isDirtyBox = !0;
            n(b, !0) && c.redraw()
        }, remove: function(a) {
            for (var b = this.chart, c = this.coll, d = this.series, e = d.length; e--; )
                d[e] && d[e].remove(!1);
            ma(b.axes, this);
            ma(b[c], this);
            b.options[c].splice(this.options.index, 1);
            q(b[c], function(a, b) {
                a.options.index = b
            });
            this.destroy();
            b.isDirtyBox = !0;
            n(a, !0) && b.redraw()
        }, setTitle: function(a, b) {
            this.update({title: a}, b)
        }, setCategories: function(a, b) {
            this.update({categories: a}, b)
        }});
    var ya = ca(M);
    H.line = ya;
    V.area = w(L, {threshold: 0});
    var qa = ca(M, {type: "area", getSegments: function() {
            var a = [], b = [], c = [], d = this.xAxis, e = this.yAxis, f = e.stacks[this.stackKey], g = {}, h, i, k = this.points, j = this.options.connectNulls, l, m, o;
            if (this.options.stacking && !this.cropped) {
                for (m = 0; m < k.length; m++)
                    g[k[m].x] = k[m];
                for (o in f)
                    f[o].total !== null && c.push(+o);
                c.sort(function(a, b) {
                    return a - b
                });
                q(c, function(a) {
                    if (!j || g[a] && g[a].y !== null)
                        g[a] ? b.push(g[a]) : (h = d.translate(a), l = f[a].percent ? f[a].total ? f[a].cum * 100 / f[a].total : 0 : f[a].cum, i = e.toPixels(l, !0), b.push({y: null, plotX: h, clientX: h, plotY: i, yBottom: i, onMouseOver: ta}))
                });
                b.length && a.push(b)
            } else
                M.prototype.getSegments.call(this), a = this.segments;
            this.segments = a
        }, getSegmentPath: function(a) {
            var b = M.prototype.getSegmentPath.call(this, a), c = [].concat(b), d, e = this.options;
            d = b.length;
            var f = this.yAxis.getThreshold(e.threshold),
                    g;
            d === 3 && c.push("L", b[1], b[2]);
            if (e.stacking && !this.closedStacks)
                for (d = a.length - 1; d >= 0; d--)
                    g = n(a[d].yBottom, f), d < a.length - 1 && e.step && c.push(a[d + 1].plotX, g), c.push(a[d].plotX, g);
            else
                this.closeSegment(c, a, f);
            this.areaPath = this.areaPath.concat(c);
            return b
        }, closeSegment: function(a, b, c) {
            a.push("L", b[b.length - 1].plotX, c, "L", b[0].plotX, c)
        }, drawGraph: function() {
            this.areaPath = [];
            M.prototype.drawGraph.apply(this);
            var a = this, b = this.areaPath, c = this.options, d = c.negativeColor, e = c.negativeFillColor, f = [["area",
                    this.color, c.fillColor]];
            (d || e) && f.push(["areaNeg", d, e]);
            q(f, function(d) {
                var e = d[0], f = a[e];
                f ? f.animate({d: b}) : a[e] = a.chart.renderer.path(b).attr({fill: n(d[2], Ea(d[1]).setOpacity(n(c.fillOpacity, 0.75)).get()), zIndex: 0}).add(a.group)
            })
        }, drawLegendSymbol: F.drawRectangle});
    H.area = qa;
    V.spline = w(L);
    ya = ca(M, {type: "spline", getPointSpline: function(a, b, c) {
            var d = b.plotX, e = b.plotY, f = a[c - 1], g = a[c + 1], h, i, k, j;
            if (f && g) {
                a = f.plotY;
                k = g.plotX;
                var g = g.plotY, l;
                h = (1.5 * d + f.plotX) / 2.5;
                i = (1.5 * e + a) / 2.5;
                k = (1.5 * d + k) / 2.5;
                j = (1.5 *
                        e + g) / 2.5;
                l = (j - i) * (k - d) / (k - h) + e - j;
                i += l;
                j += l;
                i > a && i > e ? (i = v(a, e), j = 2 * e - i) : i < a && i < e && (i = x(a, e), j = 2 * e - i);
                j > g && j > e ? (j = v(g, e), i = 2 * e - j) : j < g && j < e && (j = x(g, e), i = 2 * e - j);
                b.rightContX = k;
                b.rightContY = j
            }
            c ? (b = ["C", f.rightContX || f.plotX, f.rightContY || f.plotY, h || d, i || e, d, e], f.rightContX = f.rightContY = null) : b = ["M", d, e];
            return b
        }});
    H.spline = ya;
    V.areaspline = w(V.area);
    qa = qa.prototype;
    ya = ca(ya, {type: "areaspline", closedStacks: !0, getSegmentPath: qa.getSegmentPath, closeSegment: qa.closeSegment, drawGraph: qa.drawGraph, drawLegendSymbol: F.drawRectangle});
    H.areaspline = ya;
    V.column = w(L, {borderColor: "#FFFFFF", borderWidth: 1, borderRadius: 0, groupPadding: 0.2, marker: null, pointPadding: 0.1, minPointLength: 0, cropThreshold: 50, pointRange: null, states: {hover: {brightness: 0.1, shadow: !1}, select: {color: "#C0C0C0", borderColor: "#000000", shadow: !1}}, dataLabels: {align: null, verticalAlign: null, y: null}, stickyTracking: !1, threshold: 0});
    ya = ca(M, {type: "column", pointAttrToOptions: {stroke: "borderColor", "stroke-width": "borderWidth", fill: "color", r: "borderRadius"}, cropShoulder: 0, trackerGroups: ["group",
            "dataLabelsGroup"], negStacks: !0, init: function() {
            M.prototype.init.apply(this, arguments);
            var a = this, b = a.chart;
            b.hasRendered && q(b.series, function(b) {
                if (b.type === a.type)
                    b.isDirty = !0
            })
        }, getColumnMetrics: function() {
            var a = this, b = a.options, c = a.xAxis, d = a.yAxis, e = c.reversed, f, g = {}, h, i = 0;
            b.grouping === !1 ? i = 1 : q(a.chart.series, function(b) {
                var c = b.options, e = b.yAxis;
                if (b.type === a.type && b.visible && d.len === e.len && d.pos === e.pos)
                    c.stacking ? (f = b.stackKey, g[f] === s && (g[f] = i++), h = g[f]) : c.grouping !== !1 && (h = i++), b.columnIndex =
                            h
            });
            var c = x(O(c.transA) * (c.ordinalSlope || b.pointRange || c.closestPointRange || c.tickInterval || 1), c.len), k = c * b.groupPadding, j = (c - 2 * k) / i, l = b.pointWidth, b = r(l) ? (j - l) / 2 : j * b.pointPadding, l = n(l, j - 2 * b);
            return a.columnMetrics = {width: l, offset: b + (k + ((e ? i - (a.columnIndex || 0) : a.columnIndex) || 0) * j - c / 2) * (e ? -1 : 1)}
        }, translate: function() {
            var a = this.chart, b = this.options, c = b.borderWidth, d = this.yAxis, e = this.translatedThreshold = d.getThreshold(b.threshold), f = n(b.minPointLength, 5), b = this.getColumnMetrics(), g = b.width, h = this.barW =
                    Wa(v(g, 1 + 2 * c)), i = this.pointXOffset = b.offset, k = -(c % 2 ? 0.5 : 0), j = c % 2 ? 0.5 : 1;
            a.renderer.isVML && a.inverted && (j += 1);
            M.prototype.translate.apply(this);
            q(this.points, function(a) {
                var b = n(a.yBottom, e), c = x(v(-999 - b, a.plotY), d.len + 999 + b), p = a.plotX + i, q = h, s = x(c, b), z, c = v(c, b) - s;
                O(c) < f && f && (c = f, s = t(O(s - e) > f ? b - f : e - (d.translate(a.y, 0, 1, 0, 1) <= e ? f : 0)));
                a.barX = p;
                a.pointWidth = g;
                b = O(p) < 0.5;
                q = t(p + q) + k;
                p = t(p) + k;
                q -= p;
                z = O(s) < 0.5;
                c = t(s + c) + j;
                s = t(s) + j;
                c -= s;
                b && (p += 1, q -= 1);
                z && (s -= 1, c += 1);
                a.shapeType = "rect";
                a.shapeArgs = {x: p, y: s, width: q,
                    height: c}
            })
        }, getSymbol: ta, drawLegendSymbol: F.drawRectangle, drawGraph: ta, drawPoints: function() {
            var a = this, b = a.options, c = this.chart.renderer, d = b.animationLimit || 250, e;
            q(a.points, function(f) {
                var g = f.plotY, h = f.graphic;
                if (g !== s && !isNaN(g) && f.y !== null)
                    e = f.shapeArgs, h ? (eb(h), h[a.points.length < d ? "animate" : "attr"](w(e))) : f.graphic = c[f.shapeType](e).attr(f.pointAttr[f.selected ? "select" : ""]).add(a.group).shadow(b.shadow, null, b.stacking && !b.borderRadius);
                else if (h)
                    f.graphic = h.destroy()
            })
        }, animate: function(a) {
            var b =
                    this.yAxis, c = this.options, d = this.chart.inverted, e = {};
            if ($)
                a ? (e.scaleY = 0.001, a = x(b.pos + b.len, v(b.pos, b.toPixels(c.threshold))), d ? e.translateX = a - b.len : e.translateY = a, this.group.attr(e)) : (e.scaleY = 1, e[d ? "translateX" : "translateY"] = b.pos, this.group.animate(e, this.options.animation), this.animate = null)
        }, remove: function() {
            var a = this, b = a.chart;
            b.hasRendered && q(b.series, function(b) {
                if (b.type === a.type)
                    b.isDirty = !0
            });
            M.prototype.remove.apply(a, arguments)
        }});
    H.column = ya;
    V.bar = w(V.column);
    qa = ca(ya, {type: "bar",
        inverted: !0});
    H.bar = qa;
    V.scatter = w(L, {lineWidth: 0, tooltip: {headerFormat: '<span style="font-size: 10px; color:{series.color}">{series.name}</span><br/>', pointFormat: "x: <b>{point.x}</b><br/>y: <b>{point.y}</b><br/>", followPointer: !0}, stickyTracking: !1});
    qa = ca(M, {type: "scatter", sorted: !1, requireSorting: !1, noSharedTooltip: !0, trackerGroups: ["markerGroup"], takeOrdinalPosition: !1, singularTooltips: !0, drawGraph: function() {
            this.options.lineWidth && M.prototype.drawGraph.call(this)
        }});
    H.scatter = qa;
    V.pie = w(L,
            {borderColor: "#FFFFFF", borderWidth: 1, center: [null, null], clip: !1, colorByPoint: !0, dataLabels: {distance: 30, enabled: !0, formatter: function() {
                        return this.point.name
                    }}, ignoreHiddenPoint: !0, legendType: "point", marker: null, size: null, showInLegend: !1, slicedOffset: 10, states: {hover: {brightness: 0.1, shadow: !1}}, stickyTracking: !1, tooltip: {followPointer: !0}});
    L = {type: "pie", isCartesian: !1, pointClass: ca(xa, {init: function() {
                xa.prototype.init.apply(this, arguments);
                var a = this, b;
                if (a.y < 0)
                    a.y = null;
                u(a, {visible: a.visible !==
                            !1, name: n(a.name, "Slice")});
                b = function(b) {
                    a.slice(b.type === "select")
                };
                D(a, "select", b);
                D(a, "unselect", b);
                return a
            }, setVisible: function(a) {
                var b = this, c = b.series, d = c.chart;
                b.visible = b.options.visible = a = a === s ? !b.visible : a;
                c.options.data[ua(b, c.data)] = b.options;
                q(["graphic", "dataLabel", "connector", "shadowGroup"], function(c) {
                    if (b[c])
                        b[c][a ? "show" : "hide"](!0)
                });
                b.legendItem && d.legend.colorizeItem(b, a);
                if (!c.isDirty && c.options.ignoreHiddenPoint)
                    c.isDirty = !0, d.redraw()
            }, slice: function(a, b, c) {
                var d = this.series;
                Za(c, d.chart);
                n(b, !0);
                this.sliced = this.options.sliced = a = r(a) ? a : !this.sliced;
                d.options.data[ua(this, d.data)] = this.options;
                a = a ? this.slicedTranslation : {translateX: 0, translateY: 0};
                this.graphic.animate(a);
                this.shadowGroup && this.shadowGroup.animate(a)
            }}), requireSorting: !1, noSharedTooltip: !0, trackerGroups: ["group", "dataLabelsGroup"], axisTypes: [], pointAttrToOptions: {stroke: "borderColor", "stroke-width": "borderWidth", fill: "color"}, singularTooltips: !0, getColor: ta, animate: function(a) {
            var b = this, c = b.points, d =
                    b.startAngleRad;
            if (!a)
                q(c, function(a) {
                    var c = a.graphic, a = a.shapeArgs;
                    c && (c.attr({r: b.center[3] / 2, start: d, end: d}), c.animate({r: a.r, start: a.start, end: a.end}, b.options.animation))
                }), b.animate = null
        }, setData: function(a, b, c, d) {
            M.prototype.setData.call(this, a, !1, c, d);
            this.processData();
            this.generatePoints();
            n(b, !0) && this.chart.redraw(c)
        }, generatePoints: function() {
            var a, b = 0, c, d, e, f = this.options.ignoreHiddenPoint;
            M.prototype.generatePoints.call(this);
            c = this.points;
            d = c.length;
            for (a = 0; a < d; a++)
                e = c[a], b += f && !e.visible ?
                        0 : e.y;
            this.total = b;
            for (a = 0; a < d; a++)
                e = c[a], e.percentage = b > 0 ? e.y / b * 100 : 0, e.total = b
        }, translate: function(a) {
            this.generatePoints();
            var b = 0, c = this.options, d = c.slicedOffset, e = d + c.borderWidth, f, g, h, i = c.startAngle || 0, k = this.startAngleRad = oa / 180 * (i - 90), i = (this.endAngleRad = oa / 180 * (n(c.endAngle, i + 360) - 90)) - k, j = this.points, l = c.dataLabels.distance, c = c.ignoreHiddenPoint, m, o = j.length, p;
            if (!a)
                this.center = a = this.getCenter();
            this.getX = function(b, c) {
                h = W.asin(x((b - a[1]) / (a[2] / 2 + l), 1));
                return a[0] + (c ? -1 : 1) * aa(h) * (a[2] /
                        2 + l)
            };
            for (m = 0; m < o; m++) {
                p = j[m];
                f = k + b * i;
                if (!c || p.visible)
                    b += p.percentage / 100;
                g = k + b * i;
                p.shapeType = "arc";
                p.shapeArgs = {x: a[0], y: a[1], r: a[2] / 2, innerR: a[3] / 2, start: t(f * 1E3) / 1E3, end: t(g * 1E3) / 1E3};
                h = (g + f) / 2;
                h > 1.5 * oa ? h -= 2 * oa : h < -oa / 2 && (h += 2 * oa);
                p.slicedTranslation = {translateX: t(aa(h) * d), translateY: t(fa(h) * d)};
                f = aa(h) * a[2] / 2;
                g = fa(h) * a[2] / 2;
                p.tooltipPos = [a[0] + f * 0.7, a[1] + g * 0.7];
                p.half = h < -oa / 2 || h > oa / 2 ? 1 : 0;
                p.angle = h;
                e = x(e, l / 2);
                p.labelPos = [a[0] + f + aa(h) * l, a[1] + g + fa(h) * l, a[0] + f + aa(h) * e, a[1] + g + fa(h) * e, a[0] + f, a[1] + g,
                    l < 0 ? "center" : p.half ? "right" : "left", h]
            }
        }, drawGraph: null, drawPoints: function() {
            var a = this, b = a.chart.renderer, c, d, e = a.options.shadow, f, g;
            if (e && !a.shadowGroup)
                a.shadowGroup = b.g("shadow").add(a.group);
            q(a.points, function(h) {
                d = h.graphic;
                g = h.shapeArgs;
                f = h.shadowGroup;
                if (e && !f)
                    f = h.shadowGroup = b.g("shadow").add(a.shadowGroup);
                c = h.sliced ? h.slicedTranslation : {translateX: 0, translateY: 0};
                f && f.attr(c);
                d ? d.animate(u(g, c)) : h.graphic = d = b[h.shapeType](g).setRadialReference(a.center).attr(h.pointAttr[h.selected ? "select" :
                        ""]).attr({"stroke-linejoin": "round"}).attr(c).add(a.group).shadow(e, f);
                h.visible !== void 0 && h.setVisible(h.visible)
            })
        }, sortByAngle: function(a, b) {
            a.sort(function(a, d) {
                return a.angle !== void 0 && (d.angle - a.angle) * b
            })
        }, drawLegendSymbol: F.drawRectangle, getCenter: pa.getCenter, getSymbol: ta};
    L = ca(M, L);
    H.pie = L;
    M.prototype.drawDataLabels = function() {
        var a = this, b = a.options, c = b.cursor, d = b.dataLabels, b = a.points, e, f, g, h;
        if (d.enabled || a._hasPointLabels)
            a.dlProcessOptions && a.dlProcessOptions(d), h = a.plotGroup("dataLabelsGroup",
                    "data-labels", a.visible ? "visible" : "hidden", d.zIndex || 6), f = d, q(b, function(b) {
                var k, j = b.dataLabel, l, m, o = b.connector, p = !0;
                e = b.options && b.options.dataLabels;
                k = n(e && e.enabled, f.enabled);
                if (j && !k)
                    b.dataLabel = j.destroy();
                else if (k) {
                    d = w(f, e);
                    k = d.rotation;
                    l = b.getLabelConfig();
                    g = d.format ? Ja(d.format, l) : d.formatter.call(l, d);
                    d.style.color = n(d.color, d.style.color, a.color, "black");
                    if (j)
                        if (r(g))
                            j.attr({text: g}), p = !1;
                        else {
                            if (b.dataLabel = j = j.destroy(), o)
                                b.connector = o.destroy()
                        }
                    else if (r(g)) {
                        j = {fill: d.backgroundColor,
                            stroke: d.borderColor, "stroke-width": d.borderWidth, r: d.borderRadius || 0, rotation: k, padding: d.padding, zIndex: 1};
                        for (m in j)
                            j[m] === s && delete j[m];
                        j = b.dataLabel = a.chart.renderer[k ? "text" : "label"](g, 0, -999, null, null, null, d.useHTML).attr(j).css(u(d.style, c && {cursor: c})).add(h).shadow(d.shadow)
                    }
                    j && a.alignDataLabel(b, j, d, null, p)
                }
            })
    };
    M.prototype.alignDataLabel = function(a, b, c, d, e) {
        var f = this.chart, g = f.inverted, h = n(a.plotX, -999), i = n(a.plotY, -999), k = b.getBBox();
        if (a = this.visible && (a.series.forceDL || f.isInsidePlot(h,
                t(i), g) || d && f.isInsidePlot(h, g ? d.x + 1 : d.y + d.height - 1, g)))
            d = u({x: g ? f.plotWidth - i : h, y: t(g ? f.plotHeight - h : i), width: 0, height: 0}, d), u(c, {width: k.width, height: k.height}), c.rotation ? (g = {align: c.align, x: d.x + c.x + d.width / 2, y: d.y + c.y + d.height / 2}, b[e ? "attr" : "animate"](g)) : (b.align(c, null, d), g = b.alignAttr, n(c.overflow, "justify") === "justify" ? this.justifyDataLabel(b, c, g, k, d, e) : n(c.crop, !0) && (a = f.isInsidePlot(g.x, g.y) && f.isInsidePlot(g.x + k.width, g.y + k.height)));
        if (!a)
            b.attr({y: -999}), b.placed = !1
    };
    M.prototype.justifyDataLabel =
            function(a, b, c, d, e, f) {
                var g = this.chart, h = b.align, i = b.verticalAlign, k, j;
                k = c.x;
                if (k < 0)
                    h === "right" ? b.align = "left" : b.x = -k, j = !0;
                k = c.x + d.width;
                if (k > g.plotWidth)
                    h === "left" ? b.align = "right" : b.x = g.plotWidth - k, j = !0;
                k = c.y;
                if (k < 0)
                    i === "bottom" ? b.verticalAlign = "top" : b.y = -k, j = !0;
                k = c.y + d.height;
                if (k > g.plotHeight)
                    i === "top" ? b.verticalAlign = "bottom" : b.y = g.plotHeight - k, j = !0;
                if (j)
                    a.placed = !f, a.align(b, null, e)
            };
    if (H.pie)
        H.pie.prototype.drawDataLabels = function() {
            var a = this, b = a.data, c, d = a.chart, e = a.options.dataLabels, f = n(e.connectorPadding,
                    10), g = n(e.connectorWidth, 1), h = d.plotWidth, d = d.plotHeight, i, k, j = n(e.softConnector, !0), l = e.distance, m = a.center, o = m[2] / 2, p = m[1], B = l > 0, s, z, r, u, w = [[], []], x, y, D, C, E, A = [0, 0, 0, 0], H = function(a, b) {
                return b.y - a.y
            };
            if (a.visible && (e.enabled || a._hasPointLabels)) {
                M.prototype.drawDataLabels.apply(a);
                q(b, function(a) {
                    a.dataLabel && a.visible && w[a.half].push(a)
                });
                for (C = 0; !u && b[C]; )
                    u = b[C] && b[C].dataLabel && (b[C].dataLabel.getBBox().height || 21), C++;
                for (C = 2; C--; ) {
                    var b = [], I = [], J = w[C], G = J.length, F;
                    a.sortByAngle(J, C - 0.5);
                    if (l >
                            0) {
                        for (E = p - o - l; E <= p + o + l; E += u)
                            b.push(E);
                        z = b.length;
                        if (G > z) {
                            c = [].concat(J);
                            c.sort(H);
                            for (E = G; E--; )
                                c[E].rank = E;
                            for (E = G; E--; )
                                J[E].rank >= z && J.splice(E, 1);
                            G = J.length
                        }
                        for (E = 0; E < G; E++) {
                            c = J[E];
                            r = c.labelPos;
                            c = 9999;
                            var N, L;
                            for (L = 0; L < z; L++)
                                N = O(b[L] - r[1]), N < c && (c = N, F = L);
                            if (F < E && b[E] !== null)
                                F = E;
                            else
                                for (z < G - E + F && b[E] !== null && (F = z - G + E); b[F] === null; )
                                    F++;
                            I.push({i: F, y: b[F]});
                            b[F] = null
                        }
                        I.sort(H)
                    }
                    for (E = 0; E < G; E++) {
                        c = J[E];
                        r = c.labelPos;
                        s = c.dataLabel;
                        D = c.visible === !1 ? "hidden" : "visible";
                        c = r[1];
                        if (l > 0) {
                            if (z = I.pop(), F = z.i,
                                    y = z.y, c > y && b[F + 1] !== null || c < y && b[F - 1] !== null)
                                y = c
                        } else
                            y = c;
                        x = e.justify ? m[0] + (C ? -1 : 1) * (o + l) : a.getX(F === 0 || F === b.length - 1 ? c : y, C);
                        s._attr = {visibility: D, align: r[6]};
                        s._pos = {x: x + e.x + ({left: f, right: -f}[r[6]] || 0), y: y + e.y - 10};
                        s.connX = x;
                        s.connY = y;
                        if (this.options.size === null)
                            z = s.width, x - z < f ? A[3] = v(t(z - x + f), A[3]) : x + z > h - f && (A[1] = v(t(x + z - h + f), A[1])), y - u / 2 < 0 ? A[0] = v(t(-y + u / 2), A[0]) : y + u / 2 > d && (A[2] = v(t(y + u / 2 - d), A[2]))
                    }
                }
                if (Aa(A) === 0 || this.verifyDataLabelOverflow(A))
                    this.placeDataLabels(), B && g && q(this.points, function(b) {
                        i =
                                b.connector;
                        r = b.labelPos;
                        if ((s = b.dataLabel) && s._pos)
                            D = s._attr.visibility, x = s.connX, y = s.connY, k = j ? ["M", x + (r[6] === "left" ? 5 : -5), y, "C", x, y, 2 * r[2] - r[4], 2 * r[3] - r[5], r[2], r[3], "L", r[4], r[5]] : ["M", x + (r[6] === "left" ? 5 : -5), y, "L", r[2], r[3], "L", r[4], r[5]], i ? (i.animate({d: k}), i.attr("visibility", D)) : b.connector = i = a.chart.renderer.path(k).attr({"stroke-width": g, stroke: e.connectorColor || b.color || "#606060", visibility: D}).add(a.group);
                        else if (i)
                            b.connector = i.destroy()
                    })
            }
        }, H.pie.prototype.placeDataLabels = function() {
            q(this.points,
                    function(a) {
                        var a = a.dataLabel, b;
                        if (a)
                            (b = a._pos) ? (a.attr(a._attr), a[a.moved ? "animate" : "attr"](b), a.moved = !0) : a && a.attr({y: -999})
                    })
        }, H.pie.prototype.alignDataLabel = ta, H.pie.prototype.verifyDataLabelOverflow = function(a) {
            var b = this.center, c = this.options, d = c.center, e = c = c.minSize || 80, f;
            d[0] !== null ? e = v(b[2] - v(a[1], a[3]), c) : (e = v(b[2] - a[1] - a[3], c), b[0] += (a[3] - a[1]) / 2);
            d[1] !== null ? e = v(x(e, b[2] - v(a[0], a[2])), c) : (e = v(x(e, b[2] - a[0] - a[2]), c), b[1] += (a[0] - a[2]) / 2);
            e < b[2] ? (b[2] = e, this.translate(b), q(this.points, function(a) {
                if (a.dataLabel)
                    a.dataLabel._pos =
                            null
            }), this.drawDataLabels && this.drawDataLabels()) : f = !0;
            return f
        };
    if (H.column)
        H.column.prototype.alignDataLabel = function(a, b, c, d, e) {
            var f = this.chart, g = f.inverted, h = a.dlBox || a.shapeArgs, i = a.below || a.plotY > n(this.translatedThreshold, f.plotSizeY), k = n(c.inside, !!this.options.stacking);
            if (h && (d = w(h), g && (d = {x: f.plotWidth - d.y - d.height, y: f.plotHeight - d.x - d.width, width: d.height, height: d.width}), !k))
                g ? (d.x += i ? 0 : d.width, d.width = 0) : (d.y += i ? d.height : 0, d.height = 0);
            c.align = n(c.align, !g || k ? "center" : i ? "right" : "left");
            c.verticalAlign = n(c.verticalAlign, g || k ? "middle" : i ? "top" : "bottom");
            M.prototype.alignDataLabel.call(this, a, b, c, d, e)
        };
    var gb = Q.TrackerMixin = {drawTrackerPoint: function() {
            var a = this, b = a.chart, c = b.pointer, d = a.options.cursor, e = d && {cursor: d}, f = function(c) {
                var d = c.target, e;
                if (b.hoverSeries !== a)
                    a.onMouseOver();
                for (; d && !e; )
                    e = d.point, d = d.parentNode;
                if (e !== s && e !== b.hoverPoint)
                    e.onMouseOver(c)
            };
            q(a.points, function(a) {
                if (a.graphic)
                    a.graphic.element.point = a;
                if (a.dataLabel)
                    a.dataLabel.element.point = a
            });
            if (!a._hasTracking)
                q(a.trackerGroups,
                        function(b) {
                            if (a[b] && (a[b].addClass("highcharts-tracker").on("mouseover", f).on("mouseout", function(a) {
                                c.onTrackerMouseOut(a)
                            }).css(e), bb))
                                a[b].on("touchstart", f)
                        }), a._hasTracking = !0
        }, drawTrackerGraph: function() {
            var a = this, b = a.options, c = b.trackByArea, d = [].concat(c ? a.areaPath : a.graphPath), e = d.length, f = a.chart, g = f.pointer, h = f.renderer, i = f.options.tooltip.snap, k = a.tracker, j = b.cursor, l = j && {cursor: j}, j = a.singlePoints, m, o = function() {
                if (f.hoverSeries !== a)
                    a.onMouseOver()
            }, p = "rgba(192,192,192," + ($ ? 1.0E-4 : 0.002) +
                    ")";
            if (e && !c)
                for (m = e + 1; m--; )
                    d[m] === "M" && d.splice(m + 1, 0, d[m + 1] - i, d[m + 2], "L"), (m && d[m] === "M" || m === e) && d.splice(m, 0, "L", d[m - 2] + i, d[m - 1]);
            for (m = 0; m < j.length; m++)
                e = j[m], d.push("M", e.plotX - i, e.plotY, "L", e.plotX + i, e.plotY);
            k ? k.attr({d: d}) : (a.tracker = h.path(d).attr({"stroke-linejoin": "round", visibility: a.visible ? "visible" : "hidden", stroke: p, fill: c ? p : X, "stroke-width": b.lineWidth + (c ? 0 : 2 * i), zIndex: 2}).add(a.group), q([a.tracker, a.markerGroup], function(a) {
                a.addClass("highcharts-tracker").on("mouseover", o).on("mouseout",
                        function(a) {
                            g.onTrackerMouseOut(a)
                        }).css(l);
                if (bb)
                    a.on("touchstart", o)
            }))
        }};
    if (H.column)
        ya.prototype.drawTracker = gb.drawTrackerPoint;
    if (H.pie)
        H.pie.prototype.drawTracker = gb.drawTrackerPoint;
    if (H.scatter)
        qa.prototype.drawTracker = gb.drawTrackerPoint;
    u(pb.prototype, {setItemEvents: function(a, b, c, d, e) {
            var f = this;
            (c ? b : a.legendGroup).on("mouseover", function() {
                a.setState("hover");
                b.css(f.options.itemHoverStyle)
            }).on("mouseout", function() {
                b.css(a.visible ? d : e);
                a.setState()
            }).on("click", function(b) {
                var c = function() {
                    a.setVisible()
                },
                        b = {browserEvent: b};
                a.firePointEvent ? a.firePointEvent("legendItemClick", b, c) : P(a, "legendItemClick", b, c)
            })
        }, createCheckboxForItem: function(a) {
            a.checkbox = Y("input", {type: "checkbox", checked: a.selected, defaultChecked: a.selected}, this.options.itemCheckboxStyle, this.chart.container);
            D(a.checkbox, "click", function(b) {
                P(a, "checkboxClick", {checked: b.target.checked}, function() {
                    a.select()
                })
            })
        }});
    G.legend.itemStyle.cursor = "pointer";
    u(sa.prototype, {showResetZoom: function() {
            var a = this, b = G.lang, c = a.options.chart.resetZoomButton,
                    d = c.theme, e = d.states, f = c.relativeTo === "chart" ? null : "plotBox";
            this.resetZoomButton = a.renderer.button(b.resetZoom, null, null, function() {
                a.zoomOut()
            }, d, e && e.hover).attr({align: c.position.align, title: b.resetZoomTitle}).add().align(c.position, !1, f)
        }, zoomOut: function() {
            var a = this;
            P(a, "selection", {resetSelection: !0}, function() {
                a.zoom()
            })
        }, zoom: function(a) {
            var b, c = this.pointer, d = !1, e;
            !a || a.resetSelection ? q(this.axes, function(a) {
                b = a.zoom()
            }) : q(a.xAxis.concat(a.yAxis), function(a) {
                var e = a.axis, h = e.isXAxis;
                if (c[h ?
                        "zoomX" : "zoomY"] || c[h ? "pinchX" : "pinchY"])
                    b = e.zoom(a.min, a.max), e.displayBtn && (d = !0)
            });
            e = this.resetZoomButton;
            if (d && !e)
                this.showResetZoom();
            else if (!d && ba(e))
                this.resetZoomButton = e.destroy();
            b && this.redraw(n(this.options.chart.animation, a && a.animation, this.pointCount < 100))
        }, pan: function(a, b) {
            var c = this, d = c.hoverPoints, e;
            d && q(d, function(a) {
                a.setState()
            });
            q(b === "xy" ? [1, 0] : [1], function(b) {
                var d = a[b ? "chartX" : "chartY"], h = c[b ? "xAxis" : "yAxis"][0], i = c[b ? "mouseDownX" : "mouseDownY"], k = (h.pointRange || 0) / 2, j = h.getExtremes(),
                        l = h.toValue(i - d, !0) + k, i = h.toValue(i + c[b ? "plotWidth" : "plotHeight"] - d, !0) - k;
                h.series.length && l > x(j.dataMin, j.min) && i < v(j.dataMax, j.max) && (h.setExtremes(l, i, !1, !1, {trigger: "pan"}), e = !0);
                c[b ? "mouseDownX" : "mouseDownY"] = d
            });
            e && c.redraw(!1);
            J(c.container, {cursor: "move"})
        }});
    u(xa.prototype, {select: function(a, b) {
            var c = this, d = c.series, e = d.chart, a = n(a, !c.selected);
            c.firePointEvent(a ? "select" : "unselect", {accumulate: b}, function() {
                c.selected = c.options.selected = a;
                d.options.data[ua(c, d.data)] = c.options;
                c.setState(a &&
                        "select");
                b || q(e.getSelectedPoints(), function(a) {
                    if (a.selected && a !== c)
                        a.selected = a.options.selected = !1, d.options.data[ua(a, d.data)] = a.options, a.setState(""), a.firePointEvent("unselect")
                })
            })
        }, onMouseOver: function(a) {
            var b = this.series, c = b.chart, d = c.tooltip, e = c.hoverPoint;
            if (e && e !== this)
                e.onMouseOut();
            this.firePointEvent("mouseOver");
            d && (!d.shared || b.noSharedTooltip) && d.refresh(this, a);
            this.setState("hover");
            c.hoverPoint = this
        }, onMouseOut: function() {
            var a = this.series.chart, b = a.hoverPoints;
            if (!b || ua(this,
                    b) === -1)
                this.firePointEvent("mouseOut"), this.setState(), a.hoverPoint = null
        }, firePointEvent: function(a, b, c) {
            var d = this, e = this.series.options;
            (e.point.events[a] || d.options && d.options.events && d.options.events[a]) && this.importEvents();
            a === "click" && e.allowPointSelect && (c = function(a) {
                d.select(null, a.ctrlKey || a.metaKey || a.shiftKey)
            });
            P(this, a, b, c)
        }, importEvents: function() {
            if (!this.hasImportedEvents) {
                var a = w(this.series.options.point, this.options).events, b;
                this.events = a;
                for (b in a)
                    D(this, b, a[b]);
                this.hasImportedEvents =
                        !0
            }
        }, setState: function(a, b) {
            var c = this.plotX, d = this.plotY, e = this.series, f = e.options.states, g = V[e.type].marker && e.options.marker, h = g && !g.enabled, i = g && g.states[a], k = i && i.enabled === !1, j = e.stateMarkerGraphic, l = this.marker || {}, m = e.chart, o = this.pointAttr, a = a || "", b = b && j;
            if (!(a === this.state && !b || this.selected && a !== "select" || f[a] && f[a].enabled === !1 || a && (k || h && !i.enabled) || a && l.states && l.states[a] && l.states[a].enabled === !1)) {
                if (this.graphic)
                    f = g && this.graphic.symbolName && o[a].r, this.graphic.attr(w(o[a], f ? {x: c -
                                f, y: d - f, width: 2 * f, height: 2 * f} : {}));
                else {
                    if (a && i)
                        if (f = i.radius, l = l.symbol || e.symbol, j && j.currentSymbol !== l && (j = j.destroy()), j)
                            j[b ? "animate" : "attr"]({x: c - f, y: d - f});
                        else
                            e.stateMarkerGraphic = j = m.renderer.symbol(l, c - f, d - f, 2 * f, 2 * f).attr(o[a]).add(e.markerGroup), j.currentSymbol = l;
                    if (j)
                        j[a && m.isInsidePlot(c, d, m.inverted) ? "show" : "hide"]()
                }
                this.state = a
            }
        }});
    u(M.prototype, {onMouseOver: function() {
            var a = this.chart, b = a.hoverSeries;
            if (b && b !== this)
                b.onMouseOut();
            this.options.events.mouseOver && P(this, "mouseOver");
            this.setState("hover");
            a.hoverSeries = this
        }, onMouseOut: function() {
            var a = this.options, b = this.chart, c = b.tooltip, d = b.hoverPoint;
            if (d)
                d.onMouseOut();
            this && a.events.mouseOut && P(this, "mouseOut");
            c && !a.stickyTracking && (!c.shared || this.noSharedTooltip) && c.hide();
            this.setState();
            b.hoverSeries = null
        }, setState: function(a) {
            var b = this.options, c = this.graph, d = this.graphNeg, e = b.states, b = b.lineWidth, a = a || "";
            if (this.state !== a)
                this.state = a, e[a] && e[a].enabled === !1 || (a && (b = e[a].lineWidth || b + 1), c && !c.dashstyle && (a = {"stroke-width": b},
                c.attr(a), d && d.attr(a)))
        }, setVisible: function(a, b) {
            var c = this, d = c.chart, e = c.legendItem, f, g = d.options.chart.ignoreHiddenSeries, h = c.visible;
            f = (c.visible = a = c.userOptions.visible = a === s ? !h : a) ? "show" : "hide";
            q(["group", "dataLabelsGroup", "markerGroup", "tracker"], function(a) {
                if (c[a])
                    c[a][f]()
            });
            if (d.hoverSeries === c)
                c.onMouseOut();
            e && d.legend.colorizeItem(c, a);
            c.isDirty = !0;
            c.options.stacking && q(d.series, function(a) {
                if (a.options.stacking && a.visible)
                    a.isDirty = !0
            });
            q(c.linkedSeries, function(b) {
                b.setVisible(a,
                        !1)
            });
            if (g)
                d.isDirtyBox = !0;
            b !== !1 && d.redraw();
            P(c, f)
        }, setTooltipPoints: function(a) {
            var b = [], c, d, e = this.xAxis, f = e && e.getExtremes(), g = e ? e.tooltipLen || e.len : this.chart.plotSizeX, h, i, k = [];
            if (!(this.options.enableMouseTracking === !1 || this.singularTooltips)) {
                if (a)
                    this.tooltipPoints = null;
                q(this.segments || this.points, function(a) {
                    b = b.concat(a)
                });
                e && e.reversed && (b = b.reverse());
                this.orderTooltipPoints && this.orderTooltipPoints(b);
                a = b.length;
                for (i = 0; i < a; i++)
                    if (e = b[i], c = e.x, c >= f.min && c <= f.max) {
                        h = b[i + 1];
                        c = d === s ?
                                0 : d + 1;
                        for (d = b[i + 1]?x(v(0, T((e.clientX + (h?h.wrappedClientX || h.clientX:g)) / 2)), g):g; c >= 0 && c <= d; )
                            k[c++] = e
                    }
                this.tooltipPoints = k
            }
        }, show: function() {
            this.setVisible(!0)
        }, hide: function() {
            this.setVisible(!1)
        }, select: function(a) {
            this.selected = a = a === s ? !this.selected : a;
            if (this.checkbox)
                this.checkbox.checked = a;
            P(this, a ? "select" : "unselect")
        }, drawTracker: gb.drawTrackerGraph});
    R(M.prototype, "init", function(a) {
        var b;
        a.apply(this, Array.prototype.slice.call(arguments, 1));
        (b = this.xAxis) && b.options.ordinal && D(this, "updatedData",
                function() {
                    delete b.ordinalIndex
                })
    });
    R(N.prototype, "getTimeTicks", function(a, b, c, d, e, f, g, h) {
        var i = 0, k = 0, j, l = {}, m, o, p, n = [], q = -Number.MAX_VALUE, z = this.options.tickPixelInterval;
        if (!this.options.ordinal || !f || f.length < 3 || c === s)
            return a.call(this, b, c, d, e);
        for (o = f.length; k < o; k++) {
            p = k && f[k - 1] > d;
            f[k] < c && (i = k);
            if (k === o - 1 || f[k + 1] - f[k] > g * 5 || p) {
                if (f[k] > q) {
                    for (j = a.call(this, b, f[i], f[k], e); j.length && j[0] <= q; )
                        j.shift();
                    j.length && (q = j[j.length - 1]);
                    n = n.concat(j)
                }
                i = k + 1
            }
            if (p)
                break
        }
        a = j.info;
        if (h && a.unitRange <= A.hour) {
            k =
                    n.length - 1;
            for (i = 1; i < k; i++)
                (new Date(n[i] - La))[Va]() !== (new Date(n[i - 1] - La))[Va]() && (l[n[i]] = "day", m = !0);
            m && (l[n[0]] = "day");
            a.higherRanks = l
        }
        n.info = a;
        if (h && r(z)) {
            var h = a = n.length, k = [], t;
            for (m = []; h--; )
                i = this.translate(n[h]), t && (m[h] = t - i), k[h] = t = i;
            m.sort();
            m = m[T(m.length / 2)];
            m < z * 0.6 && (m = null);
            h = n[a - 1] > d ? a - 1 : a;
            for (t = void 0; h--; )
                i = k[h], d = t - i, t && d < z * 0.8 && (m === null || d < m * 0.8) ? (l[n[h]] && !l[n[h + 1]] ? (d = h + 1, t = i) : d = h, n.splice(d, 1)) : t = i
        }
        return n
    });
    u(N.prototype, {beforeSetTickPositions: function() {
            var a, b = [], c = !1,
                    d, e = this.getExtremes(), f = e.min, e = e.max, g;
            if (this.options.ordinal) {
                q(this.series, function(c, d) {
                    if (c.visible !== !1 && c.takeOrdinalPosition !== !1 && (b = b.concat(c.processedXData), a = b.length, b.sort(function(a, b) {
                        return a - b
                    }), a))
                        for (d = a - 1; d--; )
                            b[d] === b[d + 1] && b.splice(d, 1)
                });
                a = b.length;
                if (a > 2) {
                    d = b[1] - b[0];
                    for (g = a - 1; g-- && !c; )
                        b[g + 1] - b[g] !== d && (c = !0);
                    if (!this.options.keepOrdinalPadding && (b[0] - f > d || e - b[b.length - 1] > d))
                        c = !0
                }
                c ? (this.ordinalPositions = b, c = this.val2lin(v(f, b[0]), !0), d = this.val2lin(x(e, b[b.length - 1]),
                        !0), this.ordinalSlope = e = (e - f) / (d - c), this.ordinalOffset = f - c * e) : this.ordinalPositions = this.ordinalSlope = this.ordinalOffset = s
            }
            this.groupIntervalFactor = null
        }, val2lin: function(a, b) {
            var c = this.ordinalPositions;
            if (c) {
                var d = c.length, e, f;
                for (e = d; e--; )
                    if (c[e] === a) {
                        f = e;
                        break
                    }
                for (e = d - 1; e--; )
                    if (a > c[e] || e === 0) {
                        c = (a - c[e]) / (c[e + 1] - c[e]);
                        f = e + c;
                        break
                    }
                return b ? f : this.ordinalSlope * (f || 0) + this.ordinalOffset
            } else
                return a
        }, lin2val: function(a, b) {
            var c = this.ordinalPositions;
            if (c) {
                var d = this.ordinalSlope, e = this.ordinalOffset,
                        f = c.length - 1, g, h;
                if (b)
                    a < 0 ? a = c[0] : a > f ? a = c[f] : (f = T(a), h = a - f);
                else
                    for (; f--; )
                        if (g = d * f + e, a >= g) {
                            d = d * (f + 1) + e;
                            h = (a - g) / (d - g);
                            break
                        }
                return h !== s && c[f] !== s ? c[f] + (h ? h * (c[f + 1] - c[f]) : 0) : a
            } else
                return a
        }, getExtendedPositions: function() {
            var a = this.chart, b = this.series[0].currentDataGrouping, c = this.ordinalIndex, d = b ? b.count + b.unitName : "raw", e = this.getExtremes(), f, g;
            if (!c)
                c = this.ordinalIndex = {};
            if (!c[d])
                f = {series: [], getExtremes: function() {
                        return{min: e.dataMin, max: e.dataMax}
                    }, options: {ordinal: !0}, val2lin: N.prototype.val2lin},
                q(this.series, function(c) {
                    g = {xAxis: f, xData: c.xData, chart: a, destroyGroupedData: ta};
                    g.options = {dataGrouping: b ? {enabled: !0, forced: !0, approximation: "open", units: [[b.unitName, [b.count]]]} : {enabled: !1}};
                    c.processData.apply(g);
                    f.series.push(g)
                }), this.beforeSetTickPositions.apply(f), c[d] = f.ordinalPositions;
            return c[d]
        }, getGroupIntervalFactor: function(a, b, c) {
            var d = 0, c = c.processedXData, e = c.length, f = [], g = this.groupIntervalFactor;
            if (!g) {
                for (; d < e - 1; d++)
                    f[d] = c[d + 1] - c[d];
                f.sort(function(a, b) {
                    return a - b
                });
                d = f[T(e /
                        2)];
                a = v(a, c[0]);
                b = x(b, c[e - 1]);
                this.groupIntervalFactor = g = e * d / (b - a)
            }
            return g
        }, postProcessTickInterval: function(a) {
            var b = this.ordinalSlope;
            return b ? a / (b / this.closestPointRange) : a
        }});
    R(sa.prototype, "pan", function(a, b) {
        var c = this.xAxis[0], d = b.chartX, e = !1;
        if (c.options.ordinal && c.series.length) {
            var f = this.mouseDownX, g = c.getExtremes(), h = g.dataMax, i = g.min, k = g.max, j = this.hoverPoints, l = c.closestPointRange, f = (f - d) / (c.translationSlope * (c.ordinalSlope || l)), m = {ordinalPositions: c.getExtendedPositions()}, l = c.lin2val,
                    o = c.val2lin, p;
            if (m.ordinalPositions) {
                if (O(f) > 1)
                    j && q(j, function(a) {
                        a.setState()
                    }), f < 0 ? (j = m, p = c.ordinalPositions ? c : m) : (j = c.ordinalPositions ? c : m, p = m), m = p.ordinalPositions, h > m[m.length - 1] && m.push(h), this.fixedRange = k - i, f = c.toFixedRange(null, null, l.apply(j, [o.apply(j, [i, !0]) + f, !0]), l.apply(p, [o.apply(p, [k, !0]) + f, !0])), f.min >= x(g.dataMin, i) && f.max <= v(h, k) && c.setExtremes(f.min, f.max, !0, !1, {trigger: "pan"}), this.mouseDownX = d, J(this.container, {cursor: "move"})
            } else
                e = !0
        } else
            e = !0;
        e && a.apply(this, Array.prototype.slice.call(arguments,
                1))
    });
    R(M.prototype, "getSegments", function(a) {
        var b, c = this.options.gapSize, d = this.xAxis;
        a.apply(this, Array.prototype.slice.call(arguments, 1));
        if (c)
            b = this.segments, q(b, function(a, f) {
                for (var g = a.length - 1; g--; )
                    a[g + 1].x - a[g].x > d.closestPointRange * c && b.splice(f + 1, 0, a.splice(g + 1, a.length - g))
            })
    });
    var Z = M.prototype, L = Gb.prototype, gc = Z.processData, hc = Z.generatePoints, ic = Z.destroy, jc = L.tooltipHeaderFormatter, kc = {approximation: "average", groupPixelWidth: 2, dateTimeLabelFormats: Jb("millisecond", ["%A, %b %e, %H:%M:%S.%L",
            "%A, %b %e, %H:%M:%S.%L", "-%H:%M:%S.%L"], "second", ["%A, %b %e, %H:%M:%S", "%A, %b %e, %H:%M:%S", "-%H:%M:%S"], "minute", ["%A, %b %e, %H:%M", "%A, %b %e, %H:%M", "-%H:%M"], "hour", ["%A, %b %e, %H:%M", "%A, %b %e, %H:%M", "-%H:%M"], "day", ["%A, %b %e, %Y", "%A, %b %e", "-%A, %b %e, %Y"], "week", ["Week from %A, %b %e, %Y", "%A, %b %e", "-%A, %b %e, %Y"], "month", ["%B %Y", "%B", "-%B %Y"], "year", ["%Y", "%Y", "-%Y"])}, Wb = {line: {}, spline: {}, area: {}, areaspline: {}, column: {approximation: "sum", groupPixelWidth: 10}, arearange: {approximation: "range"},
        areasplinerange: {approximation: "range"}, columnrange: {approximation: "range", groupPixelWidth: 10}, candlestick: {approximation: "ohlc", groupPixelWidth: 10}, ohlc: {approximation: "ohlc", groupPixelWidth: 5}}, Xb = [["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]], ["second", [1, 2, 5, 10, 15, 30]], ["minute", [1, 2, 5, 10, 15, 30]], ["hour", [1, 2, 3, 4, 6, 8, 12]], ["day", [1]], ["week", [1]], ["month", [1, 3, 6]], ["year", null]], Pa = {sum: function(a) {
            var b = a.length, c;
            if (!b && a.hasNulls)
                c = null;
            else if (b)
                for (c = 0; b--; )
                    c += a[b];
            return c
        }, average: function(a) {
            var b =
                    a.length, a = Pa.sum(a);
            typeof a === "number" && b && (a /= b);
            return a
        }, open: function(a) {
            return a.length ? a[0] : a.hasNulls ? null : s
        }, high: function(a) {
            return a.length ? Aa(a) : a.hasNulls ? null : s
        }, low: function(a) {
            return a.length ? Sa(a) : a.hasNulls ? null : s
        }, close: function(a) {
            return a.length ? a[a.length - 1] : a.hasNulls ? null : s
        }, ohlc: function(a, b, c, d) {
            a = Pa.open(a);
            b = Pa.high(b);
            c = Pa.low(c);
            d = Pa.close(d);
            if (typeof a === "number" || typeof b === "number" || typeof c === "number" || typeof d === "number")
                return[a, b, c, d]
        }, range: function(a, b) {
            a =
                    Pa.low(a);
            b = Pa.high(b);
            if (typeof a === "number" || typeof b === "number")
                return[a, b]
        }};
    Z.groupData = function(a, b, c, d) {
        var e = this.data, f = this.options.data, g = [], h = [], i = a.length, k, j, l = !!b, m = [[], [], [], []], d = typeof d === "function" ? d : Pa[d], o = this.pointArrayMap, p = o && o.length, n;
        for (n = 0; n <= i; n++)
            if (a[n] >= c[0])
                break;
        for (; n <= i; n++) {
            for (; c[1] !== s && a[n] >= c[1] || n === i; )
                if (k = c.shift(), j = d.apply(0, m), j !== s && (g.push(k), h.push(j)), m[0] = [], m[1] = [], m[2] = [], m[3] = [], n === i)
                    break;
            if (n === i)
                break;
            if (o) {
                k = this.cropStart + n;
                k = e && e[k] ||
                        this.pointClass.prototype.applyOptions.apply({series: this}, [f[k]]);
                var q;
                for (j = 0; j < p; j++)
                    if (q = k[o[j]], typeof q === "number")
                        m[j].push(q);
                    else if (q === null)
                        m[j].hasNulls = !0
            } else if (k = l ? b[n] : null, typeof k === "number")
                m[0].push(k);
            else if (k === null)
                m[0].hasNulls = !0
        }
        return[g, h]
    };
    Z.processData = function() {
        var a = this.chart, b = this.options, c = b.dataGrouping, d = c && n(c.enabled, a.options._stock), e;
        this.forceCrop = d;
        this.groupPixelWidth = null;
        this.hasProcessed = !0;
        if (gc.apply(this, arguments) !== !1 && d) {
            this.destroyGroupedData();
            var f = this.processedXData, g = this.processedYData, h = a.plotSizeX, a = this.xAxis, i = a.options.ordinal, k = this.groupPixelWidth = a.getGroupPixelWidth && a.getGroupPixelWidth(), d = this.pointRange;
            if (k) {
                e = !0;
                this.points = null;
                var j = a.getExtremes(), d = j.min, j = j.max, i = i && a.getGroupIntervalFactor(d, j, this) || 1, h = k * (j - d) / h * i, k = a.getTimeTicks(a.normalizeTimeTickInterval(h, c.units || Xb), d, j, null, f, this.closestPointRange), g = Z.groupData.apply(this, [f, g, k, c.approximation]), f = g[0], g = g[1];
                if (c.smoothed) {
                    c = f.length - 1;
                    for (f[c] = j; c-- &&
                            c > 0; )
                        f[c] += h / 2;
                    f[0] = d
                }
                this.currentDataGrouping = k.info;
                if (b.pointRange === null)
                    this.pointRange = k.info.totalRange;
                this.closestPointRange = k.info.totalRange;
                if (r(f[0]) && f[0] < a.dataMin)
                    a.dataMin = f[0];
                this.processedXData = f;
                this.processedYData = g
            } else
                this.currentDataGrouping = null, this.pointRange = d;
            this.hasGroupedData = e
        }
    };
    Z.destroyGroupedData = function() {
        var a = this.groupedData;
        q(a || [], function(b, c) {
            b && (a[c] = b.destroy ? b.destroy() : null)
        });
        this.groupedData = null
    };
    Z.generatePoints = function() {
        hc.apply(this);
        this.destroyGroupedData();
        this.groupedData = this.hasGroupedData ? this.points : null
    };
    L.tooltipHeaderFormatter = function(a) {
        var b = a.series, c = b.tooltipOptions, d = b.options.dataGrouping, e = c.xDateFormat, f, g = b.xAxis, h;
        if (g && g.options.type === "datetime" && d && za(a.key)) {
            b = b.currentDataGrouping;
            d = d.dateTimeLabelFormats;
            if (b)
                g = d[b.unitName], b.count === 1 ? e = g[0] : (e = g[1], f = g[2]);
            else if (!e && d)
                for (h in A)
                    if (A[h] >= g.closestPointRange || A[h] <= A.day && a.key % A[h] > 0) {
                        e = d[h][0];
                        break
                    }
            e = ra(e, a.key);
            f && (e += ra(f, a.key + b.totalRange - 1));
            a = c.headerFormat.replace("{point.key}",
                    e)
        } else
            a = jc.call(this, a);
        return a
    };
    Z.destroy = function() {
        for (var a = this.groupedData || [], b = a.length; b--; )
            a[b] && a[b].destroy();
        ic.apply(this)
    };
    R(Z, "setOptions", function(a, b) {
        var c = a.call(this, b), d = this.type, e = this.chart.options.plotOptions, f = V[d].dataGrouping;
        if (Wb[d])
            f || (f = w(kc, Wb[d])), c.dataGrouping = w(f, e.series && e.series.dataGrouping, e[d].dataGrouping, b.dataGrouping);
        if (this.chart.options._stock)
            this.requireSorting = !0;
        return c
    });
    R(N.prototype, "setScale", function(a) {
        a.call(this);
        q(this.series, function(a) {
            a.hasProcessed =
                    !1
        })
    });
    N.prototype.getGroupPixelWidth = function() {
        var a = this.series, b = a.length, c, d = 0, e = !1, f;
        for (c = b; c--; )
            (f = a[c].options.dataGrouping) && (d = v(d, f.groupPixelWidth));
        for (c = b; c--; )
            if ((f = a[c].options.dataGrouping) && a[c].hasProcessed)
                if (b = (a[c].processedXData || a[c].data).length, a[c].groupPixelWidth || b > this.chart.plotSizeX / d || b && f.forced)
                    e = !0;
        return e ? d : 0
    };
    V.ohlc = w(V.column, {lineWidth: 1, tooltip: {pointFormat: '<span style="color:{series.color};font-weight:bold">{series.name}</span><br/>Open: {point.open}<br/>High: {point.high}<br/>Low: {point.low}<br/>Close: {point.close}<br/>'},
        states: {hover: {lineWidth: 3}}, threshold: null});
    L = ca(H.column, {type: "ohlc", pointArrayMap: ["open", "high", "low", "close"], toYData: function(a) {
            return[a.open, a.high, a.low, a.close]
        }, pointValKey: "high", pointAttrToOptions: {stroke: "color", "stroke-width": "lineWidth"}, upColorProp: "stroke", getAttribs: function() {
            H.column.prototype.getAttribs.apply(this, arguments);
            var a = this.options, b = a.states, a = a.upColor || this.color, c = w(this.pointAttr), d = this.upColorProp;
            c[""][d] = a;
            c.hover[d] = b.hover.upColor || a;
            c.select[d] = b.select.upColor ||
                    a;
            q(this.points, function(a) {
                if (a.open < a.close)
                    a.pointAttr = c
            })
        }, translate: function() {
            var a = this.yAxis;
            H.column.prototype.translate.apply(this);
            q(this.points, function(b) {
                if (b.open !== null)
                    b.plotOpen = a.translate(b.open, 0, 1, 0, 1);
                if (b.close !== null)
                    b.plotClose = a.translate(b.close, 0, 1, 0, 1)
            })
        }, drawPoints: function() {
            var a = this, b = a.chart, c, d, e, f, g, h, i, k;
            q(a.points, function(j) {
                if (j.plotY !== s)
                    i = j.graphic, c = j.pointAttr[j.selected ? "selected" : ""], f = c["stroke-width"] % 2 / 2, k = t(j.plotX) - f, g = t(j.shapeArgs.width / 2), h =
                            ["M", k, t(j.yBottom), "L", k, t(j.plotY)], j.open !== null && (d = t(j.plotOpen) + f, h.push("M", k, d, "L", k - g, d)), j.close !== null && (e = t(j.plotClose) + f, h.push("M", k, e, "L", k + g, e)), i ? i.animate({d: h}) : j.graphic = b.renderer.path(h).attr(c).add(a.group)
            })
        }, animate: null});
    H.ohlc = L;
    V.candlestick = w(V.column, {lineColor: "black", lineWidth: 1, states: {hover: {lineWidth: 2}}, tooltip: V.ohlc.tooltip, threshold: null, upColor: "white"});
    L = ca(L, {type: "candlestick", pointAttrToOptions: {fill: "color", stroke: "lineColor", "stroke-width": "lineWidth"},
        upColorProp: "fill", getAttribs: function() {
            H.ohlc.prototype.getAttribs.apply(this, arguments);
            var a = this.options, b = a.states, c = a.upLineColor || a.lineColor, d = b.hover.upLineColor || c, e = b.select.upLineColor || c;
            q(this.points, function(a) {
                if (a.open < a.close)
                    a.pointAttr[""].stroke = c, a.pointAttr.hover.stroke = d, a.pointAttr.select.stroke = e
            })
        }, drawPoints: function() {
            var a = this, b = a.chart, c, d = a.pointAttr[""], e, f, g, h, i, k, j, l, m, o, p;
            q(a.points, function(n) {
                m = n.graphic;
                if (n.plotY !== s)
                    c = n.pointAttr[n.selected ? "selected" : ""] ||
                            d, j = c["stroke-width"] % 2 / 2, l = t(n.plotX) - j, e = n.plotOpen, f = n.plotClose, g = W.min(e, f), h = W.max(e, f), p = t(n.shapeArgs.width / 2), i = t(g) !== t(n.plotY), k = h !== n.yBottom, g = t(g) + j, h = t(h) + j, o = ["M", l - p, h, "L", l - p, g, "L", l + p, g, "L", l + p, h, "Z", "M", l, g, "L", l, i ? t(n.plotY) : g, "M", l, h, "L", l, k ? t(n.yBottom) : h, "Z"], m ? m.animate({d: o}) : n.graphic = b.renderer.path(o).attr(c).add(a.group).shadow(a.options.shadow)
            })
        }});
    H.candlestick = L;
    var qb = ha.prototype.symbols;
    V.flags = w(V.column, {dataGrouping: null, fillColor: "white", lineWidth: 1, pointRange: 0,
        shape: "flag", stackDistance: 12, states: {hover: {lineColor: "black", fillColor: "#FCFFC5"}}, style: {fontSize: "11px", fontWeight: "bold", textAlign: "center"}, tooltip: {pointFormat: "{point.text}<br/>"}, threshold: null, y: -30});
    H.flags = ca(H.column, {type: "flags", sorted: !1, noSharedTooltip: !0, takeOrdinalPosition: !1, trackerGroups: ["markerGroup"], forceCrop: !0, init: M.prototype.init, pointAttrToOptions: {fill: "fillColor", stroke: "color", "stroke-width": "lineWidth", r: "radius"}, translate: function() {
            H.column.prototype.translate.apply(this);
            var a = this.chart, b = this.points, c = b.length - 1, d, e, f = this.options.onSeries, f = (d = f && a.get(f)) && d.options.step, g = d && d.points, h = g && g.length, i = this.xAxis, k = i.getExtremes(), j, l, m;
            if (d && d.visible && h) {
                d = d.currentDataGrouping;
                l = g[h - 1].x + (d ? d.totalRange : 0);
                for (b.sort(function(a, b) {
                    return a.x - b.x
                }); h-- && b[c]; )
                    if (d = b[c], j = g[h], j.x <= d.x && j.plotY !== s) {
                        if (d.x <= l)
                            d.plotY = j.plotY, j.x < d.x && !f && (m = g[h + 1]) && m.plotY !== s && (d.plotY += (d.x - j.x) / (m.x - j.x) * (m.plotY - j.plotY));
                        c--;
                        h++;
                        if (c < 0)
                            break
                    }
            }
            q(b, function(c, d) {
                if (c.plotY ===
                        s)
                    c.x >= k.min && c.x <= k.max ? c.plotY = a.chartHeight - i.bottom - (i.opposite ? i.height : 0) + i.offset - a.plotTop : c.shapeArgs = {};
                if ((e = b[d - 1]) && e.plotX === c.plotX) {
                    if (e.stackIndex === s)
                        e.stackIndex = 0;
                    c.stackIndex = e.stackIndex + 1
                }
            })
        }, drawPoints: function() {
            var a, b = this.pointAttr[""], c = this.points, d = this.chart.renderer, e, f, g = this.options, h = g.y, i, k, j, l, m = g.lineWidth % 2 / 2, o, n;
            for (k = c.length; k--; )
                if (j = c[k], a = j.plotX > this.xAxis.len, e = j.plotX + (a ? m : -m), l = j.stackIndex, i = j.options.shape || g.shape, f = j.plotY, f !== s && (f = j.plotY + h +
                        m - (l !== s && l * g.stackDistance)), o = l ? s : j.plotX + m, n = l ? s : j.plotY, l = j.graphic, f !== s && e >= 0 && !a)
                    a = j.pointAttr[j.selected ? "select" : ""] || b, l ? l.attr({x: e, y: f, r: a.r, anchorX: o, anchorY: n}) : j.graphic = d.label(j.options.title || g.title || "A", e, f, i, o, n, g.useHTML).css(w(g.style, j.style)).attr(a).attr({align: i === "flag" ? "left" : "center", width: g.width, height: g.height}).add(this.markerGroup).shadow(g.shadow), j.tooltipPos = [e, f];
                else if (l)
                    j.graphic = l.destroy()
        }, drawTracker: function() {
            var a = this.points;
            gb.drawTrackerPoint.apply(this);
            q(a, function(b) {
                var c = b.graphic;
                c && D(c.element, "mouseover", function() {
                    if (b.stackIndex > 0 && !b.raised)
                        b._y = c.y, c.attr({y: b._y - 8}), b.raised = !0;
                    q(a, function(a) {
                        if (a !== b && a.raised && a.graphic)
                            a.graphic.attr({y: a._y}), a.raised = !1
                    })
                })
            })
        }, animate: ta});
    qb.flag = function(a, b, c, d, e) {
        var f = e && e.anchorX || a, e = e && e.anchorY || b;
        return["M", f, e, "L", a, b + d, a, b, a + c, b, a + c, b + d, a, b + d, "M", f, e, "Z"]
    };
    q(["circle", "square"], function(a) {
        qb[a + "pin"] = function(b, c, d, e, f) {
            var g = f && f.anchorX, f = f && f.anchorY, b = qb[a](b, c, d, e);
            g && f && b.push("M",
                    g, c > f ? c : c + e, "L", g, f);
            return b
        }
    });
    Xa === Q.VMLRenderer && q(["flag", "circlepin", "squarepin"], function(a) {
        fb.prototype.symbols[a] = qb[a]
    });
    L = {linearGradient: {x1: 0, y1: 0, x2: 0, y2: 1}, stops: [[0, "#FFF"], [1, "#CCC"]]};
    F = [].concat(Xb);
    F[4] = ["day", [1, 2, 3, 4]];
    F[5] = ["week", [1, 2, 3]];
    u(G, {navigator: {handles: {backgroundColor: "#FFF", borderColor: "#666"}, height: 40, margin: 10, maskFill: "rgba(255, 255, 255, 0.75)", outlineColor: "#444", outlineWidth: 1, series: {type: H.areaspline === s ? "line" : "areaspline", color: "#4572A7", compare: null,
                fillOpacity: 0.4, dataGrouping: {approximation: "average", enabled: !0, groupPixelWidth: 2, smoothed: !0, units: F}, dataLabels: {enabled: !1, zIndex: 2}, id: "highcharts-navigator-series", lineColor: "#4572A7", lineWidth: 1, marker: {enabled: !1}, pointRange: 0, shadow: !1, threshold: null}, xAxis: {tickWidth: 0, lineWidth: 0, gridLineWidth: 1, tickPixelInterval: 200, labels: {align: "left", x: 3, y: -4}, crosshair: !1}, yAxis: {gridLineWidth: 0, startOnTick: !1, endOnTick: !1, minPadding: 0.1, maxPadding: 0.1, labels: {enabled: !1}, crosshair: !1, title: {text: null},
                tickWidth: 0}}, scrollbar: {height: db ? 20 : 14, barBackgroundColor: L, barBorderRadius: 2, barBorderWidth: 1, barBorderColor: "#666", buttonArrowColor: "#666", buttonBackgroundColor: L, buttonBorderColor: "#666", buttonBorderRadius: 2, buttonBorderWidth: 1, minWidth: 6, rifleColor: "#666", trackBackgroundColor: {linearGradient: {x1: 0, y1: 0, x2: 0, y2: 1}, stops: [[0, "#EEE"], [1, "#FFF"]]}, trackBorderColor: "#CCC", trackBorderWidth: 1, liveRedraw: $ && !db}});
    yb.prototype = {drawHandle: function(a, b) {
            var c = this.chart, d = c.renderer, e = this.elementsToDestroy,
                    f = this.handles, g = this.navigatorOptions.handles, g = {fill: g.backgroundColor, stroke: g.borderColor, "stroke-width": 1}, h;
            this.rendered || (f[b] = d.g("navigator-handle-" + ["left", "right"][b]).css({cursor: "e-resize"}).attr({zIndex: 4 - b}).add(), h = d.rect(-4.5, 0, 9, 16, 3, 1).attr(g).add(f[b]), e.push(h), h = d.path(["M", -1.5, 4, "L", -1.5, 12, "M", 0.5, 4, "L", 0.5, 12]).attr(g).add(f[b]), e.push(h));
            f[b][c.isResizing ? "animate" : "attr"]({translateX: this.scrollerLeft + this.scrollbarHeight + parseInt(a, 10), translateY: this.top + this.height /
                        2 - 8})
        }, drawScrollbarButton: function(a) {
            var b = this.chart.renderer, c = this.elementsToDestroy, d = this.scrollbarButtons, e = this.scrollbarHeight, f = this.scrollbarOptions, g;
            this.rendered || (d[a] = b.g().add(this.scrollbarGroup), g = b.rect(-0.5, -0.5, e + 1, e + 1, f.buttonBorderRadius, f.buttonBorderWidth).attr({stroke: f.buttonBorderColor, "stroke-width": f.buttonBorderWidth, fill: f.buttonBackgroundColor}).add(d[a]), c.push(g), g = b.path(["M", e / 2 + (a ? -1 : 1), e / 2 - 3, "L", e / 2 + (a ? -1 : 1), e / 2 + 3, e / 2 + (a ? 2 : -2), e / 2]).attr({fill: f.buttonArrowColor}).add(d[a]),
                    c.push(g));
            a && d[a].attr({translateX: this.scrollerWidth - e})
        }, render: function(a, b, c, d) {
            var e = this.chart, f = e.renderer, g, h, i, k, j = this.scrollbarGroup, l = this.navigatorGroup, m = this.scrollbar, l = this.xAxis, o = this.scrollbarTrack, p = this.scrollbarHeight, q = this.scrollbarEnabled, s = this.navigatorOptions, r = this.scrollbarOptions, u = r.minWidth, w = this.height, y = this.top, C = this.navigatorEnabled, D = s.outlineWidth, A = D / 2, F = 0, E = this.outlineHeight, J = r.barBorderRadius, H = r.barBorderWidth, G = y + A, I;
            if (!isNaN(a)) {
                this.navigatorLeft =
                        g = n(l.left, e.plotLeft + p);
                this.navigatorWidth = h = n(l.len, e.plotWidth - 2 * p);
                this.scrollerLeft = i = g - p;
                this.scrollerWidth = k = k = h + 2 * p;
                l.getExtremes && (I = this.getUnionExtremes(!0)) && (I.dataMin !== l.min || I.dataMax !== l.max) && l.setExtremes(I.dataMin, I.dataMax, !0, !1);
                c = n(c, l.translate(a));
                d = n(d, l.translate(b));
                if (isNaN(c) || O(c) === Infinity)
                    c = 0, d = k;
                if (!(l.translate(d, !0) - l.translate(c, !0) < e.xAxis[0].minRange)) {
                    this.zoomedMax = x(v(c, d), h);
                    this.zoomedMin = v(this.fixedWidth ? this.zoomedMax - this.fixedWidth : x(c, d), 0);
                    this.range =
                            this.zoomedMax - this.zoomedMin;
                    c = t(this.zoomedMax);
                    b = t(this.zoomedMin);
                    a = c - b;
                    if (!this.rendered) {
                        if (C)
                            this.navigatorGroup = l = f.g("navigator").attr({zIndex: 3}).add(), this.leftShade = f.rect().attr({fill: s.maskFill}).add(l), this.rightShade = f.rect().attr({fill: s.maskFill}).add(l), this.outline = f.path().attr({"stroke-width": D, stroke: s.outlineColor}).add(l);
                        if (q)
                            this.scrollbarGroup = j = f.g("scrollbar").add(), m = r.trackBorderWidth, this.scrollbarTrack = o = f.rect().attr({x: 0, y: -m % 2 / 2, fill: r.trackBackgroundColor, stroke: r.trackBorderColor,
                                "stroke-width": m, r: r.trackBorderRadius || 0, height: p}).add(j), this.scrollbar = m = f.rect().attr({y: -H % 2 / 2, height: p, fill: r.barBackgroundColor, stroke: r.barBorderColor, "stroke-width": H, r: J}).add(j), this.scrollbarRifles = f.path().attr({stroke: r.rifleColor, "stroke-width": 1}).add(j)
                    }
                    e = e.isResizing ? "animate" : "attr";
                    C && (this.leftShade[e]({x: g, y: y, width: b, height: w}), this.rightShade[e]({x: g + c, y: y, width: h - c, height: w}), this.outline[e]({d: ["M", i, G, "L", g + b + A, G, g + b + A, G + E - p, "M", g + c - A, G + E - p, "L", g + c - A, G, i + k, G]}), this.drawHandle(b +
                            A, 0), this.drawHandle(c + A, 1));
                    if (q && j)
                        this.drawScrollbarButton(0), this.drawScrollbarButton(1), j[e]({translateX: i, translateY: t(G + w)}), o[e]({width: k}), g = p + b, h = a - H, h < u && (F = (u - h) / 2, h = u, g -= F), this.scrollbarPad = F, m[e]({x: T(g) + H % 2 / 2, width: h}), u = p + b + a / 2 - 0.5, this.scrollbarRifles.attr({visibility: a > 12 ? "visible" : "hidden"})[e]({d: ["M", u - 3, p / 4, "L", u - 3, 2 * p / 3, "M", u, p / 4, "L", u, 2 * p / 3, "M", u + 3, p / 4, "L", u + 3, 2 * p / 3]});
                    this.scrollbarPad = F;
                    this.rendered = !0
                }
            }
        }, addEvents: function() {
            var a = this.chart.container, b = this.mouseDownHandler,
                    c = this.mouseMoveHandler, d = this.mouseUpHandler, e;
            e = [[a, "mousedown", b], [a, "mousemove", c], [document, "mouseup", d]];
            bb && e.push([a, "touchstart", b], [a, "touchmove", c], [document, "touchend", d]);
            q(e, function(a) {
                D.apply(null, a)
            });
            this._events = e
        }, removeEvents: function() {
            q(this._events, function(a) {
                S.apply(null, a)
            });
            this._events = s;
            this.navigatorEnabled && this.baseSeries && S(this.baseSeries, "updatedData", this.updatedDataHandler)
        }, init: function() {
            var a = this, b = a.chart, c, d, e = a.scrollbarHeight, f = a.navigatorOptions, g = a.height,
                    h = a.top, i, k, j = document.body.style, l, m = a.baseSeries;
            a.mouseDownHandler = function(d) {
                var d = b.pointer.normalize(d), e = a.zoomedMin, f = a.zoomedMax, h = a.top, k = a.scrollbarHeight, m = a.scrollerLeft, o = a.scrollerWidth, n = a.navigatorLeft, p = a.navigatorWidth, q = a.scrollbarPad, s = a.range, r = d.chartX, t = d.chartY, d = b.xAxis[0], u, v = db ? 10 : 7;
                if (t > h && t < h + g + k)
                    if ((h = !a.scrollbarEnabled || t < h + g) && W.abs(r - e - n) < v)
                        a.grabbedLeft = !0, a.otherHandlePos = f, a.fixedExtreme = d.max, b.fixedRange = null;
                    else if (h && W.abs(r - f - n) < v)
                        a.grabbedRight = !0, a.otherHandlePos =
                                e, a.fixedExtreme = d.min, b.fixedRange = null;
                    else if (r > n + e - q && r < n + f + q) {
                        a.grabbedCenter = r;
                        a.fixedWidth = s;
                        if (b.renderer.isSVG)
                            l = j.cursor, j.cursor = "ew-resize";
                        i = r - e
                    } else if (r > m && r < m + o) {
                        f = h ? r - n - s / 2 : r < n ? e - s * 0.2 : r > m + o - k ? e + s * 0.2 : r < n + e ? e - s : f;
                        if (f < 0)
                            f = 0;
                        else if (f + s >= p)
                            f = p - s, u = c.dataMax;
                        if (f !== e)
                            a.fixedWidth = s, e = c.toFixedRange(f, f + s, null, u), d.setExtremes(e.min, e.max, !0, !1, {trigger: "navigator"})
                    }
            };
            a.mouseMoveHandler = function(c) {
                var d = a.scrollbarHeight, e = a.navigatorLeft, f = a.navigatorWidth, g = a.scrollerLeft, h = a.scrollerWidth,
                        j = a.range, l;
                if (c.pageX !== 0)
                    c = b.pointer.normalize(c), l = c.chartX, l < e ? l = e : l > g + h - d && (l = g + h - d), a.grabbedLeft ? (k = !0, a.render(0, 0, l - e, a.otherHandlePos)) : a.grabbedRight ? (k = !0, a.render(0, 0, a.otherHandlePos, l - e)) : a.grabbedCenter && (k = !0, l < i ? l = i : l > f + i - j && (l = f + i - j), a.render(0, 0, l - i, l - i + j)), k && a.scrollbarOptions.liveRedraw && setTimeout(function() {
                        a.mouseUpHandler(c)
                    }, 0)
            };
            a.mouseUpHandler = function(d) {
                var e, f;
                if (k) {
                    if (a.zoomedMin === a.otherHandlePos)
                        e = a.fixedExtreme;
                    else if (a.zoomedMax === a.otherHandlePos)
                        f = a.fixedExtreme;
                    e = c.toFixedRange(a.zoomedMin, a.zoomedMax, e, f);
                    b.xAxis[0].setExtremes(e.min, e.max, !0, !1, {trigger: "navigator", triggerOp: "navigator-drag", DOMEvent: d})
                }
                if (d.type !== "mousemove")
                    a.grabbedLeft = a.grabbedRight = a.grabbedCenter = a.fixedWidth = a.fixedExtreme = a.otherHandlePos = k = i = null, j.cursor = l || ""
            };
            var o = b.xAxis.length, p = b.yAxis.length;
            b.extraBottomMargin = a.outlineHeight + f.margin;
            a.navigatorEnabled ? (a.xAxis = c = new N(b, w({ordinal: m && m.xAxis.options.ordinal}, f.xAxis, {id: "navigator-x-axis", isX: !0, type: "datetime",
                index: o, height: g, offset: 0, offsetLeft: e, offsetRight: -e, keepOrdinalPadding: !0, startOnTick: !1, endOnTick: !1, minPadding: 0, maxPadding: 0, zoomEnabled: !1})), a.yAxis = d = new N(b, w(f.yAxis, {id: "navigator-y-axis", alignTicks: !1, height: g, offset: 0, index: p, zoomEnabled: !1})), m || f.series.data ? a.addBaseSeries() : b.series.length === 0 && R(b, "redraw", function(c, d) {
                if (b.series.length > 0 && !a.series)
                    a.setBaseSeries(), b.redraw = c;
                c.call(b, d)
            })) : a.xAxis = c = {translate: function(a, c) {
                    var d = b.xAxis[0].getExtremes(), f = b.plotWidth - 2 * e, g =
                            d.dataMin, d = d.dataMax - g;
                    return c ? a * d / f + g : f * (a - g) / d
                }, toFixedRange: N.prototype.toFixedRange};
            R(b, "getMargins", function(b) {
                var e = this.legend, f = e.options;
                b.call(this);
                a.top = h = a.navigatorOptions.top || this.chartHeight - a.height - a.scrollbarHeight - this.spacing[2] - (f.verticalAlign === "bottom" && f.enabled && !f.floating ? e.legendHeight + n(f.margin, 10) : 0);
                if (c && d)
                    c.options.top = d.options.top = h, c.setAxisSize(), d.setAxisSize()
            });
            a.addEvents()
        }, getUnionExtremes: function(a) {
            var b = this.chart.xAxis[0], c = this.xAxis, d = c.options;
            if (!a || b.dataMin !== null)
                return{dataMin: n(d && d.min, (r(b.dataMin) && r(c.dataMin) ? x : n)(b.dataMin, c.dataMin)), dataMax: n(d && d.max, (r(b.dataMax) && r(c.dataMax) ? v : n)(b.dataMax, c.dataMax))}
        }, setBaseSeries: function(a) {
            var b = this.chart, a = a || b.options.navigator.baseSeries;
            this.series && this.series.remove();
            this.baseSeries = b.series[a] || typeof a === "string" && b.get(a) || b.series[0];
            this.xAxis && this.addBaseSeries()
        }, addBaseSeries: function() {
            var a = this.baseSeries, b = a ? a.options : {}, c = b.data, d = this.navigatorOptions.series,
                    e;
            e = d.data;
            this.hasNavigatorData = !!e;
            b = w(b, d, {clip: !1, enableMouseTracking: !1, group: "nav", padXAxis: !1, xAxis: "navigator-x-axis", yAxis: "navigator-y-axis", name: "Navigator", showInLegend: !1, isInternal: !0, visible: !0});
            b.data = e || c;
            this.series = this.chart.initSeries(b);
            if (a && this.navigatorOptions.adaptToUpdatedData !== !1)
                D(a, "updatedData", this.updatedDataHandler), a.userOptions.events = u(a.userOptions.event, {updatedData: this.updatedDataHandler})
        }, updatedDataHandler: function() {
            var a = this.chart.scroller, b = a.baseSeries,
                    c = b.xAxis, d = c.getExtremes(), e = d.min, f = d.max, g = d.dataMin, d = d.dataMax, h = f - e, i, k, j, l, m, o = a.series;
            i = o.xData;
            var n = !!c.setExtremes;
            k = f >= i[i.length - 1] - (this.closestPointRange || 0);
            i = e <= g;
            if (!a.hasNavigatorData)
                o.options.pointStart = b.xData[0], o.setData(b.options.data, !1), m = !0;
            i && (l = g, j = l + h);
            k && (j = d, i || (l = v(j - h, o.xData[0])));
            n && (i || k) ? isNaN(l) || c.setExtremes(l, j, !0, !1, {trigger: "updatedData"}) : (m && this.chart.redraw(!1), a.render(v(e, g), x(f, d)))
        }, destroy: function() {
            this.removeEvents();
            q([this.xAxis, this.yAxis,
                this.leftShade, this.rightShade, this.outline, this.scrollbarTrack, this.scrollbarRifles, this.scrollbarGroup, this.scrollbar], function(a) {
                a && a.destroy && a.destroy()
            });
            this.xAxis = this.yAxis = this.leftShade = this.rightShade = this.outline = this.scrollbarTrack = this.scrollbarRifles = this.scrollbarGroup = this.scrollbar = null;
            q([this.scrollbarButtons, this.handles, this.elementsToDestroy], function(a) {
                Ka(a)
            })
        }};
    Q.Scroller = yb;
    R(N.prototype, "zoom", function(a, b, c) {
        var d = this.chart, e = d.options, f = e.chart.zoomType, g = e.navigator,
                e = e.rangeSelector, h;
        if (this.isXAxis && (g && g.enabled || e && e.enabled))
            if (f === "x")
                d.resetZoomButton = "blocked";
            else if (f === "y")
                h = !1;
            else if (f === "xy")
                d = this.previousZoom, r(b) ? this.previousZoom = [this.min, this.max] : d && (b = d[0], c = d[1], delete this.previousZoom);
        return h !== s ? h : a.call(this, b, c)
    });
    R(sa.prototype, "init", function(a, b, c) {
        D(this, "beforeRender", function() {
            var a = this.options;
            if (a.navigator.enabled || a.scrollbar.enabled)
                this.scroller = new yb(this)
        });
        a.call(this, b, c)
    });
    R(M.prototype, "addPoint", function(a,
            b, c, d, e) {
        var f = this.options.turboThreshold;
        f && this.xData.length > f && ba(b) && !Qa(b) && this.chart.scroller && na(20, !0);
        a.call(this, b, c, d, e)
    });
    u(G, {rangeSelector: {buttonTheme: {width: 28, height: 16, padding: 1, r: 0, stroke: "#68A", zIndex: 7}, inputPosition: {align: "right"}, labelStyle: {color: "#666"}}});
    G.lang = w(G.lang, {rangeSelectorZoom: "Zoom", rangeSelectorFrom: "From", rangeSelectorTo: "To"});
    zb.prototype = {clickButton: function(a, b) {
            var c = this, d = c.selected, e = c.chart, f = c.buttons, g = c.buttonOptions[a], h = e.xAxis[0], i = e.scroller &&
                    e.scroller.getUnionExtremes() || h || {}, k = i.dataMin, j = i.dataMax, l, m = h && t(x(h.max, n(j, h.max))), o = new Date(m), p = g.type, r = g.count, i = g._range, u;
            if (!(k === null || j === null || a === c.selected)) {
                if (p === "month" || p === "year")
                    l = {month: "Month", year: "FullYear"}[p], o["set" + l](o["get" + l]() - r), l = o.getTime(), k = n(k, Number.MIN_VALUE), isNaN(l) || l < k ? (l = k, m = x(l + i, j)) : i = m - l;
                else if (i)
                    l = v(m - i, k), m = x(l + i, j);
                else if (p === "ytd")
                    if (h) {
                        if (j === s)
                            k = Number.MAX_VALUE, j = Number.MIN_VALUE, q(e.series, function(a) {
                                a = a.xData;
                                k = x(a[0], k);
                                j = v(a[a.length -
                                        1], j)
                            }), b = !1;
                        m = new Date(j);
                        u = m.getFullYear();
                        l = u = v(k || 0, Date.UTC(u, 0, 1));
                        m = m.getTime();
                        m = x(j || m, m)
                    } else {
                        D(e, "beforeRender", function() {
                            c.clickButton(a)
                        });
                        return
                    }
                else
                    p === "all" && h && (l = k, m = j);
                f[d] && f[d].setState(0);
                f[a] && f[a].setState(2);
                e.fixedRange = i;
                h ? h.setExtremes(l, m, n(b, 1), 0, {trigger: "rangeSelectorButton", rangeSelectorButton: g}) : (d = e.options.xAxis, d[0] = w(d[0], {range: i, min: u}));
                c.setSelected(a)
            }
        }, setSelected: function(a) {
            this.selected = this.options.selected = a
        }, defaultButtons: [{type: "month", count: 1,
                text: "1m"}, {type: "month", count: 3, text: "3m"}, {type: "month", count: 6, text: "6m"}, {type: "ytd", text: "YTD"}, {type: "year", count: 1, text: "1y"}, {type: "all", text: "All"}], init: function(a) {
            var b = this, c = a.options.rangeSelector, d = c.buttons || [].concat(b.defaultButtons), e = c.selected, f = b.blurInputs = function() {
                var a = b.minInput, c = b.maxInput;
                a && a.blur();
                c && c.blur()
            };
            b.chart = a;
            b.options = c;
            b.buttons = [];
            a.extraTopMargin = 25;
            b.buttonOptions = d;
            D(a.container, "mousedown", f);
            D(a, "resize", f);
            q(d, b.computeButtonRange);
            e !== s && d[e] &&
                    this.clickButton(e, !1);
            D(a, "load", function() {
                D(a.xAxis[0], "afterSetExtremes", function() {
                    b.updateButtonStates(!0)
                })
            })
        }, updateButtonStates: function(a) {
            var b = this, c = this.chart, d = c.xAxis[0], e = c.scroller && c.scroller.getUnionExtremes() || d, f = e.dataMin, g = e.dataMax, h = b.selected, i = b.buttons;
            a && c.fixedRange !== t(d.max - d.min) && (i[h] && i[h].setState(0), b.setSelected(null));
            q(b.buttonOptions, function(a, c) {
                var e = a._range, m = e > g - f, o = e < d.minRange, n = a.type === "all" && d.max - d.min >= g - f && i[c].state !== 2, q = a.type === "ytd" && ra("%Y",
                        f) === ra("%Y", g);
                e === t(d.max - d.min) && c !== h ? (b.setSelected(c), i[c].setState(2)) : m || o || n || q ? i[c].setState(3) : i[c].state === 3 && i[c].setState(0)
            })
        }, computeButtonRange: function(a) {
            var b = a.type, c = a.count || 1, d = {millisecond: 1, second: 1E3, minute: 6E4, hour: 36E5, day: 864E5, week: 6048E5};
            if (d[b])
                a._range = d[b] * c;
            else if (b === "month" || b === "year")
                a._range = {month: 30, year: 365}[b] * 864E5 * c
        }, setInputValue: function(a, b) {
            var c = this.chart.options.rangeSelector;
            if (r(b))
                this[a + "Input"].HCTime = b;
            this[a + "Input"].value = ra(c.inputEditDateFormat ||
                    "%Y-%m-%d", this[a + "Input"].HCTime);
            this[a + "DateBox"].attr({text: ra(c.inputDateFormat || "%b %e, %Y", this[a + "Input"].HCTime)})
        }, drawInput: function(a) {
            var b = this, c = b.chart, d = c.renderer.style, e = c.renderer, f = c.options.rangeSelector, g = b.div, h = a === "min", i, k, j, l = this.inputGroup;
            this[a + "Label"] = k = e.label(G.lang[h ? "rangeSelectorFrom" : "rangeSelectorTo"], this.inputGroup.offset).attr({padding: 1}).css(w(d, f.labelStyle)).add(l);
            l.offset += k.width + 5;
            this[a + "DateBox"] = j = e.label("", l.offset).attr({padding: 1, width: f.inputBoxWidth ||
                        90, height: f.inputBoxHeight || 16, stroke: f.inputBoxBorderColor || "silver", "stroke-width": 1}).css(w({textAlign: "center"}, d, f.inputStyle)).on("click", function() {
                b[a + "Input"].focus()
            }).add(l);
            l.offset += j.width + (h ? 10 : 0);
            this[a + "Input"] = i = Y("input", {name: a, className: "highcharts-range-selector", type: "text"}, u({position: "absolute", border: 0, width: "1px", height: "1px", padding: 0, textAlign: "center", fontSize: d.fontSize, fontFamily: d.fontFamily, top: c.plotTop + "px"}, f.inputStyle), g);
            i.onfocus = function() {
                J(this, {left: l.translateX +
                            j.x + "px", top: l.translateY + "px", width: j.width - 2 + "px", height: j.height - 2 + "px", border: "2px solid silver"})
            };
            i.onblur = function() {
                J(this, {border: 0, width: "1px", height: "1px"});
                b.setInputValue(a)
            };
            i.onchange = function() {
                var a = i.value, d = (f.inputDateParser || Date.parse)(a), e = c.xAxis[0], g = e.dataMin, j = e.dataMax;
                isNaN(d) && (d = a.split("-"), d = Date.UTC(y(d[0]), y(d[1]) - 1, y(d[2])));
                isNaN(d) || (G.global.useUTC || (d += (new Date).getTimezoneOffset() * 6E4), h ? d > b.maxInput.HCTime ? d = s : d < g && (d = g) : d < b.minInput.HCTime ? d = s : d > j && (d = j),
                        d !== s && c.xAxis[0].setExtremes(h ? d : e.min, h ? e.max : d, s, s, {trigger: "rangeSelectorInput"}))
            }
        }, render: function(a, b) {
            var c = this, d = c.chart, e = d.renderer, f = d.container, g = d.options, h = g.exporting && g.navigation && g.navigation.buttonOptions, i = g.rangeSelector, k = c.buttons, g = G.lang, j = c.div, j = c.inputGroup, l = i.buttonTheme, m = i.inputEnabled !== !1, n = l && l.states, p = d.plotLeft, r;
            if (!c.rendered && (c.zoomText = e.text(g.rangeSelectorZoom, p, d.plotTop - 10).css(i.labelStyle).add(), r = p + c.zoomText.getBBox().width + 5, q(c.buttonOptions,
                    function(a, b) {
                        k[b] = e.button(a.text, r, d.plotTop - 25, function() {
                            c.clickButton(b);
                            c.isActive = !0
                        }, l, n && n.hover, n && n.select).css({textAlign: "center"}).add();
                        r += k[b].width + (i.buttonSpacing || 0);
                        c.selected === b && k[b].setState(2)
                    }), c.updateButtonStates(), m))
                c.div = j = Y("div", null, {position: "relative", height: 0, zIndex: 1}), f.parentNode.insertBefore(j, f), c.inputGroup = j = e.g("input-group").add(), j.offset = 0, c.drawInput("min"), c.drawInput("max");
            m && (f = d.plotTop - 35, j.align(u({y: f, width: j.offset, x: h && f < (h.y || 0) + h.height -
                        d.spacing[0] ? -40 : 0}, i.inputPosition), !0, d.spacingBox), c.setInputValue("min", a), c.setInputValue("max", b));
            c.rendered = !0
        }, destroy: function() {
            var a = this.minInput, b = this.maxInput, c = this.chart, d = this.blurInputs, e;
            S(c.container, "mousedown", d);
            S(c, "resize", d);
            Ka(this.buttons);
            if (a)
                a.onfocus = a.onblur = a.onchange = null;
            if (b)
                b.onfocus = b.onblur = b.onchange = null;
            for (e in this)
                this[e] && e !== "chart" && (this[e].destroy ? this[e].destroy() : this[e].nodeType && Ta(this[e])), this[e] = null
        }};
    N.prototype.toFixedRange = function(a,
            b, c, d) {
        var e = this.chart && this.chart.fixedRange, a = n(c, this.translate(a, !0)), b = n(d, this.translate(b, !0)), c = e && (b - a) / e;
        c > 0.7 && c < 1.3 && (d ? a = b - e : b = a + e);
        return{min: a, max: b}
    };
    R(sa.prototype, "init", function(a, b, c) {
        D(this, "init", function() {
            if (this.options.rangeSelector.enabled)
                this.rangeSelector = new zb(this)
        });
        a.call(this, b, c)
    });
    Q.RangeSelector = zb;
    sa.prototype.callbacks.push(function(a) {
        function b() {
            f = a.xAxis[0].getExtremes();
            g.render(f.min, f.max)
        }
        function c() {
            f = a.xAxis[0].getExtremes();
            isNaN(f.min) || h.render(f.min,
                    f.max)
        }
        function d(a) {
            a.triggerOp !== "navigator-drag" && g.render(a.min, a.max)
        }
        function e(a) {
            h.render(a.min, a.max)
        }
        var f, g = a.scroller, h = a.rangeSelector;
        g && (D(a.xAxis[0], "afterSetExtremes", d), R(a, "drawChartBox", function(a) {
            var c = this.isDirtyBox;
            a.call(this);
            c && b()
        }), b());
        h && (D(a.xAxis[0], "afterSetExtremes", e), D(a, "resize", c), c());
        D(a, "destroy", function() {
            g && S(a.xAxis[0], "afterSetExtremes", d);
            h && (S(a, "resize", c), S(a.xAxis[0], "afterSetExtremes", e))
        })
    });
    Q.StockChart = function(a, b) {
        var c = a.series, d, e = n(a.navigator &&
                a.navigator.enabled, !0) ? {startOnTick: !1, endOnTick: !1} : null, f = {marker: {enabled: !1, states: {hover: {radius: 5}}}, states: {hover: {lineWidth: 2}}}, g = {shadow: !1, borderWidth: 0};
        a.xAxis = va(ia(a.xAxis || {}), function(a) {
            return w({minPadding: 0, maxPadding: 0, ordinal: !0, title: {text: null}, labels: {overflow: "justify"}, showLastLabel: !0}, a, {type: "datetime", categories: null}, e)
        });
        a.yAxis = va(ia(a.yAxis || {}), function(a) {
            d = a.opposite;
            return w({labels: {align: d ? "right" : "left", x: d ? -2 : 2, y: -2}, showLastLabel: !1, title: {text: null}},
            a)
        });
        a.series = null;
        a = w({chart: {panning: !0, pinchType: "x"}, navigator: {enabled: !0}, scrollbar: {enabled: !0}, rangeSelector: {enabled: !0}, title: {text: null}, tooltip: {shared: !0, crosshairs: !0}, legend: {enabled: !1}, plotOptions: {line: f, spline: f, area: f, areaspline: f, arearange: f, areasplinerange: f, column: g, columnrange: g, candlestick: g, ohlc: g}}, a, {_stock: !0, chart: {inverted: !1}});
        a.series = c;
        return new sa(a, b)
    };
    R(Ya.prototype, "init", function(a, b, c) {
        var d = c.chart.pinchType || "";
        a.call(this, b, c);
        this.pinchX = this.pinchHor =
                d.indexOf("x") !== -1;
        this.pinchY = this.pinchVert = d.indexOf("y") !== -1
    });
    N.prototype.getPlotLinePath = function(a, b, c, d, e) {
        var f = this, g = this.isLinked ? this.linkedParent.series : this.series, h = f.chart.renderer, i = f.left, k = f.top, j, l, m, o, p = [], g = this.isXAxis ? r(this.options.yAxis) ? [this.chart.yAxis[this.options.yAxis]] : va(g, function(a) {
            return a.yAxis
        }) : r(this.options.xAxis) ? [this.chart.xAxis[this.options.xAxis]] : va(g, function(a) {
            return a.xAxis
        }), s = [];
        q(g, function(a) {
            ua(a, s) === -1 && s.push(a)
        });
        e = n(e, f.translate(a,
                null, null, c));
        isNaN(e) || (f.horiz ? q(s, function(a) {
            l = a.top;
            o = l + a.len;
            j = m = t(e + f.transB);
            (j >= i && j <= i + f.width || d) && p.push("M", j, l, "L", m, o)
        }) : q(s, function(a) {
            j = a.left;
            m = j + a.width;
            l = o = t(k + f.height - e);
            (l >= k && l <= k + f.height || d) && p.push("M", j, l, "L", m, o)
        }));
        return p.length > 0 ? h.crispPolyLine(p, b || 1) : null
    };
    ha.prototype.crispPolyLine = function(a, b) {
        var c;
        for (c = 0; c < a.length; c += 6)
            a[c + 1] === a[c + 4] && (a[c + 1] = a[c + 4] = t(a[c + 1]) - b % 2 / 2), a[c + 2] === a[c + 5] && (a[c + 2] = a[c + 5] = t(a[c + 2]) + b % 2 / 2);
        return a
    };
    if (Xa === Q.VMLRenderer)
        fb.prototype.crispPolyLine =
                ha.prototype.crispPolyLine;
    R(N.prototype, "hideCrosshair", function(a, b) {
        a.call(this, b);
        r(this.crossLabelArray) && (r(b) ? this.crossLabelArray[b] && this.crossLabelArray[b].hide() : q(this.crossLabelArray, function(a) {
            a.hide()
        }))
    });
    R(N.prototype, "drawCrosshair", function(a, b, c) {
        var d, e;
        a.call(this, b, c);
        if (r(this.crosshair.label) && this.crosshair.label.enabled && r(c)) {
            var a = this.chart, f = this.options.crosshair.label, g = this.isXAxis ? "x" : "y", b = this.horiz, h = this.opposite, i = this.left, k = this.top, j = this.crossLabel, l, m,
                    o = f.format, p = "";
            if (!j)
                j = this.crossLabel = a.renderer.label().attr({align: f.align || (b ? "center" : h ? this.labelAlign === "right" ? "right" : "left" : this.labelAlign === "left" ? "left" : "center"), zIndex: 12, height: b ? 16 : s, fill: f.backgroundColor || this.series[0] && this.series[0].color || "gray", padding: n(f.padding, 2), stroke: f.borderColor || null, "stroke-width": f.borderWidth || 0}).css(u({color: "white", fontWeight: "normal", fontSize: "11px", textAlign: "center"}, f.style)).add();
            b ? (l = c.plotX + i, m = k + (h ? 0 : this.height)) : (l = h ? this.width +
                    i : 0, m = c.plotY + k);
            if (m < k || m > k + this.height)
                this.hideCrosshair();
            else {
                !o && !f.formatter && (this.isDatetimeAxis && (p = "%b %d, %Y"), o = "{value" + (p ? ":" + p : "") + "}");
                j.attr({x: l, y: m, text: o ? Ja(o, {value: c[g]}) : f.formatter.call(this, c[g]), visibility: "visible"});
                c = j.box;
                if (b) {
                    if (this.options.tickPosition === "inside" && !h || this.options.tickPosition !== "inside" && h)
                        m = j.y - c.height
                } else
                    m = j.y - c.height / 2;
                b ? (d = i - c.x, e = i + this.width - c.x) : (d = this.labelAlign === "left" ? i : 0, e = this.labelAlign === "right" ? i + this.width : a.chartWidth);
                j.translateX <
                        d && (l += d - j.translateX);
                j.translateX + c.width >= e && (l -= j.translateX + c.width - e);
                j.attr({x: l, y: m, visibility: "visible"})
            }
        }
    });
    var lc = Z.init, mc = Z.processData, nc = xa.prototype.tooltipFormatter;
    Z.init = function() {
        lc.apply(this, arguments);
        this.setCompare(this.options.compare)
    };
    Z.setCompare = function(a) {
        this.modifyValue = a === "value" || a === "percent" ? function(b, c) {
            var d = this.compareValue;
            if (b !== s && (b = a === "value" ? b - d : b = 100 * (b / d) - 100, c))
                c.change = b;
            return b
        } : null;
        if (this.chart.hasRendered)
            this.isDirty = !0
    };
    Z.processData =
            function() {
                var a = 0, b, c, d;
                mc.apply(this, arguments);
                if (this.xAxis && this.processedYData) {
                    b = this.processedXData;
                    c = this.processedYData;
                    for (d = c.length; a < d; a++)
                        if (typeof c[a] === "number" && b[a] >= this.xAxis.min) {
                            this.compareValue = c[a];
                            break
                        }
                }
            };
    R(Z, "getExtremes", function(a) {
        a.call(this);
        if (this.modifyValue)
            this.dataMax = this.modifyValue(this.dataMax), this.dataMin = this.modifyValue(this.dataMin)
    });
    N.prototype.setCompare = function(a, b) {
        this.isXAxis || (q(this.series, function(b) {
            b.setCompare(a)
        }), n(b, !0) && this.chart.redraw())
    };
    xa.prototype.tooltipFormatter = function(a) {
        a = a.replace("{point.change}", (this.change > 0 ? "+" : "") + Ia(this.change, n(this.series.tooltipOptions.changeDecimals, 2)));
        return nc.apply(this, [a])
    };
    u(Q, {Axis: N, Chart: sa, Color: Ea, Point: xa, Tick: $a, Renderer: Xa, Series: M, SVGElement: Ca, SVGRenderer: ha, arrayMin: Sa, arrayMax: Aa, charts: da, dateFormat: ra, format: Ja, pathAnim: Bb, getOptions: function() {
            return G
        }, hasBidiBug: Yb, isTouchDevice: db, numberFormat: Ia, seriesTypes: H, setOptions: function(a) {
            G = w(!0, G, a);
            Lb();
            return G
        }, addEvent: D,
        removeEvent: S, createElement: Y, discardElement: Ta, css: J, each: q, extend: u, map: va, merge: w, pick: n, splat: ia, extendClass: ca, pInt: y, wrap: R, svg: $, canvas: ga, vml: !$ && !ga, product: "Highstock", version: "1.3.10"})
})();
