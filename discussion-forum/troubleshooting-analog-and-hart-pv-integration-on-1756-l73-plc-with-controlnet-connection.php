
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am assisting a client with the integration of their Hart Analog Output card using Hart protocol on a 1756-L73 PLC connected via ControlNet. The specific card being used is an OF8H card located on a remote rack. After configuring the OF8H card to support both Analog and">
    <meta name="keywords" content="troubleshooting analog, hart pv integration, 1756-l73 plc, controlnet connection, of8h card, module error 16#0304, io module, analog mode, hart channels, transmitter tags, module settings, ab">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-analog-and-hart-pv-integration-on-1756-l73-plc-with-controlnet-connection">
    <title>Troubleshooting Analog and Hart PV Integration on 1756-L73 PLC with ControlNet Connection | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Analog and Hart PV Integration on 1756-L73 PLC with ControlNet Connection | Oxmaint Community">
    <meta property="og:description" content="Hello, I am assisting a client with the integration of their Hart Analog Output card using Hart protocol on a 1756-L73 PLC connected via ControlNet. The specific card being used is an OF8H card located on a remote rack. After configuring the OF8H card to support both Analog and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-analog-and-hart-pv-integration-on-1756-l73-plc-with-controlnet-connection">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Analog and Hart PV Integration on 1756-L73 PLC with ControlNet Connection | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am assisting a client with the integration of their Hart Analog Output card using Hart protocol on a 1756-L73 PLC connected via ControlNet. The specific card being used is an OF8H card located on a remote rack. After configuring the OF8H card to support both Analog and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-analog-and-hart-pv-integration-on-1756-l73-plc-with-controlnet-connection"
      },
      "headline": "Troubleshooting Analog and Hart PV Integration on 1756-L73 PLC with ControlNet Connection",
      "description": "Hello, I am assisting a client with the integration of their Hart Analog Output card using Hart protocol on a 1756-L73 PLC connected via ControlNet. The specific card being used is an OF8H card located on a remote rack. After configuring the OF8H card to support both Analog and",
      "author": {
        "@type": "Person",
        "name": "Whatyamacallme02"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting Analog and Hart PV Integration on 1756-L73 PLC with ControlNet Connection</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Whatyamacallme02</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">240</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">298</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am assisting a client with the integration of their Hart Analog Output card using Hart protocol on a 1756-L73 PLC connected via ControlNet. The specific card being used is an OF8H card located on a remote rack. After configuring the OF8H card to support both Analog and Hart PV, I encountered an issue where the IO module was not responding and displayed a Module error 16#0304. However, when I kept the IO module in Analog only mode but enabled the Hart Channels, I was able to view the transmitter tags in the module settings. Can you provide any recommendations on how to successfully operate the module in Analog and Hart PV mode or Analog and Hart PV by channel? My goal is to receive feedback values over the PV. While I have a strong background in controls, I have limited experience with AB HART and ControlNet systems specifically.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Whatyamacallme02, welcome to the forum. I have experience working with HART communication protocol, although I don't currently have a Rockwell HART master device. It is crucial to know the specific HART address assigned to your HART device. In your Logix program, there should be a setting to input the HART address configured in the field device. While most HART devices are typically set to address zero, it is possible to configure them to other HART addresses. If you are unsure about the HART address, it's recommended to have a HART modem and a compatible field device tool for HART communication. This is essential unless the device has its own display function. Best of luck with your HART setup!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for providing your feedback, Alfred. I have successfully activated HART for the channels on the module set to Analog only, and I am receiving accurate data from each instrument, including tag and software revision. This indicates that communication from the card to the devices is functioning well. However, I am unable to access PV, SV, etc. as the tags are not generated for the IO card in Analog Only mode. Transitioning to either of the two Analog and HART options, which requires an offline switch to generate tags, results in the IO non-response and a yellow triangle indicating the changed card. Additionally, an error 16#0304 is displayed on the module, suggesting that it may be configured unexpectedly and causing faults. I will investigate the configuration to identify potential addresses for further progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Whatyamacallme02</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the CIP specification, it appears that ControlNet is being used. Please refer to the table below as this could be the source of the problem you are experiencing. Consider utilizing RSNetworkx and adjusting the SMAX value to address the issue. We hope this information proves useful in resolving your issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to remove modules from the I/O tree while online in ControlNet? Unlike ControlNet, in Ethernet/IP you have the ability to delete modules online without the need to go offline first. This feature allows for seamless deletion and readdition of modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 inquired about the possibility of deleting modules from the I/O tree online in ControlNet. While in Ethernet/IP you can perform this action without going offline, in ControlNet you may need to remove the module from the project and then re-add it. Is this what you are referring to?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Whatyamacallme02</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a question from Whatyamacallme02, the suggestion was made to consider removing and re-adding the ControlNet Module in the project. However, the focus should instead be on the analog output module within the ControlNet module. It is uncertain whether this process is permissible within ControlNet protocols.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 confirmed that only the analog output module under the ControlNet module is in question. It is uncertain if this configuration is permissible within the ControlNet system. Upon accessing the project online, the option to delete the module is unavailable, indicating that it is not allowed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Whatyamacallme02</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Whatyamacallme02 mentioned that they can confirm the delete option is greyed out when the project is open online. This could indicate that the IO tags are currently in use within the project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per Whatyamacallme02's comment, I can confirm that the option to delete is greyed out when the project is open online. However, you may still be able to delete it by first inhibiting the module from the properties tab.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gimborden</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the Module error 160304 when trying to operate the OF8H card in Analog and Hart PV mode?</h4>
<p class='text-muted'><strong>Answer:</strong> The Module error 160304 could indicate a communication issue or a configuration problem between the OF8H card and the 1756-L73 PLC. Double-check the configuration settings and ensure proper communication is established over the ControlNet network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I able to view the transmitter tags in the module settings when the IO module is in Analog only mode but with Hart Channels enabled?</h4>
<p class='text-muted'><strong>Answer:</strong> Enabling the Hart Channels while in Analog only mode allows you to access the transmitter tags because the module is still recognizing the Hart communication protocol. This indicates that the Hart functionality is working correctly even in Analog only mode.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I successfully operate the module in Analog and Hart PV mode or Analog and Hart PV by channel to receive feedback values over the PV?</h4>
<p class='text-muted'><strong>Answer:</strong> To successfully operate the module in Analog and Hart PV mode, ensure that the configuration settings for both Analog and Hart PV are correct and that the communication between the PLC, IO module, and transmitter is properly established. Consult the documentation for the OF8H card and the 1756-L73 PLC for detailed setup instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What recommendations can be provided for someone with limited experience in AB HART and ControlNet systems to troubleshoot integration issues?</h4>
<p class='text-muted'><strong>Answer:</strong> It is recommended to familiar</p>
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
