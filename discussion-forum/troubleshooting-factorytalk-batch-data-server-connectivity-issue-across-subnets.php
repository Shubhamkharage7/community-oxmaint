
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am encountering a unique issue with my FT Batch software where my data server is unable to connect to my PLC across a network. After consulting with Rockwell, it appears that the problem may stem from my computer running the batch server on a different subnet than the">
    <meta name="keywords" content="troubleshooting factorytalk batch, data server connectivity issue, subnets, plc connectivity, ft batch software, rockwell support, subnet configuration, network tunneling, linx support, moving plc, main plant network, limited ips, batch server">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-batch-data-server-connectivity-issue-across-subnets">
    <title>Troubleshooting FactoryTalk Batch Data Server Connectivity Issue Across Subnets | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk Batch Data Server Connectivity Issue Across Subnets | Oxmaint Community">
    <meta property="og:description" content="I am encountering a unique issue with my FT Batch software where my data server is unable to connect to my PLC across a network. After consulting with Rockwell, it appears that the problem may stem from my computer running the batch server on a different subnet than the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-batch-data-server-connectivity-issue-across-subnets">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk Batch Data Server Connectivity Issue Across Subnets | Oxmaint Community">
    <meta name="twitter:description" content="I am encountering a unique issue with my FT Batch software where my data server is unable to connect to my PLC across a network. After consulting with Rockwell, it appears that the problem may stem from my computer running the batch server on a different subnet than the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-batch-data-server-connectivity-issue-across-subnets"
      },
      "headline": "Troubleshooting FactoryTalk Batch Data Server Connectivity Issue Across Subnets",
      "description": "I am encountering a unique issue with my FT Batch software where my data server is unable to connect to my PLC across a network. After consulting with Rockwell, it appears that the problem may stem from my computer running the batch server on a different subnet than the",
      "author": {
        "@type": "Person",
        "name": "MichaelQSI"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-20",
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
                <h1 class="text-white">Troubleshooting FactoryTalk Batch Data Server Connectivity Issue Across Subnets</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MichaelQSI</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">252</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">497</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am encountering a unique issue with my FT Batch software where my data server is unable to connect to my PLC across a network. After consulting with Rockwell, it appears that the problem may stem from my computer running the batch server on a different subnet than the PLC. Currently, the PLC is being accessed by tunneling through one CLX chassis via EN2T to another EN2T in that chassis on a different subnet. The computer running the data server can ping the 192.97 subnet but cannot reach the 192.168 subnet. It seems that FT Batch may not support tunneling across a network via Linx like other PLC applications do. Rockwell's suggestion was to move the PLC to the same subnet as the computer hosting the batch server, but this would require moving it to the main plant network, which I would like to avoid due to limited IPs. I am open to further questions or recommendations.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider utilizing a router, such as the Hirschmann Eagle, to effectively connect two subnets. This router features two ports, each specifically addressing the separate subnets. By configuring a 1:1 NAT setup, seamless connectivity can be established. Alternatively, you can opt to incorporate a second NIC into your server to position it within the 192.168.x.x subnet. This method offers flexibility and enhanced network performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imtiredboss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The user imtiredboss suggested using a router like the Hirschmann Eagle to connect two subnets. This router has 2 ports, each assigned to a different subnet, allowing for configuration of 1:1 NAT for connection. Another option is to add a second NIC to the server and place it on the 192.168.x.x subnet. However, this may still require tunneling across racks or moving the PLC to the 192.97 subnet, which the user is hoping to avoid if possible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelQSI</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a conversation, MichaelQSI mentioned the need to connect devices on different subnets without tunneling or moving equipment. One possible solution is to add a second NIC card to the computer, allowing it to communicate with the PLC on a different subnet. While there may be other alternatives available, this is a cost-effective approach to achieving connectivity between devices on separate subnets.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imtiredboss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>imtiredboss suggested that using a second NIC card on the computer in a different subnet is the most convenient and cost-effective way to enable communication with the PLC. While there may be other options available, this method is recommended if bringing all devices onto the same subnet is not feasible. No need for tunneling through the rack. Another potential solution could be using a router with 1:1 NAT, although this might not be suitable for a virtual machine being accessed remotely. Thank you for the suggestion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelQSI</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One alternative is to install an additional ethernet module in the rack and configure it to be on the same subnet as the server attempting to communicate with it. This option may be pricey unless you already have a spare module on hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imtiredboss</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my FactoryTalk Batch Data Server unable to connect to the PLC across subnets?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue may arise from the computer running the batch server being on a different subnet than the PLC. FactoryTalk Batch may not support tunneling across networks via Linx like some other PLC applications do.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What was Rockwell's suggestion to resolve the connectivity issue between the data server and the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Rockwell recommended moving the PLC to the same subnet as the computer hosting the batch server to establish a successful connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why does the computer hosting the data server only ping the 192.97 subnet and not the 192.168 subnet?</h4>
<p class='text-muted'><strong>Answer:</strong> This limitation could be due to network configuration issues that prevent communication between different subnets.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are the implications of moving the PLC to the main plant network to resolve the connectivity issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Moving the PLC to the main plant network may resolve the connectivity issue but could lead to limited IP address availability concerns.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Are there alternative solutions to address the FactoryTalk Batch Data Server connectivity issue across subnets?</h4>
<p class='text-muted'><strong>Answer:</strong> Exploring alternative networking configurations or solutions that enable communication between different subnets without moving the PLC may be viable options to consider.</p>
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
