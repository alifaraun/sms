<?php include 'include/header.php'; ?>

<!-- Start Support -->
<!-- Start Contact us -->
<div class="contact-us">
    <div class="container text-center">
        <div class="contact-us-titlle">
            <h2> Contact us </h2>
            <p>If you ever have any questions,suggestions,requests or notes , please do not hesitate to contact us</p>
        </div>
        <p class="contact-us-q-exists bg-light text-dark">If you have question please see <a href="" class="btn btn-primary">FAQ</a> maybe you find answer for your question</p>
        <p class="contact-us-q-exists bg-primary">If you want explain something about program please see <a href="" class="btn btn-dark">Explanations</a> maybe you find answer for your question</p>
        <div class="row text-left">
            <div class="col-md-4 col-xl-6">
                <div class="contact-us-notes">
                    <p>If you want to Evaluation ,Report an error,service, buy program , update program as want or suggest something , please do not hesitate to contact us</p>
                    <p>Help us to give users better services by send us notes</p>
                    <p>We want our customers to be happy <i class="fa fa-smile-o"></i></p>
                </div>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> Address: Libya Tripoli</li>
                    <li><i class="fa fa-phone"></i> Phone: +32392933838</li>
                    <li><i class="fa fa-envelope"></i> E-mail:<a href="mailto:info@sysytem.com?subject=Contact"> mail@email.com</a></li>
                    <li><i class="fa fa-globe"></i> Website:<a href=""> www.alfarouk.com</a></li>
                </ul>
            </div>
            <div class="col-md-8 col-xl-6">
                <div class="contact-us-warning">* If you would like to receive reply please write your e-mail</div>
                <form id="main-contact-form" name="contact-form" method="post" action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" maxlength="64" name="name" class="form-control" placeholder="Name or Email" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control">
                                <option selected>Choose...</option>
                                <option>Purchase order</option>
                                <option>Service request</option>
                                <option>Evaluation</option>
                                <option>Report an error</option>
                                <option>Note</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" maxlength="64" name="subject" class="form-control" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                        <textarea name="message" maxlength="2000" id="message" class="form-control" rows="6" placeholder="Write your message..." required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Contact us -->

<!-- End Support -->

<?php include 'include/footer.php'; ?>
