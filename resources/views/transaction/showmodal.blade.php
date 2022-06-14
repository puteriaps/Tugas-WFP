<div class ='portlet'>
    <div class='portlet-title'>
        <b>Tampilan Transaksi dari: {{$data->$id}} - {{$data->transaction_date}}</b>
    </div>
    <div class='portlet-body'>
        <div class='row'>
            @foreach($dataProduk as $dp)
            <div class='col-md-4'>
                <div class='thumbnail'>
                    <div class='caption'>
                        <p align='center'><b>{{$dp->generic_name}}</b></p>
                        <hr/>
                        <p>Kategori: {{$dp->category->categories_name}}</p>
                        <p>Harga: Rp.{{$dp->harga}} ,- </p>
                        <p>Jumlah Beli: {{$dp->category->categories_name}}</p>
                    </div>
                </div>
            </div>
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->buyer->name}}</td>
                    <td>{{$d->user->name}}</td>
                    <td>{{$d->created_at}}</td>
                    <td><a class="btn btn-default" data-toggle="modal" href="#basic"
                        onclick="getDetailData({{$d->id}});">Lihat Rincian Pembelian</a></td>
                </tr>
            @endforeach
        </div>
    </div>

</div>