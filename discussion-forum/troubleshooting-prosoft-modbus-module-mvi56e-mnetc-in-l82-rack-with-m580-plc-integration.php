
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I recently received my new Prosoft Modbus modules and have been experimenting with one in an L82 rack. I successfully configured it to poll a M580 PLC using Modbus. After setting up the IP address, I attempted to update the EDS files, but found that the version">
    <meta name="keywords" content="prosoft modbus module, mvi56e-mnetc, l82 rack, m580 plc integration, troubleshooting, ip address configuration, eds files, aoi import, mismatch alarm status, internal status code, data structure">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-prosoft-modbus-module-mvi56e-mnetc-in-l82-rack-with-m580-plc-integration">
    <title>Troubleshooting Prosoft Modbus Module MVI56E-MNETC in L82 Rack with M580 PLC Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Prosoft Modbus Module MVI56E-MNETC in L82 Rack with M580 PLC Integration | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I recently received my new Prosoft Modbus modules and have been experimenting with one in an L82 rack. I successfully configured it to poll a M580 PLC using Modbus. After setting up the IP address, I attempted to update the EDS files, but found that the version">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-prosoft-modbus-module-mvi56e-mnetc-in-l82-rack-with-m580-plc-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Prosoft Modbus Module MVI56E-MNETC in L82 Rack with M580 PLC Integration | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I recently received my new Prosoft Modbus modules and have been experimenting with one in an L82 rack. I successfully configured it to poll a M580 PLC using Modbus. After setting up the IP address, I attempted to update the EDS files, but found that the version">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-prosoft-modbus-module-mvi56e-mnetc-in-l82-rack-with-m580-plc-integration"
      },
      "headline": "Troubleshooting Prosoft Modbus Module MVI56E-MNETC in L82 Rack with M580 PLC Integration",
      "description": "Hello everyone! I recently received my new Prosoft Modbus modules and have been experimenting with one in an L82 rack. I successfully configured it to poll a M580 PLC using Modbus. After setting up the IP address, I attempted to update the EDS files, but found that the version",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-19",
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
                <h1 class="text-white">Troubleshooting Prosoft Modbus Module MVI56E-MNETC in L82 Rack with M580 PLC Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">653</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I recently received my new Prosoft Modbus modules and have been experimenting with one in an L82 rack. I successfully configured it to poll a M580 PLC using Modbus. After setting up the IP address, I attempted to update the EDS files, but found that the version on the module was newer. I also imported an AOI, although I am still unsure of its exact function aside from creating a new data structure. I encountered a mismatch alarm status, which I discovered is common for generic modules, along with an internal status code (16#0060) indicating the mismatch. While this is somewhat bothersome, it does not appear to be critical. Regarding the AOI and the new IO structure it created, I noticed that the data I expected in Local:1:I.Data was not displaying correctly. Despite my efforts to troubleshoot the issue, the values were still erratic. On a positive note, the MNETC structure displayed a steady 2345 value that responded promptly to changes from the M580 PLC, likely due to the imported ProSoft AOI. Is there a concern with the unusual behavior of the values in Slot 1, or should I not be too worried about it? In comparison to a previous program using older serial MCM, where data landed directly in the slot structures without the need for an additional AOI-created structure, I am questioning whether this setup is problematic or represents progress. Any advice on managing the module and handling data in Logix would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Prosoft modules are a crucial part of our operations, and thankfully, we have not encountered any issues with EDS files, their visibility in the I/O configuration tree, or any data transfer inconsistencies between the controller and the module. Did you utilize the Prosoft Configuration Builder (PCB) to configure the Modbus module? Is it configured as a server, client, or both?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PCMusicGuy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to easily download the most recent EDS directly from the module?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>(8{)} ( .)</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The latest Electronic Data Sheet (EDS) can usually be downloaded directly from the module. If you're asking about uploading the EDS from RSLinx, this feature is available on most Rockwell and other devices, although not all. It's worth noting that this is not a mandatory feature for EtherNet/IP devices. If you were referring to something else, please clarify.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PCMusicGuy inquired if the Prosoft Configuration Builder (PCB) was used to set up the Modbus module as a server, client, or both. The goal is to configure it for both server and client functions. Currently, a Modicon with registers has been set up, and MNET Client 0 is being used to poll values with the L82. The intention was to configure each "client" (0-29) as either a Client or Server, but there may be a misunderstanding.

The plan with Prosoft is to poll data from various Modbus devices and transfer it to the L82. Additionally, all PLC data will be remapped to be accessed by an Intouch Standalone Screen and an RTAC gateway using their respective IP addresses to prevent unauthorized access. As the RTAC is not available, an SMP4 is being used to align the REAL registers. However, it seems to be connecting directly to MNET Client 0 instead of a desired slave table for device connections.

Further review of the documentation is necessary to address these issues. Any assistance or insight on how to proceed would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the reason behind the mismatch alarm status and internal status code (160060) encountered when integrating the Prosoft Modbus module MVI56E-MNETC with the M580 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The mismatch alarm status and internal status code (160060) are common issues for generic modules like the Prosoft Modbus module MVI56E-MNETC. While bothersome, they are not critical and can be managed during the integration process.
   
2. FAQ: Why are the values in Local:1:I.Data not displaying correctly despite troubleshooting efforts after setting up the Prosoft Modbus module in the L82 rack?
   
   Answer: The erratic values in Local:1:I.Data could be due to the structure created by the imported AOI. It is recommended to review the setup and configuration of the AOI to ensure proper data handling.
   
3. FAQ: Is the unusual behavior of values in Slot 1 a cause for concern, or is it a normal aspect of integrating the Prosoft Modbus module with the M580 PLC?
   
   Answer: The unusual behavior of values in Slot 1 may not be a critical issue, especially if the MNETC structure is displaying expected values and responding promptly to changes from the M580 PLC. It is advisable to focus on functionality and data integrity rather than being overly worried about minor discrepancies.
   
4. FAQ: How does the use of</p>
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
