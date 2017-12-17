<div class="modal" id="modal-wali">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <form action="#" class="form-horizontal" id="form-wali">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pekerjaan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Telepon</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="keterangan"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="save_wali()">SIMPAN</button>
            </div>
        </div>
    </div>
</div>