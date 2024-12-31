
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In an attempt to gather and present data on a Cmore panel with a DL06 PLC, I am configuring the Time total (TA15) and Stack Count (CTA2) pairs. These values, V11200-V11235 and V11400-V1135, respectively, are to be captured and filled when a stack is discharged from the production line.">
    <meta name="keywords" content="fill instruction box, directlogic plc, data capture, resetting, cmore panel, dl06 plc, time total (ta15), stack count (cta2), v11200-v11235, v11400-v1135, ld">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-fill-instruction-box-on-directlogic-plc-for-data-capture-and-resetting">
    <title>How to Use FILL Instruction Box on Directlogic PLC for Data Capture and Resetting | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use FILL Instruction Box on Directlogic PLC for Data Capture and Resetting | Oxmaint Community">
    <meta property="og:description" content="In an attempt to gather and present data on a Cmore panel with a DL06 PLC, I am configuring the Time total (TA15) and Stack Count (CTA2) pairs. These values, V11200-V11235 and V11400-V1135, respectively, are to be captured and filled when a stack is discharged from the production line.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-fill-instruction-box-on-directlogic-plc-for-data-capture-and-resetting">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use FILL Instruction Box on Directlogic PLC for Data Capture and Resetting | Oxmaint Community">
    <meta name="twitter:description" content="In an attempt to gather and present data on a Cmore panel with a DL06 PLC, I am configuring the Time total (TA15) and Stack Count (CTA2) pairs. These values, V11200-V11235 and V11400-V1135, respectively, are to be captured and filled when a stack is discharged from the production line.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-fill-instruction-box-on-directlogic-plc-for-data-capture-and-resetting"
      },
      "headline": "How to Use FILL Instruction Box on Directlogic PLC for Data Capture and Resetting",
      "description": "In an attempt to gather and present data on a Cmore panel with a DL06 PLC, I am configuring the Time total (TA15) and Stack Count (CTA2) pairs. These values, V11200-V11235 and V11400-V1135, respectively, are to be captured and filled when a stack is discharged from the production line.",
      "author": {
        "@type": "Person",
        "name": "Slim"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-20",
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
                <h1 class="text-white">How to Use FILL Instruction Box on Directlogic PLC for Data Capture and Resetting</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Slim</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">627</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">255</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In an attempt to gather and present data on a Cmore panel with a DL06 PLC, I am configuring the "Time total" (TA15) and Stack Count (CTA2) pairs. These values, V11200-V11235 and V11400-V1135, respectively, are to be captured and filled when a stack is discharged from the production line. The setup involves using LD K30 on the first rung, LD V11400 on the second row with a FILL box and counter value CTA2 on the third rung (this setup is repeated for capturing time values on subsequent rows). While I am familiar with using a Fill File Load (FFL) on an AllenBradley platform, the Directlogic PLC is new to me.

I believe that the FILL box loads one word for every true rung it is placed on, triggered by the closure of the "coil" contact C104 on the input side of the rung. As the FILL operates, it will load CTA2 into V11400 and TA15 into V11200. Subsequent closures will load values incrementally. However, I am wondering what happens when I reach the 30th true condition. Will the FILL stop, and if so, how can it be reset?

Unlike the AB version with a reset bit, I am unsure how to reset the FILL instruction on the Directlogic PLC. The available help files do not provide guidance on resetting or restarting the FILL to load data back to the initial memory location. Any advice on resetting the FILL at the end of the day would be appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Photo of ladder connected to object</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Slim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing the Direct Logic FILL instruction with the AB FILL instruction, it is important to note that they operate differently than the AB FFL/FFU FIFO instructions. For more information, refer to the manual at the link provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm grateful for Drbitboy's reminder about the FILL instruction. I had overlooked it. While the FILL instruction may not be suitable for my needs, I believe the STT instruction could work. The DL06 manual provided valuable assistance. By writing a Zero into the initial Vmemory location of the accumulator stack at the end of each day to reset everything, I can modify my logic and successfully complete the task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Slim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Slim mentioned that by writing a Zero into the first Vmemory location of the accumulator stack at the end of the day, he can successfully reset his logic and get things done. By continuously writing a source value to the table using STT on each scan until SP56 activates, you can effectively reset the system. Welcome to the forum!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. How do I use the FILL instruction box on a Directlogic PLC for data capture and resetting?</h4>
<p class='text-muted'><strong>Answer:</strong> - To use the FILL instruction box on a Directlogic PLC for data capture, you can place the FILL box on a rung along with a condition that triggers the loading process. In this case, it seems like the FILL box is being used to load values into memory locations V11200 and V11400 when certain conditions are met.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What happens when the FILL instruction reaches the 30th true condition?</h4>
<p class='text-muted'><strong>Answer:</strong> - When the FILL instruction reaches the 30th true condition, it may stop loading data. To reset the FILL instruction and start loading data back to the initial memory location, a specific reset procedure may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I reset the FILL instruction on a Directlogic PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unlike the AllenBradley version with a reset bit, the Directlogic PLC may require a different method to reset the FILL instruction. It seems like the available help files do not provide guidance on resetting or restarting the FILL. Consulting the PLC documentation or seeking advice from experienced users may help in finding a solution to reset the FILL instruction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there any advice on resetting the FILL at the end of the day?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you need to reset the FILL instruction at the end of the day to prepare for the next cycle of data capture, consider implementing a manual reset procedure or creating a specific logic sequence</p>
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
