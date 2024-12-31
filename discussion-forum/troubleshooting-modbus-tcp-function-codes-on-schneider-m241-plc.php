
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I recently bought a Schneider M241 PLC for a new product line were developing. Its affordable and programmed using CODESYS (also known as Schneider Machine Expert). While waiting for the PLC to arrive, I started working on the program and encountered a significant issue related to reading">
    <meta name="keywords" content="schneider m241 plc, modbus tcp function codes, troubleshooting modbus tcp, schneider machine expert, modbus tcp slave device, modbus function codes, codesys programming, generic modbus tcp slave, modbus tcp channel configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-function-codes-on-schneider-m241-plc">
    <title>Troubleshooting Modbus TCP Function Codes on Schneider M241 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus TCP Function Codes on Schneider M241 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I recently bought a Schneider M241 PLC for a new product line were developing. Its affordable and programmed using CODESYS (also known as Schneider Machine Expert). While waiting for the PLC to arrive, I started working on the program and encountered a significant issue related to reading">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-function-codes-on-schneider-m241-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus TCP Function Codes on Schneider M241 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I recently bought a Schneider M241 PLC for a new product line were developing. Its affordable and programmed using CODESYS (also known as Schneider Machine Expert). While waiting for the PLC to arrive, I started working on the program and encountered a significant issue related to reading">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-function-codes-on-schneider-m241-plc"
      },
      "headline": "Troubleshooting Modbus TCP Function Codes on Schneider M241 PLC",
      "description": "Hello everyone! I recently bought a Schneider M241 PLC for a new product line were developing. Its affordable and programmed using CODESYS (also known as Schneider Machine Expert). While waiting for the PLC to arrive, I started working on the program and encountered a significant issue related to reading",
      "author": {
        "@type": "Person",
        "name": "ess-prog-ie"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Troubleshooting Modbus TCP Function Codes on Schneider M241 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ess-prog-ie</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">484</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">259</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I recently bought a Schneider M241 PLC for a new product line we're developing. It's affordable and programmed using CODESYS (also known as Schneider Machine Expert). While waiting for the PLC to arrive, I started working on the program and encountered a significant issue related to reading data from a Modbus TCP slave device. The device uses discrete, holding, and input registers that need to be accessed using Modbus function codes 02, 03, and 04. 

I followed online guides to set up the Slave device by adding a 'Generic Modbus TCP Slave Device' to the Industrial Ethernet Manager. However, when trying to define the Modbus TCP Channel Configuration, I noticed that I only have options for function codes 03, 04, and 23. I did some research and found that this may be consistent with Schneider's documentation for the M241 Modbus Master Mode. 

After further investigation, it seems like only function code 03 is supported for scheduled scanning of Modbus TCP slaves. This limitation is surprising, as the M241 is capable of supporting a wider range of function codes when set up as a Modbus TCP Server (Slave). It's puzzling that function codes 2 and 4 are accepted in slave mode but not when operating as a master.

I would appreciate any insights or solutions to this issue, as it's a crucial requirement for our system. If we're restricted to only reading holding registers, we may need to consider switching to a different PLC. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Don't forget to check out the read_Var and write_var blocks in your configuration. The IOscanner is set up on the hardware, with read_Var and write_var blocks serving as unique PLC code instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your assistance. It seems that using READ_VAR allows me to access different types of registers on my M241. I am also interested in configuring my M241 as a Modbus slave but I am unsure of the correct method. According to the M241 programming manual, it suggests that I need a TM4ES4 expansion module for this purpose. However, I am doubtful of this requirement since my base M241 module (TM241CE40R) already has an ethernet port. I have not found any other information in the guide regarding setting up the M241 as a Modbus slave.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ess-prog-ie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the built-in Ethernet capability for Modbus communication by simply assigning an IP address. All variables listed on the Global Variable List (GVL) require mapping to Modbus addresses. The syntax likely involves declaring "My_symbols_name int at %MWxx" where I/O is automatically mapped to Modbus ranges. Configuring a slave device involves a slightly different approach compared to your current setup, functioning more like remote I/O for other PLCs using Modbus TCP protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I only seeing options for function codes 03, 04, and 23 when setting up Modbus TCP Channel Configuration on my Schneider M241 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> The limitation of only having function code 03 available for scheduled scanning of Modbus TCP slaves on the M241 PLC is due to the Modbus Master Mode configuration. This restriction is mentioned in Schneider's documentation for the M241 PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can the Schneider M241 PLC support a wider range of function codes for Modbus TCP communication?</h4>
<p class='text-muted'><strong>Answer:</strong> When operating as a Modbus TCP Server (Slave), the M241 PLC is capable of supporting a wider range of function codes, including 02 and 04. However, in the Master Mode configuration, only function code 03 is supported for scheduled scanning of Modbus TCP slaves.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if the limited function code support for Modbus TCP communication on the Schneider M241 PLC is a crucial issue for my system requirements?</h4>
<p class='text-muted'><strong>Answer:</strong> If the restriction to only reading holding registers using function code 03 is a critical limitation for your system, you may need to consider switching to a different PLC that offers broader support for Modbus TCP function codes.</p>
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
