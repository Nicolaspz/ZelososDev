@extends('layouts.main')
@section('content')

<a class="btn" href="/agenda">voltar</a>
<hr>

<form style="padding: 8px;" action="{{ route('agenda.update',$agenda->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Titile</label><br>
    <input class="form-control" type="text" name="title" placeholder="Ex:Viagem" value="{{$agenda->title}}">
    </div>

    <div class="form-group">
        <label for="">Description</label><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"  placeholder="Ex:uma viagem para..">{{$agenda->description}}</textarea><br>

    </div>
    <div class="form-group">
        <label for="">Data</label><br>
        <input class="form-control type="date" name="date" value="{{$agenda->date}}"><br><br>
    </div>

    <button class="btn btn-primary" type="submit" >Actualizar</button>
</form>

@endsection
