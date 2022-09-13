<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Editar Noticia</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('latests.index') }}" enctype="multipart/form-data"> Atras</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('latests.update',$latest->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nombre:</strong>
<input type="text" name="name" value="{{ $latest->name }}" class="form-control" placeholder="latest name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Autor</strong>
<input type="text" name="author" class="form-control" placeholder="Autor" value="{{ $latest->author }}">
@error('author')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Descripcion</strong>
<input type="text" name="description" value="{{ $latest->description }}" class="form-control" placeholder="latest Address">
@error('description')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Actualizar</button>
</div>
</form>
</div>
</body>
</html>
