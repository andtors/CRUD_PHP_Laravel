<h1> Create user </h1>

<form action={{route('user.createUser')}} method="POST">
    @csrf
    <div>
        <label name="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Type your name" required>
    </div>
    <div>
        <label name="email">E-mail:</label>
        <input type="text" name="email" id="email" placehol er="Type your e-mail" required>
    </div>
    <div>
        <label name="cellphone" id="cellphone">Cellphone:</label>
        <input type="text" name="cellphone" id="cellphone" placeholder="Type your cellphone" required>
    </div>
    <div>
        <input type="submit" value="Create">
    </div>
</form>

<br>

<a href={{route('user.home')}}>Back</a>
