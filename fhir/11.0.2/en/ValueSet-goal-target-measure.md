# Goal Target Measure - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Goal Target Measure**

## ValueSet: Goal Target Measure 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/goal-target-measure | *Version*:11.0.2 |
| Active as of 2021-01-13 | *Computable Name*:GoalTargetMeasure |

 
Value set for goal target measure. 

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
  "id" : "goal-target-measure",
  "url" : "http://ehealth.sundhed.dk/vs/goal-target-measure",
  "version" : "11.0.2",
  "name" : "GoalTargetMeasure",
  "title" : "Goal Target Measure",
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
  "description" : "Value set for goal target measure.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
    }]
  }
}

```
