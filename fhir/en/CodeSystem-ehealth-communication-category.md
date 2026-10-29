# Communication Category - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Communication Category**

## CodeSystem: Communication Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/communication-category | *Version*:11.0.2 |
| Active as of 2019-09-27 | *Computable Name*:CommunicationCategory |

 
Communication category 

This Code system is referenced in the definition of the following value sets:

* [Communication Category](ValueSet-ehealth-communication-category.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-communication-category",
  "url" : "http://ehealth.sundhed.dk/cs/communication-category",
  "version" : "11.0.2",
  "name" : "CommunicationCategory",
  "title" : "Communication Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-09-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Communication category",
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
    "code" : "annotation",
    "display" : "annotation",
    "definition" : "Annotation",
    "designation" : [{
      "language" : "da",
      "value" : "Annotering"
    }]
  },
  {
    "code" : "note",
    "display" : "note",
    "definition" : "Note",
    "designation" : [{
      "language" : "da",
      "value" : "Note"
    }]
  }]
}

```
