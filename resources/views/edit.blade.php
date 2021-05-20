<h1>Update Member</h1>

<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value={{$data['id']}}>
<input type="text" name="roll" value={{$data['roll']}} ><br><br>
<input type="text" name="name" value={{$data['name']}} ><br><br>
<input type="text" name="dept" value={{$data['dept']}} ><br><br>
<button type="submit">Update</button>

</form>