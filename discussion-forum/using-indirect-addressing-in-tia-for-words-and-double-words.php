
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="One example of what I need is an output word like QW125. However, I may change the number 125 to something else, such as QW(P), where P=127. Then I can use QW127 in my program. I have looked into Peek and Poke, but they only work with bytes at">
    <meta name="keywords" content="indirect addressing, tia, words, double words, qw125, qw(p), peek and poke, words programming, double words programming, plc programming, addressing modes, data types, siemens plc, indirect memory access">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/using-indirect-addressing-in-tia-for-words-and-double-words">
    <title>Using Indirect Addressing in TIA for Words and Double Words | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Using Indirect Addressing in TIA for Words and Double Words | Oxmaint Community">
    <meta property="og:description" content="One example of what I need is an output word like QW125. However, I may change the number 125 to something else, such as QW(P), where P=127. Then I can use QW127 in my program. I have looked into Peek and Poke, but they only work with bytes at">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/using-indirect-addressing-in-tia-for-words-and-double-words">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Using Indirect Addressing in TIA for Words and Double Words | Oxmaint Community">
    <meta name="twitter:description" content="One example of what I need is an output word like QW125. However, I may change the number 125 to something else, such as QW(P), where P=127. Then I can use QW127 in my program. I have looked into Peek and Poke, but they only work with bytes at">
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
        "@id": "https://community.oxmaint.com/discussion-forum/using-indirect-addressing-in-tia-for-words-and-double-words"
      },
      "headline": "Using Indirect Addressing in TIA for Words and Double Words",
      "description": "One example of what I need is an output word like QW125. However, I may change the number 125 to something else, such as QW(P), where P=127. Then I can use QW127 in my program. I have looked into Peek and Poke, but they only work with bytes at",
      "author": {
        "@type": "Person",
        "name": "akivanc2"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">Using Indirect Addressing in TIA for Words and Double Words</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>akivanc2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">157</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">482</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>One example of what I need is an output word like QW125. However, I may change the number 125 to something else, such as QW(P), where P=127. Then I can use QW127 in my program. I have looked into Peek and Poke, but they only work with bytes at the most. I require something similar to work with words and double words.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have a CPU with a 1500 series? In that case, consider developing your own POKE_WORD/DWORD functions by utilizing the STL library. Unleash the power of your CPU with custom memory manipulation functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I have not utilized them extensively, pointers are available as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While pointers can be a powerful tool, I have not had much experience using them. However, it is important to note that improper use of pointers can lead to serious consequences, akin to pointing a loaded shotgun at your own feet, placing your finger on the trigger, and speeding down a rough dirt path. It's crucial to handle pointers with caution to avoid potential pitfalls.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a communication protocol like 1200/1500, it's important to consider how to efficiently address and access data in your program. One effective method I use is defining a User Defined Type (UDT) with an array that can be accessed indirectly, then assigning it to the initial IO address. This allows for easy access to the data in the system using standard array notation: tagname.array[indexno]. To ensure smooth operation, it's crucial to map the IO addresses correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I use indirect addressing in TIA for words and double words?
   - To use indirect addressing for words and double words in TIA, you can assign a variable to represent the memory address you want to access. For example, you can use a variable like P to represent the memory address 127, and then access the word or double word stored at that address using the variable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I work with words and double words using Peek and Poke in TIA?</h4>
<p class='text-muted'><strong>Answer:</strong> - Peek and Poke instructions in TIA are designed to work with bytes at the most, so they may not be suitable for accessing words and double words directly. You may need to use indirect addressing with variables to access words and double words in your program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I dynamically change the memory address for output words in TIA?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can dynamically change the memory address for output words in TIA by using variables and indirect addressing. By assigning a variable to represent the memory address you want to access, you can easily change the address at runtime without modifying your program logic.</p>
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
