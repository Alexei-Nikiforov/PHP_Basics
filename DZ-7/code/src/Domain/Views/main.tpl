<!DOCTYPE html>
<html>
    <head>
        <title>{{ title }}</title>
         <link href="../../../style.css" rel="stylesheet" >
    </head>
    <body style="background-color: #5a69aa">
        <div id="header">
            {% include "auth-template.tpl" %}
        </div>
        <div id="menu">
            <a href="/">Главная</a>
            <a href="/user">Пользователи</a>
        </div>
        {% include content_template_name %}
        <footer>
            <p>Количество посещений за сессию:{{ counter }}</p>
        </footer>
    </body>
</html>