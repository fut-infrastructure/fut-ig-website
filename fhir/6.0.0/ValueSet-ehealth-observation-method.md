# Observation Method - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Method**

## ValueSet: Observation Method (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/observation-method | *Version*:6.0.0 |
| Active as of 2024-10-29 | *Computable Name*:ObservationMethod |

 
Identifies how an observation is acquired. 

 **References** 

* [Observation method](StructureDefinition-ehealth-observation-method.md)

### Logical Definition (CLD)

 

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
  "id" : "ehealth-observation-method",
  "url" : "http://ehealth.sundhed.dk/vs/observation-method",
  "version" : "6.0.0",
  "name" : "ObservationMethod",
  "title" : "Observation Method",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-10-29T00:00:00+00:00",
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
  "description" : "Identifies how an observation is acquired.",
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
        "system" : "http://ehealth.sundhed.dk/cs/observation-method",
        "concept" : [
          {
            "code" : "measured",
            "display" : "Measured"
          },
          {
            "code" : "calculated",
            "display" : "Calculated"
          }
        ]
      }
    ]
  }
}

```
