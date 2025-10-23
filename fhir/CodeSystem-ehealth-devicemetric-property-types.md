# DeviceMetric Property Types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceMetric Property Types**

## CodeSystem: DeviceMetric Property Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/devicemetric-property-types | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:DeviceMetricPropertyTypes |

 
Types of properties which can be attributed to a Device. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceMetricPropertyTypes](ValueSet-ehealth-devicemetric-property-types.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-devicemetric-property-types",
  "url" : "http://ehealth.sundhed.dk/cs/devicemetric-property-types",
  "version" : "6.0.0",
  "name" : "DeviceMetricPropertyTypes",
  "title" : "DeviceMetric Property Types",
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
  "description" : "Types of properties which can be attributed to a Device.",
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
    },
    {
      "code" : "buttonSize",
      "display" : "Size of button on device",
      "definition" : "Size of button on device",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udstyrets knapstørrelse"
        }
      ]
    }
  ]
}

```
