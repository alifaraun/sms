
<?php include './include/header.php'; ?>

<div class="login">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-light border-primary">Only employees</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" maxlength="32" class="form-control text-center" id="formGroupExampleInput" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" maxlength="32" class="form-control text-center" id="formGroupExampleInput2" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input text-center" type="checkbox"> Show password
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-transparent border-primary"> 
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3 col-lg-4"></div>
        </div>
    </div>
</div>

<?php include './include/footer.php'; ?>
