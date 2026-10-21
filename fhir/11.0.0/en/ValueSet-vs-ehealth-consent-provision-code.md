# Consent Provision Code - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Provision Code**

## ValueSet: Consent Provision Code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-consent-provision-code | *Version*:11.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ConsentProvisionCode |

 
Value set of provision codes for consent. 

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
  "id" : "vs-ehealth-consent-provision-code",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-consent-provision-code",
  "version" : "11.0.0",
  "name" : "ConsentProvisionCode",
  "title" : "Consent Provision Code",
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
  "description" : "Value set of provision codes for consent.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-codes",
      "concept" : [{
        "code" : "TriagingResult"
      }]
    }]
  }
}

```
