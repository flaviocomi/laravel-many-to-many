@extends('layouts.base')

@section('content')

  <div class="head">
    <h1>Employees: </h1>
    <a id="new" href=" {{ route('employee.create') }} ">New Employee</a>
  </div>

  <ul class="emp">

    @foreach ($employees as $employee)
    
      <li class="item">

        <h3>
          {{ $employee -> name }} {{ $employee -> lastname }}
        </h3>

        <ul>

          @foreach ($employee -> tasks as $task)
          
            <li>

              @auth
              
                @if (Auth::user() -> id == $employee -> user -> id)
                <a href=" {{ route('employee.remove.task', [$employee -> id, $task -> id]) }} ">X</a>
                @endif

              @endauth

              {{ $task -> description }}

            </li>

          @endforeach

        </ul>

        @auth
        
          @if (Auth::user() -> id == $employee -> user -> id)
            <span id="but">
              <a id="edit" href=" {{ route('employee.edit', $employee -> id) }} ">EDIT PROFILE</a>
              <a id="delete" href=" {{ route('employee.delete', $employee -> id) }} ">DELETE</a>
            </span>
          @endif

        @endauth
        <b id="auth"> {{ $employee -> user -> name }} </b>

      </li>

    @endforeach

  </ul>

@endsection