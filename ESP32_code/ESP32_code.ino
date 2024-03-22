///////////////Created by Gledis Qose//////////////////

#include <DHT.h>
#include <WiFi.h>
#include <HTTPClient.h>
#define DHTPIN 19
#define DHTTYPE DHT22
DHT dht(DHTPIN, DHTTYPE);

const char *ssid = "";
const char *password = "";
const char *host = "";

const int mq2Pin = 34;       // MQ2 sensor pin
const int rainWaterPin = 35; // Rain sensor pin
const int sw420Pin = 32;     // Vibration sensor pin
const int buzzerPin = 5;     // Buzzer pin
const int ledPin = 23;       // LED pin

void setup()
{
  Serial.begin(9600);
  pinMode(mq2Pin, INPUT);
  pinMode(sw420Pin, INPUT);
  pinMode(rainWaterPin, INPUT);
  pinMode(buzzerPin, OUTPUT);
  pinMode(ledPin, OUTPUT);
  dht.begin();

  // Connect to WiFi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop()
{
  int mq2Value = analogRead(mq2Pin);
  int sw420Value = digitalRead(sw420Pin);
  int rainWaterValue = analogRead(rainWaterPin);
  float humidity = dht.readHumidity();
  float temperature = dht.readTemperature();

  // Check if any sensor is triggered
  if (mq2Value > 200 || sw420Value == HIGH || rainWaterValue > 500 || humidity > 60 || temperature > 30)
  {
    Serial.println("Sensor triggered!");
    digitalWrite(ledPin, HIGH);
    digitalWrite(buzzerPin, HIGH);
    delay(100);
    digitalWrite(ledPin, LOW);
    digitalWrite(buzzerPin, LOW);
    delay(100);
  }

  Serial.print("connecting to ");
  Serial.println(host);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort))
  {
    Serial.println("connection failed");
    return;
  }

  // This will send the request to the server
  client.print(String("GET http://host/SecuringWISEDataCenter/test-data.php?") +
               ("&humidity=") + humidity +
               ("&temperature=") + temperature +
               ("&mq2Value=") + mq2Value +
               ("&rainWaterValue=") + rainWaterValue +
               ("&sw420Value=") + sw420Value +

               " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0)
  {
    if (millis() - timeout > 1000)
    {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  while (client.available())
  {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();
  Serial.println("closing connection");
}