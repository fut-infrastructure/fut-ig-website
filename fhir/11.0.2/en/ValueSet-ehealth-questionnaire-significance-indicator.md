# Questionnaire Item Significance Indicator - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Item Significance Indicator**

## ValueSet: Questionnaire Item Significance Indicator (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-item-significance-indicator | *Version*:11.0.2 |
| Active as of 2021-09-16 | *Computable Name*:QuestionnaireItemSignificanceIndicator |

 
Questionnaire Significance Item Indicator value set. 

 **References** 

* [Answer significance](StructureDefinition-ehealth-questionnaire-answerSignificance.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-significance-indicator",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-item-significance-indicator",
  "version" : "11.0.2",
  "name" : "QuestionnaireItemSignificanceIndicator",
  "title" : "Questionnaire Item Significance Indicator",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-09-16",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Questionnaire Significance Item Indicator value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator"
    }]
  }
}

```
