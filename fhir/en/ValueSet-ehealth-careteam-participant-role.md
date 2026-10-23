# CareTeam Participant Role - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareTeam Participant Role**

## ValueSet: CareTeam Participant Role (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/careteam-participant-role | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:CareTeamParticipantRole |

 
Care Team Participant Role. 

 **References** 

* [ehealth-careteam](StructureDefinition-ehealth-careteam.md)
* [ehealth-practitionerrole](StructureDefinition-ehealth-practitionerrole.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-careteam-participant-role",
  "url" : "http://ehealth.sundhed.dk/vs/careteam-participant-role",
  "version" : "11.0.1",
  "name" : "CareTeamParticipantRole",
  "title" : "CareTeam Participant Role",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Care Team Participant Role.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/careteam-participant-role"
    }]
  }
}

```
