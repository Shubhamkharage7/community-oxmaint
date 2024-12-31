
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I apologize for the lack of clarity in the title. The scenario involves utilizing RSLogix to configure and trigger position registers on a Kinetix 5100 servo drive. While my program is functional, I am concerned about the latency between triggering a position register and the drive receiving the command.">
    <meta name="keywords" content="rslogix optimization, position register latency, kinetix 5100 servo drive configuration, rslogix message instructions, minimizing latency in rslogix, rslogix position">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-rslogix-for-position-register-latency-on-kinetix-5100-servo-drive">
    <title>Optimizing RSLogix for Position Register Latency on Kinetix 5100 Servo Drive | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing RSLogix for Position Register Latency on Kinetix 5100 Servo Drive | Oxmaint Community">
    <meta property="og:description" content="I apologize for the lack of clarity in the title. The scenario involves utilizing RSLogix to configure and trigger position registers on a Kinetix 5100 servo drive. While my program is functional, I am concerned about the latency between triggering a position register and the drive receiving the command.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-rslogix-for-position-register-latency-on-kinetix-5100-servo-drive">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing RSLogix for Position Register Latency on Kinetix 5100 Servo Drive | Oxmaint Community">
    <meta name="twitter:description" content="I apologize for the lack of clarity in the title. The scenario involves utilizing RSLogix to configure and trigger position registers on a Kinetix 5100 servo drive. While my program is functional, I am concerned about the latency between triggering a position register and the drive receiving the command.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-rslogix-for-position-register-latency-on-kinetix-5100-servo-drive"
      },
      "headline": "Optimizing RSLogix for Position Register Latency on Kinetix 5100 Servo Drive",
      "description": "I apologize for the lack of clarity in the title. The scenario involves utilizing RSLogix to configure and trigger position registers on a Kinetix 5100 servo drive. While my program is functional, I am concerned about the latency between triggering a position register and the drive receiving the command.",
      "author": {
        "@type": "Person",
        "name": "patrickmoneyy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">Optimizing RSLogix for Position Register Latency on Kinetix 5100 Servo Drive</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">385</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">407</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I apologize for the lack of clarity in the title. The scenario involves utilizing RSLogix to configure and trigger position registers on a Kinetix 5100 servo drive. While my program is functional, I am concerned about the latency between triggering a position register and the drive receiving the command. Currently, I am using message instructions for setting and getting attributes. Initially, I placed these instructions at the beginning of the routine, but encountered issues with JMP and LBL instructions. Considering organizing the MSG instructions in a separate routine and using JSR for writing or reading parameters. Seeking advice on optimizing this process without overcomplicating it.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in need of specific commands or data that require the use of MSGs? This method of instruction can be slow and asynchronous compared to the scan. In most cases, tasks can be accomplished using direct tags and motion instructions, while necessary data can be configured as cyclic parameter updates within the axis. The timing of execution depends on the specific application. For optimal speed, consider utilizing motion event tasks with axis updates set to 5ms. However, be mindful of task overrun. Otherwise, utilize a periodic task for other tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is a standalone drive that does not support motion axis and an outdated version of logic that does not support AOP for implicit messaging. My available options include explicit messaging for hardwired inputs and outputs. I am currently considering both options. While I am likely to choose hardwired inputs and outputs for my PLC due to their lower resource cost, I still have a theoretical question regarding this decision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that to achieve optimal speed, they utilize motion event tasks. I had overlooked the concept of event tasks before, but upon further exploration, I realized their efficiency. While initially hesitating about creating a task for a single device, I now understand that the controller is not concerned with the number of tasks. Event tasks appear to be highly efficient in enhancing speed and performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent forum post, user patrickmoneyy shared their initial hesitation towards utilizing event tasks, as they had never used them before. They questioned the efficiency of creating a task for just one device, but ultimately realized that the number of tasks didn't actually matter to the controller. It turns out that event tasks are surprisingly efficient, with a maximum of 32 tasks allowed. This brings up the question: what exactly makes event tasks more efficient than other options available? Let's dive into the details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM questioned what factors contribute to the effectiveness of an event. It is possible that the initial statement was not well articulated. Perhaps it would have been more precise to mention how an event can be more effective than continually scanning a routine if it only needs to be triggered every few seconds. However, the difference in efficiency is likely minimal. One advantage of event tasks is their ability to interrupt other tasks to execute, which aligns with the original goal of reducing latency on the explicit message index trigger. Considering event tasks as a viable option is worth exploring. It was noted that the efficiency statement was overly broad, and there was a oversight in not checking the maximum number of tasks allowed. It is important to consider the number of tasks as the controller does take this into account. Thank you for the clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Patrickmoneyy mentioned that his initial statement may have been poorly worded. He should have emphasized the importance of efficiency in triggering a routine scan every few seconds, rather than scanning it every time. Although the difference in efficiency may be negligible, event tasks have the advantage of interrupting other tasks to execute, which aligns with his goal of reducing latency on his explicit message index trigger. It is worth considering event tasks as an option. However, he realized his efficiency statement was too generalized and he failed to determine the maximum number of tasks allowed. The controller's capacity for tasks is indeed a crucial factor. In conclusion, there needs to be an evaluation mechanism in place to trigger the event, whether through regular logic evaluation or linking it to an event trigger tied to another IO data stream (similar to IRQ style, if supported).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM emphasized the importance of having a specific evaluation point to trigger events. This could involve regularly assessing logic to initiate an event instruction or utilizing an event trigger linked to another IO data stream (such as IRQ style, if available). In the context of motion planning, the motion planner event requires no extra processing for evaluation. It is integrated into motion group management and serves as a reliable trigger for fast-paced motion tasks. Currently, I am executing 40ms move profiles across 8 axes with a 5ms update rate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears we may be misunderstanding each other. I am curious about the specific model and version of controller being used by Patrick. Instructions sent via MSG are processed asynchronously compared to the controller's scanning process. They are stored in a buffer and managed by the backplane and communication modules. It is important to focus on minimizing the frequency of execution triggers rather than optimizing for a few milliseconds of faster execution time. Unless dealing with a heavily loaded controller and a complex routine, the PLC program will likely run multiple times before an MSG instruction is completed. Techniques that work well for CIP Motion axes may not be applicable to the Kinetix 5100, as it is a standalone indexer. To ensure quick responses to triggers, it is essential to establish a functioning I/O connection or use a fast physical output module for motion activation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach inquired about the specific model and version of controller being used by Patrick. It appears to be a L63 running V20.05 and currently equipped with K300 drives which will eventually be replaced with K5100's. While experimenting with his trainer setup to optimize performance, Patrick is also familiarizing himself with new techniques.

When asked about getting the I/O connection to work, Patrick explained that the application involves indexing triggered by a photoeye passing 5 times within 5 seconds. The process is not time-sensitive, prompting him to explore the possibility of configuring an I/O connection as a generic module. Patrick speculated that Rockwell's AOP minimum Logix version 30 may be a limiting factor on a V20 controller, but he remains hopeful for a solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One of the key benefits I discovered was the ease of using MSG instructions to set up parameters for a new drive installation. This means you only need to configure the IP address without the need for a laptop at the production line, making the process convenient. Considering this, it may be wise to utilize physical IO for the trigger and home switch functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Ken Roach, achieving fast reactions to "triggers" involves ensuring the I/O connection is functioning properly. In my attempt to set up assembly instances and sizes using EZ-EDS in a generic manner, I encountered a module fault labeled as Invalid Segment Type. Unfortunately, I was unable to find any documentation indicating support for a class 1 connection without using their AOP. In fact, a forum post suggested that the drive may not support class 1 connections to third-party devices, indicating a non-standard implementation. Despite these challenges, the process served as a valuable learning experience. In the future, I will be better equipped to set up a generic module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I optimize the latency of position register commands on a Kinetix 5100 servo drive using RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> One approach to optimize the latency is by organizing message (MSG) instructions in a separate routine and using Jump to Subroutine (JSR) for writing or reading parameters. This can help streamline the communication process without overcomplicating it.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the potential issues with using JMP and LBL instructions in conjunction with MSG instructions for setting and getting attributes in RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> Placing MSG instructions alongside JMP and LBL instructions in the same routine can sometimes lead to complications and issues. To avoid this, consider segregating MSG instructions into a separate routine for better organization and efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I address concerns about the latency between triggering a position register and the Kinetix 5100 servo drive receiving the command in RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> By optimizing the placement and execution of MSG instructions, along with utilizing JSR for parameter operations, you can work towards minimizing the latency and improving the synchronization between triggering position registers and the drive receiving commands.</p>
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
