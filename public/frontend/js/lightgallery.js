/*! lightgallery - v1.10.0 - 2020-11-07
 * http://sachinchoolur.github.io/lightGallery/
 * Copyright (c) 2020 Sachin N; Licensed GPLv3 */
! function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";

        function b(b, d) {
            if (this.el = b, this.$el = a(b), this.s = a.extend({}, c, d), this.s.dynamic && "undefined" !== this.s.dynamicEl && this.s.dynamicEl.constructor === Array && !this.s.dynamicEl.length) throw "When using dynamic mode, you must also define dynamicEl as an Array.";
            return this.modules = {}, this.lGalleryOn = !1, this.lgBusy = !1, this.hideBarTimeout = !1, this.isTouch = "ontouchstart" in document.documentElement, this.s.slideEndAnimatoin && (this.s.hideControlOnEnd = !1), this.s.dynamic ? this.$items = this.s.dynamicEl : "this" === this.s.selector ? this.$items = this.$el : "" !== this.s.selector ? this.s.selectWithin ? this.$items = a(this.s.selectWithin).find(this.s.selector) : this.$items = this.$el.find(a(this.s.selector)) : this.$items = this.$el.children(), this.$slide = "", this.$outer = "", this.init(), this
        }
        var c = {
            mode: "lg-slide",
            cssEasing: "ease",
            easing: "linear",
            speed: 600,
            height: "100%",
            width: "100%",
            addClass: "",
            startClass: "lg-start-zoom",
            backdropDuration: 150,
            hideBarsDelay: 6e3,
            useLeft: !1,
            ariaLabelledby: "",
            ariaDescribedby: "",
            closable: !0,
            loop: !0,
            escKey: !0,
            keyPress: !0,
            controls: !0,
            slideEndAnimatoin: !0,
            hideControlOnEnd: !1,
            mousewheel: !0,
            getCaptionFromTitleOrAlt: !0,
            appendSubHtmlTo: ".lg-sub-html",
            subHtmlSelectorRelative: !1,
            preload: 1,
            showAfterLoad: !0,
            selector: "",
            selectWithin: "",
            nextHtml: "",
            prevHtml: "",
            index: !1,
            iframeMaxWidth: "100%",
            download: !0,
            counter: !0,
            appendCounterTo: ".lg-toolbar",
            swipeThreshold: 50,
            enableSwipe: !0,
            enableDrag: !0,
            dynamic: !1,
            dynamicEl: [],
            galleryId: 1,
            supportLegacyBrowser: !0
        };
        b.prototype.init = function () {
            var b = this;
            b.s.preload > b.$items.length && (b.s.preload = b.$items.length);
            var c = window.location.hash;
            c.indexOf("lg=" + this.s.galleryId) > 0 && (b.index = parseInt(c.split("&slide=")[1], 10), a("body").addClass("lg-from-hash"), a("body").hasClass("lg-on") || (setTimeout(function () {
                b.build(b.index)
            }), a("body").addClass("lg-on"))), b.s.dynamic ? (b.$el.trigger("onBeforeOpen.lg"), b.index = b.s.index || 0, a("body").hasClass("lg-on") || setTimeout(function () {
                b.build(b.index), a("body").addClass("lg-on")
            })) : b.$items.on("click.lgcustom", function (c) {
                try {
                    c.preventDefault(), c.preventDefault()
                } catch (a) {
                    c.returnValue = !1
                }
                b.$el.trigger("onBeforeOpen.lg"), b.index = b.s.index || b.$items.index(this), a("body").hasClass("lg-on") || (b.build(b.index), a("body").addClass("lg-on"))
            })
        }, b.prototype.build = function (b) {
            var c = this;
            c.structure(), a.each(a.fn.lightGallery.modules, function (b) {
                c.modules[b] = new a.fn.lightGallery.modules[b](c.el)
            }), c.slide(b, !1, !1, !1), c.s.keyPress && c.keyPress(), c.$items.length > 1 ? (c.arrow(), setTimeout(function () {
                c.enableDrag(), c.enableSwipe()
            }, 50), c.s.mousewheel && c.mousewheel()) : c.$slide.on("click.lg", function () {
                c.$el.trigger("onSlideClick.lg")
            }), c.counter(), c.closeGallery(), c.$el.trigger("onAfterOpen.lg"), c.s.hideBarsDelay > 0 && c.$outer.on("mousemove.lg click.lg touchstart.lg", function () {
                c.$outer.removeClass("lg-hide-items"), clearTimeout(c.hideBarTimeout), c.hideBarTimeout = setTimeout(function () {
                    c.$outer.addClass("lg-hide-items")
                }, c.s.hideBarsDelay)
            }), c.$outer.trigger("mousemove.lg")
        }, b.prototype.structure = function () {
            var b, c = "",
                d = "",
                e = 0,
                f = "",
                g = this;
            for (a("body").append('<div class="lg-backdrop"></div>'), a(".lg-backdrop").css("transition-duration", this.s.backdropDuration + "ms"), e = 0; e < this.$items.length; e++) c += '<div class="lg-item"></div>';
            if (this.s.controls && this.$items.length > 1 && (d = '<div class="lg-actions"><button type="button" aria-label="Previous slide" class="lg-prev lg-icon">' + this.s.prevHtml + '</button><button type="button" aria-label="Next slide" class="lg-next lg-icon">' + this.s.nextHtml + "</button></div>"), ".lg-sub-html" === this.s.appendSubHtmlTo && (f = '<div role="status" aria-live="polite" class="lg-sub-html"></div>'), b = '<div tabindex="-1" aria-modal="true" ' + (this.s.ariaLabelledby ? 'aria-labelledby="' + this.s.ariaLabelledby + '"' : "") + " " + (this.s.ariaDescribedby ? 'aria-describedby="' + this.s.ariaDescribedby + '"' : "") + ' role="dialog" class="lg-outer ' + this.s.addClass + " " + this.s.startClass + '"><div class="lg" style="width:' + this.s.width + "; height:" + this.s.height + '"><div class="lg-inner">' + c + '</div><div class="lg-toolbar lg-group"><button type="button" aria-label="Close gallery" class="lg-close lg-icon"></button></div>' + d + f + "</div></div>", a("body").append(b), this.$outer = a(".lg-outer"), this.$outer.focus(), this.$slide = this.$outer.find(".lg-item"), this.s.useLeft ? (this.$outer.addClass("lg-use-left"), this.s.mode = "lg-slide") : this.$outer.addClass("lg-use-css3"), g.setTop(), a(window).on("resize.lg orientationchange.lg", function () {
                    setTimeout(function () {
                        g.setTop()
                    }, 100)
                }), this.$slide.eq(this.index).addClass("lg-current"), this.doCss() ? this.$outer.addClass("lg-css3") : (this.$outer.addClass("lg-css"), this.s.speed = 0), this.$outer.addClass(this.s.mode), this.s.enableDrag && this.$items.length > 1 && this.$outer.addClass("lg-grab"), this.s.showAfterLoad && this.$outer.addClass("lg-show-after-load"), this.doCss()) {
                var h = this.$outer.find(".lg-inner");
                h.css("transition-timing-function", this.s.cssEasing), h.css("transition-duration", this.s.speed + "ms")
            }
            setTimeout(function () {
                a(".lg-backdrop").addClass("in")
            }), setTimeout(function () {
                g.$outer.addClass("lg-visible")
            }, this.s.backdropDuration), this.s.download && this.$outer.find(".lg-toolbar").append('<a id="lg-download" aria-label="Download" target="_blank" download class="lg-download lg-icon"></a>'), this.prevScrollTop = a(window).scrollTop()
        }, b.prototype.setTop = function () {
            if ("100%" !== this.s.height) {
                var b = a(window).height(),
                    c = (b - parseInt(this.s.height, 10)) / 2,
                    d = this.$outer.find(".lg");
                b >= parseInt(this.s.height, 10) ? d.css("top", c + "px") : d.css("top", "0px")
            }
        }, b.prototype.doCss = function () {
            return !! function () {
                var a = ["transition", "MozTransition", "WebkitTransition", "OTransition", "msTransition", "KhtmlTransition"],
                    b = document.documentElement,
                    c = 0;
                for (c = 0; c < a.length; c++)
                    if (a[c] in b.style) return !0
            }()
        }, b.prototype.isVideo = function (a, b) {
            var c;
            if (c = this.s.dynamic ? this.s.dynamicEl[b].html : this.$items.eq(b).attr("data-html"), !a) return c ? {
                html5: !0
            } : (console.error("lightGallery :- data-src is not provided on slide item " + (b + 1) + ". Please make sure the selector property is properly configured. More info - http://sachinchoolur.github.io/lightGallery/demos/html-markup.html"), !1);
            var d = a.match(/\/\/(?:www\.)?youtu(?:\.be|be\.com|be-nocookie\.com)\/(?:watch\?v=|embed\/)?([a-z0-9\-\_\%]+)/i),
                e = a.match(/\/\/(?:www\.)?(?:player\.)?vimeo.com\/(?:video\/)?([0-9a-z\-_]+)/i),
                f = a.match(/\/\/(?:www\.)?dai.ly\/([0-9a-z\-_]+)/i),
                g = a.match(/\/\/(?:www\.)?(?:vk\.com|vkontakte\.ru)\/(?:video_ext\.php\?)(.*)/i);
            return d ? {
                youtube: d
            } : e ? {
                vimeo: e
            } : f ? {
                dailymotion: f
            } : g ? {
                vk: g
            } : void 0
        }, b.prototype.counter = function () {
            this.s.counter && a(this.s.appendCounterTo).append('<div id="lg-counter" role="status" aria-live="polite"><span id="lg-counter-current">' + (parseInt(this.index, 10) + 1) + '</span> / <span id="lg-counter-all">' + this.$items.length + "</span></div>")
        }, b.prototype.addHtml = function (b) {
            var c, d, e = null;
            if (this.s.dynamic ? this.s.dynamicEl[b].subHtmlUrl ? c = this.s.dynamicEl[b].subHtmlUrl : e = this.s.dynamicEl[b].subHtml : (d = this.$items.eq(b), d.attr("data-sub-html-url") ? c = d.attr("data-sub-html-url") : (e = d.attr("data-sub-html"), this.s.getCaptionFromTitleOrAlt && !e && (e = d.attr("title") || d.find("img").first().attr("alt")))), !c)
                if (void 0 !== e && null !== e) {
                    var f = e.substring(0, 1);
                    "." !== f && "#" !== f || (e = this.s.subHtmlSelectorRelative && !this.s.dynamic ? d.find(e).html() : a(e).html())
                } else e = "";
            ".lg-sub-html" === this.s.appendSubHtmlTo ? c ? this.$outer.find(this.s.appendSubHtmlTo).load(c) : this.$outer.find(this.s.appendSubHtmlTo).html(e) : c ? this.$slide.eq(b).load(c) : this.$slide.eq(b).append(e), void 0 !== e && null !== e && ("" === e ? this.$outer.find(this.s.appendSubHtmlTo).addClass("lg-empty-html") : this.$outer.find(this.s.appendSubHtmlTo).removeClass("lg-empty-html")), this.$el.trigger("onAfterAppendSubHtml.lg", [b])
        }, b.prototype.preload = function (a) {
            var b = 1,
                c = 1;
            for (b = 1; b <= this.s.preload && !(b >= this.$items.length - a); b++) this.loadContent(a + b, !1, 0);
            for (c = 1; c <= this.s.preload && !(a - c < 0); c++) this.loadContent(a - c, !1, 0)
        }, b.prototype.loadContent = function (b, c, d) {
            var e, f, g, h, i, j, k, l = this,
                m = !1,
                n = function (b) {
                    for (var c = [], d = [], e = 0; e < b.length; e++) {
                        var g = b[e].split(" ");
                        "" === g[0] && g.splice(0, 1), d.push(g[0]), c.push(g[1])
                    }
                    for (var h = a(window).width(), i = 0; i < c.length; i++)
                        if (parseInt(c[i], 10) > h) {
                            f = d[i];
                            break
                        }
                };
            if (l.s.dynamic) {
                if (l.s.dynamicEl[b].poster && (m = !0, g = l.s.dynamicEl[b].poster), j = l.s.dynamicEl[b].html, f = l.s.dynamicEl[b].src, k = l.s.dynamicEl[b].alt, l.s.dynamicEl[b].responsive) {
                    n(l.s.dynamicEl[b].responsive.split(","))
                }
                h = l.s.dynamicEl[b].srcset, i = l.s.dynamicEl[b].sizes
            } else {
                var o = l.$items.eq(b);
                if (o.attr("data-poster") && (m = !0, g = o.attr("data-poster")), j = o.attr("data-html"), f = o.attr("href") || o.attr("data-src"), k = o.attr("title") || o.find("img").first().attr("alt"), o.attr("data-responsive")) {
                    n(o.attr("data-responsive").split(","))
                }
                h = o.attr("data-srcset"), i = o.attr("data-sizes")
            }
            var p = !1;
            l.s.dynamic ? l.s.dynamicEl[b].iframe && (p = !0) : "true" === l.$items.eq(b).attr("data-iframe") && (p = !0);
            var q = l.isVideo(f, b);
            if (!l.$slide.eq(b).hasClass("lg-loaded")) {
                if (p) l.$slide.eq(b).prepend('<div class="lg-video-cont lg-has-iframe" style="max-width:' + l.s.iframeMaxWidth + '"><div class="lg-video"><iframe class="lg-object" frameborder="0" src="' + f + '"  allowfullscreen="true"></iframe></div></div>');
                else if (m) {
                    var r = "";
                    r = q && q.youtube ? "lg-has-youtube" : q && q.vimeo ? "lg-has-vimeo" : "lg-has-html5", l.$slide.eq(b).prepend('<div class="lg-video-cont ' + r + ' "><div class="lg-video"><span class="lg-video-play"></span><img class="lg-object lg-has-poster" src="' + g + '" /></div></div>')
                } else q ? (l.$slide.eq(b).prepend('<div class="lg-video-cont "><div class="lg-video"></div></div>'), l.$el.trigger("hasVideo.lg", [b, f, j])) : (k = k ? 'alt="' + k + '"' : "", l.$slide.eq(b).prepend('<div class="lg-img-wrap"><img class="lg-object lg-image" ' + k + ' src="' + f + '" /></div>'));
                if (l.$el.trigger("onAferAppendSlide.lg", [b]), e = l.$slide.eq(b).find(".lg-object"), i && e.attr("sizes", i), h && (e.attr("srcset", h), this.s.supportLegacyBrowser)) try {
                    picturefill({
                        elements: [e[0]]
                    })
                } catch (a) {
                    console.warn("lightGallery :- If you want srcset to be supported for older browser please include picturefil version 2 javascript library in your document.")
                }
                ".lg-sub-html" !== this.s.appendSubHtmlTo && l.addHtml(b), l.$slide.eq(b).addClass("lg-loaded")
            }
            l.$slide.eq(b).find(".lg-object").on("load.lg error.lg", function () {
                var c = 0;
                d && !a("body").hasClass("lg-from-hash") && (c = d), setTimeout(function () {
                    l.$slide.eq(b).addClass("lg-complete"), l.$el.trigger("onSlideItemLoad.lg", [b, d || 0])
                }, c)
            }), q && q.html5 && !m && l.$slide.eq(b).addClass("lg-complete"), !0 === c && (l.$slide.eq(b).hasClass("lg-complete") ? l.preload(b) : l.$slide.eq(b).find(".lg-object").on("load.lg error.lg", function () {
                l.preload(b)
            }))
        }, b.prototype.slide = function (b, c, d, e) {
            var f = this.$outer.find(".lg-current").index(),
                g = this;
            if (!g.lGalleryOn || f !== b) {
                var h = this.$slide.length,
                    i = g.lGalleryOn ? this.s.speed : 0;
                if (!g.lgBusy) {
                    if (this.s.download) {
                        var j;
                        j = g.s.dynamic ? !1 !== g.s.dynamicEl[b].downloadUrl && (g.s.dynamicEl[b].downloadUrl || g.s.dynamicEl[b].src) : "false" !== g.$items.eq(b).attr("data-download-url") && (g.$items.eq(b).attr("data-download-url") || g.$items.eq(b).attr("href") || g.$items.eq(b).attr("data-src")), j ? (a("#lg-download").attr("href", j), g.$outer.removeClass("lg-hide-download")) : g.$outer.addClass("lg-hide-download")
                    }
                    if (this.$el.trigger("onBeforeSlide.lg", [f, b, c, d]), g.lgBusy = !0, clearTimeout(g.hideBarTimeout), ".lg-sub-html" === this.s.appendSubHtmlTo && setTimeout(function () {
                            g.addHtml(b)
                        }, i), this.arrowDisable(b), e || (b < f ? e = "prev" : b > f && (e = "next")), c) {
                        this.$slide.removeClass("lg-prev-slide lg-current lg-next-slide");
                        var k, l;
                        h > 2 ? (k = b - 1, l = b + 1, 0 === b && f === h - 1 ? (l = 0, k = h - 1) : b === h - 1 && 0 === f && (l = 0, k = h - 1)) : (k = 0, l = 1), "prev" === e ? g.$slide.eq(l).addClass("lg-next-slide") : g.$slide.eq(k).addClass("lg-prev-slide"), g.$slide.eq(b).addClass("lg-current")
                    } else g.$outer.addClass("lg-no-trans"), this.$slide.removeClass("lg-prev-slide lg-next-slide"), "prev" === e ? (this.$slide.eq(b).addClass("lg-prev-slide"), this.$slide.eq(f).addClass("lg-next-slide")) : (this.$slide.eq(b).addClass("lg-next-slide"), this.$slide.eq(f).addClass("lg-prev-slide")), setTimeout(function () {
                        g.$slide.removeClass("lg-current"), g.$slide.eq(b).addClass("lg-current"), g.$outer.removeClass("lg-no-trans")
                    }, 50);
                    g.lGalleryOn ? (setTimeout(function () {
                        g.loadContent(b, !0, 0)
                    }, this.s.speed + 50), setTimeout(function () {
                        g.lgBusy = !1, g.$el.trigger("onAfterSlide.lg", [f, b, c, d])
                    }, this.s.speed)) : (g.loadContent(b, !0, g.s.backdropDuration), g.lgBusy = !1, g.$el.trigger("onAfterSlide.lg", [f, b, c, d])), g.lGalleryOn = !0, this.s.counter && a("#lg-counter-current").text(b + 1)
                }
                g.index = b
            }
        }, b.prototype.goToNextSlide = function (a) {
            var b = this,
                c = b.s.loop;
            a && b.$slide.length < 3 && (c = !1), b.lgBusy || (b.index + 1 < b.$slide.length ? (b.index++, b.$el.trigger("onBeforeNextSlide.lg", [b.index]), b.slide(b.index, a, !1, "next")) : c ? (b.index = 0, b.$el.trigger("onBeforeNextSlide.lg", [b.index]), b.slide(b.index, a, !1, "next")) : b.s.slideEndAnimatoin && !a && (b.$outer.addClass("lg-right-end"), setTimeout(function () {
                b.$outer.removeClass("lg-right-end")
            }, 400)))
        }, b.prototype.goToPrevSlide = function (a) {
            var b = this,
                c = b.s.loop;
            a && b.$slide.length < 3 && (c = !1), b.lgBusy || (b.index > 0 ? (b.index--, b.$el.trigger("onBeforePrevSlide.lg", [b.index, a]), b.slide(b.index, a, !1, "prev")) : c ? (b.index = b.$items.length - 1, b.$el.trigger("onBeforePrevSlide.lg", [b.index, a]), b.slide(b.index, a, !1, "prev")) : b.s.slideEndAnimatoin && !a && (b.$outer.addClass("lg-left-end"), setTimeout(function () {
                b.$outer.removeClass("lg-left-end")
            }, 400)))
        }, b.prototype.keyPress = function () {
            var b = this;
            this.$items.length > 1 && a(window).on("keyup.lg", function (a) {
                b.$items.length > 1 && (37 === a.keyCode && (a.preventDefault(), b.goToPrevSlide()), 39 === a.keyCode && (a.preventDefault(), b.goToNextSlide()))
            }), a(window).on("keydown.lg", function (a) {
                !0 === b.s.escKey && 27 === a.keyCode && (a.preventDefault(), b.$outer.hasClass("lg-thumb-open") ? b.$outer.removeClass("lg-thumb-open") : b.destroy())
            })
        }, b.prototype.arrow = function () {
            var a = this;
            this.$outer.find(".lg-prev").on("click.lg", function () {
                a.goToPrevSlide()
            }), this.$outer.find(".lg-next").on("click.lg", function () {
                a.goToNextSlide()
            })
        }, b.prototype.arrowDisable = function (a) {
            !this.s.loop && this.s.hideControlOnEnd && (a + 1 < this.$slide.length ? this.$outer.find(".lg-next").removeAttr("disabled").removeClass("disabled") : this.$outer.find(".lg-next").attr("disabled", "disabled").addClass("disabled"), a > 0 ? this.$outer.find(".lg-prev").removeAttr("disabled").removeClass("disabled") : this.$outer.find(".lg-prev").attr("disabled", "disabled").addClass("disabled"))
        }, b.prototype.setTranslate = function (a, b, c) {
            this.s.useLeft ? a.css("left", b) : a.css({
                transform: "translate3d(" + b + "px, " + c + "px, 0px)"
            })
        }, b.prototype.touchMove = function (b, c) {
            var d = c - b;
            Math.abs(d) > 15 && (this.$outer.addClass("lg-dragging"), this.setTranslate(this.$slide.eq(this.index), d, 0), this.setTranslate(a(".lg-prev-slide"), -this.$slide.eq(this.index).width() + d, 0), this.setTranslate(a(".lg-next-slide"), this.$slide.eq(this.index).width() + d, 0))
        }, b.prototype.touchEnd = function (a) {
            var b = this;
            "lg-slide" !== b.s.mode && b.$outer.addClass("lg-slide"), this.$slide.not(".lg-current, .lg-prev-slide, .lg-next-slide").css("opacity", "0"), setTimeout(function () {
                b.$outer.removeClass("lg-dragging"), a < 0 && Math.abs(a) > b.s.swipeThreshold ? b.goToNextSlide(!0) : a > 0 && Math.abs(a) > b.s.swipeThreshold ? b.goToPrevSlide(!0) : Math.abs(a) < 5 && b.$el.trigger("onSlideClick.lg"), b.$slide.removeAttr("style")
            }), setTimeout(function () {
                b.$outer.hasClass("lg-dragging") || "lg-slide" === b.s.mode || b.$outer.removeClass("lg-slide")
            }, b.s.speed + 100)
        }, b.prototype.enableSwipe = function () {
            var a = this,
                b = 0,
                c = 0,
                d = !1;
            a.s.enableSwipe && a.doCss() && (a.$slide.on("touchstart.lg", function (c) {
                a.$outer.hasClass("lg-zoomed") || a.lgBusy || (c.preventDefault(), a.manageSwipeClass(), b = c.originalEvent.targetTouches[0].pageX)
            }), a.$slide.on("touchmove.lg", function (e) {
                a.$outer.hasClass("lg-zoomed") || (e.preventDefault(), c = e.originalEvent.targetTouches[0].pageX, a.touchMove(b, c), d = !0)
            }), a.$slide.on("touchend.lg", function () {
                a.$outer.hasClass("lg-zoomed") || (d ? (d = !1, a.touchEnd(c - b)) : a.$el.trigger("onSlideClick.lg"))
            }))
        }, b.prototype.enableDrag = function () {
            var b = this,
                c = 0,
                d = 0,
                e = !1,
                f = !1;
            b.s.enableDrag && b.doCss() && (b.$slide.on("mousedown.lg", function (d) {
                b.$outer.hasClass("lg-zoomed") || b.lgBusy || a(d.target).text().trim() || (d.preventDefault(), b.manageSwipeClass(), c = d.pageX, e = !0, b.$outer.scrollLeft += 1, b.$outer.scrollLeft -= 1, b.$outer.removeClass("lg-grab").addClass("lg-grabbing"), b.$el.trigger("onDragstart.lg"))
            }), a(window).on("mousemove.lg", function (a) {
                e && (f = !0, d = a.pageX, b.touchMove(c, d), b.$el.trigger("onDragmove.lg"))
            }), a(window).on("mouseup.lg", function (g) {
                f ? (f = !1, b.touchEnd(d - c), b.$el.trigger("onDragend.lg")) : (a(g.target).hasClass("lg-object") || a(g.target).hasClass("lg-video-play")) && b.$el.trigger("onSlideClick.lg"), e && (e = !1, b.$outer.removeClass("lg-grabbing").addClass("lg-grab"))
            }))
        }, b.prototype.manageSwipeClass = function () {
            var a = this.index + 1,
                b = this.index - 1;
            this.s.loop && this.$slide.length > 2 && (0 === this.index ? b = this.$slide.length - 1 : this.index === this.$slide.length - 1 && (a = 0)), this.$slide.removeClass("lg-next-slide lg-prev-slide"), b > -1 && this.$slide.eq(b).addClass("lg-prev-slide"), this.$slide.eq(a).addClass("lg-next-slide")
        }, b.prototype.mousewheel = function () {
            var a = this;
            a.$outer.on("mousewheel.lg", function (b) {
                b.deltaY && (b.deltaY > 0 ? a.goToPrevSlide() : a.goToNextSlide(), b.preventDefault())
            })
        }, b.prototype.closeGallery = function () {
            var b = this,
                c = !1;
            this.$outer.find(".lg-close").on("click.lg", function () {
                b.destroy()
            }), b.s.closable && (b.$outer.on("mousedown.lg", function (b) {
                c = !!(a(b.target).is(".lg-outer") || a(b.target).is(".lg-item ") || a(b.target).is(".lg-img-wrap"))
            }), b.$outer.on("mousemove.lg", function () {
                c = !1
            }), b.$outer.on("mouseup.lg", function (d) {
                (a(d.target).is(".lg-outer") || a(d.target).is(".lg-item ") || a(d.target).is(".lg-img-wrap") && c) && (b.$outer.hasClass("lg-dragging") || b.destroy())
            }))
        }, b.prototype.destroy = function (b) {
            var c = this;
            b || (c.$el.trigger("onBeforeClose.lg"), a(window).scrollTop(c.prevScrollTop)), b && (c.s.dynamic || this.$items.off("click.lg click.lgcustom"), a.removeData(c.el, "lightGallery")), this.$el.off(".lg.tm"), a.each(a.fn.lightGallery.modules, function (a) {
                c.modules[a] && c.modules[a].destroy()
            }), this.lGalleryOn = !1, clearTimeout(c.hideBarTimeout), this.hideBarTimeout = !1, a(window).off(".lg"), a("body").removeClass("lg-on lg-from-hash"), c.$outer && c.$outer.removeClass("lg-visible"), a(".lg-backdrop").removeClass("in"), setTimeout(function () {
                c.$outer && c.$outer.remove(), a(".lg-backdrop").remove(), b || c.$el.trigger("onCloseAfter.lg"), c.$el.focus()
            }, c.s.backdropDuration + 50)
        }, a.fn.lightGallery = function (c) {
            return this.each(function () {
                if (a.data(this, "lightGallery")) try {
                    a(this).data("lightGallery").init()
                } catch (a) {
                    console.error("lightGallery has not initiated properly", a)
                } else a.data(this, "lightGallery", new b(this, c))
            })
        }, a.fn.lightGallery.modules = {}
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";
        var b = {
                autoplay: !1,
                pause: 5e3,
                progressBar: !0,
                fourceAutoplay: !1,
                autoplayControls: !0,
                appendAutoplayControlsTo: ".lg-toolbar"
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.$el = a(c), !(this.core.$items.length < 2) && (this.core.s = a.extend({}, b, this.core.s), this.interval = !1, this.fromAuto = !0, this.canceledOnTouch = !1, this.fourceAutoplayTemp = this.core.s.fourceAutoplay, this.core.doCss() || (this.core.s.progressBar = !1), this.init(), this)
            };
        c.prototype.init = function () {
            var a = this;
            a.core.s.autoplayControls && a.controls(), a.core.s.progressBar && a.core.$outer.find(".lg").append('<div class="lg-progress-bar"><div class="lg-progress"></div></div>'), a.progress(), a.core.s.autoplay && a.$el.one("onSlideItemLoad.lg.tm", function () {
                a.startlAuto()
            }), a.$el.on("onDragstart.lg.tm touchstart.lg.tm", function () {
                a.interval && (a.cancelAuto(), a.canceledOnTouch = !0)
            }), a.$el.on("onDragend.lg.tm touchend.lg.tm onSlideClick.lg.tm", function () {
                !a.interval && a.canceledOnTouch && (a.startlAuto(), a.canceledOnTouch = !1)
            })
        }, c.prototype.progress = function () {
            var a, b, c = this;
            c.$el.on("onBeforeSlide.lg.tm", function () {
                c.core.s.progressBar && c.fromAuto && (a = c.core.$outer.find(".lg-progress-bar"), b = c.core.$outer.find(".lg-progress"), c.interval && (b.removeAttr("style"), a.removeClass("lg-start"), setTimeout(function () {
                    b.css("transition", "width " + (c.core.s.speed + c.core.s.pause) + "ms ease 0s"), a.addClass("lg-start")
                }, 20))), c.fromAuto || c.core.s.fourceAutoplay || c.cancelAuto(), c.fromAuto = !1
            })
        }, c.prototype.controls = function () {
            var b = this;
            a(this.core.s.appendAutoplayControlsTo).append('<button type="button" aria-label="Toggle autoplay" class="lg-autoplay-button lg-icon"></button>'), b.core.$outer.find(".lg-autoplay-button").on("click.lg", function () {
                a(b.core.$outer).hasClass("lg-show-autoplay") ? (b.cancelAuto(), b.core.s.fourceAutoplay = !1) : b.interval || (b.startlAuto(), b.core.s.fourceAutoplay = b.fourceAutoplayTemp)
            })
        }, c.prototype.startlAuto = function () {
            var a = this;
            a.core.$outer.find(".lg-progress").css("transition", "width " + (a.core.s.speed + a.core.s.pause) + "ms ease 0s"), a.core.$outer.addClass("lg-show-autoplay"), a.core.$outer.find(".lg-progress-bar").addClass("lg-start"), a.interval = setInterval(function () {
                a.core.index + 1 < a.core.$items.length ? a.core.index++ : a.core.index = 0, a.fromAuto = !0, a.core.slide(a.core.index, !1, !1, "next")
            }, a.core.s.speed + a.core.s.pause)
        }, c.prototype.cancelAuto = function () {
            clearInterval(this.interval), this.interval = !1, this.core.$outer.find(".lg-progress").removeAttr("style"), this.core.$outer.removeClass("lg-show-autoplay"), this.core.$outer.find(".lg-progress-bar").removeClass("lg-start")
        }, c.prototype.destroy = function () {
            this.cancelAuto(), this.core.$outer.find(".lg-progress-bar").remove()
        }, a.fn.lightGallery.modules.autoplay = c
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";

        function b() {
            return document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement
        }
        var c = {
                fullScreen: !0
            },
            d = function (b) {
                return this.core = a(b).data("lightGallery"), this.$el = a(b), this.core.s = a.extend({}, c, this.core.s), this.init(), this
            };
        d.prototype.init = function () {
            var a = "";
            if (this.core.s.fullScreen) {
                if (!(document.fullscreenEnabled || document.webkitFullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled)) return;
                a = '<button type="button" aria-label="Toggle fullscreen" class="lg-fullscreen lg-icon"></button>', this.core.$outer.find(".lg-toolbar").append(a), this.fullScreen()
            }
        }, d.prototype.requestFullscreen = function () {
            var a = document.documentElement;
            a.requestFullscreen ? a.requestFullscreen() : a.msRequestFullscreen ? a.msRequestFullscreen() : a.mozRequestFullScreen ? a.mozRequestFullScreen() : a.webkitRequestFullscreen && a.webkitRequestFullscreen()
        }, d.prototype.exitFullscreen = function () {
            document.exitFullscreen ? document.exitFullscreen() : document.msExitFullscreen ? document.msExitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()
        }, d.prototype.fullScreen = function () {
            var c = this;
            a(document).on("fullscreenchange.lg webkitfullscreenchange.lg mozfullscreenchange.lg MSFullscreenChange.lg", function () {
                c.core.$outer.toggleClass("lg-fullscreen-on")
            }), this.core.$outer.find(".lg-fullscreen").on("click.lg", function () {
                b() ? c.exitFullscreen() : c.requestFullscreen()
            })
        }, d.prototype.destroy = function () {
            b() && this.exitFullscreen(), a(document).off("fullscreenchange.lg webkitfullscreenchange.lg mozfullscreenchange.lg MSFullscreenChange.lg")
        }, a.fn.lightGallery.modules.fullscreen = d
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery)
}(0, function (a) {
    ! function () {
        "use strict";
        var b = {
                pager: !1
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.$el = a(c), this.core.s = a.extend({}, b, this.core.s), this.core.s.pager && this.core.$items.length > 1 && this.init(), this
            };
        c.prototype.init = function () {
            var b, c, d, e = this,
                f = "";
            if (e.core.$outer.find(".lg").append('<div class="lg-pager-outer"></div>'), e.core.s.dynamic)
                for (var g = 0; g < e.core.s.dynamicEl.length; g++) f += '<span class="lg-pager-cont"> <span class="lg-pager"></span><div class="lg-pager-thumb-cont"><span class="lg-caret"></span> <img src="' + e.core.s.dynamicEl[g].thumb + '" /></div></span>';
            else e.core.$items.each(function () {
                e.core.s.exThumbImage ? f += '<span class="lg-pager-cont"> <span class="lg-pager"></span><div class="lg-pager-thumb-cont"><span class="lg-caret"></span> <img src="' + a(this).attr(e.core.s.exThumbImage) + '" /></div></span>' : f += '<span class="lg-pager-cont"> <span class="lg-pager"></span><div class="lg-pager-thumb-cont"><span class="lg-caret"></span> <img src="' + a(this).find("img").attr("src") + '" /></div></span>'
            });
            c = e.core.$outer.find(".lg-pager-outer"), c.html(f), b = e.core.$outer.find(".lg-pager-cont"), b.on("click.lg touchend.lg", function () {
                var b = a(this);
                e.core.index = b.index(), e.core.slide(e.core.index, !1, !0, !1)
            }), c.on("mouseover.lg", function () {
                clearTimeout(d), c.addClass("lg-pager-hover")
            }), c.on("mouseout.lg", function () {
                d = setTimeout(function () {
                    c.removeClass("lg-pager-hover")
                })
            }), e.core.$el.on("onBeforeSlide.lg.tm", function (a, c, d) {
                b.removeClass("lg-pager-active"), b.eq(d).addClass("lg-pager-active")
            })
        }, c.prototype.destroy = function () {}, a.fn.lightGallery.modules.pager = c
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";
        var b = {
                thumbnail: !0,
                animateThumb: !0,
                currentPagerPosition: "middle",
                thumbWidth: 100,
                thumbHeight: "80px",
                thumbContHeight: 100,
                thumbMargin: 5,
                exThumbImage: !1,
                showThumbByDefault: !0,
                toogleThumb: !0,
                pullCaptionUp: !0,
                enableThumbDrag: !0,
                enableThumbSwipe: !0,
                swipeThreshold: 50,
                loadYoutubeThumbnail: !0,
                youtubeThumbSize: 1,
                loadVimeoThumbnail: !0,
                vimeoThumbSize: "thumbnail_small",
                loadDailymotionThumbnail: !0
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.core.s = a.extend({}, b, this.core.s), this.$el = a(c), this.$thumbOuter = null, this.thumbOuterWidth = 0, this.thumbTotalWidth = this.core.$items.length * (this.core.s.thumbWidth + this.core.s.thumbMargin), this.thumbIndex = this.core.index, this.core.s.animateThumb && (this.core.s.thumbHeight = "100%"), this.left = 0, this.init(), this
            };
        c.prototype.init = function () {
            var a = this;
            this.core.s.thumbnail && this.core.$items.length > 1 && (this.core.s.showThumbByDefault && setTimeout(function () {
                a.core.$outer.addClass("lg-thumb-open")
            }, 700), this.core.s.pullCaptionUp && this.core.$outer.addClass("lg-pull-caption-up"), this.build(), this.core.s.animateThumb && this.core.doCss() ? (this.core.s.enableThumbDrag && this.enableThumbDrag(), this.core.s.enableThumbSwipe && this.enableThumbSwipe(), this.thumbClickable = !1) : this.thumbClickable = !0, this.toogle(), this.thumbkeyPress())
        }, c.prototype.build = function () {
            function b(a, b, c) {
                var g, h = d.core.isVideo(a, c) || {},
                    i = "";
                h.youtube || h.vimeo || h.dailymotion ? h.youtube ? g = d.core.s.loadYoutubeThumbnail ? "//img.youtube.com/vi/" + h.youtube[1] + "/" + d.core.s.youtubeThumbSize + ".jpg" : b : h.vimeo ? d.core.s.loadVimeoThumbnail ? (g = "//i.vimeocdn.com/video/error_" + f + ".jpg", i = h.vimeo[1]) : g = b : h.dailymotion && (g = d.core.s.loadDailymotionThumbnail ? "//www.dailymotion.com/thumbnail/video/" + h.dailymotion[1] : b) : g = b, e += '<div data-vimeo-id="' + i + '" class="lg-thumb-item" style="width:' + d.core.s.thumbWidth + "px; height: " + d.core.s.thumbHeight + "; margin-right: " + d.core.s.thumbMargin + 'px"><img src="' + g + '" /></div>', i = ""
            }
            var c, d = this,
                e = "",
                f = "",
                g = '<div class="lg-thumb-outer"><div class="lg-thumb lg-group"></div></div>';
            switch (this.core.s.vimeoThumbSize) {
                case "thumbnail_large":
                    f = "640";
                    break;
                case "thumbnail_medium":
                    f = "200x150";
                    break;
                case "thumbnail_small":
                    f = "100x75"
            }
            if (d.core.$outer.addClass("lg-has-thumb"), d.core.$outer.find(".lg").append(g), d.$thumbOuter = d.core.$outer.find(".lg-thumb-outer"), d.thumbOuterWidth = d.$thumbOuter.width(), d.core.s.animateThumb && d.core.$outer.find(".lg-thumb").css({
                    width: d.thumbTotalWidth + "px",
                    position: "relative"
                }), this.core.s.animateThumb && d.$thumbOuter.css("height", d.core.s.thumbContHeight + "px"), d.core.s.dynamic)
                for (var h = 0; h < d.core.s.dynamicEl.length; h++) b(d.core.s.dynamicEl[h].src, d.core.s.dynamicEl[h].thumb, h);
            else d.core.$items.each(function (c) {
                d.core.s.exThumbImage ? b(a(this).attr("href") || a(this).attr("data-src"), a(this).attr(d.core.s.exThumbImage), c) : b(a(this).attr("href") || a(this).attr("data-src"), a(this).find("img").attr("src"), c)
            });
            d.core.$outer.find(".lg-thumb").html(e), c = d.core.$outer.find(".lg-thumb-item"), c.each(function () {
                var b = a(this),
                    c = b.attr("data-vimeo-id");
                c && a.getJSON("//www.vimeo.com/api/v2/video/" + c + ".json?callback=?", {
                    format: "json"
                }, function (a) {
                    b.find("img").attr("src", a[0][d.core.s.vimeoThumbSize])
                })
            }), c.eq(d.core.index).addClass("active"), d.core.$el.on("onBeforeSlide.lg.tm", function () {
                c.removeClass("active"), c.eq(d.core.index).addClass("active")
            }), c.on("click.lg touchend.lg", function () {
                var b = a(this);
                setTimeout(function () {
                    (d.thumbClickable && !d.core.lgBusy || !d.core.doCss()) && (d.core.index = b.index(), d.core.slide(d.core.index, !1, !0, !1))
                }, 50)
            }), d.core.$el.on("onBeforeSlide.lg.tm", function () {
                d.animateThumb(d.core.index)
            }), a(window).on("resize.lg.thumb orientationchange.lg.thumb", function () {
                setTimeout(function () {
                    d.animateThumb(d.core.index), d.thumbOuterWidth = d.$thumbOuter.width()
                }, 200)
            })
        }, c.prototype.setTranslate = function (a) {
            this.core.$outer.find(".lg-thumb").css({
                transform: "translate3d(-" + a + "px, 0px, 0px)"
            })
        }, c.prototype.animateThumb = function (a) {
            var b = this.core.$outer.find(".lg-thumb");
            if (this.core.s.animateThumb) {
                var c;
                switch (this.core.s.currentPagerPosition) {
                    case "left":
                        c = 0;
                        break;
                    case "middle":
                        c = this.thumbOuterWidth / 2 - this.core.s.thumbWidth / 2;
                        break;
                    case "right":
                        c = this.thumbOuterWidth - this.core.s.thumbWidth
                }
                this.left = (this.core.s.thumbWidth + this.core.s.thumbMargin) * a - 1 - c, this.left > this.thumbTotalWidth - this.thumbOuterWidth && (this.left = this.thumbTotalWidth - this.thumbOuterWidth), this.left < 0 && (this.left = 0), this.core.lGalleryOn ? (b.hasClass("on") || this.core.$outer.find(".lg-thumb").css("transition-duration", this.core.s.speed + "ms"), this.core.doCss() || b.animate({
                    left: -this.left + "px"
                }, this.core.s.speed)) : this.core.doCss() || b.css("left", -this.left + "px"), this.setTranslate(this.left)
            }
        }, c.prototype.enableThumbDrag = function () {
            var b = this,
                c = 0,
                d = 0,
                e = !1,
                f = !1,
                g = 0;
            b.$thumbOuter.addClass("lg-grab"), b.core.$outer.find(".lg-thumb").on("mousedown.lg.thumb", function (a) {
                b.thumbTotalWidth > b.thumbOuterWidth && (a.preventDefault(), c = a.pageX, e = !0, b.core.$outer.scrollLeft += 1, b.core.$outer.scrollLeft -= 1, b.thumbClickable = !1, b.$thumbOuter.removeClass("lg-grab").addClass("lg-grabbing"))
            }), a(window).on("mousemove.lg.thumb", function (a) {
                e && (g = b.left, f = !0, d = a.pageX, b.$thumbOuter.addClass("lg-dragging"), g -= d - c, g > b.thumbTotalWidth - b.thumbOuterWidth && (g = b.thumbTotalWidth - b.thumbOuterWidth), g < 0 && (g = 0), b.setTranslate(g))
            }), a(window).on("mouseup.lg.thumb", function () {
                f ? (f = !1, b.$thumbOuter.removeClass("lg-dragging"), b.left = g, Math.abs(d - c) < b.core.s.swipeThreshold && (b.thumbClickable = !0)) : b.thumbClickable = !0, e && (e = !1, b.$thumbOuter.removeClass("lg-grabbing").addClass("lg-grab"))
            })
        }, c.prototype.enableThumbSwipe = function () {
            var a = this,
                b = 0,
                c = 0,
                d = !1,
                e = 0;
            a.core.$outer.find(".lg-thumb").on("touchstart.lg", function (c) {
                a.thumbTotalWidth > a.thumbOuterWidth && (c.preventDefault(), b = c.originalEvent.targetTouches[0].pageX, a.thumbClickable = !1)
            }), a.core.$outer.find(".lg-thumb").on("touchmove.lg", function (f) {
                a.thumbTotalWidth > a.thumbOuterWidth && (f.preventDefault(), c = f.originalEvent.targetTouches[0].pageX, d = !0, a.$thumbOuter.addClass("lg-dragging"), e = a.left, e -= c - b, e > a.thumbTotalWidth - a.thumbOuterWidth && (e = a.thumbTotalWidth - a.thumbOuterWidth), e < 0 && (e = 0), a.setTranslate(e))
            }), a.core.$outer.find(".lg-thumb").on("touchend.lg", function () {
                a.thumbTotalWidth > a.thumbOuterWidth && d ? (d = !1, a.$thumbOuter.removeClass("lg-dragging"),
                    Math.abs(c - b) < a.core.s.swipeThreshold && (a.thumbClickable = !0), a.left = e) : a.thumbClickable = !0
            })
        }, c.prototype.toogle = function () {
            var a = this;
            a.core.s.toogleThumb && (a.core.$outer.addClass("lg-can-toggle"), a.$thumbOuter.append('<button type="button" aria-label="Toggle thumbnails" class="lg-toogle-thumb lg-icon"></button>'), a.core.$outer.find(".lg-toogle-thumb").on("click.lg", function () {
                a.core.$outer.toggleClass("lg-thumb-open")
            }))
        }, c.prototype.thumbkeyPress = function () {
            var b = this;
            a(window).on("keydown.lg.thumb", function (a) {
                38 === a.keyCode ? (a.preventDefault(), b.core.$outer.addClass("lg-thumb-open")) : 40 === a.keyCode && (a.preventDefault(), b.core.$outer.removeClass("lg-thumb-open"))
            })
        }, c.prototype.destroy = function () {
            this.core.s.thumbnail && this.core.$items.length > 1 && (a(window).off("resize.lg.thumb orientationchange.lg.thumb keydown.lg.thumb"), this.$thumbOuter.remove(), this.core.$outer.removeClass("lg-has-thumb"))
        }, a.fn.lightGallery.modules.Thumbnail = c
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";

        function b(a, b, c, d) {
            var e = this;
            if (e.core.$slide.eq(b).find(".lg-video").append(e.loadVideo(c, "lg-object", !0, b, d)), d)
                if (e.core.s.videojs) try {
                    videojs(e.core.$slide.eq(b).find(".lg-html5").get(0), e.core.s.videojsOptions, function () {
                        !e.videoLoaded && e.core.s.autoplayFirstVideo && this.play()
                    })
                } catch (a) {
                    console.error("lightGallery:- Make sure you have included videojs")
                } else !e.videoLoaded && e.core.s.autoplayFirstVideo && e.core.$slide.eq(b).find(".lg-html5").get(0).play()
        }

        function c(a, b) {
            var c = this.core.$slide.eq(b).find(".lg-video-cont");
            c.hasClass("lg-has-iframe") || (c.css("max-width", this.core.s.videoMaxWidth), this.videoLoaded = !0)
        }

        function d(b, c, d) {
            var e = this,
                f = e.core.$slide.eq(c),
                g = f.find(".lg-youtube").get(0),
                h = f.find(".lg-vimeo").get(0),
                i = f.find(".lg-dailymotion").get(0),
                j = f.find(".lg-vk").get(0),
                k = f.find(".lg-html5").get(0);
            if (g) g.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*");
            else if (h) try {
                    new Vimeo.Player(h).pause().catch(function (a) {
                        console.error("Unable to pause the video:", a.name)
                    })
                } catch (a) {
                    console.warn("lightGallery:- Make sure you have included https://github.com/vimeo/player.js")
                } else if (i) i.contentWindow.postMessage("pause", "*");
                else if (k)
                if (e.core.s.videojs) try {
                    videojs(k).pause()
                } catch (a) {
                    console.error("lightGallery:- Make sure you have included videojs")
                } else k.pause();
            j && a(j).attr("src", a(j).attr("src").replace("&autoplay", "&noplay"));
            var l;
            l = e.core.s.dynamic ? e.core.s.dynamicEl[d].src : e.core.$items.eq(d).attr("href") || e.core.$items.eq(d).attr("data-src");
            var m = e.core.isVideo(l, d) || {};
            (m.youtube || m.vimeo || m.dailymotion || m.vk) && e.core.$outer.addClass("lg-hide-download")
        }
        var e = {
                videoMaxWidth: "855px",
                autoplayFirstVideo: !0,
                youtubePlayerParams: !1,
                vimeoPlayerParams: !1,
                dailymotionPlayerParams: !1,
                vkPlayerParams: !1,
                videojs: !1,
                videojsOptions: {}
            },
            f = function (b) {
                return this.core = a(b).data("lightGallery"), this.$el = a(b), this.core.s = a.extend({}, e, this.core.s), this.videoLoaded = !1, this.init(), this
            };
        f.prototype.init = function () {
            var e = this;
            e.core.$el.on("hasVideo.lg.tm", b.bind(this)), e.core.$el.on("onAferAppendSlide.lg.tm", c.bind(this)), e.core.doCss() && e.core.$items.length > 1 && (e.core.s.enableSwipe || e.core.s.enableDrag) ? e.core.$el.on("onSlideClick.lg.tm", function () {
                var a = e.core.$slide.eq(e.core.index);
                e.loadVideoOnclick(a)
            }) : e.core.$slide.on("click.lg", function () {
                e.loadVideoOnclick(a(this))
            }), e.core.$el.on("onBeforeSlide.lg.tm", d.bind(this)), e.core.$el.on("onAfterSlide.lg.tm", function (a, b) {
                e.core.$slide.eq(b).removeClass("lg-video-playing")
            }), e.core.s.autoplayFirstVideo && e.core.$el.on("onAferAppendSlide.lg.tm", function (a, b) {
                if (!e.core.lGalleryOn) {
                    var c = e.core.$slide.eq(b);
                    setTimeout(function () {
                        e.loadVideoOnclick(c)
                    }, 100)
                }
            })
        }, f.prototype.loadVideo = function (b, c, d, e, f) {
            var g, h = this,
                i = "",
                j = 1,
                k = "",
                l = this.core.isVideo(b, e) || {};
            if (g = h.core.s.dynamic ? h.core.s.dynamicEl[h.core.index].title : h.core.$items.eq(h.core.index).attr("title") || h.core.$items.eq(h.core.index).find("img").first().attr("alt"), g = g ? 'title="' + g + '"' : "", d && (j = this.videoLoaded ? 0 : this.core.s.autoplayFirstVideo ? 1 : 0), l.youtube) k = "?wmode=opaque&autoplay=" + j + "&enablejsapi=1", this.core.s.youtubePlayerParams && (k = k + "&" + a.param(this.core.s.youtubePlayerParams)), i = '<iframe allow="autoplay" class="lg-video-object lg-youtube ' + c + '" ' + g + ' width="560" height="315" src="//www.youtube.com/embed/' + l.youtube[1] + k + '" frameborder="0" allowfullscreen></iframe>';
            else if (l.vimeo) k = "?autoplay=" + j, this.core.s.vimeoPlayerParams && (k = k + "&" + a.param(this.core.s.vimeoPlayerParams)), i = '<iframe allow="autoplay" class="lg-video-object lg-vimeo ' + c + '" ' + g + ' width="560" height="315"  src="//player.vimeo.com/video/' + l.vimeo[1] + k + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
            else if (l.dailymotion) k = "?wmode=opaque&autoplay=" + j + "&api=postMessage", this.core.s.dailymotionPlayerParams && (k = k + "&" + a.param(this.core.s.dailymotionPlayerParams)), i = '<iframe allow="autoplay" class="lg-video-object lg-dailymotion ' + c + '" ' + g + ' width="560" height="315" src="//www.dailymotion.com/embed/video/' + l.dailymotion[1] + k + '" frameborder="0" allowfullscreen></iframe>';
            else if (l.html5) {
                var m = f.substring(0, 1);
                "." !== m && "#" !== m || (f = a(f).html()), i = f
            } else l.vk && (k = "&autoplay=" + j, this.core.s.vkPlayerParams && (k = k + "&" + a.param(this.core.s.vkPlayerParams)), i = '<iframe allow="autoplay" class="lg-video-object lg-vk ' + c + '" ' + g + ' width="560" height="315" src="//vk.com/video_ext.php?' + l.vk[1] + k + '" frameborder="0" allowfullscreen></iframe>');
            return i
        }, f.prototype.loadVideoOnclick = function (a) {
            var b = this;
            if (a.find(".lg-object").hasClass("lg-has-poster") && a.find(".lg-object").is(":visible"))
                if (a.hasClass("lg-has-video")) {
                    var c = a.find(".lg-youtube").get(0),
                        d = a.find(".lg-vimeo").get(0),
                        e = a.find(".lg-dailymotion").get(0),
                        f = a.find(".lg-html5").get(0);
                    if (c) c.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', "*");
                    else if (d) try {
                            new Vimeo.Player(d).play().catch(function (a) {
                                console.error("error playing the video:", a.name)
                            })
                        } catch (a) {
                            console.warn("lightGallery:- Make sure you have included https://github.com/vimeo/player.js")
                        } else if (e) e.contentWindow.postMessage("play", "*");
                        else if (f)
                        if (b.core.s.videojs) try {
                            videojs(f).play()
                        } catch (a) {
                            console.error("lightGallery:- Make sure you have included videojs")
                        } else f.play();
                    a.addClass("lg-video-playing")
                } else {
                    a.addClass("lg-video-playing lg-has-video");
                    var g, h, i = function (c, d) {
                        if (a.find(".lg-video").append(b.loadVideo(c, "", !1, b.core.index, d)), d)
                            if (b.core.s.videojs) try {
                                videojs(b.core.$slide.eq(b.core.index).find(".lg-html5").get(0), b.core.s.videojsOptions, function () {
                                    this.play()
                                })
                            } catch (a) {
                                console.error("lightGallery:- Make sure you have included videojs")
                            } else b.core.$slide.eq(b.core.index).find(".lg-html5").get(0).play()
                    };
                    b.core.s.dynamic ? (g = b.core.s.dynamicEl[b.core.index].src, h = b.core.s.dynamicEl[b.core.index].html, i(g, h)) : (g = b.core.$items.eq(b.core.index).attr("href") || b.core.$items.eq(b.core.index).attr("data-src"), h = b.core.$items.eq(b.core.index).attr("data-html"), i(g, h));
                    var j = a.find(".lg-object");
                    a.find(".lg-video").append(j), a.find(".lg-video-object").hasClass("lg-html5") || (a.removeClass("lg-complete"), a.find(".lg-video-object").on("load.lg error.lg", function () {
                        a.addClass("lg-complete")
                    }))
                }
        }, f.prototype.destroy = function () {
            this.videoLoaded = !1
        }, a.fn.lightGallery.modules.video = f
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";
        var b = function () {
                var a = !1,
                    b = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);
                return b && parseInt(b[2], 10) < 54 && (a = !0), a
            },
            c = {
                scale: 1,
                zoom: !0,
                actualSize: !0,
                enableZoomAfter: 300,
                useLeftForZoom: b()
            },
            d = function (b) {
                return this.core = a(b).data("lightGallery"), this.core.s = a.extend({}, c, this.core.s), this.core.s.zoom && this.core.doCss() && (this.init(), this.zoomabletimeout = !1, this.pageX = a(window).width() / 2, this.pageY = a(window).height() / 2 + a(window).scrollTop()), this
            };
        d.prototype.init = function () {
            var b = this,
                c = '<button type="button" aria-label="Zoom in" id="lg-zoom-in" class="lg-icon"></button><button type="button" aria-label="Zoom out" id="lg-zoom-out" class="lg-icon"></button>';
            b.core.s.actualSize && (c += '<button type="button" aria-label="Actual size" id="lg-actual-size" class="lg-icon"></button>'), b.core.s.useLeftForZoom ? b.core.$outer.addClass("lg-use-left-for-zoom") : b.core.$outer.addClass("lg-use-transition-for-zoom"), this.core.$outer.find(".lg-toolbar").append(c), b.core.$el.on("onSlideItemLoad.lg.tm.zoom", function (c, d, e) {
                var f = b.core.s.enableZoomAfter + e;
                a("body").hasClass("lg-from-hash") && e ? f = 0 : a("body").removeClass("lg-from-hash"), b.zoomabletimeout = setTimeout(function () {
                    b.core.$slide.eq(d).addClass("lg-zoomable")
                }, f + 30)
            });
            var d = 1,
                e = function (c) {
                    var d, e, f = b.core.$outer.find(".lg-current .lg-image"),
                        g = (a(window).width() - f.prop("offsetWidth")) / 2,
                        h = (a(window).height() - f.prop("offsetHeight")) / 2 + a(window).scrollTop();
                    d = b.pageX - g, e = b.pageY - h;
                    var i = (c - 1) * d,
                        j = (c - 1) * e;
                    f.css("transform", "scale3d(" + c + ", " + c + ", 1)").attr("data-scale", c), b.core.s.useLeftForZoom ? f.parent().css({
                        left: -i + "px",
                        top: -j + "px"
                    }).attr("data-x", i).attr("data-y", j) : f.parent().css("transform", "translate3d(-" + i + "px, -" + j + "px, 0)").attr("data-x", i).attr("data-y", j)
                },
                f = function () {
                    d > 1 ? b.core.$outer.addClass("lg-zoomed") : b.resetZoom(), d < 1 && (d = 1), e(d)
                },
                g = function (c, e, g, h) {
                    var i, j = e.prop("offsetWidth");
                    i = b.core.s.dynamic ? b.core.s.dynamicEl[g].width || e[0].naturalWidth || j : b.core.$items.eq(g).attr("data-width") || e[0].naturalWidth || j;
                    var k;
                    b.core.$outer.hasClass("lg-zoomed") ? d = 1 : i > j && (k = i / j, d = k || 2), h ? (b.pageX = a(window).width() / 2, b.pageY = a(window).height() / 2 + a(window).scrollTop()) : (b.pageX = c.pageX || c.originalEvent.targetTouches[0].pageX, b.pageY = c.pageY || c.originalEvent.targetTouches[0].pageY), f(), setTimeout(function () {
                        b.core.$outer.removeClass("lg-grabbing").addClass("lg-grab")
                    }, 10)
                },
                h = !1;
            b.core.$el.on("onAferAppendSlide.lg.tm.zoom", function (a, c) {
                var d = b.core.$slide.eq(c).find(".lg-image");
                d.on("dblclick", function (a) {
                    g(a, d, c)
                }), d.on("touchstart", function (a) {
                    h ? (clearTimeout(h), h = null, g(a, d, c)) : h = setTimeout(function () {
                        h = null
                    }, 300), a.preventDefault()
                })
            }), a(window).on("resize.lg.zoom scroll.lg.zoom orientationchange.lg.zoom", function () {
                b.pageX = a(window).width() / 2, b.pageY = a(window).height() / 2 + a(window).scrollTop(), e(d)
            }), a("#lg-zoom-out").on("click.lg", function () {
                b.core.$outer.find(".lg-current .lg-image").length && (d -= b.core.s.scale, f())
            }), a("#lg-zoom-in").on("click.lg", function () {
                b.core.$outer.find(".lg-current .lg-image").length && (d += b.core.s.scale, f())
            }), a("#lg-actual-size").on("click.lg", function (a) {
                g(a, b.core.$slide.eq(b.core.index).find(".lg-image"), b.core.index, !0)
            }), b.core.$el.on("onBeforeSlide.lg.tm", function () {
                d = 1, b.resetZoom()
            }), b.zoomDrag(), b.zoomSwipe()
        }, d.prototype.getCurrentTransform = function (a) {
            if (!a) return 0;
            var b = window.getComputedStyle(a, null),
                c = b.getPropertyValue("-webkit-transform") || b.getPropertyValue("-moz-transform") || b.getPropertyValue("-ms-transform") || b.getPropertyValue("-o-transform") || b.getPropertyValue("transform") || "none";
            return "none" !== c ? c.split("(")[1].split(")")[0].split(",") : 0
        }, d.prototype.getCurrentRotation = function (a) {
            if (!a) return 0;
            var b = this.getCurrentTransform(a);
            return b ? Math.round(Math.atan2(b[1], b[0]) * (180 / Math.PI)) : 0
        }, d.prototype.getModifier = function (a, b, c) {
            var d = a;
            a = Math.abs(a);
            var e = this.getCurrentTransform(c);
            if (!e) return 1;
            var f = 1;
            if ("X" === b) {
                var g = Math.sign(parseFloat(e[0]));
                0 === a || 180 === a ? f = 1 : 90 === a && (f = -90 === d && 1 === g || 90 === d && -1 === g ? -1 : 1), f *= g
            } else {
                var h = Math.sign(parseFloat(e[3]));
                if (0 === a || 180 === a) f = 1;
                else if (90 === a) {
                    var i = parseFloat(e[1]),
                        j = parseFloat(e[2]);
                    f = Math.sign(i * j * d * h)
                }
                f *= h
            }
            return f
        }, d.prototype.getImageSize = function (a, b, c) {
            var d = {
                y: "offsetHeight",
                x: "offsetWidth"
            };
            return 90 === b && (c = "x" === c ? "y" : "x"), a.prop(d[c])
        }, d.prototype.getDragCords = function (a, b) {
            return 90 === b ? {
                x: a.pageY,
                y: a.pageX
            } : {
                x: a.pageX,
                y: a.pageY
            }
        }, d.prototype.getSwipeCords = function (a, b) {
            var c = a.originalEvent.targetTouches[0].pageX,
                d = a.originalEvent.targetTouches[0].pageY;
            return 90 === b ? {
                x: d,
                y: c
            } : {
                x: c,
                y: d
            }
        }, d.prototype.getPossibleDragCords = function (a, b) {
            var c = (this.core.$outer.find(".lg").height() - this.getImageSize(a, b, "y")) / 2,
                d = Math.abs(this.getImageSize(a, b, "y") * Math.abs(a.attr("data-scale")) - this.core.$outer.find(".lg").height() + c),
                e = (this.core.$outer.find(".lg").width() - this.getImageSize(a, b, "x")) / 2,
                f = Math.abs(this.getImageSize(a, b, "x") * Math.abs(a.attr("data-scale")) - this.core.$outer.find(".lg").width() + e);
            return 90 === b ? {
                minY: e,
                maxY: f,
                minX: c,
                maxX: d
            } : {
                minY: c,
                maxY: d,
                minX: e,
                maxX: f
            }
        }, d.prototype.getDragAllowedAxises = function (a, b) {
            var c = this.getImageSize(a, b, "y") * a.attr("data-scale") > this.core.$outer.find(".lg").height(),
                d = this.getImageSize(a, b, "x") * a.attr("data-scale") > this.core.$outer.find(".lg").width();
            return 90 === b ? {
                allowX: c,
                allowY: d
            } : {
                allowX: d,
                allowY: c
            }
        }, d.prototype.resetZoom = function () {
            this.core.$outer.removeClass("lg-zoomed"), this.core.$slide.find(".lg-img-wrap").removeAttr("style data-x data-y"), this.core.$slide.find(".lg-image").removeAttr("style data-scale"), this.pageX = a(window).width() / 2, this.pageY = a(window).height() / 2 + a(window).scrollTop()
        }, d.prototype.zoomSwipe = function () {
            var a, b = this,
                c = {},
                d = {},
                e = !1,
                f = !1,
                g = !1,
                h = 0;
            b.core.$slide.on("touchstart.lg", function (d) {
                if (b.core.$outer.hasClass("lg-zoomed")) {
                    var e = b.core.$slide.eq(b.core.index).find(".lg-object");
                    a = b.core.$slide.eq(b.core.index).find(".lg-img-rotate")[0], h = b.getCurrentRotation(a);
                    var i = b.getDragAllowedAxises(e, Math.abs(h));
                    g = i.allowY, f = i.allowX, (f || g) && (d.preventDefault(), c = b.getSwipeCords(d, Math.abs(h)))
                }
            }), b.core.$slide.on("touchmove.lg", function (i) {
                if (b.core.$outer.hasClass("lg-zoomed")) {
                    var j, k, l = b.core.$slide.eq(b.core.index).find(".lg-img-wrap");
                    i.preventDefault(), e = !0, d = b.getSwipeCords(i, Math.abs(h)), b.core.$outer.addClass("lg-zoom-dragging"), k = g ? -Math.abs(l.attr("data-y")) + (d.y - c.y) * b.getModifier(h, "Y", a) : -Math.abs(l.attr("data-y")), j = f ? -Math.abs(l.attr("data-x")) + (d.x - c.x) * b.getModifier(h, "X", a) : -Math.abs(l.attr("data-x")), (Math.abs(d.x - c.x) > 15 || Math.abs(d.y - c.y) > 15) && (b.core.s.useLeftForZoom ? l.css({
                        left: j + "px",
                        top: k + "px"
                    }) : l.css("transform", "translate3d(" + j + "px, " + k + "px, 0)"))
                }
            }), b.core.$slide.on("touchend.lg", function () {
                b.core.$outer.hasClass("lg-zoomed") && e && (e = !1, b.core.$outer.removeClass("lg-zoom-dragging"), b.touchendZoom(c, d, f, g, h))
            })
        }, d.prototype.zoomDrag = function () {
            var b, c = this,
                d = {},
                e = {},
                f = !1,
                g = !1,
                h = !1,
                i = !1,
                j = 0;
            c.core.$slide.on("mousedown.lg.zoom", function (e) {
                b = c.core.$slide.eq(c.core.index).find(".lg-img-rotate")[0], j = c.getCurrentRotation(b);
                var g = c.core.$slide.eq(c.core.index).find(".lg-object"),
                    k = c.getDragAllowedAxises(g, Math.abs(j));
                i = k.allowY, h = k.allowX, c.core.$outer.hasClass("lg-zoomed") && a(e.target).hasClass("lg-object") && (h || i) && (e.preventDefault(), d = c.getDragCords(e, Math.abs(j)), f = !0, c.core.$outer.scrollLeft += 1, c.core.$outer.scrollLeft -= 1, c.core.$outer.removeClass("lg-grab").addClass("lg-grabbing"))
            }), a(window).on("mousemove.lg.zoom", function (a) {
                if (f) {
                    var k, l, m = c.core.$slide.eq(c.core.index).find(".lg-img-wrap");
                    g = !0, e = c.getDragCords(a, Math.abs(j)), c.core.$outer.addClass("lg-zoom-dragging"), l = i ? -Math.abs(m.attr("data-y")) + (e.y - d.y) * c.getModifier(j, "Y", b) : -Math.abs(m.attr("data-y")), k = h ? -Math.abs(m.attr("data-x")) + (e.x - d.x) * c.getModifier(j, "X", b) : -Math.abs(m.attr("data-x")), c.core.s.useLeftForZoom ? m.css({
                        left: k + "px",
                        top: l + "px"
                    }) : m.css("transform", "translate3d(" + k + "px, " + l + "px, 0)")
                }
            }), a(window).on("mouseup.lg.zoom", function (a) {
                f && (f = !1, c.core.$outer.removeClass("lg-zoom-dragging"), !g || d.x === e.x && d.y === e.y || (e = c.getDragCords(a, Math.abs(j)), c.touchendZoom(d, e, h, i, j)), g = !1), c.core.$outer.removeClass("lg-grabbing").addClass("lg-grab")
            })
        }, d.prototype.touchendZoom = function (a, b, c, d, e) {
            var f = this,
                g = f.core.$slide.eq(f.core.index).find(".lg-img-wrap"),
                h = f.core.$slide.eq(f.core.index).find(".lg-object"),
                i = f.core.$slide.eq(f.core.index).find(".lg-img-rotate")[0],
                j = -Math.abs(g.attr("data-x")) + (b.x - a.x) * f.getModifier(e, "X", i),
                k = -Math.abs(g.attr("data-y")) + (b.y - a.y) * f.getModifier(e, "Y", i),
                l = f.getPossibleDragCords(h, Math.abs(e));
            (Math.abs(b.x - a.x) > 15 || Math.abs(b.y - a.y) > 15) && (d && (k <= -l.maxY ? k = -l.maxY : k >= -l.minY && (k = -l.minY)), c && (j <= -l.maxX ? j = -l.maxX : j >= -l.minX && (j = -l.minX)), d ? g.attr("data-y", Math.abs(k)) : k = -Math.abs(g.attr("data-y")), c ? g.attr("data-x", Math.abs(j)) : j = -Math.abs(g.attr("data-x")), f.core.s.useLeftForZoom ? g.css({
                left: j + "px",
                top: k + "px"
            }) : g.css("transform", "translate3d(" + j + "px, " + k + "px, 0)"))
        }, d.prototype.destroy = function () {
            var b = this;
            b.core.$el.off(".lg.zoom"), a(window).off(".lg.zoom"), b.core.$slide.off(".lg.zoom"), b.core.$el.off(".lg.tm.zoom"), b.resetZoom(), clearTimeout(b.zoomabletimeout), b.zoomabletimeout = !1
        }, a.fn.lightGallery.modules.zoom = d
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery)
}(0, function (a) {
    ! function () {
        "use strict";
        var b = {
                hash: !0
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.core.s = a.extend({}, b, this.core.s), this.core.s.hash && (this.oldHash = window.location.hash, this.init()), this
            };
        c.prototype.init = function () {
            var b, c = this;
            c.core.$el.on("onAfterSlide.lg.tm", function (a, b, d) {
                history.replaceState ? history.replaceState(null, null, window.location.pathname + window.location.search + "#lg=" + c.core.s.galleryId + "&slide=" + d) : window.location.hash = "lg=" + c.core.s.galleryId + "&slide=" + d
            }), a(window).on("hashchange.lg.hash", function () {
                b = window.location.hash;
                var a = parseInt(b.split("&slide=")[1], 10);
                b.indexOf("lg=" + c.core.s.galleryId) > -1 ? c.core.slide(a, !1, !1) : c.core.lGalleryOn && c.core.destroy()
            })
        }, c.prototype.destroy = function () {
            this.core.s.hash && (this.oldHash && this.oldHash.indexOf("lg=" + this.core.s.galleryId) < 0 ? history.replaceState ? history.replaceState(null, null, this.oldHash) : window.location.hash = this.oldHash : history.replaceState ? history.replaceState(null, document.title, window.location.pathname + window.location.search) : window.location.hash = "", this.core.$el.off(".lg.hash"))
        }, a.fn.lightGallery.modules.hash = c
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";
        var b = {
                share: !0,
                facebook: !0,
                facebookDropdownText: "Facebook",
                twitter: !0,
                twitterDropdownText: "Twitter",
                googlePlus: !0,
                googlePlusDropdownText: "GooglePlus",
                pinterest: !0,
                pinterestDropdownText: "Pinterest"
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.core.s = a.extend({}, b, this.core.s), this.core.s.share && this.init(), this
            };
        c.prototype.init = function () {
            var b = this,
                c = '<button type="button" aria-label="Share" id="lg-share" class="lg-icon" aria-haspopup="true" aria-expanded="false"><ul class="lg-dropdown" style="position: absolute;">';
            c += b.core.s.facebook ? '<li><a id="lg-share-facebook" target="_blank"><span class="lg-icon"></span><span class="lg-dropdown-text">' + this.core.s.facebookDropdownText + "</span></a></li>" : "", c += b.core.s.twitter ? '<li><a id="lg-share-twitter" target="_blank"><span class="lg-icon"></span><span class="lg-dropdown-text">' + this.core.s.twitterDropdownText + "</span></a></li>" : "", c += b.core.s.googlePlus ? '<li><a id="lg-share-googleplus" target="_blank"><span class="lg-icon"></span><span class="lg-dropdown-text">' + this.core.s.googlePlusDropdownText + "</span></a></li>" : "", c += b.core.s.pinterest ? '<li><a id="lg-share-pinterest" target="_blank"><span class="lg-icon"></span><span class="lg-dropdown-text">' + this.core.s.pinterestDropdownText + "</span></a></li>" : "", c += "</ul></button>", this.core.$outer.find(".lg-toolbar").append(c), this.core.$outer.find(".lg").append('<div id="lg-dropdown-overlay"></div>'), a("#lg-share").on("click.lg", function () {
                b.core.$outer.toggleClass("lg-dropdown-active");
                var c = a("#lg-share").attr("aria-expanded");
                a("#lg-share").attr("aria-expanded", "true" !== c)
            }), a("#lg-dropdown-overlay").on("click.lg", function () {
                b.core.$outer.removeClass("lg-dropdown-active"), a("#lg-share").attr("aria-expanded", !1)
            }), b.core.$el.on("onAfterSlide.lg.tm", function (c, d, e) {
                setTimeout(function () {
                    a("#lg-share-facebook").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(b.getSahreProps(e, "facebookShareUrl") || window.location.href)), a("#lg-share-twitter").attr("href", "https://twitter.com/intent/tweet?text=" + b.getSahreProps(e, "tweetText") + "&url=" + encodeURIComponent(b.getSahreProps(e, "twitterShareUrl") || window.location.href)), a("#lg-share-googleplus").attr("href", "https://plus.google.com/share?url=" + encodeURIComponent(b.getSahreProps(e, "googleplusShareUrl") || window.location.href)), a("#lg-share-pinterest").attr("href", "http://www.pinterest.com/pin/create/button/?url=" + encodeURIComponent(b.getSahreProps(e, "pinterestShareUrl") || window.location.href) + "&media=" + encodeURIComponent(b.getSahreProps(e, "src")) + "&description=" + b.getSahreProps(e, "pinterestText"))
                }, 100)
            })
        }, c.prototype.getSahreProps = function (a, b) {
            var c = "";
            if (this.core.s.dynamic) c = this.core.s.dynamicEl[a][b];
            else {
                var d = this.core.$items.eq(a).attr("href"),
                    e = this.core.$items.eq(a).data(b);
                c = "src" === b ? d || e : e
            }
            return c
        }, c.prototype.destroy = function () {}, a.fn.lightGallery.modules.share = c
    }()
}),
function (a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : "object" == typeof module && module.exports ? module.exports = b(require("jquery")) : b(a.jQuery)
}(this, function (a) {
    ! function () {
        "use strict";
        var b = {
                rotate: !0,
                rotateLeft: !0,
                rotateRight: !0,
                flipHorizontal: !0,
                flipVertical: !0
            },
            c = function (c) {
                return this.core = a(c).data("lightGallery"), this.core.s = a.extend({}, b, this.core.s), this.core.s.rotate && this.core.doCss() && this.init(), this
            };
        c.prototype.buildTemplates = function () {
            var a = "";
            this.core.s.flipVertical && (a += '<button aria-label="Flip vertical" class="lg-flip-ver lg-icon"></button>'), this.core.s.flipHorizontal && (a += '<button aria-label="flip horizontal" class="lg-flip-hor lg-icon"></button>'), this.core.s.rotateLeft && (a += '<button aria-label="Rotate left" class="lg-rotate-left lg-icon"></button>'), this.core.s.rotateRight && (a += '<button aria-label="Rotate right" class="lg-rotate-right lg-icon"></button>'), this.core.$outer.find(".lg-toolbar").append(a)
        }, c.prototype.init = function () {
            var a = this;
            this.buildTemplates(), this.rotateValuesList = {}, this.core.$el.on("onAferAppendSlide.lg.tm.rotate", function (b, c) {
                a.core.$slide.eq(c).find(".lg-img-wrap").wrap('<div class="lg-img-rotate"></div>')
            }), this.core.$outer.find(".lg-rotate-left").on("click.lg", this.rotateLeft.bind(this)), this.core.$outer.find(".lg-rotate-right").on("click.lg", this.rotateRight.bind(this)), this.core.$outer.find(".lg-flip-hor").on("click.lg", this.flipHorizontal.bind(this)), this.core.$outer.find(".lg-flip-ver").on("click.lg", this.flipVertical.bind(this)), this.core.$el.on("onBeforeSlide.lg.tm.rotate", function (b, c, d) {
                a.rotateValuesList[d] || (a.rotateValuesList[d] = {
                    rotate: 0,
                    flipHorizontal: 1,
                    flipVertical: 1
                })
            })
        }, c.prototype.applyStyles = function () {
            this.core.$slide.eq(this.core.index).find(".lg-img-rotate").css("transform", "rotate(" + this.rotateValuesList[this.core.index].rotate + "deg) scale3d(" + this.rotateValuesList[this.core.index].flipHorizontal + ", " + this.rotateValuesList[this.core.index].flipVertical + ", 1)")
        }, c.prototype.getCurrentRotation = function (a) {
            if (!a) return 0;
            var b = window.getComputedStyle(a, null),
                c = b.getPropertyValue("-webkit-transform") || b.getPropertyValue("-moz-transform") || b.getPropertyValue("-ms-transform") || b.getPropertyValue("-o-transform") || b.getPropertyValue("transform") || "none";
            if ("none" !== c) {
                var d = c.split("(")[1].split(")")[0].split(",");
                if (d) {
                    var e = Math.round(Math.atan2(d[1], d[0]) * (180 / Math.PI));
                    return e < 0 ? e + 360 : e
                }
            }
            return 0
        }, c.prototype.rotateLeft = function () {
            this.rotateValuesList[this.core.index].rotate -= 90, this.applyStyles()
        }, c.prototype.rotateRight = function () {
            this.rotateValuesList[this.core.index].rotate += 90, this.applyStyles()
        }, c.prototype.flipHorizontal = function () {
            var a = this.core.$slide.eq(this.core.index).find(".lg-img-rotate")[0],
                b = this.getCurrentRotation(a),
                c = "flipHorizontal";
            90 !== b && 270 !== b || (c = "flipVertical"), this.rotateValuesList[this.core.index][c] *= -1, this.applyStyles()
        }, c.prototype.flipVertical = function () {
            var a = this.core.$slide.eq(this.core.index).find(".lg-img-rotate")[0],
                b = this.getCurrentRotation(a),
                c = "flipVertical";
            90 !== b && 270 !== b || (c = "flipHorizontal"), this.rotateValuesList[this.core.index][c] *= -1, this.applyStyles()
        }, c.prototype.destroy = function () {
            this.core.$el.off(".lg.tm.rotate"), this.rotateValuesList = {}
        }, a.fn.lightGallery.modules.rotate = c
    }()
});
