$(this).ready(function() {

    function getParam(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }


    getTableData()

    function getTableData() {
        var view = getParam('view');
        if (view == 'pakaian') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Galeri/pakaian/' + obj.gambar_pakaian + '" width="50" height="50"></td><td>' + obj.nama_pakaian + '</td><td><a href="#editPakaian' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusPakaian' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })


                }
            });
        }

        if (view == 'bangunan') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Galeri/bangunan/' + obj.gambar_bangunan + '" width="50" height="50"></td><td>' + obj.nama_bangunan + '</td><td><a href="#editBangunan' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusBangunan' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'tarian') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Galeri/tarian/' + obj.gambar_tarian + '" width="50" height="50"></td><td>' + obj.nama_tarian + '</td><td><a href="#editTarian' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusTarian' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'makanan') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Galeri/makanan/' + obj.gambar_makanan + '" width="50" height="50"></td><td>' + obj.nama_makanan + '</td><td><a href="#editMakanan' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusMakanan' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'tradisi') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Galeri/tradisi/' + obj.gambar_tradisi + '" width="50" height="50"></td><td>' + obj.nama_tradisi + '</td><td><a href="#editTradisi' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusTradisi' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'berita') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Berita/' + obj.gambar_berita + '" width="50" height="50"></td><td>' + obj.nama_berita + '</td><td><a href="#editBerita' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusBerita' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'ensiklopedia') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../img/Ensiklopedia/' + obj.gambar_ensiklopedia + '" width="50" height="50"></td><td>' + obj.nama_ensiklopedia + '</td><td><a href="#editEnsiklopedia' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusEnsiklopedia' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'kontak') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.fullname + '</td><td>' + obj.email + '</td><td>' + obj.message + '</td><td><a href="#hapusKontak' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'useradmin') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.username + '</td><td>' + obj.password + '</td><td><a href="#editAdmin' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusAdmin' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'keyadmin') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.admin_key + '</td><td><a href="#editAdminKey' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusAdminKey' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }
    }

});