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
    <table class='table table-bordered' align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Tanggal Dibuat</th>
                <th>Terakhir Diupdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article as $a)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->author}}</td>
                <td>{{$a->created_at}}</td>
                <td>{{$a->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
