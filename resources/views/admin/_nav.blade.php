<div class="col-md-4">
    <div class="card">
        <div class="card-header">Admin navigation</div>
        <div class="card-body">
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}" href="/admin" role="tab">Home</a>
                <a class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}" href="/admin/users" role="tab">Users</a>
                <a class="nav-link {{ (request()->is('admin/topics*')) ? 'active' : '' }}" href="/admin/topics" role="tab">Topics</a>
                <a class="nav-link {{ (request()->is('admin/questions*')) ? 'active' : '' }}" href="/admin/questions" role="tab">Questions</a>
                <a class="nav-link {{ (request()->is('admin/tokens*')) ? 'active' : '' }}" href="/admin/tokens" role="tab">Responses</a>
            </div>
        </div>
    </div>
</div>
