<?php require APPROOT . "/views/inc/header.php"; ?>
  <div class="card card-body bg-light mt-5">
  
    <h2 class="text-center">Add Post</h2>
    <p class="mt-3">Create a post with this form</p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="POST">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" >
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="Body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <button type="submit" class="btn btn-success"><i class="fas fa-check mr-2"></i>Submit</button>
    </form>
  </div>
<?php require APPROOT . "/views/inc/footer.php"; ?>
