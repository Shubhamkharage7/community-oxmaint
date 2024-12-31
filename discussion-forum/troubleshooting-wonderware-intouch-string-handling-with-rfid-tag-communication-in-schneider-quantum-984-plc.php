
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im seeking guidance on how Wonderware Intouch handles strings and where I might be making a mistake. I am attempting to compare two strings in a Schneider Quantum 984 PLC - one inputted through the SCADA system and the other obtained from an RFID tag. The communication">
    <meta name="keywords" content="wonderware intouch string handling, rfid tag communication, schneider quantum 984 plc troubleshooting, modbus tcp communication, scada system input, rfid tag registers, ascii character conversion">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-string-handling-with-rfid-tag-communication-in-schneider-quantum-984-plc">
    <title>Troubleshooting Wonderware Intouch String Handling with RFID Tag Communication in Schneider Quantum 984 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Wonderware Intouch String Handling with RFID Tag Communication in Schneider Quantum 984 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im seeking guidance on how Wonderware Intouch handles strings and where I might be making a mistake. I am attempting to compare two strings in a Schneider Quantum 984 PLC - one inputted through the SCADA system and the other obtained from an RFID tag. The communication">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-string-handling-with-rfid-tag-communication-in-schneider-quantum-984-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Wonderware Intouch String Handling with RFID Tag Communication in Schneider Quantum 984 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im seeking guidance on how Wonderware Intouch handles strings and where I might be making a mistake. I am attempting to compare two strings in a Schneider Quantum 984 PLC - one inputted through the SCADA system and the other obtained from an RFID tag. The communication">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-string-handling-with-rfid-tag-communication-in-schneider-quantum-984-plc"
      },
      "headline": "Troubleshooting Wonderware Intouch String Handling with RFID Tag Communication in Schneider Quantum 984 PLC",
      "description": "Hello everyone, Im seeking guidance on how Wonderware Intouch handles strings and where I might be making a mistake. I am attempting to compare two strings in a Schneider Quantum 984 PLC - one inputted through the SCADA system and the other obtained from an RFID tag. The communication",
      "author": {
        "@type": "Person",
        "name": "NJC123"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-19",
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
                <h1 class="text-white">Troubleshooting Wonderware Intouch String Handling with RFID Tag Communication in Schneider Quantum 984 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NJC123</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4442</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm seeking guidance on how Wonderware Intouch handles strings and where I might be making a mistake. I am attempting to compare two strings in a Schneider Quantum 984 PLC - one inputted through the SCADA system and the other obtained from an RFID tag. The communication between the SCADA and PLC is done via Modbus TCP.

An issue arises when the PLC reads the registers from the RFID tag, as any empty spaces in the string are converted to 0's within the PLC. However, when the same string is entered through the SCADA, the empty spaces are converted to hex code 20 (spaces).

For instance, the string spans across 4 registers:

- RFID I/O Message: 400001-400004
- SCADA I/O Message: 400101-400104

RFID Read Tag:
400001 = 3537 Hex (57 ASCII char)
400002 = 3333 Hex (33 ASCII char)
400003 = 0000 Hex (ASCII char)
400004 = 0000 Hex (ASCII char)

SCADA Entered Tag:
400101 = 3537 Hex (57 ASCII char)
400102 = 3333 Hex (33 ASCII char)
400103 = 2020 Hex ([space,space] ASCII char)
400104 = 2020 Hex ([space,space] ASCII char)

Upon reviewing the diagnostics in the smc, it is clear that the SCADA input includes additional spaces (R/H justified |).

RFID = 5733 | SCADA = 5733 |

I am seeking advice on how to prevent the SCADA system from adding these spaces automatically. Any insights or suggestions would be highly valued. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance tag name efficiency, consider utilizing a script employing Left, Mid, and Right String functions to eliminate any spaces. For more guidance on Wonderware programming steps, check out http://wonderwareintouchusers.com/wonderware-programming-step-learning-guide/. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gclshortt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Appreciate your response. I recently tried using the StringTrim function to eliminate spaces in the mimic. However, despite the removal of spaces, the hex code 20 still appears in the PLC registers. It seems like this could be a unique feature of the DASMBTCP driver or possibly how Wonderware handles empty spaces in messages when transferring to registers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NJC123</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's never too late to identify the problem for future reference. In C programming, the string variable style should be chosen according to the PLC string-data format. You can select the style used by the device to store strings in its registers, which can be either full length (space padded), C style (null terminated), or Pascal style (includes length specifier). The default style is full length.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fou</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are empty spaces in strings converted differently in Wonderware Intouch between RFID tag communication and SCADA input?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue arises due to how the Schneider Quantum 984 PLC handles empty spaces in strings received from an RFID tag (converted to 0's) compared to those inputted through the SCADA system (converted to hex code 20, spaces).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the impact of the extra spaces added by the SCADA system on string handling in Wonderware Intouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - The additional spaces added by the SCADA system can lead to discrepancies in string comparison and processing within the PLC, affecting the expected results.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can one prevent the SCADA system from automatically adding spaces to strings in Wonderware Intouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To prevent the SCADA system from automatically adding spaces to strings, adjustments may need to be made in the configuration or settings of the SCADA system or during the data transmission process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a solution to standardize string formatting between RFID tag communication and SCADA input in Wonderware Intouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - Implementing a standardized format for string handling, such as converting empty spaces to a consistent representation before transmission or ensuring consistent data handling protocols, can help maintain uniformity in string formatting between RFID tag communication and SCADA input.</p>
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
