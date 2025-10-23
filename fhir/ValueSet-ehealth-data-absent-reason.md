# Data Absent Reason - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Data Absent Reason**

## ValueSet: Data Absent Reason 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/data-absent-reason | *Version*:6.0.0 |
| Active as of 2023-04-13 | *Computable Name*:DataAbsentReason |

 
Used to specify why the normally expected content of the data element is missing. 

 **References** 

* [ehealth-observation](StructureDefinition-ehealth-observation.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* codesystem DataAbsentReason version 4.0.1
* [supplement DataAbsentReason v6.0.0 (CodeSystem)](CodeSystem-data-absent-reason.md)

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
  "id" : "ehealth-data-absent-reason",
  "url" : "http://ehealth.sundhed.dk/vs/data-absent-reason",
  "version" : "6.0.0",
  "name" : "DataAbsentReason",
  "title" : "Data Absent Reason",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-04-13T00:00:00+00:00",
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
  "description" : "Used to specify why the normally expected content of the data element is missing.",
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
        "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
        "concept" : [
          {
            "code" : "asked-declined",
            "display" : "Asked But Declined"
          },
          {
            "code" : "error",
            "display" : "Error"
          }
        ]
      }
    ]
  }
}

```
