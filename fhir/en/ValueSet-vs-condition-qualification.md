# Condition Qualification - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Condition Qualification**

## ValueSet: Condition Qualification 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/condition-qualification | *Version*:11.0.3 |
| Active as of 2026-01-19 | *Computable Name*:conditionQualification |

 
Value set of condition qualifications 

 **References** 

* [Code Qualification](StructureDefinition-ehealth-code-qualification.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-condition-qualification",
  "url" : "http://ehealth.sundhed.dk/vs/condition-qualification",
  "version" : "11.0.3",
  "name" : "conditionQualification",
  "title" : "Condition Qualification",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of condition qualifications",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/condition-qualification-tele-wound"]
    }]
  }
}

```
