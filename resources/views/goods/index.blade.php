@foreach($list AS $good)
    <span>{{$good->name}}</span>
    <span>{{$good->cover->url}}</span>
    @endforeach

{{$list->links()}}
