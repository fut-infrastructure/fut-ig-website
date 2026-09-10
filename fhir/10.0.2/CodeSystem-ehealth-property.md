# eHealth Property - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Property**

## CodeSystem: eHealth Property 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-property | *Version*:10.0.2 |
| Active as of 2025-03-05 | *Computable Name*:eHealthProperty |

 
Codes used to identity specific properties on codes in eHealth CodeSystems. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealth Property](ValueSet-ehealth-property.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-property",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-property",
  "version" : "10.0.2",
  "name" : "eHealthProperty",
  "title" : "eHealth Property",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-05T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Codes used to identity specific properties on codes in eHealth CodeSystems.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "phmr-unit",
    "display" : "PHMR Unit",
    "definition" : "The unit to be used when transforming Observations to PHMR Measurement."
  },
  {
    "code" : "icd11-foundation-entity-id",
    "display" : "ICD11 Foundation Entity ID",
    "definition" : "The identifier of the ICD11 Foundation Entity that corresponds to the code in an ICD11 CodeSystem. This property is used to link the ICD11 CodeSystem to the ICD11 Foundation, which contains the full hierarchy and relationships of ICD11 concepts."
  }]
}

```
