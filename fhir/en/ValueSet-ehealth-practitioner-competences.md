# Practitioner Competences - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner Competences**

## ValueSet: Practitioner Competences (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/practitioner-competences | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:PractitionerCompetences |

 
Practitioner Competences 

 **References** 

* [ehealth-practitioner](StructureDefinition-ehealth-practitioner.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-practitioner-competences",
  "url" : "http://ehealth.sundhed.dk/vs/practitioner-competences",
  "version" : "11.0.1",
  "name" : "PractitionerCompetences",
  "title" : "Practitioner Competences",
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
  "description" : "Practitioner Competences",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/practitioner-competences"
    }]
  }
}

```
