<script>
(function (f, h, c, k, d, l, i) { /*! Jssor */
    new  function(){}(); var e = {Vd: function (a) { return -c.cos(a * c.PI) / 2 + 0.5 }, xc: function (a) { return a }, Ud: function (a) { return -a * (a - 2) }}, g = {Xd: e.xc}; var b = new function () { var g = this, G = 1, cb = 2, gb = 3, fb = 4, kb = 5, H, r = 0, j = 0, s = 0, W = 0, z = 0, J = navigator, ob = J.appName, o = J.userAgent, p = parseFloat; function zb () { if (!H) { H = {Ee: 'ontouchstart' in f || 'createTouch' in h}; var a; if (J.pointerEnabled || (a = J.msPointerEnabled))H.Yc = a ? 'msTouchAction':'touchAction' } return H } function v (i) { if (!r) { r = -1; if (ob == 'Microsoft Internet Explorer' && !!f.attachEvent && !!f.ActiveXObject) { var e = o.indexOf('MSIE'); r = G; s = p(o.substring(e + 5, o.indexOf(';', e)))/*@cc_on W=@_jscript_version@*/;j = h.documentMode || s } else if (ob == 'Netscape' && !!f.addEventListener) { var d = o.indexOf('Firefox'), b = o.indexOf('Safari'), g = o.indexOf('Chrome'), c = o.indexOf('AppleWebKit'); if (d >= 0) { r = cb; j = p(o.substring(d + 8)) } else if (b >= 0) { var k = o.substring(0, b).lastIndexOf('/'); r = g >= 0 ? fb:gb; j = p(o.substring(k + 1, b)) } else{ var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o); if (a) { r = G; j = s = p(a[1]) } } if(c >= 0)z = p(o.substring(c + 12)) }else { var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o); if (a) { r = kb; j = p(a[2]) } } } return i == r } function q () { return v(G) } function Q () { return q() && (j < 6 || h.compatMode == 'BackCompat') } function eb () { return v(gb) } function jb () { return v(kb) } function wb () { return eb() && z > 534 && z < 535 } function K () { v(); return z > 537 || j > 42 || r == G && j >= 11 } function O () { return q() && j < 9 } function xb (a) { var b, c; return function (f) { if (!b) { b = d; var e = a.substr(0, 1).toUpperCase() + a.substr(1); n([a].concat(['WebKit', 'ms', 'Moz', 'O', 'webkit']), function (g, d) { var b = a; if (d)b = g + e; if (f.style[b] != i) return c = b }) } return c } } function ub (b) { var a; return function (c) { a = a || xb(b)(c) || b; return a } } var L = ub('transform'); function nb (a) { return {}.toString.call(a) } var F; function Hb () { if (!F) { F = {}; n(['Boolean', 'Number', 'String', 'Function', 'Array', 'Date', 'RegExp', 'Object'], function (a) { F['[object ' + a + ']'] = a.toLowerCase() }) } return F } function n (b, d) { var a, c; if (nb(b) == '[object Array]') { for (a = 0; a < b.length; a++)if (c = d(b[a], a, b)) return c } else for (a in b) if(c = d(b[a], a, b)) return c } function C (a) { return a == k ? String(a):Hb()[nb(a)] || 'object' } function A (a) { try { return C(a) == 'object' && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, 'isPrototypeOf')) } catch(b) {} } function u (a, b) { return {x: a, y: b} } function rb (b, a) { setTimeout(b, a || 0) } function I (b, d, c) { var a = !b || b == 'inherit' ? '':b; n(d, function (c) { var b = c.exec(a); if (b) { var d = a.substr(0, b.index), e = a.substr(b.index + b[0].length + 1, a.length - 1); a = d + e } }); a = c + (!a.indexOf(' ') ? '':' ') + a; return a } function tb (b, a) { if (j < 9)b.style.filter = a }g.wd = zb; g.Uc = q; g.De = eb; g.ne = K; g.lc = O; xb('transform'); g.kc = function () { return j }; g.jb = rb; function Y (a) { a.constructor === Y.caller && a.mc && a.mc.apply(a, Y.caller.arguments) }g.mc = Y; g.Wb = function (a) { if (g.ke(a))a = h.getElementById(a); return a }; function t (a) { return a || f.event }g.nc = t; g.Qb = function (b) { b = t(b); var a = b.target || b.srcElement || h; if (a.nodeType == 3)a = g.ic(a); return a }; g.Dc = function (a) { a = t(a); return {x: a.pageX || a.clientX || 0, y: a.pageY || a.clientY || 0} }; function D (c, d, a) { if (a !== i)c.style[d] = a == i ? '':a; else { var b = c.currentStyle || c.style; a = b[d]; if (a == '' && f.getComputedStyle) { b = c.ownerDocument.defaultView.getComputedStyle(c, k); b && (a = b.getPropertyValue(d) || b[d]) } return a } } function ab (b, c, a, d) { if (a !== i) { if (a == k)a = ''; else d && (a += 'px'); D(b, c, a) } else return p(D(b, c)) } function m (c, a) { var d = a ? ab:D, b; if (a & 4)b = ub(c); return function (e, f) { return d(e, b ? b(e):c, f, a & 2) } } function Eb (b) { if (q() && s < 9) { var a = /opacity=([^)]*)/.exec(b.style.filter || ''); return a ? p(a[1]) / 100:1 } else return p(b.style.opacity || '1') } function Gb (b, a, f) { if (q() && s < 9) { var h = b.style.filter || '', i = new RegExp(/[\s]*alpha\([^\)]*\)/g), e = c.round(100 * a), d = ''; if (e < 100 || f)d = 'alpha(opacity=' + e + ') '; var g = I(h, [i], d); tb(b, g) } else b.style.opacity = a == 1 ? '':c.round(a * 100) / 100 } var M = {r: ['rotate'], L: ['rotateX'], O: ['rotateY'], qb: ['skewX'], sb: ['skewY']}; if (!K())M = B(M, {l: ['scaleX', 2], n: ['scaleY', 2], M: ['translateZ', 1]}); function N (d, a) { if (a && q() && j && j < 10) { delete a.L; delete a.O; delete a.M } var c = ''; if (a) { b.g(a, function (d, e) { var a = M[e]; if (a) { var b = a[1] || 0; if (d || b)c += ' ' + a[0] + '(' + d + (['deg', 'px', ''])[b] + ')' } }); if (K()) { if (a.U || a.T || a.M)c += ' translate3d(' + (a.U || 0) + 'px,' + (a.T || 0) + 'px,' + (a.M || 0) + 'px)'; if (a.l == i)a.l = 1; if (a.n == i)a.n = 1; if (a.l != 1 || a.n != 1)c += ' scale3d(' + a.l + ', ' + a.n + ', 1)' } }d.style[L(d)] = c }g.wc = m('transformOrigin', 4); g.Ae = m('backfaceVisibility', 4); g.ge = m('transformStyle', 4); g.fe = m('perspective', 6); g.ee = m('perspectiveOrigin', 4); g.de = function (a, b) { if (q() && s < 9 || s < 10 && Q())a.style.zoom = b == 1 ? '':b; else { var c = L(a), f = 'scale(' + b + ')', e = a.style[c], g = new RegExp(/[\s]*scale\(.*?\)/g), d = I(e, [g], f); a.style[c] = d } }; var ib = 0, db = 0; g.ce = function (b, a) { return O() ? function () { var g = d, c = Q() ? b.document.body:b.document.documentElement; if (c) { var f = c.offsetWidth - ib, e = c.offsetHeight - db; if (f || e) { ib += f; db += e } else g = l }g && a() }:a }; g.sc = function (b, a) { return function (c) { c = t(c); var e = c.type, d = c.relatedTarget || (e == 'mouseout' ? c.toElement:c.fromElement); (!d || d !== a && !g.be(a, d)) && b(c) } }; g.c = function (a, d, b, c) { a = g.Wb(a); if (a.addEventListener) { d == 'mousewheel' && a.addEventListener('DOMMouseScroll', b, c); a.addEventListener(d, b, c) } else if (a.attachEvent) { a.attachEvent('on' + d, b); c && a.setCapture && a.setCapture() } }; g.Z = function (a, c, d, b) { a = g.Wb(a); if (a.removeEventListener) { c == 'mousewheel' && a.removeEventListener('DOMMouseScroll', d, b); a.removeEventListener(c, d, b) } else if (a.detachEvent) { a.detachEvent('on' + c, d); b && a.releaseCapture && a.releaseCapture() } }; g.Xb = function (a) { a = t(a); a.preventDefault && a.preventDefault(); a.cancel = d; a.returnValue = l }; g.xd = function (a) { a = t(a); a.stopPropagation && a.stopPropagation(); a.cancelBubble = d }; g.Bb = function (d, c) { var a = [].slice.call(arguments, 2), b = function () { var b = a.concat([].slice.call(arguments, 0)); return c.apply(d, b) }; return b }; g.bb = function (d, c) { for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a); return b }; function mb (a, c, e, b) { b = b || 'u'; for (a = a ? a.firstChild:k; a; a = a.nextSibling)if (a.nodeType == 1) { if (U(a, b) == c) return a; if (!e) { var d = mb(a, c, e, b); if (d) return d } } }g.u = mb; function hb (a, c, d) { for (a = a ? a.firstChild:k; a; a = a.nextSibling) if(a.nodeType == 1) { if (a.tagName == c) return a; if (!d) { var b = hb(a, c, d); if (b) return b } } }g.td = hb; function B () { var e = arguments, d, c, b, a, g = 1 & e[0], f = 1 + g; d = e[f - 1] || {}; for (;f < e.length; f++)if (c = e[f]) for(b in c) { a = c[b]; if (a !== i) { a = c[b]; var h = d[b]; d[b] = g && (A(h) || A(a)) ? B(g, {}, h, a):a } } return d }g.vb = B; g.Wc = function (a) { return C(a) == 'function' }; g.ke = function (a) { return C(a) == 'string' }; g.rd = function (a) { return !isNaN(p(a)) && isFinite(a) }; g.g = n; function R (a) { return h.createElement(a) }g.wb = function () { return R('DIV') }; g.Pc = function () {}; function V (b, c, a) { if (a == i) return b.getAttribute(c); b.setAttribute(c, a) } function U (a, b) { return V(a, b) || V(a, 'data-' + b) }g.Ab = V; g.i = U; function x (b, a) { if (a == i) return b.className; b.className = a }g.Nc = x; g.ic = function (a) { return a.parentNode }; g.D = function (a) { g.G(a, 'none') }; g.ob = function (a, b) { g.G(a, b ? 'none':'') }; g.jd = function (b, a) { b.removeAttribute(a) }; g.id = function () { return q() && j < 10 }; g.gd = function (d, a) { if (a)d.style.clip = 'rect(' + c.round(a.e) + 'px ' + c.round(a.k) + 'px ' + c.round(a.m) + 'px ' + c.round(a.f) + 'px)'; else { var g = d.style.cssText, f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)], e = I(g, f, ''); b.Mb(d, e) } }; g.F = function () { return +new Date() }; g.P = function (b, a) { b.appendChild(a) }; g.Fb = function (b, a, c) { (c || a.parentNode).insertBefore(b, a) }; g.Fc = function (b, a) { a = a || b.parentNode; a && a.removeChild(b) }; g.vd = function (a, b) { n(a, function (a) { g.Fc(a, b) }) }; g.ad = function (a) { g.vd(g.bb(a, d), a) }; g.sd = function (a, b) { var c = g.ic(a); b & 1 && g.I(a, (g.p(c) - g.p(a)) / 2); b & 2 && g.N(a, (g.q(c) - g.q(a)) / 2) }; g.nd = function (b, a) { return parseInt(b, a || 10) }; g.md = p; g.be = function (b, a) { var c = h.body; while (a && b !== a && c !== a)try { a = a.parentNode } catch(d) { return l } return b === a }; function X (d, c, b) { var a = d.cloneNode(!c); !b && g.jd(a, 'id'); return a }g.gb = X; g.ib = function (e, f) { var a = new Image(); function b (e, d) { g.Z(a, 'load', b); g.Z(a, 'abort', c); g.Z(a, 'error', c); f && f(a, d) } function c (a) { b(a, d) } if(jb() && j < 11.6 || !e)b(!e); else { g.c(a, 'load', b); g.c(a, 'abort', c); g.c(a, 'error', c); a.src = e } }; g.hd = function (d, a, e) { var c = d.length + 1; function b (b) { c--; if (a && b && b.src == a.src)a = b; !c && e && e(a) }n(d, function (a) { g.ib(a.src, b) }); b() }; g.W = D; g.rb = m('overflow'); g.N = m('top', 2); g.I = m('left', 2); g.p = m('width', 2); g.q = m('height', 2); g.kd = m('marginLeft', 2); g.od = m('marginTop', 2); g.z = m('position'); g.G = m('display'); g.s = m('zIndex', 1); g.Jb = function (b, a, c) { if (a != i)Gb(b, a, c); else return Eb(b) }; g.Mb = function (a, b) { if (b != i)a.style.cssText = b; else return a.style.cssText }; var T = {v: g.Jb, e: g.N, f: g.I, yb: g.p, pb: g.q, Y: g.z, Pe: g.G, hb: g.s}; var w = function (f, l) { var e = O(), b = K(), d = wb(), h = L(f); function j (b, d, a) { var e = b.V(u(-d / 2, -a / 2)), f = b.V(u(d / 2, -a / 2)), g = b.V(u(d / 2, a / 2)), h = b.V(u(-d / 2, a / 2)); b.V(u(300, 300)); return u(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2) } function a (d, a) { a = a || {}; var f = a.M || 0, l = (a.L || 0) % 360, m = (a.O || 0) % 360, o = (a.r || 0) % 360, p = a.Oe; if (e) { f = 0; l = 0; m = 0; p = 0 } var c = new Db(a.U, a.T, f); c.L(l); c.O(m); c.qd(o); c.pd(a.qb, a.sb); c.ud(a.l, a.n, p); if (b) { c.S(a.db, a.ab); d.style[h] = c.ie() } else if (!W || W < 9) { var k = ''; if (o || a.l != i && a.l != 1 || a.n != i && a.n != 1) { var n = j(c, a.C, a.B); g.od(d, n.y); g.kd(d, n.x); k = c.ye() } var r = d.style.filter, s = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g), q = I(r, [s], k); tb(d, q) } }w = function (e, c) { c = c || {}; var h = c.db, j = c.ab, f; n(T, function (a, b) { f = c[b]; f !== i && a(e, f) }); g.gd(e, c.a); if (!b) { h != i && g.I(e, c.Jc + h); j != i && g.N(e, c.Sc + j) }if (c.Id)if (d)rb(g.Bb(k, N, e, c)); else a(e, c) }; g.Db = N; if (d)g.Db = w; if (e)g.Db = a; else if (!b)a = N; g.H = w; w(f, l) }; g.Db = w; g.H = w; function Db (j, l, p) { var d = this, b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, l || 0, p || 0, 1], h = c.sin, g = c.cos, m = c.tan; function f (a) { return a * c.PI / 180 } function o (a, b) { return {x: a, y: b} } function n (c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) { return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j] } function e (c, a) { return n.apply(k, (a || b).concat(c)) }d.ud = function (a, c, d) { if (a == i)a = 1; if (c == i)c = 1; if (d == i)d = 1; if (a != 1 || c != 1 || d != 1)b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1]) }; d.S = function (a, c, d) { b[12] += a || 0; b[13] += c || 0; b[14] += d || 0 }; d.L = function (c) { if (c) { a = f(c); var d = g(a), i = h(a); b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1]) } }; d.O = function (c) { if (c) { a = f(c); var d = g(a), i = h(a); b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1]) } }; d.qd = function (c) { if (c) { a = f(c); var d = g(a), i = h(a); b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } }; d.pd = function (a, c) { if (a || c) { j = f(a); l = f(c); b = e([1, m(l), 0, 0, m(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } }; d.V = function (c) { var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]); return o(a[12], a[13]) }; d.ie = function () { return 'matrix3d(' + b.join(',') + ')' }; d.ye = function () { return 'progid:DXImageTransform.Microsoft.Matrix(M11=' + b[0] + ', M12=' + b[4] + ', M21=' + b[1] + ', M22=' + b[5] + ', SizingMethod=\'auto expand\')' } } new function () { var a = this; function b (d, g) { for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)for (var k = f[c] = [], b = 0; b < h; b++) { for (var e = 0, a = 0; a < j; a++)e += d[c][a] * g[a][b]; k[b] = e } return f }a.l = function (b, c) { return a.Tc(b, c, 0) }; a.n = function (b, c) { return a.Tc(b, 0, c) }; a.Tc = function (a, c, d) { return b(a, [[c, 0], [0, d]]) }; a.V = function (d, c) { var a = b(d, [[c.x], [c.y]]); return u(a[0][0], a[1][0]) } }(); var vb = {Jc: 0, Sc: 0, db: 0, ab: 0, o: 1, l: 1, n: 1, r: 0, L: 0, O: 0, U: 0, T: 0, M: 0, qb: 0, sb: 0}; g.Kd = function (a) { var c = a || {}; if (a)if (b.Wc(a))c = {Eb: c}; else if (b.Wc(a.a))c.a = {Eb: a.a}; return c }; g.Ld = function (l, m, w, n, y, z, o) { var a = m; if (l) { a = {}; for (var g in m) { var A = z[g] || 1, v = y[g] || [0, 1], f = (w - v[0]) / v[1]; f = c.min(c.max(f, 0), 1); f = f * A; var u = c.floor(f); if (f != u)f -= u; var h = n.Eb || e.Vd, j, B = l[g], q = m[g]; if (b.rd(q)) { h = n[g] || h; var x = h(f); j = B + q * x } else{ j = b.vb({cb: {}}, l[g]); b.g(q.cb || q, function (d, a) { if (n.a)h = n.a[a] || n.a.Eb || h; var c = h(f), b = d * c; j.cb[a] = b; j[a] += b }) }a[g] = j } var t = b.g(m, function (b, a) { return vb[a] != i }); t && b.g(vb, function (c, b) { if (a[b] == i && l[b] !== i)a[b] = l[b] }); if (t) { if (a.o)a.l = a.n = a.o; a.C = o.C; a.B = o.B; a.Id = d } }if (m.a && o.S) { var p = a.a.cb, s = (p.e || 0) + (p.m || 0), r = (p.f || 0) + (p.k || 0); a.f = (a.f || 0) + r; a.e = (a.e || 0) + s; a.a.f -= r; a.a.k -= r; a.a.e -= s; a.a.m -= s } if(a.a && b.id() && !a.a.e && !a.a.f && a.a.k == o.C && a.a.m == o.B)a.a = k; return a } }(); function n () { var a = this, d = []; function i (a, b) { d.push({Sb: a, Rb: b}) } function h (a, c) { b.g(d, function (b, e) { b.Sb == a && b.Rb === c && d.splice(e, 1) }) }a.fb = a.addEventListener = i; a.removeEventListener = h; a.j = function (a) { var c = [].slice.call(arguments, 1); b.g(d, function (b) { b.Sb == a && b.Rb.apply(f, c) }) } } var m = function (z, C, i, J, M, L) { z = z || 0; var a = this, q, n, o, u, A = 0, G, H, F, B, y = 0, h = 0, m = 0, D, j, g, e, p, w = [], x; function O (a) { g += a; e += a; j += a; h += a; m += a; y += a } function t (o) { var f = o; if (p && (f >= e || f <= g))f = ((f - g) % p + p) % p + g; if (!D || u || h != f) { var k = c.min(f, e); k = c.max(k, g); if (!D || u || k != m) { if (L) { var l = (k - j) / (C || 1); if (i.jc)l = 1 - l; var n = b.Ld(M, L, l, G, F, H, i); if (x)b.g(n, function (b, a) { x[a] && x[a](J, b) }); else b.H(J, n) }a.gc(m - j, k - j); m = k; b.g(w, function (b, c) { var a = o < h ? w[w.length - c - 1]:b; a.E(m - y) }); var r = h, q = m; h = f; D = d; a.Cb(r, q) } } } function E (a, b, d) { b && a.Ub(e); if (!d) { g = c.min(g, a.qc() + y); e = c.max(e, a.Gb() + y) }w.push(a) } var r = f.requestAnimationFrame || f.webkitRequestAnimationFrame || f.mozRequestAnimationFrame || f.msRequestAnimationFrame; if (b.De() && b.kc() < 7)r = k; r = r || function (a) { b.jb(a, i.Bc) }; function I () { if (q) { var d = b.F(), e = c.min(d - A, i.Ac), a = h + e * o; A = d; if (a * o >= n * o)a = n; t(a); if (!u && a * o >= n * o)K(B); else r(I) } } function s (f, i, j) { if (!q) { q = d; u = j; B = i; f = c.max(f, g); f = c.min(f, e); n = f; o = n < h ? -1:1; a.zc(); A = b.F(); r(I) } } function K (b) { if (q) { u = q = B = l; a.yc(); b && b() } }a.vc = function (a, b, c) { s(a ? h + a:e, b, c) }; a.uc = s; a.R = K; a.Wd = function (a) { s(a) }; a.J = function () { return h }; a.rc = function () { return n }; a.eb = function () { return m }; a.E = t; a.S = function (a) { t(h + a) }; a.tc = function () { return q }; a.Od = function (a) { p = a }; a.Ub = O; a.Oc = function (a, b) { E(a, 0, b) }; a.Ib = function (a) { E(a, 1) }; a.qc = function () { return g }; a.Gb = function () { return e }; a.Cb = a.zc = a.yc = a.gc = b.Pc; a.bc = b.F(); i = b.vb({Bc: 16, Ac: 50}, i); p = i.Zc; x = i.Jd; g = j = z; e = z + C; H = i.oc || {}; F = i.Ec || {}; G = b.Kd(i.X) }; new  function(){}(); var j = function (p, dc) { var g = this; function Ac () { var a = this; m.call(a, -1e8, 2e8); a.me = function () { var b = a.eb(), d = c.floor(b), f = t(d), e = b - c.floor(b); return {Q: f, pe: d, Y: e} }; a.Cb = function (b, a) { var e = c.floor(a); if (e != a && a > b)e++; Sb(e, d); g.j(j.oe, t(a), t(b), a, b) } } function zc () { var a = this; m.call(a, 0, 0, {Zc: r}); b.g(C, function (b) { D & 1 && b.Od(r); a.Ib(b); b.Ub(ib / Zb) }) } function yc () { var a = this, b = Tb.A; m.call(a, -1, 2, {X: e.xc, Jd: {Y: Yb}, Zc: r}, b, {Y: 1}, {Y: -2}); a.Kb = b } function mc (o, n) { var b = this, e, f, h, i, c; m.call(b, -1e8, 2e8, {Ac: 100}); b.zc = function () { M = d; S = k; g.j(j.Ce, t(w.J()), w.J()) }; b.yc = function () { M = l; i = l; var a = w.me(); g.j(j.Be, t(w.J()), w.J()); !a.Y && Cc(a.pe, s) }; b.Cb = function (j, g) { var b; if (i)b = c; else { b = f; if (h) { var d = g / h; b = a.fd(d) * (f - e) + e } }w.E(b) }; b.xb = function (a, d, c, g) { e = a; f = d; h = c; w.E(a); b.E(0); b.uc(c, g) }; b.ze = function (a) { i = d; c = a; b.vc(a, k, d) }; b.qe = function (a) { c = a }; w = new Ac(); w.Oc(o); w.Oc(n) } function oc () { var c = this, a = Wb(); b.s(a, 0); b.W(a, 'pointerEvents', 'none'); c.A = a; c.zb = function () { b.D(a); b.ad(a) } } function wc (o, f) { var e = this, q, L, v, i, y = [], x, B, W, G, Q, F, h, w, p; m.call(e, -u, u + 1, {}); function E (a) { q && q.tb(); T(o, a, 0); F = d; q = new I.lb(o, I, b.md(b.i(o, 'idle')) || kc); q.E(0) } function Z () { q.bc < I.bc && E() } function M (p, r, o) { if (!G) { G = d; if (i && o) { var h = o.width, c = o.height, n = h, m = c; if (h && c && a.kb) { if (a.kb & 3 && (!(a.kb & 4) || h > K || c > J)) { var k = l, q = K / J * c / h; if (a.kb & 1)k = q > 1; else if (a.kb & 2)k = q < 1; n = k ? h * J / c:K; m = k ? J:c * K / h }b.p(i, n); b.q(i, m); b.N(i, (J - m) / 2); b.I(i, (K - n) / 2) }b.z(i, 'absolute'); g.j(j.xe, f) } }b.D(r); p && p(e) } function Y (b, c, d, g) { if (g == S && s == f && N) if(!Bc) { var a = t(b); A.he(a, f, c, e, d); c.we(); U.Ub(a - U.qc() - 1); U.E(a); z.xb(b, b, 0) } } function cb (b) { if (b == S && s == f) { if (!h) { var a = k; if (A)if (A.Q == f)a = A.le(); else A.zb(); Z(); h = new uc(o, f, a, q); h.Rc(p) }!h.tc() && h.Nb() } } function R (d, g, l) { if (d == f) { if (d != g)C[g] && C[g].ve(); else !l && h && h.ue(); p && p.Gc(); var m = S = b.F(); e.ib(b.Bb(k, cb, m)) }else { var j = c.min(f, d), i = c.max(f, d), o = c.min(i - j, j + r - i), n = u + a.te - 1; (!Q || o <= n) && e.ib() } } function db () { if (s == f && h) { h.R(); p && p.se(); p && p.re(); h.Mc() } } function eb () { s == f && h && h.R() } function ab (a) { !P && g.j(j.ae, f, a) } function O () { p = w.pInstance; h && h.Rc(p) }e.ib = function (c, a) { a = a || v; if (y.length && !G) { b.ob(a); if (!W) { W = d; g.j(j.Yd, f); b.g(y, function (a) { if (!b.Ab(a, 'src')) { a.src = b.i(a, 'src2'); b.G(a, a['display-origin']) } }) }b.hd(y, i, b.Bb(k, M, c, a)) } else M(c, a) }; e.Md = function () { var h = f; if (a.Ob < 0)h -= r; var d = h + a.Ob * sc; if (D & 2)d = t(d); if (!(D & 1))d = c.max(0, c.min(d, r - u)); if (d != f) { if (A) { var e = A.zd(r); if (e) { var i = S = b.F(), g = C[t(d)]; return g.ib(b.Bb(k, Y, d, g, e, i), v) } }bb(d) } }; e.Pb = function () { R(f, f, d) }; e.ve = function () { p && p.se(); p && p.re(); e.Kc(); h && h.yd(); h = k; E() }; e.we = function () { b.D(o) }; e.Kc = function () { b.ob(o) }; e.Zd = function () { p && p.Gc() }; function T (a, c, e) { if (b.Ab(a, 'jssor-slider')) return; if (!F) { if (a.tagName == 'IMG') { y.push(a); if (!b.Ab(a, 'src')) { Q = d; a['display-origin'] = b.G(a); b.D(a) } }b.lc() && b.s(a, (b.s(a) || 0) + 1) } var f = b.bb(a); b.g(f, function (f) { var h = f.tagName, j = b.i(f, 'u'); if (j == 'player' && !w) { w = f; if (w.pInstance)O(); else b.c(w, 'dataavailable', O) } if(j == 'caption') { if (c) { b.wc(f, b.i(f, 'to')); b.Ae(f, b.i(f, 'bf')); b.ge(f, 'preserve-3d') } else if (!b.Uc()) { var g = b.gb(f, l, d); b.Fb(g, f, a); b.Fc(f, a); f = g; c = d } } else if (!F && !e && !i) { if (h == 'A') { if (b.i(f, 'u') == 'image')i = b.td(f, 'IMG'); else i = b.u(f, 'image', d); if (i) { x = f; b.G(x, 'block'); b.H(x, V); B = b.gb(x, d); b.z(x, 'relative'); b.Jb(B, 0); b.W(B, 'backgroundColor', '#000') } } else if (h == 'IMG' && b.i(f, 'u') == 'image')i = f; if (i) { i.border = 0; b.H(i, V) } }T(f, c, e + 1) }) }e.gc = function (c, b) { var a = u - b; Yb(L, a) }; e.Q = f; n.call(e); b.fe(o, b.i(o, 'p')); b.ee(o, b.i(o, 'po')); var H = b.u(o, 'thumb', d); if (H) { b.gb(H); b.D(H) }b.ob(o); v = b.gb(fb); b.s(v, 1e3); b.c(o, 'click', ab); E(d); e.je = i; e.Ic = B; e.Kb = L = o; b.P(L, v); g.fb(203, R); g.fb(28, eb); g.fb(24, db) } function uc (y, f, p, q) { var a = this, n = 0, u = 0, h, i, e, c, k, t, r, o = C[f]; m.call(a, 0, 0); function v () { b.ad(L); ac && k && o.Ic && b.P(L, o.Ic); b.ob(L, !k && o.je) } function w () { a.Nb() } function x (b) { r = b; a.R(); a.Nb() }a.Nb = function () { var b = a.eb(); if (!B && !M && !r && s == f) { if (!b) { if (h && !k) { k = d; a.Mc(d); g.j(j.Ad, f, n, u, h, c) }v() } var l, p = j.Hc; if (b != c)if (b == e)l = c; else if (b == i)l = e; else if (!b)l = i; else l = a.rc(); g.j(p, f, b, n, i, e, c); var m = N && (!E || F); if (b == c)(e != c && !(E & 12) || m) && o.Md(); else (m || b != e) && a.uc(l, w) } }; a.ue = function () { e == c && e == a.eb() && a.E(i) }; a.yd = function () { A && A.Q == f && A.zb(); var b = a.eb(); b < c && g.j(j.Hc, f, -b - 1, n, i, e, c) }; a.Mc = function (a) { p && b.rb(jb, a && p.dc.Ne ? '':'hidden') }; a.gc = function (b, a) { if (k && a >= h) { k = l; v(); o.Kc(); A.zb(); g.j(j.Bd, f, n, u, h, c) }g.j(j.Cd, f, a, n, i, e, c) }; a.Rc = function (a) { if (a && !t) { t = a; a.fb($JssorPlayer$.ld, x) } }; p && a.Ib(p); h = a.Gb(); a.Ib(q); i = h + q.fc; e = h + q.ec; c = a.Gb() } function Jb (a, c, d) { b.I(a, c); b.N(a, d) } function Yb (c, b) { var a = x > 0 ? x:eb, d = zb * b * (a & 1), e = Ab * b * (a >> 1 & 1); Jb(c, d, e) } function Ob () { pb = M; Ib = z.rc(); G = w.J() } function fc () { Ob(); if (B || !F && E & 12) { z.R(); g.j(j.Dd) } } function cc (f) { if (!B && (F || !(E & 12)) && !z.tc()) { var d = w.J(), b = c.ceil(G); if (f && c.abs(H) >= a.Qc) { b = c.ceil(d); b += hb }if (!(D & 1))b = c.min(r - u, c.max(b, 0)); var e = c.abs(b - d); e = 1 - c.pow(1 - e, 5); if (!P && pb)z.Wd(Ib); else if (d == b) { sb.Zd(); sb.Pb() } else z.xb(d, b, e * Ub) } } function Hb (a) { !b.i(b.Qb(a), 'nodrag') && b.Xb(a) } function qc (a) { Xb(a, 1) } function Xb (a, c) { a = b.nc(a); var i = b.Qb(a); if (!O && !b.i(i, 'nodrag') && rc() && (!c || a.touches.length == 1)) { B = d; yb = l; S = k; b.c(h, c ? 'touchmove':'mousemove', Bb); b.F(); P = 0; fc(); if (!pb)x = 0; if (c) { var f = a.touches[0]; ub = f.clientX; vb = f.clientY }else { var e = b.Dc(a); ub = e.x; vb = e.y }H = 0; gb = 0; hb = 0; g.j(j.Ed, t(G), G, a) } } function Bb (e) { if (B) { e = b.nc(e); var f; if (e.type != 'mousemove') { var l = e.touches[0]; f = {x: l.clientX, y: l.clientY} } else f = b.Dc(e); if (f) { var j = f.x - ub, k = f.y - vb; if (c.floor(G) != G)x = x || eb & O; if ((j || k) && !x) { if (O == 3)if (c.abs(k) > c.abs(j))x = 2; else x = 1; else x = O; if (mb && x == 1 && c.abs(k) - c.abs(j) > 3)yb = d } if(x) { var a = k, i = Ab; if (x == 1) { a = j; i = zb }if (!(D & 1)) { if (a > 0) { var g = i * s, h = a - g; if (h > 0)a = g + c.sqrt(h) * 5 } if(a < 0) { var g = i * (r - u - s), h = -a - g; if (h > 0)a = -g - c.sqrt(h) * 5 } } if(H - gb < -2)hb = 0; else if (H - gb > 2)hb = -1; gb = H; H = a; rb = G - H / i / (Y || 1); if (H && x && !yb) { b.Xb(e); if (!M)z.ze(rb); else z.qe(rb) } } } } } function ab () { pc(); if (B) { B = l; b.F(); b.Z(h, 'mousemove', Bb); b.Z(h, 'touchmove', Bb); P = H; z.R(); var a = w.J(); g.j(j.Fd, t(a), a, t(G), G); E & 12 && Ob(); cc(d) } } function hc (c) { if (P) { b.xd(c); var a = b.Qb(c); while (a && v !== a) { a.tagName == 'A' && b.Xb(c); try { a = a.parentNode } catch(d) { break } } } } function jc (a) { C[s]; s = t(a); sb = C[s]; Sb(a); return s } function Cc (a, b) { x = 0; jc(a); g.j(j.Hd, t(a), b) } function Sb (a, c) { wb = a; b.g(T, function (b) { b.ac(t(a), a, c) }) } function rc () { var b = j.ed || 0, a = X; if (mb)a & 1 && (a &= 1); j.ed |= a; return O = a & ~b } function pc () { if (O) { j.ed &= ~X; O = 0 } } function Wb () { var a = b.wb(); b.H(a, V); b.z(a, 'absolute'); return a } function t (a) { return (a % r + r) % r } function ic (b, d) { if (d)if (!D) { b = c.min(c.max(b + wb, 0), r - u); d = l } else if (D & 2) { b = t(b + wb); d = l }bb(b, a.nb, d) } function xb () { b.g(T, function (a) { a.Zb(a.ub.Me <= F) }) } function Ec () { if (!F) { F = 1; xb(); if (!B) { E & 12 && cc(); E & 3 && C[s].Pb() } } } function Dc () { if (F) { F = 0; xb(); B || !(E & 12) || fc() } } function gc () { V = {yb: K, pb: J, e: 0, f: 0}; b.g(Q, function (a) { b.H(a, V); b.z(a, 'absolute'); b.rb(a, 'hidden'); b.D(a) }); b.H(fb, V) } function ob (b, a) { bb(b, a, d) } function bb (g, f, k) { if (Qb && (!B && (F || !(E & 12)) || a.pc)) { M = d; B = l; z.R(); if (f == i)f = Ub; var e = Cb.eb(), b = g; if (k) { b = e + g; if (g > 0)b = c.ceil(b); else b = c.floor(b) } if(D & 2)b = t(b); if (!(D & 1))b = c.max(0, c.min(b, r - u)); var j = (b - e) % r; b = e + j; var h = e == b ? 0:f * c.abs(j); h = c.min(h, f * u * 1.5); z.xb(e, b, h || 1) } }g.vc = function () { if (!N) { N = d; C[s] && C[s].Pb() } }; function W () { return b.p(y || p) } function lb () { return b.q(y || p) }g.C = W; g.B = lb; function Eb (c, d) { if (c == i) return b.p(p); if (!y) { var a = b.wb(h); b.Nc(a, b.Nc(p)); b.Mb(a, b.Mb(p)); b.G(a, 'block'); b.z(a, 'relative'); b.N(a, 0); b.I(a, 0); b.rb(a, 'visible'); y = b.wb(h); b.z(y, 'absolute'); b.N(y, 0); b.I(y, 0); b.p(y, b.p(p)); b.q(y, b.q(p)); b.wc(y, '0 0'); b.P(y, a); var g = b.bb(p); b.P(p, y); b.W(p, 'backgroundImage', ''); b.g(g, function (c) { b.P(b.i(c, 'noscale') ? p:a, c); b.i(c, 'autocenter') && Kb.push(c) }) }Y = c / (d ? b.q:b.p)(y); b.de(y, Y); var f = d ? Y * W():c, e = d ? c:Y * lb(); b.p(p, f); b.q(p, e); b.g(Kb, function (a) { var c = b.nd(b.i(a, 'autocenter')); b.sd(a, c) }) }g.Nd = Eb; n.call(g); g.A = p = b.Wb(p); var a = b.vb({kb: 0, te: 1, hc: 1, Tb: 0, Hb: l, Xc: 1, mb: d, pc: d, Ob: 1, dd: 3e3, Lb: 1, nb: 500, fd: e.Ud, Qc: 20, cd: 0, K: 1, bd: 0, Pd: 1, cc: 1, Vc: 1}, dc); a.mb = a.mb && b.ne(); if (a.Lc != i)a.dd = a.Lc; if (a.Qd != i)a.K = a.Qd; if (a.Rd != i)a.bd = a.Rd; var eb = a.cc & 3, sc = (a.cc & 4) / -4 || 1, kb = a.Fe, I = b.vb({lb: q, mb: a.mb}, a.Ge); I.Yb = I.Yb || I.Le; var Fb = a.Ke, Z = a.Je, db = a.Ie, R = !a.Pd, y, v = b.u(p, 'slides', R), fb = b.u(p, 'loading', R) || b.wb(h), Mb = b.u(p, 'navigator', R), ec = b.u(p, 'arrowleft', R), bc = b.u(p, 'arrowright', R), Lb = b.u(p, 'thumbnavigator', R), nc = b.p(v), lc = b.q(v), V, Q = [], tc = b.bb(v); b.g(tc, function (a) { if (a.tagName == 'DIV' && !b.i(a, 'u'))Q.push(a); else b.lc() && b.s(a, (b.s(a) || 0) + 1) }); var s = -1, wb, sb, r = Q.length, K = a.Cc || nc, J = a.Sd || lc, Vb = a.cd, zb = K + Vb, Ab = J + Vb, Zb = eb & 1 ? zb:Ab, u = c.min(a.K, r), jb, x, O, yb, T = [], Pb, Rb, Nb, ac, Bc, N, E = a.Lb, kc = a.dd, Ub = a.nb, qb, tb, ib, Qb = u < r, D = Qb ? a.Xc:0, X, P, F = 1, M, B, S, ub = 0, vb = 0, H, gb, hb, Cb, w, U, z, Tb = new oc(), Y, Kb = []; if (a.mb)Jb = function (a, c, d) { b.Db(a, {U: c, T: d}) }; N = a.Hb; g.ub = dc; gc(); b.Ab(p, 'jssor-slider', d); b.s(v, b.s(v) || 0); b.z(v, 'absolute'); jb = b.gb(v, d); b.Fb(jb, v); if (kb) { ac = kb.He; qb = kb.lb; tb = u == 1 && r > 1 && qb && (!b.Uc() || b.kc() >= 8) }ib = tb || u >= r || !(D & 1) ? 0:a.bd; X = (u > 1 || ib ? eb:-1) & a.Vc; var Gb = v, C = [], A, L, Db = b.wd(), mb = Db.Ee, G, pb, Ib, rb; Db.Yc && b.W(Gb, Db.Yc, ([k, 'pan-y', 'pan-x', 'none'])[X] || ''); U = new yc(); if (tb)A = new qb(Tb, K, J, kb, mb); b.P(jb, U.Kb); b.rb(v, 'hidden'); L = Wb(); b.W(L, 'backgroundColor', '#000'); b.Jb(L, 0); b.Fb(L, Gb.firstChild, Gb); for (var cb = 0; cb < Q.length; cb++) { var vc = Q[cb], xc = new wc(vc, cb); C.push(xc) }b.D(fb); Cb = new zc(); z = new mc(Cb, U); if (X) { b.c(v, 'mousedown', Xb); b.c(v, 'touchstart', qc); b.c(v, 'dragstart', Hb); b.c(v, 'selectstart', Hb); b.c(h, 'mouseup', ab); b.c(h, 'touchend', ab); b.c(h, 'touchcancel', ab); b.c(f, 'blur', ab) }E &= mb ? 10:5; if (Mb && Fb) { Pb = new Fb.lb(Mb, Fb, W(), lb()); T.push(Pb) }if (Z && ec && bc) { Z.Xc = D; Z.K = u; Rb = new Z.lb(ec, bc, Z, W(), lb()); T.push(Rb) } if(Lb && db) { db.Tb = a.Tb; Nb = new db.lb(Lb, db); T.push(Nb) }b.g(T, function (a) { a.Vb(r, C, fb); a.fb(o.Td, ic) }); b.W(p, 'visibility', 'visible'); Eb(W()); b.c(v, 'click', hc); b.c(p, 'mouseout', b.sc(Ec, p)); b.c(p, 'mouseover', b.sc(Dc, p)); xb(); a.hc && b.c(h, 'keydown', function (b) { if (b.keyCode == 37)ob(-a.hc); else b.keyCode == 39 && ob(a.hc) }); var nb = a.Tb; if (!(D & 1))nb = c.max(0, c.min(nb, r - u)); z.xb(nb, nb, 0) }; j.ae = 21; j.Ed = 22; j.Fd = 23; j.Ce = 24; j.Be = 25; j.Yd = 26; j.xe = 27; j.Dd = 28; j.oe = 202; j.Hd = 203; j.Ad = 206; j.Bd = 207; j.Cd = 208; j.Hc = 209; var o = {Td: 1}; function q (e, d, c) { var a = this; m.call(a, 0, c); a.tb = b.Pc; a.fc = 0; a.ec = c }jssor_1_slider_init = function () { var h = {Hb: d, Lc: 0, Ob: 4, nb: 1600, fd: g.Xd, Lb: 4, Cc: 140, K: 7}, e = new j('jssor_1', h); function a () { var b = e.A.parentNode.clientWidth; if (b) { b = c.min(b, 809); e.Nd(b) } else f.setTimeout(a, 30) }a(); b.c(f, 'load', a); b.c(f, 'resize', b.ce(f, a)); b.c(f, 'orientationchange', a) } 
})(window, document, Math, null, true, false)
</script>
        