# Ydernummer - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ydernummer**

## NamingSystem: Ydernummer 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/ydernummer | *Version*:6.0.0 |
| Active as of 1990-01-01 | *Computable Name*:Ydernummer |

 
The Danish Health Authority and Danish Regions can identify doctors' names etc. via the provider number ("ydernummer"). The different groups of doctors (general practitioners, ear specialists, eye specialists, etc.) have their own provider number range. Multiple doctors in the same practice will often have the same provider number. Only doctors without a provider number use the special out-of-hours doctor numbers.Provider numbers can change over time. A provider number may be assigned to a doctor who quits or retires, after which the provider number becomes available and can later be assigned to another doctor. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/ydernummer |
| Version | 6.0.0 |
| Name | Ydernummer |
| Status | active |
| Definition | The Danish Health Authority and Danish Regions can identify doctors' names etc. via the provider number ("ydernummer"). The different groups of doctors (general practitioners, ear specialists, eye specialists, etc.) have their own provider number range. Multiple doctors in the same practice will often have the same provider number. Only doctors without a provider number use the special out-of-hours doctor numbers.Provider numbers can change over time. A provider number may be assigned to a doctor who quits or retires, after which the provider number becomes available and can later be assigned to another doctor. |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: OID
  * **Value**: 1.2.208.176.1.4
* **Type**: URI
  * **Value**: urn:oid:1.2.208.176.1.4



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ydernummer",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/ydernummer"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "Ydernummer",
  "status" : "active",
  "kind" : "identifier",
  "date" : "1990-01-01T00:00:00+00:00",
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
  "responsible" : "CPR-kontoret",
  "type" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "PRN",
        "display" : "Provider number"
      }
    ]
  },
  "description" : "The Danish Health Authority and Danish Regions can identify doctors' names etc. via the provider number (\"ydernummer\"). The different groups of doctors (general practitioners, ear specialists, eye specialists, etc.) have their own provider number range. Multiple doctors in the same practice will often have the same provider number. Only doctors without a provider number use the special out-of-hours doctor numbers.Provider numbers can change over time. A provider number may be assigned to a doctor who quits or retires, after which the provider number becomes available and can later be assigned to another doctor.",
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
      "value" : "1.2.208.176.1.4"
    },
    {
      "type" : "uri",
      "value" : "urn:oid:1.2.208.176.1.4"
    }
  ]
}

```
