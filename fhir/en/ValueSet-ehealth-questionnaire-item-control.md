# Questionnaire Item Control - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Item Control**

## ValueSet: Questionnaire Item Control (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-item-control | *Version*:11.0.1 |
| Active as of 2021-09-10 | *Computable Name*:QuestionnaireItemControl |

 
Questionnaire Item Control value set. 

 **References** 

* [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-item-control",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-item-control",
  "version" : "11.0.1",
  "name" : "QuestionnaireItemControl",
  "title" : "Questionnaire Item Control",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-09-10",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Questionnaire Item Control value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/questionnaire-item-control",
      "version" : "4.0.1",
      "concept" : [{
        "code" : "drop-down",
        "display" : "Drop down"
      },
      {
        "code" : "radio-button",
        "display" : "Radio Button"
      },
      {
        "code" : "check-box",
        "display" : "Check-box"
      },
      {
        "code" : "slider",
        "display" : "Slider"
      }]
    }]
  }
}

```
