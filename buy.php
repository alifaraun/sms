<?php include 'include/header.php'; ?>

<div class="buy">

    <!-- Start pricing -->
    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-md-12 col-xl-10">
                    <h1 class="buy-price-title">Prices</h1>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">One Device</h4>
                                    <h1>$200 </h1>
                                    <p class="card-text">You can buy another keys after time with discount</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">2 Devices</h4>
                                    <h1>$350 </h1>
                                    <p class="card-text">You can buy another keys after time with discount</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">More than 2 devices</h4>
                                    <h1 class="price-active">$100 </h1>
                                    <p class="card-text">After buy $200 for first device , every another device going to be $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    </div>
    <!-- End pricing -->

    <!-- Start Send request -->
    <div class="buy-send-request container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-12 col-lg-8">
                <div class="card">
                    <div class="card-header text-center bg-primary text-light">
                        Enter your order information and we will respond to your email as soon as possible
                    </div>
                    <div class="card-body">
                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" maxlength="64" name="name" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="number" name="name" class="form-control" placeholder="Count keys" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="64" name="subject" class="form-control" placeholder="Some information about you" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="message" maxlength="2000" id="message" class="form-control" rows="6" placeholder="Write your message..." required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- End send request -->

</div>

<?php include 'include/footer.php'; ?>
