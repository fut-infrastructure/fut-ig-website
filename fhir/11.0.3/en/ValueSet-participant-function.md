# Participant Function - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Participant Function**

## ValueSet: Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/participant-function | *Version*:11.0.3 |
| Active as of 2024-09-02 | *Computable Name*:ParticipantFunction |

 
The function of the participant (primay / secondary contact). 

 **References** 

* [ehealth-careplan](StructureDefinition-ehealth-careplan.md)
* [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "participant-function",
  "url" : "http://ehealth.sundhed.dk/vs/participant-function",
  "version" : "11.0.3",
  "name" : "ParticipantFunction",
  "title" : "Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The function of the participant (primay / secondary contact).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/participant-function"
    }]
  }
}

```
