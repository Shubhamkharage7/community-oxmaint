
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When selecting a PNP sensor for a Sink PLC input, its essential to consider how Sinking/Sourcing PLC inputs affect the PLC reading. For instance, a PNP sensor for a Sinking PLC input will register as High in the PLC when the sensor is ON. Conversely, a PNP sensor for">
    <meta name="keywords" content="pnp sensor, sinking plc input, sourcing plc input, plc reading, impact of sinking/sourcing, understanding plc inputs, pnp sensor selection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-sinking-sourcing-plc-inputs-on-pnp-sensors">
    <title>Understanding the Impact of Sinking/Sourcing PLC Inputs on PNP Sensors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Impact of Sinking/Sourcing PLC Inputs on PNP Sensors | Oxmaint Community">
    <meta property="og:description" content="When selecting a PNP sensor for a Sink PLC input, its essential to consider how Sinking/Sourcing PLC inputs affect the PLC reading. For instance, a PNP sensor for a Sinking PLC input will register as High in the PLC when the sensor is ON. Conversely, a PNP sensor for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-sinking-sourcing-plc-inputs-on-pnp-sensors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Impact of Sinking/Sourcing PLC Inputs on PNP Sensors | Oxmaint Community">
    <meta name="twitter:description" content="When selecting a PNP sensor for a Sink PLC input, its essential to consider how Sinking/Sourcing PLC inputs affect the PLC reading. For instance, a PNP sensor for a Sinking PLC input will register as High in the PLC when the sensor is ON. Conversely, a PNP sensor for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-sinking-sourcing-plc-inputs-on-pnp-sensors"
      },
      "headline": "Understanding the Impact of Sinking/Sourcing PLC Inputs on PNP Sensors",
      "description": "When selecting a PNP sensor for a Sink PLC input, its essential to consider how Sinking/Sourcing PLC inputs affect the PLC reading. For instance, a PNP sensor for a Sinking PLC input will register as High in the PLC when the sensor is ON. Conversely, a PNP sensor for",
      "author": {
        "@type": "Person",
        "name": "Tofo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-03",
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
                <h1 class="text-white">Understanding the Impact of Sinking/Sourcing PLC Inputs on PNP Sensors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>28 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">20936</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">82</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When selecting a PNP sensor for a Sink PLC input, it's essential to consider how Sinking/Sourcing PLC inputs affect the PLC reading. For instance, a PNP sensor for a Sinking PLC input will register as 'High' in the PLC when the sensor is ON. Conversely, a PNP sensor for a Sourcing PLC input will also register as 'High' in the PLC when the sensor is ON. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing a device's NPN output in conjunction with sinking inputs, it establishes a negative connection. Conversely, a device's PNP output is typically paired with sourcing inputs, creating a connection to the positive terminal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mendonsy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of electronics, understanding NPN (Negative-Positive-Negative) and PNP (Positive-Negative-Positive) outputs is crucial, especially when working with sinking and sourcing inputs. When dealing with a sinking input, NPN is the way to go, as it connects to the negative terminal. Conversely, when you have a sourcing input, PNP is the ideal choice, connecting to the positive terminal. These two types of outputs complement each other, with NPN being synonymous with sinking and PNP with sourcing. Remember, in order for your system to function properly, you need a combination of both. For more in-depth information on this topic, check out the informative document provided by Automation Direct here: [http://www.automationdirect.com/static/specs/sinksource.pdf].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, the terms sinking and sourcing may not be universally understood in the industry and can vary depending on perspective. However, it should be noted that PNP does not exclusively represent positive logic, and NPN does not always entail negative logic. The choice between them depends on the specific logic type being utilized, as discussed in previous discussions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When encountering a card with terms like "sinking input" or "sourcing output," it prompts a deeper consideration that cannot be overlooked. The apparent inconsistency in information availability points to a need for more widespread dissemination. This lack of clarity can lead to confusion and potential errors in decision-making.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I approach the terms "sourcing" and "sinking" with skepticism until I am presented with an electrical schematic or an "equivalent" diagram of the card's input or output circuitry. It is only then that I can fully grasp and comprehend the workings of the circuit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to confirm that my understanding is correct. Based on the responses, it seems that in order to use a Sourcing Input PLC, I must connect an NPN sensor. If this is accurate, will the PLC register a High or Low signal when the NPN sensor detects an object?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the event that the sensor is stimulating current within the module input circuitry, a TRUE state should be reflected in the input table.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The answer to whether an input "turns on" when a sensor detects something is dependent on the specific sensor being used. In general, when a sensor activates, the input signal will also be activated, going high or setting to one. However, sensor design plays a crucial role in this process, as some sensors are designed to deactivate when an object is detected. Providing the make and model of the sensor being used will allow for a more precise explanation of its behavior.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to bernie_carlton, a TRUE state should appear in the input table if the sensor is allowing current to pass through the module input circuitry. This insight has shed light on the significance of the term "TRUE" in PLC systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to sensors, the answer to whether the input will "turn on" or "go high" depends on the sensor itself. Some sensors are designed to "turn off" when sensing an object, so it's important to consider the specifics of the sensor you are using. If you provide us with the make and model, we can offer more tailored advice. In your case, with a Sourcing Input PLC and a palm sensor with 'NO' and 'NC' relay options, you may want to consider using a NPN sensor. The information provided in this link may be helpful: http://info.bannerengineering.com/xpedio/groups/public/documents/literature/33109.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that the contacts of the relay are capable of delivering the necessary signal for your specific application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to sensors, the design plays a crucial role in their functionality. Some sensors are specifically engineered to deactivate when they detect an object, while most sensors are capable of both functions. In my experience, the majority of sensors I've encountered consist of 4 wires, with 2 for power supply, 1 for normally open (NO), and 1 for normally closed (NC) circuits. This distinguishing feature sets apart sensors in terms of their operation and versatility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wilso</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tofo confirmed: "Alright, let me ensure I am comprehending this correctly. Based on the feedback received, it seems that in order to interface with a Sourcing Input PLC, I should utilize an NPN sensor. If this is accurate, will my PLC register a High or Low signal when the NPN sensor detects an object?" 

In contrast, you actually require PNP output from the sensors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mendonsy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mendonsy explained that in order to properly connect sensors to a PLC, you need sensors that provide a PNP output signal. In response to a question about sourcing PLC input, JordenCClark clarified that a sourcing input corresponds to a PNP sensor, and its complement would be needed to sink the current from the input, specifically an NPN sensor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiry from bernie_carlton: Ensuring the relay contacts transmit the necessary signal is crucial. When deciding between connecting the NO or NC contacts, it's essential to consider the PLC input type - Sinking or Sourcing. Which option would be more appropriate and why?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tofo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JordenCClark, if your PLC requires sourcing inputs, it should be PNP. You need its complement, NPN, to complete the current sinking process from the input. In simpler terms, if your PLC operates with a 24vdc power supply, sourcing inputs require sensors to output +24vdc for ON and zero volts for OFF conditions, utilizing a PNP transistor. On the other hand, sinking inputs require sensors to output 0vdc for ON and +24 volts for OFF conditions, using an NPN transistor. This principle also applies to outputs: a sourcing (PNP) output will provide +24 volts when ON, while a sinking (NPN) output will provide 0 volts when ON.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mendonsy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The presence of NO (normally open) and NC (normally closed) contacts is independent of PNP or NPN configurations. When you mention that the PLC has 'sourcing' inputs, it indicates that one side of the circuitry is connected to the + side of the DC power supply and requires a connection to the - side through an input device. To connect this, link the - side of the DC power supply to one contact and the other side of the contact to the module input pin. With the NC contact, the input table will register TRUE until the control is activated, switching it to FALSE. Conversely, connecting the NO contact will show FALSE in the input table until activation, changing it to TRUE. Enhancing your understanding of electronics may aid in analyzing wiring configurations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mendonsy, it seems there may be some confusion regarding sourcing and sinking inputs for PLCs. When a PLC requires sourcing inputs, it expects to receive +24vdc from sensors for an ON condition and zero volts for OFF, often utilizing a PNP transistor. Conversely, when a PLC requires sinking inputs, it looks for 0vdc for an ON condition and +24 volts for OFF, typically utilizing an NPN transistor. It's important to note that this information may vary based on the PLC brand, so checking with companies like Automation Direct or AB for clarification is recommended. Your explanation of output remains consistent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaveW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to integrating PLC inputs with field devices, it's crucial to ensure the correct polarity and current path alignment. The AutomationDirect catalog offers a practical explanation on how to achieve this synergy, making the process straightforward and functional. For more details, check out the catalog at http://www.automationdirect.com/static/catalog/50_current_Appendix.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mendonsy seemed to be addressing a forum post regarding the connection of a palm sensor to a Sourcing Input PLC. The PLC was thought to demand a sourcing input, as per the interpretation. However, it is essential to clarify that the poster actually mentioned the need for a Sourcing Input, which implies that the input itself internally 'sources' current. This means that a sinking device (or NPN transistor) is required for proper functionality. Utilizing diagrams can help in understanding these technical concepts more clearly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the Concepts of Sinking and Sourcing Inputs and Outputs

Correct, Bernie. An NPN sensor is ideal for a Sourcing input, interpreting as the "classical current sense." This topic may be confusing for some individuals. In case I cover familiar ground with AutomationDirect's explanation, please bear with me.

To simplify the interpretation of Sinking and Sourcing, it's crucial to note that these terms pertain to the direction of the DC current, not the voltage polarity. This distinction is where many individuals stumble. In a basic DC circuit, the current always flows from +Vdc to -Vdc. Therefore, when an input is identified as Sourcing, it is supplying current to a field device, which, in turn, switches the -Vdc back to the power source.

It is common for people to misinterpret Sourcing as referring to voltage instead of current flow. For a Sourcing input, current flows in from the common +Vdc and out towards the field device, resulting in a -Vdc connection. Conversely, by altering the voltage polarity, the current direction can be reversed. A Sinking input, designated by a -Vdc at the common terminal, necessitates a +Vdc input from a Sourcing field device.

Inputs, whether Sinking or Sourcing, disregard the current flow's direction as long as it meets the required criteria. Similarly, outputs do not differentiate in terms of current flow direction; they merely supply one side of the circuit to complete the loop. Both input and output mechanisms supporting Sinking or Sourcing can manage either +Vdc or -Vdc.

The interpretation of Sinking and Sourcing varies based on the perspective. Field devices linked to the +Vdc of the power supply are classified as Sourcing field devices, supplying current to a Sinking input. Conversely, devices connected to the -Vdc are considered Sinking field devices, withdrawing current from a Sourcing input.

In summary, Sourcing field devices complement Sinking inputs, whereas Sinking field devices pair with Sourcing inputs. This alignment ensures the smooth operation of the input circuits.

While PNP and NPN sensors are commonly used alongside Sinking and Sourcing inputs, these sensors are not directly related to the input circuit configurations. The sensor's transistor type (PNP or NPN) does not always dictate the output polarity. It is essential to understand the sensor's wiring options and their implications on the output polarity when integrating them into a PLC setup.

In conclusion, when selecting sensors for Sourcing inputs, consider the relay changeover contact mechanism and the required voltage configuration. For more intricate setups, establishing an interposing relay can aid in managing load discrepancies and ensuring seamless operation of Sourcing inputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of PLC programming, understanding the difference between sourcing and sinking inputs and outputs is crucial for proper system functionality. A normal PLC operating on a 24vdc power supply requires specific input signals for ON and OFF conditions. 

For sourcing inputs, the PLC expects to receive +24vdc for an ON condition and zero volts for off, typically coming from a PNP transistor sensor output. On the other hand, sinking inputs require 0vdc for an ON condition and +24 volts for off, usually from an NPN transistor sensor output.

The same principle applies to outputs: a sourcing output (PNP) will provide +24 volts when ON, while a sinking output (NPN) will provide 0 volts when ON. 

It can be easier to grasp this concept by relating digital outputs to digital inputs, with a source output connecting to a sink input for system functionality. Understanding the polarity of components, whether positive or negative switching, is essential for troubleshooting and system maintenance.

In summary, consistency in matching sink/source attributes to components is vital for system operation. Following the electrical diagram and understanding the role of transistors' emitters (either input or output) in relation to the gate direction - PNP for Away-from-the-Gate and NPN for Toward-the-Gate - helps ensure proper system functioning and minimizes errors in interpretation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmargineau</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As I delved into the world of PLCs several years ago, I had the privilege of attending a seminar led by renowned Allen Bradley experts. During the seminar, they used a clever analogy comparing PLC setups to a male-female plug configuration. Just like how a male plug is needed to connect to a female end to complete a circuit, PLCs require specific inputs and outputs to function properly. While this analogy may seem simplistic, it offers a clear understanding of the concept.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigbuckaroo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting an electrical system, it's crucial to address polarity. Following the arrow on the transistor's electrical diagram can prevent confusion. For PNP transistors, the arrow should point away from the Gate, indicating a Positive-Negative-Positive junction for (+) switching. On the other hand, for NPN transistors, the arrow should point toward the Gate, indicating a Negative-Positive-Negative junction for (-) switching. It's important to note that the arrows in the original post were reversed. Check out the simplified diagram below, which also explains sourcing and sinking. Plus, I've included a mnemonic to help you remember!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have come to realize that the traditional current flow direction in a DC circuit, from negative (-) to positive (+), does not always align with accepted conventions. This concept can be tricky to grasp, especially when considering transistors and how their emitters' arrows point in the opposite direction of how physics defines current flow. Over time, this convention has become ingrained in our understanding of theoretical DC circuits, where the "charge carriers" are considered to be protons (+) instead of the more commonly known electrons (-) that actually do the work. It's an intriguing aspect of electrical theory that merits further exploration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmargineau</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are two types of I/O circuits commonly used in industrial applications: "sinking" (also known as "Allen-Bradley sourcing") which is compatible with NPN sensors, and "sourcing" (also known as "Allen-Bradley sinking") which works with PNP sensors. Despite their common use, it is advisable to refrain from using the terms "sink" and "source" altogether for better clarity in communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LadderLogic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When discussing a Sourcing Input PLC, simply stating it in those terms is not sufficient to fully understand the circuit, as Bernie pointed out. The ambiguity lies in whether the PLC has an input terminal that accepts a Sourcing Input Device (implying a Sinking Device inside the PLC), or if the internal PLC input device itself is sourcing the current internally (requiring a Sinking Input External Device). Without further information, it's impossible to determine the specific setup. This confusion highlights the challenge of language in technical discussions, a topic that is often debated endlessly, just like the perennial Upload vs. Download debate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lancie1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geospark clarified that while PNP and NPN sensors are commonly used with PLC input circuits, they are not directly related to Sinking and Sourcing input circuits. These sensors are just a few of the many devices that can be connected to PLC inputs. The type of transistor used inside the sensor determines whether it is PNP or NPN, with Positive (P-doped) and Negative (N-doped) semiconductor layers making up the transistor Base, Emitter, and Collector. However, the electronic switch within the sensor does not always dictate the output polarity. Some sensors, known as 4-wire PNP and NPN sensors, offer N.O. or N.C. options and may require wiring the output to -Vdc or +Vdc to change the output's polarity. 

In the case of Sourcing input, current is being supplied to the Banner OTB, requiring a -Vdc connection between the input and the device. It's important to note that just because a sensor is PNP or NPN does not necessarily determine its output in terms of positive or negative polarity. 

If you're looking for a clear example of how PNP and NPN sensors differ in terms of their input signals, there is a helpful video in Spanish that demonstrates this concept well. The video shows how one sensor, when detecting metal, sends a signal to the input module, typically a sinking input module configured to accept positive signals. On the other hand, the NPN sensor does not send a signal to the PLC. 

For more detailed information, you can watch the video titled "Convertir sensor NPN en PNP utilizando relay - Conexión a PLC" which explains how to convert an NPN sensor to PNP for specific applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kawhi</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How does the selection of a PNP sensor for a Sink PLC input differ from selecting one for a Sourcing PLC input?
- When selecting a PNP sensor for a Sink PLC input, it will register as 'High' in the PLC when the sensor is ON. On the other hand, a PNP sensor for a Sourcing PLC input will also register as 'High' in the PLC when the sensor is ON.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it important to consider how Sinking/Sourcing PLC inputs affect the PLC reading when choosing a PNP sensor?</h4>
<p class='text-muted'><strong>Answer:</strong> - Understanding how Sinking/Sourcing PLC inputs impact the PLC reading is crucial for ensuring accurate sensor readings and proper integration with the PLC system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should be taken into account when choosing a PNP sensor for a specific PLC input type?</h4>
<p class='text-muted'><strong>Answer:</strong> - When selecting a PNP sensor, it's essential to match the sensor type (Sink or Source) with the corresponding PLC input type to ensure proper functionality and accurate data interpretation within the PLC system.</p>
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
