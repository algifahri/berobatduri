     <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Daftar Berobat</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="berobat_umum.php">
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor HP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" maxlength="15" name="nomor_hp" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Medical Record (jika ada)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nomor_mc">
                                </div>
                            </div>
                        </div>
                       
                       
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Daftar Pasien Umum</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
