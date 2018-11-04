<?php require APPROOT . "/views/inc/header.php"; ?>
  <h1><?php echo $data['post']->title; ?></h1>
  <div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
  </div>
  <p><?php echo $data["post"]->body; ?></p>
  <div class="d-flex justify-content-between ">
    <div>
      <a href="<?php echo URLROOT; ?>/posts" class="btn btn-dark"><i class="fas fa-backward mr-2"></i>Back</a>
      <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
        <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-primary">Edit</a>
      <?php endif; ?>
    </div>
    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
      <div>
        <form class="d-inline-block" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="POST">
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
    <?php endif; ?>
  </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>