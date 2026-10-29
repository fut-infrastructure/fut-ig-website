# QuestionnaireRecommendation - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireRecommendation**

## ValueSet: QuestionnaireRecommendation (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-recommendation | *Version*:11.0.2 |
| Active as of 2019-02-08 | *Computable Name*:QuestionnaireRecommendation |

 
Value set of questionnaire recommendation codes. 

 **References** 

* [Questionnaire recommendation](StructureDefinition-ehealth-questionnaire-recommendation.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-recommendation",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-recommendation",
  "version" : "11.0.2",
  "name" : "QuestionnaireRecommendation",
  "title" : "QuestionnaireRecommendation",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of questionnaire recommendation codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/questionnaire-recommendation"
    }]
  }
}

```
