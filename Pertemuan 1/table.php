<!doctype html>
< lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Total</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <?php
    $nilai = ["nim" => 0113213223, "nama" => "Mia", "tugas" => 90, "uts" => 80, "uas" => 90];
    $nilai2 = ["nim" => 0113213224, "nama" => "Rafli", "tugas" => 87, "uts" => 91, "uas" => 82];
    $nilai3 = ["nim" => 0113213224, "nama" => "Adin", "tugas" => 87, "uts" => 60, "uas" => 82];
    $mhs = [$nilai, $nilai2, $nilai3];
  ?>
  <tbody>
    <?php foreach ($mhs as $key => $item) { ?>
    <?php 

    $persentase = [
      'tugas' => 20,
      'uts' => 40,
      'uas' => 40,
    ];

    $total = 
      ($item['tugas'] * $persentase['tugas'] / 100) +
      ($item['uts'] * $persentase['uts'] / 100) +
      ($item['uas'] * $persentase['uas'] / 100);

    if ($total >= 80) {
      $predikat = 'A';
    } else if ($total >= 75) {
        $predikat = 'B+';
    } else if ($total >= 70) {
        $predikat = 'B';
    } else if ($total >= 65) {
        $predikat = 'C+';
    } else if ($total >= 60) {
        $predikat = 'C';
    } else if ($total >= 50) {
        $predikat = 'D';
    } else if ($total >= 40) {
        $predikat = 'E';
    } else if ($total >= 10) {
        $predikat = 'F';
    } 
    ?>

    <tr>
      <td scope="col"><?= $key + 1 ?></td>
      <td scope="col"><?= $item ['nim']?></td>
      <td scope="col"><?= $item ['nama']?></td>
      <td scope="col"><?= $item ['tugas']?></td>
      <td scope="col"><?= $item ['uts']?></td>
      <td scope="col"><?= $item ['uas']?></td>
      <td scope="col"><?= $total ?></td>
      <td scope="col"><?= $predikat ?></td>
    </tr>
    <?php }?>
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>