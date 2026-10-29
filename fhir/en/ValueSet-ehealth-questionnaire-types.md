# Questionnaire Types - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Types**

## ValueSet: Questionnaire Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-types | *Version*:11.0.2 |
| Active as of 2019-02-08 | *Computable Name*:QuestionnaireTypes |

 
Questionnaire type value set. 

 **References** 

* [Questionnaire type](StructureDefinition-ehealth-questionnaire-type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-types",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-types",
  "version" : "11.0.2",
  "name" : "QuestionnaireTypes",
  "title" : "Questionnaire Types",
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
  "description" : "Questionnaire type value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/questionnaire-types"
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "273586006"
      }]
    }]
  }
}

```
