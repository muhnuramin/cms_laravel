<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Laporan PDf Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
            
        }

    </style>
    <center>
        <h5>Laporan Artikel <b>Pemrograman WEB Lanjut</b></h5>
    </center>
    <table class='table table-bordered' border="solid 1px black">
        <thead>
            <tr>
                <th>No</th>
                <th>Author</th>
                <th>Profil</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                
                <td>{{$loop->iteration}}</td>
                <td><img width="150px" height="150px" src="{{asset('storage/'.$u->image) }}"></td>
                <td>{{$u->name}}</td>
                <td>{{$u->image}}</td>
                <td>{{$u->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
