# Questionnaire Elements - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Elements**

## ValueSet: Questionnaire Elements 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-elements | *Version*:11.0.3 |
| Active as of 2023-09-08 | *Computable Name*:Questionnaire_Elements |

 
Types of questionnaire elements; e.g. group, question, answer. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-elements",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-elements",
  "version" : "11.0.3",
  "name" : "Questionnaire_Elements",
  "title" : "Questionnaire Elements",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-09-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Types of questionnaire elements; e.g. group, question, answer.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/questionnaire-elements"
    }]
  }
}

```
