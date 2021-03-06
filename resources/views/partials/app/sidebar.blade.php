<div class="list-group">
    <a href="{{ url('/') }}" class="list-group-item {{ Route::current()->getName() == 'dashboard' ? 'active' : '' }}">Homepage</a>
    <a href="{{ route('exam.create') }}" class="list-group-item {{ Route::current()->getName() == 'exam.create' ? 'active' : '' }}">Create an exam</a>
    <a href="{{ route('usersubject.index') }}" class="list-group-item {{ Request::is('/subject/*') ? 'active' : '' }}">Change your VCE subjects</a>
</div>

<div class="text-center">
    <small><a href="{{ route('admin.index') }}">Admin Panel</a></small>
</div>