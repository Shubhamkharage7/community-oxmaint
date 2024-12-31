
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im a newcomer to plctalk and this is my first post. Im currently working on programming a micrologix 1400 plc using RS Logix 500. The goal of the project is to operate 8 boilers, with 2 as the primary leads and the remaining 6 as available lags">
    <meta name="keywords" content="plc programming, micrologix 1400, rs logix 500, lead-lag system, boilers, fault sequence, primary leads, available lags, setpoint, cycling off, fault sequence, programming assistance, plc troubleshooting, boiler">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-program-lead-lag-system-for-8-boilers-using-micrologix-1400-plc-need-assistance">
    <title>How to Program Lead-Lag System for 8 Boilers using MicroLogix 1400 PLC - Need Assistance! | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Program Lead-Lag System for 8 Boilers using MicroLogix 1400 PLC - Need Assistance! | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im a newcomer to plctalk and this is my first post. Im currently working on programming a micrologix 1400 plc using RS Logix 500. The goal of the project is to operate 8 boilers, with 2 as the primary leads and the remaining 6 as available lags">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-program-lead-lag-system-for-8-boilers-using-micrologix-1400-plc-need-assistance">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Program Lead-Lag System for 8 Boilers using MicroLogix 1400 PLC - Need Assistance! | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im a newcomer to plctalk and this is my first post. Im currently working on programming a micrologix 1400 plc using RS Logix 500. The goal of the project is to operate 8 boilers, with 2 as the primary leads and the remaining 6 as available lags">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-program-lead-lag-system-for-8-boilers-using-micrologix-1400-plc-need-assistance"
      },
      "headline": "How to Program Lead-Lag System for 8 Boilers using MicroLogix 1400 PLC - Need Assistance!",
      "description": "Hello everyone, Im a newcomer to plctalk and this is my first post. Im currently working on programming a micrologix 1400 plc using RS Logix 500. The goal of the project is to operate 8 boilers, with 2 as the primary leads and the remaining 6 as available lags",
      "author": {
        "@type": "Person",
        "name": "HeroControlsInc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-20",
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
                <h1 class="text-white">How to Program Lead-Lag System for 8 Boilers using MicroLogix 1400 PLC - Need Assistance!</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>HeroControlsInc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6623</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">245</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm a newcomer to plctalk and this is my first post. I'm currently working on programming a micrologix 1400 plc using RS Logix 500. The goal of the project is to operate 8 boilers, with 2 as the primary leads and the remaining 6 as available lags to be activated if one of the leads falls below a setpoint. The lags will cycle off once they reach a specific setpoint. Additionally, all 8 boilers need to undergo a fault sequence while functioning as leads and lags.

The lead-lag logic involves calling on lags in sequence if either lead 1 or lead 2 fall below the setpoint. I've been struggling to find a solution and it feels like I'm going in circles. Any assistance would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are two primary approaches when it comes to boiler operation: 

1. The first approach involves a modulating boiler which adjusts its firing rate based on demand. When the modulating boiler reaches a high firing rate, it triggers the activation of the first lag boiler. Once the modulating boiler reaches its maximum firing rate, it switches roles with the first lag boiler.

2. The second approach entails all boilers adjusting their firing rates in response to demand changes. When the firing rate of the boilers reaches a certain level, the next lag boiler is added. On the other hand, if the firing rate drops below a certain threshold, one boiler is removed from operation.

It is important to consider the size uniformity of the boilers and whether a demand sensor is in place to detect changes, or if header pressure maintenance is the primary focus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Steve, for your response regarding the boiler system. Each boiler is designed to maintain a consistent header pressure and operates at the same firing rate based on this pressure. I monitor the load output of each boiler and make lag calls based on specific setpoints. I have developed 8 different boiler sequencing options, wherein boilers 1-8 can be in various lead and lag positions. However, the challenge arises when a boiler in alarm position is cycled into a lead position, causing the logic to overlook available boilers. For example, if boilers 1 and 2 are designated as lead boilers but are in alarm state when cycled into those positions, they will remain there instead of searching for the next available boiler. This issue needs to be addressed in order to ensure smooth operation of the system and prevent unnecessary downtime.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HeroControlsInc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I may not be able to offer assistance, you may find the information shared by Ron in this thread helpful: http://www.plctalk.net/qanda/showthread.php?t=9499&page=5. In case the link doesn't work, the post can be found at #61 in the same thread: http://www.plctalk.net/qanda/showthread.php?t=9499. Hope this helps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>willxfmr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One helpful tip is to consider using letters instead of numbers to identify your boilers. This will make it easier to maintain a priority table for your boilers. When the header pressure falls below the setpoint for a certain period, it's important to prompt the next boiler in line to start. Using letters, like naming a boiler "C" as opposed to number, can prevent confusion on the priority list. In terms of addressing boiler alarms, if a boiler goes into alarm while supplying steam to the header, the next boiler in line should be activated immediately to prevent pressure drops. Don't wait for the pressure to decrease. PS: HeroControlsInc, please check your private messages for contact details for a possible discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider organizing the logic for each boiler in its own Logic Block. One potential approach is to use two FIFO stacks: one for StandbyBoilers (with six positions) and another for LeadBoilers (with two positions). These variables have indirect references pointing to the appropriate control Block when required. While my explanation may not be perfect, I envision this setup working effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to everyone for the valuable feedback. After some trial and error and a stroke of luck, I finally got it to work using traditional plug and chug logic with comparisons and equals. It may have seemed like an excessive amount of logic, but it did the trick. I was initially hesitant to use commands like load, unload, and others that are more intricate, as I am not familiar with them. If anyone has any recommended links or websites for a quick and practical overview of these types of commands, please share them. Once again, thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HeroControlsInc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Seeking reliable information on Indirect addressing, pointers, and troubleshooting techniques? Many find these topics challenging but ultimately worthwhile to master.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HeroControlsInc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I noticed that you have already found a solution to your issue, but I wanted to share some insights since this problem seems to be a common occurrence in various forums. The challenge you're facing involves managing a specific number of boilers that need to be alternated to ensure continuous operation in case of a fault. To tackle this, you can follow a similar approach that I use for managing pumps.

Firstly, it's beneficial to divide your logic into separate programs. Create a program for the Request logic, typically incorporated into the Tank program. Additionally, develop individual programs for each pump and a dedicated program for the Alternator. Within each pump program, include a rung that identifies if the pump is Available based on certain criteria.

Moving on to the Alternator program, utilize counters to determine which pumps (or boilers) to activate. Assign a counter for each request, such as Lead and Lag requests requiring specific counters. Implement logic to decide when to increment the counters and which pump(s) the Alternator should activate. The Alternator program should be structured into sections including counters, increment delays, increments, and pump requests.

One crucial aspect is managing the Alternator's timing and counter values to ensure effective operation. It's essential to set up a delay before the Alternator switches to the next available pump, preventing quick fluctuations that may disrupt the system. Additionally, use counter values strategically to track pump statuses and make informed decisions.

By incorporating math statements to determine the number of available pumps and implementing increment delays, you can enhance the efficiency of your alternation system. These strategies help optimize the allocation of resources and prevent unnecessary counter increments when a pump is unavailable.

In summary, by following a structured approach with separate programs for logic, effective use of counters, and strategic increment mechanisms, you can streamline the alternation process for your boilers or pumps. This method ensures smooth operation and minimizes disruptions in case of faults or maintenance requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Alternator request pump logic is a simple yet versatile program designed for managing multiple pump requests. Each pump is assigned a specific condition for activation, such as Lead or Lag requests being on a certain pump. This program easily accommodates any number of requests or pumps by utilizing sections for counters, delays, increments, and pump requests. It only activates pumps that are Available, allowing for efficient operation.

One unique feature of the Alternator program is its ability to self-correct if it goes out of sync. For example, if a pump becomes unavailable, the program will adjust itself to maintain consecutive pump activation. While it may require a full rotation of the Lead counter to resynchronize, the Alternator program will always ensure that pumps are running smoothly and efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>HeroControlsInc expressed their gratitude for the feedback they received, mentioning that they were able to make it work through trial and error and a bit of luck. They used traditional plug and chug logic, including compare and equals functions, which seemed like an excessive amount of logic but was effective. They were hesitant to use more complex commands like load and unload due to lack of familiarity. They requested helpful links or sites for a practical overview of these commands. Hi Hero, I am currently dealing with a similar issue where I need to sequence 6 pumps based on process setpoint conditions. I am using Structured Text with FOR loops, but I am facing challenges as the pumps are turning on immediately after each other.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Itz_kleek</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I would greatly appreciate it if you could provide some insights on the methodology you used to achieve this solution. I understand that it was quite some time ago.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Itz_kleek</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I program a lead-lag system for 8 boilers using a MicroLogix 1400 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To program a lead-lag system for 8 boilers using a MicroLogix 1400 PLC, you can utilize RS Logix 500 to set up the necessary logic. The system should involve selecting 2 boilers as primary leads and the remaining 6 as lags to be activated based on setpoints, with cycling off once the setpoint is reached.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the key concept behind a lead-lag control system for boilers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The key concept of a lead-lag control system for boilers is to have primary lead boilers operating first and then activating lag boilers based on specific conditions, such as if a lead boiler falls below a setpoint. This ensures efficiency and redundancy in boiler operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot issues in programming lead-lag logic for boilers on a MicroLogix 1400 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When facing challenges in programming lead-lag logic for boilers using a MicroLogix 1400 PLC, it can be helpful to break down the problem into smaller steps, review your logic for any errors, and seek assistance from online forums or PLC experts for guidance.</p>
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
