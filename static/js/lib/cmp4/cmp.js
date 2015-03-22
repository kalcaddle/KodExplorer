/*
 * CMP embed JavaScript
 * http://bbs.cenfun.com/
 *
 * 1, CMP.write(id, width, height, swf_url, flashvars, params, attrs);
 * 2, var htm = CMP.create(id, width, height, swf_url, flashvars, params, attrs);
 * 3, var cmpo = CMP.get(id);
 * 4, CMP.remove(id/cmpo);
 *
 * src https://github.com/cenfun/cmp
 */
(function(window) {
    if (typeof (window.CMP) === "undefined") {
        window.CMP = (function() {
            var msie = /msie/.test(navigator.userAgent.toLowerCase()), merge = function(_o, o) {
                if (o && typeof (o) === "object") {
                    for ( var k in o) {
                        _o[k] = o[k];
                    }
                }
                return _o;
            }, make = function(id, width, height, url, flashvars, params, attrs) {
                attrs = merge({
                    width : width,
                    height : height,
                    id : id
                }, attrs);
                params = merge({
                    allowfullscreen : "true",
                    allowscriptaccess : "always"
                }, params);
                var vars, htm, arr = [];
                if (flashvars) {
                    vars = flashvars;
                    if (typeof (flashvars) === "object") {
                        for ( var k in flashvars) {
                            arr.push(k + "=" + encodeURIComponent(flashvars[k]));
                        }
                        vars = arr.join("&");
                    }
                    params.flashvars = vars;
                }
                htm = '<object ';
                htm += msie ? 'classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" ' : 'type="application/x-shockwave-flash" data="' + url + '" ';
                for ( var k in attrs) {
                    htm += k + '="' + attrs[k] + '" ';
                }
                htm += msie ? '><param name="movie" value="' + url + '" />' : '>';
                for (k in params) {
                    htm += '<param name="' + k + '" value="' + params[k] + '" />';
                }
                htm += '</object>';
                return htm;
            }, getSWF = function(id) {
                var o = document.getElementById(id);
                if (!o || o.nodeName.toLowerCase() != "object") {
                    o = msie ? window[id] : document[id];
                }
                return o;
            }, removeInIE = function(obj) {
                if (obj) {
                    for ( var i in obj) {
                        if (typeof (obj[i]) === "function") {
                            obj[i] = null;
                        }
                    }
                    obj.parentNode.removeChild(obj);
                }
            }, removeSWF = function(id) {
                if (id) {
                    var obj = (typeof (id) === "string") ? getSWF(id) : id;
                    if (obj && obj.nodeName.toLowerCase() == "object") {
                        if (msie) {
                            obj.style.display = "none";
                            (function() {
                                if (obj.readyState == 4) {
                                    removeInIE(obj);
                                } else {
                                    setTimeout(arguments.callee, 15);
                                }
                            })();
                        } else {
                            obj.parentNode.removeChild(obj);
                        }
                        return true;
                    }
                }
                return false;
            };
            return {
                create : function() {
                    return make.apply(this, arguments);
                },
                write : function() {
                    var htm = make.apply(this, arguments);
                    document.write(htm);
                    return htm;
                },
                get : function(id) {
                    return getSWF(id);
                },
                remove : function(id) {
                    return removeSWF(id);
                }
            };
        })();
    }
    var deltaDispatcher = function(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && typeof (target.cmp_version) == "function") {
            var maxPos = target.skin("list.tree", "maxVerticalScrollPosition");
            if (maxPos > 0) {
                target.focus();
                if (event.preventDefault) {
                    event.preventDefault();
                }
                return false;
            }
        }
    };
    if (window.addEventListener) {
        window.addEventListener("DOMMouseScroll", deltaDispatcher, false);
    }
    window.onmousewheel = document.onmousewheel = deltaDispatcher;
})(window);