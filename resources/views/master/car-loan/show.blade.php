<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="modelHeading">Data History</h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" action="{{route($route.'.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="status" value="0">
            <div class="row"> 
                <div class="col-6">
                    <div class="form-group">
                        <label for="naa" class="col-sm-12 control-label">Tanggal Pinjam</label>
                        <div class="col-sm-12">
                            <input style="text-align: center;" type="date" class="form-control" id="loanDate" name="loanDate" placeholder="Enter Date" value="{{ $record->loanDate }}" readonly >
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="naa" class="col-sm-12 control-label">Tanggal Rencana Kembali</label>
                        <div class="col-sm-12">
                            <input style="text-align: center;" type="date" class="form-control" id="returnDate" name="returnPlanDate" placeholder="Enter Date" value="{{ $record->returnPlanDate }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label"> Tanggal Kembali</label>
                        <input style="text-align: center;" type="text" class="form-control" readonly value="{{$record->loan->returnRealDate}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label"> Total Hari</label>
                        <input style="text-align: center;" type="text" class="form-control" readonly value="{{$record->loan->totalDay}}">
                    </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label class="control-label col-sm-6">Mobil</label>
                    <input type="text" class="form-control" value="{{ $record->car->merek }} - {{ $record->car->model }} - {{ $record->car->platNumber }} - {{ number_format($record->car->price,0,',','.') }}" readonly style="text-align: center;">
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">Jumlah Total</label>
                        <input type="text" class="form-control" readonly value="Rp. {{number_format($record->loan->totalPrice,0,',','.')}}" style="text-align: center;">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12" align="right">
                    <div class="form-group">
                        <br/>
                        <button class="btn btn-sm btn-info" >Close
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>