
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a new plant electrician/SCADA specialist at a water department, I am seeking advice on how to improve our current setup. Our two water treatment facilities are constantly facing issues with the T1 line, impacting our services. After exploring alternatives, it seems that utilizing a third-party internet service with">
    <meta name="keywords" content="scada network connectivity, water treatment facility scada setup, improving t1 line issues, third-party internet service for scada, vpn tunnel for scada networks, firewall solutions for water">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-scada-network-connectivity-for-water-treatment-facilities">
    <title>Optimizing SCADA Network Connectivity for Water Treatment Facilities | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing SCADA Network Connectivity for Water Treatment Facilities | Oxmaint Community">
    <meta property="og:description" content="As a new plant electrician/SCADA specialist at a water department, I am seeking advice on how to improve our current setup. Our two water treatment facilities are constantly facing issues with the T1 line, impacting our services. After exploring alternatives, it seems that utilizing a third-party internet service with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-scada-network-connectivity-for-water-treatment-facilities">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing SCADA Network Connectivity for Water Treatment Facilities | Oxmaint Community">
    <meta name="twitter:description" content="As a new plant electrician/SCADA specialist at a water department, I am seeking advice on how to improve our current setup. Our two water treatment facilities are constantly facing issues with the T1 line, impacting our services. After exploring alternatives, it seems that utilizing a third-party internet service with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-scada-network-connectivity-for-water-treatment-facilities"
      },
      "headline": "Optimizing SCADA Network Connectivity for Water Treatment Facilities",
      "description": "As a new plant electrician/SCADA specialist at a water department, I am seeking advice on how to improve our current setup. Our two water treatment facilities are constantly facing issues with the T1 line, impacting our services. After exploring alternatives, it seems that utilizing a third-party internet service with",
      "author": {
        "@type": "Person",
        "name": "mburtis"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Optimizing SCADA Network Connectivity for Water Treatment Facilities</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">433</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">235</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a new plant electrician/SCADA specialist at a water department, I am seeking advice on how to improve our current setup. Our two water treatment facilities are constantly facing issues with the T1 line, impacting our services. After exploring alternatives, it seems that utilizing a third-party internet service with a VPN tunnel and firewalls is the most feasible solution. Our IT department has already extended the network to the facility and set up a VLAN for SCADA. However, the challenge lies in the fact that our current SCADA system is on the same network between the two plants (192.168.254.xxx). Despite attempts at NATing, changing the IPs of the equipment at the second location seems to be the only solution. This task is complicated by the buggy FactoryTalk system and the independent SCADA computers at both sites communicating with all PLCs. How would you approach connecting PLCs and SCADA computers at two locations over a third-party internet connection? What specific products would you recommend using, and how would you structure the networks for optimal performance? Your insights are appreciated as we strive to improve our network setup. Thank you for any advice provided.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Finding the optimal solution for network setup requires attention to detail. In the past, T1 lines were used with MPLS setups to extend ethernet networks between sites, acting as a VPN facilitated by the ISP. Nowadays, software allows for the same functionality with regular internet connections, utilizing VPN tunnels for secure connections. It is recommended to have a Point-2-Point VPN tunnel for business users and a separate firewall for OT space, with devices having VPN tunnels between them. To ensure proper routing, it is essential to have distinct networks for effective traffic flow. Network segmentation is crucial for cybersecurity, limiting the spread of viruses and malware. PLC vendors are increasingly using I/O networks with unique subnetting to ensure easy connectivity. Implementing a wireless bridge for sites in close proximity can eliminate the need for routing. By following these best practices, your network can operate efficiently and securely.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nicherbert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operating on a "Private Verizon Network", our company spans across three states. Any hardware requiring connection to our Scada (Ignition) system utilizes this secure network. While there is a limitation of 327675 IP addresses on the network, Verizon offers the flexibility to expand as needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>These plants are located approximately 14 miles apart, with terrain that poses challenges for implementing a point-to-point radio or line-of-sight solution. Currently, all devices in the network have unique .254.x IP addresses, indicating that a network split may be the most effective long-term solution. We are essentially creating the network structure you have described. A VPN tunnel is already established for the office network, but the SCADA system operates on a separate VLAN without a dedicated physical firewall. The SCADA system, which utilizes Factorytalk, requires minimal changes. Recently, I successfully transitioned 99% of the equipment from .254.x to 225.x IP addresses. However, I encountered a challenge when changing the IP address of the virtual machine hosting the SCADA project, as the client machine failed to reconnect to the Factorytalk directory. Despite attempting various troubleshooting methods, I was unable to resolve the issue due to my limited expertise in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not quite sure what a SIS system is. Can you provide more information about it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there standardized IP address schemes commonly used in networks? It appears that 192.168.x.x is a frequently used address scheme, along with the 10.0.x.x scheme. Another common one is a 174.43.x x or similar scheme. What is the reason behind the popularity of these schemes? I am contemplating creating a network design and gradually transitioning everything to it. For instance, utilizing a system like 192.168.x.x where the third set of numbers is unique to each location and setting up standard ranges in the fourth set of numbers. For example, reserving .10 through .30 for plcs, .40 through .60 for hmis, and .70 through .90 for vfds. This plan would require rebuilding the entire system, but it appears to be a solid foundation for the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to have a good grasp of networking concepts, especially when it comes to understanding IP addresses and subnet masks. For instance, in a network setup, devices with IP addresses like 192.168.100.10 and 192.168.200.15 may not be able to communicate with each other if the subnet mask is not configured correctly. This is why knowing how to properly set up subnet masks is vital for ensuring seamless communication between devices on a network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the scenario described, each location would require a firewall/router to manage the different networks. However, special consideration must be given to point-to-point radio networks, as they do not require the same firewall/router setup. How to effectively handle these networks would be an important aspect to address in this network configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous workplace, we utilized a consistent configuration for distant pump stations. Specifically, we employed a GE ORBIT MDS with cellular capabilities. With the Orbit setup, it is possible to establish an IPsec Tunnel to facilitate data transfer between two points. Interestingly, the setup also enables the bonding of the IPsec Tunnel to the local interface, allowing the remote network to be configured within the same subnet as the local network. This seamless integration ensures that the network nodes remain unaware of the presence of the IPsec tunnel interface. Additionally, the setup process is straightforward and can be guided by a GE engineer. The end result? All devices operating on the same subnet, just as desired. Furthermore, the Orbit system is versatile, accommodating both licensed and unlicensed radio communications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can we improve network connectivity for water treatment facilities facing T1 line issues?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Consider utilizing a third-party internet service with a VPN tunnel and firewalls to address connectivity issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What challenges are involved in connecting PLCs and SCADA computers at two locations over a third-party internet connection?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Challenges may include network structure, IP addressing conflicts, system compatibility issues, and ensuring optimal performance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What solutions are available for resolving IP address conflicts between SCADA systems at separate locations?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Changing the IP addresses of equipment at the second location may be necessary to resolve conflicts and ensure smooth communication between SCADA systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What specific products or technologies can be recommended for optimizing SCADA network performance in water treatment facilities?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Consider using VPN tunnels, firewalls, VLANs, and reliable networking equipment to enhance network performance and security.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can we address communication challenges between independent SCADA computers and PLCs at different water treatment plants?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Ensuring proper network segmentation, configuration, and compatibility testing can help improve communication between SCADA systems and PLCs at separate locations.</p>
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
