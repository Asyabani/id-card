<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/eg-dark.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/eg-dark.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- header -->
    <?php include './includes/partials/header.php'; ?>

    <!-- right-sidebar -->
    <?php include './includes/partials/rightbar.php'; ?>


    <div class="left-side-bar">
        <div class="brand-logo ">
            <a href="#">
                <img src="./assets/img/eg-dark.png" height="25px" width="25px" alt="" class="mx-auto" />

            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="">
                        <a href="control.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-tv"></span><span class="mtext">Control Panel</span> </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle"> <span class="micon bi bi-printer"></span><span
                                class="mtext">Bulk</span> </a>
                        <ul class="submenu">
                            <li><a href="./register-bulk.php">Regisration</a></li>
                        </ul>
                        <ul class="submenu">
                            <li><a href="#" data-backdrop="static" data-toggle="modal" data-target="#print-modal"
                                    type="button">Print</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>

    <!-- content -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Simple step info start -->
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading h4">Step Information<span class="micon bi bi-info"></span></h4>
                    <p class="m-0">
                        1.Download the sample file format below on the mall icon
                    </p>
                    <p class="m-0">
                        2.Fill the employee details in the columns of the file
                    </p>
                    <p class="m-0">
                        3.Save this file as CSV
                    </p>
                    <p class="m-0">
                        4.Upload file
                    </p>
                    <p class="mt-2 pt-2 pb-0 mb-1 border-top border-1 border-secondary">
                        The web as file type will only be note on excelfiles downloadfrom this aplication
                    </p>
                </div>
                <!-- Simple step info End -->
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="">Bulk Registration </h5>
                        <span class="text-danger">*input csv file </span>
                        <form id="" class=" my-4">
                            <input id="fileSelect" type="file" accept=".csv , .xlsx" class=""
                                title="Choose a video please" />
                        </form>
                        <button class="btn btn-primary px-5"> Import</button>
                    </div>
                </div>
            </div>
            <!--footer  -->
            <?php include './includes/partials/footer.php'; ?>
        </div>
    </div>
    <!-- print modal -->
    <div class="modal fade" id="print-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Print ID in Bulk
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="From" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="number" class="form-control form-control-lg" placeholder="To" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <a class="btn btn-primary btn-lg btn-block" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <!-- cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- assets -->
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/sweetalert.js"></script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>