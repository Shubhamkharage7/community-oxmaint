
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I have configured my Micro820 with a basic mapping, but I am encountering errors when running a script to read the addresses. The errors indicate illegal addresses when trying to read certain Modbus registers. When connected to Modbus Server, I am experiencing issues with reading specific addresses such">
    <meta name="keywords" content="modbus address errors, micro820 server, troubleshooting modbus, modbus registers, modbus mapping, illegal addresses, modbus script, modbus server connection, reading modbus addresses, discrete inputs, coils, modbus register">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-address-errors-on-micro820-server">
    <title>Troubleshooting Modbus Address Errors on Micro820 Server | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus Address Errors on Micro820 Server | Oxmaint Community">
    <meta property="og:description" content="Hello, I have configured my Micro820 with a basic mapping, but I am encountering errors when running a script to read the addresses. The errors indicate illegal addresses when trying to read certain Modbus registers. When connected to Modbus Server, I am experiencing issues with reading specific addresses such">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-address-errors-on-micro820-server">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus Address Errors on Micro820 Server | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I have configured my Micro820 with a basic mapping, but I am encountering errors when running a script to read the addresses. The errors indicate illegal addresses when trying to read certain Modbus registers. When connected to Modbus Server, I am experiencing issues with reading specific addresses such">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-address-errors-on-micro820-server"
      },
      "headline": "Troubleshooting Modbus Address Errors on Micro820 Server",
      "description": "Hello, I have configured my Micro820 with a basic mapping, but I am encountering errors when running a script to read the addresses. The errors indicate illegal addresses when trying to read certain Modbus registers. When connected to Modbus Server, I am experiencing issues with reading specific addresses such",
      "author": {
        "@type": "Person",
        "name": "bill1995"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">Troubleshooting Modbus Address Errors on Micro820 Server</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bill1995</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">359</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">363</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I have configured my Micro820 with a basic mapping, but I am encountering errors when running a script to read the addresses. The errors indicate illegal addresses when trying to read certain Modbus registers.

When connected to Modbus Server, I am experiencing issues with reading specific addresses such as _IO_EM_DI_01, _IO_EM_DI_02, _IO_EM_DI_03, and _IO_EM_DI_04. However, it is interesting to note that I can successfully read the 4 discrete inputs if I treat them as coils (0x01) instead of discrete inputs (0x02).

I have attempted to adjust the registers but have not been successful in resolving the issue. Here is a snippet of the mapping configuration I am using:

```python
modbus_mapping = {
    '_IO_EM_DO_01': {'address': 0, 'type': 'coil'},
    '_IO_EM_DO_02': {'address': 1, 'type': 'coil'},
    '_IO_EM_DO_03': {'address': 2, 'type': 'coil'},
    '_IO_EM_DO_04': {'address': 3, 'type': 'coil'},
    '_IO_EM_DI_01': {'address': 4, 'type': 'discrete_input'},
    '_IO_EM_DI_02': {'address': 5, 'type': 'discrete_input'},
    '_IO_EM_DI_03': {'address': 6, 'type': 'discrete_input'},
    '_IO_EM_DI_04': {'address': 7, 'type': 'discrete_input'},
    '_IO_EM_AO_00': {'address': 8, 'type': 'holding_register'},
    '_IO_EM_AI_00': {'address': 24, 'type': 'input_register'},
}
```

If you have any insights or suggestions on how to resolve this issue with illegal Modbus addresses, please feel free to share.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the most commonly used Modbus Function Codes for optimal communication efficiency: 

Read:
- 01: Coils (FC=01)
- 02: Discrete Inputs (FC=02)
- 03: Multiple Holding Registers (FC=03)
- 04: Input Registers (FC=04)

Write:
- 05: Single Coil (FC=05)
- 06: Single Holding Register (FC=06)
- 0F: Multiple Coils (FC=15)
- 10: Multiple Holding Registers (FC=16)

For example, to address "_IO_EM_DI_01," map it to address 100001 as it falls under Discrete Inputs, then use Function 02 to read address 10001. For more insights on Modbus Addressing, simply search for it on Google for a wealth of valuable information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for your valuable advice, which has significantly assisted me. I had initially believed that the IDE in CCW handled addressing automatically, but I now understand that it plays a different role. Thanks to your guidance, my new table is functioning properly. I also discovered that the mapping of addresses works differently than I had thought, with the address format of "4xxxxx" or "3xxxxx" managing the word counts instead of needing "16" addresses. Your help has been invaluable, and I appreciate it greatly. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bill1995</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering errors with illegal Modbus addresses when trying to read certain registers on my Micro820 server?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue with illegal Modbus addresses can occur due to incorrect mapping configurations or mismatch in treating registers as coils instead of discrete inputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I successfully read specific addresses like _IO_EM_DI_01, _IO_EM_DI_02, _IO_EM_DI_03, and _IO_EM_DI_04 on my Micro820 server?</h4>
<p class='text-muted'><strong>Answer:</strong> To read these specific addresses successfully, consider treating them as discrete inputs (0x02) instead of coils (0x01) in your mapping configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I have adjusted the registers but still facing issues with reading Modbus addresses on my Micro820. What could be the problem?</h4>
<p class='text-muted'><strong>Answer:</strong> If adjusting the registers did not resolve the issue, double-check the mapping configuration for accuracy and ensure that the addresses are correctly defined for each register type (coil, discrete input, holding register, input register).</p>
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
