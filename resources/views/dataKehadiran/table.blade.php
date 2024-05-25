<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kehadiran Table</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>UID</th>
                <th>Jabatan</th>
                <th>Waktu Absen</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dataKehadiran as $kehadiran)
                <tr>
                    <td>{{ $kehadiran->name }}</td>
                    <td>{{ $kehadiran->uid }}</td>
                    <td>{{ $kehadiran->jabatan }}</td>
                    <td>{{ date('m-d-Y H:i', strtotime($kehadiran->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
