<form action="/booking" method="POST">
    <select name="service" >
        <option value="1">СТРИЖКА</option>
        <option value="2">СТРИЖКА ПІД НАСАДКУ</option>
        <option value="3">СТРИЖКА БОРОДИ</option>
        <option value="4">СТРИЖКА ТА ГОЛІННЯ БОРОДИ</option>
        <option value="5">КОРОЛІВСЬКЕ ГОЛІННЯ</option>
    </select>
    <input type="datetime-local" name="time"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Send"/>
</form>