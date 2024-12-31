
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I find myself in a challenging situation. I have been given the task of transferring a significant amount of tags, ranging from 500k to 1mil, from FT Optix to an Azure database at a rate of 1000 tags per second. As a web developer with limited experience">
    <meta name="keywords" content="ft optix, sql database, transferring tags, plc, ft logix echo, controllers, bare metal workstations, azure database, nat, vpn, tag count, memory strain, optix instance, virtual machines, gpu resources, digital twins">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficiently-transferring-tags-from-factorytalk-optix-to-sql-database">
    <title>Efficiently Transferring Tags from FactoryTalk Optix to SQL Database | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficiently Transferring Tags from FactoryTalk Optix to SQL Database | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I find myself in a challenging situation. I have been given the task of transferring a significant amount of tags, ranging from 500k to 1mil, from FT Optix to an Azure database at a rate of 1000 tags per second. As a web developer with limited experience">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficiently-transferring-tags-from-factorytalk-optix-to-sql-database">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficiently Transferring Tags from FactoryTalk Optix to SQL Database | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I find myself in a challenging situation. I have been given the task of transferring a significant amount of tags, ranging from 500k to 1mil, from FT Optix to an Azure database at a rate of 1000 tags per second. As a web developer with limited experience">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficiently-transferring-tags-from-factorytalk-optix-to-sql-database"
      },
      "headline": "Efficiently Transferring Tags from FactoryTalk Optix to SQL Database",
      "description": "Greetings everyone, I find myself in a challenging situation. I have been given the task of transferring a significant amount of tags, ranging from 500k to 1mil, from FT Optix to an Azure database at a rate of 1000 tags per second. As a web developer with limited experience",
      "author": {
        "@type": "Person",
        "name": "escodsm"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Efficiently Transferring Tags from FactoryTalk Optix to SQL Database</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>escodsm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">454</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">427</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I find myself in a challenging situation. I have been given the task of transferring a significant amount of tags, ranging from 500k to 1mil, from FT Optix to an Azure database at a rate of 1000 tags per second. As a web developer with limited experience in PLC, I am currently using FT Logix Echo with four controllers that collectively have 60k tags. Additionally, I have set up ten bare metal workstations running Echo, connected via NAT and accessible through VPN.

To achieve the required tag count, my initial approach was to install all 40 controllers in Optix. However, this caused a strain on my system as 16 controllers consumed 40% of my 64GB memory, rendering my PC unusable. As a solution, I am considering setting up a local Optix instance on each bare metal workstation. Virtual machines are not a viable option due to the heavy GPU resources required for running digital twins.

Putting Optix aside for a moment, let's imagine I only have 4 controllers emulated in Echo. How can I extract all the tags from these controllers into a SQL database? Do the bits need to be modified before polling, or can I efficiently transfer all tags via EthIP to the database? Is OPC-UA a suitable alternative?

I would greatly appreciate any guidance or assistance on this matter. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I may not be the best person to assist with the Rockwell side of things, but it appears that you are facing a challenging situation. When someone says "get me everything," it often suggests that they may not fully understand their exact requirements. It may be helpful to provide some education on PLC tags, as many of them may not actually be relevant to your needs. Best of luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The sheer magnitude of data being collected is staggering, and it is essential to understand the reasons behind the necessity for such a vast amount before moving forward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you everyone for your input. I must admit, as a new and enthusiastic freshman in this field, I find myself facing a daunting challenge. The company I am working for has unexpectedly thrust upon me the task of coding mobile apps, claiming it is similar to coding PLC systems. Despite my lack of knowledge in this area, I am now dealing with a massive increase in tags from 20k to 500k, all because of an overzealous sales pitch from a Rockwell representative who claimed that "Optix can handle an unlimited amount of tags". 

I am not asking for a solution to this problem, but rather seeking guidance from those with experience in the industry. The company I am currently working for seems ill-equipped to handle the situation, so I simply want to gather enough information to support my decisions and request the necessary resources from my project manager. 

Thank you all for your assistance, and I look forward to continuing to expand my knowledge in this ever-evolving industry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>escodsm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>escodsm shared how the number of tags escalated from 20k to 500k due to a misleading statement from a Rockwell sales representative who claimed that "Optix can handle an unlimited amount of tags." It's crucial to consider your audience before making such bold claims to avoid being thrown under the bus. This situation is reminiscent of being in Anderson's boat. For more entertaining short comedy sketches and films like "The Expert," be sure to subscribe to our channel. Explore our collection of Expert shirts and hoodies at our online shop for a good laugh during your next funny business meeting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As an approved systems house for a leading blue chip company, we were tasked with developing interface software for data capture. Despite the company's preference for using their own PLCs, we faced challenges due to the large size of the software and the complexity of the control programs. The system was designed to send all data to a higher level system, resulting in over 120 PLCs on site with thousands of I/O points. After realizing that most of the data was unnecessary, we proposed sending only useful information to their systems. However, the project was eventually abandoned in favor of installing separate SCADA terminals to collect and organize the essential data in SQL format.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Assuming the request is legitimate and that the tags in each controller are the same, it is recommended to create a User-Defined Data Type (UDT), named udtControllerData, to represent the data in each controller. To efficiently manage the data, it is advisable to create a 5th controller for each machine with an array udtController[4] and update the data according to your preferred frequency. Please note that this task, although seemingly simple, is considered difficult due to the large amount of data involved, requiring you to work within a 500-byte constraint and utilize MSG instructions effectively.

If you are dealing with a substantial amount of data from 10 controllers, approximately 240KB or 2.5MB, there are options to consider. Utilize FTOptix for slower data transfer or invest in a 13-slot 1756 chassis with SQL Database modules such as Softing's eATM tManager for a more efficient solution. Each module can handle transferring tags from an aggregator PLC into a local database, which can then be configured to replicate data into the cloud, achieving the desired outcome.

It is possible that this challenge is designed to test your ability to propose a solution rather than strictly solving the problem. Good luck with your endeavor!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I efficiently transfer tags from FactoryTalk Optix to an SQL database?</h4>
<p class='text-muted'><strong>Answer:</strong> - One approach could be setting up a local Optix instance on each bare metal workstation to distribute the load and prevent strain on the system. Alternatively, consider extracting tags from controllers emulated in Echo and transferring them to the database using EthIP or OPC-UA.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the recommended rate for transferring a large number of tags from FT Optix to an Azure database?</h4>
<p class='text-muted'><strong>Answer:</strong> - Aim for a rate of 1000 tags per second to meet the target of transferring 500k to 1mil tags efficiently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the limitations of using virtual machines for this task?</h4>
<p class='text-muted'><strong>Answer:</strong> - Virtual machines might not be feasible due to the heavy GPU resources required for running digital twins, making bare metal workstations a more suitable option.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I handle the strain on system resources when working with multiple controllers in FT Optix?</h4>
<p class='text-muted'><strong>Answer:</strong> - Distribute the workload by setting up local Optix instances on separate bare metal workstations to avoid overwhelming system memory.</p>
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
