<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
</head>
<body>
    <div id="app">
        <p>@{{ message }}</p>
        <router-link to="/foo">Go to Foo</router-link>
        <router-link to="/bar">Go to Bar</router-link>

        <router-view></router-view>
    </div>
    <script>
    const Foo = { template: '<div>foo</div>' };
    const Bar = { template: '<div>bar</div>' };

    const routes = [
        { path: '/foo', component: Foo },
        { path: '/bar', component: Bar }
    ];

    const router = new VueRouter({
        routes // `routes: routes` の短縮表記
    });


    new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue.js!'
        },
        router: router
    });
    </script>
</body>
</html>
