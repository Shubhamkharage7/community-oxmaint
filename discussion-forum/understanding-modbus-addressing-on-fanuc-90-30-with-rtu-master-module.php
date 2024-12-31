
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In short, I am working with a FAT and we are looking to establish read/write communication with a Fanuc 90-30 using an RTU Master Module. As a first-time user, I am unsure of how the Modbus addressing works on the device. Is there a standardized equivalent Modbus address for">
    <meta name="keywords" content="modbus addressing, fanuc 90-30, rtu master module, communication setup, modbus communication, modbus protocol, modbus registers, modbus function codes, modbus rtu, input addressing, output addressing">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-on-fanuc-90-30-with-rtu-master-module">
    <title>Understanding Modbus Addressing on Fanuc 90-30 with RTU Master Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Modbus Addressing on Fanuc 90-30 with RTU Master Module | Oxmaint Community">
    <meta property="og:description" content="In short, I am working with a FAT and we are looking to establish read/write communication with a Fanuc 90-30 using an RTU Master Module. As a first-time user, I am unsure of how the Modbus addressing works on the device. Is there a standardized equivalent Modbus address for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-on-fanuc-90-30-with-rtu-master-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Modbus Addressing on Fanuc 90-30 with RTU Master Module | Oxmaint Community">
    <meta name="twitter:description" content="In short, I am working with a FAT and we are looking to establish read/write communication with a Fanuc 90-30 using an RTU Master Module. As a first-time user, I am unsure of how the Modbus addressing works on the device. Is there a standardized equivalent Modbus address for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-on-fanuc-90-30-with-rtu-master-module"
      },
      "headline": "Understanding Modbus Addressing on Fanuc 90-30 with RTU Master Module",
      "description": "In short, I am working with a FAT and we are looking to establish read/write communication with a Fanuc 90-30 using an RTU Master Module. As a first-time user, I am unsure of how the Modbus addressing works on the device. Is there a standardized equivalent Modbus address for",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">Understanding Modbus Addressing on Fanuc 90-30 with RTU Master Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">76</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">5</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In short, I am working with a FAT and we are looking to establish read/write communication with a Fanuc 90-30 using an RTU Master Module. As a first-time user, I am unsure of how the Modbus addressing works on the device. Is there a standardized equivalent Modbus address for inputs like %AQ0001 and %AI0019, such as 40001 and 41019? Additionally, I am unsure where the configuration for the RTU module is located and if the communication is functioning properly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the part number of the RTU master module? If the PLC is designated as the RTU master, it will require logic to manage the communication process. Typically, this is achieved through the use of a COMM_REQ instruction. The settings within the COMM_REQ command determine whether it is a read or write operation. For write commands, the parameter settings specify which PLC memory addresses should be written to and the corresponding address on the RTU slave device. Conversely, for read commands, the parameter settings determine which memory address on the slave device should be accessed, and where the data should be stored within the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The IC693CMM311 module is experiencing issues with 2 COMMREQ tasks (101 and 102), causing frustration for the user. The problem lies in the use of a BLKMOVINT function to remap addresses from the RTU address 41000 to an internal address (%AI0017). The output tag (Q) merely reflects the input settings and does not affect anything else, leaving the user puzzled and seeking a solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was unaware that the CMM311 module supports RTU master functionality. As per GFK-2220F from 2015, only the CPU363 serial port is listed as compatible with RTU master. Considering that the CMM311 was a well-established product by 2015, this information is surprising. 

Can you provide the value of the SYSID parameter for COMMREQ commands? The SYSID parameter is crucial as it determines the rack and slot number of the module where the COMMREQ instruction is targeted. For instance, a SYSID of 2 would indicate rack 0, slot 2. Which module is installed in the slot indicated by the SYSID?

Additionally, the BLKMOV instruction transfers seven constants to seven consecutive memory addresses, with the first address displayed at the Q node of the BLKMOV. If you could share the logic rungs related to the COMMREQ instructions, I can help interpret them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the standardized equivalent Modbus address for Fanuc 90-30 inputs like %AQ0001 and %AI0019?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there is a standardized equivalent Modbus address scheme for Fanuc 90-30 inputs. For example, %AQ0001 would correspond to Modbus address 40001 and %AI0019 would correspond to Modbus address 41019.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Where can I find the configuration settings for the RTU Master Module when communicating with a Fanuc 90-30?</h4>
<p class='text-muted'><strong>Answer:</strong> - The configuration settings for the RTU Master Module when communicating with a Fanuc 90-30 are typically located in the programming software used to interface with the RTU module. You may need to refer to the specific software documentation or user manual for detailed instructions on configuring the module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I ensure that the communication between the RTU Master Module and the Fanuc 90-30 is functioning properly?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure proper communication between the RTU Master Module and the Fanuc 90-30, you can perform a series of tests such as reading and writing data to verify the connection, checking for any error messages or communication status indicators, and monitoring the data exchange between the devices to confirm successful communication. Additionally, referring to the device manuals for troubleshooting guidelines can be helpful in diagnosing any issues.</p>
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
