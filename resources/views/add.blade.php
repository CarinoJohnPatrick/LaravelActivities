<h1>add posts</h1>
<form action="" method="POST">
@csrf
<input type="text" placeholder="title" name="title">
<input type="text" placeholder="description" name="description">
<button type="submit">add</button>
<a href="list">back</a>
</form>
