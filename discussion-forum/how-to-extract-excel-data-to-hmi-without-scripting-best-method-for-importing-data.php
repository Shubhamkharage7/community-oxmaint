
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! I have a question about importing data from individual cells in an Excel file to a HMI without the use of scripts. I am looking to have users input temperature and pressure data into a saved Excel file and have the system extract this information to display">
    <meta name="keywords" content="extract excel data, hmi data import, excel to hmi, excel cell data extraction, hmi tag display, data input method, temperature and pressure input, plc test data, basic kp700 hmi panel, non-script method, data extraction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-extract-excel-data-to-hmi-without-scripting-best-method-for-importing-data">
    <title>How to extract Excel data to HMI without scripting: Best method for importing data | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to extract Excel data to HMI without scripting: Best method for importing data | Oxmaint Community">
    <meta property="og:description" content="Hello there! I have a question about importing data from individual cells in an Excel file to a HMI without the use of scripts. I am looking to have users input temperature and pressure data into a saved Excel file and have the system extract this information to display">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-extract-excel-data-to-hmi-without-scripting-best-method-for-importing-data">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to extract Excel data to HMI without scripting: Best method for importing data | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! I have a question about importing data from individual cells in an Excel file to a HMI without the use of scripts. I am looking to have users input temperature and pressure data into a saved Excel file and have the system extract this information to display">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-extract-excel-data-to-hmi-without-scripting-best-method-for-importing-data"
      },
      "headline": "How to extract Excel data to HMI without scripting: Best method for importing data",
      "description": "Hello there! I have a question about importing data from individual cells in an Excel file to a HMI without the use of scripts. I am looking to have users input temperature and pressure data into a saved Excel file and have the system extract this information to display",
      "author": {
        "@type": "Person",
        "name": "DRD_D2H"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">How to extract Excel data to HMI without scripting: Best method for importing data</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">481</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">21</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! I have a question about importing data from individual cells in an Excel file to a HMI without the use of scripts. I am looking to have users input temperature and pressure data into a saved Excel file and have the system extract this information to display on a HMI tag. This data will be used to perform individual tests by the PLC. I am working with a Basic KP700 HMI panel and have noticed that scripting is not available. Is there an alternative method to achieve this task? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize Python with Pylogix for Allen-Bradley PLCs and Openpyxl for Excel file management. When working with PLCs, ensure you only use PLC tags and not HMI tags. Be sure to specify the brand of PLC you are working with.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the confusion, but the Siemens S7-1200 PLC is the device in question. I am curious to know if the PLC has the capability to run these scripts independently or if they are limited to function blocks for processing?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I lack personal experience with Siemens, I recommend checking out python-snap7, a Python package designed for Siemens, as well as openpyxl, a Python package tailored for Excel spreadsheets. With these tools, you can easily transfer data from your Excel file to your PLC tags. For step-by-step guidance, you can find helpful tutorials on YouTube showcasing practical examples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Where is the Excel file saved?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using a Personal Computer</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The S7-1200 offers multiple methods to request or accept data. One option is to save the data to an FTP Server program on the PC, allowing the S7-1200 to retrieve the data from there. Another option is to utilize Node-Red on the PC, which can extract data from an Excel file and transmit it directly to the PLC. Additionally, the PLC can also be set to wait for data on an Ethernet port, with the PC sending out the data when ready. Python language can also be utilized for data retrieval and transmission. While these methods are discussed, there may be other approaches available. For more information on connecting a PLC S7-1200 with Node-Red, check out this video tutorial: "PLC S7-1200 connected with Node-Red". Please note that the Siemens Basic HMI panels' capabilities were not covered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you own a V4 1200 PLC and Portal manufactured within the past five years, you can easily enable OPC UA functionality. This feature allows seamless data transfer between Excel and the PLC. For more information and step-by-step instructions, visit SIOSsupport.industry.siemens.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Can I extract Excel data to a HMI without scripting on a Basic KP700 HMI panel?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can achieve this without scripting. One alternative method could be using Excel's built-in export functionalities, such as saving the Excel file in a format compatible with the HMI or using Excel's data import/export features.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can users input data into an Excel file for extraction to a HMI tag?</h4>
<p class='text-muted'><strong>Answer:</strong> - Users can input temperature and pressure data into specific cells in the Excel file. The system can then extract this information to display on the HMI tag for further use in performing tests by the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some ways to import data from individual cells in Excel to a HMI for testing purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - In addition to scripting, you can explore options like setting up a data link between the Excel file and the HMI, using Excel's data export features, or configuring the HMI panel to read data directly from the Excel file.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to automate the extraction of Excel data to the HMI for real-time monitoring?</h4>
<p class='text-muted'><strong>Answer:</strong> - While scripting may not be an option on the Basic KP700 HMI panel, you can explore setting up scheduled data imports from Excel to the HMI or configuring the HMI to refresh data from the Excel file periodically for near real-time monitoring.</p>
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
