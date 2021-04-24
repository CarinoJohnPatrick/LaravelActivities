<h1>list</h1>
<a href="add">add</a>
<table border="1">
<tr>
<th>id</th>
<th>title</th> 
<th>description</th>
<th>action</th>
</tr>

@foreach($posts as $post)

<tr>
<td>{{$post['id']}}</td>
<td>{{$post['Title']}}</td> 
<td>{{$post['Description']}}</td>

<td>
<a href="{{'delete/'.$post->id}}">delete</a>
<a href="{{'edit-data/'.$post->id}}">edit</a>
</td>
</tr>


@endforeach
</table>