
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking assistance to understand the functionality and configuration of my PCS setup. Specifically, I have created an FB101, a global DB101, and a UDT101 within the PCS. The DB101 utilizes the UDT101 struct, and the FB101 STAT variables also reference the UDT101 struct. It seems that FB101">
    <meta name="keywords" content="global db, calling fb, siemens step 7, pcs setup, fb101, db101, udt101, struct, stat variables, data input, sequence.bool01, process manual, call fb101 db101, configuration, functionality, guidance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-global-db-in-calling-a-fb-in-siemens-step-7">
    <title>How to Use Global DB in Calling a FB in Siemens Step 7? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use Global DB in Calling a FB in Siemens Step 7? | Oxmaint Community">
    <meta property="og:description" content="I am seeking assistance to understand the functionality and configuration of my PCS setup. Specifically, I have created an FB101, a global DB101, and a UDT101 within the PCS. The DB101 utilizes the UDT101 struct, and the FB101 STAT variables also reference the UDT101 struct. It seems that FB101">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-global-db-in-calling-a-fb-in-siemens-step-7">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use Global DB in Calling a FB in Siemens Step 7? | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking assistance to understand the functionality and configuration of my PCS setup. Specifically, I have created an FB101, a global DB101, and a UDT101 within the PCS. The DB101 utilizes the UDT101 struct, and the FB101 STAT variables also reference the UDT101 struct. It seems that FB101">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-global-db-in-calling-a-fb-in-siemens-step-7"
      },
      "headline": "How to Use Global DB in Calling a FB in Siemens Step 7?",
      "description": "I am seeking assistance to understand the functionality and configuration of my PCS setup. Specifically, I have created an FB101, a global DB101, and a UDT101 within the PCS. The DB101 utilizes the UDT101 struct, and the FB101 STAT variables also reference the UDT101 struct. It seems that FB101",
      "author": {
        "@type": "Person",
        "name": "plcnoob69"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">How to Use Global DB in Calling a FB in Siemens Step 7?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>plcnoob69</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">331</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking assistance to understand the functionality and configuration of my PCS setup. Specifically, I have created an FB101, a global DB101, and a UDT101 within the PCS. The DB101 utilizes the UDT101 struct, and the FB101 STAT variables also reference the UDT101 struct. It seems that FB101 is being called alongside the global DB101 within the PCS environment. When I input data into these stat variables in FB (e.g. = #sequence.bool01), it is reflected in the global DB. I am interested in learning how to achieve this process manually. Despite attempting to write "call fb101, db101," it appears in red italics. Can anyone provide guidance on this matter?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the functionality of your system, consider adding an Input/Output (IO) pin to the Function Block (FB) and defining it through a User-Defined Type (UDT). Create a Database (DB) with a structure determined by the UDT, and when invoking the FB, transmit the DB structure through the pin. Remember to establish a separate instance-DB instead of using the shared DB. Another option is to convert the FB to a Function Code (FC) and exclusively handle the data transmitted via the IO pin. By implementing these strategies, you can streamline your processes and optimize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the response. I comprehend your explanation and agree that it is possible to achieve the desired outcome in that manner. However, the PCS appears to employ a distinct method as the IO pin remains unutilized. Additionally, I am unable to locate any IDBs either offline or online (unless they are hidden from view in some way?).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plcnoob69</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The compiler is indicating the importance of not using a global database (DB) when calling a function block (FB), and instead, utilizing an instance DB. While an FB can accept input from another DB or its elements, it must have its own instance DB. A user-defined data type (UDT) is essentially a structured datatype. Before utilizing a UDT, you must define an instance of it within a DB. This DB can either be global or part of an FB definition. Essentially, an FB definition can be seen as defining another structured datatype of type FB. When calling an FB, it is necessary to provide an instance of this structured datatype (an instance DB). In your scenario, the FB must first be defined with the required tags and symbols in the declaration area, followed by creating a new DB as an instance of the FB type. This newly created instance DB can then be used in the FB call.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you refer to 'PCS', are you referring to PCS7 software? I don't have much experience with PCS7, but it's possible that PCS7 generates STL code using higher-level language and building blocks such as GRAPH and CFC. These automatically generated blocks may be hidden and not meant to be directly manipulated in STL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, @joseph_e2, for your response and explanation. I have been trying to understand the absence of any instance DB-s in both my offline and online projects. It seems that unless they are hidden, they do not exist in either project. @JesperMP, when I refer to PCS, I am talking about a Process Control System used in various industries, including large beverage factories. This system plays a crucial role in controlling processes and includes a configurator to set up valves, pumps, equipment, and more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plcnoob69</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there additional Facebook accounts besides the one you have created? If you decide to make a new Facebook account, you must also set up a separate instance database for it. The creation of a new database is not done automatically for you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>joseph_e2 inquired about the availability of multiple Function Blocks (FBs) or just one that you have created. When creating a new FB, it is essential to also set up a new instance Database (DB) for it as it does not happen automatically. 

There are various FBs that can interact with global DBs, as previously mentioned. The FB status variables and the "global DB" share the same User Defined Type (UDT). When a bit is activated within an FB, such as writing =#sequence.bit001, the bit001 will also be activated in the global DB. This functions similarly to an instance DB, although it is not the same. Additionally, these FBs do not have input, output, or input/output variables.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plcnoob69</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plcnoob69 mentioned to JesperMP about the use of a Process Control System (PCS) in a major beverage production facility. This system is vital for regulating the operation by configuring valves, pumps, equipment, and various other components. It appears to be similar to PCS7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When calling a Function Block with a manually set Data Block in a PLC program, the UC FB instruction can be used to configure AR2 and the DB registers. This process happens in the background when the 'call FB101, DB101' command is executed. If you need the specific register setup, it may be available in a previous post in the archives or I can provide it later. Don't hesitate to ask for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below is the code snippet for the aforementioned function call, which involves operations like loading data and performing calculations. The code includes commands such as "OPN," "LD," and "FB," and is structured to process data efficiently. By following this code sequence, the program can successfully execute the desired tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What is the purpose of using a global DB in Siemens Step 7?
- The global DB in Siemens Step 7 allows for sharing data between different function blocks and components within the PCS setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I configure a global DB to be utilized by a function block in Siemens Step 7?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure a global DB for use by a function block, you can define the structure of the DB and reference it in both the DB and the function block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is the call to function block alongside the global DB appearing in red italics in Siemens Step 7?</h4>
<p class='text-muted'><strong>Answer:</strong> - The call to a function block alongside a global DB may appear in red italics if there is an error in the syntax or configuration. Check for any mistakes in the function block call statement.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I manually achieve the process of updating data in the global DB through a function block in Siemens Step 7?</h4>
<p class='text-muted'><strong>Answer:</strong> - To manually update data in the global DB through a function block, ensure that the function block is designed to reference the global DB and that the data manipulation is correctly implemented within the function block.</p>
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
