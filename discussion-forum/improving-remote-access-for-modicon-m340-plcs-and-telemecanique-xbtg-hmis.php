
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seeking advice on remotely accessing control systems at various customer sites around the world, particularly using Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we utilize modem/routers in control boxes connected to PLCs and HMIs via unmanaged switches. Each device is assigned a unique IP address by our company,">
    <meta name="keywords" content="remote access control systems, modicon m340 plcs, telemecanique xbtg hmis, remote troubleshooting solutions, remote access best practices, control system connectivity">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/improving-remote-access-for-modicon-m340-plcs-and-telemecanique-xbtg-hmis">
    <title>Improving Remote Access for Modicon M340 PLCs and Telemecanique XBTG HMIs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Improving Remote Access for Modicon M340 PLCs and Telemecanique XBTG HMIs | Oxmaint Community">
    <meta property="og:description" content="Seeking advice on remotely accessing control systems at various customer sites around the world, particularly using Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we utilize modem/routers in control boxes connected to PLCs and HMIs via unmanaged switches. Each device is assigned a unique IP address by our company,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/improving-remote-access-for-modicon-m340-plcs-and-telemecanique-xbtg-hmis">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Improving Remote Access for Modicon M340 PLCs and Telemecanique XBTG HMIs | Oxmaint Community">
    <meta name="twitter:description" content="Seeking advice on remotely accessing control systems at various customer sites around the world, particularly using Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we utilize modem/routers in control boxes connected to PLCs and HMIs via unmanaged switches. Each device is assigned a unique IP address by our company,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/improving-remote-access-for-modicon-m340-plcs-and-telemecanique-xbtg-hmis"
      },
      "headline": "Improving Remote Access for Modicon M340 PLCs and Telemecanique XBTG HMIs",
      "description": "Seeking advice on remotely accessing control systems at various customer sites around the world, particularly using Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we utilize modem/routers in control boxes connected to PLCs and HMIs via unmanaged switches. Each device is assigned a unique IP address by our company,",
      "author": {
        "@type": "Person",
        "name": "jman02"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Improving Remote Access for Modicon M340 PLCs and Telemecanique XBTG HMIs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jman02</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8950</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">357</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Seeking advice on remotely accessing control systems at various customer sites around the world, particularly using Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we utilize modem/routers in control boxes connected to PLCs and HMIs via unmanaged switches. Each device is assigned a unique IP address by our company, with customers receiving a specific range of IP addresses. However, relying on dedicated phone lines for connection can be slow and unreliable, hindering troubleshooting and updates. An alternative option involves providing customers with a computer pre-loaded with necessary programming software, connected to both their network for internet access and the equipment network. Yet, this approach may entail managing software upgrades and resolving potential PC issues. Open to any other suggestions or recommendations for improving remote access capabilities. Thank you for your input.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There is a wide range of options available, and I am confident that others will also provide their input. One effective solution that I have come across is the e*W*O*N device. To access their website, simply remove the asterisks from the link: http://www.ewon.biz/en/ewon-2005cd-4005cd.html?ewp=4. This device requires internet access and establishes a connection using OpenVPN to a server in the US. By establishing a separate connection on your computer, the system seamlessly links the two ends of the network together, providing you with remote access to your machine. You can utilize any type of internet connection, such as DSL, leased line, or mobile 3G. With permission from your client, you can even use their internet connection by making sure that Port 1194 or Port 443 is open on their outgoing firewall.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience working with these efficient and user-friendly devices. They utilize 3G communication, eliminating the need for an IT department. Additionally, they can support both 3G and MPI connections simultaneously. These devices also offer extra features such as SMS alarming. Regarding alternative options, ComboBryanG suggested considering eWON devices. These devices require internet access and use OpenVPN to establish a connection to a US-based system. Through a separate connection on your computer, the system connects the two ends of the network, providing access to your device. Internet access can be achieved through various means such as DSL, leased line, or mobile 3G. With permission from your customer, their site's internet connection can also be utilized with ease by ensuring Port 1194 or Port 443 are open on their outgoing firewall. For more information, visit: http://www.ewon.biz/en/ewon-2005cd-4005cd.html.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>userxyz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, BryanG and Combo, for sharing this promising information. Aside from the alarm functions, serial port, and advanced features, can a regular router also be used to connect to a PLC over the internet? Do routers have the ability to communicate with both the external internet and the static network of equipment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jman02</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We frequently utilize the SonicWall TZ series for various networking needs. The cost for each unit can be less than 500 depending on the specific features required. By using this firewall, you can establish a VPN connection into the plc network, whether through an air card or the company's network. It is important to note that the IT department will need to be more involved with setting up the SonicWall compared to other options.

Another alternative is the Tofino firewall, specifically designed for control systems and also offers VPN functionality. This firewall can be DIN rail mounted and is highly regarded. Setting up a VLAN for the equipment network through the corporate firewall with minimal scanning, and placing a router/firewall on that VLAN is recommended. This ensures that WAN traffic from different machine vendors is routed to their respective networks, providing a secure setup for each vendor's equipment. This approach is commonly implemented by company IT departments to maintain network security and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can routers communicate both with the internet and a device's static network? To connect to a PLC remotely, you can utilize a program like eCatcher. This program allows you to access a list of registered machines on an account, giving you the ability to connect to a machine and access its LAN as if you were physically present. Through this connection, the machine can also access the internet based on your e*W*O*N settings. You can make changes, set alarms, view logs, and more on the e*W*O*N device within the machine LAN. However, the router may not function as a DHCP server or DNS forwarder, requiring static IP addresses and DNS servers to be set manually. To simplify this process, using a public DNS provider like OpenDNS with fixed public IP addresses can be beneficial. If you encounter any issues, the recommended course of action is to contact the vendor you purchased the e*W*O*N from for expert support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have achieved significant success with the innovative e*w*o*n units, which are now operational in various countries within our organization. I access them through the M platform, where each machine is identified by its unique name or factory. Setting them up was a simple and seamless process. Regards, John V.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mrslipmat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate all the feedback received. I recently came across the Red Lion Data Station Plus and was curious about any advantages or disadvantages associated with this device or the company. Can anyone provide insights on this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jman02</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Considering a D-Link 3G modem could be a great option. While this topic has been discussed previously, I am exploring a comparable solution and am curious about the variance between utilizing the E*w*o*n 3G modem and a conventional 3G modem/router like the D-Link DIR-412. The D-Link DIR-412 offers a feature that allows for the setup of a virtual server for remote access. Additionally, the D-Link modem is priced at $60, significantly more affordable than the E*w*o*n which costs over $1000, not to mention additional service charges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>electro89</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The industrial-grade **** is designed to withstand harsh environments and can be equipped with email and text alerts, among other advanced features. By utilizing the talk 2 M service, users can remotely access the system from anywhere and assign varying levels of authority to multiple users. These unique attributes set it apart from standard SOHO gear, which tends to be less durable in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While both the d-link modem and e.w.o.n have distinct purposes, they differ in their capabilities. The d-link modem facilitates outgoing connections from the inside network to the Internet but struggles with setting up incoming connections. This means that connecting devices between different d-link routers can be a challenge due to routing issues. Port Forwarding and Dynamic DNS can help alleviate this issue, but can become complex. On the other hand, the e.w.o.n establishes an outgoing connection to a server, allowing your computer to do the same and having the server bridge the two ends for seamless communication with any device linked to the e.w.o.n. While a newer and more affordable e.w.o.n model is rumored to be in the works, details are scarce at the moment. For more information, visit http://www.****.biz/en/****-cosy-141.html?ewp=33.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information. I will definitely check out the cozy space.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>electro89</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to facilitate remote programming with *** and have an HMI on our site for online monitoring of PLCs located on remote sites? Can we also establish communication between PLCs at site-A and site-B?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>coa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about the capabilities of a product, it's best to consult the experts directly. Contact the makers of the e.w.o.n product for more information by visiting their website and filling out the contact form: http://www.****.biz/en/about-us/contact.html. This will ensure you receive accurate and up-to-date information on the product's features.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After using the **** for a while now, I can confidently say that I've had great success with their product. The customer service they offer is also quite commendable. While it may not be as simple as plug and play, there is some initial configuration required. Once you get the hang of it, it becomes much easier to handle. When it comes to connecting PLC/HMI from your home site to monitor PLC on a remote site, it is unlikely to work. However, if their tech support suggests otherwise, please inform us as this feature could be quite powerful (and potentially risky).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jman02</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One highly secure and free option to consider is using the UltraVNC repeater. This method requires a PC on both ends of the Internet connection. While many are familiar with VNC, the UltraVNC repeater offers a unique approach. 

The repeater functions by having the remote end establish a connection with your own server system located at your business. Subsequently, your local computer establishes a second connection to the server, enabling a VNC session that connects your local and remote computers, similar to remote desktop.

The UltraVNC repeater only needs to make outgoing connections on the remote end, typically eliminating the need for router or firewall setup. This added security measure ensures that only one server (located at your company) is accessed, reducing the risk of intrusion. Access can be restricted to computers within your company or granted through a validated company VPN.

Setting up the repeater requires an intermediate server with a static IP address at your company, as well as configuring one open port from the Internet into your repeater server. Though some IT assistance may be needed within your company, no IT help is required at the remote end as outgoing connections are established automatically.

Overall, the UltraVNC repeater offers a cost-effective and secure solution for connecting computers remotely.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nwboson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the COA, is it possible to have an HMI for online monitoring and remote programming with *** for PLC systems located on different sites? Additionally, can PLCs from one site communicate with PLCs on another site? The recommended method to achieve this is through the use of SSL or IPSEC VPN, utilizing Tofino firewalls or small Cisco ASA firewalls.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jman02 inquired about methods to remotely access control systems at clients' facilities worldwide. Our company utilizes Modicon M340 PLCs and Telemecanique XBTG HMIs. Currently, we employ modem/routers connected to the PLC and HMIs via unmanaged switches with unique IP addresses assigned by us. Clients provide dedicated phone lines for router connection, but this setup can be slow and unreliable for troubleshooting or updates.

An alternative I suggest is providing clients with a Microsoft Surface Pro pre-loaded with TeamViewer and trial versions of RSLogix software. They can choose to upgrade if needed and keep the device in their workspace. Whenever they require online assistance, they can bring the device to the PLC and connect using a USB-C to Ethernet adapter.

For clients who prefer privacy during remote access, you can follow JesperMP's guide on configuring TeamViewer's VPN. This can ensure secure access without revealing your actions. Feel free to explore these options and let me know if you have any further inquiries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kumbhak</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can remote access be improved for Modicon M340 PLCs and Telemecanique XBTG HMIs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Consider utilizing VPN solutions for secure and reliable remote access, enabling faster troubleshooting and updates without relying on dedicated phone lines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the drawbacks of using modem/routers and unmanaged switches for remote access?</h4>
<p class='text-muted'><strong>Answer:</strong> - Reliance on dedicated phone lines can lead to slow and unreliable connections, hindering efficient troubleshooting and updates.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is providing customers with a pre-loaded computer a viable solution for remote access?</h4>
<p class='text-muted'><strong>Answer:</strong> - While it can be an option, managing software upgrades and potential PC issues may add complexity to the process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any other recommendations for improving remote access capabilities for control systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Explore alternative remote access solutions like cloud-based platforms or remote monitoring services to enhance connectivity and efficiency.</p>
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
