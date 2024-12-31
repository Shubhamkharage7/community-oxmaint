
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently looking to establish Modbus RTU communication between a 1214C Siemens PLC and two specific slaves: the Schneider PM5110 meter and the Socomec Delphys GP UPS. My goal is to retrieve analogue variables from these slaves by leveraging the PLCs ladder logic blocks. While I have obtained">
    <meta name="keywords" content="modbus rtu communication, base address usage, schneider pm5110 meter, socomec delphys gp ups, siemens plc, analogue variables, ladder logic blocks, register lists, value of 30001, modbus rtu slave">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/modbus-rtu-communication-understanding-base-address-usage-for-schneider-pm5110-meter-and-socomec-delphys-gp-ups">
    <title>Modbus RTU Communication: Understanding Base Address Usage for Schneider PM5110 Meter and Socomec Delphys GP UPS | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Modbus RTU Communication: Understanding Base Address Usage for Schneider PM5110 Meter and Socomec Delphys GP UPS | Oxmaint Community">
    <meta property="og:description" content="I am currently looking to establish Modbus RTU communication between a 1214C Siemens PLC and two specific slaves: the Schneider PM5110 meter and the Socomec Delphys GP UPS. My goal is to retrieve analogue variables from these slaves by leveraging the PLCs ladder logic blocks. While I have obtained">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/modbus-rtu-communication-understanding-base-address-usage-for-schneider-pm5110-meter-and-socomec-delphys-gp-ups">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Modbus RTU Communication: Understanding Base Address Usage for Schneider PM5110 Meter and Socomec Delphys GP UPS | Oxmaint Community">
    <meta name="twitter:description" content="I am currently looking to establish Modbus RTU communication between a 1214C Siemens PLC and two specific slaves: the Schneider PM5110 meter and the Socomec Delphys GP UPS. My goal is to retrieve analogue variables from these slaves by leveraging the PLCs ladder logic blocks. While I have obtained">
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
        "@id": "https://community.oxmaint.com/discussion-forum/modbus-rtu-communication-understanding-base-address-usage-for-schneider-pm5110-meter-and-socomec-delphys-gp-ups"
      },
      "headline": "Modbus RTU Communication: Understanding Base Address Usage for Schneider PM5110 Meter and Socomec Delphys GP UPS",
      "description": "I am currently looking to establish Modbus RTU communication between a 1214C Siemens PLC and two specific slaves: the Schneider PM5110 meter and the Socomec Delphys GP UPS. My goal is to retrieve analogue variables from these slaves by leveraging the PLCs ladder logic blocks. While I have obtained",
      "author": {
        "@type": "Person",
        "name": "DukeFleed"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Modbus RTU Communication: Understanding Base Address Usage for Schneider PM5110 Meter and Socomec Delphys GP UPS</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DukeFleed</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">418</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">291</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently looking to establish Modbus RTU communication between a 1214C Siemens PLC and two specific slaves: the Schneider PM5110 meter and the Socomec Delphys GP UPS. My goal is to retrieve analogue variables from these slaves by leveraging the PLC's ladder logic blocks. While I have obtained the register lists for each slave, I am unsure whether I need to add a value of 30001 to the address, as suggested on various Modbus RTU resources. Do all Modbus RTU slave manufacturers utilize a base address for communication with the master PLC? I am particularly interested in understanding the processes for the Schneider and Socomec devices. Any insights on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In this scenario, I will be reading three Holding Registers from the Siemens-convention address 1837 using a basic program with the MB_MASTER instruction on the S7-1214C as a Modbus Master/Client and the PM5110 meter as the Modbus Slave. The question arises whether retrieving address 1836 on the S7 will correspond to the 1836th or 1837th Holding Register in the PM5110 memory model. If the second register retrieved has a value of 2000 or greater, it indicates that both Siemens and PM5110 documents use the same addressing scheme. If the first register has a value of 2000 or higher and the third register has a value of 31 or less, it suggests that the PM5110 document uses one-based addressing, while the S7-1214C uses zero-based addressing. If neither case applies, then the third register with a value of 2000 or more signifies that the PM5110 document uses zero-based addressing, and the S7-1214C uses one-based addressing.

Background:

Modbus communication involves Slave/Server devices that hold Data Tables, and Master/Client devices responsible for data transfer. Each transfer includes the direction, type of data table, address, and length. The Function Code, Address, and Length are used to specify the data transfer. The Function Code encodes the transfer direction and data table, while the address indicates the first element in the Data Table to be transferred. The length refers to the number of data to be transferred. Different prefixes are used for writable coils, read-only discrete inputs, read-only input registers, and writable holding registers. Understanding the Modbus transfer conventions and memory model is crucial to avoid confusion regarding addressing schemes and Data Table interpretations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable information provided. According to the Excel document, in order to retrieve the Active Power Total (register 3060), should I use MB_MASTER with DATA_ADDR (3060) (+-1)? Alternatively, should I use MB_MASTER with DATA_ADDR (3060 + 30001) (+-1) as suggested in the linked resources? Is this usage dependent on the brand? Simplifying Modbus RTU with in-depth explanations and practical examples. This article delves into the Modbus RTU protocol commonly utilized in control systems. Discover more about Modbus and its functionality with insights from Schneider Electric USA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DukeFleed</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DukeFleed expressed gratitude for the valuable information provided. To access the Active Power Total (register 3060) as indicated in the Excel document, should I use MB_MASTER with DATA_ADDR (3060) (+-1), or should I follow the method mentioned in the links, which involves using MB_MASTER with DATA_ADDR (30001 + 3060) (+-1)? Is this process brand-specific? Learn about the simplified Modbus RTU protocol with detailed descriptions and examples in this informative article. Gain insights into what Modbus is and how it functions in process control systems. For the S7-1214C MB_MASTER, consider starting with three registers located at holding register address 1836 (or '4'01836) for better communication between the S7-1214C and the device, allowing you to determine the necessary addressing prefix and offset (-1/0/+1).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reviewing the PM5110 Modbus map, I discovered that the registers are one-based instead of zero-based. However, it was unclear whether they are categorized as Input Registers (3)xxxxx or Holding Registers (4)xxxxx. It is common for power meters to utilize Input Registers as there is typically no need to write values to the registers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do I need to add a value of 30001 to the address when establishing Modbus RTU communication with Schneider PM5110 meter and Socomec Delphys GP UPS?</h4>
<p class='text-muted'><strong>Answer:</strong> - In Modbus RTU communication, adding a value of 30001 to the address is a common practice as it represents the base address. However, it's important to consult the specific register lists provided by Schneider and Socomec for accurate addressing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Do all Modbus RTU slave manufacturers use a base address for communication with the master PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Most Modbus RTU slave manufacturers adhere to the concept of using a base address for communication with the master PLC. However, it's recommended to verify the addressing conventions specified by individual manufacturers such as Schneider and Socomec.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I retrieve analogue variables from Schneider PM5110 meter and Socomec Delphys GP UPS using a Siemens PLC's ladder logic blocks?</h4>
<p class='text-muted'><strong>Answer:</strong> - To retrieve analogue variables from Schneider PM5110 meter and Socomec Delphys GP UPS using a Siemens PLC's ladder logic blocks, you need to establish Modbus RTU communication and correctly address the registers based on the provided register lists for each slave device. Make sure to consider any required base address adjustments during the configuration process.</p>
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
