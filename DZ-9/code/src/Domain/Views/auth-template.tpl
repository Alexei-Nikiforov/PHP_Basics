{% if not user_authorised %}
    <div class="col-md-3 text-end">
        <a href="/user/auth/" class="btn btn-primary">Вход в систему</a>
    </div>

{% else %}
    <p>Добро пожаловать на сайт {{ names }}!</p>
    <a href="/user/logout" class="btn btn-primary">Выйти из системы</a>
{% endif %}