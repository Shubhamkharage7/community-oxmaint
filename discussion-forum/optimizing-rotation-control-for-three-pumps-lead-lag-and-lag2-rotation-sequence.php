
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in search of the most effective method for controlling three pumps in rotation. Despite my efforts to find solutions on various forums, I have not been successful in finding exactly what I need. To provide more clarity, I will provide detailed information. The two attached">
    <meta name="keywords" content="pump rotation control, lead lag lag2 rotation sequence, pump control system, pump rotation strategy, efficient pump rotation, managing pump rotation, pump rotation automation, pump">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-rotation-control-for-three-pumps-lead-lag-and-lag2-rotation-sequence">
    <title>Optimizing Rotation Control for Three Pumps: Lead, Lag, and Lag2 Rotation Sequence | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Rotation Control for Three Pumps: Lead, Lag, and Lag2 Rotation Sequence | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in search of the most effective method for controlling three pumps in rotation. Despite my efforts to find solutions on various forums, I have not been successful in finding exactly what I need. To provide more clarity, I will provide detailed information. The two attached">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-rotation-control-for-three-pumps-lead-lag-and-lag2-rotation-sequence">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Rotation Control for Three Pumps: Lead, Lag, and Lag2 Rotation Sequence | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in search of the most effective method for controlling three pumps in rotation. Despite my efforts to find solutions on various forums, I have not been successful in finding exactly what I need. To provide more clarity, I will provide detailed information. The two attached">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-rotation-control-for-three-pumps-lead-lag-and-lag2-rotation-sequence"
      },
      "headline": "Optimizing Rotation Control for Three Pumps: Lead, Lag, and Lag2 Rotation Sequence",
      "description": "Hello everyone, I am in search of the most effective method for controlling three pumps in rotation. Despite my efforts to find solutions on various forums, I have not been successful in finding exactly what I need. To provide more clarity, I will provide detailed information. The two attached",
      "author": {
        "@type": "Person",
        "name": "829"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-01",
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
                <h1 class="text-white">Optimizing Rotation Control for Three Pumps: Lead, Lag, and Lag2 Rotation Sequence</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>829</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2530</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">70</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in search of the most effective method for controlling three pumps in rotation. Despite my efforts to find solutions on various forums, I have not been successful in finding exactly what I need. To provide more clarity, I will provide detailed information. The two attached PDF files illustrate that the test "works" but does not increment as desired. I believe implementing some mathematical calculations could resolve this issue. However, I am seeking a more straightforward and efficient approach.

The main issue at hand is controlling three pumps in a rotation sequence, specifically Lead, Lag, Lag2. The control tank dictates which pumps to activate based on preset level setpoints. Firstly, Lead is activated; if it cannot maintain the required level, Lag is then activated. If the level continues to drop, Lag2 is activated. Once the set level is reached, the pumps turn off and move to the next in rotation.

Currently, I am using three counters to manage the rotation status of the pumps. My current code, although functional to some extent, requires manual intervention when a pump becomes unavailable. I am not satisfied with this method as it does not automatically adjust when the pump is back in service. My aim is to establish a seamless rotation where if a pump is temporarily removed, the system switches to a lead-lag operation until the pump is back online, at which point it seamlessly integrates back into the rotation sequence.

In essence, I require the pumps to rotate in a lead-lag-lag2 sequence consistently. For instance, the rotation order would be Lead, Lag, Lag2, then rotate after Lead drops, Lag2, Lead, Lag, and so on. If Pump 1 is temporarily out of service, the rotation would switch between Pumps 2 and 3, but upon Pump 1's return, it would resume its position in the sequence.

The counters used for rotation are as follows:
- Pump 1 rotation counter: C5:3
- Pump 2 rotation counter: C5:4
- Pump 3 rotation counter: C5:4

I have relocated the counters' accumulation to N10:40, 41, and 42 respectively. If the explanation above is unclear, please let me know. I am open to any examples, resources, or guidance related to this issue. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I failed to mention that I am utilizing RSLogix 500 with a Micrologix 1400 PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>829</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I completed a similar project using a Micrologix - please refer to the attached document. My motor selection process was based on minimizing runtime, ultimately designating the motor with the lowest runtime as the lead motor. If a motor is unavailable, due to an alarm for example, it is not considered as the lead motor. Take a look at the attachment and share your thoughts with us.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to bear in mind that equipment can fail, especially if the pumps are identical in make and have been used for the same amount of hours. The likelihood of these pumps failing around the same time is high, depending on their duty, process, and maintenance schedule. This is particularly crucial to consider when these pumps are part of a safety system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Managing financial records is crucial for businesses. I switched the order to be Lg, Lg2, L instead of L, Lg, Lg2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the responses and will review them thoroughly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>829</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I will make an effort to create a PDF document and share the code I use for this process. While my code is in Studio 5000, the fundamental concept remains consistent across platforms. I have implemented a system where pumps alternate on Sundays, with additional logic for ramping up and shutting down the pumps. This process operates continuously, running 24/7. I will aim to complete this task over the upcoming weekend.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, user g.mccormick mentioned their intention to share PDF files and code for implementing a pumping schedule. While their code is in Studio 5000, the concept remains consistent across platforms. Their approach involves alternating pumps every Sunday and incorporating ramping logic for starting and stopping the pumps. Their process operates continuously, running 24/7. They plan to share the materials over the weekend.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>829</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It never crossed my mind to rotate every Sunday, but I'm curious about the reasoning behind it. I have a unique situation where many of my locations have multiple duty pumps for maintaining pressure and a single massive fire flow pump. To prevent damage from sitting too long, I rotate the fire flow pump at night every 50 cycles of the others. I wish I could use VFD's to slowly spin the pumps without causing sudden pressure spikes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am reposting the attachment mentioned in post #3, as I was informed via PM that it had been removed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to a genuine gentleman and intellect.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>829</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below are the forgotten examples that I needed to upload.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the main issue being discussed in the thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - The main issue is optimizing rotation control for three pumps in a sequence of Lead, Lag, and Lag2 based on preset level setpoints.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How are the pumps controlled in the rotation sequence?</h4>
<p class='text-muted'><strong>Answer:</strong> - The control tank dictates which pumps to activate based on preset level setpoints, starting with Lead. If Lead cannot maintain the required level, Lag is activated, and if the level continues to drop, Lag2 is activated.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What approach is currently being used to manage the rotation status of the pumps?</h4>
<p class='text-muted'><strong>Answer:</strong> - The current approach involves using three counters to manage the rotation status of the pumps, but it requires manual intervention when a pump becomes unavailable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the desired outcome for the rotation sequence of the pumps?</h4>
<p class='text-muted'><strong>Answer:</strong> - The goal is to establish a seamless rotation where if a pump is temporarily removed, the system switches to a lead-lag operation until the pump is back online, seamlessly integrating it back into the rotation sequence.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Can you provide more information about the counters used for rotation?</h4>
<p class='text-muted'><strong>Answer:</strong> - The counters used for rotation are: Pump 1 rotation counter at C5:3, Pump 2 rotation counter at C5:4, and Pump 3 rotation counter at C5:4, with their accumulation relocated to N10:40, 41, and 42 respectively.</p>
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
