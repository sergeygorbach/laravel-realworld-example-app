<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo post list</title>
        <script src="https://unpkg.com/vue@3"></script>
    </head>
    <body>
        <div id="app">
            <li v-for="item in items">
                @{{ item.message }}
            </li>
        </div>
    </body>
    <script>
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    items: [{ message: 'Foo' }, { message: 'Bar' }]
                }
            }
        }).mount('#app')
    </script>
</html>
