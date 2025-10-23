# Goal Target Measure - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Goal Target Measure**

## ValueSet: Goal Target Measure 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/goal-target-measure | *Version*:6.0.0 |
| Active as of 2021-01-13 | *Computable Name*:GoalTargetMeasure |

 
Value set for goal target measure. 

 **References** 

* [ehealth-goal](StructureDefinition-ehealth-goal.md)

### Logical Definition (CLD)

* Import all the codes that are contained in [Observation Codes](ValueSet-ehealth-observation-codes.md)

 

### Expansion

Expansion from tx.fhir.org based on:

* Loinc v2.81
* [codesystem NPU DK v6.0.0 (CodeSystem)](CodeSystem-1.2.208.176.2.1--20190829.md)
* [codesystem Sundhedsvæsenets klassifikationssystem (SKS) v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.176.2.4.md)
* [codesystem MedCom Measurement CodeSystem v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.8.md)
* [valueset Observation Codes v6.0.0 (ValueSet)](ValueSet-ehealth-observation-codes.md)

This value set contains 25 concepts

**Additional Designations and Language Displays**

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
  "id" : "goal-target-measure",
  "url" : "http://ehealth.sundhed.dk/vs/goal-target-measure",
  "version" : "6.0.0",
  "name" : "GoalTargetMeasure",
  "title" : "Goal Target Measure",
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
  "description" : "Value set for goal target measure.",
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
        "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
      }
    ]
  }
}

```
