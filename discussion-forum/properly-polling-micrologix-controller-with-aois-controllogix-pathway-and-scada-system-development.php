
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have a few queries regarding addressing AOIs and the appropriate pathway for polling a MicroLogix controller in an EIP setup. I am exploring whether the ControlLogix pathway is equally crucial in this scenario. The objective is to poll addresses internally to develop a system similar to">
    <meta name="keywords" content="properly polling micrologix controller, aois addressing, controllogix pathway, scada system development, eip setup, polling micrologix controller, controllogix pathway importance, scada system similarity">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/properly-polling-micrologix-controller-with-aois-controllogix-pathway-and-scada-system-development">
    <title>Properly Polling MicroLogix Controller with AOIs: ControlLogix Pathway and SCADA System Development | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Properly Polling MicroLogix Controller with AOIs: ControlLogix Pathway and SCADA System Development | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have a few queries regarding addressing AOIs and the appropriate pathway for polling a MicroLogix controller in an EIP setup. I am exploring whether the ControlLogix pathway is equally crucial in this scenario. The objective is to poll addresses internally to develop a system similar to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/properly-polling-micrologix-controller-with-aois-controllogix-pathway-and-scada-system-development">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Properly Polling MicroLogix Controller with AOIs: ControlLogix Pathway and SCADA System Development | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have a few queries regarding addressing AOIs and the appropriate pathway for polling a MicroLogix controller in an EIP setup. I am exploring whether the ControlLogix pathway is equally crucial in this scenario. The objective is to poll addresses internally to develop a system similar to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/properly-polling-micrologix-controller-with-aois-controllogix-pathway-and-scada-system-development"
      },
      "headline": "Properly Polling MicroLogix Controller with AOIs: ControlLogix Pathway and SCADA System Development",
      "description": "Hello everyone, I have a few queries regarding addressing AOIs and the appropriate pathway for polling a MicroLogix controller in an EIP setup. I am exploring whether the ControlLogix pathway is equally crucial in this scenario. The objective is to poll addresses internally to develop a system similar to",
      "author": {
        "@type": "Person",
        "name": "Cotafam"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Properly Polling MicroLogix Controller with AOIs: ControlLogix Pathway and SCADA System Development</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cotafam</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">211</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">31</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have a few queries regarding "addressing AOIs" and the appropriate pathway for polling a MicroLogix controller in an EIP setup. I am exploring whether the ControlLogix pathway is equally crucial in this scenario. The objective is to poll addresses internally to develop a system similar to SCADA. Some questions to consider when discussing this with the client include the use of a switch, the nature of the connection (direct or indirect), among others. Any recommendations on this matter would be greatly appreciated. Currently, I am able to ping the PLC and the EIP port is accessible.

Additionally, I have received a tag list from the client, which includes AOIs (please see the image link). I need clarification on whether the client should extract directly from the AOI in Studio so that I can address it accurately. [AOI Imgur link]</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have resolved the problem with the pathway and was able to successfully use 1,0. However, I still require assistance with AOI addressing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cotafam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the image, a valve AOI named SCISol is depicted with multiple instances such as esValve_4926 and esValve_4928. If these instances are present, the externally accessible elements of the AOI can be accessed, such as esValve_4926.Auto, esValve_4926.FaultTimer.PRE, and esValve_4926.Position1In. Explore the various elements within this AOI for further understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>5618 suggested their understanding of the photo, identifying a valve AOI labeled SCISol with different instances such as esValve_4926, esValve_4928, and so on. In this scenario, elements of the AOI that are externally accessible could be accessed as esValve_4926.Auto, esValve_4926.FaultTimer.PRE, esValve_4926.Position1In, or any other existing elements within the AOI. This process may involve some trial and error before getting it right. Click to learn more about accessing and utilizing the AOI elements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cotafam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The most accurate method to determine the specific information is to have the tags extracted directly from the AOI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cotafam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your understanding of the AOI, it is recommended to obtain a program example from the supplier containing a detailed list and descriptions of its elements. Within the program, navigate to the controller tags (or local tags if applicable) and expand the valve tags to explore the available elements. By studying the AOI definition, you can gain insight into the logic behind the AOI and grasp the functionality of the tags. However, access to the full AOI logic may be restricted if the supplier has concerns about potential theft of their proprietary valve AOI design.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I am seeking help in identifying the correct addressing format. Our system recognizes REALs as float values, which clarifies the naming convention used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cotafam</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the significance of addressing AOIs in a MicroLogix controller within an EIP setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Addressing AOIs is crucial for efficiently polling a MicroLogix controller in an EIP setup, especially when developing a system similar to SCADA. It allows for organized access to specific data structures and functionalities within the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is the ControlLogix pathway essential when polling a MicroLogix controller for SCADA system development?</h4>
<p class='text-muted'><strong>Answer:</strong> - While exploring the appropriate pathway for polling a MicroLogix controller, considering the ControlLogix pathway can be beneficial in ensuring seamless communication and integration within the system. It helps in efficiently managing data flow and processing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What considerations should be taken into account when discussing the use of a switch and the nature of the connection for polling a MicroLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - When discussing the use of a switch and the nature of the connection for polling a MicroLogix controller, factors such as network topology, data transmission requirements, and system reliability should be considered. It is important to ensure a stable and secure connection for uninterrupted data exchange.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can AOIs be effectively extracted from the client's tag list in Studio for accurate addressing?</h4>
<p class='text-muted'><strong>Answer:</strong> - To accurately address AOIs in Studio based on the client's tag list, it is recommended to extract the AOIs directly and map them accordingly within the development environment. This ensures that the data from AOIs is accessed and utilized correctly</p>
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
