# Goal Description - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Goal Description**

## ValueSet: Goal Description 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/goal-description | *Version*:6.0.0 |
| Active as of 2021-01-13 | *Computable Name*:GoalDescription |

 
Value set for goal description. 

 **References** 

* [ehealth-goal](StructureDefinition-ehealth-goal.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/goal-description`](CodeSystem-ehealth-goal-description.md)version 📦6.0.0

 

### Expansion

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
  "id" : "ehealth-goal-description",
  "url" : "http://ehealth.sundhed.dk/vs/goal-description",
  "version" : "6.0.0",
  "name" : "GoalDescription",
  "title" : "Goal Description",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-01-13T00:00:00+00:00",
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
  "description" : "Value set for goal description.",
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
        "system" : "http://ehealth.sundhed.dk/cs/goal-description"
      }
    ]
  }
}

```
