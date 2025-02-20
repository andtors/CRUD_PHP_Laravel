<h1> Home </h1>

<style>

.btn-delete{
    background-color: red;
    color: white;
    border-radius: 4px;
    padding: 3px;
    cursor: pointer;
}

a{
    text-decoration:none;
}

.btn-edit{
    background-color: blue;
    color: white;
    border-radius: 4px;
    padding: 3px;
    margin-bottom:0px;
    margin-right: 5px;
    
}

</style>
<br>

<div>

<a href="{{route('user.createPage')}}">Create an user</a>
</br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Cellphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->cellphone}}</td>
                    <td style="display: flex;">
                        <a href={{route('user.editPage', $user->id)}} class="btn-edit">Edit</a>
                        <form action = {{route('user.deleteUser', $user->id)}} method="POST" >
                            @csrf
                            <input type="submit" value="Delete" class="btn-delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


