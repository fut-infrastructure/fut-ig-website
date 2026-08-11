# OIO BPP competences to eHealth Practitioner competences role mapping - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OIO BPP competences to eHealth Practitioner competences role mapping**

## ConceptMap: OIO BPP competences to eHealth Practitioner competences role mapping (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/ConceptMap/oio-bpp-competences-to-practitioner-competences | *Version*:10.0.1 |
| Active as of 2019-12-02 | *Computable Name*:OIOBPPCompetencesToPractitionerCompetencesMapping |



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "oio-bpp-competences-to-practitioner-competences",
  "url" : "http://ehealth.sundhed.dk/ConceptMap/oio-bpp-competences-to-practitioner-competences",
  "version" : "10.0.1",
  "name" : "OIOBPPCompetencesToPractitionerCompetencesMapping",
  "title" : "OIO BPP competences to eHealth Practitioner competences role mapping",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-12-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "sourceUri" : "http://ehealth.sundhed.dk/vs/oio-bpp-competences",
  "targetUri" : "http://ehealth.sundhed.dk/vs/practitioner-competences",
  "group" : [{
    "source" : "http://ehealth.sundhed.dk/cs/oio-bpp-competences",
    "target" : "http://ehealth.sundhed.dk/cs/practitioner-competences",
    "element" : [{
      "code" : "urn:dk:sundhed:ehealth:competence:wound_telecourse",
      "target" : [{
        "code" : "woundTeleCourse",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "urn:dk:sundhed:ehealth:competence:wound_diploma",
      "target" : [{
        "code" : "woundDiploma",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "http://ehealth.seb.dk/roles/usersystemrole/competence_wound_telecourse/1",
      "target" : [{
        "code" : "woundTeleCourse",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "http://ehealth.seb.dk/roles/usersystemrole/competence_wound_diploma/1",
      "target" : [{
        "code" : "woundDiploma",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
