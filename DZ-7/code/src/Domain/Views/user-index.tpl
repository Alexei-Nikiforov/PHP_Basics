<p>Список пользователей в хранилище</p>
<ul style="display: flex; flex-direction: column; gap: 20px; margin: 20px 0;">
    {% for user in users %}
        <div class="user-container" style="display: flex; justify-content: flex-start; gap: 20px; padding-left: 50px;">
            <li class="user-info">{{ user.getUserId() }} {{ user.getUserName() }} {{ user.getUserLastName() }}. День рождения: {{ user.getUserBirthday() | date('d-m-Y') }}</li>
            <form action="/user/edit/" method="post">
                <input type="hidden" name="id" value="{{ user.getUserId() }}">
                <input type="hidden" name="name" value="{{ user.getUserName() }}">
                <input type="hidden" name="lastname" value="{{ user.getUserLastName() }}">
                <input type="hidden" name="birthday" value="{{ user.getUserBirthday() }}">
                <input type="submit" value="Редактировать">
            </form>
            <form action="/user/delete/" method="post">
                <input type="hidden" name="id" value="{{ user.getUserId() }}">
                <input type="submit" value="Удалить">
            </form>
        </div>
    {% endfor %}
        <form action="/user/edit/" method="post">
            <input type="submit" value="Сoздать пользователя">
        </form>
</ul>