<table>
    <thead>
    <tr>
        <th>SL</th>
        
        <th>Name</th>
        <th>Email</th>
        <th>Token</th>

    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $key=> $data)
        <tr>
            <td>{{ $key+1 }}</td>

            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->remember_token }}</td>

        </tr>
    @endforeach
    </tbody>
</table>