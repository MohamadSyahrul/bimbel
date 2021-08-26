<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <center>
        <h2 class="card-title">Absen Siswa Terbatas | <span class="text-uppercase">{{ $kelas->kategori }}</span></h2>
        <p class="">{{ $absen->tanggal }} - {{ $kelas->nama_kelas }}</p>
        <br>
        <table class="table"
            style=
            "
                width:100%;
                text-align: center;
                border: solid 1px black;
            "
        >
            <thead style="background-color: #e6e6e6;" class="">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody class="">
                <?= $n = 1 ?>
                @foreach($user as $u)
                    <tr>
                        <td><?= $n++; ?></td>
                        <td>{{ $u->profileUser->nama }}</td>
                        <td>{{ $u->email }}</td>
                            <?php
                                $s = \App\AbsensiUser::where('user_id', $u->id)->first();
                            ?>
                        <td>{{ $s->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>
</html>