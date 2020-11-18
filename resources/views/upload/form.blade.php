<form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
 @csrf
 <input type="file" name="arquivo" id="arquivo">
 <button type="submit">Salvar</button>
</form>
