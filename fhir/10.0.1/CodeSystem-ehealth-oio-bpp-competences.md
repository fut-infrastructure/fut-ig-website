# OIO-BPP Competences - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OIO-BPP Competences**

## CodeSystem: OIO-BPP Competences 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/oio-bpp-competences | *Version*:10.0.1 |
| Active as of 2019-12-02 | *Computable Name*:OIOBPPCompetences |

 
OIO BPP Competences 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OIOBPPCompetences](ValueSet-ehealth-oio-bpp-competences.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-oio-bpp-competences",
  "url" : "http://ehealth.sundhed.dk/cs/oio-bpp-competences",
  "version" : "10.0.1",
  "name" : "OIOBPPCompetences",
  "title" : "OIO-BPP Competences",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "OIO BPP Competences",
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
    "code" : "urn:dk:sundhed:ehealth:competence:wound_telecourse",
    "display" : "Wound Telecourse",
    "definition" : "Kvalificeret til at anvende telemedicinsk sårvurdering via gennemført telemedicinsk sårkursus.",
    "designation" : [{
      "language" : "da",
      "value" : "Telekursus i sårvurdering"
    }]
  },
  {
    "code" : "urn:dk:sundhed:ehealth:competence:wound_diploma",
    "display" : "Wound Diploma",
    "definition" : "Har gennemført diplommodul eller længerevarende efteruddannelse i sår behandling.",
    "designation" : [{
      "language" : "da",
      "value" : "Diplomuddannelse i sårbehandling"
    }]
  },
  {
    "code" : "http://ehealth.seb.dk/roles/usersystemrole/competence_wound_telecourse/1",
    "display" : "Wound Telecourse",
    "definition" : "Kvalificeret til at anvende telemedicinsk sårvurdering via gennemført telemedicinsk sårkursus.",
    "designation" : [{
      "language" : "da",
      "value" : "Telekursus i sårvurdering"
    }]
  },
  {
    "code" : "http://ehealth.seb.dk/roles/usersystemrole/competence_wound_diploma/1",
    "display" : "Wound Diploma",
    "definition" : "Har gennemført diplommodul eller længerevarende efteruddannelse i sår behandling",
    "designation" : [{
      "language" : "da",
      "value" : "Diplomuddannelse i sårbehandling"
    }]
  }]
}

```
