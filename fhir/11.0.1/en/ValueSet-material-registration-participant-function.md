# Material Registration Participant Function - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Material Registration Participant Function**

## ValueSet: Material Registration Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/material-registration-participant-function | *Version*:11.0.1 |
| Active as of 2025-07-07 | *Computable Name*:MaterialRegistrationParticipantFunction |

 
The function of the participant in material registration (author / editor). 

 **References** 

* [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "material-registration-participant-function",
  "url" : "http://ehealth.sundhed.dk/vs/material-registration-participant-function",
  "version" : "11.0.1",
  "name" : "MaterialRegistrationParticipantFunction",
  "title" : "Material Registration Participant Function",
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
  "description" : "The function of the participant in material registration (author / editor).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/contributor-type",
      "concept" : [{
        "code" : "author",
        "display" : "Author"
      },
      {
        "code" : "editor",
        "display" : "Editor"
      }]
    }]
  }
}

```
