
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to all! I hope everyone is well. I am currently working on establishing communication between Aveva InTouch HMI 2023 and TIA Portal V18. Due to not having an actual controller, I am utilizing PLCSIM V18 for simulation. However, I am encountering difficulties with the virtual environment as InTouch">
    <meta name="keywords" content="aveva intouch hmi, tia portal v18, plcsim v18, communication issues, troubleshooting, nettoplcsim, virtual environment, simulation, controller setup, ip address, pinging plc ip, connectivity problems, net">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-aveva-intouch-hmi-and-tia-portal-v18-communication-issues-using-plcsim-v18">
    <title>Troubleshooting Aveva InTouch HMI and TIA Portal V18 Communication Issues using PLCSIM V18 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Aveva InTouch HMI and TIA Portal V18 Communication Issues using PLCSIM V18 | Oxmaint Community">
    <meta property="og:description" content="Greetings to all! I hope everyone is well. I am currently working on establishing communication between Aveva InTouch HMI 2023 and TIA Portal V18. Due to not having an actual controller, I am utilizing PLCSIM V18 for simulation. However, I am encountering difficulties with the virtual environment as InTouch">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-aveva-intouch-hmi-and-tia-portal-v18-communication-issues-using-plcsim-v18">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Aveva InTouch HMI and TIA Portal V18 Communication Issues using PLCSIM V18 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to all! I hope everyone is well. I am currently working on establishing communication between Aveva InTouch HMI 2023 and TIA Portal V18. Due to not having an actual controller, I am utilizing PLCSIM V18 for simulation. However, I am encountering difficulties with the virtual environment as InTouch">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-aveva-intouch-hmi-and-tia-portal-v18-communication-issues-using-plcsim-v18"
      },
      "headline": "Troubleshooting Aveva InTouch HMI and TIA Portal V18 Communication Issues using PLCSIM V18",
      "description": "Greetings to all! I hope everyone is well. I am currently working on establishing communication between Aveva InTouch HMI 2023 and TIA Portal V18. Due to not having an actual controller, I am utilizing PLCSIM V18 for simulation. However, I am encountering difficulties with the virtual environment as InTouch",
      "author": {
        "@type": "Person",
        "name": "WHUSSAIN"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Troubleshooting Aveva InTouch HMI and TIA Portal V18 Communication Issues using PLCSIM V18</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>WHUSSAIN</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1093</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">268</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to all! I hope everyone is well. I am currently working on establishing communication between Aveva InTouch HMI 2023 and TIA Portal V18. Due to not having an actual controller, I am utilizing PLCSIM V18 for simulation. However, I am encountering difficulties with the virtual environment as InTouch and TIA are not communicating as needed.

Here is a breakdown of what I have been using:
1. Aveva InTouch HMI 2023
2. TIA Portal V18
3. PLCSIM V18
4. Nettoplcsim

The steps I have taken so far are as follows:
1. Opened TIA Portal and initiated a project with controller S7-1517H-3.
2. Set the IP address to 192.168.0.1 and simulated the program using PLCSIM V18.
3. Despite setting up the simulation, I am facing issues with pinging the PLC IP and establishing communication between InTouch and TIA.

I have also configured Nettoplcsim and attempted to set up a server, but encountered issues with port 102 and connectivity.

Overall, I am a beginner in the field of PLC and Siemens systems, and therefore seeking assistance to troubleshoot the communication issues between the two software programs. If anyone can provide guidance on how to resolve the connectivity problems, it would be greatly appreciated. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>By using PLCSim Advanced instead of Nettoplcim in addition to PLCSim, you can achieve superior results. PLCSim Advanced is specifically designed for external communication and is ready to use without any additional configurations. Improve your PLC simulation experience with PLCSim Advanced!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>adfox</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the common tools being used in troubleshooting Aveva InTouch HMI and TIA Portal V18 communication issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common tools being used include Aveva InTouch HMI 2023, TIA Portal V18, PLCSIM V18, and Nettoplcsim.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What steps have been taken to establish communication between InTouch and TIA Portal V18 using PLCSIM V18?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The steps involved initiating a project in TIA Portal with a controller, setting the IP address, simulating the program with PLCSIM V18, and configuring Nettoplcsim for setting up a server.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What specific issues are being faced when trying to establish communication between Aveva InTouch HMI and TIA Portal V18?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issues include difficulties with pinging the PLC IP, establishing communication between InTouch and TIA, and encountering problems with port 102 and connectivity while configuring Nettoplcsim.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can beginners troubleshoot communication issues between Aveva InTouch HMI and TIA Portal V18 when using PLCSIM V18 for simulation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Beginners can seek guidance from experienced professionals in the field of PLC and Siemens systems to resolve connectivity problems and troubleshoot communication issues effectively.</p>
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
