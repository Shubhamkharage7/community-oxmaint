
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking to transfer the program from my CPU317TF-2 DP to my PC by connecting to CP 343-1 Advanced, which has LAN ports while the CPU does not. They are both installed in the same rack, with the CPU in slot 02/03 and the CP in">
    <meta name="keywords" content="siemens plc, troubleshooting upload, cp 343-1, lan ports, cpu317tf-2 dp, profibus cable, error message, downloading configuration, backup data, mpi cable, local mpi address, transmission rate, connection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-upload-from-siemens-plc-using-cp-343-1-with-lan-ports">
    <title>Troubleshooting Upload from Siemens PLC using CP 343-1 with LAN Ports | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Upload from Siemens PLC using CP 343-1 with LAN Ports | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking to transfer the program from my CPU317TF-2 DP to my PC by connecting to CP 343-1 Advanced, which has LAN ports while the CPU does not. They are both installed in the same rack, with the CPU in slot 02/03 and the CP in">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-upload-from-siemens-plc-using-cp-343-1-with-lan-ports">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Upload from Siemens PLC using CP 343-1 with LAN Ports | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking to transfer the program from my CPU317TF-2 DP to my PC by connecting to CP 343-1 Advanced, which has LAN ports while the CPU does not. They are both installed in the same rack, with the CPU in slot 02/03 and the CP in">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-upload-from-siemens-plc-using-cp-343-1-with-lan-ports"
      },
      "headline": "Troubleshooting Upload from Siemens PLC using CP 343-1 with LAN Ports",
      "description": "Hello everyone, I am looking to transfer the program from my CPU317TF-2 DP to my PC by connecting to CP 343-1 Advanced, which has LAN ports while the CPU does not. They are both installed in the same rack, with the CPU in slot 02/03 and the CP in",
      "author": {
        "@type": "Person",
        "name": "yam"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-22",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Troubleshooting Upload from Siemens PLC using CP 343-1 with LAN Ports</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>yam</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">453</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">39</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking to transfer the program from my CPU317TF-2 DP to my PC by connecting to CP 343-1 Advanced, which has LAN ports while the CPU does not. They are both installed in the same rack, with the CPU in slot 02/03 and the CP in slot 4. Since the CPU does not have LAN connectivity, its IP address cannot be displayed, as it only uses a Profibus cable for communication. Currently, I am encountering an error message stating that "Downloading the configuration is only possible via a CPU...." with only the CP address showing up. I believe it is possible to back up data from the CP in this scenario, as I have done it previously, although I cannot recall the exact steps due to being preoccupied with resolving the issue. I have also attempted using an MPI cable, but I am receiving a different error message stating, "Online: The local MPI address for the programming device/PC is higher than the maximum node address or the wrong transmission rate or wrong interrupt is set." The address is currently set to 0 and the transmission rate is 185kbs. I would appreciate any assistance in resolving these connection problems. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you seeking assistance with downloading a program using the CP343-1 lean communication module? Do you need sample programs or ideas on how to upload a program from a 313c CPU? Learn how to modify, monitor, and download/upload programs using the CP343 module with the help of this thread. Your input will be greatly appreciated. Thank you, and best regards! Visit www.plctalk.net for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. FAQ: How can I transfer the program from my CPU317TF-2 DP to my PC using CP 343-1 Advanced with LAN ports?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To transfer the program, you need to ensure that the CP 343-1 Advanced is configured correctly. Check the settings for both devices, such as IP addresses, communication protocols, and connection methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: Why am I encountering an error message stating "Downloading the configuration is only possible via a CPU" when trying to transfer data?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error message indicates that the current setup might not be allowing direct configuration download from the CP 343-1 Advanced. Verify the configuration settings and make sure the communication setup is correct.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I resolve the error message "Online: The local MPI address for the programming device/PC is higher than the maximum node address or the wrong transmission rate or wrong interrupt is set" when using an MPI cable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Check the MPI cable settings, such as the transmission rate and addresses. Ensure that the settings match the requirements of both the CP 343-1 Advanced and the programming device/PC to establish a successful connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: Is it possible to back up data from the CP 343-1 Advanced even if the CPU317TF-2 DP does not have LAN connectivity?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to back up data from the CP 343-1 Advanced even without LAN connectivity on</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <script src="like-view-counter.js"></script>
    </div>
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
