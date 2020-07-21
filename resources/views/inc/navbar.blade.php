<div class="container d-flex flex-column flex-md-row align-items-center p-4 px-md-4 mb-3 bg-white border-bottom shadow-sm rounded">
  <h3 class="my-0 mr-md-auto font-weight-normal">
    <a href="/" class="text-decoration-none text-info">Todo List</a>
  </h3>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark text-decoration-none {{ Request::is('/') ? 'active' : '' }}" href="/">Todos</a>
    <a class="p-2 text-dark text-decoration-none {{ Request::is('/todos/create') ? 'active' : '' }}" href="/todos/create">Create Todo</a>
  </nav>
</div> 