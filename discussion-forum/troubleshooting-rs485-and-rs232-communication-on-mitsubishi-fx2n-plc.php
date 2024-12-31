
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello PLC Community! I have been facing challenges in utilizing the RS functions to communicate through the RS485 and RS232 ports on the PLC. While I understand that additional modules such as the FX-232-BD can facilitate this communication, I am curious why I am unable to directly utilize the">
    <meta name="keywords" content="rs485 communication, rs232 communication, mitsubishi fx2n plc, troubleshooting plc communication, fx-232-bd module, c82 -> d8120 modification, plc data registers, rs485 port behavior, rs232 port behavior, communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-and-rs232-communication-on-mitsubishi-fx2n-plc">
    <title>Troubleshooting RS485 and RS232 Communication on Mitsubishi FX2N PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RS485 and RS232 Communication on Mitsubishi FX2N PLC | Oxmaint Community">
    <meta property="og:description" content="Hello PLC Community! I have been facing challenges in utilizing the RS functions to communicate through the RS485 and RS232 ports on the PLC. While I understand that additional modules such as the FX-232-BD can facilitate this communication, I am curious why I am unable to directly utilize the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-and-rs232-communication-on-mitsubishi-fx2n-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RS485 and RS232 Communication on Mitsubishi FX2N PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello PLC Community! I have been facing challenges in utilizing the RS functions to communicate through the RS485 and RS232 ports on the PLC. While I understand that additional modules such as the FX-232-BD can facilitate this communication, I am curious why I am unable to directly utilize the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-and-rs232-communication-on-mitsubishi-fx2n-plc"
      },
      "headline": "Troubleshooting RS485 and RS232 Communication on Mitsubishi FX2N PLC",
      "description": "Hello PLC Community! I have been facing challenges in utilizing the RS functions to communicate through the RS485 and RS232 ports on the PLC. While I understand that additional modules such as the FX-232-BD can facilitate this communication, I am curious why I am unable to directly utilize the",
      "author": {
        "@type": "Person",
        "name": "Bingdom"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting RS485 and RS232 Communication on Mitsubishi FX2N PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bingdom</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">284</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">491</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello PLC Community! I have been facing challenges in utilizing the RS functions to communicate through the RS485 and RS232 ports on the PLC. While I understand that additional modules such as the FX-232-BD can facilitate this communication, I am curious why I am unable to directly utilize the RS232 port. I have attempted to modify C82 -> D8120 to alter the behavior of the RS232 and RS485 ports, but have not been successful. My objective is for the PLC to output data registers directly through the RS485 or RS232 port, bypassing the need for hardware middleware or the programmer protocol.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX2N PLC only features a 422 port for programming, with a protocol that is not widely known or documented. However, there are adapter cards available for 232 and 485 communication. The 232-BD and 485-BD boards can be easily installed on the left side of the unit, while the 232-ADP and 485-ADP, as well as Ethernet types, can be installed on the right side just like the normal I/O modules. Setting up the boards in the PLC Parameters is straightforward, allowing for easy programming protocol customization. Although the FX2N and 3N models are no longer in production, there are still plenty available on the secondary market, such as eBay or from used equipment suppliers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon further inspection, it seems that the PLC in question claims to have 232 & 485 ports, which is unusual for a genuine Fx model. This could indicate that it is a clone, as authentic models do not typically come with these ports as standard. In my experience, clones often restrict access to the PLC Parameters needed to configure additional communication ports. The compatibility of the PLC with genuine Mitsubishi add-on cards may vary depending on how closely the clone replicates the original model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance! It appears that the 232 port is linked to the HMI for the PLC board, while the 485 port is a A+ B- component on the PLC board. Both ports are compatible with GX Works, indicating that they are likely programmer ports. Despite searching extensively, I have been unable to locate this specific board except on Chinese websites, suggesting that it may be a duplicate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bingdom</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to programming a clone of the FX2N PLC, it can be a bit of a guessing game without a manual. The FX2N has three ports - port 0 for regular programming, port 1 for the first addon BD board, and port 2 for another BD board. It's believed that only one communication BD board can be used, with the other potentially being an Ethernet board. While there are other communication modules available, they require a different method of access. It's likely that the 232 or 485 port corresponds to com 0, with the opposite port being com 1. However, the exact identification of each port is uncertain. Some clones may have fixed PLC parameters that cannot be altered, but it may be possible to change settings in the 8000 range registers. Caution must be taken to avoid inadvertently disrupting programming access to both ports. For assistance, refer to the manual at the following link: https://dl.mitsubishielectric.com/dl/fa/document/manual/plc_fx/jy992d69901/jy992d69901e.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the information provided. The HMI/PLC interfaces come with individual images, functioning as separate programmer ports allowing simultaneous interaction. While some PLCs offer similar control capabilities, in this instance, they are solely designated as programmer ports. I will continue discussions with the supplier, although they are reluctant due to the intricacies of the Mistu protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bingdom</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can I communicate directly through the RS232 port on a Mitsubishi FX2N PLC without additional modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While additional modules like the FX-232-BD can facilitate RS communication, direct utilization of the RS232 port may require proper configuration and programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I modify C82 -> D8120 to alter the behavior of the RS232 and RS485 ports on the Mitsubishi FX2N PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Modifying C82 -> D8120 involves adjusting the PLC's settings to configure the RS232 and RS485 ports for communication purposes. Refer to the PLC's documentation for specific instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible for the Mitsubishi FX2N PLC to output data registers directly through the RS485 or RS232 port?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the Mitsubishi FX2N PLC can output data registers directly through the RS485 or RS232 port with proper configuration and programming. Bypassing the need for hardware middleware or programmer protocol may require thorough understanding of the PLC's communication capabilities.</p>
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
