
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently acquired a 5069-L330ER PLC that we are integrating into our current system to establish communication with a 1747-L551C PLC. When setting up interPLC communications, I typically include the PLC as an ethernet device in the project tree. However, I am unable to locate the 1747-L551C in my">
    <meta name="keywords" content="plc integration, 5069-l330er, 1747-l551c, ethernet communication, interplc communication, project tree setup, aop downloads, e">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-integrate-5069-l330er-plc-with-1747-l551c-plc-for-ethernet-communication">
    <title>How to Integrate 5069-L330ER PLC with 1747-L551C PLC for Ethernet Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Integrate 5069-L330ER PLC with 1747-L551C PLC for Ethernet Communication | Oxmaint Community">
    <meta property="og:description" content="I recently acquired a 5069-L330ER PLC that we are integrating into our current system to establish communication with a 1747-L551C PLC. When setting up interPLC communications, I typically include the PLC as an ethernet device in the project tree. However, I am unable to locate the 1747-L551C in my">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-integrate-5069-l330er-plc-with-1747-l551c-plc-for-ethernet-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Integrate 5069-L330ER PLC with 1747-L551C PLC for Ethernet Communication | Oxmaint Community">
    <meta name="twitter:description" content="I recently acquired a 5069-L330ER PLC that we are integrating into our current system to establish communication with a 1747-L551C PLC. When setting up interPLC communications, I typically include the PLC as an ethernet device in the project tree. However, I am unable to locate the 1747-L551C in my">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-integrate-5069-l330er-plc-with-1747-l551c-plc-for-ethernet-communication"
      },
      "headline": "How to Integrate 5069-L330ER PLC with 1747-L551C PLC for Ethernet Communication",
      "description": "I recently acquired a 5069-L330ER PLC that we are integrating into our current system to establish communication with a 1747-L551C PLC. When setting up interPLC communications, I typically include the PLC as an ethernet device in the project tree. However, I am unable to locate the 1747-L551C in my",
      "author": {
        "@type": "Person",
        "name": "AMarks95"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">How to Integrate 5069-L330ER PLC with 1747-L551C PLC for Ethernet Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">293</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">121</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently acquired a 5069-L330ER PLC that we are integrating into our current system to establish communication with a 1747-L551C PLC. When setting up interPLC communications, I typically include the PLC as an ethernet device in the project tree. However, I am unable to locate the 1747-L551C in my modules list, and I cannot find AOP or EDS downloads in Rockwell's download catalog. Is there a way to add the 1747-L551C to the ethernet tree, or will I need to manually input the IP address into the MSG instruction? If manual input is necessary, how can I determine the necessary prefixes for the ethernet route, such as the "2,1," in 2,1, 192.168.1.1 ?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are a couple of methods to achieve this. One option is to incorporate the SLC5 into your I/O tree as a generic module connected to the ethernet network. Ensure to set the "Comm Format" selection to "None". This will establish the connection pathway from the 5069 through the ethernet port to the SLC5's IP address. Alternatively, you can manually input the pathway, although the specific port numbers for the 5069-L330ER are unknown to me. I speculate that they might be 2 and 3, but this is not confirmed. Ultimately, the pathway will conclude at the IP address of the SLC5. - Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing the I/O tree method, it is advised to not only select the Comm Format as "None", but also to prevent the connection from being established. This will prevent the CompactLogix from trying to establish a cyclic I/O connection with the SLC-500, and instead, the path will be solely used by Studio 5000 for addressing MSG instructions. Keep in mind that SLC-5/05 controllers do not support cyclic "Produced / Consumed Tags" unlike ControlLogix-family controllers. Therefore, you will need to rely on using MSG instructions with the SLC Typed Data Table Read and Write services for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In utilizing the I/O tree method, it is advisable to not only configure the Comm Format as "None," but also to inhibit the connection. This will prevent the CompactLogix from attempting a cyclic I/O connection to the SLC-500, with the path solely used by Studio 5000 for addressing MSG instructions. It is important to note that SLC-5/05 controllers do not support cyclic "Produced / Consumed Tags" like ControlLogix-family controllers do. Therefore, MSG instructions must be used alongside the SLC Typed Data Table Read and Write services. Is it necessary to "inhibit module"? Yes, because even when the data connection is set to "None," the RPI remains at 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As far as I know, when you set the Connection Type to "None" in the CompactLogix, it still attempts to establish a connection with the field device to display any bridged connections. The SLC may decline this request, but it still consumes time and resources. By disabling the fake module, the CompactLogix will not initiate a connection at all. There is ongoing discussion on whether future users will find the fake adapter object in the I/O tree and Controller tags reassuring or perplexing. Alternatively, you can manually determine the CIP path. 

On a 5069 controller, the Ethernet port is labeled as "2" in DLR/Linear mode with a single IP address. In dual-port mode, A1 corresponds to CIP Port "3" and A2 to CIP Port "4". The path from a 5069 CompactLogix to an SLC-5/05 on the same TCP/IP network is represented by two values separated by a comma: "Port Number, <IP Address>".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are dealing with a complex CIP Path that includes navigating ControlLogix backplanes or ControlNet bridges, there is a cheat-sheet method you can use: Create the I/O connection, set up your MSG instruction using it, and then remove the I/O connection. This will keep the MSG instruction configured with the decoded CIP path from the I/O tree. This trick can save time and simplify your setup process for I/O connections in your industrial automation system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I integrate a 5069-L330ER PLC with a 1747-L551C PLC for Ethernet communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To establish communication between these PLCs, you may need to manually input the IP address into the MSG instruction if the 1747-L551C is not automatically detected in the modules list.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to add the 1747-L551C PLC to the ethernet tree for setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the 1747-L551C PLC is not automatically detected, you may need to manually input the IP address into the MSG instruction for communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I determine the necessary prefixes for the ethernet route when manually inputting the IP address?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To determine the necessary prefixes, such as the "2,1," in 2,1, 192.168.1.1, you may need to refer to the specific documentation or guides for the PLC models being used.</p>
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
