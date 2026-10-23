# Consent Policy - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent Policy**

## ValueSet: Consent Policy 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-consent-policy | *Version*:11.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ConsentPolicy |

 
Value set of policy for consent. 

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
  "id" : "vs-ehealth-consent-policy",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-consent-policy",
  "version" : "11.0.1",
  "name" : "ConsentPolicy",
  "title" : "Consent Policy",
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
  "description" : "Value set of policy for consent.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-consent-policy"
    }]
  }
}

```
