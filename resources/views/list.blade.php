<table border="1">
<tr>
<td>Roll</td>
<td>Name</td>
<td>Department</td>

<td>Id</td>
<td>Operations</td>
</tr>
@foreach($members as $member)

<tr>
<td>{{$member['roll']}}</td>
<td>{{$member['name']}}</td>
<td>{{$member['dept']}}</td>
<td>{{$member['id']}}</td>
<td><a href={{ "/delete/".$member['roll'] }}>delete</a>
<a href={{ "/edit/".$member['id'] }}>edit</a>
</td>
</tr>
@endforeach
</table>