<?php
/**
 * Template Name: MON TEMPLATE 1
 */

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon template</h1>
    <div id="app">
    {{ message }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
    })
    </script>

</body>
</html>