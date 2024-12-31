
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am attempting to integrate Codesys with multiple Moxa ioLogik E1200 series DIO devices, specifically the E1210 and E1211 models. I have successfully configured Codesys to write to the E1211 DOs through the EtherNet/IP I/O Mapping interface. During testing, I have connected some of the DOs directly to DIs,">
    <meta name="keywords" content="codesys integration, moxa iologik e1200, dio devices, e1210 model, e1211 model, ethernet/ip i/o mapping, dos, dis, wireshark captures, modified di values">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-integration-with-moxa-iologik-e1200-dio-devices">
    <title>Troubleshooting Codesys Integration with Moxa ioLogik E1200 DIO Devices | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Codesys Integration with Moxa ioLogik E1200 DIO Devices | Oxmaint Community">
    <meta property="og:description" content="I am attempting to integrate Codesys with multiple Moxa ioLogik E1200 series DIO devices, specifically the E1210 and E1211 models. I have successfully configured Codesys to write to the E1211 DOs through the EtherNet/IP I/O Mapping interface. During testing, I have connected some of the DOs directly to DIs,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-integration-with-moxa-iologik-e1200-dio-devices">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Codesys Integration with Moxa ioLogik E1200 DIO Devices | Oxmaint Community">
    <meta name="twitter:description" content="I am attempting to integrate Codesys with multiple Moxa ioLogik E1200 series DIO devices, specifically the E1210 and E1211 models. I have successfully configured Codesys to write to the E1211 DOs through the EtherNet/IP I/O Mapping interface. During testing, I have connected some of the DOs directly to DIs,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-integration-with-moxa-iologik-e1200-dio-devices"
      },
      "headline": "Troubleshooting Codesys Integration with Moxa ioLogik E1200 DIO Devices",
      "description": "I am attempting to integrate Codesys with multiple Moxa ioLogik E1200 series DIO devices, specifically the E1210 and E1211 models. I have successfully configured Codesys to write to the E1211 DOs through the EtherNet/IP I/O Mapping interface. During testing, I have connected some of the DOs directly to DIs,",
      "author": {
        "@type": "Person",
        "name": "schnepper"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Troubleshooting Codesys Integration with Moxa ioLogik E1200 DIO Devices</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>schnepper</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">308</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">97</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am attempting to integrate Codesys with multiple Moxa ioLogik E1200 series DIO devices, specifically the E1210 and E1211 models. I have successfully configured Codesys to write to the E1211 DOs through the EtherNet/IP I/O Mapping interface. During testing, I have connected some of the DOs directly to DIs, allowing me to observe changes in the corresponding DIs when writing to a DO. The device itself reflects these changes in DI values. Wireshark captures the modified DI values transmitted to Codesys via an implicit message. However, the DI values do not update on the EtherNet/IP I/O Mapping screen for the E1210 DI device. I have utilized an EDS file provided by Moxa. Could it be possible that Codesys is anticipating a "32 bit run/idle header" in the message, despite the "Real time transfer format" being designated as "connection is pure data and is modeless" in EZ-EDS? This scenario would result in Codesys interpreting the initial 4 bytes of data as a header and utilizing the subsequent values as DI values. I am skeptical that this is the root cause. Are there any alternative suggestions or solutions that could be explored?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ensured that the inputs you are using are properly mapped to tags? By default, if the values are not mapped, they will not be scanned. You can adjust this setting by selecting "always in bus cycle task" in the dropdown menu located at the lower right corner of the mapping screen. This will ensure that all inputs are included in the scanning process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Norm, thank you for your suggestions. I have successfully mapped the inputs to variables and have selected Enabled 1. When using Wireshark, I can see the Moxa device sending the IO values, however, the updated values are not appearing in Codesys.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>schnepper</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Question: Why are the DI values not updating on the EtherNet/IP I/O Mapping screen for the Moxa ioLogik E1210 device in Codesys?
   Answer: The issue might be related to the format of the message being sent by Codesys. Check if the "32 bit run/idle header" is expected by Codesys, despite the configuration in EZ-EDS. This could impact how Codesys interprets the data received.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I ensure successful integration between Codesys and Moxa ioLogik E1200 series DIO devices?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Make sure that the devices are properly configured and that the communication protocols match between Codesys and the Moxa devices. Additionally, verify that the EDS file provided by Moxa is correctly implemented in the Codesys setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What troubleshooting steps can be taken if the DI values are not updating correctly in Codesys while using Moxa ioLogik E1200 DIO devices?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Verify the network settings, communication setup, and data format compatibility between Codesys and the Moxa devices. Consider checking for any errors in the configuration or potential mismatches in the data transmission formats.</p>
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
