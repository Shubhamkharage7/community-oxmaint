
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! I am currently testing out Rockwells AOI for reading Modbus TCP, specifically version 2.04. The connection to the Modbus server appears to be successful. I am attempting to read holding register 1000 using function code 3 and a count of 3. When using Modbus Poll, I am">
    <meta name="keywords" content="rockwell, modbus tcp, aoi, reading, holding register 1000, modbus poll, studio 5000, visibility, troubleshooting, function code 3, data, monitoring, connection, localaddress, setup, s">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-modbus-tcp-aoi-for-reading-modbus-tcp-version-2-04-need-help-with-holding-register-1000-reading-and-studio-5000-visibility">
    <title>Troubleshooting Rockwell Modbus TCP AOI for Reading Modbus TCP Version 2.04 - Need Help with Holding Register 1000 Reading and Studio 5000 Visibility | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Rockwell Modbus TCP AOI for Reading Modbus TCP Version 2.04 - Need Help with Holding Register 1000 Reading and Studio 5000 Visibility | Oxmaint Community">
    <meta property="og:description" content="Hey there! I am currently testing out Rockwells AOI for reading Modbus TCP, specifically version 2.04. The connection to the Modbus server appears to be successful. I am attempting to read holding register 1000 using function code 3 and a count of 3. When using Modbus Poll, I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-modbus-tcp-aoi-for-reading-modbus-tcp-version-2-04-need-help-with-holding-register-1000-reading-and-studio-5000-visibility">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Rockwell Modbus TCP AOI for Reading Modbus TCP Version 2.04 - Need Help with Holding Register 1000 Reading and Studio 5000 Visibility | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! I am currently testing out Rockwells AOI for reading Modbus TCP, specifically version 2.04. The connection to the Modbus server appears to be successful. I am attempting to read holding register 1000 using function code 3 and a count of 3. When using Modbus Poll, I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-modbus-tcp-aoi-for-reading-modbus-tcp-version-2-04-need-help-with-holding-register-1000-reading-and-studio-5000-visibility"
      },
      "headline": "Troubleshooting Rockwell Modbus TCP AOI for Reading Modbus TCP Version 2.04 - Need Help with Holding Register 1000 Reading and Studio 5000 Visibility",
      "description": "Hey there! I am currently testing out Rockwells AOI for reading Modbus TCP, specifically version 2.04. The connection to the Modbus server appears to be successful. I am attempting to read holding register 1000 using function code 3 and a count of 3. When using Modbus Poll, I am",
      "author": {
        "@type": "Person",
        "name": "BeepBob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Troubleshooting Rockwell Modbus TCP AOI for Reading Modbus TCP Version 2.04 - Need Help with Holding Register 1000 Reading and Studio 5000 Visibility</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1004</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">486</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! I am currently testing out Rockwell's AOI for reading Modbus TCP, specifically version 2.04. The connection to the Modbus server appears to be successful. I am attempting to read holding register 1000 using function code 3 and a count of 3. When using Modbus Poll, I am able to read the data without any issues. However, when monitoring in Studio 5000, the data is not visible. The transaction code indicates a successful connection with a "1". Is the data supposed to be under the .LocalAddress parameter? I noticed that the default value for .LocalAddress is "0" - should I change this? The manual did not provide clear guidance on this. Could someone please review my setup? I have attached a screenshot for reference.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Easily access your data by updating the .LocalAddress parameter in Gate_01_Data.HoldRegisters_4xxx. With a simple adjustment to 5, your data will now reside in Gate_01_Data.HoldRegisters_4xxx[5] - Gate_01_Data.HoldRegisters_4xxx[7].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While working with Gate_01_Data, your data will be stored between the indexes HoldRegisters_4xxx[0] to HoldRegisters_4xxx[2]. If you decide to modify the .LocalAddress parameter to a value like 5, then your data will be located between HoldRegisters_4xxx[5] to HoldRegisters_4xxx[7]. 

Indeed, the manual did not provide this specific information, so thank you for bringing it up. A query arises when exploring Gate_01.Data - it displays a vast array of registers. Is there an alternative within the AOI to reduce the number of tags generated?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to exceed the maximum of 5 transactions per AOI as stated in the manual by modifying the raC_UDT_ModbusClientTransaction[5] array size? Has anyone successfully increased the transaction limit of this AOI through software modifications?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 5 transaction limit is set based on performance, as transactions are carried out sequentially. The array size can be adjusted, and the AOI will adapt to this change automatically. When it comes to data size, you can modify the number of registers and the code will validate it. However, if you modify Boolean arrays to 0 and 1, you will need to manually define limits. Despite this, booleans require minimal memory space and can be kept unchanged if desired.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the data not visible in Studio 5000 when using Rockwell's AOI for reading Modbus TCP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This could be due to configuration settings such as the .LocalAddress parameter. Check if the data is supposed to be under the .LocalAddress parameter and consider changing the default value if necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the issue of not being able to view the data in Studio 5000 when the Modbus Poll shows successful data reading?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Review your setup and configuration in Studio 5000, ensuring that all parameters are correctly set up, especially the .LocalAddress parameter. Make sure to follow any specific guidelines provided in the manual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should be taken when experiencing discrepancies between data visibility in Modbus Poll and Studio 5000 using Rockwell's AOI for Modbus TCP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Double-check the configuration settings in Studio 5000, including the .LocalAddress parameter, to ensure that the data is being correctly mapped and displayed. Consider reaching out to Rockwell support for further assistance if needed.</p>
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
