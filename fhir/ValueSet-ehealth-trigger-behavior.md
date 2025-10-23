# Trigger Behavior - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trigger Behavior**

## ValueSet: Trigger Behavior (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/trigger-behavior | *Version*:6.0.0 |
| Active as of 2021-10-22 | *Computable Name*:TriggerBehavior |

 
Trigger behavior 

 **References** 

* [Action Trigger](StructureDefinition-ehealth-actionTrigger.md)

### Logical Definition (CLD)

 

### Expansion

This value set contains 2 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-trigger-behavior",
  "url" : "http://ehealth.sundhed.dk/vs/trigger-behavior",
  "version" : "6.0.0",
  "name" : "TriggerBehavior",
  "title" : "Trigger Behavior",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-22T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Trigger behavior",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "compose" : {
    "include" : [
      {
        "system" : "http://hl7.org/fhir/action-selection-behavior",
        "concept" : [
          {
            "code" : "one-or-more",
            "display" : "One Or More"
          },
          {
            "code" : "all",
            "display" : "All"
          }
        ]
      }
    ]
  }
}

```
