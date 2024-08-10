@extends('layouts.main')

@push('head')
<title>Add Todo</title>
@endpush

@section('main-section')
<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">Add Todo</div>
    <a href="{{route('todo.home')}}" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Back</a>
  </div>
  <div class="card">
    <div class="card-body">
      <form action="{{route('todo.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="taskName" class="form-label">Task Name</label>
          <input type="text" name="name" class="form-control" id="taskName">
          <div class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="work" class="form-control" id="description">
          <div class="text-danger">
            @error('work')
            {{$message}}
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="dueDate" class="form-label">Due Date</label>
          <input type="date" name="duedate" class="form-control" id="dueDate">
          <div class="text-danger">
            @error('duedate')
            {{$message}}
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select name="status" class="form-control" id="status">
            <option value="Not Started">Not Started</option>
            <option value="In Progress">In Progress</option>
            <option value="Done">Done</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Add Todo</button>
      </form>
    </div>
  </div>
</div>
@endsection
