
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking to link a level transmitter current output to four separate VFDs and one PLC. My initial idea is to utilize PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup would necessitate the use of four splitters according">
    <meta name="keywords" content="level transmitter, analog output, vfds, plc, pr-3108 splitters, cascade setup, lt power, current output, link multiple devices, efficient connection, connecting devices, signal distribution, analog signal, industrial automation, signal splitting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-level-transmitter-analog-output-to-multiple-vfds-and-plcs-efficiently">
    <title>How to Connect Level Transmitter Analog Output to Multiple VFDs and PLCs efficiently | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Level Transmitter Analog Output to Multiple VFDs and PLCs efficiently | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking to link a level transmitter current output to four separate VFDs and one PLC. My initial idea is to utilize PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup would necessitate the use of four splitters according">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-level-transmitter-analog-output-to-multiple-vfds-and-plcs-efficiently">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Level Transmitter Analog Output to Multiple VFDs and PLCs efficiently | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking to link a level transmitter current output to four separate VFDs and one PLC. My initial idea is to utilize PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup would necessitate the use of four splitters according">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-level-transmitter-analog-output-to-multiple-vfds-and-plcs-efficiently"
      },
      "headline": "How to Connect Level Transmitter Analog Output to Multiple VFDs and PLCs efficiently",
      "description": "Hello everyone, I am looking to link a level transmitter current output to four separate VFDs and one PLC. My initial idea is to utilize PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup would necessitate the use of four splitters according",
      "author": {
        "@type": "Person",
        "name": "Prasanthen"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">How to Connect Level Transmitter Analog Output to Multiple VFDs and PLCs efficiently</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Prasanthen</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">215</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">190</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking to link a level transmitter current output to four separate VFDs and one PLC. My initial idea is to utilize PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup would necessitate the use of four splitters according to my plan. Does anyone have a more effective suggestion or alternative method for this scenario? I have included the current proposal for your perusal. It is important to mention that the LT is not powered by a loop. Thank you in advance for your assistance. - Prasanth</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>An alternative method involves sending the signal directly to the PLC and connecting a 4-channel analog output card to control the VFDs efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alan_505 suggested an alternate method of connecting the signal directly to the PLC and utilizing a 4-channel analog output card for each of the VFDs. Thank you, Alan, for your input. The project requires an Intelligent Pump Control (IPC) system, with the primary objective being to ensure the continuous operation of the pump in the event of a PLC malfunction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Prasanthen</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By utilizing a current loop, you have the option to connect at least 2 or 3 devices in series, which can help minimize the need for multiple splitters. Although unconventional, I have observed a successful connection of a 4-20mA signal to 4 different instruments. The key factor here is the current strength, while the series resistance may be slightly elevated. Regardless, it is worth experimenting with to optimize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid using splitters and instead utilize the 4-20mA analog sensors in a series with a VFD and PLC. Connect the analog output of each VFD as the analog input for the next VFD in the system. This method ensures a seamless connection and optimal performance for your industrial equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To effectively distribute a 4-20mA signal to multiple drives, utilize two splitters. Connect the level 4-20mA signal to the analog inputs of the splitters in a series before connecting the splitter outputs to the various drives. One challenge when running a 4-20mA signal in series to analog inputs is the issue of load resistance and potential common mode voltage due to differing grounding potentials of the splitters. Refer to the splitter spec sheet to determine input resistance and the level transmitter spec sheet to ascertain the load resistance it can accommodate. To minimize common mode issues, power the splitters from the same DC power supply. This will greatly reduce the likelihood of encountering common mode voltage problems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Finding splitters with more than 2 outputs can be challenging, especially in the EU market. One example is the Laurels QLS Quad Output 4-20 mA Current Loop Splitter Retransmitter, which transmits up to four independent 4-20 mA current loops from a single analog input. This splitter ensures a ±10V common mode voltage for the output loops through active circuitry, allowing for variations in remote grounds. For those in the UK, the TIM018-MK2 by London Electronics offers a triple output option, splitting a single 4-20mA input into three independently scaled 4-20mA outputs with load isolation. When using these splitters, be sure to consider whether they require an active or passive loop configuration. Explore these options and more at laurels.com and london-electronics.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the proposed setup for connecting a level transmitter analog output to multiple VFDs and a PLC efficiently?</h4>
<p class='text-muted'><strong>Answer:</strong> - The proposed setup involves using PR-3108 splitters, each with one input and two outputs, arranged in a cascade setup. This setup requires the use of four splitters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there alternative methods to connect a level transmitter analog output to multiple VFDs and a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the cascade setup with splitters is one option, there may be alternative methods such as using a signal isolator or a signal splitter with more outputs to reduce the number of devices needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it necessary for the level transmitter to be powered by a loop in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, the level transmitter is not powered by a loop in this scenario as mentioned by the user.</p>
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
