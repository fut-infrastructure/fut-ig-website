# Trigger Behavior - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trigger Behavior**

## ValueSet: Trigger Behavior (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/trigger-behavior | *Version*:11.0.0 |
| Active as of 2021-10-22 | *Computable Name*:TriggerBehavior |

 
Trigger behavior 

 **References** 

* [Action Trigger](StructureDefinition-ehealth-actionTrigger.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-trigger-behavior",
  "url" : "http://ehealth.sundhed.dk/vs/trigger-behavior",
  "version" : "11.0.0",
  "name" : "TriggerBehavior",
  "title" : "Trigger Behavior",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-22T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Trigger behavior",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/action-selection-behavior",
      "concept" : [{
        "code" : "one-or-more"
      },
      {
        "code" : "all"
      }]
    }]
  }
}

```
