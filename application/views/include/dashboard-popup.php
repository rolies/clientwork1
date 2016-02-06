<?php foreach ($perum_siap->result() as $row) { ?>
<!-- Modal untuk illustrasi cicilan KPR -->
<div id="kprModal<?php echo $row->id ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Illustrasi Cicilan kpr BTN</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <?php if ($row->cicilan == ""): ?>
              <code><span class="glyphicon glyphicon-flash"></span> Belum ada data cicilan untuk <?php echo $row->name ?> </code> <u><a href=""><small>Isi sekarang</small></a></u>
              <?php else: ?>
                <tr class="succ">
                  <td>Harga Jual</td>
                  <td>DP</td>
                  <td>Discount DP</td>
                  <td>Sisa DP</td>
                  <td>Bank</td>
                </tr>
                <?php echo $row->cicilan ?>
            <?php endif ?>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Angsuran -->
<div id="angsuran<?php echo $row->id ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Illustrasi Cicilan kpr BTN</h4>
      </div>
      <div class="modal-body">
        <?php if ($row->angsuran == ""): ?>
          <code><span class="glyphicon glyphicon-flash"></span> Belum ada data Angsuran untuk <?php echo $row->name ?> </code> <u><a href=""><small>Isi sekarang</small></a></u>
            <?php else: ?>
              <ul>
                <?php echo $row->angsuran ?>
              </ul>
        <?php endif ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>