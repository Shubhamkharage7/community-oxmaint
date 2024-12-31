
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our team is looking to save PanelView log data onto a USB stick in the form of a csv file using the MEDataStore Plus feature. Attached below is a snapshot of the MEDataStore Plus configuration. The issue we are facing is that the application is unable to log data">
    <meta name="keywords" content="panelview log data, usb stick, csv file, medatastore plus, medatastore plus configuration, file path, file location, error message, troubleshooting, application execution, log data, copy file location path, file location snapshot, error message">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-data-log-configuration-for-panelview-with-medatastore-plus">
    <title>Troubleshooting FactoryTalk Data Log Configuration for PanelView with MEDataStore Plus | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk Data Log Configuration for PanelView with MEDataStore Plus | Oxmaint Community">
    <meta property="og:description" content="Our team is looking to save PanelView log data onto a USB stick in the form of a csv file using the MEDataStore Plus feature. Attached below is a snapshot of the MEDataStore Plus configuration. The issue we are facing is that the application is unable to log data">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-data-log-configuration-for-panelview-with-medatastore-plus">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk Data Log Configuration for PanelView with MEDataStore Plus | Oxmaint Community">
    <meta name="twitter:description" content="Our team is looking to save PanelView log data onto a USB stick in the form of a csv file using the MEDataStore Plus feature. Attached below is a snapshot of the MEDataStore Plus configuration. The issue we are facing is that the application is unable to log data">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-data-log-configuration-for-panelview-with-medatastore-plus"
      },
      "headline": "Troubleshooting FactoryTalk Data Log Configuration for PanelView with MEDataStore Plus",
      "description": "Our team is looking to save PanelView log data onto a USB stick in the form of a csv file using the MEDataStore Plus feature. Attached below is a snapshot of the MEDataStore Plus configuration. The issue we are facing is that the application is unable to log data",
      "author": {
        "@type": "Person",
        "name": "ethan.HVAC.888"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Troubleshooting FactoryTalk Data Log Configuration for PanelView with MEDataStore Plus</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ethan.HVAC.888</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">194</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">96</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our team is looking to save PanelView log data onto a USB stick in the form of a csv file using the MEDataStore Plus feature. Attached below is a snapshot of the MEDataStore Plus configuration. The issue we are facing is that the application is unable to log data due to difficulties in setting the file path. Even after attempting to copy the file location path, the problem persists. I have included screenshots of the file location as well as the error message encountered during application execution. Any assistance in troubleshooting this issue would be greatly appreciated. MEDataStore setup: file location: error message when running application:</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When accessing the USB drive, refer to it as "USB Storage" followed by your specific folder name, rather than assigning it the drive letter "D". The folder name may vary depending on the number of devices connected, such as USB Storage2 or USB Storage3. In my experience, I have always stuck to using USB Storage as the folder name.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Operaghost's suggestion, it is recommended to address the USB drive not as drive "D", but as \USB Storage\YourFolderName. The specific name for the USB Storage may vary depending on the number of devices connected, such as USB Storage, USB Storage2, or USB Storage3. Despite following your guidance to utilize \USB Storage\foldername as the file location, I encountered the same issue of an invalid file path. Should I empty the folder containing an excel file for it to automatically populate? Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ethan.HVAC.888</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to include the file name when saving. While I used a folder name as an example, it is not mandatory. The path could simply be \USB Storage\YourFileName.csv. In your case, you would substitute the "D:" with "USBStorage\". It is likely that the quotes and brackets in your example are essential for the process. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  How can I save PanelView log data as a csv file onto a USB stick using MEDataStore Plus feature?</h4>
<p class='text-muted'><strong>Answer:</strong> To save PanelView log data onto a USB stick in csv format using MEDataStore Plus, you need to configure the file location path within the MEDataStore setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be the reason for the application being unable to log data when using MEDataStore Plus?</h4>
<p class='text-muted'><strong>Answer:</strong> The application might be facing difficulties in setting the file path correctly within the MEDataStore Plus configuration, which can lead to logging issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the issue of setting the file path in MEDataStore Plus for PanelView log data logging?</h4>
<p class='text-muted'><strong>Answer:</strong> If you are encountering difficulties in setting the file path for PanelView log data logging, you may need to carefully review the file location configuration and ensure it is correctly specified to resolve the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why does the problem persist even after attempting to copy the file location path for PanelView log data logging using MEDataStore Plus?</h4>
<p class='text-muted'><strong>Answer:</strong> The problem may still persist after copying the file location path if there are errors in the path specification or if the file location is not accessible or properly configured within the MEDataStore setup.</p>
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
