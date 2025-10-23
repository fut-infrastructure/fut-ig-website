# Device calibration period - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device calibration period**

## CodeSystem: Device calibration period 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-calibration-period | *Version*:6.0.0 |
| Active as of 2019-09-16 | *Computable Name*:DeviceCalibrationPeriod |

 
Device calibration period. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceCalibrationPeriod](ValueSet-ehealth-device-calibration-period.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-calibration-period",
  "url" : "http://ehealth.sundhed.dk/cs/device-calibration-period",
  "version" : "6.0.0",
  "name" : "DeviceCalibrationPeriod",
  "title" : "Device calibration period",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-09-16T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Device calibration period.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "7D",
      "display" : "7 days",
      "definition" : "7 days",
      "designation" : [
        {
          "language" : "da",
          "value" : "7 dage"
        }
      ]
    },
    {
      "code" : "30D",
      "display" : "30 days",
      "definition" : "30 days",
      "designation" : [
        {
          "language" : "da",
          "value" : "30 dage"
        }
      ]
    },
    {
      "code" : "1Y",
      "display" : "1 year",
      "definition" : "1 year",
      "designation" : [
        {
          "language" : "da",
          "value" : "1 år"
        }
      ]
    }
  ]
}

```
