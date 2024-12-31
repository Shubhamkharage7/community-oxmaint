
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Attention everyone, I am currently assisting a client who is still using an old ABB Advant/MOD300 system (v14.4) from the y2k era. Back then, I set up the ABB Industrial IT MOD300 OPC Server 1.1/2 (v1.01.035), which operates on OPC DA 1.0. This software must be installed on the">
    <meta name="keywords" content="abb mod300 opc server, troubleshooting remote access, abb advant/mod300 system, opc da 0, windows xp compatibility, matrikon middle ware">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-remote-access-to-abb-mod300-opc-server-challenges-and-solutions">
    <title>Troubleshooting Remote Access to ABB MOD300 OPC Server - Challenges and Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Remote Access to ABB MOD300 OPC Server - Challenges and Solutions | Oxmaint Community">
    <meta property="og:description" content="Attention everyone, I am currently assisting a client who is still using an old ABB Advant/MOD300 system (v14.4) from the y2k era. Back then, I set up the ABB Industrial IT MOD300 OPC Server 1.1/2 (v1.01.035), which operates on OPC DA 1.0. This software must be installed on the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-remote-access-to-abb-mod300-opc-server-challenges-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Remote Access to ABB MOD300 OPC Server - Challenges and Solutions | Oxmaint Community">
    <meta name="twitter:description" content="Attention everyone, I am currently assisting a client who is still using an old ABB Advant/MOD300 system (v14.4) from the y2k era. Back then, I set up the ABB Industrial IT MOD300 OPC Server 1.1/2 (v1.01.035), which operates on OPC DA 1.0. This software must be installed on the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-remote-access-to-abb-mod300-opc-server-challenges-and-solutions"
      },
      "headline": "Troubleshooting Remote Access to ABB MOD300 OPC Server - Challenges and Solutions",
      "description": "Attention everyone, I am currently assisting a client who is still using an old ABB Advant/MOD300 system (v14.4) from the y2k era. Back then, I set up the ABB Industrial IT MOD300 OPC Server 1.1/2 (v1.01.035), which operates on OPC DA 1.0. This software must be installed on the",
      "author": {
        "@type": "Person",
        "name": "odwyerpw"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">Troubleshooting Remote Access to ABB MOD300 OPC Server - Challenges and Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>odwyerpw</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">352</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">494</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Attention everyone, I am currently assisting a client who is still using an old ABB Advant/MOD300 system (v14.4) from the y2k era. Back then, I set up the ABB Industrial IT MOD300 OPC Server 1.1/2 (v1.01.035), which operates on OPC DA 1.0. This software must be installed on the same PC as the Interface Board, also known as the RTAB in ABB MOD terms. The RTAB emulates a Multibus1 system on a PCI board to allow data retrieval over the MOD300 DCN in a masterless token ring topology.

As you can tell, upgrade options for the PC and its operating system are limited, currently stuck on Windows XP. Despite attempts to run it on Windows 7, it was unsuccessful. I have incorporated some Matrikon Middle Ware (their OPC-ODBC Client) to extract real-time data from the ABB MOD system and store it in a SQL Database. Everything has been running smoothly, although challenges have arisen as SQL is continuously updated.

However, a new obstacle has emerged as the customer's Corporate IT department mandates the use of Windows Server 2019 with SQL Server 2019, rendering the old SQL Drivers on Windows XP unusable due to the requirement of TLS 1.2. Previous compatibility with TLS 1.0 has been disrupted by this change. Despite my efforts to resolve this issue with Corporate IT, including exploring patches and workarounds, the solutions provided by Microsoft have not been effective.

The client is transitioning to Inductive Automation's Ignition system on multiple machines, moving away from the ABB Advant/MOD300 platform to ControlLogix/Ignition setup. However, two machines with specialized equipment cannot be migrated immediately, prompting me to consider integrating visualization and data archiving into Ignition for basic functionalities. This would entail establishing communication with the ABB MOD300 OPC Server and potentially archiving data to SQL within Ignition.

Nevertheless, my attempts to connect OPC Clients like Kepware, Matrikon, and OPC-Expert to the MOD300 server located on another machine have been unsuccessful so far. Adjusting DCOM settings in the software has not yielded the desired results. The complexity is further compounded by the customer's deployment of Ignition Servers on Linux for running multiple machines, necessitating caution to prevent any disruptions.

I am seeking advice from anyone who has successfully accessed data remotely from the ABB MOD300 OPC Server. I plan to collaborate with their IT team to investigate any potential obstacles, considering that Port 135 is open and no VLAN crossing is involved at the moment. Although experience in this area may be scarce, I am hopeful that someone may possess the necessary expertise, even if it means reaching out to individuals in Rochester, NY or Columbus, OH.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I will provide further details. Recently, the corporate IT department of the customer prohibited the direct connection of OPC DA 1.0 Servers to Ignition due to security reasons. Therefore, the new goal is to locate a suitable OPC UA Tunneller or Wrapper that is compatible with Windows XP. This software will serve as a bridge between the MOD Advant OPC DA 1.0 Server and the Ignition Gateway, enhancing data transfer and security.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>odwyerpw</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the challenges faced when trying to access data remotely from the ABB MOD300 OPC Server?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Challenges include compatibility issues with newer operating systems like Windows Server 2019, the need for TLS 1.2 which disrupts previous compatibility with TLS 1.0, difficulties in connecting OPC Clients to the MOD300 server located on another machine, and complexities arising from deploying Ignition Servers on Linux.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can one address the issue of outdated SQL Drivers on Windows XP due to the TLS 1.2 requirement for newer systems like Windows Server 2019?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Despite attempts to resolve this issue with Corporate IT through patches and workarounds, finding effective solutions has been challenging. Upgrading to newer SQL Drivers compatible with TLS 1.2 may be necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible to integrate visualization and data archiving from the ABB MOD300 OPC Server into the Ignition system?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Yes, it is possible to establish communication with the ABB MOD300 OPC Server and potentially archive data to SQL within Ignition to enable basic functionalities, especially for machines where immediate migration is not feasible.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps can be taken to successfully connect OPC Clients like Kepware, Matrikon, and OPC-Expert to the MOD300 server located on another machine?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Troubleshooting steps may</p>
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
