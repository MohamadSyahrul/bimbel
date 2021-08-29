<input type='text' id='search' name='search' placeholder='Enter userid 10-21'>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Kelas
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($kelas as $kl)
        <a class="dropdown-item" href="/admin/rekap/absensi/{{$kl->id}}">{{$kl->nama_kelas}} - {{$kl->kategori_kelas}}</a>
        @endforeach
    </div>
</div>
<input type='date' id='dateStart' name='dateStart' placeholder='Enter userid 10-21'>
<input type='date' id='dateEnd' name='dateEnd' placeholder='Enter userid 10-21'>
<input type='button' value='Search' id='btnSearch'>
<br/>
<input type='button' value='Fetch all records' id='fetchAllRecord'>
<table border='1' id='userTable' style='border-collapse: collapse;'>
<thead>
<tr>
<th>No</th>
<th>nama</th>
<th>Kategori Kelas</th>
<th>Harga</th>
</tr>
</thead>
<tbody></tbody>
</table>
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jQuery CDN -->
<script type='text/javascript'>
$(document).ready(function(){
    // Fetch all records
    $('#fetchAllRecord').click(function(){
        fetchRecords(0);
    });
    // Search by userid
    $('#btnSearch').click(function(){
        var id          = Number($('#search').val().trim());
        var dateStart   = Date($('#dateStart').val().trim());
        var dateEnd     = Date($('#dateEnd').val().trim());
        if(id > 0){
            fetchRecords(id);
        }
    });
});
function fetchRecords(id){
    $.ajax({
        url: '/admin/rekap/absensi/'+id,
        type: 'get',
        dataType: 'json',
        success: function(response){
            var len = 0;
            $('#userTable tbody').empty(); // Empty <tbody>
            if(response['data'] != null){
                len = response['data'].length;
            }
            if(len > 0){
                for(var i=0; i<len; i++){
                    var id = response['data'][i].id;
                    var nama_kelas = response['data'][i].nama_kelas;
                    var kategori_kelas = response['data'][i].kategori_kelas;
                    var harga = response['data'][i].harga;
                    var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + nama_kelas + "</td>" +
                    "<td align='center'>" + kategori_kelas + "</td>" +
                    "<td align='center'>" + harga + "</td>" +
                    "</tr>";
                    $("#userTable tbody").append(tr_str);
                }
            }else if(response['data'] != null){
                var tr_str = "<tr>" +
                "<td align='center'>1</td>" +
                "<td align='center'>" + response['data'].nama_kelas + "</td>" + 
                "<td align='center'>" + response['data'].kategori_kelas + "</td>" +
                "<td align='center'>" + response['data'].harga + "</td>" +
                "</tr>";
                $("#userTable tbody").append(tr_str);
            }else{
                var tr_str = "<tr>" +
                "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";
                $("#userTable tbody").append(tr_str);
            }
        }
    });
}
</script>