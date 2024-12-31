
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When a Routine has an S:FS bit and is frequently called from the main routine, it raises the question of when this bit is active. Will it only be active during the initial scan of the main routine or every time the sub routine is called? If the sub">
    <meta name="keywords" content="s:fs bit in rslogix 5000, functionality of s:fs bit, rslogix 5000 sub routine, plc programming efficiency, main routine scanning, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-functionality-of-s-fs-bit-in-rslogix-5000">
    <title>Understanding the Functionality of S:FS Bit in RSLogix 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Functionality of S:FS Bit in RSLogix 5000 | Oxmaint Community">
    <meta property="og:description" content="When a Routine has an S:FS bit and is frequently called from the main routine, it raises the question of when this bit is active. Will it only be active during the initial scan of the main routine or every time the sub routine is called? If the sub">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-functionality-of-s-fs-bit-in-rslogix-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Functionality of S:FS Bit in RSLogix 5000 | Oxmaint Community">
    <meta name="twitter:description" content="When a Routine has an S:FS bit and is frequently called from the main routine, it raises the question of when this bit is active. Will it only be active during the initial scan of the main routine or every time the sub routine is called? If the sub">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-functionality-of-s-fs-bit-in-rslogix-5000"
      },
      "headline": "Understanding the Functionality of S:FS Bit in RSLogix 5000",
      "description": "When a Routine has an S:FS bit and is frequently called from the main routine, it raises the question of when this bit is active. Will it only be active during the initial scan of the main routine or every time the sub routine is called? If the sub",
      "author": {
        "@type": "Person",
        "name": "fifty60"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-03",
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
                <h1 class="text-white">Understanding the Functionality of S:FS Bit in RSLogix 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>fifty60</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">34373</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">289</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When a Routine has an S:FS bit and is frequently called from the main routine, it raises the question of when this bit is active. Will it only be active during the initial scan of the main routine or every time the sub routine is called? If the sub routine is continuously called without any preceding logic in the main routine, does the sub routine run repeatedly or just once with subsequent continual scanning? This raises concerns about the functionality and efficiency of the program.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Logix system's S:FS system BOOL tag will only be true during the first scan after a CPU power cycle or a switch from Program Mode to Run/Remote Run Mode. It will remain true for only one scan, regardless of how many times it is triggered within the user program - specifically, the very first scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmargineau</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Every task has an S:FS instance associated with it. For a continuous task, this instance will be true immediately after powering up. In the case of a periodic task, the S:FS instance will become true upon the first execution after powering up, which may take some time for longer intervals. As for event tasks, the S:FS instance will only become true when the task is executed for the first time, potentially days or weeks after the power up event occurs. The timing of when the S:FS instance becomes true depends on the specific event that triggers the task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TConnolly</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the S:FS is located within a subroutine that is invoked from a JSR in the main routine during the initial scan, the subroutine will be executed once during startup. I am seeking clarity on the concept of synchronous and asynchronous operations. Specifically, I am unsure if the PLC records the JSR during the first scan and then executes the subroutine during the subsequent scan. Can you please provide more insight on this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fifty60</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>fifty60 mentioned that if the S:FS is located within a subroutine and the subroutine is called from a JSR in the main routine during the first scan, then the subroutine will be executed once during startup. Each program in a PLC has its own unique S:FS bit, as opposed to a TASK as previously suggested. This S:FS bit is set for the first scan of each program. Typically, programs within a task follow a program schedule set in the task properties, causing all S:FS bits to be synchronized. However, it is possible to enable or disable programs manually or through program control. When calling a subroutine with an S:FS bit from the Main Routine, S:FS bits within the subroutine are not necessary as it will only be executed once when the processor enters RUN mode. If there is a delay (such as initialization timers) before calling the subroutine, the S:FS bit may no longer be active causing the JSR to fail.

Regarding the confusion on synchronous and non-synchronous operations, the terms generally refer to the method of I/O update. In older A-B controllers, I/O updating occurred synchronously at the start and end of the logic scan. However, in Logix5000 systems, I/O is updated on a scheduled basis during the logic scan within the "System Overhead Time-Slice," which is an asynchronous process. In some cases, asynchronous I/O can pose issues, leading many to utilize mapping routines to re-synchronize data for the logic scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Reviving this discussion to inquire about the functionality of Safety: Fault Status (S:FS) in a system with Dual Redundant ControLogix. Does S:FS reset when a failover occurs? Given the synchronized scan cycle and tags of A & B chassis, it can be assumed that S:FS is also synchronized and will only trigger when both chassis are offline, and one is powered on as the primary controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Oceansoul</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Oceansoul raised a question about the S:FS function with Dual Redundant ControLogix. The concern is whether S:FS is reset during a failover situation. Since the scan cycle and tags of both A & B chassis are synchronized, it is assumed that S:FS operates in the same way and only triggers if both chassis are off and one is switched on and in primary mode.

Although not an expert on redundancy scenarios, it is believed that a failover to the redundant controller should not reset the "first scan" status. Doing so would contradict the core principles of a redundancy system. Without the necessary hardware to test this, it may be beneficial to seek clarification from RA Tech Support or obtain input from others in the field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oceansoul inquired about the functionality of S:FS with Dual Redundant Contrologix. Is S:FS reset during a failover event? The synchronization of scan cycles and tags between A & B chassis implies that S:FS is also synchronized and will only trigger if both chassis are offline and one is turned on as the primary. The 1756-RM2 modules ensure that the PRI and SEC processors remain in lockstep, resulting in a seamless switchover. Redundant systems come with unique features, such as limits on the number of CIP connections available and the absence of PLC5 and SLC messaging in L80 series processors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>larryf</span></li>
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
<h4 class='text-dark'>FAQ: 1.  When is the S:FS bit active in a routine with frequent calls from the main routine?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The S:FS bit is active every time the subroutine is called, not just during the initial scan of the main routine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  If a subroutine with an S:FS bit is continuously called without any preceding logic in the main routine, does the subroutine run repeatedly or just once with subsequent continual scanning?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The subroutine will run repeatedly every time it is called, regardless of any preceding logic in the main routine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are the concerns regarding the functionality and efficiency of the program when using the S:FS bit in RSLogix 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The concerns mainly revolve around understanding when the S:FS bit is active, how it affects the execution of subroutines, and how it impacts the overall efficiency of the program.</p>
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
