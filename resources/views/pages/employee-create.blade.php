@extends('layouts.base')

@section('content')

  <br>
  <form action="{{ route('employee.store') }}" method="post">
    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" value=""><br>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value=""><br>
    <br>
    <select name="tasks[]" multiple>

      @foreach ($tasks as $task)
      
      <option value="{{ $task -> id }}">{{ $task -> description }}</option>
      
      @endforeach
    
    </select>
    <br>
    <input type="submit" value="CREATE">
    <br>

  </form>

@endsection