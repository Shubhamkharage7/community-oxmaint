
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am seeking assistance with configuring my STEP7 system. I am utilizing two CPU 317-2 PN/DP controllers (317-2EK14-0AB0) on PROFIBUS, with one as the Master (CPU_1) and the other as the Slave (CPU_2). Currently, PROFINET is linked to CPU_1, hindering my ability to monitor input/output signals from CPU_2">
    <meta name="keywords" content="step7, routing issues, cpu 317-2 pn/dp controllers, troubleshooting, profibus, profinet, input/output signals, master-slave configuration, monitoring, connection establishment, routing setup, cpu_1">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-step7-routing-issues-for-cpu-317-2-pn-dp-controllers">
    <title>Troubleshooting STEP7 Routing Issues for CPU 317-2 PN/DP Controllers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting STEP7 Routing Issues for CPU 317-2 PN/DP Controllers | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am seeking assistance with configuring my STEP7 system. I am utilizing two CPU 317-2 PN/DP controllers (317-2EK14-0AB0) on PROFIBUS, with one as the Master (CPU_1) and the other as the Slave (CPU_2). Currently, PROFINET is linked to CPU_1, hindering my ability to monitor input/output signals from CPU_2">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-step7-routing-issues-for-cpu-317-2-pn-dp-controllers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting STEP7 Routing Issues for CPU 317-2 PN/DP Controllers | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am seeking assistance with configuring my STEP7 system. I am utilizing two CPU 317-2 PN/DP controllers (317-2EK14-0AB0) on PROFIBUS, with one as the Master (CPU_1) and the other as the Slave (CPU_2). Currently, PROFINET is linked to CPU_1, hindering my ability to monitor input/output signals from CPU_2">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-step7-routing-issues-for-cpu-317-2-pn-dp-controllers"
      },
      "headline": "Troubleshooting STEP7 Routing Issues for CPU 317-2 PN/DP Controllers",
      "description": "Greetings! I am seeking assistance with configuring my STEP7 system. I am utilizing two CPU 317-2 PN/DP controllers (317-2EK14-0AB0) on PROFIBUS, with one as the Master (CPU_1) and the other as the Slave (CPU_2). Currently, PROFINET is linked to CPU_1, hindering my ability to monitor input/output signals from CPU_2",
      "author": {
        "@type": "Person",
        "name": "Bayteks"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-15",
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
                <h1 class="text-white">Troubleshooting STEP7 Routing Issues for CPU 317-2 PN/DP Controllers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bayteks</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">299</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">347</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am seeking assistance with configuring my STEP7 system. I am utilizing two CPU 317-2 PN/DP controllers (317-2EK14-0AB0) on PROFIBUS, with one as the Master (CPU_1) and the other as the Slave (CPU_2). Currently, PROFINET is linked to CPU_1, hindering my ability to monitor input/output signals from CPU_2 on my computer. Despite attempting to set up routing as suggested, I have encountered difficulties. Is it feasible to establish a connection to CPU_2 for monitoring input/output signals? If so, what steps should I take to ensure a successful setup? Unfortunately, I am unable to share the project file due to its size limitations.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, there are two modes for connecting devices. In mode 1, a more complex approach is required using the netPro feature in Step 7 Manager to locate and enable certain check options. In mode 2, a simpler method involves using DP communication on your PG/PC without MPI and connecting the adapter to the Profibus connector on one of the two CPUs. For mode 2, an active converter MPI/DP is necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gigi17</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that the "Test, Commissioning, Routing" option is properly configured in the hardware settings of the DP slave device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thomas_v2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Приветствую, друзья! Благодарю за оказанную помощь. Прилагаю изображения настроек моего проекта.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bayteks</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Master Settings for CPU 1 - Complete Control and Optimization</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bayteks</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To begin, launch NetPro and add a PG/PC station to the dashboard. Next, access the properties of the PG/PC station and configure the interface as "Industrial Ethernet". Connect this interface to the Ethernet network. In the properties tab, select the appropriate network interface connected to the PLC for the inserted interface. This should begin with "TCP/IP -> ..." and avoid using interfaces with "(Auto)" in the name. Ensure that the "S7ONLINE Access -> active" checkbox is checked. In the overview, the PG/PC station should be displayed with a green line and yellow border indicating connection to the Ethernet network. This setup allows Step7 to automatically configure the PG/PC interface when the project is opened, enabling online accessibility. If accessing a station solely connected to the Profibus network, the system will utilize the intermediate S7 as a router.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thomas_v2</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To configure your network settings in NetPro, begin by adding a PG/PC station to the overview. Open the properties of the station and select an "Industrial Ethernet" interface. Connect this interface to your Ethernet network. In the properties tab, assign the appropriate network interface connected to the PLC to the added interface. Look for "TCP/IP -> ...." and avoid interfaces with "(Auto)" in the name. Ensure that "S7ONLINE Access -> active" is checked.

In the overview, you should see the PG/PC station connected to the Ethernet network with a green line and yellow border. By following these steps, Step7 will automatically set the interface to this configuration when you open the project, allowing it to locate your PG/PC when going online. If accessing a station connected only to the Profibus network, the system will utilize the intermediate S7 as a router.

Mr. Thomas_v2, thank you for your assistance. I greatly appreciate it, and my project is now functioning smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bayteks</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I monitor input/output signals from a CPU 317-2 PN/DP controller that is linked to another CPU via PROFINET?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to establish a connection to CPU_2 for monitoring input/output signals. You may need to correctly configure the routing settings to enable communication between the CPUs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the common difficulties faced when setting up routing for CPU 317-2 PN/DP controllers in a STEP7 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Difficulties in setting up routing for CPU 317-2 PN/DP controllers can include issues with network configuration, IP addresses, subnet masks, and routing tables. Ensuring these settings are correct is crucial for successful communication between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide guidance on the steps to set up routing for communication between two CPU 317-2 PN/DP controllers in a STEP7 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure successful setup of routing between CPU_1 and CPU_2, you may need to configure the routing tables in both controllers, specify the correct IP addresses and subnet masks, and ensure proper network communication settings are in place.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is it necessary to share the project file to troubleshoot STEP7 routing issues for CPU 317-2 PN/DP controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While sharing the project file can be helpful for troubleshooting, in cases where file size limitations prevent sharing, focusing on configuration steps</p>
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
