
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am encountering issues establishing a Modbus connection between my PLC and Drive. Initially, I successfully open the port, but when setting up the Modbusmaster, I encounter two errors. The first error occurs when trying to assign a boolean to the trigger, and the second error arises when filling">
    <meta name="keywords" content="modbus connection troubleshooting, plc and drive modbus communication errors, modbusmaster error solutions, fixing modbus connection issues, troubleshooting modbus boolean trigger assignment error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-connection-errors-between-plc-and-drive">
    <title>Troubleshooting Modbus Connection Errors between PLC and Drive | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus Connection Errors between PLC and Drive | Oxmaint Community">
    <meta property="og:description" content="I am encountering issues establishing a Modbus connection between my PLC and Drive. Initially, I successfully open the port, but when setting up the Modbusmaster, I encounter two errors. The first error occurs when trying to assign a boolean to the trigger, and the second error arises when filling">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-connection-errors-between-plc-and-drive">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus Connection Errors between PLC and Drive | Oxmaint Community">
    <meta name="twitter:description" content="I am encountering issues establishing a Modbus connection between my PLC and Drive. Initially, I successfully open the port, but when setting up the Modbusmaster, I encounter two errors. The first error occurs when trying to assign a boolean to the trigger, and the second error arises when filling">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-connection-errors-between-plc-and-drive"
      },
      "headline": "Troubleshooting Modbus Connection Errors between PLC and Drive",
      "description": "I am encountering issues establishing a Modbus connection between my PLC and Drive. Initially, I successfully open the port, but when setting up the Modbusmaster, I encounter two errors. The first error occurs when trying to assign a boolean to the trigger, and the second error arises when filling",
      "author": {
        "@type": "Person",
        "name": "Data_name"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-22",
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
                <h1 class="text-white">Troubleshooting Modbus Connection Errors between PLC and Drive</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Data_name</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">397</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">3</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am encountering issues establishing a Modbus connection between my PLC and Drive. Initially, I successfully open the port, but when setting up the Modbusmaster, I encounter two errors. The first error occurs when trying to assign a boolean to the trigger, and the second error arises when filling the communication fields with an array in int format. During compilation, an error message stating "Modbusmaster: argument expected" is displayed. Are you familiar with these issues and have any solutions in mind?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To open the instruction editor, simply double click on the instruction text. Make sure to enter all necessary information in the provided pop-up window. It is important to specify the version you are using for troubleshooting purposes. Port 1 is typically designated as "MJ1" for easy reference. The trigger function activates the request when there is a transition from OFF to ON. Instead of manually entering the contact, you can input something like "%I02" for efficiency. Pro-tip: Press F1 after highlighting the instruction for quick access to the help file, which provides valuable information on what is required.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you double click on the instruction, a pop-up window will appear for you to enter the necessary information. What version of Cscape are you currently using? Typically, port 1 is referred to as "MJ1". The "Trigger" is a single-bit function, where transitioning from OFF to ON will activate the request. Instead of using a contact, try inputting something like "%I02".

Moreover, if you highlight the instruction and press F1, the help window will display relevant information. Make sure to review the help file for any additional requirements. I am currently working on Cscape version 9.90, but the pop-up window doesn't seem to be working, potentially due to using the IEC 61131 version.

If you are utilizing the MJ1 port, you shouldn't have encountered any communication issues. I am currently attempting my first connection test and encountered an error requesting a variable. After trying %M1, I consulted the block documentation, but couldn't find any information regarding acceptable variable types. This is where I believe I may be missing something Siemens-related.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Data_name</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon closer inspection, you will notice that it actually sets a BOOL value. This BOOL can be part of a register, I/O, or any other component. I do not utilize the tag-based or IEC versions. The pop-up should appear as part of the cScape functionality, so it is unclear why you are not seeing it. Have you checked the port/network configuration in the hardware section on the left pane? Setting up your communication and variables for Modbus data may be more streamlined there. Regardless, you will need to configure your communications, ports, and protocols.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing Port MJ2 for Modbus communication, some historical screen captures could provide valuable assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By following the setup depicted above, you can avoid the hassle of opening ports and triggers on your ladder system. This eliminates the need for extra configuration steps, making the process more streamlined and secure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When I select the "Modbusmaster" block, it triggers the opening of the "IEC Function block selection" window, which can be seen in the attached image. I avoid using the hardware configuration due to the discrepancy between the "Function Code" provided by Cscape and the one required by the Yaskawa drive I intend to communicate with. As a result, I had to transition my program from "IEC 61131" to "Ladder advanced", deviating from my preferred standard. I plan to test it in ST mode when time allows, as I am currently occupied with other priorities. It is worth noting that setting up as per the above instructions eliminates the need for manually configuring ports and triggers in your ladder program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Data_name</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What could be causing the error when trying to assign a boolean to the trigger in the Modbus setup process?
- The error when trying to assign a boolean to the trigger in the Modbus setup process could be due to incorrect data type compatibility or syntax errors in the code.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve the error related to filling the communication fields with an array in int format during Modbus setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The error related to filling the communication fields with an array in int format could be resolved by ensuring that the correct data type is used for the array elements and verifying the syntax of the code.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the "Modbusmaster: argument expected" error message during compilation?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the "Modbusmaster: argument expected" error message during compilation, double-check the arguments being passed to the Modbusmaster function calls, ensuring they match the expected data types and format.</p>
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
