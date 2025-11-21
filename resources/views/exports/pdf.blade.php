<!DOCTYPE html>
<html>
<head>
    <title>{{ $table }} PDF</title>
</head>
<body>

<table style="border-collapse: collapse; border: 1px solid #000000; width: 100%;">
    <thead>
    <tr>
        @if($data->isNotEmpty())
            @foreach(array_keys($data->first()->getAttributes()) as $column)
                <th style="border: 1px solid #000; padding: 5px;">{{ $column }}</th>
            @endforeach
        @endif
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            @foreach($row->getAttributes() as $value)
                <td style="border: 1px solid #000; padding: 5px;">{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
