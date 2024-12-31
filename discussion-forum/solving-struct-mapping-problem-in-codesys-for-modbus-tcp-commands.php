
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am exploring the use of STRUCT in parsing Modbus/TCP commands. In this setup, the Modbus client populates bytes with data related to a particular command (such as type and parameters), which the PLC (Codesys) accesses. By implementing a STRUCT, the process of parsing the data is streamlined, eliminating">
    <meta name="keywords" content="modbus/tcp commands parsing, struct mapping in codesys, modbus client data parsing, plc data access with struct, parsing modbus/tcp data with struct, streamlining data parsing">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/solving-struct-mapping-problem-in-codesys-for-modbus-tcp-commands">
    <title>Solving Struct Mapping Problem in CODESYS for Modbus/TCP Commands | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Solving Struct Mapping Problem in CODESYS for Modbus/TCP Commands | Oxmaint Community">
    <meta property="og:description" content="I am exploring the use of STRUCT in parsing Modbus/TCP commands. In this setup, the Modbus client populates bytes with data related to a particular command (such as type and parameters), which the PLC (Codesys) accesses. By implementing a STRUCT, the process of parsing the data is streamlined, eliminating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/solving-struct-mapping-problem-in-codesys-for-modbus-tcp-commands">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Solving Struct Mapping Problem in CODESYS for Modbus/TCP Commands | Oxmaint Community">
    <meta name="twitter:description" content="I am exploring the use of STRUCT in parsing Modbus/TCP commands. In this setup, the Modbus client populates bytes with data related to a particular command (such as type and parameters), which the PLC (Codesys) accesses. By implementing a STRUCT, the process of parsing the data is streamlined, eliminating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/solving-struct-mapping-problem-in-codesys-for-modbus-tcp-commands"
      },
      "headline": "Solving Struct Mapping Problem in CODESYS for Modbus/TCP Commands",
      "description": "I am exploring the use of STRUCT in parsing Modbus/TCP commands. In this setup, the Modbus client populates bytes with data related to a particular command (such as type and parameters), which the PLC (Codesys) accesses. By implementing a STRUCT, the process of parsing the data is streamlined, eliminating",
      "author": {
        "@type": "Person",
        "name": "Paulo Balbino"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-07",
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
                <h1 class="text-white">Solving Struct Mapping Problem in CODESYS for Modbus/TCP Commands</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Paulo Balbino</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">189</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">56</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am exploring the use of STRUCT in parsing Modbus/TCP commands. In this setup, the Modbus client populates bytes with data related to a particular command (such as type and parameters), which the PLC (Codesys) accesses. By implementing a STRUCT, the process of parsing the data is streamlined, eliminating the need to parse byte by byte. Instead, the data can be easily accessed by mapping addresses to a struct. However, I have encountered an issue where the compiler does not allow me to specify the location of the struct for a %MW register.

Specifically, using the code block VAR_COMMAND AT %MW1002: structGenericModbusCommand results in an error message stating "Bad declaration, use '%ML' for 'structGenericModbusCommand' variable." However, changing it to %ML allocates the struct to a different memory address upon going online. This inconsistency raises the question of why a struct type is being mapped to a %MW location instead of a specified one. Is there a way to control where the struct is mapped?

In order to establish a reliable method for mapping STRUCT to specific Modbus addresses, I am seeking a solution to this issue. Any insights or suggestions would be greatly appreciated. Thank you. - Paulo (Using Codesys OEM: Schneider Machine Expert Logic Builder M241)</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The size of the structGenericModbusCommand varies depending on the type of memory being used: MB (1 byte), MW (2 bytes), MD (4 bytes), and possibly ML (8 bytes). It appears that the memory addressing may be overlapping, with memory addresses progressing in the sequence MW1002 -> MB2004 -> MD501. For further information on memory mapping, visit: https://product-help.schneider-electric.com/Machine%20Expert/V1.1/en/m241prg/m241prg/M2xx_-_Memory_Mapping/M2xx_-_Memory_Mapping-3.htm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kallileo</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why am I encountering an error when trying to specify the location of a struct for a %MW register in CODESYS?
- The error message "Bad declaration, use '%ML' for 'structGenericModbusCommand' variable" indicates that the compiler does not allow mapping a struct to a %MW register. Instead, it suggests using '%ML' for the struct variable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I control where the struct is mapped in CODESYS when working with Modbus addresses?</h4>
<p class='text-muted'><strong>Answer:</strong> - In order to specify a specific memory address for a struct in CODESYS, you should use '%ML' instead of '%MW'. Mapping a struct to a %MW location may lead to inconsistencies in memory allocation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the recommended approach for mapping STRUCT to specific Modbus addresses in CODESYS?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure consistency and reliability in mapping a struct to Modbus addresses in CODESYS, it is advisable to use '%ML' for specifying the memory location of the struct variable. This helps in avoiding allocation inconsistencies when going online.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
