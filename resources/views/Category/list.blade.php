<table border="1">
    <tr>
        <td>No.</td>
        <td>Name</td>
    </tr>
    @foreach($categories as $key => $item)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$item->title}}</td>
        </tr>
    @endforeach
</table>