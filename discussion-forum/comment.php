<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comment - Q&A Community">
    <meta name="keywords" content="Comment, Attachment, Guide, Q&A, Community">
    <meta name="author" content="oxmaint">
    <title>Comment</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />

    <style>
        #loading-screen {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 1000;
        }

        #loading-text {
            font-size: 24px;
        }

        #register {
            padding-top: 5rem !important;
            margin-top: -5rem !important;
        }

        #about-event {
            padding-top: 5rem !important;
            margin-top: -5rem !important;
        }

        #otherCountryInput {
            display: none;
            margin-top: 10px;
        }
    </style>

    <!-- Text Editor -->
    <link rel="stylesheet" href="./../assets/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="./../assets/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='./../assets/richtexteditor/plugins/all_plugins.js'></script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>

<body>
    <div class="content-wrapper">
        <?php include "../include/header.php" ?>
        <!-- /header -->

        <section class="wrapper">
            <div class="container py-4 py-md-6">
                <div class="row card bg-soft-primary">
                    <div class="col-xl-12">
                        <div class="row p-4">
                            <div id="loading-screen">
                                <div id="loading-text">Loading...</div>
                            </div>
                            <div class="col-xl-8">
                                <form class="text-start mb-3">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="Name" id="loginName" required>
                                        <label for="loginName">Name*</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" placeholder="Email" id="loginEmail" required>
                                        <label for="loginEmail">Business Email*</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <textarea id="div_editor1" name="body" style="max-width: 100%; height: 350px;"></textarea>
                                    </div>
                                    <a href="javascript:void(0);" onclick=funGetDetails() class="btn btn-primary rounded btn-login w-100 mb-2">Comment</a>
                                    <!--<button type="submit" class="btn btn-primary rounded btn-login w-100 mb-2" onclick=funGetDetails()>Comment</button>-->
                                </form>
                                <!-- /form -->
                            </div>
                            <!--/column -->
                            <div class="col-xl-4 mx-auto">
                                <!-- <p id="currentPageUrl"></p> -->
                                <h2 class="display-3">Get in Touch</h2>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Address</h5>
                                        <address>440 N. Wolfe Road, Sunnyvale, CA 94085, USA</address>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p class="mb-0"><a href="tel:+1 786 891 1010" class="text-body">+1 786 891 1010</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:contact@oxmaint.com" class="text-body">contact@oxmaint.com</a>
                                        </p>
                                    </div>
                                </div>
                                <nav class="nav d-flex justify-content-center mt-5 social social-dark">
                                    <a href="https://www.facebook.com/profile.php?id=100088709356711" target="_blank"><i class="uil uil-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/oxmaintapp/" target="_blank"><i class="uil uil-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/oxmaint/" target="_blank"><i class="uil uil-linkedin"></i></a>
                                    <a href="https://www.youtube.com/channel/UCcZOKgJbv0Qoey6R6LM8_Nw" target="_blank"><i class="uil uil-youtube"></i></a>
                                </nav>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>

    <?php include "../include/footer.php" ?>
    <!-- /footer -->

    <script>
        function getQueryParam(param) {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        var currentPageUrl = getQueryParam('url');
        document.getElementById('currentPageUrl').textContent = 'Current Page URL: ' + currentPageUrl;
    </script>

    <script>
        var editor1 = new RichTextEditor("#div_editor1", { editorResizeMode: "height" });
    </script>

    <script>
        function funGetDetails() {

            var currentURL = window.location.href;

            let name = document.getElementById("loginName").value;
            let email = document.getElementById("loginEmail").value;
            let content = document.getElementById("div_editor1").value;


            if (name == "" || name == null) { alert("Please Fill Name"); return; };
            if (email == "" || email == null) { alert("Please Fill Business Email"); return; };
            if (content == "" || content == null) { alert("Please Fill Comment"); return; };

            console.log(name);
            console.log(email);
            console.log(content);

            // alert("dadadadas");

            showLoadingScreen();
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://prod-77.westeurope.logic.azure.com:443/workflows/dd708a31f25d4910b4347db756a571ad/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=oNlp3xtRqkzhe3zInRx9QDvOlSVbR7vR3n0bZxdX0o0", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            var data = {
                "name": name,
                "email": email,
                "content": content,
                "page_url": currentURL
            };

            xhr.onreadystatechange = function () {
                console.log("Get")
                console.log(xhr)
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Your comment has been submitted for review and will be updated soon.");
                    document.getElementById("loading-screen").style.display = "none";

                    // Clear Form inputs
                    document.getElementById("loginName").value = "";
                    document.getElementById("loginEmail").value = "";
                    document.getElementById("div_editor1").value = "";
                    editor1.setHTML("");

                }
            };


            xhr.send(JSON.stringify(data));
            return false; // Prevent default form submission
        };

        function showLoadingScreen() {
            // Display the loading screen
            document.getElementById("loading-screen").style.display = "flex";

        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>

</html>