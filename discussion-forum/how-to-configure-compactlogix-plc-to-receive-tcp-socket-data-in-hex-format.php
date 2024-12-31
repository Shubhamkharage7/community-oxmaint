
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently working on establishing a TCP connection between a Compactlogix 5069-L306ER PLC and a TDI checkweigher to obtain real-time weight data for filled jugs. The Compactlogix controller will act as the TCP server in this setup. I have successfully set up the connection and can receive data">
    <meta name="keywords" content="compactlogix plc, tcp socket data, hex format, 5069-l306er plc, tdi checkweigher, real-time weight data, tcp server, rockwell automation, ascii format, data in hex, net assistant software, receive">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-plc-to-receive-tcp-socket-data-in-hex-format">
    <title>How to Configure Compactlogix PLC to Receive TCP Socket Data in HEX Format | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Configure Compactlogix PLC to Receive TCP Socket Data in HEX Format | Oxmaint Community">
    <meta property="og:description" content="I am currently working on establishing a TCP connection between a Compactlogix 5069-L306ER PLC and a TDI checkweigher to obtain real-time weight data for filled jugs. The Compactlogix controller will act as the TCP server in this setup. I have successfully set up the connection and can receive data">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-plc-to-receive-tcp-socket-data-in-hex-format">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Configure Compactlogix PLC to Receive TCP Socket Data in HEX Format | Oxmaint Community">
    <meta name="twitter:description" content="I am currently working on establishing a TCP connection between a Compactlogix 5069-L306ER PLC and a TDI checkweigher to obtain real-time weight data for filled jugs. The Compactlogix controller will act as the TCP server in this setup. I have successfully set up the connection and can receive data">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-plc-to-receive-tcp-socket-data-in-hex-format"
      },
      "headline": "How to Configure Compactlogix PLC to Receive TCP Socket Data in HEX Format",
      "description": "I am currently working on establishing a TCP connection between a Compactlogix 5069-L306ER PLC and a TDI checkweigher to obtain real-time weight data for filled jugs. The Compactlogix controller will act as the TCP server in this setup. I have successfully set up the connection and can receive data",
      "author": {
        "@type": "Person",
        "name": "mjp123gp"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">How to Configure Compactlogix PLC to Receive TCP Socket Data in HEX Format</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mjp123gp</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">566</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">190</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently working on establishing a TCP connection between a Compactlogix 5069-L306ER PLC and a TDI checkweigher to obtain real-time weight data for filled jugs. The Compactlogix controller will act as the TCP server in this setup. I have successfully set up the connection and can receive data from the checkweigher using sample code provided by Rockwell Automation. However, the issue I am facing is that the data received in the PLC is in ASCII format instead of HEX. I require the data to be in HEX so that I can utilize the OEM's hex map to extract the specific weight variable I need.

I have included a screenshot showing the data received in Net Assistant software, which I used for testing the connection prior to setting up the PLC. In the receive options of Net Assistant, there is a checkbox where I can choose between ASCII or HEX formats for receiving the data. Can anyone provide guidance on how to configure the Compactlogix controller to receive the data in HEX format?

Thank you in advance for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The term "HEX data" is referring to hexadecimal data representation, which is commonly used to display binary data in a more readable format. HEX characters, such as '0', '1', '2', and 'E', are actually ASCII characters that represent individual nibbles or half of an 8-bit byte. 

When working with data received by the CompactLogix through the ReadSocket Service, the relevant data can be found in the .Buf[] array element. This data is of type SINT (8-bit signed integer) and is passed to the ReadSocket Service as the Destination Element. 

SINT data values range from 0 to 127 decimal (0x00 to 0x7F hexadecimal) for positive values, and -128 to -1 (0x80 to 0xFF) for negative values. If you need to compare the data in the .Buf[] array with hexadecimal values, you can use a comparison operation like: EQU RCVD.Buf[108] 47H, where 47H represents the hexadecimal value 0x47 in a literal form.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When establishing a TCP connection, the data received is exactly what the sender sends, making real-time conversion impossible. If ASCII data is received, your PLC program must convert it as needed. Data reception methods vary based on the protocol design. For example, Modbus often sends pure hexadecimal values, while other protocols may transmit decimal values in ASCII characters or hexadecimal values in ASCII format. There are likely additional data reception methods as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>At the core of digital information lies bits, waiting to be interpreted in ways that shape their significance. The way we perceive and decode these bits is what ultimately assigns meaning to them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mjp123gp inquired about setting up a TCP connection between a Compactlogix 5069-L306ER and a TDI checkweigher to access real-time weight data for filled jugs. The objective is to have the Compactlogix controller act as the TCP server. Although successful in establishing the connection and receiving data from the checkweigher using Rockwell's provided code, the issue lies in the received data being in ASCII format instead of HEX. Converting the data to HEX is crucial for utilizing the OEM's hex map to extract the necessary weight variable. The Net Assistant software used for testing the connection offers the option to receive data in ASCII or HEX format. Seeking assistance in configuring the Compactlogix controller to receive data in HEX format for proper extraction of the weight variable. Precise byte order knowledge of the checkweigher equipment can facilitate identifying the weight's position in the payload, allowing for easy extraction into a REAL variable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Knowing the precise protocol specifications and understanding the meaning of each received byte is crucial. Typically, a header is the first component to be read, signaling any errors or indicating the number of bytes in the transmission. Once the header is processed without error, the data can be accessed. It is important to accurately track the number of bytes read and the bytes that are yet to be read, especially in TCP connections where data may arrive in separate blocks from how they were originally sent. This level of detail ensures a seamless and accurate data transmission process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Investing in this product could prove to be a valuable decision. Check out the 490NBX on the RTA Automation website today!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I configure a Compactlogix PLC to receive TCP socket data in HEX format?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure a Compactlogix PLC to receive TCP socket data in HEX format, you may need to adjust the settings in the communication protocol or program logic to interpret the incoming data as HEX instead of ASCII.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the significance of receiving data in HEX format for a Compactlogix PLC communicating with a TDI checkweigher?</h4>
<p class='text-muted'><strong>Answer:</strong> - Receiving data in HEX format is important when working with specific data structures or protocols that require hexadecimal representation for accurate interpretation and processing of information, such as extracting weight values from an OEM's hex map.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can the communication software used for testing the connection, like Net Assistant, impact the format in which data is received by the Compactlogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, communication software like Net Assistant may have options to receive data in different formats such as ASCII or HEX. Ensuring that the software is set to receive data in HEX format can influence how the data is interpreted by the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any sample codes or resources available from Rockwell Automation to assist in configuring a Compactlogix PLC for receiving data in HEX format?</h4>
<p class='text-muted'><strong>Answer:</strong> - Rockwell Automation may provide sample codes or documentation that can help in configuring a Compactlogix PLC to receive data in HEX format. It is recommended to consult their resources or support for assistance in this matter.</p>
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
