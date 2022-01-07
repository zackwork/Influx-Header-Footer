<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo WP_IHF_URL . "dist/plugin/codemirror-5.65.0/lib/codemirror.js"; ?>"></script>
    <script src="<?php echo WP_IHF_URL . "dist/plugin/codemirror-5.65.0/mode/javascript/javascript.js"; ?>"></script>
    <script src="<?php echo WP_IHF_URL . "dist/plugin/codemirror-5.65.0/mode/php/php.js"; ?>"></script>

    <script src="<?php echo WP_IHF_URL . "dist/plugin/codemirror-5.65.0/addon/fold/foldcode.js"; ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo WP_IHF_URL . 'dist/css/bootstrap.min.css'; ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php echo WP_IHF_URL . 'dist/css/styles.css'; ?>" rel="stylesheet">
    <link href="<?php echo WP_IHF_URL . 'dist/plugin/codemirror-5.65.0/lib/codemirror.css'; ?>" rel="stylesheet">
    <link href="<?php echo WP_IHF_URL . 'dist/plugin/codemirror-5.65.0/theme/eclipse.css'; ?>" rel="stylesheet">
    <link href="<?php echo WP_IHF_URL . 'dist/plugin/codemirror-5.65.0/theme/elegant.css'; ?>" rel="stylesheet">
    <link href="<?php echo WP_IHF_URL . 'dist/plugin/codemirror-5.65.0/theme/dracula.css'; ?>" rel="stylesheet">
</head>

<body>
    <?php include WP_IHF_PATH . "view/class.php"; ?>
    <table class="form-table">
        <form method="POST" action="">
            <tbody>
                <tr>
                    <td>
                        <label>
                            <h1>Influx Header & Footer</h1>
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="textInputHeader" class="form-label">Header Scripts</label>
                            <div class="codearea-control">
                                <textarea name="textInputHeader" class="textareascriptfields" id="textInputHeader"><?php echo stripslashes(get_option('ihf_header_scripts')); ?></textarea>
                                
                            </div>
                            <div id="headerHelp" class="form-text">Only html javascript and php is allowed.</div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="textInputFooter" class="form-label">Footer Scripts</label>
                            <div class="codearea-control">
                                <textarea name="textInputFooter" class="textareascriptfields" id="textInputFooter"><?php echo stripslashes(get_option('ihf_footer_scripts')); ?></textarea>
                            </div>
                            <div id="footerHelp" class="form-text">Only html javascript and php is allowed.</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-primary" type="submit" id="submitInfluxScripts" name="submit_ihf_scripts_update" value="Save" />
                    </td>
                </tr>
            </tbody>
        </form>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo WP_IHF_URL . "dist/js/bootstrap.bundle.min.js"; ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="<?php echo WP_IHF_URL . "dist/js/default.js"; ?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="<?php echo WP_IHF_URL . "dist/umd/popper.min.js"; ?>" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?php echo WP_IHF_URL . "dist/js/bootstrap.min.js;" ?>" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>