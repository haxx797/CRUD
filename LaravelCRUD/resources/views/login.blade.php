<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href={{"plugins/fontawesome-free/css/all.min.css"}}>

    <link rel="stylesheet" href={{"plugins/icheck-bootstrap/icheck-bootstrap.min.css"}}>

    <link rel="stylesheet" href={{"dist/css/adminlte.min.css?v=3.2.0"}}>
    <script nonce="ee3610de-1cd4-4e9c-bf59-c039be0a6b41">
        try {
            (function(w, d) {
                ! function(lD, lE, lF, lG) {
                    lD[lF] = lD[lF] || {};
                    lD[lF].executed = [];
                    lD.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    lD.zaraz.q = [];
                    lD.zaraz._f = function(lH) {
                        return async function() {
                            var lI = Array.prototype.slice.call(arguments);
                            lD.zaraz.q.push({
                                m: lH,
                                a: lI
                            })
                        }
                    };
                    for (const lJ of ["track", "set", "debug"]) lD.zaraz[lJ] = lD.zaraz._f(lJ);
                    lD.zaraz.init = () => {
                        var lK = lE.getElementsByTagName(lG)[0],
                            lL = lE.createElement(lG),
                            lM = lE.getElementsByTagName("title")[0];
                        lM && (lD[lF].t = lE.getElementsByTagName("title")[0].text);
                        lD[lF].x = Math.random();
                        lD[lF].w = lD.screen.width;
                        lD[lF].h = lD.screen.height;
                        lD[lF].j = lD.innerHeight;
                        lD[lF].e = lD.innerWidth;
                        lD[lF].l = lD.location.href;
                        lD[lF].r = lE.referrer;
                        lD[lF].k = lD.screen.colorDepth;
                        lD[lF].n = lE.characterSet;
                        lD[lF].o = (new Date).getTimezoneOffset();
                        if (lD.dataLayer)
                            for (const lQ of Object.entries(Object.entries(dataLayer).reduce(((lR, lS) => ({
                                    ...lR[1],
                                    ...lS[1]
                                })), {}))) zaraz.set(lQ[0], lQ[1], {
                                scope: "page"
                            });
                        lD[lF].q = [];
                        for (; lD.zaraz.q.length;) {
                            const lT = lD.zaraz.q.shift();
                            lD[lF].q.push(lT)
                        }
                        lL.defer = !0;
                        for (const lU of [localStorage, sessionStorage]) Object.keys(lU || {}).filter((lW => lW
                            .startsWith("_zaraz_"))).forEach((lV => {
                            try {
                                lD[lF]["z_" + lV.slice(7)] = JSON.parse(lU.getItem(lV))
                            } catch {
                                lD[lF]["z_" + lV.slice(7)] = lU.getItem(lV)
                            }
                        }));
                        lL.referrerPolicy = "origin";
                        lL.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(lD[lF])));
                        lK.parentNode.insertBefore(lL, lK)
                    };
                    ["complete", "interactive"].includes(lE.readyState) ? zaraz.init() : lD.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
