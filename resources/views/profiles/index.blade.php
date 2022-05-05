@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{$user->profile->profileImage()}}" style="height:200px; width: 200px;" class="rounded-circle w-100 h-100"/>
            </div>
            <div class="col-9 pt-5">
                <div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex align-items-center pb-3">
                            <div class="h4">{{$user->username}}</div>
                            <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                        </div>
                        @can ('update', $user->profile)
                            <a href="/p/create">Add Post</a>
                        @endcan
                    </div>
                    @can ('update', $user->profile)
                        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                    <div class="d-flex">
                        <div><strong>{{$postCount}}</strong> posts</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div><strong>{{$followersCount}}</strong> followers</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div><strong>{{$followingCount}}</strong> following</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="pt-3">
                        <strong>{{$user->profile->title}}</strong>
                        <div>{{$user->profile->description}}</div>
                        <div><a href="#">{{$user->profile->url}}</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($user->post as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img class="w-100 h-100 pt-4" alt="Ooo spicy, damn that booty thick I LIKE IT @dontoliver"
                             class="FFVAD" crossorigin="anonymous"
                             decoding="auto" style="object-fit: cover; width: 100px; height: 100px;"
                             src="/storage/{{$post->image}}">
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
<script>
    import FollowButton from "../../js/components/FollowButton";
    export default {
        components: {FollowButton}
    }
</script>
