document.getElementById("Siform").addEventListener("submit", function (e) {
    e.preventDefault();

    var nama = document.getElementById("inputNama").value;
    var alamat = document.getElementById("inputAlamat").value;
    var tanggalLahir = document.getElementById("inputTanggalLahir").value;
    var jenisKelamin = document.getElementById("genderlakilaki").checked || document.getElementById("gendercewe").checked;
    var hobby = document.getElementById("inputHobby").value;
    var pekerjaan = document.getElementById("inputPekerjaan").value;
    var checkbox = document.getElementById("gridCheck").checked;

    let errors = [];

    if (nama === "") {
        errors.push("Nama tidak boleh kosong ");
    }

    if (alamat === "") {
        errors.push("Alamat tidak boleh kosong ");
    }

    if (tanggalLahir === "") {
        errors.push("Tanggal lahir tidak boleh kosong ");
    }

    if (!jenisKelamin) {
        errors.push("Jenis kelamin htidak boleh kosong");
    }

    if (hobby === "") {  
        errors.push("Hobby tidak boleh kosong");
    }

    if (pekerjaan === "") { 
        errors.push("Pekerjaan tidak boleh kosong");
    }

    if (!checkbox) {
        errors.push("Anda belum  menyetujui persyaratan");
    }

    if (errors.length > 0) {
        alert(errors.join("\n"));
    } else {
        alert("Selamat Datang " + nama);
    }
});
