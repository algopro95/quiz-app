<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<?php 
if(Auth::user()->is_admin == 1){
    ?>

<li class="nav-item">
    <a href="{{ route('quizzes.index') }}" class="nav-link {{ Request::is('quizzes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Quizzes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<?php
}
?>

<li class="nav-item">
    <a href="{{ route('check') }}" class="nav-link {{ Request::is('check') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Quiz</p>
    </a>
</li>
