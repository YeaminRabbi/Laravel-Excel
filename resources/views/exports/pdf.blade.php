<table>
    <thead>
        <style>
            th,td {
                text-align: center;
            }
        </style>
    <tr>
        <th>SL</th>
        
        <th>Name</th>
        <th>Email</th>
        <th>Token</th>

    </tr>
    </thead>
    <tbody>
    @foreach($data as $key=> $d)
        <tr>
            <td>{{ $key+1 }}</td>

            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->remember_token }}</td>

        </tr>
    @endforeach
    </tbody>
</table>