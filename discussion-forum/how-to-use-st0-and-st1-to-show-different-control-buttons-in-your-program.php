
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, as a new member, I have a question regarding displaying two sets of control buttons. I am attempting to show group 1 (C11) when the Link button is pressed, and then switch to displaying group 2 (C21) when the Link button is unselected. I have found that">
    <meta name="keywords" content="st0, st1, control buttons, program, display, group 1, group 2, link button, c11, c21, functionality, reset, unselected, pressed, switch, programming, development, software, user">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-st0-and-st1-to-show-different-control-buttons-in-your-program">
    <title>How to Use ST0 and ST1 to Show Different Control Buttons in Your Program | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use ST0 and ST1 to Show Different Control Buttons in Your Program | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, as a new member, I have a question regarding displaying two sets of control buttons. I am attempting to show group 1 (C11) when the Link button is pressed, and then switch to displaying group 2 (C21) when the Link button is unselected. I have found that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-st0-and-st1-to-show-different-control-buttons-in-your-program">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use ST0 and ST1 to Show Different Control Buttons in Your Program | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, as a new member, I have a question regarding displaying two sets of control buttons. I am attempting to show group 1 (C11) when the Link button is pressed, and then switch to displaying group 2 (C21) when the Link button is unselected. I have found that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-st0-and-st1-to-show-different-control-buttons-in-your-program"
      },
      "headline": "How to Use ST0 and ST1 to Show Different Control Buttons in Your Program",
      "description": "Hello everyone, as a new member, I have a question regarding displaying two sets of control buttons. I am attempting to show group 1 (C11) when the Link button is pressed, and then switch to displaying group 2 (C21) when the Link button is unselected. I have found that",
      "author": {
        "@type": "Person",
        "name": "PLCnoobTW"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-26",
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
                <h1 class="text-white">How to Use ST0 and ST1 to Show Different Control Buttons in Your Program</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCnoobTW</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">348</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">145</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, as a new member, I have a question regarding displaying two sets of control buttons. I am attempting to show group 1 (C11) when the "Link" button is pressed, and then switch to displaying group 2 (C21) when the "Link" button is unselected. I have found that using ST0 does not reset the group1 button after unselecting "Link". Should I use ST0 or ST1 at the beginning of my program for this functionality to work properly? Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about the task, it seems like you require two buttons: one for linking and one for unlinking. The first button should be displayed when the link is false, while the second button should be displayed when the link is true. To achieve this, ensure that Button 1 is visible when the link bit is false, and Button 2 is visible when the link bit is true. Utilize the toggle function on the HMI to switch the link bit. You may also consider using the first scan bit to reset the link bit upon PLC start or power up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ST1 is a constant presence in programming scenarios involving DirectSoft or Do-More, where specific conditions are required in the ladder editor before certain instructions can be executed. On the other hand, ST0 only functions during the initial scan following a power-up. Unlike the first scan bit in an Allen Bradley PLC, which is true only for a single scan upon returning to RUN mode, ST0's behavior resembles that of a BRX or Do-More code snippet. The Do-More software handles program tasks in a unique manner that may require further exploration. If placed in the Main, the program should run during every scan cycle. In relation to controlling HMI functions, bits can be latched and unlatched (SET, RST), necessitating adjustments to the conditional statements preceding these instructions and the addition of a new rung with bits set to the opposite state to accommodate the opposite condition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ST1 is continuously active, requiring frequent resetting of C11 and C21. Whether or not this is desired is uncertain, as it does not seem to align with your intentions. When C40 is enabled, C11 is activated for one cycle. Conversely, when C40 is disabled, C21 is activated for one cycle. Given the context of HMI buttons, it is unlikely that C11 or C21 will be visible on the HMI display.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To clarify, press the select button to toggle, then utilize the N/O & N/C to control button visibility by activating or deactivating bits. I have demonstrated this concept by displaying buttons in both disabled and enabled states to illustrate functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky suggested implementing a toggle function for the select button, utilizing the N/O & N/C to control button visibility. I have demonstrated how the buttons can be shown as either disabled or enabled to showcase this functionality. When the link or select button is pressed, the first set of start buttons should appear. Then, when the link or select button is released (NC), the second set with other start buttons should be displayed.

I have conducted a similar test to yours, but encountered an issue where the first set of buttons did not disappear when I unlinked. I attempted to use the set/reset function for the link bit, only to discover that ST0 did not turn the link bit off. I then tried ST1 as an alternative, observing that other samples utilized ST0 and questioning if there was an error in my test. Thank you for your assistance in testing this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCnoobTW</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>ST0 is the initial scan, occurring only once after power up or program execution, while ST1 remains active continuously. Choosing ST0 may be ideal as it resembles initialization logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PLCnoobTW inquired about a crucial aspect in programming a PLC system. It is essential to clearly define how the system should operate when transitioning into RUN mode. What specific states should the system be in at this stage? Which inputs can be examined for control? How are these inputs managed through the HMI interface, whether it involves physical buttons, switches, or an LCD panel? Should the inputs be controlled manually through momentary switches, toggles, or other means? Additionally, clarity is needed on which outputs are to be manipulated and the corresponding actions when inputs have a value of 1 or return to 0. How should the system respond to various combinations of inputs being activated?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not a fan of constantly resetting bits during each scan to compensate for programming errors. In some cases, I have observed the practice of placing 30-40 OTU at the beginning of every program to unlatch every bit on every scan as a precautionary measure. However, I question why things are getting stuck in the first place, and why a fault clear does not resolve the issue. If I need a selection to occur, I prefer to simply toggle it on or off using different methods such as a toggle or a radio button.

Instead of unlatching all bits on every scan as seen with ST1/ST0 in the initial rung, I suggest using two buttons to set/reset opposing contacts or bits. This approach achieves the same outcome without unnecessary repetition. By utilizing one button to toggle the set/reset of two outputs/bits, you can streamline the process.

While some may opt to use specialized HMI functions for maintained button action, I prefer to avoid this practice. I have encountered issues with conversions and functionality discrepancies when a new HMI is installed, leading me to advocate for keeping all logic within the controller and utilizing basic HMI functions. This strategy ensures compatibility and simplifies maintenance, in my perspective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I display different sets of control buttons in my program based on user input?
- To display different sets of control buttons based on user input, you can use ST0 and ST1 instructions in your program. ST0 is used to show group 1 buttons, while ST1 is used to show group 2 buttons.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is ST0 not resetting the group 1 buttons after unselecting the "Link" button?</h4>
<p class='text-muted'><strong>Answer:</strong> - If ST0 is not resetting the group 1 buttons after unselecting the "Link" button, you may need to ensure that the logic in your program correctly switches between showing group 1 and group 2 buttons based on the state of the "Link" button.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Should I use ST0 or ST1 at the beginning of my program for this functionality to work properly?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure proper functionality of displaying different control buttons, you can use ST0 or ST1 at the beginning of your program depending on which set of buttons you want to initially display. Make sure to implement the logic to switch between the sets based on user actions.</p>
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
