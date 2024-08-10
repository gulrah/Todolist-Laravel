@extends('layouts.main')

@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')
<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">All Todos</div>
  </div>
  <table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th>Task Name</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($todos as $todo)
      <tr valign="middle">
        <td>{{$todo->name}}</td>
        <td>{{$todo->work}}</td>
        <td>{{$todo->duedate}}</td>
        <td>
          <span class="badge 
            @if($todo->status == 'Not Started') bg-secondary 
            @elseif($todo->status == 'In Progress') bg-warning 
            @else bg-success 
            @endif">
            {{$todo->status}}
          </span>
        </td>
        <td>
          <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i> Update</a>
          <a href="{{route('todo.delete', $todo->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
