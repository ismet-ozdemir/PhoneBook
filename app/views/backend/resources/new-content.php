<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?= $this->base_url; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Phones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="card text-center">
    <div class="card-header">Phone Book Add</div>
    <div class="card-body">
      <form method="post">
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Name And Surname</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username">
          </div>
        </div>
        <div class="form-group row mt-3">
          <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <a href="/" class="btn btn-warning">Cancel</a>
        </div>
        <?=$_SESSION['csrf']['input'];?>
      </form>
    </div>
  </div>

  <?php
if (isset($this->post['username']) AND isset($this->post['phone'])) {
  $option = array(
    array(
        'username'=> $this->post['username'],
        'phone'=> $this->post['phone'],
    )
  );
  $this->insert('contents', $option);
}
?>

</body>

</html>