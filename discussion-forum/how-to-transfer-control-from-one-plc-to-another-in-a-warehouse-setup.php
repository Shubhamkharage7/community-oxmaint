
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having a 1500 controlling multiple warehouses within a station, as well as a 1200 controlling one of the warehouses, it has been advised that if the 1200 is offline, the 1500 should take over control of that warehouse. One possible solution is to duplicate the inputs and outputs of">
    <meta name="keywords" content="plc transfer control, warehouse setup, 1500 plc, 1200 plc, warehouse control, duplicate inputs and outputs, relay solution, offline plc, warehouse management, control redundancy, logical solution, practical approach, plc failover, warehouse automation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-transfer-control-from-one-plc-to-another-in-a-warehouse-setup">
    <title>How to transfer control from one PLC to another in a warehouse setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to transfer control from one PLC to another in a warehouse setup | Oxmaint Community">
    <meta property="og:description" content="Having a 1500 controlling multiple warehouses within a station, as well as a 1200 controlling one of the warehouses, it has been advised that if the 1200 is offline, the 1500 should take over control of that warehouse. One possible solution is to duplicate the inputs and outputs of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-transfer-control-from-one-plc-to-another-in-a-warehouse-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to transfer control from one PLC to another in a warehouse setup | Oxmaint Community">
    <meta name="twitter:description" content="Having a 1500 controlling multiple warehouses within a station, as well as a 1200 controlling one of the warehouses, it has been advised that if the 1200 is offline, the 1500 should take over control of that warehouse. One possible solution is to duplicate the inputs and outputs of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-transfer-control-from-one-plc-to-another-in-a-warehouse-setup"
      },
      "headline": "How to transfer control from one PLC to another in a warehouse setup",
      "description": "Having a 1500 controlling multiple warehouses within a station, as well as a 1200 controlling one of the warehouses, it has been advised that if the 1200 is offline, the 1500 should take over control of that warehouse. One possible solution is to duplicate the inputs and outputs of",
      "author": {
        "@type": "Person",
        "name": "amancini"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">How to transfer control from one PLC to another in a warehouse setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>amancini</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">385</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">422</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having a 1500 controlling multiple warehouses within a station, as well as a 1200 controlling one of the warehouses, it has been advised that if the 1200 is offline, the 1500 should take over control of that warehouse. One possible solution is to duplicate the inputs and outputs of the 1200, or alternatively, use a relay. It is important to explore all options before making a decision, as it should be a logical and practical solution. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upgrade the 1200 to an ET200SP remote IO rack and install a UPS to prevent unauthorized power-offs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While it may be a good concept, I've been advised that the key strategy is intentionally disabling the 1200 for the 1500 to assume control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>amancini</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm having difficulty grasping the ultimate objective of this project. As mentioned, duplicating the IO is necessary to reach the goal. Utilizing the ET200SP appears to be the most feasible option, but it may render the 1200 obsolete. Is the aim to establish a redundant system where either PLC can be shut down as needed?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am puzzled about the ultimate objective here. Initially, I was provided with a FESTO station, which I wired and programmed with a 1200 controller. Now, I have been given a 1500 controller to oversee the entire station. However, the 1200 is designated to control only one warehouse within the station. If the 1200 is powered off, the 1500 will take over control of the warehouse. It is unclear to me if this arrangement serves a specific purpose, as I fail to see the significance of the 1200 in this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>amancini</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you consult with the project manager, you might gain valuable insights. Understanding your ultimate objective would enable me to offer more cost-effective and superior solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>My college professor doesn't believe that cost is the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>amancini</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While this assignment may not have direct real-world applications, it encourages critical thinking. Both solutions you suggested (duplicating inputs or utilizing relays) should be effective. Now, you just need to determine how to implement the 1500's failover state detection. Best of luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the performance and communication between the 1200 and 1500 units, program the 1200 to provide a continuous output signal with feedback wires connected to the 1500 input. As long as the 1500 unit detects input from the 1200, the logic operation remains active. When the output signal is deactivated, the logic system is initiated. Alternatively, if a communication interface is established between the two units, generate a heartbeat signal. In the event that the heartbeat signal from the 1200 unit ceases for a specified duration, the 1500 unit will take control. It is important to ensure seamless communication and functionality between the units for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Amancini mentioned that if the 1200 is deactivated, the 1500 must take control of the warehouse. There have been instances where I had to inform clients and supervisors at previous workplaces that their requests were not feasible due to budget constraints. I have also acknowledged that certain tasks may be achievable, but beyond my capabilities, requiring the involvement of an engineering and controls company at a significant cost.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I transfer control from one PLC to another in a warehouse setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One possible solution is to duplicate the inputs and outputs of the offline PLC, or use a relay to transfer control to the backup PLC in case of failure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I consider when transferring control between PLCs in a warehouse setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to explore all options before making a decision, ensuring that the chosen solution is logical, practical, and reliable to maintain seamless operations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Which PLCs are mentioned in the discussion thread for controlling warehouses in a station?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discussion mentions a 1500 PLC controlling multiple warehouses and a 1200 PLC specifically controlling one of the warehouses within the station.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why is it advised to have a backup PLC take over control if the primary PLC goes offline in a warehouse setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Having a backup PLC ensures continuity of operations and prevents downtime in case the primary PLC malfunctions or goes offline, maintaining efficiency in warehouse management.</p>
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
