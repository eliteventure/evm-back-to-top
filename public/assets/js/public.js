(function($) {
    "use strict";
    window.setTimeout = window.setTimeout;
    $(function() {
        var EliteBackToTop = {
            iterr: 30,
            tm: null,
            init: function() {
                var link = document.getElementById("evm_back_to_top");
                link.addEventListener('click', function(e) {
                    EliteBackToTop.anim("elite_back_to_top_anchor");
                });
                var anchor = document.createElement("a");
                document.body.insertBefore(anchor, document.body.firstChild);
                anchor.id = "elite_back_to_top_anchor";
            },
            stopShow: function() {
                clearTimeout(this.tm);
                this.iterr = 30;
            },
            getRealTop: function(el) {
                var elm = el;
                var realTop = 0;
                do {
                    realTop += elm.offsetTop;
                    elm = elm.offsetParent;
                }
                while (elm);
                return realTop;
            },
            getPageScroll: function() {
                var pgYoff = window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;
                return pgYoff;
            },
            anim: function(id) {
                this.stopShow();
                var eOff, pOff, tOff, scrVal, pos, dir, step;
                eOff = document.getElementById(id).offsetTop;
                tOff = this.getRealTop(document.getElementById(id).parentNode);
                pOff = this.getPageScroll();
                if (pOff === null || isNaN(pOff) || pOff === 'undefined') pOff = 0;
                scrVal = eOff - pOff;
                if (scrVal > tOff) {
                    pos = (eOff - tOff - pOff);
                    dir = 1;
                }
                if (scrVal < tOff) {
                    pos = (pOff + tOff) - eOff;
                    dir = -1;
                }
                if (scrVal !== tOff) {
                    step = ~~((pos / 4) + 1) * dir;

                    if (this.iterr > 1) this.iterr -= 1;
                    else this.itter = 0;
                    window.scrollBy(0, step);
                    this.tm = setTimeout(function() {
                        EliteBackToTop.anim(id);
                    }, this.iterr);
                }
                if (scrVal === tOff) {
                    this.stopShow();
                    return;
                }
            }
        }
        var evm_back_to_top = new EliteBackToTop.init();
    });
}(jQuery));