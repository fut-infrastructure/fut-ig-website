# Device calibration actor - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device calibration actor**

## CodeSystem: Device calibration actor 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-calibration-actor | *Version*:6.0.0 |
| Active as of 2019-09-16 | *Computable Name*:DeviceCalibrationActor |

 
Device calibration actor. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceCalibrationActor](ValueSet-ehealth-device-calibration-actor.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-calibration-actor",
  "url" : "http://ehealth.sundhed.dk/cs/device-calibration-actor",
  "version" : "6.0.0",
  "name" : "DeviceCalibrationActor",
  "title" : "Device calibration actor",
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
  "description" : "Device calibration actor.",
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
      "code" : "PATIENT",
      "display" : "Calibrated by patient",
      "definition" : "Calibrated by patient",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kalibreret af patient/borger"
        }
      ]
    },
    {
      "code" : "SSLPATIENT",
      "display" : "Calibrated by SSL provider at patient residence",
      "definition" : "Calibrated by SSL provider at patient residence",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kalibreret af Service, Support og Logistik-leverandør hos patient/borger"
        }
      ]
    },
    {
      "code" : "SSL",
      "display" : "Calibrated by SSL at SSL supplier",
      "definition" : "Calibrated by SSL at SSL supplier",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kalibreret af Service, Support og Logistik-leverandør hos leverandøren"
        }
      ]
    }
  ]
}

```
