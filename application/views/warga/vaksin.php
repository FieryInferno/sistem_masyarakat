<div class="card">
  <div class="card-header">
    Data Vaksin Covid
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table" id="bootstrap-data-table-export">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($vaksin as $key) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $key['nik']; ?></td>
                <td><?= $key['nama']; ?></td>
                <td><?= tgl_indo($key['tanggal']); ?></td>
                <td>
                  <?php
                    switch ($key['status']) {
                      case 'belum': ?>
                        <button class="btn btn-danger">Belum</button>
                        <?php break;
                      case 'sudah': ?>
                        <button class="btn btn-success">Sudah</button>
                        <?php break;
                      
                      default:
                        # code...
                        break;
                    }
                  ?>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>