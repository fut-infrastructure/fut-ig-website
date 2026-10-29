# ClinicalImpression Decision Codes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Decision Codes**

## ValueSet: ClinicalImpression Decision Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/clinicalimpression-decision-codes | *Version*:11.0.3 |
| Active as of 2019-09-23 | *Computable Name*:ClinicalImpressionDecisionCodes |

 
Value set of clinical impression decision codes. 

 **References** 

* [Decision](StructureDefinition-ehealth-clinicalimpression-decision.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-clinicalimpression-decision-codes",
  "url" : "http://ehealth.sundhed.dk/vs/clinicalimpression-decision-codes",
  "version" : "11.0.3",
  "name" : "ClinicalImpressionDecisionCodes",
  "title" : "ClinicalImpression Decision Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-09-23T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of clinical impression decision codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-decision-codes"
    }]
  }
}

```
