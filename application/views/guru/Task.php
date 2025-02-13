<div class="container">

    <div class="wrapperwrapper-content animated fadeInRight">
        <div class="ibox section-container">
            <div class="ibox-content">
                <div class="tabs-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="nav-link " data-toggle="tab" href="#tab-11">Data Tugas </a></li>
                        <li><a class="nav-link active" data-toggle="tab" href="#tab-22">Data Siswa</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#chat">Chat Room</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" id="tab-11" class="tab-pane ">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        Mulai : <h3 id="st_date"></h3>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        Selesai : <h3 id="en_date"></h3>
                                                    </div>
                                                    <div id="profil">
                                                        <div class="form-group">
                                                            <h2> <?= $contentData['deskripsi'] ?></h2>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="container" style="padding-bottom: 0%">
                                                    <div id="iframepdftask"> 
                                                        <?php if(!empty($contentData['task_dokumen'])){
                                                            $ffile = explode('.',$contentData['task_dokumen'])[1];
                                                            echo '<a class="btn btn-success btn-xs btn-download" href="'. base_url('/upload/task_dokumen/').$contentData['task_dokumen'].'"><i class="fa fa-download"></i> Download Dokumen </a> <br><br>';
                                                            if($ffile == 'pdf'){
                                                                echo '<iframe id="" src="'. base_url('/upload/task_dokumen/').$contentData['task_dokumen'].'" width = "100%" height = "600px"></iframe>';

                                                            }
                                                            if($ffile == 'jpg' || $ffile == 'jpeg' || $ffile == 'png'){
                                                                  echo '<img src="'. base_url('/upload/task_dokumen/').$contentData['task_dokumen'].'" alt="Nature" class="responsive" width="600" height="auto">  ';
                                                            }


                                                        }
                                                        
                                                        ?>
                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="chat" class="tab-pane ">
                            <div class="panel-body">
                                <div class="ibox">
                                    <!--    PANEL CHAT -->
                                    <div class="col-lg-12">

                                        <div class="ibox chat-view">

                                            <div class="ibox-title">
                                                <small class="float-right text-muted"></small>

                                            </div>
                                            <div class="ibox-content">
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div class="chat-discussion" id='chat-discussion' style="height : 500px">
                                                            <a class="alert alert-info d-flex justify-content-center" id="load_more"> Load More</a>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chat-message-form">

                                                            <div class="form-group">
                                                                <form id="form_message">
                                                                    <input type="hidden" id="id_mapping_kelas_message" name="id_mapping_kelas">

                                                                    <textarea class="form-control message-input" id="message" name="text_message" placeholder="Enter message text"></textarea>
                                                                </form>
                                                                <button type="button" class="btn btn-success float-right" id="sent_message_btn" data-loading-text="Mengirim ..."><i class="fal fa-paper-plane"></i> Kirim</button>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                    <!-- END CHAT -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="tab-22" class="tab-pane active">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-content" id="input_modal">
                                        <div class="form-inline">
                                        </div>

                                        <div class="form-group">
                                            <div class="row m-t-sm">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <form class="form" id="evaluasi_nilai" onsubmit="return false;">
                                                            <button class="save btn btn-success my-1 mr-sm-2" type="" id="submit_evaluasi_btn" data-loading-text="Loading..."><strong>Simpan</strong></button>
                                                            <input type="hidden" id="jumlah" name="jumlah">
                                                            <input type="hidden" id="id_task" name="id_task">

                                                            <table id="FDataTableSiswa" class="table table-bordered table-hover" style="padding:0px;font-size:11px">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10%; text-align:center!important">Nama / Nomor Induk</th>
                                                                        <!-- <th style="width:  %; text-align:center!important">Nomor Induk</th> -->
                                                                        <th style="width: 30%; text-align:center!important">Deskripsi</th>
                                                                        <th style="width: 10%; text-align:center!important">Dokumen</th>
                                                                        <th style="width: 30%; text-align:center!important">Nilai</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="pdf_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="container" style="padding-bottom: 10%"><br><br>
                <div id="iframepdf"> </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#forum_saya').addClass('active');
        var id_mapping_kelas = "<?= $contentData['id_mapping_kelas'] ?>";
        var id_task = "<?= $contentData['id_task'] ?>";
        var me = "<?= $this->session->userdata('id_user') ?>";
        var id_mapping = "<?= $contentData['id_mapping'] ?>";
        var st = "<?= $contentData['end_task'] ?>";
        $('#st_date').html(IndoDate("<?= $contentData['start_task'] ?>"))
        $('#en_date').html(IndoDate("<?= $contentData['end_task'] ?>"))
        var dataProfil;
        var dataTahun;
        var dataV0 = {};
        var dataChat = {};
        var first_chat = 0;
        var last_chat = 0;

        chatHTML = $('#chat-discussion');
      
        var form_message = $('#form_message');
        var message = $('#message');
        var sent_message_btn = $('#sent_message_btn');
        var load_more = $('#load_more');
        $('#id_mapping_kelas_message').val(id_mapping_kelas)
        var toolbar = {
            'form': $('#toolbar_form'),
            'add_task': $('#add_task'),
        }

        var evaluasi_nilai = $('#evaluasi_nilai');
        var add_siswa = $('#add_siswa');

        var LayerModal = {
            'form': $('#LayerModal'),
            'nama_wali_kelas': $('#LayerModal').find('#nama_wali_kelas'),
            'id_wali_kelas': $('#LayerModal').find('#id_wali_kelas'),
            'jumlah_mapel': $('#LayerModal').find('#jumlah_mapel'),
            'save_profil_btn': $('#save_profil_btn')
        }

        pdf_modal = $('#pdf_modal');

        var TaskModal = {
            'self': $('#task_modal'),
            'info': $('#task_modal').find('.info'),
            'form': $('#task_modal').find('#task_form'),
            'add_task_btn': $('#task_form').find('#add_task_btn'),
            'edit_task_btn': $('#task_form').find('#edit_task_btn'),
            'start_task': $('#task_form').find('#start_task'),
            'end_task': $('#task_form').find('#end_task'),
            'deskripsi': $('#task_form').find('#deskripsi'),
            'show_dokumen': $('#task_form').find('#show_dokumen'),
            'id_mapping_kelas': $('#task_form').find('#id_mapping_kelas'),
            'id_mapping': $('#task_form').find('#id_mapping'),
            'task_dokumen': new FileUploader($('#task_form').find('#task_dokumen'), "", "task_dokumen", ".png , .pdf , .jpg , .jpeg , .doc, .docx ", false, true),
            // 'task_dokumen_form': $('#task_form').find('#task_dokumen_form'),

        }

        var FDataTableSiswa = $('#FDataTableSiswa').DataTable({
            'columnDefs': [{
                targets: [1],
                className: 'text-center'
            }, ],
            deferRender: true,
            "order": [
                [0, "desc"]
            ],
            paging: false,
            ordering: false,
            searching: false
        });

        var FDataTableTask = $('#FDataTableTask').DataTable({
            'columnDefs': [{
                targets: [2],
                className: 'text-center'
            }, ],
            deferRender: true,
            "order": [
                [1, "asc"]
            ],
            paging: false,
            ordering: true,
            searching: false
        });


        var swalApprovConfigure = {
            title: "Konfirmasi Approv",
            text: "Yakin akan Approv data profil ini?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#18a689",
            confirmButtonText: "Ya, Approv!",
        };

        var swalSaveConfigure = {
            title: "Konfirmasi simpan",
            text: "Yakin akan menyimpan data ini?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#18a689",
            confirmButtonText: "Ya, Simpan!",
        };

        swalAddTaskConfigure = {
            title: "Konfirmasi Tambah",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#red",
            confirmButtonText: "Ya, Tambah!",
        };

        var swalDeleteConfigure = {
            title: "Konfirmasi Hapus Tugas",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#18a689",
            confirmButtonText: "Ya, Hapus!",
        };
        var dataMapping = {};
        var dataTask = {};
        var dataSiswa = {};
        var dataSiswaMapping = {};

        getAllTask();

        function getAllTask() {
            return $.ajax({
                url: `<?php echo site_url('GuruController/getAllTask/') ?>`,
                'type': 'POST',
                data: {
                    id_mapping_kelas: id_mapping_kelas
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataTask = json['data'];
                    renderTask(dataTask);
                },
                error: function(e) {}
            });
        }



        getChat();

        function getChat() {
            return $.ajax({
                url: `<?php echo site_url('ParameterController/getAllMappingKelasChat/') ?>`,
                'type': 'get',
                data: {
                    id_mapping_kelas: id_mapping_kelas
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataChat = json['data'];
                    renderChat(dataChat);
                },
                error: function(e) {}
            });
        }

        getAllSiswaMapping();

        function getAllSiswaMapping() {
            return $.ajax({
                url: `<?php echo site_url('GuruController/getAllSiswaMappingTask/') ?>`,
                'type': 'POST',
                data: {
                    id_task: id_task,
                    id_mapping: id_mapping
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataSiswaMapping = json['data'];
                    renderSiswaMapping(dataSiswaMapping);
                },
                error: function(e) {}
            });
        }

        TaskModal.form.submit(function(event) {

            event.preventDefault();
            switch (TaskModal.form[0].target) {
                case 'add':
                    addTask();
                    break;
                case 'edit':
                    editTask();
                    break;
            }
        })

        function addTask() {
            event.preventDefault();
            swal(swalAddTaskConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                buttonLoading(TaskModal.add_task_btn);
                $.ajax({
                    url: `<?= site_url('GuruController/create_task') ?>`,
                    'type': 'POST',
                    data: new FormData(TaskModal.form[0]),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        buttonIdle(TaskModal.add_task_btn);
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Simpan Gagal", json['message'], "error");
                            return;
                        }
                        TaskModal.self.modal('hide');
                        getAllTask();
                        swal("Simpan Berhasil", "", "success");
                        // getInputPengunjung();
                    },
                    error: function(e) {}
                });
            });
        }

        function editTask() {
            event.preventDefault();
            swal(swalAddTaskConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                buttonLoading(TaskModal.edit_task_btn);
                $.ajax({
                    url: `<?= site_url('GuruController/edit_task') ?>`,
                    'type': 'POST',
                    data: new FormData(TaskModal.form[0]),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        buttonIdle(TaskModal.add_task_btn);
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Simpan Gagal", json['message'], "error");
                            return;
                        }
                        TaskModal.self.modal('hide');
                        getAllTask();
                        swal("Simpan Berhasil", "", "success");
                        // getInputPengunjung();
                    },
                    error: function(e) {}
                });
            });
        }

        function renderMapping(data) {
            if (data == null || typeof data != "object") {
                // console.log("UNKNOWN DATA");
                return;
            }
            var i = 0;
            var renderData = [];
            LayerModal.id_wali_kelas.val()

            Object.values(data).forEach((d) => {
                stat = `<input type="text" placeholder="" class="form-control" id="guru_mapel_${i}" name="guru_mapel_${i}" value='${d['id_tenaga_kerja'] ? ( d['id_tenaga_kerja'] != '0' ? dataTask[d['id_tenaga_kerja']]['nama'] : '' ) : ''}'>
               
                <input type="hidden"  id='mapping_kelas_mapel_${i}' name='mapping_kelas_mapel_${i}' value='${d['id_mapel_jurusan']}' >
       
                <input type="hidden" id='id_guru_${i}' name='id_guru_${i}' value='${d['id_tenaga_kerja'] ? ( d['id_tenaga_kerja'] != '0' ? dataTask[d['id_tenaga_kerja']]['id_user'] : '' ) : ''}'>
                <input type="hidden" id='id_mapping_kelas_${i}' name='id_mapping_kelas_${i}' value=${d['id_mapping_kelas'] ? d['id_mapping_kelas'] : 'new' }>`;

                if (d['status_mj'] == '1') {
                    btn = `<a class="nonactive active btn btn-success btn-sm" data-id="${d['id_mapel_jurusan']}"><i class='fa fa-angle-double-right'></i></a>`;
                } else if (d['status_mj'] == '2') {
                    btn = `<a class="act active btn btn-success btn-sm kpb_rek" data-id="${d['id_mapel_jurusan']}"><i class='fa fa-angle-double-right'></i></a>`;
                } else {
                    btn = `<a class="create active btn btn-success btn-sm kpb_rek" data-kelas="${d['kelas']}" data-jurusan="${d['id_jenis_jurusan']}" data-mapel="${d['id_mapel']}"><i class='fa fa-angle-double-right'></i></a>`;
                }
                renderData.push([d['nama_mapel'], stat, btn]);
                i++;
            });
            FDataTable.clear().rows.add(renderData).draw('full-hold');
            typehead(i);
            LayerModal.jumlah_mapel.val(i);
        };

        function renderTask(data) {
            if (data == null || typeof data != "object") {
                // console.log("UNKNOWN DATA");
                return;
            }
            var i = 0;
            var renderData = [];
            Object.values(data).forEach((d) => {
                var sh = d['task_dokumen'] ? ` <a class="open_file active btn btn-success btn-sm " data-id_task="${d['id_task']}"><i class='fa fa-eye'></i></a>` : '';
                var fl = downloadButtonV2("<?= base_url('upload/task_dokumen/') ?>", d['task_dokumen'], "Dokumen");
                btn = `<a class="delete active btn btn-success btn-sm " data-id_task="${d['id_task']}"><i class='fa fa-trash'></i></a>
                   <a class="edit active btn btn-success btn-sm " data-id_task="${d['id_task']}"><i class='fa fa-pencil'></i></a>
               
                   <a class="active btn btn-success btn-sm" href="<?= site_url() ?>GuruController/task?id_task=${d['id_task']}"><i class='fa fa-braille'></i></a>`;
                renderData.push([d['deskripsi'], d['start_task'], d['end_task'], fl + sh, btn]);
                i++;
            });
            FDataTableTask.clear().rows.add(renderData).draw('full-hold');
        };


        function renderChat(data) {
            i = 0;
            Object.values(data).forEach((d) => {
                if (i == 0) {
                    first_chat = d['id_chat'];
                    last_chat = d['id_chat'];
                }
                last_chat = d['id_chat'];
                var date = new Date(d['date']);

                var tahun = date.getFullYear();
                var tanggal = date.getDate();
                var bulan = date.getMonth();
                var tanggal = date.getDate();
                var hari = date.getDay();
                switch (hari) {
                    case 0:
                        hari = "Ming";
                        break;
                    case 1:
                        hari = "Sen";
                        break;
                    case 2:
                        hari = "Sel";
                        break;
                    case 3:
                        hari = "Rab";
                        break;
                    case 4:
                        hari = "Kam";
                        break;
                    case 5:
                        hari = "Jum";
                        break;
                    case 6:
                        hari = "Sab";
                        break;
                }
                switch (bulan) {
                    case 0:
                        bulan = "Jan";
                        break;
                    case 1:
                        bulan = "Feb";
                        break;
                    case 2:
                        bulan = "Mar";
                        break;
                    case 3:
                        bulan = "Apr";
                        break;
                    case 4:
                        bulan = "Mei";
                        break;
                    case 5:
                        bulan = "Jun";
                        break;
                    case 6:
                        bulan = "Jul";
                        break;
                    case 7:
                        bulan = "Ags";
                        break;
                    case 8:
                        bulan = "Sep";
                        break;
                    case 9:
                        bulan = "Okt";
                        break;
                    case 10:
                        bulan = "Nov";
                        break;
                    case 11:
                        bulan = "Des";
                        break;
                }
                html_go = `
                <div id='row_id_${d['id_chat']}' class="chat-message ${ me == d['id_user'] ? 'left' : 'right' }">
                <img class="message-avatar" src="${ d['photo']  ? '<?= base_url('upload/profile/') ?>'+d['photo'] :  '<?= base_url('upload/profile_small.jpg') ?>' }" alt="">
                            <div class="message">
                        
                                <a class="message-author" href="#"> ${d['nama']} - ${d['username']}</a>
                                <span class="message-date"> ${hari}, ${tanggal} ${bulan} ${tahun} - ${d['date'].split(" ")[1]} </span>
                                <span class="message-content">
                              ${d['text_message']}   </span>
                             </div>
                </div>`
                last_chat = d['id_chat'];
                chatHTML.append(html_go);
                i++;
            });
        }
        setInterval(function() {
            getReload();
        }, 4000);


        function reloadChat(data) {
            Object.values(data).forEach((d) => {

                last_chat = d['id_chat'];
                var date = new Date(d['date']);

                var tahun = date.getFullYear();
                var tanggal = date.getDate();
                var bulan = date.getMonth();
                var tanggal = date.getDate();
                var hari = date.getDay();
                switch (hari) {
                    case 0:
                        hari = "Ming";
                        break;
                    case 1:
                        hari = "Sen";
                        break;
                    case 2:
                        hari = "Sel";
                        break;
                    case 3:
                        hari = "Rab";
                        break;
                    case 4:
                        hari = "Kam";
                        break;
                    case 5:
                        hari = "Jum";
                        break;
                    case 6:
                        hari = "Sab";
                        break;
                }
                switch (bulan) {
                    case 0:
                        bulan = "Jan";
                        break;
                    case 1:
                        bulan = "Feb";
                        break;
                    case 2:
                        bulan = "Mar";
                        break;
                    case 3:
                        bulan = "Apr";
                        break;
                    case 4:
                        bulan = "Mei";
                        break;
                    case 5:
                        bulan = "Jun";
                        break;
                    case 6:
                        bulan = "Jul";
                        break;
                    case 7:
                        bulan = "Ags";
                        break;
                    case 8:
                        bulan = "Sep";
                        break;
                    case 9:
                        bulan = "Okt";
                        break;
                    case 10:
                        bulan = "Nov";
                        break;
                    case 11:
                        bulan = "Des";
                        break;
                }
                <?php $img = base_url('upload/profile/') . $this->session->userdata('photo');
                if (empty($this->session->userdata('photo'))) {
                    $img = base_url('upload/profile_small.jpg');
                }  ?>
                html_go = `
                <div id='row_id_${d['id_chat']}' class="chat-message ${ me == d['id_user'] ? 'left' : 'right' }">
                <img class="message-avatar" src="${d['photo'] ?  '<?= base_url('upload/profile/') ?>'+d['photo'] : '<?= base_url('upload/profile_small.jpg') ?>' }" alt="">
                            <div class="message">
                        
                                <a class="message-author" href="#"> ${d['nama']} - ${d['username']}</a>
                                <span class="message-date"> ${hari}, ${tanggal} ${bulan} ${tahun} - ${d['date'].split(" ")[1]} </span>
                                <span class="message-content">
                              ${d['text_message']}   </span>
                             </div>
                </div>`
                last_chat = d['id_chat'];
                chatHTML.append(html_go);
            });
        }

        load_more.on('click', function() {
            LoadMore();
        });

        function LoadMore() {
            return $.ajax({
                url: `<?php echo site_url('MessageController/getLoadMoreMappingKelasChat/') ?>`,
                'type': 'get',
                data: {
                    id_mapping_kelas: id_mapping_kelas,
                    first: first_chat
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dat = json['data'];
                    renderLoadMore(dat)
                },
                error: function(e) {}
            });
        }

        function renderLoadMore(data) {
            var html_go = ``;
            var i = 0;

            Object.values(data).forEach((d) => {
                if (i == 0) f = d['id_chat'];
                i++;
                var date = new Date(d['date']);

                var tahun = date.getFullYear();
                var tanggal = date.getDate();
                var bulan = date.getMonth();
                var tanggal = date.getDate();
                var hari = date.getDay();
                switch (hari) {
                    case 0:
                        hari = "Ming";
                        break;
                    case 1:
                        hari = "Sen";
                        break;
                    case 2:
                        hari = "Sel";
                        break;
                    case 3:
                        hari = "Rab";
                        break;
                    case 4:
                        hari = "Kam";
                        break;
                    case 5:
                        hari = "Jum";
                        break;
                    case 6:
                        hari = "Sab";
                        break;
                }
                switch (bulan) {
                    case 0:
                        bulan = "Jan";
                        break;
                    case 1:
                        bulan = "Feb";
                        break;
                    case 2:
                        bulan = "Mar";
                        break;
                    case 3:
                        bulan = "Apr";
                        break;
                    case 4:
                        bulan = "Mei";
                        break;
                    case 5:
                        bulan = "Jun";
                        break;
                    case 6:
                        bulan = "Jul";
                        break;
                    case 7:
                        bulan = "Ags";
                        break;
                    case 8:
                        bulan = "Sep";
                        break;
                    case 9:
                        bulan = "Okt";
                        break;
                    case 10:
                        bulan = "Nov";
                        break;
                    case 11:
                        bulan = "Des";
                        break;
                }
                html_go = html_go + `
            <div id='row_id_${d['id_chat']}' class="chat-message ${ me == d['id_user'] ? 'left' : 'right' }">
            <img class="message-avatar" src="${d['photo'] ? '<?= base_url('upload/profile/') ?>'+d['photo'] : '<?= base_url('upload/profile_small.jpg') ?>' }" alt="">
                        <div class="message">
                    
                            <a class="message-author" href="#"> ${d['nama']} - ${d['username']}</a>
                            <span class="message-date"> ${hari}, ${tanggal} ${bulan} ${tahun} - ${d['date'].split(" ")[1]} </span>
                            <span class="message-content">
                          ${d['text_message']}   </span>
                         </div>
            </div>`

            });
            var newItem = document.createElement("div");
            newItem.setAttribute("id", "row_id_" + f);
            newItem.innerHTML = html_go;
            document.getElementById('chat-discussion').insertBefore(newItem, document.getElementById(`row_id_` + first_chat)); //menambahkan element paragraf p sebelum element paragraf yg memiliki identitas id dua
            first_chat = f;

        }

        function getReload() {
            return $.ajax({
                url: `<?php echo site_url('MessageController/getReloadMappingKelasChat/') ?>`,
                'type': 'get',
                data: {
                    id_mapping_kelas: id_mapping_kelas,
                    last: last_chat
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dat = json['data'];
                    reloadChat(dat);
                },
                error: function(e) {}
            });
        }

        sent_message_btn.on('click', function() {
            buttonLoading(sent_message_btn);
            $.ajax({
                url: `<?= site_url('MessageController/sent_mapping_kelas') ?>`,
                'type': 'POST',
                data: form_message.serialize(),
                success: function(data) {
                    buttonIdle(sent_message_btn);
                    var json = JSON.parse(data);
                    if (json['error']) {
                        swal("Gagal mengirim pesan", json['message'], "error");
                        return;
                    }
                    message.val('');
                    getReload()
                },
                error: function(e) {}
            });
        });

        FDataTableSiswa.on('click', '.open_file', function() {
            var id = $(this).data('id');
            pdf_modal.modal('show');
            if (!empty(dataSiswaMapping[id]['submit_dokumen'])) {
                tmp = '<?= base_url('/upload/submit_dokumen/') ?>' + dataSiswaMapping[id]['submit_dokumen'];
                pdfHTML = `
                <iframe id="iframepdf" src="${tmp}" width = "100%" height = "900px"></iframe>
                `;
                var iframepdf = document.getElementById("iframepdf");
                iframepdf.innerHTML = pdfHTML;
            };
        })

        FDataTableTask.on('click', '.delete', function() {
            var id_task = $(this).data('id_task');
            swal(swalDeleteConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                $.ajax({
                    url: `<?= site_url('GuruController/delete_task') ?>`,
                    'type': 'POST',
                    data: {
                        id_task: id_task
                    },
                    success: function(data) {
                        // buttonIdle(LayerModal.save_profil_btn);
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Hapus Gagal", json['message'], "error");
                            return;
                        }
                        getAllTask();

                        swal("Berhasil di Hapus", "", "success");
                    },
                    error: function(e) {}
                });
            });
        });

    

        function renderSiswaMapping(data) {
            if (data == null || typeof data != "object") {
                return;
            }
            var i = 0;
            var renderData = [];
            Object.values(data).forEach((d) => {
                var sh = d['submit_dokumen'] ? ` <a class="open_file active btn btn-success btn-sm " data-id="${d['id_mapping_siswa']}"><i class='fa fa-eye'></i></a>` : '';
            
                var fl = downloadButtonV2("<?= base_url('upload/submit_dokumen/') ?>", d['submit_dokumen'], "Download");
             
                fx = `          <input type="number" placeholder="" min="0" max="100" class="form-control" id="nilai_${i}" name="nilai_${i}" value="${d['nilai'] ? d['nilai'] : '' }" >
                <input type="hidden" placeholder="" class="form-control" id="id_submit_task_${i}" name="id_submit_task_${i}" value="${d['id_submit_task'] ? d['id_submit_task'] : '' }">
                <input type="hidden" placeholder="" class="form-control" id="id_siswa_${i}" name="id_siswa_${i}" value="${d['id_siswa']}">
                <textarea rows="2" class="form-control" id="evaluasi_${i}" name="evaluasi_${i}" placeholder="Evaluasi">${d['evaluasi'] ? d['evaluasi'] : '' }</textarea>
 
         `
                renderData.push([d['nama'] + '<br>' + d['username'], d['submit_date'] ? d['submit_date'] + '<br>' + d['submit_deskripsi'] : 'BELUM SUBMIT', d['submit_dokumen'] ? sh+fl: 'Tidak Ada', fx]);
                i++;
            });
            $('#id_task').val(id_task)
            $('#jumlah').val(i)
            FDataTableSiswa.clear().rows.add(renderData).draw('full-hold');
        }
        submit_evaluasi_btn = $('#submit_evaluasi_btn');
        evaluasi_nilai.on('submit', function() {
            swal(swalSaveConfigure).then((result) => {
                if (!result.value) {
                    return;
                }
                buttonLoading(submit_evaluasi_btn);
                $.ajax({
                    url: `<?= site_url('GuruController/evaluasi_task') ?>`,
                    'type': 'POST',
                    data: evaluasi_nilai.serialize(),
                    success: function(data) {
                        buttonIdle(submit_evaluasi_btn);
                        var json = JSON.parse(data);
                        if (json['error']) {
                            swal("Gagal Menyimpan", json['message'], "error");
                            return;
                        }
                        getAllSiswaMapping();
                        swal("Berhasil Menyimpan", '', "success");

                    },
                    error: function(e) {}
                });
            });
        });
        console.log(IndoDate('2020-11-03 23:28:00'))

        function IndoDate(date) {
            time = date.split(" ")[1];
            var date = new Date(date);
            var tahun = date.getFullYear();
            var bulan = date.getMonth();
            var tanggal = date.getDate();
            var hari = date.getDay();
            switch (hari) {
                case 0:
                    hari = "Minggu";
                    break;
                case 1:
                    hari = "Senin";
                    break;
                case 2:
                    hari = "Selasa";
                    break;
                case 3:
                    hari = "Rabu";
                    break;
                case 4:
                    hari = "Kamis";
                    break;
                case 5:
                    hari = "Jum'at";
                    break;
                case 6:
                    hari = "Sabtu";
                    break;
            }
            switch (bulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11:
                    bulan = "Desember";
                    break;
            }
            return hari + ", " + tanggal + " " + bulan + " " + tahun + " " + time.substring(0, 5)
        }
    });
</script>