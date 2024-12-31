
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! Im facing an issue where I am unable to extract the first 12 characters of a message sent by a barcode reader to the ascii card (1734-rs232 ascii). The challenge arises because the barcode readers message is 170 characters long, causing the XX.ReceiveRecordNumber in the plc to increase">
    <meta name="keywords" content="barcode reader, 1734-rs232 ascii, troubleshooting, extracting characters, plc data, data extraction, buffer overflow, ascii card, 9">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-extracting-first-12-characters-from-lengthy-barcode-messages-on-1734-rs232-ascii">
    <title>Troubleshooting: Extracting first 12 characters from lengthy barcode messages on 1734-rs232 ASCII | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting: Extracting first 12 characters from lengthy barcode messages on 1734-rs232 ASCII | Oxmaint Community">
    <meta property="og:description" content="Greetings! Im facing an issue where I am unable to extract the first 12 characters of a message sent by a barcode reader to the ascii card (1734-rs232 ascii). The challenge arises because the barcode readers message is 170 characters long, causing the XX.ReceiveRecordNumber in the plc to increase">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-extracting-first-12-characters-from-lengthy-barcode-messages-on-1734-rs232-ascii">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting: Extracting first 12 characters from lengthy barcode messages on 1734-rs232 ASCII | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! Im facing an issue where I am unable to extract the first 12 characters of a message sent by a barcode reader to the ascii card (1734-rs232 ascii). The challenge arises because the barcode readers message is 170 characters long, causing the XX.ReceiveRecordNumber in the plc to increase">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-extracting-first-12-characters-from-lengthy-barcode-messages-on-1734-rs232-ascii"
      },
      "headline": "Troubleshooting: Extracting first 12 characters from lengthy barcode messages on 1734-rs232 ASCII",
      "description": "Greetings! Im facing an issue where I am unable to extract the first 12 characters of a message sent by a barcode reader to the ascii card (1734-rs232 ascii). The challenge arises because the barcode readers message is 170 characters long, causing the XX.ReceiveRecordNumber in the plc to increase",
      "author": {
        "@type": "Person",
        "name": "Pandarojo2024"
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
                <h1 class="text-white">Troubleshooting: Extracting first 12 characters from lengthy barcode messages on 1734-rs232 ASCII</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Pandarojo2024</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">949</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">202</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I'm facing an issue where I am unable to extract the first 12 characters of a message sent by a barcode reader to the ascii card (1734-rs232 ascii). The challenge arises because the barcode reader's message is 170 characters long, causing the XX.ReceiveRecordNumber in the plc to increase by 2 as it overwrites the initial data. Consequently, I can only access characters 129 to 170 in the buffer. How can I retrieve the data from the beginning of the message? It is crucial for me to obtain the first 12 bytes from the barcode reader's message. Your assistance is greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Does each complete set of 170 characters sent by the barcode reader have a distinct delimiter at the end? It is important to pay attention to the specific and pertinent information being transmitted by the barcode reader via the serial interface, and to incorporate this into the programming of the PLC reader. This will ensure seamless data transfer and processing within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After each set of 170 characters, there is a carriage return "#R" included in the received data. The data is structured in this format: "01-0123456789;02-1357902468;03-9876543210;04-9753186420;05-....................". To extract the specific string "0123456789", I need to process the data accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandarojo2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When processing data, consider it as a continuous flow of characters. Instead of <CR> thinking of it as 01-0123456789;02-...<CR>01-0123456789;02-...<CR>, think about it as ...<CR>01-0123456789;...<CR>01-0123456789;... Configure the start delimiter as a carriage return ('$r'; <CR>; ASCII code 13) and the stop delimiter as a semi-colon (';'). The serial module will disregard everything from the semi-colon to the carriage return preceding the barcode. This may cause the initial barcode to be missed, but it will then extract everything from the carriage return to the next semi-colon for each subsequent barcode. You can then extract the necessary characters from the retrieved string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you. I will give it a try on Monday. I was attempting to process incoming messages without using a start delimiter and using a semi-colon as the stop delimiter. This led to receiving multiple messages, one for each semi-colon encountered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandarojo2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! One solution to consider is bypassing the first barcode. The challenge stems from the limited Input buffer size of the 1734-232ASC module, which is only 128 bytes, while the barcode string is 170 bytes long. It is uncertain if the master/slave handshake will allow the overflowed buffer contents to be transferred to the Produced data connection while the buffer is still being filled. It is recommended to investigate this further. This scenario may necessitate a device with a larger buffer capacity. Using semicolons as delimiters and parsing each element individually could be the optimal approach if the RPI has sufficient speed or there is a delay between the delimited sections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the warm welcome. The designated sections do not experience any delays. The RPI interval is currently set at 80ms, and I am unable to adjust it according to factory regulations. I will explore alternative solutions before seeking permission for any changes. Losing the initial message is not a concern as long as the overall functionality is maintained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandarojo2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach raised a valid concern about the master/slave handshake's ability to transfer overflowed buffer contents to the Produced data connection while the buffer is still being filled. This issue warrants further investigation. I believe there is potential for this idea to work. Thank you for bringing this up! Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandarojo2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach pointed out the limitation of the 1734-232ASC module, which has an Input buffer size of only 128 bytes, while the barcode string being used is 170 bytes long. This discrepancy could potentially be a deal-breaker for the suggested approach. According to the manual for the 1734-232ASC module, once the Start Delimiter [<CR>] is received, all characters are stored until either the End Delimiter [';'] is received or the Max_Receive_Char_Length is reached. Once the End Delimiter [';'] is reached, the data string is updated, and the ASCII module will ignore all subsequent data until the start delimiter [<CR>] is received again. As a result, any characters exceeding 150+ characters from the target semi-colon (End Delimiter) after the target 12 characters to the next <CR> (Start Delimiter) will be disregarded and will not consume the available buffer space.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I extract the first 12 characters from a lengthy barcode message when using the 1734-rs232 ASCII card?</h4>
<p class='text-muted'><strong>Answer:</strong> - To extract the first 12 characters of a message sent by a barcode reader to the ASCII card, you can adjust the buffer settings to ensure that the initial data is not overwritten. This will allow you to access the beginning of the message and retrieve the first 12 bytes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the XX.ReceiveRecordNumber in the PLC increase by 2 when the barcode reader's message is 170 characters long?</h4>
<p class='text-muted'><strong>Answer:</strong> - The XX.ReceiveRecordNumber in the PLC increases by 2 because the barcode reader's 170-character message overwrites the initial data in the buffer, causing the PLC to skip ahead in the buffer. This results in only being able to access characters 129 to 170 of the message.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I take to ensure I can retrieve the data from the beginning of the barcode reader's message?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure you can access the data from the beginning of the barcode reader's message, you should adjust the buffer settings or configuration in the PLC to prevent the overwriting of initial data. This will allow you to retrieve the first 12 bytes of the message as needed.</p>
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
