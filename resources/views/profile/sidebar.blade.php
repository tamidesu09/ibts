<div class="list-group list-group-transparent">
    <a href="{{route('profile.edit')}}" class="list-group-item list-group-item-action d-flex align-items-center @if(Route::currentRouteName() == 'profile.edit') active @endif">My Account</a>
    <a href="{{route('profile.password')}}" class="list-group-item list-group-item-action d-flex align-items-center @if(Route::currentRouteName() == 'profile.password') active @endif">Password</a>
    <a href="{{route('profile.two-factor')}}" class="list-group-item list-group-item-action d-flex align-items-center @if(Route::currentRouteName() == 'profile.two-factor') active @endif">Two-factor Authentication</a>
</div>