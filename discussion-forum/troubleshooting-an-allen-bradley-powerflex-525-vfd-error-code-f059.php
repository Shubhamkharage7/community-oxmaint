
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Today, I successfully powered on my new-to-me equipment only to encounter a F059 error on the VFD. Despite finding 24v on S1, no voltage on S2, and 48v on S+, I am unable to enable the relays to open the main air supply to the machine. All safety operations">
    <meta name="keywords" content="allen bradley powerflex 525 vfd, error code f059, troubleshooting, vfd error f059, relays not opening, main air supply issue">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-an-allen-bradley-powerflex-525-vfd-error-code-f059">
    <title>Troubleshooting an Allen Bradley PowerFlex 525 VFD Error Code F059 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting an Allen Bradley PowerFlex 525 VFD Error Code F059 | Oxmaint Community">
    <meta property="og:description" content="Today, I successfully powered on my new-to-me equipment only to encounter a F059 error on the VFD. Despite finding 24v on S1, no voltage on S2, and 48v on S+, I am unable to enable the relays to open the main air supply to the machine. All safety operations">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-an-allen-bradley-powerflex-525-vfd-error-code-f059">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting an Allen Bradley PowerFlex 525 VFD Error Code F059 | Oxmaint Community">
    <meta name="twitter:description" content="Today, I successfully powered on my new-to-me equipment only to encounter a F059 error on the VFD. Despite finding 24v on S1, no voltage on S2, and 48v on S+, I am unable to enable the relays to open the main air supply to the machine. All safety operations">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-an-allen-bradley-powerflex-525-vfd-error-code-f059"
      },
      "headline": "Troubleshooting an Allen Bradley PowerFlex 525 VFD Error Code F059",
      "description": "Today, I successfully powered on my new-to-me equipment only to encounter a F059 error on the VFD. Despite finding 24v on S1, no voltage on S2, and 48v on S+, I am unable to enable the relays to open the main air supply to the machine. All safety operations",
      "author": {
        "@type": "Person",
        "name": "Rmgy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-28",
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
                <h1 class="text-white">Troubleshooting an Allen Bradley PowerFlex 525 VFD Error Code F059</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rmgy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">955</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">490</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Today, I successfully powered on my new-to-me equipment only to encounter a F059 error on the VFD. Despite finding 24v on S1, no voltage on S2, and 48v on S+, I am unable to enable the relays to open the main air supply to the machine. All safety operations are functioning properly, but there is no airflow. How can this issue be resolved?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Both terminals S1 and S2 must be linked to the positive terminal (S+) using either your safety circuit or jumpers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The connection of both S1 and S2 to S+ is crucial for proper functionality, whether through a safety circuit or jumpers. It appears there may be an issue with the 24 volts on S2, while the presence of 48 volts on S+ indicates a potential internal problem within the drive. Further troubleshooting may be necessary to address these issues effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rmgy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is your reference point for conducting voltage checks? Can you please specify the voltage between terminal 11 and terminal 4?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Safety inputs S1 and S2 are typically connected to S+ through dry contacts, enabling the signals to be transmitted effectively and securely. This configuration ensures optimal safety measures are in place for the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the reference used for voltage checks and the specific voltage reading between terminal 11 and terminal 4. The voltage reading on the factory jumper connecting 11 and 2 is 48v. It is indicated that jumpers should be connected from terminal 1 to terminal 11.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rmgy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Terminal 1 is designated as the Stop terminal, while Terminal 2 serves as the Start/FWD terminal. However, that was not my query. When checking voltage, where should the black lead of your meter be placed? The factory jumper is connected to termInal 11 and 1, not 2. Is this a recent installation? If so, it appears that the wiring may have been done incorrectly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, a user mentioned that there is a 48v connection on the factory jumper between terminals 11 and 2, likely serving as a link to terminal 1. Another user pointed out that terminal 1 signifies the Stop function, while terminal 2 indicates Start/FWD. When measuring voltage, it's essential to note where the black lead of the meter is connected. Additionally, it was noted that the factory jumper is positioned between terminals 11 and 1, with the safety relay connected to terminal marked as n24.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rmgy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent comment, Rmgy mentioned the importance of safety when connecting to terminal n24 on a relay. When measuring voltages, it is crucial to reference them to terminal 4, which serves as the common connection for the drive. It's essential to be cautious when connecting to n24, as it may involve dealing with multiple 24vdc sources. To ensure accurate readings, measure S+, S1, S2, and 11 to terminal 4 and share the results for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information. Initially, I thought I was dealing with the safety circuit relays linked to the 24v controlling the relays. It seems the S terminals may actually be a switch tied to the main air supply coil, which isn't activating during startup. We recently installed this machine at the factory and have yet to witness it in operation. We are currently in the process of troubleshooting any potential issues before it goes into production.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rmgy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After completing a new installation, it is important to thoroughly inspect the wiring of the drive system. In order to ensure safety compliance, it is recommended to follow a specific circuit configuration for safety measures. This typically involves connecting the S+ wire through redundant contacts on a safety device and then back to S1 and S2 on a Rockwell PLC. If your safety device only has one contact returning to S1, it is necessary to jumper S1 to S2. It is important to note that the drive does not directly control the relays from the Safety terminals, as these are input signals from the safety device. The safety relay is usually powered from a separate source, which may pass through various safety devices such as E-Stop Pushbuttons, Gates, light curtains, and pull cords. If you have a schematic of the drive interconnections, please share it so that we can verify its accuracy. By following these guidelines, you can ensure a safe and effective installation process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does the Allen Bradley PowerFlex 525 VFD Error Code F059 indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - The F059 error on the Allen Bradley PowerFlex 525 VFD indicates a specific issue with the VFD system that needs to be addressed for proper functioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot a F059 error on my Allen Bradley PowerFlex 525 VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot a F059 error on the Allen Bradley PowerFlex 525 VFD, you can check the voltage readings on S1, S2, and S+ terminals, ensure proper relay operation, and verify the airflow to the machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if I encounter a F059 error on my VFD and the relays are not enabling to open the main air supply?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter a F059 error on your VFD and the relays are not enabling to open the main air supply, you can check for correct voltage readings, inspect safety operations, and ensure proper airflow for troubleshooting and resolution.</p>
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
