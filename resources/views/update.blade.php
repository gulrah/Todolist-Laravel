@extends('layouts.main')

@push('head')
<title>Update Todo</title>
@endpush

@section('main-section')
<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">Update Todo</div>
    <a href="{{route('todo.home')}}" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Back</a>
  </div>
  <div class="card">
    <div class="card-body">
      <form action="{{route('todo.updateData')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="taskName" class="form-label">Task Name</label>
          <input type="text" name="name" class="form-control" id="taskName" value="{{$todo->name}}">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" name="work" class="form-control" id="description" value="{{$todo->work}}">
        </div>
        <div class="mb-3">
          <label for="dueDate" class="form-label">Due Date</label>
          <input type="date" name="duedate" class="form-control" id="dueDate" value="{{$todo->duedate}}">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select name="status" class="form-control" id="status">
            <option value="Not Started" {{$todo->status == 'Not Started' ? 'selected' : ''}}>Not Started</option>
            <option value="In Progress" {{$todo->status == 'In Progress' ? 'selected' : ''}}>In Progress</option>
            <option value="Done" {{$todo->status == 'Done' ? 'selected' : ''}}>Done</option>
          </select>
        </div>
        <input type="hidden" name="id" value="{{$todo->id}}">
        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Update Todo</button>
      </form>
    </div>
  </div>
</div>
@endsection
