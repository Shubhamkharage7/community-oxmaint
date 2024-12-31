
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you looking for a way to create a FIFO queue and storage network using only basic logical instructions (and, or, not, xor)? I am currently working with a legacy PLC that lacks an expanded instruction set, and upgrading is not feasible due to cost and time constraints. For">
    <meta name="keywords" content="fifo queue, storage network, ladder logic, legacy plc, basic logical instructions, and gate, or gate, not gate, xor gate, conveyor belt sorting, separate containers, label sorting, point x identification, random order arrival, legacy plc programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/creating-a-fifo-queue-and-storage-network-with-basic-logical-instructions-in-ladder-logic">
    <title>Creating a FIFO queue and storage network with basic logical instructions in ladder logic | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Creating a FIFO queue and storage network with basic logical instructions in ladder logic | Oxmaint Community">
    <meta property="og:description" content="Are you looking for a way to create a FIFO queue and storage network using only basic logical instructions (and, or, not, xor)? I am currently working with a legacy PLC that lacks an expanded instruction set, and upgrading is not feasible due to cost and time constraints. For">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/creating-a-fifo-queue-and-storage-network-with-basic-logical-instructions-in-ladder-logic">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Creating a FIFO queue and storage network with basic logical instructions in ladder logic | Oxmaint Community">
    <meta name="twitter:description" content="Are you looking for a way to create a FIFO queue and storage network using only basic logical instructions (and, or, not, xor)? I am currently working with a legacy PLC that lacks an expanded instruction set, and upgrading is not feasible due to cost and time constraints. For">
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
        "@id": "https://community.oxmaint.com/discussion-forum/creating-a-fifo-queue-and-storage-network-with-basic-logical-instructions-in-ladder-logic"
      },
      "headline": "Creating a FIFO queue and storage network with basic logical instructions in ladder logic",
      "description": "Are you looking for a way to create a FIFO queue and storage network using only basic logical instructions (and, or, not, xor)? I am currently working with a legacy PLC that lacks an expanded instruction set, and upgrading is not feasible due to cost and time constraints. For",
      "author": {
        "@type": "Person",
        "name": "jendrus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">Creating a FIFO queue and storage network with basic logical instructions in ladder logic</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jendrus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8576</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">197</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you looking for a way to create a FIFO queue and storage network using only basic logical instructions (and, or, not, xor)? I am currently working with a legacy PLC that lacks an expanded instruction set, and upgrading is not feasible due to cost and time constraints. For instance, imagine a scenario where boxes labeled 'a' and 'b' are moving along a conveyor belt and need to be sorted into separate containers based on their labels. The boxes are identified at point 'x' 50 feet before reaching the separator, where there is a brief transition time between containers. The boxes arrive in a random order. Your guidance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey jendrus, could you please provide us with the brand and model number of the PLC you are using? Your input would greatly assist us. 
Thank you, James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about its utility, the Genisys non-vital logic emulator could be just what you need. Take a look at the information provided in the programming manual excerpt below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jendrus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to determine the feasibility of this task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jendrus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While this may not be what you had in mind, it might be beneficial to consider an upgrade if feasible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>adisharr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jendrus asked if it is feasible to implement indirect addressing, pointers, array data types, etc on a particular device. Without these capabilities, it may be technically possible but could end up being more time-consuming compared to just upgrading the device. Can anyone provide insight on this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is a PLC and how does it relate to legacy PLCs? Specifically, if you are utilizing an AB PLC2 series, it comes equipped with a built-in FIFO function that can be easily utilized for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When searching "programming Genisys and Microlok Plus" online, you can discover a wealth of information dating back to 1991. During that time, working with these systems was much more challenging compared to today. The complexity of these systems is on par with PDP-11 systems, and possibly even more obscure. It may be time for an upgrade to modernize the systems. Consider using a shift register as a FIFO, but it's important to determine if the instruction set includes a JMP or similar function to halt the FIFO when not in use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danatomega</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this unit does not support arrays, pointers, or indirect addressing, it communicates with other units through serial links using a specific protocol. While it may be tempting to replace it with an Allen Bradley unit, the upgrade would be a substantial project, requiring the replacement of multiple units or finding a way for the Allen Bradley unit to communicate with the other units effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jendrus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Take a glance at page 15 of the document to uncover the challenges faced in the past when implementing a hardware FIFO. While the translation to programmed logic is straightforward, coding for longer lengths can be quite daunting. This particular example focuses on a single bit, but to handle bytes, you'll need to work with eight bits in parallel. Considering the context of boxes a and b, it seems likely that a single bit may suffice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jvdcande</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How many FIFO file locations are you referring to? Essentially, you will act as the FIFO system. You must devise a method to track the FIFO position by using a list of bits, and ensure that FIFO file elements are properly shifted during loading and unloading transitions. 

In simple terms, during a FIFO load operation, you should examine the position bit group to identify the highest zero value position bit. Then, you should set the FIFO bit associated with that position to the FIFO input state and update the FIFO position bit for that location. If you try to load and the highest possible position bit is already set, the load operation should be aborted.

For unloading, you will first need to set the FIFO output to the value of FIFO file bit 0. Subsequently, you should update file bit 0 with the status of file bit 1, file bit 1 with the status of file bit 2, and so on, until you reach the FIFO file bit whose location bit is set to zero. Lastly, the highest non-zero FIFO position bit should be reset. If you attempt a FIFO unload and find that position bit 0 is NOT set, the unload operation should be aborted.

Does this sound like a fun challenge to you?Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is theoretically possible to add and remove bits from a buffer by manually shifting each memory bit. For instance, you can add a new bit using a code like the one below:

To add a new bit to the "buffer":
Code:
C -> Add -> D
-||---||---()

D -> Add -> B
-||---|/|-|C->DB->CA->BNew->A

To remove a bit from the buffer, you would need to track the buffer's length and extract the data accordingly. You may require a parallel buffer with only one true bit to determine which element of the FIFO buffer to read from. This would involve writing read commands for all possible elements, with only one executing at a time, followed by adjusting the parallel buffer accordingly.

In practical terms, managing a FIFO buffer deeper than 3 or 4 layers manually can become tedious. If you are communicating with other systems via serial communication, consider incorporating a modern PLC dedicated to operating the FIFO stack. This PLC could streamline the process and facilitate communication with the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42, I believe you are exhibiting a FILO approach, which aligns with the core concept. - Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kamenges pointed out that the concept displayed by mk42 is similar to a FILO (First In, Last Out), although the underlying idea is correct. Keith agreed, commenting that he usually uses a stack buffer instead of a FIFO (First In, First Out) and will make the necessary adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that the manual excerpt does not display the complete set of instructions. If you are working with word variables and have the ability to manipulate their individual bits using a SHIFT RIGHT operation, you can try the following approach: Create a variable called FIFO WORD and upon a certain step INPUT, shift the content in FIFO by 15 bits to the right, then perform a specific action based on the value of n depending on the queue length. If the queue exceeds 16, utilize another word variable FIFO2 and shift its content by 15 bits to the right and read from FIFO2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ydtech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To effectively program a PLC, you will require development software, a simulator, and a compiler. An option to consider is utilizing an Automation Direct PLC for queuing tasks, using digital I/O to communicate the box's status to the MicrLok PLC at the diverting section of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danatomega</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, mk42 suggests adding a new element to the buffer through a code snippet. To remove an element from the buffer, it is essential to keep track of its length and extract the data accordingly. It may be necessary to have a separate parallel buffer with only one active bit to indicate which element of the FIFO buffer to retrieve. Writing read commands for all potential elements and executing only one at a time is crucial. This process could become cumbersome when dealing with a FIFO buffer with more than 3 or 4 layers. My current usage involves a buffer with just 3 or 4 layers. However, I am unsure whether I need two buffers for two boxes or just one will suffice. Consideration is also given to utilizing a micrologix unit for managing the FIFO, even though it may require wiring and hardware adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jendrus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If upgrading is not an option, consider adding a new PLC to easily implement serial communications for your advanced logic needs. This will allow you to integrate the old, outdated system with modern technology and improve functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>WARNING: NECRO THREAD DETECTED! Unfortunately, I missed out on this discussion. The solution is clear, yet laborious as mentioned by fellow users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create a FIFO queue and storage network using basic logical instructions in ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: You can achieve this by using basic logical instructions such as AND, OR, NOT, and XOR in ladder logic to implement the required sorting and storage mechanism for the boxes moving along the conveyor belt.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you provide an example of how to sort boxes labeled 'a' and 'b' into separate containers using the FIFO queue approach?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Sure, you can design a logic sequence that identifies the labels of the boxes at point 'x' and routes them to the appropriate containers based on their labels while maintaining the order of arrival using the FIFO queue concept.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do I handle the brief transition time between containers in the sorting process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: You can incorporate timing elements in your ladder logic program to manage the brief transition time between containers effectively and ensure the boxes are sorted accurately while maintaining the desired order.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to implement a FIFO queue and storage network without needing to upgrade to a PLC with an expanded instruction set?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Yes, it is possible to design and implement a FIFO queue and storage network using basic logical instructions in ladder logic, even on a legacy PLC that lacks an expanded instruction set, as long as you carefully plan and structure your logic program.</p>
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
