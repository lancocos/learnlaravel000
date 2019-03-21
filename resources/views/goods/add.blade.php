<form action="{{url('goods/add')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name" value="abc"><br/>
    <input type="text" name="price" value="11.20"><br/>
    <input type="text" name="category_id" value="1"><br/>
    <input type="text" name="branch_id" value="1"><br/>
    <textarea name="content">adsajdasbjd</textarea>
    <input type="submit">
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

