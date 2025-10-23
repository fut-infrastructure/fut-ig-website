# Device Use Reason - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Use Reason**

## CodeSystem: Device Use Reason 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-use-reason | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:DeviceUseReason |

 
Device use reasons. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceUseReason](ValueSet-ehealth-device-use-reason.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-use-reason",
  "url" : "http://ehealth.sundhed.dk/cs/device-use-reason",
  "version" : "6.0.0",
  "name" : "DeviceUseReason",
  "title" : "Device Use Reason",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Device use reasons.",
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
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    }
  ]
}

```
