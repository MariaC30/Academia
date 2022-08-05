@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
<div class="text-center">
<div class="m-auto">
    <img width="300" src="{{Storage::url($cursito->imagen)}}" >
    <p class="card-text">Descripción: {{$cursito->descripcion}}</p>
    <p class="card-text">Duración: {{$cursito->duración}} Horas</p>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-info">Editar curso</a>
</div>
</div>
@endsection
