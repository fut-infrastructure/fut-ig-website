# Goal Description - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Goal Description**

## ValueSet: Goal Description 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/goal-description | *Version*:11.0.2 |
| Active as of 2021-01-13 | *Computable Name*:GoalDescription |

 
Value set for goal description. 

 **References** 

* [ehealth-goal](StructureDefinition-ehealth-goal.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-goal-description",
  "url" : "http://ehealth.sundhed.dk/vs/goal-description",
  "version" : "11.0.2",
  "name" : "GoalDescription",
  "title" : "Goal Description",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-01-13T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set for goal description.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/goal-description"
    }]
  }
}

```
