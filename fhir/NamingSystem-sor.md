# Sundhedsvæsenets Organisationsregister (SOR) - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sundhedsvæsenets Organisationsregister (SOR)**

## NamingSystem: Sundhedsvæsenets Organisationsregister (SOR) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/sor | *Version*:6.0.0 |
| Active as of 2017-01-01 | *Computable Name*:Sundhedsvæsenets Organisationsregister (SOR) |

 
SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/sor |
| Version | 6.0.0 |
| Name | Sundhedsvæsenets Organisationsregister (SOR) |
| Status | active |
| Definition | SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former. |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: OID
  * **Value**: 1.2.208.176.1.1
* **Type**: URI
  * **Value**: urn:oid:1.2.208.176.1.1



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "sor",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/sor"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "Sundhedsvæsenets Organisationsregister (SOR)",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2017-01-01T00:00:00+00:00",
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
  "responsible" : "The Health Service's Organizational Register was developed in the National Board of Health in 2006-2007 in cooperation with the regions and MedCom",
  "type" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "PRN",
        "display" : "Provider number"
      }
    ]
  },
  "description" : "SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former.",
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
      "value" : "1.2.208.176.1.1"
    },
    {
      "type" : "uri",
      "value" : "urn:oid:1.2.208.176.1.1"
    }
  ]
}

```
