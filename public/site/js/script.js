(() => {
  var e = {
      449: function (e) {
        e.exports = (function () {
          'use strict';
          function e(e, t) {
            for (var a = 0; a < t.length; a++) {
              var r = t[a];
              (r.enumerable = r.enumerable || !1),
                (r.configurable = !0),
                'value' in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r);
            }
          }
          function t() {
            return (t =
              Object.assign ||
              function (e) {
                for (var t = 1; t < arguments.length; t++) {
                  var a = arguments[t];
                  for (var r in a)
                    Object.prototype.hasOwnProperty.call(a, r) && (e[r] = a[r]);
                }
                return e;
              }).apply(this, arguments);
          }
          function a(e) {
            return (
              null !== e &&
              'object' == typeof e &&
              'constructor' in e &&
              e.constructor === Object
            );
          }
          function r(e, t) {
            void 0 === e && (e = {}),
              void 0 === t && (t = {}),
              Object.keys(t).forEach(function (i) {
                void 0 === e[i]
                  ? (e[i] = t[i])
                  : a(t[i]) &&
                    a(e[i]) &&
                    Object.keys(t[i]).length > 0 &&
                    r(e[i], t[i]);
              });
          }
          var i = {
            body: {},
            addEventListener: function () {},
            removeEventListener: function () {},
            activeElement: { blur: function () {}, nodeName: '' },
            querySelector: function () {
              return null;
            },
            querySelectorAll: function () {
              return [];
            },
            getElementById: function () {
              return null;
            },
            createEvent: function () {
              return { initEvent: function () {} };
            },
            createElement: function () {
              return {
                children: [],
                childNodes: [],
                style: {},
                setAttribute: function () {},
                getElementsByTagName: function () {
                  return [];
                },
              };
            },
            createElementNS: function () {
              return {};
            },
            importNode: function () {
              return null;
            },
            location: {
              hash: '',
              host: '',
              hostname: '',
              href: '',
              origin: '',
              pathname: '',
              protocol: '',
              search: '',
            },
          };
          function s() {
            var e = 'undefined' != typeof document ? document : {};
            return r(e, i), e;
          }
          var n = {
            document: i,
            navigator: { userAgent: '' },
            location: {
              hash: '',
              host: '',
              hostname: '',
              href: '',
              origin: '',
              pathname: '',
              protocol: '',
              search: '',
            },
            history: {
              replaceState: function () {},
              pushState: function () {},
              go: function () {},
              back: function () {},
            },
            CustomEvent: function () {
              return this;
            },
            addEventListener: function () {},
            removeEventListener: function () {},
            getComputedStyle: function () {
              return {
                getPropertyValue: function () {
                  return '';
                },
              };
            },
            Image: function () {},
            Date: function () {},
            screen: {},
            setTimeout: function () {},
            clearTimeout: function () {},
            matchMedia: function () {
              return {};
            },
            requestAnimationFrame: function (e) {
              return 'undefined' == typeof setTimeout
                ? (e(), null)
                : setTimeout(e, 0);
            },
            cancelAnimationFrame: function (e) {
              'undefined' != typeof setTimeout && clearTimeout(e);
            },
          };
          function o() {
            var e = 'undefined' != typeof window ? window : {};
            return r(e, n), e;
          }
          function l(e) {
            return (l = Object.setPrototypeOf
              ? Object.getPrototypeOf
              : function (e) {
                  return e.__proto__ || Object.getPrototypeOf(e);
                })(e);
          }
          function c(e, t) {
            return (c =
              Object.setPrototypeOf ||
              function (e, t) {
                return (e.__proto__ = t), e;
              })(e, t);
          }
          function d() {
            if ('undefined' == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ('function' == typeof Proxy) return !0;
            try {
              return (
                Date.prototype.toString.call(
                  Reflect.construct(Date, [], function () {})
                ),
                !0
              );
            } catch (e) {
              return !1;
            }
          }
          function u(e, t, a) {
            return (u = d()
              ? Reflect.construct
              : function (e, t, a) {
                  var r = [null];
                  r.push.apply(r, t);
                  var i = new (Function.bind.apply(e, r))();
                  return a && c(i, a.prototype), i;
                }).apply(null, arguments);
          }
          function p(e) {
            var t = 'function' == typeof Map ? new Map() : void 0;
            return (p = function (e) {
              if (
                null === e ||
                ((a = e),
                -1 === Function.toString.call(a).indexOf('[native code]'))
              )
                return e;
              var a;
              if ('function' != typeof e)
                throw new TypeError(
                  'Super expression must either be null or a function'
                );
              if (void 0 !== t) {
                if (t.has(e)) return t.get(e);
                t.set(e, r);
              }
              function r() {
                return u(e, arguments, l(this).constructor);
              }
              return (
                (r.prototype = Object.create(e.prototype, {
                  constructor: {
                    value: r,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0,
                  },
                })),
                c(r, e)
              );
            })(e);
          }
          var m = (function (e) {
            function t(t) {
              var a, r, i;
              return (
                (r = (function (e) {
                  if (void 0 === e)
                    throw new ReferenceError(
                      "this hasn't been initialised - super() hasn't been called"
                    );
                  return e;
                })((a = e.call.apply(e, [this].concat(t)) || this))),
                (i = r.__proto__),
                Object.defineProperty(r, '__proto__', {
                  get: function () {
                    return i;
                  },
                  set: function (e) {
                    i.__proto__ = e;
                  },
                }),
                a
              );
            }
            return (
              (r = e),
              ((a = t).prototype = Object.create(r.prototype)),
              (a.prototype.constructor = a),
              (a.__proto__ = r),
              t
            );
            var a, r;
          })(p(Array));
          function f(e) {
            void 0 === e && (e = []);
            var t = [];
            return (
              e.forEach(function (e) {
                Array.isArray(e) ? t.push.apply(t, f(e)) : t.push(e);
              }),
              t
            );
          }
          function h(e, t) {
            return Array.prototype.filter.call(e, t);
          }
          function g(e, t) {
            var a = o(),
              r = s(),
              i = [];
            if (!t && e instanceof m) return e;
            if (!e) return new m(i);
            if ('string' == typeof e) {
              var n = e.trim();
              if (n.indexOf('<') >= 0 && n.indexOf('>') >= 0) {
                var l = 'div';
                0 === n.indexOf('<li') && (l = 'ul'),
                  0 === n.indexOf('<tr') && (l = 'tbody'),
                  (0 !== n.indexOf('<td') && 0 !== n.indexOf('<th')) ||
                    (l = 'tr'),
                  0 === n.indexOf('<tbody') && (l = 'table'),
                  0 === n.indexOf('<option') && (l = 'select');
                var c = r.createElement(l);
                c.innerHTML = n;
                for (var d = 0; d < c.childNodes.length; d += 1)
                  i.push(c.childNodes[d]);
              } else
                i = (function (e, t) {
                  if ('string' != typeof e) return [e];
                  for (
                    var a = [], r = t.querySelectorAll(e), i = 0;
                    i < r.length;
                    i += 1
                  )
                    a.push(r[i]);
                  return a;
                })(e.trim(), t || r);
            } else if (e.nodeType || e === a || e === r) i.push(e);
            else if (Array.isArray(e)) {
              if (e instanceof m) return e;
              i = e;
            }
            return new m(
              (function (e) {
                for (var t = [], a = 0; a < e.length; a += 1)
                  -1 === t.indexOf(e[a]) && t.push(e[a]);
                return t;
              })(i)
            );
          }
          g.fn = m.prototype;
          var v,
            b,
            y,
            w = {
              addClass: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = f(
                  t.map(function (e) {
                    return e.split(' ');
                  })
                );
                return (
                  this.forEach(function (e) {
                    var t;
                    (t = e.classList).add.apply(t, r);
                  }),
                  this
                );
              },
              removeClass: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = f(
                  t.map(function (e) {
                    return e.split(' ');
                  })
                );
                return (
                  this.forEach(function (e) {
                    var t;
                    (t = e.classList).remove.apply(t, r);
                  }),
                  this
                );
              },
              hasClass: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = f(
                  t.map(function (e) {
                    return e.split(' ');
                  })
                );
                return (
                  h(this, function (e) {
                    return (
                      r.filter(function (t) {
                        return e.classList.contains(t);
                      }).length > 0
                    );
                  }).length > 0
                );
              },
              toggleClass: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = f(
                  t.map(function (e) {
                    return e.split(' ');
                  })
                );
                this.forEach(function (e) {
                  r.forEach(function (t) {
                    e.classList.toggle(t);
                  });
                });
              },
              attr: function (e, t) {
                if (1 === arguments.length && 'string' == typeof e)
                  return this[0] ? this[0].getAttribute(e) : void 0;
                for (var a = 0; a < this.length; a += 1)
                  if (2 === arguments.length) this[a].setAttribute(e, t);
                  else
                    for (var r in e)
                      (this[a][r] = e[r]), this[a].setAttribute(r, e[r]);
                return this;
              },
              removeAttr: function (e) {
                for (var t = 0; t < this.length; t += 1)
                  this[t].removeAttribute(e);
                return this;
              },
              transform: function (e) {
                for (var t = 0; t < this.length; t += 1)
                  this[t].style.transform = e;
                return this;
              },
              transition: function (e) {
                for (var t = 0; t < this.length; t += 1)
                  this[t].style.transitionDuration =
                    'string' != typeof e ? e + 'ms' : e;
                return this;
              },
              on: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = t[0],
                  i = t[1],
                  s = t[2],
                  n = t[3];
                function o(e) {
                  var t = e.target;
                  if (t) {
                    var a = e.target.dom7EventData || [];
                    if ((a.indexOf(e) < 0 && a.unshift(e), g(t).is(i)))
                      s.apply(t, a);
                    else
                      for (var r = g(t).parents(), n = 0; n < r.length; n += 1)
                        g(r[n]).is(i) && s.apply(r[n], a);
                  }
                }
                function l(e) {
                  var t = (e && e.target && e.target.dom7EventData) || [];
                  t.indexOf(e) < 0 && t.unshift(e), s.apply(this, t);
                }
                'function' == typeof t[1] &&
                  ((r = t[0]), (s = t[1]), (n = t[2]), (i = void 0)),
                  n || (n = !1);
                for (var c, d = r.split(' '), u = 0; u < this.length; u += 1) {
                  var p = this[u];
                  if (i)
                    for (c = 0; c < d.length; c += 1) {
                      var m = d[c];
                      p.dom7LiveListeners || (p.dom7LiveListeners = {}),
                        p.dom7LiveListeners[m] || (p.dom7LiveListeners[m] = []),
                        p.dom7LiveListeners[m].push({
                          listener: s,
                          proxyListener: o,
                        }),
                        p.addEventListener(m, o, n);
                    }
                  else
                    for (c = 0; c < d.length; c += 1) {
                      var f = d[c];
                      p.dom7Listeners || (p.dom7Listeners = {}),
                        p.dom7Listeners[f] || (p.dom7Listeners[f] = []),
                        p.dom7Listeners[f].push({
                          listener: s,
                          proxyListener: l,
                        }),
                        p.addEventListener(f, l, n);
                    }
                }
                return this;
              },
              off: function () {
                for (
                  var e = arguments.length, t = new Array(e), a = 0;
                  a < e;
                  a++
                )
                  t[a] = arguments[a];
                var r = t[0],
                  i = t[1],
                  s = t[2],
                  n = t[3];
                'function' == typeof t[1] &&
                  ((r = t[0]), (s = t[1]), (n = t[2]), (i = void 0)),
                  n || (n = !1);
                for (var o = r.split(' '), l = 0; l < o.length; l += 1)
                  for (var c = o[l], d = 0; d < this.length; d += 1) {
                    var u = this[d],
                      p = void 0;
                    if (
                      (!i && u.dom7Listeners
                        ? (p = u.dom7Listeners[c])
                        : i &&
                          u.dom7LiveListeners &&
                          (p = u.dom7LiveListeners[c]),
                      p && p.length)
                    )
                      for (var m = p.length - 1; m >= 0; m -= 1) {
                        var f = p[m];
                        (s && f.listener === s) ||
                        (s &&
                          f.listener &&
                          f.listener.dom7proxy &&
                          f.listener.dom7proxy === s)
                          ? (u.removeEventListener(c, f.proxyListener, n),
                            p.splice(m, 1))
                          : s ||
                            (u.removeEventListener(c, f.proxyListener, n),
                            p.splice(m, 1));
                      }
                  }
                return this;
              },
              trigger: function () {
                for (
                  var e = o(), t = arguments.length, a = new Array(t), r = 0;
                  r < t;
                  r++
                )
                  a[r] = arguments[r];
                for (
                  var i = a[0].split(' '), s = a[1], n = 0;
                  n < i.length;
                  n += 1
                )
                  for (var l = i[n], c = 0; c < this.length; c += 1) {
                    var d = this[c];
                    if (e.CustomEvent) {
                      var u = new e.CustomEvent(l, {
                        detail: s,
                        bubbles: !0,
                        cancelable: !0,
                      });
                      (d.dom7EventData = a.filter(function (e, t) {
                        return t > 0;
                      })),
                        d.dispatchEvent(u),
                        (d.dom7EventData = []),
                        delete d.dom7EventData;
                    }
                  }
                return this;
              },
              transitionEnd: function (e) {
                var t = this;
                return (
                  e &&
                    t.on('transitionend', function a(r) {
                      r.target === this &&
                        (e.call(this, r), t.off('transitionend', a));
                    }),
                  this
                );
              },
              outerWidth: function (e) {
                if (this.length > 0) {
                  if (e) {
                    var t = this.styles();
                    return (
                      this[0].offsetWidth +
                      parseFloat(t.getPropertyValue('margin-right')) +
                      parseFloat(t.getPropertyValue('margin-left'))
                    );
                  }
                  return this[0].offsetWidth;
                }
                return null;
              },
              outerHeight: function (e) {
                if (this.length > 0) {
                  if (e) {
                    var t = this.styles();
                    return (
                      this[0].offsetHeight +
                      parseFloat(t.getPropertyValue('margin-top')) +
                      parseFloat(t.getPropertyValue('margin-bottom'))
                    );
                  }
                  return this[0].offsetHeight;
                }
                return null;
              },
              styles: function () {
                var e = o();
                return this[0] ? e.getComputedStyle(this[0], null) : {};
              },
              offset: function () {
                if (this.length > 0) {
                  var e = o(),
                    t = s(),
                    a = this[0],
                    r = a.getBoundingClientRect(),
                    i = t.body,
                    n = a.clientTop || i.clientTop || 0,
                    l = a.clientLeft || i.clientLeft || 0,
                    c = a === e ? e.scrollY : a.scrollTop,
                    d = a === e ? e.scrollX : a.scrollLeft;
                  return { top: r.top + c - n, left: r.left + d - l };
                }
                return null;
              },
              css: function (e, t) {
                var a,
                  r = o();
                if (1 === arguments.length) {
                  if ('string' != typeof e) {
                    for (a = 0; a < this.length; a += 1)
                      for (var i in e) this[a].style[i] = e[i];
                    return this;
                  }
                  if (this[0])
                    return r
                      .getComputedStyle(this[0], null)
                      .getPropertyValue(e);
                }
                if (2 === arguments.length && 'string' == typeof e) {
                  for (a = 0; a < this.length; a += 1) this[a].style[e] = t;
                  return this;
                }
                return this;
              },
              each: function (e) {
                return e
                  ? (this.forEach(function (t, a) {
                      e.apply(t, [t, a]);
                    }),
                    this)
                  : this;
              },
              html: function (e) {
                if (void 0 === e) return this[0] ? this[0].innerHTML : null;
                for (var t = 0; t < this.length; t += 1) this[t].innerHTML = e;
                return this;
              },
              text: function (e) {
                if (void 0 === e)
                  return this[0] ? this[0].textContent.trim() : null;
                for (var t = 0; t < this.length; t += 1)
                  this[t].textContent = e;
                return this;
              },
              is: function (e) {
                var t,
                  a,
                  r = o(),
                  i = s(),
                  n = this[0];
                if (!n || void 0 === e) return !1;
                if ('string' == typeof e) {
                  if (n.matches) return n.matches(e);
                  if (n.webkitMatchesSelector)
                    return n.webkitMatchesSelector(e);
                  if (n.msMatchesSelector) return n.msMatchesSelector(e);
                  for (t = g(e), a = 0; a < t.length; a += 1)
                    if (t[a] === n) return !0;
                  return !1;
                }
                if (e === i) return n === i;
                if (e === r) return n === r;
                if (e.nodeType || e instanceof m) {
                  for (t = e.nodeType ? [e] : e, a = 0; a < t.length; a += 1)
                    if (t[a] === n) return !0;
                  return !1;
                }
                return !1;
              },
              index: function () {
                var e,
                  t = this[0];
                if (t) {
                  for (e = 0; null !== (t = t.previousSibling); )
                    1 === t.nodeType && (e += 1);
                  return e;
                }
              },
              eq: function (e) {
                if (void 0 === e) return this;
                var t = this.length;
                if (e > t - 1) return g([]);
                if (e < 0) {
                  var a = t + e;
                  return g(a < 0 ? [] : [this[a]]);
                }
                return g([this[e]]);
              },
              append: function () {
                for (var e, t = s(), a = 0; a < arguments.length; a += 1) {
                  e = a < 0 || arguments.length <= a ? void 0 : arguments[a];
                  for (var r = 0; r < this.length; r += 1)
                    if ('string' == typeof e) {
                      var i = t.createElement('div');
                      for (i.innerHTML = e; i.firstChild; )
                        this[r].appendChild(i.firstChild);
                    } else if (e instanceof m)
                      for (var n = 0; n < e.length; n += 1)
                        this[r].appendChild(e[n]);
                    else this[r].appendChild(e);
                }
                return this;
              },
              prepend: function (e) {
                var t,
                  a,
                  r = s();
                for (t = 0; t < this.length; t += 1)
                  if ('string' == typeof e) {
                    var i = r.createElement('div');
                    for (
                      i.innerHTML = e, a = i.childNodes.length - 1;
                      a >= 0;
                      a -= 1
                    )
                      this[t].insertBefore(
                        i.childNodes[a],
                        this[t].childNodes[0]
                      );
                  } else if (e instanceof m)
                    for (a = 0; a < e.length; a += 1)
                      this[t].insertBefore(e[a], this[t].childNodes[0]);
                  else this[t].insertBefore(e, this[t].childNodes[0]);
                return this;
              },
              next: function (e) {
                return this.length > 0
                  ? e
                    ? this[0].nextElementSibling &&
                      g(this[0].nextElementSibling).is(e)
                      ? g([this[0].nextElementSibling])
                      : g([])
                    : this[0].nextElementSibling
                    ? g([this[0].nextElementSibling])
                    : g([])
                  : g([]);
              },
              nextAll: function (e) {
                var t = [],
                  a = this[0];
                if (!a) return g([]);
                for (; a.nextElementSibling; ) {
                  var r = a.nextElementSibling;
                  e ? g(r).is(e) && t.push(r) : t.push(r), (a = r);
                }
                return g(t);
              },
              prev: function (e) {
                if (this.length > 0) {
                  var t = this[0];
                  return e
                    ? t.previousElementSibling &&
                      g(t.previousElementSibling).is(e)
                      ? g([t.previousElementSibling])
                      : g([])
                    : t.previousElementSibling
                    ? g([t.previousElementSibling])
                    : g([]);
                }
                return g([]);
              },
              prevAll: function (e) {
                var t = [],
                  a = this[0];
                if (!a) return g([]);
                for (; a.previousElementSibling; ) {
                  var r = a.previousElementSibling;
                  e ? g(r).is(e) && t.push(r) : t.push(r), (a = r);
                }
                return g(t);
              },
              parent: function (e) {
                for (var t = [], a = 0; a < this.length; a += 1)
                  null !== this[a].parentNode &&
                    (e
                      ? g(this[a].parentNode).is(e) &&
                        t.push(this[a].parentNode)
                      : t.push(this[a].parentNode));
                return g(t);
              },
              parents: function (e) {
                for (var t = [], a = 0; a < this.length; a += 1)
                  for (var r = this[a].parentNode; r; )
                    e ? g(r).is(e) && t.push(r) : t.push(r), (r = r.parentNode);
                return g(t);
              },
              closest: function (e) {
                var t = this;
                return void 0 === e
                  ? g([])
                  : (t.is(e) || (t = t.parents(e).eq(0)), t);
              },
              find: function (e) {
                for (var t = [], a = 0; a < this.length; a += 1) {
                  try {
                    var r = this[a].querySelectorAll(e);
                  } catch (t) {
                    console.log(e);
                  }
                  for (var i = 0; i < r.length; i += 1) t.push(r[i]);
                }
                return g(t);
              },
              children: function (e) {
                for (var t = [], a = 0; a < this.length; a += 1)
                  for (var r = this[a].children, i = 0; i < r.length; i += 1)
                    (e && !g(r[i]).is(e)) || t.push(r[i]);
                return g(t);
              },
              filter: function (e) {
                return g(h(this, e));
              },
              remove: function () {
                for (var e = 0; e < this.length; e += 1)
                  this[e].parentNode && this[e].parentNode.removeChild(this[e]);
                return this;
              },
            };
          function E(e, t) {
            return void 0 === t && (t = 0), setTimeout(e, t);
          }
          function S() {
            return Date.now();
          }
          function x(e, t) {
            void 0 === t && (t = 'x');
            var a,
              r,
              i,
              s = o(),
              n = (function (e) {
                var t,
                  a = o();
                return (
                  a.getComputedStyle && (t = a.getComputedStyle(e, null)),
                  !t && e.currentStyle && (t = e.currentStyle),
                  t || (t = e.style),
                  t
                );
              })(e);
            return (
              s.WebKitCSSMatrix
                ? ((r = n.transform || n.webkitTransform).split(',').length >
                    6 &&
                    (r = r
                      .split(', ')
                      .map(function (e) {
                        return e.replace(',', '.');
                      })
                      .join(', ')),
                  (i = new s.WebKitCSSMatrix('none' === r ? '' : r)))
                : (a = (i =
                    n.MozTransform ||
                    n.OTransform ||
                    n.MsTransform ||
                    n.msTransform ||
                    n.transform ||
                    n
                      .getPropertyValue('transform')
                      .replace('translate(', 'matrix(1, 0, 0, 1,'))
                    .toString()
                    .split(',')),
              'x' === t &&
                (r = s.WebKitCSSMatrix
                  ? i.m41
                  : 16 === a.length
                  ? parseFloat(a[12])
                  : parseFloat(a[4])),
              'y' === t &&
                (r = s.WebKitCSSMatrix
                  ? i.m42
                  : 16 === a.length
                  ? parseFloat(a[13])
                  : parseFloat(a[5])),
              r || 0
            );
          }
          function C(e) {
            return (
              'object' == typeof e &&
              null !== e &&
              e.constructor &&
              'Object' === Object.prototype.toString.call(e).slice(8, -1)
            );
          }
          function T() {
            for (
              var e = Object(arguments.length <= 0 ? void 0 : arguments[0]),
                t = ['__proto__', 'constructor', 'prototype'],
                a = 'undefined' != typeof window ? window.HTMLElement : void 0,
                r = 1;
              r < arguments.length;
              r += 1
            ) {
              var i = r < 0 || arguments.length <= r ? void 0 : arguments[r];
              if (null != i && !(a && i instanceof a))
                for (
                  var s = Object.keys(Object(i)).filter(function (e) {
                      return t.indexOf(e) < 0;
                    }),
                    n = 0,
                    o = s.length;
                  n < o;
                  n += 1
                ) {
                  var l = s[n],
                    c = Object.getOwnPropertyDescriptor(i, l);
                  void 0 !== c &&
                    c.enumerable &&
                    (C(e[l]) && C(i[l])
                      ? i[l].__swiper__
                        ? (e[l] = i[l])
                        : T(e[l], i[l])
                      : !C(e[l]) && C(i[l])
                      ? ((e[l] = {}),
                        i[l].__swiper__ ? (e[l] = i[l]) : T(e[l], i[l]))
                      : (e[l] = i[l]));
                }
            }
            return e;
          }
          function k(e, t) {
            Object.keys(t).forEach(function (a) {
              C(t[a]) &&
                Object.keys(t[a]).forEach(function (r) {
                  'function' == typeof t[a][r] && (t[a][r] = t[a][r].bind(e));
                }),
                (e[a] = t[a]);
            });
          }
          function M(e) {
            return (
              void 0 === e && (e = ''),
              '.' +
                e
                  .trim()
                  .replace(/([\.:\/])/g, '\\$1')
                  .replace(/ /g, '.')
            );
          }
          function L(e, t, a, r) {
            var i = s();
            return (
              a &&
                Object.keys(r).forEach(function (a) {
                  if (!t[a] && !0 === t.auto) {
                    var s = i.createElement('div');
                    (s.className = r[a]), e.append(s), (t[a] = s);
                  }
                }),
              t
            );
          }
          function A() {
            return (
              v ||
                (v = (function () {
                  var e = o(),
                    t = s();
                  return {
                    touch: !!(
                      'ontouchstart' in e ||
                      (e.DocumentTouch && t instanceof e.DocumentTouch)
                    ),
                    pointerEvents:
                      !!e.PointerEvent &&
                      'maxTouchPoints' in e.navigator &&
                      e.navigator.maxTouchPoints >= 0,
                    observer:
                      'MutationObserver' in e || 'WebkitMutationObserver' in e,
                    passiveListener: (function () {
                      var t = !1;
                      try {
                        var a = Object.defineProperty({}, 'passive', {
                          get: function () {
                            t = !0;
                          },
                        });
                        e.addEventListener('testPassiveListener', null, a);
                      } catch (e) {}
                      return t;
                    })(),
                    gestures: 'ongesturestart' in e,
                  };
                })()),
              v
            );
          }
          function _(e) {
            return (
              void 0 === e && (e = {}),
              b ||
                (b = (function (e) {
                  var t = (void 0 === e ? {} : e).userAgent,
                    a = A(),
                    r = o(),
                    i = r.navigator.platform,
                    s = t || r.navigator.userAgent,
                    n = { ios: !1, android: !1 },
                    l = r.screen.width,
                    c = r.screen.height,
                    d = s.match(/(Android);?[\s\/]+([\d.]+)?/),
                    u = s.match(/(iPad).*OS\s([\d_]+)/),
                    p = s.match(/(iPod)(.*OS\s([\d_]+))?/),
                    m = !u && s.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                    f = 'Win32' === i,
                    h = 'MacIntel' === i;
                  return (
                    !u &&
                      h &&
                      a.touch &&
                      [
                        '1024x1366',
                        '1366x1024',
                        '834x1194',
                        '1194x834',
                        '834x1112',
                        '1112x834',
                        '768x1024',
                        '1024x768',
                        '820x1180',
                        '1180x820',
                        '810x1080',
                        '1080x810',
                      ].indexOf(l + 'x' + c) >= 0 &&
                      ((u = s.match(/(Version)\/([\d.]+)/)) ||
                        (u = [0, 1, '13_0_0']),
                      (h = !1)),
                    d && !f && ((n.os = 'android'), (n.android = !0)),
                    (u || m || p) && ((n.os = 'ios'), (n.ios = !0)),
                    n
                  );
                })(e)),
              b
            );
          }
          function N() {
            return (
              y ||
                (y = (function () {
                  var e,
                    t = o();
                  return {
                    isEdge: !!t.navigator.userAgent.match(/Edge/g),
                    isSafari:
                      ((e = t.navigator.userAgent.toLowerCase()),
                      e.indexOf('safari') >= 0 &&
                        e.indexOf('chrome') < 0 &&
                        e.indexOf('android') < 0),
                    isWebView:
                      /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(
                        t.navigator.userAgent
                      ),
                  };
                })()),
              y
            );
          }
          Object.keys(w).forEach(function (e) {
            Object.defineProperty(g.fn, e, { value: w[e], writable: !0 });
          });
          var $ = {
              name: 'resize',
              create: function () {
                var e = this;
                T(e, {
                  resize: {
                    observer: null,
                    createObserver: function () {
                      e &&
                        !e.destroyed &&
                        e.initialized &&
                        ((e.resize.observer = new ResizeObserver(function (t) {
                          var a = e.width,
                            r = e.height,
                            i = a,
                            s = r;
                          t.forEach(function (t) {
                            var a = t.contentBoxSize,
                              r = t.contentRect,
                              n = t.target;
                            (n && n !== e.el) ||
                              ((i = r ? r.width : (a[0] || a).inlineSize),
                              (s = r ? r.height : (a[0] || a).blockSize));
                          }),
                            (i === a && s === r) || e.resize.resizeHandler();
                        })),
                        e.resize.observer.observe(e.el));
                    },
                    removeObserver: function () {
                      e.resize.observer &&
                        e.resize.observer.unobserve &&
                        e.el &&
                        (e.resize.observer.unobserve(e.el),
                        (e.resize.observer = null));
                    },
                    resizeHandler: function () {
                      e &&
                        !e.destroyed &&
                        e.initialized &&
                        (e.emit('beforeResize'), e.emit('resize'));
                    },
                    orientationChangeHandler: function () {
                      e &&
                        !e.destroyed &&
                        e.initialized &&
                        e.emit('orientationchange');
                    },
                  },
                });
              },
              on: {
                init: function (e) {
                  var t = o();
                  e.params.resizeObserver && void 0 !== o().ResizeObserver
                    ? e.resize.createObserver()
                    : (t.addEventListener('resize', e.resize.resizeHandler),
                      t.addEventListener(
                        'orientationchange',
                        e.resize.orientationChangeHandler
                      ));
                },
                destroy: function (e) {
                  var t = o();
                  e.resize.removeObserver(),
                    t.removeEventListener('resize', e.resize.resizeHandler),
                    t.removeEventListener(
                      'orientationchange',
                      e.resize.orientationChangeHandler
                    );
                },
              },
            },
            z = {
              attach: function (e, t) {
                void 0 === t && (t = {});
                var a = o(),
                  r = this,
                  i = new (a.MutationObserver || a.WebkitMutationObserver)(
                    function (e) {
                      if (1 !== e.length) {
                        var t = function () {
                          r.emit('observerUpdate', e[0]);
                        };
                        a.requestAnimationFrame
                          ? a.requestAnimationFrame(t)
                          : a.setTimeout(t, 0);
                      } else r.emit('observerUpdate', e[0]);
                    }
                  );
                i.observe(e, {
                  attributes: void 0 === t.attributes || t.attributes,
                  childList: void 0 === t.childList || t.childList,
                  characterData: void 0 === t.characterData || t.characterData,
                }),
                  r.observer.observers.push(i);
              },
              init: function () {
                var e = this;
                if (e.support.observer && e.params.observer) {
                  if (e.params.observeParents)
                    for (var t = e.$el.parents(), a = 0; a < t.length; a += 1)
                      e.observer.attach(t[a]);
                  e.observer.attach(e.$el[0], {
                    childList: e.params.observeSlideChildren,
                  }),
                    e.observer.attach(e.$wrapperEl[0], { attributes: !1 });
                }
              },
              destroy: function () {
                this.observer.observers.forEach(function (e) {
                  e.disconnect();
                }),
                  (this.observer.observers = []);
              },
            },
            P = {
              name: 'observer',
              params: {
                observer: !1,
                observeParents: !1,
                observeSlideChildren: !1,
              },
              create: function () {
                k(this, { observer: t({}, z, { observers: [] }) });
              },
              on: {
                init: function (e) {
                  e.observer.init();
                },
                destroy: function (e) {
                  e.observer.destroy();
                },
              },
            };
          function q(e) {
            var t = this,
              a = s(),
              r = o(),
              i = t.touchEventsData,
              n = t.params,
              l = t.touches;
            if (
              t.enabled &&
              (!t.animating || !n.preventInteractionOnTransition)
            ) {
              var c = e;
              c.originalEvent && (c = c.originalEvent);
              var d = g(c.target);
              if (
                ('wrapper' !== n.touchEventsTarget ||
                  d.closest(t.wrapperEl).length) &&
                ((i.isTouchEvent = 'touchstart' === c.type),
                (i.isTouchEvent || !('which' in c) || 3 !== c.which) &&
                  !(
                    (!i.isTouchEvent && 'button' in c && c.button > 0) ||
                    (i.isTouched && i.isMoved)
                  ))
              )
                if (
                  (!!n.noSwipingClass &&
                    '' !== n.noSwipingClass &&
                    c.target &&
                    c.target.shadowRoot &&
                    e.path &&
                    e.path[0] &&
                    (d = g(e.path[0])),
                  n.noSwiping &&
                    d.closest(
                      n.noSwipingSelector
                        ? n.noSwipingSelector
                        : '.' + n.noSwipingClass
                    )[0])
                )
                  t.allowClick = !0;
                else if (!n.swipeHandler || d.closest(n.swipeHandler)[0]) {
                  (l.currentX =
                    'touchstart' === c.type
                      ? c.targetTouches[0].pageX
                      : c.pageX),
                    (l.currentY =
                      'touchstart' === c.type
                        ? c.targetTouches[0].pageY
                        : c.pageY);
                  var u = l.currentX,
                    p = l.currentY,
                    m = n.edgeSwipeDetection || n.iOSEdgeSwipeDetection,
                    f = n.edgeSwipeThreshold || n.iOSEdgeSwipeThreshold;
                  if (m && (u <= f || u >= r.innerWidth - f)) {
                    if ('prevent' !== m) return;
                    e.preventDefault();
                  }
                  if (
                    (T(i, {
                      isTouched: !0,
                      isMoved: !1,
                      allowTouchCallbacks: !0,
                      isScrolling: void 0,
                      startMoving: void 0,
                    }),
                    (l.startX = u),
                    (l.startY = p),
                    (i.touchStartTime = S()),
                    (t.allowClick = !0),
                    t.updateSize(),
                    (t.swipeDirection = void 0),
                    n.threshold > 0 && (i.allowThresholdMove = !1),
                    'touchstart' !== c.type)
                  ) {
                    var h = !0;
                    d.is(i.focusableElements) && (h = !1),
                      a.activeElement &&
                        g(a.activeElement).is(i.focusableElements) &&
                        a.activeElement !== d[0] &&
                        a.activeElement.blur();
                    var v = h && t.allowTouchMove && n.touchStartPreventDefault;
                    (!n.touchStartForcePreventDefault && !v) ||
                      d[0].isContentEditable ||
                      c.preventDefault();
                  }
                  t.emit('touchStart', c);
                }
            }
          }
          function I(e) {
            var t = s(),
              a = this,
              r = a.touchEventsData,
              i = a.params,
              n = a.touches,
              o = a.rtlTranslate;
            if (a.enabled) {
              var l = e;
              if ((l.originalEvent && (l = l.originalEvent), r.isTouched)) {
                if (!r.isTouchEvent || 'touchmove' === l.type) {
                  var c =
                      'touchmove' === l.type &&
                      l.targetTouches &&
                      (l.targetTouches[0] || l.changedTouches[0]),
                    d = 'touchmove' === l.type ? c.pageX : l.pageX,
                    u = 'touchmove' === l.type ? c.pageY : l.pageY;
                  if (l.preventedByNestedSwiper)
                    return (n.startX = d), void (n.startY = u);
                  if (!a.allowTouchMove)
                    return (
                      (a.allowClick = !1),
                      void (
                        r.isTouched &&
                        (T(n, {
                          startX: d,
                          startY: u,
                          currentX: d,
                          currentY: u,
                        }),
                        (r.touchStartTime = S()))
                      )
                    );
                  if (r.isTouchEvent && i.touchReleaseOnEdges && !i.loop)
                    if (a.isVertical()) {
                      if (
                        (u < n.startY && a.translate <= a.maxTranslate()) ||
                        (u > n.startY && a.translate >= a.minTranslate())
                      )
                        return (r.isTouched = !1), void (r.isMoved = !1);
                    } else if (
                      (d < n.startX && a.translate <= a.maxTranslate()) ||
                      (d > n.startX && a.translate >= a.minTranslate())
                    )
                      return;
                  if (
                    r.isTouchEvent &&
                    t.activeElement &&
                    l.target === t.activeElement &&
                    g(l.target).is(r.focusableElements)
                  )
                    return (r.isMoved = !0), void (a.allowClick = !1);
                  if (
                    (r.allowTouchCallbacks && a.emit('touchMove', l),
                    !(l.targetTouches && l.targetTouches.length > 1))
                  ) {
                    (n.currentX = d), (n.currentY = u);
                    var p,
                      m = n.currentX - n.startX,
                      f = n.currentY - n.startY;
                    if (
                      !(
                        a.params.threshold &&
                        Math.sqrt(Math.pow(m, 2) + Math.pow(f, 2)) <
                          a.params.threshold
                      )
                    )
                      if (
                        (void 0 === r.isScrolling &&
                          ((a.isHorizontal() && n.currentY === n.startY) ||
                          (a.isVertical() && n.currentX === n.startX)
                            ? (r.isScrolling = !1)
                            : m * m + f * f >= 25 &&
                              ((p =
                                (180 * Math.atan2(Math.abs(f), Math.abs(m))) /
                                Math.PI),
                              (r.isScrolling = a.isHorizontal()
                                ? p > i.touchAngle
                                : 90 - p > i.touchAngle))),
                        r.isScrolling && a.emit('touchMoveOpposite', l),
                        void 0 === r.startMoving &&
                          ((n.currentX === n.startX &&
                            n.currentY === n.startY) ||
                            (r.startMoving = !0)),
                        r.isScrolling)
                      )
                        r.isTouched = !1;
                      else if (r.startMoving) {
                        (a.allowClick = !1),
                          !i.cssMode && l.cancelable && l.preventDefault(),
                          i.touchMoveStopPropagation &&
                            !i.nested &&
                            l.stopPropagation(),
                          r.isMoved ||
                            (i.loop && a.loopFix(),
                            (r.startTranslate = a.getTranslate()),
                            a.setTransition(0),
                            a.animating &&
                              a.$wrapperEl.trigger(
                                'webkitTransitionEnd transitionend'
                              ),
                            (r.allowMomentumBounce = !1),
                            !i.grabCursor ||
                              (!0 !== a.allowSlideNext &&
                                !0 !== a.allowSlidePrev) ||
                              a.setGrabCursor(!0),
                            a.emit('sliderFirstMove', l)),
                          a.emit('sliderMove', l),
                          (r.isMoved = !0);
                        var h = a.isHorizontal() ? m : f;
                        (n.diff = h),
                          (h *= i.touchRatio),
                          o && (h = -h),
                          (a.swipeDirection = h > 0 ? 'prev' : 'next'),
                          (r.currentTranslate = h + r.startTranslate);
                        var v = !0,
                          b = i.resistanceRatio;
                        if (
                          (i.touchReleaseOnEdges && (b = 0),
                          h > 0 && r.currentTranslate > a.minTranslate()
                            ? ((v = !1),
                              i.resistance &&
                                (r.currentTranslate =
                                  a.minTranslate() -
                                  1 +
                                  Math.pow(
                                    -a.minTranslate() + r.startTranslate + h,
                                    b
                                  )))
                            : h < 0 &&
                              r.currentTranslate < a.maxTranslate() &&
                              ((v = !1),
                              i.resistance &&
                                (r.currentTranslate =
                                  a.maxTranslate() +
                                  1 -
                                  Math.pow(
                                    a.maxTranslate() - r.startTranslate - h,
                                    b
                                  ))),
                          v && (l.preventedByNestedSwiper = !0),
                          !a.allowSlideNext &&
                            'next' === a.swipeDirection &&
                            r.currentTranslate < r.startTranslate &&
                            (r.currentTranslate = r.startTranslate),
                          !a.allowSlidePrev &&
                            'prev' === a.swipeDirection &&
                            r.currentTranslate > r.startTranslate &&
                            (r.currentTranslate = r.startTranslate),
                          a.allowSlidePrev ||
                            a.allowSlideNext ||
                            (r.currentTranslate = r.startTranslate),
                          i.threshold > 0)
                        ) {
                          if (
                            !(Math.abs(h) > i.threshold || r.allowThresholdMove)
                          )
                            return void (r.currentTranslate = r.startTranslate);
                          if (!r.allowThresholdMove)
                            return (
                              (r.allowThresholdMove = !0),
                              (n.startX = n.currentX),
                              (n.startY = n.currentY),
                              (r.currentTranslate = r.startTranslate),
                              void (n.diff = a.isHorizontal()
                                ? n.currentX - n.startX
                                : n.currentY - n.startY)
                            );
                        }
                        i.followFinger &&
                          !i.cssMode &&
                          ((i.freeMode ||
                            i.watchSlidesProgress ||
                            i.watchSlidesVisibility) &&
                            (a.updateActiveIndex(), a.updateSlidesClasses()),
                          i.freeMode &&
                            (0 === r.velocities.length &&
                              r.velocities.push({
                                position:
                                  n[a.isHorizontal() ? 'startX' : 'startY'],
                                time: r.touchStartTime,
                              }),
                            r.velocities.push({
                              position:
                                n[a.isHorizontal() ? 'currentX' : 'currentY'],
                              time: S(),
                            })),
                          a.updateProgress(r.currentTranslate),
                          a.setTranslate(r.currentTranslate));
                      }
                  }
                }
              } else
                r.startMoving &&
                  r.isScrolling &&
                  a.emit('touchMoveOpposite', l);
            }
          }
          function O(e) {
            var t = this,
              a = t.touchEventsData,
              r = t.params,
              i = t.touches,
              s = t.rtlTranslate,
              n = t.$wrapperEl,
              o = t.slidesGrid,
              l = t.snapGrid;
            if (t.enabled) {
              var c = e;
              if (
                (c.originalEvent && (c = c.originalEvent),
                a.allowTouchCallbacks && t.emit('touchEnd', c),
                (a.allowTouchCallbacks = !1),
                !a.isTouched)
              )
                return (
                  a.isMoved && r.grabCursor && t.setGrabCursor(!1),
                  (a.isMoved = !1),
                  void (a.startMoving = !1)
                );
              r.grabCursor &&
                a.isMoved &&
                a.isTouched &&
                (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) &&
                t.setGrabCursor(!1);
              var d,
                u = S(),
                p = u - a.touchStartTime;
              if (
                (t.allowClick &&
                  (t.updateClickedSlide(c),
                  t.emit('tap click', c),
                  p < 300 &&
                    u - a.lastClickTime < 300 &&
                    t.emit('doubleTap doubleClick', c)),
                (a.lastClickTime = S()),
                E(function () {
                  t.destroyed || (t.allowClick = !0);
                }),
                !a.isTouched ||
                  !a.isMoved ||
                  !t.swipeDirection ||
                  0 === i.diff ||
                  a.currentTranslate === a.startTranslate)
              )
                return (
                  (a.isTouched = !1),
                  (a.isMoved = !1),
                  void (a.startMoving = !1)
                );
              if (
                ((a.isTouched = !1),
                (a.isMoved = !1),
                (a.startMoving = !1),
                (d = r.followFinger
                  ? s
                    ? t.translate
                    : -t.translate
                  : -a.currentTranslate),
                !r.cssMode)
              )
                if (r.freeMode) {
                  if (d < -t.minTranslate())
                    return void t.slideTo(t.activeIndex);
                  if (d > -t.maxTranslate())
                    return void (t.slides.length < l.length
                      ? t.slideTo(l.length - 1)
                      : t.slideTo(t.slides.length - 1));
                  if (r.freeModeMomentum) {
                    if (a.velocities.length > 1) {
                      var m = a.velocities.pop(),
                        f = a.velocities.pop(),
                        h = m.position - f.position,
                        g = m.time - f.time;
                      (t.velocity = h / g),
                        (t.velocity /= 2),
                        Math.abs(t.velocity) < r.freeModeMinimumVelocity &&
                          (t.velocity = 0),
                        (g > 150 || S() - m.time > 300) && (t.velocity = 0);
                    } else t.velocity = 0;
                    (t.velocity *= r.freeModeMomentumVelocityRatio),
                      (a.velocities.length = 0);
                    var v = 1e3 * r.freeModeMomentumRatio,
                      b = t.velocity * v,
                      y = t.translate + b;
                    s && (y = -y);
                    var w,
                      x,
                      C = !1,
                      T =
                        20 *
                        Math.abs(t.velocity) *
                        r.freeModeMomentumBounceRatio;
                    if (y < t.maxTranslate())
                      r.freeModeMomentumBounce
                        ? (y + t.maxTranslate() < -T &&
                            (y = t.maxTranslate() - T),
                          (w = t.maxTranslate()),
                          (C = !0),
                          (a.allowMomentumBounce = !0))
                        : (y = t.maxTranslate()),
                        r.loop && r.centeredSlides && (x = !0);
                    else if (y > t.minTranslate())
                      r.freeModeMomentumBounce
                        ? (y - t.minTranslate() > T &&
                            (y = t.minTranslate() + T),
                          (w = t.minTranslate()),
                          (C = !0),
                          (a.allowMomentumBounce = !0))
                        : (y = t.minTranslate()),
                        r.loop && r.centeredSlides && (x = !0);
                    else if (r.freeModeSticky) {
                      for (var k, M = 0; M < l.length; M += 1)
                        if (l[M] > -y) {
                          k = M;
                          break;
                        }
                      y = -(y =
                        Math.abs(l[k] - y) < Math.abs(l[k - 1] - y) ||
                        'next' === t.swipeDirection
                          ? l[k]
                          : l[k - 1]);
                    }
                    if (
                      (x &&
                        t.once('transitionEnd', function () {
                          t.loopFix();
                        }),
                      0 !== t.velocity)
                    ) {
                      if (
                        ((v = s
                          ? Math.abs((-y - t.translate) / t.velocity)
                          : Math.abs((y - t.translate) / t.velocity)),
                        r.freeModeSticky)
                      ) {
                        var L = Math.abs((s ? -y : y) - t.translate),
                          A = t.slidesSizesGrid[t.activeIndex];
                        v =
                          L < A
                            ? r.speed
                            : L < 2 * A
                            ? 1.5 * r.speed
                            : 2.5 * r.speed;
                      }
                    } else if (r.freeModeSticky) return void t.slideToClosest();
                    r.freeModeMomentumBounce && C
                      ? (t.updateProgress(w),
                        t.setTransition(v),
                        t.setTranslate(y),
                        t.transitionStart(!0, t.swipeDirection),
                        (t.animating = !0),
                        n.transitionEnd(function () {
                          t &&
                            !t.destroyed &&
                            a.allowMomentumBounce &&
                            (t.emit('momentumBounce'),
                            t.setTransition(r.speed),
                            setTimeout(function () {
                              t.setTranslate(w),
                                n.transitionEnd(function () {
                                  t && !t.destroyed && t.transitionEnd();
                                });
                            }, 0));
                        }))
                      : t.velocity
                      ? (t.updateProgress(y),
                        t.setTransition(v),
                        t.setTranslate(y),
                        t.transitionStart(!0, t.swipeDirection),
                        t.animating ||
                          ((t.animating = !0),
                          n.transitionEnd(function () {
                            t && !t.destroyed && t.transitionEnd();
                          })))
                      : (t.emit('_freeModeNoMomentumRelease'),
                        t.updateProgress(y)),
                      t.updateActiveIndex(),
                      t.updateSlidesClasses();
                  } else {
                    if (r.freeModeSticky) return void t.slideToClosest();
                    r.freeMode && t.emit('_freeModeNoMomentumRelease');
                  }
                  (!r.freeModeMomentum || p >= r.longSwipesMs) &&
                    (t.updateProgress(),
                    t.updateActiveIndex(),
                    t.updateSlidesClasses());
                } else {
                  for (
                    var _ = 0, N = t.slidesSizesGrid[0], $ = 0;
                    $ < o.length;
                    $ += $ < r.slidesPerGroupSkip ? 1 : r.slidesPerGroup
                  ) {
                    var z = $ < r.slidesPerGroupSkip - 1 ? 1 : r.slidesPerGroup;
                    void 0 !== o[$ + z]
                      ? d >= o[$] &&
                        d < o[$ + z] &&
                        ((_ = $), (N = o[$ + z] - o[$]))
                      : d >= o[$] &&
                        ((_ = $), (N = o[o.length - 1] - o[o.length - 2]));
                  }
                  var P = (d - o[_]) / N,
                    q = _ < r.slidesPerGroupSkip - 1 ? 1 : r.slidesPerGroup;
                  if (p > r.longSwipesMs) {
                    if (!r.longSwipes) return void t.slideTo(t.activeIndex);
                    'next' === t.swipeDirection &&
                      (P >= r.longSwipesRatio
                        ? t.slideTo(_ + q)
                        : t.slideTo(_)),
                      'prev' === t.swipeDirection &&
                        (P > 1 - r.longSwipesRatio
                          ? t.slideTo(_ + q)
                          : t.slideTo(_));
                  } else {
                    if (!r.shortSwipes) return void t.slideTo(t.activeIndex);
                    !t.navigation ||
                    (c.target !== t.navigation.nextEl &&
                      c.target !== t.navigation.prevEl)
                      ? ('next' === t.swipeDirection && t.slideTo(_ + q),
                        'prev' === t.swipeDirection && t.slideTo(_))
                      : c.target === t.navigation.nextEl
                      ? t.slideTo(_ + q)
                      : t.slideTo(_);
                  }
                }
            }
          }
          function B() {
            var e = this,
              t = e.params,
              a = e.el;
            if (!a || 0 !== a.offsetWidth) {
              t.breakpoints && e.setBreakpoint();
              var r = e.allowSlideNext,
                i = e.allowSlidePrev,
                s = e.snapGrid;
              (e.allowSlideNext = !0),
                (e.allowSlidePrev = !0),
                e.updateSize(),
                e.updateSlides(),
                e.updateSlidesClasses(),
                ('auto' === t.slidesPerView || t.slidesPerView > 1) &&
                e.isEnd &&
                !e.isBeginning &&
                !e.params.centeredSlides
                  ? e.slideTo(e.slides.length - 1, 0, !1, !0)
                  : e.slideTo(e.activeIndex, 0, !1, !0),
                e.autoplay &&
                  e.autoplay.running &&
                  e.autoplay.paused &&
                  e.autoplay.run(),
                (e.allowSlidePrev = i),
                (e.allowSlideNext = r),
                e.params.watchOverflow && s !== e.snapGrid && e.checkOverflow();
            }
          }
          function j(e) {
            var t = this;
            t.enabled &&
              (t.allowClick ||
                (t.params.preventClicks && e.preventDefault(),
                t.params.preventClicksPropagation &&
                  t.animating &&
                  (e.stopPropagation(), e.stopImmediatePropagation())));
          }
          function R() {
            var e = this,
              t = e.wrapperEl,
              a = e.rtlTranslate;
            if (e.enabled) {
              (e.previousTranslate = e.translate),
                e.isHorizontal()
                  ? (e.translate = a
                      ? t.scrollWidth - t.offsetWidth - t.scrollLeft
                      : -t.scrollLeft)
                  : (e.translate = -t.scrollTop),
                -0 === e.translate && (e.translate = 0),
                e.updateActiveIndex(),
                e.updateSlidesClasses();
              var r = e.maxTranslate() - e.minTranslate();
              (0 === r ? 0 : (e.translate - e.minTranslate()) / r) !==
                e.progress && e.updateProgress(a ? -e.translate : e.translate),
                e.emit('setTranslate', e.translate, !1);
            }
          }
          var D = !1;
          function H() {}
          var G = {
              init: !0,
              direction: 'horizontal',
              touchEventsTarget: 'container',
              initialSlide: 0,
              speed: 300,
              cssMode: !1,
              updateOnWindowResize: !0,
              resizeObserver: !1,
              nested: !1,
              createElements: !1,
              enabled: !0,
              focusableElements:
                'input, select, option, textarea, button, video, label',
              width: null,
              height: null,
              preventInteractionOnTransition: !1,
              userAgent: null,
              url: null,
              edgeSwipeDetection: !1,
              edgeSwipeThreshold: 20,
              freeMode: !1,
              freeModeMomentum: !0,
              freeModeMomentumRatio: 1,
              freeModeMomentumBounce: !0,
              freeModeMomentumBounceRatio: 1,
              freeModeMomentumVelocityRatio: 1,
              freeModeSticky: !1,
              freeModeMinimumVelocity: 0.02,
              autoHeight: !1,
              setWrapperSize: !1,
              virtualTranslate: !1,
              effect: 'slide',
              breakpoints: void 0,
              breakpointsBase: 'window',
              spaceBetween: 0,
              slidesPerView: 1,
              slidesPerColumn: 1,
              slidesPerColumnFill: 'column',
              slidesPerGroup: 1,
              slidesPerGroupSkip: 0,
              centeredSlides: !1,
              centeredSlidesBounds: !1,
              slidesOffsetBefore: 0,
              slidesOffsetAfter: 0,
              normalizeSlideIndex: !0,
              centerInsufficientSlides: !1,
              watchOverflow: !1,
              roundLengths: !1,
              touchRatio: 1,
              touchAngle: 45,
              simulateTouch: !0,
              shortSwipes: !0,
              longSwipes: !0,
              longSwipesRatio: 0.5,
              longSwipesMs: 300,
              followFinger: !0,
              allowTouchMove: !0,
              threshold: 0,
              touchMoveStopPropagation: !1,
              touchStartPreventDefault: !0,
              touchStartForcePreventDefault: !1,
              touchReleaseOnEdges: !1,
              uniqueNavElements: !0,
              resistance: !0,
              resistanceRatio: 0.85,
              watchSlidesProgress: !1,
              watchSlidesVisibility: !1,
              grabCursor: !1,
              preventClicks: !0,
              preventClicksPropagation: !0,
              slideToClickedSlide: !1,
              preloadImages: !0,
              updateOnImagesReady: !0,
              loop: !1,
              loopAdditionalSlides: 0,
              loopedSlides: null,
              loopFillGroupWithBlank: !1,
              loopPreventsSlide: !0,
              allowSlidePrev: !0,
              allowSlideNext: !0,
              swipeHandler: null,
              noSwiping: !0,
              noSwipingClass: 'swiper-no-swiping',
              noSwipingSelector: null,
              passiveListeners: !0,
              containerModifierClass: 'swiper-container-',
              slideClass: 'swiper-slide',
              slideBlankClass: 'swiper-slide-invisible-blank',
              slideActiveClass: 'swiper-slide-active',
              slideDuplicateActiveClass: 'swiper-slide-duplicate-active',
              slideVisibleClass: 'swiper-slide-visible',
              slideDuplicateClass: 'swiper-slide-duplicate',
              slideNextClass: 'swiper-slide-next',
              slideDuplicateNextClass: 'swiper-slide-duplicate-next',
              slidePrevClass: 'swiper-slide-prev',
              slideDuplicatePrevClass: 'swiper-slide-duplicate-prev',
              wrapperClass: 'swiper-wrapper',
              runCallbacksOnInit: !0,
              _emitClasses: !1,
            },
            W = {
              modular: {
                useParams: function (e) {
                  var t = this;
                  t.modules &&
                    Object.keys(t.modules).forEach(function (a) {
                      var r = t.modules[a];
                      r.params && T(e, r.params);
                    });
                },
                useModules: function (e) {
                  void 0 === e && (e = {});
                  var t = this;
                  t.modules &&
                    Object.keys(t.modules).forEach(function (a) {
                      var r = t.modules[a],
                        i = e[a] || {};
                      r.on &&
                        t.on &&
                        Object.keys(r.on).forEach(function (e) {
                          t.on(e, r.on[e]);
                        }),
                        r.create && r.create.bind(t)(i);
                    });
                },
              },
              eventsEmitter: {
                on: function (e, t, a) {
                  var r = this;
                  if ('function' != typeof t) return r;
                  var i = a ? 'unshift' : 'push';
                  return (
                    e.split(' ').forEach(function (e) {
                      r.eventsListeners[e] || (r.eventsListeners[e] = []),
                        r.eventsListeners[e][i](t);
                    }),
                    r
                  );
                },
                once: function (e, t, a) {
                  var r = this;
                  if ('function' != typeof t) return r;
                  function i() {
                    r.off(e, i), i.__emitterProxy && delete i.__emitterProxy;
                    for (
                      var a = arguments.length, s = new Array(a), n = 0;
                      n < a;
                      n++
                    )
                      s[n] = arguments[n];
                    t.apply(r, s);
                  }
                  return (i.__emitterProxy = t), r.on(e, i, a);
                },
                onAny: function (e, t) {
                  var a = this;
                  if ('function' != typeof e) return a;
                  var r = t ? 'unshift' : 'push';
                  return (
                    a.eventsAnyListeners.indexOf(e) < 0 &&
                      a.eventsAnyListeners[r](e),
                    a
                  );
                },
                offAny: function (e) {
                  var t = this;
                  if (!t.eventsAnyListeners) return t;
                  var a = t.eventsAnyListeners.indexOf(e);
                  return a >= 0 && t.eventsAnyListeners.splice(a, 1), t;
                },
                off: function (e, t) {
                  var a = this;
                  return a.eventsListeners
                    ? (e.split(' ').forEach(function (e) {
                        void 0 === t
                          ? (a.eventsListeners[e] = [])
                          : a.eventsListeners[e] &&
                            a.eventsListeners[e].forEach(function (r, i) {
                              (r === t ||
                                (r.__emitterProxy && r.__emitterProxy === t)) &&
                                a.eventsListeners[e].splice(i, 1);
                            });
                      }),
                      a)
                    : a;
                },
                emit: function () {
                  var e,
                    t,
                    a,
                    r = this;
                  if (!r.eventsListeners) return r;
                  for (
                    var i = arguments.length, s = new Array(i), n = 0;
                    n < i;
                    n++
                  )
                    s[n] = arguments[n];
                  return (
                    'string' == typeof s[0] || Array.isArray(s[0])
                      ? ((e = s[0]), (t = s.slice(1, s.length)), (a = r))
                      : ((e = s[0].events),
                        (t = s[0].data),
                        (a = s[0].context || r)),
                    t.unshift(a),
                    (Array.isArray(e) ? e : e.split(' ')).forEach(function (e) {
                      r.eventsAnyListeners &&
                        r.eventsAnyListeners.length &&
                        r.eventsAnyListeners.forEach(function (r) {
                          r.apply(a, [e].concat(t));
                        }),
                        r.eventsListeners &&
                          r.eventsListeners[e] &&
                          r.eventsListeners[e].forEach(function (e) {
                            e.apply(a, t);
                          });
                    }),
                    r
                  );
                },
              },
              update: {
                updateSize: function () {
                  var e,
                    t,
                    a = this,
                    r = a.$el;
                  (e =
                    void 0 !== a.params.width && null !== a.params.width
                      ? a.params.width
                      : r[0].clientWidth),
                    (t =
                      void 0 !== a.params.height && null !== a.params.height
                        ? a.params.height
                        : r[0].clientHeight),
                    (0 === e && a.isHorizontal()) ||
                      (0 === t && a.isVertical()) ||
                      ((e =
                        e -
                        parseInt(r.css('padding-left') || 0, 10) -
                        parseInt(r.css('padding-right') || 0, 10)),
                      (t =
                        t -
                        parseInt(r.css('padding-top') || 0, 10) -
                        parseInt(r.css('padding-bottom') || 0, 10)),
                      Number.isNaN(e) && (e = 0),
                      Number.isNaN(t) && (t = 0),
                      T(a, {
                        width: e,
                        height: t,
                        size: a.isHorizontal() ? e : t,
                      }));
                },
                updateSlides: function () {
                  var e = this;
                  function t(t) {
                    return e.isHorizontal()
                      ? t
                      : {
                          width: 'height',
                          'margin-top': 'margin-left',
                          'margin-bottom ': 'margin-right',
                          'margin-left': 'margin-top',
                          'margin-right': 'margin-bottom',
                          'padding-left': 'padding-top',
                          'padding-right': 'padding-bottom',
                          marginRight: 'marginBottom',
                        }[t];
                  }
                  function a(e, a) {
                    return parseFloat(e.getPropertyValue(t(a)) || 0);
                  }
                  var r = e.params,
                    i = e.$wrapperEl,
                    s = e.size,
                    n = e.rtlTranslate,
                    o = e.wrongRTL,
                    l = e.virtual && r.virtual.enabled,
                    c = l ? e.virtual.slides.length : e.slides.length,
                    d = i.children('.' + e.params.slideClass),
                    u = l ? e.virtual.slides.length : d.length,
                    p = [],
                    m = [],
                    f = [],
                    h = r.slidesOffsetBefore;
                  'function' == typeof h && (h = r.slidesOffsetBefore.call(e));
                  var g = r.slidesOffsetAfter;
                  'function' == typeof g && (g = r.slidesOffsetAfter.call(e));
                  var v = e.snapGrid.length,
                    b = e.slidesGrid.length,
                    y = r.spaceBetween,
                    w = -h,
                    E = 0,
                    S = 0;
                  if (void 0 !== s) {
                    var x, C;
                    'string' == typeof y &&
                      y.indexOf('%') >= 0 &&
                      (y = (parseFloat(y.replace('%', '')) / 100) * s),
                      (e.virtualSize = -y),
                      n
                        ? d.css({ marginLeft: '', marginTop: '' })
                        : d.css({ marginRight: '', marginBottom: '' }),
                      r.slidesPerColumn > 1 &&
                        ((x =
                          Math.floor(u / r.slidesPerColumn) ===
                          u / e.params.slidesPerColumn
                            ? u
                            : Math.ceil(u / r.slidesPerColumn) *
                              r.slidesPerColumn),
                        'auto' !== r.slidesPerView &&
                          'row' === r.slidesPerColumnFill &&
                          (x = Math.max(
                            x,
                            r.slidesPerView * r.slidesPerColumn
                          )));
                    for (
                      var k,
                        M,
                        L,
                        A = r.slidesPerColumn,
                        _ = x / A,
                        N = Math.floor(u / r.slidesPerColumn),
                        $ = 0;
                      $ < u;
                      $ += 1
                    ) {
                      C = 0;
                      var z = d.eq($);
                      if (r.slidesPerColumn > 1) {
                        var P = void 0,
                          q = void 0,
                          I = void 0;
                        if (
                          'row' === r.slidesPerColumnFill &&
                          r.slidesPerGroup > 1
                        ) {
                          var O = Math.floor(
                              $ / (r.slidesPerGroup * r.slidesPerColumn)
                            ),
                            B = $ - r.slidesPerColumn * r.slidesPerGroup * O,
                            j =
                              0 === O
                                ? r.slidesPerGroup
                                : Math.min(
                                    Math.ceil(
                                      (u - O * A * r.slidesPerGroup) / A
                                    ),
                                    r.slidesPerGroup
                                  );
                          (P =
                            (q =
                              B -
                              (I = Math.floor(B / j)) * j +
                              O * r.slidesPerGroup) +
                            (I * x) / A),
                            z.css({
                              '-webkit-box-ordinal-group': P,
                              '-moz-box-ordinal-group': P,
                              '-ms-flex-order': P,
                              '-webkit-order': P,
                              order: P,
                            });
                        } else
                          'column' === r.slidesPerColumnFill
                            ? ((I = $ - (q = Math.floor($ / A)) * A),
                              (q > N || (q === N && I === A - 1)) &&
                                (I += 1) >= A &&
                                ((I = 0), (q += 1)))
                            : (q = $ - (I = Math.floor($ / _)) * _);
                        z.css(
                          t('margin-top'),
                          0 !== I ? r.spaceBetween && r.spaceBetween + 'px' : ''
                        );
                      }
                      if ('none' !== z.css('display')) {
                        if ('auto' === r.slidesPerView) {
                          var R = getComputedStyle(z[0]),
                            D = z[0].style.transform,
                            H = z[0].style.webkitTransform;
                          if (
                            (D && (z[0].style.transform = 'none'),
                            H && (z[0].style.webkitTransform = 'none'),
                            r.roundLengths)
                          )
                            C = e.isHorizontal()
                              ? z.outerWidth(!0)
                              : z.outerHeight(!0);
                          else {
                            var G = a(R, 'width'),
                              W = a(R, 'padding-left'),
                              F = a(R, 'padding-right'),
                              V = a(R, 'margin-left'),
                              U = a(R, 'margin-right'),
                              X = R.getPropertyValue('box-sizing');
                            if (X && 'border-box' === X) C = G + V + U;
                            else {
                              var Y = z[0],
                                K = Y.clientWidth;
                              C = G + W + F + V + U + (Y.offsetWidth - K);
                            }
                          }
                          D && (z[0].style.transform = D),
                            H && (z[0].style.webkitTransform = H),
                            r.roundLengths && (C = Math.floor(C));
                        } else
                          (C =
                            (s - (r.slidesPerView - 1) * y) / r.slidesPerView),
                            r.roundLengths && (C = Math.floor(C)),
                            d[$] && (d[$].style[t('width')] = C + 'px');
                        d[$] && (d[$].swiperSlideSize = C),
                          f.push(C),
                          r.centeredSlides
                            ? ((w = w + C / 2 + E / 2 + y),
                              0 === E && 0 !== $ && (w = w - s / 2 - y),
                              0 === $ && (w = w - s / 2 - y),
                              Math.abs(w) < 0.001 && (w = 0),
                              r.roundLengths && (w = Math.floor(w)),
                              S % r.slidesPerGroup == 0 && p.push(w),
                              m.push(w))
                            : (r.roundLengths && (w = Math.floor(w)),
                              (S - Math.min(e.params.slidesPerGroupSkip, S)) %
                                e.params.slidesPerGroup ==
                                0 && p.push(w),
                              m.push(w),
                              (w = w + C + y)),
                          (e.virtualSize += C + y),
                          (E = C),
                          (S += 1);
                      }
                    }
                    if (
                      ((e.virtualSize = Math.max(e.virtualSize, s) + g),
                      n &&
                        o &&
                        ('slide' === r.effect || 'coverflow' === r.effect) &&
                        i.css({ width: e.virtualSize + r.spaceBetween + 'px' }),
                      r.setWrapperSize &&
                        i.css(
                          (((M = {})[t('width')] =
                            e.virtualSize + r.spaceBetween + 'px'),
                          M)
                        ),
                      r.slidesPerColumn > 1 &&
                        ((e.virtualSize = (C + r.spaceBetween) * x),
                        (e.virtualSize =
                          Math.ceil(e.virtualSize / r.slidesPerColumn) -
                          r.spaceBetween),
                        i.css(
                          (((L = {})[t('width')] =
                            e.virtualSize + r.spaceBetween + 'px'),
                          L)
                        ),
                        r.centeredSlides))
                    ) {
                      k = [];
                      for (var Z = 0; Z < p.length; Z += 1) {
                        var J = p[Z];
                        r.roundLengths && (J = Math.floor(J)),
                          p[Z] < e.virtualSize + p[0] && k.push(J);
                      }
                      p = k;
                    }
                    if (!r.centeredSlides) {
                      k = [];
                      for (var Q = 0; Q < p.length; Q += 1) {
                        var ee = p[Q];
                        r.roundLengths && (ee = Math.floor(ee)),
                          p[Q] <= e.virtualSize - s && k.push(ee);
                      }
                      (p = k),
                        Math.floor(e.virtualSize - s) -
                          Math.floor(p[p.length - 1]) >
                          1 && p.push(e.virtualSize - s);
                    }
                    if ((0 === p.length && (p = [0]), 0 !== r.spaceBetween)) {
                      var te,
                        ae =
                          e.isHorizontal() && n
                            ? 'marginLeft'
                            : t('marginRight');
                      d.filter(function (e, t) {
                        return !r.cssMode || t !== d.length - 1;
                      }).css((((te = {})[ae] = y + 'px'), te));
                    }
                    if (r.centeredSlides && r.centeredSlidesBounds) {
                      var re = 0;
                      f.forEach(function (e) {
                        re += e + (r.spaceBetween ? r.spaceBetween : 0);
                      });
                      var ie = (re -= r.spaceBetween) - s;
                      p = p.map(function (e) {
                        return e < 0 ? -h : e > ie ? ie + g : e;
                      });
                    }
                    if (r.centerInsufficientSlides) {
                      var se = 0;
                      if (
                        (f.forEach(function (e) {
                          se += e + (r.spaceBetween ? r.spaceBetween : 0);
                        }),
                        (se -= r.spaceBetween) < s)
                      ) {
                        var ne = (s - se) / 2;
                        p.forEach(function (e, t) {
                          p[t] = e - ne;
                        }),
                          m.forEach(function (e, t) {
                            m[t] = e + ne;
                          });
                      }
                    }
                    T(e, {
                      slides: d,
                      snapGrid: p,
                      slidesGrid: m,
                      slidesSizesGrid: f,
                    }),
                      u !== c && e.emit('slidesLengthChange'),
                      p.length !== v &&
                        (e.params.watchOverflow && e.checkOverflow(),
                        e.emit('snapGridLengthChange')),
                      m.length !== b && e.emit('slidesGridLengthChange'),
                      (r.watchSlidesProgress || r.watchSlidesVisibility) &&
                        e.updateSlidesOffset();
                  }
                },
                updateAutoHeight: function (e) {
                  var t,
                    a = this,
                    r = [],
                    i = a.virtual && a.params.virtual.enabled,
                    s = 0;
                  'number' == typeof e
                    ? a.setTransition(e)
                    : !0 === e && a.setTransition(a.params.speed);
                  var n = function (e) {
                    return i
                      ? a.slides.filter(function (t) {
                          return (
                            parseInt(
                              t.getAttribute('data-swiper-slide-index'),
                              10
                            ) === e
                          );
                        })[0]
                      : a.slides.eq(e)[0];
                  };
                  if (
                    'auto' !== a.params.slidesPerView &&
                    a.params.slidesPerView > 1
                  )
                    if (a.params.centeredSlides)
                      a.visibleSlides.each(function (e) {
                        r.push(e);
                      });
                    else
                      for (
                        t = 0;
                        t < Math.ceil(a.params.slidesPerView);
                        t += 1
                      ) {
                        var o = a.activeIndex + t;
                        if (o > a.slides.length && !i) break;
                        r.push(n(o));
                      }
                  else r.push(n(a.activeIndex));
                  for (t = 0; t < r.length; t += 1)
                    if (void 0 !== r[t]) {
                      var l = r[t].offsetHeight;
                      s = l > s ? l : s;
                    }
                  s && a.$wrapperEl.css('height', s + 'px');
                },
                updateSlidesOffset: function () {
                  for (var e = this.slides, t = 0; t < e.length; t += 1)
                    e[t].swiperSlideOffset = this.isHorizontal()
                      ? e[t].offsetLeft
                      : e[t].offsetTop;
                },
                updateSlidesProgress: function (e) {
                  void 0 === e && (e = (this && this.translate) || 0);
                  var t = this,
                    a = t.params,
                    r = t.slides,
                    i = t.rtlTranslate;
                  if (0 !== r.length) {
                    void 0 === r[0].swiperSlideOffset && t.updateSlidesOffset();
                    var s = -e;
                    i && (s = e),
                      r.removeClass(a.slideVisibleClass),
                      (t.visibleSlidesIndexes = []),
                      (t.visibleSlides = []);
                    for (var n = 0; n < r.length; n += 1) {
                      var o = r[n],
                        l =
                          (s +
                            (a.centeredSlides ? t.minTranslate() : 0) -
                            o.swiperSlideOffset) /
                          (o.swiperSlideSize + a.spaceBetween);
                      if (
                        a.watchSlidesVisibility ||
                        (a.centeredSlides && a.autoHeight)
                      ) {
                        var c = -(s - o.swiperSlideOffset),
                          d = c + t.slidesSizesGrid[n];
                        ((c >= 0 && c < t.size - 1) ||
                          (d > 1 && d <= t.size) ||
                          (c <= 0 && d >= t.size)) &&
                          (t.visibleSlides.push(o),
                          t.visibleSlidesIndexes.push(n),
                          r.eq(n).addClass(a.slideVisibleClass));
                      }
                      o.progress = i ? -l : l;
                    }
                    t.visibleSlides = g(t.visibleSlides);
                  }
                },
                updateProgress: function (e) {
                  var t = this;
                  if (void 0 === e) {
                    var a = t.rtlTranslate ? -1 : 1;
                    e = (t && t.translate && t.translate * a) || 0;
                  }
                  var r = t.params,
                    i = t.maxTranslate() - t.minTranslate(),
                    s = t.progress,
                    n = t.isBeginning,
                    o = t.isEnd,
                    l = n,
                    c = o;
                  0 === i
                    ? ((s = 0), (n = !0), (o = !0))
                    : ((n = (s = (e - t.minTranslate()) / i) <= 0),
                      (o = s >= 1)),
                    T(t, { progress: s, isBeginning: n, isEnd: o }),
                    (r.watchSlidesProgress ||
                      r.watchSlidesVisibility ||
                      (r.centeredSlides && r.autoHeight)) &&
                      t.updateSlidesProgress(e),
                    n && !l && t.emit('reachBeginning toEdge'),
                    o && !c && t.emit('reachEnd toEdge'),
                    ((l && !n) || (c && !o)) && t.emit('fromEdge'),
                    t.emit('progress', s);
                },
                updateSlidesClasses: function () {
                  var e,
                    t = this,
                    a = t.slides,
                    r = t.params,
                    i = t.$wrapperEl,
                    s = t.activeIndex,
                    n = t.realIndex,
                    o = t.virtual && r.virtual.enabled;
                  a.removeClass(
                    r.slideActiveClass +
                      ' ' +
                      r.slideNextClass +
                      ' ' +
                      r.slidePrevClass +
                      ' ' +
                      r.slideDuplicateActiveClass +
                      ' ' +
                      r.slideDuplicateNextClass +
                      ' ' +
                      r.slideDuplicatePrevClass
                  ),
                    (e = o
                      ? t.$wrapperEl.find(
                          '.' +
                            r.slideClass +
                            '[data-swiper-slide-index="' +
                            s +
                            '"]'
                        )
                      : a.eq(s)).addClass(r.slideActiveClass),
                    r.loop &&
                      (e.hasClass(r.slideDuplicateClass)
                        ? i
                            .children(
                              '.' +
                                r.slideClass +
                                ':not(.' +
                                r.slideDuplicateClass +
                                ')[data-swiper-slide-index="' +
                                n +
                                '"]'
                            )
                            .addClass(r.slideDuplicateActiveClass)
                        : i
                            .children(
                              '.' +
                                r.slideClass +
                                '.' +
                                r.slideDuplicateClass +
                                '[data-swiper-slide-index="' +
                                n +
                                '"]'
                            )
                            .addClass(r.slideDuplicateActiveClass));
                  var l = e
                    .nextAll('.' + r.slideClass)
                    .eq(0)
                    .addClass(r.slideNextClass);
                  r.loop &&
                    0 === l.length &&
                    (l = a.eq(0)).addClass(r.slideNextClass);
                  var c = e
                    .prevAll('.' + r.slideClass)
                    .eq(0)
                    .addClass(r.slidePrevClass);
                  r.loop &&
                    0 === c.length &&
                    (c = a.eq(-1)).addClass(r.slidePrevClass),
                    r.loop &&
                      (l.hasClass(r.slideDuplicateClass)
                        ? i
                            .children(
                              '.' +
                                r.slideClass +
                                ':not(.' +
                                r.slideDuplicateClass +
                                ')[data-swiper-slide-index="' +
                                l.attr('data-swiper-slide-index') +
                                '"]'
                            )
                            .addClass(r.slideDuplicateNextClass)
                        : i
                            .children(
                              '.' +
                                r.slideClass +
                                '.' +
                                r.slideDuplicateClass +
                                '[data-swiper-slide-index="' +
                                l.attr('data-swiper-slide-index') +
                                '"]'
                            )
                            .addClass(r.slideDuplicateNextClass),
                      c.hasClass(r.slideDuplicateClass)
                        ? i
                            .children(
                              '.' +
                                r.slideClass +
                                ':not(.' +
                                r.slideDuplicateClass +
                                ')[data-swiper-slide-index="' +
                                c.attr('data-swiper-slide-index') +
                                '"]'
                            )
                            .addClass(r.slideDuplicatePrevClass)
                        : i
                            .children(
                              '.' +
                                r.slideClass +
                                '.' +
                                r.slideDuplicateClass +
                                '[data-swiper-slide-index="' +
                                c.attr('data-swiper-slide-index') +
                                '"]'
                            )
                            .addClass(r.slideDuplicatePrevClass)),
                    t.emitSlidesClasses();
                },
                updateActiveIndex: function (e) {
                  var t,
                    a = this,
                    r = a.rtlTranslate ? a.translate : -a.translate,
                    i = a.slidesGrid,
                    s = a.snapGrid,
                    n = a.params,
                    o = a.activeIndex,
                    l = a.realIndex,
                    c = a.snapIndex,
                    d = e;
                  if (void 0 === d) {
                    for (var u = 0; u < i.length; u += 1)
                      void 0 !== i[u + 1]
                        ? r >= i[u] && r < i[u + 1] - (i[u + 1] - i[u]) / 2
                          ? (d = u)
                          : r >= i[u] && r < i[u + 1] && (d = u + 1)
                        : r >= i[u] && (d = u);
                    n.normalizeSlideIndex && (d < 0 || void 0 === d) && (d = 0);
                  }
                  if (s.indexOf(r) >= 0) t = s.indexOf(r);
                  else {
                    var p = Math.min(n.slidesPerGroupSkip, d);
                    t = p + Math.floor((d - p) / n.slidesPerGroup);
                  }
                  if ((t >= s.length && (t = s.length - 1), d !== o)) {
                    var m = parseInt(
                      a.slides.eq(d).attr('data-swiper-slide-index') || d,
                      10
                    );
                    T(a, {
                      snapIndex: t,
                      realIndex: m,
                      previousIndex: o,
                      activeIndex: d,
                    }),
                      a.emit('activeIndexChange'),
                      a.emit('snapIndexChange'),
                      l !== m && a.emit('realIndexChange'),
                      (a.initialized || a.params.runCallbacksOnInit) &&
                        a.emit('slideChange');
                  } else
                    t !== c && ((a.snapIndex = t), a.emit('snapIndexChange'));
                },
                updateClickedSlide: function (e) {
                  var t,
                    a = this,
                    r = a.params,
                    i = g(e.target).closest('.' + r.slideClass)[0],
                    s = !1;
                  if (i)
                    for (var n = 0; n < a.slides.length; n += 1)
                      if (a.slides[n] === i) {
                        (s = !0), (t = n);
                        break;
                      }
                  if (!i || !s)
                    return (
                      (a.clickedSlide = void 0), void (a.clickedIndex = void 0)
                    );
                  (a.clickedSlide = i),
                    a.virtual && a.params.virtual.enabled
                      ? (a.clickedIndex = parseInt(
                          g(i).attr('data-swiper-slide-index'),
                          10
                        ))
                      : (a.clickedIndex = t),
                    r.slideToClickedSlide &&
                      void 0 !== a.clickedIndex &&
                      a.clickedIndex !== a.activeIndex &&
                      a.slideToClickedSlide();
                },
              },
              translate: {
                getTranslate: function (e) {
                  void 0 === e && (e = this.isHorizontal() ? 'x' : 'y');
                  var t = this,
                    a = t.params,
                    r = t.rtlTranslate,
                    i = t.translate,
                    s = t.$wrapperEl;
                  if (a.virtualTranslate) return r ? -i : i;
                  if (a.cssMode) return i;
                  var n = x(s[0], e);
                  return r && (n = -n), n || 0;
                },
                setTranslate: function (e, t) {
                  var a = this,
                    r = a.rtlTranslate,
                    i = a.params,
                    s = a.$wrapperEl,
                    n = a.wrapperEl,
                    o = a.progress,
                    l = 0,
                    c = 0;
                  a.isHorizontal() ? (l = r ? -e : e) : (c = e),
                    i.roundLengths &&
                      ((l = Math.floor(l)), (c = Math.floor(c))),
                    i.cssMode
                      ? (n[a.isHorizontal() ? 'scrollLeft' : 'scrollTop'] =
                          a.isHorizontal() ? -l : -c)
                      : i.virtualTranslate ||
                        s.transform(
                          'translate3d(' + l + 'px, ' + c + 'px, 0px)'
                        ),
                    (a.previousTranslate = a.translate),
                    (a.translate = a.isHorizontal() ? l : c);
                  var d = a.maxTranslate() - a.minTranslate();
                  (0 === d ? 0 : (e - a.minTranslate()) / d) !== o &&
                    a.updateProgress(e),
                    a.emit('setTranslate', a.translate, t);
                },
                minTranslate: function () {
                  return -this.snapGrid[0];
                },
                maxTranslate: function () {
                  return -this.snapGrid[this.snapGrid.length - 1];
                },
                translateTo: function (e, t, a, r, i) {
                  void 0 === e && (e = 0),
                    void 0 === t && (t = this.params.speed),
                    void 0 === a && (a = !0),
                    void 0 === r && (r = !0);
                  var s = this,
                    n = s.params,
                    o = s.wrapperEl;
                  if (s.animating && n.preventInteractionOnTransition)
                    return !1;
                  var l,
                    c = s.minTranslate(),
                    d = s.maxTranslate();
                  if (
                    ((l = r && e > c ? c : r && e < d ? d : e),
                    s.updateProgress(l),
                    n.cssMode)
                  ) {
                    var u,
                      p = s.isHorizontal();
                    return (
                      0 === t
                        ? (o[p ? 'scrollLeft' : 'scrollTop'] = -l)
                        : o.scrollTo
                        ? o.scrollTo(
                            (((u = {})[p ? 'left' : 'top'] = -l),
                            (u.behavior = 'smooth'),
                            u)
                          )
                        : (o[p ? 'scrollLeft' : 'scrollTop'] = -l),
                      !0
                    );
                  }
                  return (
                    0 === t
                      ? (s.setTransition(0),
                        s.setTranslate(l),
                        a &&
                          (s.emit('beforeTransitionStart', t, i),
                          s.emit('transitionEnd')))
                      : (s.setTransition(t),
                        s.setTranslate(l),
                        a &&
                          (s.emit('beforeTransitionStart', t, i),
                          s.emit('transitionStart')),
                        s.animating ||
                          ((s.animating = !0),
                          s.onTranslateToWrapperTransitionEnd ||
                            (s.onTranslateToWrapperTransitionEnd = function (
                              e
                            ) {
                              s &&
                                !s.destroyed &&
                                e.target === this &&
                                (s.$wrapperEl[0].removeEventListener(
                                  'transitionend',
                                  s.onTranslateToWrapperTransitionEnd
                                ),
                                s.$wrapperEl[0].removeEventListener(
                                  'webkitTransitionEnd',
                                  s.onTranslateToWrapperTransitionEnd
                                ),
                                (s.onTranslateToWrapperTransitionEnd = null),
                                delete s.onTranslateToWrapperTransitionEnd,
                                a && s.emit('transitionEnd'));
                            }),
                          s.$wrapperEl[0].addEventListener(
                            'transitionend',
                            s.onTranslateToWrapperTransitionEnd
                          ),
                          s.$wrapperEl[0].addEventListener(
                            'webkitTransitionEnd',
                            s.onTranslateToWrapperTransitionEnd
                          ))),
                    !0
                  );
                },
              },
              transition: {
                setTransition: function (e, t) {
                  var a = this;
                  a.params.cssMode || a.$wrapperEl.transition(e),
                    a.emit('setTransition', e, t);
                },
                transitionStart: function (e, t) {
                  void 0 === e && (e = !0);
                  var a = this,
                    r = a.activeIndex,
                    i = a.params,
                    s = a.previousIndex;
                  if (!i.cssMode) {
                    i.autoHeight && a.updateAutoHeight();
                    var n = t;
                    if (
                      (n || (n = r > s ? 'next' : r < s ? 'prev' : 'reset'),
                      a.emit('transitionStart'),
                      e && r !== s)
                    ) {
                      if ('reset' === n)
                        return void a.emit('slideResetTransitionStart');
                      a.emit('slideChangeTransitionStart'),
                        'next' === n
                          ? a.emit('slideNextTransitionStart')
                          : a.emit('slidePrevTransitionStart');
                    }
                  }
                },
                transitionEnd: function (e, t) {
                  void 0 === e && (e = !0);
                  var a = this,
                    r = a.activeIndex,
                    i = a.previousIndex,
                    s = a.params;
                  if (((a.animating = !1), !s.cssMode)) {
                    a.setTransition(0);
                    var n = t;
                    if (
                      (n || (n = r > i ? 'next' : r < i ? 'prev' : 'reset'),
                      a.emit('transitionEnd'),
                      e && r !== i)
                    ) {
                      if ('reset' === n)
                        return void a.emit('slideResetTransitionEnd');
                      a.emit('slideChangeTransitionEnd'),
                        'next' === n
                          ? a.emit('slideNextTransitionEnd')
                          : a.emit('slidePrevTransitionEnd');
                    }
                  }
                },
              },
              slide: {
                slideTo: function (e, t, a, r, i) {
                  if (
                    (void 0 === e && (e = 0),
                    void 0 === t && (t = this.params.speed),
                    void 0 === a && (a = !0),
                    'number' != typeof e && 'string' != typeof e)
                  )
                    throw new Error(
                      "The 'index' argument cannot have type other than 'number' or 'string'. [" +
                        typeof e +
                        '] given.'
                    );
                  if ('string' == typeof e) {
                    var s = parseInt(e, 10);
                    if (!isFinite(s))
                      throw new Error(
                        "The passed-in 'index' (string) couldn't be converted to 'number'. [" +
                          e +
                          '] given.'
                      );
                    e = s;
                  }
                  var n = this,
                    o = e;
                  o < 0 && (o = 0);
                  var l = n.params,
                    c = n.snapGrid,
                    d = n.slidesGrid,
                    u = n.previousIndex,
                    p = n.activeIndex,
                    m = n.rtlTranslate,
                    f = n.wrapperEl,
                    h = n.enabled;
                  if (
                    (n.animating && l.preventInteractionOnTransition) ||
                    (!h && !r && !i)
                  )
                    return !1;
                  var g = Math.min(n.params.slidesPerGroupSkip, o),
                    v = g + Math.floor((o - g) / n.params.slidesPerGroup);
                  v >= c.length && (v = c.length - 1),
                    (p || l.initialSlide || 0) === (u || 0) &&
                      a &&
                      n.emit('beforeSlideChangeStart');
                  var b,
                    y = -c[v];
                  if ((n.updateProgress(y), l.normalizeSlideIndex))
                    for (var w = 0; w < d.length; w += 1) {
                      var E = -Math.floor(100 * y),
                        S = Math.floor(100 * d[w]),
                        x = Math.floor(100 * d[w + 1]);
                      void 0 !== d[w + 1]
                        ? E >= S && E < x - (x - S) / 2
                          ? (o = w)
                          : E >= S && E < x && (o = w + 1)
                        : E >= S && (o = w);
                    }
                  if (n.initialized && o !== p) {
                    if (
                      !n.allowSlideNext &&
                      y < n.translate &&
                      y < n.minTranslate()
                    )
                      return !1;
                    if (
                      !n.allowSlidePrev &&
                      y > n.translate &&
                      y > n.maxTranslate() &&
                      (p || 0) !== o
                    )
                      return !1;
                  }
                  if (
                    ((b = o > p ? 'next' : o < p ? 'prev' : 'reset'),
                    (m && -y === n.translate) || (!m && y === n.translate))
                  )
                    return (
                      n.updateActiveIndex(o),
                      l.autoHeight && n.updateAutoHeight(),
                      n.updateSlidesClasses(),
                      'slide' !== l.effect && n.setTranslate(y),
                      'reset' !== b &&
                        (n.transitionStart(a, b), n.transitionEnd(a, b)),
                      !1
                    );
                  if (l.cssMode) {
                    var C,
                      T = n.isHorizontal(),
                      k = -y;
                    return (
                      m && (k = f.scrollWidth - f.offsetWidth - k),
                      0 === t
                        ? (f[T ? 'scrollLeft' : 'scrollTop'] = k)
                        : f.scrollTo
                        ? f.scrollTo(
                            (((C = {})[T ? 'left' : 'top'] = k),
                            (C.behavior = 'smooth'),
                            C)
                          )
                        : (f[T ? 'scrollLeft' : 'scrollTop'] = k),
                      !0
                    );
                  }
                  return (
                    0 === t
                      ? (n.setTransition(0),
                        n.setTranslate(y),
                        n.updateActiveIndex(o),
                        n.updateSlidesClasses(),
                        n.emit('beforeTransitionStart', t, r),
                        n.transitionStart(a, b),
                        n.transitionEnd(a, b))
                      : (n.setTransition(t),
                        n.setTranslate(y),
                        n.updateActiveIndex(o),
                        n.updateSlidesClasses(),
                        n.emit('beforeTransitionStart', t, r),
                        n.transitionStart(a, b),
                        n.animating ||
                          ((n.animating = !0),
                          n.onSlideToWrapperTransitionEnd ||
                            (n.onSlideToWrapperTransitionEnd = function (e) {
                              n &&
                                !n.destroyed &&
                                e.target === this &&
                                (n.$wrapperEl[0].removeEventListener(
                                  'transitionend',
                                  n.onSlideToWrapperTransitionEnd
                                ),
                                n.$wrapperEl[0].removeEventListener(
                                  'webkitTransitionEnd',
                                  n.onSlideToWrapperTransitionEnd
                                ),
                                (n.onSlideToWrapperTransitionEnd = null),
                                delete n.onSlideToWrapperTransitionEnd,
                                n.transitionEnd(a, b));
                            }),
                          n.$wrapperEl[0].addEventListener(
                            'transitionend',
                            n.onSlideToWrapperTransitionEnd
                          ),
                          n.$wrapperEl[0].addEventListener(
                            'webkitTransitionEnd',
                            n.onSlideToWrapperTransitionEnd
                          ))),
                    !0
                  );
                },
                slideToLoop: function (e, t, a, r) {
                  void 0 === e && (e = 0),
                    void 0 === t && (t = this.params.speed),
                    void 0 === a && (a = !0);
                  var i = this,
                    s = e;
                  return (
                    i.params.loop && (s += i.loopedSlides),
                    i.slideTo(s, t, a, r)
                  );
                },
                slideNext: function (e, t, a) {
                  void 0 === e && (e = this.params.speed),
                    void 0 === t && (t = !0);
                  var r = this,
                    i = r.params,
                    s = r.animating;
                  if (!r.enabled) return r;
                  var n =
                    r.activeIndex < i.slidesPerGroupSkip ? 1 : i.slidesPerGroup;
                  if (i.loop) {
                    if (s && i.loopPreventsSlide) return !1;
                    r.loopFix(), (r._clientLeft = r.$wrapperEl[0].clientLeft);
                  }
                  return r.slideTo(r.activeIndex + n, e, t, a);
                },
                slidePrev: function (e, t, a) {
                  void 0 === e && (e = this.params.speed),
                    void 0 === t && (t = !0);
                  var r = this,
                    i = r.params,
                    s = r.animating,
                    n = r.snapGrid,
                    o = r.slidesGrid,
                    l = r.rtlTranslate;
                  if (!r.enabled) return r;
                  if (i.loop) {
                    if (s && i.loopPreventsSlide) return !1;
                    r.loopFix(), (r._clientLeft = r.$wrapperEl[0].clientLeft);
                  }
                  function c(e) {
                    return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e);
                  }
                  var d,
                    u = c(l ? r.translate : -r.translate),
                    p = n.map(function (e) {
                      return c(e);
                    }),
                    m = n[p.indexOf(u) - 1];
                  return (
                    void 0 === m &&
                      i.cssMode &&
                      n.forEach(function (e) {
                        !m && u >= e && (m = e);
                      }),
                    void 0 !== m &&
                      (d = o.indexOf(m)) < 0 &&
                      (d = r.activeIndex - 1),
                    r.slideTo(d, e, t, a)
                  );
                },
                slideReset: function (e, t, a) {
                  return (
                    void 0 === e && (e = this.params.speed),
                    void 0 === t && (t = !0),
                    this.slideTo(this.activeIndex, e, t, a)
                  );
                },
                slideToClosest: function (e, t, a, r) {
                  void 0 === e && (e = this.params.speed),
                    void 0 === t && (t = !0),
                    void 0 === r && (r = 0.5);
                  var i = this,
                    s = i.activeIndex,
                    n = Math.min(i.params.slidesPerGroupSkip, s),
                    o = n + Math.floor((s - n) / i.params.slidesPerGroup),
                    l = i.rtlTranslate ? i.translate : -i.translate;
                  if (l >= i.snapGrid[o]) {
                    var c = i.snapGrid[o];
                    l - c > (i.snapGrid[o + 1] - c) * r &&
                      (s += i.params.slidesPerGroup);
                  } else {
                    var d = i.snapGrid[o - 1];
                    l - d <= (i.snapGrid[o] - d) * r &&
                      (s -= i.params.slidesPerGroup);
                  }
                  return (
                    (s = Math.max(s, 0)),
                    (s = Math.min(s, i.slidesGrid.length - 1)),
                    i.slideTo(s, e, t, a)
                  );
                },
                slideToClickedSlide: function () {
                  var e,
                    t = this,
                    a = t.params,
                    r = t.$wrapperEl,
                    i =
                      'auto' === a.slidesPerView
                        ? t.slidesPerViewDynamic()
                        : a.slidesPerView,
                    s = t.clickedIndex;
                  if (a.loop) {
                    if (t.animating) return;
                    (e = parseInt(
                      g(t.clickedSlide).attr('data-swiper-slide-index'),
                      10
                    )),
                      a.centeredSlides
                        ? s < t.loopedSlides - i / 2 ||
                          s > t.slides.length - t.loopedSlides + i / 2
                          ? (t.loopFix(),
                            (s = r
                              .children(
                                '.' +
                                  a.slideClass +
                                  '[data-swiper-slide-index="' +
                                  e +
                                  '"]:not(.' +
                                  a.slideDuplicateClass +
                                  ')'
                              )
                              .eq(0)
                              .index()),
                            E(function () {
                              t.slideTo(s);
                            }))
                          : t.slideTo(s)
                        : s > t.slides.length - i
                        ? (t.loopFix(),
                          (s = r
                            .children(
                              '.' +
                                a.slideClass +
                                '[data-swiper-slide-index="' +
                                e +
                                '"]:not(.' +
                                a.slideDuplicateClass +
                                ')'
                            )
                            .eq(0)
                            .index()),
                          E(function () {
                            t.slideTo(s);
                          }))
                        : t.slideTo(s);
                  } else t.slideTo(s);
                },
              },
              loop: {
                loopCreate: function () {
                  var e = this,
                    t = s(),
                    a = e.params,
                    r = e.$wrapperEl;
                  r.children(
                    '.' + a.slideClass + '.' + a.slideDuplicateClass
                  ).remove();
                  var i = r.children('.' + a.slideClass);
                  if (a.loopFillGroupWithBlank) {
                    var n = a.slidesPerGroup - (i.length % a.slidesPerGroup);
                    if (n !== a.slidesPerGroup) {
                      for (var o = 0; o < n; o += 1) {
                        var l = g(t.createElement('div')).addClass(
                          a.slideClass + ' ' + a.slideBlankClass
                        );
                        r.append(l);
                      }
                      i = r.children('.' + a.slideClass);
                    }
                  }
                  'auto' !== a.slidesPerView ||
                    a.loopedSlides ||
                    (a.loopedSlides = i.length),
                    (e.loopedSlides = Math.ceil(
                      parseFloat(a.loopedSlides || a.slidesPerView, 10)
                    )),
                    (e.loopedSlides += a.loopAdditionalSlides),
                    e.loopedSlides > i.length && (e.loopedSlides = i.length);
                  var c = [],
                    d = [];
                  i.each(function (t, a) {
                    var r = g(t);
                    a < e.loopedSlides && d.push(t),
                      a < i.length &&
                        a >= i.length - e.loopedSlides &&
                        c.push(t),
                      r.attr('data-swiper-slide-index', a);
                  });
                  for (var u = 0; u < d.length; u += 1)
                    r.append(
                      g(d[u].cloneNode(!0)).addClass(a.slideDuplicateClass)
                    );
                  for (var p = c.length - 1; p >= 0; p -= 1)
                    r.prepend(
                      g(c[p].cloneNode(!0)).addClass(a.slideDuplicateClass)
                    );
                },
                loopFix: function () {
                  var e = this;
                  e.emit('beforeLoopFix');
                  var t,
                    a = e.activeIndex,
                    r = e.slides,
                    i = e.loopedSlides,
                    s = e.allowSlidePrev,
                    n = e.allowSlideNext,
                    o = e.snapGrid,
                    l = e.rtlTranslate;
                  (e.allowSlidePrev = !0), (e.allowSlideNext = !0);
                  var c = -o[a] - e.getTranslate();
                  a < i
                    ? ((t = r.length - 3 * i + a),
                      (t += i),
                      e.slideTo(t, 0, !1, !0) &&
                        0 !== c &&
                        e.setTranslate((l ? -e.translate : e.translate) - c))
                    : a >= r.length - i &&
                      ((t = -r.length + a + i),
                      (t += i),
                      e.slideTo(t, 0, !1, !0) &&
                        0 !== c &&
                        e.setTranslate((l ? -e.translate : e.translate) - c)),
                    (e.allowSlidePrev = s),
                    (e.allowSlideNext = n),
                    e.emit('loopFix');
                },
                loopDestroy: function () {
                  var e = this,
                    t = e.$wrapperEl,
                    a = e.params,
                    r = e.slides;
                  t
                    .children(
                      '.' +
                        a.slideClass +
                        '.' +
                        a.slideDuplicateClass +
                        ',.' +
                        a.slideClass +
                        '.' +
                        a.slideBlankClass
                    )
                    .remove(),
                    r.removeAttr('data-swiper-slide-index');
                },
              },
              grabCursor: {
                setGrabCursor: function (e) {
                  var t = this;
                  if (
                    !(
                      t.support.touch ||
                      !t.params.simulateTouch ||
                      (t.params.watchOverflow && t.isLocked) ||
                      t.params.cssMode
                    )
                  ) {
                    var a = t.el;
                    (a.style.cursor = 'move'),
                      (a.style.cursor = e
                        ? '-webkit-grabbing'
                        : '-webkit-grab'),
                      (a.style.cursor = e ? '-moz-grabbin' : '-moz-grab'),
                      (a.style.cursor = e ? 'grabbing' : 'grab');
                  }
                },
                unsetGrabCursor: function () {
                  var e = this;
                  e.support.touch ||
                    (e.params.watchOverflow && e.isLocked) ||
                    e.params.cssMode ||
                    (e.el.style.cursor = '');
                },
              },
              manipulation: {
                appendSlide: function (e) {
                  var t = this,
                    a = t.$wrapperEl,
                    r = t.params;
                  if (
                    (r.loop && t.loopDestroy(),
                    'object' == typeof e && 'length' in e)
                  )
                    for (var i = 0; i < e.length; i += 1)
                      e[i] && a.append(e[i]);
                  else a.append(e);
                  r.loop && t.loopCreate(),
                    (r.observer && t.support.observer) || t.update();
                },
                prependSlide: function (e) {
                  var t = this,
                    a = t.params,
                    r = t.$wrapperEl,
                    i = t.activeIndex;
                  a.loop && t.loopDestroy();
                  var s = i + 1;
                  if ('object' == typeof e && 'length' in e) {
                    for (var n = 0; n < e.length; n += 1)
                      e[n] && r.prepend(e[n]);
                    s = i + e.length;
                  } else r.prepend(e);
                  a.loop && t.loopCreate(),
                    (a.observer && t.support.observer) || t.update(),
                    t.slideTo(s, 0, !1);
                },
                addSlide: function (e, t) {
                  var a = this,
                    r = a.$wrapperEl,
                    i = a.params,
                    s = a.activeIndex;
                  i.loop &&
                    ((s -= a.loopedSlides),
                    a.loopDestroy(),
                    (a.slides = r.children('.' + i.slideClass)));
                  var n = a.slides.length;
                  if (e <= 0) a.prependSlide(t);
                  else if (e >= n) a.appendSlide(t);
                  else {
                    for (
                      var o = s > e ? s + 1 : s, l = [], c = n - 1;
                      c >= e;
                      c -= 1
                    ) {
                      var d = a.slides.eq(c);
                      d.remove(), l.unshift(d);
                    }
                    if ('object' == typeof t && 'length' in t) {
                      for (var u = 0; u < t.length; u += 1)
                        t[u] && r.append(t[u]);
                      o = s > e ? s + t.length : s;
                    } else r.append(t);
                    for (var p = 0; p < l.length; p += 1) r.append(l[p]);
                    i.loop && a.loopCreate(),
                      (i.observer && a.support.observer) || a.update(),
                      i.loop
                        ? a.slideTo(o + a.loopedSlides, 0, !1)
                        : a.slideTo(o, 0, !1);
                  }
                },
                removeSlide: function (e) {
                  var t = this,
                    a = t.params,
                    r = t.$wrapperEl,
                    i = t.activeIndex;
                  a.loop &&
                    ((i -= t.loopedSlides),
                    t.loopDestroy(),
                    (t.slides = r.children('.' + a.slideClass)));
                  var s,
                    n = i;
                  if ('object' == typeof e && 'length' in e) {
                    for (var o = 0; o < e.length; o += 1)
                      (s = e[o]),
                        t.slides[s] && t.slides.eq(s).remove(),
                        s < n && (n -= 1);
                    n = Math.max(n, 0);
                  } else
                    (s = e),
                      t.slides[s] && t.slides.eq(s).remove(),
                      s < n && (n -= 1),
                      (n = Math.max(n, 0));
                  a.loop && t.loopCreate(),
                    (a.observer && t.support.observer) || t.update(),
                    a.loop
                      ? t.slideTo(n + t.loopedSlides, 0, !1)
                      : t.slideTo(n, 0, !1);
                },
                removeAllSlides: function () {
                  for (var e = [], t = 0; t < this.slides.length; t += 1)
                    e.push(t);
                  this.removeSlide(e);
                },
              },
              events: {
                attachEvents: function () {
                  var e = this,
                    t = s(),
                    a = e.params,
                    r = e.touchEvents,
                    i = e.el,
                    n = e.wrapperEl,
                    o = e.device,
                    l = e.support;
                  (e.onTouchStart = q.bind(e)),
                    (e.onTouchMove = I.bind(e)),
                    (e.onTouchEnd = O.bind(e)),
                    a.cssMode && (e.onScroll = R.bind(e)),
                    (e.onClick = j.bind(e));
                  var c = !!a.nested;
                  if (!l.touch && l.pointerEvents)
                    i.addEventListener(r.start, e.onTouchStart, !1),
                      t.addEventListener(r.move, e.onTouchMove, c),
                      t.addEventListener(r.end, e.onTouchEnd, !1);
                  else {
                    if (l.touch) {
                      var d = !(
                        'touchstart' !== r.start ||
                        !l.passiveListener ||
                        !a.passiveListeners
                      ) && { passive: !0, capture: !1 };
                      i.addEventListener(r.start, e.onTouchStart, d),
                        i.addEventListener(
                          r.move,
                          e.onTouchMove,
                          l.passiveListener ? { passive: !1, capture: c } : c
                        ),
                        i.addEventListener(r.end, e.onTouchEnd, d),
                        r.cancel &&
                          i.addEventListener(r.cancel, e.onTouchEnd, d),
                        D || (t.addEventListener('touchstart', H), (D = !0));
                    }
                    ((a.simulateTouch && !o.ios && !o.android) ||
                      (a.simulateTouch && !l.touch && o.ios)) &&
                      (i.addEventListener('mousedown', e.onTouchStart, !1),
                      t.addEventListener('mousemove', e.onTouchMove, c),
                      t.addEventListener('mouseup', e.onTouchEnd, !1));
                  }
                  (a.preventClicks || a.preventClicksPropagation) &&
                    i.addEventListener('click', e.onClick, !0),
                    a.cssMode && n.addEventListener('scroll', e.onScroll),
                    a.updateOnWindowResize
                      ? e.on(
                          o.ios || o.android
                            ? 'resize orientationchange observerUpdate'
                            : 'resize observerUpdate',
                          B,
                          !0
                        )
                      : e.on('observerUpdate', B, !0);
                },
                detachEvents: function () {
                  var e = this,
                    t = s(),
                    a = e.params,
                    r = e.touchEvents,
                    i = e.el,
                    n = e.wrapperEl,
                    o = e.device,
                    l = e.support,
                    c = !!a.nested;
                  if (!l.touch && l.pointerEvents)
                    i.removeEventListener(r.start, e.onTouchStart, !1),
                      t.removeEventListener(r.move, e.onTouchMove, c),
                      t.removeEventListener(r.end, e.onTouchEnd, !1);
                  else {
                    if (l.touch) {
                      var d = !(
                        'onTouchStart' !== r.start ||
                        !l.passiveListener ||
                        !a.passiveListeners
                      ) && { passive: !0, capture: !1 };
                      i.removeEventListener(r.start, e.onTouchStart, d),
                        i.removeEventListener(r.move, e.onTouchMove, c),
                        i.removeEventListener(r.end, e.onTouchEnd, d),
                        r.cancel &&
                          i.removeEventListener(r.cancel, e.onTouchEnd, d);
                    }
                    ((a.simulateTouch && !o.ios && !o.android) ||
                      (a.simulateTouch && !l.touch && o.ios)) &&
                      (i.removeEventListener('mousedown', e.onTouchStart, !1),
                      t.removeEventListener('mousemove', e.onTouchMove, c),
                      t.removeEventListener('mouseup', e.onTouchEnd, !1));
                  }
                  (a.preventClicks || a.preventClicksPropagation) &&
                    i.removeEventListener('click', e.onClick, !0),
                    a.cssMode && n.removeEventListener('scroll', e.onScroll),
                    e.off(
                      o.ios || o.android
                        ? 'resize orientationchange observerUpdate'
                        : 'resize observerUpdate',
                      B
                    );
                },
              },
              breakpoints: {
                setBreakpoint: function () {
                  var e = this,
                    t = e.activeIndex,
                    a = e.initialized,
                    r = e.loopedSlides,
                    i = void 0 === r ? 0 : r,
                    s = e.params,
                    n = e.$el,
                    o = s.breakpoints;
                  if (o && (!o || 0 !== Object.keys(o).length)) {
                    var l = e.getBreakpoint(o, e.params.breakpointsBase, e.el);
                    if (l && e.currentBreakpoint !== l) {
                      var c = l in o ? o[l] : void 0;
                      c &&
                        [
                          'slidesPerView',
                          'spaceBetween',
                          'slidesPerGroup',
                          'slidesPerGroupSkip',
                          'slidesPerColumn',
                        ].forEach(function (e) {
                          var t = c[e];
                          void 0 !== t &&
                            (c[e] =
                              'slidesPerView' !== e ||
                              ('AUTO' !== t && 'auto' !== t)
                                ? 'slidesPerView' === e
                                  ? parseFloat(t)
                                  : parseInt(t, 10)
                                : 'auto');
                        });
                      var d = c || e.originalParams,
                        u = s.slidesPerColumn > 1,
                        p = d.slidesPerColumn > 1,
                        m = s.enabled;
                      u && !p
                        ? (n.removeClass(
                            s.containerModifierClass +
                              'multirow ' +
                              s.containerModifierClass +
                              'multirow-column'
                          ),
                          e.emitContainerClasses())
                        : !u &&
                          p &&
                          (n.addClass(s.containerModifierClass + 'multirow'),
                          'column' === d.slidesPerColumnFill &&
                            n.addClass(
                              s.containerModifierClass + 'multirow-column'
                            ),
                          e.emitContainerClasses());
                      var f = d.direction && d.direction !== s.direction,
                        h =
                          s.loop && (d.slidesPerView !== s.slidesPerView || f);
                      f && a && e.changeDirection(), T(e.params, d);
                      var g = e.params.enabled;
                      T(e, {
                        allowTouchMove: e.params.allowTouchMove,
                        allowSlideNext: e.params.allowSlideNext,
                        allowSlidePrev: e.params.allowSlidePrev,
                      }),
                        m && !g ? e.disable() : !m && g && e.enable(),
                        (e.currentBreakpoint = l),
                        e.emit('_beforeBreakpoint', d),
                        h &&
                          a &&
                          (e.loopDestroy(),
                          e.loopCreate(),
                          e.updateSlides(),
                          e.slideTo(t - i + e.loopedSlides, 0, !1)),
                        e.emit('breakpoint', d);
                    }
                  }
                },
                getBreakpoint: function (e, t, a) {
                  if (
                    (void 0 === t && (t = 'window'),
                    e && ('container' !== t || a))
                  ) {
                    var r = !1,
                      i = o(),
                      s = 'window' === t ? i.innerHeight : a.clientHeight,
                      n = Object.keys(e).map(function (e) {
                        if ('string' == typeof e && 0 === e.indexOf('@')) {
                          var t = parseFloat(e.substr(1));
                          return { value: s * t, point: e };
                        }
                        return { value: e, point: e };
                      });
                    n.sort(function (e, t) {
                      return parseInt(e.value, 10) - parseInt(t.value, 10);
                    });
                    for (var l = 0; l < n.length; l += 1) {
                      var c = n[l],
                        d = c.point,
                        u = c.value;
                      'window' === t
                        ? i.matchMedia('(min-width: ' + u + 'px)').matches &&
                          (r = d)
                        : u <= a.clientWidth && (r = d);
                    }
                    return r || 'max';
                  }
                },
              },
              checkOverflow: {
                checkOverflow: function () {
                  var e = this,
                    t = e.params,
                    a = e.isLocked,
                    r =
                      e.slides.length > 0 &&
                      t.slidesOffsetBefore +
                        t.spaceBetween * (e.slides.length - 1) +
                        e.slides[0].offsetWidth * e.slides.length;
                  t.slidesOffsetBefore && t.slidesOffsetAfter && r
                    ? (e.isLocked = r <= e.size)
                    : (e.isLocked = 1 === e.snapGrid.length),
                    (e.allowSlideNext = !e.isLocked),
                    (e.allowSlidePrev = !e.isLocked),
                    a !== e.isLocked && e.emit(e.isLocked ? 'lock' : 'unlock'),
                    a &&
                      a !== e.isLocked &&
                      ((e.isEnd = !1), e.navigation && e.navigation.update());
                },
              },
              classes: {
                addClasses: function () {
                  var e,
                    t,
                    a,
                    r = this,
                    i = r.classNames,
                    s = r.params,
                    n = r.rtl,
                    o = r.$el,
                    l = r.device,
                    c = r.support,
                    d =
                      ((e = [
                        'initialized',
                        s.direction,
                        { 'pointer-events': c.pointerEvents && !c.touch },
                        { 'free-mode': s.freeMode },
                        { autoheight: s.autoHeight },
                        { rtl: n },
                        { multirow: s.slidesPerColumn > 1 },
                        {
                          'multirow-column':
                            s.slidesPerColumn > 1 &&
                            'column' === s.slidesPerColumnFill,
                        },
                        { android: l.android },
                        { ios: l.ios },
                        { 'css-mode': s.cssMode },
                      ]),
                      (t = s.containerModifierClass),
                      (a = []),
                      e.forEach(function (e) {
                        'object' == typeof e
                          ? Object.keys(e).forEach(function (r) {
                              e[r] && a.push(t + r);
                            })
                          : 'string' == typeof e && a.push(t + e);
                      }),
                      a);
                  i.push.apply(i, d),
                    o.addClass([].concat(i).join(' ')),
                    r.emitContainerClasses();
                },
                removeClasses: function () {
                  var e = this,
                    t = e.$el,
                    a = e.classNames;
                  t.removeClass(a.join(' ')), e.emitContainerClasses();
                },
              },
              images: {
                loadImage: function (e, t, a, r, i, s) {
                  var n,
                    l = o();
                  function c() {
                    s && s();
                  }
                  g(e).parent('picture')[0] || (e.complete && i)
                    ? c()
                    : t
                    ? (((n = new l.Image()).onload = c),
                      (n.onerror = c),
                      r && (n.sizes = r),
                      a && (n.srcset = a),
                      t && (n.src = t))
                    : c();
                },
                preloadImages: function () {
                  var e = this;
                  function t() {
                    null != e &&
                      e &&
                      !e.destroyed &&
                      (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1),
                      e.imagesLoaded === e.imagesToLoad.length &&
                        (e.params.updateOnImagesReady && e.update(),
                        e.emit('imagesReady')));
                  }
                  e.imagesToLoad = e.$el.find('img');
                  for (var a = 0; a < e.imagesToLoad.length; a += 1) {
                    var r = e.imagesToLoad[a];
                    e.loadImage(
                      r,
                      r.currentSrc || r.getAttribute('src'),
                      r.srcset || r.getAttribute('srcset'),
                      r.sizes || r.getAttribute('sizes'),
                      !0,
                      t
                    );
                  }
                },
              },
            },
            F = {},
            V = (function () {
              function t() {
                for (
                  var e, a, r = arguments.length, i = new Array(r), s = 0;
                  s < r;
                  s++
                )
                  i[s] = arguments[s];
                if (
                  (1 === i.length &&
                  i[0].constructor &&
                  'Object' === Object.prototype.toString.call(i[0]).slice(8, -1)
                    ? (a = i[0])
                    : ((e = i[0]), (a = i[1])),
                  a || (a = {}),
                  (a = T({}, a)),
                  e && !a.el && (a.el = e),
                  a.el && g(a.el).length > 1)
                ) {
                  var n = [];
                  return (
                    g(a.el).each(function (e) {
                      var r = T({}, a, { el: e });
                      n.push(new t(r));
                    }),
                    n
                  );
                }
                var o = this;
                (o.__swiper__ = !0),
                  (o.support = A()),
                  (o.device = _({ userAgent: a.userAgent })),
                  (o.browser = N()),
                  (o.eventsListeners = {}),
                  (o.eventsAnyListeners = []),
                  void 0 === o.modules && (o.modules = {}),
                  Object.keys(o.modules).forEach(function (e) {
                    var t = o.modules[e];
                    if (t.params) {
                      var r = Object.keys(t.params)[0],
                        i = t.params[r];
                      if ('object' != typeof i || null === i) return;
                      if (
                        (['navigation', 'pagination', 'scrollbar'].indexOf(r) >=
                          0 &&
                          !0 === a[r] &&
                          (a[r] = { auto: !0 }),
                        !(r in a) || !('enabled' in i))
                      )
                        return;
                      !0 === a[r] && (a[r] = { enabled: !0 }),
                        'object' != typeof a[r] ||
                          'enabled' in a[r] ||
                          (a[r].enabled = !0),
                        a[r] || (a[r] = { enabled: !1 });
                    }
                  });
                var l,
                  c,
                  d = T({}, G);
                return (
                  o.useParams(d),
                  (o.params = T({}, d, F, a)),
                  (o.originalParams = T({}, o.params)),
                  (o.passedParams = T({}, a)),
                  o.params &&
                    o.params.on &&
                    Object.keys(o.params.on).forEach(function (e) {
                      o.on(e, o.params.on[e]);
                    }),
                  o.params && o.params.onAny && o.onAny(o.params.onAny),
                  (o.$ = g),
                  T(o, {
                    enabled: o.params.enabled,
                    el: e,
                    classNames: [],
                    slides: g(),
                    slidesGrid: [],
                    snapGrid: [],
                    slidesSizesGrid: [],
                    isHorizontal: function () {
                      return 'horizontal' === o.params.direction;
                    },
                    isVertical: function () {
                      return 'vertical' === o.params.direction;
                    },
                    activeIndex: 0,
                    realIndex: 0,
                    isBeginning: !0,
                    isEnd: !1,
                    translate: 0,
                    previousTranslate: 0,
                    progress: 0,
                    velocity: 0,
                    animating: !1,
                    allowSlideNext: o.params.allowSlideNext,
                    allowSlidePrev: o.params.allowSlidePrev,
                    touchEvents:
                      ((l = [
                        'touchstart',
                        'touchmove',
                        'touchend',
                        'touchcancel',
                      ]),
                      (c = ['mousedown', 'mousemove', 'mouseup']),
                      o.support.pointerEvents &&
                        (c = ['pointerdown', 'pointermove', 'pointerup']),
                      (o.touchEventsTouch = {
                        start: l[0],
                        move: l[1],
                        end: l[2],
                        cancel: l[3],
                      }),
                      (o.touchEventsDesktop = {
                        start: c[0],
                        move: c[1],
                        end: c[2],
                      }),
                      o.support.touch || !o.params.simulateTouch
                        ? o.touchEventsTouch
                        : o.touchEventsDesktop),
                    touchEventsData: {
                      isTouched: void 0,
                      isMoved: void 0,
                      allowTouchCallbacks: void 0,
                      touchStartTime: void 0,
                      isScrolling: void 0,
                      currentTranslate: void 0,
                      startTranslate: void 0,
                      allowThresholdMove: void 0,
                      focusableElements: o.params.focusableElements,
                      lastClickTime: S(),
                      clickTimeout: void 0,
                      velocities: [],
                      allowMomentumBounce: void 0,
                      isTouchEvent: void 0,
                      startMoving: void 0,
                    },
                    allowClick: !0,
                    allowTouchMove: o.params.allowTouchMove,
                    touches: {
                      startX: 0,
                      startY: 0,
                      currentX: 0,
                      currentY: 0,
                      diff: 0,
                    },
                    imagesToLoad: [],
                    imagesLoaded: 0,
                  }),
                  o.useModules(),
                  o.emit('_swiper'),
                  o.params.init && o.init(),
                  o
                );
              }
              var a,
                r,
                i,
                n = t.prototype;
              return (
                (n.enable = function () {
                  var e = this;
                  e.enabled ||
                    ((e.enabled = !0),
                    e.params.grabCursor && e.setGrabCursor(),
                    e.emit('enable'));
                }),
                (n.disable = function () {
                  var e = this;
                  e.enabled &&
                    ((e.enabled = !1),
                    e.params.grabCursor && e.unsetGrabCursor(),
                    e.emit('disable'));
                }),
                (n.setProgress = function (e, t) {
                  var a = this;
                  e = Math.min(Math.max(e, 0), 1);
                  var r = a.minTranslate(),
                    i = (a.maxTranslate() - r) * e + r;
                  a.translateTo(i, void 0 === t ? 0 : t),
                    a.updateActiveIndex(),
                    a.updateSlidesClasses();
                }),
                (n.emitContainerClasses = function () {
                  var e = this;
                  if (e.params._emitClasses && e.el) {
                    var t = e.el.className.split(' ').filter(function (t) {
                      return (
                        0 === t.indexOf('swiper-container') ||
                        0 === t.indexOf(e.params.containerModifierClass)
                      );
                    });
                    e.emit('_containerClasses', t.join(' '));
                  }
                }),
                (n.getSlideClasses = function (e) {
                  var t = this;
                  return e.className
                    .split(' ')
                    .filter(function (e) {
                      return (
                        0 === e.indexOf('swiper-slide') ||
                        0 === e.indexOf(t.params.slideClass)
                      );
                    })
                    .join(' ');
                }),
                (n.emitSlidesClasses = function () {
                  var e = this;
                  if (e.params._emitClasses && e.el) {
                    var t = [];
                    e.slides.each(function (a) {
                      var r = e.getSlideClasses(a);
                      t.push({ slideEl: a, classNames: r }),
                        e.emit('_slideClass', a, r);
                    }),
                      e.emit('_slideClasses', t);
                  }
                }),
                (n.slidesPerViewDynamic = function () {
                  var e = this,
                    t = e.params,
                    a = e.slides,
                    r = e.slidesGrid,
                    i = e.size,
                    s = e.activeIndex,
                    n = 1;
                  if (t.centeredSlides) {
                    for (
                      var o, l = a[s].swiperSlideSize, c = s + 1;
                      c < a.length;
                      c += 1
                    )
                      a[c] &&
                        !o &&
                        ((n += 1), (l += a[c].swiperSlideSize) > i && (o = !0));
                    for (var d = s - 1; d >= 0; d -= 1)
                      a[d] &&
                        !o &&
                        ((n += 1), (l += a[d].swiperSlideSize) > i && (o = !0));
                  } else
                    for (var u = s + 1; u < a.length; u += 1)
                      r[u] - r[s] < i && (n += 1);
                  return n;
                }),
                (n.update = function () {
                  var e = this;
                  if (e && !e.destroyed) {
                    var t = e.snapGrid,
                      a = e.params;
                    a.breakpoints && e.setBreakpoint(),
                      e.updateSize(),
                      e.updateSlides(),
                      e.updateProgress(),
                      e.updateSlidesClasses(),
                      e.params.freeMode
                        ? (r(), e.params.autoHeight && e.updateAutoHeight())
                        : (('auto' === e.params.slidesPerView ||
                            e.params.slidesPerView > 1) &&
                          e.isEnd &&
                          !e.params.centeredSlides
                            ? e.slideTo(e.slides.length - 1, 0, !1, !0)
                            : e.slideTo(e.activeIndex, 0, !1, !0)) || r(),
                      a.watchOverflow && t !== e.snapGrid && e.checkOverflow(),
                      e.emit('update');
                  }
                  function r() {
                    var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                      a = Math.min(
                        Math.max(t, e.maxTranslate()),
                        e.minTranslate()
                      );
                    e.setTranslate(a),
                      e.updateActiveIndex(),
                      e.updateSlidesClasses();
                  }
                }),
                (n.changeDirection = function (e, t) {
                  void 0 === t && (t = !0);
                  var a = this,
                    r = a.params.direction;
                  return (
                    e || (e = 'horizontal' === r ? 'vertical' : 'horizontal'),
                    e === r ||
                      ('horizontal' !== e && 'vertical' !== e) ||
                      (a.$el
                        .removeClass('' + a.params.containerModifierClass + r)
                        .addClass('' + a.params.containerModifierClass + e),
                      a.emitContainerClasses(),
                      (a.params.direction = e),
                      a.slides.each(function (t) {
                        'vertical' === e
                          ? (t.style.width = '')
                          : (t.style.height = '');
                      }),
                      a.emit('changeDirection'),
                      t && a.update()),
                    a
                  );
                }),
                (n.mount = function (e) {
                  var t = this;
                  if (t.mounted) return !0;
                  var a = g(e || t.params.el);
                  if (!(e = a[0])) return !1;
                  e.swiper = t;
                  var r = function () {
                      return (
                        '.' +
                        (t.params.wrapperClass || '')
                          .trim()
                          .split(' ')
                          .join('.')
                      );
                    },
                    i = (function () {
                      if (e && e.shadowRoot && e.shadowRoot.querySelector) {
                        var t = g(e.shadowRoot.querySelector(r()));
                        return (
                          (t.children = function (e) {
                            return a.children(e);
                          }),
                          t
                        );
                      }
                      return a.children(r());
                    })();
                  if (0 === i.length && t.params.createElements) {
                    var n = s().createElement('div');
                    (i = g(n)),
                      (n.className = t.params.wrapperClass),
                      a.append(n),
                      a.children('.' + t.params.slideClass).each(function (e) {
                        i.append(e);
                      });
                  }
                  return (
                    T(t, {
                      $el: a,
                      el: e,
                      $wrapperEl: i,
                      wrapperEl: i[0],
                      mounted: !0,
                      rtl:
                        'rtl' === e.dir.toLowerCase() ||
                        'rtl' === a.css('direction'),
                      rtlTranslate:
                        'horizontal' === t.params.direction &&
                        ('rtl' === e.dir.toLowerCase() ||
                          'rtl' === a.css('direction')),
                      wrongRTL: '-webkit-box' === i.css('display'),
                    }),
                    !0
                  );
                }),
                (n.init = function (e) {
                  var t = this;
                  return (
                    t.initialized ||
                      !1 === t.mount(e) ||
                      (t.emit('beforeInit'),
                      t.params.breakpoints && t.setBreakpoint(),
                      t.addClasses(),
                      t.params.loop && t.loopCreate(),
                      t.updateSize(),
                      t.updateSlides(),
                      t.params.watchOverflow && t.checkOverflow(),
                      t.params.grabCursor && t.enabled && t.setGrabCursor(),
                      t.params.preloadImages && t.preloadImages(),
                      t.params.loop
                        ? t.slideTo(
                            t.params.initialSlide + t.loopedSlides,
                            0,
                            t.params.runCallbacksOnInit,
                            !1,
                            !0
                          )
                        : t.slideTo(
                            t.params.initialSlide,
                            0,
                            t.params.runCallbacksOnInit,
                            !1,
                            !0
                          ),
                      t.attachEvents(),
                      (t.initialized = !0),
                      t.emit('init'),
                      t.emit('afterInit')),
                    t
                  );
                }),
                (n.destroy = function (e, t) {
                  void 0 === e && (e = !0), void 0 === t && (t = !0);
                  var a,
                    r = this,
                    i = r.params,
                    s = r.$el,
                    n = r.$wrapperEl,
                    o = r.slides;
                  return (
                    void 0 === r.params ||
                      r.destroyed ||
                      (r.emit('beforeDestroy'),
                      (r.initialized = !1),
                      r.detachEvents(),
                      i.loop && r.loopDestroy(),
                      t &&
                        (r.removeClasses(),
                        s.removeAttr('style'),
                        n.removeAttr('style'),
                        o &&
                          o.length &&
                          o
                            .removeClass(
                              [
                                i.slideVisibleClass,
                                i.slideActiveClass,
                                i.slideNextClass,
                                i.slidePrevClass,
                              ].join(' ')
                            )
                            .removeAttr('style')
                            .removeAttr('data-swiper-slide-index')),
                      r.emit('destroy'),
                      Object.keys(r.eventsListeners).forEach(function (e) {
                        r.off(e);
                      }),
                      !1 !== e &&
                        ((r.$el[0].swiper = null),
                        (a = r),
                        Object.keys(a).forEach(function (e) {
                          try {
                            a[e] = null;
                          } catch (e) {}
                          try {
                            delete a[e];
                          } catch (e) {}
                        })),
                      (r.destroyed = !0)),
                    null
                  );
                }),
                (t.extendDefaults = function (e) {
                  T(F, e);
                }),
                (t.installModule = function (e) {
                  t.prototype.modules || (t.prototype.modules = {});
                  var a =
                    e.name ||
                    Object.keys(t.prototype.modules).length + '_' + S();
                  t.prototype.modules[a] = e;
                }),
                (t.use = function (e) {
                  return Array.isArray(e)
                    ? (e.forEach(function (e) {
                        return t.installModule(e);
                      }),
                      t)
                    : (t.installModule(e), t);
                }),
                (a = t),
                (i = [
                  {
                    key: 'extendedDefaults',
                    get: function () {
                      return F;
                    },
                  },
                  {
                    key: 'defaults',
                    get: function () {
                      return G;
                    },
                  },
                ]),
                (r = null) && e(a.prototype, r),
                i && e(a, i),
                t
              );
            })();
          Object.keys(W).forEach(function (e) {
            Object.keys(W[e]).forEach(function (t) {
              V.prototype[t] = W[e][t];
            });
          }),
            V.use([$, P]);
          var U = {
              update: function (e) {
                var t = this,
                  a = t.params,
                  r = a.slidesPerView,
                  i = a.slidesPerGroup,
                  s = a.centeredSlides,
                  n = t.params.virtual,
                  o = n.addSlidesBefore,
                  l = n.addSlidesAfter,
                  c = t.virtual,
                  d = c.from,
                  u = c.to,
                  p = c.slides,
                  m = c.slidesGrid,
                  f = c.renderSlide,
                  h = c.offset;
                t.updateActiveIndex();
                var g,
                  v,
                  b,
                  y = t.activeIndex || 0;
                (g = t.rtlTranslate
                  ? 'right'
                  : t.isHorizontal()
                  ? 'left'
                  : 'top'),
                  s
                    ? ((v = Math.floor(r / 2) + i + l),
                      (b = Math.floor(r / 2) + i + o))
                    : ((v = r + (i - 1) + l), (b = i + o));
                var w = Math.max((y || 0) - b, 0),
                  E = Math.min((y || 0) + v, p.length - 1),
                  S = (t.slidesGrid[w] || 0) - (t.slidesGrid[0] || 0);
                function x() {
                  t.updateSlides(),
                    t.updateProgress(),
                    t.updateSlidesClasses(),
                    t.lazy && t.params.lazy.enabled && t.lazy.load();
                }
                if (
                  (T(t.virtual, {
                    from: w,
                    to: E,
                    offset: S,
                    slidesGrid: t.slidesGrid,
                  }),
                  d === w && u === E && !e)
                )
                  return (
                    t.slidesGrid !== m && S !== h && t.slides.css(g, S + 'px'),
                    void t.updateProgress()
                  );
                if (t.params.virtual.renderExternal)
                  return (
                    t.params.virtual.renderExternal.call(t, {
                      offset: S,
                      from: w,
                      to: E,
                      slides: (function () {
                        for (var e = [], t = w; t <= E; t += 1) e.push(p[t]);
                        return e;
                      })(),
                    }),
                    void (t.params.virtual.renderExternalUpdate && x())
                  );
                var C = [],
                  k = [];
                if (e) t.$wrapperEl.find('.' + t.params.slideClass).remove();
                else
                  for (var M = d; M <= u; M += 1)
                    (M < w || M > E) &&
                      t.$wrapperEl
                        .find(
                          '.' +
                            t.params.slideClass +
                            '[data-swiper-slide-index="' +
                            M +
                            '"]'
                        )
                        .remove();
                for (var L = 0; L < p.length; L += 1)
                  L >= w &&
                    L <= E &&
                    (void 0 === u || e
                      ? k.push(L)
                      : (L > u && k.push(L), L < d && C.push(L)));
                k.forEach(function (e) {
                  t.$wrapperEl.append(f(p[e], e));
                }),
                  C.sort(function (e, t) {
                    return t - e;
                  }).forEach(function (e) {
                    t.$wrapperEl.prepend(f(p[e], e));
                  }),
                  t.$wrapperEl.children('.swiper-slide').css(g, S + 'px'),
                  x();
              },
              renderSlide: function (e, t) {
                var a = this,
                  r = a.params.virtual;
                if (r.cache && a.virtual.cache[t]) return a.virtual.cache[t];
                var i = r.renderSlide
                  ? g(r.renderSlide.call(a, e, t))
                  : g(
                      '<div class="' +
                        a.params.slideClass +
                        '" data-swiper-slide-index="' +
                        t +
                        '">' +
                        e +
                        '</div>'
                    );
                return (
                  i.attr('data-swiper-slide-index') ||
                    i.attr('data-swiper-slide-index', t),
                  r.cache && (a.virtual.cache[t] = i),
                  i
                );
              },
              appendSlide: function (e) {
                var t = this;
                if ('object' == typeof e && 'length' in e)
                  for (var a = 0; a < e.length; a += 1)
                    e[a] && t.virtual.slides.push(e[a]);
                else t.virtual.slides.push(e);
                t.virtual.update(!0);
              },
              prependSlide: function (e) {
                var t = this,
                  a = t.activeIndex,
                  r = a + 1,
                  i = 1;
                if (Array.isArray(e)) {
                  for (var s = 0; s < e.length; s += 1)
                    e[s] && t.virtual.slides.unshift(e[s]);
                  (r = a + e.length), (i = e.length);
                } else t.virtual.slides.unshift(e);
                if (t.params.virtual.cache) {
                  var n = t.virtual.cache,
                    o = {};
                  Object.keys(n).forEach(function (e) {
                    var t = n[e],
                      a = t.attr('data-swiper-slide-index');
                    a && t.attr('data-swiper-slide-index', parseInt(a, 10) + 1),
                      (o[parseInt(e, 10) + i] = t);
                  }),
                    (t.virtual.cache = o);
                }
                t.virtual.update(!0), t.slideTo(r, 0);
              },
              removeSlide: function (e) {
                var t = this;
                if (null != e) {
                  var a = t.activeIndex;
                  if (Array.isArray(e))
                    for (var r = e.length - 1; r >= 0; r -= 1)
                      t.virtual.slides.splice(e[r], 1),
                        t.params.virtual.cache && delete t.virtual.cache[e[r]],
                        e[r] < a && (a -= 1),
                        (a = Math.max(a, 0));
                  else
                    t.virtual.slides.splice(e, 1),
                      t.params.virtual.cache && delete t.virtual.cache[e],
                      e < a && (a -= 1),
                      (a = Math.max(a, 0));
                  t.virtual.update(!0), t.slideTo(a, 0);
                }
              },
              removeAllSlides: function () {
                var e = this;
                (e.virtual.slides = []),
                  e.params.virtual.cache && (e.virtual.cache = {}),
                  e.virtual.update(!0),
                  e.slideTo(0, 0);
              },
            },
            X = {
              name: 'virtual',
              params: {
                virtual: {
                  enabled: !1,
                  slides: [],
                  cache: !0,
                  renderSlide: null,
                  renderExternal: null,
                  renderExternalUpdate: !0,
                  addSlidesBefore: 0,
                  addSlidesAfter: 0,
                },
              },
              create: function () {
                k(this, {
                  virtual: t({}, U, {
                    slides: this.params.virtual.slides,
                    cache: {},
                  }),
                });
              },
              on: {
                beforeInit: function (e) {
                  if (e.params.virtual.enabled) {
                    e.classNames.push(
                      e.params.containerModifierClass + 'virtual'
                    );
                    var t = { watchSlidesProgress: !0 };
                    T(e.params, t),
                      T(e.originalParams, t),
                      e.params.initialSlide || e.virtual.update();
                  }
                },
                setTranslate: function (e) {
                  e.params.virtual.enabled && e.virtual.update();
                },
              },
            },
            Y = {
              handle: function (e) {
                var t = this;
                if (t.enabled) {
                  var a = o(),
                    r = s(),
                    i = t.rtlTranslate,
                    n = e;
                  n.originalEvent && (n = n.originalEvent);
                  var l = n.keyCode || n.charCode,
                    c = t.params.keyboard.pageUpDown,
                    d = c && 33 === l,
                    u = c && 34 === l,
                    p = 37 === l,
                    m = 39 === l,
                    f = 38 === l,
                    h = 40 === l;
                  if (
                    !t.allowSlideNext &&
                    ((t.isHorizontal() && m) || (t.isVertical() && h) || u)
                  )
                    return !1;
                  if (
                    !t.allowSlidePrev &&
                    ((t.isHorizontal() && p) || (t.isVertical() && f) || d)
                  )
                    return !1;
                  if (
                    !(
                      n.shiftKey ||
                      n.altKey ||
                      n.ctrlKey ||
                      n.metaKey ||
                      (r.activeElement &&
                        r.activeElement.nodeName &&
                        ('input' === r.activeElement.nodeName.toLowerCase() ||
                          'textarea' ===
                            r.activeElement.nodeName.toLowerCase()))
                    )
                  ) {
                    if (
                      t.params.keyboard.onlyInViewport &&
                      (d || u || p || m || f || h)
                    ) {
                      var g = !1;
                      if (
                        t.$el.parents('.' + t.params.slideClass).length > 0 &&
                        0 ===
                          t.$el.parents('.' + t.params.slideActiveClass).length
                      )
                        return;
                      var v = t.$el,
                        b = v[0].clientWidth,
                        y = v[0].clientHeight,
                        w = a.innerWidth,
                        E = a.innerHeight,
                        S = t.$el.offset();
                      i && (S.left -= t.$el[0].scrollLeft);
                      for (
                        var x = [
                            [S.left, S.top],
                            [S.left + b, S.top],
                            [S.left, S.top + y],
                            [S.left + b, S.top + y],
                          ],
                          C = 0;
                        C < x.length;
                        C += 1
                      ) {
                        var T = x[C];
                        if (T[0] >= 0 && T[0] <= w && T[1] >= 0 && T[1] <= E) {
                          if (0 === T[0] && 0 === T[1]) continue;
                          g = !0;
                        }
                      }
                      if (!g) return;
                    }
                    t.isHorizontal()
                      ? ((d || u || p || m) &&
                          (n.preventDefault
                            ? n.preventDefault()
                            : (n.returnValue = !1)),
                        (((u || m) && !i) || ((d || p) && i)) && t.slideNext(),
                        (((d || p) && !i) || ((u || m) && i)) && t.slidePrev())
                      : ((d || u || f || h) &&
                          (n.preventDefault
                            ? n.preventDefault()
                            : (n.returnValue = !1)),
                        (u || h) && t.slideNext(),
                        (d || f) && t.slidePrev()),
                      t.emit('keyPress', l);
                  }
                }
              },
              enable: function () {
                var e = this,
                  t = s();
                e.keyboard.enabled ||
                  (g(t).on('keydown', e.keyboard.handle),
                  (e.keyboard.enabled = !0));
              },
              disable: function () {
                var e = this,
                  t = s();
                e.keyboard.enabled &&
                  (g(t).off('keydown', e.keyboard.handle),
                  (e.keyboard.enabled = !1));
              },
            },
            K = {
              name: 'keyboard',
              params: {
                keyboard: { enabled: !1, onlyInViewport: !0, pageUpDown: !0 },
              },
              create: function () {
                k(this, { keyboard: t({ enabled: !1 }, Y) });
              },
              on: {
                init: function (e) {
                  e.params.keyboard.enabled && e.keyboard.enable();
                },
                destroy: function (e) {
                  e.keyboard.enabled && e.keyboard.disable();
                },
              },
            };
          var Z = {
              lastScrollTime: S(),
              lastEventBeforeSnap: void 0,
              recentWheelEvents: [],
              event: function () {
                return o().navigator.userAgent.indexOf('firefox') > -1
                  ? 'DOMMouseScroll'
                  : (function () {
                      var e = s(),
                        t = 'onwheel',
                        a = t in e;
                      if (!a) {
                        var r = e.createElement('div');
                        r.setAttribute(t, 'return;'),
                          (a = 'function' == typeof r.onwheel);
                      }
                      return (
                        !a &&
                          e.implementation &&
                          e.implementation.hasFeature &&
                          !0 !== e.implementation.hasFeature('', '') &&
                          (a = e.implementation.hasFeature(
                            'Events.wheel',
                            '3.0'
                          )),
                        a
                      );
                    })()
                  ? 'wheel'
                  : 'mousewheel';
              },
              normalize: function (e) {
                var t = 0,
                  a = 0,
                  r = 0,
                  i = 0;
                return (
                  'detail' in e && (a = e.detail),
                  'wheelDelta' in e && (a = -e.wheelDelta / 120),
                  'wheelDeltaY' in e && (a = -e.wheelDeltaY / 120),
                  'wheelDeltaX' in e && (t = -e.wheelDeltaX / 120),
                  'axis' in e &&
                    e.axis === e.HORIZONTAL_AXIS &&
                    ((t = a), (a = 0)),
                  (r = 10 * t),
                  (i = 10 * a),
                  'deltaY' in e && (i = e.deltaY),
                  'deltaX' in e && (r = e.deltaX),
                  e.shiftKey && !r && ((r = i), (i = 0)),
                  (r || i) &&
                    e.deltaMode &&
                    (1 === e.deltaMode
                      ? ((r *= 40), (i *= 40))
                      : ((r *= 800), (i *= 800))),
                  r && !t && (t = r < 1 ? -1 : 1),
                  i && !a && (a = i < 1 ? -1 : 1),
                  { spinX: t, spinY: a, pixelX: r, pixelY: i }
                );
              },
              handleMouseEnter: function () {
                this.enabled && (this.mouseEntered = !0);
              },
              handleMouseLeave: function () {
                this.enabled && (this.mouseEntered = !1);
              },
              handle: function (e) {
                var t = e,
                  a = this;
                if (a.enabled) {
                  var r = a.params.mousewheel;
                  a.params.cssMode && t.preventDefault();
                  var i = a.$el;
                  if (
                    ('container' !== a.params.mousewheel.eventsTarget &&
                      (i = g(a.params.mousewheel.eventsTarget)),
                    !a.mouseEntered &&
                      !i[0].contains(t.target) &&
                      !r.releaseOnEdges)
                  )
                    return !0;
                  t.originalEvent && (t = t.originalEvent);
                  var s = 0,
                    n = a.rtlTranslate ? -1 : 1,
                    o = Z.normalize(t);
                  if (r.forceToAxis)
                    if (a.isHorizontal()) {
                      if (!(Math.abs(o.pixelX) > Math.abs(o.pixelY))) return !0;
                      s = -o.pixelX * n;
                    } else {
                      if (!(Math.abs(o.pixelY) > Math.abs(o.pixelX))) return !0;
                      s = -o.pixelY;
                    }
                  else
                    s =
                      Math.abs(o.pixelX) > Math.abs(o.pixelY)
                        ? -o.pixelX * n
                        : -o.pixelY;
                  if (0 === s) return !0;
                  r.invert && (s = -s);
                  var l = a.getTranslate() + s * r.sensitivity;
                  if (
                    (l >= a.minTranslate() && (l = a.minTranslate()),
                    l <= a.maxTranslate() && (l = a.maxTranslate()),
                    (!!a.params.loop ||
                      !(l === a.minTranslate() || l === a.maxTranslate())) &&
                      a.params.nested &&
                      t.stopPropagation(),
                    a.params.freeMode)
                  ) {
                    var c = {
                        time: S(),
                        delta: Math.abs(s),
                        direction: Math.sign(s),
                      },
                      d = a.mousewheel.lastEventBeforeSnap,
                      u =
                        d &&
                        c.time < d.time + 500 &&
                        c.delta <= d.delta &&
                        c.direction === d.direction;
                    if (!u) {
                      (a.mousewheel.lastEventBeforeSnap = void 0),
                        a.params.loop && a.loopFix();
                      var p = a.getTranslate() + s * r.sensitivity,
                        m = a.isBeginning,
                        f = a.isEnd;
                      if (
                        (p >= a.minTranslate() && (p = a.minTranslate()),
                        p <= a.maxTranslate() && (p = a.maxTranslate()),
                        a.setTransition(0),
                        a.setTranslate(p),
                        a.updateProgress(),
                        a.updateActiveIndex(),
                        a.updateSlidesClasses(),
                        ((!m && a.isBeginning) || (!f && a.isEnd)) &&
                          a.updateSlidesClasses(),
                        a.params.freeModeSticky)
                      ) {
                        clearTimeout(a.mousewheel.timeout),
                          (a.mousewheel.timeout = void 0);
                        var h = a.mousewheel.recentWheelEvents;
                        h.length >= 15 && h.shift();
                        var v = h.length ? h[h.length - 1] : void 0,
                          b = h[0];
                        if (
                          (h.push(c),
                          v &&
                            (c.delta > v.delta || c.direction !== v.direction))
                        )
                          h.splice(0);
                        else if (
                          h.length >= 15 &&
                          c.time - b.time < 500 &&
                          b.delta - c.delta >= 1 &&
                          c.delta <= 6
                        ) {
                          var y = s > 0 ? 0.8 : 0.2;
                          (a.mousewheel.lastEventBeforeSnap = c),
                            h.splice(0),
                            (a.mousewheel.timeout = E(function () {
                              a.slideToClosest(a.params.speed, !0, void 0, y);
                            }, 0));
                        }
                        a.mousewheel.timeout ||
                          (a.mousewheel.timeout = E(function () {
                            (a.mousewheel.lastEventBeforeSnap = c),
                              h.splice(0),
                              a.slideToClosest(a.params.speed, !0, void 0, 0.5);
                          }, 500));
                      }
                      if (
                        (u || a.emit('scroll', t),
                        a.params.autoplay &&
                          a.params.autoplayDisableOnInteraction &&
                          a.autoplay.stop(),
                        p === a.minTranslate() || p === a.maxTranslate())
                      )
                        return !0;
                    }
                  } else {
                    var w = {
                        time: S(),
                        delta: Math.abs(s),
                        direction: Math.sign(s),
                        raw: e,
                      },
                      x = a.mousewheel.recentWheelEvents;
                    x.length >= 2 && x.shift();
                    var C = x.length ? x[x.length - 1] : void 0;
                    if (
                      (x.push(w),
                      C
                        ? (w.direction !== C.direction ||
                            w.delta > C.delta ||
                            w.time > C.time + 150) &&
                          a.mousewheel.animateSlider(w)
                        : a.mousewheel.animateSlider(w),
                      a.mousewheel.releaseScroll(w))
                    )
                      return !0;
                  }
                  return (
                    t.preventDefault
                      ? t.preventDefault()
                      : (t.returnValue = !1),
                    !1
                  );
                }
              },
              animateSlider: function (e) {
                var t = this,
                  a = o();
                return !(
                  (this.params.mousewheel.thresholdDelta &&
                    e.delta < this.params.mousewheel.thresholdDelta) ||
                  (this.params.mousewheel.thresholdTime &&
                    S() - t.mousewheel.lastScrollTime <
                      this.params.mousewheel.thresholdTime) ||
                  (!(e.delta >= 6 && S() - t.mousewheel.lastScrollTime < 60) &&
                    (e.direction < 0
                      ? (t.isEnd && !t.params.loop) ||
                        t.animating ||
                        (t.slideNext(), t.emit('scroll', e.raw))
                      : (t.isBeginning && !t.params.loop) ||
                        t.animating ||
                        (t.slidePrev(), t.emit('scroll', e.raw)),
                    (t.mousewheel.lastScrollTime = new a.Date().getTime()),
                    1))
                );
              },
              releaseScroll: function (e) {
                var t = this,
                  a = t.params.mousewheel;
                if (e.direction < 0) {
                  if (t.isEnd && !t.params.loop && a.releaseOnEdges) return !0;
                } else if (t.isBeginning && !t.params.loop && a.releaseOnEdges)
                  return !0;
                return !1;
              },
              enable: function () {
                var e = this,
                  t = Z.event();
                if (e.params.cssMode)
                  return (
                    e.wrapperEl.removeEventListener(t, e.mousewheel.handle), !0
                  );
                if (!t) return !1;
                if (e.mousewheel.enabled) return !1;
                var a = e.$el;
                return (
                  'container' !== e.params.mousewheel.eventsTarget &&
                    (a = g(e.params.mousewheel.eventsTarget)),
                  a.on('mouseenter', e.mousewheel.handleMouseEnter),
                  a.on('mouseleave', e.mousewheel.handleMouseLeave),
                  a.on(t, e.mousewheel.handle),
                  (e.mousewheel.enabled = !0),
                  !0
                );
              },
              disable: function () {
                var e = this,
                  t = Z.event();
                if (e.params.cssMode)
                  return (
                    e.wrapperEl.addEventListener(t, e.mousewheel.handle), !0
                  );
                if (!t) return !1;
                if (!e.mousewheel.enabled) return !1;
                var a = e.$el;
                return (
                  'container' !== e.params.mousewheel.eventsTarget &&
                    (a = g(e.params.mousewheel.eventsTarget)),
                  a.off(t, e.mousewheel.handle),
                  (e.mousewheel.enabled = !1),
                  !0
                );
              },
            },
            J = {
              toggleEl: function (e, t) {
                e[t ? 'addClass' : 'removeClass'](
                  this.params.navigation.disabledClass
                ),
                  e[0] && 'BUTTON' === e[0].tagName && (e[0].disabled = t);
              },
              update: function () {
                var e = this,
                  t = e.params.navigation,
                  a = e.navigation.toggleEl;
                if (!e.params.loop) {
                  var r = e.navigation,
                    i = r.$nextEl,
                    s = r.$prevEl;
                  s &&
                    s.length > 0 &&
                    (e.isBeginning ? a(s, !0) : a(s, !1),
                    e.params.watchOverflow &&
                      e.enabled &&
                      s[e.isLocked ? 'addClass' : 'removeClass'](t.lockClass)),
                    i &&
                      i.length > 0 &&
                      (e.isEnd ? a(i, !0) : a(i, !1),
                      e.params.watchOverflow &&
                        e.enabled &&
                        i[e.isLocked ? 'addClass' : 'removeClass'](
                          t.lockClass
                        ));
                }
              },
              onPrevClick: function (e) {
                var t = this;
                e.preventDefault(),
                  (t.isBeginning && !t.params.loop) || t.slidePrev();
              },
              onNextClick: function (e) {
                var t = this;
                e.preventDefault(),
                  (t.isEnd && !t.params.loop) || t.slideNext();
              },
              init: function () {
                var e,
                  t,
                  a = this,
                  r = a.params.navigation;
                (a.params.navigation = L(
                  a.$el,
                  a.params.navigation,
                  a.params.createElements,
                  { nextEl: 'swiper-button-next', prevEl: 'swiper-button-prev' }
                )),
                  (r.nextEl || r.prevEl) &&
                    (r.nextEl &&
                      ((e = g(r.nextEl)),
                      a.params.uniqueNavElements &&
                        'string' == typeof r.nextEl &&
                        e.length > 1 &&
                        1 === a.$el.find(r.nextEl).length &&
                        (e = a.$el.find(r.nextEl))),
                    r.prevEl &&
                      ((t = g(r.prevEl)),
                      a.params.uniqueNavElements &&
                        'string' == typeof r.prevEl &&
                        t.length > 1 &&
                        1 === a.$el.find(r.prevEl).length &&
                        (t = a.$el.find(r.prevEl))),
                    e &&
                      e.length > 0 &&
                      e.on('click', a.navigation.onNextClick),
                    t &&
                      t.length > 0 &&
                      t.on('click', a.navigation.onPrevClick),
                    T(a.navigation, {
                      $nextEl: e,
                      nextEl: e && e[0],
                      $prevEl: t,
                      prevEl: t && t[0],
                    }),
                    a.enabled ||
                      (e && e.addClass(r.lockClass),
                      t && t.addClass(r.lockClass)));
              },
              destroy: function () {
                var e = this,
                  t = e.navigation,
                  a = t.$nextEl,
                  r = t.$prevEl;
                a &&
                  a.length &&
                  (a.off('click', e.navigation.onNextClick),
                  a.removeClass(e.params.navigation.disabledClass)),
                  r &&
                    r.length &&
                    (r.off('click', e.navigation.onPrevClick),
                    r.removeClass(e.params.navigation.disabledClass));
              },
            },
            Q = {
              update: function () {
                var e = this,
                  t = e.rtl,
                  a = e.params.pagination;
                if (
                  a.el &&
                  e.pagination.el &&
                  e.pagination.$el &&
                  0 !== e.pagination.$el.length
                ) {
                  var r,
                    i =
                      e.virtual && e.params.virtual.enabled
                        ? e.virtual.slides.length
                        : e.slides.length,
                    s = e.pagination.$el,
                    n = e.params.loop
                      ? Math.ceil(
                          (i - 2 * e.loopedSlides) / e.params.slidesPerGroup
                        )
                      : e.snapGrid.length;
                  if (
                    (e.params.loop
                      ? ((r = Math.ceil(
                          (e.activeIndex - e.loopedSlides) /
                            e.params.slidesPerGroup
                        )) >
                          i - 1 - 2 * e.loopedSlides &&
                          (r -= i - 2 * e.loopedSlides),
                        r > n - 1 && (r -= n),
                        r < 0 &&
                          'bullets' !== e.params.paginationType &&
                          (r = n + r))
                      : (r =
                          void 0 !== e.snapIndex
                            ? e.snapIndex
                            : e.activeIndex || 0),
                    'bullets' === a.type &&
                      e.pagination.bullets &&
                      e.pagination.bullets.length > 0)
                  ) {
                    var o,
                      l,
                      c,
                      d = e.pagination.bullets;
                    if (
                      (a.dynamicBullets &&
                        ((e.pagination.bulletSize = d
                          .eq(0)
                          [e.isHorizontal() ? 'outerWidth' : 'outerHeight'](
                            !0
                          )),
                        s.css(
                          e.isHorizontal() ? 'width' : 'height',
                          e.pagination.bulletSize * (a.dynamicMainBullets + 4) +
                            'px'
                        ),
                        a.dynamicMainBullets > 1 &&
                          void 0 !== e.previousIndex &&
                          ((e.pagination.dynamicBulletIndex +=
                            r - e.previousIndex),
                          e.pagination.dynamicBulletIndex >
                          a.dynamicMainBullets - 1
                            ? (e.pagination.dynamicBulletIndex =
                                a.dynamicMainBullets - 1)
                            : e.pagination.dynamicBulletIndex < 0 &&
                              (e.pagination.dynamicBulletIndex = 0)),
                        (o = r - e.pagination.dynamicBulletIndex),
                        (c =
                          ((l =
                            o +
                            (Math.min(d.length, a.dynamicMainBullets) - 1)) +
                            o) /
                          2)),
                      d.removeClass(
                        a.bulletActiveClass +
                          ' ' +
                          a.bulletActiveClass +
                          '-next ' +
                          a.bulletActiveClass +
                          '-next-next ' +
                          a.bulletActiveClass +
                          '-prev ' +
                          a.bulletActiveClass +
                          '-prev-prev ' +
                          a.bulletActiveClass +
                          '-main'
                      ),
                      s.length > 1)
                    )
                      d.each(function (e) {
                        var t = g(e),
                          i = t.index();
                        i === r && t.addClass(a.bulletActiveClass),
                          a.dynamicBullets &&
                            (i >= o &&
                              i <= l &&
                              t.addClass(a.bulletActiveClass + '-main'),
                            i === o &&
                              t
                                .prev()
                                .addClass(a.bulletActiveClass + '-prev')
                                .prev()
                                .addClass(a.bulletActiveClass + '-prev-prev'),
                            i === l &&
                              t
                                .next()
                                .addClass(a.bulletActiveClass + '-next')
                                .next()
                                .addClass(a.bulletActiveClass + '-next-next'));
                      });
                    else {
                      var u = d.eq(r),
                        p = u.index();
                      if ((u.addClass(a.bulletActiveClass), a.dynamicBullets)) {
                        for (
                          var m = d.eq(o), f = d.eq(l), h = o;
                          h <= l;
                          h += 1
                        )
                          d.eq(h).addClass(a.bulletActiveClass + '-main');
                        if (e.params.loop)
                          if (p >= d.length - a.dynamicMainBullets) {
                            for (var v = a.dynamicMainBullets; v >= 0; v -= 1)
                              d.eq(d.length - v).addClass(
                                a.bulletActiveClass + '-main'
                              );
                            d.eq(d.length - a.dynamicMainBullets - 1).addClass(
                              a.bulletActiveClass + '-prev'
                            );
                          } else
                            m
                              .prev()
                              .addClass(a.bulletActiveClass + '-prev')
                              .prev()
                              .addClass(a.bulletActiveClass + '-prev-prev'),
                              f
                                .next()
                                .addClass(a.bulletActiveClass + '-next')
                                .next()
                                .addClass(a.bulletActiveClass + '-next-next');
                        else
                          m
                            .prev()
                            .addClass(a.bulletActiveClass + '-prev')
                            .prev()
                            .addClass(a.bulletActiveClass + '-prev-prev'),
                            f
                              .next()
                              .addClass(a.bulletActiveClass + '-next')
                              .next()
                              .addClass(a.bulletActiveClass + '-next-next');
                      }
                    }
                    if (a.dynamicBullets) {
                      var b = Math.min(d.length, a.dynamicMainBullets + 4),
                        y =
                          (e.pagination.bulletSize * b -
                            e.pagination.bulletSize) /
                            2 -
                          c * e.pagination.bulletSize,
                        w = t ? 'right' : 'left';
                      d.css(e.isHorizontal() ? w : 'top', y + 'px');
                    }
                  }
                  if (
                    ('fraction' === a.type &&
                      (s
                        .find(M(a.currentClass))
                        .text(a.formatFractionCurrent(r + 1)),
                      s.find(M(a.totalClass)).text(a.formatFractionTotal(n))),
                    'progressbar' === a.type)
                  ) {
                    var E;
                    E = a.progressbarOpposite
                      ? e.isHorizontal()
                        ? 'vertical'
                        : 'horizontal'
                      : e.isHorizontal()
                      ? 'horizontal'
                      : 'vertical';
                    var S = (r + 1) / n,
                      x = 1,
                      C = 1;
                    'horizontal' === E ? (x = S) : (C = S),
                      s
                        .find(M(a.progressbarFillClass))
                        .transform(
                          'translate3d(0,0,0) scaleX(' +
                            x +
                            ') scaleY(' +
                            C +
                            ')'
                        )
                        .transition(e.params.speed);
                  }
                  'custom' === a.type && a.renderCustom
                    ? (s.html(a.renderCustom(e, r + 1, n)),
                      e.emit('paginationRender', s[0]))
                    : e.emit('paginationUpdate', s[0]),
                    e.params.watchOverflow &&
                      e.enabled &&
                      s[e.isLocked ? 'addClass' : 'removeClass'](a.lockClass);
                }
              },
              render: function () {
                var e = this,
                  t = e.params.pagination;
                if (
                  t.el &&
                  e.pagination.el &&
                  e.pagination.$el &&
                  0 !== e.pagination.$el.length
                ) {
                  var a =
                      e.virtual && e.params.virtual.enabled
                        ? e.virtual.slides.length
                        : e.slides.length,
                    r = e.pagination.$el,
                    i = '';
                  if ('bullets' === t.type) {
                    var s = e.params.loop
                      ? Math.ceil(
                          (a - 2 * e.loopedSlides) / e.params.slidesPerGroup
                        )
                      : e.snapGrid.length;
                    e.params.freeMode && !e.params.loop && s > a && (s = a);
                    for (var n = 0; n < s; n += 1)
                      t.renderBullet
                        ? (i += t.renderBullet.call(e, n, t.bulletClass))
                        : (i +=
                            '<' +
                            t.bulletElement +
                            ' class="' +
                            t.bulletClass +
                            '"></' +
                            t.bulletElement +
                            '>');
                    r.html(i),
                      (e.pagination.bullets = r.find(M(t.bulletClass)));
                  }
                  'fraction' === t.type &&
                    ((i = t.renderFraction
                      ? t.renderFraction.call(e, t.currentClass, t.totalClass)
                      : '<span class="' +
                        t.currentClass +
                        '"></span> / <span class="' +
                        t.totalClass +
                        '"></span>'),
                    r.html(i)),
                    'progressbar' === t.type &&
                      ((i = t.renderProgressbar
                        ? t.renderProgressbar.call(e, t.progressbarFillClass)
                        : '<span class="' +
                          t.progressbarFillClass +
                          '"></span>'),
                      r.html(i)),
                    'custom' !== t.type &&
                      e.emit('paginationRender', e.pagination.$el[0]);
                }
              },
              init: function () {
                var e = this;
                e.params.pagination = L(
                  e.$el,
                  e.params.pagination,
                  e.params.createElements,
                  { el: 'swiper-pagination' }
                );
                var t = e.params.pagination;
                if (t.el) {
                  var a = g(t.el);
                  0 !== a.length &&
                    (e.params.uniqueNavElements &&
                      'string' == typeof t.el &&
                      a.length > 1 &&
                      (a = e.$el.find(t.el)),
                    'bullets' === t.type &&
                      t.clickable &&
                      a.addClass(t.clickableClass),
                    a.addClass(t.modifierClass + t.type),
                    'bullets' === t.type &&
                      t.dynamicBullets &&
                      (a.addClass('' + t.modifierClass + t.type + '-dynamic'),
                      (e.pagination.dynamicBulletIndex = 0),
                      t.dynamicMainBullets < 1 && (t.dynamicMainBullets = 1)),
                    'progressbar' === t.type &&
                      t.progressbarOpposite &&
                      a.addClass(t.progressbarOppositeClass),
                    t.clickable &&
                      a.on('click', M(t.bulletClass), function (t) {
                        t.preventDefault();
                        var a = g(this).index() * e.params.slidesPerGroup;
                        e.params.loop && (a += e.loopedSlides), e.slideTo(a);
                      }),
                    T(e.pagination, { $el: a, el: a[0] }),
                    e.enabled || a.addClass(t.lockClass));
                }
              },
              destroy: function () {
                var e = this,
                  t = e.params.pagination;
                if (
                  t.el &&
                  e.pagination.el &&
                  e.pagination.$el &&
                  0 !== e.pagination.$el.length
                ) {
                  var a = e.pagination.$el;
                  a.removeClass(t.hiddenClass),
                    a.removeClass(t.modifierClass + t.type),
                    e.pagination.bullets &&
                      e.pagination.bullets.removeClass(t.bulletActiveClass),
                    t.clickable && a.off('click', M(t.bulletClass));
                }
              },
            },
            ee = {
              setTranslate: function () {
                var e = this;
                if (e.params.scrollbar.el && e.scrollbar.el) {
                  var t = e.scrollbar,
                    a = e.rtlTranslate,
                    r = e.progress,
                    i = t.dragSize,
                    s = t.trackSize,
                    n = t.$dragEl,
                    o = t.$el,
                    l = e.params.scrollbar,
                    c = i,
                    d = (s - i) * r;
                  a
                    ? (d = -d) > 0
                      ? ((c = i - d), (d = 0))
                      : -d + i > s && (c = s + d)
                    : d < 0
                    ? ((c = i + d), (d = 0))
                    : d + i > s && (c = s - d),
                    e.isHorizontal()
                      ? (n.transform('translate3d(' + d + 'px, 0, 0)'),
                        (n[0].style.width = c + 'px'))
                      : (n.transform('translate3d(0px, ' + d + 'px, 0)'),
                        (n[0].style.height = c + 'px')),
                    l.hide &&
                      (clearTimeout(e.scrollbar.timeout),
                      (o[0].style.opacity = 1),
                      (e.scrollbar.timeout = setTimeout(function () {
                        (o[0].style.opacity = 0), o.transition(400);
                      }, 1e3)));
                }
              },
              setTransition: function (e) {
                var t = this;
                t.params.scrollbar.el &&
                  t.scrollbar.el &&
                  t.scrollbar.$dragEl.transition(e);
              },
              updateSize: function () {
                var e = this;
                if (e.params.scrollbar.el && e.scrollbar.el) {
                  var t = e.scrollbar,
                    a = t.$dragEl,
                    r = t.$el;
                  (a[0].style.width = ''), (a[0].style.height = '');
                  var i,
                    s = e.isHorizontal() ? r[0].offsetWidth : r[0].offsetHeight,
                    n = e.size / e.virtualSize,
                    o = n * (s / e.size);
                  (i =
                    'auto' === e.params.scrollbar.dragSize
                      ? s * n
                      : parseInt(e.params.scrollbar.dragSize, 10)),
                    e.isHorizontal()
                      ? (a[0].style.width = i + 'px')
                      : (a[0].style.height = i + 'px'),
                    (r[0].style.display = n >= 1 ? 'none' : ''),
                    e.params.scrollbar.hide && (r[0].style.opacity = 0),
                    T(t, {
                      trackSize: s,
                      divider: n,
                      moveDivider: o,
                      dragSize: i,
                    }),
                    e.params.watchOverflow &&
                      e.enabled &&
                      t.$el[e.isLocked ? 'addClass' : 'removeClass'](
                        e.params.scrollbar.lockClass
                      );
                }
              },
              getPointerPosition: function (e) {
                return this.isHorizontal()
                  ? 'touchstart' === e.type || 'touchmove' === e.type
                    ? e.targetTouches[0].clientX
                    : e.clientX
                  : 'touchstart' === e.type || 'touchmove' === e.type
                  ? e.targetTouches[0].clientY
                  : e.clientY;
              },
              setDragPosition: function (e) {
                var t,
                  a = this,
                  r = a.scrollbar,
                  i = a.rtlTranslate,
                  s = r.$el,
                  n = r.dragSize,
                  o = r.trackSize,
                  l = r.dragStartPos;
                (t =
                  (r.getPointerPosition(e) -
                    s.offset()[a.isHorizontal() ? 'left' : 'top'] -
                    (null !== l ? l : n / 2)) /
                  (o - n)),
                  (t = Math.max(Math.min(t, 1), 0)),
                  i && (t = 1 - t);
                var c =
                  a.minTranslate() + (a.maxTranslate() - a.minTranslate()) * t;
                a.updateProgress(c),
                  a.setTranslate(c),
                  a.updateActiveIndex(),
                  a.updateSlidesClasses();
              },
              onDragStart: function (e) {
                var t = this,
                  a = t.params.scrollbar,
                  r = t.scrollbar,
                  i = t.$wrapperEl,
                  s = r.$el,
                  n = r.$dragEl;
                (t.scrollbar.isTouched = !0),
                  (t.scrollbar.dragStartPos =
                    e.target === n[0] || e.target === n
                      ? r.getPointerPosition(e) -
                        e.target.getBoundingClientRect()[
                          t.isHorizontal() ? 'left' : 'top'
                        ]
                      : null),
                  e.preventDefault(),
                  e.stopPropagation(),
                  i.transition(100),
                  n.transition(100),
                  r.setDragPosition(e),
                  clearTimeout(t.scrollbar.dragTimeout),
                  s.transition(0),
                  a.hide && s.css('opacity', 1),
                  t.params.cssMode &&
                    t.$wrapperEl.css('scroll-snap-type', 'none'),
                  t.emit('scrollbarDragStart', e);
              },
              onDragMove: function (e) {
                var t = this,
                  a = t.scrollbar,
                  r = t.$wrapperEl,
                  i = a.$el,
                  s = a.$dragEl;
                t.scrollbar.isTouched &&
                  (e.preventDefault ? e.preventDefault() : (e.returnValue = !1),
                  a.setDragPosition(e),
                  r.transition(0),
                  i.transition(0),
                  s.transition(0),
                  t.emit('scrollbarDragMove', e));
              },
              onDragEnd: function (e) {
                var t = this,
                  a = t.params.scrollbar,
                  r = t.scrollbar,
                  i = t.$wrapperEl,
                  s = r.$el;
                t.scrollbar.isTouched &&
                  ((t.scrollbar.isTouched = !1),
                  t.params.cssMode &&
                    (t.$wrapperEl.css('scroll-snap-type', ''),
                    i.transition('')),
                  a.hide &&
                    (clearTimeout(t.scrollbar.dragTimeout),
                    (t.scrollbar.dragTimeout = E(function () {
                      s.css('opacity', 0), s.transition(400);
                    }, 1e3))),
                  t.emit('scrollbarDragEnd', e),
                  a.snapOnRelease && t.slideToClosest());
              },
              enableDraggable: function () {
                var e = this;
                if (e.params.scrollbar.el) {
                  var t = s(),
                    a = e.scrollbar,
                    r = e.touchEventsTouch,
                    i = e.touchEventsDesktop,
                    n = e.params,
                    o = e.support,
                    l = a.$el[0],
                    c = !(!o.passiveListener || !n.passiveListeners) && {
                      passive: !1,
                      capture: !1,
                    },
                    d = !(!o.passiveListener || !n.passiveListeners) && {
                      passive: !0,
                      capture: !1,
                    };
                  l &&
                    (o.touch
                      ? (l.addEventListener(
                          r.start,
                          e.scrollbar.onDragStart,
                          c
                        ),
                        l.addEventListener(r.move, e.scrollbar.onDragMove, c),
                        l.addEventListener(r.end, e.scrollbar.onDragEnd, d))
                      : (l.addEventListener(
                          i.start,
                          e.scrollbar.onDragStart,
                          c
                        ),
                        t.addEventListener(i.move, e.scrollbar.onDragMove, c),
                        t.addEventListener(i.end, e.scrollbar.onDragEnd, d)));
                }
              },
              disableDraggable: function () {
                var e = this;
                if (e.params.scrollbar.el) {
                  var t = s(),
                    a = e.scrollbar,
                    r = e.touchEventsTouch,
                    i = e.touchEventsDesktop,
                    n = e.params,
                    o = e.support,
                    l = a.$el[0],
                    c = !(!o.passiveListener || !n.passiveListeners) && {
                      passive: !1,
                      capture: !1,
                    },
                    d = !(!o.passiveListener || !n.passiveListeners) && {
                      passive: !0,
                      capture: !1,
                    };
                  l &&
                    (o.touch
                      ? (l.removeEventListener(
                          r.start,
                          e.scrollbar.onDragStart,
                          c
                        ),
                        l.removeEventListener(
                          r.move,
                          e.scrollbar.onDragMove,
                          c
                        ),
                        l.removeEventListener(r.end, e.scrollbar.onDragEnd, d))
                      : (l.removeEventListener(
                          i.start,
                          e.scrollbar.onDragStart,
                          c
                        ),
                        t.removeEventListener(
                          i.move,
                          e.scrollbar.onDragMove,
                          c
                        ),
                        t.removeEventListener(
                          i.end,
                          e.scrollbar.onDragEnd,
                          d
                        )));
                }
              },
              init: function () {
                var e = this,
                  t = e.scrollbar,
                  a = e.$el;
                e.params.scrollbar = L(
                  a,
                  e.params.scrollbar,
                  e.params.createElements,
                  { el: 'swiper-scrollbar' }
                );
                var r = e.params.scrollbar;
                if (r.el) {
                  var i = g(r.el);
                  e.params.uniqueNavElements &&
                    'string' == typeof r.el &&
                    i.length > 1 &&
                    1 === a.find(r.el).length &&
                    (i = a.find(r.el));
                  var s = i.find('.' + e.params.scrollbar.dragClass);
                  0 === s.length &&
                    ((s = g(
                      '<div class="' + e.params.scrollbar.dragClass + '"></div>'
                    )),
                    i.append(s)),
                    T(t, { $el: i, el: i[0], $dragEl: s, dragEl: s[0] }),
                    r.draggable && t.enableDraggable(),
                    i &&
                      i[e.enabled ? 'removeClass' : 'addClass'](
                        e.params.scrollbar.lockClass
                      );
                }
              },
              destroy: function () {
                this.scrollbar.disableDraggable();
              },
            },
            te = {
              setTransform: function (e, t) {
                var a = this.rtl,
                  r = g(e),
                  i = a ? -1 : 1,
                  s = r.attr('data-swiper-parallax') || '0',
                  n = r.attr('data-swiper-parallax-x'),
                  o = r.attr('data-swiper-parallax-y'),
                  l = r.attr('data-swiper-parallax-scale'),
                  c = r.attr('data-swiper-parallax-opacity');
                if (
                  (n || o
                    ? ((n = n || '0'), (o = o || '0'))
                    : this.isHorizontal()
                    ? ((n = s), (o = '0'))
                    : ((o = s), (n = '0')),
                  (n =
                    n.indexOf('%') >= 0
                      ? parseInt(n, 10) * t * i + '%'
                      : n * t * i + 'px'),
                  (o =
                    o.indexOf('%') >= 0
                      ? parseInt(o, 10) * t + '%'
                      : o * t + 'px'),
                  null != c)
                ) {
                  var d = c - (c - 1) * (1 - Math.abs(t));
                  r[0].style.opacity = d;
                }
                if (null == l)
                  r.transform('translate3d(' + n + ', ' + o + ', 0px)');
                else {
                  var u = l - (l - 1) * (1 - Math.abs(t));
                  r.transform(
                    'translate3d(' + n + ', ' + o + ', 0px) scale(' + u + ')'
                  );
                }
              },
              setTranslate: function () {
                var e = this,
                  t = e.$el,
                  a = e.slides,
                  r = e.progress,
                  i = e.snapGrid;
                t
                  .children(
                    '[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]'
                  )
                  .each(function (t) {
                    e.parallax.setTransform(t, r);
                  }),
                  a.each(function (t, a) {
                    var s = t.progress;
                    e.params.slidesPerGroup > 1 &&
                      'auto' !== e.params.slidesPerView &&
                      (s += Math.ceil(a / 2) - r * (i.length - 1)),
                      (s = Math.min(Math.max(s, -1), 1)),
                      g(t)
                        .find(
                          '[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]'
                        )
                        .each(function (t) {
                          e.parallax.setTransform(t, s);
                        });
                  });
              },
              setTransition: function (e) {
                void 0 === e && (e = this.params.speed),
                  this.$el
                    .find(
                      '[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]'
                    )
                    .each(function (t) {
                      var a = g(t),
                        r =
                          parseInt(
                            a.attr('data-swiper-parallax-duration'),
                            10
                          ) || e;
                      0 === e && (r = 0), a.transition(r);
                    });
              },
            },
            ae = {
              getDistanceBetweenTouches: function (e) {
                if (e.targetTouches.length < 2) return 1;
                var t = e.targetTouches[0].pageX,
                  a = e.targetTouches[0].pageY,
                  r = e.targetTouches[1].pageX,
                  i = e.targetTouches[1].pageY;
                return Math.sqrt(Math.pow(r - t, 2) + Math.pow(i - a, 2));
              },
              onGestureStart: function (e) {
                var t = this,
                  a = t.support,
                  r = t.params.zoom,
                  i = t.zoom,
                  s = i.gesture;
                if (
                  ((i.fakeGestureTouched = !1),
                  (i.fakeGestureMoved = !1),
                  !a.gestures)
                ) {
                  if (
                    'touchstart' !== e.type ||
                    ('touchstart' === e.type && e.targetTouches.length < 2)
                  )
                    return;
                  (i.fakeGestureTouched = !0),
                    (s.scaleStart = ae.getDistanceBetweenTouches(e));
                }
                (s.$slideEl && s.$slideEl.length) ||
                ((s.$slideEl = g(e.target).closest('.' + t.params.slideClass)),
                0 === s.$slideEl.length &&
                  (s.$slideEl = t.slides.eq(t.activeIndex)),
                (s.$imageEl = s.$slideEl.find(
                  'img, svg, canvas, picture, .swiper-zoom-target'
                )),
                (s.$imageWrapEl = s.$imageEl.parent('.' + r.containerClass)),
                (s.maxRatio =
                  s.$imageWrapEl.attr('data-swiper-zoom') || r.maxRatio),
                0 !== s.$imageWrapEl.length)
                  ? (s.$imageEl && s.$imageEl.transition(0),
                    (t.zoom.isScaling = !0))
                  : (s.$imageEl = void 0);
              },
              onGestureChange: function (e) {
                var t = this,
                  a = t.support,
                  r = t.params.zoom,
                  i = t.zoom,
                  s = i.gesture;
                if (!a.gestures) {
                  if (
                    'touchmove' !== e.type ||
                    ('touchmove' === e.type && e.targetTouches.length < 2)
                  )
                    return;
                  (i.fakeGestureMoved = !0),
                    (s.scaleMove = ae.getDistanceBetweenTouches(e));
                }
                s.$imageEl && 0 !== s.$imageEl.length
                  ? (a.gestures
                      ? (i.scale = e.scale * i.currentScale)
                      : (i.scale =
                          (s.scaleMove / s.scaleStart) * i.currentScale),
                    i.scale > s.maxRatio &&
                      (i.scale =
                        s.maxRatio -
                        1 +
                        Math.pow(i.scale - s.maxRatio + 1, 0.5)),
                    i.scale < r.minRatio &&
                      (i.scale =
                        r.minRatio +
                        1 -
                        Math.pow(r.minRatio - i.scale + 1, 0.5)),
                    s.$imageEl.transform(
                      'translate3d(0,0,0) scale(' + i.scale + ')'
                    ))
                  : 'gesturechange' === e.type && i.onGestureStart(e);
              },
              onGestureEnd: function (e) {
                var t = this,
                  a = t.device,
                  r = t.support,
                  i = t.params.zoom,
                  s = t.zoom,
                  n = s.gesture;
                if (!r.gestures) {
                  if (!s.fakeGestureTouched || !s.fakeGestureMoved) return;
                  if (
                    'touchend' !== e.type ||
                    ('touchend' === e.type &&
                      e.changedTouches.length < 2 &&
                      !a.android)
                  )
                    return;
                  (s.fakeGestureTouched = !1), (s.fakeGestureMoved = !1);
                }
                n.$imageEl &&
                  0 !== n.$imageEl.length &&
                  ((s.scale = Math.max(
                    Math.min(s.scale, n.maxRatio),
                    i.minRatio
                  )),
                  n.$imageEl
                    .transition(t.params.speed)
                    .transform('translate3d(0,0,0) scale(' + s.scale + ')'),
                  (s.currentScale = s.scale),
                  (s.isScaling = !1),
                  1 === s.scale && (n.$slideEl = void 0));
              },
              onTouchStart: function (e) {
                var t = this.device,
                  a = this.zoom,
                  r = a.gesture,
                  i = a.image;
                r.$imageEl &&
                  0 !== r.$imageEl.length &&
                  (i.isTouched ||
                    (t.android && e.cancelable && e.preventDefault(),
                    (i.isTouched = !0),
                    (i.touchesStart.x =
                      'touchstart' === e.type
                        ? e.targetTouches[0].pageX
                        : e.pageX),
                    (i.touchesStart.y =
                      'touchstart' === e.type
                        ? e.targetTouches[0].pageY
                        : e.pageY)));
              },
              onTouchMove: function (e) {
                var t = this,
                  a = t.zoom,
                  r = a.gesture,
                  i = a.image,
                  s = a.velocity;
                if (
                  r.$imageEl &&
                  0 !== r.$imageEl.length &&
                  ((t.allowClick = !1), i.isTouched && r.$slideEl)
                ) {
                  i.isMoved ||
                    ((i.width = r.$imageEl[0].offsetWidth),
                    (i.height = r.$imageEl[0].offsetHeight),
                    (i.startX = x(r.$imageWrapEl[0], 'x') || 0),
                    (i.startY = x(r.$imageWrapEl[0], 'y') || 0),
                    (r.slideWidth = r.$slideEl[0].offsetWidth),
                    (r.slideHeight = r.$slideEl[0].offsetHeight),
                    r.$imageWrapEl.transition(0),
                    t.rtl && ((i.startX = -i.startX), (i.startY = -i.startY)));
                  var n = i.width * a.scale,
                    o = i.height * a.scale;
                  if (!(n < r.slideWidth && o < r.slideHeight)) {
                    if (
                      ((i.minX = Math.min(r.slideWidth / 2 - n / 2, 0)),
                      (i.maxX = -i.minX),
                      (i.minY = Math.min(r.slideHeight / 2 - o / 2, 0)),
                      (i.maxY = -i.minY),
                      (i.touchesCurrent.x =
                        'touchmove' === e.type
                          ? e.targetTouches[0].pageX
                          : e.pageX),
                      (i.touchesCurrent.y =
                        'touchmove' === e.type
                          ? e.targetTouches[0].pageY
                          : e.pageY),
                      !i.isMoved && !a.isScaling)
                    ) {
                      if (
                        t.isHorizontal() &&
                        ((Math.floor(i.minX) === Math.floor(i.startX) &&
                          i.touchesCurrent.x < i.touchesStart.x) ||
                          (Math.floor(i.maxX) === Math.floor(i.startX) &&
                            i.touchesCurrent.x > i.touchesStart.x))
                      )
                        return void (i.isTouched = !1);
                      if (
                        !t.isHorizontal() &&
                        ((Math.floor(i.minY) === Math.floor(i.startY) &&
                          i.touchesCurrent.y < i.touchesStart.y) ||
                          (Math.floor(i.maxY) === Math.floor(i.startY) &&
                            i.touchesCurrent.y > i.touchesStart.y))
                      )
                        return void (i.isTouched = !1);
                    }
                    e.cancelable && e.preventDefault(),
                      e.stopPropagation(),
                      (i.isMoved = !0),
                      (i.currentX =
                        i.touchesCurrent.x - i.touchesStart.x + i.startX),
                      (i.currentY =
                        i.touchesCurrent.y - i.touchesStart.y + i.startY),
                      i.currentX < i.minX &&
                        (i.currentX =
                          i.minX + 1 - Math.pow(i.minX - i.currentX + 1, 0.8)),
                      i.currentX > i.maxX &&
                        (i.currentX =
                          i.maxX - 1 + Math.pow(i.currentX - i.maxX + 1, 0.8)),
                      i.currentY < i.minY &&
                        (i.currentY =
                          i.minY + 1 - Math.pow(i.minY - i.currentY + 1, 0.8)),
                      i.currentY > i.maxY &&
                        (i.currentY =
                          i.maxY - 1 + Math.pow(i.currentY - i.maxY + 1, 0.8)),
                      s.prevPositionX || (s.prevPositionX = i.touchesCurrent.x),
                      s.prevPositionY || (s.prevPositionY = i.touchesCurrent.y),
                      s.prevTime || (s.prevTime = Date.now()),
                      (s.x =
                        (i.touchesCurrent.x - s.prevPositionX) /
                        (Date.now() - s.prevTime) /
                        2),
                      (s.y =
                        (i.touchesCurrent.y - s.prevPositionY) /
                        (Date.now() - s.prevTime) /
                        2),
                      Math.abs(i.touchesCurrent.x - s.prevPositionX) < 2 &&
                        (s.x = 0),
                      Math.abs(i.touchesCurrent.y - s.prevPositionY) < 2 &&
                        (s.y = 0),
                      (s.prevPositionX = i.touchesCurrent.x),
                      (s.prevPositionY = i.touchesCurrent.y),
                      (s.prevTime = Date.now()),
                      r.$imageWrapEl.transform(
                        'translate3d(' +
                          i.currentX +
                          'px, ' +
                          i.currentY +
                          'px,0)'
                      );
                  }
                }
              },
              onTouchEnd: function () {
                var e = this.zoom,
                  t = e.gesture,
                  a = e.image,
                  r = e.velocity;
                if (t.$imageEl && 0 !== t.$imageEl.length) {
                  if (!a.isTouched || !a.isMoved)
                    return (a.isTouched = !1), void (a.isMoved = !1);
                  (a.isTouched = !1), (a.isMoved = !1);
                  var i = 300,
                    s = 300,
                    n = r.x * i,
                    o = a.currentX + n,
                    l = r.y * s,
                    c = a.currentY + l;
                  0 !== r.x && (i = Math.abs((o - a.currentX) / r.x)),
                    0 !== r.y && (s = Math.abs((c - a.currentY) / r.y));
                  var d = Math.max(i, s);
                  (a.currentX = o), (a.currentY = c);
                  var u = a.width * e.scale,
                    p = a.height * e.scale;
                  (a.minX = Math.min(t.slideWidth / 2 - u / 2, 0)),
                    (a.maxX = -a.minX),
                    (a.minY = Math.min(t.slideHeight / 2 - p / 2, 0)),
                    (a.maxY = -a.minY),
                    (a.currentX = Math.max(
                      Math.min(a.currentX, a.maxX),
                      a.minX
                    )),
                    (a.currentY = Math.max(
                      Math.min(a.currentY, a.maxY),
                      a.minY
                    )),
                    t.$imageWrapEl
                      .transition(d)
                      .transform(
                        'translate3d(' +
                          a.currentX +
                          'px, ' +
                          a.currentY +
                          'px,0)'
                      );
                }
              },
              onTransitionEnd: function () {
                var e = this,
                  t = e.zoom,
                  a = t.gesture;
                a.$slideEl &&
                  e.previousIndex !== e.activeIndex &&
                  (a.$imageEl &&
                    a.$imageEl.transform('translate3d(0,0,0) scale(1)'),
                  a.$imageWrapEl &&
                    a.$imageWrapEl.transform('translate3d(0,0,0)'),
                  (t.scale = 1),
                  (t.currentScale = 1),
                  (a.$slideEl = void 0),
                  (a.$imageEl = void 0),
                  (a.$imageWrapEl = void 0));
              },
              toggle: function (e) {
                var t = this.zoom;
                t.scale && 1 !== t.scale ? t.out() : t.in(e);
              },
              in: function (e) {
                var t,
                  a,
                  r,
                  i,
                  s,
                  n,
                  l,
                  c,
                  d,
                  u,
                  p,
                  m,
                  f,
                  h,
                  v,
                  b,
                  y = this,
                  w = o(),
                  E = y.zoom,
                  S = y.params.zoom,
                  x = E.gesture,
                  C = E.image;
                x.$slideEl ||
                  (e &&
                    e.target &&
                    (x.$slideEl = g(e.target).closest(
                      '.' + y.params.slideClass
                    )),
                  x.$slideEl ||
                    (y.params.virtual && y.params.virtual.enabled && y.virtual
                      ? (x.$slideEl = y.$wrapperEl.children(
                          '.' + y.params.slideActiveClass
                        ))
                      : (x.$slideEl = y.slides.eq(y.activeIndex))),
                  (x.$imageEl = x.$slideEl.find(
                    'img, svg, canvas, picture, .swiper-zoom-target'
                  )),
                  (x.$imageWrapEl = x.$imageEl.parent('.' + S.containerClass))),
                  x.$imageEl &&
                    0 !== x.$imageEl.length &&
                    x.$imageWrapEl &&
                    0 !== x.$imageWrapEl.length &&
                    (x.$slideEl.addClass('' + S.zoomedSlideClass),
                    void 0 === C.touchesStart.x && e
                      ? ((t =
                          'touchend' === e.type
                            ? e.changedTouches[0].pageX
                            : e.pageX),
                        (a =
                          'touchend' === e.type
                            ? e.changedTouches[0].pageY
                            : e.pageY))
                      : ((t = C.touchesStart.x), (a = C.touchesStart.y)),
                    (E.scale =
                      x.$imageWrapEl.attr('data-swiper-zoom') || S.maxRatio),
                    (E.currentScale =
                      x.$imageWrapEl.attr('data-swiper-zoom') || S.maxRatio),
                    e
                      ? ((v = x.$slideEl[0].offsetWidth),
                        (b = x.$slideEl[0].offsetHeight),
                        (r = x.$slideEl.offset().left + w.scrollX + v / 2 - t),
                        (i = x.$slideEl.offset().top + w.scrollY + b / 2 - a),
                        (l = x.$imageEl[0].offsetWidth),
                        (c = x.$imageEl[0].offsetHeight),
                        (d = l * E.scale),
                        (u = c * E.scale),
                        (f = -(p = Math.min(v / 2 - d / 2, 0))),
                        (h = -(m = Math.min(b / 2 - u / 2, 0))),
                        (s = r * E.scale) < p && (s = p),
                        s > f && (s = f),
                        (n = i * E.scale) < m && (n = m),
                        n > h && (n = h))
                      : ((s = 0), (n = 0)),
                    x.$imageWrapEl
                      .transition(300)
                      .transform('translate3d(' + s + 'px, ' + n + 'px,0)'),
                    x.$imageEl
                      .transition(300)
                      .transform('translate3d(0,0,0) scale(' + E.scale + ')'));
              },
              out: function () {
                var e = this,
                  t = e.zoom,
                  a = e.params.zoom,
                  r = t.gesture;
                r.$slideEl ||
                  (e.params.virtual && e.params.virtual.enabled && e.virtual
                    ? (r.$slideEl = e.$wrapperEl.children(
                        '.' + e.params.slideActiveClass
                      ))
                    : (r.$slideEl = e.slides.eq(e.activeIndex)),
                  (r.$imageEl = r.$slideEl.find(
                    'img, svg, canvas, picture, .swiper-zoom-target'
                  )),
                  (r.$imageWrapEl = r.$imageEl.parent('.' + a.containerClass))),
                  r.$imageEl &&
                    0 !== r.$imageEl.length &&
                    r.$imageWrapEl &&
                    0 !== r.$imageWrapEl.length &&
                    ((t.scale = 1),
                    (t.currentScale = 1),
                    r.$imageWrapEl
                      .transition(300)
                      .transform('translate3d(0,0,0)'),
                    r.$imageEl
                      .transition(300)
                      .transform('translate3d(0,0,0) scale(1)'),
                    r.$slideEl.removeClass('' + a.zoomedSlideClass),
                    (r.$slideEl = void 0));
              },
              toggleGestures: function (e) {
                var t = this,
                  a = t.zoom,
                  r = a.slideSelector,
                  i = a.passiveListener;
                t.$wrapperEl[e]('gesturestart', r, a.onGestureStart, i),
                  t.$wrapperEl[e]('gesturechange', r, a.onGestureChange, i),
                  t.$wrapperEl[e]('gestureend', r, a.onGestureEnd, i);
              },
              enableGestures: function () {
                this.zoom.gesturesEnabled ||
                  ((this.zoom.gesturesEnabled = !0),
                  this.zoom.toggleGestures('on'));
              },
              disableGestures: function () {
                this.zoom.gesturesEnabled &&
                  ((this.zoom.gesturesEnabled = !1),
                  this.zoom.toggleGestures('off'));
              },
              enable: function () {
                var e = this,
                  t = e.support,
                  a = e.zoom;
                if (!a.enabled) {
                  a.enabled = !0;
                  var r = !(
                      'touchstart' !== e.touchEvents.start ||
                      !t.passiveListener ||
                      !e.params.passiveListeners
                    ) && { passive: !0, capture: !1 },
                    i = !t.passiveListener || { passive: !1, capture: !0 },
                    s = '.' + e.params.slideClass;
                  (e.zoom.passiveListener = r),
                    (e.zoom.slideSelector = s),
                    t.gestures
                      ? (e.$wrapperEl.on(
                          e.touchEvents.start,
                          e.zoom.enableGestures,
                          r
                        ),
                        e.$wrapperEl.on(
                          e.touchEvents.end,
                          e.zoom.disableGestures,
                          r
                        ))
                      : 'touchstart' === e.touchEvents.start &&
                        (e.$wrapperEl.on(
                          e.touchEvents.start,
                          s,
                          a.onGestureStart,
                          r
                        ),
                        e.$wrapperEl.on(
                          e.touchEvents.move,
                          s,
                          a.onGestureChange,
                          i
                        ),
                        e.$wrapperEl.on(
                          e.touchEvents.end,
                          s,
                          a.onGestureEnd,
                          r
                        ),
                        e.touchEvents.cancel &&
                          e.$wrapperEl.on(
                            e.touchEvents.cancel,
                            s,
                            a.onGestureEnd,
                            r
                          )),
                    e.$wrapperEl.on(
                      e.touchEvents.move,
                      '.' + e.params.zoom.containerClass,
                      a.onTouchMove,
                      i
                    );
                }
              },
              disable: function () {
                var e = this,
                  t = e.zoom;
                if (t.enabled) {
                  var a = e.support;
                  e.zoom.enabled = !1;
                  var r = !(
                      'touchstart' !== e.touchEvents.start ||
                      !a.passiveListener ||
                      !e.params.passiveListeners
                    ) && { passive: !0, capture: !1 },
                    i = !a.passiveListener || { passive: !1, capture: !0 },
                    s = '.' + e.params.slideClass;
                  a.gestures
                    ? (e.$wrapperEl.off(
                        e.touchEvents.start,
                        e.zoom.enableGestures,
                        r
                      ),
                      e.$wrapperEl.off(
                        e.touchEvents.end,
                        e.zoom.disableGestures,
                        r
                      ))
                    : 'touchstart' === e.touchEvents.start &&
                      (e.$wrapperEl.off(
                        e.touchEvents.start,
                        s,
                        t.onGestureStart,
                        r
                      ),
                      e.$wrapperEl.off(
                        e.touchEvents.move,
                        s,
                        t.onGestureChange,
                        i
                      ),
                      e.$wrapperEl.off(e.touchEvents.end, s, t.onGestureEnd, r),
                      e.touchEvents.cancel &&
                        e.$wrapperEl.off(
                          e.touchEvents.cancel,
                          s,
                          t.onGestureEnd,
                          r
                        )),
                    e.$wrapperEl.off(
                      e.touchEvents.move,
                      '.' + e.params.zoom.containerClass,
                      t.onTouchMove,
                      i
                    );
                }
              },
            },
            re = {
              loadInSlide: function (e, t) {
                void 0 === t && (t = !0);
                var a = this,
                  r = a.params.lazy;
                if (void 0 !== e && 0 !== a.slides.length) {
                  var i =
                      a.virtual && a.params.virtual.enabled
                        ? a.$wrapperEl.children(
                            '.' +
                              a.params.slideClass +
                              '[data-swiper-slide-index="' +
                              e +
                              '"]'
                          )
                        : a.slides.eq(e),
                    s = i.find(
                      '.' +
                        r.elementClass +
                        ':not(.' +
                        r.loadedClass +
                        '):not(.' +
                        r.loadingClass +
                        ')'
                    );
                  !i.hasClass(r.elementClass) ||
                    i.hasClass(r.loadedClass) ||
                    i.hasClass(r.loadingClass) ||
                    s.push(i[0]),
                    0 !== s.length &&
                      s.each(function (e) {
                        var s = g(e);
                        s.addClass(r.loadingClass);
                        var n = s.attr('data-background'),
                          o = s.attr('data-src'),
                          l = s.attr('data-srcset'),
                          c = s.attr('data-sizes'),
                          d = s.parent('picture');
                        a.loadImage(s[0], o || n, l, c, !1, function () {
                          if (
                            null != a &&
                            a &&
                            (!a || a.params) &&
                            !a.destroyed
                          ) {
                            if (
                              (n
                                ? (s.css(
                                    'background-image',
                                    'url("' + n + '")'
                                  ),
                                  s.removeAttr('data-background'))
                                : (l &&
                                    (s.attr('srcset', l),
                                    s.removeAttr('data-srcset')),
                                  c &&
                                    (s.attr('sizes', c),
                                    s.removeAttr('data-sizes')),
                                  d.length &&
                                    d.children('source').each(function (e) {
                                      var t = g(e);
                                      t.attr('data-srcset') &&
                                        (t.attr(
                                          'srcset',
                                          t.attr('data-srcset')
                                        ),
                                        t.removeAttr('data-srcset'));
                                    }),
                                  o &&
                                    (s.attr('src', o),
                                    s.removeAttr('data-src'))),
                              s
                                .addClass(r.loadedClass)
                                .removeClass(r.loadingClass),
                              i.find('.' + r.preloaderClass).remove(),
                              a.params.loop && t)
                            ) {
                              var e = i.attr('data-swiper-slide-index');
                              if (i.hasClass(a.params.slideDuplicateClass)) {
                                var u = a.$wrapperEl.children(
                                  '[data-swiper-slide-index="' +
                                    e +
                                    '"]:not(.' +
                                    a.params.slideDuplicateClass +
                                    ')'
                                );
                                a.lazy.loadInSlide(u.index(), !1);
                              } else {
                                var p = a.$wrapperEl.children(
                                  '.' +
                                    a.params.slideDuplicateClass +
                                    '[data-swiper-slide-index="' +
                                    e +
                                    '"]'
                                );
                                a.lazy.loadInSlide(p.index(), !1);
                              }
                            }
                            a.emit('lazyImageReady', i[0], s[0]),
                              a.params.autoHeight && a.updateAutoHeight();
                          }
                        }),
                          a.emit('lazyImageLoad', i[0], s[0]);
                      });
                }
              },
              load: function () {
                var e = this,
                  t = e.$wrapperEl,
                  a = e.params,
                  r = e.slides,
                  i = e.activeIndex,
                  s = e.virtual && a.virtual.enabled,
                  n = a.lazy,
                  o = a.slidesPerView;
                function l(e) {
                  if (s) {
                    if (
                      t.children(
                        '.' +
                          a.slideClass +
                          '[data-swiper-slide-index="' +
                          e +
                          '"]'
                      ).length
                    )
                      return !0;
                  } else if (r[e]) return !0;
                  return !1;
                }
                function c(e) {
                  return s
                    ? g(e).attr('data-swiper-slide-index')
                    : g(e).index();
                }
                if (
                  ('auto' === o && (o = 0),
                  e.lazy.initialImageLoaded || (e.lazy.initialImageLoaded = !0),
                  e.params.watchSlidesVisibility)
                )
                  t.children('.' + a.slideVisibleClass).each(function (t) {
                    var a = s
                      ? g(t).attr('data-swiper-slide-index')
                      : g(t).index();
                    e.lazy.loadInSlide(a);
                  });
                else if (o > 1)
                  for (var d = i; d < i + o; d += 1)
                    l(d) && e.lazy.loadInSlide(d);
                else e.lazy.loadInSlide(i);
                if (n.loadPrevNext)
                  if (
                    o > 1 ||
                    (n.loadPrevNextAmount && n.loadPrevNextAmount > 1)
                  ) {
                    for (
                      var u = n.loadPrevNextAmount,
                        p = o,
                        m = Math.min(i + p + Math.max(u, p), r.length),
                        f = Math.max(i - Math.max(p, u), 0),
                        h = i + o;
                      h < m;
                      h += 1
                    )
                      l(h) && e.lazy.loadInSlide(h);
                    for (var v = f; v < i; v += 1)
                      l(v) && e.lazy.loadInSlide(v);
                  } else {
                    var b = t.children('.' + a.slideNextClass);
                    b.length > 0 && e.lazy.loadInSlide(c(b));
                    var y = t.children('.' + a.slidePrevClass);
                    y.length > 0 && e.lazy.loadInSlide(c(y));
                  }
              },
              checkInViewOnLoad: function () {
                var e = o(),
                  t = this;
                if (t && !t.destroyed) {
                  var a = t.params.lazy.scrollingElement
                      ? g(t.params.lazy.scrollingElement)
                      : g(e),
                    r = a[0] === e,
                    i = r ? e.innerWidth : a[0].offsetWidth,
                    s = r ? e.innerHeight : a[0].offsetHeight,
                    n = t.$el.offset(),
                    l = !1;
                  t.rtlTranslate && (n.left -= t.$el[0].scrollLeft);
                  for (
                    var c = [
                        [n.left, n.top],
                        [n.left + t.width, n.top],
                        [n.left, n.top + t.height],
                        [n.left + t.width, n.top + t.height],
                      ],
                      d = 0;
                    d < c.length;
                    d += 1
                  ) {
                    var u = c[d];
                    if (u[0] >= 0 && u[0] <= i && u[1] >= 0 && u[1] <= s) {
                      if (0 === u[0] && 0 === u[1]) continue;
                      l = !0;
                    }
                  }
                  var p = !(
                    'touchstart' !== t.touchEvents.start ||
                    !t.support.passiveListener ||
                    !t.params.passiveListeners
                  ) && { passive: !0, capture: !1 };
                  l
                    ? (t.lazy.load(),
                      a.off('scroll', t.lazy.checkInViewOnLoad, p))
                    : t.lazy.scrollHandlerAttached ||
                      ((t.lazy.scrollHandlerAttached = !0),
                      a.on('scroll', t.lazy.checkInViewOnLoad, p));
                }
              },
            },
            ie = {
              LinearSpline: function (e, t) {
                var a, r, i, s, n;
                return (
                  (this.x = e),
                  (this.y = t),
                  (this.lastIndex = e.length - 1),
                  (this.interpolate = function (e) {
                    return e
                      ? ((n = (function (e, t) {
                          for (r = -1, a = e.length; a - r > 1; )
                            e[(i = (a + r) >> 1)] <= t ? (r = i) : (a = i);
                          return a;
                        })(this.x, e)),
                        (s = n - 1),
                        ((e - this.x[s]) * (this.y[n] - this.y[s])) /
                          (this.x[n] - this.x[s]) +
                          this.y[s])
                      : 0;
                  }),
                  this
                );
              },
              getInterpolateFunction: function (e) {
                var t = this;
                t.controller.spline ||
                  (t.controller.spline = t.params.loop
                    ? new ie.LinearSpline(t.slidesGrid, e.slidesGrid)
                    : new ie.LinearSpline(t.snapGrid, e.snapGrid));
              },
              setTranslate: function (e, t) {
                var a,
                  r,
                  i = this,
                  s = i.controller.control,
                  n = i.constructor;
                function o(e) {
                  var t = i.rtlTranslate ? -i.translate : i.translate;
                  'slide' === i.params.controller.by &&
                    (i.controller.getInterpolateFunction(e),
                    (r = -i.controller.spline.interpolate(-t))),
                    (r && 'container' !== i.params.controller.by) ||
                      ((a =
                        (e.maxTranslate() - e.minTranslate()) /
                        (i.maxTranslate() - i.minTranslate())),
                      (r = (t - i.minTranslate()) * a + e.minTranslate())),
                    i.params.controller.inverse && (r = e.maxTranslate() - r),
                    e.updateProgress(r),
                    e.setTranslate(r, i),
                    e.updateActiveIndex(),
                    e.updateSlidesClasses();
                }
                if (Array.isArray(s))
                  for (var l = 0; l < s.length; l += 1)
                    s[l] !== t && s[l] instanceof n && o(s[l]);
                else s instanceof n && t !== s && o(s);
              },
              setTransition: function (e, t) {
                var a,
                  r = this,
                  i = r.constructor,
                  s = r.controller.control;
                function n(t) {
                  t.setTransition(e, r),
                    0 !== e &&
                      (t.transitionStart(),
                      t.params.autoHeight &&
                        E(function () {
                          t.updateAutoHeight();
                        }),
                      t.$wrapperEl.transitionEnd(function () {
                        s &&
                          (t.params.loop &&
                            'slide' === r.params.controller.by &&
                            t.loopFix(),
                          t.transitionEnd());
                      }));
                }
                if (Array.isArray(s))
                  for (a = 0; a < s.length; a += 1)
                    s[a] !== t && s[a] instanceof i && n(s[a]);
                else s instanceof i && t !== s && n(s);
              },
            },
            se = {
              getRandomNumber: function (e) {
                void 0 === e && (e = 16);
                return 'x'.repeat(e).replace(/x/g, function () {
                  return Math.round(16 * Math.random()).toString(16);
                });
              },
              makeElFocusable: function (e) {
                return e.attr('tabIndex', '0'), e;
              },
              makeElNotFocusable: function (e) {
                return e.attr('tabIndex', '-1'), e;
              },
              addElRole: function (e, t) {
                return e.attr('role', t), e;
              },
              addElRoleDescription: function (e, t) {
                return e.attr('aria-roledescription', t), e;
              },
              addElControls: function (e, t) {
                return e.attr('aria-controls', t), e;
              },
              addElLabel: function (e, t) {
                return e.attr('aria-label', t), e;
              },
              addElId: function (e, t) {
                return e.attr('id', t), e;
              },
              addElLive: function (e, t) {
                return e.attr('aria-live', t), e;
              },
              disableEl: function (e) {
                return e.attr('aria-disabled', !0), e;
              },
              enableEl: function (e) {
                return e.attr('aria-disabled', !1), e;
              },
              onEnterOrSpaceKey: function (e) {
                if (13 === e.keyCode || 32 === e.keyCode) {
                  var t = this,
                    a = t.params.a11y,
                    r = g(e.target);
                  t.navigation &&
                    t.navigation.$nextEl &&
                    r.is(t.navigation.$nextEl) &&
                    ((t.isEnd && !t.params.loop) || t.slideNext(),
                    t.isEnd
                      ? t.a11y.notify(a.lastSlideMessage)
                      : t.a11y.notify(a.nextSlideMessage)),
                    t.navigation &&
                      t.navigation.$prevEl &&
                      r.is(t.navigation.$prevEl) &&
                      ((t.isBeginning && !t.params.loop) || t.slidePrev(),
                      t.isBeginning
                        ? t.a11y.notify(a.firstSlideMessage)
                        : t.a11y.notify(a.prevSlideMessage)),
                    t.pagination &&
                      r.is(M(t.params.pagination.bulletClass)) &&
                      r[0].click();
                }
              },
              notify: function (e) {
                var t = this.a11y.liveRegion;
                0 !== t.length && (t.html(''), t.html(e));
              },
              updateNavigation: function () {
                var e = this;
                if (!e.params.loop && e.navigation) {
                  var t = e.navigation,
                    a = t.$nextEl,
                    r = t.$prevEl;
                  r &&
                    r.length > 0 &&
                    (e.isBeginning
                      ? (e.a11y.disableEl(r), e.a11y.makeElNotFocusable(r))
                      : (e.a11y.enableEl(r), e.a11y.makeElFocusable(r))),
                    a &&
                      a.length > 0 &&
                      (e.isEnd
                        ? (e.a11y.disableEl(a), e.a11y.makeElNotFocusable(a))
                        : (e.a11y.enableEl(a), e.a11y.makeElFocusable(a)));
                }
              },
              updatePagination: function () {
                var e = this,
                  t = e.params.a11y;
                e.pagination &&
                  e.params.pagination.clickable &&
                  e.pagination.bullets &&
                  e.pagination.bullets.length &&
                  e.pagination.bullets.each(function (a) {
                    var r = g(a);
                    e.a11y.makeElFocusable(r),
                      e.params.pagination.renderBullet ||
                        (e.a11y.addElRole(r, 'button'),
                        e.a11y.addElLabel(
                          r,
                          t.paginationBulletMessage.replace(
                            /\{\{index\}\}/,
                            r.index() + 1
                          )
                        ));
                  });
              },
              init: function () {
                var e = this,
                  t = e.params.a11y;
                e.$el.append(e.a11y.liveRegion);
                var a = e.$el;
                t.containerRoleDescriptionMessage &&
                  e.a11y.addElRoleDescription(
                    a,
                    t.containerRoleDescriptionMessage
                  ),
                  t.containerMessage &&
                    e.a11y.addElLabel(a, t.containerMessage);
                var r,
                  i,
                  s = e.$wrapperEl,
                  n =
                    s.attr('id') ||
                    'swiper-wrapper-' + e.a11y.getRandomNumber(16),
                  o =
                    e.params.autoplay && e.params.autoplay.enabled
                      ? 'off'
                      : 'polite';
                e.a11y.addElId(s, n),
                  e.a11y.addElLive(s, o),
                  t.itemRoleDescriptionMessage &&
                    e.a11y.addElRoleDescription(
                      g(e.slides),
                      t.itemRoleDescriptionMessage
                    ),
                  e.a11y.addElRole(g(e.slides), t.slideRole),
                  e.slides.each(function (a) {
                    var r = g(a),
                      i = t.slideLabelMessage
                        .replace(/\{\{index\}\}/, r.index() + 1)
                        .replace(/\{\{slidesLength\}\}/, e.slides.length);
                    e.a11y.addElLabel(r, i);
                  }),
                  e.navigation &&
                    e.navigation.$nextEl &&
                    (r = e.navigation.$nextEl),
                  e.navigation &&
                    e.navigation.$prevEl &&
                    (i = e.navigation.$prevEl),
                  r &&
                    r.length &&
                    (e.a11y.makeElFocusable(r),
                    'BUTTON' !== r[0].tagName &&
                      (e.a11y.addElRole(r, 'button'),
                      r.on('keydown', e.a11y.onEnterOrSpaceKey)),
                    e.a11y.addElLabel(r, t.nextSlideMessage),
                    e.a11y.addElControls(r, n)),
                  i &&
                    i.length &&
                    (e.a11y.makeElFocusable(i),
                    'BUTTON' !== i[0].tagName &&
                      (e.a11y.addElRole(i, 'button'),
                      i.on('keydown', e.a11y.onEnterOrSpaceKey)),
                    e.a11y.addElLabel(i, t.prevSlideMessage),
                    e.a11y.addElControls(i, n)),
                  e.pagination &&
                    e.params.pagination.clickable &&
                    e.pagination.bullets &&
                    e.pagination.bullets.length &&
                    e.pagination.$el.on(
                      'keydown',
                      M(e.params.pagination.bulletClass),
                      e.a11y.onEnterOrSpaceKey
                    );
              },
              destroy: function () {
                var e,
                  t,
                  a = this;
                a.a11y.liveRegion &&
                  a.a11y.liveRegion.length > 0 &&
                  a.a11y.liveRegion.remove(),
                  a.navigation &&
                    a.navigation.$nextEl &&
                    (e = a.navigation.$nextEl),
                  a.navigation &&
                    a.navigation.$prevEl &&
                    (t = a.navigation.$prevEl),
                  e && e.off('keydown', a.a11y.onEnterOrSpaceKey),
                  t && t.off('keydown', a.a11y.onEnterOrSpaceKey),
                  a.pagination &&
                    a.params.pagination.clickable &&
                    a.pagination.bullets &&
                    a.pagination.bullets.length &&
                    a.pagination.$el.off(
                      'keydown',
                      M(a.params.pagination.bulletClass),
                      a.a11y.onEnterOrSpaceKey
                    );
              },
            },
            ne = {
              init: function () {
                var e = this,
                  t = o();
                if (e.params.history) {
                  if (!t.history || !t.history.pushState)
                    return (
                      (e.params.history.enabled = !1),
                      void (e.params.hashNavigation.enabled = !0)
                    );
                  var a = e.history;
                  (a.initialized = !0),
                    (a.paths = ne.getPathValues(e.params.url)),
                    (a.paths.key || a.paths.value) &&
                      (a.scrollToSlide(
                        0,
                        a.paths.value,
                        e.params.runCallbacksOnInit
                      ),
                      e.params.history.replaceState ||
                        t.addEventListener(
                          'popstate',
                          e.history.setHistoryPopState
                        ));
                }
              },
              destroy: function () {
                var e = o();
                this.params.history.replaceState ||
                  e.removeEventListener(
                    'popstate',
                    this.history.setHistoryPopState
                  );
              },
              setHistoryPopState: function () {
                var e = this;
                (e.history.paths = ne.getPathValues(e.params.url)),
                  e.history.scrollToSlide(
                    e.params.speed,
                    e.history.paths.value,
                    !1
                  );
              },
              getPathValues: function (e) {
                var t = o(),
                  a = (e ? new URL(e) : t.location).pathname
                    .slice(1)
                    .split('/')
                    .filter(function (e) {
                      return '' !== e;
                    }),
                  r = a.length;
                return { key: a[r - 2], value: a[r - 1] };
              },
              setHistory: function (e, t) {
                var a = this,
                  r = o();
                if (a.history.initialized && a.params.history.enabled) {
                  var i;
                  i = a.params.url ? new URL(a.params.url) : r.location;
                  var s = a.slides.eq(t),
                    n = ne.slugify(s.attr('data-history'));
                  if (a.params.history.root.length > 0) {
                    var l = a.params.history.root;
                    '/' === l[l.length - 1] && (l = l.slice(0, l.length - 1)),
                      (n = l + '/' + e + '/' + n);
                  } else i.pathname.includes(e) || (n = e + '/' + n);
                  var c = r.history.state;
                  (c && c.value === n) ||
                    (a.params.history.replaceState
                      ? r.history.replaceState({ value: n }, null, n)
                      : r.history.pushState({ value: n }, null, n));
                }
              },
              slugify: function (e) {
                return e
                  .toString()
                  .replace(/\s+/g, '-')
                  .replace(/[^\w-]+/g, '')
                  .replace(/--+/g, '-')
                  .replace(/^-+/, '')
                  .replace(/-+$/, '');
              },
              scrollToSlide: function (e, t, a) {
                var r = this;
                if (t)
                  for (var i = 0, s = r.slides.length; i < s; i += 1) {
                    var n = r.slides.eq(i);
                    if (
                      ne.slugify(n.attr('data-history')) === t &&
                      !n.hasClass(r.params.slideDuplicateClass)
                    ) {
                      var o = n.index();
                      r.slideTo(o, e, a);
                    }
                  }
                else r.slideTo(0, e, a);
              },
            },
            oe = {
              onHashCange: function () {
                var e = this,
                  t = s();
                e.emit('hashChange');
                var a = t.location.hash.replace('#', '');
                if (a !== e.slides.eq(e.activeIndex).attr('data-hash')) {
                  var r = e.$wrapperEl
                    .children(
                      '.' + e.params.slideClass + '[data-hash="' + a + '"]'
                    )
                    .index();
                  if (void 0 === r) return;
                  e.slideTo(r);
                }
              },
              setHash: function () {
                var e = this,
                  t = o(),
                  a = s();
                if (
                  e.hashNavigation.initialized &&
                  e.params.hashNavigation.enabled
                )
                  if (
                    e.params.hashNavigation.replaceState &&
                    t.history &&
                    t.history.replaceState
                  )
                    t.history.replaceState(
                      null,
                      null,
                      '#' + e.slides.eq(e.activeIndex).attr('data-hash') || 0
                    ),
                      e.emit('hashSet');
                  else {
                    var r = e.slides.eq(e.activeIndex),
                      i = r.attr('data-hash') || r.attr('data-history');
                    (a.location.hash = i || ''), e.emit('hashSet');
                  }
              },
              init: function () {
                var e = this,
                  t = s(),
                  a = o();
                if (
                  !(
                    !e.params.hashNavigation.enabled ||
                    (e.params.history && e.params.history.enabled)
                  )
                ) {
                  e.hashNavigation.initialized = !0;
                  var r = t.location.hash.replace('#', '');
                  if (r)
                    for (var i = 0, n = e.slides.length; i < n; i += 1) {
                      var l = e.slides.eq(i);
                      if (
                        (l.attr('data-hash') || l.attr('data-history')) === r &&
                        !l.hasClass(e.params.slideDuplicateClass)
                      ) {
                        var c = l.index();
                        e.slideTo(c, 0, e.params.runCallbacksOnInit, !0);
                      }
                    }
                  e.params.hashNavigation.watchState &&
                    g(a).on('hashchange', e.hashNavigation.onHashCange);
                }
              },
              destroy: function () {
                var e = o();
                this.params.hashNavigation.watchState &&
                  g(e).off('hashchange', this.hashNavigation.onHashCange);
              },
            },
            le = {
              run: function () {
                var e = this,
                  t = e.slides.eq(e.activeIndex),
                  a = e.params.autoplay.delay;
                t.attr('data-swiper-autoplay') &&
                  (a =
                    t.attr('data-swiper-autoplay') || e.params.autoplay.delay),
                  clearTimeout(e.autoplay.timeout),
                  (e.autoplay.timeout = E(function () {
                    var t;
                    e.params.autoplay.reverseDirection
                      ? e.params.loop
                        ? (e.loopFix(),
                          (t = e.slidePrev(e.params.speed, !0, !0)),
                          e.emit('autoplay'))
                        : e.isBeginning
                        ? e.params.autoplay.stopOnLastSlide
                          ? e.autoplay.stop()
                          : ((t = e.slideTo(
                              e.slides.length - 1,
                              e.params.speed,
                              !0,
                              !0
                            )),
                            e.emit('autoplay'))
                        : ((t = e.slidePrev(e.params.speed, !0, !0)),
                          e.emit('autoplay'))
                      : e.params.loop
                      ? (e.loopFix(),
                        (t = e.slideNext(e.params.speed, !0, !0)),
                        e.emit('autoplay'))
                      : e.isEnd
                      ? e.params.autoplay.stopOnLastSlide
                        ? e.autoplay.stop()
                        : ((t = e.slideTo(0, e.params.speed, !0, !0)),
                          e.emit('autoplay'))
                      : ((t = e.slideNext(e.params.speed, !0, !0)),
                        e.emit('autoplay')),
                      ((e.params.cssMode && e.autoplay.running) || !1 === t) &&
                        e.autoplay.run();
                  }, a));
              },
              start: function () {
                var e = this;
                return (
                  void 0 === e.autoplay.timeout &&
                  !e.autoplay.running &&
                  ((e.autoplay.running = !0),
                  e.emit('autoplayStart'),
                  e.autoplay.run(),
                  !0)
                );
              },
              stop: function () {
                var e = this;
                return (
                  !!e.autoplay.running &&
                  void 0 !== e.autoplay.timeout &&
                  (e.autoplay.timeout &&
                    (clearTimeout(e.autoplay.timeout),
                    (e.autoplay.timeout = void 0)),
                  (e.autoplay.running = !1),
                  e.emit('autoplayStop'),
                  !0)
                );
              },
              pause: function (e) {
                var t = this;
                t.autoplay.running &&
                  (t.autoplay.paused ||
                    (t.autoplay.timeout && clearTimeout(t.autoplay.timeout),
                    (t.autoplay.paused = !0),
                    0 !== e && t.params.autoplay.waitForTransition
                      ? ['transitionend', 'webkitTransitionEnd'].forEach(
                          function (e) {
                            t.$wrapperEl[0].addEventListener(
                              e,
                              t.autoplay.onTransitionEnd
                            );
                          }
                        )
                      : ((t.autoplay.paused = !1), t.autoplay.run())));
              },
              onVisibilityChange: function () {
                var e = this,
                  t = s();
                'hidden' === t.visibilityState &&
                  e.autoplay.running &&
                  e.autoplay.pause(),
                  'visible' === t.visibilityState &&
                    e.autoplay.paused &&
                    (e.autoplay.run(), (e.autoplay.paused = !1));
              },
              onTransitionEnd: function (e) {
                var t = this;
                t &&
                  !t.destroyed &&
                  t.$wrapperEl &&
                  e.target === t.$wrapperEl[0] &&
                  (['transitionend', 'webkitTransitionEnd'].forEach(function (
                    e
                  ) {
                    t.$wrapperEl[0].removeEventListener(
                      e,
                      t.autoplay.onTransitionEnd
                    );
                  }),
                  (t.autoplay.paused = !1),
                  t.autoplay.running ? t.autoplay.run() : t.autoplay.stop());
              },
              onMouseEnter: function () {
                var e = this;
                e.params.autoplay.disableOnInteraction
                  ? e.autoplay.stop()
                  : e.autoplay.pause(),
                  ['transitionend', 'webkitTransitionEnd'].forEach(function (
                    t
                  ) {
                    e.$wrapperEl[0].removeEventListener(
                      t,
                      e.autoplay.onTransitionEnd
                    );
                  });
              },
              onMouseLeave: function () {
                var e = this;
                e.params.autoplay.disableOnInteraction ||
                  ((e.autoplay.paused = !1), e.autoplay.run());
              },
              attachMouseEvents: function () {
                var e = this;
                e.params.autoplay.pauseOnMouseEnter &&
                  (e.$el.on('mouseenter', e.autoplay.onMouseEnter),
                  e.$el.on('mouseleave', e.autoplay.onMouseLeave));
              },
              detachMouseEvents: function () {
                var e = this;
                e.$el.off('mouseenter', e.autoplay.onMouseEnter),
                  e.$el.off('mouseleave', e.autoplay.onMouseLeave);
              },
            },
            ce = {
              setTranslate: function () {
                for (var e = this, t = e.slides, a = 0; a < t.length; a += 1) {
                  var r = e.slides.eq(a),
                    i = -r[0].swiperSlideOffset;
                  e.params.virtualTranslate || (i -= e.translate);
                  var s = 0;
                  e.isHorizontal() || ((s = i), (i = 0));
                  var n = e.params.fadeEffect.crossFade
                    ? Math.max(1 - Math.abs(r[0].progress), 0)
                    : 1 + Math.min(Math.max(r[0].progress, -1), 0);
                  r.css({ opacity: n }).transform(
                    'translate3d(' + i + 'px, ' + s + 'px, 0px)'
                  );
                }
              },
              setTransition: function (e) {
                var t = this,
                  a = t.slides,
                  r = t.$wrapperEl;
                if ((a.transition(e), t.params.virtualTranslate && 0 !== e)) {
                  var i = !1;
                  a.transitionEnd(function () {
                    if (!i && t && !t.destroyed) {
                      (i = !0), (t.animating = !1);
                      for (
                        var e = ['webkitTransitionEnd', 'transitionend'], a = 0;
                        a < e.length;
                        a += 1
                      )
                        r.trigger(e[a]);
                    }
                  });
                }
              },
            },
            de = {
              setTranslate: function () {
                var e,
                  t = this,
                  a = t.$el,
                  r = t.$wrapperEl,
                  i = t.slides,
                  s = t.width,
                  n = t.height,
                  o = t.rtlTranslate,
                  l = t.size,
                  c = t.browser,
                  d = t.params.cubeEffect,
                  u = t.isHorizontal(),
                  p = t.virtual && t.params.virtual.enabled,
                  m = 0;
                d.shadow &&
                  (u
                    ? (0 === (e = r.find('.swiper-cube-shadow')).length &&
                        ((e = g('<div class="swiper-cube-shadow"></div>')),
                        r.append(e)),
                      e.css({ height: s + 'px' }))
                    : 0 === (e = a.find('.swiper-cube-shadow')).length &&
                      ((e = g('<div class="swiper-cube-shadow"></div>')),
                      a.append(e)));
                for (var f = 0; f < i.length; f += 1) {
                  var h = i.eq(f),
                    v = f;
                  p && (v = parseInt(h.attr('data-swiper-slide-index'), 10));
                  var b = 90 * v,
                    y = Math.floor(b / 360);
                  o && ((b = -b), (y = Math.floor(-b / 360)));
                  var w = Math.max(Math.min(h[0].progress, 1), -1),
                    E = 0,
                    S = 0,
                    x = 0;
                  v % 4 == 0
                    ? ((E = 4 * -y * l), (x = 0))
                    : (v - 1) % 4 == 0
                    ? ((E = 0), (x = 4 * -y * l))
                    : (v - 2) % 4 == 0
                    ? ((E = l + 4 * y * l), (x = l))
                    : (v - 3) % 4 == 0 && ((E = -l), (x = 3 * l + 4 * l * y)),
                    o && (E = -E),
                    u || ((S = E), (E = 0));
                  var C =
                    'rotateX(' +
                    (u ? 0 : -b) +
                    'deg) rotateY(' +
                    (u ? b : 0) +
                    'deg) translate3d(' +
                    E +
                    'px, ' +
                    S +
                    'px, ' +
                    x +
                    'px)';
                  if (
                    (w <= 1 &&
                      w > -1 &&
                      ((m = 90 * v + 90 * w), o && (m = 90 * -v - 90 * w)),
                    h.transform(C),
                    d.slideShadows)
                  ) {
                    var T = u
                        ? h.find('.swiper-slide-shadow-left')
                        : h.find('.swiper-slide-shadow-top'),
                      k = u
                        ? h.find('.swiper-slide-shadow-right')
                        : h.find('.swiper-slide-shadow-bottom');
                    0 === T.length &&
                      ((T = g(
                        '<div class="swiper-slide-shadow-' +
                          (u ? 'left' : 'top') +
                          '"></div>'
                      )),
                      h.append(T)),
                      0 === k.length &&
                        ((k = g(
                          '<div class="swiper-slide-shadow-' +
                            (u ? 'right' : 'bottom') +
                            '"></div>'
                        )),
                        h.append(k)),
                      T.length && (T[0].style.opacity = Math.max(-w, 0)),
                      k.length && (k[0].style.opacity = Math.max(w, 0));
                  }
                }
                if (
                  (r.css({
                    '-webkit-transform-origin': '50% 50% -' + l / 2 + 'px',
                    '-moz-transform-origin': '50% 50% -' + l / 2 + 'px',
                    '-ms-transform-origin': '50% 50% -' + l / 2 + 'px',
                    'transform-origin': '50% 50% -' + l / 2 + 'px',
                  }),
                  d.shadow)
                )
                  if (u)
                    e.transform(
                      'translate3d(0px, ' +
                        (s / 2 + d.shadowOffset) +
                        'px, ' +
                        -s / 2 +
                        'px) rotateX(90deg) rotateZ(0deg) scale(' +
                        d.shadowScale +
                        ')'
                    );
                  else {
                    var M = Math.abs(m) - 90 * Math.floor(Math.abs(m) / 90),
                      L =
                        1.5 -
                        (Math.sin((2 * M * Math.PI) / 360) / 2 +
                          Math.cos((2 * M * Math.PI) / 360) / 2),
                      A = d.shadowScale,
                      _ = d.shadowScale / L,
                      N = d.shadowOffset;
                    e.transform(
                      'scale3d(' +
                        A +
                        ', 1, ' +
                        _ +
                        ') translate3d(0px, ' +
                        (n / 2 + N) +
                        'px, ' +
                        -n / 2 / _ +
                        'px) rotateX(-90deg)'
                    );
                  }
                var $ = c.isSafari || c.isWebView ? -l / 2 : 0;
                r.transform(
                  'translate3d(0px,0,' +
                    $ +
                    'px) rotateX(' +
                    (t.isHorizontal() ? 0 : m) +
                    'deg) rotateY(' +
                    (t.isHorizontal() ? -m : 0) +
                    'deg)'
                );
              },
              setTransition: function (e) {
                var t = this,
                  a = t.$el;
                t.slides
                  .transition(e)
                  .find(
                    '.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left'
                  )
                  .transition(e),
                  t.params.cubeEffect.shadow &&
                    !t.isHorizontal() &&
                    a.find('.swiper-cube-shadow').transition(e);
              },
            },
            ue = {
              setTranslate: function () {
                for (
                  var e = this, t = e.slides, a = e.rtlTranslate, r = 0;
                  r < t.length;
                  r += 1
                ) {
                  var i = t.eq(r),
                    s = i[0].progress;
                  e.params.flipEffect.limitRotation &&
                    (s = Math.max(Math.min(i[0].progress, 1), -1));
                  var n = -180 * s,
                    o = 0,
                    l = -i[0].swiperSlideOffset,
                    c = 0;
                  if (
                    (e.isHorizontal()
                      ? a && (n = -n)
                      : ((c = l), (l = 0), (o = -n), (n = 0)),
                    (i[0].style.zIndex = -Math.abs(Math.round(s)) + t.length),
                    e.params.flipEffect.slideShadows)
                  ) {
                    var d = e.isHorizontal()
                        ? i.find('.swiper-slide-shadow-left')
                        : i.find('.swiper-slide-shadow-top'),
                      u = e.isHorizontal()
                        ? i.find('.swiper-slide-shadow-right')
                        : i.find('.swiper-slide-shadow-bottom');
                    0 === d.length &&
                      ((d = g(
                        '<div class="swiper-slide-shadow-' +
                          (e.isHorizontal() ? 'left' : 'top') +
                          '"></div>'
                      )),
                      i.append(d)),
                      0 === u.length &&
                        ((u = g(
                          '<div class="swiper-slide-shadow-' +
                            (e.isHorizontal() ? 'right' : 'bottom') +
                            '"></div>'
                        )),
                        i.append(u)),
                      d.length && (d[0].style.opacity = Math.max(-s, 0)),
                      u.length && (u[0].style.opacity = Math.max(s, 0));
                  }
                  i.transform(
                    'translate3d(' +
                      l +
                      'px, ' +
                      c +
                      'px, 0px) rotateX(' +
                      o +
                      'deg) rotateY(' +
                      n +
                      'deg)'
                  );
                }
              },
              setTransition: function (e) {
                var t = this,
                  a = t.slides,
                  r = t.activeIndex,
                  i = t.$wrapperEl;
                if (
                  (a
                    .transition(e)
                    .find(
                      '.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left'
                    )
                    .transition(e),
                  t.params.virtualTranslate && 0 !== e)
                ) {
                  var s = !1;
                  a.eq(r).transitionEnd(function () {
                    if (!s && t && !t.destroyed) {
                      (s = !0), (t.animating = !1);
                      for (
                        var e = ['webkitTransitionEnd', 'transitionend'], a = 0;
                        a < e.length;
                        a += 1
                      )
                        i.trigger(e[a]);
                    }
                  });
                }
              },
            },
            pe = {
              setTranslate: function () {
                for (
                  var e = this,
                    t = e.width,
                    a = e.height,
                    r = e.slides,
                    i = e.slidesSizesGrid,
                    s = e.params.coverflowEffect,
                    n = e.isHorizontal(),
                    o = e.translate,
                    l = n ? t / 2 - o : a / 2 - o,
                    c = n ? s.rotate : -s.rotate,
                    d = s.depth,
                    u = 0,
                    p = r.length;
                  u < p;
                  u += 1
                ) {
                  var m = r.eq(u),
                    f = i[u],
                    h = ((l - m[0].swiperSlideOffset - f / 2) / f) * s.modifier,
                    v = n ? c * h : 0,
                    b = n ? 0 : c * h,
                    y = -d * Math.abs(h),
                    w = s.stretch;
                  'string' == typeof w &&
                    -1 !== w.indexOf('%') &&
                    (w = (parseFloat(s.stretch) / 100) * f);
                  var E = n ? 0 : w * h,
                    S = n ? w * h : 0,
                    x = 1 - (1 - s.scale) * Math.abs(h);
                  Math.abs(S) < 0.001 && (S = 0),
                    Math.abs(E) < 0.001 && (E = 0),
                    Math.abs(y) < 0.001 && (y = 0),
                    Math.abs(v) < 0.001 && (v = 0),
                    Math.abs(b) < 0.001 && (b = 0),
                    Math.abs(x) < 0.001 && (x = 0);
                  var C =
                    'translate3d(' +
                    S +
                    'px,' +
                    E +
                    'px,' +
                    y +
                    'px)  rotateX(' +
                    b +
                    'deg) rotateY(' +
                    v +
                    'deg) scale(' +
                    x +
                    ')';
                  if (
                    (m.transform(C),
                    (m[0].style.zIndex = 1 - Math.abs(Math.round(h))),
                    s.slideShadows)
                  ) {
                    var T = n
                        ? m.find('.swiper-slide-shadow-left')
                        : m.find('.swiper-slide-shadow-top'),
                      k = n
                        ? m.find('.swiper-slide-shadow-right')
                        : m.find('.swiper-slide-shadow-bottom');
                    0 === T.length &&
                      ((T = g(
                        '<div class="swiper-slide-shadow-' +
                          (n ? 'left' : 'top') +
                          '"></div>'
                      )),
                      m.append(T)),
                      0 === k.length &&
                        ((k = g(
                          '<div class="swiper-slide-shadow-' +
                            (n ? 'right' : 'bottom') +
                            '"></div>'
                        )),
                        m.append(k)),
                      T.length && (T[0].style.opacity = h > 0 ? h : 0),
                      k.length && (k[0].style.opacity = -h > 0 ? -h : 0);
                  }
                }
              },
              setTransition: function (e) {
                this.slides
                  .transition(e)
                  .find(
                    '.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left'
                  )
                  .transition(e);
              },
            },
            me = {
              init: function () {
                var e = this,
                  t = e.params.thumbs;
                if (e.thumbs.initialized) return !1;
                e.thumbs.initialized = !0;
                var a = e.constructor;
                return (
                  t.swiper instanceof a
                    ? ((e.thumbs.swiper = t.swiper),
                      T(e.thumbs.swiper.originalParams, {
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1,
                      }),
                      T(e.thumbs.swiper.params, {
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1,
                      }))
                    : C(t.swiper) &&
                      ((e.thumbs.swiper = new a(
                        T({}, t.swiper, {
                          watchSlidesVisibility: !0,
                          watchSlidesProgress: !0,
                          slideToClickedSlide: !1,
                        })
                      )),
                      (e.thumbs.swiperCreated = !0)),
                  e.thumbs.swiper.$el.addClass(
                    e.params.thumbs.thumbsContainerClass
                  ),
                  e.thumbs.swiper.on('tap', e.thumbs.onThumbClick),
                  !0
                );
              },
              onThumbClick: function () {
                var e = this,
                  t = e.thumbs.swiper;
                if (t) {
                  var a = t.clickedIndex,
                    r = t.clickedSlide;
                  if (
                    !(
                      (r &&
                        g(r).hasClass(e.params.thumbs.slideThumbActiveClass)) ||
                      null == a
                    )
                  ) {
                    var i;
                    if (
                      ((i = t.params.loop
                        ? parseInt(
                            g(t.clickedSlide).attr('data-swiper-slide-index'),
                            10
                          )
                        : a),
                      e.params.loop)
                    ) {
                      var s = e.activeIndex;
                      e.slides.eq(s).hasClass(e.params.slideDuplicateClass) &&
                        (e.loopFix(),
                        (e._clientLeft = e.$wrapperEl[0].clientLeft),
                        (s = e.activeIndex));
                      var n = e.slides
                          .eq(s)
                          .prevAll('[data-swiper-slide-index="' + i + '"]')
                          .eq(0)
                          .index(),
                        o = e.slides
                          .eq(s)
                          .nextAll('[data-swiper-slide-index="' + i + '"]')
                          .eq(0)
                          .index();
                      i =
                        void 0 === n
                          ? o
                          : void 0 === o
                          ? n
                          : o - s < s - n
                          ? o
                          : n;
                    }
                    e.slideTo(i);
                  }
                }
              },
              update: function (e) {
                var t = this,
                  a = t.thumbs.swiper;
                if (a) {
                  var r =
                      'auto' === a.params.slidesPerView
                        ? a.slidesPerViewDynamic()
                        : a.params.slidesPerView,
                    i = t.params.thumbs.autoScrollOffset,
                    s = i && !a.params.loop;
                  if (t.realIndex !== a.realIndex || s) {
                    var n,
                      o,
                      l = a.activeIndex;
                    if (a.params.loop) {
                      a.slides.eq(l).hasClass(a.params.slideDuplicateClass) &&
                        (a.loopFix(),
                        (a._clientLeft = a.$wrapperEl[0].clientLeft),
                        (l = a.activeIndex));
                      var c = a.slides
                          .eq(l)
                          .prevAll(
                            '[data-swiper-slide-index="' + t.realIndex + '"]'
                          )
                          .eq(0)
                          .index(),
                        d = a.slides
                          .eq(l)
                          .nextAll(
                            '[data-swiper-slide-index="' + t.realIndex + '"]'
                          )
                          .eq(0)
                          .index();
                      (n =
                        void 0 === c
                          ? d
                          : void 0 === d
                          ? c
                          : d - l == l - c
                          ? a.params.slidesPerGroup > 1
                            ? d
                            : l
                          : d - l < l - c
                          ? d
                          : c),
                        (o = t.activeIndex > t.previousIndex ? 'next' : 'prev');
                    } else
                      o = (n = t.realIndex) > t.previousIndex ? 'next' : 'prev';
                    s && (n += 'next' === o ? i : -1 * i),
                      a.visibleSlidesIndexes &&
                        a.visibleSlidesIndexes.indexOf(n) < 0 &&
                        (a.params.centeredSlides
                          ? (n =
                              n > l
                                ? n - Math.floor(r / 2) + 1
                                : n + Math.floor(r / 2) - 1)
                          : n > l && a.params.slidesPerGroup,
                        a.slideTo(n, e ? 0 : void 0));
                  }
                  var u = 1,
                    p = t.params.thumbs.slideThumbActiveClass;
                  if (
                    (t.params.slidesPerView > 1 &&
                      !t.params.centeredSlides &&
                      (u = t.params.slidesPerView),
                    t.params.thumbs.multipleActiveThumbs || (u = 1),
                    (u = Math.floor(u)),
                    a.slides.removeClass(p),
                    a.params.loop ||
                      (a.params.virtual && a.params.virtual.enabled))
                  )
                    for (var m = 0; m < u; m += 1)
                      a.$wrapperEl
                        .children(
                          '[data-swiper-slide-index="' +
                            (t.realIndex + m) +
                            '"]'
                        )
                        .addClass(p);
                  else
                    for (var f = 0; f < u; f += 1)
                      a.slides.eq(t.realIndex + f).addClass(p);
                }
              },
            },
            fe = [
              X,
              K,
              {
                name: 'mousewheel',
                params: {
                  mousewheel: {
                    enabled: !1,
                    releaseOnEdges: !1,
                    invert: !1,
                    forceToAxis: !1,
                    sensitivity: 1,
                    eventsTarget: 'container',
                    thresholdDelta: null,
                    thresholdTime: null,
                  },
                },
                create: function () {
                  k(this, {
                    mousewheel: {
                      enabled: !1,
                      lastScrollTime: S(),
                      lastEventBeforeSnap: void 0,
                      recentWheelEvents: [],
                      enable: Z.enable,
                      disable: Z.disable,
                      handle: Z.handle,
                      handleMouseEnter: Z.handleMouseEnter,
                      handleMouseLeave: Z.handleMouseLeave,
                      animateSlider: Z.animateSlider,
                      releaseScroll: Z.releaseScroll,
                    },
                  });
                },
                on: {
                  init: function (e) {
                    !e.params.mousewheel.enabled &&
                      e.params.cssMode &&
                      e.mousewheel.disable(),
                      e.params.mousewheel.enabled && e.mousewheel.enable();
                  },
                  destroy: function (e) {
                    e.params.cssMode && e.mousewheel.enable(),
                      e.mousewheel.enabled && e.mousewheel.disable();
                  },
                },
              },
              {
                name: 'navigation',
                params: {
                  navigation: {
                    nextEl: null,
                    prevEl: null,
                    hideOnClick: !1,
                    disabledClass: 'swiper-button-disabled',
                    hiddenClass: 'swiper-button-hidden',
                    lockClass: 'swiper-button-lock',
                  },
                },
                create: function () {
                  k(this, { navigation: t({}, J) });
                },
                on: {
                  init: function (e) {
                    e.navigation.init(), e.navigation.update();
                  },
                  toEdge: function (e) {
                    e.navigation.update();
                  },
                  fromEdge: function (e) {
                    e.navigation.update();
                  },
                  destroy: function (e) {
                    e.navigation.destroy();
                  },
                  'enable disable': function (e) {
                    var t = e.navigation,
                      a = t.$nextEl,
                      r = t.$prevEl;
                    a &&
                      a[e.enabled ? 'removeClass' : 'addClass'](
                        e.params.navigation.lockClass
                      ),
                      r &&
                        r[e.enabled ? 'removeClass' : 'addClass'](
                          e.params.navigation.lockClass
                        );
                  },
                  click: function (e, t) {
                    var a = e.navigation,
                      r = a.$nextEl,
                      i = a.$prevEl,
                      s = t.target;
                    if (
                      e.params.navigation.hideOnClick &&
                      !g(s).is(i) &&
                      !g(s).is(r)
                    ) {
                      if (
                        e.pagination &&
                        e.params.pagination &&
                        e.params.pagination.clickable &&
                        (e.pagination.el === s || e.pagination.el.contains(s))
                      )
                        return;
                      var n;
                      r
                        ? (n = r.hasClass(e.params.navigation.hiddenClass))
                        : i &&
                          (n = i.hasClass(e.params.navigation.hiddenClass)),
                        !0 === n
                          ? e.emit('navigationShow')
                          : e.emit('navigationHide'),
                        r && r.toggleClass(e.params.navigation.hiddenClass),
                        i && i.toggleClass(e.params.navigation.hiddenClass);
                    }
                  },
                },
              },
              {
                name: 'pagination',
                params: {
                  pagination: {
                    el: null,
                    bulletElement: 'span',
                    clickable: !1,
                    hideOnClick: !1,
                    renderBullet: null,
                    renderProgressbar: null,
                    renderFraction: null,
                    renderCustom: null,
                    progressbarOpposite: !1,
                    type: 'bullets',
                    dynamicBullets: !1,
                    dynamicMainBullets: 1,
                    formatFractionCurrent: function (e) {
                      return e;
                    },
                    formatFractionTotal: function (e) {
                      return e;
                    },
                    bulletClass: 'swiper-pagination-bullet',
                    bulletActiveClass: 'swiper-pagination-bullet-active',
                    modifierClass: 'swiper-pagination-',
                    currentClass: 'swiper-pagination-current',
                    totalClass: 'swiper-pagination-total',
                    hiddenClass: 'swiper-pagination-hidden',
                    progressbarFillClass: 'swiper-pagination-progressbar-fill',
                    progressbarOppositeClass:
                      'swiper-pagination-progressbar-opposite',
                    clickableClass: 'swiper-pagination-clickable',
                    lockClass: 'swiper-pagination-lock',
                  },
                },
                create: function () {
                  k(this, { pagination: t({ dynamicBulletIndex: 0 }, Q) });
                },
                on: {
                  init: function (e) {
                    e.pagination.init(),
                      e.pagination.render(),
                      e.pagination.update();
                  },
                  activeIndexChange: function (e) {
                    (e.params.loop || void 0 === e.snapIndex) &&
                      e.pagination.update();
                  },
                  snapIndexChange: function (e) {
                    e.params.loop || e.pagination.update();
                  },
                  slidesLengthChange: function (e) {
                    e.params.loop &&
                      (e.pagination.render(), e.pagination.update());
                  },
                  snapGridLengthChange: function (e) {
                    e.params.loop ||
                      (e.pagination.render(), e.pagination.update());
                  },
                  destroy: function (e) {
                    e.pagination.destroy();
                  },
                  'enable disable': function (e) {
                    var t = e.pagination.$el;
                    t &&
                      t[e.enabled ? 'removeClass' : 'addClass'](
                        e.params.pagination.lockClass
                      );
                  },
                  click: function (e, t) {
                    var a = t.target;
                    if (
                      e.params.pagination.el &&
                      e.params.pagination.hideOnClick &&
                      e.pagination.$el.length > 0 &&
                      !g(a).hasClass(e.params.pagination.bulletClass)
                    ) {
                      if (
                        e.navigation &&
                        ((e.navigation.nextEl && a === e.navigation.nextEl) ||
                          (e.navigation.prevEl && a === e.navigation.prevEl))
                      )
                        return;
                      !0 ===
                      e.pagination.$el.hasClass(e.params.pagination.hiddenClass)
                        ? e.emit('paginationShow')
                        : e.emit('paginationHide'),
                        e.pagination.$el.toggleClass(
                          e.params.pagination.hiddenClass
                        );
                    }
                  },
                },
              },
              {
                name: 'scrollbar',
                params: {
                  scrollbar: {
                    el: null,
                    dragSize: 'auto',
                    hide: !1,
                    draggable: !1,
                    snapOnRelease: !0,
                    lockClass: 'swiper-scrollbar-lock',
                    dragClass: 'swiper-scrollbar-drag',
                  },
                },
                create: function () {
                  k(this, {
                    scrollbar: t(
                      { isTouched: !1, timeout: null, dragTimeout: null },
                      ee
                    ),
                  });
                },
                on: {
                  init: function (e) {
                    e.scrollbar.init(),
                      e.scrollbar.updateSize(),
                      e.scrollbar.setTranslate();
                  },
                  update: function (e) {
                    e.scrollbar.updateSize();
                  },
                  resize: function (e) {
                    e.scrollbar.updateSize();
                  },
                  observerUpdate: function (e) {
                    e.scrollbar.updateSize();
                  },
                  setTranslate: function (e) {
                    e.scrollbar.setTranslate();
                  },
                  setTransition: function (e, t) {
                    e.scrollbar.setTransition(t);
                  },
                  'enable disable': function (e) {
                    var t = e.scrollbar.$el;
                    t &&
                      t[e.enabled ? 'removeClass' : 'addClass'](
                        e.params.scrollbar.lockClass
                      );
                  },
                  destroy: function (e) {
                    e.scrollbar.destroy();
                  },
                },
              },
              {
                name: 'parallax',
                params: { parallax: { enabled: !1 } },
                create: function () {
                  k(this, { parallax: t({}, te) });
                },
                on: {
                  beforeInit: function (e) {
                    e.params.parallax.enabled &&
                      ((e.params.watchSlidesProgress = !0),
                      (e.originalParams.watchSlidesProgress = !0));
                  },
                  init: function (e) {
                    e.params.parallax.enabled && e.parallax.setTranslate();
                  },
                  setTranslate: function (e) {
                    e.params.parallax.enabled && e.parallax.setTranslate();
                  },
                  setTransition: function (e, t) {
                    e.params.parallax.enabled && e.parallax.setTransition(t);
                  },
                },
              },
              {
                name: 'zoom',
                params: {
                  zoom: {
                    enabled: !1,
                    maxRatio: 3,
                    minRatio: 1,
                    toggle: !0,
                    containerClass: 'swiper-zoom-container',
                    zoomedSlideClass: 'swiper-slide-zoomed',
                  },
                },
                create: function () {
                  var e = this;
                  k(e, {
                    zoom: t(
                      {
                        enabled: !1,
                        scale: 1,
                        currentScale: 1,
                        isScaling: !1,
                        gesture: {
                          $slideEl: void 0,
                          slideWidth: void 0,
                          slideHeight: void 0,
                          $imageEl: void 0,
                          $imageWrapEl: void 0,
                          maxRatio: 3,
                        },
                        image: {
                          isTouched: void 0,
                          isMoved: void 0,
                          currentX: void 0,
                          currentY: void 0,
                          minX: void 0,
                          minY: void 0,
                          maxX: void 0,
                          maxY: void 0,
                          width: void 0,
                          height: void 0,
                          startX: void 0,
                          startY: void 0,
                          touchesStart: {},
                          touchesCurrent: {},
                        },
                        velocity: {
                          x: void 0,
                          y: void 0,
                          prevPositionX: void 0,
                          prevPositionY: void 0,
                          prevTime: void 0,
                        },
                      },
                      ae
                    ),
                  });
                  var a = 1;
                  Object.defineProperty(e.zoom, 'scale', {
                    get: function () {
                      return a;
                    },
                    set: function (t) {
                      if (a !== t) {
                        var r = e.zoom.gesture.$imageEl
                            ? e.zoom.gesture.$imageEl[0]
                            : void 0,
                          i = e.zoom.gesture.$slideEl
                            ? e.zoom.gesture.$slideEl[0]
                            : void 0;
                        e.emit('zoomChange', t, r, i);
                      }
                      a = t;
                    },
                  });
                },
                on: {
                  init: function (e) {
                    e.params.zoom.enabled && e.zoom.enable();
                  },
                  destroy: function (e) {
                    e.zoom.disable();
                  },
                  touchStart: function (e, t) {
                    e.zoom.enabled && e.zoom.onTouchStart(t);
                  },
                  touchEnd: function (e, t) {
                    e.zoom.enabled && e.zoom.onTouchEnd(t);
                  },
                  doubleTap: function (e, t) {
                    !e.animating &&
                      e.params.zoom.enabled &&
                      e.zoom.enabled &&
                      e.params.zoom.toggle &&
                      e.zoom.toggle(t);
                  },
                  transitionEnd: function (e) {
                    e.zoom.enabled &&
                      e.params.zoom.enabled &&
                      e.zoom.onTransitionEnd();
                  },
                  slideChange: function (e) {
                    e.zoom.enabled &&
                      e.params.zoom.enabled &&
                      e.params.cssMode &&
                      e.zoom.onTransitionEnd();
                  },
                },
              },
              {
                name: 'lazy',
                params: {
                  lazy: {
                    checkInView: !1,
                    enabled: !1,
                    loadPrevNext: !1,
                    loadPrevNextAmount: 1,
                    loadOnTransitionStart: !1,
                    scrollingElement: '',
                    elementClass: 'swiper-lazy',
                    loadingClass: 'swiper-lazy-loading',
                    loadedClass: 'swiper-lazy-loaded',
                    preloaderClass: 'swiper-lazy-preloader',
                  },
                },
                create: function () {
                  k(this, { lazy: t({ initialImageLoaded: !1 }, re) });
                },
                on: {
                  beforeInit: function (e) {
                    e.params.lazy.enabled &&
                      e.params.preloadImages &&
                      (e.params.preloadImages = !1);
                  },
                  init: function (e) {
                    e.params.lazy.enabled &&
                      !e.params.loop &&
                      0 === e.params.initialSlide &&
                      (e.params.lazy.checkInView
                        ? e.lazy.checkInViewOnLoad()
                        : e.lazy.load());
                  },
                  scroll: function (e) {
                    e.params.freeMode &&
                      !e.params.freeModeSticky &&
                      e.lazy.load();
                  },
                  'scrollbarDragMove resize _freeModeNoMomentumRelease':
                    function (e) {
                      e.params.lazy.enabled && e.lazy.load();
                    },
                  transitionStart: function (e) {
                    e.params.lazy.enabled &&
                      (e.params.lazy.loadOnTransitionStart ||
                        (!e.params.lazy.loadOnTransitionStart &&
                          !e.lazy.initialImageLoaded)) &&
                      e.lazy.load();
                  },
                  transitionEnd: function (e) {
                    e.params.lazy.enabled &&
                      !e.params.lazy.loadOnTransitionStart &&
                      e.lazy.load();
                  },
                  slideChange: function (e) {
                    var t = e.params,
                      a = t.lazy,
                      r = t.cssMode,
                      i = t.watchSlidesVisibility,
                      s = t.watchSlidesProgress,
                      n = t.touchReleaseOnEdges,
                      o = t.resistanceRatio;
                    a.enabled &&
                      (r || ((i || s) && (n || 0 === o))) &&
                      e.lazy.load();
                  },
                },
              },
              {
                name: 'controller',
                params: {
                  controller: { control: void 0, inverse: !1, by: 'slide' },
                },
                create: function () {
                  k(this, {
                    controller: t(
                      { control: this.params.controller.control },
                      ie
                    ),
                  });
                },
                on: {
                  update: function (e) {
                    e.controller.control &&
                      e.controller.spline &&
                      ((e.controller.spline = void 0),
                      delete e.controller.spline);
                  },
                  resize: function (e) {
                    e.controller.control &&
                      e.controller.spline &&
                      ((e.controller.spline = void 0),
                      delete e.controller.spline);
                  },
                  observerUpdate: function (e) {
                    e.controller.control &&
                      e.controller.spline &&
                      ((e.controller.spline = void 0),
                      delete e.controller.spline);
                  },
                  setTranslate: function (e, t, a) {
                    e.controller.control && e.controller.setTranslate(t, a);
                  },
                  setTransition: function (e, t, a) {
                    e.controller.control && e.controller.setTransition(t, a);
                  },
                },
              },
              {
                name: 'a11y',
                params: {
                  a11y: {
                    enabled: !0,
                    notificationClass: 'swiper-notification',
                    prevSlideMessage: 'Previous slide',
                    nextSlideMessage: 'Next slide',
                    firstSlideMessage: 'This is the first slide',
                    lastSlideMessage: 'This is the last slide',
                    paginationBulletMessage: 'Go to slide {{index}}',
                    slideLabelMessage: '{{index}} / {{slidesLength}}',
                    containerMessage: null,
                    containerRoleDescriptionMessage: null,
                    itemRoleDescriptionMessage: null,
                    slideRole: 'group',
                  },
                },
                create: function () {
                  k(this, {
                    a11y: t({}, se, {
                      liveRegion: g(
                        '<span class="' +
                          this.params.a11y.notificationClass +
                          '" aria-live="assertive" aria-atomic="true"></span>'
                      ),
                    }),
                  });
                },
                on: {
                  afterInit: function (e) {
                    e.params.a11y.enabled &&
                      (e.a11y.init(), e.a11y.updateNavigation());
                  },
                  toEdge: function (e) {
                    e.params.a11y.enabled && e.a11y.updateNavigation();
                  },
                  fromEdge: function (e) {
                    e.params.a11y.enabled && e.a11y.updateNavigation();
                  },
                  paginationUpdate: function (e) {
                    e.params.a11y.enabled && e.a11y.updatePagination();
                  },
                  destroy: function (e) {
                    e.params.a11y.enabled && e.a11y.destroy();
                  },
                },
              },
              {
                name: 'history',
                params: {
                  history: {
                    enabled: !1,
                    root: '',
                    replaceState: !1,
                    key: 'slides',
                  },
                },
                create: function () {
                  k(this, { history: t({}, ne) });
                },
                on: {
                  init: function (e) {
                    e.params.history.enabled && e.history.init();
                  },
                  destroy: function (e) {
                    e.params.history.enabled && e.history.destroy();
                  },
                  'transitionEnd _freeModeNoMomentumRelease': function (e) {
                    e.history.initialized &&
                      e.history.setHistory(e.params.history.key, e.activeIndex);
                  },
                  slideChange: function (e) {
                    e.history.initialized &&
                      e.params.cssMode &&
                      e.history.setHistory(e.params.history.key, e.activeIndex);
                  },
                },
              },
              {
                name: 'hash-navigation',
                params: {
                  hashNavigation: {
                    enabled: !1,
                    replaceState: !1,
                    watchState: !1,
                  },
                },
                create: function () {
                  k(this, { hashNavigation: t({ initialized: !1 }, oe) });
                },
                on: {
                  init: function (e) {
                    e.params.hashNavigation.enabled && e.hashNavigation.init();
                  },
                  destroy: function (e) {
                    e.params.hashNavigation.enabled &&
                      e.hashNavigation.destroy();
                  },
                  'transitionEnd _freeModeNoMomentumRelease': function (e) {
                    e.hashNavigation.initialized && e.hashNavigation.setHash();
                  },
                  slideChange: function (e) {
                    e.hashNavigation.initialized &&
                      e.params.cssMode &&
                      e.hashNavigation.setHash();
                  },
                },
              },
              {
                name: 'autoplay',
                params: {
                  autoplay: {
                    enabled: !1,
                    delay: 3e3,
                    waitForTransition: !0,
                    disableOnInteraction: !0,
                    stopOnLastSlide: !1,
                    reverseDirection: !1,
                    pauseOnMouseEnter: !1,
                  },
                },
                create: function () {
                  k(this, { autoplay: t({}, le, { running: !1, paused: !1 }) });
                },
                on: {
                  init: function (e) {
                    e.params.autoplay.enabled &&
                      (e.autoplay.start(),
                      s().addEventListener(
                        'visibilitychange',
                        e.autoplay.onVisibilityChange
                      ),
                      e.autoplay.attachMouseEvents());
                  },
                  beforeTransitionStart: function (e, t, a) {
                    e.autoplay.running &&
                      (a || !e.params.autoplay.disableOnInteraction
                        ? e.autoplay.pause(t)
                        : e.autoplay.stop());
                  },
                  sliderFirstMove: function (e) {
                    e.autoplay.running &&
                      (e.params.autoplay.disableOnInteraction
                        ? e.autoplay.stop()
                        : e.autoplay.pause());
                  },
                  touchEnd: function (e) {
                    e.params.cssMode &&
                      e.autoplay.paused &&
                      !e.params.autoplay.disableOnInteraction &&
                      e.autoplay.run();
                  },
                  destroy: function (e) {
                    e.autoplay.detachMouseEvents(),
                      e.autoplay.running && e.autoplay.stop(),
                      s().removeEventListener(
                        'visibilitychange',
                        e.autoplay.onVisibilityChange
                      );
                  },
                },
              },
              {
                name: 'effect-fade',
                params: { fadeEffect: { crossFade: !1 } },
                create: function () {
                  k(this, { fadeEffect: t({}, ce) });
                },
                on: {
                  beforeInit: function (e) {
                    if ('fade' === e.params.effect) {
                      e.classNames.push(
                        e.params.containerModifierClass + 'fade'
                      );
                      var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0,
                      };
                      T(e.params, t), T(e.originalParams, t);
                    }
                  },
                  setTranslate: function (e) {
                    'fade' === e.params.effect && e.fadeEffect.setTranslate();
                  },
                  setTransition: function (e, t) {
                    'fade' === e.params.effect && e.fadeEffect.setTransition(t);
                  },
                },
              },
              {
                name: 'effect-cube',
                params: {
                  cubeEffect: {
                    slideShadows: !0,
                    shadow: !0,
                    shadowOffset: 20,
                    shadowScale: 0.94,
                  },
                },
                create: function () {
                  k(this, { cubeEffect: t({}, de) });
                },
                on: {
                  beforeInit: function (e) {
                    if ('cube' === e.params.effect) {
                      e.classNames.push(
                        e.params.containerModifierClass + 'cube'
                      ),
                        e.classNames.push(
                          e.params.containerModifierClass + '3d'
                        );
                      var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        resistanceRatio: 0,
                        spaceBetween: 0,
                        centeredSlides: !1,
                        virtualTranslate: !0,
                      };
                      T(e.params, t), T(e.originalParams, t);
                    }
                  },
                  setTranslate: function (e) {
                    'cube' === e.params.effect && e.cubeEffect.setTranslate();
                  },
                  setTransition: function (e, t) {
                    'cube' === e.params.effect && e.cubeEffect.setTransition(t);
                  },
                },
              },
              {
                name: 'effect-flip',
                params: { flipEffect: { slideShadows: !0, limitRotation: !0 } },
                create: function () {
                  k(this, { flipEffect: t({}, ue) });
                },
                on: {
                  beforeInit: function (e) {
                    if ('flip' === e.params.effect) {
                      e.classNames.push(
                        e.params.containerModifierClass + 'flip'
                      ),
                        e.classNames.push(
                          e.params.containerModifierClass + '3d'
                        );
                      var t = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0,
                      };
                      T(e.params, t), T(e.originalParams, t);
                    }
                  },
                  setTranslate: function (e) {
                    'flip' === e.params.effect && e.flipEffect.setTranslate();
                  },
                  setTransition: function (e, t) {
                    'flip' === e.params.effect && e.flipEffect.setTransition(t);
                  },
                },
              },
              {
                name: 'effect-coverflow',
                params: {
                  coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    scale: 1,
                    modifier: 1,
                    slideShadows: !0,
                  },
                },
                create: function () {
                  k(this, { coverflowEffect: t({}, pe) });
                },
                on: {
                  beforeInit: function (e) {
                    'coverflow' === e.params.effect &&
                      (e.classNames.push(
                        e.params.containerModifierClass + 'coverflow'
                      ),
                      e.classNames.push(e.params.containerModifierClass + '3d'),
                      (e.params.watchSlidesProgress = !0),
                      (e.originalParams.watchSlidesProgress = !0));
                  },
                  setTranslate: function (e) {
                    'coverflow' === e.params.effect &&
                      e.coverflowEffect.setTranslate();
                  },
                  setTransition: function (e, t) {
                    'coverflow' === e.params.effect &&
                      e.coverflowEffect.setTransition(t);
                  },
                },
              },
              {
                name: 'thumbs',
                params: {
                  thumbs: {
                    swiper: null,
                    multipleActiveThumbs: !0,
                    autoScrollOffset: 0,
                    slideThumbActiveClass: 'swiper-slide-thumb-active',
                    thumbsContainerClass: 'swiper-container-thumbs',
                  },
                },
                create: function () {
                  k(this, { thumbs: t({ swiper: null, initialized: !1 }, me) });
                },
                on: {
                  beforeInit: function (e) {
                    var t = e.params.thumbs;
                    t && t.swiper && (e.thumbs.init(), e.thumbs.update(!0));
                  },
                  slideChange: function (e) {
                    e.thumbs.swiper && e.thumbs.update();
                  },
                  update: function (e) {
                    e.thumbs.swiper && e.thumbs.update();
                  },
                  resize: function (e) {
                    e.thumbs.swiper && e.thumbs.update();
                  },
                  observerUpdate: function (e) {
                    e.thumbs.swiper && e.thumbs.update();
                  },
                  setTransition: function (e, t) {
                    var a = e.thumbs.swiper;
                    a && a.setTransition(t);
                  },
                  beforeDestroy: function (e) {
                    var t = e.thumbs.swiper;
                    t && e.thumbs.swiperCreated && t && t.destroy();
                  },
                },
              },
            ];
          return V.use(fe), (window.Swiper = V);
        })();
      },
    },
    t = {};
  function a(r) {
    var i = t[r];
    if (void 0 !== i) return i.exports;
    var s = (t[r] = { exports: {} });
    return e[r].call(s.exports, s, s.exports, a), s.exports;
  }
  (a.amdO = {}),
    (a.g = (function () {
      if ('object' == typeof globalThis) return globalThis;
      try {
        return this || new Function('return this')();
      } catch (e) {
        if ('object' == typeof window) return window;
      }
    })()),
    (() => {
      var e;
      a.g.importScripts && (e = a.g.location + '');
      var t = a.g.document;
      if (!e && t && (t.currentScript && (e = t.currentScript.src), !e)) {
        var r = t.getElementsByTagName('script');
        r.length && (e = r[r.length - 1].src);
      }
      if (!e)
        throw new Error(
          'Automatic publicPath is not supported in this browser'
        );
      (e = e
        .replace(/#.*$/, '')
        .replace(/\?.*$/, '')
        .replace(/\/[^\/]+$/, '/')),
        (a.p = e);
    })(),
    (() => {
      'use strict';
      const e = {
        init() {
          document.addEventListener('click', e => {
            const t = document.querySelectorAll(
                '[data-clicker-focus].js-active'
              ),
              a = e.target
                .closest('[data-clicker-trigger]')
                ?.getAttribute('data-clicker-trigger');
            for (let r of t)
              r.getAttribute('data-clicker-element') === a ||
                r.contains(e.target) ||
                this.close(r);
          }),
            document.addEventListener('click', e => {
              let t,
                a = e.target.closest('[data-clicker-trigger]');
              if (a) t = a.getAttribute('data-clicker-trigger');
              else {
                const r = e.target.closest('a'),
                  i = r?.getAttribute('href');
                (t = i?.replace('#', '')),
                  '#' === i?.substr(0, 1) &&
                    document.querySelector(`[data-clicker-element="${t}"]`) &&
                    (a = r);
              }
              if (a && t) {
                e.preventDefault();
                for (let e of document.querySelectorAll(
                  `[data-clicker-element="${t}"]`
                ))
                  a.matches('.js-active')
                    ? e.getAttribute('data-clicker-element-group') ||
                      this.close(e, a)
                    : this.trigger(e, a);
              }
            }),
            document.addEventListener('click', e => {
              const t = e.target.closest('[data-clicker-close]');
              if (!t) return;
              const a = document.querySelectorAll(
                `[data-clicker-element="${t.getAttribute(
                  'data-clicker-close'
                )}"]`
              );
              for (let e of a) e.matches('.js-active') && this.close(e);
            });
        },
        trigger(e, t) {
          const a = e.getAttribute('data-clicker-element'),
            r = document.querySelectorAll(
              `[data-clicker-element-group="${e.getAttribute(
                'data-clicker-element-group'
              )}"]`
            );
          e.classList.add('js-active');
          for (let e of document.querySelectorAll(
            `[data-clicker-trigger="${a}"]`
          ))
            e.classList.add('js-active'),
              'false' === e.getAttribute('aria-expanded') &&
                e.setAttribute('aria-expanded', 'true');
          'true' === e.getAttribute('data-clicker-lock-body') &&
            document.body.classList.add('lockscroll'),
            'true' === e.getAttribute('data-clicker-move-focus') &&
              (e.getAttribute('tabindex') || e.setAttribute('tabindex', '-1'),
              setTimeout(() => e.focus(), 300));
          for (let t of r) {
            if (t === e) continue;
            const a = document.querySelector(
              `[data-clicker-trigger="${t.getAttribute(
                'data-clicker-element'
              )}"]`
            );
            a && a.classList.remove('js-active'),
              t.classList.remove('js-active');
          }
          for (let t of e.querySelectorAll('[data-clicker-iframe]')) {
            const e = document.createElement('iframe');
            e.setAttribute('data-clicker-iframe-loaded', 'true'),
              e.setAttribute('src', t.getAttribute('data-clicker-iframe'));
            for (let a in t.attributes)
              isNaN(Number(a)) ||
                'data-clicker-iframe' === t.attributes[a].name ||
                e.setAttribute(
                  t.attributes[a].name.replace('data-', ''),
                  t.attributes[a].value
                );
            t.parentElement.insertBefore(e, t), t.remove();
          }
          document.dispatchEvent(
            new CustomEvent('clickerTrigger', {
              detail: { type: a, $target: e, $trigger: t, $elGroup: r },
            })
          );
        },
        close(e, t) {
          const a = e.getAttribute('data-clicker-element');
          for (let e of document.querySelectorAll(
            `[data-clicker-trigger="${a}"]`
          ))
            e.classList.remove('js-active'),
              'true' === e.getAttribute('aria-expanded') &&
                e.setAttribute('aria-expanded', 'false');
          e.classList.remove('js-active'),
            'true' === e.getAttribute('data-clicker-lock-body') &&
              document.body.classList.remove('lockscroll');
          for (let t of e.querySelectorAll(
            '[data-clicker-iframe-loaded="true"]'
          )) {
            const e = document.createElement('span');
            e.setAttribute('data-clicker-iframe', t.getAttribute('src'));
            for (let a in t.attributes)
              'data-clicker-iframe' !== t.attributes[a].name &&
                t.attributes[a].value &&
                e.setAttribute(
                  `data-${t.attributes[a].name}`,
                  t.attributes[a].value
                );
            t.parentElement.insertBefore(e, t), t.remove();
          }
          document.dispatchEvent(
            new CustomEvent('clickerClose', {
              detail: { type: a, $target: e, $trigger: t },
            })
          );
        },
      };
      a(449);
      const t = {
          init() {
            for (let e of document.querySelectorAll('[data-carousel="wrap"]')) {
              if ('true' === e.getAttribute('data-carousel-pagination')) {
                const t = document.createElement('div');
                t.classList.add('swiper-pagination'), e.appendChild(t);
              }
              const t = `.js-carousel-${Math.random()
                  .toString(36)
                  .substr(2, 17)}`,
                a = e.getAttribute('data-carousel-autoplay');
              e.classList.add(t.replace('.', ''));
              const r = {},
                i = Number(e.getAttribute('data-carousel-slides') || 1);
              e
                .getAttribute('data-carousel-breakpoints')
                ?.split(',')
                .map(e => {
                  const t = e.split('=');
                  t[0] && t[1] && (r[t[0]] = { slidesPerView: Number(t[1]) });
                }),
                new Swiper(`${t} .swiper-container`, {
                  loop: !0,
                  grabCursor: !0,
                  a11y: { enabled: !1 },
                  pagination: { el: `${t} .swiper-pagination`, clickable: !0 },
                  navigation: {
                    nextEl: `${t} .swiper-button-next`,
                    prevEl: `${t} .swiper-button-prev`,
                  },
                  autoplay: !!a && {
                    delay: Number(a),
                    disableOnInteraction: !1,
                  },
                  centeredSlides:
                    'true' === e.getAttribute('data-carousel-center'),
                  slidesPerView: i,
                  breakpoints: r,
                }),
                e.addEventListener('mouseenter', t => {
                  if (
                    e.matches('.js-paused') ||
                    !e.getAttribute('data-carousel-autoplay')
                  )
                    return;
                  const a = e.querySelector('.swiper-container');
                  a.classList.add('js-paused'),
                    a.classList.remove('js-played'),
                    a.swiper.autoplay.stop();
                }),
                e.addEventListener('mouseleave', t => {
                  if (
                    e.matches('.js-played') ||
                    !e.getAttribute('data-carousel-autoplay')
                  )
                    return;
                  const a = e.querySelector('.swiper-container');
                  a.classList.add('js-played'),
                    a.classList.remove('js-paused'),
                    a.swiper.autoplay.start();
                });
            }
          },
        },
        r = {
          init() {
            for (let e of document.querySelectorAll('[data-lazyload]')) {
              const t = document.createElement(e.getAttribute('data-lazyload'));
              for (let a in e.attributes)
                isNaN(Number(a)) ||
                  [a, e.attributes[a].name].includes('data-lazyload') ||
                  t.setAttribute(
                    e.attributes[a].name.replace('data-', ''),
                    e.attributes[a].value
                  );
              (t.innerHTML = e.innerHTML),
                e.parentElement.insertBefore(t, e),
                e.remove(),
                'VIDEO' === t.tagName &&
                  t.playsInline &&
                  t.classList.add('js-autoplay');
            }
            for (let e of [
              'mousedown',
              'touchstart',
              'keydown',
              'scroll',
              'mousemove',
            ])
              document.addEventListener(e, e => {
                if (!document.autoplayedLazyVideos)
                  for (let e of document.querySelectorAll('video.js-autoplay'))
                    e.play()
                      .then(() => {
                        document.autoplayedLazyVideos = !0;
                      })
                      .catch(e => {});
              });
          },
        },
        i = {
          init() {
            document.addEventListener('click', e => {
              const t = e.target.closest('[data-repeater="add"]'),
                a = e.target.closest('[data-repeater="wrap"]');
              if (!t || !a) return;
              const r = a.querySelector('[data-repeater="items"]'),
                i = Array.from(
                  r.querySelectorAll('[data-repeater="item"]')
                ).pop();
              if (!i) return;
              const s = i.cloneNode();
              (s.innerHTML = i.innerHTML),
                s.classList.remove('js-added'),
                (s.querySelector('input').value = ''),
                r.appendChild(s),
                this.updateData(a),
                setTimeout(() => s.classList.add('js-added'), 100),
                r.setAttribute(
                  'data-repeater-items',
                  r.querySelectorAll('[data-repeater="item"]').length
                );
            }),
              document.addEventListener('click', e => {
                const t = e.target.closest('[data-repeater="remove"]'),
                  a = e.target.closest('[data-repeater="item"]'),
                  r = e.target.closest('[data-repeater="items"]');
                if (!t || !a || !r) return;
                const i = r.querySelectorAll('[data-repeater="item"]').length;
                i <= 1 ||
                  (a.classList.remove('js-added'),
                  r.setAttribute('data-repeater-items', i - 1),
                  setTimeout(() => {
                    a.remove(),
                      this.updateData(r.closest('[data-repeater="wrap"]'));
                  }, 100));
              }),
              document.addEventListener('change', e => {
                e.target.closest('[data-repeater="item"]') &&
                  this.updateData(e.target.closest('[data-repeater="wrap"]'));
              }),
              document.addEventListener('formSubmission', e => {
                if (
                  !e.detail.$form.querySelector('[data-repeater="wrap"]') ||
                  e.detail.response.success
                )
                  return;
                const t = e.detail.$form.querySelectorAll(
                  '[data-repeater="item"]'
                );
                for (let a in e.detail.response.data) {
                  if (!t[a]) continue;
                  const r = document.createElement('span');
                  (r.textContent = e.detail.response.data[a]),
                    r.classList.add('field-error-message'),
                    t[a].classList.add('field-error'),
                    t[a].append(r);
                  for (let t of e.detail.$form.querySelectorAll(
                    'input, select, textarea'
                  ))
                    t.setAttribute('aria-invalid', 'true'),
                      setTimeout(() => {
                        ['INPUT', 'TEXTAREA', 'SELECT'].includes(
                          document.activeElement.tagName
                        ) || t.focus();
                      }, 100);
                }
              });
          },
          updateData(e) {
            let t = e.querySelector('[data-repeater="json"]');
            const a = e.querySelectorAll('[data-repeater="item"]');
            t ||
              ((t = document.createElement('textarea')),
              t.setAttribute('name', 'jsonData'),
              t.setAttribute('data-repeater', 'json'),
              t.classList.add('hidden'),
              e.appendChild(t));
            const r = [];
            t.value = '';
            for (let e of a) {
              const t = {};
              for (let a of e.querySelectorAll('input, select, textarea'))
                t[a.name] = a.value;
              r.push(t);
            }
            t.value = JSON.stringify(r);
          },
        },
        s = {
          init() {
            document.addEventListener('change', e => {
              const t = e.target.closest('.field');
              if (t) {
                t.matches('.field-error') && t.classList.remove('field-error');
                for (let e of t.querySelectorAll('.field-error-message'))
                  e.remove();
              }
            }),
              this.enableSubmissions(),
              this.enableActions();
          },
          enableActions() {
            document.addEventListener('click', async e => {
              const t = e.target.closest('[data-action]'),
                a = t?.getAttribute('data-action'),
                r = 'true' === t?.getAttribute('data-is-downloadable');
              if (t && a) {
                if (
                  ((t.disabled = !0),
                  t.querySelector('.spinner') ||
                    (t.innerHTML =
                      t.innerHTML +
                      '<span class="spinner spinner-light"></span>'),
                  r)
                )
                  return (
                    (window.location = `/comm/${a}`),
                    (t.disabled = !1),
                    void document
                      .querySelector('.loadbar')
                      .classList.remove('js-active')
                  );
                fetch(`/comm/${a}`, {
                  method: 'POST',
                  headers: { 'Content-Type': 'application/json;charset=utf-8' },
                  body: t.getAttribute('data-action-params'),
                })
                  .then(e => ((t.disabled = !1), e.text()))
                  .then(e => {
                    if (e) {
                      if (
                        ((e = JSON.parse(e)),
                        document.dispatchEvent(
                          new CustomEvent('action', {
                            detail: { type: a, $trigger: t, response: e },
                          })
                        ),
                        e.success && e.data.reload)
                      )
                        return location.reload();
                      if (e.success && e.data.redirect)
                        return e.data.redirect.includes('.')
                          ? window.open(e.data.redirect)
                          : (location.href = e.data.redirect);
                      if (e.message || e.data) {
                        const a = t.closest('[data-form]');
                        a && this.showMessages(e, a);
                      }
                    }
                  })
                  .catch(e => console.log(e));
              }
            });
          },
          enableSubmissions() {
            document.addEventListener('submit', e => {
              const t = e.target.getAttribute('data-form');
              if (!t) return;
              e.preventDefault(), this.clearMessages(e.target);
              const a = e.target.getAttribute('data-form-type'),
                r = e.target.querySelector('button[type="submit"]'),
                i = new FormData(e.target);
              (r.disabled = !0),
                r.querySelector('.spinner') ||
                  (r.innerHTML =
                    r.innerHTML +
                    '<span class="spinner spinner-light"></span>');
              for (const [t, a] of new URLSearchParams(
                location.search
              ).entries()) {
                if (e.target.querySelector(`[name="${t}"]`)) continue;
                const r = document.createElement('input'),
                  i = { name: t, type: 'hidden', value: a || null };
                for (let e in i) r[e] = i[e];
                e.target.appendChild(r);
              }
              for (let t of e.target.querySelectorAll('input[type="file"]'))
                for (const e of t.files) i.append(e.name, e);
              fetch(`/comm/${t}`, {
                method: 'POST',
                headers:
                  'raw' === a
                    ? {}
                    : { 'Content-Type': 'application/json;charset=utf-8' },
                body: 'raw' === a ? i : JSON.stringify(Object.fromEntries(i)),
              })
                .then(e => ((r.disabled = !1), e.text()))
                .then(a => {
                  if (a)
                    return (
                      (a = JSON.parse(a)),
                      document.dispatchEvent(
                        new CustomEvent('formSubmission', {
                          detail: { type: t, $form: e.target, response: a },
                        })
                      ),
                      a.success && a.data.clearForm && this.clearForm(e.target),
                      a.success && a.data.reload
                        ? location.reload()
                        : a.success && a.data.redirect
                        ? a.data.redirect.includes('.')
                          ? window.open(a.data.redirect)
                          : (location.href = a.data.redirect)
                        : void this.showMessages(a, e.target)
                    );
                })
                .catch(e => console.log(e));
            });
          },
          clearMessages(e) {
            const t = e.querySelectorAll('.field'),
              a = e.querySelector('.general-message');
            a && a.remove();
            for (let e of t) {
              const t = e.querySelector('.field-error-message');
              e.classList.remove('field-error'), t && t.remove();
              for (let t of e.querySelectorAll('[aria-invalid]'))
                t.removeAttribute('aria-invalid');
            }
          },
          showMessages(e, t) {
            const a = t.querySelector('button[type="submit"]'),
              r = t.querySelectorAll('[aria-invalid="true"]'),
              i = t.querySelectorAll('.field-error-message, .general-message');
            for (let e of i) e.remove();
            for (let e of r) e.setAttribute('aria-invalid', 'false');
            if (e.message) {
              const t = document.createElement('span');
              t.classList.add('general-message'),
                t.classList.add(e.success ? 'success' : 'error'),
                t.setAttribute('role', 'alert'),
                (t.textContent = e.message),
                a.parentElement.insertBefore(t, a);
            }
            if (e.success) return t.classList.add('js-submitted');
            for (let a of t.querySelectorAll('input, select, textarea'))
              for (let t in e.data) {
                if (t !== a.name || !e.data[t]) continue;
                const r = a.closest('.field');
                if (!r) continue;
                const i = r.querySelector('.field-error-message');
                if ('radio' === a.type && i && e.data[t] === i.textContent)
                  continue;
                const s = document.createElement('span');
                (s.textContent = e.data[t]),
                  s.classList.add('field-error-message'),
                  r.append(s),
                  r.classList.add('field-error'),
                  a.setAttribute('aria-invalid', 'true'),
                  setTimeout(() => {
                    ['INPUT', 'TEXTAREA', 'SELECT'].includes(
                      document.activeElement.tagName
                    ) || a.focus();
                  }, 100);
              }
          },
          clearForm(e) {
            Array.from(e.elements).forEach(e => {
              !e.classList.value.includes('preserve') &&
                e.value &&
                (e.value = e.defaultValue);
            });
          },
        },
        n = {
          init() {
            this.tmpl.init(),
              this.auth.init(),
              this.audits.init(),
              this.accounts.init(),
              this.installation.init(),
              this.managebar.init(),
              this.accessWidget.init(),
              this.extraPayments.init(),
              this.billingForm.init();
          },
          tmpl: {
            init() {
              this.enableSearch(),
                document.addEventListener('click', e => {
                  const t = e.target.closest('[data-copy]');
                  if (!t) return;
                  const a = document.createElement('textarea');
                  (a.textContent = t.getAttribute('data-copy')),
                    a.select(),
                    a.setSelectionRange(0, 99999),
                    navigator.clipboard.writeText(a.textContent),
                    t.classList.add('js-copied');
                }),
                document.addEventListener('click', e => {
                  const t = e.target.closest(
                    '[data-clicker-trigger="notifications"]'
                  );
                  t &&
                    (t.classList.remove('js-show'),
                    localStorage.setItem('viewedNotifications', 'true'));
                }),
                document.addEventListener('input', e => {
                  if (
                    e.target.value.length < 3 ||
                    !e.target.closest('[data-repeater="item"]')
                  )
                    return;
                  const t = e.target.closest('[data-repeater="wrap"]');
                  Array.from(
                    t.querySelectorAll('[data-repeater="item"]')
                  ).pop() === e.target.closest('[data-repeater="item"]') &&
                    t?.querySelector('[data-repeater="add"]')?.click();
                }),
                document.addEventListener('change', e => {
                  if ('checkbox' !== e.target.type) return;
                  const t = e.target.closest('table'),
                    a = t?.querySelector(
                      'thead tr th:first-child input[type="checkbox"]'
                    ),
                    r = t?.querySelectorAll(
                      'tbody tr td:first-child input[type="checkbox"]'
                    );
                  if (t && a && r)
                    if (e.target === a)
                      if (e.target.checked) for (let e of r) e.checked = !0;
                      else for (let e of r) e.checked = !1;
                    else if (e.target.checked) {
                      let e = !1;
                      for (let t of r) t.checked || (e = !0);
                      e || (a.checked = !0);
                    } else a.checked = !1;
                }),
                document.addEventListener('formSubmission', e => {
                  if (
                    'process-form-submission' !== e.detail.type ||
                    !e.detail?.response?.success
                  )
                    return;
                  'undefined' != typeof dataLayer &&
                    dataLayer.push({
                      event: 'ga_event',
                      eventCategory: 'Forms',
                      eventAction: 'submit',
                      eventLabel: 'demo-lead',
                      email:
                        e.detail.$form.querySelector('[name="email"]')?.value,
                    });
                  const t = e.detail.$form.closest('.popup'),
                    a = t.querySelector('[data-calendly]'),
                    r = document.createElement('iframe');
                  t.classList.add('js-submitted');
                  let i = `${a.getAttribute('data-calendly')}?`;
                  for (let e of r.querySelectorAll('input, select, textarea'))
                    i += `${e.name}=${e.value}&`;
                  (i = i.slice(0, -1)),
                    (r.src = i),
                    a.parentElement.insertBefore(r, a),
                    a.remove();
                }),
                localStorage.getItem('viewedNotifications') ||
                  document
                    .querySelector('[data-clicker-trigger="notifications"]')
                    ?.classList.add('js-show'),
                (window.onbeforeunload = () =>
                  document
                    .querySelector('.loadbar')
                    .classList.add('js-active'));
            },
            enableSearch() {
              let e;
              document.addEventListener('focusin', e => {
                'INPUT' === e.target.tagName &&
                  e.target.closest('[data-search="input"]') &&
                  e.target
                    .closest('[data-search="form"]')
                    .classList.add('js-focused');
              }),
                document.addEventListener('click', e => {
                  const t = document.querySelector('[data-search="form"]');
                  t &&
                    !t.contains(e.target) &&
                    t.classList.remove('js-focused');
                }),
                document.addEventListener('input', t => {
                  if (
                    'INPUT' !== t.target.tagName ||
                    !t.target.closest('[data-search="input"]')
                  )
                    return;
                  const a = t.target.closest('[data-search="form"]'),
                    r = a.querySelector('[data-search="results"]');
                  if (!t.target.value)
                    return (r.innerHTML = ''), a.classList.remove('js-results');
                  this.runSearch ||
                    (this.runSearch = i => {
                      clearTimeout(e),
                        a.classList.add('js-searching'),
                        a.classList.remove('js-results'),
                        (r.innerHTML = ''),
                        (e = setTimeout(() => {
                          fetch('/comm/process-search-request', {
                            method: 'POST',
                            headers: {
                              'Content-Type': 'application/json;charset=utf-8',
                            },
                            body: JSON.stringify({ search: t.target.value }),
                          })
                            .then(e => e.text())
                            .then(e => {
                              if (
                                (a.classList.remove('js-searching'),
                                (e = JSON.parse(e)),
                                t.target.value !== i)
                              )
                                return this.runSearch(t.target.value);
                              t.target.value &&
                                (e?.success && e.data.html
                                  ? ((r.innerHTML = e.data.html),
                                    a.classList.add('js-results'))
                                  : (a.classList.remove('js-results'),
                                    setTimeout(() => (r.innerHTML = ''), 300)));
                            })
                            .catch(e => console.log(e));
                        }, 150));
                    }),
                    this.runSearch(t.target.value);
                });
            },
          },
          auth: {
            init() {
              const e = new URLSearchParams(location.search),
                t = e.get('invite'),
                a = e.get('redirect');
              if ((t && (document.cookie = `invite=${t}`), a))
                for (let e of document.querySelectorAll('form')) {
                  const t = document.createElement('input');
                  (t.type = 'hidden'),
                    (t.name = 'redirect'),
                    (t.value = '/' === a.substr(0, 1) ? a : `/${a}`),
                    e.appendChild(t);
                }
              document.addEventListener('formSubmission', e => {
                e.detail.response.success &&
                  'signup' === e.detail.response.context &&
                  'undefined' != typeof dataLayer &&
                  dataLayer.push({
                    event: 'ga_event',
                    eventCategory: 'SignupProcess',
                    eventAction: 'Signup',
                    eventLabel: '',
                    email:
                      e.detail.$form.querySelector('[name="email"]')?.value,
                  });
              });
            },
          },
          audits: {
            init() {
              this.enableAudits(),
                this.enableSavingAudits(),
                document.addEventListener('clickerClose', e => {
                  'popup-audit' === e.detail.type && location.reload();
                });
            },
            enableAudits() {
              document.addEventListener('submit', t => {
                if (!t.target.matches('[data-audit-form]')) return;
                t.preventDefault();
                const a = t.target.querySelector('input[name="website"]').value,
                  r = t.target.querySelector('input[name="website"]').dataset
                    .aceUrl,
                  i = document.querySelector(
                    '[data-clicker-element="popup-audit"]'
                  ),
                  s = i.querySelector('[data-audit="placeholder"]'),
                  n = document.createElement('iframe');
                i.querySelector('iframe')?.remove(),
                  (n.src = `${r}/#audit/${a}`),
                  s.parentElement.insertBefore(n, s),
                  e.trigger(i);
              });
              const t = document.querySelector('[data-audit-form]'),
                a = new URLSearchParams(location.search).get('website');
              a &&
                ((t.querySelector('input[name="website"]').value = a),
                t.dispatchEvent(new CustomEvent('submit', { bubbles: !0 })));
            },
            enableSavingAudits() {
              window.addEventListener(
                'message',
                e => {
                  e.data.acsbAceResults &&
                    fetch('/comm/audits/add-audit', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                      },
                      body: JSON.stringify({
                        token: e.data.acsbAceResults.token,
                        webpage: e.data.acsbAceResults.website,
                        system: e.data.acsbAceResults.system,
                        verdict: e.data.acsbAceResults.verdict,
                        score: e.data.acsbAceResults.score,
                      }),
                    }).catch(e => console.log(e));
                },
                !1
              );
            },
          },
          accounts: {
            init() {
              document.addEventListener('change', e => {
                const t = e.target.getAttribute('data-member-id');
                t &&
                  (document
                    .querySelector('.loadbar')
                    .classList.add('js-active'),
                  fetch('/comm/members/update-role', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json;charset=utf-8',
                    },
                    body: JSON.stringify({
                      memberId: t,
                      memberRole: e.target.value,
                    }),
                  })
                    .then(() => location.reload())
                    .catch(e => console.log(e)));
              });
            },
          },
          managebar: {
            init() {
              this.enableUI(),
                this.enablePlanUpdate(),
                this.enableAddonsSuggestion();
            },
            enableUI() {
              document.addEventListener('clickerTrigger', e => {
                const t = e.detail.$trigger?.getAttribute(
                    'data-clicker-trigger'
                  ),
                  a = document.querySelector('[name="monthlyCycle"]');
                a &&
                  ('plan-annually' === t
                    ? (a.value = 'false')
                    : 'plan-monthly' === t && (a.value = 'true'));
              }),
                document.addEventListener('clickerTrigger', e => {
                  const t = e.detail.$trigger?.hasAttribute(
                      'data-manage-accessflow'
                    )
                      ? 'accessFlow'
                      : 'accessWidget',
                    a = e.detail.$trigger?.getAttribute(
                      `data-manage-${t.toLowerCase()}`
                    );
                  if (!e.detail.$trigger) return;
                  const r = document.querySelector('[data-managebar="wrap"]');
                  r &&
                    fetch(
                      `/comm/${
                        'accessFlow' === t ? 'access-flow' : 'access-widget'
                      }/load-license-management-html`,
                      {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json;charset=utf-8',
                        },
                        body: JSON.stringify({ licenseId: a }),
                      }
                    )
                      .then(e => e.text())
                      .then(e => {
                        if (!(e = JSON.parse(e)) || !e.data.html) return;
                        const t = r.querySelector('[data-managebar="content"]');
                        r.classList.add('js-complete'),
                          (t.innerHTML = e.data.html),
                          this._updateRangePricing();
                      })
                      .catch(e => console.log(e));
                }),
                document.addEventListener('clickerClose', e => {
                  'wrap' === e.detail.$target.getAttribute('data-managebar') &&
                    ((e.detail.$target.querySelector(
                      '[data-managebar="content"]'
                    ).innerHTML = ''),
                    e.detail.$target.classList.remove('js-complete'));
                }),
                document.addEventListener('change', e => {
                  const t = e.target.closest('[data-license="wrap"]');
                  'discountEnabled' === e.target.name &&
                    t &&
                    (e.target.checked
                      ? t.classList.remove('js-discount-disabled')
                      : t.classList.add('js-discount-disabled'));
                }),
                document.addEventListener('input', e => {
                  'maxPageAudits' === e.target.name &&
                    this._updateRangePricing();
                });
            },
            enablePlanUpdate() {
              document.addEventListener('formSubmission', t => {
                if (
                  !t.detail.response.success ||
                  !t.detail.response.data.html ||
                  'loadLicenseUpdateSummaryHtml' !== t.detail.response.context
                )
                  return;
                document
                  .querySelector('[data-clicker-element="popup-plan-update"]')
                  ?.remove();
                const a = document.createElement('div');
                a.innerHTML = t.detail.response.data.html;
                const r = a.querySelector(
                  '[data-clicker-element="popup-plan-update"]'
                );
                document.body.appendChild(r),
                  setTimeout(() => e.trigger(r), 100);
              });
            },
            enableAddonsSuggestion() {
              document.addEventListener('formSubmission', t => {
                if (
                  !t.detail.response.success ||
                  'access-widget/charge-and-activate-license' !== t.detail.type
                )
                  return;
                const a = document.querySelector(
                  '[data-form="access-widget/charge-and-activate-license"] button[type="submit"]'
                );
                a && (a.disabled = !0),
                  fetch('/comm/access-widget/load-addons-html', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json;charset=utf-8',
                    },
                    body: JSON.stringify({
                      licenseId: t.detail.response.data.licenseId,
                    }),
                  })
                    .then(e => e.text())
                    .then(t => {
                      if (!(t = JSON.parse(t)) || !t.data.html) return;
                      document
                        .querySelector('[data-clicker-element="popup-addons"]')
                        ?.remove();
                      const a = document.createElement('div');
                      a.innerHTML = t.data.html;
                      const r = a.querySelector(
                        '[data-clicker-element="popup-addons"]'
                      );
                      document.body.appendChild(r), e.trigger(r);
                    })
                    .catch(e => console.log(e));
              });
            },
            _updateRangePricing() {
              const e = document.querySelector(
                  '.js-active[data-managebar="wrap"]'
                ),
                t = e?.querySelector('[data-max-page-audits="number"]'),
                a = e?.querySelector('[data-max-page-audits="wrap"]'),
                r = e?.querySelector('[name="maxPageAudits"]');
              if (!e || !t || !r) return;
              let i = Number(r.value);
              i < 1e3 && r.setAttribute('step', '100'),
                i > 1e3 && (r.value = i = r.value - 100),
                r.previousValue > i || (1e3 === i && 1e3 === r.previousValue)
                  ? i <= 1e4 && i > 1e3
                    ? r.setAttribute('step', '1000')
                    : i <= 1e3 && r.setAttribute('step', '100')
                  : (i >= 1e3 && i < 1e4 && r.setAttribute('step', '1000'),
                    i >= 1e4 && i < 1e5 && r.setAttribute('step', '10000')),
                i >= 1e5
                  ? a.classList.add('js-max-pages')
                  : a.classList.remove('js-max-pages'),
                (r.previousValue = i),
                (t.textContent = String(i).replace(
                  /\B(?=(\d{3})+(?!\d))/g,
                  ','
                ));
              for (let e of document.querySelectorAll(
                '[data-clicker-element-group="plans"] [data-price]'
              )) {
                const t = Number(e.getAttribute('data-price'));
                if (!e.innerText.replace('$', '') || !t) continue;
                let a = t;
                if (i > 100) {
                  let r;
                  i > 100 && i <= 1e3
                    ? (r = 0.8 * i)
                    : i > 1e3 && i <= 1e4
                    ? ((r = 0.7 * i), r < 800 && (r = 800))
                    : i > 1e4 &&
                      i <= 1e5 &&
                      ((r = 0.5 * i), r < 7e3 && (r = 7e3));
                  let s = Number(e.getAttribute('data-price-discount'));
                  'monthly' === e.getAttribute('data-price-cycle') &&
                    (r = (r + (r / 100) * 20) / 12),
                    s > 0 && (r -= (r / 100) * s),
                    (a = Math.ceil(t + r));
                }
                e.innerText = `$${String(a).replace(
                  /\B(?=(\d{3})+(?!\d))/g,
                  ','
                )}`;
              }
            },
          },
          billingForm: {
            init() {
              this.enableFormUI(),
                this.enableFormSubmissions(),
                this.handleIframeMessages(),
                document.addEventListener('click', e => {
                  e.target.closest('[data-remove-billing]') &&
                    confirm(
                      e.target.getAttribute('data-remove-billing-message')
                    ) &&
                    (document
                      .querySelector('.loadbar')
                      .classList.add('js-active'),
                    fetch('/comm/billing/remove-billing-method', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                      },
                      body: JSON.stringify({
                        billingId: e.target.getAttribute('data-remove-billing'),
                      }),
                    })
                      .then(e => e.text())
                      .then(e => {
                        if (
                          (document
                            .querySelector('.loadbar')
                            .classList.remove('js-active'),
                          !document.querySelector(
                            '.js-active[data-managebar="wrap"], .js-active.popup-payment'
                          ))
                        )
                          return location.reload();
                        this.loadBillingSelectionHtml();
                      })
                      .catch(e => console.log(e)));
                }),
                document.addEventListener('clickerClose', e => {
                  'popup-billing' === e.detail.type &&
                    (e.detail.$target
                      .querySelector('[data-billing="content"]')
                      .classList.remove(
                        'js-validated',
                        'js-payment-ready',
                        'js-tokenized',
                        'js-token-validation'
                      ),
                    document.querySelector(
                      '.js-active[data-managebar="wrap"], .js-active.popup-payment'
                    )
                      ? this.loadBillingSelectionHtml()
                      : location.reload());
                }),
                document.addEventListener('formSubmission', e => {
                  e.detail.response.success &&
                    [
                      'chargeAndActivateLicense',
                      'processBatchPayment',
                    ].includes(e.detail.response.context) &&
                    'undefined' != typeof dataLayer &&
                    dataLayer.push({
                      event: 'ga_event',
                      eventCategory: 'PurchaseProcess',
                      eventAction: 'PaymentComplete',
                      eventLabel: '',
                    });
                });
            },
            enableFormUI() {
              document.addEventListener('clickerClose', e => {
                'wrap' === e.detail.$target.getAttribute('data-billing') &&
                  ((e.detail.$target.querySelector(
                    '[data-billing="content"]'
                  ).innerHTML = ''),
                  e.detail.$target.classList.remove('js-complete'),
                  e.detail.$target
                    .querySelector('.js-validated')
                    ?.classList.remove('js-validated'),
                  e.detail.$target
                    .querySelector('.js-payment-ready')
                    ?.classList.remove('js-payment-ready'));
              }),
                document.addEventListener('clickerTrigger', e => {
                  if ('wrap' !== e.detail.$target.getAttribute('data-billing'))
                    return;
                  const t = e.detail.$trigger.getAttribute('data-billing-id');
                  fetch('/comm/billing/load-billing-form-html', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json;charset=utf-8',
                    },
                    body: JSON.stringify({ billingId: t }),
                  })
                    .then(e => e.text())
                    .then(t => {
                      if (!(t = JSON.parse(t)) || !t.data.html) return;
                      const a = e.detail.$target.querySelector(
                        '[data-billing="content"]'
                      );
                      e.detail.$target.classList.add('js-complete'),
                        (a.innerHTML = t.data.html);
                    })
                    .catch(e => console.log(e));
                }),
                document.addEventListener('click', e => {
                  const t = e.target.closest('[data-billing="edit-billing"]');
                  t &&
                    t
                      .closest('.js-validated')
                      ?.classList.remove(
                        'js-validated',
                        'js-payment-ready',
                        'js-tokenized',
                        'js-token-validation'
                      );
                }),
                document.addEventListener('click', e => {
                  const t = e.target.closest('[data-billing="edit-ccard"]');
                  if (!t) return;
                  const a = new Event('submit'),
                    r = t.closest('form');
                  r.classList.add('auto-ccard'),
                    Object.defineProperty(a, 'target', {
                      writable: !1,
                      value: r,
                    }),
                    document.dispatchEvent(a);
                });
            },
            handleIframeMessages() {
              window.addEventListener('message', e => {
                const t = document.querySelector('[data-billing="content"]'),
                  a = t?.querySelector('[data-billing="iframe"]');
                e.data.paymentReady && t.classList.add('js-payment-ready'),
                  e.data.paymentProcessing &&
                    t.classList.remove(
                      'js-payment-ready',
                      'js-tokenized',
                      'js-token-validation'
                    ),
                  e.data.iframeHeight &&
                    0 !== e.data.iframeHeight &&
                    (a.style.height = e.data.iframeHeight + 'px'),
                  e.data.paymentNotify &&
                    (e.data.success
                      ? (this.loadBillingSelectionHtml(),
                        this.showPaymentValidations(!0, e.data.message),
                        document
                          .querySelector('[data-license="wrap"]')
                          ?.classList.add('js-has-billing'))
                      : this.showPaymentValidations(!1, e.data.message));
              });
            },
            enableFormSubmissions() {
              document.addEventListener('formSubmission', e => {
                if (
                  !e.detail.response.success ||
                  'upsertBillingGetIframeUrl' !== e.detail.response.context ||
                  !e.detail.response.data.iframeUrl
                )
                  return;
                if (
                  e.detail.$form.matches('.has-token') &&
                  !e.detail.$form.matches('.auto-ccard') &&
                  !e.detail.$form.closest('.js-validated')
                )
                  return;
                const t = document.querySelector('[data-billing="iframe"]'),
                  a = document.querySelector('[data-billing="content"]');
                e.detail.$form.classList.remove('auto-ccard'),
                  e.detail.$form.querySelector('.general-message')?.remove(),
                  a.classList.remove('js-token-validation'),
                  t.setAttribute(
                    'data-latest-src',
                    e.detail.response.data.iframeUrl
                  ),
                  a.matches('.js-validated')
                    ? t.contentWindow.postMessage({ billingValidated: !0 }, '*')
                    : (a.classList.add('js-validated'),
                      t.setAttribute('src', e.detail.response.data.iframeUrl));
              });
            },
            loadBillingSelectionHtml() {
              const e = document.querySelector('.js-active.popup-payment'),
                t = document.querySelector('.js-active[data-managebar="wrap"]');
              if (!e && !t) return location.reload();
              const a = (
                t
                  ? t
                      .querySelector('[data-license="billing"]')
                      ?.closest('[data-form]')
                  : e
              )?.querySelector('button[type="submit"]');
              a &&
                ((a.disabled = !0),
                a.querySelector('.spinner') ||
                  (a.innerHTML =
                    a.innerHTML +
                    '<span class="spinner spinner-light"></span>')),
                fetch('/comm/billing/load-billing-selection-html', {
                  method: 'POST',
                  headers: { 'Content-Type': 'application/json;charset=utf-8' },
                })
                  .then(e => e.text())
                  .then(r => {
                    if (
                      ((r = JSON.parse(r)),
                      a && (a.disabled = !1),
                      !r?.success || !r.data.html)
                    )
                      return;
                    const i = document.createElement('div');
                    i.innerHTML = r.data.html;
                    const s = (t || e).querySelector(
                        '[data-license="billing"]'
                      ),
                      n = i.querySelector('[data-license="billing"]');
                    s.parentElement.insertBefore(n, s), s.remove();
                  })
                  .catch(e => console.log(e));
            },
            showPaymentValidations(e, t) {
              const a = document.querySelector('[data-billing="content"]'),
                r = a.querySelector('[data-billing="iframe"]');
              a.classList.add('js-token-validation'),
                (a.querySelector(
                  '[data-billing="credit-card-validation"]'
                ).textContent = t),
                (r.src = r.getAttribute('data-latest-src')),
                e && a.classList.add('js-tokenized');
            },
          },
          installation: {
            init() {
              this.loadUncompressedStandardScriptContent(),
                this.loadHljs(),
                this.enableLivePreview(),
                this.enableScriptBuilder(),
                this.enableSendingInstructions();
            },
            loadUncompressedStandardScriptContent: function () {
              fetch(
                `${window.location.origin}/comm/installation/generate-install-script`,
                { method: 'POST', body: JSON.stringify({}) }
              )
                .then(e => e.text())
                .then(e => {
                  const t = JSON.parse(e);
                  if (t.success) {
                    document.querySelector(
                      '[data-clicker-element="code-standard-uncompressed"] code'
                    ) &&
                      (document.querySelector(
                        '[data-clicker-element="code-standard-uncompressed"] code'
                      ).innerHTML = t.data.uncompressed);
                    for (let e of document.querySelectorAll('.hljs'))
                      e.classList.remove('hljs');
                    this.loadHljs();
                  }
                });
            },
            enableLivePreview() {
              document.addEventListener('input', e => {
                if (!e.target.closest('[data-script-form]')) return;
                const t = document.querySelector(
                    '[data-clicker-element="preview-custom-desktop"]'
                  ),
                  a = document.querySelector(
                    '[data-clicker-element="preview-custom-mobile"]'
                  ),
                  r = document.querySelector(
                    '[data-clicker-element="previewInterface"]'
                  );
                switch (e.target.name) {
                  case 'leadColor':
                    for (let t of r.querySelectorAll('svg .color'))
                      t.style.fill = e.target.value;
                    break;
                  case 'triggerColor':
                    (t.style['background-color'] = e.target.value),
                      (a.style['background-color'] = e.target.value);
                    break;
                  case 'triggerPositionX':
                    t.setAttribute('data-position-x', e.target.value);
                    break;
                  case 'triggerPositionY':
                    t.setAttribute('data-position-y', e.target.value);
                    break;
                  case 'triggerRadius':
                    t.style['border-radius'] = e.target.value;
                    break;
                  case 'triggerSize':
                    t.setAttribute('data-size', e.target.value);
                    break;
                  case 'triggerIcon':
                    (t.innerHTML =
                      e.target.parentElement.querySelector('svg').outerHTML),
                      (a.innerHTML =
                        e.target.parentElement.querySelector('svg').outerHTML);
                    break;
                  case 'hideTrigger':
                    'true' === e.target.value
                      ? (t.classList.add('hidden'), a.classList.add('hidden'))
                      : (t.classList.remove('hidden'),
                        a.classList.remove('hidden'));
                    break;
                  case 'triggerOffsetX':
                    'left' === t.getAttribute('data-position-x')
                      ? (t.style.left = e.target.value + 'px')
                      : (t.style.right = e.target.value + 'px');
                    break;
                  case 'triggerOffsetY':
                    const i = t.getAttribute('data-position-y');
                    (t.style.bottom = ''),
                      (t.style.top = ''),
                      (t.style['margin-top'] = ''),
                      i && 'bottom' !== i
                        ? 'top' === i
                          ? (t.style.top = e.target.value + 'px')
                          : 'center' === i &&
                            (t.style['margin-top'] = e.target.value + 'px')
                        : (t.style.bottom = e.target.value + 'px');
                    break;
                  case 'hideMobile':
                    'true' === e.target.value
                      ? a.classList.add('hidden')
                      : a.classList.remove('hidden');
                    break;
                  case 'mobileTriggerPositionX':
                    a.setAttribute('data-mobile-position-x', e.target.value);
                    break;
                  case 'mobileTriggerPositionY':
                    a.setAttribute('data-mobile-position-y', e.target.value);
                    break;
                  case 'mobileTriggerRadius':
                    a.style['border-radius'] = e.target.value;
                    break;
                  case 'mobileTriggerSize':
                    a.setAttribute('data-mobile-size', e.target.value);
                    break;
                  case 'mobileTriggerOffsetX':
                    'left' === a.getAttribute('data-position-x')
                      ? (a.style.left = e.target.value + 'px')
                      : (a.style.right = e.target.value + 'px');
                    break;
                  case 'mobileTriggerOffsetY':
                    const s = a.getAttribute('data-position-y');
                    (a.style.bottom = ''),
                      (a.style.top = ''),
                      (a.style['margin-top'] = ''),
                      s && 'bottom' !== s
                        ? 'top' === s
                          ? (a.style.top = e.target.value + 'px')
                          : 'center' === s &&
                            (a.style['margin-top'] = e.target.value + 'px')
                        : (a.style.bottom = e.target.value + 'px');
                }
              });
            },
            enableScriptBuilder() {
              document.addEventListener('input', e => {
                if (!['leadColor', 'triggerColor'].includes(e.target.name))
                  return;
                const t = document.createElement('div'),
                  a = e.target.parentElement.querySelector(
                    '[data-contrast-error]'
                  );
                a.classList.remove('js-active'),
                  (t.style.backgroundColor = e.target.value),
                  this.getContrastRatio(
                    [255, 255, 255],
                    t.style.backgroundColor
                      .replace(/\s/g, '')
                      .replace('rgba(', '')
                      .replace('rgb(', '')
                      .replace(')', '')
                      .split(',')
                  ) < 4 && a.classList.add('js-active');
              }),
                document.addEventListener('submit', e => {
                  if (
                    (e.preventDefault(),
                    !e.target.matches('[data-script-form]'))
                  )
                    return;
                  const t = e.target.querySelector('button'),
                    a = e.target.querySelector(
                      '[data-clicker-element="custom-scripts"]'
                    );
                  t.querySelector('.spinner') ||
                    (t.innerHTML =
                      t.innerHTML +
                      '<span class="spinner spinner-light"></span>'),
                    e.preventDefault(),
                    a.classList.remove('js-active'),
                    (t.disabled = !0),
                    fetch(
                      `${window.location.origin}/comm/installation/generate-install-script`,
                      {
                        method: 'POST',
                        body: JSON.stringify(
                          Object.fromEntries(new FormData(e.target))
                        ),
                      }
                    )
                      .then(e => e.text())
                      .then(e => {
                        if (
                          ((e = JSON.parse(e)), (t.disabled = !1), e.success)
                        ) {
                          (a.querySelector(
                            '[data-clicker-element="code-custom-compressed"] code'
                          ).innerHTML = e.data.compressed),
                            (a.querySelector(
                              '[data-clicker-element="code-custom-uncompressed"] code'
                            ).innerHTML = e.data.uncompressed);
                          for (let t of a.querySelectorAll('[data-copy]'))
                            t.setAttribute(
                              'data-copy',
                              (() => {
                                const t = document.createElement('textarea');
                                return (
                                  (t.innerHTML = e.data.compressed), t.value
                                );
                              })()
                            );
                          for (let e of a.querySelectorAll('.hljs'))
                            e.classList.remove('hljs');
                          this.loadHljs(), a.classList.add('js-active');
                        }
                      })
                      .catch(e => console.log(e));
                });
            },
            enableSendingInstructions() {
              document.addEventListener('click', e => {
                const t = e.target.closest(
                  '[data-clicker-trigger="popup-install-instructions"]'
                );
                if (!t) return;
                const a = document.querySelector(
                    '[data-form="installation/send-install-instructions"]'
                  ),
                  r = t
                    .closest('.js-active[data-code-block]')
                    ?.querySelector('code');
                s.clearMessages(a),
                  (a.querySelector('[name="developerEmail"]').value = ''),
                  (a.querySelector('[name="installScript"]').value =
                    r.textContent);
              });
            },
            getContrastRatio(e, t) {
              const a = this.getLuminance(e[0], e[1], e[2]),
                r = this.getLuminance(t[0], t[1], t[2]);
              return (Math.max(a, r) + 0.05) / (Math.min(a, r) + 0.05);
            },
            getLuminance(e, t, a) {
              const r = [e, t, a].map(e =>
                (e /= 255) <= 0.03928
                  ? e / 12.92
                  : Math.pow((e + 0.055) / 1.055, 2.4)
              );
              return 0.2126 * r[0] + 0.7152 * r[1] + 0.0722 * r[2];
            },
            loadHljs() {
              var e, t;
              window.hljsLoaded ||
                ((e = function (e) {
                  function t(e) {
                    return e
                      .replace(/&/g, '&amp;')
                      .replace(/</g, '&lt;')
                      .replace(/>/g, '&gt;');
                  }
                  function a(e) {
                    return e.nodeName.toLowerCase();
                  }
                  function r(e, t) {
                    var a = e && e.exec(t);
                    return a && 0 === a.index;
                  }
                  function i(e) {
                    return w.test(e);
                  }
                  function s(e) {
                    var t,
                      a = {},
                      r = Array.prototype.slice.call(arguments, 1);
                    for (t in e) a[t] = e[t];
                    return (
                      r.forEach(function (e) {
                        for (t in e) a[t] = e[t];
                      }),
                      a
                    );
                  }
                  function n(e) {
                    var t = [];
                    return (
                      (function e(r, i) {
                        for (var s = r.firstChild; s; s = s.nextSibling)
                          3 === s.nodeType
                            ? (i += s.nodeValue.length)
                            : 1 === s.nodeType &&
                              (t.push({ event: 'start', offset: i, node: s }),
                              (i = e(s, i)),
                              a(s).match(/br|hr|img|input/) ||
                                t.push({ event: 'stop', offset: i, node: s }));
                        return i;
                      })(e, 0),
                      t
                    );
                  }
                  function o(e, r, i) {
                    function s() {
                      return e.length && r.length
                        ? e[0].offset !== r[0].offset
                          ? e[0].offset < r[0].offset
                            ? e
                            : r
                          : 'start' === r[0].event
                          ? e
                          : r
                        : e.length
                        ? e
                        : r;
                    }
                    function n(e) {
                      d +=
                        '<' +
                        a(e) +
                        g.map
                          .call(e.attributes, function (e) {
                            return (
                              ' ' +
                              e.nodeName +
                              '="' +
                              t(e.value).replace('"', '&quot;') +
                              '"'
                            );
                          })
                          .join('') +
                        '>';
                    }
                    function o(e) {
                      d += '</' + a(e) + '>';
                    }
                    function l(e) {
                      ('start' === e.event ? n : o)(e.node);
                    }
                    for (var c = 0, d = '', u = []; e.length || r.length; ) {
                      var p = s();
                      if (
                        ((d += t(i.substring(c, p[0].offset))),
                        (c = p[0].offset),
                        p === e)
                      ) {
                        u.reverse().forEach(o);
                        do {
                          l(p.splice(0, 1)[0]), (p = s());
                        } while (p === e && p.length && p[0].offset === c);
                        u.reverse().forEach(n);
                      } else
                        'start' === p[0].event ? u.push(p[0].node) : u.pop(),
                          l(p.splice(0, 1)[0]);
                    }
                    return d + t(i.substr(c));
                  }
                  function l(e) {
                    return (
                      e.v &&
                        !e.cached_variants &&
                        (e.cached_variants = e.v.map(function (t) {
                          return s(e, { v: null }, t);
                        })),
                      e.cached_variants || (e.eW && [s(e)]) || [e]
                    );
                  }
                  function c(e) {
                    function t(e) {
                      return (e && e.source) || e;
                    }
                    function a(a, r) {
                      return new RegExp(
                        t(a),
                        'm' + (e.cI ? 'i' : '') + (r ? 'g' : '')
                      );
                    }
                    !(function r(i, s) {
                      if (!i.compiled) {
                        if (((i.compiled = !0), (i.k = i.k || i.bK), i.k)) {
                          var n = {},
                            o = function (t, a) {
                              e.cI && (a = a.toLowerCase()),
                                a.split(' ').forEach(function (e) {
                                  var a = e.split('|');
                                  n[a[0]] = [t, a[1] ? Number(a[1]) : 1];
                                });
                            };
                          'string' == typeof i.k
                            ? o('keyword', i.k)
                            : v(i.k).forEach(function (e) {
                                o(e, i.k[e]);
                              }),
                            (i.k = n);
                        }
                        (i.lR = a(i.l || /\w+/, !0)),
                          s &&
                            (i.bK &&
                              (i.b =
                                '\\b(' + i.bK.split(' ').join('|') + ')\\b'),
                            i.b || (i.b = /\B|\b/),
                            (i.bR = a(i.b)),
                            i.e || i.eW || (i.e = /\B|\b/),
                            i.e && (i.eR = a(i.e)),
                            (i.tE = t(i.e) || ''),
                            i.eW && s.tE && (i.tE += (i.e ? '|' : '') + s.tE)),
                          i.i && (i.iR = a(i.i)),
                          null == i.r && (i.r = 1),
                          i.c || (i.c = []),
                          (i.c = Array.prototype.concat.apply(
                            [],
                            i.c.map(function (e) {
                              return l('self' === e ? i : e);
                            })
                          )),
                          i.c.forEach(function (e) {
                            r(e, i);
                          }),
                          i.starts && r(i.starts, s);
                        var c = i.c
                          .map(function (e) {
                            return e.bK ? '\\.?(' + e.b + ')\\.?' : e.b;
                          })
                          .concat([i.tE, i.i])
                          .map(t)
                          .filter(Boolean);
                        i.t = c.length
                          ? a(c.join('|'), !0)
                          : {
                              exec: function () {
                                return null;
                              },
                            };
                      }
                    })(e);
                  }
                  function d(e, a, i, s) {
                    function n(e, t) {
                      var a, i;
                      for (a = 0, i = t.c.length; i > a; a++)
                        if (r(t.c[a].bR, e)) return t.c[a];
                    }
                    function o(e, t) {
                      if (r(e.eR, t)) {
                        for (; e.endsParent && e.parent; ) e = e.parent;
                        return e;
                      }
                      return e.eW ? o(e.parent, t) : void 0;
                    }
                    function l(e, t) {
                      return !i && r(t.iR, e);
                    }
                    function p(e, t) {
                      var a = y.cI ? t[0].toLowerCase() : t[0];
                      return e.k.hasOwnProperty(a) && e.k[a];
                    }
                    function m(e, t, a, r) {
                      var i = '<span class="' + (r ? '' : C.classPrefix);
                      return (i += e + '">') + t + (a ? '' : x);
                    }
                    function f() {
                      (T +=
                        null != E.sL
                          ? (function () {
                              var e = 'string' == typeof E.sL;
                              if (e && !b[E.sL]) return t(k);
                              var a = e
                                ? d(E.sL, k, !0, S[E.sL])
                                : u(k, E.sL.length ? E.sL : void 0);
                              return (
                                E.r > 0 && (M += a.r),
                                e && (S[E.sL] = a.top),
                                m(a.language, a.value, !1, !0)
                              );
                            })()
                          : (function () {
                              var e, a, r, i;
                              if (!E.k) return t(k);
                              for (
                                i = '',
                                  a = 0,
                                  E.lR.lastIndex = 0,
                                  r = E.lR.exec(k);
                                r;

                              )
                                (i += t(k.substring(a, r.index))),
                                  (e = p(E, r))
                                    ? ((M += e[1]), (i += m(e[0], t(r[0]))))
                                    : (i += t(r[0])),
                                  (a = E.lR.lastIndex),
                                  (r = E.lR.exec(k));
                              return i + t(k.substr(a));
                            })()),
                        (k = '');
                    }
                    function g(e) {
                      (T += e.cN ? m(e.cN, '', !0) : ''),
                        (E = Object.create(e, { parent: { value: E } }));
                    }
                    function v(e, t) {
                      if (((k += e), null == t)) return f(), 0;
                      var a = n(t, E);
                      if (a)
                        return (
                          a.skip
                            ? (k += t)
                            : (a.eB && (k += t), f(), a.rB || a.eB || (k = t)),
                          g(a),
                          a.rB ? 0 : t.length
                        );
                      var r = o(E, t);
                      if (r) {
                        var i = E;
                        i.skip
                          ? (k += t)
                          : (i.rE || i.eE || (k += t), f(), i.eE && (k = t));
                        do {
                          E.cN && (T += x),
                            E.skip || (M += E.r),
                            (E = E.parent);
                        } while (E !== r.parent);
                        return r.starts && g(r.starts), i.rE ? 0 : t.length;
                      }
                      if (l(t, E))
                        throw new Error(
                          'Illegal lexeme "' +
                            t +
                            '" for mode "' +
                            (E.cN || '<unnamed>') +
                            '"'
                        );
                      return (k += t), t.length || 1;
                    }
                    var y = h(e);
                    if (!y) throw new Error('Unknown language: "' + e + '"');
                    c(y);
                    var w,
                      E = s || y,
                      S = {},
                      T = '';
                    for (w = E; w !== y; w = w.parent)
                      w.cN && (T = m(w.cN, '', !0) + T);
                    var k = '',
                      M = 0;
                    try {
                      for (
                        var L, A, _ = 0;
                        (E.t.lastIndex = _), (L = E.t.exec(a));

                      )
                        (A = v(a.substring(_, L.index), L[0])),
                          (_ = L.index + A);
                      for (v(a.substr(_)), w = E; w.parent; w = w.parent)
                        w.cN && (T += x);
                      return { r: M, value: T, language: e, top: E };
                    } catch (e) {
                      if (e.message && -1 !== e.message.indexOf('Illegal'))
                        return { r: 0, value: t(a) };
                      throw e;
                    }
                  }
                  function u(e, a) {
                    a = a || C.languages || v(b);
                    var r = { r: 0, value: t(e) },
                      i = r;
                    return (
                      a.filter(h).forEach(function (t) {
                        var a = d(t, e, !1);
                        (a.language = t),
                          a.r > i.r && (i = a),
                          a.r > r.r && ((i = r), (r = a));
                      }),
                      i.language && (r.second_best = i),
                      r
                    );
                  }
                  function p(e) {
                    return C.tabReplace || C.useBR
                      ? e.replace(S, function (e, t) {
                          return C.useBR && '\n' === e
                            ? '<br>'
                            : C.tabReplace
                            ? t.replace(/\t/g, C.tabReplace)
                            : '';
                        })
                      : e;
                  }
                  function m(e) {
                    var t,
                      a,
                      r,
                      s,
                      l,
                      c = (function (e) {
                        var t,
                          a,
                          r,
                          s,
                          n = e.className + ' ';
                        if (
                          ((n += e.parentNode ? e.parentNode.className : ''),
                          (a = E.exec(n)))
                        )
                          return h(a[1]) ? a[1] : 'no-highlight';
                        for (t = 0, r = (n = n.split(/\s+/)).length; r > t; t++)
                          if (i((s = n[t])) || h(s)) return s;
                      })(e);
                    i(c) ||
                      (C.useBR
                        ? ((t = document.createElementNS(
                            'http://www.w3.org/1999/xhtml',
                            'div'
                          )).innerHTML = e.innerHTML
                            .replace(/\n/g, '')
                            .replace(/<br[ \/]*>/g, '\n'))
                        : (t = e),
                      (l = t.textContent),
                      (r = c ? d(c, l, !0) : u(l)),
                      (a = n(t)).length &&
                        (((s = document.createElementNS(
                          'http://www.w3.org/1999/xhtml',
                          'div'
                        )).innerHTML = r.value),
                        (r.value = o(a, n(s), l))),
                      (r.value = p(r.value)),
                      (e.innerHTML = r.value),
                      (e.className = (function (e, t, a) {
                        var r = t ? y[t] : a,
                          i = [e.trim()];
                        return (
                          e.match(/\bhljs\b/) || i.push('hljs'),
                          -1 === e.indexOf(r) && i.push(r),
                          i.join(' ').trim()
                        );
                      })(e.className, c, r.language)),
                      (e.result = { language: r.language, re: r.r }),
                      r.second_best &&
                        (e.second_best = {
                          language: r.second_best.language,
                          re: r.second_best.r,
                        }));
                  }
                  function f() {
                    if (!f.called) {
                      f.called = !0;
                      var e = document.querySelectorAll('pre code');
                      g.forEach.call(e, m);
                    }
                  }
                  function h(e) {
                    return (e = (e || '').toLowerCase()), b[e] || b[y[e]];
                  }
                  var g = [],
                    v = Object.keys,
                    b = {},
                    y = {},
                    w = /^(no-?highlight|plain|text)$/i,
                    E = /\blang(?:uage)?-([\w-]+)\b/i,
                    S = /((^(<[^>]+>|\t|)+|(?:\n)))/gm,
                    x = '</span>',
                    C = {
                      classPrefix: 'hljs-',
                      tabReplace: null,
                      useBR: !1,
                      languages: void 0,
                    };
                  return (
                    (e.highlight = d),
                    (e.highlightAuto = u),
                    (e.fixMarkup = p),
                    (e.highlightBlock = m),
                    (e.configure = function (e) {
                      C = s(C, e);
                    }),
                    (e.initHighlighting = f),
                    (e.initHighlightingOnLoad = function () {
                      addEventListener('DOMContentLoaded', f, !1),
                        addEventListener('load', f, !1);
                    }),
                    (e.registerLanguage = function (t, a) {
                      var r = (b[t] = a(e));
                      r.aliases &&
                        r.aliases.forEach(function (e) {
                          y[e] = t;
                        });
                    }),
                    (e.listLanguages = function () {
                      return v(b);
                    }),
                    (e.getLanguage = h),
                    (e.inherit = s),
                    (e.IR = '[a-zA-Z]\\w*'),
                    (e.UIR = '[a-zA-Z_]\\w*'),
                    (e.NR = '\\b\\d+(\\.\\d+)?'),
                    (e.CNR =
                      '(-?)(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)'),
                    (e.BNR = '\\b(0b[01]+)'),
                    (e.RSR =
                      '!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|-|-=|/=|/|:|;|<<|<<=|<=|<|===|==|=|>>>=|>>=|>=|>>>|>>|>|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~'),
                    (e.BE = { b: '\\\\[\\s\\S]', r: 0 }),
                    (e.ASM = {
                      cN: 'string',
                      b: "'",
                      e: "'",
                      i: '\\n',
                      c: [e.BE],
                    }),
                    (e.QSM = {
                      cN: 'string',
                      b: '"',
                      e: '"',
                      i: '\\n',
                      c: [e.BE],
                    }),
                    (e.PWM = {
                      b: /\b(a|an|the|are|I'm|isn't|don't|doesn't|won't|but|just|should|pretty|simply|enough|gonna|going|wtf|so|such|will|you|your|they|like|more)\b/,
                    }),
                    (e.C = function (t, a, r) {
                      var i = e.inherit(
                        { cN: 'comment', b: t, e: a, c: [] },
                        r || {}
                      );
                      return (
                        i.c.push(e.PWM),
                        i.c.push({
                          cN: 'doctag',
                          b: '(?:TODO|FIXME|NOTE|BUG|XXX):',
                          r: 0,
                        }),
                        i
                      );
                    }),
                    (e.CLCM = e.C('//', '$')),
                    (e.CBCM = e.C('/\\*', '\\*/')),
                    (e.HCM = e.C('#', '$')),
                    (e.NM = { cN: 'number', b: e.NR, r: 0 }),
                    (e.CNM = { cN: 'number', b: e.CNR, r: 0 }),
                    (e.BNM = { cN: 'number', b: e.BNR, r: 0 }),
                    (e.CSSNM = {
                      cN: 'number',
                      b:
                        e.NR +
                        '(%|em|ex|ch|rem|vw|vh|vmin|vmax|cm|mm|in|pt|pc|px|deg|grad|rad|turn|s|ms|Hz|kHz|dpi|dpcm|dppx)?',
                      r: 0,
                    }),
                    (e.RM = {
                      cN: 'regexp',
                      b: /\//,
                      e: /\/[gimuy]*/,
                      i: /\n/,
                      c: [e.BE, { b: /\[/, e: /\]/, r: 0, c: [e.BE] }],
                    }),
                    (e.TM = { cN: 'title', b: e.IR, r: 0 }),
                    (e.UTM = { cN: 'title', b: e.UIR, r: 0 }),
                    (e.METHOD_GUARD = { b: '\\.\\s*' + e.UIR, r: 0 }),
                    e.registerLanguage('apache', function (e) {
                      var t = { cN: 'number', b: '[\\$%]\\d+' };
                      return {
                        aliases: ['apacheconf'],
                        cI: !0,
                        c: [
                          e.HCM,
                          { cN: 'section', b: '</?', e: '>' },
                          {
                            cN: 'attribute',
                            b: /\w+/,
                            r: 0,
                            k: {
                              nomarkup:
                                'order deny allow setenv rewriterule rewriteengine rewritecond documentroot sethandler errordocument loadmodule options header listen serverroot servername',
                            },
                            starts: {
                              e: /$/,
                              r: 0,
                              k: { literal: 'on off all' },
                              c: [
                                { cN: 'meta', b: '\\s\\[', e: '\\]$' },
                                {
                                  cN: 'variable',
                                  b: '[\\$%]\\{',
                                  e: '\\}',
                                  c: ['self', t],
                                },
                                t,
                                e.QSM,
                              ],
                            },
                          },
                        ],
                        i: /\S/,
                      };
                    }),
                    e.registerLanguage('bash', function (e) {
                      var t = {
                          cN: 'variable',
                          v: [{ b: /\$[\w\d#@][\w\d_]*/ }, { b: /\$\{(.*?)}/ }],
                        },
                        a = {
                          cN: 'string',
                          b: /"/,
                          e: /"/,
                          c: [
                            e.BE,
                            t,
                            { cN: 'variable', b: /\$\(/, e: /\)/, c: [e.BE] },
                          ],
                        };
                      return {
                        aliases: ['sh', 'zsh'],
                        l: /\b-?[a-z\._]+\b/,
                        k: {
                          keyword:
                            'if then else elif fi for while in do done case esac function',
                          literal: 'true false',
                          built_in:
                            'break cd continue eval exec exit export getopts hash pwd readonly return shift test times trap umask unset alias bind builtin caller command declare echo enable help let local logout mapfile printf read readarray source type typeset ulimit unalias set shopt autoload bg bindkey bye cap chdir clone comparguments compcall compctl compdescribe compfiles compgroups compquote comptags comptry compvalues dirs disable disown echotc echoti emulate fc fg float functions getcap getln history integer jobs kill limit log noglob popd print pushd pushln rehash sched setcap setopt stat suspend ttyctl unfunction unhash unlimit unsetopt vared wait whence where which zcompile zformat zftp zle zmodload zparseopts zprof zpty zregexparse zsocket zstyle ztcp',
                          _: '-ne -eq -lt -gt -f -d -e -s -l -a',
                        },
                        c: [
                          { cN: 'meta', b: /^#![^\n]+sh\s*$/, r: 10 },
                          {
                            cN: 'function',
                            b: /\w[\w\d_]*\s*\(\s*\)\s*\{/,
                            rB: !0,
                            c: [e.inherit(e.TM, { b: /\w[\w\d_]*/ })],
                            r: 0,
                          },
                          e.HCM,
                          a,
                          { cN: 'string', b: /'/, e: /'/ },
                          t,
                        ],
                      };
                    }),
                    e.registerLanguage('coffeescript', function (e) {
                      var t = {
                          keyword:
                            'in if for while finally new do return else break catch instanceof throw try this switch continue typeof delete debugger super yield import export from as default await then unless until loop of by when and or is isnt not',
                          literal: 'true false null undefined yes no on off',
                          built_in:
                            'npm require console print module global window document',
                        },
                        a = '[A-Za-z$_][0-9A-Za-z$_]*',
                        r = { cN: 'subst', b: /#\{/, e: /}/, k: t },
                        i = [
                          e.BNM,
                          e.inherit(e.CNM, { starts: { e: '(\\s*/)?', r: 0 } }),
                          {
                            cN: 'string',
                            v: [
                              { b: /'''/, e: /'''/, c: [e.BE] },
                              { b: /'/, e: /'/, c: [e.BE] },
                              { b: /"""/, e: /"""/, c: [e.BE, r] },
                              { b: /"/, e: /"/, c: [e.BE, r] },
                            ],
                          },
                          {
                            cN: 'regexp',
                            v: [
                              { b: '///', e: '///', c: [r, e.HCM] },
                              { b: '//[gim]*', r: 0 },
                              { b: /\/(?![ *])(\\\/|.)*?\/[gim]*(?=\W|$)/ },
                            ],
                          },
                          { b: '@' + a },
                          {
                            sL: 'javascript',
                            eB: !0,
                            eE: !0,
                            v: [
                              { b: '```', e: '```' },
                              { b: '`', e: '`' },
                            ],
                          },
                        ];
                      r.c = i;
                      var s = e.inherit(e.TM, { b: a }),
                        n = '(\\(.*\\))?\\s*\\B[-=]>',
                        o = {
                          cN: 'params',
                          b: '\\([^\\(]',
                          rB: !0,
                          c: [
                            { b: /\(/, e: /\)/, k: t, c: ['self'].concat(i) },
                          ],
                        };
                      return {
                        aliases: ['coffee', 'cson', 'iced'],
                        k: t,
                        i: /\/\*/,
                        c: i.concat([
                          e.C('###', '###'),
                          e.HCM,
                          {
                            cN: 'function',
                            b: '^\\s*' + a + '\\s*=\\s*' + n,
                            e: '[-=]>',
                            rB: !0,
                            c: [s, o],
                          },
                          {
                            b: /[:\(,=]\s*/,
                            r: 0,
                            c: [
                              {
                                cN: 'function',
                                b: n,
                                e: '[-=]>',
                                rB: !0,
                                c: [o],
                              },
                            ],
                          },
                          {
                            cN: 'class',
                            bK: 'class',
                            e: '$',
                            i: /[:="\[\]]/,
                            c: [
                              { bK: 'extends', eW: !0, i: /[:="\[\]]/, c: [s] },
                              s,
                            ],
                          },
                          { b: a + ':', e: ':', rB: !0, rE: !0, r: 0 },
                        ]),
                      };
                    }),
                    e.registerLanguage('cpp', function (e) {
                      var t = { cN: 'keyword', b: '\\b[a-z\\d_]*_t\\b' },
                        a = {
                          cN: 'string',
                          v: [
                            { b: '(u8?|U)?L?"', e: '"', i: '\\n', c: [e.BE] },
                            { b: '(u8?|U)?R"', e: '"', c: [e.BE] },
                            { b: "'\\\\?.", e: "'", i: '.' },
                          ],
                        },
                        r = {
                          cN: 'number',
                          v: [
                            { b: "\\b(0b[01']+)" },
                            {
                              b: "(-?)\\b([\\d']+(\\.[\\d']*)?|\\.[\\d']+)(u|U|l|L|ul|UL|f|F|b|B)",
                            },
                            {
                              b: "(-?)(\\b0[xX][a-fA-F0-9']+|(\\b[\\d']+(\\.[\\d']*)?|\\.[\\d']+)([eE][-+]?[\\d']+)?)",
                            },
                          ],
                          r: 0,
                        },
                        i = {
                          cN: 'meta',
                          b: /#\s*[a-z]+\b/,
                          e: /$/,
                          k: {
                            'meta-keyword':
                              'if else elif endif define undef warning error line pragma ifdef ifndef include',
                          },
                          c: [
                            { b: /\\\n/, r: 0 },
                            e.inherit(a, { cN: 'meta-string' }),
                            {
                              cN: 'meta-string',
                              b: /<[^\n>]*>/,
                              e: /$/,
                              i: '\\n',
                            },
                            e.CLCM,
                            e.CBCM,
                          ],
                        },
                        s = e.IR + '\\s*\\(',
                        n = {
                          keyword:
                            'int float while private char catch import module export virtual operator sizeof dynamic_cast|10 typedef const_cast|10 const for static_cast|10 union namespace unsigned long volatile static protected bool template mutable if public friend do goto auto void enum else break extern using asm case typeid short reinterpret_cast|10 default double register explicit signed typename try this switch continue inline delete alignof constexpr decltype noexcept static_assert thread_local restrict _Bool complex _Complex _Imaginary atomic_bool atomic_char atomic_schar atomic_uchar atomic_short atomic_ushort atomic_int atomic_uint atomic_long atomic_ulong atomic_llong atomic_ullong new throw return and or not',
                          built_in:
                            'std string cin cout cerr clog stdin stdout stderr stringstream istringstream ostringstream auto_ptr deque list queue stack vector map set bitset multiset multimap unordered_set unordered_map unordered_multiset unordered_multimap array shared_ptr abort abs acos asin atan2 atan calloc ceil cosh cos exit exp fabs floor fmod fprintf fputs free frexp fscanf isalnum isalpha iscntrl isdigit isgraph islower isprint ispunct isspace isupper isxdigit tolower toupper labs ldexp log10 log malloc realloc memchr memcmp memcpy memset modf pow printf putchar puts scanf sinh sin snprintf sprintf sqrt sscanf strcat strchr strcmp strcpy strcspn strlen strncat strncmp strncpy strpbrk strrchr strspn strstr tanh tan vfprintf vprintf vsprintf endl initializer_list unique_ptr',
                          literal: 'true false nullptr NULL',
                        },
                        o = [t, e.CLCM, e.CBCM, r, a];
                      return {
                        aliases: ['c', 'cc', 'h', 'c++', 'h++', 'hpp'],
                        k: n,
                        i: '</',
                        c: o.concat([
                          i,
                          {
                            b: '\\b(deque|list|queue|stack|vector|map|set|bitset|multiset|multimap|unordered_map|unordered_set|unordered_multiset|unordered_multimap|array)\\s*<',
                            e: '>',
                            k: n,
                            c: ['self', t],
                          },
                          { b: e.IR + '::', k: n },
                          {
                            v: [
                              { b: /=/, e: /;/ },
                              { b: /\(/, e: /\)/ },
                              { bK: 'new throw return else', e: /;/ },
                            ],
                            k: n,
                            c: o.concat([
                              {
                                b: /\(/,
                                e: /\)/,
                                k: n,
                                c: o.concat(['self']),
                                r: 0,
                              },
                            ]),
                            r: 0,
                          },
                          {
                            cN: 'function',
                            b: '(' + e.IR + '[\\*&\\s]+)+' + s,
                            rB: !0,
                            e: /[{;=]/,
                            eE: !0,
                            k: n,
                            i: /[^\w\s\*&]/,
                            c: [
                              { b: s, rB: !0, c: [e.TM], r: 0 },
                              {
                                cN: 'params',
                                b: /\(/,
                                e: /\)/,
                                k: n,
                                r: 0,
                                c: [e.CLCM, e.CBCM, a, r, t],
                              },
                              e.CLCM,
                              e.CBCM,
                              i,
                            ],
                          },
                          {
                            cN: 'class',
                            bK: 'class struct',
                            e: /[{;:]/,
                            c: [{ b: /</, e: />/, c: ['self'] }, e.TM],
                          },
                        ]),
                        exports: { preprocessor: i, strings: a, k: n },
                      };
                    }),
                    e.registerLanguage('cs', function (e) {
                      var t = {
                          keyword:
                            'abstract as base bool break byte case catch char checked const continue decimal default delegate do double enum event explicit extern finally fixed float for foreach goto if implicit in int interface internal is lock long nameof object operator out override params private protected public readonly ref sbyte sealed short sizeof stackalloc static string struct switch this try typeof uint ulong unchecked unsafe ushort using virtual void volatile while add alias ascending async await by descending dynamic equals from get global group into join let on orderby partial remove select set value var where yield',
                          literal: 'null false true',
                        },
                        a = { cN: 'string', b: '@"', e: '"', c: [{ b: '""' }] },
                        r = e.inherit(a, { i: /\n/ }),
                        i = { cN: 'subst', b: '{', e: '}', k: t },
                        s = e.inherit(i, { i: /\n/ }),
                        n = {
                          cN: 'string',
                          b: /\$"/,
                          e: '"',
                          i: /\n/,
                          c: [{ b: '{{' }, { b: '}}' }, e.BE, s],
                        },
                        o = {
                          cN: 'string',
                          b: /\$@"/,
                          e: '"',
                          c: [{ b: '{{' }, { b: '}}' }, { b: '""' }, i],
                        },
                        l = e.inherit(o, {
                          i: /\n/,
                          c: [{ b: '{{' }, { b: '}}' }, { b: '""' }, s],
                        });
                      (i.c = [o, n, a, e.ASM, e.QSM, e.CNM, e.CBCM]),
                        (s.c = [
                          l,
                          n,
                          r,
                          e.ASM,
                          e.QSM,
                          e.CNM,
                          e.inherit(e.CBCM, { i: /\n/ }),
                        ]);
                      var c = { v: [o, n, a, e.ASM, e.QSM] },
                        d =
                          e.IR +
                          '(<' +
                          e.IR +
                          '(\\s*,\\s*' +
                          e.IR +
                          ')*>)?(\\[\\])?';
                      return {
                        aliases: ['csharp'],
                        k: t,
                        i: /::/,
                        c: [
                          e.C('///', '$', {
                            rB: !0,
                            c: [
                              {
                                cN: 'doctag',
                                v: [
                                  { b: '///', r: 0 },
                                  { b: '\x3c!--|--\x3e' },
                                  { b: '</?', e: '>' },
                                ],
                              },
                            ],
                          }),
                          e.CLCM,
                          e.CBCM,
                          {
                            cN: 'meta',
                            b: '#',
                            e: '$',
                            k: {
                              'meta-keyword':
                                'if else elif endif define undef warning error line region endregion pragma checksum',
                            },
                          },
                          c,
                          e.CNM,
                          {
                            bK: 'class interface',
                            e: /[{;=]/,
                            i: /[^\s:]/,
                            c: [e.TM, e.CLCM, e.CBCM],
                          },
                          {
                            bK: 'namespace',
                            e: /[{;=]/,
                            i: /[^\s:]/,
                            c: [
                              e.inherit(e.TM, { b: '[a-zA-Z](\\.?\\w)*' }),
                              e.CLCM,
                              e.CBCM,
                            ],
                          },
                          {
                            cN: 'meta',
                            b: '^\\s*\\[',
                            eB: !0,
                            e: '\\]',
                            eE: !0,
                            c: [{ cN: 'meta-string', b: /"/, e: /"/ }],
                          },
                          { bK: 'new return throw await else', r: 0 },
                          {
                            cN: 'function',
                            b: '(' + d + '\\s+)+' + e.IR + '\\s*\\(',
                            rB: !0,
                            e: /[{;=]/,
                            eE: !0,
                            k: t,
                            c: [
                              { b: e.IR + '\\s*\\(', rB: !0, c: [e.TM], r: 0 },
                              {
                                cN: 'params',
                                b: /\(/,
                                e: /\)/,
                                eB: !0,
                                eE: !0,
                                k: t,
                                r: 0,
                                c: [c, e.CNM, e.CBCM],
                              },
                              e.CLCM,
                              e.CBCM,
                            ],
                          },
                        ],
                      };
                    }),
                    e.registerLanguage('css', function (e) {
                      var t = {
                        b: /[A-Z\_\.\-]+\s*:/,
                        rB: !0,
                        e: ';',
                        eW: !0,
                        c: [
                          {
                            cN: 'attribute',
                            b: /\S/,
                            e: ':',
                            eE: !0,
                            starts: {
                              eW: !0,
                              eE: !0,
                              c: [
                                {
                                  b: /[\w-]+\(/,
                                  rB: !0,
                                  c: [
                                    { cN: 'built_in', b: /[\w-]+/ },
                                    { b: /\(/, e: /\)/, c: [e.ASM, e.QSM] },
                                  ],
                                },
                                e.CSSNM,
                                e.QSM,
                                e.ASM,
                                e.CBCM,
                                { cN: 'number', b: '#[0-9A-Fa-f]+' },
                                { cN: 'meta', b: '!important' },
                              ],
                            },
                          },
                        ],
                      };
                      return {
                        cI: !0,
                        i: /[=\/|'\$]/,
                        c: [
                          e.CBCM,
                          { cN: 'selector-id', b: /#[A-Za-z0-9_-]+/ },
                          { cN: 'selector-class', b: /\.[A-Za-z0-9_-]+/ },
                          { cN: 'selector-attr', b: /\[/, e: /\]/, i: '$' },
                          {
                            cN: 'selector-pseudo',
                            b: /:(:)?[a-zA-Z0-9\_\-\+\(\)"'.]+/,
                          },
                          {
                            b: '@(font-face|page)',
                            l: '[a-z-]+',
                            k: 'font-face page',
                          },
                          {
                            b: '@',
                            e: '[{;]',
                            i: /:/,
                            c: [
                              { cN: 'keyword', b: /\w+/ },
                              {
                                b: /\s/,
                                eW: !0,
                                eE: !0,
                                r: 0,
                                c: [e.ASM, e.QSM, e.CSSNM],
                              },
                            ],
                          },
                          {
                            cN: 'selector-tag',
                            b: '[a-zA-Z-][a-zA-Z0-9_-]*',
                            r: 0,
                          },
                          { b: '{', e: '}', i: /\S/, c: [e.CBCM, t] },
                        ],
                      };
                    }),
                    e.registerLanguage('diff', function (e) {
                      return {
                        aliases: ['patch'],
                        c: [
                          {
                            cN: 'meta',
                            r: 10,
                            v: [
                              { b: /^@@ +\-\d+,\d+ +\+\d+,\d+ +@@$/ },
                              { b: /^\*\*\* +\d+,\d+ +\*\*\*\*$/ },
                              { b: /^\-\-\- +\d+,\d+ +\-\-\-\-$/ },
                            ],
                          },
                          {
                            cN: 'comment',
                            v: [
                              { b: /Index: /, e: /$/ },
                              { b: /={3,}/, e: /$/ },
                              { b: /^\-{3}/, e: /$/ },
                              { b: /^\*{3} /, e: /$/ },
                              { b: /^\+{3}/, e: /$/ },
                              { b: /\*{5}/, e: /\*{5}$/ },
                            ],
                          },
                          { cN: 'addition', b: '^\\+', e: '$' },
                          { cN: 'deletion', b: '^\\-', e: '$' },
                          { cN: 'addition', b: '^\\!', e: '$' },
                        ],
                      };
                    }),
                    e.registerLanguage('http', function (e) {
                      var t = 'HTTP/[0-9\\.]+';
                      return {
                        aliases: ['https'],
                        i: '\\S',
                        c: [
                          {
                            b: '^' + t,
                            e: '$',
                            c: [{ cN: 'number', b: '\\b\\d{3}\\b' }],
                          },
                          {
                            b: '^[A-Z]+ (.*?) ' + t + '$',
                            rB: !0,
                            e: '$',
                            c: [
                              { cN: 'string', b: ' ', e: ' ', eB: !0, eE: !0 },
                              { b: t },
                              { cN: 'keyword', b: '[A-Z]+' },
                            ],
                          },
                          {
                            cN: 'attribute',
                            b: '^\\w',
                            e: ': ',
                            eE: !0,
                            i: '\\n|\\s|=',
                            starts: { e: '$', r: 0 },
                          },
                          { b: '\\n\\n', starts: { sL: [], eW: !0 } },
                        ],
                      };
                    }),
                    e.registerLanguage('ini', function (e) {
                      var t = {
                        cN: 'string',
                        c: [e.BE],
                        v: [
                          { b: "'''", e: "'''", r: 10 },
                          { b: '"""', e: '"""', r: 10 },
                          { b: '"', e: '"' },
                          { b: "'", e: "'" },
                        ],
                      };
                      return {
                        aliases: ['toml'],
                        cI: !0,
                        i: /\S/,
                        c: [
                          e.C(';', '$'),
                          e.HCM,
                          { cN: 'section', b: /^\s*\[+/, e: /\]+/ },
                          {
                            b: /^[a-z0-9\[\]_-]+\s*=\s*/,
                            e: '$',
                            rB: !0,
                            c: [
                              { cN: 'attr', b: /[a-z0-9\[\]_-]+/ },
                              {
                                b: /=/,
                                eW: !0,
                                r: 0,
                                c: [
                                  {
                                    cN: 'literal',
                                    b: /\bon|off|true|false|yes|no\b/,
                                  },
                                  {
                                    cN: 'variable',
                                    v: [
                                      { b: /\$[\w\d"][\w\d_]*/ },
                                      { b: /\$\{(.*?)}/ },
                                    ],
                                  },
                                  t,
                                  { cN: 'number', b: /([\+\-]+)?[\d]+_[\d_]+/ },
                                  e.NM,
                                ],
                              },
                            ],
                          },
                        ],
                      };
                    }),
                    e.registerLanguage('java', function (e) {
                      var t =
                        'false synchronized int abstract float private char boolean static null if const for true while long strictfp finally protected import native final void enum else break transient catch instanceof byte super volatile case assert short package default double public try this switch continue throws protected public private module requires exports do';
                      return {
                        aliases: ['jsp'],
                        k: t,
                        i: /<\/|#/,
                        c: [
                          e.C('/\\*\\*', '\\*/', {
                            r: 0,
                            c: [
                              { b: /\w+@/, r: 0 },
                              { cN: 'doctag', b: '@[A-Za-z]+' },
                            ],
                          }),
                          e.CLCM,
                          e.CBCM,
                          e.ASM,
                          e.QSM,
                          {
                            cN: 'class',
                            bK: 'class interface',
                            e: /[{;=]/,
                            eE: !0,
                            k: 'class interface',
                            i: /[:"\[\]]/,
                            c: [{ bK: 'extends implements' }, e.UTM],
                          },
                          { bK: 'new throw return else', r: 0 },
                          {
                            cN: 'function',
                            b:
                              '([À-ʸa-zA-Z_$][À-ʸa-zA-Z_$0-9]*(<[À-ʸa-zA-Z_$][À-ʸa-zA-Z_$0-9]*(\\s*,\\s*[À-ʸa-zA-Z_$][À-ʸa-zA-Z_$0-9]*)*>)?\\s+)+' +
                              e.UIR +
                              '\\s*\\(',
                            rB: !0,
                            e: /[{;=]/,
                            eE: !0,
                            k: t,
                            c: [
                              {
                                b: e.UIR + '\\s*\\(',
                                rB: !0,
                                r: 0,
                                c: [e.UTM],
                              },
                              {
                                cN: 'params',
                                b: /\(/,
                                e: /\)/,
                                k: t,
                                r: 0,
                                c: [e.ASM, e.QSM, e.CNM, e.CBCM],
                              },
                              e.CLCM,
                              e.CBCM,
                            ],
                          },
                          {
                            cN: 'number',
                            b: '\\b(0[bB]([01]+[01_]+[01]+|[01]+)|0[xX]([a-fA-F0-9]+[a-fA-F0-9_]+[a-fA-F0-9]+|[a-fA-F0-9]+)|(([\\d]+[\\d_]+[\\d]+|[\\d]+)(\\.([\\d]+[\\d_]+[\\d]+|[\\d]+))?|\\.([\\d]+[\\d_]+[\\d]+|[\\d]+))([eE][-+]?\\d+)?)[lLfF]?',
                            r: 0,
                          },
                          { cN: 'meta', b: '@[A-Za-z]+' },
                        ],
                      };
                    }),
                    e.registerLanguage('javascript', function (e) {
                      var t = '[A-Za-z$_][0-9A-Za-z$_]*',
                        a = {
                          keyword:
                            'in of if for while finally var new function do return void else break catch instanceof with throw case default try this switch continue typeof delete let yield const export super debugger as async await static import from as',
                          literal: 'true false null undefined NaN Infinity',
                          built_in:
                            'eval isFinite isNaN parseFloat parseInt decodeURI decodeURIComponent encodeURI encodeURIComponent escape unescape Object Function Boolean Error EvalError InternalError RangeError ReferenceError StopIteration SyntaxError TypeError URIError Number Math Date String RegExp Array Float32Array Float64Array Int16Array Int32Array Int8Array Uint16Array Uint32Array Uint8Array Uint8ClampedArray ArrayBuffer DataView JSON Intl arguments require module console window document Symbol Set Map WeakSet WeakMap Proxy Reflect Promise',
                        },
                        r = {
                          cN: 'number',
                          v: [
                            { b: '\\b(0[bB][01]+)' },
                            { b: '\\b(0[oO][0-7]+)' },
                            { b: e.CNR },
                          ],
                          r: 0,
                        },
                        i = { cN: 'subst', b: '\\$\\{', e: '\\}', k: a, c: [] },
                        s = { cN: 'string', b: '`', e: '`', c: [e.BE, i] };
                      i.c = [e.ASM, e.QSM, s, r, e.RM];
                      var n = i.c.concat([e.CBCM, e.CLCM]);
                      return {
                        aliases: ['js', 'jsx'],
                        k: a,
                        c: [
                          {
                            cN: 'meta',
                            r: 10,
                            b: /^\s*['"]use (strict|asm)['"]/,
                          },
                          { cN: 'meta', b: /^#!/, e: /$/ },
                          e.ASM,
                          e.QSM,
                          s,
                          e.CLCM,
                          e.CBCM,
                          r,
                          {
                            b: /[{,]\s*/,
                            r: 0,
                            c: [
                              {
                                b: t + '\\s*:',
                                rB: !0,
                                r: 0,
                                c: [{ cN: 'attr', b: t, r: 0 }],
                              },
                            ],
                          },
                          {
                            b: '(' + e.RSR + '|\\b(case|return|throw)\\b)\\s*',
                            k: 'return throw case',
                            c: [
                              e.CLCM,
                              e.CBCM,
                              e.RM,
                              {
                                cN: 'function',
                                b: '(\\(.*?\\)|' + t + ')\\s*=>',
                                rB: !0,
                                e: '\\s*=>',
                                c: [
                                  {
                                    cN: 'params',
                                    v: [
                                      { b: t },
                                      { b: /\(\s*\)/ },
                                      {
                                        b: /\(/,
                                        e: /\)/,
                                        eB: !0,
                                        eE: !0,
                                        k: a,
                                        c: n,
                                      },
                                    ],
                                  },
                                ],
                              },
                              {
                                b: /</,
                                e: /(\/\w+|\w+\/)>/,
                                sL: 'xml',
                                c: [
                                  { b: /<\w+\s*\/>/, skip: !0 },
                                  {
                                    b: /<\w+/,
                                    e: /(\/\w+|\w+\/)>/,
                                    skip: !0,
                                    c: [{ b: /<\w+\s*\/>/, skip: !0 }, 'self'],
                                  },
                                ],
                              },
                            ],
                            r: 0,
                          },
                          {
                            cN: 'function',
                            bK: 'function',
                            e: /\{/,
                            eE: !0,
                            c: [
                              e.inherit(e.TM, { b: t }),
                              {
                                cN: 'params',
                                b: /\(/,
                                e: /\)/,
                                eB: !0,
                                eE: !0,
                                c: n,
                              },
                            ],
                            i: /\[|%/,
                          },
                          { b: /\$[(.]/ },
                          e.METHOD_GUARD,
                          {
                            cN: 'class',
                            bK: 'class',
                            e: /[{;=]/,
                            eE: !0,
                            i: /[:"\[\]]/,
                            c: [{ bK: 'extends' }, e.UTM],
                          },
                          { bK: 'constructor', e: /\{/, eE: !0 },
                        ],
                        i: /#(?!!)/,
                      };
                    }),
                    e.registerLanguage('json', function (e) {
                      var t = { literal: 'true false null' },
                        a = [e.QSM, e.CNM],
                        r = { e: ',', eW: !0, eE: !0, c: a, k: t },
                        i = {
                          b: '{',
                          e: '}',
                          c: [
                            { cN: 'attr', b: /"/, e: /"/, c: [e.BE], i: '\\n' },
                            e.inherit(r, { b: /:/ }),
                          ],
                          i: '\\S',
                        },
                        s = { b: '\\[', e: '\\]', c: [e.inherit(r)], i: '\\S' };
                      return (
                        a.splice(a.length, 0, i, s), { c: a, k: t, i: '\\S' }
                      );
                    }),
                    e.registerLanguage('makefile', function (e) {
                      var t = {
                          cN: 'variable',
                          v: [
                            { b: '\\$\\(' + e.UIR + '\\)', c: [e.BE] },
                            { b: /\$[@%<?\^\+\*]/ },
                          ],
                        },
                        a = { cN: 'string', b: /"/, e: /"/, c: [e.BE, t] },
                        r = {
                          cN: 'variable',
                          b: /\$\([\w-]+\s/,
                          e: /\)/,
                          k: {
                            built_in:
                              'subst patsubst strip findstring filter filter-out sort word wordlist firstword lastword dir notdir suffix basename addsuffix addprefix join wildcard realpath abspath error warning shell origin flavor foreach if or and call eval file value',
                          },
                          c: [t],
                        },
                        i = {
                          b: '^' + e.UIR + '\\s*[:+?]?=',
                          i: '\\n',
                          rB: !0,
                          c: [{ b: '^' + e.UIR, e: '[:+?]?=', eE: !0 }],
                        },
                        s = { cN: 'section', b: /^[^\s]+:/, e: /$/, c: [t] };
                      return {
                        aliases: ['mk', 'mak'],
                        k: 'define endef undefine ifdef ifndef ifeq ifneq else endif include -include sinclude override export unexport private vpath',
                        l: /[\w-]+/,
                        c: [
                          e.HCM,
                          t,
                          a,
                          r,
                          i,
                          {
                            cN: 'meta',
                            b: /^\.PHONY:/,
                            e: /$/,
                            k: { 'meta-keyword': '.PHONY' },
                            l: /[\.\w]+/,
                          },
                          s,
                        ],
                      };
                    }),
                    e.registerLanguage('xml', function (e) {
                      var t = {
                        eW: !0,
                        i: /</,
                        r: 0,
                        c: [
                          { cN: 'attr', b: '[A-Za-z0-9\\._:-]+', r: 0 },
                          {
                            b: /=\s*/,
                            r: 0,
                            c: [
                              {
                                cN: 'string',
                                endsParent: !0,
                                v: [
                                  { b: /"/, e: /"/ },
                                  { b: /'/, e: /'/ },
                                  { b: /[^\s"'=<>`]+/ },
                                ],
                              },
                            ],
                          },
                        ],
                      };
                      return {
                        aliases: [
                          'html',
                          'xhtml',
                          'rss',
                          'atom',
                          'xjb',
                          'xsd',
                          'xsl',
                          'plist',
                        ],
                        cI: !0,
                        c: [
                          {
                            cN: 'meta',
                            b: '<!DOCTYPE',
                            e: '>',
                            r: 10,
                            c: [{ b: '\\[', e: '\\]' }],
                          },
                          e.C('\x3c!--', '--\x3e', { r: 10 }),
                          { b: '<\\!\\[CDATA\\[', e: '\\]\\]>', r: 10 },
                          {
                            b: /<\?(php)?/,
                            e: /\?>/,
                            sL: 'php',
                            c: [{ b: '/\\*', e: '\\*/', skip: !0 }],
                          },
                          {
                            cN: 'tag',
                            b: '<style(?=\\s|>|$)',
                            e: '>',
                            k: { name: 'style' },
                            c: [t],
                            starts: {
                              e: '</style>',
                              rE: !0,
                              sL: ['css', 'xml'],
                            },
                          },
                          {
                            cN: 'tag',
                            b: '<script(?=\\s|>|$)',
                            e: '>',
                            k: { name: 'script' },
                            c: [t],
                            starts: {
                              e: '</script>',
                              rE: !0,
                              sL: [
                                'actionscript',
                                'javascript',
                                'handlebars',
                                'xml',
                              ],
                            },
                          },
                          {
                            cN: 'meta',
                            v: [
                              { b: /<\?xml/, e: /\?>/, r: 10 },
                              { b: /<\?\w+/, e: /\?>/ },
                            ],
                          },
                          {
                            cN: 'tag',
                            b: '</?',
                            e: '/?>',
                            c: [{ cN: 'name', b: /[^\/><\s]+/, r: 0 }, t],
                          },
                        ],
                      };
                    }),
                    e.registerLanguage('markdown', function (e) {
                      return {
                        aliases: ['md', 'mkdown', 'mkd'],
                        c: [
                          {
                            cN: 'section',
                            v: [
                              { b: '^#{1,6}', e: '$' },
                              { b: '^.+?\\n[=-]{2,}$' },
                            ],
                          },
                          { b: '<', e: '>', sL: 'xml', r: 0 },
                          { cN: 'bullet', b: '^([*+-]|(\\d+\\.))\\s+' },
                          { cN: 'strong', b: '[*_]{2}.+?[*_]{2}' },
                          {
                            cN: 'emphasis',
                            v: [{ b: '\\*.+?\\*' }, { b: '_.+?_', r: 0 }],
                          },
                          { cN: 'quote', b: '^>\\s+', e: '$' },
                          {
                            cN: 'code',
                            v: [
                              { b: '^```w*s*$', e: '^```s*$' },
                              { b: '`.+?`' },
                              { b: '^( {4}|\t)', e: '$', r: 0 },
                            ],
                          },
                          { b: '^[-\\*]{3,}', e: '$' },
                          {
                            b: '\\[.+?\\][\\(\\[].*?[\\)\\]]',
                            rB: !0,
                            c: [
                              {
                                cN: 'string',
                                b: '\\[',
                                e: '\\]',
                                eB: !0,
                                rE: !0,
                                r: 0,
                              },
                              {
                                cN: 'link',
                                b: '\\]\\(',
                                e: '\\)',
                                eB: !0,
                                eE: !0,
                              },
                              {
                                cN: 'symbol',
                                b: '\\]\\[',
                                e: '\\]',
                                eB: !0,
                                eE: !0,
                              },
                            ],
                            r: 10,
                          },
                          {
                            b: /^\[[^\n]+\]:/,
                            rB: !0,
                            c: [
                              {
                                cN: 'symbol',
                                b: /\[/,
                                e: /\]/,
                                eB: !0,
                                eE: !0,
                              },
                              { cN: 'link', b: /:\s*/, e: /$/, eB: !0 },
                            ],
                          },
                        ],
                      };
                    }),
                    e.registerLanguage('nginx', function (e) {
                      var t = {
                          cN: 'variable',
                          v: [
                            { b: /\$\d+/ },
                            { b: /\$\{/, e: /}/ },
                            { b: '[\\$\\@]' + e.UIR },
                          ],
                        },
                        a = {
                          eW: !0,
                          l: '[a-z/_]+',
                          k: {
                            literal:
                              'on off yes no true false none blocked debug info notice warn error crit select break last permanent redirect kqueue rtsig epoll poll /dev/poll',
                          },
                          r: 0,
                          i: '=>',
                          c: [
                            e.HCM,
                            {
                              cN: 'string',
                              c: [e.BE, t],
                              v: [
                                { b: /"/, e: /"/ },
                                { b: /'/, e: /'/ },
                              ],
                            },
                            {
                              b: '([a-z]+):/',
                              e: '\\s',
                              eW: !0,
                              eE: !0,
                              c: [t],
                            },
                            {
                              cN: 'regexp',
                              c: [e.BE, t],
                              v: [
                                { b: '\\s\\^', e: '\\s|{|;', rE: !0 },
                                { b: '~\\*?\\s+', e: '\\s|{|;', rE: !0 },
                                { b: '\\*(\\.[a-z\\-]+)+' },
                                { b: '([a-z\\-]+\\.)+\\*' },
                              ],
                            },
                            {
                              cN: 'number',
                              b: '\\b\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}(:\\d{1,5})?\\b',
                            },
                            {
                              cN: 'number',
                              b: '\\b\\d+[kKmMgGdshdwy]*\\b',
                              r: 0,
                            },
                            t,
                          ],
                        };
                      return {
                        aliases: ['nginxconf'],
                        c: [
                          e.HCM,
                          {
                            b: e.UIR + '\\s+{',
                            rB: !0,
                            e: '{',
                            c: [{ cN: 'section', b: e.UIR }],
                            r: 0,
                          },
                          {
                            b: e.UIR + '\\s',
                            e: ';|{',
                            rB: !0,
                            c: [{ cN: 'attribute', b: e.UIR, starts: a }],
                            r: 0,
                          },
                        ],
                        i: '[^\\s\\}]',
                      };
                    }),
                    e.registerLanguage('objectivec', function (e) {
                      var t = /[a-zA-Z@][a-zA-Z0-9_]*/,
                        a = '@interface @class @protocol @implementation';
                      return {
                        aliases: ['mm', 'objc', 'obj-c'],
                        k: {
                          keyword:
                            'int float while char export sizeof typedef const struct for union unsigned long volatile static bool mutable if do return goto void enum else break extern asm case short default double register explicit signed typename this switch continue wchar_t inline readonly assign readwrite self @synchronized id typeof nonatomic super unichar IBOutlet IBAction strong weak copy in out inout bycopy byref oneway __strong __weak __block __autoreleasing @private @protected @public @try @property @end @throw @catch @finally @autoreleasepool @synthesize @dynamic @selector @optional @required @encode @package @import @defs @compatibility_alias __bridge __bridge_transfer __bridge_retained __bridge_retain __covariant __contravariant __kindof _Nonnull _Nullable _Null_unspecified __FUNCTION__ __PRETTY_FUNCTION__ __attribute__ getter setter retain unsafe_unretained nonnull nullable null_unspecified null_resettable class instancetype NS_DESIGNATED_INITIALIZER NS_UNAVAILABLE NS_REQUIRES_SUPER NS_RETURNS_INNER_POINTER NS_INLINE NS_AVAILABLE NS_DEPRECATED NS_ENUM NS_OPTIONS NS_SWIFT_UNAVAILABLE NS_ASSUME_NONNULL_BEGIN NS_ASSUME_NONNULL_END NS_REFINED_FOR_SWIFT NS_SWIFT_NAME NS_SWIFT_NOTHROW NS_DURING NS_HANDLER NS_ENDHANDLER NS_VALUERETURN NS_VOIDRETURN',
                          literal: 'false true FALSE TRUE nil YES NO NULL',
                          built_in:
                            'BOOL dispatch_once_t dispatch_queue_t dispatch_sync dispatch_async dispatch_once',
                        },
                        l: t,
                        i: '</',
                        c: [
                          {
                            cN: 'built_in',
                            b: '\\b(AV|CA|CF|CG|CI|CL|CM|CN|CT|MK|MP|MTK|MTL|NS|SCN|SK|UI|WK|XC)\\w+',
                          },
                          e.CLCM,
                          e.CBCM,
                          e.CNM,
                          e.QSM,
                          {
                            cN: 'string',
                            v: [
                              { b: '@"', e: '"', i: '\\n', c: [e.BE] },
                              { b: "'", e: "[^\\\\]'", i: "[^\\\\][^']" },
                            ],
                          },
                          {
                            cN: 'meta',
                            b: '#',
                            e: '$',
                            c: [
                              {
                                cN: 'meta-string',
                                v: [
                                  { b: '"', e: '"' },
                                  { b: '<', e: '>' },
                                ],
                              },
                            ],
                          },
                          {
                            cN: 'class',
                            b: '(' + a.split(' ').join('|') + ')\\b',
                            e: '({|$)',
                            eE: !0,
                            k: a,
                            l: t,
                            c: [e.UTM],
                          },
                          { b: '\\.' + e.UIR, r: 0 },
                        ],
                      };
                    }),
                    e.registerLanguage('perl', function (e) {
                      var t =
                          'getpwent getservent quotemeta msgrcv scalar kill dbmclose undef lc ma syswrite tr send umask sysopen shmwrite vec qx utime local oct semctl localtime readpipe do return format read sprintf dbmopen pop getpgrp not getpwnam rewinddir qqfileno qw endprotoent wait sethostent bless s|0 opendir continue each sleep endgrent shutdown dump chomp connect getsockname die socketpair close flock exists index shmgetsub for endpwent redo lstat msgctl setpgrp abs exit select print ref gethostbyaddr unshift fcntl syscall goto getnetbyaddr join gmtime symlink semget splice x|0 getpeername recv log setsockopt cos last reverse gethostbyname getgrnam study formline endhostent times chop length gethostent getnetent pack getprotoent getservbyname rand mkdir pos chmod y|0 substr endnetent printf next open msgsnd readdir use unlink getsockopt getpriority rindex wantarray hex system getservbyport endservent int chr untie rmdir prototype tell listen fork shmread ucfirst setprotoent else sysseek link getgrgid shmctl waitpid unpack getnetbyname reset chdir grep split require caller lcfirst until warn while values shift telldir getpwuid my getprotobynumber delete and sort uc defined srand accept package seekdir getprotobyname semop our rename seek if q|0 chroot sysread setpwent no crypt getc chown sqrt write setnetent setpriority foreach tie sin msgget map stat getlogin unless elsif truncate exec keys glob tied closedirioctl socket readlink eval xor readline binmode setservent eof ord bind alarm pipe atan2 getgrent exp time push setgrent gt lt or ne m|0 break given say state when',
                        a = { cN: 'subst', b: '[$@]\\{', e: '\\}', k: t },
                        r = { b: '->{', e: '}' },
                        i = {
                          v: [
                            { b: /\$\d/ },
                            {
                              b: /[\$%@](\^\w\b|#\w+(::\w+)*|{\w+}|\w+(::\w*)*)/,
                            },
                            { b: /[\$%@][^\s\w{]/, r: 0 },
                          ],
                        },
                        s = [e.BE, a, i],
                        n = [
                          i,
                          e.HCM,
                          e.C('^\\=\\w', '\\=cut', { eW: !0 }),
                          r,
                          {
                            cN: 'string',
                            c: s,
                            v: [
                              { b: 'q[qwxr]?\\s*\\(', e: '\\)', r: 5 },
                              { b: 'q[qwxr]?\\s*\\[', e: '\\]', r: 5 },
                              { b: 'q[qwxr]?\\s*\\{', e: '\\}', r: 5 },
                              { b: 'q[qwxr]?\\s*\\|', e: '\\|', r: 5 },
                              { b: 'q[qwxr]?\\s*\\<', e: '\\>', r: 5 },
                              { b: 'qw\\s+q', e: 'q', r: 5 },
                              { b: "'", e: "'", c: [e.BE] },
                              { b: '"', e: '"' },
                              { b: '`', e: '`', c: [e.BE] },
                              { b: '{\\w+}', c: [], r: 0 },
                              { b: '-?\\w+\\s*\\=\\>', c: [], r: 0 },
                            ],
                          },
                          {
                            cN: 'number',
                            b: '(\\b0[0-7_]+)|(\\b0x[0-9a-fA-F_]+)|(\\b[1-9][0-9_]*(\\.[0-9_]+)?)|[0_]\\b',
                            r: 0,
                          },
                          {
                            b:
                              '(\\/\\/|' +
                              e.RSR +
                              '|\\b(split|return|print|reverse|grep)\\b)\\s*',
                            k: 'split return print reverse grep',
                            r: 0,
                            c: [
                              e.HCM,
                              {
                                cN: 'regexp',
                                b: '(s|tr|y)/(\\\\.|[^/])*/(\\\\.|[^/])*/[a-z]*',
                                r: 10,
                              },
                              {
                                cN: 'regexp',
                                b: '(m|qr)?/',
                                e: '/[a-z]*',
                                c: [e.BE],
                                r: 0,
                              },
                            ],
                          },
                          {
                            cN: 'function',
                            bK: 'sub',
                            e: '(\\s*\\(.*?\\))?[;{]',
                            eE: !0,
                            r: 5,
                            c: [e.TM],
                          },
                          { b: '-\\w\\b', r: 0 },
                          {
                            b: '^__DATA__$',
                            e: '^__END__$',
                            sL: 'mojolicious',
                            c: [{ b: '^@@.*', e: '$', cN: 'comment' }],
                          },
                        ];
                      return (
                        (a.c = n),
                        (r.c = n),
                        { aliases: ['pl', 'pm'], l: /[\w\.]+/, k: t, c: n }
                      );
                    }),
                    e.registerLanguage('php', function (e) {
                      var t = { b: '\\$+[a-zA-Z_-ÿ][a-zA-Z0-9_-ÿ]*' },
                        a = { cN: 'meta', b: /<\?(php)?|\?>/ },
                        r = {
                          cN: 'string',
                          c: [e.BE, a],
                          v: [
                            { b: 'b"', e: '"' },
                            { b: "b'", e: "'" },
                            e.inherit(e.ASM, { i: null }),
                            e.inherit(e.QSM, { i: null }),
                          ],
                        },
                        i = { v: [e.BNM, e.CNM] };
                      return {
                        aliases: ['php3', 'php4', 'php5', 'php6'],
                        cI: !0,
                        k: 'and include_once list abstract global private echo interface as static endswitch array null if endwhile or const for endforeach self var while isset public protected exit foreach throw elseif include __FILE__ empty require_once do xor return parent clone use __CLASS__ __LINE__ else break print eval new catch __METHOD__ case exception default die require __FUNCTION__ enddeclare final try switch continue endfor endif declare unset true false trait goto instanceof insteadof __DIR__ __NAMESPACE__ yield finally',
                        c: [
                          e.HCM,
                          e.C('//', '$', { c: [a] }),
                          e.C('/\\*', '\\*/', {
                            c: [{ cN: 'doctag', b: '@[A-Za-z]+' }],
                          }),
                          e.C('__halt_compiler.+?;', !1, {
                            eW: !0,
                            k: '__halt_compiler',
                            l: e.UIR,
                          }),
                          {
                            cN: 'string',
                            b: /<<<['"]?\w+['"]?$/,
                            e: /^\w+;?$/,
                            c: [
                              e.BE,
                              {
                                cN: 'subst',
                                v: [{ b: /\$\w+/ }, { b: /\{\$/, e: /\}/ }],
                              },
                            ],
                          },
                          a,
                          { cN: 'keyword', b: /\$this\b/ },
                          t,
                          {
                            b: /(::|->)+[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/,
                          },
                          {
                            cN: 'function',
                            bK: 'function',
                            e: /[;{]/,
                            eE: !0,
                            i: '\\$|\\[|%',
                            c: [
                              e.UTM,
                              {
                                cN: 'params',
                                b: '\\(',
                                e: '\\)',
                                c: ['self', t, e.CBCM, r, i],
                              },
                            ],
                          },
                          {
                            cN: 'class',
                            bK: 'class interface',
                            e: '{',
                            eE: !0,
                            i: /[:\(\$"]/,
                            c: [{ bK: 'extends implements' }, e.UTM],
                          },
                          { bK: 'namespace', e: ';', i: /[\.']/, c: [e.UTM] },
                          { bK: 'use', e: ';', c: [e.UTM] },
                          { b: '=>' },
                          r,
                          i,
                        ],
                      };
                    }),
                    e.registerLanguage('python', function (e) {
                      var t = {
                          keyword:
                            'and elif is global as in if from raise for except finally print import pass return exec else break not with class assert yield try while continue del or def lambda async await nonlocal|10 None True False',
                          built_in: 'Ellipsis NotImplemented',
                        },
                        a = { cN: 'meta', b: /^(>>>|\.\.\.) / },
                        r = { cN: 'subst', b: /\{/, e: /\}/, k: t, i: /#/ },
                        i = {
                          cN: 'string',
                          c: [e.BE],
                          v: [
                            { b: /(u|b)?r?'''/, e: /'''/, c: [a], r: 10 },
                            { b: /(u|b)?r?"""/, e: /"""/, c: [a], r: 10 },
                            { b: /(fr|rf|f)'''/, e: /'''/, c: [a, r] },
                            { b: /(fr|rf|f)"""/, e: /"""/, c: [a, r] },
                            { b: /(u|r|ur)'/, e: /'/, r: 10 },
                            { b: /(u|r|ur)"/, e: /"/, r: 10 },
                            { b: /(b|br)'/, e: /'/ },
                            { b: /(b|br)"/, e: /"/ },
                            { b: /(fr|rf|f)'/, e: /'/, c: [r] },
                            { b: /(fr|rf|f)"/, e: /"/, c: [r] },
                            e.ASM,
                            e.QSM,
                          ],
                        },
                        s = {
                          cN: 'number',
                          r: 0,
                          v: [
                            { b: e.BNR + '[lLjJ]?' },
                            { b: '\\b(0o[0-7]+)[lLjJ]?' },
                            { b: e.CNR + '[lLjJ]?' },
                          ],
                        },
                        n = {
                          cN: 'params',
                          b: /\(/,
                          e: /\)/,
                          c: ['self', a, s, i],
                        };
                      return (
                        (r.c = [i, s, a]),
                        {
                          aliases: ['py', 'gyp'],
                          k: t,
                          i: /(<\/|->|\?)|=>/,
                          c: [
                            a,
                            s,
                            i,
                            e.HCM,
                            {
                              v: [
                                { cN: 'function', bK: 'def' },
                                { cN: 'class', bK: 'class' },
                              ],
                              e: /:/,
                              i: /[${=;\n,]/,
                              c: [e.UTM, n, { b: /->/, eW: !0, k: 'None' }],
                            },
                            { cN: 'meta', b: /^[\t ]*@/, e: /$/ },
                            { b: /\b(print|exec)\(/ },
                          ],
                        }
                      );
                    }),
                    e.registerLanguage('ruby', function (e) {
                      var t =
                          '[a-zA-Z_]\\w*[!?=]?|[-+~]\\@|<<|>>|=~|===?|<=>|[<>]=?|\\*\\*|[-/+%^&*~`|]|\\[\\]=?',
                        a = {
                          keyword:
                            'and then defined module in return redo if BEGIN retry end for self when next until do begin unless END rescue else break undef not super class case require yield alias while ensure elsif or include attr_reader attr_writer attr_accessor',
                          literal: 'true false nil',
                        },
                        r = { cN: 'doctag', b: '@[A-Za-z]+' },
                        i = { b: '#<', e: '>' },
                        s = [
                          e.C('#', '$', { c: [r] }),
                          e.C('^\\=begin', '^\\=end', { c: [r], r: 10 }),
                          e.C('^__END__', '\\n$'),
                        ],
                        n = { cN: 'subst', b: '#\\{', e: '}', k: a },
                        o = {
                          cN: 'string',
                          c: [e.BE, n],
                          v: [
                            { b: /'/, e: /'/ },
                            { b: /"/, e: /"/ },
                            { b: /`/, e: /`/ },
                            { b: '%[qQwWx]?\\(', e: '\\)' },
                            { b: '%[qQwWx]?\\[', e: '\\]' },
                            { b: '%[qQwWx]?{', e: '}' },
                            { b: '%[qQwWx]?<', e: '>' },
                            { b: '%[qQwWx]?/', e: '/' },
                            { b: '%[qQwWx]?%', e: '%' },
                            { b: '%[qQwWx]?-', e: '-' },
                            { b: '%[qQwWx]?\\|', e: '\\|' },
                            {
                              b: /\B\?(\\\d{1,3}|\\x[A-Fa-f0-9]{1,2}|\\u[A-Fa-f0-9]{4}|\\?\S)\b/,
                            },
                            { b: /<<(-?)\w+$/, e: /^\s*\w+$/ },
                          ],
                        },
                        l = {
                          cN: 'params',
                          b: '\\(',
                          e: '\\)',
                          endsParent: !0,
                          k: a,
                        },
                        c = [
                          o,
                          i,
                          {
                            cN: 'class',
                            bK: 'class module',
                            e: '$|;',
                            i: /=/,
                            c: [
                              e.inherit(e.TM, {
                                b: '[A-Za-z_]\\w*(::\\w+)*(\\?|\\!)?',
                              }),
                              {
                                b: '<\\s*',
                                c: [{ b: '(' + e.IR + '::)?' + e.IR }],
                              },
                            ].concat(s),
                          },
                          {
                            cN: 'function',
                            bK: 'def',
                            e: '$|;',
                            c: [e.inherit(e.TM, { b: t }), l].concat(s),
                          },
                          { b: e.IR + '::' },
                          { cN: 'symbol', b: e.UIR + '(\\!|\\?)?:', r: 0 },
                          {
                            cN: 'symbol',
                            b: ':(?!\\s)',
                            c: [o, { b: t }],
                            r: 0,
                          },
                          {
                            cN: 'number',
                            b: '(\\b0[0-7_]+)|(\\b0x[0-9a-fA-F_]+)|(\\b[1-9][0-9_]*(\\.[0-9_]+)?)|[0_]\\b',
                            r: 0,
                          },
                          { b: '(\\$\\W)|((\\$|\\@\\@?)(\\w+))' },
                          { cN: 'params', b: /\|/, e: /\|/, k: a },
                          {
                            b: '(' + e.RSR + '|unless)\\s*',
                            k: 'unless',
                            c: [
                              i,
                              {
                                cN: 'regexp',
                                c: [e.BE, n],
                                i: /\n/,
                                v: [
                                  { b: '/', e: '/[a-z]*' },
                                  { b: '%r{', e: '}[a-z]*' },
                                  { b: '%r\\(', e: '\\)[a-z]*' },
                                  { b: '%r!', e: '![a-z]*' },
                                  { b: '%r\\[', e: '\\][a-z]*' },
                                ],
                              },
                            ].concat(s),
                            r: 0,
                          },
                        ].concat(s);
                      (n.c = c), (l.c = c);
                      var d = [
                        { b: /^\s*=>/, starts: { e: '$', c } },
                        {
                          cN: 'meta',
                          b: '^([>?]>|[\\w#]+\\(\\w+\\):\\d+:\\d+>|(\\w+-)?\\d+\\.\\d+\\.\\d(p\\d+)?[^>]+>)',
                          starts: { e: '$', c },
                        },
                      ];
                      return {
                        aliases: ['rb', 'gemspec', 'podspec', 'thor', 'irb'],
                        k: a,
                        i: /\/\*/,
                        c: s.concat(d).concat(c),
                      };
                    }),
                    e.registerLanguage('shell', function (e) {
                      return {
                        aliases: ['console'],
                        c: [
                          {
                            cN: 'meta',
                            b: '^\\s{0,3}[\\w\\d\\[\\]()@-]*[>%$#]',
                            starts: { e: '$', sL: 'bash' },
                          },
                        ],
                      };
                    }),
                    e.registerLanguage('sql', function (e) {
                      var t = e.C('--', '$');
                      return {
                        cI: !0,
                        i: /[<>{}*#]/,
                        c: [
                          {
                            bK: 'begin end start commit rollback savepoint lock alter create drop rename call delete do handler insert load replace select truncate update set show pragma grant merge describe use explain help declare prepare execute deallocate release unlock purge reset change stop analyze cache flush optimize repair kill install uninstall checksum restore check backup revoke comment',
                            e: /;/,
                            eW: !0,
                            l: /[\w\.]+/,
                            k: {
                              keyword:
                                'abort abs absolute acc acce accep accept access accessed accessible account acos action activate add addtime admin administer advanced advise aes_decrypt aes_encrypt after agent aggregate ali alia alias allocate allow alter always analyze ancillary and any anydata anydataset anyschema anytype apply archive archived archivelog are as asc ascii asin assembly assertion associate asynchronous at atan atn2 attr attri attrib attribu attribut attribute attributes audit authenticated authentication authid authors auto autoallocate autodblink autoextend automatic availability avg backup badfile basicfile before begin beginning benchmark between bfile bfile_base big bigfile bin binary_double binary_float binlog bit_and bit_count bit_length bit_or bit_xor bitmap blob_base block blocksize body both bound buffer_cache buffer_pool build bulk by byte byteordermark bytes cache caching call calling cancel capacity cascade cascaded case cast catalog category ceil ceiling chain change changed char_base char_length character_length characters characterset charindex charset charsetform charsetid check checksum checksum_agg child choose chr chunk class cleanup clear client clob clob_base clone close cluster_id cluster_probability cluster_set clustering coalesce coercibility col collate collation collect colu colum column column_value columns columns_updated comment commit compact compatibility compiled complete composite_limit compound compress compute concat concat_ws concurrent confirm conn connec connect connect_by_iscycle connect_by_isleaf connect_by_root connect_time connection consider consistent constant constraint constraints constructor container content contents context contributors controlfile conv convert convert_tz corr corr_k corr_s corresponding corruption cos cost count count_big counted covar_pop covar_samp cpu_per_call cpu_per_session crc32 create creation critical cross cube cume_dist curdate current current_date current_time current_timestamp current_user cursor curtime customdatum cycle data database databases datafile datafiles datalength date_add date_cache date_format date_sub dateadd datediff datefromparts datename datepart datetime2fromparts day day_to_second dayname dayofmonth dayofweek dayofyear days db_role_change dbtimezone ddl deallocate declare decode decompose decrement decrypt deduplicate def defa defau defaul default defaults deferred defi defin define degrees delayed delegate delete delete_all delimited demand dense_rank depth dequeue des_decrypt des_encrypt des_key_file desc descr descri describ describe descriptor deterministic diagnostics difference dimension direct_load directory disable disable_all disallow disassociate discardfile disconnect diskgroup distinct distinctrow distribute distributed div do document domain dotnet double downgrade drop dumpfile duplicate duration each edition editionable editions element ellipsis else elsif elt empty enable enable_all enclosed encode encoding encrypt end end-exec endian enforced engine engines enqueue enterprise entityescaping eomonth error errors escaped evalname evaluate event eventdata events except exception exceptions exchange exclude excluding execu execut execute exempt exists exit exp expire explain export export_set extended extent external external_1 external_2 externally extract failed failed_login_attempts failover failure far fast feature_set feature_value fetch field fields file file_name_convert filesystem_like_logging final finish first first_value fixed flash_cache flashback floor flush following follows for forall force form forma format found found_rows freelist freelists freepools fresh from from_base64 from_days ftp full function general generated get get_format get_lock getdate getutcdate global global_name globally go goto grant grants greatest group group_concat group_id grouping grouping_id groups gtid_subtract guarantee guard handler hash hashkeys having hea head headi headin heading heap help hex hierarchy high high_priority hosts hour http id ident_current ident_incr ident_seed identified identity idle_time if ifnull ignore iif ilike ilm immediate import in include including increment index indexes indexing indextype indicator indices inet6_aton inet6_ntoa inet_aton inet_ntoa infile initial initialized initially initrans inmemory inner innodb input insert install instance instantiable instr interface interleaved intersect into invalidate invisible is is_free_lock is_ipv4 is_ipv4_compat is_not is_not_null is_used_lock isdate isnull isolation iterate java join json json_exists keep keep_duplicates key keys kill language large last last_day last_insert_id last_value lax lcase lead leading least leaves left len lenght length less level levels library like like2 like4 likec limit lines link list listagg little ln load load_file lob lobs local localtime localtimestamp locate locator lock locked log log10 log2 logfile logfiles logging logical logical_reads_per_call logoff logon logs long loop low low_priority lower lpad lrtrim ltrim main make_set makedate maketime managed management manual map mapping mask master master_pos_wait match matched materialized max maxextents maximize maxinstances maxlen maxlogfiles maxloghistory maxlogmembers maxsize maxtrans md5 measures median medium member memcompress memory merge microsecond mid migration min minextents minimum mining minus minute minvalue missing mod mode model modification modify module monitoring month months mount move movement multiset mutex name name_const names nan national native natural nav nchar nclob nested never new newline next nextval no no_write_to_binlog noarchivelog noaudit nobadfile nocheck nocompress nocopy nocycle nodelay nodiscardfile noentityescaping noguarantee nokeep nologfile nomapping nomaxvalue nominimize nominvalue nomonitoring none noneditionable nonschema noorder nopr nopro noprom nopromp noprompt norely noresetlogs noreverse normal norowdependencies noschemacheck noswitch not nothing notice notrim novalidate now nowait nth_value nullif nulls num numb numbe nvarchar nvarchar2 object ocicoll ocidate ocidatetime ociduration ociinterval ociloblocator ocinumber ociref ocirefcursor ocirowid ocistring ocitype oct octet_length of off offline offset oid oidindex old on online only opaque open operations operator optimal optimize option optionally or oracle oracle_date oradata ord ordaudio orddicom orddoc order ordimage ordinality ordvideo organization orlany orlvary out outer outfile outline output over overflow overriding package pad parallel parallel_enable parameters parent parse partial partition partitions pascal passing password password_grace_time password_lock_time password_reuse_max password_reuse_time password_verify_function patch path patindex pctincrease pctthreshold pctused pctversion percent percent_rank percentile_cont percentile_disc performance period period_add period_diff permanent physical pi pipe pipelined pivot pluggable plugin policy position post_transaction pow power pragma prebuilt precedes preceding precision prediction prediction_cost prediction_details prediction_probability prediction_set prepare present preserve prior priority private private_sga privileges procedural procedure procedure_analyze processlist profiles project prompt protection public publishingservername purge quarter query quick quiesce quota quotename radians raise rand range rank raw read reads readsize rebuild record records recover recovery recursive recycle redo reduced ref reference referenced references referencing refresh regexp_like register regr_avgx regr_avgy regr_count regr_intercept regr_r2 regr_slope regr_sxx regr_sxy reject rekey relational relative relaylog release release_lock relies_on relocate rely rem remainder rename repair repeat replace replicate replication required reset resetlogs resize resource respect restore restricted result result_cache resumable resume retention return returning returns reuse reverse revoke right rlike role roles rollback rolling rollup round row row_count rowdependencies rowid rownum rows rtrim rules safe salt sample save savepoint sb1 sb2 sb4 scan schema schemacheck scn scope scroll sdo_georaster sdo_topo_geometry search sec_to_time second section securefile security seed segment select self sequence sequential serializable server servererror session session_user sessions_per_user set sets settings sha sha1 sha2 share shared shared_pool short show shrink shutdown si_averagecolor si_colorhistogram si_featurelist si_positionalcolor si_stillimage si_texture siblings sid sign sin size size_t sizes skip slave sleep smalldatetimefromparts smallfile snapshot some soname sort soundex source space sparse spfile split sql sql_big_result sql_buffer_result sql_cache sql_calc_found_rows sql_small_result sql_variant_property sqlcode sqldata sqlerror sqlname sqlstate sqrt square standalone standby start starting startup statement static statistics stats_binomial_test stats_crosstab stats_ks_test stats_mode stats_mw_test stats_one_way_anova stats_t_test_ stats_t_test_indep stats_t_test_one stats_t_test_paired stats_wsr_test status std stddev stddev_pop stddev_samp stdev stop storage store stored str str_to_date straight_join strcmp strict string struct stuff style subdate subpartition subpartitions substitutable substr substring subtime subtring_index subtype success sum suspend switch switchoffset switchover sync synchronous synonym sys sys_xmlagg sysasm sysaux sysdate sysdatetimeoffset sysdba sysoper system system_user sysutcdatetime table tables tablespace tan tdo template temporary terminated tertiary_weights test than then thread through tier ties time time_format time_zone timediff timefromparts timeout timestamp timestampadd timestampdiff timezone_abbr timezone_minute timezone_region to to_base64 to_date to_days to_seconds todatetimeoffset trace tracking transaction transactional translate translation treat trigger trigger_nestlevel triggers trim truncate try_cast try_convert try_parse type ub1 ub2 ub4 ucase unarchived unbounded uncompress under undo unhex unicode uniform uninstall union unique unix_timestamp unknown unlimited unlock unpivot unrecoverable unsafe unsigned until untrusted unusable unused update updated upgrade upped upper upsert url urowid usable usage use use_stored_outlines user user_data user_resources users using utc_date utc_timestamp uuid uuid_short validate validate_password_strength validation valist value values var var_samp varcharc vari varia variab variabl variable variables variance varp varraw varrawc varray verify version versions view virtual visible void wait wallet warning warnings week weekday weekofyear wellformed when whene whenev wheneve whenever where while whitespace with within without work wrapped xdb xml xmlagg xmlattributes xmlcast xmlcolattval xmlelement xmlexists xmlforest xmlindex xmlnamespaces xmlpi xmlquery xmlroot xmlschema xmlserialize xmltable xmltype xor year year_to_month years yearweek',
                              literal: 'true false null',
                              built_in:
                                'array bigint binary bit blob boolean char character date dec decimal float int int8 integer interval number numeric real record serial serial8 smallint text varchar varying void',
                            },
                            c: [
                              {
                                cN: 'string',
                                b: "'",
                                e: "'",
                                c: [e.BE, { b: "''" }],
                              },
                              {
                                cN: 'string',
                                b: '"',
                                e: '"',
                                c: [e.BE, { b: '""' }],
                              },
                              { cN: 'string', b: '`', e: '`', c: [e.BE] },
                              e.CNM,
                              e.CBCM,
                              t,
                            ],
                          },
                          e.CBCM,
                          t,
                        ],
                      };
                    }),
                    e
                  );
                }),
                (t =
                  ('object' == typeof window && window) ||
                  ('object' == typeof self && self)),
                'undefined' != typeof exports
                  ? e(exports)
                  : t &&
                    ((t.hljs = e({})),
                    'function' == typeof define &&
                      a.amdO &&
                      define([], function () {
                        return t.hljs;
                      })),
                (window.hljsLoaded = !0));
              for (let e of document.querySelectorAll('pre code'))
                e.matches('.hljs') || hljs.highlightBlock(e);
            },
          },
          accessWidget: {
            init() {
              this.batches.init(),
                document.addEventListener('action', e => {
                  if (
                    'access-widget/load-pagination-html' !== e.detail.type ||
                    !e.detail.response.data.html
                  )
                    return;
                  e.detail.response.data.batch >=
                    e.detail.response.data.batches &&
                    e.detail.$trigger.remove(),
                    e.detail.$trigger.setAttribute(
                      'data-action-params',
                      `{"currentBatch":${e.detail.response.data.batch}}`
                    );
                  const t = document.querySelector(
                    '[data-accessWidget-table] tbody'
                  );
                  if (!t) return;
                  const a = document.createElement('div');
                  a.innerHTML = e.detail.response.data.html;
                  for (let e of a.querySelectorAll('tbody tr'))
                    t.appendChild(e);
                });
            },
            batches: {
              init() {
                document.addEventListener('clickerClose', e => {
                  ['popup-batch-csv', 'popup-batch-subscriptions'].includes(
                    e.detail.type
                  ) && setTimeout(() => e.detail.$target.remove(), 150);
                }),
                  document.addEventListener('change', e => {
                    e.target.closest('[data-batch-form]') &&
                      e.target
                        .closest('tr')
                        .querySelector('.error-message')
                        ?.remove();
                  }),
                  document.addEventListener('submit', t => {
                    const a = t.target.getAttribute('data-batch-form');
                    if (!a) return;
                    const r = this.aggregateData(t.target),
                      i = t.target.querySelector('button[type="submit"]'),
                      n = t.target.querySelector(
                        '[name="discountEnabled"]'
                      )?.checked;
                    i &&
                      ((i.disabled = !0),
                      i.querySelector('.spinner') ||
                        (i.innerHTML =
                          i.innerHTML +
                          '<span class="spinner spinner-light"></span>'));
                    for (let e of t.target.querySelectorAll('.error-message'))
                      e.remove();
                    fetch(
                      'comm/access-widget/validate-batch-load-billing-html',
                      {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json;charset=utf-8',
                        },
                        body: JSON.stringify({
                          type: a,
                          discountEnabled: n,
                          data: r,
                        }),
                      }
                    )
                      .then(e => ((i.disabled = !1), e.text()))
                      .then(a => {
                        if (!(a = JSON.parse(a))) return;
                        if (!a.success || !a.data.html) {
                          s.showMessages(a, t.target);
                          let e = !1;
                          for (let t in a.data) {
                            const r = document.querySelector(
                                `input[value="${t}"]`
                              ),
                              i = r?.closest('tr');
                            if (!i) continue;
                            const s = document.createElement('span');
                            s.classList.add('error-message'),
                              (s.textContent = a.data[t]),
                              i.querySelector('td:nth-child(2)').appendChild(s),
                              e || (r.focus(), (e = !0));
                          }
                          return;
                        }
                        const r = document.createElement('div');
                        r.innerHTML = a.data.html;
                        const i = r.querySelector('[data-clicker-element]');
                        document.body.appendChild(i),
                          setTimeout(() => e.trigger(i), 100);
                      })
                      .catch(e => console.log(e));
                  }),
                  document.addEventListener('action', e => {
                    if (
                      'access-widget/load-batch-pagination-html' !==
                        e.detail.type ||
                      !e.detail.response.data.html
                    )
                      return;
                    e.detail.response.data.batch >=
                      e.detail.response.data.batches &&
                      e.detail.$trigger.remove(),
                      e.detail.$trigger.setAttribute(
                        'data-action-params',
                        `{"type" : "${e.detail.response.data.type}", "currentBatch":${e.detail.response.data.batch}}`
                      );
                    const t = document.querySelector(
                      '[data-batch-table] tbody'
                    );
                    if (!t) return;
                    const a = document.createElement('div');
                    a.innerHTML = e.detail.response.data.html;
                    for (let e of a.querySelectorAll('tbody tr'))
                      t.appendChild(e);
                  }),
                  document.addEventListener('click', t => {
                    const a = t.target.closest('[data-batches-load]');
                    if (!a) return;
                    a.classList.add('js-disabled');
                    const r = a.getAttribute('data-batches-load');
                    document
                      .querySelector(
                        `[data-clicker-element="popup-batch-${r}"]`
                      )
                      ?.remove(),
                      document
                        .querySelector('.loadbar')
                        .classList.add('js-active'),
                      fetch('/comm/access-widget/load-batches-html', {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json;charset=utf-8',
                        },
                        body: JSON.stringify({ type: r }),
                      })
                        .then(
                          e => (a.classList.remove('js-disabled'), e.text())
                        )
                        .then(t => {
                          if (
                            ((t = JSON.parse(t)),
                            document
                              .querySelector('.loadbar')
                              .classList.remove('js-active'),
                            !t || !t.success || !t.data.html)
                          )
                            return;
                          const a = document.createElement('div');
                          a.innerHTML = t.data.html;
                          const r = a.querySelector('[data-clicker-element]');
                          document.body.appendChild(r),
                            setTimeout(() => e.trigger(r), 100);
                        })
                        .catch(e => console.log(e));
                  });
              },
              aggregateData(e) {
                const t = [];
                for (let a of e.querySelectorAll('tbody tr')) {
                  const e = a.querySelector(
                    'td:first-child input[type="checkbox"]'
                  );
                  e.checked &&
                    t.push({
                      licenseId: e.value,
                      planId: a.querySelector('[name="plan"]').value,
                      monthly:
                        'true' === a.querySelector('[name="monthly"]').value,
                    });
                }
                return t;
              },
            },
          },
          extraPayments: {
            init() {
              const t = new URLSearchParams(location.search).get('extrp');
              t &&
                (document.querySelector('.loadbar').classList.add('js-active'),
                fetch('comm/billing/load-extra-payment-html', {
                  method: 'POST',
                  body: JSON.stringify({ extrapay: t }),
                })
                  .then(e => e.text())
                  .then(t => {
                    if (
                      ((t = JSON.parse(t)),
                      document
                        .querySelector('.loadbar')
                        .classList.remove('js-active'),
                      !t.success || !t.data.html)
                    )
                      return;
                    const a = document.createElement('div');
                    a.innerHTML = t.data.html;
                    const r = a.querySelector(
                      '[data-clicker-element="popup-extra-payment"]'
                    );
                    document.body.appendChild(r),
                      setTimeout(() => e.trigger(r), 150);
                  })
                  .catch(e => console.log(e)));
            },
          },
        },
        o = {
          init() {
            this.tabs(),
              this.icons(),
              this.forms(),
              this.links(),
              this.images(),
              this.tables(),
              this.carousels(),
              this.observer.init(),
              this.behaviors.init(),
              'complete' === document.readyState
                ? (this.menus(), this.navigables())
                : setTimeout(() => {
                    this.menus(), this.navigables();
                  }, 300);
          },
          navigables(e) {
            const t =
                '[data-clicker-trigger]:not(.js-a11y-bound), [data-clicker-close]:not(.js-a11y-bound)',
              a = 'a[href^="#"]:not(.js-a11y-bound):not([role="button"])';
            let r = [],
              i = [],
              s = [];
            e
              ? ((i = Array.from(e).filter(e => e.matches(t))),
                (s = Array.from(e).filter(e => e.matches(a))))
              : ((i = document.querySelectorAll(t)),
                (s = document.querySelectorAll(a)));
            for (let e of i)
              e.classList.add('js-a11y-bound'),
                'BUTTON' === e.tagName ||
                  e.getAttribute('role') ||
                  e.setAttribute('role', 'button');
            for (let e of s)
              e.classList.add('js-a11y-bound'),
                'BUTTON' === e.tagName ||
                  e.getAttribute('role') ||
                  e.setAttribute('role', 'button');
            r = e
              ? Array.from(e).filter(e => e.matches(o._getNavigablesSelector()))
              : document.querySelectorAll(o._getNavigablesSelector());
            for (let e of r)
              e.closest('.sr-only, .swiper-slide') ||
                (['BUTTON', 'A'].includes(e.tagName)
                  ? this._isVisible(e)
                    ? (e.removeAttribute('aria-hidden'),
                      e.getAttribute('tabindex') &&
                        e.removeAttribute('tabindex'))
                    : (e.closest('[aria-hidden="true"]') ||
                        e.setAttribute('aria-hidden', 'true'),
                      e.setAttribute('tabindex', '-1'))
                  : this._isVisible(e)
                  ? (e.removeAttribute('aria-hidden'),
                    e.setAttribute('tabindex', '0'))
                  : (e.closest('[aria-hidden="true"]') ||
                      e.setAttribute('aria-hidden', 'true'),
                    e.getAttribute('tabindex') &&
                      e.removeAttribute('tabindex')));
          },
          carousels(e) {
            const t = '[data-carousel="wrap"]:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e) {
              const e = document.createElement('span');
              e.setAttribute('role', 'button'),
                e.classList.add('sr-only', 'js-a11y-pause'),
                (e.textContent = 'Pause Carousel'),
                t.prepend(e),
                t.setAttribute('role', 'region'),
                t.setAttribute('aria-label', 'carousel'),
                t.classList.add('js-a11y-bound'),
                this.updateVisibility ||
                  (this.updateVisibility = e => {
                    let t,
                      a = {};
                    e.getAttribute('data-carousel-breakpoints')
                      .split(',')
                      .map(e => {
                        const t = e.split('=');
                        t[0] && t[1] && (a[t[0].trim()] = Number(t[1]));
                      });
                    const r = 'true' === e.getAttribute('data-carousel-center'),
                      i = Object.keys(a).sort((e, t) => -(a[e] - a[t]));
                    for (let e of i)
                      if (!(document.body.scrollWidth < e)) {
                        t = a[e];
                        break;
                      }
                    if (!t) return;
                    t > 1 && r && (t -= 1);
                    const s =
                        t > 1 && r
                          ? e.querySelector('.swiper-slide-prev')
                          : e.querySelector('.swiper-slide-active'),
                      n = [s];
                    let l = 1,
                      c = s.nextElementSibling;
                    for (; c && l < t; )
                      n.push(c), (c = c.nextElementSibling), l++;
                    for (let t of e.querySelectorAll('.swiper-slide'))
                      if (n.includes(t)) {
                        t.removeAttribute('aria-hidden');
                        for (let e of t.querySelectorAll(
                          o._getNavigablesSelector()
                        ))
                          o._isVisible(e) &&
                            (['A', 'BUTTON'].includes(e.tagName)
                              ? e.removeAttribute('tabindex')
                              : e.setAttribute('tabindex', '0'));
                      } else {
                        t.setAttribute('aria-hidden', 'true');
                        for (let e of t.querySelectorAll(
                          o._getNavigablesSelector()
                        ))
                          ['A', 'BUTTON'].includes(e.tagName)
                            ? e.setAttribute('tabindex', '-1')
                            : e.removeAttribute('tabindex');
                      }
                  });
              for (let e of [
                'slideNextTransitionEnd',
                'slidePrevTransitionEnd',
              ])
                t.querySelector('.swiper-container').swiper.on(e, e =>
                  this.updateVisibility(t)
                );
              this.updateVisibility(t);
            }
            this.a11yCarouselsBound ||
              ((this.a11yCarouselsBound = !0),
              document.addEventListener('click', e => {
                if (!e.target.matches('.js-a11y-pause')) return;
                const t = e.target
                  .closest('.carousel')
                  .querySelector('.swiper-container');
                t.matches('.js-paused')
                  ? (t.classList.add('js-played'),
                    t.classList.remove('js-paused'),
                    t.swiper.autoplay.start(),
                    (e.target.textContent = 'Pause Carousel'))
                  : (t.classList.add('js-paused'),
                    t.classList.remove('js-played'),
                    t.swiper.autoplay.stop(),
                    (e.target.textContent = 'Start Carousel'));
              }));
          },
          tables(e) {
            const t = 'table:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e)
              if (
                (t.classList.add('js-a11y-bound'),
                !t.querySelector('thead') && t.querySelector('tbody'))
              )
                for (let e of t.querySelectorAll('tbody tr:first-child td'))
                  (Number(window.getComputedStyle(e).fontWeight) < 500 &&
                    !e.querySelector('strong, b')) ||
                    e.setAttribute('role', 'columnheader');
          },
          images(e) {
            const t = 'img:not([alt]):not([role="presentation"])';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e)
              t.setAttribute('aria-hidden', 'true'),
                t.setAttribute('role', 'presentation');
          },
          links(e) {
            const t = 'a[target="_blank"]:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e) {
              const e =
                t.querySelector('.sr-only') || document.createElement('span');
              t.classList.add('js-a11y-bound'),
                (e.textContent = `${e.textContent} New Window`.trim()),
                e.classList.add('sr-only'),
                t.setAttribute('data-a11y-tooltip', e.textContent),
                t.appendChild(e);
            }
          },
          forms(e) {
            const t = 'form:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e)
              for (let e of t.querySelectorAll('.field')) {
                const t = e.querySelector('label'),
                  a = o._getVisibleText(t);
                if (!t || !a) continue;
                const r = t.getAttribute('for');
                if (a.includes('*'))
                  for (let t of e.querySelectorAll('input, select, textarea'))
                    t.setAttribute('aria-required', 'true');
                if (r) {
                  const e = document.querySelector(`#${r}`);
                  if (e && ['TEXTAREA', 'SELECT', 'INPUT'].includes(e.tagName))
                    continue;
                }
                const i = (Math.random() + 1).toString(36).substring(7);
                t.setAttribute('for', i),
                  e
                    .querySelector('input, textarea, select')
                    .setAttribute('id', i);
                for (let t of e.querySelectorAll(
                  'input:not([id]), select:not([id]), textarea:not([id])'
                ))
                  t.setAttribute(
                    'aria-label',
                    t.getAttribute('placeholder') || t.getAttribute('name')
                  );
              }
            this.a11yFormsBound ||
              ((this.a11yFormsBound = !0),
              document.addEventListener('formSubmission', e => {
                for (let t of e.detail.$form.querySelectorAll('.field')) {
                  const e = t.querySelector('.field-error-message'),
                    a = (Math.random() + 1).toString(36).substring(7);
                  e && e.setAttribute('id', a);
                  for (let r of t.querySelectorAll('input, select, textarea'))
                    t.matches('.field-error')
                      ? (e && r.setAttribute('aria-describedby', a),
                        r.setAttribute('aria-invalid', 'true'))
                      : r.setAttribute('aria-invalid', 'false');
                }
                const t = e.detail.$form.nextElementSibling;
                t?.matches('.form-success') &&
                  setTimeout(() => {
                    0 !== t.offsetWidth &&
                      (t.setAttribute('role', 'alert'),
                      t.setAttribute('tabindex', '-1'),
                      t.focus({ preventScroll: !0 }));
                  }, 100);
                const a = e.detail.$form.querySelector('.general-message');
                a &&
                  !e.detail.$form.querySelector('.field-error') &&
                  (a.setAttribute('tabindex', '-1'),
                  a.focus({ preventScroll: !0 }));
              }),
              document.addEventListener('change', e => {
                const t = e.target.closest('.field');
                t &&
                  !t.matches('.field-error') &&
                  'true' === e.target.getAttribute('aria-invalid') &&
                  e.target.setAttribute('aria-invalid', 'false');
              }));
          },
          icons(e) {
            const t = '.icon:not([role="presentation"])';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e) {
              if (
                (t.setAttribute('aria-hidden', 'true'),
                t.setAttribute('role', 'presentation'),
                o._getVisibleText(t.closest(o._getNavigablesSelector())))
              )
                continue;
              let e;
              t.matches('.icon-play') && (e = 'Play'),
                t.matches('.icon-menu') && (e = 'Menu'),
                t.matches('.icon-close') && (e = 'Close'),
                t.matches('.icon-chevron-right') && (e = 'Next'),
                t.matches('.icon-chevron-left') && (e = 'Previous'),
                t.matches('.icon-checkmark, .icon-checkmark2') &&
                  (e = 'Checkmark'),
                t.matches('.icon-facebook') && (e = 'Facebook'),
                t.matches('.icon-twitter') && (e = 'Twitter'),
                t.matches('.icon-youtube') && (e = 'YouTube'),
                t.matches('.icon-linkedin') && (e = 'LinkedIn'),
                t.matches('.icon-instagram') && (e = 'Instagram'),
                t.matches('.icon-pinterest') && (e = 'Pinterest'),
                t.matches('.icon-github') && (e = 'GitHub'),
                t.matches('.icon-tiktok') && (e = 'TikTok'),
                t.matches('.icon-vimeo') && (e = 'Vimeo'),
                t.matches('.icon-snap') && (e = 'snap');
              for (let e of t.querySelectorAll('[id]')) e.removeAttribute('id');
              if (e) {
                const a = document.createElement('span');
                a.classList.add('sr-only'),
                  (a.textContent = e),
                  t.parentElement.insertBefore(a, t);
              }
              if (
                !t.matches('.icon-star') ||
                t.parentElement.a11yStarsBound ||
                5 !== t.parentElement.querySelectorAll('.icon-star').length
              )
                continue;
              t.parentElement.a11yStarsBound = !0;
              const a = document.createElement('span');
              (a.innerHTML = '5/5'),
                a.classList.add('sr-only'),
                t.parentElement.insertBefore(a, t);
            }
          },
          menus(e) {
            const t = 'nav.menu:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e) {
              if (!t.parentElement.closest('.menu')) {
                t.closest('footer')
                  ? t.setAttribute('aria-label', 'Footer menu')
                  : t.closest('header')
                  ? (t.setAttribute('aria-label', 'Main menu'),
                    t.setAttribute('data-a11y-landmark', 'menu'),
                    (t.id = 'a11y-landmark-menu'))
                  : t.setAttribute('aria-label', 'Page menu');
                let e = t.querySelector('ul > li:first-child');
                const a = e?.querySelector('a');
                if (a) {
                  if (a.closest('ul').parentElement.closest('ul')) continue;
                  a.setAttribute('data-a11y-tooltip', 'Use ←/→ to navigate');
                }
                for (; 'LI' === e?.tagName; ) {
                  const t = e.querySelector('a+*');
                  if (t?.outerHTML.length > 100 && !o._isVisible(t)) {
                    e.classList.add('a11y-dd-container'),
                      t.setAttribute('role', 'region'),
                      t.setAttribute('aria-hidden', 'true'),
                      t.setAttribute('aria-label', 'Sub menu');
                    const a = e.querySelector('a');
                    a.setAttribute('aria-haspopup', 'true'),
                      a.setAttribute('aria-expanded', 'false');
                  }
                  e = e.nextElementSibling;
                }
              }
              t.classList.add('js-a11y-bound');
            }
            if (!this.a11yMenusBound) {
              (this.a11yMenusBound = !0),
                (this.a11yOpenDropdown = e => {
                  e.classList.add('js-a11y-focused'),
                    e
                      .querySelector('[aria-haspopup="true"]')
                      .setAttribute('aria-expanded', 'true');
                  const t = e.querySelector('[role="region"]'),
                    a = Number(
                      window
                        .getComputedStyle(t)
                        .transitionDuration.replace('s', '')
                    );
                  t.setAttribute('aria-hidden', 'false'),
                    setTimeout(() => {
                      for (let e of t.querySelectorAll(
                        o._getNavigablesSelector()
                      ))
                        o._isVisible(e)
                          ? ['A', 'BUTTON'].includes(e.tagName)
                            ? e.removeAttribute('tabindex')
                            : e.setAttribute('tabindex', '0')
                          : ['A', 'BUTTON'].includes(e.tagName)
                          ? e.setAttribute('tabindex', '-1')
                          : e.removeAttribute('tabindex');
                    }, 1e3 * (a + 0.05));
                }),
                (this.a11yCloseDropdown = e => {
                  e.classList.remove('js-a11y-focused'),
                    e
                      .querySelector('[aria-haspopup="true"]')
                      .setAttribute('aria-expanded', 'false');
                  const t = e.querySelector('[role="region"]');
                  t.setAttribute('aria-hidden', 'true');
                  for (let e of t.querySelectorAll(o._getNavigablesSelector()))
                    ['A', 'BUTTON'].includes(e.tagName)
                      ? e.setAttribute('tabindex', '-1')
                      : e.removeAttribute('tabindex');
                }),
                document.addEventListener('focusin', e => {
                  'A' === e.target.tagName &&
                    e.target.closest('.a11y-dd-container') &&
                    e.target.closest('ul')?.parentElement.matches('.menu') &&
                    this.a11yOpenDropdown(e.target.closest('li'));
                }),
                document.addEventListener('focusin', e => {
                  const t = document.querySelectorAll(
                    '.menu ul li.js-a11y-focused'
                  );
                  if (t.length > 0)
                    for (let a of t)
                      e.target.closest('li.js-a11y-focused') !== a &&
                        this.a11yCloseDropdown(a);
                }),
                document.addEventListener('keydown', e => {
                  if (![37, 39].includes(e.which) || 'A' !== e.target.tagName)
                    return;
                  const t = e.target.closest('ul');
                  if (!t || !t.parentElement.matches('.menu')) return;
                  e.preventDefault();
                  const a = e.target.closest('li');
                  39 === e.which
                    ? 'LI' === a.nextElementSibling?.tagName
                      ? a.nextElementSibling.querySelector('a').focus()
                      : t.querySelector('li:first-child > a').focus()
                    : 37 === e.which &&
                      ('LI' === a.previousElementSibling?.tagName
                        ? a.previousElementSibling.querySelector('a').focus()
                        : Array.from(t.querySelectorAll('li'))
                            .filter(e => o._isVisible(e))
                            .pop()
                            .querySelector('a')
                            .focus());
                }),
                document.addEventListener('keydown', e => {
                  if (27 !== e.which) return;
                  const t = e.target.closest('.a11y-dd-container');
                  t &&
                    (t.querySelector('a').focus(), this.a11yCloseDropdown(t));
                }),
                document.addEventListener('keydown', e => {
                  const t = e.target.closest('.a11y-dd-container');
                  if (!t || ![38, 40].includes(e.which)) return;
                  e.preventDefault();
                  const a = t.querySelector('[role="region"]');
                  if (!a) return;
                  let r = 0;
                  const i = Array.from(
                    a.querySelectorAll(o._getNavigablesSelector())
                  ).filter(e => o._isVisible(e));
                  if (
                    40 === e.which &&
                    'A' === e.target.tagName &&
                    e.target.parentElement === t
                  )
                    t.matches('.js-a11y-focused')
                      ? i[0].focus()
                      : this.a11yOpenDropdown(t);
                  else
                    for (let t of i) {
                      if (e.target === t) {
                        38 === e.which
                          ? i[r - 1]
                            ? i[r - 1].focus()
                            : i[i.length - 1].focus()
                          : i[r + 1]
                          ? i[r + 1].focus()
                          : i[0].focus();
                        break;
                      }
                      r++;
                    }
                }),
                document.addEventListener(
                  'mouseover',
                  e => (document.a11yMouseOver = e.target)
                ),
                document.addEventListener('click', e => {
                  'A' === e.target.tagName &&
                    document.a11yMouseOver !== e.target &&
                    !e.target.contains(document.a11yMouseOver) &&
                    e.target
                      .closest('a')
                      .parentElement?.matches('.a11y-dd-container') &&
                    (e.preventDefault(),
                    e.target.parentElement.matches('.js-a11y-focused')
                      ? this.a11yCloseDropdown(e.target.parentElement)
                      : this.a11yOpenDropdown(e.target.parentElement));
                });
              for (let e of [
                'blur',
                'click',
                'mousedown',
                'focusout',
                'focusin',
                'keydown',
                'scroll',
              ])
                window.addEventListener(e, e => {
                  if (
                    !(
                      ('keydown' === e.type && [37, 39].includes(e.which)) ||
                      (e.target &&
                        e.target.closest &&
                        e.target.closest('.a11y-dd-container'))
                    )
                  )
                    for (let e of document.querySelectorAll(
                      '.a11y-dd-container'
                    ))
                      this.a11yCloseDropdown(e);
                });
            }
          },
          tabs(e) {
            const t = '.tabs-menu:not(.js-a11y-bound)';
            e = e
              ? Array.from(e).filter(e => e.matches(t))
              : document.querySelectorAll(t);
            for (let t of e) {
              if (
                (t.classList.add('js-a11y-bound'),
                t.querySelector('a:not([href^="#"])'))
              )
                continue;
              let e = !1;
              for (let a of t.querySelectorAll('[data-clicker-trigger]')) {
                a.setAttribute('role', 'tab'),
                  a.matches('.js-active')
                    ? a.setAttribute('aria-selected', 'true')
                    : a.setAttribute('aria-selected', 'false');
                for (let t of document.querySelectorAll(
                  `[data-clicker-element-group][data-clicker-element="${a.getAttribute(
                    'data-clicker-trigger'
                  )}"]`
                ))
                  t.setAttribute('aria-label', o._getVisibleText(a)),
                    t.setAttribute('role', 'tabpanel'),
                    (e = !0);
              }
              e && t.setAttribute('role', 'tablist');
            }
            this.a11yTabsBound ||
              ((this.a11yTabsBound = !0),
              document.addEventListener('clickerTrigger', e => {
                if (e.detail.$trigger?.closest('[role="tab"]'))
                  for (let t of e.detail.$trigger
                    .closest('[role="tablist"]')
                    .querySelectorAll('[role="tab"]'))
                    t.matches('.js-active')
                      ? t.setAttribute('aria-selected', 'true')
                      : t.setAttribute('aria-selected', 'false');
              }));
          },
          _isVisible(e) {
            if (
              'INPUT' === e.tagName &&
              ['checkbox', 'radio'].includes(e.type) &&
              e.offsetWidth < 1
            ) {
              const t = e.nextElementSibling;
              t && t.getAttribute('for') === e.id && (e = t);
            }
            let t = e.offsetWidth;
            return (
              t < 1 &&
                'inline' === window.getComputedStyle(e).display &&
                (t = e.getBoundingClientRect().width),
              !(
                t < 1 ||
                'hidden' === e.type ||
                e.hidden ||
                e.closest('.popup:not(.js-active)') ||
                'hidden' === window.getComputedStyle(e).visibility
              )
            );
          },
          _getVisibleText(e) {
            if (!e) return '';
            let t = e.textContent.trim();
            for (let a of e.querySelectorAll('.sr-only, svg'))
              t = t.replace(a.textContent.trim(), '');
            return t;
          },
          _getNavigablesSelector: () =>
            'a, button, input, select, textarea, [data-clicker-trigger], [tabindex], [role="tab"], [role="button"]',
          observer: {
            init() {
              if ('complete' !== document.readyState)
                return setTimeout(() => this.init(), 1e3);
              let e = [],
                t = [],
                a = window.innerWidth;
              new MutationObserver(a => {
                for (let r of a)
                  if (
                    !(
                      1 !== r.target.nodeType ||
                      'attributes' !== r.type ||
                      ['BODY', 'HTML', 'OPTION', 'SCRIPT', 'STYLE'].includes(
                        r.target.tagName
                      ) ||
                      [
                        'data-focus-visible-added',
                        'data-a11y-original-position',
                      ].includes(r.attributeName) ||
                      e.includes(r.target) ||
                      t.includes(r.target) ||
                      r.target.closest(
                        'svg, [data-acsb], .a11y-dd-container, .acsb-sr-only, .swiper-slide, .swiper-wrapper, .swiper-container'
                      ) ||
                      (!['class', 'style'].includes(r.attributeName) &&
                        'data-' !== r.attributeName.substr(0, 5))
                    )
                  ) {
                    if ('class' === r.attributeName) {
                      if (
                        !r.target.className ||
                        !r.oldValue ||
                        r.target.className === r.oldValue
                      )
                        continue;
                      const e = r.oldValue
                          .split(' ')
                          .map(e => e.trim())
                          .filter(
                            e => !['a11y-focus', 'focus-visible'].includes(e)
                          ),
                        t = r.target.className
                          ?.split(' ')
                          .map(e => e.trim())
                          .filter(
                            e => !['a11y-focus', 'focus-visible'].includes(e)
                          );
                      if (JSON.stringify(e) === JSON.stringify(t)) continue;
                    }
                    setTimeout(() => {
                      e.push(r.target), t.push(r.target);
                    }, 155);
                  }
              }).observe(document, {
                attributeOldValue: !0,
                attributes: !0,
                subtree: !0,
                childList: !1,
              }),
                window.addEventListener('resize', e => {
                  ((a > 1124 && window.innerWidth <= 1124) ||
                    (a < 1124 && window.innerWidth >= 1124)) &&
                    ((a = window.innerWidth), this.bind(document.body));
                }),
                document.addEventListener('DOMNodeInserted', a => {
                  1 !== a.target.nodeType ||
                    a.target.closest('[data-acsb], [data-acsb-sr-only]') ||
                    t.includes(a.target) ||
                    ['BODY', 'HTML', 'OPTION', 'SCRIPT', 'STYLE'].includes(
                      a.target.tagName
                    ) ||
                    e.includes(a.target) ||
                    (e.push(a.target), t.push(a.target));
                }),
                setInterval(() => (t = []), 1e3),
                setInterval(() => {
                  e.length < 1 || (this.bind(e), (e = []));
                }, 100);
            },
            bind(e) {
              if (e.length < 1) return;
              let t = [...e],
                a = !1,
                r = !1,
                i = !1,
                s = !1,
                n = !1,
                l = !1,
                c = !1,
                d = !1;
              for (let o of e) {
                o.matches('.menu') && (a = !0),
                  o.matches('.icon') && (c = !0),
                  o.matches('.tabs-menu') && (n = !0),
                  o.matches('.carousel') && (s = !0),
                  'TABLE' === o.tagName && (r = !0),
                  'IMG' === o.tagName && (i = !0),
                  'FORM' === o.tagName && (d = !0),
                  'A' === o.tagName && (l = !0);
                for (let e of o.querySelectorAll('*'))
                  'OPTION' === e.tagName ||
                    e.closest('SVG') ||
                    (e.matches('.menu') && (a = !0),
                    e.matches('.icon') && (c = !0),
                    e.matches('.tabs-menu') && (n = !0),
                    e.matches('.carousel') && (s = !0),
                    'TABLE' === e.tagName && (r = !0),
                    'IMG' === e.tagName && (i = !0),
                    'FORM' === e.tagName && (d = !0),
                    'A' === e.tagName && (l = !0),
                    t.push(e));
              }
              n && o.tabs(t),
                a && o.menus(t),
                c && o.icons(t),
                d && o.forms(t),
                l && o.links(t),
                i && o.images(t),
                s && o.carousels(t),
                o.navigables(t);
            },
          },
          behaviors: {
            init() {
              this.clickability(),
                this.skipLinks(),
                this.landmarks(),
                this.tooltips(),
                this.popups(),
                this.focus();
            },
            clickability() {
              document.addEventListener('keydown', e => {
                13 !== e.which ||
                  ['A', 'BUTTON', 'SELECT', 'INPUT', 'TEXTAREA'].includes(
                    e.target.tagName
                  ) ||
                  e.target.click();
              }),
                document.addEventListener('clickerTrigger', e => {
                  e.detail.$target.offsetWidth >= document.body.offsetWidth ||
                    'fixed' ===
                      window.getComputedStyle(e.detail.$target).position ||
                    (e.detail.$target.setAttribute('tabindex', '-1'),
                    setTimeout(
                      () => e.detail.$target.focus({ preventScroll: !0 }),
                      100
                    ));
                });
            },
            skipLinks() {
              const e = document.createElement('div');
              document.body.prepend(e),
                e.classList.add('a11y-skip-links', 'js-a11y-bound'),
                e.setAttribute('aria-label', 'Skip links'),
                e.setAttribute('role', 'region');
              for (let t of ['content', 'menu', 'footer']) {
                const a = document.createElement('a');
                a.classList.add('a11y-skip-link', 'js-a11y-bound'),
                  (a.textContent = `Skip to ${t}`),
                  (a.href = `#a11y-landmark-${t}`),
                  (a.innerHTML = `${a.textContent}<span aria-hidden="true"></span>`),
                  a.setAttribute('data-a11y-skip-link', t),
                  e.appendChild(a);
              }
              document.addEventListener('click', e => {
                const t = e.target.closest('.a11y-skip-link');
                if (!t) return;
                e.preventDefault();
                const a = document.querySelector(
                  `[data-a11y-landmark="${t.getAttribute(
                    'data-a11y-skip-link'
                  )}"]`
                );
                a && (a.setAttribute('tabindex', '-1'), a.focus());
              }),
                document.addEventListener('focusin', e => {
                  e.target.closest('.a11y-skip-links') &&
                    document
                      .querySelector('.a11y-skip-links')
                      .classList.add('js-focused');
                });
              for (let e of [
                'blur',
                'click',
                'mousedown',
                'focusout',
                'focusin',
                'keydown',
                'scroll',
              ])
                window.addEventListener(e, e => {
                  if (
                    !(
                      e.target &&
                      e.target.closest &&
                      e.target.closest('.a11y-skip-links')
                    )
                  )
                    for (let e of document.querySelectorAll('.a11y-skip-links'))
                      e.classList.remove('js-focused');
                });
            },
            landmarks() {
              let e = document.querySelector('h1');
              if (
                (e || (e = document.querySelector('h2')),
                e || (e = document.querySelector('h3')),
                !e)
              )
                return;
              let t = e.parentElement;
              if (t) {
                const a = o._getVisibleText(e);
                for (; t && 'BODY' !== t.tagName; ) {
                  if (
                    !(
                      (o._getVisibleText(t) === a ||
                        t.outerHTML.length < 100) &&
                      t.parentElement.outerHTML.length < 100
                    )
                  ) {
                    for (let e of document.querySelectorAll('main'))
                      e.setAttribute('role', 'none');
                    t.setAttribute('role', 'main'),
                      t.setAttribute('data-a11y-landmark', 'content'),
                      (t.id = 'a11y-landmark-content');
                    break;
                  }
                  t = t.parentElement;
                }
              }
              const a = document.querySelector('footer');
              a &&
                (a.setAttribute('role', 'contentinfo'),
                a.setAttribute('aria-label', 'Footer'),
                a.setAttribute('data-a11y-landmark', 'footer'),
                (a.id = 'a11y-landmark-footer'));
            },
            tooltips() {
              document.addEventListener('focusin', e => {
                const t = e.target.getAttribute('data-a11y-tooltip');
                if (!t) return;
                const a = window.getComputedStyle(e.target).position,
                  r = document.createElement('span');
                r.setAttribute('aria-hidden', 'true'),
                  r.classList.add('a11y-tooltip'),
                  (r.textContent = t),
                  e.target.appendChild(r),
                  ['fixed', 'absolute', 'sticky'].includes(a) ||
                    (e.target.setAttribute('data-a11y-original-position', a),
                    (e.target.style.position = 'relative'),
                    r.getBoundingClientRect().y < 1 && (r.style.top = '100%'));
              }),
                document.addEventListener('focusout', e => {
                  for (let t of document.querySelectorAll('.a11y-tooltip')) {
                    const a = e.target.closest('[data-a11y-original-position]');
                    a &&
                      (a.position = a.getAttribute(
                        'data-a11y-original-position'
                      )),
                      t.remove();
                  }
                });
            },
            popups() {
              document.addEventListener('clickerTrigger', e => {
                e.detail.$target.offsetWidth < document.body.offsetWidth ||
                  e.detail.$target.offsetHeight < document.body.offsetHeight ||
                  'fixed' !==
                    window.getComputedStyle(e.detail.$target).position ||
                  (e.detail.$target.setAttribute('role', 'dialog'),
                  e.detail.$target.setAttribute('aria-modal', 'true'),
                  e.detail.$target.setAttribute('aria-label', 'popup'),
                  e.detail.$target.setAttribute('tabindex', '-1'),
                  (e.detail.$target.$trigger = e.detail.$trigger),
                  setTimeout(
                    () => e.detail.$target.focus({ preventScroll: !0 }),
                    100
                  ));
              }),
                document.addEventListener('clickerClose', e => {
                  'true' === e.detail.$target.getAttribute('aria-modal') &&
                    e.detail.$target.$trigger?.focus({ preventScroll: !0 });
                }),
                document.addEventListener('keydown', e => {
                  if (9 !== e.which) return;
                  const t = document.querySelector(
                    '.js-active[aria-modal="true"]'
                  );
                  if (!t) return;
                  let a;
                  const r = Array.from(
                    t.querySelectorAll(o._getNavigablesSelector())
                  ).filter(e => o._isVisible(e));
                  e.shiftKey || r[r.length - 1] !== e.target || (a = r[0]),
                    e.shiftKey && r[0] === e.target && (a = r[r.length - 1]),
                    a && (e.preventDefault(), a.focus());
                }),
                document.addEventListener('keydown', e => {
                  if (27 !== e.which || 'SELECT' === e.target.tagName) return;
                  const t = e.target.closest('[aria-modal="true"].js-active');
                  if (!t) return;
                  const a = document.querySelector(
                    `[data-clicker-close="${t.getAttribute(
                      'data-clicker-element'
                    )}"]`
                  );
                  a
                    ? (a.click(), t.$trigger && t.$trigger.focus())
                    : t.classList.remove('js-active');
                });
            },
            focus() {
              document.addEventListener('focusin', e => {
                e.target.classList.add('a11y-focus');
              }),
                document.addEventListener('focusout', e => {
                  e.target.classList.remove('a11y-focus');
                });
            },
          },
        },
        l = o;
      function c() {
        e.init(),
          t.init(),
          r.init(),
          i.init(),
          s.init(),
          n.init(),
          l.init(),
          document.dispatchEvent(new CustomEvent('scriptsReady'));
      }
      if ('loading' === document.readyState) {
        const e = setInterval(() => {
          'loading' !== document.readyState && (clearInterval(e), c());
        }, 50);
      } else c();
    })(),
    (() => {
      'use strict';
      a.p;
    })();
})();
