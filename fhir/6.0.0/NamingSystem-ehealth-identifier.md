# eHealthIdentifier - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealthIdentifier**

## NamingSystem: eHealthIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-identifier | *Version*:6.0.0 |
| Active as of 2020-01-07 | *Computable Name*:eHealthIdentifier |

 
The eHealth Identifier is assigned to certain domain resources in the eHealth Infrastructure and used when transforming to CDA document representation. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-identifier |
| Version | 6.0.0 |
| Name | eHealthIdentifier |
| Status | active |
| Definition | The eHealth Identifier is assigned to certain domain resources in the eHealth Infrastructure and used when transforming to CDA document representation. |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: OID
  * **Value**: 1.2.208.176.7.200.1
* **Type**: URI
  * **Value**: http://ehealth.sundhed.dk/id/ehealth-identifier



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ehealth-identifier",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-identifier"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "eHealthIdentifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2020-01-07T00:00:00+00:00",
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
  "responsible" : "ehealth.sundhed.dk",
  "description" : "The eHealth Identifier is assigned to certain domain resources in the eHealth Infrastructure and used when transforming to CDA document representation.",
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
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "1.2.208.176.7.200.1"
    },
    {
      "type" : "uri",
      "value" : "http://ehealth.sundhed.dk/id/ehealth-identifier"
    }
  ]
}

```
