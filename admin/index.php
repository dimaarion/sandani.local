<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="apple-touch-icon" href="/logo192.png" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link rel="apple-touch-icon" href="/logo192.png" />
    <link href="/fonts/OpenSansCondensed-LightItalic.ttf" />
    <title>Административная панель</title>
    <link href="/admin/static/css/main.56e0760b.chunk.css" rel="stylesheet">
</head>

<body>
    <div id="root"></div>
    <script>
        ! function(e) {
            function r(r) {
                for (var n, a, i = r[0], l = r[1], f = r[2], c = 0, s = []; c < i.length; c++) a = i[c], Object.prototype.hasOwnProperty.call(o, a) && o[a] && s.push(o[a][0]), o[a] = 0;
                for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (e[n] = l[n]);
                for (p && p(r); s.length;) s.shift()();
                return u.push.apply(u, f || []), t()
            }

            function t() {
                for (var e, r = 0; r < u.length; r++) {
                    for (var t = u[r], n = !0, i = 1; i < t.length; i++) {
                        var l = t[i];
                        0 !== o[l] && (n = !1)
                    }
                    n && (u.splice(r--, 1), e = a(a.s = t[0]))
                }
                return e
            }
            var n = {},
                o = {
                    1: 0
                },
                u = [];

            function a(r) {
                if (n[r]) return n[r].exports;
                var t = n[r] = {
                    i: r,
                    l: !1,
                    exports: {}
                };
                return e[r].call(t.exports, t, t.exports, a), t.l = !0, t.exports
            }
            a.m = e, a.c = n, a.d = function(e, r, t) {
                a.o(e, r) || Object.defineProperty(e, r, {
                    enumerable: !0,
                    get: t
                })
            }, a.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, a.t = function(e, r) {
                if (1 & r && (e = a(e)), 8 & r) return e;
                if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                var t = Object.create(null);
                if (a.r(t), Object.defineProperty(t, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & r && "string" != typeof e)
                    for (var n in e) a.d(t, n, function(r) {
                        return e[r]
                    }.bind(null, n));
                return t
            }, a.n = function(e) {
                var r = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return a.d(r, "a", r), r
            }, a.o = function(e, r) {
                return Object.prototype.hasOwnProperty.call(e, r)
            }, a.p = "/";
            var i = this["webpackJsonpsandani.admin"] = this["webpackJsonpsandani.admin"] || [],
                l = i.push.bind(i);
            i.push = r, i = i.slice();
            for (var f = 0; f < i.length; f++) r(i[f]);
            var p = l;
            t()
        }([])
    </script>
    <script src="/admin/static/js/2.a717287e.chunk.js"></script>
    <script src="/admin/static/js/main.9968de5d.chunk.js"></script>
</body>

</html>