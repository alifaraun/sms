<?php include 'include/header.php'; ?>


<!-- Start FAQ -->
<div class="FAQ">
    <div class="container">
        <div class="FAQ-title text-center">Frequently Asked Questions</div>
        <div class="card border-light">
            <a onclick="change_state_faq(this);" class="card-header cursor-pointer"><i class="fa fa-minus-circle fa-lg"></i> question one #1</a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card border-light">
            <a onclick="change_state_faq(this);" class="card-header cursor-pointer"><i class="fa fa-minus-circle fa-lg"></i> question one #2</a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card border-light">
            <a onclick="change_state_faq(this);" class="card-header cursor-pointer"><i class="fa fa-minus-circle fa-lg"></i> question one #3</a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="add-question row">
            <div class="col-md-1 col-xl-2"></div>
            <div class="col-md-10 col-xl-8">
                <div class="bg-danger add-question-title text-center">Add new question</div>
                <form id="main-contact-form" name="contact-form" method="post" action="#">
                    <div class="form-group">
                        <input type="email" maxlength="64" name="subject" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <textarea name="message" maxlength="2000" id="message" class="form-control" rows="6" placeholder="Write your question..." required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1 col-xl-2"></div>
        </div>

    </div>
</div>
<!-- End FAQ -->

<?php include 'include/footer.php'; ?>
