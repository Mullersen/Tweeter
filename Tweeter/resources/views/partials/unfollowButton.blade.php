
<form class="mr-auto" action="/profile/unfollowUser" method="POST"style="display:inline">
    @csrf
    <button class="btn btn-outline-primary btn-sm"  name='name' value='{{$follow->followed_user}}'>Unfollow User</button>
</form>

