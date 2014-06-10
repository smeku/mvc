<div class="page-header">
  <h2><?php echo $this->header; ?></h2>
</div>

<?php if( isset($this->loginError) ): ?>
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Warning!</strong> <?php echo $this->loginError; ?>
   </div>
<?php endif; ?>
<form class="form-horizontal" action="/users/profil/save" role="form" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-4">
        <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $this->dane['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Zapisz</button>
    </div>
  </div>
</form>





