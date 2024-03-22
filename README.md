# Securing WISE Data Center Using IoT 

## Abstract
The project aims to secure the The World Islamic Sciences and Education University (WISE) Data Center (DC) using Internet of Things (IoT) technology and sensors. It addresses the need for real-time monitoring and detection of changes within the DC to ensure confidentiality, integrity, and availability.


## Project Objectives
1. Propose a new system using IoT technology and sensors to monitor the WISE DC.
2. Monitor suitable temperature in the server room to prevent equipment downtime and maintain system performance.
3. Minimize damage caused by gas leaks and take immediate action using gas sensors.
4. Detect water leaks in the DC to minimize water damage.
5. Detect server vibrations for anti-theft measures and take appropriate action promptly.

## Technical Details
### Hardware Tools
- NodeMCU ESP32
- Mini Breadboard
- Vibration Sensor Module Switch SW-420
- DHT22 Digital Temperature and Humidity Sensor
- MQ2 Smoke and Flammable Gas Sensor
- Rain Eater Level Detection Sensor Module
- LED
- 5V Magnetic Buzzer
- Resistors

### Software
- Visual Studio Code
- Arduino IDE

### Programming Languages
- Arduino
- PHP
- MySQL
- HTML
- JavaScript
- CSS


## Running the Code

### Running the Arduino Code (ESP32_code)

To run the Arduino code for the Securing WISE Data Center Using IoT, follow these steps:

1. **Hardware Setup**: Connect the necessary sensors (DHT22, MQ2, rainwater, and vibration sensor) and components (LED and buzzer) to your NodeMCU ESP32 board according to the specified pin configurations in the code.

2. **Software Setup**:
   - Install the required libraries:
     - DHT sensor library
     - WiFi library
     - HTTPClient library
   - Open the Arduino IDE or VS Code with the PlatformIO extension.
   - Create a new Arduino sketch and copy the provided code from the `ESP32_code` folder into the sketch.

3. **Configure Wi-Fi Credentials**: Set your Wi-Fi network SSID and password in the `ssid` and `password` variables respectively.

4. **Configure Server Host**: Set the host address of the server where you want to send the sensor data in the `host` variable.

5. **Upload the Code**: Compile and upload the code to your NodeMCU ESP32 board.

Following these steps will allow you to run the Arduino code and monitor the sensor data from your WISE Data Center Using IoT.

### Running the Web Application (SecuringWISEDataCenter)

To run the web application for the Securing WISE Data Center Using IoT project, follow these steps:

1. **Web Server Setup**: Ensure you have a web server environment set up on your machine. You can use solutions like XAMPP, WAMP, or MAMP for local development.

2. **Database Setup**: Import the provided SQL file (`wise_datacenter.sql`) from the `SecuringWISEDataCenter` folder into your MySQL database to create the necessary tables and schema.

3. **Configure Database Connection**: Open the PHP files in the `SecuringWISEDataCenter` folder and update the database connection details (host, username, password, database name) as per your local setup.

Follow these steps to set up and run the web application for your WISE Data Center project.


## Diagrams
### Data Flow Diagram-0
- **Description:** Displays the data flow of the project.
- **Location:** [Data Flow Diagram-0](DiagramsImg/DataFlowDiagram-0.jpg)

### Data Flow Diagram-1
- **Description:** Displays the data flow within the system.
- **Location:** [Data Flow Diagram-1](DiagramsImg/DataFlowDiagram-1.jpg)

### Use Case Diagram
- **Description:** Illustrates the interactions between users and the system.
- **Location:** [Use Case Diagram](DiagramsImg/UseCaseDiagram.jpg)

