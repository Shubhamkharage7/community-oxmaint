
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, the hardware components for this project include a Click Plc model # CO-O1DD1-O, HMI model # S3ML-R, and a magnetic-inductive flow meter model # FMM100-1001. The flow meter will be set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters. We do not">
    <meta name="keywords" content="retrieve pulses, adjust pulses, magnetic-inductive flow meter, plc, click plc, hmi, flow rate, p1, imps, high-speed input, outputs, pulses per minute, prosense fmm100-001, valve input">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-retrieve-and-adjust-pulses-from-a-magnetic-inductive-flow-meter-using-a-plc">
    <title>How to Retrieve and Adjust Pulses from a Magnetic-Inductive Flow Meter using a PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Retrieve and Adjust Pulses from a Magnetic-Inductive Flow Meter using a PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, the hardware components for this project include a Click Plc model # CO-O1DD1-O, HMI model # S3ML-R, and a magnetic-inductive flow meter model # FMM100-1001. The flow meter will be set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters. We do not">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-retrieve-and-adjust-pulses-from-a-magnetic-inductive-flow-meter-using-a-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Retrieve and Adjust Pulses from a Magnetic-Inductive Flow Meter using a PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, the hardware components for this project include a Click Plc model # CO-O1DD1-O, HMI model # S3ML-R, and a magnetic-inductive flow meter model # FMM100-1001. The flow meter will be set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters. We do not">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-retrieve-and-adjust-pulses-from-a-magnetic-inductive-flow-meter-using-a-plc"
      },
      "headline": "How to Retrieve and Adjust Pulses from a Magnetic-Inductive Flow Meter using a PLC",
      "description": "Hello, the hardware components for this project include a Click Plc model # CO-O1DD1-O, HMI model # S3ML-R, and a magnetic-inductive flow meter model # FMM100-1001. The flow meter will be set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters. We do not",
      "author": {
        "@type": "Person",
        "name": "lgarciadc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">How to Retrieve and Adjust Pulses from a Magnetic-Inductive Flow Meter using a PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>lgarciadc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">347</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">166</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, the hardware components for this project include a Click Plc model # CO-O1DD1-O, HMI model # S3ML-R, and a magnetic-inductive flow meter model # FMM100-1001. The flow meter will be set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters. We do not require high-speed input or outputs, with a maximum of 136 pulses per minute. The main goal of this project is to retrieve pulses from a Prosense FMM100-001 magnetic-inductive flow meter, adjust the pulses based on user input on a valve (such as increasing the pulse rate by 20%), and then transfer the modified rate to another pulse reader. Are you able to assist in writing the Plc code to achieve this objective?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One method to manage the output pulses of your device is to utilize a self-resetting timer. By activating the output for the first half of the timer's setting and deactivating it for the second half, you can generate a square wave pulse. To adjust the duration of the output signal, ensure it remains on for a sufficient period for the receiving device to detect it. To determine the optimal preset for the output timer, measure the time between consecutive pulses from the flow meter. Take 80% of this time as the preset for the timer controlling the output. This will ensure efficient and precise control of your modified output pulses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this project, the goal is to process pulses from a magnetic-inductive flow meter (Prosense FMM100-001) by adjusting the pulse rate based on user input (e.g. increasing the rate by 20%) and then transferring the modified rate to another pulse reader. Is there a PLC code available for this task? It's important to note that the output pulses will always be delayed by at least one pulse period since the PLC requires at least two input pulses to determine the output pulse rate accurately. For example, if the incoming pulse rate is 2.5Hz, the modifier should output pulses at 3Hz (2.5Hz x 120%).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I greatly appreciate your support. I am in need of assistance with implementing the on the Click PLC. Can anyone provide guidance on how to achieve this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lgarciadc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have provided a potential resolution, but further assistance could entail me taking on tasks that are within your job description or completing assignments on your behalf. The Click software is readily available for download at no cost. Obtain a version and the necessary hardware to begin exploring. If you encounter any issues, share your progress for troubleshooting support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the hardware components required for retrieving and adjusting pulses from a magnetic-inductive flow meter using a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The hardware components required for this project include a Click PLC model  CO-O1DD1-O, HMI model  S3ML-R, and a magnetic-inductive flow meter model  FMM100-1001.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What flow rate is the magnetic-inductive flow meter set to?</h4>
<p class='text-muted'><strong>Answer:</strong> - The flow meter is set to a flow rate of 34 liters per minute, with P1=0 and ImPs=0.25 liters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the maximum number of pulses per minute that the system can handle?</h4>
<p class='text-muted'><strong>Answer:</strong> - The system can handle a maximum of 136 pulses per minute.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the main goal of the project involving the PLC and the magnetic-inductive flow meter?</h4>
<p class='text-muted'><strong>Answer:</strong> - The main goal of the project is to retrieve pulses from a Prosense FMM100-001 magnetic-inductive flow meter, adjust the pulses based on user input on a valve (e.g., increasing the pulse rate by 20%), and transfer the modified rate to another pulse reader.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Can you provide assistance in writing the PLC code to achieve the project objective?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, assistance can be provided in writing the PLC code to retrieve and adjust pulses from the magnetic-inductive flow meter according to user input and transfer the modified rate to another pulse reader.</p>
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
