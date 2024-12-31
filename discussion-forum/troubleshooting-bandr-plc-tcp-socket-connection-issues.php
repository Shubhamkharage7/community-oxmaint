
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am a beginner working with PLCs and using a BandR PLC. I am currently experimenting with a printer and its TCP socket communication. The connection works smoothly as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and">
    <meta name="keywords" content="plc troubleshooting, b&r plc, tcp socket connection, err_fub_busy state, printer communication, socket tester, resolving connection issues, restarting plc, ethernet interface, tcp socket communication, socket connection problem, closing socket, connection loss, disconnected cable">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-bandr-plc-tcp-socket-connection-issues">
    <title>Troubleshooting BandR PLC TCP Socket Connection Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting BandR PLC TCP Socket Connection Issues | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am a beginner working with PLCs and using a BandR PLC. I am currently experimenting with a printer and its TCP socket communication. The connection works smoothly as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-bandr-plc-tcp-socket-connection-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting BandR PLC TCP Socket Connection Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am a beginner working with PLCs and using a BandR PLC. I am currently experimenting with a printer and its TCP socket communication. The connection works smoothly as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-bandr-plc-tcp-socket-connection-issues"
      },
      "headline": "Troubleshooting BandR PLC TCP Socket Connection Issues",
      "description": "Hello everyone, I am a beginner working with PLCs and using a BandR PLC. I am currently experimenting with a printer and its TCP socket communication. The connection works smoothly as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and",
      "author": {
        "@type": "Person",
        "name": "valer85"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Troubleshooting BandR PLC TCP Socket Connection Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">516</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">254</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am a beginner working with PLCs and using a B&R PLC. I am currently experimenting with a printer and its TCP socket communication. The connection works smoothly as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and then closing the connection.

However, I have encountered an issue where if the connection is lost (due to, for example, a disconnected cable), the tcpClient connection remains stuck in an ERR_FUB_BUSY state indefinitely. Even after reconnecting the cable, it becomes impossible to establish a new connection. The only resolution seems to be restarting the PLC.

I have also tested with an external socket tester, and it works perfectly. Can anyone suggest what might be causing this problem? Is it related to not properly closing the socket when the connection is lost? Thank you in advance for any insights.

Code:
CASE ClientTCP.Step OF
0: (* Opening Ethernet Interface *)
IF test_tcp OR start_send_label OR start_send_label_ricetta THEN
TcpOpen_0.enable := 1;
TcpOpen_0.pIfAddr := 0; (* Select Interface to open *)
TcpOpen_0.port := 8000; (* Port on client side to utilize *)
TcpOpen_0.options := tcpOPT_REUSEADDR;
TcpOpen_0;
IF TcpOpen_0.status = 0 THEN
TON_timeout_comunicaz_tcpip.IN := TRUE;
ClientTCP.Step := 10;
ELSIF TcpOpen_0.status = ERR_FUB_BUSY THEN
(* Busy *)
ELSE
ClientTCP.Step := 100;
END_IF
END_IF
10: (* Connecting to the other Station *)
TcpClient_0.enable := 1;
TcpClient_0.ident := TcpOpen_0.ident; (* Connection Ident from AsTCP.TCP_Open *)
TcpClient_0.portserv := 8000; (* Port on server side to use *)
TcpClient_0.pServer := ADR('172.17.40.20'); (* Server Address *)
TcpClient_0;
IF TcpClient_0.status = 0 THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
ClientTCP.Step := 20;
ELSIF TcpClient_0.status = ERR_FUB_BUSY THEN
(* Busy *)
IF TON_timeout_comunicaz_tcpip.Q THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
ClientTCP.Step := 40;
END_IF
ELSIF TcpClient_0.status = tcpERR_INVALID THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
ClientTCP.Step := 40;
ELSE
ClientTCP.Step := 100;
END_IF
20: (* Sending Data to the Server *)
TcpSend_0.enable := 1;
TcpSend_0.ident := TcpOpen_0.ident; (* Connection Ident from AsTCP.TCP_Open *)
TcpSend_0.pData := ADR(test_string); (* Data to send *)
TcpSend_0.datalen := SIZEOF(test_string); (* Data length to send *)
TcpSend_0.flags := 0;
TcpSend_0;
IF TcpSend_0.status = 0 THEN
ClientTCP.Step := 40;
ELSIF TcpSend_0.status = ERR_FUB_BUSY THEN
IF TON_timeout_comunicaz_tcpip.Q THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
ClientTCP.Step := 40;
END_IF
ELSIF (TcpSend_0.status = tcpERR_SENTLEN) OR (TcpSend_0.status = tcpERR_NOT_CONNECTED) THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
ClientTCP.Step := 40;
ELSE
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
label_chunk_ready := FALSE;
ClientTCP.Step := 100;
END_IF
40: (* Closing Connection *)
TcpClose_0.enable := 1;
TcpClose_0.ident := TcpOpen_0.ident;
TcpClose_0.how := tcpSHUT_RD;
TcpClose_0;
test_tcp := FALSE;
IF TcpClose_0.status = 0 THEN
ClientTCP.Step := 0;
ELSIF TcpClose_0.status = ERR_FUB_BUSY THEN
IF MpAlarmXCheckReaction(gAlarmXCore_Hmi, 'PrinterNetworkError_') THEN
ClientTCP.Step := 100;
END_IF
ELSE
ClientTCP.Step := 100;
END_IF
100: (* Error Handling Implementation *)
TON_timeout_comunicaz_tcpip.IN := FALSE;
ClientTCP.Step := 0;
END_CASE</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for clues?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to set a timeout in the programming of a B&R plc to close inactive connections, also known as zombie connections?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A timeout is already in place to automatically close the socket if any errors occur. This feature ensures seamless handling of unexpected issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>valer85 asked a question: Hello everyone, I am new to PLCs and currently working with a B&R plc. I am experimenting with a printer and its TCP socket communication. The connection works well as long as there are no errors. I have followed the example of using tcpOpen, tcpClient, sending data, and closing the connection. However, if the connection is lost for any reason (such as a disconnected cable), the tcpClient connection remains stuck in the ERR_FUB_BUSY state indefinitely. Even after reconnecting the cable, it is impossible to establish a new connection without restarting the PLC. I have also tested with an external socket tester, and it works perfectly. What am I missing? Is the issue related to not being able to properly close the socket when the connection is lost? Your insights are appreciated. Error Handling code:

CASE ClientTCP.Step OF

0: (* Open Ethernet Interface *)

IF test_tcp OR start_send_label OR start_send_label_ricetta THEN
TcpOpen_0.enable := 1;
TcpOpen_0.pIfAddr := 0; (* Which Interface to open *)
TcpOpen_0.port := 8000; (* Port on client side to use *)
TcpOpen_0.options := tcpOPT_REUSEADDR;
TcpOpen_0;

IF TcpOpen_0.status = 0 THEN (* TcpOpen successful *)
TON_timeout_comunicaz_tcpip.IN := TRUE;
ClientTCP.Step := 10;

ELSIF TcpOpen_0.status = ERR_FUB_BUSY THEN (* TcpOpen not finished -> redo *)
(* Busy *)
ELSE (* Go to Error Step *)
ClientTCP.Step := 100;
END_IF

END_IF

10: (* Connect to the other Station *)
TcpClient_0.enable := 1;
TcpClient_0.ident := TcpOpen_0.ident; (* Connection Ident from AsTCP.TCP_Open *)
TcpClient_0.portserv := 8000; (* Port on server side to use *)
TcpClient_0.pServer := ADR('172.17.40.20'); (* Server Address *)
TcpClient_0;

IF TcpClient_0.status = 0 THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;
ClientTCP.Step := 20;

ELSIF TcpClient_0.status = ERR_FUB_BUSY THEN (* TcpClient not finished -> redo *)
(* Busy *)
// timeout for connection
IF TON_timeout_comunicaz_tcpip.Q THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;

MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');

ClientTCP.Step := 40;
END_IF

ELSIF TcpClient_0.status = tcpERR_INVALID THEN (* Port error -> Close actual connection, and reopen a new one *)
TON_timeout_comunicaz_tcpip.IN := FALSE;
ClientTCP.Step := 40;

ELSE (* Go to Error Step *)
ClientTCP.Step := 100;
END_IF

20: (* Send Data to the Server *)
TcpSend_0.enable := 1;
TcpSend_0.ident := TcpOpen_0.ident; (* Connection Ident from AsTCP.TCP_Open *)

TcpSend_0.pData := ADR(test_string); (* Which data to send *)
TcpSend_0.datalen := SIZEOF(test_string); (* Length of data to send *)

TcpSend_0.flags := 0;
TcpSend_0;

IF TcpSend_0.status = 0 THEN (* Data was sent successfully -> close socket *)
ClientTCP.Step := 40;

ELSIF TcpSend_0.status = ERR_FUB_BUSY THEN (* TcpSend not finished -> redo *)
(* Busy *)
// timeout
IF TON_timeout_comunicaz_tcpip.Q THEN
TON_timeout_comunicaz_tcpip.IN := FALSE;

MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
ClientTCP.Step := 40;
END_IF

ELSIF (TcpSend_0.status = tcpERR_SENTLEN) OR (TcpSend_0.status = tcpERR_NOT_CONNECTED) THEN (* Connection Lost *)
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
ClientTCP.Step := 40;

ELSE (* Go to Error Step *)
TON_timeout_comunicaz_tcpip.IN := FALSE;
MpAlarmXSet(gAlarmXCore_Hmi, 'PrinterNetworkError');
label_chunk_ready := FALSE;
ClientTCP.Step := 100;
END_IF

// ---------------------
40: (* Close connection *)
TcpClose_0.enable := 1;
TcpClose_0.ident := TcpOpen_0.ident; (* Connection Ident from AsTCP.TCP_Open *)
TcpClose_0.how := tcpSHUT_RD; //0;
TcpClose_0; (* Call the Function *)

test_tcp := FALSE;

IF TcpClose_0.status = 0 THEN (* Close successful *)
ClientTCP.Step := 0;
ELSIF TcpClose_0.status = ERR_FUB_BUSY THEN (* TcpClose not finished -> redo *)
(* Busy *)
IF MpAlarmXCheckReaction (gAlarmXCore_Hmi, 'PrinterNetworkError_') THEN
ClientTCP.Step := 100;
END_IF

ELSE (* Go to Error Step *)
ClientTCP.Step := 100;
END_IF

100: (* Error Handling implementation is needed *)
TON_timeout_comunicaz_tcpip.IN := FALSE;

ClientTCP.Step := 0;

END_CASE</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yoselyn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This code snippet is sourced from the B&R library and automatically comes included when the library is imported into Automation Studio. Feel free to let me know if you would like me to send it to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What could be causing the issue where the tcpClient connection remains stuck in an ERR_FUB_BUSY state indefinitely after a connection loss?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue may be related to not properly closing the socket when the connection is lost. This can lead to the tcpClient connection getting stuck in the ERR_FUB_BUSY state.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Is there a specific resolution for the problem of being unable to establish a new connection after a connection loss, besides restarting the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Currently, restarting the PLC seems to be the only resolution for establishing a new connection after encountering this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I ensure proper socket handling to avoid the tcpClient connection getting stuck in the ERR_FUB_BUSY state?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to ensure that the socket is properly closed when the connection is lost. Proper closing of the socket can prevent the tcpClient connection from getting stuck in the ERR_FUB_BUSY state.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Are there any best practices for handling TCP socket connections in B&R PLC programming to avoid connection issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Best practices for handling TCP socket connections include properly closing the socket when the connection is lost, implementing error handling mechanisms, and ensuring robust communication protocols to handle connection failures effectively.</p>
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
