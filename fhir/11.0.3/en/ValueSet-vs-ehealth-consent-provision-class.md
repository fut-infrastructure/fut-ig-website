# Consent Provision Class - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Provision Class**

## ValueSet: Consent Provision Class 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-consent-provision-class | *Version*:11.0.3 |
| Active as of 2025-12-16 | *Computable Name*:ConsentProvisionClass |

 
Value set of provision class for consent. 

 **References** 

* [ehealth-consent](StructureDefinition-ehealth-consent.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-ehealth-consent-provision-class",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-consent-provision-class",
  "version" : "11.0.3",
  "name" : "ConsentProvisionClass",
  "title" : "Consent Provision Class",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of provision class for consent.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/resource-types",
      "version" : "4.0.1",
      "concept" : [{
        "code" : "ClinicalImpression"
      }]
    }]
  }
}

```
