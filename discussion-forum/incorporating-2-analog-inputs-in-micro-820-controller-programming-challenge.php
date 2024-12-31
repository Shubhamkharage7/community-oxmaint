
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am relatively new to programming but I am faced with a challenge that I need to resolve. I am looking to incorporate 2 analog inputs ranging from 4 to 20mA into my program. The goal is for the program to calculate the average of these 2">
    <meta name="keywords" content="analog inputs, micro 820 controller, programming challenge, 4-20ma, average calculation, sampling time, multiply by constant, updated information, new sample, micro 8202080-lc20-20qbb, 2711">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/incorporating-2-analog-inputs-in-micro-820-controller-programming-challenge">
    <title>Incorporating 2 Analog Inputs in micro 820 Controller - Programming Challenge | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Incorporating 2 Analog Inputs in micro 820 Controller - Programming Challenge | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am relatively new to programming but I am faced with a challenge that I need to resolve. I am looking to incorporate 2 analog inputs ranging from 4 to 20mA into my program. The goal is for the program to calculate the average of these 2">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/incorporating-2-analog-inputs-in-micro-820-controller-programming-challenge">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Incorporating 2 Analog Inputs in micro 820 Controller - Programming Challenge | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am relatively new to programming but I am faced with a challenge that I need to resolve. I am looking to incorporate 2 analog inputs ranging from 4 to 20mA into my program. The goal is for the program to calculate the average of these 2">
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
        "@id": "https://community.oxmaint.com/discussion-forum/incorporating-2-analog-inputs-in-micro-820-controller-programming-challenge"
      },
      "headline": "Incorporating 2 Analog Inputs in micro 820 Controller - Programming Challenge",
      "description": "Hello everyone, I am relatively new to programming but I am faced with a challenge that I need to resolve. I am looking to incorporate 2 analog inputs ranging from 4 to 20mA into my program. The goal is for the program to calculate the average of these 2",
      "author": {
        "@type": "Person",
        "name": "russell carey"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-06",
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
                <h1 class="text-white">Incorporating 2 Analog Inputs in micro 820 Controller - Programming Challenge</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>russell carey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">262</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">189</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am relatively new to programming but I am faced with a challenge that I need to resolve. I am looking to incorporate 2 analog inputs ranging from 4 to 20mA into my program. The goal is for the program to calculate the average of these 2 inputs, set a sampling time, potentially multiply them by a constant, and display the updated information with each new sample. I am utilizing the micro 8202080-LC20-20QBB controller along with the 2711R-T4T4 Panelview 800 HMI for this project.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What level of accuracy is required for the sample time, such as±1ms, ±10ms, or ±100ms? Are you working on a school assignment? What data types are used for the samples, such as raw integer counts or floating-point values? What data type is used for the displayed value? Will the sample time vary during the process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Dr. Bitboy, 

I believe a sample time of 0.5 seconds should suffice for the data type of 0 to 5VDC. I have two inputs of this type and I need to calculate the average of the two inputs to display on the screen mentioned earlier. Would the "running average over n samples" instruction block be suitable for this task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>russell carey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Russell Carey asked, "Hi Dr. Bitboy, I believe a sample time of 0.5 seconds should suffice. The data type is 0 to 5vdc. I have two inputs for this and I want to calculate the average of these inputs and showcase the results on the screen mentioned earlier. Would the "running average over n samples" instruction block be suitable for this task? This project is not a homework assignment, but rather for a grape harvester. The machine has both left and right sides that can be adjusted up and down, allowing it to remain level on uneven terrain. It is crucial to always know the overall height of the machine from the operator's cabin. The factory units on the machines have ceased to function over time. Instead of spending $8,000 per machine to replace the factory units (totaling 4 machines), I prefer to address the issue with a PLC. The existing units can input a setpoint for maximum and minimum height and display the data as a percentage. While this feature is convenient, it would complicate the program. Initially, I would like to display some data, then adjust it by a constant to provide a suitable range for reading on the screen."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>russell carey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Analog inputs typically range from 0 to 4095. To process these inputs linearly, a repeating timer (XIO tmr.QTON tmr T#1000ms...) can be used. On each scan cycle when the timer expires, mathematical calculations are performed (+ IO_EM_AI_00 IO_EM_AI_01 summed_inputs/ summed_inputs 2 average_input* average_input factor final_result) within a single rung.

The XIO instruction represents a Normally Closed contact, while tmr refers to the timer object for the TON timer. The tmr.Q bit indicates the timer expiry for the TON timer. During most scan cycles, the value will be 0, leading to a True output from XIO and time accumulation in the timer.

After accumulating time, the value becomes 1 for a scan cycle, triggering a False output from XIO on the next cycle. This resets the timer and tmr.Q bit to 0, restarting the process. TON is the Timer-ON delay timer instruction with a time literal value of T#1000ms (equivalent to 1000 milliseconds).

The calculations involve adding IO_EM_AI_00 and IO_EM_AI_01, dividing the summed result, and calculating the average input value. The final result is obtained by scaling the raw input value (0-4095) to the desired engineering value, such as height.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I incorporate 2 analog inputs ranging from 4 to 20mA into my program using the micro 820 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To incorporate 2 analog inputs into your program, you can use the analog input modules compatible with the micro 820 controller. These modules can convert the analog signals into digital values that can be processed by the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I calculate the average of the 2 analog inputs in my program?</h4>
<p class='text-muted'><strong>Answer:</strong> - To calculate the average of the 2 analog inputs, you can sum the values of the two inputs and then divide the sum by 2 to get the average. This average can then be used for further processing or display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do I set a sampling time for the analog inputs in my program?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can set a sampling time by configuring the scan time in your program. This scan time determines how often the controller reads the analog inputs and updates the values. By adjusting the scan time, you can control the frequency of sampling.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to multiply the analog inputs by a constant in the program?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can multiply the analog inputs by a constant in your program. By incorporating the multiplication operation in your code, you can apply the desired constant factor to the analog input values before further processing or display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I display the updated information with each new sample on the Panelview 800 HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - To display the updated information on the Panelview 800 HMI,</p>
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
