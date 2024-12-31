
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! We recently received a work cell from an integrator that sends saved scanning data from the PLC to the HMI (Panel View Plus). However, when I view this in Factory View, the file location appears to be \Temp\Template.csv, but I am unsure of the exact process being">
    <meta name="keywords" content="plc data transfer, panelview plus, excel sheet editing, troubleshooting, hmi integration, factory view, scanning data, file location, data columns, incorrect entries, data transfer process, excel sheet generation, editing process, saved data, integrator">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-data-transfer-to-panelview-plus-and-excel-sheet-editing">
    <title>Troubleshooting PLC Data Transfer to PanelView Plus and Excel Sheet Editing | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC Data Transfer to PanelView Plus and Excel Sheet Editing | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! We recently received a work cell from an integrator that sends saved scanning data from the PLC to the HMI (Panel View Plus). However, when I view this in Factory View, the file location appears to be \Temp\Template.csv, but I am unsure of the exact process being">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-data-transfer-to-panelview-plus-and-excel-sheet-editing">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC Data Transfer to PanelView Plus and Excel Sheet Editing | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! We recently received a work cell from an integrator that sends saved scanning data from the PLC to the HMI (Panel View Plus). However, when I view this in Factory View, the file location appears to be \Temp\Template.csv, but I am unsure of the exact process being">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-data-transfer-to-panelview-plus-and-excel-sheet-editing"
      },
      "headline": "Troubleshooting PLC Data Transfer to PanelView Plus and Excel Sheet Editing",
      "description": "Hello everyone! We recently received a work cell from an integrator that sends saved scanning data from the PLC to the HMI (Panel View Plus). However, when I view this in Factory View, the file location appears to be \Temp\Template.csv, but I am unsure of the exact process being",
      "author": {
        "@type": "Person",
        "name": "Foxtrot2050"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Troubleshooting PLC Data Transfer to PanelView Plus and Excel Sheet Editing</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Foxtrot2050</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">249</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">200</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! We recently received a work cell from an integrator that sends saved scanning data from the PLC to the HMI (Panel View Plus). However, when I view this in Factory View, the file location appears to be \Temp\Template.csv, but I am unsure of the exact process being used to achieve this. My main concern is how to edit this Excel sheet properly. The data is not being saved in the correct columns and some entries are incorrect. It seems like the PLC is transferring the data to the HMI, which then generates the Excel sheet. Any advice on how to address this issue would be highly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the Integrator may have utilized the Read Logix tag values and saved them to a .csv file using the Recipe2 Enhanced ActiveX Control. While I haven't personally used this control, I anticipate that the ActiveX configuration will specify which tag data is being read and where it is stored in the .csv file. In FactoryTalk View Studio ME (V12), you can access help by opening Help > Contents > FactoryTalk View ME Help from the Menu. Search for ActiveX to learn more about using ActiveX controls. When you scroll down the results, you will find instructions on how to access help for the Recipe 2 Enhanced ActiveX control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with @Mike__TI's point. I am currently seeking guidance on how to make edits to an Excel document. I have gone through the available resources but have not found much information on this specific issue. Can anyone provide assistance on editing Excel documents?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Foxtrot2050</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After delving into the rabbit hole, I used FTP FileZilla software to uncover the file and successfully make the necessary changes. Big thanks to @Mike__T for pointing me in the right direction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Foxtrot2050</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I edit the Excel sheet generated from PLC data transfer to PanelView Plus?</h4>
<p class='text-muted'><strong>Answer:</strong> - To edit the Excel sheet generated from the PLC data transfer to PanelView Plus, you may need to understand the process flow involved in transferring the data from the PLC to the HMI and then to the Excel sheet. You can start by checking the data transfer mechanism and the configuration settings in the PLC and HMI software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the data not saved in the correct columns in the Excel sheet?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of data not being saved in the correct columns in the Excel sheet could be due to incorrect mapping or configuration settings in the PLC or HMI software. It is important to review the data transfer process and ensure that the correct data mapping is in place to accurately display the data in the Excel sheet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot incorrect entries in the Excel sheet generated from the PLC data transfer?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting incorrect entries in the Excel sheet generated from the PLC data transfer may involve checking the data integrity at each stage of the transfer process. You can verify the data at the PLC level, the HMI level, and the Excel sheet level to identify where the discrepancies are occurring and make the necessary adjustments to correct them.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take to ensure the accuracy of the data transferred from the PLC to the Excel sheet via PanelView Plus?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure the accuracy of the data transferred from the PLC to the Excel sheet via</p>
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
