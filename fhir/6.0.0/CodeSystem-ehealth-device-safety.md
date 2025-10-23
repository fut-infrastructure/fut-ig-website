# Device safety - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device safety**

## CodeSystem: Device safety 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-safety | *Version*:6.0.0 |
| Active as of 2019-09-16 | *Computable Name*:DeviceSafety |

 
Device safety 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceSafety](ValueSet-ehealth-device-safety.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-safety",
  "url" : "http://ehealth.sundhed.dk/cs/device-safety",
  "version" : "6.0.0",
  "name" : "DeviceSafety",
  "title" : "Device safety",
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
  "description" : "Device safety",
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
