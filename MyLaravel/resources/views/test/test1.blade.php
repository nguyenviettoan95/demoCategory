<form action="{{route('load')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="file" name="upload"/><br>
	<input type="submit"/>
</form>