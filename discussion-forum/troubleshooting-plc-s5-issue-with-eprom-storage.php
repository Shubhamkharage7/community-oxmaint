
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing an issue with a PLC S5 that is currently running on RAM. After transferring the program to EPROM using a PG, the PLC is not functioning properly with the EPROM. However, when I switch back to RAM and transfer the program, the PLC runs smoothly.">
    <meta name="keywords" content="plc s5 troubleshooting, eprom storage issue, plc memory transfer problem, ram vs eprom plc programming, troubleshooting plc program transfer, s5 plc eprom malfunction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-s5-issue-with-eprom-storage">
    <title>Troubleshooting PLC S5 Issue with EPROM Storage | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC S5 Issue with EPROM Storage | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing an issue with a PLC S5 that is currently running on RAM. After transferring the program to EPROM using a PG, the PLC is not functioning properly with the EPROM. However, when I switch back to RAM and transfer the program, the PLC runs smoothly.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-s5-issue-with-eprom-storage">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC S5 Issue with EPROM Storage | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing an issue with a PLC S5 that is currently running on RAM. After transferring the program to EPROM using a PG, the PLC is not functioning properly with the EPROM. However, when I switch back to RAM and transfer the program, the PLC runs smoothly.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-s5-issue-with-eprom-storage"
      },
      "headline": "Troubleshooting PLC S5 Issue with EPROM Storage",
      "description": "Hello, I am experiencing an issue with a PLC S5 that is currently running on RAM. After transferring the program to EPROM using a PG, the PLC is not functioning properly with the EPROM. However, when I switch back to RAM and transfer the program, the PLC runs smoothly.",
      "author": {
        "@type": "Person",
        "name": "HABIBI"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting PLC S5 Issue with EPROM Storage</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>HABIBI</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">12289</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">285</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing an issue with a PLC S5 that is currently running on RAM. After transferring the program to EPROM using a PG, the PLC is not functioning properly with the EPROM. However, when I switch back to RAM and transfer the program, the PLC runs smoothly. This issue persists even when using a different EPROM. Can you please assist me in troubleshooting this problem? Thank you. - Habibi</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To effectively transfer the program from EPROM to RAM, follow a specific sequence that involves flipping to stop, holding down the overall reset, and toggling between stop and run a few times. This method compels the PLC to load the program from EPROM. If unsure, rest assured that the Siemens technicians will be arriving shortly to provide the correct sequence. Don't worry, help is on the way! :nodi:-Eric</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To reload the program from the EEPROM, follow these steps: Place the CPU in stop mode, press and hold the 'default/overall reset' button to the 'off' position, toggle the CPU selector switch from 'ST' to 'RN' twice, and observe the stop LED briefly turning off. Release the overall reset switch to complete the overall reset and have the CPU re-read the program from the EEPROM. - Paul.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLucas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To determine why the interrupt register is not functioning, investigate the sequence: Test, Output PLC information, Istack, and < or > (or zero instructions in a PC). Frequently, the program requires designated DB areas in the RAM.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rgua</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent any potential issues on your CPU, it is recommended to follow these steps provided by Eric Nelson and PLucas: first, switch to stop mode, then press and hold the overall reset button while toggling between stop and run modes multiple times. These simple actions can help improve your CPU's performance. It's amazing what a good memory can do! -Eric</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>From my memory 10 years ago, I recall that the various S5 models have specific procedures for resetting the memory. For instance, the 95U model simply requires shutting down, inserting the EPROM, removing the battery, waiting a minute, and then powering up (without the battery). When the red LED flashes rapidly, it indicates the EPROM is being read, and you can then reinsert the battery. The steps shared by Eric and Paul are more suited for the 115U (and possibly the 135U). Additionally, what I have described also applies to the S5-100U series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that the guidelines provided by Eric and Paul pertain specifically to the 115U and possibly the 135U PLC models. This information is relevant for the 115U, as it is the main S5 PLC model I work with. Paul mentions that this information is essential for those working with the S5 PLC series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLucas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider transferring PB, FB, and OB to EPROM first before transferring DB's to the CPU online. It is possible that there are certain dynamic databases that the CPU prefers to be kept dynamic rather than static.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fribeiro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper loading of blocks, it is important to reset the memory and insert the EPROM with the program. You can verify this online. If the memory is blank, the issue may lie with the reset procedure. However, if the memory is filled with blocks, the problem could be related to a DB as previously mentioned. Checking the BSTACK and/or USTACK (also known as ISTACK) can provide more insight into why the CPU enters STOP mode. Additionally, identifying the type of CPU you have is crucial in troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, JesperMP mentioned that different procedures are required to reset the memory on various S5 models, based on his memory from 10 years ago. For example, the 95U model can be reset by shutting down the system, inserting the EPROM, removing the battery, waiting for a minute, and then powering up without the battery. Once the red LED starts flashing quickly, indicating that the EPROM is being read, the battery can be reinserted. This same process applies to the S5-100U series. Another user confirmed the effectiveness of this method on a 95U model, emphasizing the importance of removing the battery for the EPROM load to work correctly. Good to know!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>504bloke</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that different S5 models may require different procedures for resetting the memory. For example, the 95U model only needs you to shut down, insert the EPROM, remove the battery, wait for one minute, and then power up without the battery. When the red LED begins flashing quickly, indicating the EPROM is being read, you can reinsert the battery. The methods described by Eric and Paul are more applicable to the 115U and possibly the 135U models. It is also worth noting that this process is relevant for the S5-100U series as well. Your feedback is greatly appreciated, and I can confirm that I successfully applied the described method on the S5-100U-5 (6ES5-103-8MA03) yesterday. Thank you, Srinivas.Sangem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>srinivas_dee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Congratulations Srinivas! It's crucial to acknowledge that devices like the S5 are now outdated and it's time to upgrade to a more advanced model. Persisting with an S5 in a functioning system is risky as its longevity is uncertain. It's highly recommended to explore newer alternatives for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's unlikely that it's that old... Only the fifth decade is passing (1970s, 1980s, 1990s, 2000s, and 2010s). On a different note, can anyone recall the name of the German company producing 1:1 S5 parts? I seem to have misplaced it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vartile</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During discussions on an online forum, Vartile mentioned that a particular German company produced high-quality 1:1 S5 parts. Unfortunately, the name of the company has slipped Vartile's mind. Could it possibly be VIPA? Feel free to share your insights!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Anders.Larz</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why is my PLC S5 not functioning properly after transferring the program to EPROM?
    The issue could be related to the EPROM storage or the transfer process. Troubleshooting steps may include verifying the EPROM compatibility, checking for transfer errors, and examining the EPROM programming process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the persistence of the issue even when using a different EPROM?</h4>
<p class='text-muted'><strong>Answer:</strong> The problem might not be specific to the EPROM itself but could be related to the EPROM programming procedure or compatibility with the PLC. It is advisable to investigate the EPROM programming steps and ensure compatibility with the PLC S5.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the problem of PLC S5 not running smoothly with the EPROM?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may involve checking the EPROM programming settings, verifying the transfer process, ensuring compatibility with the PLC S5 model, and examining any error messages or indicators during operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some common issues that can arise when transferring a program from RAM to EPROM in a PLC S5?</h4>
<p class='text-muted'><strong>Answer:</strong> Common issues may include compatibility issues between the EPROM and PLC S5, errors in the transfer process, incorrect programming settings, or issues with the EPROM storage itself. Troubleshooting should focus on identifying and addressing these potential problems.</p>
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
