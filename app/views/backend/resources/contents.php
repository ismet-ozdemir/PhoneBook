<?php $contents = $this->getData('contents'); ?>
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

  <div class="card">
    <div class="card-header">
      <div class="row" style="align-items: center; justify-content: center; display: grid; align-content: center;">
        <h3>PhoneBook</h3>
        <a href="new/content" style="padding:8px 12px; box-sizing:border-box;" class="btn btn-success rounded-0 btn-sm">
          <i class="fas fa-user-plus"></i>
        </a>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name And Surname</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contents as $key => $values) { ?>
            <tr>
              <th><?= $values['id']; ?></th>
              <td><?= $values['username']; ?></td>
              <td><?= $values['phone']; ?></td>
              <td>
                <a href="edit/content/<?= $values['id']; ?>" class="btn btn-info rounded-0 btn-sm" style="margin-right:6px; padding:8px 12px; box-sizing:border-box;">
                  <i class="fas fa-user-edit"></i>
                </a>
                <a href="delete/content/<?= $values['id']; ?>" style="margin-right:6px; padding:8px 12px; box-sizing:border-box;" class="btn btn-danger rounded-0 btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>