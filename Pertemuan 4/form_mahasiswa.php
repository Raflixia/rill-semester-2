<!DOCTYPE html>
<html>
    <head>
        <title>Form Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class="container px-5 my-5">
    <form action="daftar_mahasiswa.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" name="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="prodi">Prodi</label>
            <input class="form-control" name="prodi" type="text" placeholder="Prodi" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="prodi:required">Prodi is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="tahunAngkatan">Tahun Angkatan</label>
            <input class="form-control" name="tahunAngkatan" type="text" placeholder="Tahun Angkatan" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="tahunAngkatan:required">Tahun Angkatan is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="ipk">IPK</label>
            <input class="form-control" name="ipk" type="text" placeholder="IPK" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="ipk:required">IPK is required.</div>
        </div>
        <div class="d-none" name="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>