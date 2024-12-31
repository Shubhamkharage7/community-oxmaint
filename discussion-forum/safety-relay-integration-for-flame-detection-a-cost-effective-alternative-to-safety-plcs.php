
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my current project, I am looking to implement a safety function using a safety relay in conjunction with a flame detector as the sensing element. The flame detector features relay contact outputs which I plan to utilize alongside a safety relay to establish the necessary safety measures. This">
    <meta name="keywords" content="safety relay integration, flame detection, cost-effective alternative, safety plcs, safety function, flame detector, relay contact outputs, safety measures, primary safety function, machine safety, process safety, safety instrumented system, sil2-rated application, sil">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/safety-relay-integration-for-flame-detection-a-cost-effective-alternative-to-safety-plcs">
    <title>Safety Relay Integration for Flame Detection: A Cost-Effective Alternative to Safety PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Safety Relay Integration for Flame Detection: A Cost-Effective Alternative to Safety PLCs | Oxmaint Community">
    <meta property="og:description" content="In my current project, I am looking to implement a safety function using a safety relay in conjunction with a flame detector as the sensing element. The flame detector features relay contact outputs which I plan to utilize alongside a safety relay to establish the necessary safety measures. This">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/safety-relay-integration-for-flame-detection-a-cost-effective-alternative-to-safety-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Safety Relay Integration for Flame Detection: A Cost-Effective Alternative to Safety PLCs | Oxmaint Community">
    <meta name="twitter:description" content="In my current project, I am looking to implement a safety function using a safety relay in conjunction with a flame detector as the sensing element. The flame detector features relay contact outputs which I plan to utilize alongside a safety relay to establish the necessary safety measures. This">
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
        "@id": "https://community.oxmaint.com/discussion-forum/safety-relay-integration-for-flame-detection-a-cost-effective-alternative-to-safety-plcs"
      },
      "headline": "Safety Relay Integration for Flame Detection: A Cost-Effective Alternative to Safety PLCs",
      "description": "In my current project, I am looking to implement a safety function using a safety relay in conjunction with a flame detector as the sensing element. The flame detector features relay contact outputs which I plan to utilize alongside a safety relay to establish the necessary safety measures. This",
      "author": {
        "@type": "Person",
        "name": "kdcui"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-18",
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
                <h1 class="text-white">Safety Relay Integration for Flame Detection: A Cost-Effective Alternative to Safety PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>23 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1512</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">271</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my current project, I am looking to implement a safety function using a safety relay in conjunction with a flame detector as the sensing element. The flame detector features relay contact outputs which I plan to utilize alongside a safety relay to establish the necessary safety measures. This setup is intended to serve as the primary safety function within the system, with the goal of avoiding the use of a safety PLC due to cost and complexity concerns, particularly regarding lifecycle management.

While adhering to IEC 61511 standards internally, it's important to note that this application falls between the realms of machine safety and process safety, rather than a Safety Instrumented System (SIS). Despite most safety relays being primarily designed for machine safety applications such as E-Stops and guard doors, I am faced with the challenge of adapting them for a SIL2-rated application.

Most safety relays are capable of achieving SIL3 or SIL2 ratings, but the single-channel relay outputs on the sensor I am considering limit its efficiency to SIL1 in typical application scenarios. However, given the abundance of DC on the sensor, I believe it is feasible to meet the required safety level. The key now lies in documenting and substantiating the capability of the safety function to achieve the desired target level within this unique setup.

Attached is an image from a Phoenix Contact 2963763 relay datasheet illustrating my approach to this safety function for flame detection, utilizing safety relays instead of a safety PLC. My objective is to confirm that this alternative method is indeed appropriate for the task at hand.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the flame detector capable of providing an analog output (4-20MA) that meets SIL2 requirements? If it does, you could potentially connect the 4-20MA output to a SIL2 capable limit controller equipped with 2 complementary relay contacts linking to the safety relay.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the flame detector's analog output (4-20mA) SIL2 compatibility, g.mccormick questioned the possibility of connecting the output to a SIL2 capable limit controller with dual relay contacts for safety relay integration. The flame detector indeed has a 4-20mA signal for non-safety feedback at the PLC. However, searching for a suitable limit value switch like the MACX MCR-SL-UI-REL proved to only convert the signal to a contact output, lacking the necessary de-energization and reset monitoring functions. The objective was to find a simple solution without the need for programming software to comply with IEC 61511 requirements for safety applications. Any recommendations for a limit controller that fits these criteria? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can a second flame detector be utilized to provide dual channels for a safety relay?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tarik1978 inquired about the possibility of using a second flame detector to create 2 channels for a safety relay. It is feasible, but there are two options to consider: wiring the sensors in series through a single channel or wiring them as single channel inputs through a relay that requires 2 enabling inputs. Parallel wiring of two separate sensors as a dual channel device is not recommended unless they are integrated into the same device, like a dual channel E-Stop. This is because variations in the timing of the contacts' rising and falling edges can trigger the safety relay.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to flame detection safety circuits, it is essential to comply with specific requirements and undergo scrutiny from various departments such as safety, maintenance, and plant engineering. Approval from both state authorities and insurance companies is also necessary. This was the process we followed when upgrading our system in 2005. Although not directly involved in the project, my supervisor outlined the steps that needed to be taken. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the STA Functional Safety Limit Alarm Trip from Moore Industries, a trusted global provider of interface instruments for industrial process control. Explore our wide range of products including signal conditioners, temperature sensors, and transmitters on our website www.miinet.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>G. McCormick recommends the STA Functional Safety Limit Alarm Trip from Moore Industries, a renowned global provider of interface instruments for industrial process control. Discover a wide range of signal conditioners, temperature sensors, transmitters, and more on their website. Visit www.miinet.com for additional information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before working with gas or fuel burners, it is crucial to understand the relevant regulations regarding their installation. Ensuring safety during combustion goes beyond just using a flame detector relay. It is essential to have control over air presence, fuel pressure, and air sweep time before ignition. Various devices are available on the market to regulate the ignition cycle and flame control for these types of installations. Make sure to stay informed about the necessary safety measures to prevent any accidents or hazards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are customizable safety relays available which can be programmed using free software. One example is the AB safety relay with a PN starting with 440C. Other programmable safety relays are capable of similar functions. This is just one demonstration of the capabilities of configurable safety relays.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with gas or fuel burners, it is essential to be aware of the regulations that apply to these types of installations at the site. Simply having a flame detector relay may not be sufficient to ensure safety in the combustion process. It is mandatory to have control over air presence, fuel pressure, and air sweep time before ignition. Fortunately, there are devices available on the market that can help regulate the ignition cycle and flame control. For this reason, we consistently rely on FireEye controllers for our burner operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a room filled with hot presses heated using oil run through a burner system, rather than a traditional boiler as claimed by the manufacturer, I installed four UV/IR flame detectors. These detectors featured dual-channel safety capabilities and an auxiliary relay output. They were connected to a dedicated safety relay at the main operator station, complete with indicators for OKAY and RESET. The RESET function was also integrated into the reset pushbutton. While you mentioned that your sensors were rated SIL2, it's crucial to ensure they have dual-channel output for this level of safety.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is common for manufacturers to have lax definitions when labeling devices as Sil2 and Sil3. One example is Phoenix's smart contactor, which they assert is Sil 3 despite having only one contact and no feedback. It seems that some companies may rely on MTBF numbers to determine SIL classification. From my understanding of safety standards, redundancy of failure points is crucial in defining a device as SIL2 or SIL3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User kdcui expressed gratitude for the helpful information. They mentioned that despite never using the tool before, it appeared in the search results. A quick glance led them to believe that it could be effective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee commented on the lax criteria manufacturers use to label devices as SIL2 and SIL3. While not an expert, he highlighted the importance of adhering strictly to SIL requirements to prevent manufacturers from misinterpreting the standards for their own gain. Without stringent adherence, even obscure manufacturers like Bubba Mfg operating out of unconventional locations could produce supposedly SIL3-compliant products for critical industries such as nuclear power plants.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I_Automation stated that SIL requirements must be strictly adhered to by manufacturers, as individual interpretation of these requirements is not allowed. This ensures that companies like Bubba Mfg, operating out of a garage, cannot create SIL3 compliant items for use in nuclear power plants. 

It is important to note that SIL is not a design feature, but rather an assessment of risk and failure rates. Manufacturers establish their own failure rates and risk levels for their devices, meaning that a SIL designation at the device level may not hold much significance. As explained in the following excerpt: "There is no such thing as an SIL-rated device or control system, but we purchase components with published failure rate values that are suitable for use in an SIL environment."

For assistance in determining Safety Integrity Levels (SIL) and defining safety performance requirements for hazardous operations, trust the expertise of Cross Company. Serving customers since 1954, we specialize in helping clients navigate complex process applications. Visit Cross Company's website for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering SIL2 as PLd, the concept of "Single Channel" is derived from specific criteria. Achieving SIL2/PLd requires utilizing Category 2 with High MTTFd components and medium to high DC levels, yet meeting this goal can be challenging due to the test rate and requirements related to safety function demands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to ensuring the safety of a burner, it is essential to utilize approved burner control equipment and properly connect all necessary components such as valves, flame detectors, pressure switches, and fans as outlined in the diagram. It is crucial to adhere to industry standards and avoid creating your own security system, as it is unlikely to meet compliance requirements for combustion equipment testing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe this sensor is not designed for flameproofing, but rather for flame detection. Its purpose is to sound an alarm when it senses the presence of a fire where there shouldn't be one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to I_Automation, it is essential to adhere to SIL requirements, as manufacturers cannot create their own interpretations of specific requirements. Otherwise, situations like Bubba Mfg producing SIL3 items for nuclear power plants in a garage could arise. Devices must be IEC 61508 certified, as failure to do so requires significant effort to gather data for device suitability (proven in previous use). Even with certification, the safety function designer must document and verify that the entire system meets the necessary safety rating. Simply purchasing "SIL2" certified devices is insufficient to meet SIL2 - there are additional systematic and architectural requirements that must be fulfilled. For further insights, Exida offers valuable information on this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to g.mccormick's comment, it is important to clarify that this sensor is not meant to prove flames, but rather to detect them. The UV/IR detector will signal the presence of a flame, triggering a shutdown procedure for safety purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you safeguarding a particular procedure or operation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to I_Automation, adherence to SIL requirements is crucial as it prohibits manufacturers from using their own subjective interpretations. This ensures that even small companies like Bubba Mfg, operating out of a garage, cannot produce SIL3 items for use in nuclear power plants.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to flame detection in industrial processes, achieving safety levels such as SIL2 can be challenging. This is due to the complexities involved in meeting the requirements of standards like IEC 61511, 13849, and 62061. While some may think using a relay is the best option, considering alternatives like a 4-20mA output device with appropriate safety capabilities may be more effective. It is important to note that there are no devices or systems that are inherently "SIL-rated," as certification only indicates a certain level of manufacturing control. The real key lies in analyzing reliability data and conducting design verification to ensure that the risk is reduced to an acceptable probability level. If certified devices are not used, additional data verification becomes essential for proving the system's safety performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can safety relays be effectively used for flame detection applications instead of safety PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, safety relays can be a cost-effective alternative to safety PLCs for flame detection applications. By utilizing relay contact outputs from flame detectors alongside safety relays, one can establish the necessary safety measures within the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What safety standards should be considered when implementing a safety function with safety relays and flame detectors?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to adhere to relevant safety standards such as IEC 61511 when implementing safety functions using safety relays and flame detectors. Additionally, considering the application falls between machine safety and process safety realms rather than a Safety Instrumented System (SIS) is crucial.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the efficiency of safety relays for SIL2-rated applications be optimized?</h4>
<p class='text-muted'><strong>Answer:</strong> - While most safety relays can achieve SIL3 or SIL2 ratings, limitations in relay outputs may restrict efficiency to SIL1 in typical scenarios. However, by assessing the abundance of DC on the sensor and documenting the capability of the safety function, it may be feasible to meet the required safety level for SIL2 applications.</p>
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
