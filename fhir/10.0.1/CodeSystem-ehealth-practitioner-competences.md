# Practitioner Competences - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner Competences**

## CodeSystem: Practitioner Competences 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/practitioner-competences | *Version*:10.0.1 |
| Active as of 2019-09-19 | *Computable Name*:PractitionerCompetences |

 
Practitioner Competences 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PractitionerCompetences](ValueSet-ehealth-practitioner-competences.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-practitioner-competences",
  "url" : "http://ehealth.sundhed.dk/cs/practitioner-competences",
  "version" : "10.0.1",
  "name" : "PractitionerCompetences",
  "title" : "Practitioner Competences",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-09-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Practitioner Competences",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "woundTeleCourse",
    "display" : "Wound TeleCourse",
    "designation" : [{
      "language" : "da",
      "value" : "Telekursus i sårvurdering"
    }]
  },
  {
    "code" : "woundDiploma",
    "display" : "Wound Diploma",
    "designation" : [{
      "language" : "da",
      "value" : "Diplomuddannelse i sårbehandling"
    }]
  }]
}

```
