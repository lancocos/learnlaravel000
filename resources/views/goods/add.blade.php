<form action="{{url('goods/add')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name" value="@if(isset($good)) {{$good->name}} @else abc @endif">@if($errors->has('name')){{$errors->first('name')}}@endif<br/>
    <input type="text" name="price" value="@if(isset($good)) {{$good->price}} @else 1 @endif">@if($errors->has('price')){{$errors->first('price')}}@endif<br/>
    <input type="text" name="category_id" value="@if(isset($good)) {{$good->category_id}} @else 1 @endif">@if($errors->has('category_id')){{$errors->first('category_id')}}@endif<br/>
    <input type="text" name="branch_id" value="@if(isset($good)) {{$good->branch_id}} @else 1 @endif">@if($errors->has('branch_id')){{$errors->first('branch_id')}}@endif<br/>
    <textarea name="content">@if(isset($good)) {{$good->content}} @else 1111 @endif</textarea>@if($errors->has('content')){{$errors->first('content')}}@endif
    <input type="submit">
</form>
<?php
print_r($errors);
?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

