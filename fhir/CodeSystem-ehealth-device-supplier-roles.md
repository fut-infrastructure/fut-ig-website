# Device Supplier Roles - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Supplier Roles**

## CodeSystem: Device Supplier Roles 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-supplier-roles | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:DeviceSupplierRoles |

 
Types of device related services. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DeviceSupplierRoles](ValueSet-ehealth-device-supplier-roles.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-supplier-roles",
  "url" : "http://ehealth.sundhed.dk/cs/device-supplier-roles",
  "version" : "6.0.0",
  "name" : "DeviceSupplierRoles",
  "title" : "Device Supplier Roles",
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
  "description" : "Types of device related services.",
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
