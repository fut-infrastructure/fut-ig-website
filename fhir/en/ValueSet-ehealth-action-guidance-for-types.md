# Action guidance For Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action guidance For Types**

## ValueSet: Action guidance For Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/action-guidance-for-types | *Version*:11.0.3 |
| Active as of 2021-10-20 | *Computable Name*:ActionGuidanceForTypes |

 
Action guidance for types 

 **References** 

* [Ehealth action guidance for](StructureDefinition-ehealth-actionguidance-for.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-action-guidance-for-types",
  "url" : "http://ehealth.sundhed.dk/vs/action-guidance-for-types",
  "version" : "11.0.3",
  "name" : "ActionGuidanceForTypes",
  "title" : "Action guidance For Types",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-20T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Action guidance for types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/resource-types",
      "version" : "4.0.1",
      "concept" : [{
        "code" : "Questionnaire",
        "display" : "Questionnaire",
        "designation" : [{
          "language" : "da",
          "value" : "Spørgeskema"
        }]
      }]
    }]
  }
}

```
