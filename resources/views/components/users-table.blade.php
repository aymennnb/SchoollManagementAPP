@props(['langues'])
<div>
<table class="table">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>role</th>
        </tr>
            @foreach ($langues as $langue)
                <tr>
                    <td>{{$langue['id']}}</td>
                    <td>{{$langue['name']}}</td>
                    <td>{{$langue['role']}}</td>
                </tr>
            @endforeach
        </table> 
</div>