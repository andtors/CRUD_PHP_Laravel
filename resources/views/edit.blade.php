<h1> Create user </h1>

<form action={{route('user.editUser')}} method="POST">
    
    @csrf
     <input value="{{$user->id}}" type="hidden" name="id">
    <div>
        <label name="name">Name:</label>
        <input value="{{$user->name}}" type="text" name="name" placeholder="Type your name" required>
    </div>
    <div>
        <label name="email">E-mail:</label>
        <input value="{{$user->email}}" type="text" name="email" placeholder="Type your e-mail" required>
    </div>
    <div>
        <label name="cellphone" id="cellphone">Cellphone:</label>
        <input value="{{$user->cellphone}}" type="text" name="cellphone" placeholder="Type your cellphone" required>
    </div>
    <div>
        <input type="submit" value="Edit">
    </div>
</form>

<br>

<a href={{route('user.home')}}>Back</a>
