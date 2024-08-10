<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('head')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e0e0e0);
      font-family: 'Poppins', sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .task-manager-header {
      background-color: #007bff;
      color: #fff;
      padding: 15px;
      text-align: center;
      border-radius: 10px;
      margin-top: 20px;
    }
    .task-manager-header .icon {
      font-size: 24px;
      margin-right: 10px;
    }
    .quick-add-bar {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }
    .quick-add-bar input[type="text"] {
      width: 70%;
      border-radius: 25px 0 0 25px;
      padding: 10px;
      border: 1px solid #007bff;
    }
    .quick-add-bar button {
      border-radius: 0 25px 25px 0;
      padding: 10px 20px;
      background-color: #007bff;
      border: 1px solid #007bff;
      color: #fff;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .table {
      border-radius: 10px;
      overflow: hidden;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 30px;
      padding: 10px 20px;
      font-size: 16px;
    }
    .btn-secondary {
      border-radius: 30px;
      padding: 10px 20px;
      font-size: 16px;
    }
    .container {
      margin-top: 50px;
    }
    .form-label {
      font-weight: 600;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="task-manager-header">
      <i class="fas fa-tasks icon"></i><span class="h2">Task Manager</span>
    </div>
    <div class="quick-add-bar">
      <form action="{{ route('todo.quickAdd') }}" method="POST" class="d-flex w-100">
        @csrf
        <input type="text" name="name" placeholder="Add new task" class="form-control me-2">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
      </form>
    </div>
    @yield('main-section')
  </div>
</body>
</html>
