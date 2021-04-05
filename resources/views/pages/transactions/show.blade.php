<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <th>Nomor</th>
        <td>{{$item->number}}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{$item->address}}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>{{$item->transaction_total}}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{$item->transaction_status}}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <Th>Harga</Th>
                </tr>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ $detail->product->type }}</td>
                        <td>${{ $detail->product->price }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=SUCCESS" class="btn btn-success btn-bolck">
            <i class="fa fa-check">Set Sukses</i>
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=FAILED" class="btn btn-warning btn-bolck">
            <i class="fa fa-times">Set Gagal</i>
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=PENDING" class="btn btn-info btn-bolck">
            <i class="fa fa-spinner">Set Pending</i>
        </a>
    </div>
</div> 