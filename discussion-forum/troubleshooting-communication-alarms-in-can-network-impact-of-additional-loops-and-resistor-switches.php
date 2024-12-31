
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently overseeing a manufacturing process that involves an IPC, multiple PLCs, and various drives all interconnected through a CAN network. Yesterday, we encountered several communication alarms across the network. To troubleshoot the issue, I first checked the voltage levels on the CAN high and low lines, which">
    <meta name="keywords" content="troubleshooting communication alarms, can network communication issues, impact of additional loops on can network, resistor switches in can network, can network resistance measurement, analyzing can network terminators">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-alarms-in-can-network-impact-of-additional-loops-and-resistor-switches">
    <title>Troubleshooting Communication Alarms in CAN Network: Impact of Additional Loops and Resistor Switches | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Alarms in CAN Network: Impact of Additional Loops and Resistor Switches | Oxmaint Community">
    <meta property="og:description" content="I am currently overseeing a manufacturing process that involves an IPC, multiple PLCs, and various drives all interconnected through a CAN network. Yesterday, we encountered several communication alarms across the network. To troubleshoot the issue, I first checked the voltage levels on the CAN high and low lines, which">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-alarms-in-can-network-impact-of-additional-loops-and-resistor-switches">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Alarms in CAN Network: Impact of Additional Loops and Resistor Switches | Oxmaint Community">
    <meta name="twitter:description" content="I am currently overseeing a manufacturing process that involves an IPC, multiple PLCs, and various drives all interconnected through a CAN network. Yesterday, we encountered several communication alarms across the network. To troubleshoot the issue, I first checked the voltage levels on the CAN high and low lines, which">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-alarms-in-can-network-impact-of-additional-loops-and-resistor-switches"
      },
      "headline": "Troubleshooting Communication Alarms in CAN Network: Impact of Additional Loops and Resistor Switches",
      "description": "I am currently overseeing a manufacturing process that involves an IPC, multiple PLCs, and various drives all interconnected through a CAN network. Yesterday, we encountered several communication alarms across the network. To troubleshoot the issue, I first checked the voltage levels on the CAN high and low lines, which",
      "author": {
        "@type": "Person",
        "name": "aamirawan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting Communication Alarms in CAN Network: Impact of Additional Loops and Resistor Switches</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">469</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">123</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently overseeing a manufacturing process that involves an IPC, multiple PLCs, and various drives all interconnected through a CAN network. Yesterday, we encountered several communication alarms across the network. To troubleshoot the issue, I first checked the voltage levels on the CAN high and low lines, which were within the appropriate range: CAN H measured between 2.6 to 2.9V and CAN L between 2.1 to 2.5V. I then powered down the system and tested the resistance between CAN H and CAN L, which showed a reading of 43 ohms. Given that there should be two 120-ohm terminating resistors at each end, I expected the reading to be around 60 ohms.

One aspect that puzzled me was the presence of multiple CAN adapters. Some of these adapters split the CAN signal into separate loops, each with its own set of resistors. I am unsure whether these additional loops and resistors form distinct networks or if they are part of the network under investigation. The specific network I am addressing is highlighted in green boxes in the provided image, while the other loops connected to the same adapter are marked in red. I am uncertain if these additional loops have any impact on my network since they originate from the same adapter.

After observing the 43-ohm resistance reading, I suspected that superfluous resistors might be influencing the network. To test this theory, I disabled the terminator switch at the last node, which raised the network's resistance to 70 ohms. Surprisingly, this action resolved the communication issues. While it is standard practice for the last node to have its terminator enabled, this adjustment brought the network's resistance closer to the expected 60 ohms, temporarily solving the problem.

Currently, I am seeking to identify the root cause of this issue. I would appreciate insights on the following questions: What could have caused the 43-ohm resistance measurement in the loop? Do the additional loops/devices attached to the CAN adapters impact the network I am analyzing? Why did deactivating the last resistor switch restore communication, even though my network initially only had two terminators? Was this switch the key factor in aligning the network resistance around 60 ohms?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello aamirawan91, I share the same inquiry mentioned in paragraph 2 of your initial post. Do you know the part number of the CAN adapter provided by the machine builder? Have they included any manuals or datasheets for this component? If not, could you please share a picture of the device? This way, someone may be able to identify it and offer a user manual for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I may not have the exact part numbers, I can provide a visual reference. The grey CAN cable runs from the IPC (the initial device) and terminates downward. Above this cable, there are two connectors (male and female) that split into two separate loops with the use of green cables. In the image, one of the cables appears to be unplugged from the female connector. A terminating resistor is located at the center, with a switch above it to toggle the resistor on or off.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing the picture with us. Unfortunately, the part number of the product is not clear, which makes it challenging for others to identify it. Based on my initial observations, it appears to be a passive CAN coupler with two SDSub9 connectors, two sockets for direct screw connections, and a terminator resistor that can be activated with a jumper.

If my interpretation is accurate, it suggests that there are only two adapters with the resistor activated, positioned at the two farthest nodes. However, I am puzzled by the discrepancy between the two drawings. I cannot locate the "CHILL ROLL" device on page one as shown on page two. For proper termination, the resistance between CAN_H and CAN_L should be 60 OHM.

In order to provide more specific recommendations regarding the termination location, it would be helpful to see the complete network layout. This will allow us to determine the optimal placement for the terminator.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your input, AlfredoQuintero. I appreciate your insights on the adapter being one segment. After discovering a mistake in the drawing, I reached out to the OEM who promptly apologized and provided a corrected version. This particular drawing had me puzzled for quite some time!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello aamirawan, absolutely no problem. If you find a solution, please keep us informed. If you encounter more issues, I can suggest a cost-effective solution to gather additional diagnostic information. It appears that the issue may be related to termination, as indicated in previous discussions. If you verify the machine builder's design and align the wiring accordingly, and there are no more communication errors, you can be quite confident (although not guaranteed) that your system will operate smoothly. Following proper wiring rules, CAN is highly robust. Best of luck to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>An update: The issue resurfaced after 15 days, revealing a faulty CAN communication card in the IPC. As a result, the entire IPC unit had to be replaced to resolve the issue effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, aamirawan, for sharing your experience! It's great to hear that you found a solution to the problem. Your feedback is greatly appreciated as it's rewarding to know that our assistance has made a positive impact for someone taking the initiative to repair an important machine from a distance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero commented, "aamirawan, that sounds like quite an ordeal! I'm glad you found a solution. Thank you for sharing your feedback, it's always rewarding to know that our assistance has been valuable, even to someone far away who is determined to troubleshoot and repair important equipment." It's important for everyone to share their solutions so others can benefit from their experiences. It's common for people to disappear after resolving their issues. Let's continue to support each other in finding solutions!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could have caused the 43-ohm resistance measurement in the loop?</h4>
<p class='text-muted'><strong>Answer:</strong> - The 43-ohm resistance measurement in the loop could have been caused by the presence of additional loops with their own resistors, superfluous resistors influencing the network, or possibly a faulty connection affecting the overall resistance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Do the additional loops/devices attached to the CAN adapters impact the network I am analyzing?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, additional loops and devices attached to the CAN adapters can impact the network being analyzed, as they introduce extra resistors and can alter the overall network resistance and communication behavior.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why did deactivating the last resistor switch restore communication, even though my network initially only had two terminators? Was this switch the key factor in aligning the network resistance around 60 ohms?</h4>
<p class='text-muted'><strong>Answer:</strong> - Deactivating the last resistor switch likely restored communication by adjusting the network resistance closer to the expected value of 60 ohms. The switch may have been a key factor in aligning the resistance properly, especially if the presence of additional loops and resistors was affecting the network performance.</p>
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
