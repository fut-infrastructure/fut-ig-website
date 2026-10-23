# Material Assignment Participant Function - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Material Assignment Participant Function**

## ValueSet: Material Assignment Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/material-assignment-participant-function | *Version*:11.0.1 |
| Active as of 2025-07-07 | *Computable Name*:MaterialAssignmentParticipantFunction |

 
The function of the participant in material assignment (performer). 

 **References** 

* [ehealth-material-communication](StructureDefinition-ehealth-material-communication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "material-assignment-participant-function",
  "url" : "http://ehealth.sundhed.dk/vs/material-assignment-participant-function",
  "version" : "11.0.1",
  "name" : "MaterialAssignmentParticipantFunction",
  "title" : "Material Assignment Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-07-07T12:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The function of the participant in material assignment (performer).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/action-participant-function",
      "concept" : [{
        "code" : "performer",
        "display" : "Performer"
      }]
    }]
  }
}

```
