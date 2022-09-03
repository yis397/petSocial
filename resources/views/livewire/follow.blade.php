<form action="{{$isfollow?route('user.unfollow',$user):route('user.follow',$user)}}" method="POST"
class="w-1/4">
 @csrf
    <button type="submit" wire:click="darClick" class=" {{$isfollow?'bg-slate-500':'bg-blue-500'}} text-xs  text-white w-full rounded">{{$isfollow?"siguiendo":"seguir"}}</button>
</form>
