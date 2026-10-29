# Condition Qualification for Tele Wound - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Condition Qualification for Tele Wound**

## ValueSet: Condition Qualification for Tele Wound 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/condition-qualification-tele-wound | *Version*:11.0.2 |
| Active as of 2026-01-19 | *Computable Name*:conditionQualificationTeleWound |

 
Value set of condition qualifications for tele wound domain. 

 **References** 

* Included into [Condition Qualification](ValueSet-vs-condition-qualification.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "condition-qualification-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/condition-qualification-tele-wound",
  "version" : "11.0.2",
  "name" : "conditionQualificationTeleWound",
  "title" : "Condition Qualification for Tele Wound",
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
  "description" : "Value set of condition qualifications for tele wound domain.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://rn.dk/telemedicinsk-saarvurdering/fosa/terminologi/saar-typer"
    }]
  }
}

```
