
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Im trying to access the Stratix 5800 switch statistics using KepServerEx. The Stratix manual provides an address and format which I interpreted as the modbus offset. Since the statistics are read-only, I expected to use function code 4 to read input registers. However, Im having trouble getting KepServer to">
    <meta name="keywords" content="stratix 5800 switch, modbus offset, kepserverex, switch statistics, read-only statistics, function code 4, input registers, querying issues, kepserver troubleshooting, addressing formats, resolving modbus issues, network switch">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/accessing-stratix-5800-switch-statistics-with-modbus-offset">
    <title>Accessing Stratix 5800 Switch Statistics with Modbus Offset | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Accessing Stratix 5800 Switch Statistics with Modbus Offset | Oxmaint Community">
    <meta property="og:description" content="Im trying to access the Stratix 5800 switch statistics using KepServerEx. The Stratix manual provides an address and format which I interpreted as the modbus offset. Since the statistics are read-only, I expected to use function code 4 to read input registers. However, Im having trouble getting KepServer to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/accessing-stratix-5800-switch-statistics-with-modbus-offset">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accessing Stratix 5800 Switch Statistics with Modbus Offset | Oxmaint Community">
    <meta name="twitter:description" content="Im trying to access the Stratix 5800 switch statistics using KepServerEx. The Stratix manual provides an address and format which I interpreted as the modbus offset. Since the statistics are read-only, I expected to use function code 4 to read input registers. However, Im having trouble getting KepServer to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/accessing-stratix-5800-switch-statistics-with-modbus-offset"
      },
      "headline": "Accessing Stratix 5800 Switch Statistics with Modbus Offset",
      "description": "Im trying to access the Stratix 5800 switch statistics using KepServerEx. The Stratix manual provides an address and format which I interpreted as the modbus offset. Since the statistics are read-only, I expected to use function code 4 to read input registers. However, Im having trouble getting KepServer to",
      "author": {
        "@type": "Person",
        "name": "kurt.brinker"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Accessing Stratix 5800 Switch Statistics with Modbus Offset</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kurt.brinker</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">160</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">99</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I'm trying to access the Stratix 5800 switch statistics using KepServerEx. The Stratix manual provides an address and format which I interpreted as the modbus offset. Since the statistics are read-only, I expected to use function code 4 to read input registers. However, I'm having trouble getting KepServer to accept my query. Any tips on how to resolve this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To activate the feature on the switch, you may need to enable it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Modbus protocol is active and I have identified a client connected in the switch diagnostics. The switch is returning an exception response to the query, indicating that the request does not align with the Modbus server's structure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kurt.brinker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why not give function 3 a shot instead?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with Modbus registers, it's important to understand that hexadecimal register addresses are typically zero-based. However, if your client or master device uses one-based memory area addressing, you may encounter issues such as incorrect values being read. For example, Holding register 0x12F6 in hexadecimal is equivalent to (4)4855 or (4)04855 in decimal when using Function Code 03. Similarly, Input register 0x12F6 corresponds to (3)4855 or (3)04855 when using Function Code 04. If you encounter an exception code, it could be due to a wrong function code or invalid address, often caused by the start address being off by one digit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to danw, the hexadecimal address 0x12f6 is equivalent to 4854 in decimal. In typical hex register systems, addresses start at zero. Therefore, if your client or master device uses a one-based memory area addressing system, the Holding register 0x12F6 is represented as (4)4855 or (4)04855 (using Function Code 03), while the Input register 0x12F6 is represented as (3)4855 or (3)04855 (using Function Code 04). An exception may occur due to an incorrect function code or an invalid address if the start address is off by one. Many devices do not include the 4xxxx type address and may require users to manually input it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, a user mentioned that 0x12f6 is equivalent to 4854 in decimal. In hex register addresses, it is common for them to be zero-based. However, if your client or master uses a one-based memory area addressing system, the Holding register 0x12F6 would be represented as (4)4855 or (4)04855 (using Function Code 03). On the other hand, the Input register 0x12F6 would be (3)4855 or (3)04855 (using Function Code 04). If you encounter an exception code, it could be due to a wrong function code or an invalid address caused by the start address being off by one.

Upon revisiting the zero-based addressing system, it was discovered that there was an error in using the "OK" button instead of "apply" in the user dialogue, resulting in the incorrect testing of both schemes. For future reference, the values are stored in Holding registers, so Function Code 3 should be used. It is worth noting that in this case, read-only values are stored in Holding registers, contrary to the typical practice of holding read/write values in Holding registers.

In terms of addressing, a one-based system is being utilized, and it appears that the unit disregards any node ID setting, which differs from some TCP devices. Furthermore, the configuration is set to Little-Endian Bit Order, with the Modicon Order option disabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kurt.brinker</span></li>
            </ul>
        </div>
        
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I access Stratix 5800 switch statistics using Modbus offset with KepServerEx?
- To access the Stratix 5800 switch statistics using Modbus offset with KepServerEx, you need to interpret the provided address and format as the modbus offset. You can use function code 4 to read input registers for the read-only statistics.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I having trouble getting KepServer to accept my query for accessing Stratix 5800 switch statistics?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing issues with KepServer accepting your query for accessing Stratix 5800 switch statistics, it could be due to incorrect configuration or setup. Make sure to double-check your settings and ensure that the Modbus offset interpretation and function code are correct.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Any tips on resolving issues with accessing Stratix 5800 switch statistics through KepServerEx?</h4>
<p class='text-muted'><strong>Answer:</strong> - One tip to resolve issues with accessing Stratix 5800 switch statistics through KepServerEx is to review the documentation provided by both Stratix manual and KepServerEx. Additionally, you can seek support from the respective technical support teams for further assistance.</p>
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
