<!--
<form action="/user/save/" method="post">
  <input id="csrf_token" type="hidden" name="csrf_token" value="{{ csrf_token }}">
  <p>
    <label for="user-name">Имя:</label>
    <input id="user-name" type="text" name="name">
  </p>
  <p>
    <label for="user-lastname">Фамилия:</label>
    <input id="user-lastname" type="text" name="lastname">
  </p>
  <p>
    <label for="user-birthday">День рождения:</label>
    <input id="user-birthday" type="text" name="birthday" placeholder="ДД-ММ-ГГГГ">
  </p>
  <p><input type="submit" value="Сохранить"></p>
</form>
-->

<form action="/user/{{ action }}/" method="post">
    <input id="csrf_token" type="hidden" name="csrf_token" value="{{ csrf_token }}">
    <input id="user-id" type="hidden" name="id" value="{{ id }}">
    <p>
        <label for="user-name">Имя:</label>
        <input id="user-name" type="text" name="name" value="{{ name }}">
    </p>
    <p>
        <label for="user-lastname">Фамилия:</label>
        <input id="user-lastname" type="text" name="lastname" value="{{ lastname }}">
    </p>
    <p>
        <label for="user-birthday">День рождения:</label>
        <input id="user-birthday" type="text" name="birthday" placeholder="ДД-ММ-ГГГГ" value="{{ birthday | date('d-m-Y')}}">
    </p>
    <p><input type="submit" value="Сохранить"></p>
</form>

