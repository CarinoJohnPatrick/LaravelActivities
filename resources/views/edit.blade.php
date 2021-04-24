<form action="/edit"method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="Title" value="{{$data['Title']}}">
<input type="text" name="Description" value="{{$data['Description']}}">
<button type="submit">update</button>

</form>