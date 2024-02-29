<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">DANH SÁCH SẢN PHẨM</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
      </div>
        <table class="table table-bordered" border=1>
          <thead>
            <tr>
              <th>ID</th>
              <th> TÊN SẢN PHẨM </th>
              <th> MÔ TẢ </th>
              <th> GIÁ </th>
              <th> SỐ LƯỢNG TỒN </th>
              <th> LOẠI </th>
              <th> TRẠNG THÁI </th>
            </tr>
          </thead>
          <tbody>
            @foreach($listSP as $sanpham)
            <tr >
                <td >{{$sanpham->id}}</td>

              <td>{{$sanpham->ten_sp}}</td>

              <td > {{$sanpham->mo_ta}}</td>

              <td > {{$sanpham->gia}}</td>

              <td   >{{$sanpham->sl_ton}}</td>

                <td >{{$sanpham->loai_san_pham_id}}</td>

                <td >{{$sanpham->trang_thai}}</td>

            </tr>
              @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>
</div>
