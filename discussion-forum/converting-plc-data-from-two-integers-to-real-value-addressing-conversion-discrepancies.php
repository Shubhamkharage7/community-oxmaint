
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my current project involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module, I am tasked with handling 32 inputs and 24 outputs in the form of arrays of integers. The challenge I am facing is converting this data into either DINT (Double Integer)">
    <meta name="keywords" content="- plc data conversion, - allen bradley plc, - anybus abcc module, - ladder logic programming, - integer to real value conversion, - dint format, - real format, - cop instruction, - cps instruction, - input and">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/converting-plc-data-from-two-integers-to-real-value-addressing-conversion-discrepancies">
    <title>Converting PLC Data from Two Integers to Real Value: Addressing Conversion Discrepancies | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Converting PLC Data from Two Integers to Real Value: Addressing Conversion Discrepancies | Oxmaint Community">
    <meta property="og:description" content="In my current project involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module, I am tasked with handling 32 inputs and 24 outputs in the form of arrays of integers. The challenge I am facing is converting this data into either DINT (Double Integer)">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/converting-plc-data-from-two-integers-to-real-value-addressing-conversion-discrepancies">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Converting PLC Data from Two Integers to Real Value: Addressing Conversion Discrepancies | Oxmaint Community">
    <meta name="twitter:description" content="In my current project involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module, I am tasked with handling 32 inputs and 24 outputs in the form of arrays of integers. The challenge I am facing is converting this data into either DINT (Double Integer)">
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
        "@id": "https://community.oxmaint.com/discussion-forum/converting-plc-data-from-two-integers-to-real-value-addressing-conversion-discrepancies"
      },
      "headline": "Converting PLC Data from Two Integers to Real Value: Addressing Conversion Discrepancies",
      "description": "In my current project involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module, I am tasked with handling 32 inputs and 24 outputs in the form of arrays of integers. The challenge I am facing is converting this data into either DINT (Double Integer)",
      "author": {
        "@type": "Person",
        "name": "kokit"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-04",
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
                <h1 class="text-white">Converting PLC Data from Two Integers to Real Value: Addressing Conversion Discrepancies</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kokit</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">268</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">358</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my current project involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module, I am tasked with handling 32 inputs and 24 outputs in the form of arrays of integers. The challenge I am facing is converting this data into either DINT (Double Integer) or REAL format using instructions like COP or CPS, as I am encountering discrepancies in the values. 

The first value in the input data, MaxFlow, is represented by 4 bytes spanning the first two registers. When attempting to convert Input[0] to DintValue with a length of 1 using the COP instruction, I am not getting the expected result but instead a significantly larger number. 

Additionally, the system includes a Cooperion Feeder equipped with an Anybus CompactCom 40M module for Ethernet/IP communication. To properly handle the inputs and outputs, I need to configure the mapping for the I/O settings in the PLC, specifically defining parameters such as protocol, baud rate, parity, Ethernet/IP settings, input and output block sizes, as well as the register mappings for various data points such as MaximumFlow, Setpoint, Totalizer, and others.

Ensuring accurate communication and data conversion between the PLC and the Anybus module is crucial for the successful operation of the system, requiring a thorough understanding of the setup and configuration for seamless integration. By correctly setting up the I/O mapping and addressing any conversion discrepancies, I aim to optimize the performance and reliability of the overall system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method is to individually map each BOOL from the INT to the DINT. Alternatively, you could utilize a BTD instruction to assign one INT to each "section" of the DINT. This approach can help optimize data mapping and improve efficiency in PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PiNkYnotBrain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One possible solution is to map each BOOL from the INT to the DINT separately. Alternatively, you could utilize a BTD instruction to map one INT to each half of the DINT. Another option is to use the BTD to map two INTs into a DINT and then copy the DINT to Real. This method was successfully implemented on a Schenck weigh controller by PiNkYnotBrain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have an example of two 16-bit integer values and the corresponding 32-bit REAL values they are meant to represent? Also, what is the 32-bit REAL value you receive from the COP two_ints[0] one_real 1 instruction? Let's explore a practical demonstration of converting integers to REAL values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the challenge faced when converting PLC data from two integers to real value using instructions like COP or CPS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenge involves encountering discrepancies in the values during the conversion process, leading to unexpected results such as significantly larger numbers than anticipated.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How is the first value in the input data, MaxFlow, represented in the PLC system involving ladder logic programming with an Allen Bradley PLC and an Anybus ABCC module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The first value, MaxFlow, is represented by 4 bytes spanning the first two registers, requiring careful handling during the conversion process to ensure accuracy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is it important to configure the mapping for I/O settings in the PLC when working with devices like the Cooperion Feeder and Anybus CompactCom 40M module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Configuring the mapping for I/O settings is crucial to define parameters such as protocol, baud rate, parity, Ethernet/IP settings, input and output block sizes, and register mappings for data points like MaximumFlow, Setpoint, Totalizer, and others, ensuring accurate communication between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How does addressing conversion discrepancies between the PLC and the Anybus module contribute to optimizing system performance and reliability?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: By addressing conversion discrepancies and setting up the I/O mapping correctly, seamless integration and accurate data conversion can be achieved, ultimately optimizing the performance and reliability of the overall system.</p>
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
