
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am currently working on implementing Indirect Addressing for bits within an INT. With a total of 11 digital inputs at my disposal, my goal is to assign the value of each DI to an INT variable. While referencing tutorials on Indirect Addressing in Studio 5000, I found">
    <meta name="keywords" content="indirect addressing for int variables, digital input values to int variables, assigning digital inputs to int variables, indirect addressing in studio 5000, mov instruction in indirect addressing">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-assign-digital-input-values-to-int-variables-using-indirect-addressing">
    <title>How to Assign Digital Input Values to INT Variables Using Indirect Addressing | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Assign Digital Input Values to INT Variables Using Indirect Addressing | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am currently working on implementing Indirect Addressing for bits within an INT. With a total of 11 digital inputs at my disposal, my goal is to assign the value of each DI to an INT variable. While referencing tutorials on Indirect Addressing in Studio 5000, I found">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-assign-digital-input-values-to-int-variables-using-indirect-addressing">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Assign Digital Input Values to INT Variables Using Indirect Addressing | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am currently working on implementing Indirect Addressing for bits within an INT. With a total of 11 digital inputs at my disposal, my goal is to assign the value of each DI to an INT variable. While referencing tutorials on Indirect Addressing in Studio 5000, I found">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-assign-digital-input-values-to-int-variables-using-indirect-addressing"
      },
      "headline": "How to Assign Digital Input Values to INT Variables Using Indirect Addressing",
      "description": "Greetings! I am currently working on implementing Indirect Addressing for bits within an INT. With a total of 11 digital inputs at my disposal, my goal is to assign the value of each DI to an INT variable. While referencing tutorials on Indirect Addressing in Studio 5000, I found",
      "author": {
        "@type": "Person",
        "name": "Rookie0810"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">How to Assign Digital Input Values to INT Variables Using Indirect Addressing</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rookie0810</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">544</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">189</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am currently working on implementing Indirect Addressing for bits within an INT. With a total of 11 digital inputs at my disposal, my goal is to assign the value of each DI to an INT variable. While referencing tutorials on Indirect Addressing in Studio 5000, I found that they primarily utilize the MOV instruction to populate arrays. However, MOV is not equipped to handle writing values to an array of BOOL[32] or specific bits within an INT. Essentially, I am looking to update the state of the INT based on the active digital inputs (e.g., DI 1, 3, and 7 activated should result in the corresponding bits in the INT being set to 1). The update needs to occur every 500ms. Is there a feasible solution to achieve this task?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The method of using either COP or XICs paired with OTEs depends on the data format of your DI, which can vary depending on the type of IO.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 recommended utilizing either COP or XICs paired with OTEs, depending on the data format of your Digital Input (DI) signals. While COP may not be compatible with BOOL data, XICs and OTEs can still be employed. For the specific requirement of transmitting the state of 11 DIs as a single analog output value, an INT data type is needed to consolidate the inputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rookie0810</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When manipulating a bit in your program, such as using the XIC instruction, it's important to understand the task at hand. Double-checking your input is crucial to prevent any errors that could impact the controller's performance. It's easy to inadvertently blame the controller for mistakes when not paying close attention to your actions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When Rookie0810 attempted to use Control Output Pointer (COP) with Boolean data types, they encountered an issue. Instead, they are utilizing eXamine If Closed (XIC) and Output Energize (OTE) instructions, but require an Integer (INT) to store the status of the 11 Digital Inputs (DIs) to transmit it to a singular Analog Output. To achieve this, simply use the XIC DI OTE INT.x method, where INT.x represents one of the 16 available bit-level addresses within the Integer file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you working on this task in Studio 5000 or RDLogix? If so, @dmroeder's solution should help. Consider utilizing a loop for efficiency or tackling it head-on with 11 XIC/OTE pairs for a brute force approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 recommended performing XIC DI OTE INT.x operation on one of the 16-bit addresses within the INT. As I followed the instructions, I realized it was simpler than I had anticipated. Thank you for your guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rookie0810</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to optimize memory usage and improve ease of use, it is recommended to steer clear of using arrays of BOOLs in your coding. This approach can be inefficient and challenging to work with, as you may have already experienced.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the benefits of using a 32 bool array over a DINT? Do you intend to iterate through the input values in a loop?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various correct responses to this query. It is important to note that utilizing INT tags can lead to inefficiencies and slower program execution. This is due to the fact that the controller automatically converts INT values to DINT behind the scenes before carrying out instructions. The controller operates on a 32-bit architecture, meaning it processes 32-bit values. The constant conversions between INT and DINT (or SINT) require time and can slow down the program scan. Even if a tag only requires values from 1 to 5, it is still more efficient to use DINT data types. Although smaller data types do not save on program size since they occupy a 32-bit memory space, using DINTs enhances efficiency. Essentially, SINTs and INTs are primarily present for compatibility with older controllers, and it is advisable to only use them when necessary for compatibility reasons.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I just recalled a useful way to treat DINT variables like arrays by using the notation myDINT.[bitIndex], despite the limitation of only 32 bits in size. This trick allows you to mimic array behavior without actually creating an array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One useful tip for working with DINT variables is using the notation myDINT.[bitIndex] to simulate an array-like behavior. Keep in mind that there is a size limitation of 32 bits for this method. If you need an array of DINTs with more than 32 bits, you can achieve this by using the following syntax: myDINTarray[(bitindex AND -32) / 32].[bitindex AND 31]. This allows you to work with larger arrays efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using INT tags in programming, it can lead to inefficiencies and slower execution due to the controller converting them to DINT values. This conversion process takes time and can slow down the program scan. Despite the temptation to use smaller data types like INT or SINT for values ranging from 1 to 5, it is actually more efficient to stick with DINT data-types on a 32-bit architecture controller. While INTs and SINTs exist for legacy controller compatibility, it is recommended to prioritize the use of DINT and LINT types for better efficiency and performance in application code. Although smaller data types have their place in strings and protocol structures, opting for 32- or 64-bit types whenever possible can help optimize memory usage and overall program efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I assign digital input values to INT variables using Indirect Addressing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To assign digital input values to INT variables using Indirect Addressing, you can implement a solution where the state of the INT is updated based on the active digital inputs. This can be achieved by monitoring the digital inputs and setting corresponding bits in the INT variable to 1 when certain digital inputs are activated.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Can I use the MOV instruction to populate arrays for handling digital input values?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the MOV instruction is commonly used to populate arrays, it may not be suitable for writing values to an array of BOOL[32] or specific bits within an INT. You may need to explore other instructions or methods tailored to handling specific bit manipulations within INT variables.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What is the significance of updating the state of the INT every 500ms?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Updating the state of the INT variable every 500ms ensures that the system remains responsive to changes in the digital input values. This frequent update interval helps maintain real-time synchronization between the digital inputs and the corresponding bits in the INT variable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: How can I efficiently handle a scenario where multiple digital inputs affect different bits within an INT variable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To efficiently handle scenarios where multiple digital inputs activate different bits within an INT variable, you can create a logic that dynamically updates the relevant bits based</p>
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
