# Securing WISE Data Center Using IoT 


<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#about-the-project">About The Project</a></li>
    <li><a href="#project-objectives">Project Objectives</a></li>
    <li><a href="#built-with">Built With</a></li>
    <ul>
      <li><a href="#hardware-tools">Hardware Tools</a></li>
      <li><a href="#software-and-tools">Software and Tools</a></li>
    </ul>
    <li><a href="#running-the-code">Running the Code</a></li>
    <ul>
      <li><a href="#running-the-arduino-code-esp32_code">Running the Arduino Code `ESP32_code`</a></li>
      <li><a href="#running-the-web-application-securingwisedatacenter">Running the Web Application `SecuringWISEDataCenter`</a></li>
    </ul>
    <li><a href="#diagrams">Diagrams</a></li>
    <ul>
      <li><a href="#data-flow-diagram-0">Data Flow Diagram-0</a></li>
      <li><a href="#data-flow-diagram-1">Data Flow Diagram-1</a></li>
      <li><a href="#use-case-diagram">Use Case Diagram</a></li>
    </ul>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project
<div style="text-align: center;">
  <img src="DiagramsImg/ArduinoProject.jpg" alt="Arduino Project" width="170">
</div>
 <br/>
The project endeavors to bolster the security measures of The World Islamic Sciences and Education University's (WISE) Data Center (DC) through the utilization of cutting-edge Internet of Things (IoT) technology and sophisticated sensor systems. By harnessing the capabilities of IoT devices and sensors, the project aims to conduct continuous, real-time monitoring of the DC, promptly identifying any deviations that may arise. These variations encompass fluctuations in temperature and humidity, gas emissions, water leaks, and server vibrations. Through vigilant monitoring of these parameters, the system ensures the preservation of confidentiality, integrity, and accessibility within the data center's infrastructure. Ultimately, the project's objectives include the prevention of equipment downtimes, the mitigation of potential damages resulting from hazards such as gas and water leaks, and the enhancement of anti-theft measures through the detection of server vibrations.

### Project Objectives
1. Propose a new system using IoT technology and sensors to monitor the WISE DC.
2. Monitor suitable temperature in the server room to prevent equipment downtime and maintain system performance.
3. Minimize damage caused by gas leaks and take immediate action using gas sensors.
4. Detect water leaks in the DC to minimize water damage.
5. Detect server vibrations for anti-theft measures and take appropriate action promptly.

<div align="right"><a href="#top">Back to Top</a></div>


## Built With

### Hardware Tools
- NodeMCU ESP32 ⚙️
- Mini Breadboard 🔌
- Vibration Sensor Module Switch SW-420 🔔
- DHT22 Digital Temperature and Humidity Sensor 🌡️
- MQ2 Smoke and Flammable Gas Sensor 🔥
- Rain Eater Level Detection Sensor Module ☔ 
- LED 💡
- 5V Magnetic Buzzer 🔊
- Resistors ⚡

### Software and Tools
<a href="https://www.arduino.cc/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Arduino_Logo.svg/35px-Arduino_Logo.svg.png" alt="Arduino" width="35"></a>
<a href="https://www.php.net/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/35px-PHP-logo.svg.png" alt="PHP" width="45"></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/35px-Unofficial_JavaScript_logo_2.svg.png" alt="JavaScript" width="30"></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/HTML"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/35px-HTML5_logo_and_wordmark.svg.png" alt="HTML" width="35"></a>
<a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/35px-CSS3_logo_and_wordmark.svg.png" alt="CSS" width="30"></a>
<a href="https://www.mysql.com/"><img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL" width="45"></a>
<a href="https://code.visualstudio.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg" alt="Visual Studio Code" width="30"></a>
<a href="https://git-scm.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/35px-Git-logo.svg.png" alt="Git" width="55"></a>
<a href="https://github.com/"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub" width="30"></a>


<div align="right"><a href="#top">Back to Top</a></div>


## Running the Code

### Running the Arduino Code `ESP32_code`

To run the Arduino code for the Securing WISE Data Center Using IoT, follow these steps:

1. **Hardware Setup**: Connect the necessary sensors (DHT22, MQ2, rainwater, and vibration sensor) and components (LED and buzzer) to your NodeMCU ESP32 board according to the specified pin configurations in the code.

2. **Software Setup**:
   - Open the Arduino IDE or VS Code with the PlatformIO extension.
   - Install the required libraries: DHT sensor library, WiFi library, HTTPClient library.
   - Create a new Arduino sketch and copy the provided code from the `ESP32_code` folder into the sketch.

3. **Configure Wi-Fi Credentials**: Set your Wi-Fi network SSID and password in the `ssid` and `password` variables respectively.

4. **Configure Server Host**: Set the host address of the server where you want to send the sensor data in the `host` variable.

5. **Upload the Code**: Compile and upload the code to your NodeMCU ESP32 board.

<div align="right"><a href="#top">Back to Top</a></div>


### Running the Web Application `SecuringWISEDataCenter`

To run the web application for the Securing WISE Data Center Using IoT project, follow these steps:

1. **Web Server Setup**: Ensure you have a web server environment set up on your machine. You can use solutions like XAMPP, WAMP, or MAMP for local development.

2. **Database Setup**: Import the provided SQL file (`wise_datacenter.sql`) from the `SecuringWISEDataCenter` folder into your MySQL database to create the necessary tables and schema.

3. **Configure Database Connection**: Open the PHP files in the `SecuringWISEDataCenter` folder and update the database connection details (host, username, password, database name) as per your local setup.

By following these steps, you can set up and run both the Arduino code and web application for your WISE Data Center project.

<div align="right"><a href="#top">Back to Top</a></div>



## Diagrams

### Data Flow Diagram-0
- **Description:** Overview of the system's scope, boundaries, and external entities.
- **Location:** [Data Flow Diagram-0](DiagramsImg/DataFlowDiagram-0.png)

### Data Flow Diagram-1
- **Description:** Illustrates data flow, processes, and storage within the system.
- **Location:** [Data Flow Diagram-1](DiagramsImg/DataFlowDiagram-1.png)

### Use Case Diagram
- **Description:** Displays system functionality and actor-interaction scenarios.
- **Location:** [Use Case Diagram](DiagramsImg/UseCaseDiagram.png)

<div align="right"><a href="#top">Back to Top</a></div>

## Contact with us

Raghad AlKatout - [Github](https://github.com/Raghadkatout08) - [LinkedIn](https://www.linkedin.com/in/raghad-alkatout-263949211/)  

Balqees Hmoud - [Github](https://github.com/balqeesHmoud) - [LinkedIn](https://www.linkedin.com/in/balqees-hmoud-511ba4245/)  

Razan Elkhateeb - [Github](https://github.com/RazanElkhateeb) - [LinkedIn](https://www.linkedin.com/in/razan-elkhateeb-826682253/)  

Project Link: [https://github.com/Securing-WISE-DataCenter-Using-IoT](https://github.com/Securing-WISE-DataCenter-Using-IoT/SecuringDataCenter.git)

<div align="right"><a href="#top">Back to Top</a></div>
