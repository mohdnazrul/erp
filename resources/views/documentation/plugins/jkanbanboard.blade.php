@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
<div class="row g-3">
        <div class="col-12">
            <h5>jKanban Board</h5>
            <p class="fs-6">jKanban is a pure agnostic Javascript plugin for Kanban boards. For more info see <a href="http://www.riccardotartaglia.it/jkanban/" class="fw-bolder me-1">the official site</a>and <a class="fw-bolder" href="https://github.com/riktar/jkanban">the Github repository</a>.</p>
        </div>
        <div class="col-12 mb-5">
            <h5>Default settings</h5>
            <div class="mykanban_basic bg-card p-3 rounded-4 overflow-x-auto"></div>
        </div>
        <div class="col-12 mb-5">
            <h5>Custom Board</h5>
            <div class="jkanban_color border p-3 rounded-4 overflow-x-auto"></div>
        </div>
        <div class="col-12">
            <h5>Advanced Custom Board</h5>
            <div class="border p-3 rounded-4 overflow-x-auto">
                <div class="jkanban_advanced"></div>
                <div class="mt-2">
                    <button class="btn fs-14 rounded-pill btn-primary" id="addDefault">Add "Default" board</button>
                    <button class="btn fs-14 rounded-pill btn-success" id="addToDo">Add element in "To Do" Board</button>
                    <button class="btn fs-14 rounded-pill btn-danger" id="removeBoard">Remove "Done" Board</button>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->



@endsection
@push('scripts')
   <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jkanban@1.3.1/dist/jkanban.min.js"></script>


    <script>
        var kanban = new jKanban({
          element: '.mykanban_basic',
          gutter: '0',
          widthBoard: '300px',
          boards: [{
            'id': '_inprocess',
            'title': 'In Process',
            'item': [{
              'title': '<span class="font-weight-bold">You can drag me too</span>'
            }, {
              'title': '<span class="font-weight-bold">Buy Milk</span>'
            }]
          }, {
            'id': '_working',
            'title': 'Working',
            'item': [{
              'title': '<span class="font-weight-bold">Do Something!</span>'
            }, {
              'title': '<span class="font-weight-bold">Run?</span>'
            }]
          }, {
            'id': '_done',
            'title': 'Done',
            'item': [{
              'title': '<span class="font-weight-bold">All right</span>'
            }, {
              'title': '<span class="font-weight-bold">Ok!</span>'
            }]
          }]
        });
        var kanban2 = new jKanban({
          element: '.jkanban_color',
          gutter: '0',
          widthBoard: '300px',
          click: function(el) {
            alert(el.innerHTML);
          },
          boards: [{
            'id': 'todo',
            'title': 'To Do',
            'item': [{
              'title': 'My Task Test',
            }, {
              'title': 'Buy Milk',
            }]
          }, {
            'id': 'working',
            'title': 'Working',
            'item': [{
              'title': 'Do Something!',
            }, {
              'title': 'Run?',
            }]
          }, {
            'id': 'done',
            'title': 'Done',
            'item': [{
              'title': 'All right',
            }, {
              'title': 'Ok!',
            }]
          }]
        });
        var kanban3 = new jKanban({
          element: '.jkanban_advanced',
          gutter: '0',
          widthBoard: '300px',
          click: function(el) {
            alert(el.innerHTML);
          },
          boards: [{
            'id': 'todo',
            'title': 'To Do',
            'class': 'info',
            'item': [{
              'title': '<div class="fw-bold mb-1">Design</div><span class="fs-14 lh-base">It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-3"><div class="project-members"><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-1.png" alt="friend"> </a><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-2.png" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted" href="#" title="Attachment"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" /></svg><span class="ps-1">10</span></a><a class="p-1 text-muted" href="#" title="Comments"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" /><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" /></svg><span class="ps-1">2</span></a></div></div>',
            }, {
              'title': '<div class="fw-bold mb-1">Development</div><span class="fs-14 lh-base">It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-3"><div class="project-members"><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-2.png" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted" href="#" title="Attachment"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" /></svg><span class="ps-1">10</span></a><a class="p-1 text-muted" href="#" title="Comments"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" /><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" /></svg><span class="ps-1">2</span></a></div></div>',
            }]
          }, {
            'id': 'working',
            'title': 'Working',
            'class': 'warning',
            'item': [{
              'title': 'Do Something!',
            }, {
              'title': '<div class="fw-bold mb-1">Bug fix</div><span class="fs-14 lh-base">It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-3"><div class="project-members"><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-4.png" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted" href="#" title="Attachment"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" /></svg><span class="ps-1">10</span></a><a class="p-1 text-muted" href="#" title="Comments"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" /><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" /></svg><span class="ps-1">2</span></a></div></div>',
            }]
          }, {
            'id': 'done',
            'title': 'Done',
            'class': 'success',
            'item': [{
              'title': 'All right',
            }, {
              'title': 'Ok!',
            }]
          }]
        });
        var toDoButton = document.getElementById('addToDo');
        toDoButton.addEventListener('click', function() {
          kanban3.addElement('todo', {
            'title': '<div class="fw-bold mb-1">Item 1</div><span class="fs-14 lh-base">It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-3"><div class="project-members"><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-1.png" alt="friend"> </a><a href="#" title="Avatar"><img class="avatar sm rounded" src="assets/images/user-2.png" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted" href="#" title="Attachment"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" /></svg><span class="ps-1">10</span></a><a class="p-1 text-muted" href="#" title="Comments"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" /><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" /></svg><span class="ps-1">2</span></a></div></div>',
          });
        });
        var addBoardDefault = document.getElementById('addDefault');
        addBoardDefault.addEventListener('click', function() {
          kanban3.addBoards(
            [{
              'id': 'todo',
              'title': 'Kanban Default',
              'item': [{
                'title': 'Default Item',
              }, {
                'title': 'Default Item 2',
              }, {
                'title': 'Default Item 3',
              }]
            }])
        });
        var removeBoard = document.getElementById('removeBoard');
        removeBoard.addEventListener('click', function() {
          kanban3.removeBoard('done');
        });
    </script>

@endpush
