<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <body>
    <div class="container px-5 my-5">
    <form method="POST" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mataKuliah">Mata Kuliah</label>
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
                <option value="Pemrograman web 2">Pemrograman web 2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiTugas">Nilai Tugas</label>
            <input class="form-control" name="nilaiTugas" type="text" placeholder="Nilai Tugas" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiTugas:required">Nilai Tugas is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUts">Nilai UTS</label>
            <input class="form-control" name="nilaiUts" type="text" placeholder="Nilai UTS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUas">Nilai UAS</label>
            <input class="form-control" name="nilaiUas" type="text" placeholder="Nilai UAS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
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
            <button class="btn btn-primary btn-lg" id="submitButton" value="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
    <div class="container px-5 my-5"></div>
    <div class="table-responsive">
        <div class="table table-bordered table-hover">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Matkul</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
            <?php
            if (isset($_POST["nama"])) {
                echo"<tr>";
                echo "<td></td>";
                echo "<td>$_POST[nama]</td>";
                echo "<td>$_POST[mataKuliah]</td>";
                echo "<td>$_POST[nilaiUts]</td>";
                echo "<td>$_POST[nilaiUas]</td>";
                $no++;
            }
            ?>
        </table>
        </div>
    </div>
    </body>
</html>