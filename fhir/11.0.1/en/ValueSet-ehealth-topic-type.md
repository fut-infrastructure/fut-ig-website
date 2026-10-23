# Topic Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Topic Type**

## ValueSet: Topic Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/topic-type | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:TopicType |

 
Topic types. 

 **References** 

* [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md)
* [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-topic-type",
  "url" : "http://ehealth.sundhed.dk/vs/topic-type",
  "version" : "11.0.1",
  "name" : "TopicType",
  "title" : "Topic Type",
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
  "description" : "Topic types.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/definition-topic"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/topic-type"
    }]
  }
}

```
