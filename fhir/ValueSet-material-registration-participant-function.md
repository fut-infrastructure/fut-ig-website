# Material Registration Participant Function - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Material Registration Participant Function**

## ValueSet: Material Registration Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/material-registration-participant-function | *Version*:6.0.0 |
| Active as of 2025-07-07 | *Computable Name*:MaterialRegistrationParticipantFunction |

 
The function of the participant in material registration (author / editor). 

 **References** 

* [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md)

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
  "id" : "material-registration-participant-function",
  "url" : "http://ehealth.sundhed.dk/vs/material-registration-participant-function",
  "version" : "6.0.0",
  "name" : "MaterialRegistrationParticipantFunction",
  "title" : "Material Registration Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-07-07T12:00:00+00:00",
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
  "description" : "The function of the participant in material registration (author / editor).",
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
        "system" : "http://hl7.org/fhir/contributor-type",
        "concept" : [
          {
            "code" : "author",
            "display" : "Author"
          },
          {
            "code" : "editor",
            "display" : "Editor"
          }
        ]
      }
    ]
  }
}

```
