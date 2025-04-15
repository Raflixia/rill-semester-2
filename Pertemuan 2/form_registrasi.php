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
    <form method="POST"  action="" id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" name="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="lakiLaki" name="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="lakiLaki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="perempuan" nama="perempuan" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jenisKelamin:required">One option is required.</div>
        </div>
        <?php  
            $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
        ?>
        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" name="programStudi" aria-label="Program Studi">
                <option value="">Pilih Program Studi</option>
                <?php foreach ($ar_prodi as $k => $v) {
                echo "<option value='$k'>$v</option>";
                } ?>
            </select>
        </div>
        <?php 
        $ar_skill=["HTML" => 10, "CSS" => 20, "JS" => 30, "PHP" => 40, "Python" => 50];
        ?>
         <div class="mb-3">
            <label class="form-label d-block">Skill Web &amp; Programing</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="html" name="html" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="html">HTML</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="css" name="css" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="css">CSS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="javaScript" name="javaScript" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="javaScript">Java Script</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="rwdBootstrap" name="rwdBootstrap" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="rwdBootstrap">RWD Bootstrap</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="php" name="php" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="php">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="python" name="python" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="python">Python</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="java" name="python" type="checkbox" name="skillWebPrograming" data-sb-validations="" />
                <label class="form-check-label" for="java">Java</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="tempatDomisili">Tempat Domisili</label>
            <select class="form-select" id="tempatDomisili" name="tempatDomisili" aria-label="Tempat Domisili">
                <option value="Jakarta">Jakarta</option>
                <option value="Depok">Depok</option>
                <option value="Bandung">Bandung</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
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
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>

<div class="container px-5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tbody>
                <?php
                var_dump($_POST['nim']);
                    $nim = $_POST['nim'];
                    $namaLengkap = $_POST['namaLengkap'];
                    $jenisKelamin = $_POST['jenisKelamin'];
                    $programStudi = $_POST['programStudi'];
                    $skillWebPrograming = isset($_POST['skillWebPrograming']) ? implode(", ", $_POST['skillWebPrograming']) : '';
                    $tempatDomisili = $_POST['tempatDomisili'];
                    $emailAddress = $_POST['emailAddress'];
                    echo "<tr><th>NIM</th><td>$nim</td></tr>";
                    echo "<tr><th>Nama Lengkap</th><td>$namaLengkap</td></tr>";
                    echo "<tr><th>Jenis Kelamin</th><td>$jenisKelamin</td></tr>";
                    echo "<tr><th>Program Studi</th><td>{$ar_prodi[$programStudi]}</td></tr>";
                    echo "<tr><th>Skill</th><td>$skillWebPrograming</td></tr>";
                    echo "<tr><th>Tempat Domisili</th><td>$tempatDomisili</td></tr>";
                    echo "<tr><th>Email Address</th><td>$emailAddress</td></tr>";
                
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>